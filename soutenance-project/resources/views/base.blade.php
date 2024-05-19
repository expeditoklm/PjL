<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.bootstrapget.com/demos/templatemonster/adminy-admin-template/widgets.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2024 00:11:31 GMT -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('nomPage') </title>

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
    <link rel="stylesheet" href="{{ asset('assets/fonts/remix/remixicon.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.min.css') }}" />

    @yield('css')


    <!-- Mega Menu -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/megamenu/css/megamenu.css') }}">

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
                                <img src="{{ asset('assets/images/logo.svg') }}" class="logo" alt="Bootstrap Gallery">
                            </a>
                            <a href="index.html" class="d-lg-none d-md-block">
                                <img src="{{ asset('assets/images/logo-sm.svg') }}" class="logo" alt="Bootstrap Gallery">
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
                                    @php
                                    $lesLogs = \App\Helpers\Base::recupLogs();
                                    @endphp

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
                                            <img src="{{ asset('assets/images/user3.png') }}" class="img-3x me-3 rounded-5" alt="Admin Theme" />
                                            <div class="m-0">
                                                <h6 class="mb-1 fw-semibold">{{ $log->personnel_sante_profes }} {{ $log->personnel_sante_nom }} {{ $log->personnel_sante_prenom }}</h6>
                                                <p class="mb-1">{{ $log->objet }}</p>
                                                <p class="small m-0 text-light">{{ $log->created_at }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif


                                    @else
                                    <h5 class="fw-semibold px-3 py-2 text-primary">Patients recemment consulter</h5>
                                    @php
                                    $lesLogs = \App\Helpers\Base::recupLogs();
                                    @endphp

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
                                            <img src="{{ asset('assets/images/user3.png') }}" class="img-3x me-3 rounded-5" alt="Admin Theme" />
                                            <div class="m-0">

                                                <h6 class="mb-1 fw-semibold">{{ $log->patient_nom }} {{ $log->patient_prenom }}</h6>

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
                        {{-- Importez le fichier du helper --}}
                        @php
                        use App\Helpers\Base;
                        // Appel du helper pour récupérer les informations de l'utilisateur
                        $userInfo = Base::getUserInfo();
                        @endphp

                        <!-- Account settings starts -->
                        <div class="dropdown ms-4">
                            <a id="userSettings" class="dropdown-toggle user-settings" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="me-2 text-truncate d-lg-block d-none">
                                    <span class="d-flex opacity-50 small">{{ $userInfo['personne']->nomPers }}</span>
                                    <span>{{ $userInfo['personne']->prenomPers }}</span>
                                </div>
                                <div class="position-relative">
                                    <img src="{{ asset('assets/images/user4.png') }}" class="rounded-5 img-3x" alt="Bootstrap Gallery" />
                                    <span class="user-status busy"></span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <div class="mx-3 my-2 d-grid">
                                    @if(count($userInfo['domainesIntervention']) > 0)
                                    @foreach ($userInfo['domainesIntervention'] as $domaineIntervention)
                                    <p class="mb-2">{{ $domaineIntervention->domaineIntervention->libDomaine }}</p>
                                    @endforeach
                                    @else
                                    <p>Aucun domaine d'intervention associé à cet utilisateur.</p>
                                    @endif
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger col-md-12">Déconnexion</button>
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
                    <div>
                        @auth
                        @if (auth()->user()->typePersonne !== 'Patient')
                        <a href="{{ route('pages.recherche-patient') }}" class="mb-1 text-primary d-flex align-items-center">
                            <i class="ri-arrow-left-s-line fs-3 lh-1 me-1 ms-n2"></i>Retour à l'acceuil
                        </a>
                        @endif
                        @endauth

                        <h4 class="mb-1 text-primary fw-semibold">@yield('titre')</h4>

                    </div>
                    @yield('datePeaker')


                    <!-- Page title ends -->
                </div>
                <div class="alert alert-success alert-dismissible fade show m-2" role="alert">
                    A simple success alert.
                    <a href="#" class="text-decoration-underline alert-link">Check it out!</a>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @php
                $info = App\Helpers\base::getUserOrPatientInfo();
                $personne = $info['personne'];
                $consultation = $info['consultation'];
                @endphp
                <!-- App Hero header ends -->
                <div class="app-body">

                    <!-- User stats starts -->
                    <div class="mx-n4 p-4 bg-primary mb-4">

                        <div class="d-flex align-items-center flex-row flex-wrap">
                            <img src="{{ asset('assets/images/user5.png ') }}" class="img-5x rounded-circle" alt="Admin Dashboard">

                            <div class="ms-3 text-white">
                                <h5 class="mb-1">{{ $personne->nomPers }} {{ $personne->prenomPers }}</h5>
                                <h6 class="m-0 fw-light">{{ $personne->professionPers }}</h6>
                            </div>


                            <div class="ms-4 text-white d-flex align-items-center ps-4 border-start">
                                <i class="ri-phone-line fs-2 lh-1 me-2"></i>
                                <div>
                                    <h6 class="mb-1">Contact</h6>
                                    <p class="m-0 fw-light small">{{ $personne->telPers }}</p>
                                </div>
                            </div>
                            <div class="ms-4 text-white d-flex align-items-center ps-4 border-start">
                                <i class="ri-map-pin-line fs-2 lh-1 me-2"></i>
                                <div>
                                    <h6 class="mb-1">Adresse</h6>
                                    <p class="m-0 fw-light small">{{ $personne->adressePers }}</p>
                                </div>
                            </div>

                            <div class="ms-auto d-flex gap-2">
                                <a href="{{ request()->route()->getName() == 'pages.voir-patient' ? 'javascript:void(0)' : route('pages.voir-patient', ['id' => session('patient_init')]) }}" class="btn bg-primary-subtle position-relative">
                                    <span>Infos Basic</span>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">9+</span>
                                </a>
                                <a href="{{ request()->route()->getName() == 'pages.liste-viste-patient' ? 'javascript:void(0)' : route('pages.liste-viste-patient') }}" class="btn bg-primary-subtle position-relative">
                                    <span>Visites</span>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">8</span>
                                </a>
                                <a href="{{ request()->route()->getName() == 'pages.liste-analyse-patient' ? 'javascript:void(0)' : route('pages.liste-analyse-patient') }}" class="btn bg-primary-subtle position-relative">
                                    <span>Analyses effectuées</span>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span>
                                </a>
                                <a href="{{ request()->route()->getName() == 'pages.liste-soin-patient' ? 'javascript:void(0)' : route('pages.liste-soin-patient') }}" class="btn bg-primary-subtle position-relative">
                                    <span>Soins Administré</span>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">5</span>
                                </a>
                                <a href="{{ request()->route()->getName() == 'pages.note-patient' ? 'javascript:void(0)' : route('pages.note-patient') }}" class="btn bg-primary-subtle position-relative">
                                    <span>Notes</span>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">2</span>
                                </a>
                            </div>

                        </div>

                    </div>

                    <!-- App body starts -->
                    @yield('content')
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

        <!-- *************
			************ JavaScript Files *************
		************* -->
        <!-- Required jQuery first, then Bootstrap Bundle JS -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/modernizr.js') }}"></script>

        <!-- Megamenu JS -->
        <script src="{{ asset('assets/vendor/megamenu/js/megamenu.js') }}"></script>
        <script src="{{ asset('assets/vendor/megamenu/js/custom.js') }}"></script>

        <!-- *************
			************ Vendor Js Files *************
		************* -->

        <!-- Apex Graphs -->
        <script src="{{ asset('assets/vendor/apex/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/apex/custom/graphs/sparkline.js') }}"></script>

        <!-- Custom JS files -->
        <script src="{{ asset('assets/js/custom.js') }}"></script>
        @yield('script')
</body>


<!-- Mirrored from www.bootstrapget.com/demos/templatemonster/adminy-admin-template/widgets.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2024 00:11:38 GMT -->

</html>