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
                                <a class="nav-link active" id="tab-oneAA" data-bs-toggle="tab" href="#oneAA" role="tab" aria-controls="oneAA" aria-selected="true"><i class="ri-survey-line "></i>Analyse</a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="tab-fourAA" data-bs-toggle="tab" href="#fourAA" role="tab" aria-controls="threeAA" aria-selected="false" tabindex="-1"><i class="ri-attachment-line"></i>Fichiers</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="customTabContent3">
                            <div class="tab-pane fade show active" id="oneAA" role="tabpanel" aria-labelledby="tab-oneAA">

                                <!-- Row start -->
                                <div class="row gx-3">

                                    <div class="card-header mb-4 d-flex justify-content-between align-items-center ">
                                        <h5 class="card-title"></h5>
                                        <button class="btn btn-primary ml-auto " data-bs-toggle="modal" data-bs-target="#modifAnalyse">Modifier</button>
                                    </div>


                                    <div class="col-xl-3 col-sm-4 col-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="email">Type Analyse</label>
                                            <input name="typeAnalyse" id="" class="form-control" value="{{ $item->typeAnalyse->libAnalyse}}">
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-sm-4 col-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="email">Technicien Labo</label>
                                            <input name="technicien" id="" class="form-control" value="{{ $item->personnelSante->libAnalyse}}">
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-4 col-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="email">Hopital</label>
                                            <input name="hopital" id="" class="form-control" value="Enter email address">
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-4 col-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="email">Date</label>
                                            <input name="date" id="" class="form-control" value="Enter email address">
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
                                            <div class="card-header mb-4 d-flex justify-content-between align-items-center ">
                                                <h5 class="card-title">Fichiers issus de l'analyse</h5>
                                                <button class="btn btn-primary ml-auto " data-bs-toggle="modal" data-bs-target="#addFichierAnalyse">Nouveau</button>
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
                                                                <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modifFichierAnalyse">Modifier</button>
                                                                <button class="btn btn-primary">Telecharger</button>
                                                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#suppFichierAnalyse">Supprimer</button>
                                                            </div>

                                                            <!-- Modal Fullscreen -->
                                                            <div class="modal fade" id="modifFichierAnalyse" tabindex="-1" aria-labelledby="addFichierAnalyseLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-fullscreen">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title h4" id="addFichierAnalyseLabel">
                                                                                Formulaire de Modification de Fichier
                                                                            </h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row gx-3">
                                                                                <div class="col-sm-12">
                                                                                    <div class="card mb-3">
                                                                                        <div class="card-header">
                                                                                            <h5 class="card-title">Modifier le Fichier</h5>
                                                                                        </div>
                                                                                        <form action="">
                                                                                            <div class="card-body">

                                                                                                <!-- Row start -->
                                                                                                <div class="row gx-3">
                                                                                                    <div class="col-xl-3 col-sm-4 col-12">

                                                                                                        <div class="mb-3">
                                                                                                            <label class="form-label" for="name">Libellé Fichier</label>
                                                                                                            <input name="" id="" type="text" class="form-control" placeholder="Ou entrez le type d'examen">
                                                                                                        </div>


                                                                                                    </div>
                                                                                                    <div class="col-xl-3 col-sm-4 col-12">


                                                                                                        <div class="mb-3">
                                                                                                            <label class="form-label" for="name"> Fichier</label>
                                                                                                            <input name="" id="" type="file" class="form-control" placeholder="Ou entrez le type d'examen">
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                                <!-- Row end -->
                                                                                            </div>
                                                                                            <div class="card-footer">
                                                                                                <div class="d-flex gap-2 justify-content-end">
                                                                                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                                                                                                    <button type="button" class="btn btn-primary">Modifier</button>
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

                                                            <div class="modal fade" id="suppFichierAnalyse" tabindex="-1" aria-labelledby="suppFichierAnalyseLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-sm">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body p-4 text-center">
                                                                            <h5 class="text-primary">Continuez la suppression?</h5>
                                                                            <p class="mb-0">
                                                                                Voulez-vous vraiment supprimer cette information
                                                                                du patient?
                                                                            </p>
                                                                        </div>
                                                                        <div class="modal-footer flex-nowrap p-0">
                                                                            <button type="button" class="btn text-primary fs-6 col-6 m-0 border-end">
                                                                                <strong>Oui, Supprimer</strong>
                                                                            </button>
                                                                            <button type="button" class="btn text-dark fs-6 col-6 m-0" data-bs-dismiss="modal">
                                                                                Non merci
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
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

<!-- Modal Fullscreen -->
<div class="modal fade" id="modifAnalyse" tabindex="-1" aria-labelledby="modifAnalyseLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="modifAnalyseLabel">
                    Formulaire d'Analyse Effectuée
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-body">
                    <div class="row gx-3">
                        <div class="col-sm-12">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h5 class="card-title">Modifier Analyse Effectuée</h5>
                                </div>
                                <div class="card-body">
                                    <!-- Row start -->
                                    <div class="row gx-3">
                                        <div class="col-xl-3 col-sm-4 col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="name">Type Analyse</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected="">Selectionner le Type Analyse</option>
                                                    <option value="S">Sortie Normale</option>
                                                    <option value=" Médical">Contre Aical</option>
                                                </select>
                                                <input name="" class="form-control" placeholder="Ou entrez le Type Analyse">
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-4 col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="email">Détails</label>
                                                <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-4 col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="phn">Résultats</label>
                                                <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Row end -->
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex gap-2 justify-content-end">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                                        <button type="button" class="btn btn-primary">Modifier</button>
                                    </div>
                                </div>
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

<!-- Modal Fullscreen -->
<div class="modal fade" id="addFichierAnalyse" tabindex="-1" aria-labelledby="addFichierAnalyseLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="addFichierAnalyseLabel">
                    Formulaire d'Enregistrement de Fichier
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
                                                    <label class="form-label" for="name">Libellé Fichier</label>
                                                    <input name="" id="" type="text" class="form-control" placeholder="Ou entrez le type d'examen">
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-sm-4 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="name"> Fichier</label>
                                                    <input name="" id="" type="file" class="form-control" placeholder="Ou entrez le type d'examen">
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





<!-- App body starts -->

<!-- User stats ends -->
<!-- App content start -->