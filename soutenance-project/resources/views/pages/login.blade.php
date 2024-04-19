<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.bootstrapget.com/demos/templatemonster/adminy-admin-template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2024 00:12:54 GMT -->

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

</head>

<body class="login-bg">

    <!-- Auth wrapper starts -->
    <div class="auth-wrapper">

        <!-- Form starts -->
        <form action="https://www.bootstrapget.com/demos/templatemonster/adminy-admin-template/index.html">

            <!-- Authbox starts -->
            <div class="auth-box">

                <!-- Logo starts -->
                <a href="index.html" class="auth-logo mb-4">
                    <img src="assets/images/logo.svg" alt="Bootstrap Gallery" />
                </a>
                <!-- Logo ends -->

                <h4 class="mb-4">Connexion</h4>

                <div class="mb-3">
                    <label class="form-label" for="email">E-mail<span class="text-danger">*</span></label>
                    <input type="text" id="email" class="form-control" placeholder="Entrez votre e-mail">
                </div>

                <div class="mb-2">
                    <label class="form-label" for="pwd">Mot de passe<span class="text-danger">*</span></label>
                    <input type="password" id="pwd" class="form-control" placeholder="Entrez votre mot de passe">
                </div>

                <div class="row gx-3">

                    <div class="col-sm-6 col-12" id="">
                        <div class="mb-3">
                            <label class="form-label" for="inlineRadio1">Type de Personne<span class="text-danger">*</span></label>
                            <div class="m-0">
                                <div class="form-check form-check-inline" onclick="showOptions()">
                                    <input class="form-check-input" type="radio" name="typePersonne" id="typePersonne1" value="option1" checked>
                                    <label class="form-check-label" for="typePersonne1">Patient</label>
                                </div>
                                <div class="form-check form-check-inline" onclick="showOptions()">
                                    <input class="form-check-input" type="radio" name="typePersonne" id="typePersonne2" value="option2">
                                    <label class="form-check-label" for="typePersonne2">Pers.Santé</label>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-12" id="typePersonnelDeSante" style="display: none;">
                        <div class="mb-3">
                            <label class="form-label" for="inlineRadio1">Type de Personnel de Santé <span class="text-danger">*</span> </label>
                            <div class="m-0">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="personnelSante" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Médecin</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="personnelSante" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Infirmié</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="personnelSante" id="inlineRadio3" value="option3">
                                    <label class="form-check-label" for="inlineRadio3">Technicien Labo</label>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>

                <div class="div" id="infoPersonnelSante" style="display: none;">
                    <div class="mb-3">
                        <label class="form-label" for="email">Identifiant Personnel Santé<span class="text-danger">*</span></label>
                        <input type="text" id="text" class="form-control" placeholder="Entrez identifiant personnel">
                    </div>


                    <div class="mb-3">
                        <label class="form-label" for="name">Pays</label>
                        <select class="form-select" id="abcd" aria-label="Default select example">
                            <option selected="">Selectionner votre Pays</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>



                    <div class="mb-3">
                        <label class="form-label" for="name">Ville</label>
                        <select class="form-select" id="abcd" aria-label="Default select example">
                            <option selected="">Selectionner votre ville</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>


                    <div class="mb-3">
                        <label class="form-label" for="name">Hopital d'Intervention</label>
                        <select class="form-select" id="abcd" aria-label="Default select example">
                            <option selected="">Selectionner l'hopital d'intervention</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                </div>






                <div class="d-flex justify-content-end mb-4">
                    <a href="{{route('pages.forgot-password')}}" class="text-decoration-underline">Mot de passe oublié?</a>
                </div>

                <div class="mb-3 d-grid gap-2">
                    <a href="{{route('pages.recherche-patient')}}" class="btn btn-dark">Se connecter</a>
                    <a href="{{route('pages.sign-up')}}" class="btn btn-outline-dark">Pas de compte? S'inscrire</a>
                </div>

            </div>
            <!-- Authbox ends -->

        </form>
        <!-- Form ends -->

    </div>
    <!-- Auth wrapper ends -->


    <script>
        function showOptions() {
            var option1 = document.getElementById('typePersonne1');
            var option2 = document.getElementById('typePersonne2');
            var optionsDiv = document.getElementById('typePersonnelDeSante');
            var infoPersonnelSanteDiv = document.getElementById('infoPersonnelSante');
            

            if (option1.checked) {
                optionsDiv.style.display = 'none';
                infoPersonnelSanteDiv.style.display = 'none';
            } else if (option2.checked) {
                optionsDiv.style.display = 'block';
                infoPersonnelSanteDiv.style.display = 'block';
            }
        }
    </script>




</body>


<!-- Mirrored from www.bootstrapget.com/demos/templatemonster/adminy-admin-template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2024 00:12:54 GMT -->

</html>