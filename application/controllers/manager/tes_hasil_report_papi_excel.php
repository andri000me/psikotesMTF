<?php
$filename ="excelreport.xls";
$contents = "testdata1 \t testdata2 \t testdata3 \t \n";
header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename='.$filename);
echo $contents;
$mysqli = new mysqli("localhost","root", "","celestia_dbmtfpsikotes");
if(mysqli_connect_errno()) {
    printf("Connect failed: %s\n",mysql_connect_error());
    exit();
}

$user_id = $_POST['user_id'];
$tesuser_tes_id = $_POST['tesuser_tes_id'];

$sql = "
        SELECT  cbt_user.user_firstname as name,
                cbt_tes.tes_nama as nama,
                cbt_tes_user.tesuser_id as user_id,
                cbt_tes_soal.tessoal_jawaban as soal,
                cbt_jawaban.jawaban_benar as jawaban,
                cbt_soal.soal_nomor as nomor_soal,
                cbt_tes.tes_begin_time as tanggal_tes
        FROM 
                cbt_tes_user,
                cbt_user,
                cbt_tes,
                cbt_tes_soal,
                cbt_jawaban,
                cbt_soal
        WHERE   cbt_user.user_id = cbt_tes_user.tesuser_user_id
        AND     cbt_tes_user.tesuser_tes_id = cbt_tes.tes_id
        AND     cbt_tes_soal.tessoal_tesuser_id = cbt_tes_user. tesuser_id
        AND     cbt_jawaban.jawaban_id = cbt_tes_soal.tessoal_jawaban_id
        AND     cbt_soal.soal_id = cbt_tes_soal.tessoal_soal_id
        AND     cbt_user.user_id = ".$user_id."
        AND     cbt_tes.tes_id = ".$tesuser_tes_id."
        ORDER BY
                cbt_jawaban.jawaban_benar";

    $A = 0;
    $B = 0;
    $C = 0;
    $D = 0;
    $E = 0;
    $F = 0;
    $G = 0;
    $I = 0;
    $K = 0;
    $L = 0;
    $N = 0;
    $O = 0;
    $P = 0;
    $R = 0;
    $S = 0;
    $T = 0;
    $V = 0;
    $W = 0;
    $X = 0;
    $Z = 0;
    if($result = mysqli_query($mysqli, $sql)){
        while($row = mysqli_fetch_array($result)){
            // echo $row['jawaban'];
            if($row['jawaban'] == 'A'){
                $A = $A+1;
            }else if($row['jawaban'] == 'B'){
                $B = $B+1;
            }else if($row['jawaban'] == 'C'){
                $C = $C+1;
            }else if($row['jawaban'] == 'D'){
                $D = $D+1;
            }else if($row['jawaban'] == 'E'){
                $E = $E+1;
            }else if($row['jawaban'] == 'F'){
                $F = $F+1;
            }else if($row['jawaban'] == 'G'){
                $G = $G+1;
            }else if($row['jawaban'] == 'I'){
                $I = $I+1;
            }else if($row['jawaban'] == 'K'){
                $K = $K+1;
            }else if($row['jawaban'] == 'L'){
                $L = $L+1;
            }else if($row['jawaban'] == 'N'){
                $N = $N+1;
            }else if($row['jawaban'] == 'O'){
                $O = $O+1;
            }else if($row['jawaban'] == 'P'){
                $P = $P+1;
            }else if($row['jawaban'] == 'R'){
                $R = $R+1;
            }else if($row['jawaban'] == 'S'){
                $S = $S+1;
            }else if($row['jawaban'] == 'T'){
                $T = $T+1;
            }else if($row['jawaban'] == 'V'){
                $V = $V+1;
            }else if($row['jawaban'] == 'W'){
                $W = $W+1;
            }else if($row['jawaban'] == 'X'){
                $X = $X+1;
            }else if($row['jawaban'] == 'Z'){
                $Z = $Z+1;
            }

            $name = $row['name'];
            $tanggal_tes = $row['tanggal_tes'];
        }
    }
                

?>
<html>
<head>
<title>MBTI</title>
<meta http-equiv="content-type" content="application/xhtml+xml; charset=TIS-620" />
</head>

<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table style="border-collapse: collapse;overflow:wrap; font-size:10pt; table-layout: fixed">

        <tr>
            <td></td>
            <td width="50" colspan="2"><h2>Diagram PAPI</h2></td>
            <td width="25"></td>
            <td colspan="2" style="text-align: left;">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
        </tr>

        <tr>
            <td width="50">&nbsp;</td>
            <td width="30" colspan="2"></td>
            <td width="25"></td>
            <td>&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
        </tr>

    <thead>
        <tr>
            <td width="30">&nbsp;</td>
            <td width="50" colspan="2">No Test</td>
            <td width="25">:</td>
            <td colspan="2" style="text-align: left;">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
        </tr>
        <tr>
            <td width="50">&nbsp;</td>
            <td width="30" colspan="2">Nama</td>
            <td width="25">:</td>
            <td colspan="20" style="text-align: left;"><?php echo $name;?></td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
        </tr>
        <tr>
            <td width="50">&nbsp;</td>
            <td width="30" colspan="2">Tanggal</td>
            <td width="25">:</td>
            <td colspan="20" style="text-align: left;"><?php echo $tanggal_tes;?></td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
        </tr>
        <tr>
            <td width="50">&nbsp;</td>
            <td width="30" colspan="2"></td>
            <td width="25"></td>
            <td>&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
            <td width="80">&nbsp;</td>
        </tr>
    </thead>

    <!-- WORK DIRECTION	-->
    <tr class="tableWorkDirectionTr">
        <td width="10">&nbsp;</td>
        <td  style="border: 1px solid black; border-width: thin;" colspan="2">&nbsp;<strong>ARAH KERJA</strong></td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
        <td  width="25"style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;">0</td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;">1</td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;">2</td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;">3</td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;">4</td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;">5</td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;">6</td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;">7</td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;">8</td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;">9</td>
    </tr>
    <tr class="tableWorkDirectionTr">
        <td width="10">&nbsp;</td>
        <td  style="border: 1px solid black; border-width: thin;" colspan="2" >&nbsp;&nbsp;&nbsp;&nbsp;Menyelesaikan tugas secara pribadi</td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;">N</td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php echo $N;?></td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($N == 0){ echo 'X';}else{'&nbsp;';} ?></td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($N == 1){ echo 'X';}else{'&nbsp;';} ?></td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($N == 2){ echo 'X';}else{'&nbsp;';} ?></td>
        <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($N == 3){ echo 'X';}else{'&nbsp;';} ?></td>
        <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($N == 4){ echo 'X';}else{'&nbsp;';} ?></td>
        <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($N == 5){ echo 'X';}else{'&nbsp;';} ?></td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($N == 6){ echo 'X';}else{'&nbsp;';} ?></td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($N == 7){ echo 'X';}else{'&nbsp;';} ?></td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($N == 8){ echo 'X';}else{'&nbsp;';} ?></td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($N == 9){ echo 'X';}else{'&nbsp;';} ?></td>
    </tr>
    <tr class="tableWorkDirectionTr">
        <td width="10">&nbsp;</td>
        <td style="border: 1px solid black; border-width: thin;" colspan="2" >&nbsp;&nbsp;&nbsp;&nbsp;Peranan sebagai pekerja keras</td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;">G</td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php echo $G;?></td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($G == 0){ echo 'X';}else{'&nbsp;';} ?></td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($G == 1){ echo 'X';}else{'&nbsp;';} ?></td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($G == 2){ echo 'X';}else{'&nbsp;';} ?></td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($G == 3){ echo 'X';}else{'&nbsp;';} ?></td>
        <td  style="background-color: #50dfb3; text-align: center; border: 1px solid black; border-width: thin;"><?php  if($A == 4){ echo 'X';}else{'&nbsp;';} ?></td>
        <td  style="background-color: #50dfb3; text-align: center; border: 1px solid black; border-width: thin;"><?php  if($A == 5){ echo 'X';}else{'&nbsp;';} ?></td>
        <td  style="background-color: #50dfb3; text-align: center; border: 1px solid black; border-width: thin;"><?php  if($A == 6){ echo 'X';}else{'&nbsp;';} ?></td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($G == 7){ echo 'X';}else{'&nbsp;';} ?></td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($G == 8){ echo 'X';}else{'&nbsp;';} ?></td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($G == 9){ echo 'X';}else{'&nbsp;';} ?></td>
    </tr>
    <tr class="tableWorkDirectionTr">
        <td width="10">&nbsp;</td>
        <td  style="border: 1px solid black; border-width: thin;" colspan="2" >&nbsp;&nbsp;&nbsp;&nbsp;Hasrat untuk berpartisipasi</td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;">A</td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php echo $A;?></td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($A == 0){ echo 'X';}else{'&nbsp;';} ?></td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($A == 1){ echo 'X';}else{'&nbsp;';} ?></td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($A == 2){ echo 'X';}else{'&nbsp;';} ?></td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($A == 3){ echo 'X';}else{'&nbsp;';} ?></td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($A == 4){ echo 'X';}else{'&nbsp;';} ?></td>
        <td  style="background-color: #50dfb3; text-align: center; border: 1px solid black; border-width: thin;"><?php  if($A == 5){ echo 'X';}else{'&nbsp;';} ?></td>
        <td  style="background-color: #50dfb3; text-align: center; border: 1px solid black; border-width: thin;"><?php  if($A == 6){ echo 'X';}else{'&nbsp;';} ?></td>
        <td  style="background-color: #50dfb3; text-align: center; border: 1px solid black; border-width: thin;"><?php  if($A == 7){ echo 'X';}else{'&nbsp;';} ?></td>
        <td  style="background-color: #50dfb3; text-align: center; border: 1px solid black; border-width: thin;"><?php  if($A == 8){ echo 'X';}else{'&nbsp;';} ?></td>&nbsp;</td>
        <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($A == 9){ echo 'X';}else{'&nbsp;';} ?></td>
    </tr>
    <tr class="tableWorkDirectionTr">
            <td colspan="13">&nbsp;</td>
    </tr>
    <!--LEADERSHIP-->
    <tr class="tableWorkDirectionTr">
            <td width="10">&nbsp;</td>
            <td style="border: 1px solid black; border-width: thin;" colspan="2" >&nbsp;<strong>KEPEMIMPINAN</strong></td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
        </tr>
        <tr class="tableWorkDirectionTr">
            <td width="10">&nbsp;</td>
            <td  style="border: 1px solid black; border-width: thin;" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;Peranan sebagai pemimpin</td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;">L</td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php echo $L;?></td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($L == 0){ echo 'X';}else{'&nbsp;';} ?></td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($L == 1){ echo 'X';}else{'&nbsp;';} ?></td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($L == 2){ echo 'X';}else{'&nbsp;';} ?></td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($L == 3){ echo 'X';}else{'&nbsp;';} ?></td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($L == 4){ echo 'X';}else{'&nbsp;';} ?></td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($L == 5){ echo 'X';}else{'&nbsp;';} ?></td>
            <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($L == 6){ echo 'X';}else{'&nbsp;';} ?></td>
            <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($L == 7){ echo 'X';}else{'&nbsp;';} ?></td>
            <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($L == 8){ echo 'X';}else{'&nbsp;';} ?></td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($L == 9){ echo 'X';}else{'&nbsp;';} ?></td>
        </tr>
        <tr class="tableWorkDirectionTr">
            <td width="10">&nbsp;</td>
            <td  style="border: 1px solid black; border-width: thin;" colspan="2" >&nbsp;&nbsp;&nbsp;&nbsp;Mengendalikan orang lain</td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;">P</td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php echo $P;?></td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($P == 0){ echo 'X';}else{'&nbsp;';} ?></td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($P == 1){ echo 'X';}else{'&nbsp;';} ?></td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($P == 2){ echo 'X';}else{'&nbsp;';} ?></td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($P == 3){ echo 'X';}else{'&nbsp;';} ?></td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($P == 4){ echo 'X';}else{'&nbsp;';} ?></td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($P == 5){ echo 'X';}else{'&nbsp;';} ?></td>
            <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($P == 6){ echo 'X';}else{'&nbsp;';} ?></td>
            <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($P == 7){ echo 'X';}else{'&nbsp;';} ?></td>
            <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($P == 8){ echo 'X';}else{'&nbsp;';} ?></td>
            <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($P == 9){ echo 'X';}else{'&nbsp;';} ?></td>
        </tr>
        <tr class="tableWorkDirectionTr">
            <td  >&nbsp;</td>
            <td  style="border: 1px solid black; border-width: thin;" colspan="2" >&nbsp;&nbsp;&nbsp;&nbsp;Mudah dalam membuat keputusan</td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;">I</td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php echo $I;?></td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($I == 0){ echo 'X';}else{'&nbsp;';} ?></td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($I == 1){ echo 'X';}else{'&nbsp;';} ?></td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($I == 2){ echo 'X';}else{'&nbsp;';} ?></td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($I == 3){ echo 'X';}else{'&nbsp;';} ?></td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($I == 4){ echo 'X';}else{'&nbsp;';} ?></td>
            <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($I == 5){ echo 'X';}else{'&nbsp;';} ?></td>
            <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($I == 6){ echo 'X';}else{'&nbsp;';} ?></td>
            <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($I == 7){ echo 'X';}else{'&nbsp;';} ?></td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($I == 8){ echo 'X';}else{'&nbsp;';} ?></td>
            <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($I == 9){ echo 'X';}else{'&nbsp;';} ?></td>
        </tr>
        <tr class="tableWorkDirectionTr">
            <td colspan="13">&nbsp;</td>
        </tr>
        <!--ACTIVITY-->
        <tr class="tableWorkDirectionTr">
            <td width="10">&nbsp;</td>
                <td  style="border: 1px solid black; border-width: thin;" colspan="2" >&nbsp;<strong>AKTIFITAS</strong></td>
                <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
            </tr>
            <tr class="tableWorkDirectionTr">
                <td width="10">&nbsp;</td>
                <td  style="border: 1px solid black; border-width: thin;" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;Tipe selalu sibuk</td>
                <td  style="text-align:center; border: 1px solid black; border-width: thin;">T</td>
                <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php echo $T;?></td>
                <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($T == 0){ echo 'X';}else{'&nbsp;';} ?></td>
                <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($T == 1){ echo 'X';}else{'&nbsp;';} ?></td>
                <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($T == 2){ echo 'X';}else{'&nbsp;';} ?></td>
                <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($T == 3){ echo 'X';}else{'&nbsp;';} ?></td>
                <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($T == 4){ echo 'X';}else{'&nbsp;';} ?></td>
                <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($T == 5){ echo 'X';}else{'&nbsp;';} ?></td>
                <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($T == 6){ echo 'X';}else{'&nbsp;';} ?></td>
                <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($T == 7){ echo 'X';}else{'&nbsp;';} ?></td>
                <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($T == 8){ echo 'X';}else{'&nbsp;';} ?></td>
                <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($T == 9){ echo 'X';}else{'&nbsp;';} ?></td>
            </tr>
            <tr class="tableWorkDirectionTr">
                <td width="10">&nbsp;</td>
                <td  style="border: 1px solid black; border-width: thin;" colspan="2" >&nbsp;&nbsp;&nbsp;&nbsp;Tipe orang yang bersemangat</td>
                <td  style="text-align:center; border: 1px solid black; border-width: thin;">V</td>
                <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php echo $V;?></td>
                <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($V == 0){ echo 'X';}else{'&nbsp;';} ?></td>
                <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($V == 1){ echo 'X';}else{'&nbsp;';} ?></td>
                <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($V == 2){ echo 'X';}else{'&nbsp;';} ?></td>
                <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($V == 3){ echo 'X';}else{'&nbsp;';} ?></td>
                <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($V == 4){ echo 'X';}else{'&nbsp;';} ?></td>
                <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($V == 5){ echo 'X';}else{'&nbsp;';} ?></td>
                <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($V == 6){ echo 'X';}else{'&nbsp;';} ?></td>
                <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($V == 7){ echo 'X';}else{'&nbsp;';} ?></td>
                <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($V == 8){ echo 'X';}else{'&nbsp;';} ?></td>
                <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($V == 9){ echo 'X';}else{'&nbsp;';} ?></td>
            </tr>
            <tr class="tableWorkDirectionTr">
                <td colspan="13">&nbsp;</td>
            </tr>
            <!--SOCIAL NATURE-->
            <tr class="tableWorkDirectionTr">
                    <td width="10">&nbsp;</td>
                    <td  style="border: 1px solid black; border-width: thin;"colspan="2" >&nbsp;<strong>PERGAULAN</strong></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                </tr>
                <tr class="tableWorkDirectionTr">
                    <td width="10">&nbsp;</td>
                    <td  style="border: 1px solid black; border-width: thin;" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;Untuk mendapat perhatian</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">X</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php echo $X;?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($X == 0){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($X == 1){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($X == 2){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($X == 3){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($X == 4){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($X == 5){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($X == 6){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($X == 7){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($X == 8){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($X == 9){ echo 'X';}else{'&nbsp;';} ?></td>
                </tr>
                <tr class="tableWorkDirectionTr">
                    <td width="10">&nbsp;</td>
                    <td  style="border: 1px solid black; border-width: thin;" colspan="2" >&nbsp;&nbsp;&nbsp;&nbsp;Pergaulan luas</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">S</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php echo $S;?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($S == 0){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($S == 1){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($S == 2){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($S == 3){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($S == 4){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($S == 5){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($S == 6){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($S == 7){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($S == 8){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($S == 9){ echo 'X';}else{'&nbsp;';} ?></td>
                </tr>
                <tr class="tableWorkDirectionTr">
                    <td width="10">&nbsp;</td>
                    <td  style="border: 1px solid black; border-width: thin;" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;Kebutuhan betah terhadap kelompok</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">B</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php echo $B;?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($B == 0){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($B == 1){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($B == 2){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($B == 3){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($B == 4){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($B == 5){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($B == 6){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($B == 7){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($B == 8){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($B == 9){ echo 'X';}else{'&nbsp;';} ?></td>
                </tr>
                <tr class="tableWorkDirectionTr">
                    <td width="10">&nbsp;</td>
                    <td  style="border: 1px solid black; border-width: thin;" colspan="2" >&nbsp;&nbsp;&nbsp;&nbsp;Kebutuhan untuk mendekati dan menyayangi</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">O</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php echo $O;?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($O == 0){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($O == 1){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($O == 2){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($O == 3){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($O == 4){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($O == 5){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($O == 6){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($O == 7){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($O == 8){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($O == 9){ echo 'X';}else{'&nbsp;';} ?></td>
                </tr>
                <tr class="tableWorkDirectionTr">
                    <td colspan="13">&nbsp;</td>
                </tr>
                <!--WORK STYLE-->
                <tr class="tableWorkDirectionTr">
                    <td width="10">&nbsp;</td>
                    <td  style="border: 1px solid black; border-width: thin;" colspan="2" >&nbsp;<strong>GAYA KERJA</strong></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                </tr>
                <tr class="tableWorkDirectionTr">
                    <td width="10">&nbsp;</td>
                    <td  style="border: 1px solid black; border-width: thin;" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;Type Teoritikal</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">R</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php echo $R;?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($R == 0){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($R == 1){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($R == 2){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($R == 3){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($R == 4){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($R == 5){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($R == 6){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($R == 7){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($R == 8){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($R == 9){ echo 'X';}else{'&nbsp;';} ?></td>
                </tr>
                <tr class="tableWorkDirectionTr">
                    <td width="10">&nbsp;</td>
                    <td  style="border: 1px solid black; border-width: thin;" colspan="2" >&nbsp;&nbsp;&nbsp;&nbsp;Suka pekerjaan yang terperinci</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">D</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php echo $D;?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($D == 0){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($D == 1){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($D == 2){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($D == 3){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($D == 4){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($D == 5){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($D == 6){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($D == 7){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($D == 8){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($D == 9){ echo 'X';}else{'&nbsp;';} ?></td>
                </tr>
                <tr class="tableWorkDirectionTr">
                    <td width="10">&nbsp;</td>
                    <td  style="border: 1px solid black; border-width: thin;" colspan="2" >&nbsp;&nbsp;&nbsp;&nbsp;Type pengatur</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">C</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php echo $C;?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($C == 0){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($C == 1){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($C == 2){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($C == 3){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($C == 4){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($C == 5){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($C == 6){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($C == 7){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($C == 8){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($C == 9){ echo 'X';}else{'&nbsp;';} ?></td>
                </tr>
                <tr class="tableWorkDirectionTr">
                    <td colspan="13">&nbsp;</td>
                </tr>
                <!--TEMPERAMENT-->
                <tr class="tableWorkDirectionTr">
                    <td width="10">&nbsp;</td>
                    <td  style="border: 1px solid black; border-width: thin;" colspan="2" >&nbsp;<strong>SIFAT</strong></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                </tr>
                <tr class="tableWorkDirectionTr">
                    <td width="10">&nbsp;</td>
                    <td  style="border: 1px solid black; border-width: thin;" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;Hasrat untuk berubah</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">Z</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php echo $Z;?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($Z == 0){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($Z == 1){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($Z == 2){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($Z == 3){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($Z == 4){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($Z == 5){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($Z == 6){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($Z == 7){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($Z == 8){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($Z == 9){ echo 'X';}else{'&nbsp;';} ?></td>
                </tr>
                <tr class="tableWorkDirectionTr">
                    <td width="10">&nbsp;</td>
                    <td  style="border: 1px solid black; border-width: thin;"colspan="2" >&nbsp;&nbsp;&nbsp;&nbsp;Pengendalian Emosi</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">E</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php echo $E;?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($E == 0){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($E == 1){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($E == 2){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($E == 3){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($E == 4){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($E == 5){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($E == 6){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($E == 7){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($E == 8){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($E == 9){ echo 'X';}else{'&nbsp;';} ?></td>
                </tr>
                <tr class="tableWorkDirectionTr">
                    <td  >&nbsp;</td>
                    <td  style="border: 1px solid black; border-width: thin;" colspan="2" >&nbsp;&nbsp;&nbsp;&nbsp;Agresi</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">K</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php echo $K;?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($K == 0){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($K == 1){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($K == 2){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($K == 3){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($K == 4){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($K == 5){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($K == 6){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($K == 7){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($K == 8){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($K == 9){ echo 'X';}else{'&nbsp;';} ?></td>
                </tr>
                <tr class="tableWorkDirectionTr">
                    <td colspan="13">&nbsp;</td>
                </tr>
                <!--FOLLOWERSHIP-->
                <tr class="tableWorkDirectionTr">
                    <td width="10">&nbsp;</td>
                    <td  style="border: 1px solid black; border-width: thin;" colspan="2" >&nbsp;<strong>KETAATAN</strong></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">&nbsp;</td>
                </tr>
                <tr class="tableWorkDirectionTr">
                    <td width="10">&nbsp;</td>
                    <td style="border: 1px solid black; border-width: thin;" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;Dukungan dari atasan</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">F</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php echo $F;?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($F == 0){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($F == 1){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($F == 2){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($F == 3){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($F == 4){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($F == 5){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($F == 6){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($F == 7){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($F == 8){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($F == 9){ echo 'X';}else{'&nbsp;';} ?></td>
                </tr>
                <tr class="tableWorkDirectionTr">
                    <td width="10">&nbsp;</td>
                    <td style="border: 1px solid black; border-width: thin;" colspan="2" >&nbsp;&nbsp;&nbsp;&nbsp;Kebut, Taat pada aturan pengarahan</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;">W</td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php echo $W;?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($W == 0){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="background-color: #50dfb3; text-align:center; border: 1px solid black; border-width: thin;"><?php  if($W == 1){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($W == 2){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($W == 3){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($W == 4){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($W == 5){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($W == 6){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($W == 7){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($W == 8){ echo 'X';}else{'&nbsp;';} ?></td>
                    <td  style="text-align:center; border: 1px solid black; border-width: thin;"><?php  if($W == 9){ echo 'X';}else{'&nbsp;';} ?></td>
                </tr>
                <tr class="tableWorkDirectionTr">
                    <td colspan="13">&nbsp;</td>
                </tr>
                <tr>
        <td width="10">&nbsp;</td>
        <td colspan="3">Keterangan</td>
    </tr>

    <tr>
        <td width="10">&nbsp;</td>
        <td width="10" style="border: 2px solid black; background-color: #50dfb3; text-align: center;">&nbsp;</td>
        <td width="220">:&nbsp;Optimal Range</td>
        <td>&nbsp;</td>
    </tr>
</table>

<!-- <table  style="table-layout:fixed;">

    <tr>
        <td width="10">&nbsp;</td>
        <td colspan="3">Keterangan</td>
    </tr>

    <tr>
        <td width="10">&nbsp;</td>
        <td style="border: 2px solid black; background-color: #50dfb3; text-align: center;">&nbsp;</td>
        <td>:&nbsp;Optimal Range</td>
        <td>&nbsp;</td>
    </tr>
</table> -->


</body>
</html>


<style>
    .tableWorkDirection{
        border: 1px solid black;
        border-collapse: collapse;
        margin: 10px; border: 1px solid black;
    }

    .tableWorkDirectionTr{
        border: 1px solid black;
        border-collapse: collapse;
        margin: 10px; border: 1px solid black;
    }

    .tableWorkDirectionTd{
        border: 1px solid black; border-width: thin;
        border-collapse: collapse;
        margin: 10px; border: 1px solid black;
        /* width: 10px; */
    }

</style>