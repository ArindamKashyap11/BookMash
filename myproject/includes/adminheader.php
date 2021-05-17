<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="../admin/admin.php">BookMash</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li><a href = "settings.php?error="><span class = "glyphicon glyphicon-cog"></span> Settings</a></li>
                    <li><a href = "createAdmin.php"><span class = "glyphicon glyphicon-user"></span> Create User</a></
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</div>