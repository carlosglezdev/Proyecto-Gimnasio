<?php

// ---------- CONEXION BD ---------- //
require_once("models/conexion/conexion.php");


// ---------- CONTROLLERS BD ---------- //
require_once("controllers/plantilla.controller.php");


// ---------- MODELS BD ---------- //



$plantilla = new PlantillaController();
$plantilla->ctrPlantilla();