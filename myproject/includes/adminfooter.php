<footer>
    <div class="container-fluid screen">
        <div class="row">
            <span class="glyphicon glyphicon-copyright-mark"> BookMash </span>
                 <?php
                if (isset($_SESSION['email'])) {
                    ?>
            <p style="text-align: right"><a href = "..\logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></p>
                <?php
                 }
                 ?>
            </div>
    </div>
</footer>