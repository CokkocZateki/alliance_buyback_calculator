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
            <a class="navbar-brand" href="index.php"><?php echo $config->allianceName; ?> Buyback Calculator <sup class="text-success"><small>BETA <?php echo $config->version; ?></small></sup></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Calculator</a></li>
                <?php
                extract($_SESSION);
                if(isset($isLoggedIn))
                    if($isLoggedIn==true){
                        echo "<li class='active'><a href='dashboard.php'>Dashboard</a></li>";
                        echo "<li class=\"active\"><a href=\"logout.php\">Logout</a></li>";
                    }
                    else
                        echo "<li class='active'><a id='eveSSOLoginButton' href='login.php'><img src='img/eveSSOLoginButton.png'></a></li>";
                else
                    echo "<li class='active'><a id='eveSSOLoginButton' href='login.php'><img src='img/eveSSOLoginButton.png'></a></li>"
                ?>
            </ul>
        </div>
    </div>
</nav>