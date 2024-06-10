@extends('layouts.master')

@section('css')
    <!-- Table css -->
    <link href="{{ URL::asset('plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css') }}" rel="stylesheet" type="text/css" media="screen">
    <!-- Font Awesome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Custom hospital style -->
    <style>
        /* Add your custom hospital styles here */
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }
        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
       
        .table-responsive .rwd-table-priority-toggle {
            display: none !important;
        }

    </style>
    </section>

    @section('button')
        @php
            $lastPatientNumber = DB::table('patient_information')->orderBy('patient_number', 'desc')->first();

            if ($lastPatientNumber) {
                $nextPatientNumber = $lastPatientNumber->patient_number + 1;
            } else {
                $nextPatientNumber = 1;
            }
        @endphp

        <form method="GET" action="{{ route('patientinformation', ['patient_number' => $nextPatientNumber]) }}">
            @csrf
            <button type="submit" class="btn btn-primary btn-block">New Medical Record</button>
        </form>
    @endsection



    @section('content')
    @include('includes.flash')

    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
            <div class="table-rep-plugin">
                <div class="d-flex justify-content-between mb-3">
                    <form method="GET" action="{{ route('archived_nutritionforms') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="fas fa-archive fa-2x"></i>
                        </button>
                    </form>

                    <form method="GET" action="{{ route('download-excel') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="fas fa-file-excel fa-2x"></i>
                        </button>
                    </form>
                </div>


                    <div class="table-responsive" style="overflow-x: auto;">
                        <table id="datatable-buttons" class="table table-hover table-striped table-bordered dt-responsive nowrap">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Patient Name</th>
                                    <th>Age</th>
                                    <th>Address</th>
                                    <th>Contact Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($nutritionEvents as $event)
                                <tr>
                                    <td>{{ $event->patient_number }}</td>
                                    <td>{{ $event->first_name }} {{ $event->last_name }}</td>
                                    <td>{{ $event->age }}</td>
                                    <td>{{ $event->home_address }}</td>
                                    <td>{{ $event->contact_number }}</td>
                                    <td>
                                        <!-- View the forms -->
                                        <a href="{{ route('view_nutritionforms', ['patient_number' => $event->patient_number]) }}" class="btn btn-primary btn-sm" style="height: 100%; border-radius: 0;">
                                            <i class="fas fa-eye"></i>
                                        </a>

                                        <!-- Edit the forms -->
                                            <a href="{{ route('patientinformation', ['patient_number' => $event->patient_number]) }}" class="btn btn-primary btn-sm" style="height: 100%; border-radius: 0;">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                        
                                        <!-- Archive the forms -->
                                        <form action="{{ route('archive_nutritionforms', ['patient_number' => $event->patient_number]) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('POST')
                                            <button type="submit" class="btn btn-primary btn-sm" style="height: 100%; border-radius: 0;">
                                                <i class="fas fa-archive"></i>
                                            </button>
                                        </form>

                                        <!-- Download in PDF the forms -->
                                        <a href="{{ route('download-pdf', ['patient_number' => $event->patient_number]) }}" class="btn btn-primary btn-sm" style="height: 100%; border-radius: 0;">
                                            <i class="fas fa-file-pdf"></i>
                                        </a>
                                        
                                        <a href="{{ route('download-lab-req-pdf', ['patient_number' => $event->patient_number]) }}" class="btn btn-primary btn-sm" style="height: 100%; border-radius: 0;">
                                            Lab Request Form
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    @endsection

    @section('script')
        <!-- Responsive-table-->
        <script src="{{ URL::asset('plugins/RWD-Table-Patterns/dist/js/rwd-table.min.js') }}"></script>
        <script>
            $(function() {
                $('.table-responsive').responsiveTable({
                    addDisplayAllBtn: 'btn btn-secondary'
                });
            });
        </script>
    </section>