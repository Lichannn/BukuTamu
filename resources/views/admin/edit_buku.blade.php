@include('header')

<div class="main-panel">
    <div class="content-wrapper">
      <!-- Quick Action Toolbar Ends-->
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Edit Pegawai</h4>
              <p class="card-description"> Pegawai BPS Kota Bandar Lampung </p>
              <form class="forms-sample" action="{{ route('editBukuUpdate',$buku->id_buku_tamu) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    @if ($errors->has('nama'))
                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first('nama') }}
                      </div>
                    @endif
                  <label for="exampleInputName1">Nama</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama" name="nama" value="{{ $buku->nama }}">
                </div>
                <div class="form-group">
                    @if ($errors->has('email'))
                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first('email') }}
                      </div>
                    @endif
                  <label for="exampleInputEmail3">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Jabatan" name="email" value="{{ $buku->email }}">
                </div>
                <div class="form-group">
                    @if ($errors->has('no_tlp'))
                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first('no_tlp') }}
                      </div>
                    @endif
                  <label for="exampleInputEmail3">Nomor Telepon</label>
                  <input type="number" class="form-control" id="exampleInputEmail3" placeholder="Jabatan" name="no_tlp" value="{{ $buku->no_tlp }}">
                </div>
                <div class="form-group">
                    @if ($errors->has('alamat'))
                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first('alamat') }}
                      </div>
                    @endif
                  <label for="exampleInputEmail3">Alamat</label>
                  <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Jabatan" name="alamat" value="{{ $buku->alamat }}">
                </div>
                <div class="form-group">
                    @if ($errors->has('kegiatan'))
                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first('kegiatan') }}
                      </div>
                    @endif
                  <label for="exampleInputEmail3">Kegiatan</label>
                  <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Jabatan" name="kegiatan" value="{{ $buku->kegiatan }}">
                </div>
                <div class="form-group">
                    @if ($errors->has('prihal'))
                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first('prihal') }}
                      </div>
                    @endif
                  <label for="exampleSelectGender">Prihal</label>
                  <select class="form-select" id="exampleSelectGender" name="prihal" >
                    <option value="{{ $buku->prihal }}">{{ $buku->prihal }}</option>
                    <option value="Perpusatakaan Cetak">Perpusatakaan Cetak</option>
                    <option value="Perpusatakaan Digital">Perpusatakaan Digital</option>
                    <option value="Data Mikro">Data Mikro</option>
                    <option value="Konsultasi Statistik">Konsultasi Statistik</option>
                    <option value="Penjualan Softcopy/Hardcopy">Penjualan Softcopy/Hardcopy</option>
                  </select>
                </div>
                <div class="form-group">
                    @if ($errors->has('pekerjaan'))
                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first('pekerjaan') }}
                      </div>
                    @endif
                  <label for="exampleInputEmail3">Pekerjaan</label>
                  <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Jabatan" name="pekerjaan" value="{{ $buku->pekerjaan }}">
                </div>
                <div class="form-group">
                    @if ($errors->has('kesan'))
                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first('kesan') }}
                      </div>
                    @endif
                  <label for="exampleInputEmail3">Kesan</label>
                  <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Jabatan" name="kesan" value="{{ $buku->pekerjaan }}">
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