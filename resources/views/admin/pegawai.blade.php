@include('header')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
      <!-- Quick Action Toolbar Ends-->
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-sm-flex align-items-center mb-4">
                <h4 class="card-title mb-sm-0">Data Pegawai</h4>
                <a class="btn btn-primary text-dark ms-auto mb-3 mb-sm-0" href="{{ route ('addPegawai') }}">Add</a>
              </div>
              <div class="table-responsive border rounded p-1">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="font-weight-bold">Nama</th>
                      <th class="font-weight-bold">Jabatan</th>
                      <th class="font-weight-bold">Tim Kerja</th>
                      <th class="font-weight-bold">Foto</th>
                      <th class="font-weight-bold">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <img class="img-sm rounded-circle" src="{{ asset('images/faces/face1.jpg')}}" alt="profile image"> Katie Holmes
                      </td>
                      <td>$3621</td>
                      <td><img src="{{ asset('images/dashboard/alipay.png')}}" alt="alipay" class="gateway-icon me-2"> alipay</td>
                      <td>04 Jun 2019</td>
                      <td>
                        <div class="badge badge-primary p-2">Paid</div>
                        <div class="badge badge-danger p-2">Paid</div>
                        <div class="badge badge-info p-2">Paid</div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="d-flex mt-4 flex-wrap align-items-center">
                <p class="text-muted mb-sm-0">Showing 1 to 10 of 57 entries</p>
                <nav class="ms-auto">
                  <ul class="pagination separated pagination-info mb-sm-0">
                    <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-left"></i></a></li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-right"></i></a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@include('footer')