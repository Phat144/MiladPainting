<?php
$conn = mysqli_connect("localhost", "root", "", "miladPainting");
if ($conn) {
    echo "connected";  
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>About Us - Milad Painting Website</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
  }

  </style>
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="banner.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="footer.css">
</head>

<body>

    <!-- Header -->
    <div class="container-fluid">
        <div class="row image-container" style="background-color: white; height: 80px;">
            <a href="home.html"><img src="img/webimg/logo.png" class="img-responsive center" alt="Responsive image"
                    style="height: 100%;">
            </a>
        </div>
        <div class="jumbotron slogan-img" style="background-color: white">
            <ul id="banner-list">
                <li class="list-style">
                    <div class="list-icon">
                        <div>
                            <a href="#"><span class="fas fa-envelope"
                                    style="font-size: 2.0em; color: #1FF042 !Important; "></span>
                            </a>
                        </div>
                        <div style="padding-left: 15px;">
                            <b>Email Us</b> <br>
                            <i>miladpainting@gmail.com</i>
                        </div>
                    </div>
                </li>

                <li class="list-style">
                    <div class="list-icon">
                        <div>
                            <a href="#"><span class="fas fa-phone"
                                    style="font-size: 2.0em; color: #1FF042 !Important;"></span></a>
                        </div>
                        <div style="padding-left: 15px;">
                            <b>Call Us</b> <br>
                            <i>+61 42130103</i>
                        </div>

                    </div>
                </li>
            </ul>
        </div>
    </div>

    <nav class="navbar navbar-expand-md  navbar-dark bg-dark" id="menu-nav">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation-bar"
            aria-controls="navigation-bar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation-bar">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="home.html"><i class="fas fa-home"></i><span>Home</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="service.html"><i class="fas fa-paint-roller"></i><span>Services</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.html"><i class="fas fa-image"></i><span>Gallery</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about_us.html"><i class="fas fa-book"></i><span>About Us</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact_us.html"><i class="fas fa-address-card"></i> <span>Contact
                            Us</span></a>
                </li>
            </ul>
            <div class="social-part row">
                <a href="http://www.facebook.com"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                <a href="http://www.twitter.com"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                <a href="http://www.instagram.com"><i class="fab fa-instagram" aria-hidden="true"></i></a>
            </div>
        </div>
    </nav>
    <div id="demo" class="carousel slide" data-ride="carousel" style= "width:100%; height: 700 !important; padding-bottom: 20px; background-color: grey;">
      <ul class="carousel-indicators">
        <?php 
          $result = mysqli_query($conn, "SELECT * FROM `uploadImage`");
          $rowCount = mysqli_num_rows ( $result );
          for ($i=0 ; $i <= $rowCount; $i++){
              if ($i == 0) {
                  echo '<li data-target="#demo" data-slide-to='.$i . 'class="active"></li>';
              }
              else {
                  echo '<li data-target="#demo" data-slide-to=' .$i.'></li>';
              }             
          }
          ?>
      </ul>
      <div class="carousel-inner" role="listbox"style="width: 100%; height: 100% !important;">
          <?php 
          $count =0;
            while ($row = mysqli_fetch_array($result)) {
                if ($count == 0){
                    echo '<div class="carousel-item active">';
                    echo '<br>';
                    echo '<img src="data:image/jpeg;base64,'.base64_encode($row['imageFile']).'" alt="'.$row['LocationName'].'" height: "500" width:"1000">';
                    echo '<br>';
                    echo '<div class="carousel-caption" style ="color: black; font-family: "Zhi Mang Xing", cursive;" >';
                    echo '<br>';
                    echo '<h1>'. $row['LocationName'] .'</h1>';
                    echo '</div>';
                    echo '<br>';
                    echo '</div>';
                }
                else {
                    echo '<div class="carousel-item">';
                    echo '<br>';
                    echo '<img src="data:image/jpeg;base64,'.base64_encode($row['imageFile']).'" alt="'.$row['LocationName'].'" height: "500" width:"1000">';
                    echo '<br>';
                    echo '<div class="carousel-caption" style ="color: black; font-family: "Zhi Mang Xing", cursive;" ">';
                    echo '<br>';
                    echo '<h1>'. $row['LocationName'] .'</h1>';
                    echo '</div>';
                    echo '<br>';
                    echo '</div>';
                }
                $count = $count +1;
            }
          ?>      
      </div>
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
 
    <!-- Footer -->
    <footer class="pt-5 pb-4" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 mt-2 mb-2">
                    <h5 class="mb-4 font-weight-bold">CONTACT INFORMATION</h5>
                    <p class="mb-4">Etiam laoreet in ex quis efficitur.</p>
                    <ul class="f-address">
                        <li>
                            <div class="row">
                                <div class="col-1"><i class="fas fa-location-arrow"></i></div>
                                <div class="col-8">
                                    <h6 class="font-weight-bold mb-0" style="font-size: 13px;">Address:</h6>
                                    <p><a href="https://goo.gl/maps/FNS5EVP6fif1V3y38">31 Murray Rd Dandenong North VIC
                                            3175</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-1"><i class="fas fa-envelope"></i></div>
                                <div class="col-8">
                                    <h6 class="font-weight-bold mb-0" style="font-size: 13px;">Have any questions?</h6>
                                    <p><a href="mailto:miladpainting@gmail.com">miladpainting@gmail.com</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-1"><i class="fas fa-phone"></i></div>
                                <div class="col-9">
                                    <h6 class="font-weight-bold mb-0" style="font-size: 13px;">Phone Number:</h6>
                                    <p><a href="tel:+6142130103">+61 421301030</a></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 mt-2 mb-2">
                    <h5 class="mb-4 font-weight-bold">CONNECT WITH US</h5>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Your Email Address">
                        <span class="input-group-addon" id="basic-addon2"><i class="fas fa-check"></i></span>
                    </div>
                    <ul class="social-pet mt-4">
                        <li><a href="#" title="facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" title="google-plus"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#" title="instagram"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>