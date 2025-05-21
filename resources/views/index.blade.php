<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tabungan - Bank Perekonomian Rakyat Insumo Sumberarto</title>
        <link rel="icon" type="image/x-icon" href= "https://bprbisa.co.id/wp-content/uploads/2024/09/cropped-Logo512px-32x32.png"/>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('styles.css') }}" rel="stylesheet" />
        <link id="pagestyle" href="assets/css/material-kit.css?v=3.1.0" rel="stylesheet" />

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
          function validasi() {
            var nama = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var subject = document.getElementById("subject").value;
            var message = document.getElementById("message").value;

            if(nama.length == 0 && email == 0 && subject == 0 && message == 0){
              Swal.fire({
                  title: "Kesalahan Input",
                  text: "Form harus diisi",
                  icon: "error"
              });
              return false;
            }

            if(nama.length == 0){
              Swal.fire({
                  title: "Kesalahan Input",
                  text: "Nama harus diisi",
                  icon: "error"
              });
              return false;
            }

            if(email.length == 0){
              Swal.fire({
                  title: "Kesalahan Input",
                  text: "Email harus diisi",
                  icon: "error"
              });
              return false;
            }

            if(subject.length == 0){
              Swal.fire({
                  title: "Kesalahan Input",
                  text: "Subjek harus diisi",
                  icon: "error"
              });
              return false;
            }

            if(message.length == 0){
              Swal.fire({
                  title: "Kesalahan Input",
                  text: "Pesan harus diisi",
                  icon: "error"
              });
              return false;
            }

            if(nama.length != 0 && email != 0 && subject != 0 && message != 0){
              Swal.fire({
                  title: "Berhasil",
                  text: "Pesan berhasil dikirim",
                  icon: "success"
              });
              return false;
            }
          }
        </script>

    </head>
    <body id="page-top">

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="#page-top"><img src="{{ asset('assets/img/LOGOINSUMO_NEW.png') }}" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#!">Sign Up</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Log In</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Header-->
        <header class="masthead text-center mastheadbackground">
            <div class="masthead-content">
                <div class="container px-5 textbg">
                    <h1 class="masthead-heading mb-0">Tabungan Si BISA</h1>
                    <br>
                    <p class="mb-0">Tabungan Si BISA adalah tabungan yang diterbitkan oleh PT BPR INSUMO SUMBERARTO yang diperuntukkan kepada nasabah perorangan maupun perusahaan. Tabungan ini merupakan jenis tabungan yang dapat diambil sewaktu-waktu.</p>
                    <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#scroll">Learn More</a>
                </div>
            </div>
        </header>


        <!-- Content section 2-->
        <section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="{{ asset('assets/img/35855.jpg') }}" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Fitur Tabungan Si BISA</h2>
                            <ul class="wp-block-list is-style-vk-arrow-mark">
                              <i class="fa fa-arrow-right mr-3" aria-hidden="true"></i>Setoran awal minimal Rp. 100.000
                              <br>
                              <i class="fa fa-arrow-right mr-3" aria-hidden="true"></i>Setoran selanjutnya minimal Rp. 50.000
                              <br>
                              <i class="fa fa-arrow-right mr-3" aria-hidden="true"></i>Saldo minimum Rp. 25.000
                              <br>
                              <i class="fa fa-arrow-right mr-3" aria-hidden="true"></i>Biaya administrasi = Tidak ada
                              <br>
                              <i class="fa fa-arrow-right mr-3" aria-hidden="true"></i>Biaya tutup rekening : Rp. 25.000
                              <br>
                              <i class="fa fa-arrow-right mr-3" aria-hidden="true"></i>Administrasi rekening pasif Rp. 5.000
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Content section 3-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="{{ asset('assets/img/benefit.png') }}" alt="..." /></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4">Benefit yang didapatkan</h2>
                            <ul class="wp-block-list is-style-vk-arrow-mark">
                              <i class="fa fa-arrow-right mr-3" aria-hidden="true"></i>Suku bunga menarik
                              <br>
                              <i class="fa fa-arrow-right mr-3" aria-hidden="true"></i>Perhitungan bunga dilakukan dengan menggunakan metode bunga harian
                              <br>
                              <i class="fa fa-arrow-right mr-3" aria-hidden="true"></i>Pemberian bunga dilakukan setiap akhir bulan setiap bulannya
                              <br>
                              <i class="fa fa-arrow-right mr-3" aria-hidden="true"></i>Tabungan dapat dijadikan sebagai agunan kredit
                              <br>
                              <i class="fa fa-arrow-right mr-3" aria-hidden="true"></i>Dana tabungan aman dijamin Lembaga Penjamin Simpanan (LPS) sampai dengan Rp. 2 Milyar.
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Content section 4-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="{{ asset('assets/img/23991117_6895861.jpg') }}" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Risiko</h2>
                            <p>Rekening akan ditutup secara otomatis oleh sistem jika termasuk kedalam kriteria rekening pasif serta saldo kurang dari Rp.25.000 dan tidak terdapat transaksi penyetoran maupun penarikan selama 12 bulan berturut-turut.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
          <div class="container px-5">
                <div class="row gx-5 align-items-center">
                  <div class="container align-items-center ml-4">
                    <img width="1024" height="60" src="{{ asset('assets/img/FOOTER-MITRA-KORPORASI-1.jpg') }}" alt="">
                  </div>
                </div>
            </div>
        </section>
        <br>
        <br>

        <!-- Content section 5-->
        <section>
          <div class="container px-5">
              <div class="row">
                <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
                  <h3 class="text-center">Hubungi Kami</h3>
                  <br>
                  <form id="contactForm" name="contactForm" class="contactForm" onsubmit="return validasi();">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="label" for="name">Nama Lengkap</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nama">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="label" for="email">Email Address</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="label" for="subject">Subjek</label>
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="label" for="#">Pesan</label>
                                <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Pesan"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Kirim Pesan" class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                  </form>
                </div>
              </div>
          </div>
      </section>

      <!--Footer-->
      <footer class="py-5 bg-black">
        <div class="container px-5"><p class="m-0 text-center text-white small">Copyright © Bank Perekonomian Rakyat Insumo Sumberarto All Rights Reserved.</p></div>
      </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    <!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>
