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
<div class="app-body">

  <!-- User stats starts -->
  <div class="mx-n4 p-4 bg-primary mb-4">

    <div class="d-flex align-items-center flex-row flex-wrap">
      <img src="assets/images/user5.png" class="img-5x rounded-circle" alt="Admin Dashboard">

      <div class="ms-3 text-white">
        <h5 class="mb-1">Clarence Wyatt</h5>
        <h6 class="m-0 fw-light">UX Designer</h6>
      </div>


      <div class="ms-4 text-white d-flex align-items-center ps-4 border-start">
        <i class="ri-phone-line fs-2 lh-1 me-2"></i>
        <div>
          <h6 class="mb-1">Contact</h6>
          <p class="m-0 fw-light small">000 000 0000</p>
        </div>
      </div>
      <div class="ms-4 text-white d-flex align-items-center ps-4 border-start">
        <i class="ri-map-pin-line fs-2 lh-1 me-2"></i>
        <div>
          <h6 class="mb-1">Location</h6>
          <p class="m-0 fw-light small">United States</p>
        </div>
      </div>
      <div class="ms-auto d-flex gap-2">
        <a href="{{route('pages.voir-patient')}}" class="btn bg-primary-subtle position-relative">
          <span>Infos Basic</span>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">9+</span>
        </a>
        <a href="{{route('pages.liste-viste-patient')}}" class="btn bg-primary-subtle position-relative">
          <span>Visites</span>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">8</span>
        </a>
        <a href="{{route('pages.liste-analyse-patient')}}" class="btn bg-primary-subtle position-relative">
          <span>Analyses</span>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span>
        </a>
        <a href="{{route('pages.voir-patient')}}" class="btn bg-primary-subtle position-relative">
          <span>Soins administrés</span>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">5</span>
        </a>
        <a href="{{route('pages.voir-patient')}}" class="btn bg-primary-subtle position-relative">
          <span>Fichiers</span>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span>
        </a>
        <a href="{{route('pages.voir-patient')}}" class="btn bg-primary-subtle position-relative">
          <span>Notes</span>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">2</span>
        </a>
      </div>
    </div>

  </div>
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
                        <input name="" id=""  class="form-control" value="Enter email address">
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-4 col-12">
                      <div class="mb-3">
                        <label class="form-label" for="email">Hopital</label>
                        <input name="" id=""  class="form-control" value="Enter email address">
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
                              <tr>
                                <td>Serge Baldwin</td>
                                <td>Data Coordinator</td>
                                <td>Singapore</td>
                                <td>64</td>
                                <td>2022/04/09</td>
                                <td>$138,575</td>
                              </tr>
                              <tr>
                                <td>Zenaida Frank</td>
                                <td>Software Engineer</td>
                                <td>New York</td>
                                <td>63</td>
                                <td>2020/01/04</td>
                                <td>$125,250</td>
                              </tr>
                              <tr>
                                <td>Zorita Serrano</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>56</td>
                                <td>2022/06/01</td>
                                <td>$115,000</td>
                              </tr>
                              <tr>
                                <td>Jennifer Acosta</td>
                                <td>Junior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>43</td>
                                <td>2022/02/01</td>
                                <td>$75,650</td>
                              </tr>
                              <tr>
                                <td>Cara Stevens</td>
                                <td>Sales Assistant</td>
                                <td>New York</td>
                                <td>46</td>
                                <td>2021/12/06</td>
                                <td>$145,600</td>
                              </tr>
                              <tr>
                                <td>Hermione Butler</td>
                                <td>Regional Director</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2021/03/21</td>
                                <td>$356,250</td>
                              </tr>
                              <tr>
                                <td>Lael Greer</td>
                                <td>Systems Administrator</td>
                                <td>London</td>
                                <td>21</td>
                                <td>2020/02/27</td>
                                <td>$103,500</td>
                              </tr>
                              <tr>
                                <td>Jonas Alexander</td>
                                <td>Developer</td>
                                <td>San Francisco</td>
                                <td>30</td>
                                <td>2020/07/14</td>
                                <td>$86,500</td>
                              </tr>
                              <tr>
                                <td>Shad Decker</td>
                                <td>Regional Director</td>
                                <td>Edinburgh</td>
                                <td>51</td>
                                <td>2021/11/13</td>
                                <td>$183,000</td>
                              </tr>
                              <tr>
                                <td>Michael Bruce</td>
                                <td>Javascript Developer</td>
                                <td>Singapore</td>
                                <td>29</td>
                                <td>2021/06/27</td>
                                <td>$183,000</td>
                              </tr>
                              <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>New York</td>
                                <td>27</td>
                                <td>2021/01/25</td>
                                <td>$112,000</td>
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

                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>Customer Support</td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr>
                                <th>Name</th>
                                <th>Position</th>
                              </tr>
                            </tfoot>
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

                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Donna Snider</td>
                              <td>Customer Support</td>
                              <td>Customer Support</td>
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
                            </tr>
                            <tr>
                              <td>Garrett Winters</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>63</td>
                              <td>2021/07/25</td>
                              <td>$170,750</td>
                              <td>61</td>
                              <td>2021/04/25</td>
                              <td>$320,800</td>
                            </tr>
                            <tr>
                              <td>Ashton Cox</td>
                              <td>Junior Technical Author</td>
                              <td>San Francisco</td>
                              <td>66</td>
                              <td>2020/01/12</td>
                              <td>$86,000</td>
                              <td>61</td>
                              <td>2021/04/25</td>
                              <td>$320,800</td>
                            </tr>
                            <tr>
                              <td>Suki Burks</td>
                              <td>Developer</td>
                              <td>London</td>
                              <td>53</td>
                              <td>2020/10/22</td>
                              <td>$114,500</td>
                              <td>61</td>
                              <td>2021/04/25</td>
                              <td>$320,800</td>
                            </tr>
                            <tr>
                              <td>Prescott Bartlett</td>
                              <td>Technical Author</td>
                              <td>London</td>
                              <td>27</td>
                              <td>2021/05/07</td>
                              <td>$145,000</td>
                              <td>61</td>
                              <td>2021/04/25</td>
                              <td>$320,800</td>
                            </tr>
                            <tr>
                              <td>Gavin Cortez</td>
                              <td>Team Leader</td>
                              <td>San Francisco</td>
                              <td>22</td>
                              <td>2021/10/26</td>
                              <td>$235,500</td>
                              <td>61</td>
                              <td>2021/04/25</td>
                              <td>$320,800</td>
                            </tr>
                            <tr>
                              <td>Martena Mccray</td>
                              <td>Post-Sales support</td>
                              <td>Edinburgh</td>
                              <td>46</td>
                              <td>2021/03/09</td>
                              <td>$324,050</td>
                              <td>61</td>
                              <td>2021/04/25</td>
                              <td>$320,800</td>
                            </tr>
                            <tr>
                              <td>Cara Stevens</td>
                              <td>61</td>
                              <td>2021/04/25</td>
                              <td>$320,800</td>
                              <td>Sales Assistant</td>
                              <td>New York</td>
                              <td>46</td>
                              <td>2021/12/06</td>
                              <td>$145,600</td>
                            </tr>
                            <tr>
                              <td>Hermione Butler</td>
                              <td>Regional Director</td>
                              <td>London</td>
                              <td>47</td>
                              <td>2021/03/21</td>
                              <td>$356,250</td>
                              <td>61</td>
                              <td>2021/04/25</td>
                              <td>$320,800</td>
                            </tr>
                            <tr>
                              <td>Lael Greer</td>
                              <td>61</td>
                              <td>2021/04/25</td>
                              <td>$320,800</td>
                              <td>Systems Administrator</td>
                              <td>London</td>
                              <td>21</td>
                              <td>2020/02/27</td>
                              <td>$103,500</td>
                            </tr>
                            <tr>
                              <td>Jonas Alexander</td>
                              <td>Developer</td>
                              <td>San Francisco</td>
                              <td>30</td>
                              <td>2020/07/14</td>
                              <td>$86,500</td>
                              <td>61</td>
                              <td>2021/04/25</td>
                              <td>$320,800</td>
                            </tr>
                            <tr>
                              <td>Shad Decker</td>
                              <td>Regional Director</td>
                              <td>Edinburgh</td>
                              <td>51</td>
                              <td>2021/11/13</td>
                              <td>$183,000</td>
                              <td>61</td>
                              <td>2021/04/25</td>
                              <td>$320,800</td>
                            </tr>
                            <tr>
                              <td>Michael Bruce</td>
                              <td>Javascript Developer</td>
                              <td>Singapore</td>
                              <td>29</td>
                              <td>2021/06/27</td>
                              <td>$183,000</td>
                              <td>61</td>
                              <td>2021/04/25</td>
                              <td>$320,800</td>
                            </tr>
                            <tr>
                              <td>Donna Snider</td>
                              <td>Customer Support</td>
                              <td>New York</td>
                              <td>27</td>
                              <td>2021/01/25</td>
                              <td>$112,000</td>
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