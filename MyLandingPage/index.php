<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="style.css" rel="stylesheet"/>
    <title>Real Madrid Fanpage</title>
</head>
<body>

<?php
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];


    $url = 'https://api.realmadrid.com/newsletter/subscribe';

    $data = array('name' => $name, 'email' => $email);

    $options = array(
        'http' => array(
            'header'  => "Content-Type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data),
        ),
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

}
?>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
                <span class="sr-only">Toggle Button</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand"><img src="img/Real-Madrid-Logo.png" alt="logo" width="30"></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
            <ul class="nav navbar-nav navbar-right">
                <li><a class="active" href="#">Home</a></li>
                <li><a href="https://www.realmadrid.com/en-US/football/first-team/players">Players</a></li>
                <li><a href="https://www.laliga.com/en-GB/clubs/real-madrid/next-matches">Matches</a></li>
            </ul>
        </div>
    </div>
</nav>

<form action="" method="POST">
    <div id="home">
        <div class="landing-text">
            <h1>Welcome to</br>Real Madrid Fanpage</h1>
            <h3>Subscribe now to get the latest updates</br>
                on Real Madrid news, matches, and events!</h3>

            <div class="form-group">
                <input type="text" name="name" class="form-control" aria-describedby="nameHelp"
                       placeholder="Enter your name">
                <br>
                <input type="email" name="email" class="form-control" aria-describedby="emailHelp"
                       placeholder="Enter your best email">
                <br>
                <button class="btn btn-default btn-lg btn-success" name="send">Subscribe</button>
            </div>
        </div>
    </div>
</form>

<div class="padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="img/stadion.jpg" alt="">
            </div>
            <div class="col-sm-6 text-center">
                <h2>About Real Madrid</h2>
                <p class="lead">
                    Real Madrid Club de Fútbol, commonly referred to as Real Madrid, is a professional football club
                    based in Madrid, Spain.
                    Founded on 6 March 1902 as Madrid Football Club, the club has traditionally worn white home kit
                    since inception.
                    The word real is Spanish for 'royal' and was bestowed to the club by King Alfonso XIII in 1920
                    together with the royal crown in the emblem.
                </p>
                <p class="lead">
                    Real Madrid has established itself as a major force in both Spanish and European football. They have
                    won numerous league titles,
                    European Cups, and other prestigious trophies.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
                <h4>Squad</h4>
                <p>
                    From top left we have Thibaut Courtuis, Toni Kroos, Fedeerico Valverde,Eder Militao, Antonio
                    Rudiger,
                    Karim Benzema,Ferland Mendy, Rodrygo, Eduardo Camavinga, Vinicius Junior, Nacho
                </p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <img src="img/sklad.jpg" alt="players" class="image-responsive">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
                <h4>Stadium</h4>
                <p>
                    Real Madrid's home stadium is the Santiago Bernabéu Stadium, one of the most famous football venues
                    in the world. Located in downtown Madrid,
                    it has a seating capacity of over 80,000 spectators.
                </p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <img src="img/stadion.jpg" alt="bernabeu" class="image-responsive">
            </div>
        </div>
    </div>
</div>

<div id="fixed"><img></div>

<div class="padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 text-center">
                <h4>Latest News</h4>
                <br>
                <p>
                    Stay updated with the latest news about Real Madrid. From match results, player transfers, to
                    exclusive interviews and more.
                    We bring you all the latest updates from the club.
                </p>
                <p>
                    Whether it's La Liga, the Champions League, or any other competition, we've got you covered with
                    detailed analyses,
                    match previews, and post-match reports.
                </p>
                <br>
                <h4>Upcoming Matches</h4>
                <br>
                <p>
                    Don't miss out on any action! Check our schedule for upcoming Real Madrid matches. Be it home or
                    away, we provide you with
                    all the details you need to support your team.
                </p>
            </div>
            <div class="col-sm-6">
                <img class="resizeff" src="img/rudiger.jpg">
            </div>
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <div class="row">
        <div class="col-sm-4">
            <h3>Contact Us</h3>
            <br>
            <h4>You can find our address and contact details here.</h4>
        </div>
        <div class="col-sm-4">
            <h3>Connect with Us</h3>
            <a href="https://www.facebook.com/RealMadrid/?locale=pl_PL" class="fa fa-facebook"></a>
            <a href="https://x.com/realmadriden" class="fa fa-twitter"></a>
            <a href="https://www.instagram.com/realmadrid/" class="fa fa-instagram"></a>
            <a href="https://www.youtube.com/channel/UCWV3obpZVGgJ3j9FVhEjF2Q" class="fa fa-youtube"></a>
        </div>
        <div class="col-sm-4">
            <img src="img/Real-Madrid-Logo.png" class="icon">
        </div>
    </div>
</footer>
</body>
</html>
