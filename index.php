<?php
    require_once __DIR__.'/vendor/autoload.php';

    /*
     * Insert new transport from web interface to database
     */

    $data = new \Project\Data\Data;
    $transport = new \Project\Transport;

    //Add data to database
    $transport->add($data->get($type, $color, $capacity, $fuel, $price, $comment));
