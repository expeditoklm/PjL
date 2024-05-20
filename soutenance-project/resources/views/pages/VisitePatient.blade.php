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
                <a class="nav-link active" id="tab-oneAA" data-bs-toggle="tab" href="#oneAA" role="tab" aria-controls="oneAA" aria-selected="true"><i class="ri-seo-line"></i>Consultation</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-twoAA" data-bs-toggle="tab" href="#twoAA" role="tab" aria-controls="twoAA" aria-selected="false" tabindex="-1"><i class="ri-slideshow-line"></i>Examens Cliniques</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-threeAA" data-bs-toggle="tab" href="#threeAA" role="tab" aria-controls="threeAA" aria-selected="false" tabindex="-1"><i class="ri-file-list-3-line "></i>Prescriptions</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-fourAA" data-bs-toggle="tab" href="#fourAA" role="tab" aria-controls="threeAA" aria-selected="false" tabindex="-1"><i class="ri-attachment-line"></i>Fichiers</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-fiveAA" data-bs-toggle="tab" href="#fiveAA" role="tab" aria-controls="fiveAA" aria-selected="false" tabindex="-1"><i class="ri-door-open-line "></i>Sortie Médicale</a>
              </li>
            </ul>
            <div class="tab-content" id="customTabContent3">
              <div class="tab-pane fade show active" id="oneAA" role="tabpanel" aria-labelledby="tab-oneAA">

                <!-- Row start -->
                <div class="row gx-3">
                  <div class="card-header mb-4 d-flex justify-content-between align-items-center ">
                    <h5 class="card-title"></h5>
                    <button class="btn btn-primary ml-auto " data-bs-toggle="modal" data-bs-target="#modifConsultation">Modifier</button>
                  </div>
                  <div class="col-xl-3 col-sm-4 col-12 ">
                    <div class="mb-3">
                      <label class="form-label" for="email">Motif</label>
                      <textarea readonly id="" cols="30" rows="5" class="form-control">{{$consultations->motif}}</textarea>
                    </div>

                  </div>
                  <div class="col-xl-3 col-sm-4 col-12">
                    <div class="mb-3">
                      <label class="form-label" for="email">Antécedants</label>
                      <textarea readonly id="" cols="30" rows="5" class="form-control">{{$consultations->antecedant}}</textarea>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-4 col-12">
                    <div class="mb-3">
                      <label class="form-label" for="email">Anamnèse</label>
                      <textarea readonly id="" cols="30" rows="5" class="form-control">{{$consultations->anamnèse}}</textarea>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-4 col-12">
                    <div class="mb-3">
                      <label class="form-label" for="email">Signes Associé</label>
                      <textarea readonly id="" cols="30" rows="5" class="form-control">{{$consultations->signeAssocie}}</textarea>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-4 col-12">
                    <div class="mb-3">
                      <label class="form-label" for="email">Allergies</label>
                      <textarea readonly id="" cols="30" rows="5" class="form-control">{{$consultations->allergies}}</textarea>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-4 col-12">
                    <div class="mb-3">
                      <label class="form-label" for="email">Diagnostique Retenu</label>
                      <textarea readonly id="" cols="30" rows="5" class="form-control">{{$consultations->diagnostiqueRetenu}}</textarea>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-4 col-12">
                    <div class="mb-3">
                      <label class="form-label" for="email">Bilan</label>
                      <textarea readonly id="" cols="30" rows="5" class="form-control">{{$consultations->bilan}}</textarea>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-4 col-12">
                    <div class="mb-3">
                      <label class="form-label" for="email">Médecin</label>
                      <input name="" readonly id="" class="form-control" value="{{$medecin->nomPers}} {{$medecin->prenomPers}}">
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-4 col-12">
                    <div class="mb-3">
                      <label class="form-label" for="email">Hopital</label>
                      <input name="" readonly id="" class="form-control" value="{{$hopital->libHopital}}">
                    </div>
                  </div>


                </div>
                <!-- Row end -->

              </div>
              <div class="tab-pane fade" id="twoAA" role="tabpanel" aria-labelledby="tab-twoAA">

                <!-- Row start -->
                <div class=" mb-3">

                  <div class="card mb-3">
                    <div class="card-header mb-4 d-flex justify-content-between align-items-center ">
                      <h5 class="card-title">Liste des Examens</h5>
                      <button class="btn btn-primary ml-auto " data-bs-toggle="modal" data-bs-target="#addExamen">Nouveau</button>
                    </div>

                    <div class="card-body">
                      <div class="table-responsive">
                        <table id="basicExample" class="table table-striped">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Type Examen</th>
                              <th>Description</th>
                              <th>Observation</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($examen_clinique as $item)
                            <tr>
                              <td>{{ $item->id}}</td>
                              <td>{{ $item->typeExamen->libTypeExamen}}</td>
                              <td>{{ $item->description}}</td>
                              <td>{{ $item->observation}}</td>

                              <td>
                                <a href="#" class="m-2"><i class="ri-draft-line   fs-4 lh-1 text-primary "></i></a>
                                <a href="#" class="m-2"><i class="ri-draft-line   fs-4 lh-1 text-primary "></i></a>
                              </td>
                            </tr>
                            @endforeach
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
                    <div class="card-header mb-4 d-flex justify-content-between align-items-center ">
                      <h5 class="card-title">Soins Prescits</h5>
                      <button class="btn btn-primary ml-auto " data-bs-toggle="modal" data-bs-target="#addSoin">Nouveau</button>
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
                            @foreach ($soins_prescrit as $item)
                            <tr>
                              <td>{{ $item->id}}</td>
                              <td>{{ $item->typeSoin->libTypeSoin}}</td>
                              <td>{{ $item->detailsSoinPrescrit}}</td>
                              <td>
                                <a href="#" class="m-2" data-bs-toggle="modal" data-bs-target="#modifSoin{{ $item->id}}"><i class="ri-draft-line   fs-4 lh-1 text-primary "></i></a>
                                <a href="#" class="m-2" data-bs-toggle="modal" data-bs-target="#suppSoin{{ $item->id}}"><i class="ri-delete-bin-6-line   fs-4 lh-1 text-primary "></i></a>
                                <a href="#" class="m-2"><i class="ri-printer-line fs-4 lh-1 text-primary "></i></a>
                              </td>



                              <!-- Modal Fullscreen -->
                              <div class="modal fade" id="modifSoin{{ $item->id}}" tabindex="-1" aria-labelledby="modifSoinLabel" aria-hidden="true">
                                <div class="modal-dialog modal-fullscreen">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title h4" id="modifSoinLabel">
                                        Formulaire de Modification de Soin Prescrit
                                      </h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <div class="row gx-3">
                                        <div class="col-sm-12">
                                          <div class="card mb-3">
                                            <div class="card-header">
                                              <h5 class="card-title">Modifer Soin Prescrit</h5>
                                            </div>
                                            <form action="">
                                              <div class="card-body">

                                                <!-- Row start -->
                                                <div class="row gx-3">
                                                  <div class="col-xl-3 col-sm-4 col-12">
                                                    <div class="mb-3">
                                                      <label class="form-label" for="name">Libellé</label>
                                                      <input name="" id="" class="form-control" placeholder="Ou entrez le type d'examen">
                                                    </div>
                                                  </div>
                                                  <div class="col-xl-3 col-sm-4 col-12">
                                                    <div class="mb-3">
                                                      <label class="form-label" for="email">Details</label>
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
                                            </form>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                  </div>
                                </div>
                              </div>











                              <div class="modal fade" id="suppSoin{{ $item->id}}" tabindex="-1" aria-labelledby="suppSoinLabel" aria-hidden="true">
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
                    </div>
                  </div>
                </div>

                <div class="card mb-3">
                  <div class="card-header mb-4 d-flex justify-content-between align-items-center ">
                    <h5 class="card-title">Analyses</h5>
                    <button class="btn btn-primary ml-auto " data-bs-toggle="modal" data-bs-target="#addAnalyse">Nouveau</button>
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
                          @foreach ($analyses_prescrit as $item)
                          <tr>
                            <td>{{ $item->id}}</td>
                            <td>{{ $item->typeAnalyse->libAnalyse}}</td>
                            <td>{{ $item->detailsAnalyse}}</td>
                            <td>
                              <a href="" class="m-2" data-bs-toggle="modal" data-bs-target="#modifAnalyse"><i class="ri-draft-line   fs-4 lh-1 text-primary "></i></a>
                              <a href="" class="m-2" data-bs-toggle="modal" data-bs-target="#suppAnalyse"><i class="ri-delete-bin-6-line   fs-4 lh-1 text-primary "></i></a>
                              <a href="" class="m-2"><i class="ri-printer-line fs-4 lh-1 text-primary "></i></a>
                            </td>










                            <!-- Modal Fullscreen -->
                            <div class="modal fade" id="modifAnalyse" tabindex="-1" aria-labelledby="modifAnalyseLabel" aria-hidden="true">
                              <div class="modal-dialog modal-fullscreen">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title h4" id="modifAnalyseLabel">
                                      Formulaire de Modification d'Analyse Prescrite
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="row gx-3">
                                      <div class="col-sm-12">
                                        <div class="card mb-3">
                                          <div class="card-header">
                                            <h5 class="card-title">Modifier Analyse Prescrite</h5>
                                          </div>
                                          <form action="">
                                            <div class="card-body">

                                              <!-- Row start -->
                                              <div class="row gx-3">
                                                <div class="col-xl-3 col-sm-4 col-12">
                                                  <div class="mb-3">
                                                    <label class="form-label" for="name">Type Analyse</label>
                                                    <select class="form-select" id="abcd" aria-label="Default select example">
                                                      <option selected="">Selectionner l'Examen</option>
                                                      <option value="1">One</option>
                                                      <option value="2">Two</option>
                                                      <option value="3">Three</option>
                                                    </select>
                                                    <input name="" id="" class="form-control" placeholder="Ou entrez le type d'examen">
                                                  </div>
                                                </div>
                                                <div class="col-xl-3 col-sm-4 col-12">
                                                  <div class="mb-3">
                                                    <label class="form-label" for="email">Details</label>
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
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>









                            <div class="modal fade" id="suppAnalyse" tabindex="-1" aria-labelledby="suppAnalyseLabel" aria-hidden="true">
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
                  <div class="card-header mb-4 d-flex justify-content-between align-items-center ">
                    <h5 class="card-title">Ordonnances</h5>
                    <button class="btn btn-primary ml-auto " data-bs-toggle="modal" data-bs-target="#addOrdonnance">Nouveau</button>
                  </div>


                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="highlightRowColumn" class="table table-striped">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Libellé</th>
                            <th>Dose</th>
                            <th>Forme</th>
                            <th>Qte à prendre</th>
                            <th>Nb-fois</th>
                            <th>Inter.de Prise</th>
                            <th>Date-premiere-prise</th>
                            <th>Autres Instructions</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php $count = 0; @endphp {{-- Assigner la valeur initiale à $count --}}
                          @foreach ($consultation->ordonnances as $ordonnance)
                              @php $count++; @endphp {{-- Incrémenter $count à chaque itération --}}
                              <tr>
                                  <td>Ordonnance{{ $count }}</td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td>
                                      <a href="" class="m-2"><i class="ri-printer-line fs-4 lh-1 text-primary "></i></a>
                                      <a href="" class="m-2"data-bs-toggle="modal" data-bs-target="#addMedicament{{ $ordonnance->id }}"><i class="ri-file-add-line fs-4 lh-1 text-primary "></i></a>
                                  </td>
                                  <!-- Colonne pour les détails de l'ordonnance -->
                              </tr>
                              @foreach ($ordonnance->prescrireMedicaments as $prescrireMedicament)
                                  <tr>
                                      <td></td> {{-- Colonne vide pour l'ID de l'ordonnance --}}
                                      <td>{{ $prescrireMedicament->medicament->libMedicament }}</td>
                                      <td>{{ $prescrireMedicament->dose }}</td>
                                      <td>{{ $prescrireMedicament->medicament->formMedicament }}</td>
                                      <td>{{ $prescrireMedicament->qte }}</td>
                                      <td>{{ $prescrireMedicament->nbFois }}</td>
                                      <td>{{ $prescrireMedicament->intervPrise }}</td>
                                      <td>{{ $prescrireMedicament->datePremPrise }}</td>
                                      <td>{{ $prescrireMedicament->autresInstructions }}</td>
                                      <td>
                                          <a href="" class="m-2" data-bs-toggle="modal" data-bs-target="#modifOrdonnance{{ $prescrireMedicament->medicament->id }}">
                                              <i class="ri-draft-line fs-4 lh-1 text-primary "></i>
                                          </a>
                                          <a href="" class="m-2" data-bs-toggle="modal" data-bs-target="#suppOrdonnance{{ $prescrireMedicament->medicament->id }}">
                                              <i class="ri-delete-bin-6-line fs-4 lh-1 text-primary "></i>
                                          </a>
                                      </td>

                                      <!-- Modal Fullscreen -->
                                      <div class="modal fade" id="addMedicament{{$ordonnance->id }}" tabindex="-1" aria-labelledby="addMedicamentLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-fullscreen">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title h4" id="addMedicamentLabel">
                                                Formulaire de Prescription de Médicament
                                              </h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                              <div class="row gx-3">
                                                <div class="col-sm-12">
                                                  <div class="card mb-3">
                                                    <div class="card-header">
                                                      <h5 class="card-title">Nouvel Enregistrement</h5>
                                                    </div>
                                                    <form method="POST" action="{{ route('pages.create-medicamentPrescrit-post') }}" ">
                                                    <input type="hidden" name="ordonnance_id" value=" {{$ordonnance->id}}">
                                                      @csrf
                                                      <div class="card-body">

                                                        <!-- Row start -->
                                                        <div class="row gx-3">
                                                          
                                                          <div class="col-xl-3 col-sm-4 col-12">
                                                            <div class="mb-3">
                                                              <label class="form-label" for="name">Libellé Médocs</label>
                                                              <select class="form-select" id="abcd" aria-label="Default select example">
                                                                <option selected="">Selectionner le médicament</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                              </select>
                                                            </div>
                                                          </div>
                                                          <div class="col-xl-3 col-sm-4 col-12">
                                                            <div class="mb-3">
                                                              <label class="form-label" for="name">Qte à Prendre</label>
                                                              <input type="number" name="qte" id="" class="form-control" placeholder="Entrez la quantité à prendre">
                                                            </div>
                                                          </div>
                                                          <div class="col-xl-3 col-sm-4 col-12">
                                                            <div class="mb-3">
                                                              <label class="form-label" for="name">Dose</label>
                                                              <input name="dose" id="" class="form-control" placeholder="Entrez la date depremière prise"">
                                                            </div>
                                                          </div>
                                                          <div class="col-xl-3 col-sm-4 col-12">
                                                            <div class="mb-3">
                                                              <label class="form-label" for="name">Nombre de fois</label>
                                                              <input name="nbFois" type="number" id="" class="form-control" placeholder="Entrez la date depremière prise"">
                                                            </div>
                                                          </div>
                                                          <div class=" col-xl-3 col-sm-4 col-12">
                                                              <div class="mb-3">
                                                                <label class="form-label" for="name">Intervalle de prise</label>
                                                                <select class="form-select" name="intervPrise" id="abcd" aria-label="Default select example">
                                                                  <option selected="">Selectionner l'intervalle de prise</option>
                                                                  <option value="1">One</option>
                                                                  <option value="2">Two</option>
                                                                  <option value="3">Three</option>
                                                                </select>
                                                                <input name="" id="" type="text" class="form-control" placeholder="Ou entrez l'intervalle de prise">
                                                              </div>
                                                            </div>
                                                            <div class="col-xl-3 col-sm-4 col-12">
                                                              <div class="mb-3">
                                                                <label class="form-label" for="email">Date de premiere prise</label>
                                                                <input name="datePremPrise" id="" type="date" class="form-control" placeholder="Entrez le libellé du médicament">
                                                              </div>
                                                            </div>
                                                            <div class="col-xl-3 col-sm-4 col-12">
                                                              <div class="mb-3">
                                                                <label class="form-label" for="email">Autres Instructions</label>
                                                                <textarea name="autresInstructions" id="" cols="30" rows="5" class="form-control" placeholder="Entrez d'autre informations"></textarea>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <!-- Row end -->
                                                        </div>
                                                        <div class="card-footer">
                                                          <div class="d-flex gap-2 justify-content-end">
                                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                                                            <button type="submit" class="btn btn-primary">Valider</button>
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


                                  </tr>
                              @endforeach
                          @endforeach
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
                      <div class="card-header mb-4 d-flex justify-content-between align-items-center ">
                        <h5 class="card-title">Fichiers de Consultation</h5>
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
                          @foreach ($fichier_consultation as $item)
                            <div class="carousel-item active">
                            <img src="{{ asset('storage/app/public/uploads/' . $item->cheminFichierConsultation) }}" class="d-block w-100" alt="Admin Templates & Dashboards">

                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-dark" style="color: black;">{{ $consultations->motif }}</h5>
                                <p class="text-dark" style="color: black;">{{ $item->libFichierConsultation }}</p>
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
                          @endforeach
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
                    <div class="card-header mb-4 d-flex justify-content-between align-items-center ">
                      <h5 class="card-title"></h5>
                      <button class="btn btn-primary ml-auto " data-bs-toggle="modal" data-bs-target="#modifSortieMedicale">Modifier</button>
                    </div>

                    <div class="card-body">

                    <p>
                        <span class="text-primary">Sortie Médicale</span> : <span>{{ $sortie_medicale->modeSortie }}</span> <br>
                    </p>
                    <ul>
                        @if($sortie_medicale->modeSortie == 'Evacuation')
                            <li><span class="text-primary m-2">Motif Evacuation </span>: <span>{{$sortie_medicale_info->motifEvacuation}}</span> </li>
                            <li><span class="text-primary m-2">Hopital Destination</span> : <span>{{$sortie_medicale_info->hopitalDestination}}</span> </li>
                            <li><span class="text-primary m-2">Date</span> : <span>{{$sortie_medicale_info->date}}</span> </li>
                        @elseif($sortie_medicale->modeSortie == 'Permission')
                            <li><span class="text-primary m-2">Motif Permission</span> : <span>{{$sortie_medicale_info->motifPermission}}</span> </li>
                            <li><span class="text-primary m-2">Période Permission</span> : <span>{{$sortie_medicale_info->dateDebut}} - {{$sortie_medicale_info->dateFin}}</span> </li>
                        @elseif($sortie_medicale->modeSortie == 'Deces')
                            <li><span class="text-primary m-2">Cause Déces</span> : <span>{{$sortie_medicale_info->cause}}</span> </li>
                            <li><span class="text-primary m-2">Lieu Déces</span> : <span>{{$sortie_medicale_info->lieu}}</span> </li>
                            <li><span class="text-primary m-2">Date de Déces</span> : <span>{{$sortie_medicale_info->date}}</span> </li>
                        @endif
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


<!-- App content ends -->


<!-- App body ends -->




<!-- Modal Fullscreen -->
<div class="modal fade" id="addExamen" tabindex="-1" aria-labelledby="addExamenLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="addExamenLabel">
          Formulaire d'Examen Clinique
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row gx-3">
          <div class="col-sm-12">
            <div class="card mb-3">
              <div class="card-header">
                <h5 class="card-title">Nouvel Enregistrement</h5>
              </div>
              <form method="POST" action="{{ route('pages.create-examenClinique-post') }}" enctype="multipart/form-data">
              <input type="hidden" name="consultation_id" value="{{ $consultation_id }}">
                @csrf
                <div class="card-body">
                  <!-- Row start -->
                  <div class="row gx-3">
                    <div class="col-xl-3 col-sm-4 col-12">
                      <div class="mb-3">
                        <label class="form-label" for="name">Type Examen</label>
                        <select class="form-select" name="typeE" id="abcd" aria-label="Default select example">
                          <option selected="">Selectionner le type d'examen</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                        <input name="typeEx" id="" class="form-control" placeholder="Ou entrez le type d'examen">
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-4 col-12">
                      <div class="mb-3">
                        <label class="form-label" for="email">Description</label>
                        <textarea name="description" id="" cols="30" rows="5" class="form-control" placeholder="Description des resultats"></textarea>

                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-4 col-12">
                      <div class="mb-3">
                        <label class="form-label" for="phn">Observation</label>
                        <textarea name="observation" id="" cols="30" rows="5" class="form-control" placeholder="Observation après examen"></textarea>

                      </div>
                    </div>


                  </div>
                  <!-- Row end -->

                </div>
                <div class="card-footer">
                  <div class="d-flex gap-2 justify-content-end">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Valider</button>
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








<!-- Modal Fullscreen -->
<div class="modal fade" id="addSoin" tabindex="-1" aria-labelledby="addSoinLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="addSoinLabel">
          Formulaire de Prescription de Soin
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row gx-3">
          <div class="col-sm-12">
            <div class="card mb-3">
              <div class="card-header">
                <h5 class="card-title">Nouvel Enregistrement</h5>
              </div>
              <form method="POST" action="{{ route('pages.create-soinPrescrit-post') }}" enctype="multipart/form-data">
              <input type="hidden" name="consultation_id" value="{{ $consultation_id }}">
                @csrf
                <div class="card-body">

                  <!-- Row start -->
                  <div class="row gx-3">
                    <div class="col-xl-3 col-sm-4 col-12">
                      <div class="mb-3">
                        <label class="form-label" for="name">Type Soin</label>
                        <select class="form-select" name="typeS" id="abcd" require aria-label="Default select example">
                          <option selected="">Selectionner le type d'examen</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                        <input name="typeS" id="" class="form-control" placeholder="Ou entrez le type d'examen">
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-4 col-12">
                      <div class="mb-3">
                        <label class="form-label" for="email">Details</label>
                        <textarea name="detailsSoinPrescrit" id="" cols="30" rows="5" require class="form-control" placeholder="Entrez les détails du soin"></textarea>
                      </div>
                    </div>
                  </div>
                  <!-- Row end -->
                </div>
                <div class="card-footer">
                  <div class="d-flex gap-2 justify-content-end">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Valider</button>
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
























<!-- Modal Fullscreen -->
<div class="modal fade" id="addAnalyse" tabindex="-1" aria-labelledby="addAnalyseLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="addAnalyseLabel">
          Formulaire de Prescription d'Analyyse
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row gx-3">
          <div class="col-sm-12">
            <div class="card mb-3">
              <div class="card-header">
                <h5 class="card-title">Nouvel Enregistrement</h5>
              </div>
              <form method="POST" action="{{ route('pages.create-analysePrescrit-post') }}" ">
              <input type="hidden" name="consultation_id" value="{{ $consultation_id }}">
                @csrf
                <div class="card-body">

                  <!-- Row start -->
                  <div class="row gx-3">
                    <div class="col-xl-3 col-sm-4 col-12">
                      <div class="mb-3">
                        <label class="form-label" for="name">Type Analyse</label>
                        <select class="form-select" require name="typeAnalyse_id" id="abcd" aria-label="Default select example">
                          <option selected="">Selectionner le type d'analyse</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                        <input name="" id="" class="form-control" placeholder="Ou entrez le type d'analyse">
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-4 col-12">
                      <div class="mb-3">
                        <label class="form-label" for="email">Détails</label>
                        <textarea name="detailsAnalyse" id="" require cols="30" rows="5" class="form-control" placeholder="Entrez les détails de l'analyse"></textarea>
                      </div>
                    </div>
                  </div>
                  <!-- Row end -->
                </div>
                <div class="card-footer">
                  <div class="d-flex gap-2 justify-content-end">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Valider</button>
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























<!-- Modal Fullscreen -->
<div class="modal fade" id="addOrdonnance" tabindex="-1" aria-labelledby="addOrdonnanceLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="addOrdonnanceLabel">
          Formulaire de Prescription d'Ordonnance
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row gx-3">
          <div class="col-sm-12">
            <div class="card mb-3">
              <div class="card-header">
                <h5 class="card-title">Nouvel Enregistrement</h5>
              </div>
              <form method="POST" action="{{ route('pages.create-ordonnancePrescrit-post') }}" ">
              <input type="hidden" name="consultation_id" value="{{ $consultation_id }}">
                @csrf
                <div class="card-body">

                  <!-- Row start -->
                  <div class="row gx-3">
                    
                    <div class="col-xl-3 col-sm-4 col-12">
                      <div class="mb-3">
                        <label class="form-label" for="name">Libellé Médocs</label>
                        <select class="form-select" id="abcd" aria-label="Default select example">
                          <option selected="">Selectionner le médicament</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-4 col-12">
                      <div class="mb-3">
                        <label class="form-label" for="name">Qte à Prendre</label>
                        <input type="number" name="qte" id="" class="form-control" placeholder="Entrez la quantité à prendre">
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-4 col-12">
                      <div class="mb-3">
                        <label class="form-label" for="name">Dose</label>
                        <input name="dose" id="" class="form-control" placeholder="Entrez la date depremière prise"">
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-4 col-12">
                      <div class="mb-3">
                        <label class="form-label" for="name">Nombre de fois</label>
                        <input name="nbFois" id="" class="form-control" placeholder="Entrez la date depremière prise"">
                      </div>
                    </div>
                    <div class=" col-xl-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label" for="name">Intervalle de prise</label>
                          <select class="form-select" name="intervPrise" id="abcd" aria-label="Default select example">
                            <option selected="">Selectionner l'intervalle de prise</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                          <input name="" id="" type="text" class="form-control" placeholder="Ou entrez l'intervalle de prise">
                        </div>
                      </div>
                      <div class="col-xl-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label" for="email">Date de premiere prise</label>
                          <input name="datePremPrise" id="" type="date" class="form-control" placeholder="Entrez le libellé du médicament">
                        </div>
                      </div>
                      <div class="col-xl-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label" for="email">Autres Instructions</label>
                          <textarea name="autresInstructions" id="" cols="30" rows="5" class="form-control" placeholder="Entrez d'autre informations"></textarea>
                        </div>
                      </div>
                    </div>
                    <!-- Row end -->
                  </div>
                  <div class="card-footer">
                    <div class="d-flex gap-2 justify-content-end">
                      <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                      <button type="submit" class="btn btn-primary">Valider</button>
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
        <div class="row gx-3">
          <div class="col-sm-12">
            <div class="card mb-3">
              <div class="card-header">
                <h5 class="card-title">Nouvel Enregistrement</h5>
              </div>
              <form method="POST" action="{{ route('pages.create-fichierConsultation-post') }}" enctype="multipart/form-data">
              <input type="hidden" name="consultation_id" value="{{ $consultation_id }}">
                @csrf
                <div class="card-body">

                  <!-- Row start -->
                  <div class="row gx-3">
                    <div class="col-xl-3 col-sm-4 col-12">

                      <div class="mb-3">
                        <label class="form-label" for="name">Libellé Fichier</label>
                        <input name="libFichierConsultation" id="" type="text" class="form-control" placeholder="Ou entrez le type d'examen">
                      </div>


                    </div>
                    <div class="col-xl-3 col-sm-4 col-12">


                      <div class="mb-3">
                        <label class="form-label" for="name"> Fichier</label>
                        <input name="chemin" id="" type="file" class="form-control" placeholder="Ou entrez le type d'examen">
                      </div>
                    </div>

                  </div>
                  <!-- Row end -->
                </div>
                <div class="card-footer">
                  <div class="d-flex gap-2 justify-content-end">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Valider</button>
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



















<!-- Modal Fullscreen -->
<div class="modal fade" id="modifConsultation" tabindex="-1" aria-labelledby="modifConsultationLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="modifConsultationLabel">
          Formulaire de Consultation
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row gx-3">
          <div class="col-sm-12">
            <div class="card mb-3">
              <div class="card-header">
                <h5 class="card-title">Modifier la Consultation</h5>
              </div>
              <div class="card-body">

                <!-- Row start -->
                <div class="row gx-3">
                  <div class="col-xl-3 col-sm-4 col-12">
                    <div class="mb-3">
                      <label class="form-label" for="name">Motif</label>
                      <div class="simpleEditor"></div>
                      <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-4 col-12">
                    <div class="mb-3">
                      <label class="form-label" for="email">Anamnèse</label>
                      <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>

                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-4 col-12">
                    <div class="mb-3">
                      <label class="form-label" for="phn">Signes Associés</label>
                      <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>

                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-4 col-12">
                    <div class="mb-3">
                      <label class="form-label" for="company">Antécedants</label>
                      <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>

                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-4 col-12">
                    <div class="mb-3">
                      <label class="form-label" for="bAddress">Diagnostique Retenu</label>
                      <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>

                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-4 col-12">
                    <div class="mb-3">
                      <label class="form-label" for="terri">Bilan</label>
                      <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>

                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-4 col-12">
                    <div class="mb-3">
                      <label class="form-label" for="idType">Allergies</label>
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
  </div>
</div>























<!-- Modal Fullscreen -->
<div class="modal fade" id="modifSortieMedicale" tabindex="-1" aria-labelledby="modifSortieMedicaleLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="addSortieMedicaleLabel">
          Formulaire de Sortie Médicale
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
                          <label class="form-label" for="name">Mode de Sortie Médicale</label>
                          <select class="form-select" id="selectOptions" aria-label="Default select example">
                            <option selected="">Selectionner le Mode de Sortie</option>
                            <option value="Sortie Normale">Sortie Normale</option>
                            <option value="Contre Avis Médical">Contre Avis Médical</option>
                            <option value="Evacuation">Evacuation</option>
                            <option value="Permission">Permission</option>
                            <option value="Deces">Decès </option>
                          </select>
                        </div>
                      </div>
                      <div class="col-xl-3 col-sm-4 col-12" id="MotifE" style="display: none;">
                        <div class="mb-3">
                          <label class="form-label" for="name">Motif Evacuation</label>
                          <textarea name="" cols="30" rows="5" class="form-control"></textarea>


                        </div>
                      </div>
                      <div class="col-xl-3 col-sm-4 col-12" id="HopitalD" style="display: none;">
                        <div class="mb-3">
                          <label class="form-label" for="name">Hopital Destination</label>
                          <input name="" class="form-control" placeholder="entrez le type d'examen">
                        </div>
                      </div>

                      <div class="col-xl-3 col-sm-4 col-12" id="MotifP" style="display: none;">
                        <div class="mb-3">
                          <label class="form-label" for="name">Motif Permission</label>
                          <textarea name="" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                      </div>
                      <div class="col-xl-3 col-sm-4 col-12" id="PeriodeP" style="display: none;">
                        <div class="mb-3">
                          <label class="form-label" for="email">Période Permission</label>
                          <input name="" type="date" class="form-control" placeholder="entrez le type d'examen">
                        </div>
                      </div>
                      <div class="col-xl-3 col-sm-4 col-12" id="CauseD" style="display: none;">
                        <div class="mb-3">
                          <label class="form-label" for="email">Cause Déces</label>
                          <textarea name="" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                      </div>
                      <div class="col-xl-3 col-sm-4 col-12" id="LieuD" style="display: none;">
                        <div class="mb-3">
                          <label class="form-label" for="email">Lieu Déces</label>
                          <input name="" type="text" class="form-control" placeholder="entrez le type d'examen">
                        </div>
                      </div>
                      <div class="col-xl-3 col-sm-4 col-12" id="DateD" style="display: none;">
                        <div class="mb-3">
                          <label class="form-label" for="email">Date Déces</label>
                          <input name="" type="date" class="form-control" placeholder="entrez le type d'examen">
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


  <script>
    // Récupération de l'élément select et des inputs
    const selectOptions = document.getElementById('selectOptions');
    const MotifE = document.getElementById('MotifE');
    const HopitalD = document.getElementById('HopitalD');
    const MotifP = document.getElementById('MotifP');
    const PeriodeP = document.getElementById('PeriodeP');
    const CauseD = document.getElementById('CauseD');
    const LieuD = document.getElementById('LieuD');
    const DateD = document.getElementById('DateD');


    // Fonction pour afficher ou masquer les inputs en fonction de l'option sélectionnée
    selectOptions.addEventListener('change', function() {
      const selectedOption = selectOptions.value;
      if (selectedOption === 'Sortie Normale') {
        MotifE.style.display = 'none';
        HopitalD.style.display = 'none';
        MotifP.style.display = 'none';
        PeriodeP.style.display = 'none';
        CauseD.style.display = 'none';
        LieuD.style.display = 'none';
        DateD.style.display = 'none';
      } else if (selectedOption === 'Contre Avis Médical') {
        MotifE.style.display = 'none';
        HopitalD.style.display = 'none';
        MotifP.style.display = 'none';
        PeriodeP.style.display = 'none';
        CauseD.style.display = 'none';
        LieuD.style.display = 'none';
        DateD.style.display = 'none';

      } else if (selectedOption === 'Evacuation') {
        MotifE.style.display = 'block';
        HopitalD.style.display = 'block';
        MotifP.style.display = 'none';
        PeriodeP.style.display = 'none';
        CauseD.style.display = 'none';
        LieuD.style.display = 'none';
      } else if (selectedOption === 'Permission') {
        MotifE.style.display = 'none';
        HopitalD.style.display = 'none';
        MotifP.style.display = 'block';
        PeriodeP.style.display = 'block';
        CauseD.style.display = 'none';
        LieuD.style.display = 'none';
        DateD.style.display = 'none';

      } else if (selectedOption === 'Deces') {
        MotifE.style.display = 'none';
        HopitalD.style.display = 'none';
        MotifP.style.display = 'none';
        PeriodeP.style.display = 'none';
        CauseD.style.display = 'block';
        LieuD.style.display = 'block';
        DateD.style.display = 'block';

      } else {
        MotifE.style.display = 'none';
        HopitalD.style.display = 'none';
        MotifP.style.display = 'none';
        PeriodeP.style.display = 'none';
        CauseD.style.display = 'none';
        LieuD.style.display = 'none';
        DateD.style.display = 'none';

      }
    });
  </script>
  @endsection