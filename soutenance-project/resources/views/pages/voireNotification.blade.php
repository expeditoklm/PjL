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
CONSULTATION
@endsection

<!-- App body starts -->

<!-- User stats ends -->
<!-- App content start -->
<div class="app-body">

    <!-- Row start -->
    <div class="row gx-3">
        <div class="col-6">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="card-title">Card Title</h5>
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="card-title">Card Title</h5>
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->

</div>
<!-- App body ends -->

<!-- App footer starts -->
<div class="app-footer text-end">
    <span>© Bootstrap Gallery 2024</span>
</div>
<!-- App footer ends -->

</div>
<!-- App container ends -->

</div>
<!-- Main container ends -->

</div>


<!-- Row end -->


<!-- App content ends -->


<!-- App body ends -->











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