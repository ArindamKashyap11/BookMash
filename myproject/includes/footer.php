<footer>
    <div class="container-fluid screen">
        <div class="row">
            <div class="col-xs-2 col-xs-offset-1">
                <h4>Information</h4>
                <p><a href="about.php"><span class="glyphicon glyphicon-info-sign"></span> About us</a></p>
                <p><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact us</a></p>
            </div>
            <div class="col-xs-2 col-xs-offset-2">
                <h4>My account</h4>
                 <?php
                if (isset($_SESSION['email'])) {
                    ?>
                <p><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></p>
                <?php
                 }else {
                       ?>
                <p><a href="login.php?error="><span class="glyphicon glyphicon-log-in"></span> Login</a></p>
                <p><a href="signup.php?m1=&m2="><span class="glyphicon glyphicon-user"></span> Sign Up</a></p>
                <?php
              }
            ?>
            </div>
            <div class="col-xs-2 col-xs-offset-2">
                <h4>Helpline</h4>
                <p style="color:#337ab7;">+91 90000 00000</p>
                <P><a href="tac.php"><span class="glyphicon glyphicon-alert"></span>Terms & conditions</a></P>
            </div>
        </div>
    </div>
</footer>