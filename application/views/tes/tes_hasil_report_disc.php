<?php
$mysqli = new mysqli("localhost","root", "","dbmtfpsikotes");
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

    if($result = mysqli_query($mysqli, $sql)){
        while($row = mysqli_fetch_array($result)){
            $jawaban = explode(",", $row['jawaban']);
            if($jawaban[0] == 'D'){
                $DM = $DM+1;
            }else if($jawaban[0] == 'I'){
                $IM = $IM+1;
            }else if($jawaban[0]== 'S'){
                $SM = $SM+1;
            }else if($jawaban[0] == 'C'){
                $CM = $CM+1;
            }else if($jawaban[0] == '♦︎'){
                $PM = $PM+1;
            }

            if($jawaban[1] == 'D'){
                $DL = $DL+1;
            }else if($jawaban[1] == 'I'){
                $IL = $IL+1;
            }else if($jawaban[1]== 'S'){
                $SL = $SL+1;
            }else if($jawaban[1] == 'C'){
                $CL = $CL+1;
            }else if($jawaban[1] == '♦︎'){
                $PL = $PL+1;
            }


        }
    }

    $DT = $DM-$DL;
    $IT = $IM-$IL;
    $ST = $SM-$SL;
    $CT = $CM-$CL;
    $PT = $PM-$PL;


    $name = $row['name'];
    $tanggal_tes = $row['tanggal_tes'];
    $user_ids = $user_id;
?>
<html>
<head>
<title>PAPI</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<section class="invoice">
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<div style="margin: 10px; width:100%; text-align: left; margin-top: 10px;"><H2>Diagram DISC</H2></div>
<table class="tableWorkDirectionTop">
        <tr class="tableWorkDirectionTrTop" style="font-size: 20px;">
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
            <td class="tableWorkDirectionTdTop" style="border-bottom: 1px solid white; color:white; -webkit-print-color-adjust: exact;">
                <sub>Must Equal</sub>
            </td>
        </tr>
        <tr class="tableWorkDirectionTr">
            <td style="font-size: 20px;  color:white; -webkit-print-color-adjust: exact;" rowspan="2" class="tableWorkDirectionTdTop">
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
                &nbsp; <?php echo $DM; ?> &nbsp;
            </td>
            <td rowspan="2" class="tableWorkDirectionTd tableWorkDirectionWidth">
                &nbsp; <?php echo $IM ?> &nbsp;
            </td>
            <td rowspan="2" class="tableWorkDirectionTd tableWorkDirectionWidth">
                &nbsp; <?php echo $SM ?> &nbsp;
            </td>
            <td rowspan="2" class="tableWorkDirectionTd tableWorkDirectionWidth">
                &nbsp; <?php echo $CM ?> &nbsp;
            </td>
            <td rowspan="2" class="tableWorkDirectionTd tableWorkDirectionWidth">
                &nbsp; <?php echo $PM ?> &nbsp;
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
                &nbsp; <?php echo $DL ?> &nbsp;
            </td>
            <td rowspan="2" class="tableWorkDirectionTd tableWorkDirectionWidth">
                &nbsp; <?php echo $IL ?> &nbsp;
            </td>
            <td rowspan="2" class="tableWorkDirectionTd tableWorkDirectionWidth">
                &nbsp; <?php echo $SL ?> &nbsp;
            </td>
            <td rowspan="2" class="tableWorkDirectionTd tableWorkDirectionWidth">
                &nbsp; <?php echo $CL ?> &nbsp;
            </td>
            <td rowspan="2" class="tableWorkDirectionTd tableWorkDirectionWidth">
                &nbsp; <?php echo $PL ?> &nbsp;
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
                <td rowspan="2" class="tableWorkDirectionTdTop"  style="width: 40pt; font-size: 40px; border-right: 1px solid;">
                    ➞
                </td>
                <td rowspan="2" class="tableWorkDirectionTd"  style="width: 80pt; font-size: 20px;">
                    <strong>CHANGE</strong>
                </td>
                <td rowspan="2" class="tableWorkDirectionTd tableWorkDirectionWidth">
                    &nbsp; <?php echo $DT ?> &nbsp;
                </td>
                <td rowspan="2" class="tableWorkDirectionTd tableWorkDirectionWidth">
                    &nbsp; <?php echo $IT ?> &nbsp;
                </td>
                <td rowspan="2" class="tableWorkDirectionTd tableWorkDirectionWidth">
                    &nbsp; <?php echo $ST ?> &nbsp;
                </td>
                <td rowspan="2" class="tableWorkDirectionTd tableWorkDirectionWidth">
                    &nbsp; <?php echo $CT ?> &nbsp;
                </td>
                <td rowspan="2"class="tableWorkDirectionTd tableWorkDirectionWidth" style="color: black; background-color: black;  width: 50pt; -webkit-print-color-adjust: exact;">
                    <!-- sadsadas -->iiiiiiiiiiiiii
                </td>
                <!-- <td rowspan="2" class="tableWorkDirectionTd tableWorkDirectionWidth">
                    &nbsp; &nbsp; &nbsp;
                </td> -->
                <td rowspan="2" colspan="2" class="tableWorkDirectionTd" style=" font-size: 15px; width: 116px;">
                    Do not calculate the "♦︎" value for Row 3
            </tr>
            <!-- <tr class="tableWorkDirectionTr">
                <td style="font-size: 10px;" rowspan="2" class="tableWorkDirectionTd">
                   "♦︎" value for Row 3
                </td>
            </tr> -->
    </table>
    
    <table style="width: -webkit-fill-available; margin: 10px; text-align: center;">
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
                                <td class="tableDISC3">-16</td>
                                <td class="tableDISC3">-10</td>
                                <td class="tableDISC3">&nbsp;</td>
                                <td class="tableDISC3">-15</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid;">
                                <td style="width:10%;">&nbsp;</td>
                                <td class="tableDISC3">-15</td>
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
</html>

<?php

// $filename ="excelreport.xls";
// $contents = "testdata1 \t testdata2 \t testdata3 \t \n";
// header('Content-type: application/ms-excel');
// header('Content-Disposition: attachment; filename='.$filename);
// echo $contents;
 ?>

<script>
    function myFunction() {
        window.print();
    }
    function detail_tes(tesuser_id){
        window.open("<?php echo site_url().'/manager/tes_hasil_report_papi_excel'; ?>/index/"+tesuser_id);
        
    }

</script>

<style>
    .tableWorkDirection{
        border: 1px solid black;
        border-collapse: collapse;
        width: -webkit-fill-available; 
        margin: 10px; border: 1px solid black;
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
        background-color: black; 
        color: white; 
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