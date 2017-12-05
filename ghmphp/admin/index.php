<?php
//modelo
require_once 'models/enlaces.php';
require_once 'models/login.php';
require_once 'models/gestorVideos.php';

//controlador
require_once 'controllers/plantilla.php';
require_once 'controllers/enlaces.php';
require_once 'controllers/login.php';
require_once 'controllers/gestorVideos.php';

//objeto
$plantilla = new PlantillaController;
$plantilla -> plantilla();