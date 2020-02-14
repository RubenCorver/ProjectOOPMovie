<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>OOP Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/stylesLogin.min.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-md" id="app-navbar">
        <div class="container-fluid"><a class="navbar-brand" href="#"><i class="icon ion-ios-infinite" id="brand-logo"></i></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="Wishlist.php">WishList</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="Search.php">Search</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="Login.php">Login</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <div class="container full-height">
        <div class="row flex center v-center full-height">
            <div class="col-8 col-sm-4">
                <div class="form-box">
                    <form method="post" action="Register2.php">
                        <fieldset>
                            <legend>Register</legend><img id="avatar" class="avatar round" src="assets/img/avatar.png">
                            <input class="form-control" type="text" id="username" name="username" placeholder="username">
                            <input class="form-control" type="password" id="password" name="password" placeholder="password">
                            <button class="btn btn-primary btn-block" id="submit" value="submit" type="submit">REGISTER </button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <footer>
            <div class="row">
                <div class="col-sm-6 col-md-4 footer-navigation">
                    <h3><a href="#">OOP<span>Movie </span></a></h3>
                    <p class="links"><a href="index.php">Home</a><strong> · </strong><a href="Wishlist.php">WishList</a><strong> · </strong><a href="Search.php">Search</a><strong> · </strong><a href="#">Contact</a></p>
                    <p
                        class="company-name">OOP Movie Ruben & Nino © 2020 </p>
                </div>
                <div class="col-sm-6 col-md-4 footer-contacts">
                    <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                        <p><span class="new-line-span">Prins Alexanderlaan 55</span> Rotterdam, The Netherlands</p>
                    </div>
                    <div><i class="fa fa-phone footer-contacts-icon"></i>
                        <p class="footer-center-info email text-left"> 088 945 10 00 </p>
                    </div>
                    <div><i class="fa fa-envelope footer-contacts-icon"></i>
                        <p> <a href="#" target="_blank">support@TCR.nl</a></p>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4 footer-about">
                    <h4>Over de opdracht</h4>
                    <p>OOP opdracht voor leerjaar 2</p>
                </div>
            </div>
        </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>