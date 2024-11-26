<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Economica:wght@400;700&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />

    <link rel="stylesheet" href="./assets/css/royalslider.css">
    <link rel="stylesheet" href="./assets/css/rs-default.css">


    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./assets/css/style.css">


    <title>NHNews</title>
</head>

<body>

    <!-- ============= Logo ============= -->
    <nav class="navbar navbar-light bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="Startseite.html">
                <img src="./assets/img/logo.png" alt="logo" width="200" height="50">
            </a>
        </div>
    </nav>


    <!-- ============= Main ============= -->
    <div class="main">

        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu"></ion-icon>
            </div>

            <div class="search">
                <label>
                    <input type="text" placeholder="Was suchen Sie">
                    <ion-icon name="search-circle-sharp"></ion-icon>
                </label>
            </div>

        </div>

    <!-- ============= Nachrichten ============= -->
    <div class="newslabel">
    <h1>Nachrichten</h1>
    </div> 

        <?php
            $json_data =file_get_contents("assets/php/nachrichten.json");
            $nachh = json_decode($json_data, true);
            if(count($nachh) != 0)
            {
                foreach($nachh as $nachh)
                {
                    ?>

                    <div class="news-container">
                        <div class="news-item">
                            <a href="#">
                                <h1> <?php echo $nachh['title']?> </h1>
            
                                <p><?php echo $nachh['nachricht']?></p>
            
                                <div class="metadata">
                                    <p><?php echo $nachh['dat_uhrzeit']?></p>
                                    <p> | </p>
                                    <p><?php echo $nachh['author']?></p>
                                </div>
                            </a>
                        </div>
            
                    </div>


                    <?php 
                }
            }

        ?>

       


        <!-- ============= Slider ============= -->
        <div class="sticky-slider-container">
            <a href="#">
                <div class="sticky-slider">
                    <img src="./assets/img/bg1.jpg" alt="Bild 1">
                    <div class="slider-content">
                        <p>Lorem</p>
                    </div>
                </div>


            </a>


            <a href="#">
                <div class="sticky-slider">
                    <img src="./assets/img/bg1.jpg" alt="Bild 1">
                    <div class="slider-content">
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                </div>


            </a>


            <a href="#">
                <div class="sticky-slider">
                    <img src="./assets/img/bg1.jpg" alt="Bild 1">
                    <div class="slider-content">
                        <p>Lorem</p>
                    </div>
                </div>


            </a>

            <a href="#">
                <div class="sticky-slider">
                    <img src="./assets/img/bg1.jpg" alt="Bild 1">
                    <div class="slider-content">
                        <p>Lorem</p>
                    </div>
                </div>


            </a>

            <a href="#">
                <div class="sticky-slider">
                    <img src="./assets/img/bg1.jpg" alt="Bild 1">
                    <div class="slider-content">
                        <p>Lorem</p>
                    </div>
                </div>
        </div>
        </a>


    </div>


    <!-- ============= Navigation ============= -->

    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="Startseite.html">
                        <span class="icon"><ion-icon name="home-sharp"></ion-icon></span>
                        <span class="title">Startseite</span>
                    </a>
                </li>
                <li>
                    <a href="Unterseite1.php">
                        <span class="icon"><ion-icon name="newspaper-sharp"></ion-icon></span>
                        <span class="title">Nachrichten</span>

                    </a>
                </li>
                <li>
                    <a href="Unterseite2.php">
                        <span class="icon"><ion-icon name="create-sharp"></ion-icon></span>
                        <span class="title">News Erstellen</span>

                    </a>
                </li>
            </ul>
        </div>


        <!-- ============= Footer ============= -->

        <footer>
            <div class="container">
                <div class="footer-content">
                    <div class="footer-left">
                        <a href="Startseite.html">
                            <span style="font-family: 'Economica', sans-serif; font-size: 30px;">NHNews</span>
                        </a>
                    </div>
                    <div class="footer-center">
                        <span style="font-family: 'Economica', sans-serif; font-size: 24px;">Follow us : </span>
                        <a href="https://www.instagram.com/" target="_blank">
                            <ion-icon name="logo-instagram" style="color: white; font-size: 1.8rem;"></ion-icon>
                        </a>
                        <a href="https://www.linkedin.com/" target="_blank">
                            <ion-icon name="logo-linkedin" style="color: white; font-size: 1.8rem;"></ion-icon>
                        </a>
                        <a href="https://www.facebook.com/" target="_blank">
                            <ion-icon name="logo-facebook" style="color: white; font-size: 1.8rem;"></ion-icon>
                        </a>
                    </div>
                </div>
            </div>
        </footer>




        <!-- ============= Icons ============= -->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

        <!-- ============= Scripts ============= -->



        <script src="./assets/js/jquery-1.8.3.js"></script>
        <script src="./assets/js/jquery.royalslider.min.js"></script>

        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        <script src="./assets/js/bootstrap.bundle.min.js"></script>
        <script src="./assets/js/script.js"></script>
</body>

</html>