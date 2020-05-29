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

// echo $user_id;
$sql = "
        SELECT  cbt_user.user_firstname as name,
        cbt_tes.tes_nama as nama,
        cbt_tes_user.tesuser_id as user_id,
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
        AND  	cbt_tes.tes_id = ".$tesuser_tes_id."
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
            $user_ids = $user_id;
            $tanggal_lahir = $row['tanggal_lahir'];
            $from = new DateTime($tanggal_lahir);
            $to   = new DateTime('today');
            $jenis_kelamin = $row['jenis_kelamin'];
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
    };


?>
<html>
<head>
    <title>EPPS</title>
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
            <td>ss</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>1 <?php if($s1 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s1 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>6 <?php if($s6 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s6 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>11 <?php if($s11 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s1 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>16 <?php if($s16 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s16 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>21 <?php if($s21 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s21 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>26 <?php if($s26 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s26 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>31 <?php if($s31 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s31 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>36 <?php if($s36 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s36 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>41 <?php if($s41 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s41 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>46 <?php if($s46 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s46 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>51 <?php if($s51 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s51 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>56 <?php if($s56 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s56 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>61 <?php if($s61 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s61 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>66 <?php if($s66 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s66 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td class="borderRight" style="border-right: 2px solid black;">71 <?php if($s6 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s6 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;Ach</td>
            <td><?php echo $Achr; ?></td>
            <td><?php echo $Achc; ?></td>
            <td><?php echo $Achs; ?></td>
            <td style="text-align:center;"><?php echo $Achsh; ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>2 <?php if($s2 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s2 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>7 <?php if($s7 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s7 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>12 <?php if($s12 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s12 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>17 <?php if($s17 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s17 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>22 <?php if($s22 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s22 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>27 <?php if($s27 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s27 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>32 <?php if($s32 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s32 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>37 <?php if($s37 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s37 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>42 <?php if($s42 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s42 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>47 <?php if($s47 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s47 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>52 <?php if($s52 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s52 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>57 <?php if($s57 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s57 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>62 <?php if($s62 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s62 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>67 <?php if($s67 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s67 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td class="borderRight" style="border-right: 2px solid black;">72 <?php if($s72 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s72 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;Def</td>
            <td><?php echo $Defr; ?></td>
            <td><?php echo $Defc; ?></td>
            <td><?php echo $Defs; ?></td>
            <td style="text-align:center;"><?php echo $Defsh; ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>3 <?php if($s3 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s3 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>8 <?php if($s8 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s8 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>13 <?php if($s13 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s13 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>18 <?php if($s18 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s18 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>23 <?php if($s23 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s23 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>28 <?php if($s28 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s28 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>33 <?php if($s33 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s33 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>38 <?php if($s38 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s38 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>43 <?php if($s43 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s43 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>48 <?php if($s48 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s48 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>53 <?php if($s53 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s53 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>58 <?php if($s58 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s58 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>63 <?php if($s63 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s63 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>68 <?php if($s68 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s68 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td class="borderRight" style="border-right: 2px solid black;">73 <?php if($s73 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s73 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;Ord</td>
            <td><?php echo $Ordr; ?></td>
            <td><?php echo $Ordc; ?></td>
            <td><?php echo $Ords; ?></td>
            <td style="text-align:center;"><?php echo $Ordsh; ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>4 <?php if($s4 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s4 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>9 <?php if($s9 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s9 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>14 <?php if($s14 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s14 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>19 <?php if($s19 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s19 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>24 <?php if($s24 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s24 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>29 <?php if($s29 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s29 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>34 <?php if($s34 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s34 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>39 <?php if($s39 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s39 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>44 <?php if($s44 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s44 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>49 <?php if($s49 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s49 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>54 <?php if($s54 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s54 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>59 <?php if($s59 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s59 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>64 <?php if($s64 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s64 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>69 <?php if($s69 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s69 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td class="borderRight" style="border-right: 2px solid black;">74 <?php if($s74 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s74 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;Exh</td>
            <td><?php echo $Exhr; ?></td>
            <td><?php echo $Exhc; ?></td>
            <td><?php echo $Exhs; ?></td>
            <td style="text-align:center;"><?php echo $Exhsh; ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>5 <?php if($s5 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s5 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>10 <?php if($s10 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s10 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>15 <?php if($s15 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s15 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>20 <?php if($s20 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s20 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>25 <?php if($s25 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s25 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>30 <?php if($s30 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s30 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>35 <?php if($s35 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s35 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>40 <?php if($s40 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s40 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>45 <?php if($s45 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s45 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>50 <?php if($s50 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s50 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>55 <?php if($s55 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s55 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>60 <?php if($s60 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s60 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>65 <?php if($s65 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s65 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>70 <?php if($s70 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s70 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td class="borderRight" style="border-right: 2px solid black;">75 <?php if($s75 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s75 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;Aut</td>
            <td><?php echo $Autr; ?></td>
            <td><?php echo $Autc; ?></td>
            <td><?php echo $Auts; ?></td>
            <td style="text-align:center;"><?php echo $Autsh; ?></td>
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
            <td>76 <?php if($s76 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s76 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>81 <?php if($s81 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s81 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>86 <?php if($s86 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s86 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>91 <?php if($s91 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s91 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>96 <?php if($s96 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s96 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>101 <?php if($s101 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s101 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>106 <?php if($s106 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s106 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>111 <?php if($s111 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s111 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>116 <?php if($s116 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s116 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>121 <?php if($s121 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s121 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>126 <?php if($s126 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s126 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>131 <?php if($s131 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s131 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>136 <?php if($s136 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s136 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>141 <?php if($s141 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s141 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td class="borderRight" style="border-right: 2px solid black;">146 <?php if($s146 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s146 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;Aff</td>
            <td><?php echo $Affr; ?></td>
            <td><?php echo $Affc; ?></td>
            <td><?php echo $Affs; ?></td>
            <td style="text-align:center;"><?php echo $Affsh; ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>77 <?php if($s77 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s77 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>82 <?php if($s82 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s82 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>87 <?php if($s87 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s87 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>92 <?php if($s92 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s92 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>97 <?php if($s97 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s97 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>102 <?php if($s102 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s102 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>107 <?php if($s107 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s107 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>112 <?php if($s112 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s112 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>117 <?php if($s117 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s117 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>122 <?php if($s122 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s122 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>127 <?php if($s127 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s127 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>132 <?php if($s132 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s132 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>137 <?php if($s137 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s137 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>142 <?php if($s142 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s142 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td class="borderRight" style="border-right: 2px solid black;">147 <?php if($s147 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s147 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;Int</td>
            <td><?php echo $Intr; ?></td>
            <td><?php echo $Intc; ?></td>
            <td><?php echo $Ints; ?></td>
            <td style="text-align:center;"><?php echo $Intsh; ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>78 <?php if($s78 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s78 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>83 <?php if($s83 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s83 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>88 <?php if($s88 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s88 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>93 <?php if($s93 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s93 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>98 <?php if($s98 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s98 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>103 <?php if($s103 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s103 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>108 <?php if($s108 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s108 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>113 <?php if($s113 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s113 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>118 <?php if($s118 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s118 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>123 <?php if($s123 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s123 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>128 <?php if($s128 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s128 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>133 <?php if($s133 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s133 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>138 <?php if($s138 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s138 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>143 <?php if($s143 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s143 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td class="borderRight" style="border-right: 2px solid black;">148 <?php if($s148 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s148 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;Suc</td>
            <td><?php echo $Sucr; ?></td>
            <td><?php echo $Succ; ?></td>
            <td><?php echo $Sucs; ?></td>
            <td style="text-align:center;"><?php echo $Sucsh; ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>79 <?php if($s79 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s79 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>84 <?php if($s84 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s84 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>89 <?php if($s89 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s89 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>94 <?php if($s94 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s94 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>99 <?php if($s99 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s99 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>104 <?php if($s104 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s104 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>109 <?php if($s109 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s109 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>114 <?php if($s114 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s114 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>119 <?php if($s119 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s119 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>124 <?php if($s124 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s124 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>129 <?php if($s129 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s129 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>134 <?php if($s134 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s134 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>139 <?php if($s139 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s139 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>144 <?php if($s144 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s144 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td class="borderRight" style="border-right: 2px solid black;">149 <?php if($s149 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s149 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;Dom</td>
            <td><?php echo $Domr; ?></td>
            <td><?php echo $Domc; ?></td>
            <td><?php echo $Doms; ?></td>
            <td style="text-align:center;"><?php echo $Domsh; ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>80 <?php if($s80 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s80 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>85 <?php if($s85 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s85 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>90 <?php if($s90 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s90 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>95 <?php if($s95 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s95 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>100 <?php if($s100 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s100 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>105 <?php if($s105 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s105 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>110 <?php if($s110 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s110 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>115 <?php if($s115 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s115 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>120 <?php if($s120 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s120 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>125 <?php if($s125 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s125 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>130 <?php if($s130 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s130 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>135 <?php if($s135 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s135 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>140 <?php if($s140 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s140 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>145 <?php if($s145 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s145 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td class="borderRight" style="border-right: 2px solid black;">150 <?php if($s150 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s1 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;Aba</td>
            <td><?php echo $Abar; ?></td>
            <td><?php echo $Abac; ?></td>
            <td><?php echo $Abas; ?></td>
            <td style="text-align:center;"><?php echo $Abash; ?></td>
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
            <td>151 <?php if($s151 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s151 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>156 <?php if($s156 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s156 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>161 <?php if($s161 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s161 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>166 <?php if($s166 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s166 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>171 <?php if($s171 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s171 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>176 <?php if($s176 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s176 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>181 <?php if($s181 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s181 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>186 <?php if($s186 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s186 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>191 <?php if($s191 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s191 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>196 <?php if($s196 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s196 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>201 <?php if($s201 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s201 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>206 <?php if($s206 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s206 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>211 <?php if($s211 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s211 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>216 <?php if($s216 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s216 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td class="borderRight" style="border-right: 2px solid black;">221 <?php if($s221 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s221 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;Nur</td>
            <td><?php echo $Nurr; ?></td>
            <td><?php echo $Nurc; ?></td>
            <td><?php echo $Nurs; ?></td>
            <td style="text-align:center;"><?php echo $Nursh; ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>152 <?php if($s152 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s152 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>157 <?php if($s157 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s157 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>162 <?php if($s162 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s162 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>167 <?php if($s167 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s167 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>172 <?php if($s172 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s172 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>177 <?php if($s177 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s177 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>182 <?php if($s182 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s182 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>187 <?php if($s187 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s187 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>192 <?php if($s192 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s192 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>197 <?php if($s197 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s197 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>202 <?php if($s202 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s202 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>207 <?php if($s207 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s207 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>212 <?php if($s212 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s212 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>217 <?php if($s217 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s217 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td class="borderRight" style="border-right: 2px solid black;">222 <?php if($s222 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s222 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;Chg</td>
            <td><?php echo $Chgr; ?></td>
            <td><?php echo $Chgc; ?></td>
            <td><?php echo $Chgs; ?></td>
            <td style="text-align:center;"><?php echo $Chgsh; ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>153 <?php if($s153 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s153 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>158 <?php if($s158 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s158 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>163 <?php if($s163 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s163 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>168 <?php if($s168 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s168 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>173 <?php if($s173 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s173 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>178 <?php if($s178 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s178 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>183 <?php if($s183 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s183 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>188 <?php if($s188 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s188 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>193 <?php if($s193 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s193 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>198 <?php if($s198 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s198 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>203 <?php if($s203 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s203 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>208 <?php if($s208 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s208 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>213 <?php if($s213 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s213 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>218 <?php if($s218 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s218 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td class="borderRight" style="border-right: 2px solid black;">223 <?php if($s223 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s223 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;End</td>
            <td><?php echo $Endr; ?></td>
            <td><?php echo $Endc; ?></td>
            <td><?php echo $Ends; ?></td>
            <td style="text-align:center;"><?php echo $Endsh; ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>154 <?php if($s154 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s154 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>159 <?php if($s159 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s159 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>164 <?php if($s164 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s164 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>169 <?php if($s169 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s169 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>174 <?php if($s174 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s174 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>179 <?php if($s179 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s179 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>184 <?php if($s184 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s184 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>189 <?php if($s189 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s189 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>194 <?php if($s194 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s194 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>199 <?php if($s199 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s199 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>204 <?php if($s204 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s204 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>209 <?php if($s209 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s209 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>214 <?php if($s214 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s214 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>219 <?php if($s219 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s219 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td class="borderRight" style="border-right: 2px solid black;">224 <?php if($s224 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s224 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;Het</td>
            <td><?php echo $Hetr; ?></td>
            <td><?php echo $Hetc; ?></td>
            <td><?php echo $Hets; ?></td>
            <td style="text-align:center;"><?php echo $Hetsh; ?></td>
        </tr>
        <tr style="border-bottom: 2px solid black;">
            <td>&nbsp;</td>
            <td>155 <?php if($s155 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s155 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>160 <?php if($s160 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s160 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>165 <?php if($s165 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s165 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>170 <?php if($s170 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s170 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>175 <?php if($s175 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s175 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>180 <?php if($s180 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s180 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>185 <?php if($s185 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s185 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>190 <?php if($s190 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s190 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>195 <?php if($s195 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s195 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>200 <?php if($s200 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s200 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>205 <?php if($s205 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s205 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>210 <?php if($s210 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s210 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>215 <?php if($s215 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s215 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td>220 <?php if($s220 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s220 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;</td>
            <td class="borderRight" style="border-right: 2px solid black;">225 <?php if($s225 == 'A'){ echo '<strike style="color:red"><sup><span style="color:black;">&nbsp;A&nbsp;</span></sup></strike> <sub>B</sub>'; } else if($s225 == 'B'){ echo'<sup>A</sup> <strike style="color:red" ><sub><span style="color:black;">&nbsp;B&nbsp;</span></sub></strike>'; }?></td>
            <td>&nbsp;Agg</td>
            <td><?php echo $Aggr; ?></td>
            <td><?php echo $Aggc; ?></td>
            <td><?php echo $Aggs; ?></td>
            <td style="text-align:center;"><?php echo $Aggsh; ?></td>
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