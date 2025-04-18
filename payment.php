<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckOut - Pembayaran Menuju Whatsapp</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
    <style>
      @import url("https://file.gifan.id/fonts/gFont.css");

      body {
        background-color: #fff;
        background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
        font-family: "Pacifico", cursive;
        font-family: "Signika Negative", sans-serif;
      }

      .fixed-bottom {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        z-index: 1030;
      }

      @media (min-height: 420px) {
        .fixed-bottom {
          position: fixed !important;
          bottom: 0;
        }
      }
    </style>
  </head>
  <body>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <center><h5 class="card-title">CheckOut Website <span style="color: blue;">© Deni Hosting</span></h5></center>
              <form method="POST">
                <div class="mb-3">
                  <label class="form-label">
                    <i class="fa-sharp fa-solid fa-user fa-beat"></i> Nama </label>
                  <div class="input-group">
                    <input type="text" name="name" id="nama" class="form-control" placeholder="nama panggilan anda" required>
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label">
                    <i class="fa-sharp fa-regular fa-envelope fa-beat"></i> Email/Tele Ress </label>
                  <div class="input-group">
                    <input type="email" name="email" id="email" class="form-control" placeholder="deninesia5@gmail.com" required>
                  </div>
                </div>
                                <div class="mb-3">
                  <label class="form-label">
                    <i class="fa-sharp fa-solid fa-user fa-beat"></i> Nama Ress </label>
                  <div class="input-group">
                    <input type="text" name="ress" id="ress" class="form-control" placeholder="⚡ WEB || DENI HOST ⚡" required>
                  </div>
                </div>
                    <div class="mb-3">
                  <label class="form-label">
                    <i class="fa-sharp fa-solid fa-mobile-screen-button fa-beat"></i>  Nebar Sosmed </label>
                  <select class="form-select" name="payment" id="phone" required>
                    <option selected disabled>Pilih Nebar Disosial Media</option>
                    <option>ADS TIKTOK</option>
                    <option>WHATSAP</option>
                    <option>FACEBOOK</option>
                    <option>YOUTUBE</option>
                    <option>INSTAGRAM</option>
                  </select>
                </div>
                                <div class="mb-3">
                  <label class="form-label">
                    <i class="fa-sharp fa-brands fa-chrome fa-beat"></i>Tampilan Website yang tersedia </label>
                  <select class="form-select" name="payment" id="name" required>
                    <option selected disabled>  Pilih Tampilan Website </option>
                          <option>CLAIM FF V1</option>
                          <img src="https://i.ibb.co/7QYWyJY/c2e89705-f752-4e1a-b070-c671c2c6c58a.jpg" class="animate__animated animate__bounceIn animate__slow" style="width:100%;" alt="eos WEB">
 <div class="carousel-caption" style="left:3%;top:-4%;font-size:1em;text-align:left;text-shadow: 2px 2px 5px #000;">
                          <option>MEDIAFIRE</option>
                          <option>GRUP WA VIRAL 2</option>
                          <option>CODASHOP FF</option>
                          <option>CLAIM FF</option>
                          <option>SPIN FF V1</option>
                          <option>WEB JUDOL MPO</option>
                          <option>WEB JUDOL ONIX</option>
                          <option>GRUP VIRAL</option>
                          <option>WEB DANA KAGET V1</option>
                          <option>*WEB JUDOL MPO V1*</option>
                          <option>*cPanel Mini-Unli</option>
                          <option>WHM Mini-Unli</option>
                
                    
                          
                      
                        
                        
                
                          
                          
                          
    
        
  
                  </select>
                </div>
                <div class="mb-3">
                  <label class="form-label">
                    <i class="fa-sharp fa-solid fa-credit-card-alt fa-beat"></i> Pilih Metode Pembayaran </label>
                  <select class="form-select" name="payment" id="service" required>
                    <option selected disabled>Pilih metode pembayaran</option>
                    <option>DANA</option>
                    <option>QRIS</option>
                  
                    
                  </select>
                </div>
              <div class="d-grid gap-2">
                  <button onclick="gotowhatsapp()" type="submit" class="btn btn-success btn-block">
                    <i class="fa-brands fa-whatsapp fa-fade"></i> Pesan Via Whatsapp </button>
                </div>
              </form>
            </div>
          </div>
          
        </div>
      </div>
    </div>
        <script>    
            function gotowhatsapp() {
            var name = document.getElementById("name").value;
            var nama = document.getElementById("nama").value;
            var ress = document.getElementById("ress").value;            
            var phone = document.getElementById("phone").value;
            var email = document.getElementById("email").value;
            var service = document.getElementById("service").value;

            var url =
              "https://wa.me/6282220120036?text=" + 'halo saya ingin membeli web' + "%0a" + "%0a" +
              "NAMA  SAYA   : " +
               nama + 
               "%0a" +
              "TAMPILANNYA  : " + 
              name + 
              "%0a" +
              "EMAIL  RESS    : " + 
              email + 
              "%0a" +              
              "NEBAR SOSMED : " + 
              phone + 
              "%0a" +
              "BAYAR VIA : " + 
              service;

            window.open(url, "_blank").focus();
          }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/f0b785de15.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.js"></script>
  </body>
</html>
