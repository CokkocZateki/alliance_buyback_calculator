<?php include "calculator.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $corpName;?> Buyback Calculator</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cyborg/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/main.js"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=""><?php echo $corpName;?> Buyback Calculator</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="">Home</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form>
                <div class="form-group">
                    <label for="ore">Paste ore/mineral(s) from EVE Online</label>
                    <textarea
                        class="form-control"
                        id="ore"
                        name="ore"
                        rows="10"
                        required>
                    </textarea>
                </div>
                <div class="form-group">
                    <input type="submit" id="submit" value="Compute buyback" class="btn btn-info">
                </div>
            </form>
            <div>
                <h4 id="grandTotalLabel">Grand Total: <span id="grandTotal">0</span></h4>
                <h4 id="buyBackRateLabel">Buy Back Rate: <span id="buyBackRate">0</span></h4>
            </div>
        </div>
        <div class="col-md-6">
            <div id="myTable">
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="text-muted">
            Coded by <a href="https://stackoverflow.com/users/3137329/homeless-cat" target="_blank">Homeless Cat</a>
            of <a href="https://rotesl1cht.tk" target="_blank">rotesl1cht.tk</a>
            for <?php echo $corpName;?>. version: <?php echo $version;?>
        </p>
    </div>
</footer>
</body>
</html>
