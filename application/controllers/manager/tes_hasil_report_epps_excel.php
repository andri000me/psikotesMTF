<?php
$filename ="excelreport.xls";
$contents = "testdata1 \t testdata2 \t testdata3 \t \n";
header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename='.$filename);

$mysqli = new mysqli("localhost","root", "","dbmtfpsikotes");

if(mysqli_connect_errno()) {
    printf("Connect failed: %s\n",mysql_connect_error());
    exit();
}
// echo $user_id;
$sql = "
        SELECT  cbt_user.user_firstname as name,
                cbt_tes.tes_nama as nama,
                cbt_tes_user.tesuser_id as user_id,
                cbt_soal.soal_detail as soal,
                cbt_jawaban.jawaban_benar as jawaban,
                cbt_soal.soal_nomor as soal_nomor,
                cbt_tes.tes_begin_time as tanggal_tes
        FROM 
                cbt_tes_user,
                cbt_user,
                cbt_tes,
                cbt_tes_soal,
                cbt_jawaban,
                cbt_soal
        WHERE   cbt_user.user_id = cbt_tes_user.tesuser_user_id
        AND 	cbt_tes_user.tesuser_tes_id = cbt_tes.tes_id
        AND 	cbt_user.user_id = 7
        AND  	cbt_tes.tes_id = 120
        AND 	cbt_tes_soal.tessoal_tesuser_id = cbt_tes_user. tesuser_id
        AND     cbt_jawaban.jawaban_id = cbt_tes_soal.tessoal_jawaban_text
        AND 	cbt_soal.soal_id = cbt_tes_soal.tessoal_soal_id

        ORDER BY
        cbt_tes_soal.tessoal_order";

        // AND 	cbt_user.user_id = ".$user_id."
        // AND  	cbt_tes.tes_id = ".$tesuser_tes_id."
    
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
                if($s38 == 'B'){
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
                if($s44 == 'B'){
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
                }else if($s182 == 'B'){
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
            // $user_ids = $user_id;
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
    };


?>
<html>
<head>
    <title>MBTI</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<section class="invoice">
    <body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

    <div style="margin: 10px; width:100%; text-align: center; margin-top: 10px;"><H1>EPPS</H1></div>
    <!-- <table style="font-size: 15px; width: -webkit-fill-available; margin: 10px; border-collapse: collapse;">
        <tr>
            <td style="width: 10%;" colspan="3">Nomor</td>
            <td style="width: 3%;">&nbsp;:</td>
            <td style="width: 37%; text-align:left" colspan="3">12345</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td style="width: 10%;" colspan="2">Jenis Kelamin</td>
            <td style="width: 3%;">&nbsp;:</td>
            <td style="width: 37%;">12345</td>
        </tr>

        <tr>
            <td colspan="3">Nama</td>
            <td>&nbsp;:</td>
            <td colspan="4"><? echo $name; ?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td style="width: 10%;" colspan="2">Umur</td>
            <td style="width: 3%;">&nbsp;:</td>
            <td style="width: 37%;" colspan="3">27 tahun</td>
        </tr>
    </table> -->

    <table style="font-size: 12px; width: -webkit-fill-available; margin: 10px; border-collapse: collapse;">
        <!---kolom tengah-->
        <!-- <thead> -->
        <tr>
            <td>&nbsp;</td>
            <td style="heigh:10px" colspan="4">Nomor</td>
            <td>&nbsp;:</td>
            <td colspan="4">AB12345</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td colspan="4">Jenis Kelamin</td>
            <td >&nbsp;:</td>
            <td colspan="5">Perempuan</td>
        </tr>

        <tr>
            <td>&nbsp;</td>
            <td colspan="4">Nama</td>
            <td>&nbsp;:</td>
            <td colspan="4"><? echo $name; ?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td colspan="4">Umur</td>
            <td >&nbsp;:</td>
            <td colspan="5">27 tahun</td>
        </tr>
        <!-- </thead> -->
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr style="border-top: 2px solid black;">
            <td width="10" style="border-top: 2px solid black;">&nbsp;</td>
            <td>&nbsp;</td>
            <td width="10">&nbsp;</td>
            <td>&nbsp;</td>
            <td width="10">&nbsp;</td>
            <td>&nbsp;</td>
            <td width="10">&nbsp;</td>
            <td>&nbsp;</td>
            <td width="10">&nbsp;</td>
            <td>&nbsp;</td>
            <td width="10">&nbsp;</td>
            <td>&nbsp;</td>
            <td width="10">&nbsp;</td>
            <td>&nbsp;</td>
            <td width="10">&nbsp;</td>
            <td>&nbsp;</td>
            <td width="10">&nbsp;</td>
            <td>&nbsp;</td>
            <td width="10">&nbsp;</td>
            <td>&nbsp;</td>
            <td width="10">&nbsp;</td>
            <td>&nbsp;</td>
            <td width="10">&nbsp;</td>
            <td>&nbsp;</td>
            <td width="10">&nbsp;</td>
            <td>&nbsp;</td>
            <td width="10">&nbsp;</td>
            <td>&nbsp;</td>
            <td width="10" class="borderRight">&nbsp;</td>
            <td style="border-right: 2px solid black;">&nbsp;</td>
            <td>&nbsp;o</td>
            <td>r</td>
            <td>c</td>
            <td>s</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>1 <?php if($s1 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s1 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>6 <?php if($s6 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s6 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>11 <?php if($s11 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s1 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>16 <?php if($s16 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s16 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>21 <?php if($s21 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s21 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>26 <?php if($s26 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s26 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>31 <?php if($s31 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s31 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>36 <?php if($s36 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s36 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>41 <?php if($s41 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s41 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>46 <?php if($s46 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s46 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>51 <?php if($s51 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s51 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>56 <?php if($s56 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s56 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>61 <?php if($s61 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s61 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>66 <?php if($s66 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s66 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td class="borderRight" style="border-right: 2px solid black;">71 <?php if($s6 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s6 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;Ach</td>
            <td><?php echo $Achr; ?></td>
            <td><?php echo $Achc; ?></td>
            <td><?php echo $Achs; ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>2 <?php if($s2 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s2 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>7 <?php if($s7 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s7 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>12 <?php if($s12 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s12 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>17 <?php if($s17 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s17 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>22 <?php if($s22 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s22 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>27 <?php if($s27 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s27 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>32 <?php if($s32 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s32 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>37 <?php if($s37 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s37 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>42 <?php if($s42 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s42 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>47 <?php if($s47 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s47 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>52 <?php if($s52 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s52 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>57 <?php if($s57 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s57 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>62 <?php if($s62 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s62 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>67 <?php if($s67 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s67 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td class="borderRight" style="border-right: 2px solid black;">72 <?php if($s72 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s72 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;Def</td>
            <td><?php echo $Defr; ?></td>
            <td><?php echo $Defc; ?></td>
            <td><?php echo $Defs; ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>3 <?php if($s3 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s3 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>8 <?php if($s8 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s8 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>13 <?php if($s13 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s13 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>18 <?php if($s18 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s18 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>23 <?php if($s23 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s23 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>28 <?php if($s28 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s28 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>33 <?php if($s33 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s33 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>38 <?php if($s38 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s38 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>43 <?php if($s43 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s43 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>48 <?php if($s48 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s48 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>53 <?php if($s53 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s53 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>58 <?php if($s58 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s58 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>63 <?php if($s63 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s63 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>68 <?php if($s68 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s68 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td class="borderRight" style="border-right: 2px solid black;">73 <?php if($s73 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s73 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;Ord</td>
            <td><?php echo $Ordr; ?></td>
            <td><?php echo $Ordc; ?></td>
            <td><?php echo $Ords; ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>4 <?php if($s4 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s4 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>9 <?php if($s9 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s9 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>14 <?php if($s14 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s14 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>19 <?php if($s19 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s19 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>24 <?php if($s24 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s24 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>29 <?php if($s29 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s29 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>34 <?php if($s34 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s34 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>39 <?php if($s39 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s39 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>44 <?php if($s44 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s44 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>49 <?php if($s49 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s49 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>54 <?php if($s54 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s54 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>59 <?php if($s59 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s59 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>64 <?php if($s64 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s64 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>69 <?php if($s69 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s69 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td class="borderRight" style="border-right: 2px solid black;">74 <?php if($s74 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s74 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;Exh</td>
            <td><?php echo $Exhr; ?></td>
            <td><?php echo $Exhc; ?></td>
            <td><?php echo $Exhs; ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>5 <?php if($s5 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s5 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>10 <?php if($s10 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s10 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>15 <?php if($s15 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s15 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>20 <?php if($s20 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s20 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>25 <?php if($s25 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s25 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>30 <?php if($s30 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s30 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>35 <?php if($s35 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s35 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>40 <?php if($s40 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s40 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>45 <?php if($s45 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s45 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>50 <?php if($s50 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s50 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>55 <?php if($s55 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s55 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>60 <?php if($s60 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s60 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>65 <?php if($s65 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s65 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>70 <?php if($s70 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s70 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td class="borderRight" style="border-right: 2px solid black;">75 <?php if($s75 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s75 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;Aut</td>
            <td><?php echo $Autr; ?></td>
            <td><?php echo $Autc; ?></td>
            <td><?php echo $Auts; ?></td>
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
            <td>&nbsp;</td>
            <td style="border-right: 2px solid black;">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="borderRight">&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>76 <?php if($s76 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s76 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>81 <?php if($s81 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s81 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>86 <?php if($s86 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s86 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>91 <?php if($s91 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s91 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>96 <?php if($s96 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s96 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>101 <?php if($s101 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s101 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>106 <?php if($s106 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s106 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>111 <?php if($s111 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s111 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>116 <?php if($s116 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s116 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>121 <?php if($s121 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s121 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>126 <?php if($s126 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s126 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>131 <?php if($s131 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s131 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>136 <?php if($s136 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s136 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>141 <?php if($s141 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s141 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td class="borderRight" style="border-right: 2px solid black;">146 <?php if($s146 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s146 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;Aff</td>
            <td><?php echo $Affr; ?></td>
            <td><?php echo $Affc; ?></td>
            <td><?php echo $Affs; ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>77 <?php if($s77 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s77 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>82 <?php if($s82 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s82 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>87 <?php if($s87 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s87 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>92 <?php if($s92 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s92 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>97 <?php if($s97 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s97 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>102 <?php if($s102 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s102 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>107 <?php if($s107 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s107 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>112 <?php if($s112 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s112 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>117 <?php if($s117 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s117 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>122 <?php if($s122 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s122 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>127 <?php if($s127 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s127 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>132 <?php if($s132 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s132 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>137 <?php if($s137 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s137 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>142 <?php if($s142 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s142 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td class="borderRight" style="border-right: 2px solid black;">147 <?php if($s147 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s147 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;Int</td>
            <td><?php echo $Intr; ?></td>
            <td><?php echo $Intc; ?></td>
            <td><?php echo $Ints; ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>78 <?php if($s78 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s78 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>83 <?php if($s83 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s83 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>88 <?php if($s88 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s88 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>93 <?php if($s93 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s93 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>98 <?php if($s98 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s98 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>103 <?php if($s103 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s103 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>108 <?php if($s108 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s108 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>113 <?php if($s113 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s113 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>118 <?php if($s118 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s118 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>123 <?php if($s123 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s123 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>128 <?php if($s128 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s128 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>133 <?php if($s133 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s133 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>138 <?php if($s138 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s138 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>143 <?php if($s143 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s143 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td class="borderRight" style="border-right: 2px solid black;">148 <?php if($s148 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s148 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;Suc</td>
            <td><?php echo $Sucr; ?></td>
            <td><?php echo $Succ; ?></td>
            <td><?php echo $Sucs; ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>79 <?php if($s79 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s79 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>84 <?php if($s84 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s84 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>89 <?php if($s89 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s89 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>94 <?php if($s94 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s94 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>99 <?php if($s99 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s99 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>104 <?php if($s104 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s104 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>109 <?php if($s109 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s109 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>114 <?php if($s114 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s114 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>119 <?php if($s119 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s119 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>124 <?php if($s124 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s124 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>129 <?php if($s129 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s129 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>134 <?php if($s134 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s134 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>139 <?php if($s139 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s139 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>144 <?php if($s144 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s144 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td class="borderRight" style="border-right: 2px solid black;">149 <?php if($s149 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s149 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;Dom</td>
            <td><?php echo $Domr; ?></td>
            <td><?php echo $Domc; ?></td>
            <td><?php echo $Doms; ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>80 <?php if($s80 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s1 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>85 <?php if($s85 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s1 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>90 <?php if($s90 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s1 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>95 <?php if($s95 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s1 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>100 <?php if($s100 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s1 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>105 <?php if($s105 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s1 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>110 <?php if($s110 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s1 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>115 <?php if($s115 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s1 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>120 <?php if($s120 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s1 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>125 <?php if($s125 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s1 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>130 <?php if($s130 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s1 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>135 <?php if($s135 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s1 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>140 <?php if($s140 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s1 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>145 <?php if($s145 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s1 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td class="borderRight" style="border-right: 2px solid black;">150 <?php if($s150 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s1 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;Aba</td>
            <td><?php echo $Abar; ?></td>
            <td><?php echo $Abac; ?></td>
            <td><?php echo $Abas; ?></td>
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
            <td>&nbsp;</td>
            <td style="border-right: 2px solid black;">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="borderRight">&nbsp;</td>
        </tr>

        <tr>
            <td>&nbsp;</td>
            <td>151 <?php if($s151 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s151 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>156 <?php if($s156 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s156 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>161 <?php if($s161 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s161 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>166 <?php if($s166 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s166 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>171 <?php if($s171 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s171 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>176 <?php if($s176 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s176 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>181 <?php if($s181 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s181 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>186 <?php if($s186 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s186 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>191 <?php if($s191 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s191 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>196 <?php if($s196 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s196 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>201 <?php if($s201 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s201 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>206 <?php if($s206 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s206 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>211 <?php if($s211 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s211 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>216 <?php if($s216 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s216 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td class="borderRight" style="border-right: 2px solid black;">221 <?php if($s221 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s221 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;Nur</td>
            <td><?php echo $Nurr; ?></td>
            <td><?php echo $Nurc; ?></td>
            <td><?php echo $Nurs; ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>152 <?php if($s152 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s152 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>157 <?php if($s157 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s157 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>162 <?php if($s162 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s162 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>167 <?php if($s167 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s167 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>172 <?php if($s172 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s172 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>177 <?php if($s177 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s177 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>182 <?php if($s182 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s182 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>187 <?php if($s187 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s187 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>192 <?php if($s192 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s192 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>197 <?php if($s197 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s197 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>202 <?php if($s202 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s202 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>207 <?php if($s207 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s207 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>212 <?php if($s212 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s212 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>217 <?php if($s217 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s217 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td class="borderRight" style="border-right: 2px solid black;">222 <?php if($s222 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s222 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;Chg</td>
            <td><?php echo $Chgr; ?></td>
            <td><?php echo $Chgc; ?></td>
            <td><?php echo $Chgs; ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>153 <?php if($s153 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s153 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>158 <?php if($s158 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s158 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>163 <?php if($s163 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s163 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>168 <?php if($s168 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s168 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>173 <?php if($s173 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s173 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>178 <?php if($s178 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s178 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>183 <?php if($s183 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s183 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>188 <?php if($s188 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s188 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>193 <?php if($s193 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s193 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>198 <?php if($s198 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s198 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>203 <?php if($s203 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s203 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>208 <?php if($s208 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s208 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>213 <?php if($s213 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s213 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>218 <?php if($s218 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s218 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td class="borderRight" style="border-right: 2px solid black;">223 <?php if($s223 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s223 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;End</td>
            <td><?php echo $Endr; ?></td>
            <td><?php echo $Endc; ?></td>
            <td><?php echo $Ends; ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>154 <?php if($s154 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s154 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>159 <?php if($s159 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s159 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>164 <?php if($s164 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s164 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>169 <?php if($s169 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s169 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>174 <?php if($s174 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s174 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>179 <?php if($s179 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s179 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>184 <?php if($s184 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s184 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>189 <?php if($s189 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s189 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>194 <?php if($s194 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s194 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>199 <?php if($s199 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s199 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>204 <?php if($s204 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s204 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>209 <?php if($s209 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s209 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>214 <?php if($s214 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s214 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>219 <?php if($s219 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s219 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td class="borderRight" style="border-right: 2px solid black;">224 <?php if($s224 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s224 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;Het</td>
            <td><?php echo $Hetr; ?></td>
            <td><?php echo $Hetc; ?></td>
            <td><?php echo $Hets; ?></td>
        </tr>
        <tr style="border-bottom: 2px solid black;">
            <td>&nbsp;</td>
            <td>155 <?php if($s155 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s155 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>160 <?php if($s160 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s160 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>165 <?php if($s165 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s165 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>170 <?php if($s170 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s170 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>175 <?php if($s175 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s175 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>180 <?php if($s180 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s180 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>185 <?php if($s185 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s185 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>190 <?php if($s190 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s190 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>195 <?php if($s195 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s195 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>200 <?php if($s200 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s200 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>205 <?php if($s205 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s205 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>210 <?php if($s210 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s210 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>215 <?php if($s215 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s215 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td>220 <?php if($s220 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s220 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;</td>
            <td class="borderRight" style="border-right: 2px solid black;">225 <?php if($s225 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s225 == 'B'){ echo'<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>&nbsp;B&nbsp;</sub>'; }?></td>
            <td>&nbsp;Agg</td>
            <td><?php echo $Aggr; ?></td>
            <td><?php echo $Aggc; ?></td>
            <td><?php echo $Aggs; ?></td>
        </tr>
        <tr>
            <td colspan="19">&nbsp;</td>
        </tr>
        <tr style="padding-top: 5px;">
                <td>&nbsp;</td>
                <td class="paddingtr" style="border: 1px solid black">
                    <div class="divResult" style="border: 1px solid black; width: 50%; text-align:center;"><? echo $b1; ?></div>
                </td>
                <td>&nbsp;</td>
                <td class="paddingtr">
                    <div class="divResult" style="border: 1px solid black; width: 50%; text-align:center;"><? echo $b2; ?></div>
                </td>
                <td>&nbsp;</td>
                <td class="paddingtr">
                    <div class="divResult" style="border: 1px solid black; width: 50%; text-align:center;"><? echo $b3; ?></div>
                </td>
                <td>&nbsp;</td>
                <td class="paddingtr">
                    <div class="divResult" style="border: 1px solid black; width: 50%; text-align:center;"><? echo $b4; ?></div>
                </td>
                <td>&nbsp;</td>
                <td class="paddingtr">
                    <div class="divResult" style="border: 1px solid black; width: 50%; text-align:center;"><? echo $b5; ?></div>
                </td>
                <td>&nbsp;</td>
                <td class="paddingtr">
                    <div class="divResult" style="border: 1px solid black; width: 50%; text-align:center;"><? echo $b6; ?></div>
                </td>
                <td>&nbsp;</td>
                <td class="paddingtr">
                    <div class="divResult" style="border: 1px solid black; width: 50%; text-align:center;"><? echo $b7; ?></div>
                </td>
                <td>&nbsp;</td>
                <td class="paddingtr">
                    <div class="divResult" style="border: 1px solid black; width: 50%; text-align:center;"><? echo $b8; ?></div>
                </td>
                <td>&nbsp;</td>
                <td class="paddingtr">
                    <div class="divResult" style="border: 1px solid black; width: 50%; text-align:center;"><? echo $b9; ?></div>
                </td>
                <td>&nbsp;</td>
                <td class="paddingtr">
                    <div class="divResult" style="border: 1px solid black; width: 50%; text-align:center;"><? echo $b10; ?></div>
                </td>
                <td>&nbsp;</td>
                <td class="paddingtr">
                    <div class="divResult" style="border: 1px solid black; width: 50%; text-align:center;"><? echo $b11; ?></div>
                </td>
                <td>&nbsp;</td>
                <td class="paddingtr">
                    <div class="divResult" style="border: 1px solid black; width: 50%; text-align:center;"><? echo $b12; ?></div>
                </td>
                <td>&nbsp;</td>
                <td class="paddingtr">
                    <div class="divResult" style="border: 1px solid black; width: 50%; text-align:center;"><? echo $b13; ?></div>
                </td>
                <td>&nbsp;</td>
                <td class="paddingtr">
                    <div class="divResult" style="border: 1px solid black; width: 50%; text-align:center;"><? echo $b14; ?></div>
                </td>
                <td>&nbsp;</td>
                <td class="paddingtr">
                    <div class="divResult" style="border: 1px solid black; width: 50%; text-align:center;"><? echo $b15; ?></div>
                </td>
                <td>&nbsp;</td>
                

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
    function detail_tes(tesuser_id){
        window.open("<?php echo site_url().'/manager/tes_hasil_report_papi_excel'; ?>/index/"+tesuser_id);
        
    }

</script>

<style>
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