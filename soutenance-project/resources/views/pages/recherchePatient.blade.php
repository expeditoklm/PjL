<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.bootstrapget.com/demos/templatemonster/adminy-admin-template/widgets.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2024 00:11:31 GMT -->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bootstrap Gallery - Adminy Bootstrap 5 Dashboard</title>

  <!-- Meta -->
  <meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
  <meta name="author" content="Bootstrap Gallery" />
  <link rel="canonical" href="https://www.bootstrap.gallery/">
  <meta property="og:url" content="https://www.bootstrap.gallery/">
  <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
  <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
  <meta property="og:type" content="Website">
  <meta property="og:site_name" content="Bootstrap Gallery">
  <link rel="shortcut icon" href="assets/images/favicon.svg" />

  <!-- *************
			************ CSS Files *************
		************* -->
  <link rel="stylesheet" href="assets/fonts/remix/remixicon.css" />
  <link rel="stylesheet" href="assets/css/main.min.css" />


  <!-- Data Tables -->
  <link rel="stylesheet" href="assets/vendor/datatables/dataTables.bs5.css" />
  <link rel="stylesheet" href="assets/vendor/datatables/dataTables.bs5-custom.css" />
  <link rel="stylesheet" href="assets/vendor/datatables/buttons/dataTables.bs5-custom.css" />


  <!-- Mega Menu -->
  <link rel="stylesheet" href="assets/vendor/megamenu/css/megamenu.css">

  <!-- *************
			************ Vendor Css Files *************
		************ -->
</head>

<body>
  <!-- Page wrapper starts -->
  <div class="page-wrapper">

    <!-- Main container starts -->
    <div class="main-container">

      <!-- Sidebar wrapper starts -->
      <nav id="sidebar" class="sidebar-wrapper">

        <div class="sidebar-container">

          <!-- Sidebar menu starts -->
          <div class="sidebar-menu">
            <!-- Top curve -->
            <div class="nav-circle1"></div>
            <div class="nav-square1"></div>
            <a href="index.html" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="CRM Dashboard"></i>
              <i class="ri-bar-chart-line"></i>
            </a>
            <a href="{{route('pages.recherche-patient')}}" class="active" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Widgets">
              <i class="ri-pie-chart-line"></i>
            </a>
            <a href="{{route('pages.recherche-patient')}}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Support">
              <i class="ri-shake-hands-line"></i>
            </a>
            <a href="contacts.html" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Contacts">
              <i class="ri-emoji-sticker-line"></i>
            </a>
            <a href="subscribers.html" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Subscribers">
              <i class="ri-profile-line"></i>
            </a>
            <a href="profile.html" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="User Profile">
              <i class="ri-user-smile-line"></i>
            </a>
            <!-- Bottom curve -->
            <div class="nav-circle2"></div>
            <div class="nav-square2"></div>
          </div>
          <!-- Sidebar menu ends -->

        </div>
      </nav>
      <!-- Sidebar wrapper ends -->

      <!-- App container starts -->
      <div class="app-container">

        <!-- App header starts -->
        <div class="app-header d-flex align-items-center">

          <!-- App logo starts -->
          <div class="d-flex align-items-center">

            <!-- App brand starts -->
            <div class="app-brand me-3 d-flex align-items-center">
              <a href="index.html" class="d-lg-block d-none">
                <img src="assets/images/logo.svg" class="logo" alt="Bootstrap Gallery">
              </a>
              <a href="index.html" class="d-lg-none d-md-block">
                <img src="assets/images/logo-sm.svg" class="logo" alt="Bootstrap Gallery">
              </a>
            </div>
            <!-- App brand ends -->



          </div>
          <!-- App logo ends -->

          <!-- App header actions starts -->
          <div class="header-actions">

            <div class="d-sm-flex d-none">

              <!-- Settings starts -->
              <a class="dropdown-toggle d-flex" href="account-settings.html" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Settings" data-bs-custom-class="custom-tooltip-danger">
                <i class="ri-settings-2-line fs-4 lh-1 text-primary"></i>
              </a>
              <!-- Settings end -->

              <!-- Messages starts -->
              <div class="dropdown">
                <a class="dropdown-toggle d-flex position-relative" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="ri-message-3-line fs-4 lh-1 text-primary"></i>
                  <span class="count-label"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                  @if (Auth::check() && Auth::user()->typePersonne=== 'Patient' )
                  <h5 class="fw-semibold px-3 py-2 text-primary">Messages</h5>
                 

                  @if($lesLogs->isEmpty())
                  <div class="dropdown-item">
                    <div class="d-flex py-2">
                      <div class="m-0">

                        <h6 class="mb-1 fw-semibold">Aucun log disponible.</h6>

                      </div>
                    </div>
                  </div>
                  @else
                  @foreach($lesLogs as $log)
                  <div class="dropdown-item">
                    <div class="d-flex py-2">
                      <img src="assets/images/user3.png" class="img-3x me-3 rounded-5" alt="Admin Theme" />
                      <div class="m-0">
                        <h6 class="mb-1 fw-semibold">{{ $log->personnel_sante_nom }}</h6>
                        <p class="mb-1">{{ $log->objet }}</p>
                        <p class="small m-0 text-light">{{ $log->created_at }}</p>
                      </div>
                    </div>
                  </div>
                  @endforeach
                @endif


                @else
                  <h5 class="fw-semibold px-3 py-2 text-primary">Patients recemment consulter</h5>
                

                  @if($lesLogs->isEmpty())
                  <div class="dropdown-item">
                    <div class="d-flex py-2">
                      <div class="m-0">

                        <h6 class="mb-1 fw-semibold">Aucun log disponible.</h6>

                      </div>
                    </div>
                  </div>
                  @else
                  @foreach($lesLogs as $log)
                  <div class="dropdown-item">
                    <div class="d-flex py-2">
                      <img src="assets/images/user3.png" class="img-3x me-3 rounded-5" alt="Admin Theme" />
                      <div class="m-0">

                        <h6 class="mb-1 fw-semibold">{{ $log->patient_nom }}</h6>

                        <p class="small m-0 text-light">{{ $log->created_at }}</p>
                      </div>
                    </div>
                  </div>
                  @endforeach
                  @endif
                  @endif



                  <div class="d-grid mx-3 my-1">
                    <a href="{{ route('pages.voire-notification') }}" class="btn btn-primary">View all</a>
                  </div>
                </div>
              </div>
              <!-- Messages ends -->



            </div>



            <!-- Account settings starts -->
            <div class="dropdown ms-4">
              <a id="userSettings" class="dropdown-toggle user-settings" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="me-2 text-truncate d-lg-block d-none">
                  <span class="d-flex opacity-50 small">{{$personne->professionPers }}</span>
                  <span>{{$personne->nomPers }} {{$personne->prenomPers }}</span>
                </div>
                <div class="position-relative">
                  <img src="assets/images/user4.png" class="rounded-5 img-3x" alt="Bootstrap Gallery" />
                  <span class="user-status busy"></span>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end">
                <div class="mx-3 my-2 d-grid">
                  <p class="mb-2">Thérapeute (ergothérapeute, physiothérapeute, orthophoniste, etc.) </p>
                  <p class="mb-2">Chirurgien</p>
                  <p class="mb-2">Technicien de laboratoire médical</p>
                  <p class="mb-2">Médecin généraliste, Spécialiste</p>
                  <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger col-md-8 ">Logout</button>
                                    </form>
                </div>
              </div>
            </div>
            <!-- Account settings ends -->

          </div>
          <!-- App header actions ends -->

        </div>
        <!-- App header ends -->

        <!-- App hero header starts -->
        <div class="app-hero-header d-flex align-items-center">

          <!-- Page title starts -->
          <div class="col-md-12 col-12">
            <div class="">
              <div class="card-body">
                <div class="">
                  <a href="" class=" btn btn-primary col-md-12 col-12" data-bs-toggle="modal" data-bs-target="#addPatientInfo" style="color:white" id="abc">NOUVEAU</a>
                </div>

                <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                  A simple success alert.
                  <a href="#" class="text-decoration-underline alert-link">Check it out!</a>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

              </div>
            </div>
          </div>

          <!-- Page title ends -->
        </div>
        <!-- App Hero header ends -->
        <form action="{{ route('pages.recherche-patient') }}" method="post">
          @csrf
          <!-- App body starts -->
          <div class="app-body">

            <!-- Row start -->
            <div class="row gx-3">
              <div class="col-sm-4 col-12">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="m-0">
                      <label class="form-label" for="abcd">Pays</label>
                      <select class="form-select" name="pays" id="abcd" aria-label="Default select example">
                        <option selected="">Selectionner le pays</option>
                        <option value="Benin">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 col-12">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="m-0">
                      <label class="form-label" for="abcd">Type de Pièce</label>
                      <select class="form-select" name="typePiece" id="abcd" aria-label="Default select example">
                        <option selected="">Selectionner le type de pièce</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 col-12">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="m-0">
                      <label class="form-label" for="abc">CIN</label>
                      <input type="text" name="cin" class="form-control" id="abc" placeholder="Entrez le numero nationnal">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 col-12">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="m-0">
                      <label class="form-label" for="abc">Nom</label>
                      <input type="text" name="nomPers" class="form-control" id="abc" placeholder="Entrez le nom">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 col-12">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="m-0">
                      <label class="form-label" for="abc">Prénom</label>
                      <input type="text" name="prenomPers" class="form-control" id="abc" placeholder="Entrez un prénom">
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 col-12">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="m-0">
                      <label class="form-label" for="abc">Nom de la mère</label>
                      <input type="text" name="nomMere" class="form-control" id="abc" placeholder="Entrez le nom de la mère">
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12 col-12">
                <div class=" mb-3">
                  <div class="card-body">
                    <div class="m-4">
                      <button type="submit" class=" btn btn-primary col-md-12 col-12 mb-4" style="color:white" id="abc">RECHERCHER</button>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </form>

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
  <!-- Page wrapper ends -->

  <!-- Modal Fullscreen -->
  <div class="modal fade" id="addPatientInfo" tabindex="-1" aria-labelledby="addPatientInfoLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title h4" id="addPatientInfoLabel">
            Formulaire d'Enregistrement du Patient

          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

        </div>

        <div class="modal-body">
          <div class="row gx-3">
            <div class="col-sm-12">
              <div class="card mb-3">
                <div class="card-header">
                  <h5 class="card-title">Enregistrer Patient</h5>
                </div>
                <form action="">
                  <div class="card-body">

                    <!-- Row start -->
                    <div class="row gx-3">
                      <div class="col-xl-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label" for="name">Nom</label>
                          <input name="" id="" type="text" class="form-control" placeholder="Entrez le nom du patient">
                        </div>
                      </div>
                      <div class="col-xl-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label" for="name">Prénoms</label>
                          <input name="" id="" type="text" class="form-control" placeholder="Entrez les prénoms du patient">
                        </div>
                      </div>
                      <div class="col-xl-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label" for="name">Sexe</label>
                          <input name="" id="" type="text" class="form-control" placeholder="Entrez le sexe du patient">
                        </div>
                      </div>
                      <div class="col-xl-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label" for="name">Date de Naissance</label>
                          <input name="" id="" type="date" class="form-control" placeholder="Entrez la date de naissance du patient">
                        </div>
                      </div>
                      <div class="col-xl-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label" for="name">Télephone</label>
                          <input name="" id="" type="number" class="form-control" placeholder="Entrez le télephone du patient">
                        </div>
                      </div>
                      <div class="col-xl-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label" for="name">E-mail</label>
                          <input name="" id="" type="email" class="form-control" placeholder="Entrez l'e-mail du patient">
                        </div>
                      </div>

                      <div class="col-xl-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label" for="name">Adresse</label>
                          <input name="" id="" type="text" class="form-control" placeholder="Entrez l'adresse du patient">
                        </div>
                      </div>

                      <div class="col-xl-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label" for="name">Profession</label>
                          <input name="" type="text" id="" class="form-control" placeholder="Entrez la profession du patient">
                        </div>
                      </div>

                      <div class="col-xl-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label" for="name">Pays</label>
                          <select class="form-select" id="abcd" aria-label="Default select example">
                            <option selected="">Selectionner le pays</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                        </div>
                      </div>


                      <div class="col-xl-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label" for="name">Ville</label>
                          <select class="form-select" id="abcd" aria-label="Default select example">
                            <option selected="">Selectionner la ville</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                        </div>
                      </div>


                      <div class="col-xl-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label" for="name">Nom du père</label>
                          <input name="" type="text" id="" class="form-control" placeholder="Entrez le nom du père">
                        </div>
                      </div>



                      <div class="col-xl-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label" for="name">Prénom du père</label>
                          <input name="" id="" type="text" class="form-control" placeholder="Entrez le prénom du père">
                        </div>
                      </div>



                      <div class="col-xl-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label" for="name">Pathologie du père</label>
                          <input name="" id="" type="text" class="form-control" placeholder="Entrez l'antécédant du père">
                        </div>
                      </div>


                      <div class="col-xl-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label" for="name">Nom de la mère</label>
                          <input name="" type="text" id="" class="form-control" placeholder="Entrez le nom de la mère">
                        </div>
                      </div>


                      <div class="col-xl-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label" for="name">Prénom de la mère</label>
                          <input name="" type="text" id="" class="form-control" placeholder="Entrez le prénom de la mère">
                        </div>
                      </div>


                      <div class="col-xl-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label" for="name">Pathologie de la mère</label>
                          <input name="" type="text" id="" class="form-control" placeholder="Entrez l'antécédant de la mère">
                        </div>
                      </div>


                      <div class="col-xl-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label" for="name">Groupe Sanguin</label>
                          <select class="form-select" id="abcd" aria-label="Default select example">
                            <option selected="">Selectionner le groupe sanguin</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                        </div>
                      </div>


                      <div class="col-xl-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label" for="name">Type de pièce</label>
                          <select class="form-select" id="abcd" aria-label="Default select example">
                            <option selected="">Selectionner le type de pièce</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                        </div>
                      </div>


                      <div class="col-xl-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label" for="name">Numero de pièce</label>
                          <input name="" type="number" id="" class="form-control" placeholder="Entrez le numero de pièce du patient">
                        </div>
                      </div>


                      <div class="col-xl-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label" for="name">Pièce</label>
                          <input name="" id="" type="file" class="form-control" placeholder="Entrez la pièce du patient">
                        </div>
                      </div>


                    </div>
                    <!-- Row end -->
                  </div>
                  <div class="card-footer">
                    <div class="d-flex gap-2 justify-content-end">
                      <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                      <button type="button" class="btn btn-primary">Modifer</button>
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







































  <!-- *************
			************ JavaScript Files *************
		************* -->
  <!-- Required jQuery first, then Bootstrap Bundle JS -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/modernizr.js"></script>

  <!-- Megamenu JS -->
  <script src="assets/vendor/megamenu/js/megamenu.js"></script>
  <script src="assets/vendor/megamenu/js/custom.js"></script>

  <!-- *************
			************ Vendor Js Files *************
		************* -->

  <!-- Apex Graphs -->
  <script src="assets/vendor/apex/apexcharts.min.js"></script>
  <script src="assets/vendor/apex/custom/graphs/sparkline.js"></script>

  <!-- Custom JS files -->
  <script src="assets/js/custom.js"></script>
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
</body>


<!-- Mirrored from www.bootstrapget.com/demos/templatemonster/adminy-admin-template/widgets.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2024 00:11:38 GMT -->

</html>