<!--/header-->
<header id="top1" class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"> <img src="images/logo-novo.png" width="100" alt="logo"> </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li <?php if (isset($_GET['id'])) if ($_GET['id'] == 1) echo 'class="active"'; ?>><a href="index.php?id=1">Principal</a></li>
                <li <?php if (isset($_GET['id'])) if ($_GET['id'] == 2) echo 'class="active"'; ?>><a href="projeto.php?id=2">Projeto</a></li>
                <li <?php if (isset($_GET['id'])) if ($_GET['id'] == 3) echo 'class="active"'; ?>><a href="roboticavirtual.php?id=3">Robotica Virtual</a></li>
                <li <?php if (isset($_GET['id'])) if ($_GET['id'] == 4) echo 'class="active"'; ?>><a href="roboticamovel.php?id=4">Robotica Móvel</a></li>
                <li <?php if (isset($_GET['id'])) if ($_GET['id'] == 5) echo 'class="active"'; ?>><a href="contato.php?id=5">Contato</a></li>
            </ul>
        </div>
    </div>
</header>

<header id="top2" class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="row">
            <div class="col-xs-4 center">
                <a class="navbar-brand" href="index.html"> <img src="images/logo-novo.png" width="100" alt="logo"> </a>                    
            </div>
            <div class="col-xs-2 center">
            </div>
            <div class="col-xs-12-8 center">
                <div style="display: inline;position: relative;top:30px"><img src="images/logo-novo.png" width="100" alt="logo">&nbsp;&nbsp;&nbsp;</div>
                <div style="display: inline;position: relative;top:0px"><img src="images/logotipo-gov-novo.gif" alt="logo"></div>
            </div>
        </div>
        <div class="collapse navbar-collapse">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="nav navbar-nav navbar-right">
                        <li <?php if (isset($_GET['id'])) if ($_GET['id'] == 1) echo 'class="active"'; ?>><a href="index.php?id=1">Principal</a></li>
                        <li <?php if (isset($_GET['id'])) if ($_GET['id'] == 2) echo 'class="active"'; ?>><a href="projeto.php?id=2">Projeto</a></li>
                        <li <?php if (isset($_GET['id'])) if ($_GET['id'] == 3) echo 'class="active"'; ?>><a href="roboticavirtual.php?id=3">Robotica Virtual</a></li>
                        <li <?php if (isset($_GET['id'])) if ($_GET['id'] == 4) echo 'class="active"'; ?>><a href="roboticamovel.php?id=4">Robotica Móvel</a></li>
                        <li <?php if (isset($_GET['id'])) if ($_GET['id'] == 5) echo 'class="active"'; ?>><a href="contato.php?id=5">Contato</a></li>
                    </ul>                    
                </div>
            </div>
        </div>
    </div>
</header>
<!--/header-->


