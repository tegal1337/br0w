<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HACK THE BR0W</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap4-neon-glow.min.css">


    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel='stylesheet' href='//cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/siimple.css">
</head>

<body class="imgloaded">
    <div class="glitch">
        <div class="glitch__img"></div>
        <div class="glitch__img"></div>
        <div class="glitch__img"></div>
        <div class="glitch__img"></div>
        <div class="glitch__img"></div>
    </div>
    <div class="navbar-dark text-white">
        <div class="container">
            <nav class="navbar px-0 navbar-expand-lg navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a href="index.php" class="pl-md-0 p-3 text-decoration-none text-light">
                            <h3 class="bold"><span class="color_danger">TEGALSEC</span><span class="color_white">ORG</span></h3>
                        </a>
                    </div>
                    <div class="navbar-nav ml-auto">
                        <a href="index.php" class="p-3 text-decoration-none text-white bold">Home</a>
                        <a href="about.php" class="p-3 text-decoration-none text-light bold">About</a>
                        <a href="https://www.tegalsec.org/" class="p-3 text-decoration-none text-light bold">Blog</a>
                        <a href="register.php" class="p-3 text-decoration-none text-light bold">Join</a>
                    </div>
                </div>
            </nav>

        </div>
    </div>

    <div class="jumbotron bg-transparent mb-0 pt-3 radius-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <h1 class="display-1 bold color_white content__title">HACK THE BR0W<span class="vim-caret">&nbsp;</span></h1>
                    <p class="text-grey text-spacey hackerFont lead mb-5">Play your browser and learn more, hack fun !!</p>
                    <div class="siimple-grid">
  <div class="siimple-grid-row">
    <div>
        <div>
          <h3 class="bold color_danger">POST Data</h3>
          <h4 class="bold color_white">Change your name on POST data to <b>tegal1337</b></h4>
          <div class="siimple-box-detail"> <?php
if (isset($_POST["name"]) && !empty($_POST["name"]) && $_POST["name"] != "tegal1337") {
    echo "Your current name supplied by POST data is: <span class=\"siimple-tag siimple-tag--red\">" . (string)$_POST["name"]. '</span><br><br><div class="bold color_danger">What are you looking for :(</div></a>'; 
}else if (isset($_POST["name"]) && !empty($_POST["name"]) && $_POST["name"] === "tegal1337") {
    echo "Your current name supplied by POST data is: <span class=\"siimple-tag siimple-tag--green\">" . (string)$_POST["name"]. '</span>';
    echo '<br><br><div class="btn btn-outline-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left typewriter"><a href="chall-3.php">Next</a></div>';
}
?></div>
        </div>
        <div>
            <form action="chall-2.php" method="post" class="bold color_danger">
            Name: <input type="text" name="name" value="./Kemp0ng" readonly>
            <input type="submit" class="btn btn-outline-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left typewriter">
            </form>
        </div>
    </div>
  </div>
</div>
</div>
    </div>
        </div>
            </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>