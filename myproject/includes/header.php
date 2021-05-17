<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="index.php">BookMash</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                    <li><a href = "settings.php?error="><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    <li><a href = "order.php"><span class= "glyphicon glyphicon-tasks"></span> My Order</a></li>
                    <li><a href= "sell.php"><span class= "glyphicon glyphicon-check"></span> Sell </a></li>
                    <?php
                } else {
                    ?>
                    <li><a href="signup.php?m1=&m2="><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php?error="><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="about.php"><span class="glyphicon glyphicon-info-sign"></span> About us</a></li>
                     <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact us</a></li>
                        <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</div>