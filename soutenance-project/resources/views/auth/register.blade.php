<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Inscription | DME </title>

    <meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" />
    <link rel="stylesheet" href="assets/fonts/remix/remixicon.css" />
    <link rel="stylesheet" href="assets/css/main.min.css" />
    <!-- Mega Menu -->
    <link rel="stylesheet" href="assets/vendor/megamenu/css/megamenu.css">
</head>
<body class="login-bg">
    <!-- Page wrapper starts -->
    <div class="page-wrapper">
        <!-- Main container starts -->
        <div class="main-container">
            <!-- App container starts -->
            <div class="app-container">
                <!-- App Hero header ends -->
                <!-- App body starts -->
                <div class="app-body">

                    <!-- Row start -->
                    <div class="row gx-3">
                        <div class="col-sm-12">
                            <div class="card mb-3 border border-primary border-5 rounded-8">
                                <div class="card-header">
                                    <h5 class="card-title">FORMULAIRE D'INSCRIPTION</h5>
                                </div>

                                @if(session('error'))
                                <div class="alert alert-danger alert-dismissible fade show m-2" role="alert">
                                    <div class="text-center"> <!-- Ajoutez une classe text-center à la div parente -->
                                        <span class="fw-bold d-block mx-auto">{{ session('error') }}</span> <!-- Utilisez mx-auto pour centrer le span -->
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif

                                

                                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="card-body">
                                        <div class="accordion" id="accordionForm">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Information de Base
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionForm">
                                                    <div class="accordion-body">

                                                        <!-- Row start -->
                                                        <div class="row gx-3">
                                                            <div class="col-xl-3 col-sm-4 col-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="name">Nom</label>
                                                                    <input name="nom" id="" type="text" class="form-control" placeholder="Entrez votre nom " value="{{ old('nom') }}">
                                                                    <!-- Affichage des erreurs -->
                                                                  
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-sm-4 col-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="name">Prénoms</label>
                                                                    <input name="prenom" id="" type="text" class="form-control" placeholder="Entrez vos prénoms ">
                                                                  
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-sm-4 col-12">
                                                                <div class="mb-3">
                                                                    <div>
                                                                        <div class="col-sm-6 col-12">
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="inlineRadio1">Sexe</label>
                                                                                <div class="m-0 d-flex">
                                                                                    <div class="form-check form-check-inline d-flex" >
                                                                                        <input class="form-check-input" type="radio" name="sexe" id="typePnne1" value="Masculin" checked>
                                                                                        <label class="form-check-label" for="typePenne1">Masculin</label>
                                                                                    </div>
                                                                                    <div class="form-check form-check-inline d-flex" >
                                                                                        <input class="form-check-input" type="radio" name="sexe" id="typePe2" value="Feminin">
                                                                                        <label class="form-check-label" for="typenne2">Féminin</label>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-sm-4 col-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="name">Date de Naissance</label>
                                                                    <input name="dateNaiss" id="" type="date" class="form-control" placeholder="Entrez votre date de naissance ">
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-sm-4 col-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="name">Télephone</label>
                                                                    <input name="tel" id="" type="tel" class="form-control" placeholder="Entrez votre numero télephone ">
                                                                    
                                                                </div>
                                                            </div>


                                                            <div class="col-xl-3 col-sm-4 col-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="name">Adresse</label>
                                                                    <input name="adresse" id="" type="text" class="form-control" placeholder="Entrez votre adresse ">
                                                                    
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3 col-sm-4 col-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="name">Profession</label>
                                                                    <input name="profession" type="text" id="" class="form-control" placeholder="Entrez votre profession ">
                                                                    
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3 col-sm-4 col-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="name">Pays</label>
                                                                    <select class="form-select" id="abcd" name="pays" aria-label="Default select example">
                                                                        <option selected="">Selectionner votre pays</option>
                                                                        <option value="Benin">Bénin</option>
                                                                        <option value="Nigeria">Nigéria</option>
                                                                        <option value="Togo">Togo</option>
                                                                    </select>
                                                                   
                                                                </div>
                                                            </div>


                                                            <div class="col-xl-3 col-sm-4 col-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="name">Ville</label>
                                                                    <select class="form-select" name="ville" id="abcd" aria-label="Default select example">
                                                                        <option selected="">Selectionner votre ville</option>
                                                                        <option value="Cotonou">Cotonou</option>
                                                                        <option value="Abuja">Abuja</option>
                                                                        <option value="Lomé">Lomé</option>
                                                                    </select>
                                                                   
                                                                </div>
                                                            </div>


                                                            <div class="col-xl-3 col-sm-4 col-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="name">E-mail</label>
                                                                    <input name="email" id="" type="email" class="form-control" placeholder="Entrez votre e-mail ">
                                                                    
                                                                </div>
                                                            </div>


                                                            <div class="col-xl-3 col-sm-4 col-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="name">Mot de Passe</label>
                                                                    <input name="password"  id="" type="password" class="form-control" placeholder="Entrez votre mot de passe">
                                                                   
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3 col-sm-4 col-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="name">Confirmer le mot de passe</label>
                                                                    <input name="password_confirmation"  id="" type="password" class="form-control" placeholder="Confirmer votre mot de passe">
                                                               
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3 col-sm-4 col-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="name">Type de pièce</label>
                                                                    <select class="form-select" name="typePiece" id="abcd" aria-label="Default select example">
                                                                        <option selected="">Selectionner le type de pièce</option>
                                                                        <option value="1">Carte d'identite</option>
                                                                        <option value="2">CIP</option>
                                                                        <option value="3">Carte Biométrique</option>
                                                                    </select>
                                                                 
                                                                </div>
                                                            </div>


                                                            <div class="col-xl-3 col-sm-4 col-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="name">Numero de pièce</label>
                                                                    <input name="numPiece" type="number" id="" class="form-control" placeholder="Entrez le numero de pièce du patient">
                                                                    
                                                                </div>
                                                            </div>


                                                            <div class="col-xl-3 col-sm-4 col-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="name">Pièce</label>
                                                                    <input name="piece" id="" type="file" accept="image/*" class="form-control" placeholder="Entrez la pièce du patient">
                                                                   
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <!-- Row end -->

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Information Biologique (Champs à remplir pour les patients) 
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionForm">
                                                    <div class="accordion-body">

                                                        <!-- Row start -->
                                                        <div class="row gx-3">

                                                            <div class="col-xl-3 col-sm-4 col-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="name">Nom du père</label>
                                                                    <input name="nomPere" type="text" id="" class="form-control" placeholder="Entrez le nom du père">
                                                                    
                                                                </div>
                                                            </div>



                                                            <div class="col-xl-3 col-sm-4 col-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="name">Prénom du père</label>
                                                                    <input name="prenomPere" id="" type="text" class="form-control" placeholder="Entrez le prénom du père">
                                                                 
                                                                </div>
                                                            </div>



                                                            <div class="col-xl-3 col-sm-4 col-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="name">Pathologie du père</label>
                                                                    <input name="pathologiePere" id="" type="text" class="form-control" placeholder="Entrez l'antécédant du père">
                                                                   
                                                                </div>
                                                            </div>


                                                            <div class="col-xl-3 col-sm-4 col-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="name">Nom de la mère</label>
                                                                    <input name="nomMere" type="text" id="" class="form-control" placeholder="Entrez le nom de la mère">
                                                                  
                                                                </div>
                                                            </div>


                                                            <div class="col-xl-3 col-sm-4 col-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="name">Prénom de la mère</label>
                                                                    <input name="prenomMere" type="text" id="" class="form-control" placeholder="Entrez le prénom de la mère">
                                                                    
                                                                </div>
                                                            </div>


                                                            <div class="col-xl-3 col-sm-4 col-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="name">Pathologie de la mère</label>
                                                                    <input name="pathologieMere" type="text" id="" class="form-control" placeholder="Entrez l'antécédant de la mère">
                                                                   
                                                                </div>
                                                            </div>


                                                            <div class="col-xl-3 col-sm-4 col-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="name">Groupe Sanguin</label>
                                                                    <select class="form-select" name="groupS" id="abcd" aria-label="Default select example">
                                                                        <option selected="">Selectionner le groupe sanguin</option>
                                                                        <option value="A+">A+</option>
                                                                        <option value="A-">A-</option>
                                                                        <option value="B+">B+</option>
                                                                        <option value="B-">B-</option>
                                                                        <option value="AB+">AB+</option>
                                                                        <option value="AB-">AB-</option>
                                                                        <option value="O+">O+</option>
                                                                        <option value="O-">O-</option>
                                                                    </select>
                                                                   
                                                                </div>
                                                            </div>


                                                            



                                                        </div>
                                                        <!-- Row end -->

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Type de Compte
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionForm">
                                                    <div class="accordion-body">

                                                        <!-- Row start -->
                                                        <div class="row gx-3">
                                                            <div class="col">
                                                                <div class="mb-3">
                                                                    <div>
                                                                        <div class="col-sm-6 col-12">
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="inlineRadio1">Type de Personne</label>
                                                                                <div class="m-0">
                                                                                    <div class="form-check form-check-inline" onclick="showOptions()">
                                                                                        <input class="form-check-input" type="radio" name="typePersonne" id="typePersonne1" value="Patient" checked>
                                                                                        <label class="form-check-label" for="typePersonne1">Patient</label>
                                                                                    </div>
                                                                                    <div class="form-check form-check-inline" onclick="showOptions()">
                                                                                        <input class="form-check-input" type="radio" name="typePersonne" id="typePersonne2" value="Personnel de santé">
                                                                                        <label class="form-check-label" for="typePersonne2">Personnel de Santé</label>
                                                                                    </div>
                                                                               
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-12" id="typePersonnelDeSante" style="display: none;">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="inlineRadio1">Type de Personnel de Santé</label>
                                                                    <div class="m-0 mb-4">
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio" name="personnelSante" id="inlineRadio1" value="Médecin" checked>
                                                                            <label class="form-check-label" for="inlineRadio1">Médecin</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio" name="personnelSante" id="inlineRadio2" value="Infirmié">
                                                                            <label class="form-check-label" for="inlineRadio2">Infirmié</label>
                                                                        </div>

                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio" name="personnelSante" id="inlineRadio3" value="Technicien Laboratoir">
                                                                            <label class="form-check-label" for="inlineRadio3">Technicien Laboratoir</label>
                                                                        </div>
                                                                       

                                                                    </div>

                                                                    <div class="col-12 mb-3">
                                                                        <div class="mb-3">
                                                                            <label class="form-label mb-3" for="name">Numero Service</label>
                                                                            <input name="numService" type="number" id="" class="form-control" placeholder="Entrez le numero d'ordre du personnel de santé">
                                                                        </div>
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

                                    <div class="col-sm-12 col-12 mb-5">
                                        <div class="d-flex gap-2 justify-content-center">
                                            <a href="{{route('login')}}" class="btn btn-outline-secondary">Annuler</a>
                                            <button type="submit" class="btn btn-primary">Valider</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Row end -->

                </div>
                <!-- App body ends -->

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

    <!-- ***************
			************ JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
  
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    

    
    <script>
        function showOptions() {
            var option1 = document.getElementById('typePersonne1');
            var option2 = document.getElementById('typePersonne2');
            var optionsDiv = document.getElementById('typePersonnelDeSante');

            if (option1.checked) {
                optionsDiv.style.display = 'none';
            } else if (option2.checked) {
                optionsDiv.style.display = 'block';
            }
        }
    </script>
</body>



</html>