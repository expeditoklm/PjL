@extends('base');

@section('css')
<!-- Data Tables -->
<link rel="stylesheet" href="assets/vendor/datatables/dataTables.bs5.css" />
<link rel="stylesheet" href="assets/vendor/datatables/dataTables.bs5-custom.css" />
<link rel="stylesheet" href="assets/vendor/datatables/buttons/dataTables.bs5-custom.css" />
@endsection
@section('content')
@section('retour')
{{route('pages.liste-viste-patient')}}
@endsection
@section('titre')
ANALYSE
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
                        <ul class="nav nav-tabs" id="customTab3" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="tab-oneAA" data-bs-toggle="tab" href="#oneAA" role="tab" aria-controls="oneAA" aria-selected="true"><i class="ri-user-smile-line"></i>Analyse</a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="tab-fourAA" data-bs-toggle="tab" href="#fourAA" role="tab" aria-controls="threeAA" aria-selected="false" tabindex="-1"><i class="ri-at-fill"></i>Fichiers</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="customTabContent3">
                            <div class="tab-pane fade show active" id="oneAA" role="tabpanel" aria-labelledby="tab-oneAA">

                                <!-- Row start -->
                                <div class="row gx-3">


                                    <div class="col-xl-3 col-sm-4 col-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="email">Type Analyse</label>
                                            <input name="" id="" class="form-control" value="Enter email address">
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-sm-4 col-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="email">Technicien Labo</label>
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
                                            <label class="form-label" for="email">Details</label>
                                            <textarea name="" id="" cols="30" class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-4 col-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="email">Résultats</label>
                                            <textarea name="" id="" cols="30" class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>


                                </div>
                                <!-- Row end -->

                            </div>


                            <div class="tab-pane fade" id="fourAA" role="tabpanel" aria-labelledby="tab-fourAA">
                                <!-- Row start -->
                                <div class=" mb-3">

                                    <div class="col-md-12 col-12">
                                        <div class="card mb-3">
                                            <div class="card-header">
                                                <h5 class="card-title">Fichiers issus de l'analyse</h5>
                                            </div>
                                            <div class="card-body">
                                                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                                    <div class="carousel-indicators">
                                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                    </div>
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="assets/images/products/product5.jpg" class="d-block w-100" alt="Admin Templates & Dashboards">
                                                            <div class="carousel-caption d-none d-md-block">
                                                                <h5 class="text-dark" style="color: black;">Libelle Analyse</h5>
                                                                <p class="text-dark" style="color: black;">Libelle Fichier</p>
                                                                <button class="btn btn-primary">Telecharger</button>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="assets/images/products/product8.jpg" class="d-block w-100" alt="Admin Templates & Dashboards">
                                                            <div class="carousel-caption d-none d-md-block">
                                                                <h5>Libelle Analyse</h5>
                                                                <p>Libelle Fichier</p>
                                                                <button class="btn btn-primary">Telecharger</button>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="assets/images/products/product1.jpg" class="d-block w-100" alt="Admin Templates & Dashboards">
                                                            <div class="carousel-caption d-none d-md-block">
                                                                <h5>Libelle Analyse</h5>
                                                                <p>Libelle Fichier</p>
                                                                <button class="btn btn-primary">Telecharger</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                </div>
                            </div>
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





<!-- App body starts -->

<!-- User stats ends -->
<!-- App content start -->



























































