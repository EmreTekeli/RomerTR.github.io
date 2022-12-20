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

    <section class="section section-bg" id="call-to-action" style="background-image: url(

                        <?php
                        // Veritabanından fotoğrafı alma
                        $arkaplan = "SELECT arkaplan_foto FROM arkaplan WHERE arkaplan_id = 3";
                        $arkaplan_result = mysqli_query($baglan, $arkaplan);

                        // Fotoğrafı ekranda gösterme
                        if (mysqli_num_rows($arkaplan_result) > 0) {
                        $row = mysqli_fetch_assoc($arkaplan_result);
                        echo 'data:image/jpg;base64,' . base64_encode($row['arkaplan_foto']);
                        }
                        ?>);">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                                <?php       
                                $araclarimizsorgu = "SELECT * FROM arkaplan WHERE arkaplan_id = 3";
                                $result = mysqli_query($baglan, $araclarimizsorgu);
                                $araclarimizmenucek = mysqli_fetch_assoc($result);
                                ?>
                        <h2><?php echo $araclarimizmenucek['arkaplan_yazi'];?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                                <?php       
                                $iletisimsorgu = "SELECT * FROM iletisim WHERE iletisim_id = 4";
                                $result = mysqli_query($baglan, $iletisimsorgu);
                                $araclarimizmenucek = mysqli_fetch_assoc($result);
                                ?>
                        <h2><?php echo $araclarimizmenucek['iletisim_ad'];?></h2>
                        
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-phone"></i>
                    </div>

                                <?php       
                                $iletisimsorgu = "SELECT * FROM iletisim WHERE iletisim_id = 1";
                                $result = mysqli_query($baglan, $iletisimsorgu);
                                $araclarimizmenucek = mysqli_fetch_assoc($result);
                                ?>

                    <h5><a href="#"><?php echo $araclarimizmenucek['iletisim_ad'];?></a></h5>

                    <br>
                </div>

                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                                <?php       
                                $iletisimsorgu = "SELECT * FROM iletisim WHERE iletisim_id = 2";
                                $result = mysqli_query($baglan, $iletisimsorgu);
                                $araclarimizmenucek = mysqli_fetch_assoc($result);
                                ?>

                    <h5><a href="#"><?php echo $araclarimizmenucek['iletisim_ad'];?></a></h5>

                    <br>
                </div>

                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                                <?php       
                                $iletisimsorgu = "SELECT * FROM iletisim WHERE iletisim_id = 3";
                                $result = mysqli_query($baglan, $iletisimsorgu);
                                $araclarimizmenucek = mysqli_fetch_assoc($result);
                                ?>

                    <h5><?php echo $araclarimizmenucek['iletisim_ad'];?></h5>

                    <br>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->

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