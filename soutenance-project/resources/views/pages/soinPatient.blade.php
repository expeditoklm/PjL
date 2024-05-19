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
                                            <div class="card-header mb-4 d-flex justify-content-between align-items-center ">
                                                <h5 class="card-title">Soin Administré</h5>
                                                <button class="btn btn-primary ml-auto " data-bs-toggle="modal" data-bs-target="#modifSoinAdministre">Modifier</button>
                                            </div>

                                            <div class="col-xl-3 col-sm-4 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="email">Libelle Soin</label>
                                                    <input name="" readonly id="" class="form-control" value="{{ $soinAdmis->typeSoin->libTypeSoin}}">
                                                </div>
                                            </div>


                                            <div class="col-xl-3 col-sm-4 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="email">infirmier(e)</label>
                                                    <input name="" readonly id="" class="form-control" value="{{ $soinAdmis->personnelSante->personne->nomPers}} {{ $soinAdmis->personnelSante->personne->prenomPers}}">
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-sm-4 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="email">Hopital</label>
                                                    <input name="" readonly id="" class="form-control" value="{{ $soinAdmis->hopital->libHopital}}">
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-sm-4 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="email">Date</label>
                                                    <input name=""  readonly id="" class="form-control" value="{{ $soinAdmis->created_at}}">
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-sm-4 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="email">Observations</label>
                                                    <textarea readonly name="" id="" cols="30" rows="5" class="form-control">{{ $soinAdmis->detailsAdministreSoins}}</textarea>
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

<!-- Modal Fullscreen -->
<div class="modal fade" id="modifSoinAdministre" tabindex="-1" aria-labelledby="modifSoinAdministreLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="modifSoinAdministreLabel">
                    Formulaire de Modification de Soin
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-body">
                    <div class="row gx-3">
                        <div class="col-sm-12">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h5 class="card-title">Modifier Soin Administré</h5>
                                </div>
                                <form action="">
                                    <div class="card-body">
                                        <!-- Row start -->
                                        <div class="row gx-3">
                                            <div class="col-xl-3 col-sm-4 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="name">Libellé Soin</label>
                                                    <input name="" id="" type="text" class="form-control" placeholder="Ou entrez le type d'examen">
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-sm-4 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="name"> Détails</label>
                                                    <textarea name="" id="" cols="30" class="form-control" rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Row end -->
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex gap-2 justify-content-end">
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                                            <button type="button" class="btn btn-primary">Valider</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>








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