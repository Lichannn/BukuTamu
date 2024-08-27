@include('header')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
      <!-- Quick Action Toolbar Ends-->
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Tambah Pegawai</h4>
              <p class="card-description"> Pegawai BPS Kota Bandar Lampung </p>
              <form class="forms-sample">
                @csrf
                <div class="form-group">
                  <label for="exampleInputName1">Nama</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail3">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="exampleSelectGender">Tim Kerja</label>
                  <select class="form-select" id="exampleSelectGender">
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>File upload</label>
                  <input type="file" name="img[]" class="file-upload-default">
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                    </span>
                  </div>
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