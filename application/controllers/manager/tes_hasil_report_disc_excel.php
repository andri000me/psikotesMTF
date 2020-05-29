<?php
$filename ="excelreport.xls";
$contents = "testdata1 \t testdata2 \t testdata3 \t \n";
header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename='.$filename);
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
            }else if($jawaban[0] == '*'){
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
            }else if($jawaban[1] == '*'){
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
<body>


<table style="table-layout: fixed;">
    <tr>
        <td>&nbsp;</td>
        <td colspan="77" style="margin: 10px; text-align: left;">
                <H2>Diagram DISC</H2>
        </td>
    </tr>
</table>


<!-- <table style="table-layout: fixed;">
        <tr>
            <td>
                &nbsp;
            </td>
            <td>
                &nbsp;
            </td>
            <td>
                &nbsp;
            </td>
            <td colspan="2">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </td>
            <td colspan="2">
                ssssss&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </td>
            <td colspan="2">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </td>
            <td colspan="2">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </td>
            <td colspan="2">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </td>
            <td colspan="2">
            
            </td>
            <td colspan="2">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </td>
            <td colspan="2" style="border-bottom: 1px solid white !important; color:white !important; -webkit-print-color-adjust: exact;">
            </td>
        </tr>
        <tr >
            <td style="font-size: 20px;  color:white !important;" rowspan="2" colspan="2"  >
                24
            </td>
        </tr>
</table> -->

<table style="table-layout: fixed;">
        <tr style="font-size: 20px;">
            <td rowspan="3">
                &nbsp;
            </td>
            <td rowspan="3">
                &nbsp;
            </td>
            <td rowspan="3">
                &nbsp;
            </td>
            <td rowspan="3" colspan="2" width="20">
                &nbsp;
            </td>
            <td rowspan="3" colspan="2" width="4000" style="vertical-align:middle; text-align:center;">
                &nbsp; D &nbsp;
            </td>
            <td rowspan="3" colspan="2" style="vertical-align : middle;text-align:center;">
                &nbsp; I &nbsp;
            </td>
            <td rowspan="3" colspan="2" style="vertical-align : middle;text-align:center;">
                &nbsp; S &nbsp;
            </td>
            <td rowspan="3" colspan="2" style="vertical-align : middle;text-align:center;">
                &nbsp; C &nbsp;
            </td>
            <td rowspan="3" colspan="2" style="vertical-align : middle;text-align:center;">
                &nbsp; ♦︎ &nbsp;
            </td>
            <td rowspan="3" colspan="2">
                &nbsp; &nbsp; &nbsp;
            </td>
            <td colspan="2" style="border-bottom: 1px solid white !important; color:white !important; -webkit-print-color-adjust: exact;">
                Must Equal
            </td>
        </tr>
        <tr >
            <td style="font-size: 20px;  color:white !important;" rowspan="2" colspan="2"  >
                24
            </td>
        </tr>
</table>
<table style="table-layout: fixed;">
        <tr  style="font-size: 20px;">
            <td rowspan="2" style="margin: auto; padding: 10px;">
                &nbsp;
            </td>
            <td rowspan="2" style="width: 50pt; vertical-align : middle; text-align:center;">
                1
            </td>
            <td rowspan="2" colspan="1" style="width: 400px; font-size: 40px; border-right: 1px solid; vertical-align : middle; text-align:center;">
                ➞
            </td>
            <td rowspan="2" colspan="2" style="font-size: 20px; vertical-align : middle; text-align:center; border: 1px solid black;">
                <strong>MOST</strong>
            </td>
            <td rowspan="2" colspan="2" style="vertical-align : middle;text-align:center; border: 1px solid black;">
                &nbsp; <?php echo $DM; ?> &nbsp;
            </td>
            <td rowspan="2" colspan="2" style="vertical-align : middle;text-align:center; border: 1px solid black;">
                &nbsp; <?php echo $IM ?> &nbsp;
            </td>
            <td rowspan="2" colspan="2" style="vertical-align : middle;text-align:center; border: 1px solid black;">
                &nbsp; <?php echo $SM ?> &nbsp;
            </td>
            <td rowspan="2" colspan="2" style="vertical-align : middle;text-align:center; border: 1px solid black;">
                &nbsp; <?php echo $CM ?> &nbsp;
            </td>
            <td rowspan="2" colspan="2" style="vertical-align : middle; text-align:center; border: 1px solid black;">
                &nbsp; <?php echo $PM ?> &nbsp;
            </td>
            <td rowspan="2" colspan="2" style="border: 1px solid black;">
                &nbsp; &nbsp; &nbsp;
            </td>
            <td   colspan="2" style="border-bottom: 1px solid white;" style=" border-top: 1px solid black; border-right: 1px solid black; vertical-align : middle; text-align:center;">
                <sub>Must Equal</sub>
            </td>
        </tr>
        <tr colspan="2"  style="border-bottom: 1px solid black; border-right: 1px solid black; vertical-align : middle; text-align:center;">
            <td style="font-size: 25px;" colspan="2" >
                24
            </td>
        </tr>
        <tr colspan="2"  style="height:5;">
            <td style="font-size: 25px;" >
                &nbsp;
            </td>
        </tr>
</table>


<table style="table-layout: fixed;">
        <tr  style="font-size: 20px;">
            <td rowspan="2" style="margin: auto; width: 50%; padding: 10px;">
                &nbsp;
            </td>
            <td rowspan="2" style="width: 50pt; vertical-align : middle; text-align:center;">
                2
            </td>
            <td rowspan="2" colspan="1" style="font-size: 40px; border-right: 1px solid; vertical-align : middle; text-align:center;">
                ➞
            </td>
            <td rowspan="2" colspan="2"   style="font-size: 20px; vertical-align : middle; text-align:center; border: 1px solid black;">
                <strong>LEAST</strong>
            </td>
            <td rowspan="2" colspan="2"  style="vertical-align : middle;text-align:center; border: 1px solid black;">
                &nbsp; <?php echo $DL ?> &nbsp;
            </td>
            <td rowspan="2" colspan="2"  style="vertical-align : middle;text-align:center; border: 1px solid black;">
                &nbsp; <?php echo $IL ?> &nbsp;
            </td>
            <td rowspan="2" colspan="2"  style="vertical-align : middle;text-align:center; border: 1px solid black;">
                &nbsp; <?php echo $SL ?> &nbsp;
            </td>
            <td rowspan="2" colspan="2"  style="vertical-align : middle;text-align:center; border: 1px solid black;">
                &nbsp; <?php echo $CL ?> &nbsp;
            </td>
            <td rowspan="2" colspan="2"  style="vertical-align : middle;text-align:center; border: 1px solid black;">
                &nbsp; <?php echo $PL ?> &nbsp;
            </td>
            <td rowspan="2" colspan="2"  style="vertical-align : middle;text-align:center; border: 1px solid black;">
                &nbsp; &nbsp; &nbsp;
            </td>
            <td  colspan="2" style="border-bottom: 1px solid white;" style=" border-top: 1px solid black; border-right: 1px solid black; vertical-align : middle; text-align:center;">
                <sub>Must Equal</sub>
            </td>
        </tr>
        <tr colspan="2"  style="border-bottom: 1px solid black; border-right: 1px solid black; vertical-align : middle; text-align:center;">
            <td style="font-size: 25px;" colspan="2" >
                24
            </td>
        </tr>
        <tr colspan="2"  style="height:5;">
            <td style="font-size: 25px;" >
                &nbsp;
            </td>
        </tr>
</table>
    
    <table style="table-layout: fixed;">
            <tr  style="font-size: 20px;">
                <td rowspan="2" style="padding: 10px;">
                        &nbsp;
                </td>
                <td rowspan="2" style="vertical-align : middle; text-align:center;">
                    3
                </td>
                <td rowspan="2" colspan="1" style="font-size: 40px; border-right: 1px solid; vertical-align : middle; text-align:center;">
                    ➞
                </td>
                <td rowspan="2" colspan="2"   style="font-size: 20px; vertical-align : middle; text-align:center; border: 1px solid black;">
                    <strong>CHANGE</strong>
                </td>
                <td rowspan="2" colspan="2"  style="vertical-align : middle;text-align:center; border: 1px solid black;">
                    &nbsp; <?php echo $DT ?> &nbsp;
                </td>
                <td rowspan="2" colspan="2"  style="vertical-align : middle;text-align:center; border: 1px solid black;">
                    &nbsp; <?php echo $IT ?> &nbsp;
                </td>
                <td rowspan="2" colspan="2"  style="vertical-align : middle;text-align:center; border: 1px solid black;">
                    &nbsp; <?php echo $ST ?> &nbsp;
                </td>
                <td rowspan="2" colspan="2"  style="vertical-align : middle;text-align:center; border: 1px solid black;">
                    &nbsp; <?php echo $CT ?> &nbsp;
                </td>
                <td rowspan="2" colspan="2" style="vertical-align : middle;text-align:center; border: 1px solid black; color: black !important; background-color: black !important;">
                    <!-- sadsadas -->
                </td>
                <!-- <td rowspan="2">
                    &nbsp; &nbsp; &nbsp;
                </td> -->
                <td rowspan="2" colspan="4"  style="font-size: 15px; width: 116px; ertical-align : middle; border: 1px solid black; vertical-align : middle;text-align:center;">
                    Do not calculate the "♦︎" value for Row 3
            </tr>
            <!-- <tr >
                <td style="font-size: 10px;" rowspan="2" >
                   "♦︎" value for Row 3
                </td>
            </tr> -->
    </table>

    <table style="table-layout: fixed;">
            <tr style="font-size: 20px;">
                <td style="padding: 10px;">
                        &nbsp;
                </td>
                <td style="width: 50pt;" class="tableWorkDirectionTdTop" >
                        &nbsp;
                </td>
                <td colspan="4" style="font-size: 15px; vertical-align : middle;text-align:center;">
                    Graph 1 <strong>MOST</strong>
                </td>
                <td style="padding: 10px;">
                        &nbsp;
                </td>
                <td style="padding: 10px;">
                        &nbsp;
                </td>
                <td colspan="4" style="font-size: 15px; vertical-align : middle;text-align:center;">
                    Graph 2 <strong>LEAST</strong>
                </td>
                <td style="padding: 10px;">
                        &nbsp;
                </td>
                <td style="padding: 10px;">
                        &nbsp;
                </td>
                <td colspan="4" style="font-size: 15px; vertical-align : middle;text-align:center;">
                    Graph 3 <strong>CHANGE</strong>
                </td>
                
            </tr>
            <tr>
                <td style="padding: 10px;">
                        &nbsp;
                </td>
                <td style="width: 50pt;" class="tableWorkDirectionTdTop" >
                        &nbsp;
                </td>
                <td  colspan="4" style="font-size: 15px; vertical-align : middle;text-align:center;">
                    Mask, Public Self
                </td>
                <td style="padding: 10px;">
                        &nbsp;
                </td>
                <td style="padding: 10px;">
                        &nbsp;
                </td>
                <td  colspan="4" style="font-size: 15px; vertical-align : middle;text-align:center;" rowspan="2">
                    Core, Private Selft
                </td>
                <td style="padding: 10px;">
                        &nbsp;
                </td>
                <td style="padding: 10px;">
                        &nbsp;
                </td>
                <td  colspan="4"style="font-size: 15px;vertical-align : middle;text-align:center;" rowspan="2">
                    Mirror, Perceived Self
                </td>
            </tr>
    </table>


    <table style="table-layout: fixed;">
            <tr style="font-size: 20px;">
                <td rowspan="2"  style="width: 40pt;">
                    &nbsp;
                </td>
                <td style="font-size: 20px;">
                    <table style="border-collapse: collapse;" style="table-layout: fixed;">
                        <tr>
                            <td >&nbsp;</td>
                            <td style="Text-align: center; background-color: black; color:white; vertical-align : middle;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="Text-align: center; background-color: black; color:white; vertical-align : middle;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="Text-align: center; background-color: black; color:white; vertical-align : middle;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td width="1000" style="Text-align: center; background-color: black; color:white;  vertical-align : middle;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td style="border-left:3px black solid; border-right:1px black solid;  border-top:3px black solid;" >&nbsp;</td>
                                <td style="border-top:3px black solid;">21</td>
                                <td style="border-top:3px black solid;">19</td>
                                <td style="border-top:3px black solid;">20</td>
                                <td style="border-top:3px black solid;">17</td>
                                <td style="   font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="4">&nbsp;8</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>16</td>
                                <td>11</td>
                                <td>&nbsp;</td>
                                <td>13</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>15</td>
                                <td>&nbsp;</td>
                                <td>14</td>
                                <td>11</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>9</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>  
                        </tr>
                        <!---ke 6-->
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td style="border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="border-top:1px black dotted;">9</td>
                                <td style="   font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="4">&nbsp;6</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>8</td>
                                <td>12</td>
                                <td>8</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>14</td>
                                <td>7</td>
                                <td>&nbsp;</td>
                                <td>7</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>13</td>
                                <td>&nbsp;</td>
                                <td>10</td>
                                <td>&nbsp;</td>  
                        </tr>
                        <!---ke 4-->
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td style="border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td style="border-top:1px black dotted;">12</td>
                                <td style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="border-top:1px black dotted;">9</td>
                                <td style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="   font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="5">&nbsp;4</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>11</td>
                                <td>6</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>10</td>
                                <td>5</td>
                                <td>8</td>
                                <td>6</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>7</td>
                                <td>&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>9</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>5</td>  
                        </tr>

                        <!---ke 2-->
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td style="border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="   font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="3">&nbsp;2</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>8</td>
                                <td>4</td>
                                <td>6</td>
                                <td>4</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>7</td>
                                <td>&nbsp;</td>
                                <td>5</td>
                                <td>&nbsp;</td>  
                        </tr>

                         <!---ke 0-->
                         <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td style="border-left:3px black solid; border-right:1px black solid;  border-top:3px black solid; " >&nbsp;</td>
                                <td style="border-top:3px black solid;">6</td>
                                <td style="border-top:3px black solid;">&nbsp;</td>
                                <td style="border-top:3px black solid;">&nbsp;</td>
                                <td style="border-top:3px black solid;">&nbsp;</td>
                                <td style="   font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="5">&nbsp;0</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>4</td>
                                <td>&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>5</td>
                                <td>3</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>4</td>
                                <td>&nbsp;</td>
                                <td>3</td>
                                <td>3</td>  
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>  
                        </tr>
                        </tr>

                        <!---ke - 2-->
                        
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td style="border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="4">&nbsp;-2</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>3</td>
                                <td>2</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>2</td>
                                <td>2</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>  
                        </tr>
                        <!---ke - 4-->
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td style="border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="border-top:1px black dotted;">1</td>
                                <td style="border-top:1px black dotted;">1</td>
                                <td style="border-top:1px black dotted;">1</td>
                                <td style="   font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="4">&nbsp;-4</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>1</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>0</td>
                                <td>&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>  
                        </tr>
                        <!---ke - 6-->
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td style="border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="   font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="4">&nbsp;-6</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>0</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>0</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>0</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>  
                        </tr>
                    </table>
                </td>
                <!---DISC 2-->
                <td style="font-size: 15px;">
                    <table style="border-collapse: collapse; width: -webkit-fill-available; font-size: 12px;">
                        <tr>
                            <td width="100">&nbsp;</td>
                            <td width="100" style="Text-align: center; background-color: black; color:white;  vertical-align : middle;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="   Text-align: center; background-color: black; color:white; vertical-align : middle;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="   Text-align: center; background-color: black; color:white; vertical-align : middle;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="   Text-align: center; background-color: black; color:white; vertical-align : middle;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td style="border-left:3px black solid; border-right:1px black solid;  border-top:3px black solid; " >&nbsp;</td>
                                <td style="border-top:3px black solid;">0</td>
                                <td style="border-top:3px black solid;">&nbsp;</td>
                                <td style="border-top:3px black solid;">0</td>
                                <td style="border-top:3px black solid;">0</td>
                                <td style="   font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="4">&nbsp;8</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>0</td>
                                <td>1</td>
                                <td>1</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>1</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>  
                        </tr>
                        <!---ke 6-->
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td style="border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="border-top:1px black dotted;">1</td>
                                <td style="border-top:1px black dotted;">2</td>
                                <td style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="   font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="4">&nbsp;6</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>2</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>2</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>  
                        </tr>
                        <!---ke 4-->
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td style="border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="border-top:1px black dotted;">2</td>
                                <td style="border-top:1px black dotted;">3</td>
                                <td style="border-top:1px black dotted;">3</td>
                                <td style="   font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="5">&nbsp;4</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>  
                        </tr>

                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>3</td>
                                <td>3</td>
                                <td>4</td>
                                <td>4</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>  
                        </tr>

                        <!---ke 2-->
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td style="border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td style="border-top:1px black dotted;">4</td>
                                <td style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="border-top:1px black dotted;">5</td>
                                <td style="border-top:1px black dotted;">5</td>
                                <td style="   font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="3">&nbsp;2</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>5</td>
                                <td>4</td>
                                <td>6</td>
                                <td>6</td>  
                        </tr>

                         <!---ke 0-->
                         <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td style="border-left:3px black solid; border-right:1px black solid;  border-top:3px black solid; " >&nbsp;</td>
                                <td style="border-top:3px black solid;">6</td>
                                <td style="border-top:3px black solid;">5</td>
                                <td style="border-top:3px black solid;">&nbsp;</td>
                                <td style="border-top:3px black solid;">7</td>
                                <td style="   font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="5">&nbsp;0</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>7</td>
                                <td>&nbsp;</td>
                                <td>7</td>
                                <td>8</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>8</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>  
                        </tr>

                        <!---ke - 2-->
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td style="border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="border-top:1px black dotted;">6</td>
                                <td style="border-top:1px black dotted;">8</td>
                                <td style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="   font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="4">&nbsp;-2</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>9</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>9</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>10</td>
                                <td>&nbsp;</td>
                                <td>9</td>
                                <td>&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>11</td>
                                <td>7</td>
                                <td>&nbsp;</td>
                                <td>10</td>  
                        </tr>
                        <!---ke - 4-->
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td style="border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td style="border-top:1px black dotted;">12</td>
                                <td style="border-top:1px black dotted;">8</td>
                                <td style="border-top:1px black dotted;">10</td>
                                <td style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="   font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="4">&nbsp;-4</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>13</td>
                                <td>9</td>
                                <td>11</td>
                                <td>11</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>14</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>12</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>  
                        </tr>
                        <!---ke - 6-->
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td style="border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td style="border-top:1px black dotted;">15</td>
                                <td style="border-top:1px black dotted;">10</td>
                                <td style="border-top:1px black dotted;">12</td>
                                <td style="border-top:1px black dotted;">13</td>
                                <td style="   font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="4">&nbsp;-6</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>16</td>
                                <td>11</td>
                                <td>13</td>
                                <td>&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>12</td>
                                <td>16</td>
                                <td>15</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>20</td>
                                <td>19</td>
                                <td>19</td>
                                <td>17</td>  
                        </tr>
                    </table>
                </td>
                <!---DISC 3--->
                <td  style="ont-size: 15px;">
                    <table style="border-collapse: collapse; width: -webkit-fill-available; font-size: 12px;">
                        <tr>
                            <td>&nbsp;</td>
                            <td style="   Text-align: center; background-color: black; color:white; vertical-align : middle;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="   Text-align: center; background-color: black; color:white; vertical-align : middle;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="   Text-align: center; background-color: black; color:white; vertical-align : middle;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td style="   Text-align: center; background-color: black; color:white; vertical-align : middle;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>

                        <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                        </tr>

                        <tr style="border-left:3px black solid; text-align:center;">
                                <td style="border-left:3px black solid; border-right:1px black solid;  border-top:3px black solid; " >&nbsp;</td>
                                <td style="border-top:3px black solid;">21</td>
                                <td style="border-top:3px black solid;">18</td>
                                <td style="border-top:3px black solid;">20</td>
                                <td style="border-top:3px black solid;">17</td>
                                <td style="font-size: 18px; vertical-align: baseline;" rowspan="4">&nbsp;8</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>18</td>
                                <td>10</td>
                                <td>15</td>
                                <td>10</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>15</td>
                                <td>8</td>
                                <td>11</td>
                                <td>6</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>14</td>
                                <td>&nbsp;</td>
                                <td>10</td>
                                <td>5</td>  
                        </tr>
                        <!---ke 6-->
                        <tr style="border-left:3px black solid; text-align:center;">
                                <td style="border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td style="border-top:1px black dotted;">13</td>
                                <td style="border-top:1px black dotted;">7</td>
                                <td style="border-top:1px black dotted;">9</td>
                                <td style="border-top:1px black dotted;">4</td>
                                <td style="   font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="4">&nbsp;6</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>12</td>
                                <td>6</td>
                                <td>8</td>
                                <td>&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>10</td>
                                <td>&nbsp;</td>
                                <td>7</td>
                                <td>&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>5</td>
                                <td>&nbsp;</td>
                                <td>3</td>  
                        </tr>
                        <!---ke 4-->
                        <tr style="border-left:3px black solid; text-align:center;">
                                <td style="border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td style="border-top:1px black dotted;">9</td>
                                <td style="border-top:1px black dotted;">4</td>
                                <td style="border-top:1px black dotted;">5</td>
                                <td style="border-top:1px black dotted;">2</td>
                                <td style="   font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="5">&nbsp;4</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>8</td>
                                <td>&nbsp;</td>
                                <td>4</td>
                                <td>&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>3</td>
                                <td>3</td>
                                <td>1</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>7</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>2</td>
                                <td>&nbsp;</td>  
                        </tr>

                        <!---ke 2-->
                        <tr style="border-left:3px black solid; text-align:center;">
                                <td style="border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td style="border-top:1px black dotted;">5</td>
                                <td style="border-top:1px black dotted;">2</td>
                                <td style="border-top:1px black dotted;">1</td>
                                <td style="border-top:1px black dotted;">0</td>
                                <td style="   font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="3">&nbsp;2</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>3</td>
                                <td>1</td>
                                <td>0</td>
                                <td>-1</td>  
                        </tr>

                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>1</td>
                                <td>0</td>
                                <td>&nbsp;</td>
                                <td>-2</td>  
                        </tr>

                         <!---ke 0-->
                         <tr style="border-left:3px black solid; text-align:center;">
                                <td style="border-left:3px black solid; border-right:1px black solid;  border-top:3px black solid; " >&nbsp;</td>
                                <td style="border-top:3px black solid;">0</td>
                                <td style="border-top:3px black solid;">-1</td>
                                <td style="border-top:3px black solid;">-1</td>
                                <td style="border-top:3px black solid;">-3</td>
                                <td style="   font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="5">&nbsp;0</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>-2</td>
                                <td>&nbsp;</td>
                                <td>-2</td>
                                <td>-4</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>-3</td>
                                <td>&nbsp;</td>
                                <td>-3</td>
                                <td>&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>-4</td>
                                <td>-2</td>
                                <td>-4</td>
                                <td>&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>-3</td>
                                <td>-5</td>
                                <td>&nbsp;</td>  
                        </tr>

                        <!---ke - 2-->
                        
                        <tr style="border-left:3px black solid; text-align:center;">
                                <td style="border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td style="border-top:1px black dotted;">-6</td>
                                <td style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="border-top:1px black dotted;">-5</td>
                                <td style="   font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="4">&nbsp;-2</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>-7</td>
                                <td>-4</td>
                                <td>-6</td>
                                <td>-6</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>-9</td>
                                <td>-5</td>
                                <td>-7</td>
                                <td>-7</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>  
                        </tr>
                        <!---ke - 4-->
                        <tr style="border-left:3px black solid; text-align:center;">
                                <td style="border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td style="border-top:1px black dotted;">-10</td>
                                <td style="border-top:1px black dotted;">-6</td>
                                <td style="border-top:1px black dotted;">-8</td>
                                <td style="border-top:1px black dotted;">-8</td>
                                <td style="   font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="4">&nbsp;-4</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>-7</td>
                                <td>-9</td>
                                <td>-9</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>-11</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>-12</td>
                                <td>-8</td>
                                <td>&nbsp;</td>
                                <td>-10</td>  
                        </tr>
                        <!---ke - 6-->
                        <tr style="border-left:3px black solid; text-align:center;">
                                <td style="border-left:3px black solid; border-right:1px black solid;  border-top:1px black dotted; " >&nbsp;</td>
                                <td style="border-top:1px black dotted;">&nbsp;</td>
                                <td style="border-top:1px black dotted;">-9</td>
                                <td style="border-top:1px black dotted;">-10</td>
                                <td style="border-top:1px black dotted;">-13</td>
                                <td style="   font-size: 18px; border-left:3px black solid; vertical-align: baseline;" rowspan="4">&nbsp;-6</td>
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>-16</td>
                                <td>-10</td>
                                <td>&nbsp;</td>
                                <td>-15</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>-15</td>
                                <td>-18</td>
                                <td>-15</td>
                                <td>-19</td>  
                        </tr>
                        <tr style="border-left:3px black solid; border-right:3px black solid; text-align:center;">
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>-18</td>
                                <td>-22</td>  
                        </tr>
                    </table>
                </td>
                    </table>
                </td>
            </tr>
    </table>

</body>
</html>