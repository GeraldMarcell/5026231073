<html lang="en">

    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1">

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
            function validasi(){
                
                //default return adalah true

                var nama = document.getElementById("name").value;
                var email = document.getElementById("email").value;
                var subject = document.getElementById("subject").value;
                var message = document.getElementById("message").value;
                
                //cek sudah diisi atau belum, gk boleh kurang
                
                let text = document.getElementById("name").value;
                let regex = /\d/;

                if (regex.test(text)){
                    return false;
                }

                if(nama.length == 0 && email.length == 0 && subject.length == 0 && message.length == 0){
                    Swal.fire({
                        title: "Kesalahan Input",
                        text: "Form harus diisi!",
                        icon: "error"
                    });
                    return false;
                }

                if(nama.length == 0){
                    Swal.fire({
                        title: "Kesalahan Input",
                        text: "Nama tidak boleh kosong",
                        icon: "error"
                    });
                    return false;
                }

                let panjangnama = document.getElementById("name").value;
                if(panjangnama.length < 2){
                    Swal.fire({
                        title: "Kesalahan Input",
                        text: "Nama tidak boleh kurang atau sama dengan 2",
                        icon: "error"
                    });
                    return false;
                }

                if(email.length == 0){
                    Swal.fire({
                        title: "Kesalahan Input",
                        text: "Email tidak boleh kosong",
                        icon: "error"
                    });
                    return false;
                }
                if(subject.length == 0){
                    Swal.fire({
                        title: "Kesalahan Input",
                        text: "Subjek tidak boleh kosong",
                        icon: "error"
                    });
                    return false;
                }
                if(message.length == 0){
                    Swal.fire({
                        title: "Kesalahan Input",
                        text: "Pesan tidak boleh kosong",
                        icon: "error"
                    });
                    return false;
                }

                Swal.fire({
                    title: "Berhasil!",
                    text: "Pesan Anda telah dikirim!",
                    icon: "success"
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById("contactForm").submit();
                    }
                });

                return false;
             }

        </script>

    </head>

    <body>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper">
                    <div class="row no-gutters">
                        <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3 class="mb-4">Hubungi Kami</h3>
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
                </div>
            </div>
        </div>
    </body>
</html>