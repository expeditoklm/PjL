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
      <div class="card mb-3">
        <div class="card-body">
          <div class="custom-tabs-container">
            <ul class="nav nav-tabs" id="customTab3" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="tab-oneAA" data-bs-toggle="tab" href="#oneAA" role="tab" aria-controls="oneAA" aria-selected="true"><i class="ri-user-smile-line"></i>Consultation</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-twoAA" data-bs-toggle="tab" href="#twoAA" role="tab" aria-controls="twoAA" aria-selected="false" tabindex="-1"><i class="ri-money-dollar-circle-line"></i>Examens Cliniques</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-threeAA" data-bs-toggle="tab" href="#threeAA" role="tab" aria-controls="threeAA" aria-selected="false" tabindex="-1"><i class="ri-at-fill"></i>Prescriptions</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-fourAA" data-bs-toggle="tab" href="#fourAA" role="tab" aria-controls="threeAA" aria-selected="false" tabindex="-1"><i class="ri-at-fill"></i>Fichiers</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-fiveAA" data-bs-toggle="tab" href="#fiveAA" role="tab" aria-controls="fiveAA" aria-selected="false" tabindex="-1"><i class="ri-at-fill"></i>Sortie Medicale</a>
              </li>
            </ul>
            <div class="tab-content" id="customTabContent3">
              <div class="tab-pane fade show active" id="oneAA" role="tabpanel" aria-labelledby="tab-oneAA">

                <!-- Row start -->
                <div class="row gx-3">
                  <div class="col-xl-3 col-sm-4 col-12">
                    <div class="mb-3">
                      <label class="form-label" for="email">Motif</label>
                      <textarea name="" id="" cols="30" rows="5" class="form-control" value="Enter email address"></textarea>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-4 col-12">
                    <div class="mb-3">
                      <label class="form-label" for="email">Antécedants</label>
                      <textarea name="" id="" cols="30" rows="5" class="form-control" value="Enter email address"></textarea>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-4 col-12">
                    <div class="mb-3">
                      <label class="form-label" for="email">Anamnèse</label>
                      <textarea name="" id="" cols="30" rows="5" class="form-control" value="Enter email address"></textarea>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-4 col-12">
                    <div class="mb-3">
                      <label class="form-label" for="email">Signes Associé</label>
                      <textarea name="" id="" cols="30" rows="5" class="form-control" value="Enter email address"></textarea>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-4 col-12">
                    <div class="mb-3">
                      <label class="form-label" for="email">Allergies</label>
                      <textarea name="" id="" cols="30" rows="5" class="form-control" value="Enter email address"></textarea>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-4 col-12">
                    <div class="mb-3">
                      <label class="form-label" for="email">Diagnostique Retenu</label>
                      <textarea name="" id="" cols="30" rows="5" class="form-control" value="Enter email address"></textarea>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-4 col-12">
                    <div class="mb-3">
                      <label class="form-label" for="email">Bilan</label>
                      <textarea name="" id="" cols="30" rows="5" class="form-control" value="Enter email address"></textarea>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-4 col-12">
                    <div class="mb-3">
                      <label class="form-label" for="email">Médecin</label>
                      <input name="" id="" class="form-control" value="Enter email address">
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-4 col-12">
                    <div class="mb-3">
                      <label class="form-label" for="email">Hopital</label>
                      <input name="" id="" class="form-control" value="Enter email address">
                    </div>
                  </div>


                </div>
                <!-- Row end -->

              </div>
              <div class="tab-pane fade" id="twoAA" role="tabpanel" aria-labelledby="tab-twoAA">

                <!-- Row start -->
                <div class=" mb-3">

                  <div class="card mb-3">
                    <div class="card-header">
                      <h5 class="card-title">Simple Data Table</h5>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table id="basicExample" class="table table-striped">
                          <thead>
                            <tr>
                              <th>Name</th>
                              <th>Position</th>
                              <th>Office</th>
                              <th>Age</th>
                              <th>Start date</th>
                              <th>Salary</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Tiger Nixon</td>
                              <td>System Architect</td>
                              <td>Edinburgh</td>
                              <td>61</td>
                              <td>2021/04/25</td>
                              <td>$320,800</td>
                            </tr>

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Row end -->

              </div>
              <div class="tab-pane fade" id="threeAA" role="tabpanel" aria-labelledby="tab-threeAA">
                <!-- Row start -->
                <div class=" mb-3">
                  <div class="card mb-3">
                    <div class="card-header">
                      <h5 class="card-title">Soins Prescits</h5>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table id="spaceButtons" class="table table-striped">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Libellé</th>
                              <th>Détails</th>
                              <th>Action</th>

                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Donna Snider</td>
                              <td>Customer Support</td>
                              <td>Customer Support</td>
                              <td>
                                <a href="#" class="m-2"><i class="ri-message-3-line fs-4 lh-1 text-primary "></i></a>
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
                <div class="card mb-3">
                  <div class="card-header">
                    <h5 class="card-title">Analyses</h5>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="customButtons" class="table table-striped">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Libelle</th>
                            <th>Détails</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Donna Snider</td>
                            <td>Customer Support</td>
                            <td>Customer Support</td>
                            <td>
                              <a href="" class="m-2"><i class="ri-message-3-line fs-4 lh-1 text-primary "></i></a>
                              <a href="" class="m-2"><i class="ri-message-3-line fs-4 lh-1 text-primary "></i></a>
                              <a href="" class="m-2"><i class="ri-settings-2-line fs-4 lh-1 text-primary "></i></a>
                            </td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>

                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>

                <div class="card mb-3">
                  <div class="card-header">
                    <h5 class="card-title">Ordonnances</h5>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="apiCallbacks" class="table table-striped">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Libellé</th>
                            <th>Dose</th>
                            <th>Forme</th>
                            <th>Qte à Acheter</th>
                            <th>Nb-fois</th>
                            <th>Inter.de Prise</th>
                            <th>Date-premiere-prise</th>
                            <th>Autres Instructions</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2021/04/25</td>
                            <td>$320,800</td>
                            <td>61</td>
                            <td>2021/04/25</td>
                            <td>$320,800</td>
                            <td>
                              <a href="" class=""><i class="ri-message-3-line fs-4 lh-1 text-primary "></i></a>
                              <a href="" class=""><i class="ri-message-3-line fs-4 lh-1 text-primary "></i></a>
                              <a href="" class=""><i class="ri-settings-2-line fs-4 lh-1 text-primary "></i></a>
                            </td>
                          </tr>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Row end -->


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
              <div class="tab-pane fade" id="fiveAA" role="tabpanel" aria-labelledby="tab-fiveAA">

                <!-- Row start -->
                <div class=" mb-3">

                  <div class="card mb-3">
                    <div class="card-header">
                      <button class="btn btn-primary">Enregistrer</button>
                    </div>
                    <div class="card-body">
                      
                      <p><span class="text-primary">Sortie Medicale</span> : <span>Evacuation</span> <br></p>
                      <ul>
                        <li><span class="text-primary m-2">Motif Evacuation </span>: <span>Lorem ipsum dolor sit amet consecteturelit. Iure, doloribus!</span> </li>
                        <li><span class="text-primary m-2">Hopital Destination</span> : <span>Loremcdz</span> </li>
                        <li><span class="text-primary m-2">Motif Permission</span> : <span>Lorem ipsum dolor sit amet.</span> </li>
                        <li><span class="text-primary m-2">Période Permission</span> : <span>25/05/2024 - 20/10/2024</span> </li>
                        <li><span class="text-primary m-2">Cause Déces</span> : <span>jjqjj zdzjcj </span> </li>
                        <li><span class="text-primary m-2">Lieu Déces</span> : <span>Evacuation</span> </li>
                      </ul>
                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- Row end -->

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