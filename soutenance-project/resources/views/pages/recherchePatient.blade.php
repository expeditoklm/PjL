@extends('base');
@section('content')
@section('css')
<!-- Data Tables -->
<link rel="stylesheet" href="assets/vendor/datatables/dataTables.bs5.css" />
<link rel="stylesheet" href="assets/vendor/datatables/dataTables.bs5-custom.css" />
<link rel="stylesheet" href="assets/vendor/datatables/buttons/dataTables.bs5-custom.css" />
@endsection
<div class="app-body">

  <!-- Row start -->
  <div class="row gx-3">
    <div class="col-sm-4 col-12">
      <div class="card mb-3">
        <div class="card-body">
          <div class="m-0">
            <label class="form-label" for="abc">CIN</label>
            <input type="text" class="form-control" id="abc" placeholder="Entrez le numero nationnal">
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-12">
      <div class="card mb-3">
        <div class="card-body">
          <div class="m-0">
            <label class="form-label" for="abc">NOM</label>
            <input type="text" class="form-control" id="abc" placeholder="Entrez le nom">
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-12">
      <div class="card mb-3">
        <div class="card-body">
          <div class="m-0">
            <label class="form-label" for="abc">PRENOM</label>
            <input type="text" class="form-control" id="abc" placeholder="Entrez le prenom">
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-12 col-12">
      <div class=" mb-3">
        <div class="card-body">
          <div class="m-4">
            <input type="submit" class="form-control bg-primary" value="RECHERCHER" style="color:white" id="abc">
          </div>
        </div>
      </div>
    </div>


    <div class="card mb-3">
      <div class="card-header">
        <h5 class="card-title">Liste Des Patients</h5>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="hideSearchExample" class="table table-striped">
            <thead>
              <tr>
                <th>CIN</th>
                <th>NOM & PRENOM</th>
                <th>DATE DE NAISSANCE</th>
                <th>TELEPHONE</th>
                <th>PAYS</th>
                <th>VILLE</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Sakura Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td>2020/08/19</td>
                <td>$139,575</td>
                <td><a href="{{route('pages.voir-patient')}}"><i class="ri-bar-chart-line"></i></a></td>
              </tr>
              <tr>
                <td>Sakura Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td>2020/08/19</td>
                <td>$139,575</td>
                <td><a href="{{route('pages.voir-patient')}}"><i class="ri-bar-chart-line"></i></a></td>
              </tr>
              <tr>
                <td>Sakura Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td>2020/08/19</td>
                <td>$139,575</td>
                <td><a href="{{route('pages.voir-patient')}}"><i class="ri-bar-chart-line"></i></a></td>
              </tr>
              <tr>
                <td>Sakura Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td>2020/08/19</td>
                <td>$139,575</td>
                <td><a href="{{route('pages.voir-patient')}}"><i class="ri-bar-chart-line"></i></a></td>
              </tr>
              <tr>
                <td>Sakura Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td>2020/08/19</td>
                <td>$139,575</td>
                <td><a href="{{route('pages.voir-patient')}}"><i class="ri-bar-chart-line"></i></a></td>
              </tr>
              <tr>
                <td>Sakura Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td>2020/08/19</td>
                <td>$139,575</td>
                <td><a href="{{route('pages.voir-patient')}}"><i class="ri-bar-chart-line"></i></a></td>
              </tr>
              <tr>
                <td>Sakura Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td>2020/08/19</td>
                <td>$139,575</td>
                <td><a href="{{route('pages.voir-patient')}}"><i class="ri-bar-chart-line"></i></a></td>
              </tr>
              <tr>
                <td>Sakura Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td>2020/08/19</td>
                <td>$139,575</td>
                <td><a href="{{route('pages.voir-patient')}}"><i class="ri-bar-chart-line"></i></a></td>
              </tr>
              <tr>
                <td>Sakura Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td>2020/08/19</td>
                <td>$139,575</td>
                <td><a href="{{route('pages.voir-patient')}}"><i class="ri-bar-chart-line"></i></a></td>
              </tr>
              <tr>
                <td>Sakura Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td>2020/08/19</td>
                <td>$139,575</td>
                <td><a href="{{route('pages.voir-patient')}}"><i class="ri-bar-chart-line"></i></a></td>
              </tr>
              <tr>
                <td>Sakura Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td>2020/08/19</td>
                <td>$139,575</td>
                <td><a href="{{route('pages.voir-patient')}}"><i class="ri-bar-chart-line"></i></a></td>
              </tr>
              <tr>
                <td>Sakura Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td>2020/08/19</td>
                <td>$139,575</td>
                <td><a href="{{route('pages.voir-patient')}}"><i class="ri-bar-chart-line"></i></a></td>
              </tr>
              <tr>
                <td>Sakura Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td>2020/08/19</td>
                <td>$139,575</td>
                <td><a href="{{route('pages.voir-patient')}}"><i class="ri-bar-chart-line"></i></a></td>
              </tr>
              <tr>
                <td>Sakura Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td>2020/08/19</td>
                <td>$139,575</td>
                <td><a href="{{route('pages.voir-patient')}}"><i class="ri-bar-chart-line"></i></a></td>
              </tr>
              <tr>
                <td>Sakura Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td>2020/08/19</td>
                <td>$139,575</td>
                <td><a href="{{route('pages.voir-patient')}}"><i class="ri-bar-chart-line"></i></a></td>
              </tr>
              <tr>
                <td>Sakura Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td>2020/08/19</td>
                <td>$139,575</td>
                <td><a href="{{route('pages.voir-patient')}}"><i class="ri-bar-chart-line"></i></a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- Row end -->

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
@endsection