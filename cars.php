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

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" 
    style="background-image: url(

                <?php
                // Veritabanından fotoğrafı alma
                $arkaplan = "SELECT arkaplan_foto FROM arkaplan WHERE arkaplan_id = 1";
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
                                $araclarimizsorgu = "SELECT * FROM arkaplan WHERE arkaplan_id = 1";
                                $result = mysqli_query($baglan, $araclarimizsorgu);
                                $araclarimizmenucek = mysqli_fetch_assoc($result);
                                ?>
                        <h2><?php echo $araclarimizmenucek['arkaplan_yazi'];?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>
            <div class="contact-form">
                <form action="#" id="contact">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
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
                            $aracsorgu = "SELECT araba_photo FROM araclar WHERE arac_id = 2";
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
                                $aracsorgu = "SELECT * FROM araclar WHERE arac_id = 2";
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
                            $aracsorgu = "SELECT araba_photo FROM araclar WHERE arac_id = 3";
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
                                $aracsorgu = "SELECT * FROM araclar WHERE arac_id = 3";
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
                            $aracsorgu = "SELECT araba_photo FROM araclar WHERE arac_id = 4";
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
                                $aracsorgu = "SELECT * FROM araclar WHERE arac_id = 4";
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
                            $aracsorgu = "SELECT araba_photo FROM araclar WHERE arac_id = 5";
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
                                $aracsorgu = "SELECT * FROM araclar WHERE arac_id = 5";
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
                            $aracsorgu = "SELECT araba_photo FROM araclar WHERE arac_id = 6";
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
                                $aracsorgu = "SELECT * FROM araclar WHERE arac_id = 6";
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
                            $aracsorgu = "SELECT araba_photo FROM araclar WHERE arac_id = 7";
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
                                $aracsorgu = "SELECT * FROM araclar WHERE arac_id = 7";
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
                            $aracsorgu = "SELECT araba_photo FROM araclar WHERE arac_id = 8";
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
                                $aracsorgu = "SELECT * FROM araclar WHERE arac_id = 8";
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
                            $aracsorgu = "SELECT araba_photo FROM araclar WHERE arac_id = 9";
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
                                $aracsorgu = "SELECT * FROM araclar WHERE arac_id = 9";
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
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                        <?php
                            // Veritabanından fotoğrafı alma
                            $aracsorgu = "SELECT araba_photo FROM araclar WHERE arac_id = 11";
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
                                $aracsorgu = "SELECT * FROM araclar WHERE arac_id = 11";
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
            </div>

            <br>
        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->

    

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