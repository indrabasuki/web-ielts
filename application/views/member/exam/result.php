<?php
class MYPDF extends TCPDF
{
}


// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Golden English');
$pdf->SetTitle('Golden English - IELTS PREDICTION');
$pdf->SetSubject('Golden English');

// add a page
$pdf->AddPage();

$image_file = K_PATH_IMAGES . 'logo.jpeg';
$pdf->Image($image_file, 10, 10, 15, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
$html = <<<EOF
<!-- EXAMPLE OF CSS STYLE -->
<style>
    h1 {
        color: navy;
        font-family: times;
        font-size: 24pt;
        text-align: center;
    }
    p.first {
        color: #003300;
        font-family: helvetica;
        font-size: 12pt;
    }
    p.first span {
        color: #006600;
        font-style: italic;
    }
    p#second {
        color: rgb(00,63,127);
        font-family: times;
        font-size: 12pt;
        text-align: justify;
    }
    p#second > span {
        background-color: #FFFFAA;
    }
    table.first {
        color: #003300;
        font-family: helvetica;
        font-size: 12pt;
        border-left: 1px solid green;
        border-right: 1px solid green;
        border-top: 1px solid green;
        border-bottom: 1px solid green;
        background-color: #ccffcc;
    }
    td {
       
        background-color: #ffffee;
    }
    td.second {
        border: 2px dashed green;
    }
    div.test {
        color: #CC0000;
        background-color: #FFFF66;
        font-family: helvetica;
        font-size: 10pt;
        border-style: solid solid solid solid;
        border-width: 2px 2px 2px 2px;
        border-color: green;
        text-align: center;
    }
    .lowercase {
        text-transform: lowercase;
    }
 
   
</style>

<h1 class="title">Golden English - IELTS</h1>
<br />
<br />
<div class="test"><h4>Informasi</h4>
<br />Peserta dengan keterangan dibawah ini telah selesai mengikuti program <b>IELTS TEST - GOLDEN ENGLISH</b>
<br /><span class="lowercase">----</span>
</div>
<br />

<h3>Data Peserta</h3>
<table class="first" cellpadding="4" cellspacing="6">
<tr>
<th>Nama </th>
<td>: {$user['name']}</td>
</tr>
<tr>
<th>Email </th>
<td>:{$user['email']}</td>
</tr>
<tr>
<th>No HP Peserta</th>
<td>: {$user['phone']}</td>
</tr>
<tr>
</table>

<h3>DETAIL TEST</h3>
<table class="first" cellpadding="4" cellspacing="6">
<tr>
<th>TEST NAME</th>
<td>{$exam->name}</td>
</tr>
<tr>

</table>

<h3>RESULT</h3>
<table class="first" cellpadding="4" cellspacing="6">


 <tr>
	<th> LISTENING BAND </th>
	<td></td>
</tr>

<tr>
    <th> READING BAND</th>
    <td> </td>
</tr>

<tr>
    <th> WRITING BAND</th>
    <td> </td>
</tr>
<tr>
    <th> SPEAKINIG BAND</th>
    <td> </td>
</tr>
<tr>
    <th>IELTS BAND</th>
    <td>1</td>
</tr>


</table>
EOF;

$pdf->writeHTML($html, true, 0, true, 0);
$pdf->lastPage();
$pdf->AddPage('L', 'A4');
$img_file = K_PATH_IMAGES . 'new_certificate.jpg';
$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
// set the starting point for the page content
$pdf->setPageMark();
$pdf->Image($img_file, 0, 0, 297, 210, '', '', '', false, 300, '', false, false, 0);
$pdf->Image(base_url() . 'public/newqr/', 230, 80, 34, 34, '', '', '', false, 300, '', false, false, 0);
$html =  <<<EOF
<table cellpadding="72" cellspacing="1" border="1"><tr><td></td></tr></table>
<table border="1">
<tr>
<td width="100"></td>
<td width="180" align="center"><h4>GE.EPT.{ q}</h4></td>
</tr>
</table>


<table cellpadding="21" cellspacing="1" border="1"><tr><td></td></tr></table>
<table border="1">
<tr>
<td width="70"></td>
<td width="337" align="center"><h1>{$user['name']}</h1></td>
</tr>

</table>
<table cellpadding="27" cellspacing="1" border="1"><tr><td></td></tr></table>
<table>
<tr>
<td width="160"></td>
<td><h4></h4></td>
</tr>
</table>

<table cellpadding="32" cellspacing="1" border="1"><tr><td></td></tr></table>
<table>
<tr>
<td width="112"></td>
<td width="112"><h3></h3></td>

<td width="30"></td>
<td><h3>aa</h3></td>

<td width="45"></td>
<td><h3>ssss</h3></td>
</tr>

<tr><br>
<td width="319"></td>
<td><h2>198</h2></td>
</tr>
</table>


EOF;
$pdf->writeHTML($html, true, 0, true, 0);
$pdf->Output(11 . '_' . sha1(1) . '.pdf', 'I');
