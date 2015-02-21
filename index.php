<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon"  href="http://gamesgeneral.com/favicon.ico?v=2">
    <title>Games General</title>


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- CUSTOM STEAM PLUGIN -->
    <link href="steamplugin/steampluginstyle.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top">Games General</a>
            </li>
            <li>
                <a href="#top">Home</a>
            </li>
            <li>
                <a href="#about">About</a>
            </li>

        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="col-lg-12 text-center" style="padding-top: 17px;">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
                    <?php include 'xmlrequest.php'; ?>
                    <div id="container">
                        <div id="img"></div>
                        <div id="members"></div>
                        <div id="ingame"></div>
                        <div id="online"></div>
                    </div>

                </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12 text-center">
                    <h2>About us</h2>

                    <p class="lead">/GG/, Games General, is a community that started out by playing videogames together. Over the past few years
/GG/ has grown into a community that brings the game to real life too. /GG/ organises events, LAN-parties and
hosts servers for games played by our community. We are playing: Videogames, Boardgames and Airsoft.</p><p><br />

                        <br />See you in-game, cowboy.</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>







    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Games General</strong>
                    </h4>
                    <p>1337 Memestad
                        <br>Zimbabwe</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:snuif09@gmail.com">snuif09@gmail.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/groups/157082407815559/"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>

                        <li>
                            <a href="http://steamcommunity.com/groups/gamesgeneral"><i class="fa fa-steam fa-fw fa-3x"></i></a>
                        </li>

                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Games General 2015</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
        // Closes the sidebar menu
        $("#menu-close").click(function (e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });

         // Opens the sidebar menu
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });

         // Scrolls to the selected menu item on the page
        $(function () {
            $('a[href*=#]:not([href=#])').click(function () {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
    </script>

</body>

</html>
