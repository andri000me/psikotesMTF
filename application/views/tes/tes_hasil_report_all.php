<?php
$mysqli = new mysqli("localhost","root", "","celestia_dbmtfpsikotes");

if(mysqli_connect_errno()) {
    printf("Connect failed: %s\n",mysql_connect_error());
    exit();
}

$name = '';
$tanggal_tes = '';
$user_ids = '';
$reportShowPAPI = "No";

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
                cbt_tes_soal.tessoal_tesuser_id = cbt_tes_user.tesuser_id
        AND
                cbt_jawaban.jawaban_id = cbt_tes_soal.tessoal_jawaban_id
        AND
                cbt_soal.soal_id = cbt_tes_soal.tessoal_soal_id
        AND
                cbt_user.user_id = ".$user_id."
        AND 
                cbt_tes.tes_id = 129
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
    // echo $sql;
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
            $reportShowPAPI = "Yes";
        }
    }else{
            $reportShowPAPI = "No";
    }

if($reportShowPAPI == "Yes"){

    $interpretasiN = "";
    $interpretasiG = "";
    $interpretasiA = "";
    $interpretasiL = "";
    $interpretasiP = "";
    $interpretasiI = "";
    $interpretasiT = "";
    $interpretasiV = "";
    $interpretasiX = "";
    $interpretasiS = "";
    $interpretasiB = "";
    $interpretasiO = "";
    $interpretasiR = "";
    $interpretasiD = "";
    $interpretasiC = "";
    $interpretasiZ = "";
    $interpretasiE = "";
    $interpretasiK = "";
    $interpretasiF = "";
    $interpretasiW = "";
    

    $sqlInterpretasiPAPIN = "
        SELECT  interpretasi_text,
                interpretasi_custom_field3 as AspekA,
                interpretasi_custom_field4 as AspekB
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'N'
        AND     interpretasi_tesId = 45
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 <= ".$N."
        AND     interpretasi_custom_field2 >= ".$N."
    ";

    if($resultN = mysqli_query($mysqli, $sqlInterpretasiPAPIN)){
        while($row = mysqli_fetch_array($resultN)){
            $interpretasiN = $row['interpretasi_text'];
        }
    }

    $sqlInterpretasiPAPIG = "
        SELECT  interpretasi_text,
                interpretasi_custom_field3 as AspekA,
                interpretasi_custom_field4 as AspekB
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'G'
        AND     interpretasi_tesId = 45
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 <= ".$G."
        AND     interpretasi_custom_field2 >= ".$G."
    ";

    if($resultG = mysqli_query($mysqli, $sqlInterpretasiPAPIG)){
        while($row = mysqli_fetch_array($resultG)){
            $interpretasiG = $row['interpretasi_text'];
        }
    }

    $sqlInterpretasiPAPIA = "
        SELECT  interpretasi_text,
                interpretasi_custom_field3 as AspekA,
                interpretasi_custom_field4 as AspekB
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'A'
        AND     interpretasi_tesId = 45
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 <= ".$A."
        AND     interpretasi_custom_field2 >= ".$A."
    ";

    if($resultA = mysqli_query($mysqli, $sqlInterpretasiPAPIA)){
        while($row = mysqli_fetch_array($resultA)){
            $interpretasiA = $row['interpretasi_text'];
        }
    }


    $sqlInterpretasiPAPIL = "
        SELECT  interpretasi_text,
                interpretasi_custom_field3 as AspekA,
                interpretasi_custom_field4 as AspekB
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'L'
        AND     interpretasi_tesId = 45
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 <= ".$L."
        AND     interpretasi_custom_field2 >= ".$L."
    ";

    if($resultL = mysqli_query($mysqli, $sqlInterpretasiPAPIL)){
        while($row = mysqli_fetch_array($resultL)){
            $interpretasiL = $row['interpretasi_text'];
        }
    }


    $sqlInterpretasiPAPIP = "
        SELECT  interpretasi_text,
                interpretasi_custom_field3 as AspekA,
                interpretasi_custom_field4 as AspekB
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'P'
        AND     interpretasi_tesId = 45
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 <= ".$P."
        AND     interpretasi_custom_field2 >= ".$P."
    ";

    if($resultP = mysqli_query($mysqli, $sqlInterpretasiPAPIP)){
        while($row = mysqli_fetch_array($resultP)){
            $interpretasiP = $row['interpretasi_text'];
        }
    }


    $sqlInterpretasiPAPIP = "
        SELECT  interpretasi_text,
                interpretasi_custom_field3 as AspekA,
                interpretasi_custom_field4 as AspekB
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'P'
        AND     interpretasi_tesId = 45
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 <= ".$P."
        AND     interpretasi_custom_field2 >= ".$P."
    ";

    if($resultP = mysqli_query($mysqli, $sqlInterpretasiPAPIP)){
        while($row = mysqli_fetch_array($resultP)){
            $interpretasiP = $row['interpretasi_text'];
        }
    }


    $sqlInterpretasiPAPII = "
        SELECT  interpretasi_text,
                interpretasi_custom_field3 as AspekA,
                interpretasi_custom_field4 as AspekB
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'I'
        AND     interpretasi_tesId = 45
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 <= ".$I."
        AND     interpretasi_custom_field2 >= ".$I."
    ";

    if($resultI = mysqli_query($mysqli, $sqlInterpretasiPAPII)){
        while($row = mysqli_fetch_array($resultI)){
            $interpretasiI = $row['interpretasi_text'];
        }
    }


    $sqlInterpretasiPAPIT = "
        SELECT  interpretasi_text,
                interpretasi_custom_field3 as AspekA,
                interpretasi_custom_field4 as AspekB
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'T'
        AND     interpretasi_tesId = 45
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 <= ".$T."
        AND     interpretasi_custom_field2 >= ".$T."
    ";

    if($resultT = mysqli_query($mysqli, $sqlInterpretasiPAPIT)){
        while($row = mysqli_fetch_array($resultT)){
            $interpretasiT = $row['interpretasi_text'];
        }
    }


    $sqlInterpretasiPAPIV = "
        SELECT  interpretasi_text,
                interpretasi_custom_field3 as AspekA,
                interpretasi_custom_field4 as AspekB
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'V'
        AND     interpretasi_tesId = 45
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 <= ".$V."
        AND     interpretasi_custom_field2 >= ".$V."
    ";

    if($resultV = mysqli_query($mysqli, $sqlInterpretasiPAPIV)){
        while($row = mysqli_fetch_array($resultV)){
            $interpretasiV = $row['interpretasi_text'];
        }
    }


    $sqlInterpretasiPAPIX = "
        SELECT  interpretasi_text,
                interpretasi_custom_field3 as AspekA,
                interpretasi_custom_field4 as AspekB
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'X'
        AND     interpretasi_tesId = 45
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 <= ".$X."
        AND     interpretasi_custom_field2 >= ".$X."
    ";

    if($resultX = mysqli_query($mysqli, $sqlInterpretasiPAPIX)){
        while($row = mysqli_fetch_array($resultX)){
            $interpretasiX = $row['interpretasi_text'];
        }
    }


    $sqlInterpretasiPAPIS = "
        SELECT  interpretasi_text,
                interpretasi_custom_field3 as AspekA,
                interpretasi_custom_field4 as AspekB
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'S'
        AND     interpretasi_tesId = 45
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 <= ".$S."
        AND     interpretasi_custom_field2 >= ".$S."
    ";

    if($resultS = mysqli_query($mysqli, $sqlInterpretasiPAPIS)){
        while($row = mysqli_fetch_array($resultS)){
            $interpretasiS = $row['interpretasi_text'];
        }
    }


    $sqlInterpretasiPAPIB = "
        SELECT  interpretasi_text,
                interpretasi_custom_field3 as AspekA,
                interpretasi_custom_field4 as AspekB
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'B'
        AND     interpretasi_tesId = 45
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 <= ".$B."
        AND     interpretasi_custom_field2 >= ".$B."
    ";

    if($resultB = mysqli_query($mysqli, $sqlInterpretasiPAPIB)){
        while($row = mysqli_fetch_array($resultB)){
            $interpretasiB = $row['interpretasi_text'];
        }
    }

    $sqlInterpretasiPAPIO = "
        SELECT  interpretasi_text,
                interpretasi_custom_field3 as AspekA,
                interpretasi_custom_field4 as AspekB
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'O'
        AND     interpretasi_tesId = 45
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 <= ".$O."
        AND     interpretasi_custom_field2 >= ".$O."
    ";

    if($resultO = mysqli_query($mysqli, $sqlInterpretasiPAPIO)){
        while($row = mysqli_fetch_array($resultO)){
            $interpretasiO = $row['interpretasi_text'];
        }
    }


    $sqlInterpretasiPAPIR = "
        SELECT  interpretasi_text,
                interpretasi_custom_field3 as AspekA,
                interpretasi_custom_field4 as AspekB
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'R'
        AND     interpretasi_tesId = 45
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 <= ".$R."
        AND     interpretasi_custom_field2 >= ".$R."
    ";

    if($resultR = mysqli_query($mysqli, $sqlInterpretasiPAPIR)){
        while($row = mysqli_fetch_array($resultR)){
            $interpretasiR = $row['interpretasi_text'];
        }
    }


    $sqlInterpretasiPAPID = "
        SELECT  interpretasi_text,
                interpretasi_custom_field3 as AspekA,
                interpretasi_custom_field4 as AspekB
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'D'
        AND     interpretasi_tesId = 45
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 <= ".$D."
        AND     interpretasi_custom_field2 >= ".$D."
    ";

    if($resultD = mysqli_query($mysqli, $sqlInterpretasiPAPID)){
        while($row = mysqli_fetch_array($resultD)){
            $interpretasiD = $row['interpretasi_text'];
        }
    }

    $sqlInterpretasiPAPIC = "
        SELECT  interpretasi_text,
                interpretasi_custom_field3 as AspekA,
                interpretasi_custom_field4 as AspekB
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'C'
        AND     interpretasi_tesId = 45
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 <= ".$C."
        AND     interpretasi_custom_field2 >= ".$C."
    ";

    if($resultC = mysqli_query($mysqli, $sqlInterpretasiPAPIC)){
        while($row = mysqli_fetch_array($resultC)){
            $interpretasiC = $row['interpretasi_text'];
        }
    }


    $sqlInterpretasiPAPIZ = "
        SELECT  interpretasi_text,
                interpretasi_custom_field3 as AspekA,
                interpretasi_custom_field4 as AspekB
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'Z'
        AND     interpretasi_tesId = 45
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 <= ".$Z."
        AND     interpretasi_custom_field2 >= ".$Z."
    ";

    if($resultZ = mysqli_query($mysqli, $sqlInterpretasiPAPIZ)){
        while($row = mysqli_fetch_array($resultZ)){
            $interpretasiZ = $row['interpretasi_text'];
        }
    }


    $sqlInterpretasiPAPIE = "
        SELECT  interpretasi_text,
                interpretasi_custom_field3 as AspekA,
                interpretasi_custom_field4 as AspekB
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'E'
        AND     interpretasi_tesId = 45
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 <= ".$E."
        AND     interpretasi_custom_field2 >= ".$E."
    ";

    if($resultE = mysqli_query($mysqli, $sqlInterpretasiPAPIE)){
        while($row = mysqli_fetch_array($resultE)){
            $interpretasiE = $row['interpretasi_text'];
        }
    }


    $sqlInterpretasiPAPIK = "
        SELECT  interpretasi_text,
                interpretasi_custom_field3 as AspekA,
                interpretasi_custom_field4 as AspekB
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'K'
        AND     interpretasi_tesId = 45
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 <= ".$K."
        AND     interpretasi_custom_field2 >= ".$K."
    ";

    if($resultK = mysqli_query($mysqli, $sqlInterpretasiPAPIK)){
        while($row = mysqli_fetch_array($resultK)){
            $interpretasiK = $row['interpretasi_text'];
        }
    }


    $sqlInterpretasiPAPIF = "
        SELECT  interpretasi_text,
                interpretasi_custom_field3 as AspekA,
                interpretasi_custom_field4 as AspekB
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'F'
        AND     interpretasi_tesId = 45
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 <= ".$F."
        AND     interpretasi_custom_field2 >= ".$F."
    ";

    if($resultF = mysqli_query($mysqli, $sqlInterpretasiPAPIF)){
        while($row = mysqli_fetch_array($resultF)){
            $interpretasiF = $row['interpretasi_text'];
        }
    }

    $sqlInterpretasiPAPIW = "
        SELECT  interpretasi_text,
                interpretasi_custom_field3 as AspekA,
                interpretasi_custom_field4 as AspekB
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'W'
        AND     interpretasi_tesId = 45
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 <= ".$W."
        AND     interpretasi_custom_field2 >= ".$W."
    ";

    if($resultW = mysqli_query($mysqli, $sqlInterpretasiPAPIW)){
        while($row = mysqli_fetch_array($resultW)){
            $interpretasiW = $row['interpretasi_text'];
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
        <div style="margin: 10px; width:100%; text-align: left; margin-top: 5em; margin-left: 4.5em; margin-right: 20px"><H3><b>Diagram PAPI</b></H3></div>
        <table  style="width: -webkit-fill-available; margin: 10px; width:100%; font-size:12px; margin-left: 5.5em; margin-right: 20px">
            <tr>
                <td style="width: 10%;">No Test</td>
                <td style="width: 1%;">:</td>
                <td style="width: 49%;">&nbsp;</td>
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
            <tr>
                <td style="width: 10%;">Status</td>
                <td style="width: 1%;">:</td>
                <td style="width: 39%;"><?php if($status == 5){ echo "Time Out";}else if($status == 4 ){echo "Selesai";}else{ echo "Belum Dikerjakan";}  ?></td>
            </tr>
        </table>
                    <div>
                         <?php $image = base_url().'public/plugins/adminlte/img/papi.png';?>
                         <img style="position: absolute; width: 46.2em; height: 45.2em; z-index: 1; margin-left: 6em; margin-top: -3em; "src=" <?php echo base_url().'public/plugins/adminlte/img/papi.png';?>">
                        <canvas id="canvas" class="canvasPAPI"><div>&nbsp;</div></canvas>
                    </div>
                    <!-- </td> -->
                <!-- </tr> -->
        <!-- </table> -->
        <div>&nbsp;</div>
        <div>&nbsp;</div>
        <div>&nbsp;</div>
        <div>&nbsp;</div>
        <div>&nbsp;</div>
        <table style="margin: 10px; margin-left: 5em; margin-right: 20px; z-index: 100; position: relative;  z-index: 100;">
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
        <!-- <div style="height: 25em;">&nbsp;</div> -->
        <!--footer bawah---->
        <footer style="page-break-after: always; "></footer>
        <div>&nbsp;</div>
        <div>&nbsp;</div>
        <div>&nbsp;</div>
        <div>&nbsp;</div>
        <div style="margin: 10px; width:100%; text-align: left; margin-top: 5em; margin-left: 20px; margin-right: 20px"><H3><b>Interpretasi PAPI</b></H3></div>
        <table  style="width: -webkit-fill-available; margin: 10px; width:100%; font-size:12px; margin-left: 20px; margin-right: 20px; font-size:10.5px;">
            <tr>
                <td style="width: 10%;">No Test</td>
                <td style="width: 1%;">:</td>
                <td style="width: 49%;">&nbsp;</td>
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
            <tr>
                <td style="width: 10%;">Status</td>
                <td style="width: 1%;">:</td>
                <td style="width: 39%;"><?php if($status == 5){ echo "Time Out";}else if($status == 4 ){echo "Selesai";}else{ echo "Belum Dikerjakan";}  ?></td>
            </tr>
        </table>
        <!-- <table  style="width: -webkit-fill-available; margin: 10px; width:90%; font-size:12px; margin-left: 20px; margin-right: 20px; border: 1px solid black;"> -->
        <table class="tableWorkDirection" style="font-size:10.5px;">
            <tr style="border: 1px solid black;">
                <td style="width: 40%; border: 1px solid black; text-align: center;" colspan="2">Aspek</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;">Faktor</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;">Nilai</td>
                <td style="width: 50%; border: 1px solid black; text-align: center;">Analisis</td>
            </tr>
            <tr style="border: 1px solid black;">
                <td style="width: 10%; border: 1px solid black; text-align: center; background-color: #d5ead9 !important; -webkit-print-color-adjust: exact;" rowspan="3">Arah Kerja</td>
                <td style="width: 30%; border: 1px solid black; padding-left: 5px;">Menyelesaikan tugas secara pribadi</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;">N</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;"><?php echo $N;?></td>
                <td style="width: 50%; border: 1px solid black; padding-left: 5px;"><?php echo $interpretasiN?></td>
            </tr>
            <tr style="border: 1px solid black;">
                <td style="width: 30%; border: 1px solid black; padding-left: 5px;">Peranan sebagai pekerja keras</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;">G</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;"><?php echo $G;?></td>
                <td style="width: 50%; border: 1px solid black; padding-left: 5px;"><?php echo $interpretasiG?></td>
            </tr>
            <tr style="border: 1px solid black;">
                <td style="width: 30%; border: 1px solid black; padding-left: 5px;">Hasrat untuk berpartisipasi</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;">A</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;"><?php echo $A;?></td>
                <td style="width: 50%; border: 1px solid black; padding-left: 5px;"><?php echo $interpretasiA?></td>
            </tr>



            <tr style="border: 1px solid black;">
                <td style="width: 10%; border: 1px solid black; text-align: center; background-color: #30318a !important; -webkit-print-color-adjust: exact; color:white !important;;" rowspan="3">Kepemimpinan</td>
                <td style="width: 30%; border: 1px solid black; padding-left: 5px;">Peranan sebagai pemimpin</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;">L</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;"><?php echo $L;?></td>
                <td style="width: 50%; border: 1px solid black; padding-left: 5px;"><?php echo $interpretasiL?></td>
            </tr>
            <tr style="border: 1px solid black;">
                <td style="width: 30% border: 1px solid black; padding-left: 5px;">Mengendalikan orang lain</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;">P</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;"><?php echo $P;?></td>
                <td style="width: 50%; border: 1px solid black; padding-left: 5px;"><?php echo $interpretasiP?></td>
            </tr>
            <tr style="border: 1px solid black;">
                <td style="width: 30%; border: 1px solid black; padding-left: 5px;">Mudah dalam membuat keputusan</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;">I</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;"><?php echo $I;?></td>
                <td style="width: 50%; border: 1px solid black; padding-left: 5px;"><?php echo $interpretasiI?></td>
            </tr>


            <tr style="border: 1px solid black;">
                <td style="width: 10%; border: 1px solid black; text-align: center; background-color: #f4b3b2 !important; -webkit-print-color-adjust: exact; color:black !important;;" rowspan="2">Aktifitas</td>
                <td style="width: 30%; border: 1px solid black; padding-left: 5px;">Tipe selalu sibuk</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;">T</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;"><?php echo $T;?></td>
                <td style="width: 50%; border: 1px solid black; padding-left: 5px;"><?php echo $interpretasiT?></td>
            </tr>
            <tr style="border: 1px solid black;">
                <td style="width: 30%; border: 1px solid black; padding-left: 5px;">Tipe orang yang bersemangat</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;">V</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;"><?php echo $V;?></td>
                <td style="width: 50%; border: 1px solid black; padding-left: 5px;"><?php echo $interpretasiV?></td>
            </tr>


            <tr style="border: 1px solid black;">
                <td style="width: 10%; border: 1px solid black; text-align: center; background-color: #fef000 !important; -webkit-print-color-adjust: exact; color:black !important;;" rowspan="4">Pergaulan</td>
                <td style="width: 30%; border: 1px solid black; padding-left: 5px;">Untuk mendapat perhatian</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;">X</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;"><?php echo $X;?></td>
                <td style="width: 50%; border: 1px solid black; padding-left: 5px;"><?php echo $interpretasiX?></td>
            </tr>
            <tr style="border: 1px solid black;">
                <td style="width: 30%; border: 1px solid black; padding-left: 5px;">Pergaulan luas</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;">S</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;"><?php echo $S;?></td>
                <td style="width: 50%; border: 1px solid black; padding-left: 5px;"><?php echo $interpretasiS?></td>
            </tr>
            <tr style="border: 1px solid black;">
                <td style="width: 30%; border: 1px solid black; padding-left: 5px;">Kebutuhan betah terhadap kelompok</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;">B</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;"><?php echo $B;?></td>
                <td style="width: 50%; border: 1px solid black; padding-left: 5px;"><?php echo $interpretasiB?></td>
            </tr>
            <tr style="border: 1px solid black;">
                <td style="width: 30%; border: 1px solid black; padding-left: 5px;">Kebutuhan untuk mendekati dan menyayangi</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;">O</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;"><?php echo $O;?></td>
                <td style="width: 50%; border: 1px solid black; padding-left: 5px;"><?php echo $interpretasiO?></td>
            </tr>


            <tr style="border: 1px solid black;">
                <td style="width: 10%; border: 1px solid black; text-align: center; background-color: #a0d8f6 !important; -webkit-print-color-adjust: exact; color:black !important;;" rowspan="3">Gaya Kerja</td>
                <td style="width: 30%; border: 1px solid black; padding-left: 5px;">Type Teoritikal</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;">R</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;"><?php echo $R;?></td>
                <td style="width: 50%; border: 1px solid black; padding-left: 5px;"><?php echo $interpretasiR?></td>
            </tr>
            <tr style="border: 1px solid black;">
                <td style="width: 30%; border: 1px solid black; padding-left: 5px;">Suka pekerjaan yang terperinci</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;">D</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;"><?php echo $D;?></td>
                <td style="width: 50%; border: 1px solid black;  padding-left: 5px;"><?php echo $interpretasiD?></td>
            </tr>
            <tr style="border: 1px solid black;">
                <td style="width: 30%; border: 1px solid black; padding-left: 5px;">Type pengatur</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;">C</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;"><?php echo $C;?></td>
                <td style="width: 50%; border: 1px solid black; padding-left: 5px;"><?php echo $interpretasiC?></td>
            </tr>


            <tr style="border: 1px solid black;">
                <td style="width: 10%; border: 1px solid black; text-align: center; background-color: #ea1f29 !important; -webkit-print-color-adjust: exact; color:white !important;;" rowspan="3">Sifat</td>
                <td style="width: 30%; border: 1px solid black; padding-left: 5px;">Hasrat untuk berubah</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;">Z</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;"><?php echo $Z;?></td>
                <td style="width: 50%; border: 1px solid black; padding-left: 5px;"><?php echo $interpretasiZ?></td>
            </tr>
            <tr style="border: 1px solid black;">
                <td style="width: 30%; border: 1px solid black; padding-left: 5px;">Pengendalian Emosi</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;">E</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;"><?php echo $E;?></td>
                <td style="width: 50%; border: 1px solid black; padding-left: 5px;"><?php echo $interpretasiE?></td>
            </tr>
            <tr style="border: 1px solid black;">
                <td style="width: 30%; border: 1px solid black; padding-left: 5px;">Agresi</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;">K</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;"><?php echo $K;?></td>
                <td style="width: 50%; border: 1px solid black; padding-left: 5px;"><?php echo $interpretasiK?></td>
            </tr>


            <tr style="border: 1px solid black;">
                <td style="width: 10%; border: 1px solid black; text-align: center; background-color: #29994b !important; -webkit-print-color-adjust: exact; color:white !important;;" rowspan="2">Ketaatan</td>
                <td style="width: 30%; border: 1px solid black; padding-left: 5px;">Dukungan dari atasan</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;">F</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;"><?php echo $F;?></td>
                <td style="width: 50%; border: 1px solid black; padding-left: 5px;"><?php echo $interpretasiF?></td>
            </tr>
            <tr style="border: 1px solid black;">
                <td style="width: 30%; border: 1px solid black; padding-left: 5px;">Kebut, Taat pada aturan pengarahan</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;">W</td>
                <td style="width: 5%; border: 1px solid black; text-align: center;"><?php echo $W;?></td>
                <td style="width: 50%; border: 1px solid black; padding-left: 5px;"><?php echo $interpretasiW?></td>
            </tr>


        </table>

        <footer style="page-break-after: always; "></footer>
        <div>&nbsp;</div>
        <div>&nbsp;</div>
        <div style="margin: 10px; width:100%; text-align: left; margin-top: 10px; margin-left: 20px; margin-right: 20px"><H3><b>Diagram PAPI</b></H3></div>
        <table  style="width: -webkit-fill-available; margin: 10px; width:100%; font-size:12px; margin-left: 20px; margin-right: 20px">
            <tr>
                <td style="width: 10%;">No Test</td>
                <td style="width: 1%;">:</td>
                <td style="width: 49%;">&nbsp;</td>
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
            <tr>
                <td style="width: 10%;">Status</td>
                <td style="width: 1%;">:</td>
                <td style="width: 39%;"><?php if($status == 5){ echo "Time Out";}else if($status == 4 ){echo "Selesai";}else{ echo "Belum Dikerjakan";}  ?></td>
            </tr>
        </table>
        <table class="tableWorkDirection" style="font-size:10.5px;">
            <!-- WORK DIRECTION	-->
            <tr class="tableWorkDirectionTr">
                <td style="width: 25%;" style="text-align: -webkit-auto;">&nbsp;<strong>ARAH KERJA</strong></td>
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
                <td style="text-align: -webkit-auto;">&nbsp;&nbsp;&nbsp;&nbsp;Menyelesaikan tugas secara pribadi</td>
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
                <td class="tableWorkDirectionTd" style="text-align: -webkit-auto;">&nbsp;&nbsp;&nbsp;&nbsp;Peranan sebagai pekerja keras</td>
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
                <td class="tableWorkDirectionTd" style="text-align: -webkit-auto;">&nbsp;&nbsp;&nbsp;&nbsp;Hasrat untuk berpartisipasi</td>
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
                    <td class="tableWorkDirectionTd" style="text-align: -webkit-auto;">&nbsp;<strong>KEPEMIMPINAN</strong></td>
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
                    <td style="text-align: -webkit-auto;">&nbsp;&nbsp;&nbsp;&nbsp;Peranan sebagai pemimpin</td>
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
                    <td class="tableWorkDirectionTd" style="text-align: -webkit-auto;">&nbsp;&nbsp;&nbsp;&nbsp;Mengendalikan orang lain</td>
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
                    <td class="tableWorkDirectionTd" style="text-align: -webkit-auto;">&nbsp;&nbsp;&nbsp;&nbsp;Mudah dalam membuat keputusan</td>
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
                        <td class="tableWorkDirectionTd" style="text-align: -webkit-auto;">&nbsp;<strong>AKTIFITAS</strong></td>
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
                        <td style="text-align: -webkit-auto;">&nbsp;&nbsp;&nbsp;&nbsp;Tipe selalu sibuk</td>
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
                        <td class="tableWorkDirectionTd" style="text-align: -webkit-auto;">&nbsp;&nbsp;&nbsp;&nbsp;Tipe orang yang bersemangat</td>
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
                            <td class="tableWorkDirectionTd" style="text-align: -webkit-auto;">&nbsp;<strong>PERGAULAN</strong></td>
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
                            <td style="text-align: -webkit-auto;">&nbsp;&nbsp;&nbsp;&nbsp;Untuk mendapat perhatian</td>
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
                            <td class="tableWorkDirectionTd" style="text-align: -webkit-auto;">&nbsp;&nbsp;&nbsp;&nbsp;Pergaulan luas</td>
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
                            <td style="text-align: -webkit-auto;">&nbsp;&nbsp;&nbsp;&nbsp;Kebutuhan betah terhadap kelompok</td>
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
                            <td class="tableWorkDirectionTd" style="text-align: -webkit-auto;">&nbsp;&nbsp;&nbsp;&nbsp;Kebutuhan untuk mendekati dan menyayangi</td>
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
                            <td class="tableWorkDirectionTd" style="text-align: -webkit-auto;">&nbsp;<strong>GAYA KERJA</strong></td>
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
                            <td style="text-align: -webkit-auto;">&nbsp;&nbsp;&nbsp;&nbsp;Type Teoritikal</td>
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
                            <td class="tableWorkDirectionTd" style="text-align: -webkit-auto;">&nbsp;&nbsp;&nbsp;&nbsp;Suka pekerjaan yang terperinci</td>
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
                            <td class="tableWorkDirectionTd" style="text-align: -webkit-auto;">&nbsp;&nbsp;&nbsp;&nbsp;Type pengatur</td>
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
                            <td class="tableWorkDirectionTd" style="text-align: -webkit-auto;">&nbsp;<strong>SIFAT</strong></td>
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
                            <td style="text-align: -webkit-auto;">&nbsp;&nbsp;&nbsp;&nbsp;Hasrat untuk berubah</td>
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
                            <td class="tableWorkDirectionTd" style="text-align: -webkit-auto;">&nbsp;&nbsp;&nbsp;&nbsp;Pengendalian Emosi</td>
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
                            <td class="tableWorkDirectionTd" style="text-align: -webkit-auto;">&nbsp;&nbsp;&nbsp;&nbsp;Agresi</td>
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
                            <td class="tableWorkDirectionTd" style="text-align: -webkit-auto;">&nbsp;<strong>KETAATAN</strong></td>
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
                            <td class="tableWorkDirectionTd" style="text-align: -webkit-auto;">&nbsp;&nbsp;&nbsp;&nbsp;Kebut, Taat pada aturan pengarahan</td>
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

<!-- <form id="TheForm" action="<?php echo site_url().'/manager/tes_hasil_report_papi_excel'; ?>" method="POST" target="TheWindow">
    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
    <input type="hidden" name="tesuser_tes_id" value="<?php echo $tesuser_tes_id; ?>" />
</form> -->

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

             @page {
        size: A4;
        margin: 0;
    }
    @media print {
        html, body {
            width: 210mm;
            height: 297mm;        
        }
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }
            

    .tableWorkDirection{
        font-size:11px;
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


<!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script> -->
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
                gridLines:  {
                                color: ['transparant']
                            },
                yAxes:      [{
                                gridLines:  {
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
    .canvasPAPI {
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
           margin-left: -7em;
        }
     </style>'
?>

<!-- Report MBTI -->

<?php


}else{

}


if(mysqli_connect_errno()) {
    printf("Connect failed: %s\n",mysql_connect_error());
    exit();
}
// echo $user_id."+".$tesuser_tes_id."+".$topik_id;
$reportShowMBTI = "No";
$sql = "
        SELECT  cbt_user.user_firstname as name, 
                cbt_user.user_jenis_kelamin as jenis_kelamin,
                cbt_tes.tes_nama as nama, 
                cbt_tes_user.tesuser_id as user_id, 
                cbt_tes_user.tesuser_status as tesuser_status,
                cbt_soal.soal_detail as soal, 
                cbt_soal.soal_nomor as soal_nomor, 
                cbt_tes_soal.tessoal_jawaban_text as jawaban,
                cbt_tes.tes_begin_time as tanggal_tes,
                cbt_user.user_tanggal_lahir as tanggal_lahir,
                cbt_user.user_pendidikan_terakhir as pendidikan_terakhir,
                cbt_user.user_jenis_kelamin as jenis_kelamin,
                cbt_user.user_pekerjaan as pekerjaan
        FROM    cbt_tes_user, 
                cbt_user,
                cbt_tes,
                cbt_tes_soal,
                cbt_soal 
        WHERE   cbt_user.user_id = cbt_tes_user.tesuser_user_id 
        AND     cbt_tes_user.tesuser_tes_id = cbt_tes.tes_id 
        AND     cbt_user.user_id = ".$user_id."
        AND     cbt_tes.tes_id = 125 
        AND     cbt_tes_soal.tessoal_tesuser_id = cbt_tes_user. tesuser_id 
        AND     cbt_soal.soal_id = cbt_tes_soal.tessoal_soal_id 
        ORDER BY cbt_tes_soal.tessoal_order";
        
        $J1 = 0;
        $J2 = 0;
        $J3 = 0;
        $J4 = 0;
        $J5 = 0;
        $J6 = 0;
        $J7 = 0;
        $J8 = 0;
        $J9 = 0;
        $J10 = 0;
        $J11 = 0;
        $J12 = 0;
        $J13 = 0;
        $J14 = 0;
        $J15 = 0;
        $J16 = 0;
        $J17 = 0;
        $J18 = 0;
        $J19 = 0;
        $J20 = 0;
        $J21 = 0;
        $J22 = 0;
        $J23 = 0;
        $J24 = 0;
        $J25 = 0;
        $J26 = 0;
        $J27 = 0;
        $J28 = 0;
        $J29 = 0;
        $J30 = 0;
        $J31 = 0;
        $J32 = 0;
        $J33 = 0;
        $J34 = 0;
        $J35 = 0;
        $J36 = 0;
        $J37 = 0;
        $J38 = 0;
        $J39 = 0;
        $J40 = 0;
        $J41 = 0;
        $J42 = 0;
        $J43 = 0;
        $J44 = 0;
        $J45 = 0;
        $J46 = 0;
        $J47 = 0;
        $J48 = 0;
        $J49 = 0;
        $J50 = 0;
        $J51 = 0;
        $J52 = 0;
        $J53 = 0;
        $J54 = 0;
        $J55 = 0;
        $J56 = 0;
        $J57 = 0;
        $J58 = 0;
        $J59 = 0;
        $J60 = 0;
        $J61 = 0;
        $J62 = 0;
        $J63 = 0;
        $J64 = 0;
        $J65 = 0;
        $J66 = 0;
        $J67 = 0;
        $J68 = 0;
        $J69 = 0;
        $J70 = 0;
        $J71 = 0;
        $J72 = 0;
        $J73 = 0;
        $J74 = 0;
        $J75 = 0;
        $J76 = 0;
        $J77 = 0;
        $J78 = 0;
        $J79 = 0;
        $J80 = 0;

        
        
        if($result = mysqli_query($mysqli, $sql)){
            while($row = mysqli_fetch_array($result)){

                if($row['soal_nomor'] == '1'){
                    $J1 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '2'){
                    $J2 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '3'){
                    $J3 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '4'){
                    $J4 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '5'){
                    $J5 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '6'){
                    $J6 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '7'){
                    $J7 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '8'){
                    $J8 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '9'){
                    $J9 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '10'){
                    $J10 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '11'){
                    $J11 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '12'){
                    $J12 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '13'){
                    $J13 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '14'){
                    $J14 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '15'){
                    $J15 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '16'){
                    $J16 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '17'){
                    $J17 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '18'){
                    $J18 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '19'){
                    $J19 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '20'){
                    $J20 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '21'){
                    $J21 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '22'){
                    $J22 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '23'){
                    $J23 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '24'){
                    $J24 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '25'){
                    $J25 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '26'){
                    $J26 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '27'){
                    $J27 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '28'){
                    $J28 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '29'){
                    $J29 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '30'){
                    $J30 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '31'){
                    $J31 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '32'){
                    $J32 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '33'){
                    $J33 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '34'){
                    $J34 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '35'){
                    $J35 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '36'){
                    $J36 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '37'){
                    $J37 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '38'){
                    $J38 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '39'){
                    $J39 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '40'){
                    $J40 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '41'){
                    $J41 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '42'){
                    $J42 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '43'){
                    $J43 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '44'){
                    $J44 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '45'){
                    $J45 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '46'){
                    $J46 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '47'){
                    $J47 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '48'){
                    $J48 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '49'){
                    $J49 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '50'){
                    $J50 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '51'){
                    $J51 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '52'){
                    $J52 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '53'){
                    $J53 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '54'){
                    $J54 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '55'){
                    $J55 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '56'){
                    $J56 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '57'){
                    $J57 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '58'){
                    $J58 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '59'){
                    $J59 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '60'){
                    $J60 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '61'){
                    $J61 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '62'){
                    $J62 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '63'){
                    $J63 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '64'){
                    $J64 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '65'){
                    $J65 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '66'){
                    $J66 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '67'){
                    $J67 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '68'){
                    $J68 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '69'){
                    $J69 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '70'){
                    $J70 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '71'){
                    $J71 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '72'){
                    $J72 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '73'){
                    $J73 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '74'){
                    $J74 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '75'){
                    $J75 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '76'){
                    $J76 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '77'){
                    $J77 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '78'){
                    $J78 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '79'){
                    $J79 = $row['jawaban'];
                }else if ($row['soal_nomor'] == '80'){
                    $J80 = $row['jawaban'];
                }
                $name = $row['name'];
                $jenis_kelamin = $row['jenis_kelamin'];
                $tanggal_tes = $row['tanggal_tes'];
                $tanggal_lahir = $row['tanggal_lahir'];
                
                $from = new DateTime($tanggal_lahir);
                $to   = new DateTime('today');
                $pendidikan_terakhir = $row['pendidikan_terakhir'];
                $pekerjaan = $row['pekerjaan'];
                $status = $row['tesuser_status'];
                $reportShowMBTI = "Yes";
            }

       
            $E = 0;
            $S = 0;
            $T = 0;
            $N = 0;
            $I = 0;
            $F = 0;
            $J = 0;
            $P = 0;
    
            $EPercentage = 0;
            $IPercentage = 0;
            $SPercentage = 0;
            $NPercentage = 0;
            $TPercentage = 0;
            $FPercentage = 0;
            $JPercentage = 0;
            $PPercentage = 0;
            
                $E = $J1 + $J2 + $J3 + $J4 + $J5 + $J21 + $J22 + $J23 + $J24 + $J25;
                $S = $J6 + $J7 + $J8 + $J9 + $J10 + $J26 + $J27 + $J28 + $J29 + $J30;
                $T = $J11 + $J12 + $J13 + $J14 + $J15 + $J31 + $J32 + $J33 + $J34 + $J35;
                $N = $J46 + $J47 + $J48 + $J49 + $J50 + $J66 + $J67 + $J68 + $J69 + $J70;
                $I = $J41 + $J42 + $J43 + $J44 + $J45 + $J61 + $J62 + $J63 + $J64 + $J65;
                $F = $J51 + $J52 + $J53 + $J54 + $J55 + $J71 + $J72 + $J73 + $J74 + $J75;
                $J = $J16 + $J17 + $J18 + $J19 + $J20 + $J36 + $J37 + $J38 + $J39 + $J40;
                $P = $J56 + $J57 + $J58 + $J59 + $J60 + $J76 + $J77 + $J78 + $J79 + $J80;


                $FirstWord = '';
                $SecondWord = '';
                $ThirdWord = '';
                $FourthWord = '';
                $FinalWord = '';

                $totalFirst = 0;
                $totalTwo = 0;
                $totalThree = 0;
                $totalFour = 0;

                $Personality = '';
                $StrongAndWeekness = '';
                $Deskripsi = '';
                $Type = '';

                
        
        }else{
            $reportShowMBTI = "No";
        }

        // if($FinalWord == 'ISTJ')
        // Bertanggung jawab, tulus, analitis, pendiam, realistis, sistematis. Pekerja keras dan dapat dipercaya dengan penilaian praktis

if($reportShowMBTI == "Yes"){

                $totalFirst = $E + $I;
                $totalTwo = $S + $N;
                $totalThree = $T + $F;
                $totalFour = $J + $P;

                $EPercentage = ($E*100)/$totalFirst;
                $IPercentage = ($I*100)/$totalFirst;

                $SPercentage = ($S*100)/$totalTwo;
                $NPercentage = ($N*100)/$totalTwo;

                $TPercentage = ($T*100)/$totalThree;
                $FPercentage = ($F*100)/$totalThree;

                $JPercentage = ($J*100)/$totalFour;
                $PPercentage = ($P*100)/$totalFour;

                if($E > $I){
                    $FirstWord = 'E';
                }else{
                    $FirstWord = 'I';
                }

                if($S > $N){
                    $SecondWord = 'S';
                }else{
                    $SecondWord = 'N';
                }

                if($T > $F){
                    $ThirdWord = 'T';
                }else{
                    $ThirdWord = 'F';
                }

                if($J > $P){
                    $FourthWord = 'J';
                }else{
                    $FourthWord = 'P';
                }

                $FinalWord = $FirstWord.$SecondWord.$ThirdWord.$FourthWord;
                $InterpretasiMBTI = '';

                $sqlInterpretasiMBTI = "
                    SELECT interpretasi_text,
                    interpretasi_custom_field1 as Personality,
                    interpretasi_custom_field2 as StrongAndWeekness,
                    interpretasi_custom_field3 as Deskripsi,
                    interpretasi_custom_field4 as Type
                    FROM cbt_Interpretasi
                    WHERE interpretasi_kode = '".$FinalWord."'
                    AND interpretasi_tesId = 125
                    AND interpretasi_subtes = 1
                ";

                if($resultInterpretasi = mysqli_query($mysqli, $sqlInterpretasiMBTI)){
                    while($rowMBTI = mysqli_fetch_array($resultInterpretasi)){
                            $InterpretasiMBTI = $rowMBTI['interpretasi_text'];
                            $Personality = $rowMBTI['Personality'];
                            $StrongAndWeekness = $rowMBTI['StrongAndWeekness'];
                            $Deskripsi = $rowMBTI['Deskripsi'];
                            $Type = $rowMBTI['Type'];
                    }
                }


?>
<html>
<footer style="page-break-after: always; "></footer>
<!-- <div style="height: 25em;">&nbsp;</div> -->
<!--footer bawah---->

<head>
    <title>MBTI</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<section class="invoice">
     <!-- style="margin: 10px 150px !important;"> -->
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div>&nbsp;</div>
<div>&nbsp;</div>
<div style="width:100%; text-align: center; margin-top: 10px;"><H1 >Lembar Jawaban MBTI</H1></div>


<table  style="width: -webkit-fill-available; margin: 30px; width:100%;">
    <tr>
        <td style="width: 15%;">Nomor</td>
        <td style="width: 2%;">:</td>
        <td style="width: 30%;">&nbsp;</td>
        <td style="width: 15%;">Tgl Test</td>
        <td style="width: 2%;">:</td>
        <td style="width: 30%;"><?php $date=date_create($tanggal_tes); echo date_format($date,"d F Y");?></td>
    </tr>
    <tr>
        <td style="width: 10%;">Nama</td>
        <td style="width: 2%;">:</td>
        <td style="width: 30%;"><?php echo $name ?></td>
        <td>Tgl Lahir</td>
        <td>:</td>
        <td><?php $date=date_create($tanggal_lahir); echo date_format($date,"d F Y");?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?php if($jenis_kelamin == 0){ echo "Perempuan";}else{ echo "Laki-Laki";}?></td>
        <td>Usia saat ini</td>
        <td>:</td>
        <td><?php echo $from->diff($to)->y;?> Tahun</td>
    </tr>
    <tr>
        <td>Pendidikan</td>
        <td>:</td>
        <td>
            <?php 
                if($pendidikan_terakhir == 1){
                    echo "SMA";
                }else if($pendidikan_terakhir == 2){
                    echo "SMK";
                }else if($pendidikan_terakhir == 3){
                    echo "S1";
                }else if($pendidikan_terakhir == 4){
                    echo "S2";
                }else if($pendidikan_terakhir == 5){
                    echo "S3";
                }else if($pendidikan_terakhir > 5){
                    echo "Lain-Lain";
                }else{
                    echo "Lain-Lain";
                }
            ?>
        </td>
        <td>Status</td>
        <td>:</td>
        <td><?php if($status == 5){ echo "Time Out";}else if($status == 4 ){echo "Selesai";}else{ echo "Belum Dikerjakan";}  ?></td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td><?php echo $pekerjaan;?></td>
    </tr>
</table>
<div>&nbsp;</div>
<table style="width: -webkit-fill-available; margin: 30px; border-bottom: 1px dashed;">
    <tr>
        <td>1</td>
        <td class="tdNomer"><?php echo $J1 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>11</td>
        <td class="tdNomer"><?php echo $J11 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>21</td>
        <td class="tdNomer"><?php echo $J21 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>31</td>
        <td class="tdNomer"><?php echo $J31 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>41</td>
        <td class="tdNomer"><?php echo $J41 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>51</td>
        <td class="tdNomer"><?php echo $J51 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>61</td>
        <td class="tdNomer"><?php echo $J61 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>71</td>
        <td class="tdNomer"><?php echo $J71 ?></td>
    </tr>
    <tr style="font-size: 4px;">
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
    </tr>
    <tr>
        <td>2</td>
        <td class="tdNomer"><?php echo $J2 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>12</td>
        <td class="tdNomer"><?php echo $J12 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>22</td>
        <td class="tdNomer"><?php echo $J22 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>32</td>
        <td class="tdNomer"><?php echo $J32 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>42</td>
        <td class="tdNomer"><?php echo $J42 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>52</td>
        <td class="tdNomer"><?php echo $J52 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>62</td>
        <td class="tdNomer"><?php echo $J62 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>72</td>
        <td class="tdNomer"><?php echo $J72 ?></td>
    </tr>
    <tr style="font-size: 4px;">
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
    </tr>
    <tr>
        <td>3</td>
        <td class="tdNomer"><?php echo $J3 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>13</td>
        <td class="tdNomer"><?php echo $J13 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>23</td>
        <td class="tdNomer"><?php echo $J23 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>33</td>
        <td class="tdNomer"><?php echo $J33 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>43</td>
        <td class="tdNomer"><?php echo $J43 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>53</td>
        <td class="tdNomer"><?php echo $J53 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>63</td>
        <td class="tdNomer"><?php echo $J63 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>73</td>
        <td class="tdNomer"><?php echo $J73 ?></td>
    </tr>
    <tr style="font-size: 4px;">
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
    </tr>
    <tr>
        <td>4</td>
        <td class="tdNomer"><?php echo $J4 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>14</td>
        <td class="tdNomer"><?php echo $J14 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>24</td>
        <td class="tdNomer"><?php echo $J24 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>34</td>
        <td class="tdNomer"><?php echo $J34 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>44</td>
        <td class="tdNomer"><?php echo $J44 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>54</td>
        <td class="tdNomer"><?php echo $J54 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>64</td>
        <td class="tdNomer"><?php echo $J64 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>74</td>
        <td class="tdNomer"><?php echo $J74 ?></td>
    </tr>
    <tr style="font-size: 4px;">
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
    </tr>
    <tr>
        <td>5</td>
        <td class="tdNomer"><?php echo $J5 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>15</td>
        <td class="tdNomer"><?php echo $J15 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>25</td>
        <td class="tdNomer"><?php echo $J25 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>35</td>
        <td class="tdNomer"><?php echo $J35 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>45</td>
        <td class="tdNomer"><?php echo $J45 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>55</td>
        <td class="tdNomer"><?php echo $J55 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>65</td>
        <td class="tdNomer"><?php echo $J65 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>75</td>
        <td class="tdNomer"><?php echo $J75 ?></td>
    </tr>
    <tr style="font-size: 4px;">
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
    </tr>
    <tr>
        <td>6</td>
        <td class="tdNomer"><?php echo $J6 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>16</td>
        <td class="tdNomer"><?php echo $J16 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>26</td>
        <td class="tdNomer"><?php echo $J26 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>36</td>
        <td class="tdNomer"><?php echo $J36 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>46</td>
        <td class="tdNomer"><?php echo $J46 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>56</td>
        <td class="tdNomer"><?php echo $J56 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>66</td>
        <td class="tdNomer"><?php echo $J66 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>76</td>
        <td class="tdNomer"><?php echo $J76 ?></td>
    </tr>
    <tr style="font-size: 4px;">
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
    </tr>
    <tr>
        <td>7</td>
        <td class="tdNomer"><?php echo $J7 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>17</td>
        <td class="tdNomer"><?php echo $J17 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>27</td>
        <td class="tdNomer"><?php echo $J27 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>37</td>
        <td class="tdNomer"><?php echo $J37 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>47</td>
        <td class="tdNomer"><?php echo $J47 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>57</td>
        <td class="tdNomer"><?php echo $J57 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>67</td>
        <td class="tdNomer"><?php echo $J67 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>77</td>
        <td class="tdNomer"><?php echo $J77 ?></td>
    </tr>
    <tr style="font-size: 4px;">
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
    </tr>
    <tr>
        <td>8</td>
        <td class="tdNomer"><?php echo $J8 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>18</td>
        <td class="tdNomer"><?php echo $J18 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>28</td>
        <td class="tdNomer"><?php echo $J28 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>38</td>
        <td class="tdNomer"><?php echo $J38 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>48</td>
        <td class="tdNomer"><?php echo $J48 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>58</td>
        <td class="tdNomer"><?php echo $J58 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>68</td>
        <td class="tdNomer"><?php echo $J68 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>78</td>
        <td class="tdNomer"><?php echo $J78 ?></td>
    </tr>
    <tr style="font-size: 4px;">
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
    </tr>
    <tr>
        <td>9</td>
        <td class="tdNomer"><?php echo $J9 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>19</td>
        <td class="tdNomer"><?php echo $J19 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>29</td>
        <td class="tdNomer"><?php echo $J29 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>39</td>
        <td class="tdNomer"><?php echo $J39 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>49</td>
        <td class="tdNomer"><?php echo $J49 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>59</td>
        <td class="tdNomer"><?php echo $J59 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>69</td>
        <td class="tdNomer"><?php echo $J69 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>79</td>
        <td class="tdNomer"><?php echo $J79 ?></td>
    </tr>
    <tr style="font-size: 4px;">
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
    </tr>
    <tr>
        <td>10</td>
        <td class="tdNomer"><?php echo $J10 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>20</td>
        <td class="tdNomer"><?php echo $J20 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>30</td>
        <td class="tdNomer"><?php echo $J30 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>40</td>
        <td class="tdNomer"><?php echo $J40 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>50</td>
        <td class="tdNomer"><?php echo $J50 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>60</td>
        <td class="tdNomer"><?php echo $J60 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>70</td>
        <td class="tdNomer"><?php echo $J70 ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>80</td>
        <td class="tdNomer"><?php echo $J80 ?></td>
    </tr>
    <tr style="font-size: 4px;">
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="tdSpace">&nbsp;</td>
    </tr>
    

</table>
<!-- <div style="width: -webkit-fill-available; margin: 30px;">Diisi oleh penilai :</div> -->
<table style="width: -webkit-fill-available; margin: 30px;">
    <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td class="tdNomerAll"><sup>E</sup>&nbsp;&nbsp;&nbsp;<?php echo $E ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td class="tdNomerAll"><sup>I</sup>&nbsp;&nbsp;&nbsp;<?php echo $I ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td class="tdNomerAll"><sup>S</sup>&nbsp;&nbsp;&nbsp;<?php echo $S ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td class="tdNomerAll"><sup>N</sup>&nbsp;&nbsp;&nbsp;<?php echo $N ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td class="tdNomerAll"><sup>T</sup>&nbsp;&nbsp;&nbsp;<?php echo $T ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td class="tdNomerAll"><sup>F</sup>&nbsp;&nbsp;&nbsp;<?php echo $F ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td class="tdNomerAll"><sup>J</sup>&nbsp;&nbsp;&nbsp;<?php echo $J ?></td>
        <td class="tdSpace">&nbsp;</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td class="tdNomerAll"><sup>P</sup>&nbsp;&nbsp;&nbsp;<?php echo $P ?></td>
    </tr>
</table>


<table style="width: -webkit-fill-available; margin: 30px; border: 2px solid black;">
    <tr style="border: 2px solid black; text-align:center;">
        <td style="border: 2px solid black;"><strong>No</strong></td>
        <td colspan="4" style="text-align:center;"><strong>DIMENSI</strong></td>
    </tr>
    <tr style="border: 2px solid black;">
        <td width="5%" style="text-align:center; border: 2px solid black;">1</td>
        <td width="42.5%" style="text-align:right; border: 2px solid black;"><strong>INTROVET (I</strong>)&nbsp;</td>
        <td width="5%" style="text-align:center; border: 2px solid black;">&nbsp;<?php echo round ($IPercentage,1)?>%&nbsp;</td>
        <td width="5%" style="text-align:center; border: 2px solid black;">&nbsp;<?php echo round ($EPercentage,1)?>%&nbsp;</td>
        <td>&nbsp;<strong>(E) EKSTROVERT</strong></td>
    </tr>
    <tr style="border: 2px solid black;">
        <td style="text-align:center; border: 2px solid black;">2</td>
        <td width="42.5%" style="text-align:right; border: 2px solid black;"><strong>SENSING (S)</strong>&nbsp;</td>
        <td width="5%" style="text-align:center; border: 2px solid black;">&nbsp;<?php echo round ($SPercentage,1)?>%&nbsp;</td>
        <td width="5%" style="text-align:center; border: 2px solid black;">&nbsp;<?php echo round ($NPercentage,1)?>%&nbsp;</td>
        <td>&nbsp;<strong>(N) INTUITION</strong></td>
    </tr>
    <tr style="border: 2px solid black;">
        <td style="text-align:center; border: 2px solid black;">3</td>
        <td width="42.5%" style="text-align:right; border: 2px solid black;"><strong>THINKING (T)</strong>&nbsp;</td>
        <td width="5%" style="text-align:center; border: 2px solid black;">&nbsp;<?php echo round ($TPercentage,1)?>%&nbsp;</td>
        <td width="5%" style="text-align:center; border: 2px solid black;">&nbsp;<?php echo round ($FPercentage,1)?>%&nbsp;</td>
        <td>&nbsp;<strong>(F) FEELING</strong></td>
    </tr>
    <tr style="border: 2px solid black;">
        <td style="text-align:center; border: 2px solid black;">4</td>
        <td width="42.5%" style="text-align:right; border: 2px solid black;"><strong>JUDGING (J)</strong>&nbsp;</td>
        <td width="5%" style="text-align:center; border: 2px solid black;">&nbsp;<?php echo round ($JPercentage,1)?>%&nbsp;</td>
        <td width="5%" style="text-align:center; border: 2px solid black;">&nbsp;<?php echo round ($PPercentage,1)?>%&nbsp;</td>
        <td>&nbsp;<strong>(P) PERCEIVING</strong></td>
    </tr>
</table>

<table style="width: -webkit-fill-available; margin: 30px; border: 2px solid black;">
    <tr>
        <td width="5%">&nbsp;</td>
        <td>&nbsp;TIPE KEPRIBADIAN ANDA</td>
    </tr>
    <tr style="font-size:40px; text-align:center;">
        <td width="5%">&nbsp;</td>
        <td><strong><?php echo $FinalWord;?></strong></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
</table>

<!-- <table style="width: -webkit-fill-available; margin: 30px;">
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td><strong>Uraian keperibadian (<?php echo $FinalWord;?>) :</strong></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td><?php echo $name.' memiliki kepribadian yang '.$InterpretasiMBTI;?></td>
    </tr>
</table> -->


                    <!-- $Personality = '';
                $StrongAndWeekness = '';
                $Deskripsi = '';
                $Type = ''; -->
<footer style="page-break-after: always; "></footer>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<table style="border: 1px solid black; border-collapse: collapse; padding: 10px; width: -webkit-fill-available; margin: 30px;">
    <tr style="border: 2px solid black; text-align: center;">
        <td colspan="2"><?php echo $FinalWord.' ('.$Personality.')';?></td>
    </tr>
    <tr style="border: 2px solid black; text-align: center;">
        <td colspan="2"><?php echo $Deskripsi;?></td>
    </tr>
    <?php echo $StrongAndWeekness;?>
</table>


</body>
    <div>&nbsp;</div>
    <div class="row no-print">
        <div class="col-xs-12">
          <!-- <a href="invoice-print.html" onclick="myFunction()" class="btn btn-default"><i class="fa fa-print"></i> Print</a> -->
        
          <button type="button" class="btn btn-default" style="margin-right: 5px;" onclick="myFunction()">
            <i class="fa fa-print"></i> Print
          </button>


          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;"  onclick="detail_tes(<?php echo $user_id; ?>)" >
            <i class="fa fa-download"></i> Generate Excel
          </button>

        </div>
    </div>
</section>
<!-- <div style="height: 20em;">&nbsp;</div> -->
<!--footer bawah---->
</html>

<footer style="page-break-after: always; "></footer>
<!-- <form id="TheForm" action="<?php echo site_url().'/manager/tes_hasil_report_mbti_excel'; ?>" method="POST" target="TheWindow">
    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
    <input type="hidden" name="tesuser_tes_id" value="<?php echo $tesuser_tes_id; ?>" />
</form> -->

<script>
    function myFunction() {
        window.print();
    }
    function detail_tes(user_id){
        document.getElementById('TheForm').submit();
        // window.open("<?php echo site_url().'/manager/tes_hasil_report_mbti_excel'; ?>/index/"+user_id);
        
    }

</script>

<style>
        .tdNomer{
            border: 2px solid black; 
            width: 25px;
            text-align: center;
        }
        .tdNomerAll{
            border: 2px solid black; 
            width: 45px;
            text-align: left;
            padding-left: 2px;
        }
        .tdSpace{
            width:5%;
        }
        tr.border_bottom td {
            border-bottom:1pt solid black;
        }

        .divResult{
            border: 1px solid black;
            width: 50%;
            text-align: center;
        }
        .borderRight{
            border-right: 2px solid black;
        }
        .paddingtr{
            padding: 3px;
        }
    </style>




<!-- Report EPPS -->

<?php

}else{
    
}

$reportShowEPPS = "No";

if(mysqli_connect_errno()) {
    printf("Connect failed: %s\n",mysql_connect_error());
    exit();
}
// echo $user_id."+".$tesuser_tes_id."+".$topik_id;
$jenis_kelamin = '';
$sql = "
        SELECT  cbt_user.user_firstname as name,
        cbt_tes.tes_nama as nama,
        cbt_tes_user.tesuser_id as user_id,
        cbt_tes_user.tesuser_status as tesuser_status,
        cbt_soal.soal_detail as soal,
        cbt_jawaban.jawaban_benar as jawaban,
        cbt_soal.soal_nomor as soal_nomor,
        cbt_tes.tes_begin_time as tanggal_tes,
        cbt_user.user_tanggal_lahir as tanggal_lahir,
        cbt_user.user_jenis_kelamin as jenis_kelamin
        FROM 
        cbt_tes_user,
        cbt_user,
        cbt_tes,
        cbt_tes_soal,
        cbt_jawaban,
        cbt_soal
        WHERE   cbt_user.user_id = cbt_tes_user.tesuser_user_id
        AND 	cbt_tes_user.tesuser_tes_id = cbt_tes.tes_id
        AND 	cbt_user.user_id = ".$user_id."
        AND  	cbt_tes.tes_id = 120
        AND 	cbt_tes_soal.tessoal_tesuser_id = cbt_tes_user. tesuser_id
        AND     cbt_jawaban.jawaban_id = cbt_tes_soal.tessoal_jawaban_text
        AND 	cbt_soal.soal_id = cbt_tes_soal.tessoal_soal_id

        ORDER BY
        cbt_tes_soal.tessoal_order";
    
    $Achr = 0;
    $Achc = 0;
    $Achs = 0;

    $Defr = 0;
    $Defc = 0;
    $Defs = 0;

    $Ordr = 0;
    $Ordc = 0;
    $Ords = 0;

    $Exhr = 0;
    $Exhc = 0;
    $Exhs = 0;

    $Autr = 0;
    $Autc = 0;
    $Auts = 0;

    $Affr = 0;
    $Affc = 0;
    $Affs = 0;

    $Intr = 0;
    $Intc = 0;
    $Ints = 0;

    $Sucr = 0;
    $Succ = 0;
    $Sucs = 0;

    $Domr = 0;
    $Domc = 0;
    $Doms = 0;

    $Abar = 0;
    $Abac = 0;
    $Abas = 0;

    $Nurr = 0;
    $Nurc = 0;
    $Nurs = 0;

    $Chgr = 0;
    $Chgc = 0;
    $Chgs = 0;

    $Endr = 0;
    $Endc = 0;
    $Ends = 0;

    $Hetr = 0;
    $Hetc = 0;
    $Hets = 0;

    $Aggr = 0;
    $Aggc = 0;
    $Aggs = 0;
    
    $s1 ='C';
    $s2 ='C';
    $s3 ='C';
    $s4 ='C';
    $s5 ='C';
    $s6 ='C';
    $s7 ='C';
    $s8 ='C';
    $s9 ='C';
    $s10 ='C';
    $s11 ='C';
    $s12 ='C';
    $s13 ='C';
    $s14 ='C';
    $s15 ='C';
    $s16 ='C';
    $s17 ='C';
    $s18 ='C';
    $s19 ='C';
    $s20 ='C';
    $s21 ='C';
    $s22 ='C';
    $s23 ='C';
    $s24 ='C';
    $s25 ='C';
    $s26 ='C';
    $s27 ='C';
    $s28 ='C';
    $s29 ='C';
    $s30 ='C';
    $s31 ='C';
    $s32 ='C';
    $s33 ='C';
    $s34 ='C';
    $s35 ='C';
    $s36 ='C';
    $s37 ='C';
    $s38 ='C';
    $s39 ='C';
    $s40 ='C';
    $s41 ='C';
    $s42 ='C';
    $s43 ='C';
    $s44 ='C';
    $s45 ='C';
    $s46 ='C';
    $s47 ='C';
    $s48 ='C';
    $s49 ='C';
    $s50 ='C';
    $s51 ='C';
    $s52 ='C';
    $s53 ='C';
    $s54 ='C';
    $s55 ='C';
    $s56 ='C';
    $s57 ='C';
    $s58 ='C';
    $s59 ='C';
    $s60 ='C';
    $s61 ='C';
    $s62 ='C';
    $s63 ='C';
    $s64 ='C';
    $s65 ='C';
    $s66 ='C';
    $s67 ='C';
    $s68 ='C';
    $s69 ='C';
    $s70 ='C';
    $s71 ='C';
    $s72 ='C';
    $s73 ='C';
    $s74 ='C';
    $s75 ='C';
    $s76 ='C';
    $s77 ='C';
    $s78 ='C';
    $s79 ='C';
    $s80 ='C';
    $s81 ='C';
    $s82 ='C';
    $s83 ='C';
    $s84 ='C';
    $s85 ='C';
    $s86 ='C';
    $s87 ='C';
    $s88 ='C';
    $s89 ='C';
    $s90 ='C';
    $s91 ='C';
    $s92 ='C';
    $s93 ='C';
    $s94 ='C';
    $s95 ='C';
    $s96 ='C';
    $s97 ='C';
    $s98 ='C';
    $s99 ='C';
    $s100 ='C';
    $s101 ='C';
    $s102 ='C';
    $s103 ='C';
    $s104 ='C';
    $s105 ='C';
    $s106 ='C';
    $s107 ='C';
    $s108 ='C';
    $s109 ='C';
    $s110 ='C';
    $s111 ='C';
    $s112 ='C';
    $s113 ='C';
    $s114 ='C';
    $s115 ='C';
    $s116 ='C';
    $s117 ='C';
    $s118 ='C';
    $s119 ='C';
    $s120 ='C';
    $s121 ='C';
    $s122 ='C';
    $s123 ='C';
    $s124 ='C';
    $s125 ='C';
    $s126 ='C';
    $s127 ='C';
    $s128 ='C';
    $s129 ='C';
    $s130 ='C';
    $s131 ='C';
    $s132 ='C';
    $s133 ='C';
    $s134 ='C';
    $s135 ='C';
    $s136 ='C';
    $s137 ='C';
    $s138 ='C';
    $s139 ='C';
    $s140 ='C';
    $s141 ='C';
    $s142 ='C';
    $s143 ='C';
    $s144 ='C';
    $s145 ='C';
    $s146 ='C';
    $s147 ='C';
    $s148 ='C';
    $s149 ='C';
    $s150 ='C';
    $s151 ='C';
    $s152 ='C';
    $s153 ='C';
    $s154 ='C';
    $s155 ='C';
    $s156 ='C';
    $s157 ='C';
    $s158 ='C';
    $s159 ='C';
    $s160 ='C';
    $s161 ='C';
    $s162 ='C';
    $s163 ='C';
    $s164 ='C';
    $s165 ='C';
    $s166 ='C';
    $s167 ='C';
    $s168 ='C';
    $s169 ='C';
    $s170 ='C';
    $s171 ='C';
    $s172 ='C';
    $s173 ='C';
    $s174 ='C';
    $s175 ='C';
    $s176 ='C';
    $s177 ='C';
    $s178 ='C';
    $s179 ='C';
    $s180 ='C';
    $s181 ='C';
    $s182 ='C';
    $s183 ='C';
    $s184 ='C';
    $s185 ='C';
    $s186 ='C';
    $s187 ='C';
    $s188 ='C';
    $s189 ='C';
    $s190 ='C';
    $s191 ='C';
    $s192 ='C';
    $s193 ='C';
    $s194 ='C';
    $s195 ='C';
    $s196 ='C';
    $s197 ='C';
    $s198 ='C';
    $s199 ='C';
    $s200 ='C';
    $s201 ='C';
    $s202 ='C';
    $s203 ='C';
    $s204 ='C';
    $s205 ='C';
    $s206 ='C';
    $s207 ='C';
    $s208 ='C';
    $s209 ='C';
    $s210 ='C';
    $s211 ='C';
    $s212 ='C';
    $s213 ='C';
    $s214 ='C';
    $s215 ='C';
    $s216 ='C';
    $s217 ='C';
    $s218 ='C';
    $s219 ='C';
    $s220 ='C';
    $s221 ='C';
    $s222 ='C';
    $s223 ='C';
    $s224 ='C';
    $s225 ='C';
    
    if($result = mysqli_query($mysqli, $sql)){
        while($row = mysqli_fetch_array($result)){
            if($row['soal_nomor'] == '1'){
                $s1 = $row['jawaban'];
            }else if($row['soal_nomor'] == '2'){
                $s2 = $row['jawaban'];
                if($s2 == 'A'){
                    $Defr = $Defr + 1;
                }else if($s2 == 'B'){
                    $Achc = $Achc + 1;
                };
            }else if($row['soal_nomor'] == '3'){
                $s3 = $row['jawaban'];
                if($s3 == 'A'){
                    $Ordr = $Ordr + 1;
                }else if($s3 == 'B'){
                    $Achc = $Achc + 1;
                };
            }else if($row['soal_nomor'] == '4'){
                $s4 = $row['jawaban'];
                if($s4 == 'A'){
                    $Exhr = $Exhr + 1;
                }else if($s4 == 'B'){
                    $Achc = $Achc + 1;
                };
            }else if($row['soal_nomor'] == '5'){
                $s5 = $row['jawaban'];
                if($s5 == 'A'){
                    $Autr = $Autr + 1;
                }else if($s5 == 'B'){
                    $Achc = $Achc + 1;
                };
            }else if($row['soal_nomor'] == '6'){
                $s6 = $row['jawaban'];
                if($s6 == 'A'){
                    $Achr = $Achr + 1;
                }else if($s6 == 'B'){
                    $Defc = $Defc + 1;
                }
            }else if($row['soal_nomor'] == '7'){
                $s7 = $row['jawaban'];
            }else if($row['soal_nomor'] == '8'){
                $s8 = $row['jawaban'];
                if($s8 == 'A'){
                    $Ordr = $Ordr + 1;
                }else if($s8 == 'B'){
                    $Defc = $Defc + 1;
                }
            }else if($row['soal_nomor'] == '9'){
                $s9 = $row['jawaban'];
                if($s9 == 'A'){
                    $Exhr = $Exhr + 1;
                }else if($s9 == 'B'){
                    $Defc = $Defc + 1;
                }
            }else if($row['soal_nomor'] == '10'){
                $s10 = $row['jawaban'];
                if($s10 == 'A'){
                    $Autr = $Autr + 1;
                }else if($s10 == 'B'){
                    $Defc = $Defc + 1;
                }
            }else if($row['soal_nomor'] == '11'){
                $s11 = $row['jawaban'];
                if($s11 == 'A'){
                    $Achr = $Achr + 1;
                }else if($s11 == 'B'){
                    $Ordc = $Ordc + 1;
                };
            }else if($row['soal_nomor'] == '12'){
                $s12 = $row['jawaban'];
                if($s12 == 'A'){
                    $Defr = $Defr + 1;
                }else if($s12 == 'B'){
                    $Ordc = $Ordc + 1;
                };
            }else if($row['soal_nomor'] == '13'){
                $s13 = $row['jawaban'];
            }else if($row['soal_nomor'] == '14'){
                $s14 = $row['jawaban'];
                if($s14 == 'A'){
                    $Exhr = $Exhr + 1;
                }else if($s14 == 'B'){
                    $Ordc = $Ordc + 1;
                };
            }else if($row['soal_nomor'] == '15'){
                $s15 = $row['jawaban'];
                if($s15 == 'A'){
                    $Autr = $Autr + 1;
                }else if($s15 == 'B'){
                    $Ordc = $Ordc + 1;
                };
            }else if($row['soal_nomor'] == '16'){
                $s16 = $row['jawaban'];
                if($s16 == 'A'){
                    $Achr = $Achr + 1;
                }else if($s16 == 'B'){
                    $Exhc = $Exhc + 1;
                };
            }else if($row['soal_nomor'] == '17'){
                $s17 = $row['jawaban'];
                if($s17 == 'A'){
                    $Defr = $Defr + 1;
                }else if($s17 == 'B'){
                    $Exhc = $Exhc + 1;
                };
            }else if($row['soal_nomor'] == '18'){
                $s18 = $row['jawaban'];
                if($s18 == 'A'){
                    $Ordr = $Ordr + 1;
                }else if($s18 == 'B'){
                    $Exhc = $Exhc + 1;
                };
            }else if($row['soal_nomor'] == '19'){
                $s19 = $row['jawaban'];
            }else if($row['soal_nomor'] == '20'){
                $s20 = $row['jawaban'];
                if($s20 == 'A'){
                    $Autr = $Autr + 1;
                }else if($s20 == 'B'){
                    $Exhc = $Exhc + 1;
                };
            }else if($row['soal_nomor'] == '21'){
                $s21 = $row['jawaban'];
                if($s21 == 'A'){
                    $Achr = $Achr + 1;
                }else if($s21 == 'B'){
                    $Autc = $Autc + 1;
                };
            }else if($row['soal_nomor'] == '22'){
                $s22 = $row['jawaban'];
                if($s22 == 'A'){
                    $Defr = $Defr + 1;
                }else if($s22 == 'B'){
                    $Autc = $Autc + 1;
                };
            }else if($row['soal_nomor'] == '23'){
                $s23 = $row['jawaban'];
                if($s23 == 'A'){
                    $Ordr = $Ordr + 1;
                }else if($s23 == 'B'){
                    $Autc = $Autc + 1;
                };
            }else if($row['soal_nomor'] == '24'){
                $s24 = $row['jawaban'];
                if($s24 == 'A'){
                    $Exhr = $Exhr + 1;
                }else if($s24 == 'B'){
                    $Autc = $Autc + 1;
                };
            }else if($row['soal_nomor'] == '25'){
                $s25 = $row['jawaban'];
            }else if($row['soal_nomor'] == '26'){
                $s26 = $row['jawaban'];
                if($s26 == 'A'){
                    $Achr = $Achr + 1;
                }else if($s26 == 'B'){
                    $Affc = $Affc + 1;
                };
            }else if($row['soal_nomor'] == '27'){
                $s27 = $row['jawaban'];
                if($s27 == 'A'){
                    $Defr = $Defr + 1;
                }else if($s27 == 'B'){
                    $Affc = $Affc + 1;
                };
            }else if($row['soal_nomor'] == '28'){
                $s28 = $row['jawaban'];
                if($s28 == 'A'){
                    $Ordr = $Ordr + 1;
                }else if($s28 == 'B'){
                    $Affc = $Affc + 1;
                };
            }else if($row['soal_nomor'] == '29'){
                $s29 = $row['jawaban'];
                if($s29 == 'A'){
                    $Exhr = $Exhr + 1;
                }else if($s29 == 'B'){
                    $Affc = $Affc + 1;
                };
            }else if($row['soal_nomor'] == '30'){
                $s30 = $row['jawaban'];
                if($s30 == 'A'){
                    $Autr = $Autr + 1;
                }else if($s30 == 'B'){
                    $Affc = $Affc + 1;
                };
            }else if($row['soal_nomor'] == '31'){
                $s31 = $row['jawaban'];
                if($s31 == 'A'){
                    $Achr = $Achr + 1;
                }else if($s31 == 'B'){
                    $Intc = $Intc + 1;
                };
            }else if($row['soal_nomor'] == '32'){
                $s32 = $row['jawaban'];
                if($s32 == 'A'){
                    $Defr = $Defr + 1;
                }else if($s32 == 'B'){
                    $Intc = $Intc + 1;
                };
            }else if($row['soal_nomor'] == '33'){
                $s33 = $row['jawaban'];
                if($s33 == 'A'){
                    $Ordr = $Ordr + 1;
                }else if($s33 == 'B'){
                    $Intc = $Intc + 1;
                };
            }else if($row['soal_nomor'] == '34'){
                $s34 = $row['jawaban'];
                if($s34 == 'A'){
                    $Exhr = $Exhr + 1;
                }else if($s34 == 'B'){
                    $Intc = $Intc + 1;
                };
            }else if($row['soal_nomor'] == '35'){
                $s35 = $row['jawaban'];
                if($s35 == 'A'){
                    $Autr = $Autr + 1;
                }else if($s35 == 'B'){
                    $Intc = $Intc + 1;
                };
            }else if($row['soal_nomor'] == '36'){
                $s36 = $row['jawaban'];
                if($s36 == 'A'){
                    $Achr = $Achr + 1;
                }else if($s36 == 'B'){
                    $Succ = $Succ + 1;
                };
            }else if($row['soal_nomor'] == '37'){
                $s37 = $row['jawaban'];
                if($s37 == 'A'){
                    $Defr = $Defr + 1;
                }else if($s37 == 'B'){
                    $Succ = $Succ + 1;
                };
            }else if($row['soal_nomor'] == '38'){
                $s38 = $row['jawaban'];
                if($s38 == 'A'){
                    $Ordr = $Ordr + 1;
                }else if($s38 == 'B'){
                    $Succ = $Succ + 1;
                };
            }else if($row['soal_nomor'] == '39'){
                $s39 = $row['jawaban'];
                if($s39 == 'A'){
                    $Exhr = $Exhr + 1;
                }else if($s39 == 'B'){
                    $Succ = $Succ + 1;
                };
            }else if($row['soal_nomor'] == '40'){
                $s40 = $row['jawaban'];
                if($s40 == 'A'){
                    $Autr = $Autr + 1;
                }else if($s40 == 'B'){
                    $Succ = $Succ + 1;
                };
            }else if($row['soal_nomor'] == '41'){
                $s41 = $row['jawaban'];
                if($s41 == 'A'){
                    $Achr = $Achr + 1;
                }else if($s41 == 'B'){
                    $Domc = $Domc + 1;
                }
            }else if($row['soal_nomor'] == '42'){
                $s42 = $row['jawaban'];
                if($s42 == 'A'){
                    $Defr = $Defr + 1;
                }else if($s42 == 'B'){
                    $Domc = $Domc + 1;
                }
            }else if($row['soal_nomor'] == '43'){
                $s43 = $row['jawaban'];
                if($s43 == 'A'){
                    $Ordr = $Ordr + 1;
                }else if($s43 == 'B'){
                    $Domc = $Domc + 1;
                }
            }else if($row['soal_nomor'] == '44'){
                $s44 = $row['jawaban'];
                if($s44 == 'A'){
                    $Exhr = $Exhr + 1;
                }else if($s44 == 'B'){
                    $Domc = $Domc + 1;
                }
            }else if($row['soal_nomor'] == '45'){
                $s45 = $row['jawaban'];
                if($s45 == 'A'){
                    $Autr = $Autr + 1;
                }else if($s45 == 'B'){
                    $Domc = $Domc + 1;
                }
            }else if($row['soal_nomor'] == '46'){
                $s46 = $row['jawaban'];
                if($s46 == 'A'){
                    $Achr = $Achr + 1;
                }else if($s46 == 'B'){
                    $Abac = $Abac + 1;
                }
            }else if($row['soal_nomor'] == '47'){
                $s47 = $row['jawaban'];
                if($s47 == 'A'){
                    $Defr = $Defr + 1;
                }else if($s47 == 'B'){
                    $Abac = $Abac + 1;
                }
            }else if($row['soal_nomor'] == '48'){
                $s48 = $row['jawaban'];
                if($s48 == 'A'){
                    $Ordr = $Ordr + 1;
                }else if($s48 == 'B'){
                    $Abac = $Abac + 1;
                }
            }else if($row['soal_nomor'] == '49'){
                $s49 = $row['jawaban'];
                if($s49 == 'A'){
                    $Exhr = $Exhr + 1;
                }else if($s49 == 'B'){
                    $Abac = $Abac + 1;
                }
            }else if($row['soal_nomor'] == '50'){
                $s50 = $row['jawaban'];
                if($s50 == 'A'){
                    $Autr = $Autr + 1;
                }else if($s50 == 'B'){
                    $Abac = $Abac + 1;
                }
            }else if($row['soal_nomor'] == '51'){
                $s51 = $row['jawaban'];
                if($s51 == 'A'){
                    $Achr = $Achr + 1;
                }else if($s51 == 'B'){
                    $Nurc = $Nurc + 1;
                };
            }else if($row['soal_nomor'] == '52'){
                $s52 = $row['jawaban'];
                if($s52 == 'A'){
                    $Defr = $Defr + 1;
                }else if($s52 == 'B'){
                    $Nurc = $Nurc + 1;
                };
            }else if($row['soal_nomor'] == '53'){
                $s53 = $row['jawaban'];
                if($s53 == 'A'){
                    $Ordr = $Ordr + 1;
                }else if($s53 == 'B'){
                    $Nurc = $Nurc + 1;
                };
            }else if($row['soal_nomor'] == '54'){
                $s54 = $row['jawaban'];
                if($s54 == 'A'){
                    $Exhr = $Exhr + 1;
                }else if($s54 == 'B'){
                    $Nurc = $Nurc + 1;
                };
            }else if($row['soal_nomor'] == '55'){
                $s55 = $row['jawaban'];
                if($s55 == 'A'){
                    $Autr = $Autr + 1;
                }else if($s55 == 'B'){
                    $Nurc = $Nurc + 1;
                };
            }else if($row['soal_nomor'] == '56'){
                $s56 = $row['jawaban'];
                if($s56 == 'A'){
                    $Achr = $Achr + 1;
                }else if($s56 == 'B'){
                    $Chgc = $Chgc + 1;
                };
            }else if($row['soal_nomor'] == '57'){
                $s57 = $row['jawaban'];
                if($s57 == 'A'){
                    $Defr = $Defr + 1;
                }else if($s57 == 'B'){
                    $Chgc = $Chgc + 1;
                };
            }else if($row['soal_nomor'] == '58'){
                $s58 = $row['jawaban'];
                if($s58 == 'A'){
                    $Ordr = $Ordr + 1;
                }else if($s58 == 'B'){
                    $Chgc = $Chgc + 1;
                };
            }else if($row['soal_nomor'] == '59'){
                $s59 = $row['jawaban'];
                if($s59 == 'A'){
                    $Exhr = $Exhr + 1;
                }else if($s59 == 'B'){
                    $Chgc = $Chgc + 1;
                };
            }else if($row['soal_nomor'] == '60'){
                $s60 = $row['jawaban'];
                if($s60 == 'A'){
                    $Autr = $Autr + 1;
                }else if($s60 == 'B'){
                    $Chgc = $Chgc + 1;
                };
            }else if($row['soal_nomor'] == '61'){
                $s61 = $row['jawaban'];
                if($s61 == 'A'){
                    $Achr = $Achr + 1;
                }else if($s61 == 'B'){
                    $Endc = $Endc + 1;
                };
            }else if($row['soal_nomor'] == '62'){
                $s62 = $row['jawaban'];
                if($s62 == 'A'){
                    $Defr = $Defr + 1;
                }else if($s62 == 'B'){
                    $Endc = $Endc + 1;
                };
            }else if($row['soal_nomor'] == '63'){
                $s63 = $row['jawaban'];
                if($s63 == 'A'){
                    $Ordr = $Ordr + 1;
                }else if($s63 == 'B'){
                    $Endc = $Endc + 1;
                };
            }else if($row['soal_nomor'] == '64'){
                $s64 = $row['jawaban'];
                if($s64 == 'A'){
                    $Exhr = $Exhr + 1;
                }else if($s64 == 'B'){
                    $Endc = $Endc + 1;
                };
            }else if($row['soal_nomor'] == '65'){
                $s65 = $row['jawaban'];
                if($s65 == 'A'){
                    $Autr = $Autr + 1;
                }else if($s65 == 'B'){
                    $Endc = $Endc + 1;
                };
            }else if($row['soal_nomor'] == '66'){
                $s66 = $row['jawaban'];
                if($s66 == 'A'){
                    $Achr = $Achr + 1;
                }else if($s66 == 'B'){
                    $Hetc = $Hetc + 1;
                }
            }else if($row['soal_nomor'] == '67'){
                $s67 = $row['jawaban'];
                if($s67 == 'A'){
                    $Defr = $Defr + 1;
                }else if($s67 == 'B'){
                    $Hetc = $Hetc + 1;
                }
            }else if($row['soal_nomor'] == '68'){
                $s68 = $row['jawaban'];
                if($s68 == 'A'){
                    $Ordr = $Ordr + 1;
                }else if($s68 == 'B'){
                    $Hetc = $Hetc + 1;
                }
            }else if($row['soal_nomor'] == '69'){
                $s69 = $row['jawaban'];
                if($s69 == 'A'){
                    $Exhr = $Exhr + 1;
                }else if($s69 == 'B'){
                    $Hetc = $Hetc + 1;
                }
            }else if($row['soal_nomor'] == '70'){
                $s70 = $row['jawaban'];
                if($s70 == 'A'){
                    $Autr = $Autr + 1;
                }else if($s70 == 'B'){
                    $Hetc = $Hetc + 1;
                }
            }else if($row['soal_nomor'] == '71'){
                $s71 = $row['jawaban'];
                if($s71 == 'A'){
                    $Achr = $Achr + 1;
                }else if($s71 == 'B'){
                    $Aggc = $Aggc + 1;
                }
            }else if($row['soal_nomor'] == '72'){
                $s72 = $row['jawaban'];
                if($s72 == 'A'){
                    $Defr = $Defr + 1;
                }else if($s72 == 'B'){
                    $Aggc = $Aggc + 1;
                }
            }else if($row['soal_nomor'] == '73'){
                $s73 = $row['jawaban'];
                if($s73 == 'A'){
                    $Ordr = $Ordr + 1;
                }else if($s73 == 'B'){
                    $Aggc = $Aggc + 1;
                }
            }else if($row['soal_nomor'] == '74'){
                $s74 = $row['jawaban'];
                if($s74 == 'A'){
                    $Exhr = $Exhr + 1;
                }else if($s74 == 'B'){
                    $Aggc = $Aggc + 1;
                }
            }else if($row['soal_nomor'] == '75'){
                $s75 = $row['jawaban'];
                if($s75 == 'A'){
                    $Autr = $Autr + 1;
                }else if($s75 == 'B'){
                    $Aggc = $Aggc + 1;
                }
            }else if($row['soal_nomor'] == '76'){
                $s76 = $row['jawaban'];
                if($s76 == 'A'){
                    $Affr = $Affr + 1;
                }else if($s76 == 'B'){
                    $Achc = $Achc + 1;
                };
            }else if($row['soal_nomor'] == '77'){
                $s77 = $row['jawaban'];
                if($s77 == 'A'){
                    $Intr = $Intr + 1;
                }else if($s77 == 'B'){
                    $Achc = $Achc + 1;
                };
            }else if($row['soal_nomor'] == '78'){
                $s78 = $row['jawaban'];
                if($s78 == 'A'){
                    $Sucr = $Sucr + 1;
                }else if($s78 == 'B'){
                    $Achc = $Achc + 1;
                };
            }else if($row['soal_nomor'] == '79'){
                $s79 = $row['jawaban'];
                if($s79 == 'A'){
                    $Domr = $Domr + 1;
                }else if($s79 == 'B'){
                    $Achc = $Achc + 1;
                };
            }else if($row['soal_nomor'] == '80'){
                $s80 = $row['jawaban'];
                if($s80 == 'A'){
                    $Abar = $Abar + 1;
                }else if($s80 == 'B'){
                    $Achc = $Achc + 1;
                };
            }else if($row['soal_nomor'] == '81'){
                $s81 = $row['jawaban'];
                if($s81 == 'A'){
                    $Affr = $Affr + 1;
                }else if($s81 == 'B'){
                    $Defc = $Defc + 1;
                }
            }else if($row['soal_nomor'] == '82'){
                $s82 = $row['jawaban'];
                if($s82 == 'A'){
                    $Intr = $Intr + 1;
                }else if($s82 == 'B'){
                    $Defc = $Defc + 1;
                }
            }else if($row['soal_nomor'] == '83'){
                $s83 = $row['jawaban'];
                if($s83 == 'A'){
                    $Sucr = $Sucr + 1;
                }else if($s83 == 'B'){
                    $Defc = $Defc + 1;
                }
            }else if($row['soal_nomor'] == '84'){
                $s84 = $row['jawaban'];
                if($s84 == 'A'){
                    $Domr = $Domr + 1;
                }else if($s84 == 'B'){
                    $Defc = $Defc + 1;
                }
            }else if($row['soal_nomor'] == '85'){
                $s85 = $row['jawaban'];
                if($s85 == 'A'){
                    $Abar = $Abar + 1;
                }else if($s85 == 'B'){
                    $Defc = $Defc + 1;
                }
            }else if($row['soal_nomor'] == '86'){
                $s86 = $row['jawaban'];
                if($s86 == 'A'){
                    $Affr = $Affr + 1;
                }else if($s86 == 'B'){
                    $Ordc = $Ordc + 1;
                };
            }else if($row['soal_nomor'] == '87'){
                $s87 = $row['jawaban'];
                if($s87 == 'A'){
                    $Intr = $Intr + 1;
                }else if($s87 == 'B'){
                    $Ordc = $Ordc + 1;
                };
            }else if($row['soal_nomor'] == '88'){
                $s88 = $row['jawaban'];
                if($s88 == 'A'){
                    $Sucr = $Sucr + 1;
                }else if($s88 == 'B'){
                    $Ordc = $Ordc + 1;
                };
            }else if($row['soal_nomor'] == '89'){
                $s89 = $row['jawaban'];
                if($s89 == 'A'){
                    $Domr = $Domr + 1;
                }else if($s89 == 'B'){
                    $Ordc = $Ordc + 1;
                };
            }else if($row['soal_nomor'] == '90'){
                $s90 = $row['jawaban'];
                if($s90 == 'A'){
                    $Abar = $Abar + 1;
                }else if($s90 == 'B'){
                    $Ordc = $Ordc + 1;
                };
            }else if($row['soal_nomor'] == '91'){
                $s91 = $row['jawaban'];
                if($s91 == 'A'){
                    $Affr = $Affr + 1;
                }else if($s91 == 'B'){
                    $Exhc = $Exhc + 1;
                };
            }else if($row['soal_nomor'] == '92'){
                $s92 = $row['jawaban'];
                if($s92 == 'A'){
                    $Intr = $Intr + 1;
                }else if($s92 == 'B'){
                    $Exhc = $Exhc + 1;
                };
            }else if($row['soal_nomor'] == '93'){
                $s93 = $row['jawaban'];
                if($s93 == 'A'){
                    $Sucr = $Sucr + 1;
                }else if($s93 == 'B'){
                    $Exhc = $Exhc + 1;
                };
            }else if($row['soal_nomor'] == '94'){
                $s94 = $row['jawaban'];
                if($s94 == 'A'){
                    $Domr = $Domr + 1;
                }else if($s94 == 'B'){
                    $Exhc = $Exhc + 1;
                };
            }else if($row['soal_nomor'] == '95'){
                $s95 = $row['jawaban'];
                if($s95 == 'A'){
                    $Abar = $Abar + 1;
                }else if($s95 == 'B'){
                    $Exhc = $Exhc + 1;
                };
            }else if($row['soal_nomor'] == '96'){
                $s96 = $row['jawaban'];
                if($s96 == 'A'){
                    $Affr = $Affr + 1;
                }else if($s96 == 'B'){
                    $Autc = $Autc + 1;
                };
            }else if($row['soal_nomor'] == '97'){
                $s97 = $row['jawaban'];
                if($s97 == 'A'){
                    $Intr = $Intr + 1;
                }else if($s97 == 'B'){
                    $Autc = $Autc + 1;
                };
            }else if($row['soal_nomor'] == '98'){
                $s98 = $row['jawaban'];
                if($s98 == 'A'){
                    $Sucr = $Sucr + 1;
                }else if($s98 == 'B'){
                    $Autc = $Autc + 1;
                };
            }else if($row['soal_nomor'] == '99'){
                $s99 = $row['jawaban'];
                if($s99 == 'A'){
                    $Domr = $Domr + 1;
                }else if($s99 == 'B'){
                    $Autc = $Autc + 1;
                };
            }else if($row['soal_nomor'] == '100'){
                $s100 = $row['jawaban'];
                if($s100 == 'A'){
                    $Abar = $Abar + 1;
                }else if($s100 == 'B'){
                    $Autc = $Autc + 1;
                };
            }else if($row['soal_nomor'] == '101'){
                $s101 = $row['jawaban'];
            }else if($row['soal_nomor'] == '102'){
                $s102 = $row['jawaban'];
                if($s102 == 'A'){
                    $Intr = $Intr + 1;
                }else if($s102 == 'B'){
                    $Affc = $Affc + 1;
                };
            }else if($row['soal_nomor'] == '103'){
                $s103 = $row['jawaban'];
                if($s103 == 'A'){
                    $Sucr = $Sucr + 1;
                }else if($s103 == 'B'){
                    $Affc = $Affc + 1;
                };
            }else if($row['soal_nomor'] == '104'){
                $s104 = $row['jawaban'];
                if($s104 == 'A'){
                    $Domr = $Domr + 1;
                }else if($s104 == 'B'){
                    $Affc = $Affc + 1;
                };
            }else if($row['soal_nomor'] == '105'){
                $s105 = $row['jawaban'];
                if($s105 == 'A'){
                    $Abar = $Abar + 1;
                }else if($s105 == 'B'){
                    $Affc = $Affc + 1;
                };
            }else if($row['soal_nomor'] == '106'){
                $s106 = $row['jawaban'];
                if($s106 == 'A'){
                    $Affr = $Affr + 1;
                }else if($s106 == 'B'){
                    $Intc = $Intc + 1;
                };
            }else if($row['soal_nomor'] == '107'){
                $s107 = $row['jawaban'];
            }else if($row['soal_nomor'] == '108'){
                $s108 = $row['jawaban'];
                if($s108 == 'A'){
                    $Sucr = $Sucr + 1;
                }else if($s108 == 'B'){
                    $Intc = $Intc + 1;
                };
            }else if($row['soal_nomor'] == '109'){
                $s109 = $row['jawaban'];
                if($s109 == 'A'){
                    $Domr = $Domr + 1;
                }else if($s109 == 'B'){
                    $Intc = $Intc + 1;
                };
            }else if($row['soal_nomor'] == '110'){
                $s110 = $row['jawaban'];
                if($s110 == 'A'){
                    $Abar = $Abar + 1;
                }else if($s110 == 'B'){
                    $Intc = $Intc + 1;
                };
            }else if($row['soal_nomor'] == '111'){
                $s111 = $row['jawaban'];
                if($s111 == 'A'){
                    $Affr = $Affr + 1;
                }else if($s111 == 'B'){
                    $Succ = $Succ + 1;
                };
            }else if($row['soal_nomor'] == '112'){
                $s112 = $row['jawaban'];
                if($s112 == 'A'){
                    $Intr = $Intr + 1;
                }else if($s112 == 'B'){
                    $Succ = $Succ + 1;
                };
            }else if($row['soal_nomor'] == '113'){
                $s113 = $row['jawaban'];
            }else if($row['soal_nomor'] == '114'){
                $s114 = $row['jawaban'];
                if($s114 == 'A'){
                    $Domr = $Domr + 1;
                }else if($s114 == 'B'){
                    $Succ = $Succ + 1;
                };
            }else if($row['soal_nomor'] == '115'){
                $s115 = $row['jawaban'];
                if($s115 == 'A'){
                    $Abar = $Abar + 1;
                }else if($s115 == 'B'){
                    $Succ = $Succ + 1;
                };
            }else if($row['soal_nomor'] == '116'){
                $s116 = $row['jawaban'];
                if($s116 == 'A'){
                    $Affr = $Affr + 1;
                }else if($s116 == 'B'){
                    $Domc = $Domc + 1;
                }
            }else if($row['soal_nomor'] == '117'){
                $s117 = $row['jawaban'];
                if($s117 == 'A'){
                    $Intr = $Intr + 1;
                }else if($s117 == 'B'){
                    $Domc = $Domc + 1;
                }
            }else if($row['soal_nomor'] == '118'){
                $s118 = $row['jawaban'];
                if($s118 == 'A'){
                    $Sucr = $Sucr + 1;
                }else if($s118 == 'B'){
                    $Domc = $Domc + 1;
                }
            }else if($row['soal_nomor'] == '119'){
                $s119 = $row['jawaban'];
            }else if($row['soal_nomor'] == '120'){
                $s120 = $row['jawaban'];
                if($s120 == 'A'){
                    $Abar = $Abar + 1;
                }else if($s120 == 'B'){
                    $Domc = $Domc + 1;
                }
            }else if($row['soal_nomor'] == '121'){
                $s121 = $row['jawaban'];
                if($s121 == 'A'){
                    $Affr = $Affr + 1;
                }else if($s121 == 'B'){
                    $Abac = $Abac + 1;
                }
            }else if($row['soal_nomor'] == '122'){
                $s122 = $row['jawaban'];
                if($s122 == 'A'){
                    $Intr = $Intr + 1;
                }else if($s122 == 'B'){
                    $Abac = $Abac + 1;
                }
            }else if($row['soal_nomor'] == '123'){
                $s123 = $row['jawaban'];
                if($s123 == 'A'){
                    $Sucr = $Sucr + 1;
                }else if($s123 == 'B'){
                    $Abac = $Abac + 1;
                }
            }else if($row['soal_nomor'] == '124'){
                $s124 = $row['jawaban'];
                if($s124 == 'A'){
                    $Domr = $Domr + 1;
                }else if($s124 == 'B'){
                    $Abac = $Abac + 1;
                }
            }else if($row['soal_nomor'] == '125'){
                $s125 = $row['jawaban'];
            }else if($row['soal_nomor'] == '126'){
                $s126 = $row['jawaban'];
                if($s126 == 'A'){
                    $Affr = $Affr + 1;
                }else if($s126 == 'B'){
                    $Nurc = $Nurc + 1;
                };
            }else if($row['soal_nomor'] == '127'){
                $s127 = $row['jawaban'];
                if($s127 == 'A'){
                    $Intr = $Intr + 1;
                }else if($s127 == 'B'){
                    $Nurc = $Nurc + 1;
                };
            }else if($row['soal_nomor'] == '128'){
                $s128 = $row['jawaban'];
                if($s128 == 'A'){
                    $Sucr = $Sucr + 1;
                }else if($s128 == 'B'){
                    $Nurc = $Nurc + 1;
                };
            }else if($row['soal_nomor'] == '129'){
                $s129 = $row['jawaban'];
                if($s129 == 'A'){
                    $Domr = $Domr + 1;
                }else if($s129 == 'B'){
                    $Nurc = $Nurc + 1;
                };
            }else if($row['soal_nomor'] == '130'){
                $s130 = $row['jawaban'];
                if($s130 == 'A'){
                    $Abar = $Abar + 1;
                }else if($s130 == 'B'){
                    $Nurc = $Nurc + 1;
                };
            }else if($row['soal_nomor'] == '131'){
                $s131 = $row['jawaban'];
                if($s131 == 'A'){
                    $Affr = $Affr + 1;
                }else if($s131 == 'B'){
                    $Chgc = $Chgc + 1;
                };
            }else if($row['soal_nomor'] == '132'){
                $s132 = $row['jawaban'];
                if($s132 == 'A'){
                    $Intr = $Intr + 1;
                }else if($s132 == 'B'){
                    $Chgc = $Chgc + 1;
                };
            }else if($row['soal_nomor'] == '133'){
                $s133 = $row['jawaban'];
                if($s133 == 'A'){
                    $Sucr = $Sucr + 1;
                }else if($s133 == 'B'){
                    $Chgc = $Chgc + 1;
                };
            }else if($row['soal_nomor'] == '134'){
                $s134 = $row['jawaban'];
                if($s134 == 'A'){
                    $Domr = $Domr + 1;
                }else if($s134 == 'B'){
                    $Chgc = $Chgc + 1;
                };
            }else if($row['soal_nomor'] == '135'){
                $s135 = $row['jawaban'];
                if($s135 == 'A'){
                    $Abar = $Abar + 1;
                }else if($s135 == 'B'){
                    $Chgc = $Chgc + 1;
                };
            }else if($row['soal_nomor'] == '136'){
                $s136 = $row['jawaban'];
                if($s136 == 'A'){
                    $Affr = $Affr + 1;
                }else if($s136 == 'B'){
                    $Endc = $Endc + 1;
                };
            }else if($row['soal_nomor'] == '137'){
                $s137 = $row['jawaban'];
                if($s137 == 'A'){
                    $Intr = $Intr + 1;
                }else if($s137 == 'B'){
                    $Endc = $Endc + 1;
                };
            }else if($row['soal_nomor'] == '138'){
                $s138 = $row['jawaban'];
                if($s138 == 'A'){
                    $Sucr = $Sucr + 1;
                }else if($s138 == 'B'){
                    $Endc = $Endc + 1;
                };
            }else if($row['soal_nomor'] == '139'){
                $s139 = $row['jawaban'];
                if($s139 == 'A'){
                    $Domr = $Domr + 1;
                }else if($s139 == 'B'){
                    $Endc = $Endc + 1;
                };
            }else if($row['soal_nomor'] == '140'){
                $s140 = $row['jawaban'];
                if($s140 == 'A'){
                    $Abar = $Abar + 1;
                }else if($s140 == 'B'){
                    $Endc = $Endc + 1;
                };
            }else if($row['soal_nomor'] == '141'){
                $s141 = $row['jawaban'];
                if($s141 == 'A'){
                    $Affr = $Affr + 1;
                }else if($s141 == 'B'){
                    $Hetc = $Hetc + 1;
                }
            }else if($row['soal_nomor'] == '142'){
                $s142 = $row['jawaban'];
                if($s142 == 'A'){
                    $Intr = $Intr + 1;
                }else if($s142 == 'B'){
                    $Hetc = $Hetc + 1;
                }
            }else if($row['soal_nomor'] == '143'){
                $s143 = $row['jawaban'];
                if($s143 == 'A'){
                    $Sucr = $Sucr + 1;
                }else if($s143 == 'B'){
                    $Hetc = $Hetc + 1;
                }
            }else if($row['soal_nomor'] == '144'){
                $s144 = $row['jawaban'];
                if($s144 == 'A'){
                    $Domr = $Domr + 1;
                }else if($s144 == 'B'){
                    $Hetc = $Hetc + 1;
                }
            }else if($row['soal_nomor'] == '145'){
                $s145 = $row['jawaban'];
                if($s145 == 'A'){
                    $Abar = $Abar + 1;
                }else if($s145 == 'B'){
                    $Hetc = $Hetc + 1;
                }
            }else if($row['soal_nomor'] == '146'){
                $s146 = $row['jawaban'];
                if($s146 == 'A'){
                    $Affr = $Affr + 1;
                }else if($s146 == 'B'){
                    $Aggc = $Aggc + 1;
                }
            }else if($row['soal_nomor'] == '147'){
                $s147 = $row['jawaban'];
                if($s147 == 'A'){
                    $Intr = $Intr + 1;
                }else if($s147 == 'B'){
                    $Aggc = $Aggc + 1;
                }
            }else if($row['soal_nomor'] == '148'){
                $s148 = $row['jawaban'];
                if($s148 == 'A'){
                    $Sucr = $Sucr + 1;
                }else if($s148 == 'B'){
                    $Aggc = $Aggc + 1;
                }
            }else if($row['soal_nomor'] == '149'){
                $s149 = $row['jawaban'];
                if($s149 == 'A'){
                    $Domr = $Domr + 1;
                }else if($s149 == 'B'){
                    $Aggc = $Aggc + 1;
                }
            }else if($row['soal_nomor'] == '150'){
                $s150 = $row['jawaban'];
                if($s150 == 'A'){
                    $Abar = $Abar + 1;
                }else if($s150 == 'B'){
                    $Aggc = $Aggc + 1;
                }
            }else if($row['soal_nomor'] == '151'){
                $s151 = $row['jawaban'];
                if($s151 == 'A'){
                    $Nurr = $Nurr + 1;
                }else if($s151 == 'B'){
                    $Achc = $Achc + 1;
                };
            }else if($row['soal_nomor'] == '152'){
                $s152 = $row['jawaban'];
                if($s152 == 'A'){
                    $Chgr = $Chgr + 1;
                }else if($s152 == 'B'){
                    $Achc = $Achc + 1;
                };
            }else if($row['soal_nomor'] == '153'){
                $s153 = $row['jawaban'];
                if($s153 == 'A'){
                    $Endr = $Endr + 1;
                }else if($s153 == 'B'){
                    $Achc = $Achc + 1;
                };
            }else if($row['soal_nomor'] == '154'){
                $s154 = $row['jawaban'];
                if($s154 == 'A'){
                    $Hetr = $Hetr + 1;
                }else if($s154 == 'B'){
                    $Achc = $Achc + 1;
                };
            }else if($row['soal_nomor'] == '155'){
                $s155 = $row['jawaban'];
                if($s155 == 'A'){
                    $Aggr = $Aggr + 1;
                }else if($s155 == 'B'){
                    $Achc = $Achc + 1;
                };
            }else if($row['soal_nomor'] == '156'){
                $s156 = $row['jawaban'];
                if($s156 == 'A'){
                    $Nurr = $Nurr + 1;
                }else if($s156 == 'B'){
                    $Defc = $Defc + 1;
                }
            }else if($row['soal_nomor'] == '157'){
                $s157 = $row['jawaban'];
                if($s157 == 'A'){
                    $Chgr = $Chgr + 1;
                }else if($s157 == 'B'){
                    $Defc = $Defc + 1;
                }
            }else if($row['soal_nomor'] == '158'){
                $s158 = $row['jawaban'];
                if($s158 == 'A'){
                    $Endr = $Endr + 1;
                }else if($s158 == 'B'){
                    $Defc = $Defc + 1;
                }
            }else if($row['soal_nomor'] == '159'){
                $s159 = $row['jawaban'];
                if($s159 == 'A'){
                    $Hetr = $Hetr + 1;
                }else if($s159 == 'B'){
                    $Defc = $Defc + 1;
                }
            }else if($row['soal_nomor'] == '160'){
                $s160 = $row['jawaban'];
                if($s160 == 'A'){
                    $Aggr = $Aggr + 1;
                }else if($s160 == 'B'){
                    $Defc = $Defc + 1;
                }
            }else if($row['soal_nomor'] == '161'){
                $s161 = $row['jawaban'];
                if($s161 == 'A'){
                    $Nurr = $Nurr + 1;
                }else if($s161 == 'B'){
                    $Ordc = $Ordc + 1;
                };
            }else if($row['soal_nomor'] == '162'){
                $s162 = $row['jawaban'];
                if($s162 == 'A'){
                    $Chgr = $Chgr + 1;
                }elseif($s162 == 'B'){
                    $Ordc = $Ordc + 1;
                };
            }else if($row['soal_nomor'] == '163'){
                $s163 = $row['jawaban'];
                if($s163 == 'A'){
                    $Endr = $Endr + 1;
                }else if($s163 == 'B'){
                    $Ordc = $Ordc + 1;
                };
            }else if($row['soal_nomor'] == '164'){
                $s164 = $row['jawaban'];
                if($s164 == 'A'){
                    $Hetr = $Hetr + 1;
                }else if($s164 == 'B'){
                    $Ordc = $Ordc + 1;
                };
            }else if($row['soal_nomor'] == '165'){
                $s165 = $row['jawaban'];
                if($s165 == 'A'){
                    $Aggr = $Aggr + 1;
                }else if($s165 == 'B'){
                    $Ordc = $Ordc + 1;
                };
            }else if($row['soal_nomor'] == '166'){
                $s166 = $row['jawaban'];
                if($s166 == 'A'){
                    $Nurr = $Nurr + 1;
                }else if($s166 == 'B'){
                    $Exhc = $Exhc + 1;
                };
            }else if($row['soal_nomor'] == '167'){
                $s167 = $row['jawaban'];
                if($s167 == 'A'){
                    $Chgr = $Chgr + 1;
                }elseif($s167 == 'B'){
                    $Exhc = $Exhc + 1;
                };
            }else if($row['soal_nomor'] == '168'){
                $s168 = $row['jawaban'];
                if($s168 == 'A'){
                    $Endr = $Endr + 1;
                }else if($s168 == 'B'){
                    $Exhc = $Exhc + 1;
                };
            }else if($row['soal_nomor'] == '169'){
                $s169 = $row['jawaban'];
                if($s169 == 'A'){
                    $Hetr = $Hetr + 1;
                }else if($s169 == 'B'){
                    $Exhc = $Exhc + 1;
                };
            }else if($row['soal_nomor'] == '170'){
                $s170 = $row['jawaban'];
                if($s170 == 'A'){
                    $Aggr = $Aggr + 1;
                }else if($s170 == 'B'){
                    $Exhc = $Exhc + 1;
                };
            }else if($row['soal_nomor'] == '171'){
                $s171 = $row['jawaban'];
                if($s171 == 'A'){
                    $Nurr = $Nurr + 1;
                }else if($s171 == 'B'){
                    $Autc = $Autc + 1;
                };
            }else if($row['soal_nomor'] == '172'){
                $s172 = $row['jawaban'];
                if($s172 == 'A'){
                    $Chgr = $Chgr + 1;
                }else if($s172 == 'B'){
                    $Autc = $Autc + 1;
                };
            }else if($row['soal_nomor'] == '173'){
                $s173 = $row['jawaban'];
                if($s173 == 'A'){
                    $Endr = $Endr + 1;
                }else if($s173 == 'B'){
                    $Autc = $Autc + 1;
                };
            }else if($row['soal_nomor'] == '174'){
                $s174 = $row['jawaban'];
                if($s174 == 'A'){
                    $Hetr = $Hetr + 1;
                }else if($s174 == 'B'){
                    $Autc = $Autc + 1;
                };
            }else if($row['soal_nomor'] == '175'){
                $s175 = $row['jawaban'];
                if($s175 == 'A'){
                    $Aggr = $Aggr + 1;
                }else if($s175 == 'B'){
                    $Autc = $Autc + 1;
                };
            }else if($row['soal_nomor'] == '176'){
                $s176 = $row['jawaban'];
                if($s176 == 'A'){
                    $Nurr = $Nurr + 1;
                }else if($s176 == 'B'){
                    $Affc = $Affc + 1;
                };
            }else if($row['soal_nomor'] == '177'){
                $s177 = $row['jawaban'];
                if($s177 == 'A'){
                    $Chgr = $Chgr + 1;
                }elseif($s177 == 'B'){
                    $Affc = $Affc + 1;
                };
            }else if($row['soal_nomor'] == '178'){
                $s178 = $row['jawaban'];
                if($s178 == 'A'){
                    $Endr = $Endr + 1;
                }else if($s178 == 'B'){
                    $Affc = $Affc + 1;
                };
            }else if($row['soal_nomor'] == '179'){
                $s179 = $row['jawaban'];
                if($s179 == 'A'){
                    $Hetr = $Hetr + 1;
                }else if($s179 == 'B'){
                    $Affc = $Affc + 1;
                };
            }else if($row['soal_nomor'] == '180'){
                $s180 = $row['jawaban'];
                if($s180 == 'A'){
                    $Aggr = $Aggr + 1;
                }else if($s180 == 'B'){
                    $Affc = $Affc + 1;
                };
            }else if($row['soal_nomor'] == '181'){
                $s181 = $row['jawaban'];
                if($s181 == 'A'){
                    $Nurr = $Nurr + 1;
                }else if($s181 == 'B'){
                    $Intc = $Intc + 1;
                };
            }else if($row['soal_nomor'] == '182'){
                $s182 = $row['jawaban'];
                if($s182 == 'A'){
                    $Chgr = $Chgr + 1;
                }else if($s182 == 'B'){
                    $Intc = $Intc + 1;
                };
            }else if($row['soal_nomor'] == '183'){
                $s183 = $row['jawaban'];
                if($s183 == 'A'){
                    $Endr = $Endr + 1;
                }else if($s183 == 'B'){
                    $Intc = $Intc + 1;
                };
            }else if($row['soal_nomor'] == '184'){
                $s184 = $row['jawaban'];
                if($s184 == 'A'){
                    $Hetr = $Hetr + 1;
                }else if($s184 == 'B'){
                    $Intc = $Intc + 1;
                };
            }else if($row['soal_nomor'] == '185'){
                $s185 = $row['jawaban'];
                if($s185 == 'A'){
                    $Aggr = $Aggr + 1;
                }else if($s185 == 'B'){
                    $Intc = $Intc + 1;
                };
            }else if($row['soal_nomor'] == '186'){
                $s186 = $row['jawaban'];
                if($s186 == 'A'){
                    $Nurr = $Nurr + 1;
                }else if($s186 == 'B'){
                    $Succ = $Succ + 1;
                };
            }else if($row['soal_nomor'] == '187'){
                $s187 = $row['jawaban'];
                if($s187 == 'A'){
                    $Chgr = $Chgr + 1;
                }else if($s187 == 'B'){
                    $Succ = $Succ + 1;
                };
            }else if($row['soal_nomor'] == '188'){
                $s188 = $row['jawaban'];
                if($s188 == 'A'){
                    $Endr = $Endr + 1;
                }else if($s188 == 'B'){
                    $Succ = $Succ + 1;
                };
            }else if($row['soal_nomor'] == '189'){
                $s189 = $row['jawaban'];
                if($s189 == 'A'){
                    $Hetr = $Hetr + 1;
                }else if($s189 == 'B'){
                    $Succ = $Succ + 1;
                };
            }else if($row['soal_nomor'] == '190'){
                $s190 = $row['jawaban'];
                if($s190 == 'A'){
                    $Aggr = $Aggr + 1;
                }else if($s190 == 'B'){
                    $Succ = $Succ + 1;
                };
            }else if($row['soal_nomor'] == '191'){
                $s191 = $row['jawaban'];
                if($s191 == 'A'){
                    $Nurr = $Nurr + 1;
                }else if($s191 == 'B'){
                    $Domc = $Domc + 1;
                }
            }else if($row['soal_nomor'] == '192'){
                $s192 = $row['jawaban'];
                if($s192 == 'A'){
                    $Chgr = $Chgr + 1;
                }else if($s192 == 'B'){
                    $Domc = $Domc + 1;
                }
            }else if($row['soal_nomor'] == '193'){
                $s193 = $row['jawaban'];
                if($s193 == 'A'){
                    $Endr = $Endr + 1;
                }else if($s193 == 'B'){
                    $Domc = $Domc + 1;
                }
            }else if($row['soal_nomor'] == '194'){
                $s194 = $row['jawaban'];
                if($s194 == 'A'){
                    $Hetr = $Hetr + 1;
                }else if($s194 == 'B'){
                    $Domc = $Domc + 1;
                }
            }else if($row['soal_nomor'] == '195'){
                $s195 = $row['jawaban'];
                if($s195 == 'A'){
                    $Aggr = $Aggr + 1;
                }else if($s195 == 'B'){
                    $Domc = $Domc + 1;
                }
            }else if($row['soal_nomor'] == '196'){
                $s196 = $row['jawaban'];
                if($s196 == 'A'){
                    $Nurr = $Nurr + 1;
                }else if($s196 == 'B'){
                    $Abac = $Abac + 1;
                }
            }else if($row['soal_nomor'] == '197'){
                $s197 = $row['jawaban'];
                if($s197 == 'A'){
                    $Chgr = $Chgr + 1;
                }else if($s197 == 'B'){
                    $Abac = $Abac + 1;
                }
            }else if($row['soal_nomor'] == '198'){
                $s198 = $row['jawaban'];
                if($s198 == 'A'){
                    $Endr = $Endr + 1;
                }else if($s198 == 'B'){
                    $Abac = $Abac + 1;
                }
            }else if($row['soal_nomor'] == '199'){
                $s199 = $row['jawaban'];
                if($s199 == 'A'){
                    $Hetr = $Hetr + 1;
                }else if($s199 == 'B'){
                    $Abac = $Abac + 1;
                }
            }else if($row['soal_nomor'] == '200'){
                $s200 = $row['jawaban'];
                if($s200 == 'A'){
                    $Aggr = $Aggr + 1;
                }else if($s200 == 'B'){
                    $Abac = $Abac + 1;
                }
            }else if($row['soal_nomor'] == '201'){
                $s201 = $row['jawaban'];
            }else if($row['soal_nomor'] == '202'){
                $s202 = $row['jawaban'];
                if($s202 == 'A'){
                    $Chgr = $Chgr + 1;
                }else if($s202 == 'B'){
                    $Nurc = $Nurc + 1;
                };
            }else if($row['soal_nomor'] == '203'){
                $s203 = $row['jawaban'];
                if($s203 == 'A'){
                    $Endr = $Endr + 1;
                }else if($s203 == 'B'){
                    $Nurc = $Nurc + 1;
                };
            }else if($row['soal_nomor'] == '204'){
                $s204 = $row['jawaban'];
                if($s204 == 'A'){
                    $Hetr = $Hetr + 1;
                }else if($s204 == 'B'){
                    $Nurc = $Nurc + 1;
                };
            }else if($row['soal_nomor'] == '205'){
                $s205 = $row['jawaban'];
                if($s205 == 'A'){
                    $Aggr = $Aggr + 1;
                }else if($s205 == 'B'){
                    $Nurc = $Nurc + 1;
                };
            }else if($row['soal_nomor'] == '206'){
                $s206 = $row['jawaban'];
                if($s206 == 'A'){
                    $Nurr = $Nurr + 1;
                }else if($s206 == 'B'){
                    $Chgc = $Chgc + 1;
                };
            }else if($row['soal_nomor'] == '207'){
                $s207 = $row['jawaban'];
            }else if($row['soal_nomor'] == '208'){
                $s208 = $row['jawaban'];
                if($s208 == 'A'){
                    $Endr = $Endr + 1;
                }else if($s208 == 'B'){
                    $Chgc = $Chgc + 1;
                };
            }else if($row['soal_nomor'] == '209'){
                $s209 = $row['jawaban'];
                if($s209 == 'A'){
                    $Hetr = $Hetr + 1;
                }else if($s209 == 'B'){
                    $Chgc = $Chgc + 1;
                };
            }else if($row['soal_nomor'] == '210'){
                $s210 = $row['jawaban'];
                if($s210 == 'A'){
                    $Aggr = $Aggr + 1;
                }else if($s210 == 'B'){
                    $Chgc = $Chgc + 1;
                };
            }else if($row['soal_nomor'] == '211'){
                $s211 = $row['jawaban'];
                if($s211 == 'A'){
                    $Nurr = $Nurr + 1;
                }else if($s211 == 'B'){
                    $Endc = $Endc + 1;
                };
            }else if($row['soal_nomor'] == '212'){
                $s212 = $row['jawaban'];
                if($s212 == 'A'){
                    $Chgr = $Chgr + 1;
                }else if($s212 == 'B'){
                    $Endc = $Endc + 1;
                };
            }else if($row['soal_nomor'] == '213'){
                $s213 = $row['jawaban'];
            }else if($row['soal_nomor'] == '214'){
                $s214 = $row['jawaban'];
                if($s214 == 'A'){
                    $Hetr = $Hetr + 1;
                }else if($s214 == 'B'){
                    $Endc = $Endc + 1;
                };
            }else if($row['soal_nomor'] == '215'){
                $s215 = $row['jawaban'];
                if($s215 == 'A'){
                    $Aggr = $Aggr + 1;
                }else if($s215 == 'B'){
                    $Endc = $Endc + 1;
                };
            }else if($row['soal_nomor'] == '216'){
                $s216 = $row['jawaban'];
                if($s216 == 'A'){
                    $Nurr = $Nurr + 1;
                }else if($s216 == 'B'){
                    $Hetc = $Hetc + 1;
                }
            }else if($row['soal_nomor'] == '217'){
                $s217 = $row['jawaban'];
                if($s217 == 'A'){
                    $Chgr = $Chgr + 1;
                }else if($s217 == 'B'){
                    $Hetc = $Hetc + 1;
                }
            }else if($row['soal_nomor'] == '218'){
                $s218 = $row['jawaban'];
                if($s218 == 'A'){
                    $Endr = $Endr + 1;
                }else if($s218 == 'B'){
                    $Hetc = $Hetc + 1;
                }
            }else if($row['soal_nomor'] == '219'){
                $s219 = $row['jawaban'];
            }else if($row['soal_nomor'] == '220'){
                $s220 = $row['jawaban'];
                if($s220 == 'A'){
                    $Aggr = $Aggr + 1;
                }else if($s220 == 'B'){
                    $Hetc = $Hetc + 1;
                }
            }else if($row['soal_nomor'] == '221'){
                $s221 = $row['jawaban'];
                if($s221 == 'A'){
                    $Nurr = $Nurr + 1;
                }else if($s221 == 'B'){
                    $Aggc = $Aggc + 1;
                }
            }else if($row['soal_nomor'] == '222'){
                $s222 = $row['jawaban'];
                if($s222 == 'A'){
                    $Chgr = $Chgr + 1;
                }else if($s222 == 'B'){
                    $Aggc = $Aggc + 1;
                }
            }else if($row['soal_nomor'] == '223'){
                $s223 = $row['jawaban'];
                if($s223 == 'A'){
                    $Endr = $Endr + 1;
                }else if($s223 == 'B'){
                    $Aggc = $Aggc + 1;
                }
            }else if($row['soal_nomor'] == '224'){
                $s224 = $row['jawaban'];
                if($s224 == 'A'){
                    $Hetr = $Hetr + 1;
                }else if($s224 == 'B'){
                    $Aggc = $Aggc + 1;
                }
            }else if($row['soal_nomor'] == '225'){
                $s225 = $row['jawaban'];
            }

            $name = $row['name'];
            $tanggal_tes = $row['tanggal_tes'];
            $user_ids = $user_id;
            $tanggal_lahir = $row['tanggal_lahir'];
            $from = new DateTime($tanggal_lahir);
            $to   = new DateTime('today');
            $jenis_kelamin = $row['jenis_kelamin'];
            $status = $row['tesuser_status'];
            $reportShowEPPS = "Yes";
        }
        if($s1 == $s151){
            $b1 = '1';
        }else{
            $b1 = '0';
        }

        if($s7 == $s157){
            $b2 = '1';
        }else{
            $b2 = '0';
        }

        if($s13 == $s163){
            $b3 = '1';
        }else{
            $b3 = '0';
        }

        if($s7 == $s157){
            $b4 = '1';
        }else{
            $b4 = '0';
        }

        if($s25 == $s175){
            $b5 = '1';
        }else{
            $b5 = '0';
        }

        if($s26 == $s101){
            $b6 = '1';
        }else{
            $b6 = '0';
        }

        if($s32 == $s107){
            $b7 = '1';
        }else{
            $b7 = '0';
        }

        if($s38 == $s113){
            $b8 = '1';
        }else{
            $b8 = '0';
        }

        if($s44 == $s119){
            $b9 = '1';
        }else{
            $b9 = '0';
        }

        if($s50 == $s125){
            $b10 = '1';
        }else{
            $b10 = '0';
        }

        if($s51 == $s201){
            $b11 = '1';
        }else{
            $b11 = '0';
        }

        if($s57 == $s207){
            $b12 = '1';
        }else{
            $b12 = '0';
        }

        if($s63 == $s213){
            $b13 = '1';
        }else{
            $b13 = '0';
        }

        if($s69 == $s219){
            $b14 = '1';
        }else{
            $b14 = '0';
        }

        if($s75 == $s225){
            $b15 = '1';
        }else{
            $b15 = '0';
        }

        $Achs = $Achr + $Achc;
        $Defs = $Defr + $Defc;
        $Ords = $Ordr + $Ordc;
        $Exhs = $Exhr + $Exhc;
        $Auts = $Autr + $Autc;
        $Affs = $Affr + $Affc;
        $Ints = $Intr + $Intc;
        $Sucs = $Sucr + $Succ;
        $Doms = $Domr + $Domc;
        $Abas = $Abar + $Abac;
        $Nurs = $Nurr + $Nurc;
        $Chgs = $Chgr + $Chgc;
        $Ends = $Endr + $Endc;
        $Hets = $Hetr + $Hetc;
        $Aggs = $Aggr + $Aggc;


        $Achsh = 0;
        $Defsh = 0;
        $Ordsh = 0;
        $Exhsh = 0;
        $Autsh = 0;
        $Affsh = 0;
        $Intsh = 0;
        $Sucsh = 0;
        $Domsh = 0;
        $Abash = 0;
        $Nursh = 0;
        $Chgsh = 0;
        $Endsh = 0;
        $Hetsh = 0;
        $Aggsh = 0;

        // 0 cewe
        // 1 laki-laki

        $countAllEPPS = $Achs+$Defs+$Ords+$Exhs+$Auts+$Affs+$Ints+$Sucs+$Doms+$Abas+$Nurs+$Chgs+$Ends+$Hets+$Aggs;

        if($jenis_kelamin == 0){

            if($Achs >= 25.06){
                $Achsh = '+++';
            }else if($Achs >= 21.43 && $Achs <= 25.05){
                $Achsh = '++';
            }else if($Achs >= 17.80 && $Achs <= 21.42){
                $Achsh = '+';
            }else if($Achs >= 14.17 && $Achs <= 17.79){
                $Achsh = '0';
            }else if($Achs >= 10.54 && $Achs <= 14.16){
                $Achsh = '-';
            }else if($Achs >= 6.91 && $Achs <= 10.53){
                $Achsh = '--';
            }else if($Achs >= 0.00 && $Achs <= 6.9){
                $Achsh = '---';
            }

            if($Defs >= 26.37){
                $Defsh = '+++';
            }else if($Defs >= 22.17 && $Defs <= 26.36){
                $Defsh = '++';
            }else if($Defs >= 17.97 && $Defs <= 22.16){
                $Defsh = '+';
            }else if($Defs >= 13.76 && $Defs <= 17.96){
                $Defsh = '0';
            }else if($Defs >= 9.56 && $Defs <= 13.75){
                $Defsh = '-';
            }else if($Defs >= 5.56 && $Defs <= 9.55){
                $Defsh = '--';
            }else if($Defs >= 0.00 && $Defs <= 5.55){
                $Defsh = '---';
            }

            if($Ords >= 28.35){
                $Ordsh = '+++';
            }else if($Ords >= 24.52 && $Ords <= 28.34){
                $Ordsh = '++';
            }else if($Ords >= 20.49 && $Ords <= 24.51){
                $Ordsh = '+';
            }else if($Ords >= 16.46 && $Ords <= 20.48){
                $Ordsh = '0';
            }else if($Ords >= 12.43 && $Ords <= 16.45){
                $Ordsh = '-';
            }else if($Ords >= 8.40 && $Ords <= 12.42){
                $Ordsh = '--';
            }else if($Ords >= 0.00 && $Ords <= 8.39){
                $Ordsh = '---';
            }

            if($Exhs >= 17.40){
                $Exhsh = '+++';
            }else if($Exhs >= 14.00 && $Exhs <= 17.39){
                $Exhsh = '++';
            }else if($Exhs >= 10.60 && $Exhs <= 13.99){
                $Exhsh = '+';
            }else if($Exhs >= 7.19 && $Exhs <= 10.59){
                $Exhsh = '0';
            }else if($Exhs >= 3.79 && $Exhs <= 7.18){
                $Exhsh = '-';
            }else if($Exhs >= 0.39 && $Exhs <= 3.78){
                $Exhsh = '--';
            }else if($Exhs >= 0.00 && $Exhs <= 0.38){
                $Exhsh = '---';
            }

            if($Auts >= 15.46){
                $Autsh = '+++';
            }else if($Auts >= 12.50 && $Auts <= 15.45){
                $Autsh = '++';
            }else if($Auts >= 9.54 && $Auts <= 12.49){
                $Autsh = '+';
            }else if($Auts >= 6.57 && $Auts <= 9.53){
                $Autsh = '0';
            }else if($Auts >= 3.61 && $Auts <= 6.56){
                $Autsh = '-';
            }else if($Auts >= 0.65 && $Auts <= 3.6){
                $Autsh = '--';
            }else if($Auts >= 0.00 && $Auts <= 0.64){
                $Autsh = '---';
            }

            if($Affs >= 23.06){
                $Affsh = '+++';
            }else if($Affs >= 21.43 && $Affs <= 23.05){
                $Affsh = '++';
            }else if($Affs >= 17.00 && $Affs <= 21.42){
                $Affsh = '+';
            }else if($Affs >= 14.17 && $Affs <= 17.79){
                $Affsh = '0';
            }else if($Affs >= 10.54 && $Affs <= 14.16){
                $Affsh = '-';
            }else if($Affs >= 6.91 && $Affs <= 10.53){
                $Affsh = '--';
            }else if($Affs >= 0.00 && $Affs <= 6.9){
                $Affsh = '---';
            }

            if($Ints >= 25.40){
                $Intsh = '+++';
            }else if($Ints >= 21.07 && $Ints <= 25.39){
                $Intsh = '++';
            }else if($Ints >= 16.74 && $Ints <= 21.06){
                $Intsh = '+';
            }else if($Ints >= 12.41 && $Ints <= 16.73){
                $Intsh = '0';
            }else if($Ints >= 8.08 && $Ints <= 12.4){
                $Intsh = '-';
            }else if($Ints >= 3.75 && $Ints <= 8.07){
                $Intsh = '--';
            }else if($Ints >= 0.00 && $Ints <= 3.74){
                $Intsh = '---';
            }

            if($Sucs >= 19.31){
                $Sucsh = '+++';
            }else if($Sucs >= 15.45 && $Sucs <= 19.3){
                $Sucsh = '++';
            }else if($Sucs >= 11.59 && $Sucs <= 15.44){
                $Sucsh = '+';
            }else if($Sucs >= 7.72 && $Sucs <= 11.58){
                $Sucsh = '0';
            }else if($Sucs >= 3.86 && $Sucs <= 7.71){
                $Sucsh = '-';
            }else if($Sucs >= 0.00 && $Sucs <= 3.85){
                $Sucsh = '--';
            }else if($Sucs >= -0.01){
                $Sucsh = '---';
            }

            if($Doms >= 24.56){
                $Domsh = '+++';
            }else if($Doms >= 20.43 && $Doms <= 24.55){
                $Domsh = '++';
            }else if($Doms >= 16.30 && $Doms <= 20.42){
                $Domsh = '+';
            }else if($Doms >= 12.17 && $Doms <= 16.29){
                $Domsh = '0';
            }else if($Doms >= 8.04 && $Doms <= 12.16){
                $Domsh = '-';
            }else if($Doms >= 3.91 && $Doms <= 8.03){
                $Domsh = '--';
            }else if($Doms >= 0.00 && $Doms <= 3.9){
                $Domsh = '---';
            }

            if($Abas >= 28.27){
                $Abash = '+++';
            }else if($Abas >= 24.30 && $Abas <= 28.26){
                $Abash = '++';
            }else if($Abas >= 20.33 && $Abas <= 24.29){
                $Abash = '+';
            }else if($Abas >= 16.36 && $Abas <= 20.32){
                $Abash = '0';
            }else if($Abas >= 12.39 && $Abas <= 16.35){
                $Abash = '-';
            }else if($Abas >= 8.42 && $Abas <= 12.38){
                $Abash = '--';
            }else if($Abas >= 0.00 && $Abas <= 8.41){
                $Abash = '---';
            }

            if($Nurs >= 27.11){
                $Nursh = '+++';
            }else if($Nurs >= 23.17 && $Nurs <= 27.1){
                $Nursh = '++';
            }else if($Nurs >= 19.23 && $Nurs <= 23.16){
                $Nursh = '+';
            }else if($Nurs >= 15.28 && $Nurs <= 19.22){
                $Nursh = '0';
            }else if($Nurs >= 11.34 && $Nurs <= 15.27){
                $Nursh = '-';
            }else if($Nurs >= 7.40 && $Nurs <= 11.33){
                $Nursh = '--';
            }else if($Nurs >= 0.00 && $Nurs <= 7.39){
                $Nursh = '---';
            }

            if($Chgs >= 23.81){
                $Chgsh = '+++';
            }else if($Chgs >= 19.94 && $Chgs <= 23.8){
                $Chgsh = '++';
            }else if($Chgs >= 16.07 && $Chgs <= 19.93){
                $Chgsh = '+';
            }else if($Chgs >= 12.20 && $Chgs <= 16.06){
                $Chgsh = '0';
            }else if($Chgs >= 8.33 && $Chgs <= 12.19){
                $Chgsh = '-';
            }else if($Chgs >= 4.46 && $Chgs <= 8.32){
                $Chgsh = '--';
            }else if($Chgs >= 0.00 && $Chgs <= 4.45){
                $Chgsh = '---';
            }

            if($Ends >= 29.53){
                $Endsh = '+++';
            }else if($Ends >= 25.56 && $Ends <= 29.52){
                $Endsh = '++';
            }else if($Ends >= 21.58 && $Ends <= 25.55){
                $Endsh = '+';
            }else if($Ends >= 17.59 && $Ends <= 21.57){
                $Endsh = '0';
            }else if($Ends >= 13.61 && $Ends <= 17.58){
                $Endsh = '-';
            }else if($Ends >= 9.63 && $Ends <= 13.6){
                $Endsh = '--';
            }else if($Ends >= 0.00 && $Ends <= 9.62){
                $Endsh = '---';
            }

            // masih salah
            if($Hets >= 16.20){
                $Hetsh = '+++';
            }else if($Hets >= 12.22 && $Hets <= 29.52){
                $Hetsh = '++';
            }else if($Hets >= 8.24 && $Hets <= 25.55){
                $Hetsh = '+';
            }else if($Hets >= 4.25 && $Hets <= 21.57){
                $Hetsh = '0';
            }else if($Hets >= 0.27 && $Hets <= 17.58){
                $Hetsh = '-';
            }else if($Hets >= -3.71 && $Hets <= 0.26){
                $Hetsh = '--';
            }else if($Hets <= -3.72){
                $Hetsh = '---';
            }
            
            if($Aggs >= 18.04){
                $Aggsh = '+++';
            }else if($Aggs >= 14.81 && $Aggs <= 18.03){
                $Aggsh = '++';
            }else if($Aggs >= 11.58 && $Aggs <= 14.8){
                $Aggsh = '+';
            }else if($Aggs >= 8.35 && $Aggs <= 11.57){
                $Aggsh = '0';
            }else if($Aggs >= 5.12 && $Aggs <= 8.34){
                $Aggsh = '-';
            }else if($Aggs >= 1.89 && $Aggs <= 5.11){
                $Aggsh = '--';
            }else if($Aggs >= 0.00 && $Aggs <= 1.88){
                $Aggsh = '---';
            }




        }else if($jenis_kelamin == 1){

            if($Achs >= 24.96){
                $Achsh = '+++';
            }else if($Achs >= 21.89 && $Achs <= 24.95){
                $Achsh = '++';
            }else if($Achs >= 18.82 && $Achs <= 21.88){
                $Achsh = '+';
            }else if($Achs >= 15.75 && $Achs <= 18.81){
                $Achsh = '0';
            }else if($Achs >= 12.68 && $Achs <= 15.74){
                $Achsh = '-';
            }else if($Achs >= 9.51 && $Achs <= 12.67){
                $Achsh = '--';
            }else if($Achs >= 0.00 && $Achs <= 9.5){
                $Achsh = '---';
            }

            if($Defs >= 23.45){
                $Defsh = '+++';
            }else if($Defs >= 19.97 && $Defs <= 23.44){
                $Defsh = '++';
            }else if($Defs >= 16.49 && $Defs <= 19.96){
                $Defsh = '+';
            }else if($Defs >= 13.01 && $Defs <= 16.45){
                $Defsh = '0';
            }else if($Defs >= 9.53 && $Defs <= 13){
                $Defsh = '-';
            }else if($Defs >= 6.05 && $Defs <= 9.52){
                $Defsh = '--';
            }else if($Defs >= 0.00 && $Defs <= 6.04){
                $Defsh = '---';
            }

            if($Ords >= 28.76){
                $Ordsh = '+++';
            }else if($Ords >= 24.88 && $Ords <= 28.75){
                $Ordsh = '++';
            }else if($Ords >= 20.99 && $Ords <= 24.87){
                $Ordsh = '+';
            }else if($Ords >= 17.10 && $Ords <= 20.98){
                $Ordsh = '0';
            }else if($Ords >= 13.21 && $Ords <= 17.09){
                $Ordsh = '-';
            }else if($Ords >= 9.32 && $Ords <= 13.2){
                $Ordsh = '--';
            }else if($Ords >= 0.00 && $Ords <= 9.31){
                $Ordsh = '---';
            }

            if($Exhs >= 19.18){
                $Exhsh = '+++';
            }else if($Exhs >= 15.76 && $Exhs <= 19.17){
                $Exhsh = '++';
            }else if($Exhs >= 12.34 && $Exhs <= 15.75){
                $Exhsh = '+';
            }else if($Exhs >= 8.92 && $Exhs <= 12.33){
                $Exhsh = '0';
            }else if($Exhs >= 5.50 && $Exhs <= 8.91){
                $Exhsh = '-';
            }else if($Exhs >= 2.08 && $Exhs <= 5.49){
                $Exhsh = '--';
            }else if($Exhs >= 0.00 && $Exhs <= 2.07){
                $Exhsh = '---';
            }

            if($Auts >= 16.72){
                $Autsh = '+++';
            }else if($Auts >= 13.38 && $Auts <= 16.71){
                $Autsh = '++';
            }else if($Auts >= 10.04 && $Auts <= 13.37){
                $Autsh = '+';
            }else if($Auts >= 6.70 && $Auts <= 10.03){
                $Autsh = '0';
            }else if($Auts >= 3.36 && $Auts <= 6.69){
                $Autsh = '-';
            }else if($Auts >= 0.02 && $Auts <= 3.35){
                $Autsh = '--';
            }else if($Auts >= 0.00 && $Auts <= 0.01){
                $Autsh = '---';
            }

            if($Affs >= 21.97){
                $Affsh = '+++';
            }else if($Affs >= 18.33 && $Affs <= 21.96){
                $Affsh = '++';
            }else if($Affs >= 14.69 && $Affs <= 18.32){
                $Affsh = '+';
            }else if($Affs >= 11.05 && $Affs <= 14.68){
                $Affsh = '0';
            }else if($Affs >= 7.41 && $Affs <= 11.04){
                $Affsh = '-';
            }else if($Affs >= 3.77 && $Affs <= 7.4){
                $Affsh = '--';
            }else if($Affs >= 0.00 && $Affs <= 3.76){
                $Affsh = '---';
            }

            if($Ints >= 23.66){
                $Intsh = '+++';
            }else if($Ints >= 19.81 && $Ints <= 23.65){
                $Intsh = '++';
            }else if($Ints >= 15.96 && $Ints <= 19.8){
                $Intsh = '+';
            }else if($Ints >= 12.11 && $Ints <= 15.95){
                $Intsh = '0';
            }else if($Ints >= 8.26 && $Ints <= 12.1){
                $Intsh = '-';
            }else if($Ints >= 4.41 && $Ints <= 8.25){
                $Intsh = '--';
            }else if($Ints >= 0.00 && $Ints <= 4.4){
                $Intsh = '---';
            }

            if($Sucs >= 25.71){
                $Sucsh = '+++';
            }else if($Sucs >= 20.70 && $Sucs <= 25.7){
                $Sucsh = '++';
            }else if($Sucs >= 15.96 && $Sucs <= 20.69){
                $Sucsh = '+';
            }else if($Sucs >= 10.68 && $Sucs <= 15.68){
                $Sucsh = '0';
            }else if($Sucs >= 5.67 && $Sucs <= 10.67){
                $Sucsh = '-';
            }else if($Sucs >= 0.66 && $Sucs <= 5.66){
                $Sucsh = '--';
            }else if($Sucs >= 0.00 && $Sucs <= 0.65){
                $Sucsh = '---';
            }

            if($Doms >= 24.20){
                $Domsh = '+++';
            }else if($Doms >= 20.03 && $Doms <= 24.19){
                $Domsh = '++';
            }else if($Doms >= 15.86 && $Doms <= 20.02){
                $Domsh = '+';
            }else if($Doms >= 11.69 && $Doms <= 15.85){
                $Domsh = '0';
            }else if($Doms >= 7.52 && $Doms <= 11.68){
                $Domsh = '-';
            }else if($Doms >= 3.35 && $Doms <= 7.51){
                $Domsh = '--';
            }else if($Doms >= 0.00 && $Doms <= 3.34){
                $Domsh = '---';
            }

            if($Abas >= 27.64){
                $Abash = '+++';
            }else if($Abas >= 23.64 && $Abas <= 27.63){
                $Abash = '++';
            }else if($Abas >= 19.64 && $Abas <= 23.63){
                $Abash = '+';
            }else if($Abas >= 15.64 && $Abas <= 19.63){
                $Abash = '0';
            }else if($Abas >= 11.64 && $Abas <= 15.63){
                $Abash = '-';
            }else if($Abas >= 7.64 && $Abas <= 11.63){
                $Abash = '--';
            }else if($Abas >= 0.00 && $Abas <= 7.63){
                $Abash = '---';
            }

            if($Nurs >= 27.83){
                $Nursh = '+++';
            }else if($Nurs >= 23.98 && $Nurs <= 27.82){
                $Nursh = '++';
            }else if($Nurs >= 20.13 && $Nurs <= 23.97){
                $Nursh = '+';
            }else if($Nurs >= 16.28 && $Nurs <= 20.12){
                $Nursh = '0';
            }else if($Nurs >= 12.43 && $Nurs <= 16.27){
                $Nursh = '-';
            }else if($Nurs >= 8.58 && $Nurs <= 12.42){
                $Nursh = '--';
            }else if($Nurs >= 0.00 && $Nurs <= 8.57){
                $Nursh = '---';
            }

            if($Chgs >= 21.46){
                $Chgsh = '+++';
            }else if($Chgs >= 17.64 && $Chgs <= 21.45){
                $Chgsh = '++';
            }else if($Chgs >= 13.82 && $Chgs <= 17.63){
                $Chgsh = '+';
            }else if($Chgs >= 10.00 && $Chgs <= 13.81){
                $Chgsh = '0';
            }else if($Chgs >= 6.18 && $Chgs <= 9.99){
                $Chgsh = '-';
            }else if($Chgs >= 2.36 && $Chgs <= 6.17){
                $Chgsh = '--';
            }else if($Chgs >= 0.00 && $Chgs <= 2.35){
                $Chgsh = '---';
            }

            if($Ends >= 29.57){
                $Endsh = '+++';
            }else if($Ends >= 25.66 && $Ends <= 29.56){
                $Endsh = '++';
            }else if($Ends >= 21.75 && $Ends <= 25.65){
                $Endsh = '+';
            }else if($Ends >= 17.84 && $Ends <= 21.75){
                $Endsh = '0';
            }else if($Ends >= 13.93 && $Ends <= 17.83){
                $Endsh = '-';
            }else if($Ends >= 10.02 && $Ends <= 13.92){
                $Endsh = '--';
            }else if($Ends >= 0.00 && $Ends <= 10.01){
                $Endsh = '---';
            }

            if($Hets >= 18.32){
                $Hetsh = '+++';
            }else if($Hets >= 13.69 && $Hets <= 18.31){
                $Hetsh = '++';
            }else if($Hets >= 9.06 && $Hets <= 13.68){
                $Hetsh = '+';
            }else if($Hets >= 4.43 && $Hets <= 9.05){
                $Hetsh = '0';
            }else if($Hets >= 0.20 && $Hets <= 4.42){
                $Hetsh = '-';
            }else if($Hets >= -4.81 && $Hets <= 0.19){
                $Hetsh = '--';
            }else if($Hets >= -3.72){
                $Hetsh = '---';
            }
            
            if($Aggs >= 21.34){
                $Aggsh = '+++';
            }else if($Aggs >= 17.25 && $Aggs <= 21.33){
                $Aggsh = '++';
            }else if($Aggs >= 13.16 && $Aggs <= 17.24){
                $Aggsh = '+';
            }else if($Aggs >= 9.07 && $Aggs <= 13.15){
                $Aggsh = '0';
            }else if($Aggs >= 4.98 && $Aggs <= 9.06){
                $Aggsh = '-';
            }else if($Aggs >= 0.89 && $Aggs <= 4.97){
                $Aggsh = '--';
            }else if($Aggs >= 0.00 && $Aggs <= 0.88){
                $Aggsh = '---';
            }

        }
    }else{
        $reportShowEPPS = "No";
    };

if($reportShowEPPS == "Yes"){

    $AchI = '';
    $DefI = '';
    $OrdI = '';
    $ExhI = '';
    $AutI = '';

    $AffI = '';
    $IntI = '';
    $SucI = '';
    $DomI = '';
    $AbaI = '';

    $NurI = '';
    $ChgI = '';
    $EndI = '';
    $HetI = '';
    $AggI = '';


    $sqlInterpretasiACH = "
        SELECT  interpretasi_text as interpretasi_text
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'ACH'
        AND     interpretasi_tesId = 120
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 = '".$Achsh."'
    ";

    if($resultACH = mysqli_query($mysqli, $sqlInterpretasiACH)){
        while($row = mysqli_fetch_array($resultACH)){
            $AchI = $row['interpretasi_text'];
        }
    }


    $sqlInterpretasiDEF = "
        SELECT  interpretasi_text as interpretasi_text
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'DEF'
        AND     interpretasi_tesId = 120
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 = '".$Defsh."'
    ";

    if($resultDEF = mysqli_query($mysqli, $sqlInterpretasiDEF)){
        while($row = mysqli_fetch_array($resultDEF)){
            $DefI = $row['interpretasi_text'];
        }
    }

    $sqlInterpretasiORD = "
        SELECT  interpretasi_text as interpretasi_text
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'ORD'
        AND     interpretasi_tesId = 120
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 = '".$Ordsh."'
    ";

    if($resultORD = mysqli_query($mysqli, $sqlInterpretasiORD)){
        while($row = mysqli_fetch_array($resultORD)){
            $OrdI = $row['interpretasi_text'];
        }
    }


    $sqlInterpretasiEXH = "
        SELECT  interpretasi_text as interpretasi_text
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'EXH'
        AND     interpretasi_tesId = 120
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 = '".$Exhsh."'
    ";
    
    if($resultEXH = mysqli_query($mysqli, $sqlInterpretasiEXH)){
        while($row = mysqli_fetch_array($resultEXH)){
            $ExhI = $row['interpretasi_text'];
        }
    }


    $sqlInterpretasiAUT = "
        SELECT  interpretasi_text as interpretasi_text
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'AUT'
        AND     interpretasi_tesId = 120
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 = '".$Autsh."'
    ";

    if($resultAUT = mysqli_query($mysqli, $sqlInterpretasiAUT)){
        while($row = mysqli_fetch_array($resultAUT)){
            $AutI = $row['interpretasi_text'];
        }
    }


    $sqlInterpretasiAFF = "
        SELECT  interpretasi_text as interpretasi_text
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'AFF'
        AND     interpretasi_tesId = 120
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 = '".$Affsh."'
    ";

    if($resultAFF = mysqli_query($mysqli, $sqlInterpretasiAFF)){
        while($row = mysqli_fetch_array($resultAFF)){
            $AffI = $row['interpretasi_text'];
        }
    }


    $sqlInterpretasiINT = "
        SELECT  interpretasi_text as interpretasi_text
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'INT'
        AND     interpretasi_tesId = 120
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 = '".$Intsh."'
    ";

    if($resultINT = mysqli_query($mysqli, $sqlInterpretasiINT)){
        while($row = mysqli_fetch_array($resultINT)){
            $IntI = $row['interpretasi_text'];
        }
    }


    $sqlInterpretasiSUC = "
        SELECT  interpretasi_text as interpretasi_text
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'SUC'
        AND     interpretasi_tesId = 120
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 = '".$Sucsh."'
    ";

    if($resultSUC = mysqli_query($mysqli, $sqlInterpretasiSUC)){
        while($row = mysqli_fetch_array($resultSUC)){
            $SucI = $row['interpretasi_text'];
        }
    }


    $sqlInterpretasiDOM = "
        SELECT  interpretasi_text as interpretasi_text
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'DOM'
        AND     interpretasi_tesId = 120
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 = '".$Domsh."'
    ";

    if($resultDOM = mysqli_query($mysqli, $sqlInterpretasiDOM)){
        while($row = mysqli_fetch_array($resultDOM)){
            $DomI = $row['interpretasi_text'];
        }
    }


    $sqlInterpretasiABA = "
        SELECT  interpretasi_text as interpretasi_text
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'ABA'
        AND     interpretasi_tesId = 120
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 = '".$Abash."'
    ";

    if($resultABA = mysqli_query($mysqli, $sqlInterpretasiABA)){
        while($row = mysqli_fetch_array($resultABA)){
            $AbaI = $row['interpretasi_text'];
        }
    }


    $sqlInterpretasiNUR = "
        SELECT  interpretasi_text as interpretasi_text
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'NUR'
        AND     interpretasi_tesId = 120
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 = '".$Nursh."'
    ";

    if($resultNUR = mysqli_query($mysqli, $sqlInterpretasiNUR)){
        while($row = mysqli_fetch_array($resultNUR)){
            $NurI = $row['interpretasi_text'];
        }
    }

    $sqlInterpretasiCHG = "
        SELECT  interpretasi_text as interpretasi_text
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'CHG'
        AND     interpretasi_tesId = 120
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 = '".$Chgsh."'
    ";

    if($resultCHG = mysqli_query($mysqli, $sqlInterpretasiCHG)){
        while($row = mysqli_fetch_array($resultCHG)){
            $ChgI = $row['interpretasi_text'];
        }
    }

    $sqlInterpretasiEND = "
        SELECT  interpretasi_text as interpretasi_text
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'END'
        AND     interpretasi_tesId = 120
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 = '".$Endsh."'
    ";

    if($resultEND = mysqli_query($mysqli, $sqlInterpretasiEND)){
        while($row = mysqli_fetch_array($resultEND)){
            $EndI = $row['interpretasi_text'];
        }
    }


    $sqlInterpretasiHET = "
        SELECT  interpretasi_text as interpretasi_text
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'HET'
        AND     interpretasi_tesId = 120
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 = '".$Hetsh."'
    ";

    if($resultHET = mysqli_query($mysqli, $sqlInterpretasiHET)){
        while($row = mysqli_fetch_array($resultHET)){
            $HetI = $row['interpretasi_text'];
        }
    }

    $sqlInterpretasiAGG = "
        SELECT  interpretasi_text as interpretasi_text
        FROM    cbt_Interpretasi
        WHERE   interpretasi_kode = 'AGG'
        AND     interpretasi_tesId = 120
        AND     interpretasi_subtes = 1
        AND     interpretasi_custom_field1 = '".$Aggsh."'
    ";

    if($resultAGG = mysqli_query($mysqli, $sqlInterpretasiAGG)){
        while($row = mysqli_fetch_array($resultAGG)){
            $AggI = $row['interpretasi_text'];
        }
    }

    // $AchI = '';
    // $DefI = '';
    // $OrdI = '';
    // $ExhI = '';
    // $AutI = '';

    // $AffI = '';
    // $IntI = '';
    // $SucI = '';
    // $DomI = '';
    // $AbaI = '';

    // $NurI = '';
    // $ChgI = '';
    // $EndI = '';
    // $HetI = '';
    // $AggI = '';
    


?>
<html>
<head>
    <title>EPPS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<section class="invoice">
    <body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

    <div style="margin: 10px; text-align: center; margin-top: 10px;"><H1>EPPS</H1></div>
    <table style="font-size: 15px; width: -webkit-fill-available; margin: 10px; border-collapse: collapse; margin-left: 20px; margin-right: 20px;">
        <tr>
            <td style="width: 10%;">Nomor</td>
            <td style="width: 3%;">&nbsp;:</td>
            <td style="width: 37%;">12345</td>
            <td style="width: 10%;">Jenis Kelamin</td>
            <td style="width: 3%;">&nbsp;:</td>
            <td style="width: 37%;"><?php   if($jenis_kelamin == 1){
                                                echo "Laki-Laki";
                                            }else{
                                                echo "Perempuan";
                                            }?>
            </td>
        </tr>

        <tr>
            <td>Nama</td>
            <td>&nbsp;:</td>
            <td><? echo $name; ?></td>
            <td>Umur</td>
            <td>&nbsp;:</td>
            <td><?php echo $from->diff($to)->y;?> tahun</td>
        </tr>

        <tr>
            <td>Status</td>
            <td>&nbsp;:</td>
            <td><?php if($status == 5){ echo "Time Out";}else if($status == 4 ){echo "Selesai";}else{ echo "Belum Dikerjakan";}  ?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>

    <table style="font-size: 13px; width: -webkit-fill-available; margin: 10px; border-top: 2px solid black; border-collapse: collapse; margin-left: 10px; margin-right: 20px; width:98%">
        <!---kolom tengah-->
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="borderRight">&nbsp;</td>
            <td>&nbsp;o</td>
            <td>r</td>
            <td>c</td>
            <td>s</td>
            <td>ss</td>
        </tr>
        <tr>
            <td>1 <?php if($s1 == 'A'){ echo '<strike style="color:red !important;"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s1 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important;" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>6 <?php if($s6 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s6 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>11 <?php if($s11 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s11 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>16 <?php if($s16 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s16 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>21 <?php if($s21 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s21 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>26 <?php if($s26 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s26 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>31 <?php if($s31 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s31 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>36 <?php if($s36 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s36 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>41 <?php if($s41 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s41 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>46 <?php if($s46 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s46 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>51 <?php if($s51 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s51 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>56 <?php if($s56 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s56 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>61 <?php if($s61 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s61 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>66 <?php if($s66 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s66 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td class="borderRight">71 <?php if($s71 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s71 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>&nbsp;Ach</td>
            <td><?php echo $Achr; ?></td>
            <td><?php echo $Achc; ?></td>
            <td><?php echo $Achs; ?></td>
            <td><?php echo $Achsh; ?></td>
        </tr>
        <tr>
            <td>2 <?php if($s2 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s2 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>7 <?php if($s7 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s7 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>12 <?php if($s12 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s12 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>17 <?php if($s17 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s17 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>22 <?php if($s22 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s22 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>27 <?php if($s27 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s27 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>32 <?php if($s32 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s32 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>37 <?php if($s37 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s37 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>42 <?php if($s42 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s42 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>47 <?php if($s47 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s47 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>52 <?php if($s52 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s52 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>57 <?php if($s57 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s57 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>62 <?php if($s62 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s62 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>67 <?php if($s67 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s67 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td class="borderRight">72 <?php if($s72 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s72 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>&nbsp;Def</td>
            <td><?php echo $Defr; ?></td>
            <td><?php echo $Defc; ?></td>
            <td><?php echo $Defs; ?></td>
            <td><?php echo $Defsh; ?></td>
        </tr>
        <tr>
            <td>3 <?php if($s3 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s3 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>8 <?php if($s8 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s8 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>13 <?php if($s13 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s13 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>18 <?php if($s18 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s18 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>23 <?php if($s23 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s23 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>28 <?php if($s28 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s28 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>33 <?php if($s33 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s33 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>38 <?php if($s38 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s38 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>43 <?php if($s43 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s43 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>48 <?php if($s48 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s48 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>53 <?php if($s53 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s53 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>58 <?php if($s58 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s58 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>63 <?php if($s63 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s63 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>68 <?php if($s68 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s68 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td class="borderRight">73 <?php if($s73 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s73 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>&nbsp;Ord</td>
            <td><?php echo $Ordr; ?></td>
            <td><?php echo $Ordc; ?></td>
            <td><?php echo $Ords; ?></td>
            <td><?php echo $Ordsh; ?></td>
        </tr>
        <tr>
            <td>4 <?php if($s4 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s4 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>9 <?php if($s9 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s9 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>14 <?php if($s14 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s14 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>19 <?php if($s19 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s19 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>24 <?php if($s24 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s24 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>29 <?php if($s29 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s29 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>34 <?php if($s34 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s34 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>39 <?php if($s39 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s39 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>44 <?php if($s44 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s44 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>49 <?php if($s49 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s49 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>54 <?php if($s54 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s54 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>59 <?php if($s59 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s59 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>64 <?php if($s64 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s64 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>69 <?php if($s69 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s69 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td class="borderRight">74 <?php if($s74 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s74 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>&nbsp;Exh</td>
            <td><?php echo $Exhr; ?></td>
            <td><?php echo $Exhc; ?></td>
            <td><?php echo $Exhs; ?></td>
            <td><?php echo $Exhsh; ?></td>
        </tr>
        <tr>
            <td>5 <?php if($s5 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s5 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>10 <?php if($s10 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s10 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>15 <?php if($s15 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s15 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>20 <?php if($s20 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s20 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>25 <?php if($s25 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s25 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>30 <?php if($s30 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s30 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>35 <?php if($s35 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s35 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>40 <?php if($s40 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s40 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>45 <?php if($s45 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s45 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>50 <?php if($s50 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s50 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>55 <?php if($s55 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s55 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>60 <?php if($s60 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s60 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>65 <?php if($s65 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s65 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>70 <?php if($s70 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s70 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td class="borderRight">75 <?php if($s75 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s75 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>&nbsp;Aut</td>
            <td><?php echo $Autr; ?></td>
            <td><?php echo $Autc; ?></td>
            <td><?php echo $Auts; ?></td>
            <td><?php echo $Autsh; ?></td>
        </tr>

        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="borderRight">&nbsp;</td>
        </tr>
        <tr>
            <td>76 <?php if($s76 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s76 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>81 <?php if($s81 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s81 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>86 <?php if($s86 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s86 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>91 <?php if($s91 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s91 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>96 <?php if($s96 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s96 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>101 <?php if($s101 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s101 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>106 <?php if($s106 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s106 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>111 <?php if($s111 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s111 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>116 <?php if($s116 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s116 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>121 <?php if($s121 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s121 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>126 <?php if($s126 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s126 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>131 <?php if($s131 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s131 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>136 <?php if($s136 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s136 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>141 <?php if($s141 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s141 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td class="borderRight">146 <?php if($s146 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s146 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>&nbsp;Aff</td>
            <td><?php echo $Affr; ?></td>
            <td><?php echo $Affc; ?></td>
            <td><?php echo $Affs; ?></td>
            <td><?php echo $Affsh; ?></td>
        </tr>
        <tr>
            <td>77 <?php if($s77 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s77 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>82 <?php if($s82 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s82 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>87 <?php if($s87 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s87 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>92 <?php if($s92 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s92 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>97 <?php if($s97 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s97 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>102 <?php if($s102 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s102 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>107 <?php if($s107 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s107 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>112 <?php if($s112 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s112 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>117 <?php if($s117 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s117 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>122 <?php if($s122 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s122 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>127 <?php if($s127 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s127 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>132 <?php if($s132 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s132 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>137 <?php if($s137 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s137 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>142 <?php if($s142 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s142 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td class="borderRight">147 <?php if($s147 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s147 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>&nbsp;Int</td>
            <td><?php echo $Intr; ?></td>
            <td><?php echo $Intc; ?></td>
            <td><?php echo $Ints; ?></td>
            <td><?php echo $Intsh; ?></td>
        </tr>
        <tr>
            <td>78 <?php if($s78 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s78 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>83 <?php if($s83 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s83 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>88 <?php if($s88 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s88 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>93 <?php if($s93 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s93 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>98 <?php if($s98 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s98 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>103 <?php if($s103 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s103 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>108 <?php if($s108 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s108 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>113 <?php if($s113 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s113 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>118 <?php if($s118 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s118 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>123 <?php if($s123 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s123 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>128 <?php if($s128 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s128 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>133 <?php if($s133 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s133 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>138 <?php if($s138 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s138 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>143 <?php if($s143 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s143 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td class="borderRight">148 <?php if($s148 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s148 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>&nbsp;Suc</td>
            <td><?php echo $Sucr; ?></td>
            <td><?php echo $Succ; ?></td>
            <td><?php echo $Sucs; ?></td>
            <td><?php echo $Sucsh; ?></td>
        </tr>
        <tr>
            <td>79 <?php if($s79 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s79 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>84 <?php if($s84 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s84 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>89 <?php if($s89 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s89 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>94 <?php if($s94 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s94 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>99 <?php if($s99 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s99 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>104 <?php if($s104 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s104 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>109 <?php if($s109 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s109 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>114 <?php if($s114 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s114 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>119 <?php if($s119 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s119 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>124 <?php if($s124 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s124 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>129 <?php if($s129 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s129 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>134 <?php if($s134 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s134 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>139 <?php if($s139 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s139 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>144 <?php if($s144 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s144 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td class="borderRight">149 <?php if($s149 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s149 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>&nbsp;Dom</td>
            <td><?php echo $Domr; ?></td>
            <td><?php echo $Domc; ?></td>
            <td><?php echo $Doms; ?></td>
            <td><?php echo $Domsh; ?></td>
        </tr>
        <tr>
            <td>80 <?php if($s80 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s80 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>85 <?php if($s85 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s85 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>90 <?php if($s90 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s90 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>95 <?php if($s95 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s95 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>100 <?php if($s100 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s100 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>105 <?php if($s105 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s105 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>110 <?php if($s110 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s110 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>115 <?php if($s115 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s115 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>120 <?php if($s120 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s120 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>125 <?php if($s125 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s125 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>130 <?php if($s130 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s130 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>135 <?php if($s135 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s135 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>140 <?php if($s140 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s140 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>145 <?php if($s145 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s145 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td class="borderRight">150 <?php if($s150 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s150 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>&nbsp;Aba</td>
            <td><?php echo $Abar; ?></td>
            <td><?php echo $Abac; ?></td>
            <td><?php echo $Abas; ?></td>
            <td><?php echo $Abash; ?></td>
        </tr>

        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="borderRight">&nbsp;</td>
        </tr>

        <tr>
            <td>151 <?php if($s151 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s151 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>156 <?php if($s156 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s156 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>161 <?php if($s161 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s161 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>166 <?php if($s166 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s166 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>171 <?php if($s171 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s171 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>176 <?php if($s176 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s176 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>181 <?php if($s181 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s181 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>186 <?php if($s186 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s186 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>191 <?php if($s191 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s191 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>196 <?php if($s196 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s196 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>201 <?php if($s201 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s201 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>206 <?php if($s206 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s206 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>211 <?php if($s211 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s211 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>216 <?php if($s216 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s216 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td class="borderRight">221 <?php if($s221 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s221 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>&nbsp;Nur</td>
            <td><?php echo $Nurr; ?></td>
            <td><?php echo $Nurc; ?></td>
            <td><?php echo $Nurs; ?></td>
            <td><?php echo $Nursh; ?></td>
        </tr>
        <tr>
            <td>152 <?php if($s152 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s152 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>157 <?php if($s157 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s157 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>162 <?php if($s162 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s162 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>167 <?php if($s167 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s167 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>172 <?php if($s172 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s172 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>177 <?php if($s177 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s177 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>182 <?php if($s182 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s182 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>187 <?php if($s187 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s187 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>192 <?php if($s192 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s192 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>197 <?php if($s197 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s197 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>202 <?php if($s202 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s202 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>207 <?php if($s207 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s207 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>212 <?php if($s212 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s212 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>217 <?php if($s217 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s217 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td class="borderRight">222 <?php if($s222 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s222 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>&nbsp;Chg</td>
            <td><?php echo $Chgr; ?></td>
            <td><?php echo $Chgc; ?></td>
            <td><?php echo $Chgs; ?></td>
            <td><?php echo $Chgsh; ?></td>
        </tr>
        <tr>
            <td>153 <?php if($s153 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s153 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>158 <?php if($s158 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s158 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>163 <?php if($s163 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s163 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>168 <?php if($s168 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s168 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>173 <?php if($s173 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s173 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>178 <?php if($s178 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s178 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>183 <?php if($s183 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s183 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>188 <?php if($s188 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s188 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>193 <?php if($s193 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s193 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>198 <?php if($s198 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s198 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>203 <?php if($s203 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s203 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>208 <?php if($s208 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s208 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>213 <?php if($s213 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s213 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>218 <?php if($s218 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s218 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td class="borderRight">223 <?php if($s223 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s223 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>&nbsp;End</td>
            <td><?php echo $Endr; ?></td>
            <td><?php echo $Endc; ?></td>
            <td><?php echo $Ends; ?></td>
            <td><?php echo $Endsh; ?></td>
        </tr>
        <tr>
            <td>154 <?php if($s154 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s154 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>159 <?php if($s159 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s159 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>164 <?php if($s164 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s164 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>169 <?php if($s169 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s169 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>174 <?php if($s174 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s174 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>179 <?php if($s179 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s179 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>184 <?php if($s184 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s184 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>189 <?php if($s189 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s189 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>194 <?php if($s194 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s194 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>199 <?php if($s199 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s199 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>204 <?php if($s204 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s204 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>209 <?php if($s209 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s209 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>214 <?php if($s214 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s214 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>219 <?php if($s219 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s219 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td class="borderRight">224 <?php if($s224 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s224 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>&nbsp;Het</td>
            <td><?php echo $Hetr; ?></td>
            <td><?php echo $Hetc; ?></td>
            <td><?php echo $Hets; ?></td>
            <td><?php echo $Hetsh; ?></td>
        </tr>
        <tr style="border-bottom: 2px solid black;">
            <td>155 <?php if($s155 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s155 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>160 <?php if($s160 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s160 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>165 <?php if($s165 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s165 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>170 <?php if($s170 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s170 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>175 <?php if($s175 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s175 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>180 <?php if($s180 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s180 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>185 <?php if($s185 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s185 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>190 <?php if($s190 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s190 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>195 <?php if($s195 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s195 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>200 <?php if($s200 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s200 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>205 <?php if($s205 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s205 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>210 <?php if($s210 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s210 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>215 <?php if($s215 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s215 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>220 <?php if($s220 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s220 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td class="borderRight">225 <?php if($s225 == 'A'){ echo '<strike style="color:red !important"><sup><span style="color:black">A</span></sup></strike> <sub>B</sub>'; } else if($s225 == 'B'){ echo'<sup>A</sup> <strike style="color:red !important" ><sub><span style="color:black">B</span></sub></strike>'; }?></td>
            <td>&nbsp;Agg</td>
            <td><?php echo $Aggr; ?></td>
            <td><?php echo $Aggc; ?></td>
            <td><?php echo $Aggs; ?></td>
            <td><?php echo $Aggsh; ?></td>
        </tr>
        <tr style="padding-top: 5px;">
                <td class="paddingtr">
                    <div class="divResult"><? echo $b1; ?></div>
                </td>
                <td class="paddingtr">
                    <div class="divResult"><? echo $b2; ?></div>
                </td>
                <td class="paddingtr">
                    <div class="divResult"><? echo $b3; ?></div>
                </td>
                <td class="paddingtr">
                    <div class="divResult"><? echo $b4; ?></div>
                </td>
                <td class="paddingtr">
                    <div class="divResult"><? echo $b5; ?></div>
                </td>
                <td class="paddingtr">
                    <div class="divResult"><? echo $b6; ?></div>
                </td>
                <td class="paddingtr">
                    <div class="divResult"><? echo $b7; ?></div>
                </td>
                <td class="paddingtr">
                    <div class="divResult"><? echo $b8; ?></div>
                </td>
                <td class="paddingtr">
                    <div class="divResult"><? echo $b9; ?></div>
                </td>
                <td class="paddingtr">
                    <div class="divResult"><? echo $b10; ?></div>
                </td>
                <td class="paddingtr">
                    <div class="divResult"><? echo $b11; ?></div>
                </td>
                <td class="paddingtr">
                    <div class="divResult"><? echo $b12; ?></div>
                </td>
                <td class="paddingtr">
                    <div class="divResult"><? echo $b13; ?></div>
                </td>
                <td class="paddingtr">
                    <div class="divResult"><? echo $b14; ?></div>
                </td>
                <td class="paddingtr">
                    <div class="divResult"><? echo $b15; ?></div>
                </td>
                

        </tr>
    </table>


    <!-- <div style="margin: 10px; text-align: center; margin-top: 10px;"><H1>EPPS</H1></div> -->
    <!-- <table style="font-size: 15px; width: -webkit-fill-available; margin: 10px; border-collapse: collapse; margin-left: 20px; margin-right: 20px;">
        <tr>
            <td style="width: 10%;">Nomor</td>
            <td style="width: 3%;">&nbsp;:</td>
            <td style="width: 37%;">12345</td>
            <td style="width: 10%;">Jenis Kelamin</td>
            <td style="width: 3%;">&nbsp;:</td>
            <td style="width: 37%;"><?php   if($jenis_kelamin == 1){
                                                echo "Laki-Laki";
                                            }else{
                                                echo "Perempuan";
                                            }?>
            </td>
        </tr>

        <tr>
            <td>Nama</td>
            <td>&nbsp;:</td>
            <td><? echo $name; ?></td>
            <td>Umur</td>
            <td>&nbsp;:</td>
            <td><?php echo $from->diff($to)->y;?> tahun</td>
        </tr>

        <tr>
            <td>Status</td>
            <td>&nbsp;:</td>
            <td><?php if($status == 5){ echo "Time Out";}else if($status == 4 ){echo "Selesai";}else{ echo "Belum Dikerjakan";}  ?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table> -->
    
   



<footer style="page-break-after: always; "></footer>
<div>&nbsp;</div>

<table style="font-size: 15px; width: 90%; margin: 10px; border-collapse: collapse; margin-left: 20px; margin-right: 20px; border: 1px solid black;">
        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; text-align:center; width:15%;"><strong><?php   if($jenis_kelamin == 1){echo "Laki-Laki";}else{echo "Perempuan";}?></strong></td>
            <td style="border: 1px solid black; text-align:center; width:8%;"><strong>Score</strong></td>
            <td style="border: 1px solid black; text-align:center; width:8%;"><strong>+ / -</strong></td>
            <td style="border: 1px solid black; text-align:center; width:69%;"><strong>Interpretasi</strong></td>
        </tr>

        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; text-align:center;"><i>Achievement</i></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Achs; ?></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Achsh; ?></td>
            <td style="border: 1px solid black; padding:5px;"><?echo $AchI; ?></td>
        </tr>

        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; text-align:center;"><i>Deference</i></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Defs; ?></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Defsh; ?></td>
            <td style="border: 1px solid black; padding:5px;"><?echo $DefI; ?></td>
        </tr>

        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; text-align:center;"><i>Order</i></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Ords; ?></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Ordsh; ?></td>
            <td style="border: 1px solid black; padding:5px;"><?echo $OrdI; ?></td>
        </tr>

        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; text-align:center;"><i>Exhibition</i></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Exhs; ?></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Exhsh; ?></td>
            <td style="border: 1px solid black; padding:5px;"><?echo $ExhI; ?></td>
        </tr>
        
        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; text-align:center;"><i>Autonomy</i></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Auts; ?></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Autsh; ?></td>
            <td style="border: 1px solid black; padding:5px;"><?echo $AutI; ?></td>
        </tr>

        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; text-align:center;"><i>Affiliation</i></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Affs; ?></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Affsh; ?></td>
            <td style="border: 1px solid black; padding:5px;"><?echo $AffI; ?></td>
        </tr>

        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; text-align:center;"><i>Intraception</i></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Ints; ?></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Intsh; ?></td>
            <td style="border: 1px solid black; padding:5px;"><?echo $IntI; ?></td>
        </tr>

        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; text-align:center;"><i>Succorance</i></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Sucs; ?></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Sucsh; ?></td>
            <td style="border: 1px solid black; padding:5px;"><?echo $SucI; ?></td>
        </tr>

        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; text-align:center;"><i>Dominance</i></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Doms; ?></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Domsh; ?></td>
            <td style="border: 1px solid black; padding:5px;"><?echo $DomI; ?></td>
        </tr>

        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; text-align:center;"><i>Abasement</i></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Abas; ?></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Abash; ?></td>
            <td style="border: 1px solid black; padding:5px;"><?echo $AbaI; ?></td>
        </tr>

        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; text-align:center;"><i>Nurturance</i></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Nurs; ?></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Nursh; ?></td>
            <td style="border: 1px solid black; padding:5px;"><?echo $NurI; ?></td>
        </tr>

        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; text-align:center;"><i>Change</i></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Chgs; ?></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Chgsh; ?></td>
            <td style="border: 1px solid black; padding:5px;"><?echo $ChgI; ?></td>
        </tr>

        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; text-align:center;"><i>Endurance</i></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Ends; ?></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Endsh; ?></td>
            <td style="border: 1px solid black; padding:5px;"><?echo $EndI; ?></td>
        </tr>

        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; text-align:center;"><i>Heterosex</i></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Hets; ?></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Hetsh; ?></td>
            <td style="border: 1px solid black; padding:5px;"><?echo $HetI; ?></td>
        </tr>

        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; text-align:center;"><i>Aggression</i></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Aggs; ?></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Aggsh; ?></td>
            <td style="border: 1px solid black; padding:5px;"><?echo $AggI; ?></td>
        </tr>
    </table>
<!--     
    <table style="font-size: 15px; width: 40%; margin: 10px; border-collapse: collapse; margin-left: 20px; margin-right: 20px; border: 1px solid black;">
        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; text-align:center; width:15%;"><strong><?php   if($jenis_kelamin == 1){echo "Laki-Laki";}else{echo "Perempuan";}?></strong></td>
            <td style="border: 1px solid black; text-align:center; width:8%;"><strong>Score</strong></td>
            <td style="border: 1px solid black; text-align:center; width:8%;"><strong>+ / -</strong></td>
        </tr>

        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; text-align:center;"><i>Achievement</i></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Achs; ?></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Achsh; ?></td>
        </tr>

        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; text-align:center;"><i>Deference</i></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Defs; ?></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Defsh; ?></td>
        </tr>

        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; text-align:center;"><i>Order</i></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Ords; ?></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Ordsh; ?></td>
        </tr>

        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; text-align:center;"><i>Exhibition</i></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Exhs; ?></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Exhsh; ?></td>
        </tr>
        
        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; text-align:center;"><i>Autonomy</i></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Auts; ?></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Autsh; ?></td>
        </tr>

        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; text-align:center;"><i>Affiliation</i></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Affs; ?></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Affsh; ?></td>
        </tr>

        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; text-align:center;"><i>Intraception</i></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Ints; ?></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Intsh; ?></td>
        </tr>

        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; text-align:center;"><i>Succorance</i></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Sucs; ?></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Sucsh; ?></td>
        </tr>

        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; text-align:center;"><i>Dominance</i></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Doms; ?></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Domsh; ?></td>
        </tr>

        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; text-align:center;"><i>Abasement</i></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Abas; ?></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Abash; ?></td>
        </tr>

        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; text-align:center;"><i>Nurturance</i></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Nurs; ?></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Nursh; ?></td>
        </tr>

        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; text-align:center;"><i>Change</i></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Chgs; ?></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Chgsh; ?></td>
        </tr>

        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; text-align:center;"><i>Endurance</i></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Ends; ?></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Endsh; ?></td>
        </tr>

        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; text-align:center;"><i>Heterosex</i></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Hets; ?></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Hetsh; ?></td>
        </tr>

        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; text-align:center;"><i>Aggression</i></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Aggs; ?></td>
            <td style="border: 1px solid black; text-align:center;"><?echo $Aggsh; ?></td>
        </tr>

        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black; text-align:center;"><strong>Jumlah Score</strong></td>
            <td style="border: 1px solid black; text-align:center;"><?php echo $countAllEPPS?></td>
            <td style="text-align:center;">&nbsp;</td>
        </tr>
    </table> -->

    </body>
    <div>&nbsp;</div>
    <div class="row no-print">
        <div class="col-xs-12">
          <!-- <a href="invoice-print.html" onclick="myFunction()" class="btn btn-default"><i class="fa fa-print"></i> Print</a> -->
        
          <button type="button" class="btn btn-default" style="margin-right: 5px;" onclick="myFunction()">
            <i class="fa fa-print"></i> Print
          </button>


          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;"  onclick="detail_tes(<?php echo $user_id; ?>)" >
            <i class="fa fa-download"></i> Generate Excel
          </button>

        </div>
    </div>
</section>
<footer style="page-break-after: always; "></footer>
<!--footer bawah---->
</html>

<!-- <form id="TheForm" action="<?php echo site_url().'/manager/tes_hasil_report_epps_excel'; ?>" method="POST" target="TheWindow">
    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
    <input type="hidden" name="tesuser_tes_id" value="<?php echo $tesuser_tes_id; ?>" />
</form> -->

<script>
    function myFunction() {
        window.print();
    }
    function detail_tes(user_id){
        document.getElementById('TheForm').submit();
        // window.open("<?php echo site_url().'/manager/tes_hasil_report_epps_excel'; ?>/index/"+user_id);
        
    }

</script>

<style>
    @page   {
                size: 7in 9.25in;
                margin: 27mm 16mm 27mm 16mm;
                size: landscape; 
            }
        .tdNomer{
            border: 2px solid black; 
            width: 25px;
        }
        .tdSpace{
            width:5%;
        }
        tr.border_bottom td {
            border-bottom:1pt solid black;
        }

        .divResult{
            border: 1px solid black;
            width: 50%;
            text-align: center;
        }
        .borderRight{
            border-right: 2px solid black;
        }
        .paddingtr{
            padding: 3px;
        }
    </style>



    <!-- Report DISC -->

    <?php

            }else{

        }

$reportShowDISC = "No";
$mysqli = new mysqli("localhost","root", "","celestia_dbmtfpsikotes");
$mysqli->set_charset('utf8mb4');

if(mysqli_connect_errno()) {
    printf("Connect failed: %s\n",mysql_connect_error());
    exit();
}



$sql = "
        SELECT  cbt_user.user_firstname as name,
                cbt_tes.tes_nama as nama,
                cbt_tes_user.tesuser_id as user_id,
                cbt_tes_soal.tessoal_jawaban as soal,
                cbt_jawaban.jawaban_benar as jawaban,
                cbt_soal.soal_nomor as nomor_soal,
                cbt_tes.tes_begin_time as tanggal_tes,
                cbt_user.user_tanggal_lahir as tanggal_lahir,
                cbt_user.user_pendidikan_terakhir as pendidikan_terakhir,
                cbt_user.user_jenis_kelamin as jenis_kelamin,
                cbt_tes_soal.tessoal_nilai as nilai,
                cbt_user.user_pekerjaan as pekerjaan,
                cbt_tes_user.tesuser_status as tesuser_status,
                cbt_tes_soal.tessoal_jawaban_text as jawabana_mentah,
                cbt_tes_soal.tessoal_order as tessoal_order
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
                cbt_tes.tes_id = 122
        ORDER BY
                cbt_tes_soal.tessoal_order";

                

// echo $sql;
    $DM = 0;
    $IM = 0;
    $SM = 0;
    $CM = 0;
    $PM = 0;

    $DL = 0;
    $IL = 0;
    $SL = 0;
    $CL = 0;
    $PL = 0;

    $DT = 0;
    $IT = 0;
    $ST = 0;
    $CT = 0;
    $PT = 0;
    
    $status = 4;
    // echo $sql;
    if($result = mysqli_query($mysqli, $sql)){
        while($row = mysqli_fetch_array($result)){
                // echo $row['tessoal_order'].'----'.$row['jawabana_mentah'].'</br>';


            // if($row['tessoal_order'] == 1){
            //     echo $row['soal'];
            // }
            $jawabanId = explode(",", $row['jawabana_mentah']);
            
            $sqlMost = "
                SELECT jawaban_benar,
                jawaban_value
                FROM `cbt_jawaban`
                WHERE `jawaban_id` = ".$jawabanId[1]."
                order by jawaban_id desc";
                // echo $jawabanId[1];
            if($resultMost = mysqli_query($mysqli, $sqlMost)){
                while($rowMost = mysqli_fetch_array($resultMost)){
                    $jawabanMost = explode(",", $rowMost['jawaban_benar']);
                    // echo 'M'.$jawabanMost[0];
                    if($jawabanMost[0] == 'D'){
                        $DM = $DM+1;
                    }else if($jawabanMost[0] == 'I'){
                        $IM = $IM+1;
                    }else if($jawabanMost[0]== 'S'){
                        $SM = $SM+1;
                    }else if($jawabanMost[0] == 'C'){
                        $CM = $CM+1;
                    }else if($jawabanMost[0] == '*'){
                        $PM = $PM+1;
                    }

                    if($row['tessoal_order']==1){
                        $DISC1MOST = $rowMost['jawaban_value'];
                    }else if($row['tessoal_order']==2){
                        $DISC2MOST = $rowMost['jawaban_value'];
                    }else if($row['tessoal_order']==3){
                        $DISC3MOST = $rowMost['jawaban_value'];
                    }else if($row['tessoal_order']==4){
                        $DISC4MOST = $rowMost['jawaban_value'];
                    }else if($row['tessoal_order']==5){
                        $DISC5MOST = $rowMost['jawaban_value'];
                    }else if($row['tessoal_order']==6){
                        $DISC6MOST = $rowMost['jawaban_value'];
                    }else if($row['tessoal_order']==7){
                        $DISC7MOST = $rowMost['jawaban_value'];
                    }else if($row['tessoal_order']==8){
                        $DISC8MOST = $rowMost['jawaban_value'];
                    }else if($row['tessoal_order']==9){
                        $DISC9MOST = $rowMost['jawaban_value'];
                    }else if($row['tessoal_order']==10){
                        $DISC10MOST = $rowMost['jawaban_value'];
                    }else if($row['tessoal_order']==11){
                        $DISC11MOST = $rowMost['jawaban_value'];
                    }else if($row['tessoal_order']==12){
                        $DISC12MOST = $rowMost['jawaban_value'];
                    }else if($row['tessoal_order']==13){
                        $DISC13MOST = $rowMost['jawaban_value'];
                    }else if($row['tessoal_order']==14){
                        $DISC14MOST = $rowMost['jawaban_value'];
                    }else if($row['tessoal_order']==15){
                        $DISC15MOST = $rowMost['jawaban_value'];
                    }else if($row['tessoal_order']==16){
                        $DISC16MOST = $rowMost['jawaban_value'];
                    }else if($row['tessoal_order']==17){
                        $DISC17MOST = $rowMost['jawaban_value'];
                    }else if($row['tessoal_order']==18){
                        $DISC18MOST = $rowMost['jawaban_value'];
                    }else if($row['tessoal_order']==19){
                        $DISC19MOST = $rowMost['jawaban_value'];
                    }else if($row['tessoal_order']==20){
                        $DISC20MOST = $rowMost['jawaban_value'];
                    }else if($row['tessoal_order']==21){
                        $DISC21MOST = $rowMost['jawaban_value'];
                    }else if($row['tessoal_order']==22){
                        $DISC22MOST = $rowMost['jawaban_value'];
                    }else if($row['tessoal_order']==23){
                        $DISC23MOST = $rowMost['jawaban_value'];
                    }else if($row['tessoal_order']==24){
                        $DISC24MOST = $rowMost['jawaban_value'];
                    }

                }
            }




            $sqlLeast = "
                SELECT jawaban_benar,
                jawaban_value
                FROM `cbt_jawaban`
                WHERE `jawaban_id` = ".$jawabanId[0]."
            ";
            // echo '-';
            if($resultLeast = mysqli_query($mysqli, $sqlLeast)){
                while($rowLeast = mysqli_fetch_array($resultLeast)){
                    $jawabanLeast = explode(",", $rowLeast['jawaban_benar']);
                    // echo 'L'.$jawabanLeast[1].'</br>';
                    if($jawabanLeast[1] == 'D'){
                        $DL = $DL+1;
                    }else if($jawabanLeast[1] == 'I'){
                        $IL = $IL+1;
                    }else if($jawabanLeast[1]== 'S'){
                        $SL = $SL+1;
                    }else if($jawabanLeast[1] == 'C'){
                        $CL = $CL+1;
                    }else if($jawabanLeast[1] == '*'){
                        $PL = $PL+1;
                    }

                    if($row['tessoal_order']==1){
                        $DISC1LEAST = $rowLeast['jawaban_value'];
                    }else if($row['tessoal_order']==2){
                        $DISC2LEAST = $rowLeast['jawaban_value'];
                    }else if($row['tessoal_order']==3){
                        $DISC3LEAST = $rowLeast['jawaban_value'];
                    }else if($row['tessoal_order']==4){
                        $DISC4LEAST = $rowLeast['jawaban_value'];
                    }else if($row['tessoal_order']==5){
                        $DISC5LEAST = $rowLeast['jawaban_value'];
                    }else if($row['tessoal_order']==6){
                        $DISC6LEAST = $rowLeast['jawaban_value'];
                    }else if($row['tessoal_order']==7){
                        $DISC7LEAST = $rowLeast['jawaban_value'];
                    }else if($row['tessoal_order']==8){
                        $DISC8LEAST = $rowLeast['jawaban_value'];
                    }else if($row['tessoal_order']==9){
                        $DISC9LEAST = $rowLeast['jawaban_value'];
                    }else if($row['tessoal_order']==10){
                        $DISC10LEAST = $rowLeast['jawaban_value'];
                    }else if($row['tessoal_order']==11){
                        $DISC11LEAST = $rowLeast['jawaban_value'];
                    }else if($row['tessoal_order']==12){
                        $DISC12LEAST = $rowLeast['jawaban_value'];
                    }else if($row['tessoal_order']==13){
                        $DISC13LEAST = $rowLeast['jawaban_value'];
                    }else if($row['tessoal_order']==14){
                        $DISC14LEAST = $rowLeast['jawaban_value'];
                    }else if($row['tessoal_order']==15){
                        $DISC15LEAST = $rowLeast['jawaban_value'];
                    }else if($row['tessoal_order']==16){
                        $DISC16LEAST = $rowLeast['jawaban_value'];
                    }else if($row['tessoal_order']==17){
                        $DISC17LEAST = $rowLeast['jawaban_value'];
                    }else if($row['tessoal_order']==18){
                        $DISC18LEAST = $rowLeast['jawaban_value'];
                    }else if($row['tessoal_order']==19){
                        $DISC19LEAST = $rowLeast['jawaban_value'];
                    }else if($row['tessoal_order']==20){
                        $DISC20LEAST = $rowLeast['jawaban_value'];
                    }else if($row['tessoal_order']==21){
                        $DISC21LEAST = $rowLeast['jawaban_value'];
                    }else if($row['tessoal_order']==22){
                        $DISC22LEAST = $rowLeast['jawaban_value'];
                    }else if($row['tessoal_order']==23){
                        $DISC23LEAST = $rowLeast['jawaban_value'];
                    }else if($row['tessoal_order']==24){
                        $DISC24LEAST = $rowLeast['jawaban_value'];
                    }
                }
            }
            
            // echo $DM;

            // if($row['tessoal_order']==1){
            //     $DISC1MOST = $jawabanMost;
            //     $DISC1LEAST = $jawabanLeast;
            // }

            // echo $DISC1MOST.'-'.$DISC1LEAST;

            $name = $row['name'];
            $tanggal_tes = $row['tanggal_tes'];
            $user_ids = $user_id;
            $reportShowDISC = "Yes";
            $tanggal_lahir = $row['tanggal_lahir'];
            $from = new DateTime($tanggal_lahir);
            $to   = new DateTime();
            $pendidikan_terakhir = $row['pendidikan_terakhir'];
            $pekerjaan = $row['pekerjaan'];
        }

    }

    $DT = $DM-$DL;
    $IT = $IM-$IL;
    $ST = $SM-$SL;
    $CT = $CM-$CL;
    $PT = $PM-$PL;

if($reportShowDISC == "Yes"){

    $sqlSoal = "SELECT  soal_detail, 
                        soal_nomor, 
                        soal_id 
                FROM    cbt_soal 
                WHERE   soal_tipe = 2
                order by soal_nomor
                ";

    if($result = mysqli_query($mysqli, $sqlSoal)){
        while($row = mysqli_fetch_array($result)){
            
            if($row['soal_nomor']==1){
                $DISC1 = $row['soal_detail'];
            }else if($row['soal_nomor']==2){
                $DISC2 = $row['soal_detail'];
            }else if($row['soal_nomor']==3){
                $DISC3 = $row['soal_detail'];
            }else if($row['soal_nomor']==4){
                $DISC4 = $row['soal_detail'];
            }else if($row['soal_nomor']==5){
                $DISC5 = $row['soal_detail'];
            }else if($row['soal_nomor']==6){
                $DISC6 = $row['soal_detail'];
            }else if($row['soal_nomor']==7){
                $DISC7 = $row['soal_detail'];
            }else if($row['soal_nomor']==8){
                $DISC8 = $row['soal_detail'];
            }else if($row['soal_nomor']==9){
                $DISC9 = $row['soal_detail'];
            }else if($row['soal_nomor']==10){
                $DISC10 = $row['soal_detail'];
            }else if($row['soal_nomor']==11){
                $DISC11 = $row['soal_detail'];
            }else if($row['soal_nomor']==12){
                $DISC12 = $row['soal_detail'];
            }else if($row['soal_nomor']==13){
                $DISC13 = $row['soal_detail'];
            }else if($row['soal_nomor']==14){
                $DISC14 = $row['soal_detail'];
            }else if($row['soal_nomor']==15){
                $DISC15 = $row['soal_detail'];
            }else if($row['soal_nomor']==16){
                $DISC16 = $row['soal_detail'];
            }else if($row['soal_nomor']==17){
                $DISC17 = $row['soal_detail'];
            }else if($row['soal_nomor']==18){
                $DISC18 = $row['soal_detail'];
            }else if($row['soal_nomor']==19){
                $DISC19 = $row['soal_detail'];
            }else if($row['soal_nomor']==20){
                $DISC20 = $row['soal_detail'];
            }else if($row['soal_nomor']==21){
                $DISC21 = $row['soal_detail'];
            }else if($row['soal_nomor']==22){
                $DISC22 = $row['soal_detail'];
            }else if($row['soal_nomor']==23){
                $DISC23 = $row['soal_detail'];
            }else if($row['soal_nomor']==24){
                $DISC24 = $row['soal_detail'];
            }

        }
    }

    $interpretasiDISC = "";
    $sqlInterpretasi = "";
    $interpretasiDISC = "";
    $interpretasiField1 = "";
    $interpretasiField2 = "";
    $interpretasiField3 = "";

    $G1D = 0;
    $G1I = 0;
    $G1S = 0;
    $G1C = 0;

    $G2D = '';
    $G2I = '';
    $G2S = '';
    $G2C = '';

    $G3D = '';
    $G3I = '';
    $G3S = '';
    $G3C = '';

    $DMG = 0;
    $IMG = 0;
    $SMG = 0;
    $CMG = 0;
    $DLG = 0;
    $ILG = 0;
    $SLG = 0;
    $CLG = 0;
    $DTG = 0;
    $ITG = 0;
    $STG = 0;
    $CTG = 0;

    // =======================================================
    if($DM == 0){
        $DMG = -13;
    }else if($DM == 1){
        $DMG = -9;
    }else if($DM == 2){
        $DMG = -7;
    }else if($DM == 3){
        $DMG = -5;
    }else if($DM == 4){
        $DMG = -3;
    }else if($DM == 5){
        $DMG = -2;
    }else if($DM == 6){
        $DMG = 0;
    }else if($DM == 7){
        $DMG = 1;
    }else if($DM == 8){
        $DMG = 2;
    }else if($DM == 9){
        $DMG = 4;
    }else if($DM == 10){
        $DMG = 6;
    }else if($DM == 11){
        $DMG = 7;
    }else if($DM == 12){
        $DMG = 8;
    }else if($DM == 13){
        $DMG = 9;
    }else if($DM == 14){
        $DMG = 10;
    }else if($DM == 15){
        $DMG = 13;
    }else if($DM == 16){
        $DMG = 14;
    }else if($DM > 16){
        $DMG = 15;
    }

    if($CM == 0){
        $IMG = -13;
    }else if($IM == 1){
        $IMG = -8;
    }else if($IM == 2){
        $IMG = -5;
    }else if($IM == 3){
        $IMG = -2;
    }else if($IM == 4){
        $IMG = 2;
    }else if($IM == 5){
        $IMG = 6;
    }else if($IM == 6){
        $IMG = 7;
    }else if($IM == 7){
        $IMG = 10;
    }else if($IM == 8){
        $IMG = 11;
    }else if($IM == 9){
        $IMG = 12;
    }else if($IM == 10){
        $IMG = 13;
    }else if($IM > 19){
        $IMG = 15;
    }

    if($SM == 0){
        $SMG = -10;
    }else if($SM == 1){
        $SMG = -8;
    }else if($SM == 2){
        $SMG = -7;
    }else if($SM == 3){
        $SMG = -3;
    }else if($SM == 4){
        $SMG = -1;
    }else if($SM == 5){
        $SMG = 1;
    }else if($SM == 6){
        $SMG = 2;
    }else if($SM == 7){
        $SMG = 5;
    }else if($SM == 8){
        $SMG = 6;
    }else if($SM == 9){
        $SMG = 8;
    }else if($SM == 10){
        $SMG = 9;
    }else if($SM == 11){
        $SMG = 9;
    }else if($SM == 12){
        $SMG = 10;
    }else if($SM == 13){
        $SMG = 12;
    }else if($SM == 14){
        $SMG = 13;
    }else if($SM > 14){
        $SMG = 20;
    }

    if($CM == 0){
        $CMG = -13;
    }else if($CM == 1){
        $CMG = -8;
    }else if($CM == 2){
        $CMG = -7;
    }else if($CM == 3){
        $CMG = -3;
    }else if($CM == 4){
        $CMG = 2;
    }else if($CM == 5){
        $CMG = 4;
    }else if($CM == 6){
        $CMG = 6;
    }else if($CM == 7){
        $CMG = 9;
    }else if($CM == 8){
        $CMG = 10;
    }else if($CM == 9){
        $CMG = 11;
    }else if($CM == 10){
        $CMG = 12;
    }else if($CM == 11){
        $CMG = 13;
    }else if($CM == 12){
        $CMG = 13;
    }else if($CM == 13){
        $CMG = 14;
    }else if($CM > 13){
        $CMG = 15;
    }


    if($DL == 0){
        $DLG = 15;
    }else if($DL == 1){
        $DLG = 13;
    }else if($DL == 2){
        $DLG = 9;
    }else if($DL == 3){
        $DLG = 5;
    }else if($DL == 4){
        $DLG = 3;
    }else if($DL == 5){
        $DLG = 1;
    }else if($DL == 6){
        $DLG = 0;
    }else if($DL == 7){
        $DLG = -1;
    }else if($DL == 8){
        $DLG = -2;
    }else if($DL == 9){
        $DLG = -5;
    }else if($DL == 10){
        $DLG = -6;
    }else if($DL == 11){
        $DLG = -7;
    }else if($DL == 12){
        $DLG = -8;
    }else if($DL == 13){
        $DLG = -9;
    }else if($DL == 14){
        $DLG = -10;
    }else if($DL == 15){
        $DLG = -12;
    }else if($DL == 16){
        $DLG = -13;
    }else if($DL > 16){
        $DLG = -15;
    }

    if($IL == 0){
        $ILG = 14;
    }else if($IL == 1){
        $ILG = 11;
    }else if($IL == 2){
        $ILG = 8;
    }else if($IL == 3){
        $ILG = 5;
    }else if($IL == 4){
        $ILG = 1;
    }else if($IL == 5){
        $ILG = 0;
    }else if($IL == 6){
        $ILG = -4;
    }else if($IL == 7){
        $ILG = -7;
    }else if($IL == 8){
        $ILG = -8;
    }else if($IL == 9){
        $ILG = -9;
    }else if($IL == 10){
        $ILG = -12;
    }else if($IL == 11){
        $ILG = -13;
    }else if($IL == 12){
        $ILG = -14;
    }else if($IL > 12){
        $ILG = -15;
    }

    if($SL == 0){
        $SLG = 15;
    }else if($SL == 1){
        $SLG = 14;
    }else if($SL == 2){
        $SLG = 11;
    }else if($SL == 3){
        $SLG = 8;
    }else if($SL == 4){
        $SLG = 5;
    }else if($SL == 5){
        $SLG = 3;
    }else if($SL == 6){
        $SLG = 1;
    }else if($SL == 7){
        $SLG = -1;
    }else if($SL == 8){
        $SLG = -4;
    }else if($SL == 9){
        $SLG = -6;
    }else if($SL == 10){
        $SLG = -8;
    }else if($SL == 11){
        $SLG = -9;
    }else if($SL == 12){
        $SLG = -12;
    }else if($SL == 13){
        $SLG = -13;
    }else if($SL == 14){
        $SLG = -13;
    }else if($SL == 15){
        $SLG = -13;
    }else if($SL == 16){
        $SLG = -14;
    }else if($SL > 16){
        $SLG = -15;
    }

    if($CL == 0){
        $CLG = 15;
    }else if($CL == 1){
        $CLG = 14;
    }else if($CL == 2){
        $CLG = 10;
    }else if($CL == 3){
        $CLG = 8;
    }else if($CL == 4){
        $CLG = 5;
    }else if($CL == 5){
        $CLG = 3;
    }else if($CL == 6){
        $CLG = 1;
    }else if($CL == 7){
        $CLG = 0;
    }else if($CL == 8){
        $CLG = -1;
    }else if($CL == 9){
        $CLG = -5;
    }else if($CL == 10){
        $CLG = -7;
    }else if($CL == 11){
        $CLG = -9;
    }else if($CL == 12){
        $CLG = -10;
    }else if($CL == 13){
        $CLG = -12;
    }else if($CL == 14){
        $CLG = -12;
    }else if($CL == 15){
        $CLG = -14;
    }else if($CL > 15){
        $CLG = -15;
    }


    if($DT == 0){
        $DTG = 0;
    }else if($DT == 1){
        $DTG = 1;
    }else if($DT == 2){
        $DTG = 2;
    }else if($DT == 3){
        $DTG = 2;
    }else if($DT == 4){
        $DTG = 3;
    }else if($DT == 5){
        $DTG = 3;
    }else if($DT == 6){
        $DTG = 4;
    }else if($DT == 7){
        $DTG = 5;
    }else if($DT == 8){
        $DTG = 7;
    }else if($DT == 9){
        $DTG = 8;
    }else if($DT == 10){
        $DTG = 10;
    }else if($DT == 11){
        $DTG = 11;
    }else if($DT == 12){
        $DTG = 11;
    }else if($DT == 13){
        $DTG = 12;
    }else if($DT == 14){
        $DTG = 13;
    }else if($DT == 15){
        $DTG = 14;
    }else if($DT == 16){
        $DTG = -14;
    }else if($DT == 17){
        $DTG = 14;
    }else if($DT == 18){
        $DTG = 15;
    }else if($DT > 18){
        $DTG = 16;
    }else if($DT == -1){
        $DTG = -1;
    }else if($DT == -2){
        $DTG = -1;
    }else if($DT == -3){
        $DTG = -2;
    }else if($DT == -4){
        $DTG = -3;
    }else if($DT == -5){
        $DTG = -4;
    }else if($DT == -6){
        $DTG = -5;
    }else if($DT == -7){
        $DTG = -6;
    }else if($DT == -8){
        $DTG = -6;
    }else if($DT == -9){
        $DTG = -7;
    }else if($DT == -10){
        $DTG = -9;
    }else if($DT == -11){
        $DTG = -11;
    }else if($DT == -12){
        $DTG = -12;
    }else if($DT == -13){
        $DTG = -13;
    }else if($DT == -14){
        $DTG = -14;
    }else if($DT == -15){
        $DTG = -15;
    }else if($DT < -15){
        $DTG = -16;
    }


    if($IT == 0){
        $ITG = 1;
    }else if($IT == 1){
        $ITG = 2;
    }else if($IT == 2){
        $ITG = 3;
    }else if($IT == 3){
        $ITG = 6;
    }else if($IT == 4){
        $ITG = 8;
    }else if($IT == 5){
        $ITG = 9;
    }else if($IT == 6){
        $ITG = 11;
    }else if($IT == 7){
        $ITG = 12;
    }else if($IT == 8){
        $ITG = 14;
    }else if($IT == 9){
        $ITG = 14;
    }else if($IT == 10){
        $ITG = 15;
    }else if($IT > 10){
        $ITG = 16;
    }else if($IT == -1){
        $ITG = 0;
    }else if($IT == -2){
        $ITG = -3;
    }else if($IT == -3){
        $ITG = -4;
    }else if($IT == -4){
        $ITG = -6;
    }else if($IT == -5){
        $ITG = -7;
    }else if($IT == -6){
        $ITG = -9;
    }else if($IT == -7){
        $ITG = -10;
    }else if($IT == -8){
        $ITG = -12;
    }else if($IT == -9){
        $ITG = -13;
    }else if($IT == -10){
        $ITG = -14;
    }else if($IT < -10){
        $ITG = -15;
    }


    if($ST == 0){
        $STG = 2;
    }else if($ST == 1){
        $STG = 3;
    }else if($ST == 2){
        $STG = 4;
    }else if($ST == 3){
        $STG = 6;
    }else if($ST == 4){
        $STG = 7;
    }else if($ST == 5){
        $STG = 8;
    }else if($ST == 6){
        $STG = 9;
    }else if($ST == 7){
        $STG = 10;
    }else if($ST == 8){
        $STG = 11;
    }else if($ST == 9){
        $STG = 12;
    }else if($ST == 10){
        $STG = 13;
    }else if($ST == 11){
        $STG = 14;
    }else if($ST == 12){
        $STG = 14;
    }else if($ST == 13){
        $STG = 14;
    }else if($ST == 14){
        $STG = 14;
    }else if($ST == 15){
        $STG = 15;
    }else if($ST == 16){
        $STG = 15;
    }else if($ST == 17){
        $STG = 15;
    }else if($ST == 18){
        $STG = 15;
    }else if($ST == 19){
        $STG = 15;
    }else if($ST >= 20){
        $STG = 16;
    }else if($ST == -1){
        $STG = 0;
    }else if($ST == -2){
        $STG = -1;
    }else if($ST == -3){
        $STG = -2;
    }else if($ST == -4){
        $STG = -3;
    }else if($ST == -5){
        $STG = -4;
    }else if($ST == -6){
        $STG = -6;
    }else if($ST == -7){
        $STG = -7;
    }else if($ST == -8){
        $STG = -9;
    }else if($ST == -9){
        $STG = -10;
    }else if($ST == -10){
        $STG = -13;
    }else if($ST == -11){
        $STG = -14;
    }else if($ST == -12){
        $STG = -14;
    }else if($ST == -13){
        $STG = -14;
    }else if($ST == -14){
        $STG = -14;
    }else if($ST == -15){
        $STG = -16;
    }else if($ST < -15){
        $STG = -17;
    }



    if($CT == 0){
        $CTG = 3;
    }else if($CT == 1){
        $CTG = 6;
    }else if($CT == 2){
        $CTG = 8;
    }else if($CT == 3){
        $CTG = 9;
    }else if($CT == 4){
        $CTG = 12;
    }else if($CT == 5){
        $CTG = 13;
    }else if($CT == 6){
        $CTG = 14;
    }else if($CT == 7){
        $CTG = 15;
    }else if($CT == 8){
        $CTG = 15;
    }else if($CT == 9){
        $CTG = 15;
    }else if($CT == 10){
        $CTG = 15;
    }else if($CT == 11){
        $CTG = 16;
    }else if($CT == 12){
        $CTG = 16;
    }else if($CT == 13){
        $CTG = 16;
    }else if($CT == 14){
        $CTG = 16;
    }else if($CT == 15){
        $CTG = 16;
    }else if($CT == 16){
        $CTG = 16;
    }else if($CT > 17){
        $CTG = 16;
    }else if($CT == -1){
        $CTG = 2;
    }else if($CT == -2){
        $CTG = 1;
    }else if($CT == -3){
        $CTG = 0;
    }else if($CT == -4){
        $CTG = -1;
    }else if($CT == -5){
        $CTG = -5;
    }else if($CT == -6){
        $CTG = -6;
    }else if($CT == -7){
        $CTG = -7;
    }else if($CT == -8){
        $CTG = -9;
    }else if($CT == -9){
        $CTG = -10;
    }else if($CT == -10){
        $CTG = -12;
    }else if($CT == -11){
        $CTG = -12;
    }else if($CT == -12){
        $CTG = -12;
    }else if($CT == -13){
        $CTG = -13;
    }else if($CT == -14){
        $CTG = -13;
    }else if($CT == -15){
        $CTG = -14;
    }else if($CT == -16){
        $CTG = -15;
    }else if($CT == -17){
        $CTG = -15;
    }else if($CT == -18){
        $CTG = -15;
    }else if($CT == -19){
        $CTG = -16;
    }else if($CT < -17){
        $CTG = -14;
    }




    // =======================================================

    // $ListM = '';

    // Most
    if ($DM >= 7){
        if($DM == 7){
           $G1D = 1;
        }else if($DM == 8){
           $G1D = 2;
        }else if($DM == 9){
            $G1D = 3;
        }else if($DM == 10){
            $G1D = 4;
        }else if($DM == 11){
            $G1D = 5;
        }else if($DM == 12){
            $G1D = 6;
        }else if($DM == 13){
            $G1D = 7;
        }else if($DM == 14){
            $G1D = 8;
        }else if($DM == 15){
            $G1D = 9;
        }else if($DM < 21){
            $G1D = 10;
        }else if($DM == 21){
            $G1D = 11;
        }
    }

    if ($IM >= 4){
        if($IM == 4){
           $G1I = 2;
        }else if($IM == 5){
           $G1I = 5;
        }else if($IM == 6){
           $G1I = 6;
        }else if($IM == 7){
           $G1I = 9;
        }else if($IM == 8){
           $G1I = 10;
        }else if($IM == 9){
           $G1I = 12;
        }else if($IM == 10){
           $G1I = 12;
        }else if($IM < 19){
           $G1I = 14;
        }else if($IM == 19){
           $G1I = 15;
        }
    }

    if ($SM >= 5){        
        if($SM == 5){
           $G1S = 1;
        }else if($SM == 6){
           $G1S = 2;
        }else if($SM == 7){
           $G1S = 4;
        }else if($SM == 8){
            $G1S = 5;
        }else if($SM == 9){
            $G1S = 7;
        }else if($SM == 10){
            $G1S = 8;
        }else if($SM == 11){
            $G1S = 8;
        }else if($SM == 12){
            $G1S = 10;
        }else if($SM == 13){
            $G1S = 10;
        }else if($SM < 20){
            $G1S = 13;
        }else if($SM == 20){
            $G1S = 15;
        }
    }

    if ($CM >= 4){
        // $G1C = $CM;
        if($CM == 4){
            $G1C = 2;
        }else if($CM == 5){
            $G1C = 3;
        }else if($CM == 6){
            $G1C = 5;
        }else if($CM == 7){
            $G1C = 9;
        }else if($CM == 8){
            $G1C = 10;
        }else if($CM == 9){
            $G1C = 11;
        }else if($CM == 10){
            $G1C = 11;
        }else if($CM == 11){
            $G1C = 13;
        }else if($CM == 12){
            $G1C = 13;
        }else if($CM < 17){
            $G1C = 14;
        }else if($CM == 17){
            $G1C = 15;
        }
    }
    // Least
    if ($DL <= 5){
        // $G2D = $DL;
        if($DL == 5){
            $G2D = 1;
        }else if($DL == 4){
            $G2D = 2;
        }else if($DL == 3){
            $G2D = 3;
        }else if($DL == 2){
            $G2D = 5;
        }else if($DL == 1){
            $G2D = 8;
        }else if($DL == 0){
            $G2D = 10;
        }
    }
    if ($IL <= 4){
        // $G2I = $IL;
        if($IL == 4){
            $G2I = 1;
        }else if($IL == 3){
            $G2I = 3;
        }else if($IL == 2){
            $G2I = 4;
        }else if($IL == 1){
            $G2I = 7;
        }else if($IL == 0){
            $G2I = 9;
        }
    }
    if ($SL <= 6){
        // $G2S = $SL;
        if($SL == 6){
            $G2S = 1;
        }else if($SL == 5){
            $G2S = 2;
        }else if($SL == 4){
            $G2S = 3;
        }else if($SL == 3){
            $G2S = 4;
        }else if($SL == 2){
            $G2S = 6;
        }else if($SL == 1){
            $G2S = 8;
        }else if($SL == 0){
            $G2S = 9;
        }
    }
    if ($CL <= 6){
        // $G2C = $CL;
        if($CL == 6){
            $G2C = 1;
        }else if($CL == 5){
            $G2C = 2;
        }else if($CL == 4){
            $G2C = 3;
        }else if($CL == 3){
            $G2C = 4;
        }else if($CL == 2){
            $G2C = 5;
        }else if($CL == 1){
            $G2C = 8;
        }else if($CL == 0){
            $G2C = 9;
        }
    }
    // Change
    if ($DT >= 1){
        // $G3D = $DT;
        if($DT == 1){
            $G3D = 1;
        }else if($DT == 3){
            $G3D = 2;
        }else if($DT == 4){
            $G3D = 2;
        }else if($DT == 5){
            $G3D = 3;
        }else if($DT == 6){
            $G3D = 3;
        }else if($DT == 7){
            $G3D = 5;
        }else if($DT == 8){
            $G3D = 7;
        }else if($DT == 9){
            $G3D = 8;
        }else if($DT == 10){
            $G3D = 10;
        }else if($DT == 11){
            $G3D = 10;
        }else if($DT == 12){
            $G3D = 11;
        }else if($DT == 13){
            $G3D = 12;
        }else if($DT == 14){
            $G3D = 13;
        }else if($DT == 15){
            $G3D = 14;
        }else if($DT == 16){
            $G3D = 14;
        }else if($DT == 17){
            $G3D = 14;
        }else if($DT == 18){
            $G3D = 15;
        }else if($DT == 19){
            $G3D = 15;
        }else if($DT == 20){
            $G3D = 15;
        }else if($DT == 21){
            $G3D = 16;
        }
    }
    if ($IT >= 0){
        // $G3I = $IT;
        if($IT == 0){
            $G3I = 1;
        }else if($IT == 1){
            $G3I = 2;
        }else if($IT == 2){
            $G3I = 3;
        }else if($IT == 3){
            $G3I = 6;
        }else if($IT == 4){
            $G3I = 8;
        }else if($IT == 5){
            $G3I = 9;
        }else if($IT == 6){
            $G3I = 11;
        }else if($IT == 7){
            $G3I = 12;
        }else if($IT == 8){
            $G3I = 14;
        }else if($IT == 9){
            $G3I = 14;
        }else if($IT == 10){
            $G3I = 15;
        }else if($IT < 18){
            $G3I = 15;
        }else if($IT == 18){
            $G3I = 16;
        }
    }
    if ($ST >= 0){
        // $G3S = $ST;
        if($ST == 0){
            $G3S = 2;
        }else if($ST == 1){
            $G3S = 3;
        }else if($ST == 2){
            $G3S = 4;
        }else if($ST == 3){
            $G3S = 6;
        }else if($ST == 4){
            $G3S = 7;
        }else if($ST == 5){
            $G3S = 8;
        }else if($ST == 6){
            $G3S = 8;
        }else if($ST == 7){
            $G3S = 10;
        }else if($ST == 8){
            $G3S = 11;
        }else if($ST == 9){
            $G3S = 12;
        }else if($ST == 10){
            $G3S = 13;
        }else if($ST == 11){
            $G3S = 14;
        }else if($ST == 12){
            $G3S = 14;
        }else if($ST == 13){
            $G3S = 14;
        }else if($ST == 14){
            $G3S = 14;
        }else if($ST == 15){
            $G3S = 15;
        }else if($ST < 20){
            $G3S = 15;
        }else if($ST == 20){
            $G3S = 16;
        }
    }
    if ($CT >= -2){
        // $G3C = $CT;
        if($CT == -2){
            $G3C = 1;
        }else if($CT == -1){
            $G3C = 2;
        }else if($CT == 0){
            $G3C = 3;
        }else if($CT == 1){
            $G3C = 6;
        }else if($CT == 2){
            $G3C = 8;
        }else if($CT == 3){
            $G3C = 9;
        }else if($CT == 4){
            $G3C = 12;
        }else if($CT == 5){
            $G3C = 13;
        }else if($CT == 6){
            $G3C = 14;
        }else if($CT == 10){
            $G3C = 15;
        }else if($CT == 17){
            $G3C = 16;
        }
    }

    $MostG1 = '';
    $LestG1 = '';
    $ChangeG1 = '';
    
    $ListM = array($G1D, $G1I, $G1S, $G1C);
    $ListL = array($G2D, $G2I, $G2S, $G2C);
    $ListC = array($G3D, $G3I, $G3S, $G3C);
    
    $ListTestM = array();
    $ListTestL = array();
    $ListTestC = array();
    
    rsort($ListM);
    rsort($ListL);
    rsort($ListC);
    // echo count($ListM)."<br>";
    $arrlengthM = count($ListM);
    $arrlengthL = count($ListL);
    $arrlengthC = count($ListC);

    for($x = 0; $x < $arrlengthM; $x++) {
        if($ListM[$x] > 0){
            // echo $ListM[$x];
            // echo "<br><br>";
            // echo $G1S."<br>";
            if($ListM[$x] == $G1D && !in_array("D", $ListTestM)){
                $MostG1 = $MostG1.'D';
                array_push($ListTestM,"D");
            }else if($ListM[$x] == $G1I && !in_array("I", $ListTestM)){
                $MostG1 = $MostG1.'I';
                array_push($ListTestM,"I");
            }else if($ListM[$x] == $G1S && !in_array("S", $ListTestM)){
                $MostG1 = $MostG1.'S';
                array_push($ListTestM,"S");
            }else if($ListM[$x] == $G1C && !in_array("C", $ListTestM)){
                $MostG1 = $MostG1.'C';
                array_push($ListTestM,"C");
            }
        }
    }

    for($x = 0; $x < $arrlengthL; $x++) {
        if($ListL[$x] > 0){
            // echo $ListL[$x];
            // echo "<br>";
            if($ListL[$x] == $G2D && !in_array("D", $ListTestL)){
                $LestG1 = $LestG1.'D';
                array_push($ListTestL,"D");
            }else if($ListL[$x] == $G2I && !in_array("I", $ListTestL)){
                $LestG1 = $LestG1.'I';
                array_push($ListTestL,"I");
            }else if($ListL[$x] == $G2S && !in_array("S", $ListTestL)){
                $LestG1 = $LestG1.'S';
                array_push($ListTestL,"S");
            }else if($ListL[$x] == $G2C && !in_array("C", $ListTestL)){
                $LestG1 = $LestG1.'C';
                array_push($ListTestL,"C");
            }
        }
    }

    for($x = 0; $x < $arrlengthC; $x++) {
        if($ListC[$x] > 0){
            // echo $ListC[$x];
            // echo "<br>";
            if($ListC[$x] == $G3D && !in_array("D", $ListTestC)){
                $ChangeG1 = $ChangeG1.'D';
                array_push($ListTestC,"D");
            }else if($ListC[$x] == $G3I && !in_array("I", $ListTestC)){
                $ChangeG1 = $ChangeG1.'I';
                array_push($ListTestC,"I");
            }else if($ListC[$x] == $G3S && !in_array("S", $ListTestC)){
                $ChangeG1 = $ChangeG1.'S';
                array_push($ListTestC,"S");
            }else if($ListC[$x] == $G3C && !in_array("C", $ListTestC)){
                $ChangeG1 = $ChangeG1.'C';
                array_push($ListTestC,"C");
            }
        }
    }

    // echo "<br>";
    // echo "Most ".$MostG1;
    // echo "<br>";
    // echo "Least ".$LestG1;
    // echo "<br>";
    // echo "Change ".$ChangeG1;
    // echo "<br>";
    // echo $G1D.'-'.$G1I.'-'.$G1S.'-'.$G1C;
    // echo "<br>";
    // echo $G2D.'-'.$G2I.'-'.$G2S.'-'.$G2C;
    // echo "<br>";
    // echo $G3D.'-'.$G3I.'-'.$G3S.'-'.$G3C;


    $interpretasiField1G1 = '';
    $interpretasiField2G1 = '';
    $interpretasiField3G1 = '';
    $interpretasiField1G2 = '';
    $interpretasiField2G2 = '';
    $interpretasiField3G2 = '';

    $interpretasiField1G3 = '';
    $interpretasiField2G3 = '';
    $interpretasiField3G3 = '';

    $interpretasiDISCG1 = '';
    $interpretasiDISCG2 = '';
    $interpretasiDISCG3 = '';

    $sqlInterpretasiG1="
        SELECT  interpretasi_text,
                interpretasi_custom_field1,
                interpretasi_custom_field2,
                interpretasi_custom_field3
        FROM    `cbt_Interpretasi` 
        WHERE   `interpretasi_tesId` = 122
        AND     interpretasi_subtes = 1
        AND     interpretasi_kode = '".$MostG1."'";
    
    
    if($resultinterpretasiG1 = mysqli_query($mysqli, $sqlInterpretasiG1)){
        while($row = mysqli_fetch_array($resultinterpretasiG1)){
            $interpretasiDISCG1 = $row['interpretasi_text'];
            $interpretasiField1G1 = $row['interpretasi_custom_field1'];
            $interpretasiField2G1 = $row['interpretasi_custom_field2'];
            $interpretasiField3G1 = $row['interpretasi_custom_field3'];
        }
    }

    $sqlInterpretasiG1="
    SELECT  interpretasi_text,
            interpretasi_custom_field1,
            interpretasi_custom_field2,
            interpretasi_custom_field3
    FROM    `cbt_Interpretasi` 
    WHERE   `interpretasi_tesId` = 122
    AND     interpretasi_subtes = 1
    AND     interpretasi_kode = '".$LestG1."'";


    if($resultinterpretasiG1 = mysqli_query($mysqli, $sqlInterpretasiG1)){
        while($row = mysqli_fetch_array($resultinterpretasiG1)){
            $interpretasiDISCG2 = $row['interpretasi_text'];
            $interpretasiField1G2 = $row['interpretasi_custom_field1'];
            $interpretasiField2G2 = $row['interpretasi_custom_field2'];
            $interpretasiField3G2 = $row['interpretasi_custom_field3'];
        }
    }

    $sqlInterpretasiG1="
    SELECT  interpretasi_text,
            interpretasi_custom_field1,
            interpretasi_custom_field2,
            interpretasi_custom_field3
    FROM    `cbt_Interpretasi` 
    WHERE   `interpretasi_tesId` = 122
    AND     interpretasi_subtes = 1
    AND     interpretasi_kode = '".$ChangeG1."'";


    if($resultinterpretasiG1 = mysqli_query($mysqli, $sqlInterpretasiG1)){
    while($row = mysqli_fetch_array($resultinterpretasiG1)){
        $interpretasiDISCG3 = $row['interpretasi_text'];
        $interpretasiField1G3 = $row['interpretasi_custom_field1'];
        $interpretasiField2G3 = $row['interpretasi_custom_field2'];
        $interpretasiField3G3 = $row['interpretasi_custom_field3'];
    }
    }


    if($interpretasiField1G1 == ''){
        $interpretasiField1G1 = 'N/A';
    }
    if($interpretasiField2G1 == ''){
        $interpretasiField2G1 = 'N/A';
    }
    if($interpretasiField3G1 == ''){
        $interpretasiField3G1 = 'N/A';
    }
    if($interpretasiField1G2 == ''){
        $interpretasiField1G2 = 'N/A';
    }
    if($interpretasiField2G2 == ''){
        $interpretasiField2G2 = 'N/A';
    }
    if($interpretasiField3G2 == ''){
        $interpretasiField3G2 = 'N/A';
    }

    if($interpretasiField1G3 == ''){
        $interpretasiField1G3 = 'N/A';
    }
    if($interpretasiField2G3 == ''){
        $interpretasiField2G3 = 'N/A';
    }
    if($interpretasiField3G3 == ''){
        $interpretasiField3G3 = 'N/A';
    }

    if($interpretasiDISCG1 == ''){
        $interpretasiDISCG1 = 'N/A';
    }
    if($interpretasiDISCG2 == ''){
        $interpretasiDISCG2 = 'N/A';
    }
    if($interpretasiDISCG3 == ''){
        $interpretasiDISCG3 = 'N/A';
    }


?>

<html>
<head>
<title>DISC</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<canvas id="chartLineDISC" style="position: absolute; margin-top: 113.6em; margin-left: 3.7em; display: block; width: 13em; height:44.2em;" ></canvas>
<canvas id="chartLineDISC2" style="position: absolute; margin-top: 113.6em; margin-left: 20.5em; display: block; width: 13em; height:44.2em;" ></canvas>
<canvas id="chartLineDISC3" style="position: absolute; margin-top: 113.6em; margin-left: 38em; display: block; width: 14.2em; height:44.7em;" ></canvas>

<section class="invoice">
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div>&nbsp;</div>
<div>&nbsp;</div>
<div style="width:100%; text-align: center; margin-top: 10px;"><H1 >INDIVIDUAL REPORT DISC</H1></div>


<table  style="width: -webkit-fill-available; margin: 30px; width:100%;">
    <tr>
        <td style="width: 15%;">Nomor</td>
        <td style="width: 2%;">:</td>
        <td style="width: 30%;">&nbsp;</td>
        <td style="width: 15%;">Tgl Test</td>
        <td style="width: 2%;">:</td>
        <td style="width: 30%;"><?php $date=date_create($tanggal_tes); echo date_format($date,"d F Y");?></td>
    </tr>
    <tr>
        <td style="width: 10%;">Nama</td>
        <td style="width: 2%;">:</td>
        <td style="width: 30%;"><?php echo $name ?></td>
        <td>Tgl Lahir</td>
        <td>:</td>
        <td><?php $date=date_create($tanggal_lahir); echo date_format($date,"d F Y");?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?php if($jenis_kelamin == 0){ echo "Perempuan";}else{ echo "Laki-Laki";}?></td>
        <td>Usia saat ini</td>
        <td>:</td>
        <td><?php if($from->diff($to)->y == 0){ echo 'N/A';}else{ echo $from->diff($to)->y.' Tahun';}?></td>
    </tr>
    <tr>
        <td>Pendidikan</td>
        <td>:</td>
        <td>
            <?php 
                if($pendidikan_terakhir == 1){
                    echo "SMA";
                }else if($pendidikan_terakhir == 2){
                    echo "SMK";
                }else if($pendidikan_terakhir == 3){
                    echo "S1";
                }else if($pendidikan_terakhir == 4){
                    echo "S2";
                }else if($pendidikan_terakhir == 5){
                    echo "S3";
                }else if($pendidikan_terakhir > 5){
                    echo "Lain-Lain";
                }
            ?>
        </td>
        <td>Status</td>
        <td>:</td>
        <td><?php if($status == 5){ echo "Time Out";}else if($status == 4 ){echo "Selesai";}else{ echo "Belum Dikerjakan";}  ?></td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td><?php  if($pekerjaan == ''){echo 'N/A';}else{echo $pekerjaan;}?></td>
    </tr>
</table>
<div>&nbsp;</div>

<table  style="-webkit-print-color-adjust: exact; width: -webkit-fill-available; width:90%; margin-left: 30px; border:1px black solid; text-align:left; padding:20px; border-collapse: collapse;">
    <tr>
        <td class="borderDISCWhite">Mask Public Self</td>
        <td class="borderDISCWhite">Core Private Self</td>
        <td class="borderDISCBlack">Mirror Perceived Self</td>
    </tr>
    <tr>
        <td class="borderDISCWhite">(<?php echo $interpretasiField1G1?>)</td>
        <td class="borderDISCWhite">(<?php echo $interpretasiField1G2?>)</td>
        <td class="borderDISCBlack">(<?php echo $interpretasiField1G3?>)</td>
    </tr>
    <tr>
        <td style="border-right:1px black solid;"><p style="text-align: center; margin-left: 0em; height: 17.5em;"><?php echo  str_replace(".","</br>",$interpretasiDISCG1);?></p></td>
        <td style="border-right:1px black solid;"><p style="text-align: center; margin-left: 0em; height: 17.5em;"><?php echo  str_replace(".","</br>",$interpretasiDISCG2);?></p></td>
        <td style="border-right:1px black solid;"><p style="text-align: center; margin-left: 0em; height: 17.5em;"><?php echo  str_replace(".","</br>",$interpretasiDISCG3);?></p></td>
    </tr>
    <tr>
        <td style="border-right:1px black solid;">&nbsp;</td>
        <td style="border-right:1px black solid;">&nbsp;</td>
        <td style="border-right:1px black solid;">&nbsp;</td>
    </tr>
    
</table>

<style>
    .borderDISCWhite{
        border-right:1px white solid !important; 
        width: 25.3%; 
        text-align: center; 
        color: white !important; 
        background-color: black !important;
        font-weight: bold;
        -webkit-print-color-adjust: exact;
    }
    .borderDISCBlack{        
        border-right:1px black solid !important; 
        width: 25.3% !important; 
        text-align: center !important; 
        color: white !important; 
        background-color: black !important;
        font-weight: bold;
        -webkit-print-color-adjust: exact;
    }
</style>

<!-- <table  style="width: -webkit-fill-available; margin: 30px; width:100%;">
    <tr>
        <td><strong>Mask Public Self</strong></td>
    </tr>
    <tr>
        <td>(<strong><?php echo $interpretasiField1G1?></strong>)</td>
    </tr>
    <tr>
        <td><?php echo $interpretasiDISCG1?></td>
    </tr>
    
</table>

<table  style="width: -webkit-fill-available; margin: 30px; width:100%;">
    <tr>
        <td><strong>Core Private Self</strong></td>
    </tr>
    <tr>
        <td>(<strong><?php echo $interpretasiField1G2?></strong>)</td>
    </tr>
    <tr>
        <td><?php echo $interpretasiDISCG2?></td>
    </tr>
    
</table>

<table  style="width: -webkit-fill-available; margin: 30px; width:100%;">
    <tr>
        <td><strong>Mirror Perceived Self</strong></td>
    </tr>
    <tr>
        <td>(<strong><?php echo $interpretasiField1G3?></strong>)</td>
    </tr>
    <tr>
        <td><?php echo $interpretasiDISCG3?></td>
    </tr>
    
</table> -->

<table  style="width: -webkit-fill-available; margin: 30px; width:90%;">
    <tr>
        <td><strong>Deskripsi Kepribadian</strong></td>
    </tr>
    <tr>
        <td style="text-align:justify;"><?php echo $name.' '.$interpretasiField3G3?></td>
    </tr>
    
</table>

<table  style="width: -webkit-fill-available; margin: 30px; width:90%;">
    <tr>
        <td><strong>Job Match</strong></td>
    </tr>
    <tr>
        <td style="text-align:justify"><?php echo $interpretasiField2G3?></td>
    </tr>
</table>
<footer style="page-break-after: always; "></footer><!--footer bawah---->
<!-- <p>
Sparkline appears here: <span id="sparkline" style="height: 50px !important;">&nbsp;</span>
</p>

<script>
var values = [5, 4, 5, -2, 0, 3];

$('#sparkline').sparkline(values, {
    type: "line",
    width: 100,
    height: 100,
    tooltipSuffix: " widgets"
});
</script> -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>
<!-- <canvas id="chartLineDISC" style="position: absolute; margin-top: 133.1em; margin-left: 5.3em; display: block; width: 14em; height:44.2em;" ></canvas> -->
<canvas id="chartLineDISC4" style="position: absolute; margin-top: 95.3em; margin-left: 6.8em; display: block; width: 14em; height:44.2em;" class="no-print" ></canvas>
<canvas id="chartLineDISC5" style="position: absolute; margin-top: 95.3em; margin-left: 26.5em; display: block; width: 15em; height:44.2em;" class="no-print" ></canvas>
<canvas id="chartLineDISC6" style="position: absolute; margin-top: 95.3em; margin-left: 48em; display: block; width: 16.5em; height:44.7em;" class="no-print" ></canvas>

<!-- width="240px" height="240px" -->
<script>
        $(function () {
            var chartColors = {
                    red: 'rgb(243, 119, 120)',
                    orange: 'rgb(255, 159, 64)',
                    yellow: 'rgb(252, 214, 0)',
                    green: 'rgb(75, 192, 192)',
                    blue: 'rgb(51, 167, 222)',
                    purple: 'rgb(153, 102, 255)',
                    grey: 'rgb(231,233,237)'
                };
            var ctx_2 = document.getElementById("chartLineDISC").getContext('2d');
            var ctx_3 = document.getElementById("chartLineDISC2").getContext('2d');
            var ctx_4 = document.getElementById("chartLineDISC3").getContext('2d');

            var ctx_5 = document.getElementById("chartLineDISC4").getContext('2d');
            var ctx_6 = document.getElementById("chartLineDISC5").getContext('2d');
            var ctx_7 = document.getElementById("chartLineDISC6").getContext('2d');
            
            var data_2 = {
                datasets: [{
                    data: [<?php echo $DMG?>, <?php echo $IMG?>, <?php echo $SMG?>, <?php echo $CMG?>],
                    backgroundColor: chartColors.blue,
                    borderColor: chartColors.blue,
                    backgroundColor: [
                        '#3c8dbc',
                        '#f56954',
                        '#f39c12',
                        '#f39c12',
                    ],
                    fill: false,
                    pointBackgroundColor: chartColors.blue,
                    pointBorderColor: chartColors.blue,
                }],
                labels: [
                    'D',
                    'I',
                    'S',
                    'C'
                ]
            };

            var data_3 = {
                datasets: [{
                    data: [<?php echo $DLG?>, <?php echo $ILG?>, <?php echo $SLG?>, <?php echo $CLG?>],
                    backgroundColor: chartColors.yellow,
                    borderColor: chartColors.yellow,
                    backgroundColor: [
                        '#3c8dbc',
                        '#f56954',
                        '#f39c12',
                        '#f39c12',
                    ],
                    fill: false,
                    pointBackgroundColor: chartColors.yellow,
                    pointBorderColor: chartColors.yellow,
                }],
                labels: [
                    'D',
                    'I',
                    'S',
                    'C'
                ]
            };

            var data_4 = {
                datasets: [{
                    data: [<?php echo $DTG?>, <?php echo $ITG?>, <?php echo $STG?>, <?php echo $CTG?>],
                    backgroundColor: chartColors.red,
                    borderColor: chartColors.red,
                    backgroundColor: [
                        '#3c8dbc',
                        '#f56954',
                        '#f39c12',
                        '#f39c12',
                    ],
                    fill: false,
                    pointBackgroundColor: chartColors.red,
                    pointBorderColor: chartColors.red,
                }],
                labels: [
                    'D',
                    'I',
                    'S',
                    'C'
                ]
            };




            var data_5 = {
                datasets: [{
                    data: [<?php echo $DMG?>, <?php echo $IMG?>, <?php echo $SMG?>, <?php echo $CMG?>],
                    backgroundColor: chartColors.blue,
                    borderColor: chartColors.blue,
                    backgroundColor: [
                        '#3c8dbc',
                        '#f56954',
                        '#f39c12',
                        '#f39c12',
                    ],
                    fill: false,
                    pointBackgroundColor: chartColors.blue,
                    pointBorderColor: chartColors.blue,
                }],
                labels: [
                    'D',
                    'I',
                    'S',
                    'C'
                ]
            };

            var data_6 = {
                datasets: [{
                    data: [<?php echo $DLG?>, <?php echo $ILG?>, <?php echo $SLG?>, <?php echo $CLG?>],
                    backgroundColor: chartColors.yellow,
                    borderColor: chartColors.yellow,
                    backgroundColor: [
                        '#3c8dbc',
                        '#f56954',
                        '#f39c12',
                        '#f39c12',
                    ],
                    fill: false,
                    pointBackgroundColor: chartColors.yellow,
                    pointBorderColor: chartColors.yellow,
                }],
                labels: [
                    'D',
                    'I',
                    'S',
                    'C'
                ]
            };

            var data_7 = {
                datasets: [{
                    data: [<?php echo $DTG?>, <?php echo $ITG?>, <?php echo $STG?>, <?php echo $CTG?>],
                    backgroundColor: chartColors.red,
                    borderColor: chartColors.red,
                    backgroundColor: [
                        '#3c8dbc',
                        '#f56954',
                        '#f39c12',
                        '#f39c12',
                    ],
                    fill: false,
                    pointBackgroundColor: chartColors.red,
                    pointBorderColor: chartColors.red,
                }],
                labels: [
                    'D',
                    'I',
                    'S',
                    'C'
                ]
            };





            var myDoughnutChart_2 = new Chart(ctx_2, {
                type: 'line',
                data: data_2,
                options: {
                    responsive: false,
                    maintainAspectRatio: false,
                    legend: {
                        display: false,
                        position: 'bottom',
                        labels: {
                            boxWidth: 12
                        }
                    },
                    tooltips: {
                                // mode: 'label',
                                callbacks: {
                                                label: function(tooltipItem) {
                                                    return tooltipItem.yLabel;
                                                }
                                            }
                    },
                    title: {
                            display: false,
                            text: 'Mask, Public Self'
                            },
                            
                            hover: {
                            mode: 'nearest',
                            intersect: true
                            },
                    scales: {
                            xAxes: [{
                                display: true,
                                gridLines: {
                                        display: false,
                                        color: '#90878700'
                                },
                                scaleLabel: {
                                        display: true,
                                        labelString: ''
                                },
                                ticks: {
                                        display: true,
                                        fontColor: '#90878700'
                                }   
                            }],
                            yAxes: [{
                                display: true,
                                gridLines: {
                                            display: false,
                                            color: '#90878700'
                                },
                                scaleLabel: {
                                            display: true,
                                            labelString: ''
                                },
                                ticks: {
                                        beginAtZero: true,
                                        max: 15,
                                        min: -15,
                                        stepSize: 1,
                                        display: true,
                                        fontColor: '#90878700'
                                }   
                            }]
                    }
                }
            });

            var myDoughnutChart_3 = new Chart(ctx_3, {
                type: 'line',
                data: data_3,
                options: {
                    responsive: false,
                    maintainAspectRatio: false,
                    legend: {
                        display: false,
                        position: 'bottom',
                        labels: {
                            boxWidth: 12
                        }
                    },
                    tooltips: {
                                // mode: 'label',
                                callbacks: {
                                                label: function(tooltipItem) {
                                                    return tooltipItem.yLabel;
                                                }
                                            }
                    },
                    title: {
                            display: false,
                            text: 'Mask, Public Self'
                            },
                            
                            hover: {
                            mode: 'nearest',
                            intersect: true
                            },
                    scales: {
                            xAxes: [{
                                display: true,
                                gridLines: {
                                        display: false,
                                        color: '#90878700'
                                },
                                scaleLabel: {
                                        display: true,
                                        labelString: ''
                                },
                                ticks: {
                                        display: true,
                                        fontColor: '#90878700'
                                }   
                            }],
                            yAxes: [{
                                display: true,
                                gridLines: {
                                            display: false,
                                            color: '#90878700'
                                },
                                scaleLabel: {
                                            display: true,
                                            labelString: ''
                                },
                                ticks: {
                                        beginAtZero: true,
                                        max: 15,
                                        min: -15,
                                        stepSize: 1,
                                        display: true,
                                        fontColor: '#90878700'
                                }   
                            }]
                    }
                }
            });


            var myDoughnutChart_4 = new Chart(ctx_4, {
                type: 'line',
                data: data_4,
                options: {
                    responsive: false,
                    maintainAspectRatio: false,
                    legend: {
                        display: false,
                        position: 'bottom',
                        labels: {
                            boxWidth: 12
                        }
                    },
                    tooltips: {
                                // mode: 'label',
                                callbacks: {
                                                label: function(tooltipItem) {
                                                    return tooltipItem.yLabel;
                                                }
                                            }
                    },
                    title: {
                            display: false,
                            text: 'Mask, Public Self'
                            },
                            
                            hover: {
                            mode: 'nearest',
                            intersect: true
                            },
                    scales: {
                            xAxes: [{
                                display: true,
                                gridLines: {
                                        display: false,
                                        color: '#90878700'
                                },
                                scaleLabel: {
                                        display: true,
                                        labelString: ''
                                },
                                ticks: {
                                        display: true,
                                        fontColor: '#90878700'
                                }   
                            }],
                            yAxes: [{
                                display: true,
                                gridLines: {
                                            display: false,
                                            color: '#90878700'
                                },
                                scaleLabel: {
                                            display: true,
                                            labelString: ''
                                },
                                ticks: {
                                        beginAtZero: true,
                                        max: 16,
                                        min: -17,
                                        stepSize: 1,
                                        display: true,
                                        fontColor: '#90878700'
                                }   
                            }]
                    }
                }
            });









            var myDoughnutChart_5 = new Chart(ctx_5, {
                type: 'line',
                data: data_5,
                options: {
                    responsive: false,
                    maintainAspectRatio: false,
                    legend: {
                        display: false,
                        position: 'bottom',
                        labels: {
                            boxWidth: 12
                        }
                    },
                    tooltips: {
                                // mode: 'label',
                                callbacks: {
                                                label: function(tooltipItem) {
                                                    return tooltipItem.yLabel;
                                                }
                                            }
                    },
                    title: {
                            display: false,
                            text: 'Mask, Public Self'
                            },
                            
                            hover: {
                            mode: 'nearest',
                            intersect: true
                            },
                    scales: {
                            xAxes: [{
                                display: true,
                                gridLines: {
                                        display: false,
                                        color: '#90878700'
                                },
                                scaleLabel: {
                                        display: true,
                                        labelString: ''
                                },
                                ticks: {
                                        display: true,
                                        fontColor: '#90878700'
                                }   
                            }],
                            yAxes: [{
                                display: true,
                                gridLines: {
                                            display: false,
                                            color: '#90878700'
                                },
                                scaleLabel: {
                                            display: true,
                                            labelString: ''
                                },
                                ticks: {
                                        beginAtZero: true,
                                        max: 15,
                                        min: -15,
                                        stepSize: 1,
                                        display: true,
                                        fontColor: '#90878700'
                                }   
                            }]
                    }
                }
            });

            var myDoughnutChart_6 = new Chart(ctx_6, {
                type: 'line',
                data: data_6,
                options: {
                    responsive: false,
                    maintainAspectRatio: false,
                    legend: {
                        display: false,
                        position: 'bottom',
                        labels: {
                            boxWidth: 12
                        }
                    },
                    tooltips: {
                                // mode: 'label',
                                callbacks: {
                                                label: function(tooltipItem) {
                                                    return tooltipItem.yLabel;
                                                }
                                            }
                    },
                    title: {
                            display: false,
                            text: 'Mask, Public Self'
                            },
                            
                            hover: {
                            mode: 'nearest',
                            intersect: true
                            },
                    scales: {
                            xAxes: [{
                                display: true,
                                gridLines: {
                                        display: false,
                                        color: '#90878700'
                                },
                                scaleLabel: {
                                        display: true,
                                        labelString: ''
                                },
                                ticks: {
                                        display: true,
                                        fontColor: '#90878700'
                                }   
                            }],
                            yAxes: [{
                                display: true,
                                gridLines: {
                                            display: false,
                                            color: '#90878700'
                                },
                                scaleLabel: {
                                            display: true,
                                            labelString: ''
                                },
                                ticks: {
                                        beginAtZero: true,
                                        max: 15,
                                        min: -15,
                                        stepSize: 1,
                                        display: true,
                                        fontColor: '#90878700'
                                }   
                            }]
                    }
                }
            });


            var myDoughnutChart_7 = new Chart(ctx_7, {
                type: 'line',
                data: data_7,
                options: {
                    responsive: false,
                    maintainAspectRatio: false,
                    legend: {
                        display: false,
                        position: 'bottom',
                        labels: {
                            boxWidth: 12
                        }
                    },
                    tooltips: {
                                // mode: 'label',
                                callbacks: {
                                                label: function(tooltipItem) {
                                                    return tooltipItem.yLabel;
                                                }
                                            }
                    },
                    title: {
                            display: false,
                            text: 'Mask, Public Self'
                            },
                            
                            hover: {
                            mode: 'nearest',
                            intersect: true
                            },
                    scales: {
                            xAxes: [{
                                display: true,
                                gridLines: {
                                        display: false,
                                        color: '#90878700'
                                },
                                scaleLabel: {
                                        display: true,
                                        labelString: ''
                                },
                                ticks: {
                                        display: true,
                                        fontColor: '#90878700'
                                }   
                            }],
                            yAxes: [{
                                display: true,
                                gridLines: {
                                            display: false,
                                            color: '#90878700'
                                },
                                scaleLabel: {
                                            display: true,
                                            labelString: ''
                                },
                                ticks: {
                                        beginAtZero: true,
                                        max: 16,
                                        min: -17,
                                        stepSize: 1,
                                        display: true,
                                        fontColor: '#90878700'
                                }   
                            }]
                    }
                }
            });


        });

</script>
            <!-- legend: {
                display: false,
                position: "bottom",
                "labels":   {
                                // "fontSize": 20,
                                // "boxWidth": 40,
                                fontColor: 'rgba(0, 0, 0, 0)',
                                strokeStyle: 'rgba(0, 0, 0, 0)',
                            }
            }, -->

<div style="margin: 10px; width:100%; text-align: left; margin-top: 10px; margin-left: 20px; margin-right: 20px;"><H2>Diagram DISC</H2></div>
<table class="tableWorkDirectionTop">
        <tr class="tableWorkDirectionTrTop" style="font-size: 20px; margin-left: 20px; margin-right: 20px;">
            <td rowspan="3" class="tableWorkDirectionTdTop"  style="width: 50pt;">
                &nbsp;
            </td>
            <td rowspan="3" class="tableWorkDirectionTdTop"  style="width: 40pt;">
                &nbsp;
            </td>
            <td rowspan="3" class="tableWorkDirectionTdTop"  style="width: 80pt;">
                &nbsp;
            </td>
            <td rowspan="3" class="tableWorkDirectionTdTop tableWorkDirectionWidth">
                &nbsp; D &nbsp;
            </td>
            <td rowspan="3" class="tableWorkDirectionTdTop tableWorkDirectionWidth">
                &nbsp; I &nbsp;
            </td>
            <td rowspan="3" class="tableWorkDirectionTdTop tableWorkDirectionWidth">
                &nbsp; S &nbsp;
            </td>
            <td rowspan="3" class="tableWorkDirectionTdTop tableWorkDirectionWidth">
                &nbsp; C &nbsp;
            </td>
            <td rowspan="3" class="tableWorkDirectionTdTop tableWorkDirectionWidth">
                &nbsp; ♦︎ &nbsp;
            </td>
            <td rowspan="3" class="tableWorkDirectionTdTop tableWorkDirectionWidth">
                &nbsp; &nbsp; &nbsp;
            </td>
            <td class="tableWorkDirectionTdTop" style="border-bottom: 1px solid white !important; color:white !important; -webkit-print-color-adjust: exact;">
                Must Equal
            </td>
        </tr>
        <tr class="tableWorkDirectionTr">
            <td style="font-size: 20px;  color:white !important; -webkit-print-color-adjust: exact;" rowspan="2" class="tableWorkDirectionTdTop">
                24
            </td>
        </tr>
</table>

<table class="tableWorkDirection">
        <tr class="tableWorkDirectionTr" style="font-size: 20px;">
            <td rowspan="2" class="tableWorkDirectionTdTop"  style="width: 50pt;">
                1
            </td>
            <td rowspan="2" class="tableWorkDirectionTdTop"  style="width: 40pt; font-size: 40px; border-right: 1px solid;">
                ➞
            </td>
            <td rowspan="2" class="tableWorkDirectionTd"  style="width: 80pt; font-size: 20px;">
                <strong>MOST</strong>
            </td>
            <td rowspan="2" class="tableWorkDirectionTd tableWorkDirectionWidth">
                &nbsp; <?php echo $DM; if($DM < 10){echo '&nbsp';} ?> &nbsp;
            </td>
            <td rowspan="2" class="tableWorkDirectionTd tableWorkDirectionWidth">
                &nbsp; <?php echo $IM; if($IM < 10){echo '&nbsp';}?> &nbsp;
            </td>
            <td rowspan="2" class="tableWorkDirectionTd tableWorkDirectionWidth">
                &nbsp; <?php echo $SM; if($SM < 10){echo '&nbsp';}?> &nbsp;
            </td>
            <td rowspan="2" class="tableWorkDirectionTd tableWorkDirectionWidth">
                &nbsp; <?php echo $CM; if($CM < 10){echo '&nbsp';}?> &nbsp;
            </td>
            <td rowspan="2" class="tableWorkDirectionTd tableWorkDirectionWidth">
                &nbsp; <?php echo $PM; if($PM < 10){echo '&nbsp';}?> &nbsp;
            </td>
            <td rowspan="2" class="tableWorkDirectionTd tableWorkDirectionWidth">
                &nbsp; &nbsp; &nbsp;
            </td>
            <td class="tableWorkDirectionTd" style="border-bottom: 1px solid white;">
                <sub>Must Equal</sub>
            </td>
        </tr>
        <tr class="tableWorkDirectionTr">
            <td style="font-size: 25px;" rowspan="2" class="tableWorkDirectionTd">
                24
            </td>
        </tr>
</table>


<table class="tableWorkDirection">
        <tr class="tableWorkDirectionTr" style="font-size: 20px;">
            <td rowspan="2" class="tableWorkDirectionTdTop"  style="width: 50pt;">
                2
            </td>
            <td rowspan="2" class="tableWorkDirectionTdTop"  style="width: 40pt; font-size: 40px; border-right: 1px solid;">
                ➞
            </td>
            <td rowspan="2" class="tableWorkDirectionTd"  style="width: 80pt; font-size: 20px;">
                <strong>LEAST</strong>
            </td>
            <td rowspan="2" class="tableWorkDirectionTd tableWorkDirectionWidth">
                &nbsp; <?php echo $DL; if($DL < 10){echo '&nbsp';} ?> &nbsp;
            </td>
            <td rowspan="2" class="tableWorkDirectionTd tableWorkDirectionWidth">
                &nbsp; <?php echo $IL; if($IL < 10){echo '&nbsp';} ?> &nbsp;
            </td>
            <td rowspan="2" class="tableWorkDirectionTd tableWorkDirectionWidth">
                &nbsp; <?php echo $SL; if($SL < 10){echo '&nbsp';} ?> &nbsp;
            </td>
            <td rowspan="2" class="tableWorkDirectionTd tableWorkDirectionWidth">
                &nbsp; <?php echo $CL; if($CL < 10){echo '&nbsp';} ?> &nbsp;
            </td>
            <td rowspan="2" class="tableWorkDirectionTd tableWorkDirectionWidth">
                &nbsp; <?php echo $PL; if($PL < 10){echo '&nbsp';} ?> &nbsp;
            </td>
            <td rowspan="2" class="tableWorkDirectionTd tableWorkDirectionWidth">
                &nbsp; &nbsp; &nbsp;
            </td>
            <td class="tableWorkDirectionTd" style="border-bottom: 1px solid white;">
                <sub>Must Equal</sub>
            </td>
        </tr>
        <tr class="tableWorkDirectionTr">
            <td style="font-size: 25px;" rowspan="2" class="tableWorkDirectionTd">
                24
            </td>
        </tr>
</table>
    
    <table class="tableWorkDirection" >
            <tr class="tableWorkDirectionTr" style="font-size: 20px;">
                <td rowspan="2" class="tableWorkDirectionTdTop"  style="width: 50pt;">
                    3
                </td>
                <td rowspan="2" class="tableWorkDirectionTdTop"  style="width: 37pt; font-size: 40px; border-right: 1px solid;">
                    ➞
                </td>
                <td rowspan="2" class="tableWorkDirectionTd"  style="width: 78pt; font-size: 20px;">
                    <strong>CHANGE</strong>
                </td>
                <td rowspan="2" class="tableWorkDirectionTd tableWorkDirectionWidth">
                    &nbsp; <?php echo $DT; if($DT < 10){echo '&nbsp;';} ?>
                </td>
                <td rowspan="2" class="tableWorkDirectionTd tableWorkDirectionWidth">
                    &nbsp; <?php echo $IT; if($IT < 10){echo '&nbsp;';} ?>
                </td>
                <td rowspan="2" class="tableWorkDirectionTd tableWorkDirectionWidth">
                    &nbsp; <?php echo $ST; if($ST < 10){echo '&nbsp;';} ?>
                </td>
                <td rowspan="2" class="tableWorkDirectionTd tableWorkDirectionWidth">
                    &nbsp; <?php echo $CT; if($CT < 10){echo '&nbsp;';} ?>
                </td>
                <td rowspan="2"class="tableWorkDirectionTd tableWorkDirectionWidth" style="color: black !important; background-color: black !important;  width: 5em; -webkit-print-color-adjust: exact;">
                    &nbsp; <?php echo $CT; if($CT < 10){echo '&nbsp;';} ?>
                </td>
                <!-- <td rowspan="2" class="tableWorkDirectionTd tableWorkDirectionWidth">
                    &nbsp; &nbsp; &nbsp;
                </td> -->
                <td rowspan="2" colspan="2" class="tableWorkDirectionTd" style=" font-size: 15px; width: 104px;">
                    Do not calculate the "♦︎" value for Row 3
            </tr>
            <!-- <tr class="tableWorkDirectionTr">
                <td style="font-size: 10px;" rowspan="2" class="tableWorkDirectionTd">
                   "♦︎" value for Row 3
                </td>
            </tr> -->
    </table>
    
    <table style="width: -webkit-fill-available; margin: 10px; text-align: center; margin-left: 20px; margin-right: 20px;">
            <tr class="tableWorkDirectionTr" style="font-size: 20px;">
                <td rowspan="2"  style="width: 50pt;" class="tableWorkDirectionTdTop" >
                    4
                </td>
                <td style="font-size: 15px;">
                    Graph 1 <strong>MOST</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
                <td style="font-size: 15px;">
                    Graph 2 <strong>LEAST</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
                <td  style="font-size: 15px;">
                    Graph 3 <strong>CHANGE</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
                
            </tr>
            <tr class="tableWorkDirectionTr">
                <td style="font-size: 15px;">
                    Mask, Public Self &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
                <td style="font-size: 15px;" rowspan="2">
                    Core, Private Selft &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
                <td style="font-size: 15px;" rowspan="2">
                    Mirror, Perceived Self &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
            </tr>
    </table>

    <table style="width: -webkit-fill-available;">
            <tr style="font-size: 20px;">
                <td rowspan="2"  style="width: 40pt;">
                    &nbsp;
                </td>
                <td style="font-size: 20px;">
                    <table style="border-collapse: collapse; width: -webkit-fill-available; font-size: 12px; ">
                        <tr>
                            <td style="width:10%;">&nbsp;</td>
                            <td class="tableDISC">D</td>
                            <td class="tableDISC">I</td>
                            <td class="tableDISC">S</td>
                            <td class="tableDISC">C</td>
                            <td style="width:10%;">&nbsp;</td>
                        </tr>
                        <tr>
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC2">&nbsp;</td>
                                <td class="tableDISC2">&nbsp;</td>
                                <td class="tableDISC2">&nbsp;</td>
                                <td class="tableDISC2">&nbsp;</td>
                                <td style="width:10%;">&nbsp;</td>
                        </tr>
                        <tr>
                                <td style="width:10%;  border-left:3px black solid; border-right:1px black solid;  border-top:3px black solid; " >&nbsp;</td>
                                <td class="tableDISC3" style="border-top:3px black solid;">21</td>
                                <td class="tableDISC3" style="border-top:3px black solid;">19</td>
                                <td class="tableDISC3" style="border-top:3px black solid;">20</td>
                                <td class="tableDISC3" style="border-top:3px black solid;">17</td>
                                <td style="width:10%; font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="4">&nbsp;8</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">16</td>
                                <td class="tableDISC3">11</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">13</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">15</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">14</td>
                                <td class="tableDISC3">11</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">9</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>
                        <!---ke 6-->
                        <tr>
                                <td style="width:10%;  border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">9</td>
                                <td style="width:10%; font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="4">&nbsp;6</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">8</td>
                                <td class="tableDISC3">12</td>
                                <td class="tableDISC3">8</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">14</td>
                                <td class="tableDISC3">7</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">7</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">13</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">10</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>
                        <!---ke 4-->
                        <tr>
                                <td style="width:10%;  border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">12</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">9</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="width:10%; font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="5">&nbsp;4</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">11</td>
                                <td class="tableDISC3">6</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">10</td>
                                <td class="tableDISC3">5</td>
                                <td class="tableDISC3">8</td>
                                <td class="tableDISC3">6</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">7</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">9</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">5</td>  
                        </tr>

                        <!---ke 2-->
                        <tr>
                                <td style="width:10%;  border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="width:10%; font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="3">&nbsp;2</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">8</td>
                                <td class="tableDISC3">4</td>
                                <td class="tableDISC3">6</td>
                                <td class="tableDISC3">4</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">7</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">5</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>

                         <!---ke 0-->
                         <tr>
                                <td style="width:10%;  border-left:3px black solid; border-right:1px black solid;  border-top:3px black solid; " >&nbsp;</td>
                                <td class="tableDISC3" style="border-top:3px black solid;">6</td>
                                <td class="tableDISC3" style="border-top:3px black solid;">&nbsp;</td>
                                <td class="tableDISC3" style="border-top:3px black solid;">&nbsp;</td>
                                <td class="tableDISC3" style="border-top:3px black solid;">&nbsp;</td>
                                <td style="width:10%; font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="5">&nbsp;0</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">4</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">5</td>
                                <td class="tableDISC3">3</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">4</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">3</td>
                                <td class="tableDISC3">3</td>  
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>
                        </tr>

                        <!---ke - 2-->
                        
                        <tr>
                                <td style="width:10%;  border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="width:10%; font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="4">&nbsp;-2</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">3</td>
                                <td class="tableDISC3">2</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">2</td>
                                <td class="tableDISC3">2</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>
                        <!---ke - 4-->
                        <tr>
                                <td style="width:10%;  border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">1</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">1</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">1</td>
                                <td style="width:10%; font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="4">&nbsp;-4</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">1</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">0</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>
                        <!---ke - 6-->
                        <tr>
                                <td style="width:10%;  border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="width:10%; font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="4">&nbsp;-6</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">0</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">0</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">0</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>
                    </table>
                </td>
                <!---DISC 2-->
                <td style="font-size: 15px;">
                    <table style="border-collapse: collapse; width: -webkit-fill-available; font-size: 12px;">
                        <tr>
                            <td style="width:10%;">&nbsp;</td>
                            <td class="tableDISC">D</td>
                            <td class="tableDISC">I</td>
                            <td class="tableDISC">S</td>
                            <td class="tableDISC">C</td>
                            <td style="width:10%;">&nbsp;</td>
                        </tr>
                        <tr>
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC2">&nbsp;</td>
                                <td class="tableDISC2">&nbsp;</td>
                                <td class="tableDISC2">&nbsp;</td>
                                <td class="tableDISC2">&nbsp;</td>
                                <td style="width:10%;">&nbsp;</td>
                        </tr>
                        <tr>
                                <td style="width:10%;  border-left:3px black solid; border-right:1px black solid;  border-top:3px black solid; " >&nbsp;</td>
                                <td class="tableDISC3" style="border-top:3px black solid;">0</td>
                                <td class="tableDISC3" style="border-top:3px black solid;">&nbsp;</td>
                                <td class="tableDISC3" style="border-top:3px black solid;">0</td>
                                <td class="tableDISC3" style="border-top:3px black solid;">0</td>
                                <td style="width:10%; font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="4">&nbsp;8</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">0</td>
                                <td class="tableDISC3">1</td>
                                <td class="tableDISC3">1</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">1</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>
                        <!---ke 6-->
                        <tr>
                                <td style="width:10%;  border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">1</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">2</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="width:10%; font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="4">&nbsp;6</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">2</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">2</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>
                        <!---ke 4-->
                        <tr>
                                <td style="width:10%;  border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">2</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">3</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">3</td>
                                <td style="width:10%; font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="5">&nbsp;4</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>

                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">3</td>
                                <td class="tableDISC3">3</td>
                                <td class="tableDISC3">4</td>
                                <td class="tableDISC3">4</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>

                        <!---ke 2-->
                        <tr>
                                <td style="width:10%;  border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">4</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">5</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">5</td>
                                <td style="width:10%; font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="3">&nbsp;2</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">5</td>
                                <td class="tableDISC3">4</td>
                                <td class="tableDISC3">6</td>
                                <td class="tableDISC3">6</td>  
                        </tr>

                         <!---ke 0-->
                         <tr>
                                <td style="width:10%;  border-left:3px black solid; border-right:1px black solid;  border-top:3px black solid; " >&nbsp;</td>
                                <td class="tableDISC3" style="border-top:3px black solid;">6</td>
                                <td class="tableDISC3" style="border-top:3px black solid;">5</td>
                                <td class="tableDISC3" style="border-top:3px black solid;">&nbsp;</td>
                                <td class="tableDISC3" style="border-top:3px black solid;">7</td>
                                <td style="width:10%; font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="5">&nbsp;0</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">7</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">7</td>
                                <td class="tableDISC3">8</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">8</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>

                        <!---ke - 2-->
                        <tr>
                                <td style="width:10%;  border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">6</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">8</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="width:10%; font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="4">&nbsp;-2</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">9</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">9</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">10</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">9</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">11</td>
                                <td class="tableDISC3">7</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">10</td>  
                        </tr>
                        <!---ke - 4-->
                        <tr>
                                <td style="width:10%;  border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">12</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">8</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">10</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="width:10%; font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="4">&nbsp;-4</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">13</td>
                                <td class="tableDISC3">9</td>
                                <td class="tableDISC3">11</td>
                                <td class="tableDISC3">11</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">14</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">12</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>
                        <!---ke - 6-->
                        <tr>
                                <td style="width:10%;  border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">15</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">10</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">12</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">13</td>
                                <td style="width:10%; font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="4">&nbsp;-6</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">16</td>
                                <td class="tableDISC3">11</td>
                                <td class="tableDISC3">13</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">12</td>
                                <td class="tableDISC3">16</td>
                                <td class="tableDISC3">15</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">20</td>
                                <td class="tableDISC3">19</td>
                                <td class="tableDISC3">19</td>
                                <td class="tableDISC3">17</td>  
                        </tr>
                    </table>
                </td>
                <!---DISC 3--->
                <td  style="ont-size: 15px;">
                    <table style="border-collapse: collapse; width: -webkit-fill-available; font-size: 12px;">
                        <tr>
                            <td style="width:10%;">&nbsp;</td>
                            <td class="tableDISC">D</td>
                            <td class="tableDISC">I</td>
                            <td class="tableDISC">S</td>
                            <td class="tableDISC">C</td>
                            <td style="width:10%;">&nbsp;</td>
                        </tr>

                        <tr>
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC2">&nbsp;</td>
                                <td class="tableDISC2">&nbsp;</td>
                                <td class="tableDISC2">&nbsp;</td>
                                <td class="tableDISC2">&nbsp;</td>
                                <td style="width:10%;">&nbsp;</td>
                        </tr>

                        <tr>
                                <td style="width:10%;  border-left:3px black solid; border-right:1px black solid;  border-top:3px black solid; " >&nbsp;</td>
                                <td class="tableDISC3" style="border-top:3px black solid;">21</td>
                                <td class="tableDISC3" style="border-top:3px black solid;">18</td>
                                <td class="tableDISC3" style="border-top:3px black solid;">20</td>
                                <td class="tableDISC3" style="border-top:3px black solid;">17</td>
                                <td style="width:10%; font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="4">&nbsp;8</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">18</td>
                                <td class="tableDISC3">10</td>
                                <td class="tableDISC3">15</td>
                                <td class="tableDISC3">10</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">15</td>
                                <td class="tableDISC3">8</td>
                                <td class="tableDISC3">11</td>
                                <td class="tableDISC3">6</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">14</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">10</td>
                                <td class="tableDISC3">5</td>  
                        </tr>
                        <!---ke 6-->
                        <tr>
                                <td style="width:10%;  border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">13</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">7</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">9</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">4</td>
                                <td style="width:10%; font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="4">&nbsp;6</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">12</td>
                                <td class="tableDISC3">6</td>
                                <td class="tableDISC3">8</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">10</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">7</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">5</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">3</td>  
                        </tr>
                        <!---ke 4-->
                        <tr>
                                <td style="width:10%;  border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">9</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">4</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">5</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">2</td>
                                <td style="width:10%; font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="5">&nbsp;4</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">8</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">4</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">3</td>
                                <td class="tableDISC3">3</td>
                                <td class="tableDISC3">1</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">7</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">2</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>

                        <!---ke 2-->
                        <tr>
                                <td style="width:10%;  border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">5</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">2</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">1</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">0</td>
                                <td style="width:10%; font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="3">&nbsp;2</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">3</td>
                                <td class="tableDISC3">1</td>
                                <td class="tableDISC3">0</td>
                                <td class="tableDISC3">-1</td>  
                        </tr>

                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">1</td>
                                <td class="tableDISC3">0</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">-2</td>  
                        </tr>

                         <!---ke 0-->
                         <tr>
                                <td style="width:10%;  border-left:3px black solid; border-right:1px black solid;  border-top:3px black solid; " >&nbsp;</td>
                                <td class="tableDISC3" style="border-top:3px black solid;">0</td>
                                <td class="tableDISC3" style="border-top:3px black solid;">-1</td>
                                <td class="tableDISC3" style="border-top:3px black solid;">-1</td>
                                <td class="tableDISC3" style="border-top:3px black solid;">-3</td>
                                <td style="width:10%; font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="5">&nbsp;0</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">-2</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">-2</td>
                                <td class="tableDISC3">-4</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">-3</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">-3</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">-4</td>
                                <td class="tableDISC3">-2</td>
                                <td class="tableDISC3">-4</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">-3</td>
                                <td class="tableDISC3">-5</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>

                        <!---ke - 2-->
                        
                        <tr>
                                <td style="width:10%;  border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">-6</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">-5</td>
                                <td style="width:10%; font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="4">&nbsp;-2</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">-7</td>
                                <td class="tableDISC3">-4</td>
                                <td class="tableDISC3">-6</td>
                                <td class="tableDISC3">-6</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">-9</td>
                                <td class="tableDISC3">-5</td>
                                <td class="tableDISC3">-7</td>
                                <td class="tableDISC3">-7</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>
                        <!---ke - 4-->
                        <tr>
                                <td style="width:10%;  border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">-10</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">-6</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">-8</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">-8</td>
                                <td style="width:10%; font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="4">&nbsp;-4</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">-7</td>
                                <td class="tableDISC3">-9</td>
                                <td class="tableDISC3">-9</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">-11</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">-12</td>
                                <td class="tableDISC3">-8</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">-10</td>  
                        </tr>
                        <!---ke - 6-->
                        <tr>
                                <td style="width:10%;  border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">&nbsp;</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">-9</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">-10</td>
                                <td class="tableDISC3" style="border-top:1px black dotted;">-13</td>
                                <td style="width:10%; font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="4">&nbsp;-6</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">-15 </td>
                                <td class="tableDISC3">-10</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">-15</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">-16</td>
                                <td class="tableDISC3">-18</td>
                                <td class="tableDISC3">-15</td>
                                <td class="tableDISC3">-19</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">-18</td>
                                <td class="tableDISC3">-22</td>  
                        </tr>
                    </table>
                </td>
                    </table>
                </td>
            </tr>
            <!-- <tr class="tableWorkDirectionTr">
                <td>
                    Mask, Public Self
                </td>
                <td style="font-size: 20px;" rowspan="2">
                    Core, Private Selft
                </td>
                <td style="font-size: 20px;" rowspan="2">
                    Mirror, Perceived Self
                </td>
            </tr> -->
    </table>

</body>

<footer style="page-break-after: always; "></footer><!--footer bawah---->
<body>
        <div>&nbsp;</div>
        <div>&nbsp;</div>
        <!-- <div>&nbsp;</div> -->
        <!-- <div>&nbsp;</div> -->
        <div style="width:100%; text-align: center; margin-top: 10px;"><H1 >INDIVIDUAL REPORT DISC</H1></div>
        <table  style="width: -webkit-fill-available; margin: 30px; width:100%;">
            <tr>
                <td style="width: 15%;">Nomor</td>
                <td style="width: 2%;">:</td>
                <td style="width: 30%;">&nbsp;</td>
                <td style="width: 15%;">Tgl Test</td>
                <td style="width: 2%;">:</td>
                <td style="width: 30%;"><?php $date=date_create($tanggal_tes); echo date_format($date,"d F Y");?></td>
            </tr>
            <tr>
                <td style="width: 10%;">Nama</td>
                <td style="width: 2%;">:</td>
                <td style="width: 30%;"><?php echo $name ?></td>
                <td>Tgl Lahir</td>
                <td>:</td>
                <td><?php $date=date_create($tanggal_lahir); echo date_format($date,"d F Y");?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?php if($jenis_kelamin == 0){ echo "Perempuan";}else{ echo "Laki-Laki";}?></td>
                <td>Usia saat ini</td>
                <td>:</td>
                <td><?php if($from->diff($to)->y == 0){ echo 'N/A';}else{ echo $from->diff($to)->y.' Tahun';}?></td>
            </tr>
            <tr>
                <td>Pendidikan</td>
                <td>:</td>
                <td>
                    <?php 
                        if($pendidikan_terakhir == 1){
                            echo "SMA";
                        }else if($pendidikan_terakhir == 2){
                            echo "SMK";
                        }else if($pendidikan_terakhir == 3){
                            echo "S1";
                        }else if($pendidikan_terakhir == 4){
                            echo "S2";
                        }else if($pendidikan_terakhir == 5){
                            echo "S3";
                        }else if($pendidikan_terakhir > 5){
                            echo "Lain-Lain";
                        }
                    ?>
                </td>
                <td>Status</td>
                <td>:</td>
                <td><?php if($status == 5){ echo "Time Out";}else if($status == 4 ){echo "Selesai";}else{ echo "Belum Dikerjakan";}  ?></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><?php  if($pekerjaan == ''){echo 'N/A';}else{echo $pekerjaan;}?></td>
            </tr>
        </table>
        <table style="font-size: 10px; width: 95%; margin: 10px; border-collapse: collapse; margin-left: 20px; margin-right: 20px; border: 1px solid black;">
            <tr>
                <td style="text-align:center; font-weight: bold; border: 1px solid black; width:2%;">No</td>
                <td style="padding:10px; font-weight: bold; border: 1px solid black; width:26%;">Pertanyaan</td>
                <td style="text-align:center; font-weight: bold; border: 1px solid black; width:3%;">P</td>
                <td style="text-align:center; font-weight: bold; border: 1px solid black; width:3%;">K</td>
                <td style="text-align:center; font-weight: bold; border: 1px solid black; width:2%;">No</td>
                <td style="padding:10px; font-weight: bold; border: 1px solid black; width:27%;">Pertanyaan</td>
                <td style="text-align:center; font-weight: bold; border: 1px solid black; width:3%;">P</td>
                <td style="text-align:center; font-weight: bold; border: 1px solid black; width:3%;">K</td>
                <td style="text-align:center; font-weight: bold; border: 1px solid black; width:2%;">No</td>
                <td style="padding:10px; font-weight: bold; border: 1px solid black; width:23%;">Pertanyaan</td>
                <td style="text-align:center; font-weight: bold; border: 1px solid black; width:3%;">P</td>
                <td style="text-align:center; font-weight: bold; border: 1px solid black; width:3%;">K</td>
            </tr>

            <tr>
                <td style="text-align:center; vertical-align: top; border-right: 1px solid black;">1</td>
                <td style="padding-left:10px; vertical-align: top; border-right: 1px solid black;" rowspan="4"><?php echo $DISC1 ?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC1MOST == "1"){echo 'S';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC1LEAST == "1"){echo 'S';}else{echo '-';}?></td>
                <td style="text-align:center; vertical-align: top; border-right: 1px solid black;">9</td>
                <td style="padding-left:10px; vertical-align: top; border-right: 1px solid black;" rowspan="4"><?php echo $DISC9 ?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC9MOST == "1"){echo 'D';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC9LEAST == "1"){echo 'D';}else{echo '-';}?></td>
                <td style="text-align:center; vertical-align: top; border-right: 1px solid black;">17</td>
                <td style="padding-left:10px; vertical-align: top; border-right: 1px solid black;" rowspan="4"><?php echo $DISC17 ?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC17MOST == "1"){echo ' ♦︎ ';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC17LEAST == "1"){echo 'C';}else{echo '-';}?></td>
            </tr>

            <tr>
                <td style="text-align:center; font-weight: bold; vertical-align: top;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC1MOST == "2"){echo 'I';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC1LEAST == "2"){echo 'I';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC9MOST == "2"){echo 'C';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC9LEAST == "2"){echo 'C';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC17MOST == "2"){echo 'D';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC17LEAST == "2"){echo 'D';}else{echo '-';}?></td>
            </tr>

            <tr>
                <td style="text-align:center; font-weight: bold; vertical-align: top;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC1MOST == "3"){echo ' ♦︎ ';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC1LEAST == "3"){echo 'D';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC9MOST == "3"){echo ' ♦︎ ';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC9LEAST == "3"){echo 'I';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC17MOST == "3"){echo 'S';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC17LEAST == "3"){echo 'S';}else{echo '-';}?></td>
            </tr>

            <tr>
                <td style="text-align:center; font-weight: bold; vertical-align: top;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC1MOST == "4"){echo 'C';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC1LEAST == "4"){echo 'C';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC9MOST == "4"){echo ' ♦︎ ';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC9LEAST == "4"){echo 'S';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC17MOST == "4"){echo 'I';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC17LEAST == "4"){echo ' ♦︎ ';}else{echo '-';}?></td>
            </tr>




            <tr>
                <td style="text-align:center; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;">2</td>
                <td style="padding-left:10px; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;" rowspan="4"><?php echo $DISC2 ?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC2MOST == "1"){echo 'S';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC2LEAST == "1"){echo 'S';}else{echo '-';}?></td>
                <td style="text-align:center; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;">10</td>
                <td style="padding-left:10px; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;" rowspan="4"><?php echo $DISC11 ?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC10MOST == "1"){echo 'D';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC10LEAST == "1"){echo 'D';}else{echo '-';}?></td>
                <td style="text-align:center; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;">18</td>
                <td style="padding-left:10px; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;" rowspan="4"><?php echo $DISC18 ?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC18MOST == "1"){echo ' ♦︎ ';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC18LEAST == "1"){echo 'C';}else{echo '-';}?></td>
            </tr>

            <tr>
                <td style="text-align:center; font-weight: bold; vertical-align: top;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC2MOST == "2"){echo 'I';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC2LEAST == "2"){echo 'I';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC10MOST == "2"){echo 'C';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC10LEAST == "2"){echo 'C';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC18MOST == "2"){echo 'D';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC18LEAST == "2"){echo 'D';}else{echo '-';}?></td>
            </tr>

            <tr>
                <td style="text-align:center; font-weight: bold; vertical-align: top;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC2MOST == "3"){echo ' ♦︎ ';}else{echo '-s';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC2LEAST == "3"){echo 'D';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC10MOST == "3"){echo ' ♦︎ ';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC10LEAST == "3"){echo 'I';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC18MOST == "3"){echo 'S';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC18LEAST == "3"){echo 'S';}else{echo '-';}?></td>
            </tr>

            <tr>
                <td style="text-align:center; font-weight: bold; vertical-align: top;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC2MOST == "4"){echo 'C';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC2LEAST == "4"){echo 'C';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC10MOST == "4"){echo ' ♦︎ ';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC10LEAST == "4"){echo 'S';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC18MOST == "4"){echo 'I';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC18LEAST == "4"){echo ' ♦︎ ';}else{echo '-';}?></td>
            </tr>







            <tr>
                <td style="text-align:center; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;">3</td>
                <td style="padding-left:10px; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;" rowspan="4"><?php echo $DISC3 ?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC3MOST == "1"){echo 'S';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC3LEAST == "1"){echo 'S';}else{echo '-';}?></td>
                <td style="text-align:center; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;">11</td>
                <td style="padding-left:10px; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;" rowspan="4"><?php echo $DISC11 ?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC11MOST == "1"){echo 'D';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC11LEAST == "1"){echo 'D';}else{echo '-';}?></td>
                <td style="text-align:center; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;">19</td>
                <td style="padding-left:10px; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;" rowspan="4"><?php echo $DISC19 ?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC19MOST == "1"){echo ' ♦︎ ';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC19LEAST == "1"){echo 'C';}else{echo '-';}?></td>
            </tr>

            <tr>
                <td style="text-align:center; font-weight: bold; vertical-align: top;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC3MOST == "2"){echo 'I';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC3LEAST == "2"){echo 'I';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC11MOST == "2"){echo 'C';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC11LEAST == "2"){echo 'C';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC19MOST == "2"){echo 'D';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC19LEAST == "2"){echo 'D';}else{echo '-';}?></td>
            </tr>

            <tr>
                <td style="text-align:center; font-weight: bold; vertical-align: top;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC3MOST == "3"){echo ' ♦︎ ';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC3LEAST == "3"){echo 'D';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC11MOST == "3"){echo ' ♦︎ ';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC11LEAST == "3"){echo 'I';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC19MOST == "3"){echo 'S';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC19LEAST == "3"){echo 'S';}else{echo '-';}?></td>
            </tr>

            <tr>
                <td style="text-align:center; font-weight: bold; vertical-align: top;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC3MOST == "4"){echo 'C';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC3LEAST == "4"){echo 'C';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC11MOST == "4"){echo ' ♦︎ ';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC11LEAST == "4"){echo 'S';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC19MOST == "4"){echo 'I';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC19LEAST == "4"){echo ' ♦︎ ';}else{echo '-';}?></td>
            </tr>





            <tr>
                <td style="text-align:center; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;">4</td>
                <td style="padding-left:10px; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;" rowspan="4"><?php echo $DISC4 ?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC4MOST == "1"){echo 'S';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC4LEAST == "1"){echo 'S';}else{echo '-';}?></td>
                <td style="text-align:center; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;">12</td>
                <td style="padding-left:10px; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;" rowspan="4"><?php echo $DISC12 ?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC12MOST == "1"){echo 'D';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC12LEAST == "1"){echo 'D';}else{echo '-';}?></td>
                <td style="text-align:center; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;">20</td>
                <td style="padding-left:10px; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;" rowspan="4"><?php echo $DISC20 ?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC20MOST == "1"){echo ' ♦︎ ';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC20LEAST == "1"){echo 'C';}else{echo '-';}?></td>
            </tr>

            <tr>
                <td style="text-align:center; font-weight: bold; vertical-align: top;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC4MOST == "2"){echo 'I';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC4LEAST == "2"){echo 'I';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC12MOST == "2"){echo 'C';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC12LEAST == "2"){echo 'C';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC20MOST == "2"){echo 'D';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC20LEAST == "2"){echo 'D';}else{echo '-';}?></td>
            </tr>

            <tr>
                <td style="text-align:center; font-weight: bold; vertical-align: top;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC4MOST == "3"){echo ' ♦︎ ';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC4LEAST == "3"){echo 'D';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC12MOST == "3"){echo ' ♦︎ ';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC12LEAST == "3"){echo 'I';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC20MOST == "3"){echo 'S';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC20LEAST == "3"){echo 'S';}else{echo '-';}?></td>
            </tr>

            <tr>
                <td style="text-align:center; font-weight: bold; vertical-align: top;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC4MOST == "4"){echo 'C';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC4LEAST == "4"){echo 'C';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC12MOST == "4"){echo ' ♦︎ ';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC12LEAST == "4"){echo 'S';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC20MOST == "4"){echo 'I';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC20LEAST == "4"){echo ' ♦︎ ';}else{echo '-';}?></td>
            </tr>




            <tr>
                <td style="text-align:center; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;">5</td>
                <td style="padding-left:10px; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;" rowspan="4"><?php echo $DISC5 ?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC5MOST == "1"){echo 'S';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC5LEAST == "1"){echo 'S';}else{echo '-';}?></td>
                <td style="text-align:center; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;">13</td>
                <td style="padding-left:10px; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;" rowspan="4"><?php echo $DISC13 ?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC13MOST == "1"){echo 'D';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC13LEAST == "1"){echo 'D';}else{echo '-';}?></td>
                <td style="text-align:center; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;">21</td>
                <td style="padding-left:10px; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;" rowspan="4"><?php echo $DISC21 ?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC21MOST == "1"){echo ' ♦︎ ';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC21LEAST == "1"){echo 'C';}else{echo '-';}?></td>
            </tr>

            <tr>
                <td style="text-align:center; font-weight: bold; vertical-align: top;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC5MOST == "2"){echo 'I';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC5LEAST == "2"){echo 'I';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC13MOST == "2"){echo 'C';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC13LEAST == "2"){echo 'C';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC21MOST == "2"){echo 'D';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC21LEAST == "2"){echo 'D';}else{echo '-';}?></td>
            </tr>

            <tr>
                <td style="text-align:center; font-weight: bold; vertical-align: top;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC5MOST == "3"){echo ' ♦︎ ';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC5LEAST == "3"){echo 'D';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC13MOST == "3"){echo ' ♦︎ ';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC13LEAST == "3"){echo 'I';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC21MOST == "3"){echo 'S';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC21LEAST == "3"){echo 'S';}else{echo '-';}?></td>
            </tr>

            <tr>
                <td style="text-align:center; font-weight: bold; vertical-align: top;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC5MOST == "4"){echo 'C';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC5LEAST == "4"){echo 'C';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC13MOST == "4"){echo ' ♦︎ ';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC13LEAST == "4"){echo 'S';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC21MOST == "4"){echo 'I';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC21LEAST == "4"){echo ' ♦︎ ';}else{echo '-';}?></td>
            </tr>





            <tr>
                <td style="text-align:center; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;">6</td>
                <td style="padding-left:10px; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;" rowspan="4"><?php echo $DISC6 ?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC6MOST == "1"){echo 'S';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC6LEAST == "1"){echo 'S';}else{echo '-';}?></td>
                <td style="text-align:center; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;">14</td>
                <td style="padding-left:10px; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;" rowspan="4"><?php echo $DISC14 ?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC14MOST == "1"){echo 'D';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC14LEAST == "1"){echo 'D';}else{echo '-';}?></td>
                <td style="text-align:center; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;">22</td>
                <td style="padding-left:10px; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;" rowspan="4"><?php echo $DISC22 ?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC22MOST == "1"){echo ' ♦︎ ';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC22LEAST == "1"){echo 'C';}else{echo '-';}?></td>
            </tr>

            <tr>
                <td style="text-align:center; font-weight: bold; vertical-align: top;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC6MOST == "2"){echo 'I';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC6LEAST == "2"){echo 'I';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC14MOST == "2"){echo 'C';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC14LEAST == "2"){echo 'C';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC22MOST == "2"){echo 'D';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC22LEAST == "2"){echo 'D';}else{echo '-';}?></td>
            </tr>

            <tr>
                <td style="text-align:center; font-weight: bold; vertical-align: top;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC6MOST == "3"){echo ' ♦︎ ';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC6LEAST == "3"){echo 'D';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC14MOST == "3"){echo ' ♦︎ ';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC14LEAST == "3"){echo 'I';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC22MOST == "3"){echo 'S';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC22LEAST == "3"){echo 'S';}else{echo '-';}?></td>
            </tr>

            <tr>
                <td style="text-align:center; font-weight: bold; vertical-align: top;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC6MOST == "4"){echo 'C';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC6LEAST == "4"){echo 'C';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC14MOST == "4"){echo ' ♦︎ ';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC14LEAST == "4"){echo 'S';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC22MOST == "4"){echo 'I';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC22LEAST == "4"){echo ' ♦︎ ';}else{echo '-';}?></td>
            </tr>






            <tr>
                <td style="text-align:center; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;">7</td>
                <td style="padding-left:10px; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;" rowspan="4"><?php echo $DISC7 ?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC7MOST == "1"){echo 'S';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC7LEAST == "1"){echo 'S';}else{echo '-';}?></td>
                <td style="text-align:center; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;">15</td>
                <td style="padding-left:10px; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;" rowspan="4"><?php echo $DISC15 ?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC15MOST == "1"){echo 'D';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC15LEAST == "1"){echo 'D';}else{echo '-';}?></td>
                <td style="text-align:center; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;">23</td>
                <td style="padding-left:10px; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;" rowspan="4"><?php echo $DISC23 ?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC23MOST == "1"){echo ' ♦︎ ';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC23LEAST == "1"){echo 'C';}else{echo '-';}?></td>
            </tr>

            <tr>
                <td style="text-align:center; font-weight: bold; vertical-align: top;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC7MOST == "2"){echo 'I';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC7LEAST == "2"){echo 'I';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC15MOST == "2"){echo 'C';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC15LEAST == "2"){echo 'C';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC23MOST == "2"){echo 'D';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC23LEAST == "2"){echo 'D';}else{echo '-';}?></td>
            </tr>

            <tr>
                <td style="text-align:center; font-weight: bold; vertical-align: top;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC7MOST == "3"){echo ' ♦︎ ';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC7LEAST == "3"){echo 'D';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC15MOST == "3"){echo ' ♦︎ ';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC15LEAST == "3"){echo 'I';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC23MOST == "3"){echo 'S';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC23LEAST == "3"){echo 'S';}else{echo '-';}?></td>
            </tr>

            <tr>
                <td style="text-align:center; font-weight: bold; vertical-align: top;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC7MOST == "4"){echo 'C';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC7LEAST == "4"){echo 'C';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC15MOST == "4"){echo ' ♦︎ ';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC15LEAST == "4"){echo 'S';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC23MOST == "4"){echo 'I';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC23LEAST == "4"){echo ' ♦︎ ';}else{echo '-';}?></td>
            </tr>




            <tr>
                <td style="text-align:center; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;">8</td>
                <td style="padding-left:10px; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;" rowspan="4"><?php echo $DISC8 ?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC8MOST == "1"){echo 'S';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC8LEAST == "1"){echo 'S';}else{echo '-';}?></td>
                <td style="text-align:center; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;">16</td>
                <td style="padding-left:10px; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;" rowspan="4"><?php echo $DISC16 ?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC16MOST == "1"){echo 'D';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC16LEAST == "1"){echo 'D';}else{echo '-';}?></td>
                <td style="text-align:center; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;">24</td>
                <td style="padding-left:10px; vertical-align: top; border-right: 1px solid black; border-top: 1px solid black;" rowspan="4"><?php echo $DISC24 ?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC24MOST == "1"){echo ' ♦︎ ';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black; border-top: 1px solid black;"><?php if($DISC24LEAST == "1"){echo 'C';}else{echo '-';}?></td>
            </tr>

            <tr>
                <td style="text-align:center; font-weight: bold; vertical-align: top;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC8MOST == "2"){echo 'I';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC8LEAST == "2"){echo 'I';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC16MOST == "2"){echo 'C';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC16LEAST == "2"){echo 'C';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC24MOST == "2"){echo 'D';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC24LEAST == "2"){echo 'D';}else{echo '-';}?></td>
            </tr>

            <tr>
                <td style="text-align:center; font-weight: bold; vertical-align: top;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC8MOST == "3"){echo ' ♦︎ ';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC8LEAST == "3"){echo 'D';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC16MOST == "3"){echo ' ♦︎ ';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC16LEAST == "3"){echo 'I';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC24MOST == "3"){echo 'S';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC24LEAST == "3"){echo 'S';}else{echo '-';}?></td>
            </tr>

            <tr>
                <td style="text-align:center; font-weight: bold; vertical-align: top;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC8MOST == "4"){echo 'C';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC8LEAST == "4"){echo 'C';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC16MOST == "4"){echo ' ♦︎ ';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC16LEAST == "4"){echo 'S';}else{echo '-';}?></td>
                <td style="text-align:center; font-weight: bold; vertical-align: top; border-right: 1px solid black;">&nbsp;</td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC24MOST == "4"){echo 'I';}else{echo '-';}?></td>
                <td style="text-align:center; border-right: 1px solid black;"><?php if($DISC24LEAST == "4"){echo ' ♦︎ ';}else{echo '-';}?></td>
            </tr>



            


            

            
        </table>
</body>

<div>&nbsp;</div>
    <div class="row no-print">
        <div class="col-xs-12">
          <!-- <a href="invoice-print.html" onclick="myFunction()" class="btn btn-default"><i class="fa fa-print"></i> Print</a> -->
        
          <button type="button" class="btn btn-default" style="margin-right: 5px;" onclick="myFunction()">
            <i class="fa fa-print"></i> Print
          </button>


          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;"  onclick="detail_tes(<?php echo $user_id; ?>)" >
            <i class="fa fa-download"></i> Generate Excel
          </button>

        </div>
    </div>
</section>

<footer style="page-break-after: always; "></footer><!--footer bawah---->
</html>

<!-- <form id="TheForm" action="<?php echo site_url().'/manager/tes_hasil_report_disc_excel'; ?>" method="POST" target="TheWindow">
    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
    <input type="hidden" name="tesuser_tes_id" value="<?php echo $tesuser_tes_id; ?>" />
</form> -->

<script>
    function myFunction() {
        window.print();
    }
    function detail_tes(tesuser_id){
        document.getElementById('TheForm').submit();
        // window.open("<?php echo site_url().'/manager/tes_hasil_report_disc_excel'; ?>/index/"+tesuser_id);
        
    }

</script>

<style>
    .tableWorkDirection{
        border: 1px solid black;
        border-collapse: collapse;
        width: -webkit-fill-available; 
        margin: 10px; border: 1px solid black;
        margin-left: 20px; 
        margin-right: 20px;
    }

    .tableWorkDirectionTop{
        border: 1px solid white;
        border-collapse: collapse;
        width: -webkit-fill-available; 
        margin: 10px; border: 1px solid white;
    }

    .tableWorkDirectionTrTop{
        border: 1px solid white;
        border-collapse: collapse;
        width: -webkit-fill-available; 
        margin: 10px; border: 1px solid white;
    }
    .tableWorkDirectionTdTop{
        border: 1px solid white;
        border-collapse: collapse;
        width: -webkit-fill-available; 
        margin: 10px; border: 1px solid white;
        text-align: center;
    }

    .tableWorkDirectionTr{
        /* border: 1px solid black; */
        border-collapse: collapse;
        width: -webkit-fill-available; 
        margin: 10px; 
        /* border: 1px solid black; */
    }

    .tableWorkDirectionTd{
        border: 1px solid black;
        border-collapse: collapse;
        width: -webkit-fill-available; 
        margin: 10px; border: 1px solid black;
        text-align: center;
    }
    .tableWorkDirectionWidth{
        width: 55pt;
    }

    .tableDISC{
        background-color: black !important; 
        color: white !important; 
        width:10%; 
        Text-align: center;
        height: 25pt;
        font-weight: bold;
        -webkit-print-color-adjust: exact;
    }
    .tableDISC2{
        width:10%; 
        Text-align: center;
        -webkit-print-color-adjust: exact;
    }
    .tableDISC3{
        width:10%; 
        Text-align: center;
        border-left:1px black solid; 
        border-right:1px black solid;
        -webkit-print-color-adjust: exact;
    }
    @page {
        size: A4;
        margin: 0;
    }
    @media print {
        html, body {
            width: 210mm;
            height: 297mm;        
        }
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }
</style>


<!-- Report TIKI -->

<?php

}else{

}
$reportShowTIKI = "No";
$mysqli = new mysqli("localhost","root", "","celestia_dbmtfpsikotes");

if(mysqli_connect_errno()) {
    printf("Connect failed: %s\n",mysql_connect_error());
    exit();
}

$name = '';
$tanggal_tes = '';
$user_ids = '';
$pendidikan_terakhir = '';
$jenis_kelamin = '';
$from = new DateTime();
$to   = new DateTime();
$tanggal_lahir = '';

    // subtest no 1
$sqlt1 = "        
        SELECT  cbt_user.user_firstname as name,
                cbt_tes.tes_nama as nama, 
                cbt_tes_user.tesuser_id as user_id,
                cbt_tes_soal.tessoal_jawaban as soal,
                cbt_tes_user.tesuser_status as tesuser_status,
                cbt_jawaban.jawaban_benar as jawaban, 
                cbt_soal.soal_nomor as nomor_soal, 
                cbt_tes.tes_begin_time as tanggal_tes,
                cbt_tes_soal_jawaban.soaljawaban_order as jawabanTes,
                cbt_user.user_tanggal_lahir as tanggal_lahir,
                cbt_user.user_pendidikan_terakhir as pendidikan_terakhir,
                cbt_user.user_jenis_kelamin as jenis_kelamin,
                cbt_tes_soal.tessoal_nilai as nilai
        FROM    cbt_tes_user, 
                cbt_user, 
                cbt_tes, 
                cbt_tes_soal, 
                cbt_jawaban, 
                cbt_soal,
                cbt_tes_soal_jawaban
        WHERE   cbt_user.user_id = cbt_tes_user.tesuser_user_id 
        AND cbt_tes_soal_jawaban.soaljawaban_tessoal_id = cbt_tes_soal.tessoal_id
        AND cbt_tes_soal_jawaban.soaljawaban_selected = 1
        AND     cbt_tes_user.tesuser_tes_id = cbt_tes.tes_id 
        AND     cbt_tes_soal.tessoal_tesuser_id = cbt_tes_user. tesuser_id 
        AND     cbt_jawaban.jawaban_id = cbt_tes_soal.tessoal_jawaban_id
        AND     cbt_soal.soal_id = cbt_tes_soal.tessoal_soal_id 
        AND     cbt_user.user_id = ".$user_id."
        AND     cbt_tes.tes_id = 131
        AND     cbt_soal.soal_subtest = 1
        ORDER BY cbt_soal.soal_nomor ASC";

        $T1S1 = 0;
        $T1S2 = 0;
        $T1S3 = 0;
        $T1S4 = 0;
        $T1S5 = 0;
        $T1S6 = 0;
        $T1S7 = 0;
        $T1S8 = 0;
        $T1S9 = 0;
        $T1S10 = 0;
        $T1S11 = 0;
        $T1S12 = 0;
        $T1S13 = 0;
        $T1S14 = 0;
        $T1S15 = 0;
        $T1S16 = 0;
        $T1S17 = 0;
        $T1S18 = 0;
        $T1S19 = 0;
        $T1S20 = 0;
        $T1S21 = 0;
        $T1S22 = 0;
        $T1S23 = 0;
        $T1S24 = 0;
        $T1S25 = 0;
        $T1S26 = 0;
        $T1S27 = 0;
        $T1S28 = 0;
        $T1S29 = 0;
        $T1S30 = 0;
        $T1S31 = 0;
        $T1S32 = 0;
        $T1S33 = 0;
        $T1S34 = 0;
        $T1S35 = 0;
        $T1S36 = 0;
        $T1S37 = 0;
        $T1S38 = 0;
        $T1S39 = 0;
        $T1S40 = 0;

        $TotalT1 = 0;
    if($result = mysqli_query($mysqli, $sqlt1)){
        while($row = mysqli_fetch_array($result)){
            if($row['nomor_soal'] == '1'){
                $T1S1 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '2'){
                $T1S2 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '3'){
                $T1S3 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '4'){
                $T1S4 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '5'){
                $T1S5 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '6'){
                $T1S6 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '7'){
                $T1S7 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '8'){
                $T1S8 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '9'){
                $T1S9 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '10'){
                $T1S10 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '11'){
                $T1S11 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '12'){
                $T1S12 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '13'){
                $T1S13 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '14'){
                $T1S14 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '15'){
                $T1S15 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '16'){
                $T1S16 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '17'){
                $T1S17 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '18'){
                $T1S18 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '19'){
                $T1S19 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '20'){
                $T1S20 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '21'){
                $T1S21 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '22'){
                $T1S22 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '23'){
                $T1S23 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '24'){
                $T1S24 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '25'){
                $T1S25 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '26'){
                $T1S26 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '27'){
                $T1S27 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '28'){
                $T1S28 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '29'){
                $T1S29 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '30'){
                $T1S30 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '31'){
                $T1S31 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '32'){
                $T1S32 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '33'){
                $T1S33 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '34'){
                $T1S34 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '35'){
                $T1S35 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '36'){
                $T1S36 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '37'){
                $T1S37 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '38'){
                $T1S38 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '39'){
                $T1S39 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }else if($row['nomor_soal'] == '40'){
                $T1S40 = $row['jawabanTes'];
                if($row['nilai'] == '1.00'){
                    $TotalT1 = $TotalT1 + 1;
                }
            }
            $name = $row['name'];
            $tanggal_tes = $row['tanggal_tes'];
            $user_ids = $user_id;
            $tanggal_lahir = $row['tanggal_lahir'];
            $from = new DateTime($tanggal_lahir);
            $to   = new DateTime('today');
            $pendidikan_terakhir = $row['pendidikan_terakhir'];
            $jenis_kelamin = $row['jenis_kelamin'];
            $status = $row['tesuser_status'];
            $reportShowTIKI = "Yes";
        }
    }else{
        $reportShowTIKI = "No";
    }

    // subtest no 2

    $sqlt2 = "        
                SELECT  cbt_user.user_firstname as name,
                        cbt_tes.tes_nama as nama, 
                        cbt_tes_user.tesuser_id as user_id,
                        cbt_tes_soal.tessoal_jawaban as soal,
                        cbt_soal.soal_nomor as nomor_soal, 
                        cbt_tes.tes_begin_time as tanggal_tes,
                        cbt_soal.soal_subtest,
                        cbt_tes_soal_jawaban.soaljawaban_selected,
                        cbt_tes_soal_jawaban.soaljawaban_order,
                        cbt_tes_soal_jawaban.soaljawaban_jawaban_id,
                        cbt_jawaban.jawaban_benar
                FROM    cbt_tes_user, 
                        cbt_user, 
                        cbt_tes, 
                        cbt_tes_soal, 
                        cbt_soal,
                        cbt_tes_soal_jawaban,
                        cbt_jawaban
                WHERE   cbt_user.user_id = cbt_tes_user.tesuser_user_id 
                AND     cbt_tes_user.tesuser_tes_id = cbt_tes.tes_id 
                AND     cbt_tes_soal.tessoal_tesuser_id = cbt_tes_user.tesuser_id 
                AND     cbt_soal.soal_id = cbt_tes_soal.tessoal_soal_id 
                AND     cbt_user.user_id = ".$user_id."
                AND     cbt_tes.tes_id = 131
                AND     cbt_soal.soal_subtest = 2
                AND     cbt_tes_soal_jawaban.soaljawaban_selected = 1
                AND     cbt_tes_soal_jawaban.soaljawaban_tessoal_id = cbt_tes_soal.tessoal_id
                AND     cbt_jawaban.jawaban_id = cbt_tes_soal_jawaban.soaljawaban_jawaban_id
                ORDER BY cbt_soal.soal_nomor ASC";

        $T2S1 = 0;

        $T2S1a = 0;
        $T2S1b = 0;
        $T2S1c = 0;
        $T2S1d = 0;
        $T2S1e = 0;
        $T2S1f = 0;

        $T2S2 = 0;

        $T2S2a = 0;
        $T2S2b = 0;
        $T2S2c = 0;
        $T2S2d = 0;
        $T2S2e = 0;
        $T2S2f = 0;
        

        $T2S3 = 0;
        
        $T2S3a = 0;
        $T2S3b = 0;
        $T2S3c = 0;
        $T2S3d = 0;
        $T2S3e = 0;
        $T2S3f = 0;
        
        $T2S4 = 0;

        $T2S4a = 0;
        $T2S4b = 0;
        $T2S4c = 0;
        $T2S4d = 0;
        $T2S4e = 0;
        $T2S4f = 0;

        $T2S5 = 0;

        $T2S5a = 0;
        $T2S5b = 0;
        $T2S5c = 0;
        $T2S5d = 0;
        $T2S5e = 0;
        $T2S5f = 0;

        $T2S6 = 0;

        $T2S6a = 0;
        $T2S6b = 0;
        $T2S6c = 0;
        $T2S6d = 0;
        $T2S6e = 0;
        $T2S6f = 0;

        $T2S7 = 0;

        $T2S7a = 0;
        $T2S7b = 0;
        $T2S7c = 0;
        $T2S7d = 0;
        $T2S7e = 0;
        $T2S7f = 0;

        $T2S8 = 0;

        $T2S8a = 0;
        $T2S8b = 0;
        $T2S8c = 0;
        $T2S8d = 0;
        $T2S8e = 0;
        $T2S8f = 0;

        $T2S9 = 0;

        $T2S9a = 0;
        $T2S9b = 0;
        $T2S9c = 0;
        $T2S9d = 0;
        $T2S9e = 0;
        $T2S9f = 0;

        $T2S10 = 0;

        $T2S10a = 0;
        $T2S10b = 0;
        $T2S10c = 0;
        $T2S10d = 0;
        $T2S10e = 0;
        $T2S10f = 0;

        $T2S11 = 0;

        $T2S11a = 0;
        $T2S11b = 0;
        $T2S11c = 0;
        $T2S11d = 0;
        $T2S11e = 0;
        $T2S11f = 0;

        $T2S12 = 0;

        $T2S12a = 0;
        $T2S12b = 0;
        $T2S12c = 0;
        $T2S12d = 0;
        $T2S12e = 0;
        $T2S12f = 0;

        $T2S13 = 0;

        $T2S13a = 0;
        $T2S13b = 0;
        $T2S13c = 0;
        $T2S13d = 0;
        $T2S13e = 0;
        $T2S13f = 0;

        $T2S14 = 0;

        $T2S14a = 0;
        $T2S14b = 0;
        $T2S14c = 0;
        $T2S14d = 0;
        $T2S14e = 0;
        $T2S14f = 0;

        $T2S15 = 0;

        $T2S15a = 0;
        $T2S15b = 0;
        $T2S15c = 0;
        $T2S15d = 0;
        $T2S15e = 0;
        $T2S15f = 0;

        $T2S16 = 0;

        $T2S16a = 0;
        $T2S16b = 0;
        $T2S16c = 0;
        $T2S16d = 0;
        $T2S16e = 0;
        $T2S16f = 0;

        $T2S17 = 0;

        $T2S17a = 0;
        $T2S17b = 0;
        $T2S17c = 0;
        $T2S17d = 0;
        $T2S17e = 0;
        $T2S17f = 0;

        $T2S18 = 0;

        $T2S18a = 0;
        $T2S18b = 0;
        $T2S18c = 0;
        $T2S18d = 0;
        $T2S18e = 0;
        $T2S18f = 0;

        $T2S19 = 0;

        $T2S19a = 0;
        $T2S19b = 0;
        $T2S19c = 0;
        $T2S19d = 0;
        $T2S19e = 0;
        $T2S19f = 0;

        $T2S20 = 0;

        $T2S20a = 0;
        $T2S20b = 0;
        $T2S20c = 0;
        $T2S20d = 0;
        $T2S20e = 0;
        $T2S20f = 0;

        $T2S21 = 0;

        $T2S21a = 0;
        $T2S21b = 0;
        $T2S21c = 0;
        $T2S21d = 0;
        $T2S21e = 0;
        $T2S21f = 0;

        $T2S22 = 0;

        $T2S22a = 0;
        $T2S22b = 0;
        $T2S22c = 0;
        $T2S22d = 0;
        $T2S22e = 0;
        $T2S22f = 0;

        $T2S23 = 0;

        $T2S23a = 0;
        $T2S23b = 0;
        $T2S23c = 0;
        $T2S23d = 0;
        $T2S23e = 0;
        $T2S23f = 0;

        $T2S24 = 0;

        $T2S24a = 0;
        $T2S24b = 0;
        $T2S24c = 0;
        $T2S24d = 0;
        $T2S24e = 0;
        $T2S24f = 0;

        $T2S25 = 0;

        $T2S25a = 0;
        $T2S25b = 0;
        $T2S25c = 0;
        $T2S25d = 0;
        $T2S25e = 0;
        $T2S25f = 0;

        $T2S26 = 0;

        $T2S26a = 0;
        $T2S26b = 0;
        $T2S26c = 0;
        $T2S26d = 0;
        $T2S26e = 0;
        $T2S26f = 0;


        $TotalT2 = 0;

        if($result = mysqli_query($mysqli, $sqlt2)){
            while($row = mysqli_fetch_array($result)){
                // echo $row['jawaban'];
                if($row['nomor_soal'] == 1){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T2S1a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T2S1b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T2S1c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T2S1d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T2S1e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T2S1f = 1;
                    }
                }else if($row['nomor_soal'] == '2'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T2S2a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T2S2b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T2S2c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T2S2d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T2S2e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T2S2f = 1;
                    }
                }else if($row['nomor_soal'] == '3'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T2S3a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T2S3b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T2S3c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T2S3d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T2S3e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T2S3f = 1;
                    }
                }else if($row['nomor_soal'] == '4'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T2S4a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T2S4b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T2S4c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T2S4d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T2S4e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T2S4f = 1;
                    }
                }else if($row['nomor_soal'] == '5'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T2S5a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T2S5b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T2S5c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T2S5d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T2S5e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T2S5f = 1;
                    }
                }else if($row['nomor_soal'] == '6'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T2S6a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T2S6b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T2S6c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T2S6d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T2S6e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T2S6f = 1;
                    }
                }else if($row['nomor_soal'] == '7'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T2S7a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T2S7b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T2S7c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T2S7d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T2S7e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T2S7f = 1;
                    }
                }else if($row['nomor_soal'] == '8'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T2S8a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T2S8b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T2S8c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T2S8d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T2S8e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T2S8f = 1;
                    }
                }else if($row['nomor_soal'] == '9'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T2S9a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T2S9b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T2S9c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T2S9d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T2S9e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T2S9f = 1;
                    }
                }else if($row['nomor_soal'] == '10'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T2S10a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T2S10b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T2S10c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T2S10d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T2S10e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T2S10f = 1;
                    }
                }else if($row['nomor_soal'] == '11'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T2S11a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T2S11b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T2S11c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T2S11d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T2S11e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T2S11f = 1;
                    }
                }else if($row['nomor_soal'] == '12'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T2S12a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T2S12b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T2S12c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T2S12d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T2S12e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T2S12f = 1;
                    }
                }else if($row['nomor_soal'] == '13'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T2S13a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T2S13b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T2S13c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T2S13d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T2S13e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T2S13f = 1;
                    }
                }else if($row['nomor_soal'] == '14'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T2S14a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T2S14b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T2S14c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T2S14d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T2S14e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T2S14f = 1;
                    }
                }else if($row['nomor_soal'] == '15'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T2S15a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T2S15b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T2S15c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T2S15d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T2S15e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T2S15f = 1;
                    }
                }else if($row['nomor_soal'] == '16'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T2S16a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T2S16b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T2S16c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T2S16d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T2S16e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T2S16f = 1;
                    }
                }else if($row['nomor_soal'] == '17'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T2S17a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T2S17b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T2S17c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T2S17d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T2S17e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T2S17f = 1;
                    }
                }else if($row['nomor_soal'] == '18'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T2S18a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T2S18b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T2S18c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T2S18d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T2S18e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T2S18f = 1;
                    }
                }else if($row['nomor_soal'] == '19'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T2S19a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T2S19b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T2S19c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T2S19d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T2S19e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T2S19f = 1;
                    }
                }else if($row['nomor_soal'] == '20'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T2S20a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T2S20b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T2S20c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T2S20d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T2S20e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T2S20f = 1;
                    }
                }else if($row['nomor_soal'] == '21'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T2S21a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T2S21b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T2S21c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T2S21d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T2S21e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T2S21f = 1;
                    }
                }else if($row['nomor_soal'] == '22'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T2S22a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T2S22b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T2S22c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T2S22d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T2S22e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T2S22f = 1;
                    }
                }else if($row['nomor_soal'] == '23'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T2S23a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T2S23b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T2S23c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T2S23d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T2S23e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T2S23f = 1;
                    }
                }else if($row['nomor_soal'] == '24'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T2S24a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T2S24b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T2S24c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T2S24d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T2S24e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T2S24f = 1;
                    }
                }else if($row['nomor_soal'] == '25'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T2S25a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T2S25b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T2S25c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T2S25d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T2S25e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T2S25f = 1;
                    }
                }else if($row['nomor_soal'] == '26'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T2S26a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T2S26b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T2S26c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T2S26d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T2S26e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T2S26f = 1;
                    }
                }
    
            }
        }

        $T2S1aJ = 0;
        $T2S1bJ = 0;
        $T2S1cJ = 0;
        $T2S1dJ = 0;
        $T2S1eJ = 0;
        $T2S1fJ = 0;

        $T2S2aJ = 0;
        $T2S2bJ = 0;
        $T2S2cJ = 0;
        $T2S2dJ = 0;
        $T2S2eJ = 0;
        $T2S2fJ = 0;
        
        $T2S3aJ = 0;
        $T2S3bJ = 0;
        $T2S3cJ = 0;
        $T2S3dJ = 0;
        $T2S3eJ = 0;
        $T2S3fJ = 0;

        $T2S4aJ = 0;
        $T2S4bJ = 0;
        $T2S4cJ = 0;
        $T2S4dJ = 0;
        $T2S4eJ = 0;
        $T2S4fJ = 0;

        $T2S5aJ = 0;
        $T2S5bJ = 0;
        $T2S5cJ = 0;
        $T2S5dJ = 0;
        $T2S5eJ = 0;
        $T2S5fJ = 0;

        $T2S6aJ = 0;
        $T2S6bJ = 0;
        $T2S6cJ = 0;
        $T2S6dJ = 0;
        $T2S6eJ = 0;
        $T2S6fJ = 0;

        $T2S7aJ = 0;
        $T2S7bJ = 0;
        $T2S7cJ = 0;
        $T2S7dJ = 0;
        $T2S7eJ = 0;
        $T2S7fJ = 0;

        $T2S8aJ = 0;
        $T2S8bJ = 0;
        $T2S8cJ = 0;
        $T2S8dJ = 0;
        $T2S8eJ = 0;
        $T2S8fJ = 0;

        $T2S9aJ = 0;
        $T2S9bJ = 0;
        $T2S9cJ = 0;
        $T2S9dJ = 0;
        $T2S9eJ = 0;
        $T2S9fJ = 0;

        $T2S10aJ = 0;
        $T2S10bJ = 0;
        $T2S10cJ = 0;
        $T2S10dJ = 0;
        $T2S10eJ = 0;
        $T2S10fJ = 0;

        $T2S11aJ = 0;
        $T2S11bJ = 0;
        $T2S11cJ = 0;
        $T2S11dJ = 0;
        $T2S11eJ = 0;
        $T2S11fJ = 0;

        $T2S12aJ = 0;
        $T2S12bJ = 0;
        $T2S12cJ = 0;
        $T2S12dJ = 0;
        $T2S12eJ = 0;
        $T2S12fJ = 0;

        $T2S13aJ = 0;
        $T2S13bJ = 0;
        $T2S13cJ = 0;
        $T2S13dJ = 0;
        $T2S13eJ = 0;
        $T2S13fJ = 0;

        $T2S14aJ = 0;
        $T2S14bJ = 0;
        $T2S14cJ = 0;
        $T2S14dJ = 0;
        $T2S14eJ = 0;
        $T2S14fJ = 0;

        $T2S15aJ = 0;
        $T2S15bJ = 0;
        $T2S15cJ = 0;
        $T2S15dJ = 0;
        $T2S15eJ = 0;
        $T2S15fJ = 0;

        $T2S16aJ = 0;
        $T2S16bJ = 0;
        $T2S16cJ = 0;
        $T2S16dJ = 0;
        $T2S16eJ = 0;
        $T2S16fJ = 0;

        $T2S17aJ = 0;
        $T2S17bJ = 0;
        $T2S17cJ = 0;
        $T2S17dJ = 0;
        $T2S17eJ = 0;
        $T2S17fJ = 0;

        $T2S18aJ = 0;
        $T2S18bJ = 0;
        $T2S18cJ = 0;
        $T2S18dJ = 0;
        $T2S18eJ = 0;
        $T2S18fJ = 0;

        $T2S19aJ = 0;
        $T2S19bJ = 0;
        $T2S19cJ = 0;
        $T2S19dJ = 0;
        $T2S19eJ = 0;
        $T2S19fJ = 0;

        $T2S20aJ = 0;
        $T2S20bJ = 0;
        $T2S20cJ = 0;
        $T2S20dJ = 0;
        $T2S20eJ = 0;
        $T2S20fJ = 0;

        $T2S21aJ = 0;
        $T2S21bJ = 0;
        $T2S21cJ = 0;
        $T2S21dJ = 0;
        $T2S21eJ = 0;
        $T2S21fJ = 0;

        $T2S22aJ = 0;
        $T2S22bJ = 0;
        $T2S22cJ = 0;
        $T2S22dJ = 0;
        $T2S22eJ = 0;
        $T2S22fJ = 0;

        $T2S23aJ = 0;
        $T2S23bJ = 0;
        $T2S23cJ = 0;
        $T2S23dJ = 0;
        $T2S23eJ = 0;
        $T2S23fJ = 0;

        $T2S24aJ = 0;
        $T2S24bJ = 0;
        $T2S24cJ = 0;
        $T2S24dJ = 0;
        $T2S24eJ = 0;
        $T2S24fJ = 0;

        $T2S25aJ = 0;
        $T2S25bJ = 0;
        $T2S25cJ = 0;
        $T2S25dJ = 0;
        $T2S25eJ = 0;
        $T2S25fJ = 0;

        $T2S26aJ = 0;
        $T2S26bJ = 0;
        $T2S26cJ = 0;
        $T2S26dJ = 0;
        $T2S26eJ = 0;
        $T2S26fJ = 0;


        if($result = mysqli_query($mysqli, $sqlt2)){
            while($row = mysqli_fetch_array($result)){
                // echo $row['jawaban'];
                if($row['nomor_soal'] == 1){
                    if($row['soaljawaban_order'] == 1){
                        $T2S1aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T2S1bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T2S1cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T2S1dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T2S1eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T2S1fJ = 1;
                    }
                }else if($row['nomor_soal'] == '2'){
                    if($row['soaljawaban_order'] == 1){
                        $T2S2aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T2S2bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T2S2cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T2S2dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T2S2eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T2S2fJ = 1;
                    }
                }else if($row['nomor_soal'] == '3'){
                    if($row['soaljawaban_order'] == 1){
                        $T2S3aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T2S3bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T2S3cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T2S3dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T2S3eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T2S3fJ = 1;
                    }
                }else if($row['nomor_soal'] == '4'){
                    if($row['soaljawaban_order'] == 1){
                        $T2S4aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T2S4bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T2S4cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T2S4dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T2S4eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T2S4fJ = 1;
                    }
                }else if($row['nomor_soal'] == '5'){
                    if($row['soaljawaban_order'] == 1){
                        $T2S5aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T2S5bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T2S5cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T2S5dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T2S5eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T2S5fJ = 1;
                    }
                }else if($row['nomor_soal'] == '6'){
                    if($row['soaljawaban_order'] == 1){
                        $T2S6aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T2S6bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T2S6cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T2S6dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T2S6eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T2S6fJ = 1;
                    }
                }else if($row['nomor_soal'] == '7'){
                    if($row['soaljawaban_order'] == 1){
                        $T2S7aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T2S7bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T2S7cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T2S7dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T2S7eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T2S7fJ = 1;
                    }
                }else if($row['nomor_soal'] == '8'){
                    if($row['soaljawaban_order'] == 1){
                        $T2S8aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T2S8bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T2S8cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T2S8dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T2S8eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T2S8fJ = 1;
                    }
                }else if($row['nomor_soal'] == '9'){
                    if($row['soaljawaban_order'] == 1){
                        $T2S9aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T2S9bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T2S9cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T2S9dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T2S9eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T2S9fJ = 1;
                    }
                }else if($row['nomor_soal'] == '10'){
                    if($row['soaljawaban_order'] == 1){
                        $T2S10aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T2S10bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T2S10cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T2S10dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T2S10eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T2S10fJ = 1;
                    }
                }else if($row['nomor_soal'] == '11'){
                    if($row['soaljawaban_order'] == 1){
                        $T2S11aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T2S11bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T2S11cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T2S11dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T2S11eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T2S11fJ = 1;
                    }
                }else if($row['nomor_soal'] == '12'){
                    if($row['soaljawaban_order'] == 1){
                        $T2S12aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T2S12bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T2S12cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T2S12dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T2S12eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T2S12fJ = 1;
                    }
                }else if($row['nomor_soal'] == '13'){
                    if($row['soaljawaban_order'] == 1){
                        $T2S13aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T2S13bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T2S13cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T2S13dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T2S13eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T2S13fJ = 1;
                    }
                }else if($row['nomor_soal'] == '14'){
                    if($row['soaljawaban_order'] == 1){
                        $T2S14aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T2S14bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T2S14cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T2S14dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T2S14eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T2S14fJ = 1;
                    }
                }else if($row['nomor_soal'] == '15'){
                    if($row['soaljawaban_order'] == 1){
                        $T2S15aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T2S15bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T2S15cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T2S15dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T2S15eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T2S15fJ = 1;
                    }
                }else if($row['nomor_soal'] == '16'){
                    if($row['soaljawaban_order'] == 1){
                        $T2S16aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T2S16bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T2S16cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T2S16dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T2S16eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T2S16fJ = 1;
                    }
                }else if($row['nomor_soal'] == '17'){
                    if($row['soaljawaban_order'] == 1){
                        $T2S17aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T2S17bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T2S17cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T2S17dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T2S17eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T2S17fJ = 1;
                    }
                }else if($row['nomor_soal'] == '18'){
                    if($row['soaljawaban_order'] == 1){
                        $T2S18aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T2S18bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T2S18cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T2S18dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T2S18eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T2S18fJ = 1;
                    }
                }else if($row['nomor_soal'] == '19'){
                    if($row['soaljawaban_order'] == 1){
                        $T2S19aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T2S19bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T2S19cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T2S19dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T2S19eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T2S19fJ = 1;
                    }
                }else if($row['nomor_soal'] == '20'){
                    if($row['soaljawaban_order'] == 1){
                        $T2S20aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T2S20bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T2S20cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T2S20dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T2S20eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T2S20fJ = 1;
                    }
                }else if($row['nomor_soal'] == '21'){
                    if($row['soaljawaban_order'] == 1){
                        $T2S21aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T2S21bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T2S21cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T2S21dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T2S21eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T2S21fJ = 1;
                    }
                }else if($row['nomor_soal'] == '22'){
                    if($row['soaljawaban_order'] == 1){
                        $T2S22aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T2S22bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T2S22cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T2S22dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T2S22eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T2S22fJ = 1;
                    }
                }else if($row['nomor_soal'] == '23'){
                    if($row['soaljawaban_order'] == 1){
                        $T2S23aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T2S23bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T2S23cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T2S23dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T2S23eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T2S23fJ = 1;
                    }
                }else if($row['nomor_soal'] == '24'){
                    if($row['soaljawaban_order'] == 1){
                        $T2S24aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T2S24bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T2S24cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T2S24dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T2S24eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T2S24fJ = 1;
                    }
                }else if($row['nomor_soal'] == '25'){
                    if($row['soaljawaban_order'] == 1){
                        $T2S25aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T2S25bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T2S25cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T2S25dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T2S25eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T2S25fJ = 1;
                    }
                }else if($row['nomor_soal'] == '26'){
                    if($row['soaljawaban_order'] == 1){
                        $T2S26aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T2S26bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T2S26cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T2S26dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T2S26eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T2S26fJ = 1;
                    }
                }
    
            }
        }

        $T2S1T = $T2S1a+$T2S1b+$T2S1c+$T2S1d+$T2S1e+$T2S1f;
        $T2S2T = $T2S2a+$T2S2b+$T2S2c+$T2S2d+$T2S2e+$T2S2f;
        $T2S3T = $T2S3a+$T2S3b+$T2S3c+$T2S3d+$T2S3e+$T2S3f;
        $T2S4T = $T2S4a+$T2S4b+$T2S4c+$T2S4d+$T2S4e+$T2S4f;
        $T2S5T = $T2S5a+$T2S5b+$T2S5c+$T2S5d+$T2S5e+$T2S5f;
        $T2S6T = $T2S6a+$T2S6b+$T2S6c+$T2S6d+$T2S6e+$T2S6f;
        $T2S7T = $T2S7a+$T2S7b+$T2S7c+$T2S7d+$T2S7e+$T2S7f;
        $T2S8T = $T2S8a+$T2S8b+$T2S8c+$T2S8d+$T2S8e+$T2S8f;
        $T2S9T = $T2S9a+$T2S9b+$T2S9c+$T2S9d+$T2S9e+$T2S9f;
        $T2S10T = $T2S10a+$T2S10b+$T2S10c+$T2S10d+$T2S10e+$T2S10f;

        $T2S11T = $T2S11a+$T2S11b+$T2S11c+$T2S11d+$T2S11e+$T2S11f;
        $T2S12T = $T2S12a+$T2S12b+$T2S12c+$T2S12d+$T2S12e+$T2S12f;
        $T2S13T = $T2S13a+$T2S13b+$T2S13c+$T2S13d+$T2S13e+$T2S13f;
        $T2S14T = $T2S14a+$T2S14b+$T2S14c+$T2S14d+$T2S14e+$T2S14f;
        $T2S15T = $T2S15a+$T2S15b+$T2S15c+$T2S15d+$T2S15e+$T2S15f;
        $T2S16T = $T2S16a+$T2S16b+$T2S16c+$T2S16d+$T2S16e+$T2S16f;
        $T2S17T = $T2S17a+$T2S17b+$T2S17c+$T2S17d+$T2S17e+$T2S17f;
        $T2S18T = $T2S18a+$T2S18b+$T2S18c+$T2S18d+$T2S18e+$T2S18f;
        $T2S19T = $T2S19a+$T2S19b+$T2S19c+$T2S19d+$T2S19e+$T2S19f;
        $T2S20T = $T2S20a+$T2S20b+$T2S20c+$T2S20d+$T2S20e+$T2S20f;

        $T2S21T = $T2S21a+$T2S21b+$T2S21c+$T2S21d+$T2S21e+$T2S21f;
        $T2S22T = $T2S22a+$T2S22b+$T2S22c+$T2S22d+$T2S22e+$T2S22f;
        $T2S23T = $T2S23a+$T2S23b+$T2S23c+$T2S23d+$T2S23e+$T2S23f;
        $T2S24T = $T2S24a+$T2S24b+$T2S24c+$T2S24d+$T2S24e+$T2S24f;
        $T2S25T = $T2S25a+$T2S25b+$T2S25c+$T2S25d+$T2S25e+$T2S25f;
        $T2S26T = $T2S26a+$T2S26b+$T2S26c+$T2S26d+$T2S26e+$T2S26f;

            $T2S1ALL = 0;
            $T2S2ALL = 0;
            $T2S2ALL = 0;
            $T2S3ALL = 0;
            $T2S4ALL = 0;
            $T2S5ALL = 0;
            $T2S6ALL = 0;
            $T2S7ALL = 0;
            $T2S8ALL = 0;
            $T2S9ALL = 0;
            $T2S10ALL = 0;
            $T2S11ALL = 0;
            $T2S12ALL = 0;
            $T2S13ALL = 0;
            $T2S14ALL = 0;
            $T2S15ALL = 0;
            $T2S16ALL = 0;
            $T2S17ALL = 0;
            $T2S18ALL = 0;
            $T2S19ALL = 0;
            $T2S20ALL = 0;
            $T2S21ALL = 0;
            $T2S22ALL = 0;
            $T2S23ALL = 0;
            $T2S24ALL = 0;
            $T2S25ALL = 0;
            $T2S26ALL = 0;



        if($T2S1T == 2){
            $T2S1ALL = 1;
        }
        if($T2S2T == 2){
            $T2S2ALL = 1;
        }
        if($T2S2T == 2){
            $T2S2ALL = 1;
        }
        if($T2S3T == 2){
            $T2S3ALL = 1;
        }
        if($T2S4T == 2){
            $T2S4ALL = 1;
        }
        if($T2S5T == 2){
            $T2S5ALL = 1;
        }
        if($T2S6T == 2){
            $T2S6ALL = 1;
        }
        if($T2S7T == 2){
            $T2S7ALL = 1;
        }
        if($T2S8T == 2){
            $T2S8ALL = 1;
        }
        if($T2S9T == 2){
            $T2S9ALL = 1;
        }
        if($T2S10T == 2){
            $T2S10ALL = 1;
        }
        if($T2S11T == 2){
            $T2S11ALL = 1;
        }
        if($T2S12T == 2){
            $T2S12ALL = 1;
        }
        if($T2S13T == 2){
            $T2S13ALL = 1;
        }
        if($T2S14T == 2){
            $T2S14ALL = 1;
        }
        if($T2S15T == 2){
            $T2S15ALL = 1;
        }
        if($T2S16T == 2){
            $T2S16ALL = 1;
        }
        if($T2S17T == 2){
            $T2S17ALL = 1;
        }
        if($T2S18T == 2){
            $T2S18ALL = 1;
        }
        if($T2S19T == 2){
            $T2S19ALL = 1;
        }
        if($T2S20T == 2){
            $T2S20ALL = 1;
        }
        if($T2S21T == 2){
            $T2S21ALL = 1;
        }
        if($T2S22T == 2){
            $T2S22ALL = 1;
        }
        if($T2S23T == 2){
            $T2S23ALL = 1;
        }
        if($T2S24T == 2){
            $T2S24ALL = 1;
        }
        if($T2S25T == 2){
            $T2S25ALL = 1;
        }
        if($T2S26T == 2){
            $T2S26ALL = 1;
        }
    
        $T2SALL = $T2S1ALL + $T2S2ALL + $T2S3ALL + $T2S4ALL + $T2S5ALL + $T2S6ALL + $T2S7ALL + $T2S8ALL + $T2S9ALL + $T2S10ALL + $T2S11ALL + $T2S12ALL + $T2S13ALL + $T2S14ALL + $T2S15ALL + $T2S16ALL + $T2S17ALL + $T2S18ALL + $T2S19ALL + $T2S20ALL + $T2S21ALL + $T2S22ALL + $T2S23ALL + $T2S24ALL + $T2S25ALL + $T2S26ALL;


        // subtest no 3

    $sqlt3 = "        
                SELECT  cbt_user.user_firstname as name,
                        cbt_tes.tes_nama as nama, 
                        cbt_tes_user.tesuser_id as user_id,
                        cbt_tes_soal.tessoal_jawaban as soal,
                        cbt_soal.soal_nomor as nomor_soal, 
                        cbt_tes.tes_begin_time as tanggal_tes,
                        cbt_soal.soal_subtest,
                        cbt_tes_soal_jawaban.soaljawaban_selected,
                        cbt_tes_soal_jawaban.soaljawaban_order,
                        cbt_tes_soal_jawaban.soaljawaban_jawaban_id,
                        cbt_jawaban.jawaban_benar
                FROM    cbt_tes_user, 
                        cbt_user, 
                        cbt_tes, 
                        cbt_tes_soal, 
                        cbt_soal,
                        cbt_tes_soal_jawaban,
                        cbt_jawaban
                WHERE   cbt_user.user_id = cbt_tes_user.tesuser_user_id 
                AND     cbt_tes_user.tesuser_tes_id = cbt_tes.tes_id 
                AND     cbt_tes_soal.tessoal_tesuser_id = cbt_tes_user.tesuser_id 
                AND     cbt_soal.soal_id = cbt_tes_soal.tessoal_soal_id 
                AND     cbt_user.user_id = ".$user_id."
                AND     cbt_tes.tes_id = 131
                AND     cbt_soal.soal_subtest = 3
                AND     cbt_tes_soal_jawaban.soaljawaban_selected = 1
                AND     cbt_tes_soal_jawaban.soaljawaban_tessoal_id = cbt_tes_soal.tessoal_id
                AND     cbt_jawaban.jawaban_id = cbt_tes_soal_jawaban.soaljawaban_jawaban_id
                ORDER BY cbt_soal.soal_nomor ASC";
    $T3S1 = 0;

    $T3S1a = 0;
    $T3S1b = 0;
    $T3S1c = 0;
    $T3S1d = 0;

    $T3S2 = 0;

    $T3S2a = 0;
    $T3S2b = 0;
    $T3S2c = 0;
    $T3S2d = 0;


    $T3S3 = 0;

    $T3S3a = 0;
    $T3S3b = 0;
    $T3S3c = 0;
    $T3S3d = 0;


    $T3S4 = 0;

    $T3S4a = 0;
    $T3S4b = 0;
    $T3S4c = 0;
    $T3S4d = 0;

    $T3S5 = 0;

    $T3S5a = 0;
    $T3S5b = 0;
    $T3S5c = 0;
    $T3S5d = 0;

    $T3S6 = 0;

    $T3S6a = 0;
    $T3S6b = 0;
    $T3S6c = 0;
    $T3S6d = 0;

    $T3S7 = 0;

    $T3S7a = 0;
    $T3S7b = 0;
    $T3S7c = 0;
    $T3S7d = 0;

    $T3S8 = 0;

    $T3S8a = 0;
    $T3S8b = 0;
    $T3S8c = 0;
    $T3S8d = 0;

    $T3S9 = 0;

    $T3S9a = 0;
    $T3S9b = 0;
    $T3S9c = 0;
    $T3S9d = 0;

    $T3S10 = 0;

    $T3S10a = 0;
    $T3S10b = 0;
    $T3S10c = 0;
    $T3S10d = 0;

    $T3S11 = 0;

    $T3S11a = 0;
    $T3S11b = 0;
    $T3S11c = 0;
    $T3S11d = 0;

    $T3S12 = 0;

    $T3S12a = 0;
    $T3S12b = 0;
    $T3S12c = 0;
    $T3S12d = 0;

    $T3S13 = 0;

    $T3S13a = 0;
    $T3S13b = 0;
    $T3S13c = 0;
    $T3S13d = 0;

    $T3S14 = 0;

    $T3S14a = 0;
    $T3S14b = 0;
    $T3S14c = 0;
    $T3S14d = 0;

    $T3S15 = 0;

    $T3S15a = 0;
    $T3S15b = 0;
    $T3S15c = 0;
    $T3S15d = 0;

    $T3S16 = 0;

    $T3S16a = 0;
    $T3S16b = 0;
    $T3S16c = 0;
    $T3S16d = 0;

    $T3S17 = 0;

    $T3S17a = 0;
    $T3S17b = 0;
    $T3S17c = 0;
    $T3S17d = 0;

    $T3S18 = 0;

    $T3S18a = 0;
    $T3S18b = 0;
    $T3S18c = 0;
    $T3S18d = 0;

    $T3S19 = 0;

    $T3S19a = 0;
    $T3S19b = 0;
    $T3S19c = 0;
    $T3S19d = 0;

    $T3S20 = 0;

    $T3S20a = 0;
    $T3S20b = 0;
    $T3S20c = 0;
    $T3S20d = 0;

    $T3S21 = 0;

    $T3S21a = 0;
    $T3S21b = 0;
    $T3S21c = 0;
    $T3S21d = 0;

    $T3S22 = 0;

    $T3S22a = 0;
    $T3S22b = 0;
    $T3S22c = 0;
    $T3S22d = 0;

    $T3S23 = 0;

    $T3S23a = 0;
    $T3S23b = 0;
    $T3S23c = 0;
    $T3S23d = 0;

    $T3S24 = 0;

    $T3S24a = 0;
    $T3S24b = 0;
    $T3S24c = 0;
    $T3S24d = 0;

    $T3S25 = 0;

    $T3S25a = 0;
    $T3S25b = 0;
    $T3S25c = 0;
    $T3S25d = 0;

    $T3S26 = 0;

    $T3S26a = 0;
    $T3S26b = 0;
    $T3S26c = 0;
    $T3S26d = 0;







    $T3S27 = 0;

    $T3S27a = 0;
    $T3S27b = 0;
    $T3S27c = 0;
    $T3S27d = 0;

    $T3S28 = 0;

    $T3S28a = 0;
    $T3S28b = 0;
    $T3S28c = 0;
    $T3S28d = 0;

    $T3S29 = 0;

    $T3S29a = 0;
    $T3S29b = 0;
    $T3S29c = 0;
    $T3S29d = 0;

    $T3S30 = 0;

    $T3S30a = 0;
    $T3S30b = 0;
    $T3S30c = 0;
    $T3S30d = 0;

    $T3S31 = 0;

    $T3S31a = 0;
    $T3S31b = 0;
    $T3S31c = 0;
    $T3S31d = 0;

    $T3S32 = 0;

    $T3S32a = 0;
    $T3S32b = 0;
    $T3S32c = 0;
    $T3S32d = 0;

    $T3S33 = 0;

    $T3S33a = 0;
    $T3S33b = 0;
    $T3S33c = 0;
    $T3S33d = 0;

    $T3S34 = 0;

    $T3S34a = 0;
    $T3S34b = 0;
    $T3S34c = 0;
    $T3S34d = 0;

    $T3S35 = 0;

    $T3S35a = 0;
    $T3S35b = 0;
    $T3S35c = 0;
    $T3S35d = 0;

    $T3S36 = 0;

    $T3S36a = 0;
    $T3S36b = 0;
    $T3S36c = 0;
    $T3S36d = 0;

    $T3S37 = 0;

    $T3S37a = 0;
    $T3S37b = 0;
    $T3S37c = 0;
    $T3S37d = 0;

    $T3S38 = 0;

    $T3S38a = 0;
    $T3S38b = 0;
    $T3S38c = 0;
    $T3S38d = 0;

    $T3S39 = 0;

    $T3S39a = 0;
    $T3S39b = 0;
    $T3S39c = 0;
    $T3S39d = 0;

    $T3S40 = 0;

    $T3S40a = 0;
    $T3S40b = 0;
    $T3S40c = 0;
    $T3S40d = 0;

    $TotalT2 = 0;


    

if($result = mysqli_query($mysqli, $sqlt3)){
while($row = mysqli_fetch_array($result)){
    // echo $row['jawaban'];
    if($row['nomor_soal'] == 1){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S1a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S1b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S1c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S1d = 1;
        }
    }else if($row['nomor_soal'] == '2'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S2a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S2b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S2c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S2d = 1;
        }
    }else if($row['nomor_soal'] == '3'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S3a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S3b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S3c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S3d = 1;
        }
    }else if($row['nomor_soal'] == '4'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S4a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S4b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S4c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S4d = 1;
        }
    }else if($row['nomor_soal'] == '5'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S5a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S5b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S5c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S5d = 1;
        }
    }else if($row['nomor_soal'] == '6'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S6a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S6b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S6c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S6d = 1;
        }
    }else if($row['nomor_soal'] == '7'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S7a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S7b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S7c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S7d = 1;
        }
    }else if($row['nomor_soal'] == '8'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S8a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S8b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S8c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S8d = 1;
        }
    }else if($row['nomor_soal'] == '9'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S9a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S9b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S9c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S9d = 1;
        }
    }else if($row['nomor_soal'] == '10'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S10a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S10b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S10c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S10d = 1;
        }
    }else if($row['nomor_soal'] == '11'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S11a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S11b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S11c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S11d = 1;
        }
    }else if($row['nomor_soal'] == '12'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S12a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S12b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S12c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S12d = 1;
        }
    }else if($row['nomor_soal'] == '13'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S13a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S13b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S13c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S13d = 1;
        }
    }else if($row['nomor_soal'] == '14'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S14a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S14b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S14c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S14d = 1;
        }
    }else if($row['nomor_soal'] == '15'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S15a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S15b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S15c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S15d = 1;
        }
    }else if($row['nomor_soal'] == '16'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S16a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S16b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S16c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S16d = 1;
        }
    }else if($row['nomor_soal'] == '17'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S17a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S17b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S17c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S17d = 1;
        }
    }else if($row['nomor_soal'] == '18'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S18a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S18b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S18c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S18d = 1;
        }
    }else if($row['nomor_soal'] == '19'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S19a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S19b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S19c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S19d = 1;
        }
    }else if($row['nomor_soal'] == '20'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S20a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S20b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S20c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S20d = 1;
        }
    }else if($row['nomor_soal'] == '21'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S21a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S21b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S21c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S21d = 1;
        }
    }else if($row['nomor_soal'] == '22'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S22a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S22b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S22c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S22d = 1;
        }
    }else if($row['nomor_soal'] == '23'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S23a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S23b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S23c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S23d = 1;
        }
    }else if($row['nomor_soal'] == '24'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S24a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S24b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S24c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S24d = 1;
        }
    }else if($row['nomor_soal'] == '25'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S25a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S25b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S25c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S25d = 1;
        }
    }else if($row['nomor_soal'] == '26'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S26a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S26b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S26c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S26d = 1;
        }
    }else if($row['nomor_soal'] == '27'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S27a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S27b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S27c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S27d = 1;
        }
    }else if($row['nomor_soal'] == '28'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S28a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S28b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S28c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S28d = 1;
        }
    }else if($row['nomor_soal'] == '29'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S29a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S29b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S29c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S29d = 1;
        }
    }else if($row['nomor_soal'] == '30'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S30a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S30b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S30c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S30d = 1;
        }
    }else if($row['nomor_soal'] == '31'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S31a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S31b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S31c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S31d = 1;
        }
    }else if($row['nomor_soal'] == '32'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S32a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S32b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S32c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S32d = 1;
        }
    }else if($row['nomor_soal'] == '33'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S33a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S33b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S33c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S33d = 1;
        }
    }else if($row['nomor_soal'] == '34'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S34a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S34b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S34c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S34d = 1;
        }
    }else if($row['nomor_soal'] == '35'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S35a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S35b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S35c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S35d = 1;
        }
    }else if($row['nomor_soal'] == '36'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S36a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S36b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S36c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S36d = 1;
        }
    }else if($row['nomor_soal'] == '37'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S37a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S37b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S37c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S37d = 1;
        }
    }else if($row['nomor_soal'] == '38'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S38a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S38b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S38c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S38d = 1;
        }
    }else if($row['nomor_soal'] == '39'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S39a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S39b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S39c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S39d = 1;
        }
    }else if($row['nomor_soal'] == '40'){
        if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
            $T3S40a = 1;
        }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
            $T3S40b = 1;
        }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
            $T3S40c = 1;
        }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
            $T3S40d = 1;
        }
    }

}
}

//

$T3S1aJ = 0;
$T3S1bJ = 0;
$T3S1cJ = 0;
$T3S1dJ = 0;

$T3S2aJ = 0;
$T3S2bJ = 0;
$T3S2cJ = 0;
$T3S2dJ = 0;


$T3S3aJ = 0;
$T3S3bJ = 0;
$T3S3cJ = 0;
$T3S3dJ = 0;


$T3S4aJ = 0;
$T3S4bJ = 0;
$T3S4cJ = 0;
$T3S4dJ = 0;

$T3S5aJ = 0;
$T3S5bJ = 0;
$T3S5cJ = 0;
$T3S5dJ = 0;

$T3S6aJ = 0;
$T3S6bJ = 0;
$T3S6cJ = 0;
$T3S6dJ = 0;

$T3S7aJ = 0;
$T3S7bJ = 0;
$T3S7cJ = 0;
$T3S7dJ = 0;

$T3S8aJ = 0;
$T3S8bJ = 0;
$T3S8cJ = 0;
$T3S8dJ = 0;

$T3S9aJ = 0;
$T3S9bJ = 0;
$T3S9cJ = 0;
$T3S9dJ = 0;

$T3S10aJ = 0;
$T3S10bJ = 0;
$T3S10cJ = 0;
$T3S10dJ = 0;

$T3S11aJ = 0;
$T3S11bJ = 0;
$T3S11cJ = 0;
$T3S11dJ = 0;

$T3S12aJ = 0;
$T3S12bJ = 0;
$T3S12cJ = 0;
$T3S12dJ = 0;

$T3S13aJ = 0;
$T3S13bJ = 0;
$T3S13cJ = 0;
$T3S13dJ = 0;

$T3S14aJ = 0;
$T3S14bJ = 0;
$T3S14cJ = 0;
$T3S14dJ = 0;

$T3S15aJ = 0;
$T3S15bJ = 0;
$T3S15cJ = 0;
$T3S15dJ = 0;

$T3S16aJ = 0;
$T3S16bJ = 0;
$T3S16cJ = 0;
$T3S16dJ = 0;

$T3S17aJ = 0;
$T3S17bJ = 0;
$T3S17cJ = 0;
$T3S17dJ = 0;

$T3S18aJ = 0;
$T3S18bJ = 0;
$T3S18cJ = 0;
$T3S18dJ = 0;

$T3S19aJ = 0;
$T3S19bJ = 0;
$T3S19cJ = 0;
$T3S19dJ = 0;

$T3S20aJ = 0;
$T3S20bJ = 0;
$T3S20cJ = 0;
$T3S20dJ = 0;

$T3S21aJ = 0;
$T3S21bJ = 0;
$T3S21cJ = 0;
$T3S21dJ = 0;

$T3S22aJ = 0;
$T3S22bJ = 0;
$T3S22cJ = 0;
$T3S22dJ = 0;

$T3S23aJ = 0;
$T3S23bJ = 0;
$T3S23cJ = 0;
$T3S23dJ = 0;

$T3S24aJ = 0;
$T3S24bJ = 0;
$T3S24cJ = 0;
$T3S24dJ = 0;

$T3S25aJ = 0;
$T3S25bJ = 0;
$T3S25cJ = 0;
$T3S25dJ = 0;

$T3S26aJ = 0;
$T3S26bJ = 0;
$T3S26cJ = 0;
$T3S26dJ = 0;

$T3S27aJ = 0;
$T3S27bJ = 0;
$T3S27cJ = 0;
$T3S27dJ = 0;

$T3S28aJ = 0;
$T3S28bJ = 0;
$T3S28cJ = 0;
$T3S28dJ = 0;

$T3S29aJ = 0;
$T3S29bJ = 0;
$T3S29cJ = 0;
$T3S29dJ = 0;

$T3S30aJ = 0;
$T3S30bJ = 0;
$T3S30cJ = 0;
$T3S30dJ = 0;

$T3S31aJ = 0;
$T3S31bJ = 0;
$T3S31cJ = 0;
$T3S31dJ = 0;

$T3S32aJ = 0;
$T3S32bJ = 0;
$T3S32cJ = 0;
$T3S32dJ = 0;

$T3S33aJ = 0;
$T3S33bJ = 0;
$T3S33cJ = 0;
$T3S33dJ = 0;

$T3S34aJ = 0;
$T3S34bJ = 0;
$T3S34cJ = 0;
$T3S34dJ = 0;

$T3S35aJ = 0;
$T3S35bJ = 0;
$T3S35cJ = 0;
$T3S35dJ = 0;

$T3S36aJ = 0;
$T3S36bJ = 0;
$T3S36cJ = 0;
$T3S36dJ = 0;

$T3S37aJ = 0;
$T3S37bJ = 0;
$T3S37cJ = 0;
$T3S37dJ = 0;

$T3S38aJ = 0;
$T3S38bJ = 0;
$T3S38cJ = 0;
$T3S38dJ = 0;

$T3S39aJ = 0;
$T3S39bJ = 0;
$T3S39cJ = 0;
$T3S39dJ = 0;

$T3S40aJ = 0;
$T3S40bJ = 0;
$T3S40cJ = 0;
$T3S40dJ = 0;

if($result = mysqli_query($mysqli, $sqlt3)){
    while($row = mysqli_fetch_array($result)){
        if($row['nomor_soal'] == 1){
            if($row['soaljawaban_order'] == 1){
                $T3S1aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S1bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S1cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S1dJ = 1;
            }
        }else if($row['nomor_soal'] == '2'){
            if($row['soaljawaban_order'] == 1){
                $T3S2aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S2bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S2cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S2dJ = 1;
            }
        }else if($row['nomor_soal'] == '3'){
            if($row['soaljawaban_order'] == 1){
                $T3S3aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S3bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S3cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S3dJ = 1;
            }
        }else if($row['nomor_soal'] == '4'){
            if($row['soaljawaban_order'] == 1){
                $T3S4aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S4bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S4cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S4dJ = 1;
            }
        }else if($row['nomor_soal'] == '5'){
            if($row['soaljawaban_order'] == 1){
                $T3S5aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S5bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S5cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S5dJ = 1;
            }
        }else if($row['nomor_soal'] == '6'){
            if($row['soaljawaban_order'] == 1){
                $T3S6aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S6bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S6cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S6dJ = 1;
            }
        }else if($row['nomor_soal'] == '7'){
            if($row['soaljawaban_order'] == 1){
                $T3S7aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S7bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S7cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S7dJ = 1;
            }
        }else if($row['nomor_soal'] == '8'){
            if($row['soaljawaban_order'] == 1){
                $T3S8aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S8bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S8cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S8dJ = 1;
            }
        }else if($row['nomor_soal'] == '9'){
            if($row['soaljawaban_order'] == 1){
                $T3S9aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S9bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S9cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S9dJ = 1;
            }
        }else if($row['nomor_soal'] == '10'){
            if($row['soaljawaban_order'] == 1){
                $T3S10aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S10bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S10cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S10dJ = 1;
            }
        }else if($row['nomor_soal'] == '11'){
            if($row['soaljawaban_order'] == 1){
                $T3S11aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S11bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S11cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S11dJ = 1;
            }
        }else if($row['nomor_soal'] == '12'){
            if($row['soaljawaban_order'] == 1){
                $T3S12aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S12bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S12cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S12dJ = 1;
            }
        }else if($row['nomor_soal'] == '13'){
            if($row['soaljawaban_order'] == 1){
                $T3S13aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S13bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S13cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S13dJ = 1;
            }
        }else if($row['nomor_soal'] == '14'){
            if($row['soaljawaban_order'] == 1){
                $T3S14aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S14bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S14cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S14dJ = 1;
            }
        }else if($row['nomor_soal'] == '15'){
            if($row['soaljawaban_order'] == 1){
                $T3S15aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S15bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S15cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S15dJ = 1;
            }
        }else if($row['nomor_soal'] == '16'){
            if($row['soaljawaban_order'] == 1){
                $T3S16aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S16bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S16cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S16dJ = 1;
            }
        }else if($row['nomor_soal'] == '17'){
            if($row['soaljawaban_order'] == 1){
                $T3S17aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S17bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S17cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S17dJ = 1;
            }
        }else if($row['nomor_soal'] == '18'){
            if($row['soaljawaban_order'] == 1){
                $T3S18aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S18bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S18cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S18dJ = 1;
            }
        }else if($row['nomor_soal'] == '19'){
            if($row['soaljawaban_order'] == 1){
                $T3S19aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S19bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S19cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S19dJ = 1;
            }
        }else if($row['nomor_soal'] == '20'){
            if($row['soaljawaban_order'] == 1){
                $T3S20aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S20bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S20cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S20dJ = 1;
            }
        }else if($row['nomor_soal'] == '21'){
            if($row['soaljawaban_order'] == 1){
                $T3S21aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S21bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S21cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S21dJ = 1;
            }
        }else if($row['nomor_soal'] == '22'){
            if($row['soaljawaban_order'] == 1){
                $T3S22aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S22bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S22cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S22dJ = 1;
            }
        }else if($row['nomor_soal'] == '23'){
            if($row['soaljawaban_order'] == 1){
                $T3S23aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S23bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S23cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S23dJ = 1;
            }
        }else if($row['nomor_soal'] == '24'){
            if($row['soaljawaban_order'] == 1){
                $T3S24aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S24bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S24cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S24dJ = 1;
            }
        }else if($row['nomor_soal'] == '25'){
            if($row['soaljawaban_order'] == 1){
                $T3S25aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S25bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S25cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S25dJ = 1;
            }
        }else if($row['nomor_soal'] == '26'){
            if($row['soaljawaban_order'] == 1){
                $T3S26aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S26bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S26cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S26dJ = 1;
            }
        }else if($row['nomor_soal'] == '27'){
            if($row['soaljawaban_order'] == 1){
                $T3S27aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S27bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S27cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S27dJ = 1;
            }
        }else if($row['nomor_soal'] == '28'){
            if($row['soaljawaban_order'] == 1){
                $T3S28aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S28bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S28cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S28dJ = 1;
            }
        }else if($row['nomor_soal'] == '29'){
            if($row['soaljawaban_order'] == 1){
                $T3S29aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S29bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S29cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S29dJ = 1;
            }
        }else if($row['nomor_soal'] == '30'){
            if($row['soaljawaban_order'] == 1){
                $T3S30aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S30bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S30cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S30dJ = 1;
            }
        }else if($row['nomor_soal'] == '31'){
            if($row['soaljawaban_order'] == 1){
                $T3S31aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S31bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S31cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S31dJ = 1;
            }
        }else if($row['nomor_soal'] == '32'){
            if($row['soaljawaban_order'] == 1){
                $T3S32aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S32bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S32cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S32dJ = 1;
            }
        }else if($row['nomor_soal'] == '33'){
            if($row['soaljawaban_order'] == 1){
                $T3S33aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S33bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S33cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S33dJ = 1;
            }
        }else if($row['nomor_soal'] == '34'){
            if($row['soaljawaban_order'] == 1){
                $T3S34aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S34bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S34cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S34dJ = 1;
            }
        }else if($row['nomor_soal'] == '35'){
            if($row['soaljawaban_order'] == 1){
                $T3S35aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S35bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S35cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S35dJ = 1;
            }
        }else if($row['nomor_soal'] == '36'){
            if($row['soaljawaban_order'] == 1){
                $T3S36aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S36bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S36cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S36dJ = 1;
            }
        }else if($row['nomor_soal'] == '37'){
            if($row['soaljawaban_order'] == 1){
                $T3S37aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S37bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S37cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S37dJ = 1;
            }
        }else if($row['nomor_soal'] == '38'){
            if($row['soaljawaban_order'] == 1){
                $T3S38aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S38bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S38cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S38dJ = 1;
            }
        }else if($row['nomor_soal'] == '39'){
            if($row['soaljawaban_order'] == 1){
                $T3S39aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S39bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S39cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S39dJ = 1;
            }
        }else if($row['nomor_soal'] == '40'){
            if($row['soaljawaban_order'] == 1){
                $T3S40aJ = 1;
            }else if($row['soaljawaban_order'] == 2){
                $T3S40bJ = 1;
            }else if($row['soaljawaban_order'] == 3){
                $T3S40cJ = 1;
            }else if($row['soaljawaban_order'] == 4){
                $T3S40dJ = 1;
            }
        }
    
    }
}

$T3S1T = $T3S1a+$T3S1b+$T3S1c+$T3S1d;
$T3S2T = $T3S2a+$T3S2b+$T3S2c+$T3S2d;
$T3S3T = $T3S3a+$T3S3b+$T3S3c+$T3S3d;
$T3S4T = $T3S4a+$T3S4b+$T3S4c+$T3S4d;
$T3S5T = $T3S5a+$T3S5b+$T3S5c+$T3S5d;
$T3S6T = $T3S6a+$T3S6b+$T3S6c+$T3S6d;
$T3S7T = $T3S7a+$T3S7b+$T3S7c+$T3S7d;
$T3S8T = $T3S8a+$T3S8b+$T3S8c+$T3S8d;
$T3S9T = $T3S9a+$T3S9b+$T3S9c+$T3S9d;
$T3S10T = $T3S10a+$T3S10b+$T3S10c+$T3S10d;

$T3S11T = $T3S11a+$T3S11b+$T3S11c+$T3S11d;
$T3S12T = $T3S12a+$T3S12b+$T3S12c+$T3S12d;
$T3S13T = $T3S13a+$T3S13b+$T3S13c+$T3S13d;
$T3S14T = $T3S14a+$T3S14b+$T3S14c+$T3S14d;
$T3S15T = $T3S15a+$T3S15b+$T3S15c+$T3S15d;
$T3S16T = $T3S16a+$T3S16b+$T3S16c+$T3S16d;
$T3S17T = $T3S17a+$T3S17b+$T3S17c+$T3S17d;
$T3S18T = $T3S18a+$T3S18b+$T3S18c+$T3S18d;
$T3S19T = $T3S19a+$T3S19b+$T3S19c+$T3S19d;
$T3S20T = $T3S20a+$T3S20b+$T3S20c+$T3S20d;

$T3S21T = $T3S21a+$T3S21b+$T3S21c+$T3S21d;
$T3S22T = $T3S22a+$T3S22b+$T3S22c+$T3S22d;
$T3S23T = $T3S23a+$T3S23b+$T3S23c+$T3S23d;
$T3S24T = $T3S24a+$T3S24b+$T3S24c+$T3S24d;
$T3S25T = $T3S25a+$T3S25b+$T3S25c+$T3S25d;
$T3S26T = $T3S26a+$T3S26b+$T3S26c+$T3S26d;
$T3S27T = $T3S27a+$T3S27b+$T3S27c+$T3S27d;
$T3S28T = $T3S28a+$T3S28b+$T3S28c+$T3S28d;
$T3S29T = $T3S29a+$T3S29b+$T3S29c+$T3S29d;
$T3S30T = $T3S30a+$T3S30b+$T3S30c+$T3S30d;

$T3S31T = $T3S31a+$T3S31b+$T3S31c+$T3S31d;
$T3S32T = $T3S32a+$T3S32b+$T3S32c+$T3S32d;
$T3S33T = $T3S33a+$T3S33b+$T3S33c+$T3S33d;
$T3S34T = $T3S34a+$T3S34b+$T3S34c+$T3S34d;
$T3S35T = $T3S35a+$T3S35b+$T3S35c+$T3S35d;
$T3S36T = $T3S36a+$T3S36b+$T3S36c+$T3S36d;
$T3S37T = $T3S37a+$T3S37b+$T3S37c+$T3S37d;
$T3S38T = $T3S38a+$T3S38b+$T3S38c+$T3S38d;
$T3S39T = $T3S39a+$T3S39b+$T3S39c+$T3S39d;
$T3S40T = $T3S40a+$T3S40b+$T3S40c+$T3S40d;

$T3S1ALL = 0;
$T3S2ALL = 0;
$T3S2ALL = 0;
$T3S3ALL = 0;
$T3S4ALL = 0;
$T3S5ALL = 0;
$T3S6ALL = 0;
$T3S7ALL = 0;
$T3S8ALL = 0;
$T3S9ALL = 0;
$T3S10ALL = 0;
$T3S11ALL = 0;
$T3S12ALL = 0;
$T3S13ALL = 0;
$T3S14ALL = 0;
$T3S15ALL = 0;
$T3S16ALL = 0;
$T3S17ALL = 0;
$T3S18ALL = 0;
$T3S19ALL = 0;
$T3S20ALL = 0;
$T3S21ALL = 0;
$T3S22ALL = 0;
$T3S23ALL = 0;
$T3S24ALL = 0;
$T3S25ALL = 0;
$T3S26ALL = 0;
$T3S27ALL = 0;
$T3S28ALL = 0;
$T3S29ALL = 0;
$T3S30ALL = 0;
$T3S31ALL = 0;
$T3S32ALL = 0;
$T3S33ALL = 0;
$T3S34ALL = 0;
$T3S35ALL = 0;
$T3S36ALL = 0;
$T3S37ALL = 0;
$T3S38ALL = 0;
$T3S39ALL = 0;
$T3S40ALL = 0;



if($T3S1T == 2){
$T3S1ALL = 1;
}
if($T3S2T == 2){
$T3S2ALL = 1;
}
if($T3S2T == 2){
$T3S2ALL = 1;
}
if($T3S3T == 2){
$T3S3ALL = 1;
}
if($T3S4T == 2){
$T3S4ALL = 1;
}
if($T3S5T == 2){
$T3S5ALL = 1;
}
if($T3S6T == 2){
$T3S6ALL = 1;
}
if($T3S7T == 2){
$T3S7ALL = 1;
}
if($T3S8T == 2){
$T3S8ALL = 1;
}
if($T3S9T == 2){
$T3S9ALL = 1;
}
if($T3S10T == 2){
$T3S10ALL = 1;
}
if($T3S11T == 2){
$T3S11ALL = 1;
}
if($T3S12T == 2){
$T3S12ALL = 1;
}
if($T3S13T == 2){
$T3S13ALL = 1;
}
if($T3S14T == 2){
$T3S14ALL = 1;
}
if($T3S15T == 2){
$T3S15ALL = 1;
}
if($T3S16T == 2){
$T3S16ALL = 1;
}
if($T3S17T == 2){
$T3S17ALL = 1;
}
if($T3S18T == 2){
$T3S18ALL = 1;
}
if($T3S19T == 2){
$T3S19ALL = 1;
}
if($T3S20T == 2){
$T3S20ALL = 1;
}
if($T3S21T == 2){
$T3S21ALL = 1;
}
if($T3S22T == 2){
$T3S22ALL = 1;
}
if($T3S23T == 2){
$T3S23ALL = 1;
}
if($T3S24T == 2){
$T3S24ALL = 1;
}
if($T3S25T == 2){
$T3S25ALL = 1;
}
if($T3S26T == 2){
$T3S26ALL = 1;
}


if($T3S27T == 2){
$T3S27ALL = 1;
}
if($T3S28T == 2){
$T3S28ALL = 1;
}
if($T3S29T == 2){
$T3S29ALL = 1;
}
if($T3S30T == 2){
$T3S30ALL = 1;
}

if($T3S31T == 2){
$T3S31ALL = 1;
}
if($T3S32T == 2){
$T3S32ALL = 1;
}
if($T3S33T == 2){
$T3S33ALL = 1;
}
if($T3S34T == 2){
$T3S34ALL = 1;
}
if($T3S35T == 2){
$T3S35ALL = 1;
}
if($T3S36T == 2){
$T3S36ALL = 1;
}
if($T3S37T == 2){
$T3S37ALL = 1;
}
if($T3S38T == 2){
$T3S38ALL = 1;
}
if($T3S39T == 2){
$T3S39ALL = 1;
}
if($T3S40T == 2){
$T3S40ALL = 1;
}

$T3SALL = $T3S1ALL + $T3S2ALL + $T3S3ALL + $T3S4ALL + $T3S5ALL + $T3S6ALL + $T3S7ALL + $T3S8ALL + $T3S9ALL + $T3S10ALL 
+ $T3S11ALL + $T3S12ALL + $T3S13ALL + $T3S14ALL + $T3S15ALL + $T3S16ALL + $T3S17ALL + $T3S18ALL + $T3S19ALL + $T3S20ALL 
+ $T3S21ALL + $T3S22ALL + $T3S23ALL + $T3S24ALL + $T3S25ALL + $T3S26ALL + $T3S27ALL + $T3S28ALL + $T3S29ALL + $T3S30ALL
+ $T3S31ALL + $T3S32ALL + $T3S33ALL + $T3S34ALL + $T3S35ALL + $T3S36ALL + $T3S37ALL + $T3S38ALL + $T3S39ALL + $T3S40ALL;


// subtest no 4

    $sqlt4 = "        
                SELECT  cbt_user.user_firstname as name,
                        cbt_tes.tes_nama as nama, 
                        cbt_tes_user.tesuser_id as user_id,
                        cbt_tes_soal.tessoal_jawaban as soal,
                        cbt_soal.soal_nomor as nomor_soal, 
                        cbt_tes.tes_begin_time as tanggal_tes,
                        cbt_soal.soal_subtest,
                        cbt_tes_soal_jawaban.soaljawaban_selected,
                        cbt_tes_soal_jawaban.soaljawaban_order,
                        cbt_tes_soal_jawaban.soaljawaban_jawaban_id,
                        cbt_jawaban.jawaban_benar
                FROM    cbt_tes_user, 
                        cbt_user, 
                        cbt_tes, 
                        cbt_tes_soal, 
                        cbt_soal,
                        cbt_tes_soal_jawaban,
                        cbt_jawaban
                WHERE   cbt_user.user_id = cbt_tes_user.tesuser_user_id 
                AND     cbt_tes_user.tesuser_tes_id = cbt_tes.tes_id 
                AND     cbt_tes_soal.tessoal_tesuser_id = cbt_tes_user.tesuser_id 
                AND     cbt_soal.soal_id = cbt_tes_soal.tessoal_soal_id 
                AND     cbt_user.user_id = ".$user_id."
                AND     cbt_tes.tes_id = 131
                AND     cbt_soal.soal_subtest = 4
                AND     cbt_tes_soal_jawaban.soaljawaban_selected = 1
                AND     cbt_tes_soal_jawaban.soaljawaban_tessoal_id = cbt_tes_soal.tessoal_id
                AND     cbt_jawaban.jawaban_id = cbt_tes_soal_jawaban.soaljawaban_jawaban_id
                ORDER BY cbt_soal.soal_nomor ASC";

        $T4S1 = 0;

        $T4S1a = 0;
        $T4S1b = 0;
        $T4S1c = 0;
        $T4S1d = 0;
        $T4S1e = 0;
        $T4S1f = 0;

        $T4S2 = 0;

        $T4S2a = 0;
        $T4S2b = 0;
        $T4S2c = 0;
        $T4S2d = 0;
        $T4S2e = 0;
        $T4S2f = 0;
        

        $T4S3 = 0;
        
        $T4S3a = 0;
        $T4S3b = 0;
        $T4S3c = 0;
        $T4S3d = 0;
        $T4S3e = 0;
        $T4S3f = 0;
        
        $T4S4 = 0;

        $T4S4a = 0;
        $T4S4b = 0;
        $T4S4c = 0;
        $T4S4d = 0;
        $T4S4e = 0;
        $T4S4f = 0;

        $T4S5 = 0;

        $T4S5a = 0;
        $T4S5b = 0;
        $T4S5c = 0;
        $T4S5d = 0;
        $T4S5e = 0;
        $T4S5f = 0;

        $T4S6 = 0;

        $T4S6a = 0;
        $T4S6b = 0;
        $T4S6c = 0;
        $T4S6d = 0;
        $T4S6e = 0;
        $T4S6f = 0;

        $T4S7 = 0;

        $T4S7a = 0;
        $T4S7b = 0;
        $T4S7c = 0;
        $T4S7d = 0;
        $T4S7e = 0;
        $T4S7f = 0;

        $T4S8 = 0;

        $T4S8a = 0;
        $T4S8b = 0;
        $T4S8c = 0;
        $T4S8d = 0;
        $T4S8e = 0;
        $T4S8f = 0;

        $T4S9 = 0;

        $T4S9a = 0;
        $T4S9b = 0;
        $T4S9c = 0;
        $T4S9d = 0;
        $T4S9e = 0;
        $T4S9f = 0;

        $T4S10 = 0;

        $T4S10a = 0;
        $T4S10b = 0;
        $T4S10c = 0;
        $T4S10d = 0;
        $T4S10e = 0;
        $T4S10f = 0;

        $T4S11 = 0;

        $T4S11a = 0;
        $T4S11b = 0;
        $T4S11c = 0;
        $T4S11d = 0;
        $T4S11e = 0;
        $T4S11f = 0;

        $T4S12 = 0;

        $T4S12a = 0;
        $T4S12b = 0;
        $T4S12c = 0;
        $T4S12d = 0;
        $T4S12e = 0;
        $T4S12f = 0;

        $T4S13 = 0;

        $T4S13a = 0;
        $T4S13b = 0;
        $T4S13c = 0;
        $T4S13d = 0;
        $T4S13e = 0;
        $T4S13f = 0;

        $T4S14 = 0;

        $T4S14a = 0;
        $T4S14b = 0;
        $T4S14c = 0;
        $T4S14d = 0;
        $T4S14e = 0;
        $T4S14f = 0;

        $T4S15 = 0;

        $T4S15a = 0;
        $T4S15b = 0;
        $T4S15c = 0;
        $T4S15d = 0;
        $T4S15e = 0;
        $T4S15f = 0;

        $T4S16 = 0;

        $T4S16a = 0;
        $T4S16b = 0;
        $T4S16c = 0;
        $T4S16d = 0;
        $T4S16e = 0;
        $T4S16f = 0;

        $T4S17 = 0;

        $T4S17a = 0;
        $T4S17b = 0;
        $T4S17c = 0;
        $T4S17d = 0;
        $T4S17e = 0;
        $T4S17f = 0;

        $T4S18 = 0;

        $T4S18a = 0;
        $T4S18b = 0;
        $T4S18c = 0;
        $T4S18d = 0;
        $T4S18e = 0;
        $T4S18f = 0;

        $T4S19 = 0;

        $T4S19a = 0;
        $T4S19b = 0;
        $T4S19c = 0;
        $T4S19d = 0;
        $T4S19e = 0;
        $T4S19f = 0;

        $T4S20 = 0;

        $T4S20a = 0;
        $T4S20b = 0;
        $T4S20c = 0;
        $T4S20d = 0;
        $T4S20e = 0;
        $T4S20f = 0;

        $T4S21 = 0;

        $T4S21a = 0;
        $T4S21b = 0;
        $T4S21c = 0;
        $T4S21d = 0;
        $T4S21e = 0;
        $T4S21f = 0;

        $T4S22 = 0;

        $T4S22a = 0;
        $T4S22b = 0;
        $T4S22c = 0;
        $T4S22d = 0;
        $T4S22e = 0;
        $T4S22f = 0;

        $T4S23 = 0;

        $T4S23a = 0;
        $T4S23b = 0;
        $T4S23c = 0;
        $T4S23d = 0;
        $T4S23e = 0;
        $T4S23f = 0;

        $T4S24 = 0;

        $T4S24a = 0;
        $T4S24b = 0;
        $T4S24c = 0;
        $T4S24d = 0;
        $T4S24e = 0;
        $T4S24f = 0;

        $T4S25 = 0;

        $T4S25a = 0;
        $T4S25b = 0;
        $T4S25c = 0;
        $T4S25d = 0;
        $T4S25e = 0;
        $T4S25f = 0;

        $T4S26 = 0;

        $T4S26a = 0;
        $T4S26b = 0;
        $T4S26c = 0;
        $T4S26d = 0;
        $T4S26e = 0;
        $T4S26f = 0;

        $T4S27 = 0;

        $T4S27a = 0;
        $T4S27b = 0;
        $T4S27c = 0;
        $T4S27d = 0;
        $T4S27e = 0;
        $T4S27f = 0;

        $T4S28 = 0;

        $T4S28a = 0;
        $T4S28b = 0;
        $T4S28c = 0;
        $T4S28d = 0;
        $T4S28e = 0;
        $T4S28f = 0;

        $T4S29 = 0;

        $T4S29a = 0;
        $T4S29b = 0;
        $T4S29c = 0;
        $T4S29d = 0;
        $T4S29e = 0;
        $T4S29f = 0;

        $T4S30 = 0;

        $T4S30a = 0;
        $T4S30b = 0;
        $T4S30c = 0;
        $T4S30d = 0;
        $T4S30e = 0;
        $T4S30f = 0;
        


        $TotalT4 = 0;

        if($result = mysqli_query($mysqli, $sqlt4)){
            while($row = mysqli_fetch_array($result)){
                // echo $row['jawaban'];
                if($row['nomor_soal'] == 1){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T4S1a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T4S1b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T4S1c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T4S1d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T4S1e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T4S1f = 1;
                    }
                }else if($row['nomor_soal'] == '2'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T4S2a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T4S2b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T4S2c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T4S2d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T4S2e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T4S2f = 1;
                    }
                }else if($row['nomor_soal'] == '3'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T4S3a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T4S3b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T4S3c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T4S3d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T4S3e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T4S3f = 1;
                    }
                }else if($row['nomor_soal'] == '4'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T4S4a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T4S4b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T4S4c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T4S4d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T4S4e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T4S4f = 1;
                    }
                }else if($row['nomor_soal'] == '5'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T4S5a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T4S5b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T4S5c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T4S5d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T4S5e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T4S5f = 1;
                    }
                }else if($row['nomor_soal'] == '6'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T4S6a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T4S6b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T4S6c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T4S6d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T4S6e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T4S6f = 1;
                    }
                }else if($row['nomor_soal'] == '7'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T4S7a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T4S7b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T4S7c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T4S7d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T4S7e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T4S7f = 1;
                    }
                }else if($row['nomor_soal'] == '8'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T4S8a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T4S8b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T4S8c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T4S8d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T4S8e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T4S8f = 1;
                    }
                }else if($row['nomor_soal'] == '9'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T4S9a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T4S9b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T4S9c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T4S9d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T4S9e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T4S9f = 1;
                    }
                }else if($row['nomor_soal'] == '10'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T4S10a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T4S10b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T4S10c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T4S10d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T4S10e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T4S10f = 1;
                    }
                }else if($row['nomor_soal'] == '11'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T4S11a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T4S11b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T4S11c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T4S11d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T4S11e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T4S11f = 1;
                    }
                }else if($row['nomor_soal'] == '12'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T4S12a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T4S12b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T4S12c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T4S12d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T4S12e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T4S12f = 1;
                    }
                }else if($row['nomor_soal'] == '13'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T4S13a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T4S13b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T4S13c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T4S13d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T4S13e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T4S13f = 1;
                    }
                }else if($row['nomor_soal'] == '14'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T4S14a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T4S14b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T4S14c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T4S14d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T4S14e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T4S14f = 1;
                    }
                }else if($row['nomor_soal'] == '15'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T4S15a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T4S15b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T4S15c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T4S15d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T4S15e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T4S15f = 1;
                    }
                }else if($row['nomor_soal'] == '16'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T4S16a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T4S16b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T4S16c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T4S16d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T4S16e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T4S16f = 1;
                    }
                }else if($row['nomor_soal'] == '17'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T4S17a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T4S17b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T4S17c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T4S17d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T4S17e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T4S17f = 1;
                    }
                }else if($row['nomor_soal'] == '18'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T4S18a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T4S18b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T4S18c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T4S18d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T4S18e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T4S18f = 1;
                    }
                }else if($row['nomor_soal'] == '19'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T4S19a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T4S19b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T4S19c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T4S19d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T4S19e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T4S19f = 1;
                    }
                }else if($row['nomor_soal'] == '20'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T4S20a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T4S20b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T4S20c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T4S20d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T4S20e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T4S20f = 1;
                    }
                }else if($row['nomor_soal'] == '21'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T4S21a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T4S21b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T4S21c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T4S21d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T4S21e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T4S21f = 1;
                    }
                }else if($row['nomor_soal'] == '22'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T4S22a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T4S22b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T4S22c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T4S22d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T4S22e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T4S22f = 1;
                    }
                }else if($row['nomor_soal'] == '23'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T4S23a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T4S23b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T4S23c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T4S23d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T4S23e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T4S23f = 1;
                    }
                }else if($row['nomor_soal'] == '24'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T4S24a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T4S24b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T4S24c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T4S24d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T4S24e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T4S24f = 1;
                    }
                }else if($row['nomor_soal'] == '25'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T4S25a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T4S25b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T4S25c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T4S25d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T4S25e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T4S25f = 1;
                    }
                }else if($row['nomor_soal'] == '26'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T4S26a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T4S26b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T4S26c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T4S26d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T4S26e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T4S26f = 1;
                    }
                }else if($row['nomor_soal'] == '27'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T4S27a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T4S27b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T4S27c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T4S27d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T4S27e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T4S27f = 1;
                    }
                }else if($row['nomor_soal'] == '28'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T4S28a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T4S28b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T4S28c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T4S28d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T4S28e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T4S28f = 1;
                    }
                }else if($row['nomor_soal'] == '29'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T4S29a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T4S29b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T4S29c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T4S29d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T4S29e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T4S29f = 1;
                    }
                }else if($row['nomor_soal'] == '30'){
                    if($row['soaljawaban_order'] == 1 && $row['jawaban_benar'] == 1){
                        $T4S30a = 1;
                    }else if($row['soaljawaban_order'] == 2 && $row['jawaban_benar'] == 1){
                        $T4S30b = 1;
                    }else if($row['soaljawaban_order'] == 3 && $row['jawaban_benar'] == 1){
                        $T4S30c = 1;
                    }else if($row['soaljawaban_order'] == 4 && $row['jawaban_benar'] == 1){
                        $T4S30d = 1;
                    }else if($row['soaljawaban_order'] == 5 && $row['jawaban_benar'] == 1){
                        $T4S30e = 1;
                    }else if($row['soaljawaban_order'] == 6 && $row['jawaban_benar'] == 1){
                        $T4S30f = 1;
                    }
                }
    
            }
        }

        $T4S1aJ = 0;
        $T4S1bJ = 0;
        $T4S1cJ = 0;
        $T4S1dJ = 0;
        $T4S1eJ = 0;
        $T4S1fJ = 0;

        $T4S2aJ = 0;
        $T4S2bJ = 0;
        $T4S2cJ = 0;
        $T4S2dJ = 0;
        $T4S2eJ = 0;
        $T4S2fJ = 0;
        
        $T4S3aJ = 0;
        $T4S3bJ = 0;
        $T4S3cJ = 0;
        $T4S3dJ = 0;
        $T4S3eJ = 0;
        $T4S3fJ = 0;

        $T4S4aJ = 0;
        $T4S4bJ = 0;
        $T4S4cJ = 0;
        $T4S4dJ = 0;
        $T4S4eJ = 0;
        $T4S4fJ = 0;

        $T4S5aJ = 0;
        $T4S5bJ = 0;
        $T4S5cJ = 0;
        $T4S5dJ = 0;
        $T4S5eJ = 0;
        $T4S5fJ = 0;

        $T4S6aJ = 0;
        $T4S6bJ = 0;
        $T4S6cJ = 0;
        $T4S6dJ = 0;
        $T4S6eJ = 0;
        $T4S6fJ = 0;

        $T4S7aJ = 0;
        $T4S7bJ = 0;
        $T4S7cJ = 0;
        $T4S7dJ = 0;
        $T4S7eJ = 0;
        $T4S7fJ = 0;

        $T4S8aJ = 0;
        $T4S8bJ = 0;
        $T4S8cJ = 0;
        $T4S8dJ = 0;
        $T4S8eJ = 0;
        $T4S8fJ = 0;

        $T4S9aJ = 0;
        $T4S9bJ = 0;
        $T4S9cJ = 0;
        $T4S9dJ = 0;
        $T4S9eJ = 0;
        $T4S9fJ = 0;

        $T4S10aJ = 0;
        $T4S10bJ = 0;
        $T4S10cJ = 0;
        $T4S10dJ = 0;
        $T4S10eJ = 0;
        $T4S10fJ = 0;

        $T4S11aJ = 0;
        $T4S11bJ = 0;
        $T4S11cJ = 0;
        $T4S11dJ = 0;
        $T4S11eJ = 0;
        $T4S11fJ = 0;

        $T4S12aJ = 0;
        $T4S12bJ = 0;
        $T4S12cJ = 0;
        $T4S12dJ = 0;
        $T4S12eJ = 0;
        $T4S12fJ = 0;

        $T4S13aJ = 0;
        $T4S13bJ = 0;
        $T4S13cJ = 0;
        $T4S13dJ = 0;
        $T4S13eJ = 0;
        $T4S13fJ = 0;

        $T4S14aJ = 0;
        $T4S14bJ = 0;
        $T4S14cJ = 0;
        $T4S14dJ = 0;
        $T4S14eJ = 0;
        $T4S14fJ = 0;

        $T4S15aJ = 0;
        $T4S15bJ = 0;
        $T4S15cJ = 0;
        $T4S15dJ = 0;
        $T4S15eJ = 0;
        $T4S15fJ = 0;

        $T4S16aJ = 0;
        $T4S16bJ = 0;
        $T4S16cJ = 0;
        $T4S16dJ = 0;
        $T4S16eJ = 0;
        $T4S16fJ = 0;

        $T4S17aJ = 0;
        $T4S17bJ = 0;
        $T4S17cJ = 0;
        $T4S17dJ = 0;
        $T4S17eJ = 0;
        $T4S17fJ = 0;

        $T4S18aJ = 0;
        $T4S18bJ = 0;
        $T4S18cJ = 0;
        $T4S18dJ = 0;
        $T4S18eJ = 0;
        $T4S18fJ = 0;

        $T4S19aJ = 0;
        $T4S19bJ = 0;
        $T4S19cJ = 0;
        $T4S19dJ = 0;
        $T4S19eJ = 0;
        $T4S19fJ = 0;

        $T4S20aJ = 0;
        $T4S20bJ = 0;
        $T4S20cJ = 0;
        $T4S20dJ = 0;
        $T4S20eJ = 0;
        $T4S20fJ = 0;

        $T4S21aJ = 0;
        $T4S21bJ = 0;
        $T4S21cJ = 0;
        $T4S21dJ = 0;
        $T4S21eJ = 0;
        $T4S21fJ = 0;

        $T4S22aJ = 0;
        $T4S22bJ = 0;
        $T4S22cJ = 0;
        $T4S22dJ = 0;
        $T4S22eJ = 0;
        $T4S22fJ = 0;

        $T4S23aJ = 0;
        $T4S23bJ = 0;
        $T4S23cJ = 0;
        $T4S23dJ = 0;
        $T4S23eJ = 0;
        $T4S23fJ = 0;

        $T4S24aJ = 0;
        $T4S24bJ = 0;
        $T4S24cJ = 0;
        $T4S24dJ = 0;
        $T4S24eJ = 0;
        $T4S24fJ = 0;

        $T4S25aJ = 0;
        $T4S25bJ = 0;
        $T4S25cJ = 0;
        $T4S25dJ = 0;
        $T4S25eJ = 0;
        $T4S25fJ = 0;

        $T4S26aJ = 0;
        $T4S26bJ = 0;
        $T4S26cJ = 0;
        $T4S26dJ = 0;
        $T4S26eJ = 0;
        $T4S26fJ = 0;

        $T4S27aJ = 0;
        $T4S27bJ = 0;
        $T4S27cJ = 0;
        $T4S27dJ = 0;
        $T4S27eJ = 0;
        $T4S27fJ = 0;

        $T4S28aJ = 0;
        $T4S28bJ = 0;
        $T4S28cJ = 0;
        $T4S28dJ = 0;
        $T4S28eJ = 0;
        $T4S28fJ = 0;

        $T4S29aJ = 0;
        $T4S29bJ = 0;
        $T4S29cJ = 0;
        $T4S29dJ = 0;
        $T4S29eJ = 0;
        $T4S29fJ = 0;

        $T4S30aJ = 0;
        $T4S30bJ = 0;
        $T4S30cJ = 0;
        $T4S30dJ = 0;
        $T4S30eJ = 0;
        $T4S30fJ = 0;
        



        if($result = mysqli_query($mysqli, $sqlt4)){
            while($row = mysqli_fetch_array($result)){
                // echo $row['jawaban'];
                if($row['nomor_soal'] == 1){
                    if($row['soaljawaban_order'] == 1){
                        $T4S1aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T4S1bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T4S1cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T4S1dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T4S1eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T4S1fJ = 1;
                    }
                }else if($row['nomor_soal'] == '2'){
                    if($row['soaljawaban_order'] == 1){
                        $T4S2aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T4S2bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T4S2cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T4S2dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T4S2eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T4S2fJ = 1;
                    }
                }else if($row['nomor_soal'] == '3'){
                    if($row['soaljawaban_order'] == 1){
                        $T4S3aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T4S3bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T4S3cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T4S3dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T4S3eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T4S3fJ = 1;
                    }
                }else if($row['nomor_soal'] == '4'){
                    if($row['soaljawaban_order'] == 1){
                        $T4S4aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T4S4bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T4S4cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T4S4dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T4S4eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T4S4fJ = 1;
                    }
                }else if($row['nomor_soal'] == '5'){
                    if($row['soaljawaban_order'] == 1){
                        $T4S5aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T4S5bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T4S5cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T4S5dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T4S5eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T4S5fJ = 1;
                    }
                }else if($row['nomor_soal'] == '6'){
                    if($row['soaljawaban_order'] == 1){
                        $T4S6aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T4S6bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T4S6cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T4S6dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T4S6eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T4S6fJ = 1;
                    }
                }else if($row['nomor_soal'] == '7'){
                    if($row['soaljawaban_order'] == 1){
                        $T4S7aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T4S7bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T4S7cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T4S7dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T4S7eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T4S7fJ = 1;
                    }
                }else if($row['nomor_soal'] == '8'){
                    if($row['soaljawaban_order'] == 1){
                        $T4S8aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T4S8bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T4S8cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T4S8dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T4S8eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T4S8fJ = 1;
                    }
                }else if($row['nomor_soal'] == '9'){
                    if($row['soaljawaban_order'] == 1){
                        $T4S9aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T4S9bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T4S9cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T4S9dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T4S9eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T4S9fJ = 1;
                    }
                }else if($row['nomor_soal'] == '10'){
                    if($row['soaljawaban_order'] == 1){
                        $T4S10aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T4S10bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T4S10cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T4S10dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T4S10eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T4S10fJ = 1;
                    }
                }else if($row['nomor_soal'] == '11'){
                    if($row['soaljawaban_order'] == 1){
                        $T4S11aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T4S11bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T4S11cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T4S11dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T4S11eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T4S11fJ = 1;
                    }
                }else if($row['nomor_soal'] == '12'){
                    if($row['soaljawaban_order'] == 1){
                        $T4S12aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T4S12bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T4S12cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T4S12dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T4S12eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T4S12fJ = 1;
                    }
                }else if($row['nomor_soal'] == '13'){
                    if($row['soaljawaban_order'] == 1){
                        $T4S13aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T4S13bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T4S13cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T4S13dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T4S13eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T4S13fJ = 1;
                    }
                }else if($row['nomor_soal'] == '14'){
                    if($row['soaljawaban_order'] == 1){
                        $T4S14aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T4S14bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T4S14cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T4S14dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T4S14eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T4S14fJ = 1;
                    }
                }else if($row['nomor_soal'] == '15'){
                    if($row['soaljawaban_order'] == 1){
                        $T4S15aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T4S15bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T4S15cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T4S15dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T4S15eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T4S15fJ = 1;
                    }
                }else if($row['nomor_soal'] == '16'){
                    if($row['soaljawaban_order'] == 1){
                        $T4S16aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T4S16bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T4S16cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T4S16dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T4S16eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T4S16fJ = 1;
                    }
                }else if($row['nomor_soal'] == '17'){
                    if($row['soaljawaban_order'] == 1){
                        $T4S17aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T4S17bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T4S17cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T4S17dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T4S17eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T4S17fJ = 1;
                    }
                }else if($row['nomor_soal'] == '18'){
                    if($row['soaljawaban_order'] == 1){
                        $T4S18aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T4S18bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T4S18cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T4S18dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T4S18eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T4S18fJ = 1;
                    }
                }else if($row['nomor_soal'] == '19'){
                    if($row['soaljawaban_order'] == 1){
                        $T4S19aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T4S19bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T4S19cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T4S19dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T4S19eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T4S19fJ = 1;
                    }
                }else if($row['nomor_soal'] == '20'){
                    if($row['soaljawaban_order'] == 1){
                        $T4S20aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T4S20bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T4S20cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T4S20dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T4S20eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T4S20fJ = 1;
                    }
                }else if($row['nomor_soal'] == '21'){
                    if($row['soaljawaban_order'] == 1){
                        $T4S21aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T4S21bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T4S21cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T4S21dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T4S21eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T4S21fJ = 1;
                    }
                }else if($row['nomor_soal'] == '22'){
                    if($row['soaljawaban_order'] == 1){
                        $T4S22aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T4S22bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T4S22cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T4S22dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T4S22eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T4S22fJ = 1;
                    }
                }else if($row['nomor_soal'] == '23'){
                    if($row['soaljawaban_order'] == 1){
                        $T4S23aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T4S23bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T4S23cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T4S23dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T4S23eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T4S23fJ = 1;
                    }
                }else if($row['nomor_soal'] == '24'){
                    if($row['soaljawaban_order'] == 1){
                        $T4S24aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T4S24bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T4S24cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T4S24dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T4S24eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T4S24fJ = 1;
                    }
                }else if($row['nomor_soal'] == '25'){
                    if($row['soaljawaban_order'] == 1){
                        $T4S25aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T4S25bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T4S25cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T4S25dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T4S25eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T4S25fJ = 1;
                    }
                }else if($row['nomor_soal'] == '26'){
                    if($row['soaljawaban_order'] == 1){
                        $T4S26aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T4S26bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T4S26cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T4S26dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T4S26eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T4S26fJ = 1;
                    }
                }else if($row['nomor_soal'] == '27'){
                    if($row['soaljawaban_order'] == 1){
                        $T4S27aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T4S27bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T4S27cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T4S27dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T4S27eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T4S27fJ = 1;
                    }
                }else if($row['nomor_soal'] == '28'){
                    if($row['soaljawaban_order'] == 1){
                        $T4S28aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T4S28bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T4S28cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T4S28dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T4S28eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T4S28fJ = 1;
                    }
                }else if($row['nomor_soal'] == '29'){
                    if($row['soaljawaban_order'] == 1){
                        $T4S29aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T4S29bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T4S29cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T4S29dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T4S29eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T4S29fJ = 1;
                    }
                }else if($row['nomor_soal'] == '30'){
                    if($row['soaljawaban_order'] == 1){
                        $T4S30aJ = 1;
                    }else if($row['soaljawaban_order'] == 2){
                        $T4S30bJ = 1;
                    }else if($row['soaljawaban_order'] == 3){
                        $T4S30cJ = 1;
                    }else if($row['soaljawaban_order'] == 4){
                        $T4S30dJ = 1;
                    }else if($row['soaljawaban_order'] == 5){
                        $T4S30eJ = 1;
                    }else if($row['soaljawaban_order'] == 6){
                        $T4S30fJ = 1;
                    }
                }
    
            }
        }

        $T4S1T = $T4S1a+$T4S1b+$T4S1c+$T4S1d+$T4S1e+$T4S1f;
        $T4S2T = $T4S2a+$T4S2b+$T4S2c+$T4S2d+$T4S2e+$T4S2f;
        $T4S3T = $T4S3a+$T4S3b+$T4S3c+$T4S3d+$T4S3e+$T4S3f;
        $T4S4T = $T4S4a+$T4S4b+$T4S4c+$T4S4d+$T4S4e+$T4S4f;
        $T4S5T = $T4S5a+$T4S5b+$T4S5c+$T4S5d+$T4S5e+$T4S5f;
        $T4S6T = $T4S6a+$T4S6b+$T4S6c+$T4S6d+$T4S6e+$T4S6f;
        $T4S7T = $T4S7a+$T4S7b+$T4S7c+$T4S7d+$T4S7e+$T4S7f;
        $T4S8T = $T4S8a+$T4S8b+$T4S8c+$T4S8d+$T4S8e+$T4S8f;
        $T4S9T = $T4S9a+$T4S9b+$T4S9c+$T4S9d+$T4S9e+$T4S9f;
        $T4S10T = $T4S10a+$T4S10b+$T4S10c+$T4S10d+$T4S10e+$T4S10f;

        $T4S11T = $T4S11a+$T4S11b+$T4S11c+$T4S11d+$T4S11e+$T4S11f;
        $T4S12T = $T4S12a+$T4S12b+$T4S12c+$T4S12d+$T4S12e+$T4S12f;
        $T4S13T = $T4S13a+$T4S13b+$T4S13c+$T4S13d+$T4S13e+$T4S13f;
        $T4S14T = $T4S14a+$T4S14b+$T4S14c+$T4S14d+$T4S14e+$T4S14f;
        $T4S15T = $T4S15a+$T4S15b+$T4S15c+$T4S15d+$T4S15e+$T4S15f;
        $T4S16T = $T4S16a+$T4S16b+$T4S16c+$T4S16d+$T4S16e+$T4S16f;
        $T4S17T = $T4S17a+$T4S17b+$T4S17c+$T4S17d+$T4S17e+$T4S17f;
        $T4S18T = $T4S18a+$T4S18b+$T4S18c+$T4S18d+$T4S18e+$T4S18f;
        $T4S19T = $T4S19a+$T4S19b+$T4S19c+$T4S19d+$T4S19e+$T4S19f;
        $T4S20T = $T4S20a+$T4S20b+$T4S20c+$T4S20d+$T4S20e+$T4S20f;

        $T4S21T = $T4S21a+$T4S21b+$T4S21c+$T4S21d+$T4S21e+$T4S21f;
        $T4S22T = $T4S22a+$T4S22b+$T4S22c+$T4S22d+$T4S22e+$T4S22f;
        $T4S23T = $T4S23a+$T4S23b+$T4S23c+$T4S23d+$T4S23e+$T4S23f;
        $T4S24T = $T4S24a+$T4S24b+$T4S24c+$T4S24d+$T4S24e+$T4S24f;
        $T4S25T = $T4S25a+$T4S25b+$T4S25c+$T4S25d+$T4S25e+$T4S25f;
        $T4S26T = $T4S26a+$T4S26b+$T4S26c+$T4S26d+$T4S26e+$T4S26f;
        $T4S27T = $T4S27a+$T4S27b+$T4S27c+$T4S27d+$T4S27e+$T4S27f;
        $T4S28T = $T4S28a+$T4S28b+$T4S28c+$T4S28d+$T4S28e+$T4S28f;
        $T4S29T = $T4S29a+$T4S29b+$T4S29c+$T4S19d+$T4S29e+$T4S29f;
        $T4S30T = $T4S30a+$T4S30b+$T4S30c+$T4S30d+$T4S30e+$T4S30f;

            $T4S1ALL = 0;
            $T4S2ALL = 0;
            $T4S2ALL = 0;
            $T4S3ALL = 0;
            $T4S4ALL = 0;
            $T4S5ALL = 0;
            $T4S6ALL = 0;
            $T4S7ALL = 0;
            $T4S8ALL = 0;
            $T4S9ALL = 0;
            $T4S10ALL = 0;
            $T4S11ALL = 0;
            $T4S12ALL = 0;
            $T4S13ALL = 0;
            $T4S14ALL = 0;
            $T4S15ALL = 0;
            $T4S16ALL = 0;
            $T4S17ALL = 0;
            $T4S18ALL = 0;
            $T4S19ALL = 0;
            $T4S20ALL = 0;
            $T4S21ALL = 0;
            $T4S22ALL = 0;
            $T4S23ALL = 0;
            $T4S24ALL = 0;
            $T4S25ALL = 0;
            $T4S26ALL = 0;
            $T4S27ALL = 0;
            $T4S28ALL = 0;
            $T4S29ALL = 0;
            $T4S30ALL = 0;



        if($T4S1T == 2){
            $T4S1ALL = 1;
        }
        if($T4S2T == 2){
            $T4S2ALL = 1;
        }
        if($T4S2T == 2){
            $T4S2ALL = 1;
        }
        if($T4S3T == 2){
            $T4S3ALL = 1;
        }
        if($T4S4T == 2){
            $T4S4ALL = 1;
        }
        if($T4S5T == 2){
            $T4S5ALL = 1;
        }
        if($T4S6T == 2){
            $T4S6ALL = 1;
        }
        if($T4S7T == 2){
            $T4S7ALL = 1;
        }
        if($T4S8T == 2){
            $T4S8ALL = 1;
        }
        if($T4S9T == 2){
            $T4S9ALL = 1;
        }
        if($T4S10T == 2){
            $T4S10ALL = 1;
        }
        if($T4S11T == 2){
            $T4S11ALL = 1;
        }
        if($T4S12T == 2){
            $T4S12ALL = 1;
        }
        if($T4S13T == 2){
            $T4S13ALL = 1;
        }
        if($T4S14T == 2){
            $T4S14ALL = 1;
        }
        if($T4S15T == 2){
            $T4S15ALL = 1;
        }
        if($T4S16T == 2){
            $T4S16ALL = 1;
        }
        if($T4S17T == 2){
            $T4S17ALL = 1;
        }
        if($T4S18T == 2){
            $T4S18ALL = 1;
        }
        if($T4S19T == 2){
            $T4S19ALL = 1;
        }
        if($T4S20T == 2){
            $T4S20ALL = 1;
        }
        if($T4S21T == 2){
            $T4S21ALL = 1;
        }
        if($T4S22T == 2){
            $T4S22ALL = 1;
        }
        if($T4S23T == 2){
            $T4S23ALL = 1;
        }
        if($T4S24T == 2){
            $T4S24ALL = 1;
        }
        if($T4S25T == 2){
            $T4S25ALL = 1;
        }
        if($T4S26T == 2){
            $T4S26ALL = 1;
        }

        if($T4S27T == 2){
            $T4S27ALL = 1;
        }

        if($T4S28T == 2){
            $T4S28ALL = 1;
        }

        if($T4S29T == 2){
            $T4S29ALL = 1;
        }

        if($T4S30T == 2){
            $T4S30ALL = 1;
        }
    
        $T4SALL = $T4S1ALL + $T4S2ALL + $T4S3ALL + $T4S4ALL + $T4S5ALL + $T4S6ALL + $T4S7ALL + $T4S8ALL + $T4S9ALL + $T4S10ALL + $T4S11ALL + $T4S12ALL + $T4S13ALL + $T4S14ALL + $T4S15ALL + $T4S16ALL + $T4S17ALL + $T4S18ALL + $T4S19ALL + $T4S20ALL + $T4S21ALL + $T4S22ALL + $T4S23ALL + $T4S24ALL + $T4S25ALL + $T4S26ALL + $T4S27ALL + $T4S28ALL + $T4S29ALL + $T4S30ALL;


// iq score


//TI RAW Score

    $T1ss = 0;
    $T2ss = 0;
    $T3ss = 0;
    $T4ss = 0;
    $TaLLss = 0;

    $kategoriT1= '';
    $kategoriT2= '';
    $kategoriT3= '';
    $kategoriT4= '';
    
    $interpretasiT1 = '';
    $interpretasiT2 = '';
    $interpretasiT3 = '';
    $interpretasiT4 = '';

    // kolom kategori


    

    if($TotalT1 <= 13){
        $kategoriT1= 'KS';
    }else if($TotalT1 <= 21){
        $kategoriT1= 'K';
    }else if($TotalT1 <= 29){
        $kategoriT1= 'C';
    }else if($TotalT1 <= 36){
        $kategoriT1= 'B';
    }else if($TotalT1 <= 40){
        $kategoriT1= 'BS';
    };

    if($T2SALL <= 6){
        $kategoriT2= 'KS';
    }else if($T2SALL <= 11){
        $kategoriT2= 'K';
    }else if($T2SALL <= 16){
        $kategoriT2= 'C';
    }else if($T2SALL <= 20){
        $kategoriT2= 'B';
    }else if($T2SALL <= 26){
        $kategoriT2= 'BS';
    };

    if($T3SALL <= 16){
        $kategoriT3= 'KS';
    }else if($T3SALL <= 24){
        $kategoriT3= 'K';
    }else if($T3SALL <= 30){
        $kategoriT3= 'C';
    }else if($T3SALL <= 34){
        $kategoriT3= 'B';
    }else if($T3SALL <= 40){
        $kategoriT3= 'BS';
    };

    if($T4SALL <= 4){
        $kategoriT4= 'KS';
    }else if($T4SALL <= 7){
        $kategoriT4= 'K';
    }else if($T4SALL <= 11){
        $kategoriT4= 'C';
    }else if($T4SALL <= 18){
        $kategoriT4= 'B';
    }else if($T4SALL <= 30){
        $kategoriT4= 'BS';
    };

    $sqlInterpretasiT1 = "
        SELECT interpretasi_text
        FROM cbt_Interpretasi
        WHERE interpretasi_kode = '".$kategoriT1."'
        AND interpretasi_tesId = 131
        AND interpretasi_subtes = 1
    ";

    if($resultInterpretasiT1 = mysqli_query($mysqli, $sqlInterpretasiT1)){
        while($rowT1 = mysqli_fetch_array($resultInterpretasiT1)){
                $interpretasiT1 = $rowT1['interpretasi_text'];
        }
    }

    $sqlInterpretasiT2 = "
        SELECT interpretasi_text
        FROM cbt_Interpretasi
        WHERE interpretasi_kode = '".$kategoriT2."'
        AND interpretasi_tesId = 131
        AND interpretasi_subtes = 2
    ";

    if($resultInterpretasiT2 = mysqli_query($mysqli, $sqlInterpretasiT2)){
        while($rowT2 = mysqli_fetch_array($resultInterpretasiT2)){
                $interpretasiT2 = $rowT2['interpretasi_text'];
        }
    }

    $sqlInterpretasiT3 = "
        SELECT interpretasi_text
        FROM cbt_Interpretasi
        WHERE interpretasi_kode = '".$kategoriT3."'
        AND interpretasi_tesId = 131
        AND interpretasi_subtes = 3
    ";

    if($resultInterpretasiT3 = mysqli_query($mysqli, $sqlInterpretasiT3)){
        while($rowT3 = mysqli_fetch_array($resultInterpretasiT3)){
                $interpretasiT3 = $rowT3['interpretasi_text'];
        }
    }

    $sqlInterpretasiT4 = "
        SELECT interpretasi_text
        FROM cbt_Interpretasi
        WHERE interpretasi_kode = '".$kategoriT4."'
        AND interpretasi_tesId = 131
        AND interpretasi_subtes = 4
    ";

    if($resultInterpretasiT4 = mysqli_query($mysqli, $sqlInterpretasiT4)){
        while($rowT4 = mysqli_fetch_array($resultInterpretasiT4)){
                $interpretasiT4 = $rowT4['interpretasi_text'];
        }
    }

    // if($TotalT1 <= 13){
    //     $kategoriT1= 'KS';
    //     $interpretasiT1 = 'memiliki kemampuan dalam menyelesaikan permasalahan matematika sederhana yang sangat kurang.';
    // }else if($TotalT1 <= 21){
    //     $kategoriT1= 'K';
    //     $interpretasiT1 = 'kurang memiliki kemampuan dalam menyelesaikan permasalahan matematika sederhana.';
    // }else if($TotalT1 <= 29){
    //     $kategoriT1= 'C';
    //     $interpretasiT1 = 'memiliki kemampuan dalam menyelesaikan permasalahan matematika sederhana yang cukup baik.';
    // }else if($TotalT1 <= 36){
    //     $kategoriT1= 'B';
    //     $interpretasiT1 = 'memiliki kemampuan dalam menyelesaikan permasalahan matematika sederhana yang baik.';
    // }else if($TotalT1 <= 40){
    //     $kategoriT1= 'BS';
    //     $interpretasiT1 = 'memiliki kemampuan dalam menyelesaikan permasalahan matematika sederhana yang baik sekali.';
    // };

    // if($T2SALL <= 6){
    //     $kategoriT2= 'KS';
    //     $interpretasiT2 = 'memiliki kemampuan dalam menganalisa beberapa informasi menjadi suatu konsep kesatuan yang kurang sekali.';
    // }else if($T2SALL <= 11){
    //     $kategoriT2= 'K';
    //     $interpretasiT2 = 'kurang memiliki kemampuan dalam menganalisa beberapa informasi menjadi suatu konsep kesatuan.';
    // }else if($T2SALL <= 16){
    //     $kategoriT2= 'C';
    //     $interpretasiT2 = 'memiliki kemampuan dalam menganalisa beberapa informasi menjadi suatu konsep kesatuan yang cukup baik.';
    // }else if($T2SALL <= 20){
    //     $kategoriT2= 'B';
    //     $interpretasiT2 = 'memiliki kemampuan dalam menganalisa beberapa informasi menjadi suatu konsep kesatuan yang baik.';
    // }else if($T2SALL <= 26){
    //     $kategoriT2= 'BS';
    //     $interpretasiT2 = 'memiliki kemampuan dalam menganalisa beberapa informasi menjadi suatu konsep kesatuan yang sangat baik.';
    // };

    // if($T3SALL <= 16){
    //     $kategoriT3= 'KS';
    //     $interpretasiT3 = 'memiliki kemampuan dalam memahami informasi yang disajikan dalam bentuk kata-kata yang sangat kurang.';
    // }else if($T3SALL <= 24){
    //     $kategoriT3= 'K';
    //     $interpretasiT3 = 'kurang memiliki kemampuan dalam memahami informasi yang disajikan dalam bentuk kata-kata.';
    // }else if($T3SALL <= 30){
    //     $kategoriT3= 'C';
    //     $interpretasiT3 = 'memiliki kemampuan dalam memahami informasi yang disajikan dalam bentuk kata-kata yang cukup baik.';
    // }else if($T3SALL <= 34){
    //     $kategoriT3= 'B';
    //     $interpretasiT3 = 'memiliki kemampuan dalam memahami informasi yang disajikan dalam bentuk kata-kata yang baik.';
    // }else if($T3SALL <= 40){
    //     $kategoriT3= 'BS';
    //     $interpretasiT3 = 'memiliki kemampuan dalam memahami informasi yang disajikan dalam bentuk kata-kata yang sangat baik.';
    // };

    // if($T4SALL <= 4){
    //     $kategoriT4= 'KS';
    //     $interpretasiT4 = 'memiliki kemampuan dalam memproses suatu informasi yang secara fisik tidak tampak, misalnya berkaitan dengan konsep, teori, dan kreasi ide yang kurang sekali.';
    // }else if($T4SALL <= 7){
    //     $kategoriT4= 'K';
    //     $interpretasiT4 = 'kurang dalam memproses suatu informasi yang secara fisik tidak tampak, misalnya berkaitan dengan konsep, teori, dan kreasi ide.';
    // }else if($T4SALL <= 11){
    //     $kategoriT4= 'C';
    //     $interpretasiT4 = 'memiliki kemampuan dalam memproses suatu informasi yang secara fisik tidak tampak, misalnya berkaitan dengan konsep, teori, dan kreasi ide yang cukup baik.';
    // }else if($T4SALL <= 18){
    //     $kategoriT4= 'B';
    //     $interpretasiT4 = 'memiliki kemampuan dalam memproses suatu informasi yang secara fisik tidak tampak, misalnya berkaitan dengan konsep, teori, dan kreasi ide yang baik.';
    // }else if($T4SALL <= 30){
    //     $kategoriT4= 'BS';
    //     $interpretasiT4 = 'memiliki kemampuan dalam memproses suatu informasi yang secara fisik tidak tampak, misalnya berkaitan dengan konsep, teori, dan kreasi ide yang sangat baik.';
    // };


    if($TotalT1 <= 4 ){
        $T1ss = 0;
    }else if($TotalT1 <= 7 ){
        $T1ss = 1;
    }else if($TotalT1 == 8 ){
        $T1ss = 2;
    }else if($TotalT1 == 9 ){
        $T1ss = 3;
    }else if($TotalT1 == 10 ){
        $T1ss = 4;
    }else if($TotalT1 == 11 ){
        $T1ss = 5;
    }else if($TotalT1 == 12 ){
        $T1ss = 6;
    }else if($TotalT1 == 13 ){
        $T1ss = 7;
    }else if($TotalT1 <= 15 ){
        $T1ss = 8;
    }else if($TotalT1 == 16 ){
        $T1ss = 9;
    }else if($TotalT1 <= 18 ){
        $T1ss = 10;
    }else if($TotalT1 <= 20 ){
        $T1ss = 11;
    }else if($TotalT1 == 21 ){
        $T1ss = 12;
    }else if($TotalT1 <= 23 ){
        $T1ss = 13;
    }else if($TotalT1 == 24 ){
        $T1ss = 14;
    }else if($TotalT1 <= 26 ){
        $T1ss = 15;
    }else if($TotalT1 == 27 ){
        $T1ss = 16;
    }else if($TotalT1 <= 29 ){
        $T1ss = 17;
    }else if($TotalT1 <= 30 ){
        $T1ss = 18;
    }else if($TotalT1 <= 32 ){
        $T1ss = 19;
    }else if($TotalT1 == 33 ){
        $T1ss = 20;
    }else if($TotalT1 == 34 ){
        $T1ss = 21;
    }else if($TotalT1 <= 36 ){
        $T1ss = 22;
    }else if($TotalT1 == 37 ){
        $T1ss = 23;
    }else if($TotalT1 == 38 ){
        $T1ss = 24;
    }else if($TotalT1 == 39 ){
        $T1ss = 26;
    }else if($TotalT1 == 40 ){
        $T1ss = 28;
    };

    if($T2SALL <= 1 ){
        $T2ss = 4;
    }else if($T2SALL <= 4 ){
        $T2ss = 5;
    }else if($T2SALL == 5 ){
        $T2ss = 6;
    }else if($T2SALL == 6 ){
        $T2ss = 7;
    }else if($T2SALL == 7 ){
        $T2ss = 8;
    }else if($T2SALL <= 9 ){
        $T2ss = 9;
    }else if($T2SALL == 10 ){
        $T2ss = 11;
    }else if($T2SALL == 11 ){
        $T2ss = 12;
    }else if($T2SALL == 12 ){
        $T2ss = 13;
    }else if($T2SALL == 13 ){
        $T2ss = 14;
    }else if($T2SALL == 14 ){
        $T2ss = 15;
    }else if($T2SALL == 15 ){
        $T2ss = 16;
    }else if($T2SALL == 16 ){
        $T2ss = 17;
    }else if($T2SALL == 17 ){
        $T2ss = 18;
    }else if($T2SALL == 18 ){
        $T2ss = 19;
    }else if($T2SALL == 19 ){
        $T2ss = 21;
    }else if($T2SALL == 20 ){
        $T2ss = 22;
    }else if($T2SALL == 21 ){
        $T2ss = 24;
    }else if($T2SALL == 22 ){
        $T2ss = 25;
    }else if($T2SALL == 23 ){
        $T2ss = 27;
    }else if($T2SALL == 24 ){
        $T2ss = 29;
    }else if($T2SALL <= 26 ){
        $T2ss = 30;
    };


    if($T3SALL <= 3 ){
        $T3ss = 0;
    }else if($T3SALL <= 6 ){
        $T3ss = 1;
    }else if($T3SALL <= 8 ){
        $T3ss = 2;
    }else if($T3SALL == 9 ){
        $T3ss = 3;
    }else if($T3SALL <= 11 ){
        $T3ss = 4;
    }else if($T3SALL <= 13 ){
        $T3ss = 5;
    }else if($T3SALL == 14 ){
        $T3ss = 6;
    }else if($T3SALL <= 16 ){
        $T3ss = 7;
    }else if($T3SALL <= 18 ){
        $T3ss = 8;
    }else if($T3SALL == 19 ){
        $T3ss = 9;
    }else if($T3SALL <= 21 ){
        $T3ss = 10;
    }else if($T3SALL == 22 ){
        $T3ss = 11;
    }else if($T3SALL <= 24 ){
        $T3ss = 12;
    }else if($T3SALL == 25 ){
        $T3ss = 13;
    }else if($T3SALL == 26 ){
        $T3ss = 14;
    }else if($T3SALL <= 28 ){
        $T3ss = 15;
    }else if($T3SALL == 29 ){
        $T3ss = 16;
    }else if($T3SALL == 30 ){
        $T3ss = 17;
    }else if($T3SALL == 31 ){
        $T3ss = 18;
    }else if($T3SALL == 32 ){
        $T3ss = 19;
    }else if($T3SALL == 33 ){
        $T3ss = 20;
    }else if($T3SALL == 34 ){
        $T3ss = 22;
    }else if($T3SALL == 35 ){
        $T3ss = 24;
    }else if($T3SALL == 36 ){
        $T3ss = 25;
    }else if($T3SALL == 37 ){
        $T3ss = 26;
    }else if($T3SALL == 38 ){
        $T3ss = 28;
    }else if($T3SALL <= 40 ){
        $T3ss = 30;
    };


    if($T4SALL <= 1 ){
        $T4ss = 0;
    }else if($T4SALL == 2 ){
        $T4ss = 3;
    }else if($T4SALL == 3 ){
        $T4ss = 6;
    }else if($T4SALL == 4 ){
        $T4ss = 7;
    }else if($T4SALL == 5 ){
        $T4ss = 9;
    }else if($T4SALL == 6 ){
        $T4ss = 10;
    }else if($T4SALL == 7 ){
        $T4ss = 12;
    }else if($T4SALL == 8 ){
        $T4ss = 13;
    }else if($T4SALL == 9 ){
        $T4ss = 14;
    }else if($T4SALL == 10 ){
        $T4ss = 16;
    }else if($T4SALL == 11 ){
        $T4ss = 17;
    }else if($T4SALL <= 13 ){
        $T4ss = 18;
    }else if($T4SALL == 14 ){
        $T4ss = 19;
    }else if($T4SALL == 15 ){
        $T4ss = 20;
    }else if($T4SALL <= 17 ){
        $T4ss = 21;
    }else if($T4SALL == 18 ){
        $T4ss = 22;
    }else if($T4SALL == 19 ){
        $T4ss = 23;
    }else if($T4SALL <= 21 ){
        $T4ss = 24;
    }else if($T4SALL <= 23 ){
        $T4ss = 25;
    }else if($T4SALL == 24 ){
        $T4ss = 26;
    }else if($T4SALL == 25 ){
        $T4ss = 28;
    }else if($T4SALL == 26 ){
        $T4ss = 29;
    }else if($T4SALL <= 30 ){
        $T4ss = 30;
    };




    
    $TaLLss = $T1ss + $T2ss + $T3ss + $T4ss;
    $TallIQ = 0;

    if($TaLLss <= 21 ){
        $TallIQ = 56;
    }else if($TaLLss == 22 ){
        $TallIQ = 57;
    }else if($TaLLss == 23 ){
        $TallIQ = 58;
    }else if($TaLLss == 24 ){
        $TallIQ = 60;
    }else if($TaLLss == 25 ){
        $TallIQ = 61;
    }else if($TaLLss == 26 ){
        $TallIQ = 62;
    }else if($TaLLss == 27 ){
        $TallIQ = 64;
    }else if($TaLLss == 28 ){
        $TallIQ = 65;
    }else if($TaLLss == 29 ){
        $TallIQ = 66;
    }else if($TaLLss == 30 ){
        $TallIQ = 67;
    }else if($TaLLss == 31 ){
        $TallIQ = 68;
    }else if($TaLLss == 32 ){
        $TallIQ = 70;
    }else if($TaLLss == 33 ){
        $TallIQ = 71;
    }else if($TaLLss == 34 ){
        $TallIQ = 72;
    }else if($TaLLss == 35 ){
        $TallIQ = 73;
    }else if($TaLLss == 36 ){
        $TallIQ = 74;
    }else if($TaLLss == 37 ){
        $TallIQ = 75;
    }else if($TaLLss == 38 ){
        $TallIQ = 77;
    }else if($TaLLss == 39 ){
        $TallIQ = 78;
    }else if($TaLLss == 40 ){
        $TallIQ = 79;
    }else if($TaLLss == 41 ){
        $TallIQ = 80;
    }else if($TaLLss == 42 ){
        $TallIQ = 81;
    }else if($TaLLss == 43 ){
        $TallIQ = 83;
    }else if($TaLLss == 44 ){
        $TallIQ = 84;
    }else if($TaLLss == 45 ){
        $TallIQ = 85;
    }else if($TaLLss == 46 ){
        $TallIQ = 86;
    }else if($TaLLss == 47 ){
        $TallIQ = 87;
    }else if($TaLLss == 48 ){
        $TallIQ = 89;
    }else if($TaLLss == 49 ){
        $TallIQ = 90;
    }else if($TaLLss == 50 ){
        $TallIQ = 91;
    }else if($TaLLss == 51 ){
        $TallIQ = 92;
    }else if($TaLLss == 52 ){
        $TallIQ = 93;
    }else if($TaLLss == 53 ){
        $TallIQ = 94;
    }else if($TaLLss == 54 ){
        $TallIQ = 96;
    }else if($TaLLss == 55 ){
        $TallIQ = 97;
    }else if($TaLLss == 56 ){
        $TallIQ = 98;
    }else if($TaLLss == 57 ){
        $TallIQ = 99;
    }else if($TaLLss == 58 ){
        $TallIQ = 100;
    }else if($TaLLss == 59 ){
        $TallIQ = 102;
    }else if($TaLLss == 60 ){
        $TallIQ = 103;
    }else if($TaLLss == 61 ){
        $TallIQ = 104;
    }else if($TaLLss == 62 ){
        $TallIQ = 105;
    }else if($TaLLss == 63 ){
        $TallIQ = 106;
    }else if($TaLLss == 64 ){
        $TallIQ = 107;
    }else if($TaLLss == 65 ){
        $TallIQ = 108;
    }else if($TaLLss == 66 ){
        $TallIQ = 109;
    }else if($TaLLss == 67 ){
        $TallIQ = 110;
    }else if($TaLLss == 68 ){
        $TallIQ = 112;
    }else if($TaLLss == 69 ){
        $TallIQ = 113;
    }else if($TaLLss == 70 ){
        $TallIQ = 114;
    }else if($TaLLss == 71 ){
        $TallIQ = 115;
    }else if($TaLLss == 72 ){
        $TallIQ = 117;
    }else if($TaLLss == 73 ){
        $TallIQ = 118;
    }else if($TaLLss == 74 ){
        $TallIQ = 119;
    }else if($TaLLss == 75 ){
        $TallIQ = 120;
    }else if($TaLLss == 76 ){
        $TallIQ = 122;
    }else if($TaLLss == 77 ){
        $TallIQ = 123;
    }else if($TaLLss == 78 ){
        $TallIQ = 124;
    }else if($TaLLss == 79 ){
        $TallIQ = 125;
    }else if($TaLLss == 80 ){
        $TallIQ = 126;
    }else if($TaLLss == 81 ){
        $TallIQ = 127;
    }else if($TaLLss == 82 ){
        $TallIQ = 129;
    }else if($TaLLss == 83 ){
        $TallIQ = 130;
    }else if($TaLLss == 84 ){
        $TallIQ = 131;
    }else if($TaLLss == 85 ){
        $TallIQ = 132;
    }else if($TaLLss == 86 ){
        $TallIQ = 133;
    }else if($TaLLss == 87 ){
        $TallIQ = 134;
    }else if($TaLLss == 88 ){
        $TallIQ = 135;
    }else if($TaLLss == 89 ){
        $TallIQ = 137;
    }else if($TaLLss == 90 ){
        $TallIQ = 138;
    }else if($TaLLss == 91 ){
        $TallIQ = 139;
    }else if($TaLLss == 92 ){
        $TallIQ = 140;
    }else if($TaLLss == 93 ){
        $TallIQ = 142;
    }else if($TaLLss == 94 ){
        $TallIQ = 143;
    }else if($TaLLss == 95 ){
        $TallIQ = 144;
    }else if($TaLLss >= 96 ){
        $TallIQ = 145;
    }

    $statusLulus = '';
    $IQLevel = '';

    if($TallIQ <= 89){
        $IQLevel = 'Dibawah Rata-Rata';
    }else if($TallIQ >= 90 && $TallIQ <= 110){
        $IQLevel = 'Rata-Rata';
    }else if($TallIQ >= 111 && $TallIQ <= 120){
        $IQLevel = 'Diatas Rata-Rata';
    }else if($TallIQ >= 121 && $TallIQ <= 127){
        $IQLevel = 'Cerdas';
    }else if($TallIQ >= 128){
        $IQLevel = 'Sangat Cerdas';
    }
    if($TallIQ >= 100){
        $statusLulus = 'Lulus';
    }else{
        $statusLulus = 'Tidak Lulus';
    }
    
    if($reportShowTIKI == "Yes"){
?>
<html>
<head>
<title>TIKI</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<!-- <section class="invoice" style="height: 240em;" > -->
<section class="invoice">
<!-- <body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"> -->

<!-- <div style="width:100%; text-align: center; margin-top: 10px;"><H4 >LEMBAR JAWABAN TIKI-T</H4></div>
<div style="width:100%; text-align: center; margin-top: 10px;">&nbsp;</div> -->
<table  style="margin-left: 80px; margin-right: 80px; border-collapse: collapse; text-align: center; width:80%;  margin-top: 2em;">
    <tr>
        <td style="text-align:center;"><H4><strong>LEMBAR JAWABAN TIKI-T</strong></H4></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
</table>
<table  style="margin-left: 80px; margin-right: 80px; border-collapse: collapse; font-size: 12px;">
    <tr>
        <td style="width: 10%;">No. Test</td>
        <td>:</td>
        <td style="width: 30%; border-bottom: 1px solid black;">&nbsp;</td>
        <td style="width: 15%;">&nbsp;</td>
        <td>&nbsp;</td>
        <td style="width: 5%;">&nbsp;</td>
        <td style="border: 1px solid black; text-align: center;"><strong>RS</strong></td>
        <td style="border: 1px solid black; text-align: center;width: 40px;"><strong>SS</strong></td>
        <td style="border: 1px solid black; text-align: center;"><strong>&nbsp;Kategori&nbsp;</strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td style="width: 10%;">Nama</td>
        <td>:</td>
        <td style="width: 30%; border-bottom: 1px solid black;"><?php echo $name;?></td>
        <td><?php if($jenis_kelamin == 1){
            echo "(<strike>L</strike>/P)";
        }else{
            echo "(L/<strike>P</strike>)";
        } ?></td>
        <td>&nbsp;</td>
        <td style="border: 1px solid black; text-align: center;"><strong>T-1</strong></td>
        <td style="border: 1px solid black; text-align: center;"><?php echo $TotalT1; ?></td>
        <td style="border: 1px solid black; text-align: center;"><?php echo $T1ss; ?></td>
        <td style="border: 1px solid black; text-align: center;"><?php echo $kategoriT1; ?></td>
    </tr>
    <tr>
        <td>Pendidikan</td>
        <td>:</td>
        <td style="border-bottom: 1px solid black;">
        <?php 
            if($pendidikan_terakhir == 1){
                echo "SMA";
            }else if($pendidikan_terakhir == 2){
                echo "SMK";
            }else if($pendidikan_terakhir == 3){
                echo "S1";
            }else if($pendidikan_terakhir == 4){
                echo "S2";
            }else if($pendidikan_terakhir == 5){
                echo "S3";
            }else if($pendidikan_terakhir > 5){
                echo "Lain-Lain";
            }
        ?>
        </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td style="border: 1px solid black; text-align: center;"><strong>T-2</strong></td>
        <td style="border: 1px solid black; text-align: center;"><?php echo $T2SALL; ?></td>
        <td style="border: 1px solid black; text-align: center;"><?php echo $T2ss; ?></td>
        <td style="border: 1px solid black; text-align: center;"><?php echo $kategoriT2; ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>Usia</td>
        <td>:</td>
        <td style="border-bottom: 1px solid black;"><?php echo $from->diff($to)->y.' Tahun';?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td style="border: 1px solid black; text-align: center;"><strong>T-3</strong></td>
        <td style="border: 1px solid black; text-align: center;"><?php echo $T3SALL; ?></td>
        <td style="border: 1px solid black; text-align: center;"><?php echo $T3ss; ?></td>
        <td style="border: 1px solid black; text-align: center;"><?php echo $kategoriT3; ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>Tgl. Lahir</td>
        <td>:</td>
        <td style="border-bottom: 1px solid black;"><?php $date=date_create($tanggal_lahir); echo date_format($date,"d F Y");?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td style="border: 1px solid black; text-align: center;"><strong>T-4</strong></td>
        <td style="border: 1px solid black; text-align: center;"><?php echo $T4SALL; ?></td>
        <td style="border: 1px solid black; text-align: center;"><?php echo $T4ss; ?></td>
        <td style="border: 1px solid black; text-align: center;"><?php echo $kategoriT4; ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>Tgl. Test</td>
        <td>:</td>
        <td style="border-bottom: 1px solid black;"><?php $date=date_create($tanggal_tes); echo date_format($date,"d F Y");?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td style="border: 1px solid black; text-align: center;" colspan="2"><strong>Total</strong></td>
        <td style="border: 1px solid black; text-align: center;" colspan="2"><?php echo $TaLLss; ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>Status</td>
        <td>:</td>
        <td style="border-bottom: 1px solid black;"><?php if($status == 5){ echo "Time Out";}else if($status == 4 ){echo "Selesai";}else{ echo "Belum Dikerjakan";}  ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td style="border: 1px solid black; text-align: center;" colspan="2"><strong>IQ</strong></td>
        <td style="border: 1px solid black; text-align: center;" colspan="2"><?php echo $TallIQ; ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td style="border: 1px solid black; text-align: center;" colspan="2"><strong>IQ Level</strong></td>
        <td style="border-top: 1px solid; border-left: 1px solid; border-right: 1px solid; border-bottom: 1px solid; text-align: center; width: 15%;" colspan="2"><?php echo $IQLevel;?></td>
        <!-- <td>&nbsp;</td>
        <td>&nbsp;</td> -->
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td style="border: 1px solid black; text-align: center;" colspan="2"><strong>Status</strong></td>
        <td style="border-top: 1px solid; border-left: 1px solid; border-right: 1px solid; border-bottom: 1px solid; text-align: center; width: 15%;" colspan="2"><?php echo $statusLulus;?></td>
        <!-- <td>&nbsp;</td>
        <td>&nbsp;</td> -->
        <td>&nbsp;</td>
    </tr>
</table>
<table style="margin-left: 80px; margin-right: 80px;">
    <tr>
        <td><strong>SUB TES : 1 BERHITUNG ANGKA</strong></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
</table>
<div>
        <!-- border-bottom: 1px solid; border-top: 1px solid; border-right: 1px solid; border-left: 1px solid; -->
<table style="margin-left: 80px; margin-right: 80px;  border-collapse: collapse; font-size: 12px;">
    <tr>
        <td style="border-top: 1px solid black; border-left: 1px solid black;">&nbsp;Contoh :</td>
        <td style="border-top: 1px solid black;">&nbsp;</td>
        <td style="border-top: 1px solid black;">&nbsp;</td>
        <td style="border-top: 1px solid black;">&nbsp;</td>
        <td style="border-top: 1px solid black;">&nbsp;</td>
        <td style="border-top: 1px solid black; border-right: 1px solid black;">&nbsp;</td>
    </tr>
    <tr>
        <td style="border-left: 1px solid black;">&nbsp;</td>
        <td style="width: 30px;">1</td>
        <td style="width: 30px;">a</td>
        <td style="width: 30px;">b</td>
        <td style="width: 30px;">c</td>
        <td style="width: 30px; border-right: 1px solid black;">d</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td style="border-left: 1px solid black;">&nbsp;</td>
        <td style="width: 30px;">2</td>
        <td style="width: 30px;">a</td>
        <td style="width: 30px;">b</td>
        <td style="width: 30px;">c</td>
        <td style="width: 30px; border-right: 1px solid black;">d</td>
        <td style="width: 250px;">&nbsp;</td>
        <td style="width: 30px;">&nbsp;</td>
    </tr>
    <tr>
        <td style="border-left: 1px solid black;">&nbsp;</td>
        <td style="width: 30px;">3</td>
        <td style="width: 30px;">a</td>
        <td style="width: 30px;">b</td>
        <td style="width: 30px;">c</td>
        <td style="width: 30px; border-right: 1px solid black;">d</td>
        <td style="width: 250px;">&nbsp;</td>
        <td style="width: 150px; border-top: 1px solid; border-left: 1px solid; border-right: 1px solid;"><strong>&nbsp;RS = <?php echo $TotalT1; ?></strong></td>
    </tr>
    <tr>
        <td style="border-left: 1px solid black;">&nbsp;</td>
        <td style="width: 30px;">4</td>
        <td style="width: 30px;">a</td>
        <td style="width: 30px;">b</td>
        <td style="width: 30px;">c</td>
        <td style="width: 30px; border-right: 1px solid black;">d</td>
        <td style="width: 250px;">&nbsp;</td>
        <td style="width: 150px; border-left: 1px solid; border-right: 1px solid;">&nbsp;</td>
    </tr>
    <tr>
        <td style="border-bottom: 1px solid black; border-left: 1px solid black;">&nbsp;</td>
        <td style="width: 30px; border-bottom: 1px solid black;">5</td>
        <td style="width: 30px; border-bottom: 1px solid black;">a</td>
        <td style="width: 30px; border-bottom: 1px solid black;">b</td>
        <td style="width: 30px; border-bottom: 1px solid black;">c</td>
        <td style="width: 30px; border-bottom: 1px solid black; border-right: 1px solid black;">d</td>
        <td style="width: 250px;">&nbsp;</td>
        <td style="width: 150px; border-left: 1px solid; border-right: 1px solid; border-bottom: 1px solid;">&nbsp;</td>
    </tr>
</table>


<table style="margin-left: 80px; margin-right: 80px; font-size: 12px;">
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: center;">1</td>
        <td style="width: 30px;"><?php if($T1S1 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S1 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S1 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S1 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">16</td>
        <td style="width: 30px;"><?php if($T1S16 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S16 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S16 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S16 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">31</td>
        <td style="width: 30px;"><?php if($T1S31 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S31 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S31 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S31 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: center;">2</td>
        <td style="width: 30px;"><?php if($T1S2 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S2 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S2 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S2 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">17</td>
        <td style="width: 30px;"><?php if($T1S17 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S17 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S17 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S17 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">32</td>
        <td style="width: 30px;"><?php if($T1S32 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S32 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S32 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S32 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: center;">3</td>
        <td style="width: 30px;"><?php if($T1S3 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S3 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S3 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S3 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">18</td>
        <td style="width: 30px;"><?php if($T1S18 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S18 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S18 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S18 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">33</td>
        <td style="width: 30px;"><?php if($T1S33 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S33 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S33 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S33 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: center;">4</td>
        <td style="width: 30px;"><?php if($T1S4 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S4 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S4 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S4 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">19</td>
        <td style="width: 30px;"><?php if($T1S19 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S19 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S19 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S19 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">34</td>
        <td style="width: 30px;"><?php if($T1S34 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S34 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S34 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S34 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: center;">5</td>
        <td style="width: 30px;"><?php if($T1S5 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S5 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S5 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S5 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">20</td>
        <td style="width: 30px;"><?php if($T1S20 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S20 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S20 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S20 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">35</td>
        <td style="width: 30px;"><?php if($T1S35 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S35 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S35 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S35 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: center;">6</td>
        <td style="width: 30px;"><?php if($T1S6 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S6 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S6 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S6 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">21</td>
        <td style="width: 30px;"><?php if($T1S21 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S21 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S21 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S21 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">36</td>
        <td style="width: 30px;"><?php if($T1S36 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S36 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S36 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S36 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: center;">7</td>
        <td style="width: 30px;"><?php if($T1S7 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S7 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S7 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S7 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">22</td>
        <td style="width: 30px;"><?php if($T1S22 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S22 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S22 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S22 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">37</td>
        <td style="width: 30px;"><?php if($T1S37 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S37 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S37 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S37 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: center;">8</td>
        <td style="width: 30px;"><?php if($T1S8 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S8 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S8 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S8 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">23</td>
        <td style="width: 30px;"><?php if($T1S23 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S23 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S23 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S23 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">38</td>
        <td style="width: 30px;"><?php if($T1S38 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S38 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S38 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S38 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: center;">9</td>
        <td style="width: 30px;"><?php if($T1S9 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S9 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S9 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S9 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">24</td>
        <td style="width: 30px;"><?php if($T1S24 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S24 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S24 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S24 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">39</td>
        <td style="width: 30px;"><?php if($T1S39 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S39 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S39 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S39 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: center;">10</td>
        <td style="width: 30px;"><?php if($T1S10 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S10 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S10 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S10 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">25</td>
        <td style="width: 30px;"><?php if($T1S25 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S25 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S25 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S25 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">40</td>
        <td style="width: 30px;"><?php if($T1S40 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S40 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S40 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S40 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: center;">11</td>
        <td style="width: 30px;"><?php if($T1S11 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S11 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S11 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S11 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">26</td>
        <td style="width: 30px;"><?php if($T1S26 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S26 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S26 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S26 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: center;">12</td>
        <td style="width: 30px;"><?php if($T1S12 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S12 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S12 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S12 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">27</td>
        <td style="width: 30px;"><?php if($T1S27 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S27 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S27 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S27 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: center;">13</td>
        <td style="width: 30px;"><?php if($T1S13 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S13 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S13 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S13 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">28</td>
        <td style="width: 30px;"><?php if($T1S28 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S28 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S28 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S28 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: center;">14</td>
        <td style="width: 30px;"><?php if($T1S14 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S14 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S14 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S14 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">29</td>
        <td style="width: 30px;"><?php if($T1S29 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S29 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S29 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S29 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: center;">15</td>
        <td style="width: 30px;"><?php if($T1S15 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S15 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S15 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S15 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">30</td>
        <td style="width: 30px;"><?php if($T1S30 == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T1S30 == '2'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T1S30 == '3'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T1S30 == '4'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
    </tr>
</table>

<table style="margin-left: 80px; margin-right: 80px;">
    <tr>
        <td>&nbsp;</td>
    </tr>
        <tr>
            <td><strong>SUBTES : 2 GABUNGAN BAGIAN</strong></td>
        </tr>
        <tr>
                <td>&nbsp;</td>
            </tr>
    </table>
    <div>
            <!-- border-bottom: 1px solid; border-top: 1px solid; border-right: 1px solid; border-left: 1px solid; -->
    <table style="margin-left: 80px; margin-right: 80px;  border-collapse: collapse; font-size: 12px;">
        <tr>
            <td style="border-top: 1px solid black; border-left: 1px solid black;">&nbsp;Contoh :</td>
            <td style="border-top: 1px solid black;">&nbsp;</td>
            <td style="border-top: 1px solid black;">&nbsp;</td>
            <td style="border-top: 1px solid black;">&nbsp;</td>
            <td style="border-top: 1px solid black;">&nbsp;</td>
            <td style="border-top: 1px solid black;">&nbsp;</td>
            <td style="border-top: 1px solid black;">&nbsp;</td>
            <td style="border-top: 1px solid black; border-right: 1px solid black;">&nbsp;</td>
        </tr>
        <tr>
            <td style="border-left: 1px solid black;">&nbsp;</td>
            <td style="width: 30px;">1</td>
            <td style="width: 30px;">a</td>
            <td style="width: 30px;">b</td>
            <td style="width: 30px;">c</td>
            <td style="width: 30px;">d</td>
            <td style="width: 30px;">e</td>
            <td style="width: 30px; border-right: 1px solid black;">f</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td style="border-left: 1px solid black;">&nbsp;</td>
            <td style="width: 30px;">2</td>
            <td style="width: 30px;">a</td>
            <td style="width: 30px;">b</td>
            <td style="width: 30px;">c</td>
            <td style="width: 30px;">d</td>
            <td style="width: 30px;">e</td>
            <td style="width: 30px; border-right: 1px solid black;">f</td>
            <td style="width: 150px;">&nbsp;</td>
            <td style="width: 150px; border-top: 1px solid; border-left: 1px solid; border-right: 1px solid;"><strong>&nbsp;RS = <?php echo $T2SALL;?></strong></td>
        </tr>
        <tr>
            <td style="border-left: 1px solid black;">&nbsp;</td>
            <td style="width: 30px;">3</td>
            <td style="width: 30px;">a</td>
            <td style="width: 30px;">b</td>
            <td style="width: 30px;">c</td>
            <td style="width: 30px;">d</td>
            <td style="width: 30px;">e</td>
            <td style="width: 30px; border-right: 1px solid black;">f</td>
            <td style="width: 30px;">&nbsp;</td>
            <td style="width: 150px; border-left: 1px solid; border-right: 1px solid;">&nbsp;</td>
        </tr>
        <tr>
            <td style="border-left: 1px solid black; border-bottom: 1px solid black;">&nbsp;</td>
            <td style="width: 30px; border-bottom: 1px solid black;">4</td>
            <td style="width: 30px; border-bottom: 1px solid black;">a</td>
            <td style="width: 30px; border-bottom: 1px solid black;">b</td>
            <td style="width: 30px; border-bottom: 1px solid black;">c</td>
            <td style="width: 30px; border-bottom: 1px solid black;">d</td>
            <td style="width: 30px; border-bottom: 1px solid black;">e</td>
            <td style="width: 30px; border-right: 1px solid black; border-bottom: 1px solid black;">f</td>
            <td style="width: 30px;">&nbsp;</td>
            <td style="width: 150px; border-left: 1px solid; border-right: 1px solid; border-bottom: 1px solid;">&nbsp;</td>
        </tr>
    </table>
    
    
    <table style="margin-left: 80px; margin-right: 80px; font-size: 12px;">
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: center;">1</td>
            <td style="width: 30px;"><?php if($T2S1aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T2S1bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T2S1cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T2S1dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T2S1eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T2S1fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
            <td style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: center;">14</td>
            <td style="width: 30px;"><?php if($T2S14aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T2S14bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T2S14cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T2S14dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T2S14eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T2S14fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: center;">2</td>
            <td style="width: 30px;"><?php if($T2S2aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T2S2bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T2S2cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T2S2dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T2S2eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T2S2fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
            <td style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: center;">15</td>
            <td style="width: 30px;"><?php if($T2S15aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T2S15bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T2S15cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T2S15dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T2S15eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T2S15fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: center;">3</td>
            <td style="width: 30px;"><?php if($T2S3aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T2S3bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T2S3cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T2S3dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T2S3eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T2S3fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
            <td style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: center;">16</td>
            <td style="width: 30px;"><?php if($T2S16aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T2S16bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T2S16cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T2S16dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T2S16eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T2S16fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: center;">4</td>
            <td style="width: 30px;"><?php if($T2S4aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T2S4bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T2S4cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T2S4dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T2S4eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T2S4fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
            <td style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: center;">17</td>
            <td style="width: 30px;"><?php if($T2S17aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T2S17bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T2S17cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T2S17dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T2S17eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T2S17fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: center;">5</td>
            <td style="width: 30px;"><?php if($T2S5aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T2S5bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T2S5cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T2S5dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T2S5eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T2S5fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
            <td style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: center;">18</td>
            <td style="width: 30px;"><?php if($T2S18aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T2S18bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T2S18cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T2S18dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T2S18eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T2S18fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: center;">6</td>
            <td style="width: 30px;"><?php if($T2S6aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T2S6bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T2S6cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T2S6dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T2S6eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T2S6fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
            <td style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: center;">19</td>
            <td style="width: 30px;"><?php if($T2S19aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T2S19bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T2S19cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T2S19dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T2S19eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T2S19fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: center;">7</td>
            <td style="width: 30px;"><?php if($T2S7aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T2S7bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T2S7cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T2S7dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T2S7eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T2S7fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
            <td style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: center;">20</td>
            <td style="width: 30px;"><?php if($T2S20aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T2S20bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T2S20cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T2S20dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T2S20eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T2S20fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: center;">8</td>
            <td style="width: 30px;"><?php if($T2S8aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T2S8bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T2S8cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T2S8dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T2S8eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T2S8fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
            <td style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: center;">21</td>
            <td style="width: 30px;"><?php if($T2S21aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T2S21bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T2S21cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T2S21dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T2S21eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T2S21fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: center;">9</td>
            <td style="width: 30px;"><?php if($T2S9aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T2S9bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T2S9cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T2S9dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T2S9eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T2S9fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
            <td style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: center;">22</td>
            <td style="width: 30px;"><?php if($T2S22aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T2S22bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T2S22cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T2S22dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T2S22eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T2S22fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: center;">10</td>
            <td style="width: 30px;"><?php if($T2S10aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T2S10bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T2S10cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T2S10dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T2S10eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T2S10fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
            <td style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: center;">23</td>
            <td style="width: 30px;"><?php if($T2S23aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T2S23bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T2S23cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T2S23dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T2S23eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T2S23fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: center;">11</td>
            <td style="width: 30px;"><?php if($T2S11aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T2S11bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T2S11cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T2S11dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T2S11eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T2S11fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
            <td style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: center;">24</td>
            <td style="width: 30px;"><?php if($T2S24aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T2S24bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T2S24cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T2S24dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T2S24eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T2S24fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: center;">12</td>
            <td style="width: 30px;"><?php if($T2S12aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T2S12bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T2S12cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T2S12dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T2S12eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T2S12fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
            <td style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: center;">25</td>
            <td style="width: 30px;"><?php if($T2S25aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T2S25bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T2S25cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T2S25dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T2S25eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T2S25fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: center;">13</td>
            <td style="width: 30px;"><?php if($T2S13aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T2S13bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T2S13cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T2S13dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T2S13eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T2S13fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
            <td style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: center;">26</td>
            <td style="width: 30px;"><?php if($T2S26aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T2S26bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T2S26cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T2S26dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T2S26eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T2S26fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
        </tr>
    </table>

    <div>&nbsp;</div>
    <div>&nbsp;</div>
    <footer style="page-break-after: always; "></footer>
    <table style="margin-left: 80px; margin-right: 80px; width:80%; margin-top: 2em;">
        <tr>
            <td style="text-align: center;"><strong>LEMBAR JAWABAN TIKI-T</strong></td>
        </tr>
        <tr>
        <td>&nbsp;</td>
        </tr>
    </table>


<table  style="margin-left: 80px; margin-right: 80px; border-collapse: collapse; font-size: 12px;">
    <tr>
        <td style="width: 10%;">No. Test</td>
        <td>:</td>
        <td style="width: 30%; border-bottom: 1px solid black;">&nbsp;</td>
        <td style="width: 15%;">&nbsp;</td>
    </tr>
    <tr>
        <td style="width: 10%;">Nama</td>
        <td>:</td>
        <td style="width: 30%; border-bottom: 1px solid black;"><?php echo $name;?></td>
        <td><?php if($jenis_kelamin == 1){
            echo "(<strike>L</strike>/P)";
        }else{
            echo "(L/<strike>P</strike>)";
        } ?></td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>Tgl. Test</td>
        <td>:</td>
        <td style="border-bottom: 1px solid black;"><?php $date=date_create($tanggal_tes); echo date_format($date,"d F Y");?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
</table>
<table style="margin-left: 80px; margin-right: 80px;">
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td><strong>SUB TES : 3 HUBUNGAN KATA</strong></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
</table>
<div>
        <!-- border-bottom: 1px solid; border-top: 1px solid; border-right: 1px solid; border-left: 1px solid; -->
<table style="margin-left: 80px; margin-right: 80px;  border-collapse: collapse; font-size: 12px;">
    <tr>
        <td style="border-top: 1px solid black; border-left: 1px solid black;">&nbsp;Contoh :</td>
        <td style="border-top: 1px solid black;">&nbsp;</td>
        <td style="border-top: 1px solid black;">&nbsp;</td>
        <td style="border-top: 1px solid black;">&nbsp;</td>
        <td style="border-top: 1px solid black;">&nbsp;</td>
        <td style="border-top: 1px solid black; border-right: 1px solid black;">&nbsp;</td>
    </tr>
    <tr>
        <td style="border-left: 1px solid black;">&nbsp;</td>
        <td style="width: 30px;">1</td>
        <td style="width: 30px;">a</td>
        <td style="width: 30px;">b</td>
        <td style="width: 30px;">c</td>
        <td style="width: 30px; border-right: 1px solid black;">d</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td style="border-left: 1px solid black;">&nbsp;</td>
        <td style="width: 30px;">2</td>
        <td style="width: 30px;">a</td>
        <td style="width: 30px;">b</td>
        <td style="width: 30px;">c</td>
        <td style="width: 30px; border-right: 1px solid black;">d</td>
        <td style="width: 250px;">&nbsp;</td>
        <td style="width: 30px;">&nbsp;</td>
    </tr>
    <tr>
        <td style="border-left: 1px solid black;">&nbsp;</td>
        <td style="width: 30px;">3</td>
        <td style="width: 30px;">a</td>
        <td style="width: 30px;">b</td>
        <td style="width: 30px;">c</td>
        <td style="width: 30px; border-right: 1px solid black;">d</td>
        <td style="width: 250px;">&nbsp;</td>
        <td style="width: 150px; border-top: 1px solid; border-left: 1px solid; border-right: 1px solid;"><strong>&nbsp;RS = <?php echo $T3SALL; ?></strong></td>
    </tr>
    <tr>
        <td style="border-left: 1px solid black;">&nbsp;</td>
        <td style="width: 30px;">4</td>
        <td style="width: 30px;">a</td>
        <td style="width: 30px;">b</td>
        <td style="width: 30px;">c</td>
        <td style="width: 30px; border-right: 1px solid black;">d</td>
        <td style="width: 250px;">&nbsp;</td>
        <td style="width: 150px; border-left: 1px solid; border-right: 1px solid;">&nbsp;</td>
    </tr>
    <tr>
        <td style="border-bottom: 1px solid black; border-left: 1px solid black;">&nbsp;</td>
        <td style="width: 30px; border-bottom: 1px solid black;">5</td>
        <td style="width: 30px; border-bottom: 1px solid black;">a</td>
        <td style="width: 30px; border-bottom: 1px solid black;">b</td>
        <td style="width: 30px; border-bottom: 1px solid black;">c</td>
        <td style="width: 30px; border-bottom: 1px solid black; border-right: 1px solid black;">d</td>
        <td style="width: 250px;">&nbsp;</td>
        <td style="width: 150px; border-left: 1px solid; border-right: 1px solid; border-bottom: 1px solid;">&nbsp;</td>
    </tr>
</table>


<table style="margin-left: 80px; margin-right: 80px; font-size: 12px;">
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: center;">1</td>
        <td style="width: 30px;"><?php if($T3S1aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S1bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S1cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S1dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">16</td>
        <td style="width: 30px;"><?php if($T3S16aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S16bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S16cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S16dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">31</td>
        <td style="width: 30px;"><?php if($T3S31aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S31bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S31cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S31dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: center;">2</td>
        <td style="width: 30px;"><?php if($T3S2aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S2bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S2cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S2dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">17</td>
        <td style="width: 30px;"><?php if($T3S17aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S17bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S17cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S17dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">32</td>
        <td style="width: 30px;"><?php if($T3S32aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S32bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S32cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S32dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: center;">3</td>
        <td style="width: 30px;"><?php if($T3S3aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S3bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S3cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S3dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">18</td>
        <td style="width: 30px;"><?php if($T3S18aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S18bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S18cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S18dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">33</td>
        <td style="width: 30px;"><?php if($T3S33aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S33bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S33cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S33dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: center;">4</td>
        <td style="width: 30px;"><?php if($T3S4aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S4bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S4cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S4dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">19</td>
        <td style="width: 30px;"><?php if($T3S19aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S19bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S19cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S19dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">34</td>
        <td style="width: 30px;"><?php if($T3S34aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S34bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S34cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S34dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: center;">5</td>
        <td style="width: 30px;"><?php if($T3S5aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S5bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S5cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S5dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">20</td>
        <td style="width: 30px;"><?php if($T3S20aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S20bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S20cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S20dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">35</td>
        <td style="width: 30px;"><?php if($T3S35aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S35bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S35cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S35dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: center;">6</td>
        <td style="width: 30px;"><?php if($T3S6aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S6bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S6cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S6dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">21</td>
        <td style="width: 30px;"><?php if($T3S21aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S21bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S21cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S21dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">36</td>
        <td style="width: 30px;"><?php if($T3S36aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S36bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S36cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S36dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: center;">7</td>
        <td style="width: 30px;"><?php if($T3S7aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S7bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S7cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S7dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">22</td>
        <td style="width: 30px;"><?php if($T3S22aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S22bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S22cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S22dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">37</td>
        <td style="width: 30px;"><?php if($T3S37aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S37bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S37cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S37dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: center;">8</td>
        <td style="width: 30px;"><?php if($T3S8aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S8bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S8cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S8dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">23</td>
        <td style="width: 30px;"><?php if($T3S23aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S23bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S23cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S23dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">38</td>
        <td style="width: 30px;"><?php if($T3S38aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S38bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S38cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S38dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: center;">9</td>
        <td style="width: 30px;"><?php if($T3S9aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S9bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S9cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S9dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">24</td>
        <td style="width: 30px;"><?php if($T3S24aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S24bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S24cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S24dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">39</td>
        <td style="width: 30px;"><?php if($T3S39aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S39bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S39cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S39dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: center;">10</td>
        <td style="width: 30px;"><?php if($T3S10aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S10bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S10cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S10dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">25</td>
        <td style="width: 30px;"><?php if($T3S25aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S25bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S25cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S25dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">40</td>
        <td style="width: 30px;"><?php if($T3S40aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S40bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S40cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S40dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: center;">11</td>
        <td style="width: 30px;"><?php if($T3S11aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S11bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S11cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S11dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">26</td>
        <td style="width: 30px;"><?php if($T3S26aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S26bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S26cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S26dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: center;">12</td>
        <td style="width: 30px;"><?php if($T3S12aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S12bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S12cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S12dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">27</td>
        <td style="width: 30px;"><?php if($T3S27aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S27bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S27cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S27dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: center;">13</td>
        <td style="width: 30px;"><?php if($T3S13aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S13bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S13cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S13dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">28</td>
        <td style="width: 30px;"><?php if($T3S28aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S28bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S28cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S28dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: center;">14</td>
        <td style="width: 30px;"><?php if($T3S14aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S14bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S14cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S14dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">29</td>
        <td style="width: 30px;"><?php if($T3S29aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S29bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S29cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S29dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: center;">15</td>
        <td style="width: 30px;"><?php if($T3S15aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S15bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S15cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S15dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: center;">30</td>
        <td style="width: 30px;"><?php if($T3S30aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px;"><?php if($T3S30bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px;"><?php if($T3S30cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px;"><?php if($T3S30dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
    </tr>
</table>

<table style="margin-left: 80px; margin-right: 80px;">
    <tr>
        <td>&nbsp;</td>
    </tr>
        <tr>
            <td><strong>SUBTES : 4 ABSTRAKSI NON VERBAL</strong></td>
        </tr>
        <tr>
                <td>&nbsp;</td>
            </tr>
    </table>
    <div>
            <!-- border-bottom: 1px solid; border-top: 1px solid; border-right: 1px solid; border-left: 1px solid; -->
    <table style="margin-left: 80px; margin-right: 80px;  border-collapse: collapse; font-size: 12px;">
        <tr>
            <td style="border-top: 1px solid black; border-left: 1px solid black;">Contoh :</td>
            <td style="border-top: 1px solid black;">&nbsp;</td>
            <td style="border-top: 1px solid black;">&nbsp;</td>
            <td style="border-top: 1px solid black;">&nbsp;</td>
            <td style="border-top: 1px solid black;">&nbsp;</td>
            <td style="border-top: 1px solid black;">&nbsp;</td>
            <td style="border-top: 1px solid black;">&nbsp;</td>
            <td style="border-top: 1px solid black; border-right: 1px solid black;">&nbsp;</td>
        </tr>
        <tr>
            <td style="border-left: 1px solid black;">&nbsp;</td>
            <td style="width: 30px;">1</td>
            <td style="width: 30px;">a</td>
            <td style="width: 30px;">b</td>
            <td style="width: 30px;">c</td>
            <td style="width: 30px;">d</td>
            <td style="width: 30px;">e</td>
            <td style="width: 30px; border-right: 1px solid black;">f</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td style="border-left: 1px solid black;">&nbsp;</td>
            <td style="width: 30px;">2</td>
            <td style="width: 30px;">a</td>
            <td style="width: 30px;">b</td>
            <td style="width: 30px;">c</td>
            <td style="width: 30px;">d</td>
            <td style="width: 30px;">e</td>
            <td style="width: 30px; border-right: 1px solid black;">f</td>
            <td style="width: 150px;">&nbsp;</td>
            <td style="width: 150px; border-top: 1px solid; border-left: 1px solid; border-right: 1px solid;"><strong>&nbsp;RS = <?php echo $T4SALL; ?></strong></td>
        </tr>
        <tr>
            <td style="border-left: 1px solid black;">&nbsp;</td>
            <td style="width: 30px;">3</td>
            <td style="width: 30px;">a</td>
            <td style="width: 30px;">b</td>
            <td style="width: 30px;">c</td>
            <td style="width: 30px;">d</td>
            <td style="width: 30px;">e</td>
            <td style="width: 30px; border-right: 1px solid black;">f</td>
            <td style="width: 30px;">&nbsp;</td>
            <td style="width: 150px; border-left: 1px solid; border-right: 1px solid;">&nbsp;</td>
        </tr>
        <tr>
            <td style="border-left: 1px solid black; border-bottom: 1px solid black;">&nbsp;</td>
            <td style="width: 30px; border-bottom: 1px solid black;">4</td>
            <td style="width: 30px; border-bottom: 1px solid black;">a</td>
            <td style="width: 30px; border-bottom: 1px solid black;">b</td>
            <td style="width: 30px; border-bottom: 1px solid black;">c</td>
            <td style="width: 30px; border-bottom: 1px solid black;">d</td>
            <td style="width: 30px; border-bottom: 1px solid black;">e</td>
            <td style="width: 30px; border-right: 1px solid black; border-bottom: 1px solid black;">f</td>
            <td style="width: 30px;">&nbsp;</td>
            <td style="width: 150px; border-left: 1px solid; border-right: 1px solid; border-bottom: 1px solid;">&nbsp;</td>
        </tr>
    </table>
    
    
    <table style="margin-left: 80px; margin-right: 80px; font-size: 12px;">
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: center;">1</td>
            <td style="width: 30px;"><?php if($T4S1aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T4S1bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T4S1cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T4S1dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T4S1eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T4S1fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
            <td style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: center;">16</td>
            <td style="width: 30px;"><?php if($T4S16aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T4S16bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T4S16cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T4S16dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T4S16eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T4S16fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: center;">2</td>
            <td style="width: 30px;"><?php if($T4S2aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T4S2bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T4S2cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T4S2dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T4S2eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T4S2fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
            <td style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: center;">17</td>
            <td style="width: 30px;"><?php if($T4S17aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T4S17bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T4S17cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T4S17dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T4S17eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T4S17fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: center;">3</td>
            <td style="width: 30px;"><?php if($T4S3aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T4S3bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T4S3cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T4S3dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T4S3eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T4S3fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
            <td style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: center;">18</td>
            <td style="width: 30px;"><?php if($T4S18aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T4S18bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T4S18cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T4S18dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T4S18eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T4S18fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: center;">4</td>
            <td style="width: 30px;"><?php if($T4S4aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T4S4bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T4S4cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T4S4dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T4S4eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T4S4fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
            <td style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: center;">19</td>
            <td style="width: 30px;"><?php if($T4S19aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T4S19bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T4S19cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T4S19dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T4S19eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T4S19fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: center;">5</td>
            <td style="width: 30px;"><?php if($T4S5aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T4S5bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T4S5cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T4S5dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T4S5eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T4S5fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
            <td style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: center;">20</td>
            <td style="width: 30px;"><?php if($T4S20aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T4S20bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T4S20cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T4S20dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T4S20eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T4S20fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: center;">6</td>
            <td style="width: 30px;"><?php if($T4S6aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T4S6bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T4S6cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T4S6dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T4S6eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T4S6fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
            <td style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: center;">21</td>
            <td style="width: 30px;"><?php if($T4S21aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T4S21bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T4S21cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T4S21dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T4S21eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T4S21fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: center;">7</td>
            <td style="width: 30px;"><?php if($T4S7aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T4S7bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T4S7cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T4S7dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T4S7eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T4S7fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
            <td style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: center;">22</td>
            <td style="width: 30px;"><?php if($T4S22aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T4S22bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T4S22cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T4S22dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T4S22eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T4S22fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: center;">8</td>
            <td style="width: 30px;"><?php if($T4S8aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T4S8bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T4S8cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T4S8dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T4S8eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T4S8fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
            <td style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: center;">23</td>
            <td style="width: 30px;"><?php if($T4S23aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T4S23bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T4S23cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T4S23dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T4S23eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T4S23fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: center;">9</td>
            <td style="width: 30px;"><?php if($T4S9aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T4S9bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T4S9cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T4S9dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T4S9eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T4S9fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
            <td style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: center;">24</td>
            <td style="width: 30px;"><?php if($T4S24aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T4S24bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T4S24cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T4S24dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T4S24eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T4S24fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: center;">10</td>
            <td style="width: 30px;"><?php if($T4S10aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T4S10bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T4S10cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T4S10dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T4S10eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T4S10fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
            <td style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: center;">25</td>
            <td style="width: 30px;"><?php if($T4S25aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T4S25bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T4S25cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T4S25dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T4S25eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T4S25fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: center;">11</td>
            <td style="width: 30px;"><?php if($T4S11aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T4S11bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T4S11cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T4S11dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T4S11eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T4S11fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
            <td style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: center;">26</td>
            <td style="width: 30px;"><?php if($T4S26aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T4S26bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T4S26cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T4S26dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T4S26eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T4S26fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: center;">12</td>
            <td style="width: 30px;"><?php if($T4S12aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T4S12bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T4S12cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T4S12dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T4S12eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T4S12fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
            <td style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: center;">27</td>
            <td style="width: 30px;"><?php if($T4S27aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T4S27bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T4S27cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T4S27dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T4S27eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T4S27fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: center;">13</td>
            <td style="width: 30px;"><?php if($T4S13aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T4S13bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T4S13cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T4S13dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T4S13eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T4S13fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
            <td style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: center;">28</td>
            <td style="width: 30px;"><?php if($T4S28aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T4S28bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T4S28cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T4S28dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T4S28eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T4S28fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: center;">14</td>
            <td style="width: 30px;"><?php if($T4S14aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T4S14bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T4S14cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T4S14dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T4S14eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T4S14fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
            <td style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: center;">29</td>
            <td style="width: 30px;"><?php if($T4S29aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T4S29bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T4S29cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T4S29dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T4S29eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T4S29fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: center;">15</td>
            <td style="width: 30px;"><?php if($T4S15aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T4S15bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T4S15cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T4S15dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T4S15eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T4S15fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
            <td style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: center;">30</td>
            <td style="width: 30px;"><?php if($T4S30aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">a</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px;"><?php if($T4S30bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">b</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px;"><?php if($T4S30cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">c</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px;"><?php if($T4S30dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">d</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px;"><?php if($T4S30eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">e</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px;"><?php if($T4S30fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">f</span></strike>'; } else { echo'f'; }?></td>
        </tr>
    </table>
    <div>&nbsp;</div>
    <div>&nbsp;</div>
    <!-- <footer style="page-break-after: always; "></footer> -->
    <!-- style="background-color: black !important; color: white !important; width:10%; height: 25pt; font-weight: bold; -webkit-print-color-adjust: exact;" -->
    <footer style="page-break-after: always; "></footer>
    <table style="margin-left: 80px; margin-right: 80px; width:80%; margin-top: 2em;">
        <tr>
            <td style="text-align: center;"><strong>INTERPRETASI TIKI-T</strong></td>
        </tr>
        <tr>
        <td>&nbsp;</td>
        </tr>
    </table>
    <table  style="margin-left: 80px; margin-right: 80px; border-collapse: collapse; font-size: 12px;">
        <tr>
            <td style="width: 10%;">No. Test</td>
            <td>:</td>
            <td style="width: 30%; border-bottom: 1px solid black;">&nbsp;</td>
            <td style="width: 15%;">&nbsp;</td>
        </tr>
        <tr>
            <td style="width: 10%;">Nama</td>
            <td>:</td>
            <td style="width: 30%; border-bottom: 1px solid black;"><?php echo $name;?></td>
            <td><?php if($jenis_kelamin == 1){
                echo "(<strike>L</strike>/P)";
            }else{
                echo "(L/<strike>P</strike>)";
            } ?></td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>Tgl. Test</td>
            <td>:</td>
            <td style="border-bottom: 1px solid black;"><?php $date=date_create($tanggal_tes); echo date_format($date,"d F Y");?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>
    <table style="margin-left: 80px; margin-right: 80px; -webkit-print-color-adjust: exact; border: 1px solid black; width: 75%; margin-top: 2em;">
        <tr>
            <td class="tableTIKI">&nbsp;KESIMPULAN</td>
        </tr>
        <tr>
            <td>&nbsp;<strong>BERHITUNG ANGKA</strong></td>
        </tr>
        <tr>
            <td style="padding: 5px; border-bottom: 1px solid black;"><?php echo $interpretasiT1 ?></td>
        </tr>

        <tr>
            <td>&nbsp;<strong>GABUNGAN BAGIAN</strong></td>
        </tr>
        <tr>
            <td style="padding: 5px; border-bottom: 1px solid black;"><?php echo $interpretasiT2 ?></td>
        </tr>

        <tr>
            <td>&nbsp;<strong>HUBUNGAN KATA</strong></td>
        </tr>
        <tr>
            <td style="padding: 5px; border-bottom: 1px solid black;"><?php echo $interpretasiT3 ?></td>
        </tr>

        <tr>
            <td>&nbsp;<strong>ABSTRAKSI NON VERBAL</strong></td>
        </tr>
        <tr>
            <td style="padding: 5px;"><?php echo $interpretasiT4 ?></td>
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

    <div class="row no-print" style="height:68em;">
        &nbsp;
    </div>
    </section>



<script>
    function myFunction() {
        window.print();
    }
    function detail_tes(tesuser_id){
        // window.open('', 'TheWindow');
        document.getElementById('TheForm').submit();
        // window.open("<?php echo site_url().'/manager/tes_hasil_report_tiki_excel'; ?>/index/"+tesuser_id);
        
    }
</script>

<style>
    @page   {
                /* size: 7in 9.25in; */
                /* margin: 27mm 16mm 27mm 16mm; */
                /* size: landscape;  */
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
        width: 5em;
    }

    .tableTIKI{
        background-color: black !important; 
        color: white !important; 
        width:10%; 
        height: 25pt;
        font-weight: bold;
        -webkit-print-color-adjust: exact;
    }

</style>

<?php 
}else{

}

if($reportShowPAPI == "No" && $reportShowMBTI == "No" && $reportShowDISC == "No" && $reportShowEPPS == "No" && $reportShowTIKI == "No"){
    echo '
    <section class="invoice">
        <div style="text-align: center; height: 8em; margin-top: 25%; font-weight: bold; font-size: 3em;">Report Belum Tersedia</div>
    </section>
    ';

}
?>
</html>
