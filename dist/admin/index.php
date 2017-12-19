<?php
ob_start();
//modelo
require_once 'models/enlaces.php';
require_once 'models/login.php';
require_once 'models/gestorVideos.php';
require_once 'models/gestorSlider.php';
require_once 'models/gestorSliderCelular.php';
require_once 'models/gestorPassword.php';

//controlador
require_once 'controllers/plantilla.php';
require_once 'controllers/enlaces.php';
require_once 'controllers/login.php';
require_once 'controllers/gestorVideos.php';
require_once 'controllers/gestorSlider.php';
require_once 'controllers/gestorSliderCelular.php';
require_once 'controllers/gestorPassword.php';

//objeto
$plantilla = new PlantillaController;
$plantilla -> plantilla();