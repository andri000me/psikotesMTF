<?php
$mysqli = new mysqli("localhost","root", "","celestia_dbmtfpsikotes");

if(mysqli_connect_errno()) {
    printf("Connect failed: %s\n",mysql_connect_error());
    exit();
}

$name = '';
$tanggal_tes = '';
$user_ids = '';

$sql = "
        SELECT  cbt_user.user_firstname as name,
                cbt_tes.tes_nama as nama,
                cbt_tes_user.tesuser_id as user_id,
                cbt_tes_user.tesuser_status as tesuser_status,
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
        WHERE
                cbt_user.user_id = cbt_tes_user.tesuser_user_id
        AND 
                cbt_tes_user.tesuser_tes_id = cbt_tes.tes_id
        AND
                cbt_tes_soal.tessoal_tesuser_id = cbt_tes_user. tesuser_id
        AND
                cbt_jawaban.jawaban_id = cbt_tes_soal.tessoal_jawaban_id
        AND
                cbt_soal.soal_id = cbt_tes_soal.tessoal_soal_id
        AND
                cbt_user.user_id = ".$user_id."
        AND 
                cbt_tes.tes_id = ".$tesuser_tes_id."
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
            $user_ids = $user_id;
            $status = $row['tesuser_status'];
        }

    }


?>
<html>
<head>
<title>PAPI</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<section class="invoice">
<body>
        <!-- <table  style="width: -webkit-fill-available; margin: 10px; width:100%; font-size:12px; margin-left: 20px; margin-right: 20px" class="no-print"> -->
        <!-- <table  style="width: -webkit-fill-available; margin: 10px; width:100%; font-size:12px; margin-left: 20px; margin-right: 20px"> -->
                <!-- <tr> -->
                    <!-- <td style="width: 100%; height: 100%;"> -->
        <div style="margin: 10px; width:100%; text-align: left; margin-top: 10px; margin-left: 20px; margin-right: 20px"><H3><b>Diagram PAPI</b></H3></div>
        <table  style="width: -webkit-fill-available; margin: 10px; width:100%; font-size:12px; margin-left: 20px; margin-right: 20px">
            <tr>
                <td style="width: 10%;">No Test</td>
                <td style="width: 1%;">:</td>
                <td style="width: 49%;">&nbsp;</td>
                <td style="width: 10%;">Status</td>
                <td style="width: 1%;">:</td>
                <td style="width: 39%;"><?php if($status == 5){ echo "Time Out";}else if($status == 4 ){echo "Selesai";}else{ echo "Belum Dikerjakan";}  ?></td>
            </tr>
            <tr>
                <td style="width: 10%;">Nama</td>
                <td style="width: 1%;">:</td>
                <td style="width: 49%;"><?php echo $name;?></td>
            </tr>
            <tr>
                <td style="width: 10%;">Tanggal</td>
                <td style="width: 1%;">:</td>
                <td style="width: 49%;"><?php $date=date_create($tanggal_tes); echo date_format($date,"d F Y");?></td>
            </tr>
        </table>
                    <div>
                         <?php $image = base_url().'public/plugins/adminlte/img/papi.png';?>
                         <img style="position: absolute; width: 46.2em; height: 45.2em; z-index: 1; margin-left: 13em; margin-top: -3em; "src=" <?php echo base_url().'public/plugins/adminlte/img/papi.png';?>">
                        <canvas id="canvas"><div>&nbsp;</div></canvas>
                    </div>
                    <!-- </td> -->
                <!-- </tr> -->
        <!-- </table> -->
        <table style="margin: 10px; margin-left: 20px; margin-right: 20px">
            <tr>
                <td colspan="3">Keterangan</td>
            </tr>
            <tr>
                <td style="width: 25px; background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;">&nbsp;</td>
                <td>&nbsp;:&nbsp;</td>
                <td>Optimal Range</td>
            </tr>
            <tr style="font-size: 1px;">
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td style="border-color: #50dfb3; border-style: dashed; width: 25px; -webkit-print-color-adjust: exact; text-align: center;">&nbsp;</td>
                <td>&nbsp;:&nbsp;</td>
                <td>Acceptable</td>
            </tr>
            <tr style="font-size: 1px;">
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>Others</td>
                <td>&nbsp;:&nbsp;</td>
                <td>Area of Development</td>
            </tr>
        </table>
        <div style="height: 3em;">&nbsp;</div>
        <div style="margin: 10px; width:100%; text-align: left; margin-top: 10px; margin-left: 20px; margin-right: 20px"><H3><b>Diagram PAPI</b></H3></div>
        <table  style="width: -webkit-fill-available; margin: 10px; width:100%; font-size:12px; margin-left: 20px; margin-right: 20px">
            <tr>
                <td style="width: 10%;">No Test</td>
                <td style="width: 1%;">:</td>
                <td style="width: 49%;">&nbsp;</td>
                <td style="width: 10%;">Status</td>
                <td style="width: 1%;">:</td>
                <td style="width: 39%;"><?php if($status == 5){ echo "Time Out";}else if($status == 4 ){echo "Selesai";}else{ echo "Belum Dikerjakan";}  ?></td>
            </tr>
            <tr>
                <td style="width: 10%;">Nama</td>
                <td style="width: 1%;">:</td>
                <td style="width: 49%;"><?php echo $name;?></td>
            </tr>
            <tr>
                <td style="width: 10%;">Tanggal</td>
                <td style="width: 1%;">:</td>
                <td style="width: 49%;"><?php $date=date_create($tanggal_tes); echo date_format($date,"d F Y");?></td>
            </tr>
        </table>
        <table class="tableWorkDirection">
            <!-- WORK DIRECTION	-->
            <tr class="tableWorkDirectionTr">
                <td class="tableWorkDirectionTd" style="width: 25%;">&nbsp;<strong>ARAH KERJA</strong></td>
                <td class="tableWorkDirectionTd" style="width: 5%;">&nbsp;</td>
                <td class="tableWorkDirectionTd" style="width: 5%;">&nbsp;</td>
                <td class="tableWorkDirectionTd" style="text-align:center">0</td>
                <td class="tableWorkDirectionTd" style="text-align:center">1</td>
                <td class="tableWorkDirectionTd" style="text-align:center">2</td>
                <td class="tableWorkDirectionTd" style="text-align:center">3</td>
                <td class="tableWorkDirectionTd" style="text-align:center">4</td>
                <td class="tableWorkDirectionTd" style="text-align:center">5</td>
                <td class="tableWorkDirectionTd" style="text-align:center">6</td>
                <td class="tableWorkDirectionTd" style="text-align:center">7</td>
                <td class="tableWorkDirectionTd" style="text-align:center">8</td>
                <td class="tableWorkDirectionTd" style="text-align:center">9</td>
            </tr>
            <tr class="tableWorkDirectionTr">
                <td>&nbsp;&nbsp;&nbsp;&nbsp;Menyelesaikan tugas secara pribadi</td>
                <td class="tableWorkDirectionTd" style="text-align:center">N</td>
                <td class="tableWorkDirectionTd" style="text-align:center"><?php echo $N;?></td>
                <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($N == 0){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($N == 1){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($N == 2){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact !important; text-align: center;"><?php  if($N == 3){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center; text-align: center;"><?php  if($N == 4){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($N == 5){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($N == 6){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($N == 7){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($N == 8){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($N == 9){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
            </tr>
            <tr class="tableWorkDirectionTr">
                <td class="tableWorkDirectionTd">&nbsp;&nbsp;&nbsp;&nbsp;Peranan sebagai pekerja keras</td>
                <td class="tableWorkDirectionTd" style="text-align:center">G</td>
                <td class="tableWorkDirectionTd" style="text-align:center"><?php echo $G;?></td>
                <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($G == 0){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($G == 1){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($G == 2){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($G == 3){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($A == 4){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($A == 5){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($A == 6){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($G == 7){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($G == 8){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($G == 9){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
            </tr>
            <tr class="tableWorkDirectionTr">
                <td class="tableWorkDirectionTd">&nbsp;&nbsp;&nbsp;&nbsp;Hasrat untuk berpartisipasi</td>
                <td class="tableWorkDirectionTd" style="text-align:center">A</td>
                <td class="tableWorkDirectionTd" style="text-align:center"><?php echo $A;?></td>
                <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($A == 0){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($A == 1){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($A == 2){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($A == 3){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($A == 4){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($A == 5){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($A == 6){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($A == 7){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($A == 8){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($A == 9){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
            </tr>
            <tr class="tableWorkDirectionTr">
                    <td colspan="13">&nbsp;</td>
            </tr>
            <!--LEADERSHIP-->
            <tr class="tableWorkDirectionTr">
                    <td class="tableWorkDirectionTd">&nbsp;<strong>KEPEMIMPINAN</strong></td>
                    <td class="tableWorkDirectionTd">&nbsp;</td>
                    <td class="tableWorkDirectionTd">&nbsp;</td>
                    <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                    <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                    <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                    <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                    <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                    <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                    <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                    <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                    <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                    <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                </tr>
                <tr class="tableWorkDirectionTr">
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;Peranan sebagai pemimpin</td>
                    <td class="tableWorkDirectionTd" style="text-align:center">L</td>
                    <td class="tableWorkDirectionTd" style="text-align:center"><?php echo $L;?></td>
                    <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($L == 0){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                    <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($L == 1){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                    <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($L == 2){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                    <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($L == 3){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                    <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($L == 4){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                    <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($L == 5){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                    <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($L == 6){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                    <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($L == 7){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                    <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($L == 8){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                    <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($L == 9){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                </tr>
                <tr class="tableWorkDirectionTr">
                    <td class="tableWorkDirectionTd">&nbsp;&nbsp;&nbsp;&nbsp;Mengendalikan orang lain</td>
                    <td class="tableWorkDirectionTd" style="text-align:center">P</td>
                    <td class="tableWorkDirectionTd" style="text-align:center"><?php echo $P;?></td>
                    <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($P == 0){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                    <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($P == 1){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                    <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($P == 2){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                    <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($P == 3){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                    <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($P == 4){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                    <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($P == 5){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                    <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($P == 6){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                    <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($P == 7){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                    <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($P == 8){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                    <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($P == 9){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                </tr>
                <tr class="tableWorkDirectionTr">
                    <td class="tableWorkDirectionTd">&nbsp;&nbsp;&nbsp;&nbsp;Mudah dalam membuat keputusan</td>
                    <td class="tableWorkDirectionTd" style="text-align:center">I</td>
                    <td class="tableWorkDirectionTd" style="text-align:center"><?php echo $I;?></td>
                    <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($I == 0){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                    <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($I == 1){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                    <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($I == 2){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                    <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($I == 3){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                    <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($I == 4){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                    <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($I == 5){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                    <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($I == 6){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                    <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($I == 7){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                    <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($I == 8){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                    <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($I == 9){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                </tr>
                <tr class="tableWorkDirectionTr">
                    <td colspan="13">&nbsp;</td>
                </tr>
                <!--ACTIVITY-->
                <tr class="tableWorkDirectionTr">
                        <td class="tableWorkDirectionTd">&nbsp;<strong>AKTIFITAS</strong></td>
                        <td class="tableWorkDirectionTd">&nbsp;</td>
                        <td class="tableWorkDirectionTd">&nbsp;</td>
                        <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                        <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                        <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                        <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                        <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                        <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                        <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                        <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                        <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                        <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                    </tr>
                    <tr class="tableWorkDirectionTr">
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;Tipe selalu sibuk</td>
                        <td class="tableWorkDirectionTd" style="text-align:center">T</td>
                        <td class="tableWorkDirectionTd" style="text-align:center"><?php echo $T;?></td>
                        <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($T == 0){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                        <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($T == 1){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                        <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($T == 2){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                        <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($T == 3){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                        <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($T == 4){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                        <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($T == 5){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                        <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($T == 6){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                        <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($T == 7){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                        <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($T == 8){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                        <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($T == 9){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                    </tr>
                    <tr class="tableWorkDirectionTr">
                        <td class="tableWorkDirectionTd">&nbsp;&nbsp;&nbsp;&nbsp;Tipe orang yang bersemangat</td>
                        <td class="tableWorkDirectionTd" style="text-align:center">V</td>
                        <td class="tableWorkDirectionTd" style="text-align:center"><?php echo $V;?></td>
                        <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($V == 0){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                        <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($V == 1){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                        <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($V == 2){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                        <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($V == 3){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                        <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($V == 4){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                        <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($V == 5){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                        <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($V == 6){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                        <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($V == 7){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                        <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($V == 8){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                        <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($V == 9){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                    </tr>
                    <tr class="tableWorkDirectionTr">
                        <td colspan="13">&nbsp;</td>
                    </tr>
                    <!--SOCIAL NATURE-->
                    <tr class="tableWorkDirectionTr">
                            <td class="tableWorkDirectionTd">&nbsp;<strong>PERGAULAN</strong></td>
                            <td class="tableWorkDirectionTd">&nbsp;</td>
                            <td class="tableWorkDirectionTd">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                        </tr>
                        <tr class="tableWorkDirectionTr">
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;Untuk mendapat perhatian</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">X</td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php echo $X;?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($X == 0){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($X == 1){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($X == 2){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($X == 3){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($X == 4){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($X == 5){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($X == 6){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($X == 7){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($X == 8){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($X == 9){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                        </tr>
                        <tr class="tableWorkDirectionTr">
                            <td class="tableWorkDirectionTd">&nbsp;&nbsp;&nbsp;&nbsp;Pergaulan luas</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">S</td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php echo $S;?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($S == 0){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($S == 1){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($S == 2){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($S == 3){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($S == 4){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($S == 5){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($S == 6){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($S == 7){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($S == 8){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($S == 9){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                        </tr>
                        <tr class="tableWorkDirectionTr">
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;Kebutuhan betah terhadap kelompok</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">B</td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php echo $B;?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($B == 0){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($B == 1){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($B == 2){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($B == 3){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($B == 4){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($B == 5){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($B == 6){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($B == 7){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($B == 8){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($B == 9){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                        </tr>
                        <tr class="tableWorkDirectionTr">
                            <td class="tableWorkDirectionTd">&nbsp;&nbsp;&nbsp;&nbsp;Kebutuhan untuk mendekati dan menyayangi</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">O</td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php echo $O;?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($O == 0){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($O == 1){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($O == 2){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($O == 3){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($O == 4){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($O == 5){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($O == 6){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($O == 7){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($O == 8){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($O == 9){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                        </tr>
                        <tr class="tableWorkDirectionTr">
                            <td colspan="13">&nbsp;</td>
                        </tr>
                        <!--WORK STYLE-->
                        <tr class="tableWorkDirectionTr">
                            <td class="tableWorkDirectionTd">&nbsp;<strong>GAYA KERJA</strong></td>
                            <td class="tableWorkDirectionTd">&nbsp;</td>
                            <td class="tableWorkDirectionTd">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                        </tr>
                        <tr class="tableWorkDirectionTr">
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;Type Teoritikal</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">R</td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php echo $R;?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($R == 0){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($R == 1){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($R == 2){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($R == 3){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($R == 4){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($R == 5){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($R == 6){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($R == 7){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($R == 8){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($R == 9){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                        </tr>
                        <tr class="tableWorkDirectionTr">
                            <td class="tableWorkDirectionTd">&nbsp;&nbsp;&nbsp;&nbsp;Suka pekerjaan yang terperinci</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">D</td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php echo $D;?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($D == 0){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($D == 1){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($D == 2){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($D == 3){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($D == 4){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($D == 5){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($D == 6){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($D == 7){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($D == 8){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($D == 9){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                        </tr>
                        <tr class="tableWorkDirectionTr">
                            <td class="tableWorkDirectionTd">&nbsp;&nbsp;&nbsp;&nbsp;Type pengatur</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">C</td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php echo $C;?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($C == 0){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($C == 1){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($C == 2){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($C == 3){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($C == 4){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($C == 5){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($C == 6){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($C == 7){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($C == 8){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($C == 9){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                        </tr>
                        <tr class="tableWorkDirectionTr">
                            <td colspan="13">&nbsp;</td>
                        </tr>
                        <!--TEMPERAMENT-->
                        <tr class="tableWorkDirectionTr">
                            <td class="tableWorkDirectionTd">&nbsp;<strong>SIFAT</strong></td>
                            <td class="tableWorkDirectionTd">&nbsp;</td>
                            <td class="tableWorkDirectionTd">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                        </tr>
                        <tr class="tableWorkDirectionTr">
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;Hasrat untuk berubah</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">Z</td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php echo $Z;?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($Z == 0){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($Z == 1){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($Z == 2){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($Z == 3){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($Z == 4){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($Z == 5){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($Z == 6){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($Z == 7){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($Z == 8){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($Z == 9){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                        </tr>
                        <tr class="tableWorkDirectionTr">
                            <td class="tableWorkDirectionTd">&nbsp;&nbsp;&nbsp;&nbsp;Pengendalian Emosi</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">E</td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php echo $E;?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($E == 0){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($E == 1){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($E == 2){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($E == 3){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($E == 4){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($E == 5){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($E == 6){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($E == 7){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($E == 8){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($E == 9){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                        </tr>
                        <tr class="tableWorkDirectionTr">
                            <td class="tableWorkDirectionTd">&nbsp;&nbsp;&nbsp;&nbsp;Agresi</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">K</td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php echo $K;?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($K == 0){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($K == 1){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($K == 2){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($K == 3){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($K == 4){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($K == 5){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($K == 6){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($K == 7){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($K == 8){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($K == 9){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                        </tr>
                        <tr class="tableWorkDirectionTr">
                            <td colspan="13">&nbsp;</td>
                        </tr>
                        <!--FOLLOWERSHIP-->
                        <tr class="tableWorkDirectionTr">
                            <td class="tableWorkDirectionTd">&nbsp;<strong>KETAATAN</strong></td>
                            <td class="tableWorkDirectionTd">&nbsp;</td>
                            <td class="tableWorkDirectionTd">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">&nbsp;</td>
                        </tr>
                        <tr class="tableWorkDirectionTr">
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;Dukungan dari atasan</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">F</td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php echo $F;?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($F == 0){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($F == 1){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($F == 2){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($F == 3){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($F == 4){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($F == 5){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($F == 6){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($F == 7){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($F == 8){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($F == 9){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                        </tr>
                        <tr class="tableWorkDirectionTr">
                            <td class="tableWorkDirectionTd">&nbsp;&nbsp;&nbsp;&nbsp;Kebut, Taat pada aturan pengarahan</td>
                            <td class="tableWorkDirectionTd" style="text-align:center">W</td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php echo $W;?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($W == 0){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;"><?php  if($W == 1){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($W == 2){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($W == 3){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($W == 4){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($W == 5){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($W == 6){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($W == 7){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($W == 8){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                            <td class="tableWorkDirectionTd" style="text-align:center"><?php  if($W == 9){ echo '<b>X</b>';}else{'&nbsp;';} ?></td>
                        </tr>
                        <tr class="tableWorkDirectionTr">
                            <td colspan="13">&nbsp;</td>
                        </tr>
        </table>
        <table style="margin: 10px; margin-left: 20px; margin-right: 20px">
            <tr>
                <td colspan="3">Keterangan</td>
            </tr>
            <tr>
                <td style="width: 25px; background-color: #50dfb3 !important; -webkit-print-color-adjust: exact; text-align: center;">&nbsp;</td>
                <td>&nbsp;:&nbsp;</td>
                <td>Optimal Range</td>
            </tr>
        </table>
    </body>
    <div class="row no-print">
        <div class="col-xs-12">
          <button type="button" class="btn btn-default" style="margin-right: 5px;" onclick="myFunction()">
            <i class="fa fa-print"></i> Print
          </button>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;"  onclick="detail_tes(<?php echo $user_id; ?>)" >
            <i class="fa fa-download"></i> Generate Excel
          </button>

        </div>
    </div>
    
    <!-- <div style="width: 100%; align-self: center;">
        <canvas id="canvas"></canvas>
    </div> -->


</section>
</html>

<form id="TheForm" action="<?php echo site_url().'/manager/tes_hasil_report_papi_excel'; ?>" method="POST" target="TheWindow">
    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
    <input type="hidden" name="tesuser_tes_id" value="<?php echo $tesuser_tes_id; ?>" />
</form>

<script>
    function myFunction() {
        window.print();
    }
    function detail_tes(tesuser_id){
        document.getElementById('TheForm').submit();
        // window.open("<?php echo site_url().'/manager/tes_hasil_report_papi_excel'; ?>/index/"+tesuser_id);
        
    }
</script>

<style>
    @page   {
                size: 7in 9.25in;
                /* margin: 27mm 16mm 27mm 16mm; */
                size: landscape; 
            }
            

    .tableWorkDirection{
        font-size:12px;
        border: 1px solid black;
        border-collapse: collapse;
        width: -webkit-fill-available; 
        margin: 10px;
        margin-left: 20px;
        margin-right: 20px; 
        border: 1px solid black;
        background-color: white;
        -webkit-print-color-adjust: exact; 
    }

    .tableWorkDirectionTr{
        border: 1px solid black;
        border-collapse: collapse;
        width: -webkit-fill-available; 
        margin: 10px; 
        border: 1px solid black;
        -webkit-print-color-adjust: exact; 
    }

    .tableWorkDirectionTd{
        border: 1px solid black;
        border-collapse: collapse;
        width: -webkit-fill-available; 
        margin: 10px; border: 1px solid black;
        -webkit-print-color-adjust: exact; 
    }

</style>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script> -->
<script src="<?php echo base_url(); ?>public/plugins/chart.js/Chart.min.js"></script>

<?php
if($K == 0){
    $k = 9;
}else if($K == 1){
    $k = 8;
}else if($K == 2){
    $k = 7;
}else if($K == 3){
    $k = 6;
}else if($K == 4){
    $k = 5;
}else if($K == 5){
    $k = 4;
}else if($K == 6){
    $k = 3;
}else if($K == 7){
    $k = 2;
}else if($K == 8){
    $k = 1;
}else if($K == 9){
    $k = 0;
}

if($Z == 0){
    $Z = 9;
}else if($Z == 1){
    $Z = 8;
}else if($Z == 2){
    $Z = 7;
}else if($Z == 3){
    $Z = 6;
}else if($Z == 4){
    $Z = 5;
}else if($Z == 5){
    $Z = 4;
}else if($Z == 6){
    $Z = 3;
}else if($Z == 7){
    $Z = 2;
}else if($Z == 8){
    $Z = 1;
}else if($Z == 9){
    $Z = 0;
}

?>

<script type="text/javascript">
    let json =  [   
                    // { "iri_code": "352380801", "iri_pop_txevol": "3.1", "iri_txact": "9.5", "iri_txchom": "9.8" }, 
                    {   
                        "iri_code": "<?php echo $name;?>", 
                        "N": "<?php echo $N;?>", 
                        "W": "<?php echo $W;?>", 
                        "F": "<?php echo $F;?>", 
                        "K": "<?php echo $K;?>", 
                        "E": "<?php echo $E;?>",
                        "Z": "<?php echo $Z;?>",
                        "R": "<?php echo $R;?>", 
                        "D": "<?php echo $D;?>", 
                        "C": "<?php echo $C;?>", 
                        "X": "<?php echo $X;?>", 
                        "S": "<?php echo $S;?>", 
                        "B": "<?php echo $B;?>",
                        "O": "<?php echo $O;?>", 
                        "V": "<?php echo $V;?>", 
                        "T": "<?php echo $T;?>", 
                        "I": "<?php echo $I;?>", 
                        "P": "<?php echo $P;?>", 
                        "L": "<?php echo $L;?>", 
                        "A": "<?php echo $A;?>", 
                        "G": "<?php echo $G;?>"
                    }
                ];
    let label = [];
    let data = [];

    // generate label and data dynamically
    json.forEach(e => {
        label.push(e.iri_code);
        // data.push([ +e.N, 
        //             +e.W,
        //             +e.F, 
        //             +e.K,
        //             +e.E, 
        //             +e.Z,
        //             +e.R, 
        //             +e.D,
        //             +e.C, 
        //             +e.X,
        //             +e.S, 
        //             +e.B,
        //             +e.O, 
        //             +e.V,
        //             +e.T, 
        //             +e.I,
        //             +e.P, 
        //             +e.L,
        //             +e.A, 
        //             +e.G
        //         ]);
        data.push([ +e.G, 
                    +e.A,
                    +e.L, 
                    +e.P,
                    +e.I, 
                    +e.T,
                    +e.V, 
                    +e.X,
                    +e.S, 
                    +e.B,
                    +e.O, 
                    +e.R,
                    +e.D, 
                    +e.C,
                    +e.Z, 
                    +e.E,
                    +e.K, 
                    +e.F,
                    +e.W, 
                    +e.N
                ]);
    });

    let ctx = document.querySelector('#canvas').getContext('2d');
    let chart = new Chart(ctx, {
        type: 'radar',
        data: {
            // labels: [   'Need to finish task (N)', 
            //             'Need for rules and supervision (W)', 
            //             'Need to support authority (F)', 
            //             'Need to be forceful (K)',
            //             'Emotional resistant (E)',
            //             'Need for change (Z)',
            //             'Theoretical type (R)',
            //             'Interest in working with details (D)',
            //             'Organized type (C)',
            //             'Need to be noticed (X)',
            //             'Social extension (S)',
            //             'Need to belong to groups (B)',
            //             'Need for closeness and affection (O)',
            //             'Vigorous type (V)',
            //             'Pace (T)',
            //             'Ease in decision making (I)',
            //             'Need to control others (P)',
            //             'Leadership role (L)',
            //             'Need to achieve (A)',
            //             'Hard intense worked (G)'
            //         ],
                    // labels: [   
                    //     'G',
                    //     'A',
                    //     'L',
                    //     'P',
                    //     'I',
                    //     'T',
                    //     'V',
                    //     'X',
                    //     'S',
                    //     'B',
                    //     'O',
                    //     'R',
                    //     'D',
                    //     'C',
                    //     'Z',
                    //     'E',
                    //     'K',
                    //     'F',
                    //     'W',
                    //     'N',
                    // ],
                    labels: [   
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                    ],
                        
            datasets: [{
                label: label[0],
                data: data[0],
                backgroundColor: 'rgba(0,119,204,0.0)',
                borderColor: '#ea1f29',
                borderWidth: 1,
                pointBackgroundColor: '#ea1f29'
            }]
        },
        options: {
            title: {
                display: true,
                position: "top",
                // text: "Diagram PAPI",
                fontSize: 25,
                fontColor: "#111"
            },
            legend: {
                display: false,
                position: "bottom",
                "labels":   {
                                // "fontSize": 20,
                                // "boxWidth": 40,
                                fontColor: 'rgba(0, 0, 0, 0)',
                                strokeStyle: 'rgba(0, 0, 0, 0)',
                            }
            },
            scale: {
                pointLabels: {
                    fontSize: 11
                },
                ticks: {
                    // backdropColor: 'rgba(0, 0, 0, 0.5)'
                    beginAtZero: true,
                    max: 10,
                    min: -2,
                    stepSize: 1,
                    callback: function() {return ""},
                     backdropColor: "rgba(0, 0, 0, 0)"
                    // maxTicksLimit: 7
                },
                gridLines: {
                                color: ['transparant']
                },
                yAxes: [{
    gridLines: {
        zeroLineColor: '#ffff'
    }
}]
            }
        }
    });
    // var ctxs = document.getElementById("canvas");
    // ctxs.height = 560;
</script>
 <?php $image = base_url().'public/plugins/adminlte/img/papi.png';
 ?>


<!--<style>
background: url("<?php echo $CDNURL; ?>/images/header-bg.png") no-repeat;
    canvas {
        background-image: url(https://2.bp.blogspot.com/-I2tidABtjrQ/W6951qzYD0I/AAAAAAAAABk/see1Zg0lUIkfXSUW0J62vgDaRMI73sirQCLcBGAs/s1600/sejarah%2Btes%2Bpapi%2Bkostick.jpg);
        background-repeat: no-repeat;
        background-position-x: center;
    }
</style> -->

<?php 
echo '<style>
        canvas {
            /*background-image: url('.$image.');
            background-repeat: no-repeat;
            background-position-x: center;
            background-size: 600px 600px;
            background-position-y: 0px;
            height: 560px !important;
            width: 70em !important

            background-repeat: no-repeat;
            background-size: 40.3em 39.3em;
            background-position-y: -8px;
            BACKGROUND-POSITION-X: 15.9em;
            height: 500px !important;
            width: 72em !important;

            z-index: 19;
           position: relative;;*/

           height: 500px !important;
           width: 72em !important;
           z-index: 19;
           position: relative;
           margin-top: 3.5em;
        }
     </style>'
?>