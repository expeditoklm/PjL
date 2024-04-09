@extends('base')

@section('css')
<!-- Data Tables -->
<link rel="stylesheet" href="assets/vendor/datatables/dataTables.bs5.css" />
<link rel="stylesheet" href="assets/vendor/datatables/dataTables.bs5-custom.css" />
<link rel="stylesheet" href="assets/vendor/datatables/buttons/dataTables.bs5-custom.css" />

@endsection
@section('content')
@section('titre')
LISTE ANALYSES
@endsection

<!-- User stats ends -->
<!-- App content start -->
<div class="app-body">

  <!-- Row start -->
  <div class="row gx-3">
    <div class="card mb-3">
      <div class="card-header d-flex justify-content-between align-items-center ">
        <h5 class="card-title">Liste des Analyses</h5>
        <button class="btn btn-primary ml-auto " data-bs-toggle="modal" data-bs-target="#addAnalyse">Nouveau</button>
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table id="toggleButtons" class="table table-striped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="card ">
                    <div class="list-group w-auto">
                      <a href="{{route('pages.analyse-patient')}}" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                        <img src="assets/images/products/product1.jpg" alt="Bootstrap Gallery" class="rounded-circle flex-shrink-0 img-3x" />
                        <div class="d-flex gap-2 w-100 justify-content-between">
                          <div>
                            <h6 class="mb-0">Type de l'analyse</h6>
                            <p class="mb-0 text-light">
                              Resultat de l'analyse.
                            </p>
                          </div>
                          <small class="text-light text-nowrap">date</small>
                        </div>
                      </a>
                    </div>
                  </div>

                </td>
                <td>
                  <div class="justify-content" style="margin-top: 30px;margin-left: 10px; ">
                    <a href="" class="m-2" data-bs-toggle="modal" data-bs-target="#modifVisite"><i class="ri-message-3-line fs-4 lh-1 text-primary "></i></a>
                    <a href="" class="m-2" data-bs-toggle="modal" data-bs-target="#supVisite"><i class="ri-settings-2-line fs-4 lh-1 text-primary "></i></a>
                  </div>
                </td>


                <!-- Modal Modification -->
                <div class="modal fade" id="modifVisite" tabindex="-1" aria-labelledby="modifVisiteLabel" aria-hidden="true">
                  <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title h4" id="modifVisiteLabel">
                          Formulaire de Modification de Visite
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="modal-body">
                          <div class="row gx-3">
                            <div class="col-sm-12">
                              <div class="card mb-3">
                                <div class="card-header">
                                  <h5 class="card-title">Modification de Visite</h5>
                                </div>
                                <form action="">
                                  <div class="card-body">
                                    <!-- Row start -->
                                    <div class="row gx-3">

                                      <div class="col-xl-3 col-sm-4 col-12">
                                        <div class="mb-3">
                                          <label class="form-label" for="name">Nom</label>
                                          <input name="" id="" type="text" class="form-control" placeholder="Ou entrez le type d'examen">
                                        </div>
                                      </div>
                                      <div class="col-xl-3 col-sm-4 col-12">
                                        <div class="mb-3">
                                          <label class="form-label" for="name">Prénom</label>
                                          <input name="" id="" type="text" class="form-control" placeholder="Ou entrez le type d'examen">
                                        </div>
                                      </div>

                                      <div class="col-xl-3 col-sm-4 col-12">
                                        <div class="mb-3">
                                          <label class="form-label" for="name">Télephone</label>
                                          <input name="" id="" type="text" class="form-control" placeholder="Ou entrez le type d'examen">
                                        </div>
                                      </div>

                                      <div class="col-xl-3 col-sm-4 col-12">
                                        <div class="mb-3">
                                          <label class="form-label" for="name">Relation avec le patient</label>
                                          <input name="" id="" type="text" class="form-control" placeholder="Ou entrez le type d'examen">
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
                </div>
                <!-- Modal suppression -->
                <div class="modal fade" id="supVisite" tabindex="-1" aria-labelledby="supVisiteLabel" aria-hidden="true">
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




              </tr>

            </tbody>

          </table>
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
<div class="modal fade" id="addAnalyse" tabindex="-1" aria-labelledby="addAnalyseLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="addAnalyseLabel">
          Formulaire d'Enregistrement d'Analyse Effectuée
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
                        <label class="form-label" for="name">Type Analyse</label>
                        <select class="form-select" aria-label="Default select example">
                          <option selected="">Selectionner le Mode de Sortie</option>
                          <option value="S">Sortie Normale</option>
                          <option value=" Médical">Contre Aical</option>
                        </select>
                        <input name="" class="form-control" placeholder="Ou entrez le type d'examen">

                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-4 col-12" >
                      <div class="mb-3">
                        <label class="form-label" for="name">Détails</label>
                        <textarea name="" cols="30" rows="5" class="form-control"></textarea>

                        
                      </div>
                    </div>
                    
                    
                    <div class="col-xl-3 col-sm-4 col-12">
                      <div class="mb-3">
                        <label class="form-label" for="name">Résultats</label>
                        <textarea name=""  cols="30" rows="5" class="form-control"></textarea>
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