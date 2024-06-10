<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\PatientInformation;
use App\Models\Soap;

class PdfController extends Controller
{
    public function download($patient_number)
    {
        $patient = PatientInformation::with(['soap', 'labRequest', 'dietHistory', 'pcwm', 'pcwm.logs'])
                                     ->where('patient_number', $patient_number)
                                     ->firstOrFail();

        $soap = Soap::where('patient_number', $patient_number)
        ->orderBy('created_at', 'desc')
        ->get();
        $diethistory = $patient->dietHistory;
        $labRequest = $patient->labRequest;
        $pcwm = $patient->pcwm;
        $pcwmlogs = $pcwm ? $pcwm->logs : collect();

        $pdf = PDF::loadView('pdf', [
            'patient' => $patient,
            'soap' => $soap,
            'labRequest' => $labRequest,
            'diethistory' => $diethistory,
            'pcwm' => $pcwm,
            'pcwmlogs' => $pcwmlogs
        ]);

        return $pdf->download("patient_{$patient->patient_number}.pdf");
    }

    public function labreq_download($patient_number)
    {
        $patient = PatientInformation::with(['soap', 'labRequest', 'dietHistory', 'pcwm', 'pcwm.logs'])
                                     ->where('patient_number', $patient_number)
                                     ->firstOrFail();

        $soap = $patient->soap;
        $diethistory = $patient->dietHistory;
        $labRequest = $patient->labRequest;
        $pcwm = $patient->pcwm;
        $pcwmlogs = $pcwm ? $pcwm->logs : collect();

        $pdf = PDF::loadView('labreq', [
            'patient' => $patient,
            'soap' => $soap,
            'labRequest' => $labRequest,
            'diethistory' => $diethistory,
            'pcwm' => $pcwm,
            'pcwmlogs' => $pcwmlogs
        ]);

        return $pdf->download("lab_request_form_patient_{$patient->patient_number}.pdf");
    }
}
