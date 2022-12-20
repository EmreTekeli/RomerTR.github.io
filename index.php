<?php

include 'baglan.php';

?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>RÖMER TR</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <?php
                            // Veritabanından fotoğrafı ve linkini alma
                            $sql = "SELECT photo, photo_url FROM photos WHERE id = 1";
                            $result = mysqli_query($baglan, $sql);

                            // Fotoğrafı ve linkini ekrana yazdırma
                            if (mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);
                                echo '<a href="'.$row['photo_url'].'"><img src="data:image/png;base64,'.base64_encode( $row['photo'] ).'"/></a>';
                            }
                        ?>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                        <?php
                            $menusorgu = mysqli_query($baglan, "SELECT * FROM menuler");
                            while($menucek = mysqli_fetch_assoc($menusorgu))
                            {

                            ?>

                            <li><a href="<?php echo $menucek['tablo_menuUrl']; ?>"><?php echo $menucek['tablo_menuAd']; ?></a></li>

                            <?php }
                            ?>  
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
                                <?php       
                                // Video URL'sini almak için sorguyu yaz ve çalıştır
                                $sql = "SELECT video_url FROM videocek WHERE video_id = 1";
                                $result = mysqli_query($baglan, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    // Sonucu ilişkili bir dizi olarak çek
                                    $row = mysqli_fetch_assoc($result);
                                    // Video URL'sini bir değişkene ata
                                    $video_url = $row['video_url'];
                                }
                                ?>
            <source src="<?php echo $video_url; ?>" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">

                                <?php       
                                $icmenusorgu = "SELECT * FROM icmenucek WHERE icmenu_id = 1";
                                $icmenusorgu_result = mysqli_query($baglan, $icmenusorgu);
                                $icmenucek = mysqli_fetch_assoc($icmenusorgu_result);
                                ?>

                                <h2><?php echo $icmenucek['icmenu_ad'];?></h2>
                <div class="main-button">
                    <?php
                        $contact = "SELECT * FROM menuler WHERE tablo_id = 4";
                        $result = mysqli_query($baglan, $contact);
                        $menucek = mysqli_fetch_assoc($result);                        
                    ?>
                    <a href="<?php echo $menucek['tablo_menuUrl']; ?>"><?php echo $menucek['tablo_menuAd']; ?></a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

   <!-- ***** Cars Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">

                                <?php       
                                $icmenusorgu = "SELECT * FROM icmenucek WHERE icmenu_id = 2";
                                $icmenusorgu_result = mysqli_query($baglan, $icmenusorgu);
                                $icmenucek = mysqli_fetch_assoc($icmenusorgu_result);
                                ?>

                        <h2><?php echo $icmenucek['icmenu_ad'];?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                        <?php
                            // Veritabanından fotoğrafı alma
                            $aracsorgu = "SELECT araba_photo FROM araclar WHERE arac_id = 1";
                            $arac_result = mysqli_query($baglan, $aracsorgu);

                            // Fotoğrafı ekranda gösterme
                            if (mysqli_num_rows($arac_result) > 0) {
                                $row = mysqli_fetch_assoc($arac_result);
                                echo '<img src="data:image/jpg;base64,'.base64_encode( $row['araba_photo'] ).'"/>';
                            }
                        ?>
                        </div>
                        <div class="down-content">
                            <span>
                                <sup>$</sup>
                                <?php       
                                $aracsorgu = "SELECT * FROM araclar WHERE arac_id = 1";
                                $result = mysqli_query($baglan, $aracsorgu);
                                $menucek = mysqli_fetch_assoc($result);
                                ?>
                                <?php echo $menucek['arac_fiyat'];?>
                            </span>

                            <h4><?php echo $menucek['arac_isim'];?></h4>

                            <p>
                                <i class="fa fa-dashboard"></i> <?php echo $menucek['arac_km'];?>KM &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> <?php echo $menucek['arac_cc'];?>CC &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cog"></i> <?php echo $menucek['arac_vites'];?> &nbsp;&nbsp;&nbsp;
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                        <?php
                            // Veritabanından fotoğrafı alma
                            $aracsorgu = "SELECT araba_photo FROM araclar WHERE arac_id = 12";
                            $arac_result = mysqli_query($baglan, $aracsorgu);

                            // Fotoğrafı ekranda gösterme
                            if (mysqli_num_rows($arac_result) > 0) {
                                $row = mysqli_fetch_assoc($arac_result);
                                echo '<img src="data:image/jpg;base64,'.base64_encode( $row['araba_photo'] ).'"/>';
                            }
                        ?>
                        </div>
                        <div class="down-content">
                            <span>
                                 <sup>₺</sup>
                                 <?php       
                                $aracsorgu = "SELECT * FROM araclar WHERE arac_id = 12";
                                $result = mysqli_query($baglan, $aracsorgu);
                                $menucek = mysqli_fetch_assoc($result);
                                ?>
                                <?php echo $menucek['arac_fiyat'];?> 
                            </span>

                            <h4><?php echo $menucek['arac_isim'];?></h4>

                            <p>
                                <i class="fa fa-dashboard"></i> <?php echo $menucek['arac_km'];?>KM &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> <?php echo $menucek['arac_cc'];?>CC &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cog"></i> <?php echo $menucek['arac_vites'];?> &nbsp;&nbsp;&nbsp;
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                        <?php
                            // Veritabanından fotoğrafı alma
                            $aracsorgu = "SELECT araba_photo FROM araclar WHERE arac_id = 10";
                            $arac_result = mysqli_query($baglan, $aracsorgu);

                            // Fotoğrafı ekranda gösterme
                            if (mysqli_num_rows($arac_result) > 0) {
                                $row = mysqli_fetch_assoc($arac_result);
                                echo '<img src="data:image/jpg;base64,'.base64_encode( $row['araba_photo'] ).'"/>';
                            }
                        ?>
                        </div>
                        <div class="down-content">
                            <span>
                            <sup>₺</sup>
                                 <?php       
                                $aracsorgu = "SELECT * FROM araclar WHERE arac_id = 10";
                                $result = mysqli_query($baglan, $aracsorgu);
                                $menucek = mysqli_fetch_assoc($result);
                                ?>
                                <?php echo $menucek['arac_fiyat'];?> 
                            </span>

                            <h4><?php echo $menucek['arac_isim'];?></h4>

                            <p>
                                <i class="fa fa-dashboard"></i> <?php echo $menucek['arac_km'];?>KM &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> <?php echo $menucek['arac_cc'];?>CC &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cog"></i> <?php echo $menucek['arac_vites'];?> &nbsp;&nbsp;&nbsp;
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="main-button text-center">

                                <?php       
                                $icmenusorgu = "SELECT * FROM icmenucek WHERE icmenu_id = 3";
                                $icmenusorgu_result = mysqli_query($baglan, $icmenusorgu);
                                $icmenucek = mysqli_fetch_assoc($icmenusorgu_result);
                                ?>

                <a href="<?php echo $icmenucek['icmenu_url'];?>"><?php echo $icmenucek['icmenu_ad'];?></a>
            </div>
        </div>
    </section>
    <!-- ***** Cars Ends ***** -->

    <section class="section section-bg" id="schedule" style="background-image: url(
                <?php
                // Veritabanından fotoğrafı alma
                $arkaplan = "SELECT arkaplan_foto FROM arkaplan WHERE arkaplan_id = 1";
                $arkaplan_result = mysqli_query($baglan, $arkaplan);

                // Fotoğrafı ekranda gösterme
                if (mysqli_num_rows($arkaplan_result) > 0) {
                $row = mysqli_fetch_assoc($arkaplan_result);
                echo 'data:image/jpg;base64,' . base64_encode($row['arkaplan_foto']);
                }
                ?>)">
                                    <!-- kısa hakkımızda kısmı -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                                <?php       
                                $icmenusorgu = "SELECT * FROM icmenucek WHERE icmenu_id = 4";
                                $icmenusorgu_result = mysqli_query($baglan, $icmenusorgu);
                                $icmenucek = mysqli_fetch_assoc($icmenusorgu_result);
                                ?>
                        <h2><?php echo $icmenucek['icmenu_ad'];?></h2>
                        <br>
                                <?php       
                                $icmenusorgu = "SELECT * FROM icmenucek WHERE icmenu_id = 5";
                                $icmenusorgu_result = mysqli_query($baglan, $icmenusorgu);
                                $icmenucek = mysqli_fetch_assoc($icmenusorgu_result);
                                ?>
                        <p><?php echo $icmenucek['icmenu_ad'];?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-content text-center">
                                <?php       
                                $icmenusorgu = "SELECT * FROM icmenucek WHERE icmenu_id = 6";
                                $icmenusorgu_result = mysqli_query($baglan, $icmenusorgu);
                                $icmenucek = mysqli_fetch_assoc($icmenusorgu_result);
                                ?>
                        <p><?php echo $icmenucek['icmenu_ad'];?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>