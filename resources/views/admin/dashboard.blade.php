@include('header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-8 grid-margin stretch-card"> 
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Area chart</h4>
                    <canvas id="areaChart" class="mt-5" style="height:250px"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Sessions by channel</h4>
                    <div class="aligner-wrapper py-3">
                      <div class="doughnut-chart-height">
                        <canvas id="sessionsDoughnutChart" height="210"></canvas>
                      </div>
                      <div class="wrapper d-flex flex-column justify-content-center absolute absolute-center">
                        <h2 class="text-center mb-0 font-weight-bold">8.234</h2>
                        <small class="d-block text-center text-muted  font-weight-semibold mb-0">Total Leads</small>
                      </div>
                    </div>
                    <div class="wrapper mt-4 d-flex flex-wrap align-items-cente">
                      <div class="d-flex">
                        <span class="square-indicator bg-danger ms-2"></span>
                        <p class="mb-0 ms-2">Assigned</p>
                      </div>
                      <div class="d-flex">
                        <span class="square-indicator bg-success ms-2"></span>
                        <p class="mb-0 ms-2">Not Assigned</p>
                      </div>
                      <div class="d-flex">
                        <span class="square-indicator bg-warning ms-2"></span>
                        <p class="mb-0 ms-2">Reassigned</p>
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
                      <button type="button" class="btn px-0"> <i class="icon-user me-2"></i> Add Client</button>
                    </div>
                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                      <button type="button" class="btn px-0"><i class="icon-docs me-2"></i> Create Quote</button>
                    </div>
                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                      <button type="button" class="btn px-0"><i class="icon-folder me-2"></i> Enter Payment</button>
                    </div>
                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                      <button type="button" class="btn px-0"><i class="icon-book-open me-2"></i>Create Invoice</button>
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
                      <h4 class="card-title mb-sm-0">Data Pegawai</h4>
                      <a href="{{ route('pegawai') }}" class="text-dark ms-auto mb-3 mb-sm-0"> View all Pegawai</a>
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
                          @foreach ($pegawai as $key => $value)
                          <tr>
                            <td>
                              {{$value->nama}}
                            </td>
                            <td>{{ $value->jabatan }}</td>
                            <td>{{ $value->pekerjaan }}</td>
                            <td><img class="img-sm rounded-circle" src="{{ asset('images/faces/'.$value->foto)}}" alt="profile image"></td>
                            <td>
                              <div class="badge badge-primary p-2">Paid</div>
                              <div class="badge badge-danger p-2">Paid</div>
                              <div class="badge badge-info p-2">Paid</div>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    <div class="d-flex mt-4 flex-wrap align-items-center">
                      <p class="text-muted mb-sm-0">Showing {{$pegawai->firstItem()}} to {{ $pegawai->lastItem() }} of {{ $pegawai->total() }} entries</p>
                      <nav class="ms-auto">
                        <ul class="pagination separated pagination-info mb-sm-0">
                          {{$pegawai->links()}}
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="d-sm-flex align-items-baseline report-summary-header">
                          <h5 class="font-weight-semibold">Report Summary</h5> <span class="ms-auto">Updated Report</span> <button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="row report-inner-cards-wrapper">
                      <div class=" col-md -6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title">EXPENSE</span>
                          <h4>$32123</h4>
                          <span class="report-count"> 2 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-success">
                          <i class="icon-rocket"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title">PURCHASE</span>
                          <h4>95,458</h4>
                          <span class="report-count"> 3 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-danger">
                          <i class="icon-briefcase"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title">QUANTITY</span>
                          <h4>2650</h4>
                          <span class="report-count"> 5 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-warning">
                          <i class="icon-globe-alt"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title">RETURN</span>
                          <h4>25,542</h4>
                          <span class="report-count"> 9 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-primary">
                          <i class="icon-diamond"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                <div class="card quick-status-card">
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
                    <div class="row mt-5">
                      <div class="col-12">
                        <div class="wrapper py-4 d-flex border-bottom">
                          <span class="icon-holder">
                            <i class="icon-wallet"></i>
                          </span>
                          <div class="ms-3">
                            <p class="mb-1">My Balance</p>
                            <h6 class="mb-0">$5021.00</h6>
                          </div>
                          <div class="ms-auto"><i class="icon-arrow-down-circle"></i><span class="text-muted ms-2">2.87 %</span></div>
                        </div>
                        <div class="wrapper py-4 d-flex">
                          <span class="icon-holder">
                            <i class="icon-basket-loaded"></i>
                          </span>
                          <div class="ms-3">
                            <p class="mb-1">Sales Revenue</p>
                            <h6 class="mb-0"></h6>24,301.00</h6>
                          </div>
                          <div class="ms-auto"><i class="icon-arrow-down-circle"></i><span class="text-muted ms-2">2.87 %</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@include('footer')