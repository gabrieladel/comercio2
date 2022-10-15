<?php

 require_once('autoload.php');

    $comercio = new Comercio();
  
    $comercio->leer('comercio.json');

    echo $comercio->getJSON();

