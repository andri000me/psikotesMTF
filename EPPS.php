<?php
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
                cbt_user.user_id = 7
        ORDER BY
                cbt_jawaban.jawaban_benar";

?>
<html>
<head>
<title>EPPS</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<div style="margin: 10px; width:100%; text-align: center; margin-top: 10px;"><H1>EPPS</H1></div>
<table style="font-size: 15px; width: -webkit-fill-available; margin: 10px; border-collapse: collapse;">
    <tr>
        <td style="width: 10%;">Nomor</td>
        <td style="width: 3%;">&nbsp;:</td>
        <td style="width: 37%;">12345</td>
        <td style="width: 10%;">Jenis Kelamin</td>
        <td style="width: 3%;">&nbsp;:</td>
        <td style="width: 37%;">12345</td>
    </tr>

    <tr>
        <td>Nama</td>
        <td>&nbsp;:</td>
        <td>Nama Saya Budi</td>
        <td>Umur</td>
        <td>&nbsp;:</td>
        <td>27 tahun</td>
    </tr>
</table>

<table style="font-size: 15px; width: -webkit-fill-available; margin: 10px; border-top: 2px solid black; border-collapse: collapse;">
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
    </tr>
    <tr>
        <td>1 <sup>A</sup> <sub>B</sub></td>
        <td>6 <sup>A</sup> <sub>B</sub></td>
        <td>11 <sup>A</sup> <sub>B</sub></td>
        <td>16 <sup>A</sup> <sub>B</sub></td>
        <td>21 <sup>A</sup> <sub>B</sub></td>
        <td>26 <sup>A</sup> <sub>B</sub></td>
        <td>31 <sup>A</sup> <sub>B</sub></td>
        <td>36 <sup>A</sup> <sub>B</sub></td>
        <td>41 <sup>A</sup> <sub>B</sub></td>
        <td>46 <sup>A</sup> <sub>B</sub></td>
        <td>51 <sup>A</sup> <sub>B</sub></td>
        <td>56 <sup>A</sup> <sub>B</sub></td>
        <td>61 <sup>A</sup> <sub>B</sub></td>
        <td>66 <sup>A</sup> <sub>B</sub></td>
        <td class="borderRight">71 <sup>A</sup> <sub>B</sub></td>
        <td>&nbsp;Ach</td>
        <td>_</td>
        <td>_</td>
        <td>_</td>
    </tr>
    <tr>
        <td>2 <sup>A</sup> <sub>B</sub></td>
        <td>7 <sup>A</sup> <sub>B</sub></td>
        <td>12 <sup>A</sup> <sub>B</sub></td>
        <td>17 <sup>A</sup> <sub>B</sub></td>
        <td>22 <sup>A</sup> <sub>B</sub></td>
        <td>27 <sup>A</sup> <sub>B</sub></td>
        <td>32 <sup>A</sup> <sub>B</sub></td>
        <td>37 <sup>A</sup> <sub>B</sub></td>
        <td>42 <sup>A</sup> <sub>B</sub></td>
        <td>47 <sup>A</sup> <sub>B</sub></td>
        <td>52 <sup>A</sup> <sub>B</sub></td>
        <td>57 <sup>A</sup> <sub>B</sub></td>
        <td>62 <sup>A</sup> <sub>B</sub></td>
        <td>67 <sup>A</sup> <sub>B</sub></td>
        <td class="borderRight">72 <sup>A</sup> <sub>B</sub></td>
        <td>&nbsp;Def</td>
        <td>_</td>
        <td>_</td>
        <td>_</td>
    </tr>
    <tr>
        <td>3 <sup>A</sup> <sub>B</sub></td>
        <td>8 <sup>A</sup> <sub>B</sub></td>
        <td>13 <sup>A</sup> <sub>B</sub></td>
        <td>18 <sup>A</sup> <sub>B</sub></td>
        <td>23 <sup>A</sup> <sub>B</sub></td>
        <td>28 <sup>A</sup> <sub>B</sub></td>
        <td>33 <sup>A</sup> <sub>B</sub></td>
        <td>38 <sup>A</sup> <sub>B</sub></td>
        <td>43 <sup>A</sup> <sub>B</sub></td>
        <td>48 <sup>A</sup> <sub>B</sub></td>
        <td>53 <sup>A</sup> <sub>B</sub></td>
        <td>58 <sup>A</sup> <sub>B</sub></td>
        <td>63 <sup>A</sup> <sub>B</sub></td>
        <td>68 <sup>A</sup> <sub>B</sub></td>
        <td class="borderRight">73 <sup>A</sup> <sub>B</sub></td>
        <td>&nbsp;Ord</td>
        <td>_</td>
        <td>_</td>
        <td>_</td>
    </tr>
    <tr>
        <td>4 <sup>A</sup> <sub>B</sub></td>
        <td>9 <sup>A</sup> <sub>B</sub></td>
        <td>14 <sup>A</sup> <sub>B</sub></td>
        <td>19 <sup>A</sup> <sub>B</sub></td>
        <td>24 <sup>A</sup> <sub>B</sub></td>
        <td>29 <sup>A</sup> <sub>B</sub></td>
        <td>34 <sup>A</sup> <sub>B</sub></td>
        <td>39 <sup>A</sup> <sub>B</sub></td>
        <td>44 <sup>A</sup> <sub>B</sub></td>
        <td>49 <sup>A</sup> <sub>B</sub></td>
        <td>54 <sup>A</sup> <sub>B</sub></td>
        <td>59 <sup>A</sup> <sub>B</sub></td>
        <td>64 <sup>A</sup> <sub>B</sub></td>
        <td>69 <sup>A</sup> <sub>B</sub></td>
        <td class="borderRight">74 <sup>A</sup> <sub>B</sub></td>
        <td>&nbsp;Exh</td>
        <td>_</td>
        <td>_</td>
        <td>_</td>
    </tr>
    <tr>
        <td>5 <sup>A</sup> <sub>B</sub></td>
        <td>10 <sup>A</sup> <sub>B</sub></td>
        <td>15 <sup>A</sup> <sub>B</sub></td>
        <td>20 <sup>A</sup> <sub>B</sub></td>
        <td>25 <sup>A</sup> <sub>B</sub></td>
        <td>30 <sup>A</sup> <sub>B</sub></td>
        <td>35 <sup>A</sup> <sub>B</sub></td>
        <td>40 <sup>A</sup> <sub>B</sub></td>
        <td>45 <sup>A</sup> <sub>B</sub></td>
        <td>50 <sup>A</sup> <sub>B</sub></td>
        <td>55 <sup>A</sup> <sub>B</sub></td>
        <td>60 <sup>A</sup> <sub>B</sub></td>
        <td>65 <sup>A</sup> <sub>B</sub></td>
        <td>70 <sup>A</sup> <sub>B</sub></td>
        <td class="borderRight">75 <sup>A</sup> <sub>B</sub></td>
        <td>&nbsp;Aut</td>
        <td>_</td>
        <td>_</td>
        <td>_</td>
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
        <td>76 <sup>A</sup> <sub>B</sub></td>
        <td>81 <sup>A</sup> <sub>B</sub></td>
        <td>86 <sup>A</sup> <sub>B</sub></td>
        <td>91 <sup>A</sup> <sub>B</sub></td>
        <td>96 <sup>A</sup> <sub>B</sub></td>
        <td>101 <sup>A</sup> <sub>B</sub></td>
        <td>106 <sup>A</sup> <sub>B</sub></td>
        <td>111 <sup>A</sup> <sub>B</sub></td>
        <td>116 <sup>A</sup> <sub>B</sub></td>
        <td>121 <sup>A</sup> <sub>B</sub></td>
        <td>126 <sup>A</sup> <sub>B</sub></td>
        <td>131 <sup>A</sup> <sub>B</sub></td>
        <td>136 <sup>A</sup> <sub>B</sub></td>
        <td>141 <sup>A</sup> <sub>B</sub></td>
        <td class="borderRight">146 <sup>A</sup> <sub>B</sub></td>
        <td>&nbsp;Aff</td>
        <td>_</td>
        <td>_</td>
        <td>_</td>
    </tr>
    <tr>
        <td>77 <sup>A</sup> <sub>B</sub></td>
        <td>82 <sup>A</sup> <sub>B</sub></td>
        <td>87 <sup>A</sup> <sub>B</sub></td>
        <td>92 <sup>A</sup> <sub>B</sub></td>
        <td>97 <sup>A</sup> <sub>B</sub></td>
        <td>102 <sup>A</sup> <sub>B</sub></td>
        <td>107 <sup>A</sup> <sub>B</sub></td>
        <td>112 <sup>A</sup> <sub>B</sub></td>
        <td>117 <sup>A</sup> <sub>B</sub></td>
        <td>122 <sup>A</sup> <sub>B</sub></td>
        <td>127 <sup>A</sup> <sub>B</sub></td>
        <td>132 <sup>A</sup> <sub>B</sub></td>
        <td>137 <sup>A</sup> <sub>B</sub></td>
        <td>142 <sup>A</sup> <sub>B</sub></td>
        <td class="borderRight">147 <sup>A</sup> <sub>B</sub></td>
        <td>&nbsp;Int</td>
        <td>_</td>
        <td>_</td>
        <td>_</td>
    </tr>
    <tr>
        <td>78 <sup>A</sup> <sub>B</sub></td>
        <td>83 <sup>A</sup> <sub>B</sub></td>
        <td>88 <sup>A</sup> <sub>B</sub></td>
        <td>93 <sup>A</sup> <sub>B</sub></td>
        <td>98 <sup>A</sup> <sub>B</sub></td>
        <td>103 <sup>A</sup> <sub>B</sub></td>
        <td>108 <sup>A</sup> <sub>B</sub></td>
        <td>113 <sup>A</sup> <sub>B</sub></td>
        <td>118 <sup>A</sup> <sub>B</sub></td>
        <td>123 <sup>A</sup> <sub>B</sub></td>
        <td>128 <sup>A</sup> <sub>B</sub></td>
        <td>133 <sup>A</sup> <sub>B</sub></td>
        <td>138 <sup>A</sup> <sub>B</sub></td>
        <td>143 <sup>A</sup> <sub>B</sub></td>
        <td class="borderRight">148 <sup>A</sup> <sub>B</sub></td>
        <td>&nbsp;Suc</td>
        <td>_</td>
        <td>_</td>
        <td>_</td>
    </tr>
    <tr>
        <td>79 <sup>A</sup> <sub>B</sub></td>
        <td>84 <sup>A</sup> <sub>B</sub></td>
        <td>89 <sup>A</sup> <sub>B</sub></td>
        <td>94 <sup>A</sup> <sub>B</sub></td>
        <td>99 <sup>A</sup> <sub>B</sub></td>
        <td>104 <sup>A</sup> <sub>B</sub></td>
        <td>109 <sup>A</sup> <sub>B</sub></td>
        <td>114 <sup>A</sup> <sub>B</sub></td>
        <td>119 <sup>A</sup> <sub>B</sub></td>
        <td>124 <sup>A</sup> <sub>B</sub></td>
        <td>129 <sup>A</sup> <sub>B</sub></td>
        <td>134 <sup>A</sup> <sub>B</sub></td>
        <td>139 <sup>A</sup> <sub>B</sub></td>
        <td>144 <sup>A</sup> <sub>B</sub></td>
        <td class="borderRight">149 <sup>A</sup> <sub>B</sub></td>
        <td>&nbsp;Dom</td>
        <td>_</td>
        <td>_</td>
        <td>_</td>
    </tr>
    <tr>
        <td>80 <sup>A</sup> <sub>B</sub></td>
        <td>85 <sup>A</sup> <sub>B</sub></td>
        <td>90 <sup>A</sup> <sub>B</sub></td>
        <td>95 <sup>A</sup> <sub>B</sub></td>
        <td>100 <sup>A</sup> <sub>B</sub></td>
        <td>105 <sup>A</sup> <sub>B</sub></td>
        <td>110 <sup>A</sup> <sub>B</sub></td>
        <td>115 <sup>A</sup> <sub>B</sub></td>
        <td>120 <sup>A</sup> <sub>B</sub></td>
        <td>125 <sup>A</sup> <sub>B</sub></td>
        <td>130 <sup>A</sup> <sub>B</sub></td>
        <td>135 <sup>A</sup> <sub>B</sub></td>
        <td>140 <sup>A</sup> <sub>B</sub></td>
        <td>145 <sup>A</sup> <sub>B</sub></td>
        <td class="borderRight">150 <sup>A</sup> <sub>B</sub></td>
        <td>&nbsp;Aba</td>
        <td>_</td>
        <td>_</td>
        <td>_</td>
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
        <td>151 <sup>A</sup> <sub>B</sub></td>
        <td>156 <sup>A</sup> <sub>B</sub></td>
        <td>161 <sup>A</sup> <sub>B</sub></td>
        <td>166 <sup>A</sup> <sub>B</sub></td>
        <td>171 <sup>A</sup> <sub>B</sub></td>
        <td>176 <sup>A</sup> <sub>B</sub></td>
        <td>181 <sup>A</sup> <sub>B</sub></td>
        <td>186 <sup>A</sup> <sub>B</sub></td>
        <td>191 <sup>A</sup> <sub>B</sub></td>
        <td>196 <sup>A</sup> <sub>B</sub></td>
        <td>201 <sup>A</sup> <sub>B</sub></td>
        <td>206 <sup>A</sup> <sub>B</sub></td>
        <td>211 <sup>A</sup> <sub>B</sub></td>
        <td>216 <sup>A</sup> <sub>B</sub></td>
        <td class="borderRight">221 <sup>A</sup> <sub>B</sub></td>
        <td>&nbsp;Nur</td>
        <td>_</td>
        <td>_</td>
        <td>_</td>
    </tr>
    <tr>
        <td>152 <sup>A</sup> <sub>B</sub></td>
        <td>157 <sup>A</sup> <sub>B</sub></td>
        <td>162 <sup>A</sup> <sub>B</sub></td>
        <td>167 <sup>A</sup> <sub>B</sub></td>
        <td>172 <sup>A</sup> <sub>B</sub></td>
        <td>177 <sup>A</sup> <sub>B</sub></td>
        <td>182 <sup>A</sup> <sub>B</sub></td>
        <td>187 <sup>A</sup> <sub>B</sub></td>
        <td>192 <sup>A</sup> <sub>B</sub></td>
        <td>197 <sup>A</sup> <sub>B</sub></td>
        <td>202 <sup>A</sup> <sub>B</sub></td>
        <td>207 <sup>A</sup> <sub>B</sub></td>
        <td>212 <sup>A</sup> <sub>B</sub></td>
        <td>217 <sup>A</sup> <sub>B</sub></td>
        <td class="borderRight">222 <sup>A</sup> <sub>B</sub></td>
        <td>&nbsp;Chg</td>
        <td>_</td>
        <td>_</td>
        <td>_</td>
    </tr>
    <tr>
        <td>153 <sup>A</sup> <sub>B</sub></td>
        <td>158 <sup>A</sup> <sub>B</sub></td>
        <td>163 <sup>A</sup> <sub>B</sub></td>
        <td>168 <sup>A</sup> <sub>B</sub></td>
        <td>173 <sup>A</sup> <sub>B</sub></td>
        <td>178 <sup>A</sup> <sub>B</sub></td>
        <td>183 <sup>A</sup> <sub>B</sub></td>
        <td>188 <sup>A</sup> <sub>B</sub></td>
        <td>193 <sup>A</sup> <sub>B</sub></td>
        <td>198 <sup>A</sup> <sub>B</sub></td>
        <td>203 <sup>A</sup> <sub>B</sub></td>
        <td>208 <sup>A</sup> <sub>B</sub></td>
        <td>213 <sup>A</sup> <sub>B</sub></td>
        <td>218 <sup>A</sup> <sub>B</sub></td>
        <td class="borderRight">223 <sup>A</sup> <sub>B</sub></td>
        <td>&nbsp;End</td>
        <td>_</td>
        <td>_</td>
        <td>_</td>
    </tr>
    <tr>
        <td>154 <sup>A</sup> <sub>B</sub></td>
        <td>159 <sup>A</sup> <sub>B</sub></td>
        <td>164 <sup>A</sup> <sub>B</sub></td>
        <td>169 <sup>A</sup> <sub>B</sub></td>
        <td>174 <sup>A</sup> <sub>B</sub></td>
        <td>179 <sup>A</sup> <sub>B</sub></td>
        <td>184 <sup>A</sup> <sub>B</sub></td>
        <td>189 <sup>A</sup> <sub>B</sub></td>
        <td>194 <sup>A</sup> <sub>B</sub></td>
        <td>199 <sup>A</sup> <sub>B</sub></td>
        <td>204 <sup>A</sup> <sub>B</sub></td>
        <td>209 <sup>A</sup> <sub>B</sub></td>
        <td>214 <sup>A</sup> <sub>B</sub></td>
        <td>219 <sup>A</sup> <sub>B</sub></td>
        <td class="borderRight">224 <sup>A</sup> <sub>B</sub></td>
        <td>&nbsp;Het</td>
        <td>_</td>
        <td>_</td>
        <td>_</td>
    </tr>
    <tr style="border-bottom: 2px solid black;">
        <td>155 <sup>A</sup> <sub>B</sub></td>
        <td>160 <sup>A</sup> <sub>B</sub></td>
        <td>165 <sup>A</sup> <sub>B</sub></td>
        <td>170 <sup>A</sup> <sub>B</sub></td>
        <td>175 <sup>A</sup> <sub>B</sub></td>
        <td>180 <sup>A</sup> <sub>B</sub></td>
        <td>185 <sup>A</sup> <sub>B</sub></td>
        <td>190 <sup>A</sup> <sub>B</sub></td>
        <td>195 <sup>A</sup> <sub>B</sub></td>
        <td>200 <sup>A</sup> <sub>B</sub></td>
        <td>205 <sup>A</sup> <sub>B</sub></td>
        <td>210 <sup>A</sup> <sub>B</sub></td>
        <td>215 <sup>A</sup> <sub>B</sub></td>
        <td>220 <sup>A</sup> <sub>B</sub></td>
        <td class="borderRight">225 <sup>A</sup> <sub>B</sub></td>
        <td>&nbsp;Agg</td>
        <td>_</td>
        <td>_</td>
        <td>_</td>
    </tr>
    <tr style="padding-top: 5px;">
            <td class="paddingtr">
                <div class="divResult">&nbsp;</div>
            </td>
            <td class="paddingtr">
                <div class="divResult">&nbsp;</div>
            </td>
            <td class="paddingtr">
                <div class="divResult">&nbsp;</div>
            </td>
            <td class="paddingtr">
                <div class="divResult">&nbsp;</div>
            </td>
            <td class="paddingtr">
                <div class="divResult">&nbsp;</div>
            </td>
            <td class="paddingtr">
                <div class="divResult">&nbsp;</div>
            </td>
            <td class="paddingtr">
                <div class="divResult">&nbsp;</div>
            </td>
            <td class="paddingtr">
                <div class="divResult">&nbsp;</div>
            </td>
            <td class="paddingtr">
                <div class="divResult">&nbsp;</div>
            </td>
            <td class="paddingtr">
                <div class="divResult">&nbsp;</div>
            </td>
            <td class="paddingtr">
                <div class="divResult">&nbsp;</div>
            </td>
            <td class="paddingtr">
                <div class="divResult">&nbsp;</div>
            </td>
            <td class="paddingtr">
                <div class="divResult">&nbsp;</div>
            </td>
            <td class="paddingtr">
                <div class="divResult">&nbsp;</div>
            </td>
            <td class="paddingtr">
                <div class="divResult">&nbsp;</div>
            </td>
            

    </tr>
</table>


</body>
</html>

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
        }
        .borderRight{
            border-right: 2px solid black;
        }
        .paddingtr{
            padding: 3px;
        }
    </style>