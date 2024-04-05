@extends('base')

@section('css')
<!-- Data Tables -->
<link rel="stylesheet" href="assets/vendor/datatables/dataTables.bs5.css" />
<link rel="stylesheet" href="assets/vendor/datatables/dataTables.bs5-custom.css" />
<link rel="stylesheet" href="assets/vendor/datatables/buttons/dataTables.bs5-custom.css" />
@endsection
@section('content')
@section('titre')
SOINS
@endsection

<!-- App body starts -->

    <!-- User stats ends -->
    <!-- App content start -->
    <div class="app-body">

        <!-- Row start -->
        <div class="row gx-3">
            <div class="col-sm-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="custom-tabs-container">

                            <div class="tab-content" id="customTabContent3">
                                <div class="tab-pane fade show active" id="oneAA" role="tabpanel" aria-labelledby="tab-oneAA">

                                    <!-- Row start -->
                                    <div class="tab-content" id="customTabContent3">
                                        <div class="tab-pane fade show active" id="oneAA" role="tabpanel" aria-labelledby="tab-oneAA">

                                            <!-- Row start -->
                                            <div class="row gx-3">


                                                <div class="col-xl-3 col-sm-4 col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="email">Libelle Soin</label>
                                                        <input name="" id="" class="form-control" value="Enter email address">
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="col-xl-3 col-sm-4 col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="email">infirmier(e)</label>
                                                        <input name="" id="" class="form-control" value="Enter email address">
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-sm-4 col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="email">Hopital</label>
                                                        <input name="" id="" class="form-control" value="Enter email address">
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-sm-4 col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="email">Date</label>
                                                        <input name="" id="" class="form-control" value="Enter email address">
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-sm-4 col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="email">Observations</label>
                                                        <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <!-- Row end -->
                                        </div>
                                        <!-- Row end -->
                                    </div>
                                    <!-- Row end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row end -->
    </div>
    <!-- App content ends -->
</div>
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
@endsection