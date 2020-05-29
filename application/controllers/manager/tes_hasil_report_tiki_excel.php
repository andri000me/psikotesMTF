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

    // subtest no 1
    $sqlt1 = "        
    SELECT  cbt_user.user_firstname as name,
            cbt_tes.tes_nama as nama, 
            cbt_tes_user.tesuser_id as user_id,
            cbt_tes_soal.tessoal_jawaban as soal,
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
    AND     cbt_tes.tes_id = ".$tesuser_tes_id."
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
    }
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
            AND     cbt_tes.tes_id = ".$tesuser_tes_id."
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
            AND     cbt_tes.tes_id = ".$tesuser_tes_id."
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
            AND     cbt_tes.tes_id = ".$tesuser_tes_id."
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

if($TallIQ >= 100){
    $statusLulus = 'Lulus';
}else{
    $statusLulus = 'Tidak Lulus';
}

if($TallIQ <= 89){
    $IQLevel = 'Dibawah Rata-Rata';
}else if($TallIQ >= 90 && $TallIQ <= 110){
    $IQLevel = 'Rata-Rata';
}else if($TallIQ == 111 && $TallIQ <= 120){
    $IQLevel = 'Diatas Rata-Rata';
}else if($TallIQ == 121 && $TallIQ <= 127){
    $IQLevel = 'Cerdas';
}else if($TallIQ >= 128){
    $IQLevel = 'Sangat Cerdas';
}
if($TallIQ >= 100){
    $statusLulus = 'Lulus';
}else{
    $statusLulus = 'Tidak Lulus';
}

?>
<html>
<head>
<title>PAPI</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<section class="invoice">
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<!-- <div style="width:100%; text-align: center; margin-top: 10px;"><H4 >LEMBAR JAWABAN TIKI-T</H4></div>
<div style="width:100%; text-align: center; margin-top: 10px;">&nbsp;</div> -->
<table  style="margin-left: 80px; margin-right: 80px; border-collapse: collapse; text-align: center; width:60%">
    <tr>
        <td>&nbsp;</td>
        <td style="text-align:center;" colspan="17"><H4><strong>LEMBAR JAWABAN TIKI-T</strong></H4></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
</table>
<table  style="margin-left: 80px; margin-right: 80px; border-collapse: collapse; font-size: 14px;">
    <tr>
        <td>&nbsp;</td>
        <td colspan="3" style="width: 10%;">No. Test</td>
        <td>:</td>
        <td colspan="5" style="width: 30%; border-bottom: 1px solid black;">&nbsp;</td>
        <td style="width: 15%; width: 30%; border-bottom: 1px solid black;">&nbsp;</td>
        <td>&nbsp;</td>
        <td style="width: 5%;">&nbsp;</td>
        <td colspan="2" style="border: 1px solid black; text-align: center;"><strong>RS</strong></td>
        <td colspan="3" style="border: 1px solid black; text-align: center;"><strong>SS</strong></td>
        <td colspan="1" style="border: 1px solid black; text-align: center;"><strong>&nbsp;Kategori&nbsp;</strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td colspan="3" style="width: 10%;">Nama</td>
        <td>:</td>
        <td colspan="5" style="width: 30%; border-bottom: 1px solid black;"><?php echo $name;?></td>
        <td style="font-size:11"><?php if($jenis_kelamin == 1){
            echo "(<strike>&nbsp;L&nbsp;</strike>/P)";
        }else{
            echo "(L/<strike>&nbsp;P&nbsp;</strike>)";
        } ?></td>
        <td>&nbsp;</td>
        <td style="border: 1px solid black; text-align: center;"><strong>T-1</strong></td>
        <td colspan="2" style="border: 1px solid black; text-align: center;"><?php echo $TotalT1; ?></td>
        <td colspan="3" style="border: 1px solid black; text-align: center;"><?php echo $T1ss; ?></td>
        <td colspan="1" style="border: 1px solid black; text-align: center;"><?php echo $kategoriT1; ?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td colspan="3">Pendidikan</td>
        <td>:</td>
        <td colspan="5" style="border-bottom: 1px solid black;">
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
        ?></td>
        <td style="width: 30%; border-bottom: 1px solid black;">&nbsp;</td>
        <td>&nbsp;</td>
        <td style="border: 1px solid black; text-align: center;"><strong>T-2</strong></td>
        <td colspan="2" style="border: 1px solid black; text-align: center;"><?php echo $T2SALL; ?></td>
        <td colspan="3" style="border: 1px solid black; text-align: center;"><?php echo $T2ss; ?></td>
        <td colspan="1" style="border: 1px solid black; text-align: center;"><?php echo $kategoriT2; ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td colspan="3">Usia</td>
        <td>:</td>
        <td colspan="5" style="border-bottom: 1px solid black; text-align: left"><?php echo $from->diff($to)->y;?></td>
        <td style="width: 30%; border-bottom: 1px solid black;">&nbsp;</td>
        <td>&nbsp;</td>
        <td style="border: 1px solid black; text-align: center;"><strong>T-3</strong></td>
        <td colspan="2" style="border: 1px solid black; text-align: center;"><?php echo $T3SALL; ?></td>
        <td colspan="3" style="border: 1px solid black; text-align: center;"><?php echo $T3ss; ?></td>
        <td colspan="1" style="border: 1px solid black; text-align: center;"><?php echo $kategoriT3; ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td colspan="3">Tgl. Lahir</td>
        <td>:</td>
        <td colspan="5" style="border-bottom: 1px solid black; text-align: left"><?php $date=date_create($tanggal_lahir); echo date_format($date,"d F Y");?></td>
        <td style="width: 30%; border-bottom: 1px solid black;">&nbsp;</td>
        <td>&nbsp;</td>
        <td style="border: 1px solid black; text-align: center;"><strong>T-4</strong></td>
        <td colspan="2" style="border: 1px solid black; text-align: center;"><?php echo $T4SALL; ?></td>
        <td colspan="3" style="border: 1px solid black; text-align: center;"><?php echo $T4ss; ?></td>
        <td colspan="1" style="border: 1px solid black; text-align: center;"><?php echo $kategoriT4; ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td colspan="3">Tgl. Test</td>
        <td>:</td>
        <td colspan="5" style="border-bottom: 1px solid black; text-align: left"><?php $date=date_create($tanggal_tes); echo date_format($date,"d F Y");?></td>
        <td style="width: 30%; border-bottom: 1px solid black;">&nbsp;</td>
        <td>&nbsp;</td>
        <td style="border: 1px solid black; text-align: center;" colspan="3"><strong>Total</strong></td>
        <td colspan="4" style="border: 1px solid black; text-align: center;"><?php echo $TaLLss; ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td colspan="3">&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="5"></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td style="border: 1px solid black; text-align: center;" colspan="3"><strong>IQ</strong></td>
        <td colspan="4" style="border: 1px solid black; text-align: center;"><?php echo $TallIQ; ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td colspan="3">&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="5" ></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td style="border: 1px solid black; text-align: center;" colspan="3"><strong>IQ Level</strong></td>
        <td colspan="4" style="border-top: 1px solid; border-left: 1px solid; border-right: 1px solid; border-bottom: 1px solid; text-align: center; width: 15%;"><?php echo $IQLevel;?></td>
        <!-- <td>&nbsp;</td>
        <td>&nbsp;</td> -->
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td colspan="3">&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="5" ></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td style="border: 1px solid black; text-align: center;" colspan="3"><strong>Status</strong></td>
        <td colspan="4" style="border-top: 1px solid; border-left: 1px solid; border-right: 1px solid; border-bottom: 1px solid; text-align: center; width: 15%;"><?php echo $statusLulus;?></td>
        <!-- <td>&nbsp;</td>
        <td>&nbsp;</td> -->
        <td>&nbsp;</td>
    </tr>
</table>
<table style="margin-left: 80px; margin-right: 80px;">
    <tr>
        <td>&nbsp;</td>
        <td colspan="5"><strong>SUB TES : 1 BERHITUNG ANGKA</strong></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
</table>
<div>
        <!-- border-bottom: 1px solid; border-top: 1px solid; border-right: 1px solid; border-left: 1px solid; -->
<table style="margin-left: 80px; margin-right: 80px;  border-collapse: collapse; font-size: 14px;">
    <tr>
        <td>&nbsp;</td>
        <td style="border-top: 1px solid black; border-left: 1px solid black;">&nbsp;Contoh :</td>
        <td style="border-top: 1px solid black;">&nbsp;</td>
        <td style="border-top: 1px solid black;">&nbsp;</td>
        <td style="border-top: 1px solid black;">&nbsp;</td>
        <td style="border-top: 1px solid black;">&nbsp;</td>
        <td style="border-top: 1px solid black; border-right: 1px solid black;">&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="border-left: 1px solid black;">&nbsp;</td>
        <td style="width: 30px; text-align: center;">1</td>
        <td style="width: 30px; text-align: center;">&nbsp;a&nbsp;</td>
        <td style="width: 30px; text-align: center;">&nbsp;b&nbsp;</td>
        <td style="width: 30px; text-align: center;">&nbsp;c&nbsp;</td>
        <td style="width: 30px; text-align: center; border-right: 1px solid black;">&nbsp;d&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="border-left: 1px solid black;">&nbsp;</td>
        <td style="width: 30px; text-align: center;">2</td>
        <td style="width: 30px; text-align: center;">&nbsp;a&nbsp;</td>
        <td style="width: 30px; text-align: center;">&nbsp;b&nbsp;</td>
        <td style="width: 30px; text-align: center;">&nbsp;c&nbsp;</td>
        <td style="width: 30px; text-align: center; border-right: 1px solid black;">&nbsp;d&nbsp;</td>
        <td style="width: 250px;">&nbsp;</td>
        <td style="width: 30px; text-align: center;">&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="border-left: 1px solid black;">&nbsp;</td>
        <td style="width: 30px; text-align: center;">3</td>
        <td style="width: 30px; text-align: center;">&nbsp;a&nbsp;</td>
        <td style="width: 30px; text-align: center;">&nbsp;b&nbsp;</td>
        <td style="width: 30px; text-align: center;">&nbsp;c&nbsp;</td>
        <td style="width: 30px; text-align: center; border-right: 1px solid black;">&nbsp;d&nbsp;</td>
        <td colspan="5" style="width: 250px;">&nbsp;</td>
        <td colspan="6" style="width: 150px; border-top: 1px solid; border-left: 1px solid; border-right: 1px solid;"><strong>&nbsp;RS = <?php echo $TotalT1; ?></strong></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="border-left: 1px solid black;">&nbsp;</td>
        <td style="width: 30px; text-align: center;">4</td>
        <td style="width: 30px; text-align: center;">&nbsp;a&nbsp;</td>
        <td style="width: 30px; text-align: center;">&nbsp;b&nbsp;</td>
        <td style="width: 30px; text-align: center;">&nbsp;c&nbsp;</td>
        <td style="width: 30px; text-align: center; border-right: 1px solid black;">&nbsp;d&nbsp;</td>
        <td colspan="5" style="width: 250px;">&nbsp;</td>
        <td colspan="6" style="width: 150px; border-left: 1px solid; border-right: 1px solid;">&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="border-bottom: 1px solid black; border-left: 1px solid black;">&nbsp;</td>
        <td style="width: 30px; text-align: center; border-bottom: 1px solid black;">5</td>
        <td style="width: 30px; text-align: center; border-bottom: 1px solid black;">&nbsp;a&nbsp;</td>
        <td style="width: 30px; text-align: center; border-bottom: 1px solid black;">&nbsp;b&nbsp;</td>
        <td style="width: 30px; text-align: center; border-bottom: 1px solid black;">&nbsp;c&nbsp;</td>
        <td style="width: 30px; text-align: center; border-bottom: 1px solid black; border-right: 1px solid black;">&nbsp;d&nbsp;</td>
        <td colspan="5" style="width: 250px;">&nbsp;</td>
        <td colspan="6" style="width: 150px; border-left: 1px solid; border-right: 1px solid; border-bottom: 1px solid;">&nbsp;</td>
    </tr>
</table>


<table style="margin-left: 80px; margin-right: 80px; font-size: 14px;">
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: right;">1</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S1 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S1 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S1 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S1 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">16</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S16 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S16 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S16 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S16 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">31</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S31 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S31 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S31 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S31 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: right;">2</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S2 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S2 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S2 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S2 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">17</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S17 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S17 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S17 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S17 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">32</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S32 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S32 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S32 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S32 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: right;">3</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S3 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S3 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S3 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S3 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">18</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S18 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S18 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S18 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S18 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">33</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S33 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S33 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S33 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S33 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: right;">4</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S4 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S4 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S4 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S4 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">19</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S19 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S19 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S19 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S19 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">34</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S34 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S34 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S34 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S34 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: right;">5</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S5 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S5 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S5 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S5 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">20</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S20 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S20 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S20 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S20 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">35</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S35 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S35 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S35 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S35 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: right;">6</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S6 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S6 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S6 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S6 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">21</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S21 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S21 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S21 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S21 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">36</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S36 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S36 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S36 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S36 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: right;">7</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S7 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S7 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S7 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S7 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">22</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S22 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S22 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S22 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S22 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">37</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S37 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S37 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S37 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S37 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: right;">8</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S8 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S8 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S8 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S8 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">23</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S23 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S23 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S23 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S23 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">38</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S38 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S38 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S38 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S38 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: right;">9</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S9 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S9 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S9 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S9 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">24</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S24 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S24 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S24 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S24 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">39</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S39 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S39 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S39 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S39 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: right;">10</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S10 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S10 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S10 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S10 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">25</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S25 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S25 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S25 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S25 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">40</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S40 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S40 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S40 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S40 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: right;">11</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S11 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S11 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S11 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S11 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">26</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S26 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S26 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S26 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S26 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: right;">12</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S12 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S12 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S12 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S12 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">27</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S27 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S27 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S27 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S27 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: right;">13</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S13 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S13 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S13 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S13 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">28</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S28 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S28 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S28 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S28 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: right;">14</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S14 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S14 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S14 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S14 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">29</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S29 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S29 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S29 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S29 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: right;">15</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S15 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S15 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S15 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S15 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">30</td>
        <td style="width: 30px; text-align: center;"><?php if($T1S30 == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S30 == '2'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S30 == '3'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T1S30 == '4'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
    </tr>
</table>

<table style="margin-left: 80px; margin-right: 80px;">
    <tr>
        <td>&nbsp;</td>
    </tr>
        <tr>
            <td>&nbsp;</td>
            <td colspan="5"><strong>SUBTES : 2 GABUNGAN BAGIAN</strong></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
    </table>
    <div>
            <!-- border-bottom: 1px solid; border-top: 1px solid; border-right: 1px solid; border-left: 1px solid; -->
    <table style="margin-left: 80px; margin-right: 80px;  border-collapse: collapse; font-size: 14px;">
        <tr>
            <td>&nbsp;</td>
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
            <td>&nbsp;</td>
            <td style="border-left: 1px solid black;">&nbsp;</td>
            <td style="width: 30px; text-align: center;">1</td>
            <td style="width: 30px; text-align: center;">&nbsp;a&nbsp;</td>
            <td style="width: 30px; text-align: center;">&nbsp;b&nbsp;</td>
            <td style="width: 30px; text-align: center;">&nbsp;c&nbsp;</td>
            <td style="width: 30px; text-align: center;">&nbsp;d&nbsp;</td>
            <td style="width: 30px; text-align: center;">&nbsp;e&nbsp;</td>
            <td style="width: 30px; text-align: center; border-right: 1px solid black;">&nbsp;f&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="border-left: 1px solid black;">&nbsp;</td>
            <td style="width: 30px; text-align: center;">2</td>
            <td style="width: 30px; text-align: center;">&nbsp;a&nbsp;</td>
            <td style="width: 30px; text-align: center;">&nbsp;b&nbsp;</td>
            <td style="width: 30px; text-align: center;">&nbsp;c&nbsp;</td>
            <td style="width: 30px; text-align: center;">&nbsp;d&nbsp;</td>
            <td style="width: 30px; text-align: center;">&nbsp;e&nbsp;</td>
            <td style="width: 30px; text-align: center; border-right: 1px solid black;">&nbsp;f&nbsp;</td>
            <td colspan="3" style="width: 150px;">&nbsp;</td>
            <td colspan="6" style="width: 150px; border-top: 1px solid; border-left: 1px solid; border-right: 1px solid;"><strong>&nbsp;RS = <?php echo $T2SALL;?></strong></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="border-left: 1px solid black;">&nbsp;</td>
            <td style="width: 30px; text-align: center;">3</td>
            <td style="width: 30px; text-align: center;">&nbsp;a&nbsp;</td>
            <td style="width: 30px; text-align: center;">&nbsp;b&nbsp;</td>
            <td style="width: 30px; text-align: center;">&nbsp;c&nbsp;</td>
            <td style="width: 30px; text-align: center;">&nbsp;d&nbsp;</td>
            <td style="width: 30px; text-align: center;">&nbsp;e&nbsp;</td>
            <td style="width: 30px; text-align: center; border-right: 1px solid black;">&nbsp;f&nbsp;</td>
            <td colspan="3" style="width: 30px; text-align: center;">&nbsp;</td>
            <td colspan="6" style="width: 150px; border-left: 1px solid; border-right: 1px solid;">&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="border-left: 1px solid black; border-bottom: 1px solid black;">&nbsp;</td>
            <td style="width: 30px; text-align: center; border-bottom: 1px solid black;">4</td>
            <td style="width: 30px; text-align: center; border-bottom: 1px solid black;">&nbsp;a&nbsp;</td>
            <td style="width: 30px; text-align: center; border-bottom: 1px solid black;">&nbsp;b&nbsp;</td>
            <td style="width: 30px; text-align: center; border-bottom: 1px solid black;">&nbsp;c&nbsp;</td>
            <td style="width: 30px; text-align: center; border-bottom: 1px solid black;">&nbsp;d&nbsp;</td>
            <td style="width: 30px; text-align: center; border-bottom: 1px solid black;">&nbsp;e&nbsp;</td>
            <td style="width: 30px; text-align: center; border-right: 1px solid black; border-bottom: 1px solid black;">&nbsp;f&nbsp;</td>
            <td colspan="3" style="width: 30px;">&nbsp;</td>
            <td colspan="6" style="width: 150px; border-left: 1px solid; border-right: 1px solid; border-bottom: 1px solid;">&nbsp;</td>
        </tr>
    </table>
    
    
    <table style="margin-left: 80px; margin-right: 80px; font-size: 14px;">
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: right;">1</td>
            <td style="width: 30px; text-align: center;"><?php if($T2S1aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S1bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S1cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S1dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S1eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S1fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
            <td colspan="3" style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: right;">14</td>
            <td style="width: 30px; text-align: center;"><?php if($T2S14aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S14bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S14cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S14dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S14eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S14fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: right;">2</td>
            <td style="width: 30px; text-align: center;"><?php if($T2S2aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S2bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S2cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S2dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S2eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S2fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
            <td colspan="3" style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: right;">15</td>
            <td style="width: 30px; text-align: center;"><?php if($T2S15aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S15bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S15cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S15dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S15eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S15fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: right;">3</td>
            <td style="width: 30px; text-align: center;"><?php if($T2S3aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S3bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S3cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S3dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S3eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S3fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
            <td colspan="3" style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: right;">16</td>
            <td style="width: 30px; text-align: center;"><?php if($T2S16aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S16bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S16cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S16dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S16eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S16fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: right;">4</td>
            <td style="width: 30px; text-align: center;"><?php if($T2S4aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S4bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S4cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S4dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S4eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S4fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
            <td colspan="3" style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: right;">17</td>
            <td style="width: 30px; text-align: center;"><?php if($T2S17aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S17bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S17cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S17dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S17eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S17fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: right;">5</td>
            <td style="width: 30px; text-align: center;"><?php if($T2S5aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S5bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S5cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S5dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S5eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S5fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
            <td colspan="3" style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: right;">18</td>
            <td style="width: 30px; text-align: center;"><?php if($T2S18aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S18bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S18cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S18dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S18eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S18fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: right;">6</td>
            <td style="width: 30px; text-align: center;"><?php if($T2S6aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S6bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S6cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S6dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S6eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S6fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
            <td colspan="3" style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: right;">19</td>
            <td style="width: 30px; text-align: center;"><?php if($T2S19aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S19bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S19cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S19dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S19eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S19fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: right;">7</td>
            <td style="width: 30px; text-align: center;"><?php if($T2S7aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S7bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S7cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S7dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S7eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S7fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
            <td colspan="3" style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: right;">20</td>
            <td style="width: 30px; text-align: center;"><?php if($T2S20aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S20bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S20cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S20dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S20eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S20fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: right;">8</td>
            <td style="width: 30px; text-align: center;"><?php if($T2S8aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S8bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S8cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S8dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S8eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S8fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
            <td colspan="3" style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: right;">21</td>
            <td style="width: 30px; text-align: center;"><?php if($T2S21aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S21bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S21cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S21dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S21eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S21fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: right;">9</td>
            <td style="width: 30px; text-align: center;"><?php if($T2S9aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S9bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S9cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S9dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S9eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S9fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
            <td colspan="3" style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: right;">22</td>
            <td style="width: 30px; text-align: center;"><?php if($T2S22aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S22bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S22cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S22dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S22eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S22fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: right;">10</td>
            <td style="width: 30px; text-align: center;"><?php if($T2S10aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S10bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S10cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S10dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S10eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S10fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
            <td colspan="3" style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: right;">23</td>
            <td style="width: 30px; text-align: center;"><?php if($T2S23aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S23bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S23cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S23dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S23eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S23fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: right;">11</td>
            <td style="width: 30px; text-align: center;"><?php if($T2S11aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S11bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S11cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S11dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S11eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S11fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
            <td colspan="3" style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: right;">24</td>
            <td style="width: 30px; text-align: center;"><?php if($T2S24aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S24bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S24cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S24dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S24eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S24fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: right;">12</td>
            <td style="width: 30px; text-align: center;"><?php if($T2S12aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S12bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S12cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S12dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S12eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S12fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
            <td colspan="3" style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: right;">25</td>
            <td style="width: 30px; text-align: center;"><?php if($T2S25aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S25bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S25cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S25dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S25eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S25fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: right;">13</td>
            <td style="width: 30px; text-align: center;"><?php if($T2S13aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S13bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S13cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S13dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S13eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S13fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
            <td colspan="3" style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: right;">26</td>
            <td style="width: 30px; text-align: center;"><?php if($T2S26aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S26bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S26cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S26dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S26eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T2S26fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
        </tr>
    </table>

    <div>&nbsp;</div>
    <div>&nbsp;</div>

    <table style="margin-left: 80px; margin-right: 80px; width:60%; ">
        <tr>
            <td>&nbsp;</td>
            <td style="text-align:center;" colspan="17"><H4><strong>LEMBAR JAWABAN TIKI-T</strong></H4></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
    </table>


<table  style="margin-left: 80px; margin-right: 80px; border-collapse: collapse; font-size: 14px;">
    <tr>
        <td>&nbsp;</td>
        <td colspan="3" style="width: 10%;">No. Test</td>
        <td>:</td>
        <td colspan="5" style="width: 30%; border-bottom: 1px solid black;">&nbsp;</td>
        <td  style="width: 15%; border-bottom: 1px solid black;">&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td colspan="3" style="width: 10%;">Nama</td>
        <td>:</td>
        <td colspan="5" style="width: 30%; border-bottom: 1px solid black;"><?php echo $name;?></td>
        <td style="font-size:11"><?php if($jenis_kelamin == 1){
            echo "(<strike>&nbsp;L&nbsp;</strike>/P)";
        }else{
            echo "(L/<strike>&nbsp;P&nbsp;</strike>)";
        } ?></td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td colspan="3">Tgl. Test</td>
        <td>:</td>
        <td colspan="5" style="border-bottom: 1px solid black; text-align: left"><?php $date=date_create($tanggal_tes); echo date_format($date,"d F Y");?></td>
        <td style="border-bottom: 1px solid black;">&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
</table>
<table style="margin-left: 80px; margin-right: 80px;">
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td colspan="5"><strong>SUB TES : 3 HUBUNGAN KATA</strong></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
</table>
<div>
        <!-- border-bottom: 1px solid; border-top: 1px solid; border-right: 1px solid; border-left: 1px solid; -->
<table style="margin-left: 80px; margin-right: 80px;  border-collapse: collapse; font-size: 14px;">
    <tr>
        <td>&nbsp;</td>
        <td style="border-top: 1px solid black; border-left: 1px solid black;">&nbsp;Contoh :</td>
        <td style="border-top: 1px solid black;">&nbsp;</td>
        <td style="border-top: 1px solid black;">&nbsp;</td>
        <td style="border-top: 1px solid black;">&nbsp;</td>
        <td style="border-top: 1px solid black;">&nbsp;</td>
        <td style="border-top: 1px solid black; border-right: 1px solid black;">&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="border-left: 1px solid black;">&nbsp;</td>
        <td style="width: 30px; text-align: center;">1</td>
        <td style="width: 30px; text-align: center;">&nbsp;a&nbsp;</td>
        <td style="width: 30px; text-align: center;">&nbsp;b&nbsp;</td>
        <td style="width: 30px; text-align: center;">&nbsp;c&nbsp;</td>
        <td style="width: 30px; text-align: center; border-right: 1px solid black;">&nbsp;d&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="border-left: 1px solid black;">&nbsp;</td>
        <td style="width: 30px; text-align: center;">2</td>
        <td style="width: 30px; text-align: center;">&nbsp;a&nbsp;</td>
        <td style="width: 30px; text-align: center;">&nbsp;b&nbsp;</td>
        <td style="width: 30px; text-align: center;">&nbsp;c&nbsp;</td>
        <td style="width: 30px; text-align: center; border-right: 1px solid black;">&nbsp;d&nbsp;</td>
        <td style="width: 250px;">&nbsp;</td>
        <td style="width: 30px; text-align: center;">&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="border-left: 1px solid black;">&nbsp;</td>
        <td style="width: 30px; text-align: center;">3</td>
        <td style="width: 30px; text-align: center;">&nbsp;a&nbsp;</td>
        <td style="width: 30px; text-align: center;">&nbsp;b&nbsp;</td>
        <td style="width: 30px; text-align: center;">&nbsp;c&nbsp;</td>
        <td style="width: 30px; text-align: center; border-right: 1px solid black;">&nbsp;d&nbsp;</td>
        <td colspan="5" style="width: 250px;">&nbsp;</td>
        <td colspan="6" style="width: 150px; border-top: 1px solid; border-left: 1px solid; border-right: 1px solid;"><strong>&nbsp;RS = <?php echo $T3SALL; ?></strong></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="border-left: 1px solid black;">&nbsp;</td>
        <td style="width: 30px; text-align: center;">4</td>
        <td style="width: 30px; text-align: center;">&nbsp;a&nbsp;</td>
        <td style="width: 30px; text-align: center;">&nbsp;b&nbsp;</td>
        <td style="width: 30px; text-align: center;">&nbsp;c&nbsp;</td>
        <td style="width: 30px; text-align: center; border-right: 1px solid black;">&nbsp;d&nbsp;</td>
        <td colspan="5" style="width: 250px;">&nbsp;</td>
        <td colspan="6" style="width: 150px; border-left: 1px solid; border-right: 1px solid;">&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="border-bottom: 1px solid black; border-left: 1px solid black;">&nbsp;</td>
        <td style="width: 30px; text-align: center; border-bottom: 1px solid black;">5</td>
        <td style="width: 30px; text-align: center; border-bottom: 1px solid black;">&nbsp;a&nbsp;</td>
        <td style="width: 30px; text-align: center; border-bottom: 1px solid black;">&nbsp;b&nbsp;</td>
        <td style="width: 30px; text-align: center; border-bottom: 1px solid black;">&nbsp;c&nbsp;</td>
        <td style="width: 30px; text-align: center; border-bottom: 1px solid black; border-right: 1px solid black;">&nbsp;d&nbsp;</td>
        <td colspan="5" style="width: 250px;">&nbsp;</td>
        <td colspan="6" style="width: 150px; border-left: 1px solid; border-right: 1px solid; border-bottom: 1px solid;">&nbsp;</td>
    </tr>
</table>


<table style="margin-left: 80px; margin-right: 80px; font-size: 14px;">
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: right;">1</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S1aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S1bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S1cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S1dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">16</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S16aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S16bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S16cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S16dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">31</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S31aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S31bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S31cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S31dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: right;">2</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S2aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S2bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S2cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S2dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">17</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S17aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S17bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S17cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S17dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">32</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S32aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S32bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S32cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S32dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: right;">3</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S3aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S3bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S3cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S3dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">18</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S18aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S18bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S18cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S18dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">33</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S33aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S33bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S33cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S33dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: right;">4</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S4aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S4bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S4cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S4dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">19</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S19aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S19bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S19cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S19dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">34</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S34aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S34bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S34cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S34dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: right;">5</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S5aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S5bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S5cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S5dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">20</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S20aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S20bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S20cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S20dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">35</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S35aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S35bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S35cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S35dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: right;">6</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S6aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S6bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S6cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S6dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">21</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S21aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S21bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S21cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S21dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">36</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S36aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S36bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S36cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S36dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: right;">7</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S7aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S7bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S7cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S7dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">22</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S22aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S22bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S22cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S22dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">37</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S37aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S37bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S37cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S37dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: right;">8</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S8aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S8bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S8cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S8dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">23</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S23aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S23bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S23cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S23dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">38</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S38aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S38bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S38cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S38dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: right;">9</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S9aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S9bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S9cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S9dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">24</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S24aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S24bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S24cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S24dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">39</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S39aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S39bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S39cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S39dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: right;">10</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S10aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S10bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S10cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S10dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">25</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S25aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S25bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S25cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S25dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">40</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S40aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S40bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S40cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S40dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: right;">11</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S11aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S11bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S11cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S11dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">26</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S26aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S26bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S26cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S26dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: right;">12</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S12aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S12bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S12cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S12dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">27</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S27aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S27bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S27cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S27dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: right;">13</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S13aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S13bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S13cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S13dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">28</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S28aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S28bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S28cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S28dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: right;">14</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S14aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S14bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S14cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S14dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">29</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S29aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S29bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S29cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S29dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="width: 48px; text-align: right;">15</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S15aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S15bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S15cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S15dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
        <td style="width: 45px;">&nbsp;</td>
        <td style="width: 48px; text-align: right;">30</td>
        <td style="width: 30px; text-align: center;"><?php if($T3S30aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S30bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S30cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
        <td style="width: 30px; text-align: center;"><?php if($T3S30dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
    </tr>
</table>

<table style="margin-left: 80px; margin-right: 80px;">
    <tr>
        <td>&nbsp;</td>
    </tr>
        <tr>
            <td>&nbsp;</td>
            <td colspan="5"><strong>SUBTES : 4 ABSTRAKSI NON VERBAL</strong></td>
        </tr>
        <tr>
                <td>&nbsp;</td>
            </tr>
    </table>
    <div>
            <!-- border-bottom: 1px solid; border-top: 1px solid; border-right: 1px solid; border-left: 1px solid; -->
    <table style="margin-left: 80px; margin-right: 80px;  border-collapse: collapse; font-size: 14px;">
        <tr>
            <td>&nbsp;</td>
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
            <td>&nbsp;</td>
            <td style="border-left: 1px solid black;">&nbsp;</td>
            <td style="width: 30px; text-align: center;">1</td>
            <td style="width: 30px; text-align: center;">&nbsp;a&nbsp;</td>
            <td style="width: 30px; text-align: center;">&nbsp;b&nbsp;</td>
            <td style="width: 30px; text-align: center;">&nbsp;c&nbsp;</td>
            <td style="width: 30px; text-align: center;">&nbsp;d&nbsp;</td>
            <td style="width: 30px; text-align: center;">&nbsp;e&nbsp;</td>
            <td style="width: 30px; text-align: center; border-right: 1px solid black;">&nbsp;f&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="border-left: 1px solid black;">&nbsp;</td>
            <td style="width: 30px; text-align: center;">2</td>
            <td style="width: 30px; text-align: center;">&nbsp;a&nbsp;</td>
            <td style="width: 30px; text-align: center;">&nbsp;b&nbsp;</td>
            <td style="width: 30px; text-align: center;">&nbsp;c&nbsp;</td>
            <td style="width: 30px; text-align: center;">&nbsp;d&nbsp;</td>
            <td style="width: 30px; text-align: center;">&nbsp;e&nbsp;</td>
            <td style="width: 30px; text-align: center; border-right: 1px solid black;">&nbsp;f&nbsp;</td>
            <td colspan="3" style="width: 150px;">&nbsp;</td>
            <td colspan="6" style="width: 150px; border-top: 1px solid; border-left: 1px solid; border-right: 1px solid;"><strong>&nbsp;RS = <?php echo $T4SALL; ?></strong></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="border-left: 1px solid black;">&nbsp;</td>
            <td style="width: 30px; text-align: center;">3</td>
            <td style="width: 30px; text-align: center;">&nbsp;a&nbsp;</td>
            <td style="width: 30px; text-align: center;">&nbsp;b&nbsp;</td>
            <td style="width: 30px; text-align: center;">&nbsp;c&nbsp;</td>
            <td style="width: 30px; text-align: center;">&nbsp;d&nbsp;</td>
            <td style="width: 30px; text-align: center;">&nbsp;e&nbsp;</td>
            <td style="width: 30px; text-align: center; border-right: 1px solid black;">&nbsp;f&nbsp;</td>
            <td colspan="3" style="width: 30px; text-align: center;">&nbsp;</td>
            <td colspan="6" style="width: 150px; border-left: 1px solid; border-right: 1px solid;">&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="border-left: 1px solid black; border-bottom: 1px solid black;">&nbsp;</td>
            <td style="width: 30px; text-align: center; border-bottom: 1px solid black;">4</td>
            <td style="width: 30px; text-align: center; border-bottom: 1px solid black;">&nbsp;a&nbsp;</td>
            <td style="width: 30px; text-align: center; border-bottom: 1px solid black;">&nbsp;b&nbsp;</td>
            <td style="width: 30px; text-align: center; border-bottom: 1px solid black;">&nbsp;c&nbsp;</td>
            <td style="width: 30px; text-align: center; border-bottom: 1px solid black;">&nbsp;d&nbsp;</td>
            <td style="width: 30px; text-align: center; border-bottom: 1px solid black;">&nbsp;e&nbsp;</td>
            <td style="width: 30px; text-align: center; border-right: 1px solid black; border-bottom: 1px solid black;">&nbsp;f&nbsp;</td>
            <td colspan="3" style="width: 30px; text-align: center;">&nbsp;</td>
            <td colspan="6" style="width: 150px; border-left: 1px solid; border-right: 1px solid; border-bottom: 1px solid;">&nbsp;</td>
        </tr>
    </table>
    
    
    <table style="margin-left: 80px; margin-right: 80px; font-size: 14px;">
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: right;">1</td>
            <td style="width: 30px; text-align: center;"><?php if($T4S1aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S1bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S1cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S1dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S1eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S1fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
            <td colspan="3" style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: right;">16</td>
            <td style="width: 30px; text-align: center;"><?php if($T4S16aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S16bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S16cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S16dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S16eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S16fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: right;">2</td>
            <td style="width: 30px; text-align: center;"><?php if($T4S2aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S2bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S2cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S2dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S2eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S2fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
            <td colspan="3" style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: right;">17</td>
            <td style="width: 30px; text-align: center;"><?php if($T4S17aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S17bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S17cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S17dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S17eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S17fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: right;">3</td>
            <td style="width: 30px; text-align: center;"><?php if($T4S3aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S3bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S3cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S3dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S3eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S3fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
            <td colspan="3" style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: right;">18</td>
            <td style="width: 30px; text-align: center;"><?php if($T4S18aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S18bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S18cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S18dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S18eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S18fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: right;">4</td>
            <td style="width: 30px; text-align: center;"><?php if($T4S4aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S4bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S4cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S4dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S4eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S4fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
            <td colspan="3" style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: right;">19</td>
            <td style="width: 30px; text-align: center;"><?php if($T4S19aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S19bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S19cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S19dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S19eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S19fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: right;">5</td>
            <td style="width: 30px; text-align: center;"><?php if($T4S5aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S5bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S5cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S5dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S5eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S5fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
            <td colspan="3" style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: right;">20</td>
            <td style="width: 30px; text-align: center;"><?php if($T4S20aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S20bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S20cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S20dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S20eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S20fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: right;">6</td>
            <td style="width: 30px; text-align: center;"><?php if($T4S6aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S6bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S6cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S6dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S6eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S6fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
            <td colspan="3" style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: right;">21</td>
            <td style="width: 30px; text-align: center;"><?php if($T4S21aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S21bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S21cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S21dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S21eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S21fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: right;">7</td>
            <td style="width: 30px; text-align: center;"><?php if($T4S7aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S7bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S7cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S7dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S7eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S7fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
            <td colspan="3" style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: right;">22</td>
            <td style="width: 30px; text-align: center;"><?php if($T4S22aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S22bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S22cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S22dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S22eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S22fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: right;">8</td>
            <td style="width: 30px; text-align: center;"><?php if($T4S8aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S8bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S8cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S8dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S8eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S8fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
            <td colspan="3" style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: right;">23</td>
            <td style="width: 30px; text-align: center;"><?php if($T4S23aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S23bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S23cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S23dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S23eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S23fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: right;">9</td>
            <td style="width: 30px; text-align: center;"><?php if($T4S9aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S9bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S9cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S9dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S9eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S9fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
            <td colspan="3" style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: right;">24</td>
            <td style="width: 30px; text-align: center;"><?php if($T4S24aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S24bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S24cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S24dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S24eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S24fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: right;">10</td>
            <td style="width: 30px; text-align: center;"><?php if($T4S10aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S10bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S10cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S10dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S10eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S10fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
            <td colspan="3" style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: right;">25</td>
            <td style="width: 30px; text-align: center;"><?php if($T4S25aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S25bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S25cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S25dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S25eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S25fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: right;">11</td>
            <td style="width: 30px; text-align: center;"><?php if($T4S11aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S11bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S11cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S11dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S11eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S11fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
            <td colspan="3" style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: right;">26</td>
            <td style="width: 30px; text-align: center;"><?php if($T4S26aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S26bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S26cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S26dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S26eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S26fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: right;">12</td>
            <td style="width: 30px; text-align: center;"><?php if($T4S12aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S12bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S12cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S12dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S12eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S12fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
            <td colspan="3" style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: right;">27</td>
            <td style="width: 30px; text-align: center;"><?php if($T4S27aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S27bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S27cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S27dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S27eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S27fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: right;">13</td>
            <td style="width: 30px; text-align: center;"><?php if($T4S13aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S13bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S13cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S13dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S13eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S13fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
            <td colspan="3" style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: right;">28</td>
            <td style="width: 30px; text-align: center;"><?php if($T4S28aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S28bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S28cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S28dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S28eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S28fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: right;">14</td>
            <td style="width: 30px; text-align: center;"><?php if($T4S14aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S14bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S14cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S14dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S14eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S14fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
            <td colspan="3" style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: right;">29</td>
            <td style="width: 30px; text-align: center;"><?php if($T4S29aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S29bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S29cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S29dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S29eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S29fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="width: 48px; text-align: right;">15</td>
            <td style="width: 30px; text-align: center;"><?php if($T4S15aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S15bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S15cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S15dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S15eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S15fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
            <td colspan="3" style="width: 145px;">&nbsp;</td>
            <td style="width: 48px; text-align: right;">30</td>
            <td style="width: 30px; text-align: center;"><?php if($T4S30aJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;a&nbsp;</span></strike>'; } else { echo'a'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S30bJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;b&nbsp;</span></strike>'; } else { echo'b'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S30cJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;c&nbsp;</span></strike>'; } else { echo'c'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S30dJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;d&nbsp;</span></strike>'; } else { echo'd'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S30eJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;e&nbsp;</span></strike>'; } else { echo'e'; }?></td>
            <td style="width: 30px; text-align: center;"><?php if($T4S30fJ == '1'){ echo '<strike style="color:red !important"><span style="color:black">&nbsp;f&nbsp;</span></strike>'; } else { echo'f'; }?></td>
        </tr>
    </table>
    <div>&nbsp;</div>
    <div>&nbsp;</div>
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
</section>
</html>

<script>
    function myFunction() {
        window.print();
    }
    function detail_tes(tesuser_id){
        window.open("<?php echo site_url().'/manager/tes_hasil_report_papi_excel'; ?>/index/"+tesuser_id);
        
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
    }

</style>