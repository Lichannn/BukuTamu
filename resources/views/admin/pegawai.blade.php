@include('header')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
      <!-- Quick Action Toolbar Ends-->
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
                @if (session()->has('success'))
                <div class="alert alert-primary" role="alert">
                    <strong>{{ session()->get('success') }}</strong>
                </div>
                @endif
                @if (session()->has('error'))
                <div class="alert alert-primary" role="alert">
                    <strong>{{ session()->get('error') }}</strong>
                </div>
                @endif
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
                    @foreach ($pegawai as $key => $value)
                    <tr>
                      <td>
                         {{$value->nama}}
                      </td>
                      <td>{{ $value->jabatan }}</td>
                      <td>{{ $value->pekerjaan }}</td>
                      <td><img class="img-sm rounded-circle" src="{{ asset('images/faces/'.$value->foto)}}" alt="profile image"></td>
                      <td>
                        <a href="{{ route('editPegawai', $value->id_pegawai) }}"><div class="badge badge-primary p-2">Edit</div></a>
                        <form action="{{ route('deletePegawai', $value->id_pegawai) }}" method="POST">
                          @csrf
                          @method('DELETE')
                        <button class="badge badge-danger p-2">Hapus</button>
                        </form>
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
    </div>

@include('footer')