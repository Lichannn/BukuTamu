@include('header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-8 grid-margin stretch-card"> 
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Data Pengunjung Setiap Minggu</h4>
                    <canvas id="areaChart" class="mt-5" style="height:250px"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Quick Status</h4>
                    <div class="row">
                      <div class="col-md-6">
                        <div id="circle-progress-1"></div>
                      </div>
                      <div class="col-md-6">
                        <div id="circle-progress-2"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-3" style="margin: 10px">
                    <div class="col-12">
                      <div class="wrapper py-4 d-flex">
                        <div class="ms-3">
                          <p class="mb-1">Buku Tamu</p>
                          <h6 class="mb-0">{{ $firstBT }}</h6>
                        </div>
                        <div class="ms-auto"><span class="text-muted ms-2">Data Terbaru</span></div>
                      </div>
                      <div class="wrapper py-4 d-flex">
                        <div class="ms-3">
                          <p class="mb-1">Pegawai</p>
                          <h6 class="mb-0"></h6>{{ $firstPegawai }}</h6>
                        </div>
                        <div class="ms-auto"><span class="text-muted ms-2">Data Terbaru</span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Quick Action Toolbar Starts-->
            <div class="row quick-action-toolbar">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-header d-block d-md-flex">
                    <h5 class="mb-0">Quick Actions</h5>
                    <p class="ms-auto mb-0">How are your active users trending overtime?<i class="icon-bulb"></i></p>
                  </div>
                  <div class="d-md-flex row m-0 quick-action-btns" role="group" aria-label="Quick action buttons">
                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                      <a type="button" class="btn px-0" href="{{ route('addPegawai') }}"> <i class="icon-user me-2"></i> Add Pegawai</a>
                    </div>
                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                      <a type="button" class="btn px-0" href=""><i class="icon-docs me-2"></i> Create Buku Tamu</a>
                    </div>
                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                      <a type="button" class="btn px-0" href=""><i class="icon-folder me-2"></i> Show All Buku Tamu</a>
                    </div>
                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                      <a type="button" class="btn px-0" href="{{ route('pegawai') }}"><i class="icon-book-open me-2"></i>Show All Pegawai</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Quick Action Toolbar Ends-->
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                      <h4 class="card-title mb-sm-0">Data Buku Tamu</h4>
                      <a href="{{ route('Buku') }}" class="text-dark ms-auto mb-3 mb-sm-0"> View all Buku Tamu</a>
                    </div>
                    <div class="table-responsive border rounded p-1">
                      <table class="table table-bordered table-hover">
                        <thead>
                          <tr class="table-primary">
                            <th class="font-weight-bold">Nama</th>
                            <th class="font-weight-bold">Email</th>
                            <th class="font-weight-bold">Telpon</th>
                            <th class="font-weight-bold">Alamat</th>
                            <th class="font-weight-bold">Kegiatan</th>
                            <th class="font-weight-bold">Prihal</th>
                            <th class="font-weight-bold">Pekerjaan</th>
                            <th class="font-weight-bold">Kesan</th>
                            <th class="font-weight-bold">Tanggal Datang</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($buku as $key => $value)
                          <tr>
                              <td>{{ $value->nama }}</td>
                              <td>{{ $value->email }}</td>
                              <td>{{ $value->no_tlp }}</td>
                              <td>{{ $value->alamat }}</td>
                              <td>{{ $value->kegiatan }}</td>
                              <td>{{ $value->prihal }}</td>
                              <td>{{ $value->pekerjaan }}</td>
                              <td>{{ $value->kesan }}</td>
                              <td>{{  \Carbon\Carbon::parse($value->created_at)->format('d, M Y') }}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    <div class="d-flex mt-4 flex-wrap align-items-center">
                      <p class="text-muted mb-sm-0">Showing {{$buku->firstItem()}} to {{ $buku->lastItem() }} of {{ $buku->total() }} entries</p>
                      <nav class="ms-auto">
                        <ul class="pagination separated pagination-info mb-sm-0">
                          {{$buku->links()}}
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <script>
            var totalRecords = @json($count);
            var totalRecordPegawai = @json($countPegawai);
            var totalWeeks = @json(array_values($data));
          </script>
@include('footer')