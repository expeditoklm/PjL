@extends('base');

@section('css')
<!-- Data Tables -->
<link rel="stylesheet" href="assets/vendor/datatables/dataTables.bs5.css" />
<link rel="stylesheet" href="assets/vendor/datatables/dataTables.bs5-custom.css" />
<link rel="stylesheet" href="assets/vendor/datatables/buttons/dataTables.bs5-custom.css" />

<!-- Date Range CSS -->
<link rel="stylesheet" href="assets/vendor/daterange/daterange.css" />
@endsection

@section('content')
@section('datePeaker')
<!-- Page title ends -->

<div class="ms-auto justify-content-center">
    <div class="input-group">
        <span class="input-group-text">
            <i class="ri-calendar-2-line"></i>
        </span>
        <input type="text" id="dt1" class="form-control custom-daterange2" />
    </div>
</div>
@endsection
@section('titre')
@auth
@if (auth()->user()->typePersonne !== 'Patient')
Listes des patients recemment consulter
@else
Histoirique des modifications du DME
@endif
@endauth
@endsection

<!-- App body starts -->

<!-- User stats ends -->
<!-- App content start -->
<div class="app-body">

    <!-- Row start -->
    <div class="row gx-3">
        @auth
        @if (auth()->user()->typePersonne === 'Patient')
        <div class="card-body">
            <div class="table-responsive">
                <table id="toggleButtons" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lesLogs as $item)
                        <tr>
                            <td>
                                <div class="col-12">
                                    <div class="card mb-3">
                                        <div class="card-header d-flex justify-content-between">
                                            <h5 class="card-title">{{ $item->personnel_sante_nom }}</h5>
                                            <span class="ml-auto small m-0 text-light">{{ $item->created_at}}</span>
                                        </div>
                                        <div class="card-body">{{ $item->objet}}</div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
        @else




        <div class="card-body">
            <div class="table-responsive">
                <table id="toggleButtons" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lesLogs as $item)
                        <tr>
                            <td>
                                <div class="col-12">
                                    <div class="card mb-3">
                                        <div class="card-header d-flex justify-content-between">
                                            <h5 class="card-title">{{ $item->patient_nom}}</h5>
                                            <span class="ml-auto small m-0 text-light">{{ $item->created_at}}</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    @endif
    @endauth
    <!-- Row end -->

</div>






@section('script')

<!-- Quill Editor JS -->
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/vendor/quill/custom.js"></script>
<!-- Data Tables -->
<script src="assets/vendor/datatables/dataTables.min.js"></script>
<script src="assets/vendor/datatables/dataTables.bootstrap.min.js"></script>
<script src="assets/vendor/datatables/custom/custom-datatables.js"></script>
<!-- DataTable Buttons -->
<script src="assets/vendor/datatables/buttons/dataTables.buttons.min.js"></script>
<script src="assets/vendor/datatables/buttons/jszip.min.js"></script>
<script src="assets/vendor/datatables/buttons/dataTables.buttons.min.js"></script>
<script src="assets/vendor/datatables/buttons/pdfmake.min.js"></script>
<script src="assets/vendor/datatables/buttons/vfs_fonts.js"></script>
<script src="assets/vendor/datatables/buttons/buttons.html5.min.js"></script>
<script src="assets/vendor/datatables/buttons/buttons.print.min.js"></script>
<script src="assets/vendor/datatables/buttons/buttons.colVis.min.js"></script>
@endsection














@endsection


@section('script')
<!-- Data Tables -->
<script src="assets/vendor/datatables/dataTables.min.js"></script>
<script src="assets/vendor/datatables/dataTables.bootstrap.min.js"></script>
<script src="assets/vendor/datatables/custom/custom-datatables.js"></script>
<!-- DataTable Buttons -->
<script src="assets/vendor/datatables/buttons/dataTables.buttons.min.js"></script>
<script src="assets/vendor/datatables/buttons/jszip.min.js"></script>
<script src="assets/vendor/datatables/buttons/dataTables.buttons.min.js"></script>
<script src="assets/vendor/datatables/buttons/pdfmake.min.js"></script>
<script src="assets/vendor/datatables/buttons/vfs_fonts.js"></script>
<script src="assets/vendor/datatables/buttons/buttons.html5.min.js"></script>
<script src="assets/vendor/datatables/buttons/buttons.print.min.js"></script>
<script src="assets/vendor/datatables/buttons/buttons.colVis.min.js"></script>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/modernizr.js"></script>
<script src="assets/js/moment.min.js"></script>

<!-- Megamenu JS -->
<script src="assets/vendor/megamenu/js/megamenu.js"></script>
<script src="assets/vendor/megamenu/js/custom.js"></script>

<!-- *************
			************ Vendor Js Files *************
		************* -->

<!-- Apex Graphs -->
<script src="assets/vendor/apex/apexcharts.min.js"></script>
<script src="assets/vendor/apex/custom/graphs/sparkline.js"></script>
<!-- Date Range JS -->
<script src="assets/vendor/daterange/daterange.js"></script>
<script src="assets/vendor/daterange/custom-daterange.js"></script>

<!-- Custom JS files -->
<script src="assets/js/custom.js"></script>
@endsection