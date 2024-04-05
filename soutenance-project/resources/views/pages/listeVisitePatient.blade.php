@extends('base');

@section('css')
<!-- Data Tables -->
<link rel="stylesheet" href="assets/vendor/datatables/dataTables.bs5.css" />
<link rel="stylesheet" href="assets/vendor/datatables/dataTables.bs5-custom.css" />
<link rel="stylesheet" href="assets/vendor/datatables/buttons/dataTables.bs5-custom.css" />
@endsection
@section('content')
@section('titre')
    LISTE CONSULTATIONS
  @endsection

  <!-- User stats ends -->
  <!-- App content start -->
  <div class="app-body">

    <!-- Row start -->
    <div class="row gx-3">
      <div class="card mb-3">
        <div class="card-header">
          <h5 class="card-title">Liste des Visites</h5>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="toggleButtons" class="table table-striped">
              <thead>
                <tr>
                  <th>Name</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="card ">
                      <div class="list-group w-auto">
                        <a href="{{route('pages.viste-patient')}}" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                          <img src="assets/images/products/product1.jpg" alt="Bootstrap Gallery" class="rounded-circle flex-shrink-0 img-3x" />
                          <div class="d-flex gap-2 w-100 justify-content-between">
                            <div>
                              <h6 class="mb-0">Motif de la visite</h6>
                              <p class="mb-0 text-light">
                                Diagnostique Retenue
                              </p>
                            </div>
                            <small class="text-light text-nowrap">date</small>
                          </div>
                        </a>
                      </div>
                    </div>
                  </td>

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