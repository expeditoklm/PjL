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
CONSULTATION
@endsection

<!-- App body starts -->

<!-- User stats ends -->
<!-- App content start -->
<div class="app-body">

    <!-- Row start -->
    <div class="row gx-3">
        <div class="col-sm-12">
            <!-- Row start -->
            <div class=" mb-3">
                <div class="card mb-3">
                    <div class="card-header mb-4 d-flex justify-content-between align-items-center ">
                        <h5 class="card-title">Liste des Notes</h5>
                        <button class="btn btn-primary ml-auto " data-bs-toggle="modal" data-bs-target="#addNote">Nouveau</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basicExample" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Note</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>5</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere possimus modi libero incidunt ipsum deserunt ipsam maiores, aliquam magnam repellat culpa in deleniti dolorum doloremque dolor, consequatur harum dolorem? Dignissimos.</td>
                                        <td>02 Novembre 2002</td>

                                        <td>
                                            <a href="#" class="m-2"><i class="ri-message-3-line fs-4 lh-1 text-primary "></i></a>
                                            <a href="#" class="m-2"><i class="ri-settings-2-line fs-4 lh-1 text-primary "></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row end -->

        </div>

        <!-- Row end -->

        <!-- Row end -->

    </div>
</div>



<!-- Row end -->


<!-- App content ends -->


<!-- App body ends -->




<!-- Modal Fullscreen -->
<div class="modal fade" id="addNote" tabindex="-1" aria-labelledby="addNoteLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="addNoteLabel">
                    Formulaire d'Enregistrement de Note
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-body">
                    <div class="row gx-3">
                        <div class="col-sm-12">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h5 class="card-title">Nouvel Enregistrement</h5>
                                </div>
                                <form action="">
                                    <div class="card-body">
                                        <!-- Row start -->
                                        <div class="row gx-3">
                                            
                                            <div class="col-xl-3 col-sm-4 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="name"> Note</label>
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