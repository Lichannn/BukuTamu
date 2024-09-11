<!doctype html>
<html lang="en">

<head>
    <title>Buku Tamu - BPS Kota Bandar Lampung</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mobland - Mobile App Landing Page Template">
    <meta name="keywords" content="HTML5, bootstrap, mobile, app, landing, ios, android, responsive">

    <!-- Font -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/2/28/Lambang_Badan_Pusat_Statistik_%28BPS%29_Indonesia.svg/773px-Lambang_Badan_Pusat_Statistik_%28BPS%29_Indonesia.svg.png">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css')}}">
    <!-- Owl carousel -->
    <!-- Main css -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="30">

    <!-- Nav Menu -->

    <div class="nav-menu fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-dark navbar-expand-lg" style="padding: 0rem;">
                        <a class="navbar-brand" href="index.html"><img src="{{ asset('images/bps.png')}}" width="140" class="img-fluid" alt="logo"></a> 
                        <a class="navbar-brand" href="index.html"><img src="{{ asset('images/akhlak.png')}}" width="50" class="img-fluid" alt="logo"></a> 
                        <a class="navbar-brand" href="index.html"><img src="{{ asset('images/berani.png')}}" width="50" class="img-fluid" alt="logo"></a> 
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> 
                            <span class="navbar-toggler-icon"></span> 
                        </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"> <a class="nav-link active" href="#home">HOME <span class="sr-only">(current)</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#features">FEATURES</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#contact">GUEST BOOK</a> </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <header class="bg-gradient" id="home">
        <div class="container mt-5">
            <h1>Buku Tamu Badan Pusat Statistik Kota Bandar Lampung</h1>
            <p class="tagline">Terima kasih atas kunjungan Anda di laman resmi Badan Pusat Statistik Kota Bandar Lampung. Silahkan Isi Buku Tamu Terlebih Dahulu<a href="#contact" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">Buku Tamu</a></p>
            
        </div>
        <div class="img-holder mt-3"><img src="{{ asset('images/buku.png')}}" alt="phone" class="img"></div>
    </header>

    <div class="section light-bg" id="features">


        <div class="container">

            <div class="section-title">
                <small>HIGHLIGHTS</small>
                <h3>Fitur Unggulan</h3>
            </div>


            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-face-smile gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Mudah Digunakan</h4>
                                    <p class="card-text">Akses informasi statistik yang Anda butuhkan dengan mudah melalui antarmuka yang sederhana dan intuitif. Data yang tersedia di website kami dirancang agar dapat diakses oleh berbagai kalangan, dari masyarakat umum hingga profesional.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-settings gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Kustomisasi Data</h4>
                                    <p class="card-text">Sesuaikan pencarian dan tampilan data statistik sesuai kebutuhan Anda. Kami menyediakan berbagai alat dan fitur untuk mempermudah analisis data sesuai dengan preferensi Anda, sehingga Anda bisa mendapatkan informasi yang relevan dan tepat sasaran.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-lock gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Keamanan Terjamin</h4>
                                    <p class="card-text">Keamanan data adalah prioritas utama kami. Seluruh data yang kami sediakan melalui website ini dilindungi dengan standar keamanan tinggi untuk memastikan informasi yang Anda akses tetap aman dan terpercaya.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>
    <!-- // end .section -->
 


    <div class="section light-bg">
        <div class="container">
            <div class="section-title">
                <small>FEATURES</small>
                <h3>Do more with our app</h3>
            </div>

            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#communication">Communication</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#schedule">Scheduling</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#messages">Messages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#livechat">Live Chat</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="communication">
                    <div class="d-flex flex-column flex-lg-row">
                        <div>

                            <h2>Memfasilitasi Komunikasi Data</h2>
                            <p class="lead">Akses dan bagikan data statistik dengan mudah, tepat, dan efisien.</p>
                            <p>BPS Kota Bandar Lampung menyediakan saluran komunikasi yang mulus untuk memperoleh dan mendistribusikan data statistik penting. Platform kami memastikan Anda tetap mendapatkan informasi terbaru dan laporan terkini, sehingga mendukung transparansi dan pengambilan keputusan yang berdasarkan data. Baik Anda melakukan penelitian, merencanakan proyek pembangunan, atau menganalisis tren, layanan kami dirancang untuk memenuhi kebutuhan komunikasi data Anda.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="schedule">
                    <div class="d-flex flex-column flex-lg-row">
                        <div>
                            <h2>Jadwalkan Sesuai Kebutuhan Anda</h2>
                            <p class="lead">Memanfaatkan layanan statistik dengan fleksibilitas penuh kapan saja Anda butuhkan.</p>
                            <p>BPS Kota Bandar Lampung menyediakan layanan penjadwalan data yang memungkinkan Anda mengatur akses ke informasi penting sesuai dengan jadwal dan kebutuhan Anda. Dengan dukungan penuh dari tim kami, Anda dapat merencanakan dan mengkoordinasikan kegiatan analisis data, survei, dan laporan dengan lebih efektif. Kami hadir untuk memastikan setiap kebutuhan statistik Anda terpenuhi dengan akurasi dan tepat waktu.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="messages">
                    <div class="d-flex flex-column flex-lg-row">
                        <div>
                            <h2>Layanan Data Statistik</h2>
                            <p class="lead">Tingkatkan pengambilan keputusan dengan data dan wawasan yang komprehensif.</p>
                            <p>Badan Pusat Statistik (BPS) Kota Bandar Lampung menawarkan berbagai layanan data, termasuk statistik real-time, analisis demografis, dan laporan ekonomi. Layanan kami dirancang untuk mendukung kebutuhan pemerintah, bisnis, dan penelitian akademis. Akses data yang andal untuk memperkuat perencanaan strategis dan pengembangan kebijakan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="livechat">
                    <div class="d-flex flex-column flex-lg-row">
                        <div>
                            <h2>Live Chat BPS Kota Bandar Lampung</h2>
                            <p class="lead">Dapatkan informasi statistik dengan cepat melalui layanan Live Chat kami.</p>
                            <p>Badan Pusat Statistik (BPS) Kota Bandar Lampung menyediakan layanan Live Chat untuk membantu Anda mendapatkan data dan informasi statistik secara langsung. Tim kami siap menjawab pertanyaan Anda seputar data ekonomi, demografi, sosial, dan lainnya. Manfaatkan layanan ini untuk memenuhi kebutuhan data Anda dengan lebih efektif.
                            </p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- // end .section -->



    <div class="section light-bg">

        <div class="container">
            <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                    <ul class="list-unstyled ui-steps">
                        <li class="media">
                            <div class="circle-icon mr-4">1</div>
                            <div class="media-body">
                                <h5>Pengunjung/Tamu Datang</h5>
                                <p>Pengunjung atau tamu datang ke lokasi dan menyampaikan maksud kunjungan kepada resepsionis untuk mendapatkan informasi atau layanan yang dibutuhkan.</p>
                            </div>
                        </li>
                        <li class="media my-4">
                            <div class="circle-icon mr-4">2</div>
                            <div class="media-body">
                                <h5>Resepsionis</h5>
                                <p>Resepsionis menyambut pengunjung atau tamu, memberikan informasi yang diperlukan, dan mengarahkan mereka untuk mengisi buku tamu serta menentukan layanan yang diinginkan.</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="circle-icon mr-4">3</div>
                            <div class="media-body">
                                <h5>Mengisi Buku Tamu dan Menentukan Pilihan</h5>
                                <p>Pengunjung atau tamu mengisi buku tamu dengan data diri serta memilih layanan atau tujuan yang sesuai dengan kebutuhan mereka.</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="circle-icon mr-4">4</div>
                            <div class="media-body">
                                <h5>Pengunjung/Tamu Pulang</h5>
                                <p>Setelah mendapatkan layanan atau informasi yang dibutuhkan, pengunjung atau tamu menyelesaikan kunjungan dan meninggalkan lokasi.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
    <!-- // end .section -->
    <div class="section pt-0">
        <div class="container">
            <div class="section-title">
                <small>FAQ</small>
                <h3>Frequently Asked Questions</h3>
            </div>

            <div class="row pt-4">
                <div class="col-md-6">
                    <h4 class="mb-3">Apakah saya bisa mendapatkan data sampel terlebih dahulu?</h4>
                    <p class="light-font mb-5">L Anda dapat mengakses data sampel yang tersedia di portal resmi BPS Kota Bandar Lampung sebelum memutuskan untuk membeli data lengkap. Data ini memberikan gambaran umum tentang jenis informasi yang tersedia.</p>
                    <h4 class="mb-3">Apakah saya bisa mengubah layanan saya nanti?</h4>
                    <p class="light-font mb-5">Ya, Anda dapat menyesuaikan layanan yang Anda pilih sesuai dengan kebutuhan Anda. Silakan hubungi kami untuk informasi lebih lanjut tentang cara mengubah atau memperbarui layanan data Anda.</p>

                </div>
                <div class="col-md-6">
                    <h4 class="mb-3">Fitur apa saja yang ditawarkan oleh Badan Pusat Statistik Kota Bandar Lampung?</h4>
                    <p class="light-font mb-5">BPS Kota Bandar Lampung menyediakan berbagai fitur seperti akses ke data statistik terkini, layanan konsultasi data, dan sistem informasi geografis (SIG) yang dapat membantu dalam analisis data. Kami juga menawarkan layanan survei dan sensus yang disesuaikan dengan kebutuhan spesifik Anda.</p>
                    <h4 class="mb-3">Apakah ada kontrak yang harus saya tanda tangani?</h4>
                    <p class="light-font mb-5">Untuk layanan data tertentu, mungkin diperlukan kontrak untuk memastikan penggunaan data sesuai dengan ketentuan BPS. Hubungi tim kami untuk mengetahui apakah layanan yang Anda pilih memerlukan kontrak.</p>

                </div>
            </div>
        </div>

    </div>
    <!-- // end .section -->

    <div class="section" id="contact">
        <div class="container">
            <div class="section-title">
                <small>BUKU TAMU</small>
                <h3>Buku Tamu Badan Pusat Statistik Kota Bandar Lampung</h3>
            </div>

            <div class="formbold-main-wrapper">
                <div class="formbold-form-wrapper">
                  <form action="{{ route('addBT') }}" method="POST">
                    @csrf
                    @if (session()->has('success'))
                    {{-- <div class="alert alert-primary" role="alert">
                        <script>alert("{{ session()->get('success') }}")</script>
                    </div> --}}
                    <!-- Button trigger modal -->
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                $('#exampleModalCenter').modal('show');
                            });
                        </script>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">    
                                    <div class="d-flex justify-content-center">
                                        <div class="content text-center">
                                            <div class="ratings">
                                                <span class="product-rating">Seberapa Puas Anda Terhadap Pelayanan Kami</span>
                                                <div class="rating"> <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                                                </div>
                                                <div class="rating-text">       
                                                    <span>Berikan Penilaian Terhadap Pelayanan Kami</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Beri Nilai</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    @endif
                    @if (session()->has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session()->get('error') }}
                    </div>
                    @endif
                      <div class="formbold-input-flex">
                        <div>
                            <input
                            type="text"
                            name="nama"
                            id="firstname"
                            class="formbold-form-input"
                            value="{{ old('nama') }}"
                            />
                            @if ($errors->has('nama'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('nama') }}
                            </div>
                            @endif
                            <label for="firstname" class="formbold-form-label"> Nama </label>
                        </div>
                        <div>
                            <input
                            type="email"
                            name="email"
                            id="email"
                            class="formbold-form-input"
                            value="{{ old('email') }}"
                            />
                            @if ($errors->has('email'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('email') }}
                            </div>
                            @endif
                            <label for="email" class="formbold-form-label"> Email </label>
                        </div>
                      </div>
              
                      <div class="formbold-input-flex">
                        <div>
                            <input
                            type="number"
                            name="no_tlp"
                            id="phone"
                            class="formbold-form-input"
                            value="{{ old('no_tlp') }}"
                            />
                            @if ($errors->has('no_tlp'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('no_tlp') }}
                            </div>
                            @endif
                            <label for="phone" class="formbold-form-label"> Nomor Telepon </label>
                        </div>
                        <div>
                            <input
                            type="text"
                            name="alamat"
                            id="Address"
                            class="formbold-form-input"
                            value="{{ old('alamat') }}"
                            />
                            @if ($errors->has('alamat'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('alamat') }}
                            </div>
                            @endif
                            <label for="phone" class="formbold-form-label"> Alamat </label>
                        </div>

                      </div>
                    <div class="formbold-input-flex">
                        <div>
                            <input
                            type="text"
                            name="kesan"
                            id="Address"
                            class="formbold-form-input"
                            value="{{ old('kesan') }}"
                            />
                            @if ($errors->has('kesan'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('kesan') }}
                            </div>
                            @endif
                            <label for="phone" class="formbold-form-label"> Kesan </label>
                        </div>
                        <div>
                            <select name="prihal" id=""  class="formbold-form-input">
                                <option value="{{ old('prihal') }}">{{ old('prihal') }}</option>
                                <option value="Perpusatakaan Cetak">Perpusatakaan Cetak</option>
                                <option value="Perpusatakaan Digital">Perpusatakaan Digital</option>
                                <option value="Data Mikro">Data Mikro</option>
                                <option value="Konsultasi Statistik">Konsultasi Statistik</option>
                                <option value="Penjualan Softcopy/Hardcopy">Penjualan Softcopy/Hardcopy</option>
                            </select>
                            @if ($errors->has('prihal'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('prihal') }}
                            </div>
                            @endif
                            <label for="phone" class="formbold-form-label"> Prihal </label>
                        </div>
                    </div>
                        <div>
                            <label for="phone" class="formbold-form-label"> Pekerjaan </label>
                            <input
                            type="text"
                            name="pekerjaan"
                            id="Address"
                            class="formbold-form-input"
                            value="{{ old('pekerjaan') }}"
                            />
                            @if ($errors->has('pekerjaan'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('pekerjaan') }}
                            </div>
                            @endif
                        </div>
                      <div class="formbold-textarea">
                          <textarea
                              rows="6"
                              name="kegiatan"
                              id="message"
                              placeholder="Write your message..."
                              class="formbold-form-input"
                              value="{{ old('kegiatan') }}"
                          ></textarea>
                          @if ($errors->has('kegiatan'))
                          <div class="alert alert-danger" role="alert">
                              {{ $errors->first('kegiatan') }}
                          </div>
                          @endif
                          <label for="message" class="formbold-form-label"> Kegiatan </label>
                      </div>
              
                      <button class="formbold-btn">
                          Send Message
                      </button>
                  </form>
                </div>
              </div>

        </div>

    </div>


    <div class="light-bg py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                    <p class="mb-2"> <span class="ti-location-pin mr-2"></span>  Jl. Sultan Syahril No.30, Pahoman, Engal, Kota Bandar Lampung</p>
                    <div class=" d-block d-sm-inline-block">
                        <p class="mb-2">
                            <span class="ti-email mr-2"></span> <a class="mr-4" href="mailto:bps1871@bps.go.id">bps1871@bps.go.id</a>
                        </p>
                    </div>
                    <div class="d-block d-sm-inline-block">
                        <p class="mb-0">
                            <span class="ti-headphone-alt mr-2"></span> <a href="https://wa.me/085281871871">+62-8528-1871-871</a>
                        </p>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="social-icons">
                        <a href="#"><span class="ti-facebook"></span></a>
                        <a href="#"><span class="ti-twitter-alt"></span></a>
                        <a href="https://instagram.com/bpsbandarlampung" target="_blank"><span class="ti-instagram"></span></a>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- jQuery and Bootstrap -->
    <script src="{{ asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://kit.fontawesome.com/f78db6a183.js" crossorigin="anonymous"></script>

    <!-- Plugins JS -->
    <!-- Custom JS -->
    <script src="{{ asset('js/script.js')}}"></script>

</body>

</html>
