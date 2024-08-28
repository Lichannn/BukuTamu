@include('header')

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
                <h4 class="card-title mb-sm-0">Data Buku Tamu</h4>
              </div>
              <div class="table-responsive border rounded p-1">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="font-weight-bold">Nama</th>
                      <th class="font-weight-bold">Email</th>
                      <th class="font-weight-bold">Telpon</th>
                      <th class="font-weight-bold">Alamat</th>
                      <th class="font-weight-bold">Kegiatan</th>
                      <th class="font-weight-bold">Prihal</th>
                      <th class="font-weight-bold">Pekerjaan</th>
                      <th class="font-weight-bold">Kesan</th>
                      <th class="font-weight-bold">Tanggal Datang</th>
                      <th class="font-weight-bold">Aksi</th>
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
                        <td>
                            <a href=""><div class="badge badge-primary p-2">Edit</div></a>
                            <form action="" method="POST">
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


@include('footer')