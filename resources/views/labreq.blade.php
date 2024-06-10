<html>

<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name=Generator content="Microsoft Word 15 (filtered)">
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin:0cm;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;}
@page WordSection1
	{size:595.3pt 841.9pt;
	margin:72.0pt 72.0pt 72.0pt 72.0pt;}
div.WordSection1
	{page:WordSection1;}
    header {
        position: fixed;
        top: 0cm;
        left: 0cm;
        right: 0cm;
        height: 3.5cm;
    }
    footer {
        position: fixed; 
        bottom: -60px; 
        left: 0px; 
        right: 0px;
        height: 50px; 
    }
    body {
        padding-top: 3.5cm;
    } 
</style>

</head>
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
    lang=EN-US style='font-size:16.0pt;font-family:Helvetica'>Laboratory Request Form</span></u></b></p>
</header>

<footer>
<p class=MsoNormal><span lang=EN-US style='font-size:10.0pt;font-family:Helvetica'>LABORATORY-REQUEST-FORM          Date & Time of Form Generation: {{ now()->format('Y-m-d H:i:s') }}</span></p>
</footer>


<body lang=EN-PH style='word-wrap:break-word'>

<div class=WordSection1>
<span lang=EN-US style='font-family:Helvetica'>Patient #<b>{{$patient->patient_number ?? '---'}}</b></span>
<p class=MsoNormal><span style='font-family:"Arial",sans-serif'>&nbsp;</span></p>

<div align=center>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=623
 style='width:467.55pt;border-collapse:collapse;border:none'>
 <tr style='height:1.0cm'>
  <td width=255 colspan=2 style='width:191.15pt;border:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:10.5pt;line-height:115%;font-family:"Arial",sans-serif'>Name</span></p>
  <p class=MsoNormal style='line-height:115%'><i><span lang=EN-US
  style='font-size:8.0pt;line-height:115%;font-family:"Arial",sans-serif'>Last
  Name (Suffix), First Name Middle Name</span></i></p>
  </td>
  <td width=275 colspan=2 style='width:206.5pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:10.5pt;line-height:115%;font-family:"Arial",sans-serif'>{{$patient->last_name ?? '---'}} {{$patient->suffix ?? ''}}, {{$patient->first_name ?? '---'}} {{$patient->middle_name ?? ''}}</span></p>
  </td>
  <td width=93 style='width:69.9pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:10.5pt;line-height:115%;font-family:"Arial",sans-serif'>Sex: {{$patient->sex ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:16.95pt'>
  <td width=189 style='width:141.5pt;border:solid black 1.0pt;border-top:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:16.95pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:10.5pt;font-family:"Arial",sans-serif'>Date
  of Birth  </span><i><span lang=EN-US style='font-size:8.0pt;font-family:"Arial",sans-serif'>YYYY-MM-DD</span></i></p>
  </td>
  <td width=302 colspan=2 style='width:8.0cm;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:16.95pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:10.5pt;font-family:"Arial",sans-serif'>A</span></p>
  </td>
  <td width=132 colspan=2 style='width:99.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:16.95pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:10.5pt;font-family:"Arial",sans-serif'>Age:
  ### years old</span></p>
  </td>
 </tr>
 <tr style='height:15.25pt'>
  <td width=623 colspan=5 style='width:467.55pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:10.5pt;line-height:115%;font-family:"Arial",sans-serif'>Request
  Date: {{$labRequest->lab_request_dt ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:15.25pt'>
  <td width=189 style='width:141.5pt;border:solid black 1.0pt;border-top:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:10.5pt;line-height:115%;font-family:"Arial",sans-serif'>Requested
  laboratory tests</span></p>
  </td>
  <td width=435 colspan=4 style='width:326.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:10.5pt;line-height:115%;font-family:"Arial",sans-serif'>
        <@if($labRequest->request)
        @php
            $requestData = json_decode($labRequest->request, true);
        @endphp
        
            @foreach($requestData as $item)
                {{ $item }}
                <br>
            @endforeach
        
    @else
        <p>No request details available.</p>
    @endif
</span></p>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:10.5pt;line-height:115%;font-family:"Arial",sans-serif'><br>Other request/s: {{$labRequest->others ?? 'None'}}</span></p>
</td>
 </tr>
 <tr style='height:15.25pt'>
  <td width=189 style='width:141.5pt;border:solid black 1.0pt;border-top:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:10.5pt;line-height:115%;font-family:"Arial",sans-serif'>Medical
  Officer</span></p>
  </td>
  <td width=435 colspan=4 style='width:326.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:10.5pt;line-height:115%;font-family:"Arial",sans-serif'>{{$labRequest->medical_officer ?? '---'}}</span></p>
  </td>
 </tr>
 <tr style='height:15.25pt'>
  <td width=189 style='width:141.5pt;border:solid black 1.0pt;border-top:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:10.5pt;line-height:115%;font-family:"Arial",sans-serif'>License
  Number</span></p>
  </td>
  <td width=435 colspan=4 style='width:326.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
  <p class=MsoNormal style='line-height:115%'><span lang=EN-US
  style='font-size:10.5pt;line-height:115%;font-family:"Arial",sans-serif'>{{$labRequest->license_num ?? '---'}}</span></p>
  </td>
 </tr>

</table>

</div>

<p class=MsoNormal><span style='font-family:"Arial",sans-serif'>&nbsp;</span></p>

</div>

</body>

</html>