@extends('base')
@section('content')


@section('titre')
INFORMATIONS BASIQUES
@endsection

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
                                <a class="nav-link active" id="tab-oneAA" data-bs-toggle="tab" href="#oneAA" role="tab" aria-controls="oneAA" aria-selected="true"><i class="ri-user-smile-line"></i>Informations
                                    Personnelles</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="tab-twoAA" data-bs-toggle="tab" href="#twoAA" role="tab" aria-controls="twoAA" aria-selected="false" tabindex="-1"><i class="ri-fingerprint-line "></i>Informations Biologiques</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="tab-threeAA" data-bs-toggle="tab" href="#threeAA" role="tab" aria-controls="threeAA" aria-selected="false" tabindex="-1"><i class="ri-p2p-line "></i>Informations Complementaires</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="customTabContent3">
                            <div class="tab-pane fade show active" id="oneAA" role="tabpanel" aria-labelledby="tab-oneAA">

                                <!-- Row start -->
                                <div class="row gx-3">
                                    <div class="col-xl-3 col-sm-4 col-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="">Type de Pièce</label>
                                            <input type="text" readonly class="form-control" id="" value="{{ $personne->typeCin }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-4 col-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="name">CIN</label>
                                            <input type="number" readonly class="form-control" id="name" value="{{ $personne->cin }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-4 col-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="email">Nom</label>
                                            <input type="text" readonly class="form-control" id="email" value="{{ $personne->nomPers }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-4 col-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="phn">Prenom</label>
                                            <input type="text" readonly class="form-control" id="phn" value="{{ $personne->prenomPers }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-4 col-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="company">Sexe</label>
                                            <input type="text" readonly class="form-control" id="company" value="{{ $personne->sexe }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-4 col-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="bAddress">Date de Naissance</label>
                                            <input type="text" readonly class="form-control" id="bAddress" value="{{ $personne->dateNaiss }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-4 col-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="terri">Adresse</label>
                                            <input type="text" readonly class="form-control" id="terri" value="{{ $personne->adressePers }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-4 col-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="terri">E-mail</label>
                                            <input type="text" readonly class="form-control" id="terri" value="{{ $user->email }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-4 col-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="">Téléphone</label>
                                            <input type="number" readonly class="form-control" id="" value="{{ $personne->telPers }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-4 col-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="value">Profession</label>
                                            <input type="text" readonly class="form-control" id="" value="{{ $personne->professionPers }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-4 col-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="">Pays</label>
                                            <input type="text" readonly class="form-control" id="" value="{{ $personne->paysPers }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-4 col-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="">Ville</label>
                                            <input type="text" readonly class="form-control" id="" value="{{ $personne->villePers }}">
                                        </div>
                                    </div>

                                </div>
                                <!-- Row end -->

                            </div>
                            <div class="tab-pane fade" id="twoAA" role="tabpanel" aria-labelledby="tab-twoAA">

                                <!-- Row start -->
                                <div class="row gx-3">
                                    <div class="col-sm-3 col-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="companyName">Nom du père</label>
                                            <input type="text" readonly class="form-control" id="companyName" value="{{ $patient->nomPere }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="companyName">Prénom du père</label>
                                            <input type="text" readonly class="form-control" id="companyName" value="{{ $patient->prenomPere }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="companyName">Pathologie du père</label>
                                            <input type="text" readonly class="form-control" id="companyName" value="{{ $patient->pathologiePere }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="companyName">Nom de la mère</label>
                                            <input type="text" readonly class="form-control" id="companyName" value="{{ $patient->nomMere }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="companyName">Prenom de la mère</label>
                                            <input type="text" readonly class="form-control" id="companyName" value="{{ $patient->prenomMere }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="companyName">Pathologie de la mère</label>
                                            <input type="text" readonly class="form-control" id="companyName" value="{{ $patient->pathologieMere }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="companyName">Groupe sanguin</label>
                                            <input type="text" readonly class="form-control" id="companyName" value="{{ $patient->groupeSanguinPers }}">
                                        </div>
                                    </div>



                                </div>
                                <!-- Row end -->

                            </div>
                            <div class="tab-pane fade" id="threeAA" role="tabpanel" aria-labelledby="tab-threeAA">

                                <!-- Row start -->
                                <div class="row gx-3">
                                    <div class="col">

                                        <!-- Allergie -->
                                        <div class="mb-3">
                                            <div class="card mb-3">
                                                <div class="card-header d-flex justify-content-between align-items-center ">

                                                    <h5 class="card-title">Allergies</h5>

                                                </div>
                                                <div class="card-body">

                                                    <!-- Table start -->
                                                    <div class="table-outer">
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Allergies</th>
                                                                    <th>Date</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach ($consultations as $item)
                                                                <tr>
                                                                    <td>{{ $item->id }}</td>
                                                                    <td>{{ $item->allergies }}</td>
                                                                    <td>{{ $item->created_at }}</td>
                                                                    <td>
                                                                        <a href="" class="m-2" data-bs-toggle="modal" data-bs-target="#modifAllergie{{ $item->id }}"><i class="ri-draft-line   fs-4 lh-1 text-primary "></i></a>
                                                                        <a href="" class="m-2" data-bs-toggle="modal" data-bs-target="#supAllergie{{ $item->id }}"><i class="ri-delete-bin-6-line fs-4 lh-1 text-primary "></i></a>
                                                                    </td>
                                                                    <!-- Modal Modification -->
                                                                    <div class="modal fade" id="modifAllergie{{ $item->id }}" tabindex="-1" aria-labelledby="modifAllergieLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-fullscreen">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title h4" id="modifAllergieLabel">
                                                                                        Formulaire de Modification d'Allergie
                                                                                    </h5>
                                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <div class="modal-body">
                                                                                        <div class="row gx-3">
                                                                                            <div class="col-sm-12">
                                                                                                <div class="card mb-3">
                                                                                                    <div class="card-header">
                                                                                                        <h5 class="card-title">Modification d'Allergie</h5>
                                                                                                    </div>
                                                                                                    <form action="">
                                                                                                        <div class="card-body">
                                                                                                            <!-- Row start -->
                                                                                                            <div class="row gx-3">

                                                                                                                <div class="col-xl-3 col-sm-4 col-12">
                                                                                                                    <div class="mb-3">
                                                                                                                        <label class="form-label" for="name">Allergie</label>
                                                                                                                        <textarea name="" id="" cols="30" class="form-control" rows="5"></textarea>
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
                                                                    <div class="modal fade" id="supAllergie{{ $item->id }}" tabindex="-1" aria-labelledby="supAllergieLabel" aria-hidden="true">
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
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- Table end -->

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Correspondace -->
                                    <div class="mb-3">
                                        <div class="card mb-3">
                                            <div class="card-header d-flex justify-content-between align-items-center ">
                                                <h5 class="card-title">Correspondance</h5>
                                            </div>

                                            <div class="card-body">

                                                <!-- Table start -->
                                                <div class="table-outer">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Nom</th>
                                                                <th>Prénom</th>
                                                                <th>Télephone</th>
                                                                <th>Relation avec le patient</th>
                                                                <th>Date</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach ($correspondants as $correspondant)
                                                            <tr>
                                                                <td>{{ $correspondant['id'] }}</td>
                                                                <td>{{ $correspondant['nomCorresp'] }}</td>
                                                                <td>{{ $correspondant['prenomCorresp'] }}</td>
                                                                <td>{{ $correspondant['telephone'] }}</td>
                                                                <td>{{ $correspondant['relation'] }}</td>
                                                                <td>{{ $correspondant['created_at'] }}</td>
                                                                <td>
                                                                    <a href="" class="m-2" data-bs-toggle="modal" data-bs-target="#modifCorrespondance{{ $item->id }}"><i class="ri-draft-line   fs-4 lh-1 text-primary "></i></a>
                                                                    <a href="" class="m-2" data-bs-toggle="modal" data-bs-target="#supCorrespondance{{ $item->id }}"><i class="ri-delete-bin-6-line fs-4 lh-1 text-primary "></i></a>
                                                                </td>
                                                                <!-- Modal Modification -->
                                                                <div class="modal fade" id="modifCorrespondance{{ $item->id }}" tabindex="-1" aria-labelledby="modifCorrespondanceLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-fullscreen">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title h4" id="modifCorrespondanceLabel{{ $item->id }}">
                                                                                    Formulaire de Modification de Correspondance
                                                                                </h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="modal-body">
                                                                                    <div class="row gx-3">
                                                                                        <div class="col-sm-12">
                                                                                            <div class="card mb-3">
                                                                                                <div class="card-header">
                                                                                                    <h5 class="card-title">Modification de Correspondance</h5>
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
                                                                <div class="modal fade" id="supCorrespondance{{ $item->id }}" tabindex="-1" aria-labelledby="supCorrespondanceLabel" aria-hidden="true">
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
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- Table end -->

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