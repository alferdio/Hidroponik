<?php
       session_start();
       define('DB_SERVER', "localhost");
       define('DB_USERNAME', "root");
       define('DB_PASSWORD', "");
       define('DB_DATABASE', "hidroponik");
       $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
         date_default_timezone_set("Asia/Bangkok");

        //read the json file contents
        $jsondata = file_get_contents('https://api.thingspeak.com/channels/1037617/feeds/last.json');

        //convert json object to php associative array
        $data = json_decode($jsondata, true);

        //get the employee details
        $nilai_tds = $data['field1'];
        $nilai_pH = $data['field2'];
        $nilai_jarak = $data['field3'];
        /*$ketinggianAlat = $data['field3'];
        $cahaya = $data['field4'];
        $kualitasUdara = $data['field5'];
        $kelembapan = $data['field6'];
        $entriData = $data['entry_id'];*/
       // $ketinggianAlat = $data['field3'];

        //insert into mysql table
        $sql = "INSERT INTO `data`(`nilai_tds`, `nilai_pH`, `nilai_jarak`) VALUES ('$nilai_tds','$nilai_pH','$nilai_jarak')";
        if (mysqli_query($db, $sql)) {
        } else {
            echo "";
        }

        mysqli_close($db);
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hidroponik</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta http-equiv=refresh content=10;url=index.php> -->


    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="jquery-1.12.1.min.js"></script>
   <!--  <script type="text/javascript">
        $(document).ready(function ()
        {
            GetData();
        });

        // function GetData()
        // {
        //     var url = 'https://api.thingspeak.com/channels/990143/feeds.json?key=3VC9ZS0XO4V73KFK&results=2';
        //     $.ajax
        //     ({
        //         url: url,
        //         type: 'GET',
        //         contentType: "application/json",
        //         //dataType: "json",
        //         //crossDomain: true,
        //         success: function (data, textStatus, xhr) {
        //             $.each(data, function (i, item) {
        //                 if (i == 'feeds') {
        //                     var ubound = item.length;
        //                     $('#txtField1').val(item[ubound - 1].field1);
        //                 }
        //                 if (i == 'feeds') {
        //                     var ubound = item.length;
        //                     $('#txtField2').val(item[ubound - 1].field2);
        //                 }
        //             });
        //         },
        //         error: function (xhr, textStatus, errorThrown) {
        //             alert(errorThrown);
        //         }
        //     });

        //     setTimeout(GetData, 10000);
        // }
    </script> -->
    
  </head>
  <body>
  
  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

  <div class="site-wrap">

    

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap js-site-navbar bg-white">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="row align-items-center">
            <div class="col-2">
              <h2 class="mb-0 site-logo"><a href="index.php" class="font-weight-bold text-uppercase">
                  <img src="images/logo.png" alt="Image" class="img-fluid rounded-circle w-25 mx-auto">
              </a></h2>
            </div>
            <div class="col-10">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                  <ul class="site-menu js-clone-nav d-none d-lg-block">
                    <li class="active"><a href="index.php">Beranda</a></li>
                    <li><a href="services.html">Produk</a></li>
                    <li><a href="blog.html">Penjelasan</a></li>
                    <li><a href="contact.html">Kontak</a></li>
                    <li><a href="login.php"><span class="d-inline-block bg-primary text-white btn btn-primary">Masuk</span></a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="slide-one-item home-slider owl-carousel">
      
      <div class="site-blocks-cover inner-page overlay" style="background-image: url(images/b9.jpg);" data-aos="fade" data-stellar-background-ratio="0.6">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-6 text-center" data-aos="fade">
              <h2 class="font-secondary font-weight-bold text-uppercase" style="color: white" style="font-size: 60">Sistem Pemantauan Tanaman Hidroponik</h2>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover inner-page overlay" style="background-image: url(images/bd.jpg);" data-aos="fade" data-stellar-background-ratio="0.2">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1 class="font-secondary font-weight-bold text-uppercase">Mikrokontroller Arduino</h1>
            </div>
          </div>
        </div>
      </div> 
    </div>

    <div class="slant-1"></div>

      <div class="site-section first-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 text-center" data-aos="fade">
            <span class="caption d-block mb-2 font-secondary font-weight-bold">tujuan & manfaat</span>
            <h2 class="site-section-heading text-uppercase text-center font-secondary">dari hidroponik monitoring system</h2>
          </div>
        </div>
        <div class="row border-responsive">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 border-right" data-aos="fade-up" data-aos-delay="">
            <div class="text-center">
              <span class="flaticon-money-bag-with-dollar-symbol display-4 d-block mb-3 text-primary"></span>
              <h3 class="text-uppercase h4 mb-3">hemat</h3>
              <p>Penggunaan pupuk menjadi lebih hemat</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 border-right" data-aos="fade-up" data-aos-delay="100">
            <div class="text-center">
              <span class="flaticon-bar-chart display-4 d-block mb-3 text-primary"></span>
              <h3 class="text-uppercase h4 mb-3">bebas hama</h3>
              <p>Tanaman dapat terhidar dari hama</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="text-center">
              <span class="flaticon-medal display-4 d-block mb-3 text-primary"></span>
              <h3 class="text-uppercase h4 mb-3">efektif</h3>
              <p>Tanaman dapat tumbuh dengan cepat</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 border-right" data-aos="fade-up" data-aos-delay="">
            <div class="text-center">
              <span class="flaticon-box display-4 d-block mb-3 text-primary"></span>
              <h3 class="text-uppercase h4 mb-3">efisien</h3>
              <p>Hemat tenaga dan waktu</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 border-right" data-aos="fade-up" data-aos-delay="100">
            <div class="text-center">
              <span class="flaticon-medal display-4 d-block mb-3 text-primary"></span>
              <h3 class="text-uppercase h4 mb-3">fleksibel</h3>
              <p>Dapat mengganti tanaman dengan mudah</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="text-center">
              <span class="flaticon-box display-4 d-block mb-3 text-primary"></span>
              <h3 class="text-uppercase h4 mb-3">mudah</h3>
              <p>Mempermudah pekerjaan maupun perawatan tanaman</p>
            </div>
          </div>
        </div>
      </div>
    </div>

   <!--  <div class="site-section first-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 text-center" data-aos="fade"> 
            <span class="caption d-block mb-2 font-secondary font-weight-bold">Keunggulan</span>
            <h2 class="site-section-heading text-uppercase text-center font-secondary">dengan sistem DFT</h2>
          </div>
        </div>
        <div class="row border-responsive">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 border-right" data-aos="fade-up" data-aos-delay="">
            <div class="text-center">
              <span class="flaticon-money-bag-with-dollar-symbol display-4 d-block mb-3 text-primary"></span>
              <h3 class="text-uppercase h4 mb-3">Hemat</h3>
              <p>Tidak butuh listrik selama 24 jam sehingga pemakaian energi listrik lebih hemat</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 border-right" data-aos="fade-up" data-aos-delay="100">
            <div class="text-center">
              <span class="flaticon-bar-chart display-4 d-block mb-3 text-primary"></span>
              <h3 class="text-uppercase h4 mb-3">Ketahanan</h3>
              <p>Tanaman tidak akan kering/layu/mati walaupun sistem tidak bekerja/terganggu ketika pasokan listrik mat</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 border-right" data-aos="fade-up" data-aos-delay="200">
            <div class="text-center">
              <span class="flaticon-medal display-4 d-block mb-3 text-primary"></span>
              <h3 class="text-uppercase h4 mb-3">Nutrisi</h3>
              <p>Nutrisi tanaman selalu tersedia dalam jumlah cukup sehingga tanaman bisa tumbuh optimal</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="text-center">
              <span class="flaticon-box display-4 d-block mb-3 text-primary"></span>
              <h3 class="text-uppercase h4 mb-3">Kecepatan</h3>
              <p>Tanaman yang menggunakan sistem DFT memiliki umur panen yang lebih cepat</p>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    
  <div class="site-half">
    <div class="img-bg-1" style="background-image: url('images/s1.jpg');" data-aos="fade"></div>
    <div class="container">
      <div class="row no-gutters align-items-stretch">
        <div class="col-lg-5 ml-lg-auto py-5">
          <span class="caption d-block mb-2 font-secondary font-weight-bold">Analog pH Sensor</span>
          <h2 class="site-section-heading text-uppercase font-secondary mb-5">for Arduino</h2>
          <p>Ini adalah Arduino pH Sensor Meter Kit profesional dengan elektroda industri, memiliki koneksi yang sederhana, nyaman, praktis dan tahan lama, yang membuatnya sangat cocok untuk monitoring online jangka panjang. Memiliki LED yang berfungsi sebagai Indikator Daya, konektor BNC dan antarmuka sensor PH2.0. Elektroda pH industri ini terbuat dari membran kaca sensitif dengan impedansi rendah, dapat digunakan dalam berbagai pengukuran PH dengan respon cepat dan stabilitas termal yang sangat baik, memiliki reproduksibilitas yang baik. Dalam rentang 0pH hingga 14pH, tegangan outputnya linear.</p>  
        </div>
      </div>
    </div>
  </div>

  <div class="site-half block">
    <div class="img-bg-1 right" style="background-image: url('images/s2.jpg');" data-aos="fade"></div>
    <div class="container">
      <div class="row no-gutters align-items-stretch">
        <div class="col-lg-5 mr-lg-auto py-5">
          <span class="caption d-block mb-2 font-secondary font-weight-bold">Analog TDS Sensor</span>
          <h2 class="site-section-heading text-uppercase font-secondary mb-5">for Arduino</h2>
          <p>Merupakan sensor kompatibel Arduino yang digunkan untuk mengukur kadar TDS (Total Dissolve Solid ) pada air.
            TDS sendiri merupakan kadar konsentrasi objek solid yang terlarut dalam air. Semakin tinggi nilai TDS nya maka semakin keruh airnya, begitupun sebaliknya. Semakin rendah nilai TDS nya maka semakin jernih pula air tersebut.
            Dengan Analog TDS Sensor/Meter for Arduino, Anda bisa membuat sendiri TDS meter di rumah menggunkan Arduino atau mikrokontroler sejenis.
            Sensor ini mendukung input tegangan antara 3.3 - 5V, serta output tegangan analog yang dihasilkan berkisar pada 0 - 2.3V. Sangat cocok untuk aplikasi manajemen kualitas air, hidroponik, dsb..</p>  
        </div>
      </div>
    </div>
  </div>

  <div class="site-half">
    <div class="img-bg-1" style="background-image: url('images/sr04.png');" data-aos="fade"></div>
    <div class="container">
      <div class="row no-gutters align-items-stretch">
        <div class="col-lg-5 ml-lg-auto py-5">
          <span class="caption d-block mb-2 font-secondary font-weight-bold">Ultrasonic Sensor</span>
          <h2 class="site-section-heading text-uppercase font-secondary mb-5">for Arduino</h2>
          <p>sensor ultrasonik adalah sensor yang menggunakan gelombang suara untuk mendeteksi suatu benda atau objek yang ada di depannya, sensor ini meiliki 2 pin utama yaitu pin trigger dan echo. pin trigger merupakan pin yang digunakan untuk mengirim sinyal gelombang ultrasonik yang kemudian dipantulkan ke benda yang ada di depannya. sementara pin echo merupakan pin yang digunakan untuk menerima hasil pantulan</p>  
        </div>
      </div>
    </div>
  </div>
    

  <div class="site-section ">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <span class="caption d-block mb-2 font-secondary font-weight-bold">Alat &amp; Komponen</span>
            <h2 class="site-section-heading text-uppercase text-center font-secondary">Yang Digunakan</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-13 nav-direction-white">
            <div class="nonloop-block-13 owl-carousel">
              <div class="media-image">
                <img src="images/s3.jpg" alt="Image" class="img-fluid">
                <div class="media-image-body">
                  <h2 class="font-secondary text-uppercase">Arduino Mega</h2>
                  <p>Board Arduino Mega 2560 adalah sebuah Board Arduino yang menggunakan ic ATmega 2560</p>
                  <p><a href="#" class="btn btn-primary text-white px-4">Learn More</a></p>
                </div>
              </div>
              <div class="media-image">
                <img src="images/s4.jpg" alt="Image" class="img-fluid">
                <div class="media-image-body">
                  <h2 class="font-secondary text-uppercase">NodeMCU</h2>
                  <p>NodeMCU adalah sebuah platform IoT yang bersifat opensource</p>
                  <p><a href="#" class="btn btn-primary text-white px-4">Learn More</a></p>
                </div>
              </div>
              <div class="media-image">
                <img src="images/rtc.jpg" alt="Image" class="img-fluid">
                <div class="media-image-body">
                  <h2 class="font-secondary text-uppercase">modul RTC</h2>
                  <p>untuk mencatat waktu</p>
                  <p><a href="#" class="btn btn-primary text-white px-4">Learn More</a></p>
                </div>
              </div>
              <div class="media-image">
                <img src="images/s8.jpg" alt="Image" class="img-fluid">
                <div class="media-image-body">
                  <h2 class="font-secondary text-uppercase">Pipa</h2>
                  <p>Media pengairan nutrisi dan sebagai tempat tumbuh tanaman yang dibudidayakan</p>
                  <p><a href="#" class="btn btn-primary text-white px-4">Learn More</a></p>
                </div>
              </div>
              <div class="media-image">
                <img src="images/s10.jpg" alt="Image" class="img-fluid">
                <div class="media-image-body">
                  <h2 class="font-secondary text-uppercase">Nutrisi AB Mix</h2>
                  <p>AB Mix merupakan campuran antara pupuk A dan pupuk B</p>
                  <p><a href="#" class="btn btn-primary text-white px-4">Learn More</a></p>
                </div>
              </div>
              <div class="media-image">
                <img src="images/s11.jpg" alt="Image" class="img-fluid">
                <div class="media-image-body">
                  <h2 class="font-secondary text-uppercase">Benih Tanaman</h2>
                  <p>Adalah istilah yang dipakai untuk bahan dasar pemeliharaan tanaman.</p>
                  <p><a href="#" class="btn btn-primary text-white px-4">Learn More</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="slant-1"></div>

    <body>
    <div class="site-section section-counter" style="background-image: url(images/b10.jpg);" style="min-height: 600px" style="height: calc(100vh);" data-aos="fade" data-stellar-background-ratio="0.6">

      <div class="container">
        <div class="row">

          <div class="col-lg-6">
            <p class="mb-5"><img src="images/0.png" alt="Image" class="img-fluid"></p>
          </div>
          <div class="col-lg-5 ml-auto">

            <h2 class="site-section-heading mb-3 font-secondary text-uppercase" style="color: white">Monitoring</h2>
            <div class="row">
              <div class="col-lg-6">
                <div class="counter">
                  <span class="caption" style="color: white">Tds</span>
                  <span class="number" style="color: white" style="background-color: transparent;" >
                    <p id="tds"></p>
                  </span>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="counter">
                  <span class="caption" style="color: white">pH</span>
                  <span class="number" style="color: white" style="background-color: transparent;">
                    <p id="ph"></p>
                  </span>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="counter">
                  <span class="caption" style="color: white">ultrasonic</span>
                  <span class="number" style="color: white" style="background-color: transparent;">
                    <p id="s"></p>
                  </span>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="counter">
                  <span class="caption" style="color: white"></span>
                  <span class="number" style="color: white" style="background-color: transparent;">
                    <p></p>
                  </span>
                </div>
              </div>
              <div class="col-lg-6">
              <div class="counter">
                  <span class="caption" style="color: white">  Status pH :</span>
                  <span class="number" style="color: white" style="background-color: transparent;">
                    <p class="site-section-heading mb-3 font-secondary text-uppercase" id="status"></p>
                  </span>
                 </div> 
              </div>
              <div class="col-lg-6">
              <div class="counter">
                  <span class="caption" style="color: white">  Status TDS :</span>
                   <span class="number" style="color: white" style="background-color: transparent;">
                    <p class="site-section-heading mb-3 font-secondary text-uppercase" id="statuse"></p>
                    </span>
                </div>
                </div>
              
                <!-- <div class="counter"> -->
                  <!--<span class="caption" style="color: white">Status pH</span>
                  <span class="number" style="color: white" style="background-color: transparent;">
                    <p id="status"></p>
                  
                  <span class="caption" style="color: white">Status TDS</span>
                   <span class="number" style="color: white" style="background-color: transparent;"> -->
                   <!-- <p id="statuse"></p>
                    </span>
                  </span>
                 </div> -->
              
              </div>
            </div>
            </div>
          </div>
        </div>

    <!-- </body> -->

    <div class="slant-1"></div>
    <!-- <div class="site-section first-section"> -->
    <!-- <div class="slant-2"></div>
    <div class="site-section block-14 nav-direction-white"> -->
    <div class="site-section block-14 nav-direction-white">

      <div class="container">
        
        <div class="row mb-5">
          <div class="col-md-12">
            <h2 class="site-section-heading text-center text-uppercase">Cara Kerja</h2>
          </div>
        </div>

        <div class="nonloop-block-14 owl-carousel">
          

            <div class="d-block block-testimony mx-auto text-center">
              <div class="person w-25 mx-auto mb-4">
                <img src="images/sensor.jpg" alt="Image" class="img-fluid rounded-circle w-25 mx-auto">
              </div>
              <div>
                <h2 class="h5 mb-4">Pembacaan Sensor</h2>
                <blockquote>Mikrokontroller Arduino Mega menerima data dari hasil pembacaan sensor
                </blockquote>
                <blockquote>pH Analog dan Tds Analog Setiap 1 menit sekali</blockquote>
              </div>
            </div>

            <div class="d-block block-testimony mx-auto text-center">
              <div class="person w-25 mx-auto mb-4">
                <img src="images/node.jpg" alt="Image" class="img-fluid rounded-circle w-25 mx-auto">
              </div>
              <div>
                <h2 class="h5 mb-4">Mengirim Data dari NodeMcu</h2>
                <blockquote>Arduino yang terhubung dengan NodeMcu mengirim</blockquote>
                <blockquote>nilai ke Cloud menggunakan jaringan Wifi </blockquote>
              </div>
            </div>

            <div class="d-block block-testimony mx-auto text-center">
              <div class="person w-25 mx-auto mb-4">
                <img src="images/cloud.jpg" alt="Image" class="img-fluid rounded-circle w-25 mx-auto">
              </div>
              <div>
                <h2 class="h5 mb-4">Cloud Menerima Nilai</h2>
                <blockquote>Dengan Menggunakan layanan Thingspeak yang merupakan </blockquote>
                <blockquote>open source "Internet of Things" aplikasi dan API </blockquote>
              </div>
            </div>

            <div class="d-block block-testimony mx-auto text-center">
              <div class="person w-25 mx-auto mb-4">
                <img src="images/www.jpg" alt="Image" class="img-fluid rounded-circle w-25 mx-auto">
              </div>
              <div>
                <h2 class="h5 mb-4">Menampilkan Data di Website</h2>
                <blockquote>Data dari thingspeak ditampilkan di website monitoring ini</blockquote>
              </div>
            </div>

        </div>

      </div>
      
    </div>


   <!--  <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12" data-aos="fade">
            <h2 class="site-section-heading text-center text-uppercase">Recent Blog Posts</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
            <div class="media-image">
              <a href="single.html"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
              <div class="media-image-body">
                <h2 class="font-secondary text-uppercase"><a href="single.html">Where Do You Learn HTML & CSS in 2019?</a></h2>
                <span class="d-block mb-3">By James &mdash; Jan. 20, 2019</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, voluptate.</p>
                <p><a href="#">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
            <div class="media-image">
              <a href="single.html"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
              <div class="media-image-body">
                <h2 class="font-secondary text-uppercase"><a href="single.html">Where Do You Learn HTML & CSS in 2019?</a></h2>
                <span class="d-block mb-3">By James &mdash; Jan. 20, 2019</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, voluptate.</p>
                <p><a href="#">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300">
            <div class="media-image">
              <a href="single.html"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
              <div class="media-image-body">
                <h2 class="font-secondary text-uppercase"><a href="single.html">Where Do You Learn HTML & CSS in 2019?</a></h2>
                <span class="d-block mb-3">By James &mdash; Jan. 20, 2019</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, voluptate.</p>
                <p><a href="#">Read More</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <div class="py-5 bg-primary" style="background-image: url(images/f.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 text-center mb-3 mb-md-0">
            <h2 class="text-uppercase text-white mb-4" data-aos="fade-up">Dalam Rangka Melaksanakan Praktik Kerja Lapangan & Tugas Akhir</h2>
            <!-- <a href="#" class="btn btn-bg-primary font-secondary text-uppercase" data-aos="fade-up" data-aos-delay="100">Contact Us</a> -->
          </div>
        </div>
      </div>
    </div>


    

    <footer class="site-footer bg-black">

      <div class="container">

    
        <div class="row">
          <div class="col-md-4 mb-4 mb-md-0">
            <h3 class="footer-heading mb-4 text-white">Lokasi</h3>
            <p>Gedung Perpustakaan Lantai 3 Kampus IPB Dramaga, Bogor, Jawa Barat 16680</p>
            <p>Telp./Fax: (0251) 8623936</p>
            <p>e-mail: ict@apps.ipb.ac.id</p>
            <p>website: https://dsitd.ipb.ac.id</p>
            <!-- <p><a href="#" class="btn btn-primary text-white px-4">Read More</a></p> -->
          </div>
          <div class="col-md-5 mb-4 mb-md-0 ml-auto">
            <div class="row mb-4">
              <div class="col-md-6">
                 <h3 class="footer-heading mb-4 text-white">pembuat</h3>
                  <p>Alferdio Wijaya</p>
                  <p>Telp 087809992000</p>
                  <p>e-mail: alferdio_j3d117066@apps.ipb.ac.id</p>
                  
              </div>
              <div class="col-md-6">
                <!-- <h3 class="footer-heading mb-4 text-white">Free Templates</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">HTML5 / CSS3</a></li>
                    <li><a href="#">Clean Design</a></li>
                    <li><a href="#">Responsive</a></li>
                    <li><a href="#">Multi Purpose Template</a></li>
                  </ul> -->
              </div>
            </div>

            <div class="row mb-5">
              <div class="col-md-12">
              <!-- <h3 class="footer-heading mb-4 text-white">Stay up to date</h3>
              <form action="#" class="d-flex footer-subscribe">
                <input type="text" class="form-control rounded-0" placeholder="Enter your email">
                <input type="submit" class="btn btn-primary rounded-0" value="Subscribe">
              </form> -->
            </div>
            </div>
          </div>

          
          <div class="col-md-2">
            
            <div class="row">
            <div class="col-md-12"><h3 class="footer-heading mb-4 text-white">Social</h3></div>
              <div class="col-md-12">
                <p>
                  <a href="#" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
                  <a href="#" class="p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="p-2"><span class="icon-instagram"></span></a>
                  <a href="#" class="p-2"><span class="icon-vimeo"></span></a>

                </p>
              </div>
          </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Alferdio Wijaya | J3D117066 
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>

            
          </div>
          
        </div>

       

      </div>
    </footer>
  <!-- </div> -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>

  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
  <script src="ambildata.js"></script>

  
  </body>
</html>