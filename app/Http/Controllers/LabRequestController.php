<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LabRequest;
use App\Models\PatientInformation;
use Illuminate\Support\Facades\Log;

class LabRequestController extends Controller
{
    private $labrequest;

    public function index($patient_number)
    {

        $labrequest = LabRequest::where('patient_number', $patient_number)
            ->orderBy('created_at', 'desc')
            ->first();

        if ($labrequest) {
            $request = json_decode($labrequest->request, true);
            return view('labrequest', compact('patient_number', 'labrequest', 'request'));
        } else {
            return view('labrequest', compact('patient_number', 'labrequest'));
        }
        
    }

    public function store(Request $request, $patient_number) 
    {
        Log::debug("Function called");

        $validatedData = $request->validate([
            'request' => 'nullable|array',
            'others' => 'nullable|string',
            'medical_officer' => 'required|string',
            'license_num' => 'required|string',
        ]);

        Log::debug("It reached here");

        //     'lab_request_dt'
        //     'patient_name_1'
        //     'age_2'
        //     'sex_2' 
        //     'is_archived'
        
        $existingRequest = LabRequest::where('patient_number', $patient_number)->first();

        if ($existingRequest) {
            return $this->updateLabRequest($request, $patient_number);
        }

        Log::debug($validatedData['request']);

        $labRequest = new LabRequest();

        $labRequest->request = json_encode($validatedData['request']) ?? null;
        $labRequest->others = $validatedData['others'] ?? null;
        $labRequest->medical_officer = $validatedData['medical_officer'] ?? null;
        $labRequest->license_num = intval($validatedData['license_num']) ?? null;

        $patient = PatientInformation::where('patient_number', $patient_number)->firstOrFail();
        
        $labRequest->lab_request_dt = now();
        $labRequest->patient_name_1 = trim(
            ($patient->first_name ?? '') . ' ' . 
            ($patient->middle_name ?? '') . ' ' . 
            ($patient->last_name ?? '') . ' ' . 
            ($patient->suffix ?? '')
        );
        $labRequest->age_2 = $patient->age;
        $labRequest->sex_2 = $patient->sex;

        $labRequest->is_archived = false;
        $labRequest->patient_number = $patient_number;

        $labRequest->save();

        return view('labrequest',  ['patient_number' => $patient_number]);
    }

    private function updateLabRequest(Request $request, $patient_number)
    {
        $patient = LabRequest::where('patient_number', $patient_number)->first();
        $patient->fill($request->all());
        $patient->save();

        return view('labrequest', ['patient_number' => $patient_number]);
    }
}
