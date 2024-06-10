<html>

<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name=Generator content="Microsoft Word 15 (filtered)">
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Helvetica;
	panose-1:0 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin:0cm;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{mso-style-link:"Header Char";
	margin:0cm;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;}
span.HeaderChar
	{mso-style-name:"Header Char";
	mso-style-link:Header;
	font-family:"Times New Roman",serif;}
 /* Page Definitions */
 @page WordSection1
	{size:612.0pt 792.0pt;
	margin:72.0pt 72.0pt 72.0pt 72.0pt;}
div.WordSection1
	{page:WordSection1;}

    header {
        position: fixed;
        top: 0cm;
        left: 0cm;
        right: 0cm;
        height: 5cm;
    }

    footer {
        position: fixed; 
        bottom: -60px; 
        left: 0px; 
        right: 0px;
        height: 50px; 
    }

    body {
        padding-top: 4.5cm;
    } 

</style>

</head>

<body lang=EN-PH style='word-wrap:break-word'>

<header>
    <p class=MsoNormal style='text-align:justify'><b><span lang=EN-US
    style='font-size:24.0pt;font-family:Helvetica'>Institution Name</span></b>
    <spanlang=EN-US style='font-size:24.0pt;font-family:Helvetica'></span>
    </p>

    <p class=MsoNormal style='text-align:justify'><span lang=EN-US
    style='font-size:10.0pt;font-family:Helvetica'>Address Line</span></p>

    <p class=MsoNormal><span lang=EN-US style='font-size:10.0pt;font-family:Helvetica'>+63
    2 1234 5678 (Telephone) / +63 123 456 7890 (Mobile)<br>
    www.institution.com | institution@mail.com</span></p>

    <br>
    <p class=MsoNormal align=center style='text-align:center'><b><u><span
    lang=EN-US style='font-size:16.0pt;font-family:Helvetica'>Medical Health Record</span></u></b></p>
    <span lang=EN-US style='font-family:Helvetica'>Patient #<b>{{$patient->patient_number ?? '---'}}</b></span></p>
</header>

<footer>
<p class=MsoNormal><span lang=EN-US style='font-size:10.0pt;font-family:Helvetica'>MEDICAL-HEALTH-RECORD          Date & Time of Form Generation: {{ now()->format('Y-m-d H:i:s') }}</span></p>
</footer>

<main>
<div class=WordSection1>

<div align=center>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=638
 style='width:478.75pt;border-collapse:collapse;border:none'>
 <thead>
  <tr style='height:21.8pt'>
   <td width=638 colspan=10 style='width:478.75pt;border:solid black 1.0pt;
   padding:0cm 5.4pt 0cm 5.4pt;height:21.8pt'>
   <p class=MsoNormal style='line-height:115%'><span lang=EN-US
   style='font-size:16.0pt;line-height:115%;font-family:"Arial",sans-serif'>Patient
   Information</span></p>
   </td>
  </tr>
 </thead>
 <tr style='height:18.9pt'>
  <td width=378 colspan=6 style='width:283.25pt;border-top:none;border-left:
  solid black 1.0pt;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.9pt'>
  <p class=MsoNormal style='line-height:115%'><b><span lang=EN-US
  style='font-family:"Arial",sans-serif'>Basic Information</span></b></p>
  </td>
  <td width=261 colspan=4 style='width:195.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>Referral
  Control Number # <b>{RCN}</b></span></p>
  </td>
 </tr>
 <tr style='height:1.0cm'>
  <td width=255 colspan=5 style='width:191.15pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>Name</span></p>
  <p class=MsoNormal style='line-height:115%'><i><span lang=EN-US
  style='font-size:9.0pt;line-height:115%;font-family:"Arial",sans-serif'>Last
  Name (Suffix), First Name Middle Name</span></i></p>
  </td>
  <td width=275 colspan=4 style='width:206.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>{{$patient->last_name ?? '---'}} {{$patient->suffix ?? ''}}, {{$patient->first_name ?? '---'}} {{$patient->middle_name ?? ''}}</span></p>
  </td>
  <td width=108 style='width:81.1pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:1.0cm'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>Sex: {{$patient->sex ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:16.95pt'>
  <td width=189 colspan=3 style='width:141.5pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:16.95pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:11.0pt;font-family:"Arial",sans-serif'>Date
  of Birth  </span><i><span lang=EN-US style='font-size:9.0pt;font-family:"Arial",sans-serif'>YYYY-MM-DD</span></i></p>
  </td>
  <td width=302 colspan=5 style='width:8.0cm;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:16.95pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:11.0pt;font-family:"Arial",sans-serif'>{{$patient->birthday ?? '---'}}</span></p>
  </td>
  <td width=147 colspan=2 style='width:110.45pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:16.95pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:11.0pt;font-family:"Arial",sans-serif'>Age: {{$patient->age ?? '---'}} years old</span></p>
  </td>
 </tr>
 <tr style='height:15.25pt'>
  <td width=213 colspan=4 style='width:159.55pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>Civil
  status: {{$patient->civil_status ?? '---'}}</span></p>
  </td>
  <td width=213 colspan=3 style='width:159.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>Religion: {{$patient->religion ?? '---'}}</span></p>
  </td>
  <td width=213 colspan=3 style='width:159.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>Blood
  type: {{$patient->blood_type ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:15.25pt'>
  <td width=160 style='width:119.75pt;border:solid black 1.0pt;border-top:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>Home
  address</span></p>
  </td>
  <td width=479 colspan=9 style='width:359.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>{{$patient->home_address ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=160 style='width:119.75pt;border:solid black 1.0pt;border-top:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>Contact
  number</span></p>
  </td>
  <td width=479 colspan=9 style='width:359.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>{{$patient->contact_number ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=160 colspan=2 style='width:120.25pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>Allergies</span></p>
  </td>
  <td width=478 colspan=8 style='width:358.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>{{$patient->allergies ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=160 colspan=2 style='width:120.25pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>Unit
  Assignment</span></p>
  </td>
  <td width=478 colspan=8 style='width:358.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>{{$patient->unit_assignment ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=160 colspan=2 style='width:120.25pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>Rank/Position</span></p>
  </td>
  <td width=478 colspan=8 style='width:358.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>{{$patient->position ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=160 colspan=2 style='width:120.25pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>Bachelor’s
  Degree</span></p>
  </td>
  <td width=478 colspan=8 style='width:358.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>{{$patient->bachelor_degree ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=160 colspan=2 style='width:120.25pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>Date
  Entered Service</span></p>
  </td>
  <td width=478 colspan=8 style='width:358.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>{{$patient->date_entered_service ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=638 colspan=10 valign=top style='width:478.75pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal><b><span lang=EN-US style='font-family:"Arial",sans-serif'>General
  Appearance and Condition</span></b></p>
  </td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=638 colspan=10 valign=top style='width:478.75pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Skin: {{$patient->skin ?? '---'}}</span></p>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>HEENT: {{$patient->heent ?? '---'}}</span></p>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Neck: {{$patient->neck ?? '---'}}</span></p>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Chest: {{$patient->chest ?? '---'}}</span></p>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Heart: {{$patient->heart ?? '---'}}</span></p>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Breast (for female): {{$patient->breast ?? '---'}}</span></p>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Abdomen: {{$patient->abdomen ?? '---'}}</span></p>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Musculoskeletal: {{$patient->musculoskeletal ?? '---'}}</span></p>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Neurologic: {{$patient->neurologic ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=638 colspan=10 valign=top style='width:478.75pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal><b><span lang=EN-US style='font-family:"Arial",sans-serif'>Medical
  History</span></b></p>
  </td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=638 colspan=10 valign=top style='width:478.75pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Present: {{ implode(', ', $patient->past_medical_history ?? []) }}</span></p>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Operations: {{$patient->operations ?? '---'}}</span></p>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Previous Hospitalization: {{$patient->previous_hospitalization ?? '---'}}</span></p>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Current Medications: {{$patient->current_medication ?? '---'}}</span></p>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Family History: {{$patient->family_history ?? '---'}}</span></p>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Psychosocial History: {{$patient->psychosocial_history ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=638 colspan=10 valign=top style='width:478.75pt;border-top:none;
  border-left:solid black 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:solid black 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal><b><span lang=EN-US style='font-family:"Arial",sans-serif'>Obestetic
  History</span></b></p>
  </td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=638 colspan=10 valign=top style='width:478.75pt;border-top:none;
  border-left:solid black 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:solid black 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Obstetric
  Score: {{$patient->obestetric_score ?? '---'}}</span></p>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Last
  Menstrual Period: {{$patient->lmp ?? '---'}}</span></p>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Menarche: {{$patient->menarche ?? '---'}}</span></p>
  </td>
 </tr>
</table>

</div>

<p class=MsoNormal><span style='font-family:"Arial",sans-serif'>&nbsp;</span></p>

<p class=MsoNormal><span style='font-family:"Arial",sans-serif'>&nbsp;</span></p>

<div align=center>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=638
 style='width:478.75pt;border-collapse:collapse;border:none'>
 <thead>
  <tr style='height:21.8pt'>
   <td width=638 colspan=5 style='width:478.75pt;border:solid black 1.0pt;
   padding:0cm 5.4pt 0cm 5.4pt;height:21.8pt'>
   <p class=MsoNormal style='line-height:115%'><span lang=EN-US
   style='font-size:16.0pt;line-height:115%;font-family:"Arial",sans-serif'>S.O.A.P  
   </span><span lang=EN-US style='font-size:11.0pt;line-height:115%;font-family:
   "Arial",sans-serif'>Subjective, Objective, Assessment, Plan</span></p>
   </td>
  </tr>
 </thead>

 @php $lN = 1; @endphp
 @if(isset($soap))
 @foreach($soap as $sp)
 <tr style='height:15.25pt'>
  <td width=638 colspan=5 valign=top style='width:478.75pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal><b><span lang=EN-US style='font-family:"Arial",sans-serif'>Details
  of Visit #{{$lN++ }}</span></b></p>
  </td>
 </tr>
 <tr style='height:15.25pt'>
  <td width=246 colspan=2 valign=top style='width:184.25pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Date
  of Visit:</span></p>
  <p class=MsoNormal><span style='font-family:"Arial",sans-serif'>{{$sp->soap_dt ?? '---'}}</span></p>
  </td>
  <td width=393 colspan=3 valign=top style='width:294.5pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Subjective
  / Chief Complaint:</span></p>
  <p class=MsoNormal><span style='font-family:"Arial",sans-serif'>{{$sp->subjective ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:15.25pt'>
  <td width=638 colspan=5 valign=top style='width:478.75pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal><b><span lang=EN-US style='font-family:"Arial",sans-serif'>Vital
  Signs</span></b></p>
  </td>
 </tr>
 <tr style='height:15.25pt'>
  <td width=638 colspan=5 valign=top style='width:478.75pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Blood
  Pressure: {{$sp->bp ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:15.25pt'>
  <td width=319 colspan=3 valign=top style='width:239.35pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Pulse
  Rate: {{$sp->pr ?? '---'}} bpm </span></p>
  </td>
  <td width=319 colspan=2 valign=top style='width:239.4pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Respiratory
  Rate: {{$sp->rr ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:15.25pt'>
  <td width=319 colspan=3 valign=top style='width:239.35pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Height: {{$sp->height ?? '---'}} cm</span></p>
  </td>
  <td width=319 colspan=2 valign=top style='width:239.4pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Weight: {{$sp->weight ?? '---'}} kg</span></p>
  </td>
 </tr>
 <tr style='height:15.25pt'>
  <td width=319 colspan=3 valign=top style='width:239.35pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Temperature: {{$sp->temp ?? '---'}} degrees Celsius</span></p>
  </td>
  <td width=319 colspan=2 valign=top style='width:239.4pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Body
  Mass Index: {{$sp->bmi_1 ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:15.25pt'>
  <td width=638 colspan=5 valign=top style='width:478.75pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal><b><span lang=EN-US style='font-family:"Arial",sans-serif'>Laboratory
  Test Results</span></b></p>
  </td>
 </tr>
 <tr style='height:8.2pt'>
  <td width=160 valign=top style='width:119.65pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:8.2pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Electrocardiogram:</span></p>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>{{$sp->ecg ?? '---'}}</span></p>
  </td>
  <td width=160 colspan=2 valign=top style='width:119.7pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:8.2pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Chest
  X-Ray: {{$sp->cxr ?? '---'}}</span></p>
  </td>
  <td width=160 valign=top style='width:119.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:8.2pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>SGOT: {{$sp->sgot ?? '---'}}</span></p>
  </td>
  <td width=160 valign=top style='width:119.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:8.2pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>SGPT: {{$sp->sgpt ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:8.15pt'>
  <td width=160 valign=top style='width:119.65pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:8.15pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Complete
  Blood Count: {{$sp->cbc ?? '---'}}</span></p>
  </td>
  <td width=160 colspan=2 valign=top style='width:119.7pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:8.15pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Urinalysis: {{$sp->ua ?? '---'}}</span></p>
  </td>
  <td width=160 valign=top style='width:119.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:8.15pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Fasting
  Blood Sugar: {{$sp->fbs ?? '---'}}</span></p>
  </td>
  <td width=160 valign=top style='width:119.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:8.15pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Potassium
  Blood Test (NaK): {{$sp->nak ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:8.15pt'>
  <td width=160 valign=top style='width:119.65pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:8.15pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Creatinine;
  {{$sp->crea ?? '---'}}</span></p>
  </td>
  <td width=160 colspan=2 valign=top style='width:119.7pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:8.15pt'>
  <p class=MsoNormal><span style='font-family:"Arial",sans-serif'>Blood Urea
  Nitrogen: {{$sp->bun ?? '---'}}</span></p>
  </td>
  <td width=160 valign=top style='width:119.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:8.15pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>HbA1c: {{$sp->hbaic ?? '---'}}</span></p>
  </td>
  <td width=160 valign=top style='width:119.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:8.15pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>HepaBS: {{$sp->hepabs ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:8.15pt'>
  <td width=160 valign=top style='width:119.65pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:8.15pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Blood
  Uric Acid: {{$sp->bua ?? '---'}}</span></p>
  </td>
  <td width=160 colspan=2 valign=top style='width:119.7pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:8.15pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Lipid
  Profile: {{$sp->lipid_profile ?? '---'}}</span></p>
  </td>
  <td width=319 colspan=2 valign=top style='width:239.4pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:8.15pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Others: {{$sp->others ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:8.15pt'>
  <td width=638 colspan=5 valign=top style='width:478.75pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:8.15pt'>
  <p class=MsoNormal><b><span lang=EN-US style='font-family:"Arial",sans-serif'>Assessment
  &amp; Plan</span></b></p>
  </td>
 </tr>
 <tr style='height:4.85pt'>
  <td width=638 colspan=5 valign=top style='width:478.75pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:4.85pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Assessment: {{$sp->assessment ?? '---'}}</span></p>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>&nbsp;</span></p>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Plan: {{$sp->plan ?? '---'}}</span></p>
  </td>
 </tr>
 @endforeach
 @else
 <tr style='height:15.25pt'>
  <td width=638 colspan=5 valign=top style='width:478.75pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal><b><span lang=EN-US style='font-family:"Arial",sans-serif'>No log</span></b></p>
  </td>
 </tr>
 @endif

</table>

</div>

<p class=MsoNormal><span style='font-family:"Arial",sans-serif'>&nbsp;</span></p>

<div align=center>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=638
 style='width:478.75pt;border-collapse:collapse;border:none'>
 <thead>
  <tr style='height:21.8pt'>
   <td width=638 colspan=8 style='width:478.75pt;border:solid black 1.0pt;
   padding:0cm 5.4pt 0cm 5.4pt;height:21.8pt'>
   <p class=MsoNormal style='line-height:115%'><span lang=EN-US
   style='font-size:16.0pt;line-height:115%;font-family:"Arial",sans-serif'>Diet
   History</span></p>
   </td>
  </tr>
 </thead>
 <tr style='height:15.25pt'>
  <td width=638 colspan=8 valign=top style='width:478.75pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal><b><span lang=EN-US style='font-family:"Arial",sans-serif'>Anthropometric
  Assessment</span></b></p>
  </td>
 </tr>
 <tr style='height:15.25pt'>
  <td width=184 valign=top style='width:138.15pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Height: {{$diethistory->ht ?? '---'}} cm</span></p>
  </td>
  <td width=225 colspan=6 valign=top style='width:168.9pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Weight: {{$diethistory->wt ?? '---'}} kg</span></p>
  </td>
  <td width=229 valign=top style='width:171.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Waist
  circumference: {{$diethistory->waist_cir ?? '---'}} cm</span></p>
  </td>
 </tr>
 <tr style='height:15.25pt'>
  <td width=338 colspan=4 valign=top style='width:253.75pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Body
  Fat %: {{$diethistory->body_fat ?? '---'}}</span></p>
  </td>
  <td width=300 colspan=4 valign=top style='width:225.0pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>BMI: {{$diethistory->bmi_2 ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:15.25pt'>
  <td width=338 colspan=4 valign=top style='width:253.75pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>DBW: {{$diethistory->dbw ?? '---'}}</span></p>
  </td>
  <td width=300 colspan=4 valign=top style='width:225.0pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>DBW
  Range: {{$diethistory->dbw_range ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=184 style='width:138.15pt;border:solid black 1.0pt;border-top:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span style='font-family:"Arial",sans-serif;
  color:black'>Case</span></p>
  </td>
  <td width=454 colspan=7 style='width:340.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>{{$diethistory->case ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=184 style='width:138.15pt;border:solid black 1.0pt;border-top:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span style='font-family:"Arial",sans-serif;
  color:black'>Diet Rx</span></p>
  </td>
  <td width=454 colspan=7 style='width:340.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>{{$diethistory->diet_rx ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=638 colspan=8 valign=top style='width:478.75pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal><b><span lang=EN-US style='font-family:"Arial",sans-serif'>24
  Hour Food Recall</span></b></p>
  </td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=220 colspan=2 valign=top style='width:164.75pt;border-top:none;
  border-left:solid black 1.0pt;border-bottom:solid black 1.0pt;border-right:
  solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal><span lang=EN-US style='font-family:"Arial",sans-serif'>Date
  and time </span></p>
  </td>
  <td width=419 colspan=6 valign=top style='width:314.0pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal><span style='font-family:"Arial",sans-serif'>{{$diethistory->food_recall_time ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=220 colspan=2 style='width:164.75pt;border-top:none;border-left:
  solid black 1.0pt;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-family:"Arial",sans-serif'>Where eaten</span></p>
  </td>
  <td width=419 colspan=6 style='width:314.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>{{$diethistory->where_eaten ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=220 colspan=2 style='width:164.75pt;border-top:none;border-left:
  solid black 1.0pt;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-family:"Arial",sans-serif'>Food/s</span></p>
  </td>
  <td width=419 colspan=6 style='width:314.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>{{$diethistory->foods ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=220 colspan=2 style='width:164.75pt;border-top:none;border-left:
  solid black 1.0pt;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-family:"Arial",sans-serif'>Description</span></p>
  </td>
  <td width=419 colspan=6 style='width:314.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>{{$diethistory->description ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=220 colspan=2 style='width:164.75pt;border-top:none;border-left:
  solid black 1.0pt;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-family:"Arial",sans-serif'>Amount</span></p>
  </td>
  <td width=419 colspan=6 style='width:314.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>{{$diethistory->amount ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=220 colspan=2 style='width:164.75pt;border-top:none;border-left:
  solid black 1.0pt;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-family:"Arial",sans-serif'>Was this food taken typical?</span></p>
  </td>
  <td width=49 style='width:36.5pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>{{$diethistory->food_taken ?? '---'}}</span></p>
  </td>
  <td width=105 colspan=2 style='width:78.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>If
  not, why?</span></p>
  </td>
  <td width=265 colspan=3 style='width:198.55pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>{{$diethistory->food_taken_1 ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=220 colspan=2 style='width:164.75pt;border-top:none;border-left:
  solid black 1.0pt;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-family:"Arial",sans-serif'>Exercise (type, frequency, duration)</span></p>
  </td>
  <td width=419 colspan=6 style='width:314.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>{{$diethistory->exercise ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=638 colspan=8 style='width:478.75pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><b><span lang=EN-US
  style='font-family:"Arial",sans-serif'>Nutrition Intervention</span></b></p>
  </td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=184 style='width:138.15pt;border:solid black 1.0pt;border-top:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-family:"Arial",sans-serif'>Target Weight: {{$diethistory->target_weight_1 ?? '---'}} kg</span></p>
  </td>
  <td width=191 colspan=5 style='width:143.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-family:"Arial",sans-serif'>Weight Loss: {{$diethistory->weight_loss ?? '---'}} kg</span></p>
  </td>
  <td width=263 colspan=2 style='width:197.35pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-family:"Arial",sans-serif'>Total Energy Allowance: {{$diethistory->total_energy_allowance ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=638 colspan=8 style='width:478.75pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-family:"Arial",sans-serif'>Food Distribution</span></p>
  </td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=220 colspan=2 style='width:164.75pt;border-top:none;border-left:
  solid black 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-family:"Arial",sans-serif'>Vegetable A</span></p>
  </td>
  <td width=419 colspan=6 style='width:314.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-family:"Arial",sans-serif'>{{$diethistory->vegetable_a ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=220 colspan=2 style='width:164.75pt;border-top:none;border-left:
  solid black 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-family:"Arial",sans-serif'>Vegetable B</span></p>
  </td>
  <td width=419 colspan=6 style='width:314.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-family:"Arial",sans-serif'>{{$diethistory->vegetable_b ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=220 colspan=2 style='width:164.75pt;border-top:none;border-left:
  solid black 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-family:"Arial",sans-serif'>Fruit</span></p>
  </td>
  <td width=419 colspan=6 style='width:314.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-family:"Arial",sans-serif'>{{$diethistory->fruit ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=220 colspan=2 style='width:164.75pt;border-top:none;border-left:
  solid black 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-family:"Arial",sans-serif'>Milk</span></p>
  </td>
  <td width=419 colspan=6 style='width:314.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-family:"Arial",sans-serif'>{{$diethistory->milk ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=220 colspan=2 style='width:164.75pt;border-top:none;border-left:
  solid black 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-family:"Arial",sans-serif'>Rice, Cereal or Substitute</span></p>
  </td>
  <td width=419 colspan=6 style='width:314.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-family:"Arial",sans-serif'>{{$diethistory->rice_cereal ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=220 colspan=2 style='width:164.75pt;border-top:none;border-left:
  solid black 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-family:"Arial",sans-serif'>Meat/Fish/Poultry Products/Processed
  foods</span></p>
  </td>
  <td width=419 colspan=6 style='width:314.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-family:"Arial",sans-serif'>{{$diethistory->meat ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=220 colspan=2 style='width:164.75pt;border-top:none;border-left:
  solid black 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-family:"Arial",sans-serif'>Fat, Oil, Dairy products</span></p>
  </td>
  <td width=419 colspan=6 style='width:314.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-family:"Arial",sans-serif'>{{$diethistory->fat ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:7.9pt'>
  <td width=220 colspan=2 style='width:164.75pt;border-top:none;border-left:
  solid black 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-family:"Arial",sans-serif'>Sugar</span></p>
  </td>
  <td width=419 colspan=6 style='width:314.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-family:"Arial",sans-serif'>{{$diethistory->sugar ?? '---'}}</span></p>
  </td>
 </tr>
</table>

</div>

<p class=MsoNormal><span style='font-family:"Arial",sans-serif'>&nbsp;</span></p>

<p class=MsoNormal><span style='font-family:"Arial",sans-serif'>&nbsp;</span></p>

<div align=center>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=638
 style='width:478.75pt;border-collapse:collapse;border:none'>
 <thead>
  <tr style='height:21.8pt'>
   <td width=638 colspan=6 style='width:478.75pt;border:solid black 1.0pt;
   padding:0cm 5.4pt 0cm 5.4pt;height:21.8pt'>
   <p class=MsoNormal style='line-height:115%'><span lang=EN-US
   style='font-size:16.0pt;line-height:115%;font-family:"Arial",sans-serif'>Progress
   Chart for Weight Management (PCWM)</span></p>
   </td>
  </tr>
 </thead>
 <tr style='height:15.25pt'>
  <td width=319 colspan=4 style='width:239.35pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>Target
  Weight: {{$pcwm->target_weight_2 ?? '---'}} kg</span></p>
  </td>
  <td width=319 colspan=2 style='width:239.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>Target
  Date: {{$pcwm->target_date ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:15.25pt'>
  <td width=319 colspan=4 style='width:239.35pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>Starting
  Weight: {{$pcwm->starting_weight ?? '---'}} kg</span></p>
  </td>
  <td width=319 colspan=2 style='width:239.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>Starting
  Date: {{$pcwm->starting_date ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:15.25pt'>
  <td width=319 colspan=4 style='width:239.35pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>Weighing
  Day, Every: {{$pcwm->weighing_day ?? '---'}}</span></p>
  </td>
  <td width=319 colspan=2 style='width:239.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>Weighing
  Time: {{$pcwm->weight_time ?? '---'}}</span></p>
  </td>
 </tr>
 @php $logNumber = 1; @endphp
 @if(isset($pcwm) && $pcwm->logs->isNotEmpty())
 @foreach($pcwm->logs as $log)
 <tr style='height:15.25pt'>
  <td width=165 style='width:123.85pt;border:solid black 1.0pt;border-top:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>Log<b>
  </b># <b>{{$logNumber++ }}</b></span></p>
  </td>
  <td width=85 style='width:63.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.25pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>Date</span></p>
  </td>
  <td width=388 colspan=4 style='width:291.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>{{$log->pcwm2_dt ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:15.25pt'>
  <td width=274 colspan=3 style='width:205.3pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>Actual
  Weekly Weight:{{$log->actual_weekly_weight ?? '---'}} kg</span></p>
  </td>
  <td width=170 colspan=2 style='width:127.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>Loss: {{$log->loss ?? '---'}} kg</span></p>
  </td>
  <td width=194 style='width:145.85pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.25pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>Gain:{{$log->gain ?? '---'}} kg</span></p>
  </td>
 </tr>
 @endforeach
 @else
 <tr style='height:15.25pt'>
  <td width=319 colspan=4 style='width:239.35pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>Weekly Weight Log</span></p>
  </td>
  <td width=319 colspan=2 style='width:239.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>No log</span></p>
  </td>
 </tr>
 @endif
</table>
</div>

<p class=MsoNormal><span style='font-family:"Arial",sans-serif'>&nbsp;</span></p>

</div>
</main>
</body>
</html>