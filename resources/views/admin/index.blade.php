@extends('admin.admin_master')
@section('admin')
    @php

        // opd count and sum
        $opds = App\Models\OPD::count();
        $opdssum = App\Models\OPD::sum('price');

        // EEG count and sum
        $eegs = App\Models\EEG::count();
        $eegssum = App\Models\EEG::sum('price');

        // ICU count and sum
        $icus = App\Models\ICU::count();
        $icusum = App\Models\ICU::sum('price');

        // LAB count and sum
        $labs = App\Models\LAB::count();
        $labssum = App\Models\LAB::sum('price');

        // Word count and sum
        $wards = App\Models\Ward::count();
        $wardsum = App\Models\Ward::sum('price');

        // procedure count and sum
        $procedures = App\Models\Procedure::count();
        $proceduressum = App\Models\Procedure::sum('price');

        // consultation count and sum
        $consultations = App\Models\Consultation::count();
        $consultationssum = App\Models\Consultation::sum('price');

        // xray count and sum
        $xrays = App\Models\Xray::count();
        $xrayssum = App\Models\Xray::sum('price');

        // vistitors count and sum
        $icuTotal = App\Models\Visit::join('patients', 'visits.patient_id', '=', 'patients.id')
            ->where('patients.name', 'ICU')
            ->count();

        $totalVisits = App\Models\Visit::sum('visit_number');

        use App\Models\Visit;
        $sectionTotals = Visit::selectRaw('patient_id, SUM(visit_number) as total')
            ->groupBy('patient_id')
            ->with('patient')
            ->get();

    @endphp









    <!-- App body starts -->
    <div class="app-body">

        <!-- Row starts -->
        <div class="row">




            {{-- <span>
            {{ $totalVisits }}
          </span> --}}

            @foreach ($sectionTotals as $row)
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card mb-4">
                        <div class="card-body d-flex align-items-center p-0">

                            <div class="stats-icon bg-info">
                                <i class="bi bi-clipboard fs-2 text-white"></i>
                            </div>

                            <div class="py-4">
                                <h5 class="text-secondary fw-light mb-1">
                                    {{ $row->patient->name }}
                                </h5>

                                <h1 class="m-0">
                                    {{ $row->total }}
                                </h1>
                            </div>

                            <span class="badge bg-info-subtle text-info position-absolute top-0 end-0 m-3">
                                Total {{ $row->total }}
                            </span>

                        </div>
                    </div>
                </div>
            @endforeach




            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-4">
                    <div class="card-body d-flex align-items-center p-0">
                        <div class="stats-icon bg-primary">
                            <i class="bi bi-pie-chart fs-2 text-white"></i>
                        </div>
                        <div class="py-4">
                            <h5 class="text-secondary fw-light mb-1">Visitors</h5>
                            <h1 class="m-0">{{ $opds }}</h1>
                        </div>
                        <span class="badge bg-primary-subtle text-primary position-absolute top-0 end-0 m-3"><i
                                class="bi bi-caret-up-fill"></i>{{ $opdssum }}%</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-4">
                    <div class="card-body d-flex align-items-center p-0">
                        <div class="stats-icon bg-primary">
                            <i class="bi bi-sticky fs-2 text-white"></i>
                        </div>
                        <div class="py-4">
                            <h5 class="text-secondary fw-light mb-1">EEG</h5>
                            <h1 class="m-0">{{ $eegs }}</h1>
                        </div>
                        <span class="badge bg-primary-subtle text-primary position-absolute top-0 end-0 m-3"><i
                                class="bi bi-caret-up-fill"></i>{{ $eegssum }}%</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-4">
                    <div class="card-body d-flex align-items-center p-0">
                        <div class="stats-icon bg-primary">
                            <i class="bi bi-emoji-smile fs-2 text-white"></i>
                        </div>
                        <div class="py-4">
                            <h5 class="text-secondary fw-light mb-1">ICU</h5>
                            <h1 class="m-0">{{ $icusum }}</h1>
                        </div>
                        <span class="badge bg-primary-subtle text-primary position-absolute top-0 end-0 m-3"><i
                                class="bi bi-caret-up-fill"></i>{{ $icusum }}%</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-4">
                    <div class="card-body d-flex align-items-center p-0">
                        <div class="stats-icon bg-primary">
                            <i class="bi bi-emoji-smile fs-2 text-white"></i>
                        </div>
                        <div class="py-4">
                            <h5 class="text-secondary fw-light mb-1">LAB</h5>
                            <h1 class="m-0">{{ $labs }}</h1>
                        </div>
                        <span class="badge bg-primary-subtle text-primary position-absolute top-0 end-0 m-3"><i
                                class="bi bi-caret-up-fill"></i>{{ $labssum }}%</span>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-4">
                    <div class="card-body d-flex align-items-center p-0">
                        <div class="stats-icon bg-danger">
                            <i class="bi bi-star fs-2 text-white"></i>
                        </div>
                        <div class="py-4">
                            <h5 class="text-secondary fw-light mb-1">wards</h5>
                            <h1 class="m-0">{{ $wards }}</h1>
                        </div>
                        <span class="badge bg-danger-subtle text-danger position-absolute top-0 end-0 m-3"><i
                                class="bi bi-caret-down-fill"></i>{{ $wardsum }}%</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-4">
                    <div class="card-body d-flex align-items-center p-0">
                        <div class="stats-icon bg-danger">
                            <i class="bi bi-star fs-2 text-white"></i>
                        </div>
                        <div class="py-4">
                            <h5 class="text-secondary fw-light mb-1">Procedure</h5>
                            <h1 class="m-0">{{ $procedures }}</h1>
                        </div>
                        <span class="badge bg-danger-subtle text-danger position-absolute top-0 end-0 m-3"><i
                                class="bi bi-caret-down-fill"></i>{{ $proceduressum }}%</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-4">
                    <div class="card-body d-flex align-items-center p-0">
                        <div class="stats-icon bg-danger">
                            <i class="bi bi-star fs-2 text-white"></i>
                        </div>
                        <div class="py-4">
                            <h5 class="text-secondary fw-light mb-1">Consultation</h5>
                            <h1 class="m-0">{{ $consultations }}</h1>
                        </div>
                        <span class="badge bg-danger-subtle text-danger position-absolute top-0 end-0 m-3"><i
                                class="bi bi-caret-down-fill"></i>{{ $consultationssum }}%</span>
                    </div>
                </div>
            </div>





            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-4">
                    <div class="card-body d-flex align-items-center p-0">
                        <div class="stats-icon bg-danger">
                            <i class="bi bi-star fs-2 text-white"></i>
                        </div>
                        <div class="py-4">
                            <h5 class="text-secondary fw-light mb-1">xrays</h5>
                            <h1 class="m-0">{{ $xrays }}</h1>
                        </div>
                        <span class="badge bg-danger-subtle text-danger position-absolute top-0 end-0 m-3"><i
                                class="bi bi-caret-down-fill"></i>{{ $xrayssum }}%</span>
                    </div>
                </div>
            </div>



        </div>
        <!-- Row ends -->

    @endsection
