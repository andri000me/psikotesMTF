<?php
$mysqli = new mysqli("localhost","root", "","dbmtfpsikotes");

if(mysqli_connect_errno()) {
    printf("Connect failed: %s\n",mysql_connect_error());
    exit();
}
// echo $user_id."+".$tesuser_tes_id."+".$topik_id;

$sql = "
        SELECT  cbt_user.user_firstname as name, 
                cbt_user.user_jenis_kelamin as jenis_kelamin,
                cbt_tes.tes_nama as nama, 
                cbt_tes_user.tesuser_id as user_id, 
                cbt_soal.soal_detail as soal, 
                cbt_soal.soal_nomor as soal_nomor, 
                cbt_tes_soal.tessoal_jawaban_text as jawaban,
                cbt_tes.tes_begin_time as tanggal_tes,
                cbt_user.user_tanggal_lahir as tanggal_lahir
        FROM    cbt_tes_user, 
                cbt_user,
                cbt_tes,
                cbt_tes_soal,
                cbt_soal 
        WHERE   cbt_user.user_id = cbt_tes_user.tesuser_user_id 
        AND     cbt_tes_user.tesuser_tes_id = cbt_tes.tes_id 
        AND     cbt_user.user_id = ".$user_id."
        AND     cbt_tes.tes_id = ".$tesuser_tes_id." 
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
            }

        }


        $E = $J1 + $J2 + $J3 + $J4 + $J5 + $J21 + $J22 + $J23 + $J24 + $J25;
        $S = $J6 + $J7 + $J8 + $J9 + $J10 + $J26 + $J27 + $J28 + $J29 + $J30;
        $T = $J11 + $J12 + $J13 + $J14 + $J15 + $J31 + $J32 + $J33 + $J34 + $J35;
        $N = $J46 + $J47 + $J48 + $J49 + $J50 + $J66 + $J67 + $J68 + $J69 + $J70;
        $I = $J41 + $J42 + $J43 + $J44 + $J45 + $J61 + $J62 + $J63 + $J64 + $J65;
        $F = $J51 + $J52 + $J53 + $J54 + $J55 + $J71 + $J72 + $J73 + $J74 + $J75;
        $J = $J16 + $J17 + $J18 + $J19 + $J20 + $J36 + $J37 + $J38 + $J39 + $J40;
        $P = $J56 + $J57 + $J58 + $J59 + $J60 + $J76 + $J77 + $J78 + $J79 + $J80;


?>
<html>
<head>
    <title>MBTI</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<section class="invoice">
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

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
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td>:</td>
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
        <td class="tdNomer"><?php echo $J27 ?></td>
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
<div style="width: -webkit-fill-available; margin: 30px;">Diisi oleh penilai :</div>
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

<script>
    function myFunction() {
        window.print();
    }
    function detail_tes(user_id){
        window.open("<?php echo site_url().'/manager/tes_hasil_report_mbti_excel'; ?>/index/"+user_id);
        
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