@include('header')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
      <!-- Quick Action Toolbar Ends-->
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Edit Pegawai</h4>
              <p class="card-description"> Pegawai BPS Kota Bandar Lampung </p>
              <form class="forms-sample" action="{{ route('editPegawaiUpdate',$pegawai->id_pegawai) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    @if ($errors->has('nama'))
                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first('nama') }}
                      </div>
                    @endif
                  <label for="exampleInputName1">Nama</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama" name="nama" value="{{ $pegawai->nama }}">
                </div>
                <div class="form-group">
                    @if ($errors->has('jabatan'))
                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first('jabatan') }}
                      </div>
                    @endif
                  <label for="exampleInputEmail3">Jabatan</label>
                  <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Jabatan" name="jabatan" value="{{ $pegawai->jabatan }}">
                </div>
                <div class="form-group">
                    @if ($errors->has('pekerjaan'))
                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first('pekerjaan') }}
                      </div>
                    @endif
                  <label for="exampleSelectGender">Tim Kerja</label>
                  <select class="form-select" id="exampleSelectGender" name="pekerjaan" >
                    <option value="{{ $pegawai->pekerjaan }}">{{ $pegawai->pekerjaan }}</option>
                    <option value="exKSK">exKSK</option>
                    <option value="Umum">Umum</option>
                    <option value="IPDS">IPDS</option>
                    <option value="Produksi">Produksi</option>
                    <option value="Sosial">Sosial</option>
                    <option value="Distribusi">Distribusi</option>
                    <option value="Nerwils">Nerwils</option>
                  </select>
                </div>
                <div class="form-group">
                    @if ($errors->has('foto'))
                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first('foto') }}
                      </div>
                    @endif
                  <label>File upload Poto</label>
                  <input type="file" name="foto">
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <a class="btn btn-light" href="{{route('pegawai')}}">Cancel</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@include('footer')