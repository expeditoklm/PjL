<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Connexion | DME  </title>

    <!-- Meta -->
    <meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
 
    <link rel="shortcut icon" href="assets/images/favicon.svg" />

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/fonts/remix/remixicon.css" />
    <link rel="stylesheet" href="assets/css/main.min.css" />

</head>

<body class="login-bg">

    <!-- Auth wrapper starts -->
    <div class="auth-wrapper">

        <!-- Form starts -->
        <form method="POST" action="{{ route('register') }}">
            @csrf
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
                    <input type="text" id="email" name="email" class="form-control" placeholder="Entrez votre e-mail">
                   
                </div>



                <div class="mb-2">
                    <label class="form-label" for="pwd">Mot de passe<span class="text-danger">*</span></label>
                    <input type="password" id="pwd" name="mdp" class="form-control" placeholder="Entrez votre mot de passe" >
                   
                </div>

                <div class="row gx-3">

                    <div class="col-sm-6 col-12" id="">
                        <div class="mb-3">
                            <label class="form-label" for="inlineRadio1">Type de Personne<span class="text-danger">*</span></label>
                            <div class="m-0">
                                <div class="form-check form-check-inline" onclick="showOptions()">
                                    <input class="form-check-input" type="radio" name="typePersonne" id="typePersonne1" value="option1" >
                                    <label class="form-check-label" for="typePersonne1">Patient</label>
                                </div>
                                <div class="form-check form-check-inline" onclick="showOptions()">
                                    <input class="form-check-input" type="radio" name="typePersonne" id="typePersonne2" value="option2" >
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
                                    <input class="form-check-input" type="radio" name="personnelSante" id="inlineRadio1" value="option1" >
                                    <label class="form-check-label" for="inlineRadio1">Médecin</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="personnelSante" id="inlineRadio2" value="option2" >
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
                        <input type="text" id="text" name="idPersonnelSante" class="form-control" placeholder="Entrez identifiant personnel" >
                        
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="name">Pays</label>
                        <select class="form-select" name="pays" id="abcd" aria-label="Default select example" >
                            <option selected="">Selectionner votre Pays</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="name">Ville</label>
                        <select class="form-select" name="ville" id="abcd" aria-label="Default select example" >
                            <option selected="">Selectionner votre ville</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="name">Hopital d'Intervention</label>
                        <select class="form-select" name="hopital" id="abcd" aria-label="Default select example" >
                            <option selected="">Selectionner l'hopital d'intervention</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        
                    </div>
                </div>
                <div class="d-flex justify-content-end mb-4">
                    <a href="{{ route('password.request') }}" class="text-decoration-underline">Mot de passe oublié?</a>
                </div>
                <div class="mb-3 d-grid gap-2">
                    <button type="submit" class="btn btn-dark">Se connecter</button>
                    <a href="{{route('register')}}" class="btn btn-outline-dark">Pas de compte? S'inscrire</a>
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

</html>
