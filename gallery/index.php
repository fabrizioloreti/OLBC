<?php

    // Include the UberGallery class
    include('resources/UberGallery.php');

    // Initialize the UberGallery object
    $gallery = new UberGallery();

    // Initialize the gallery array
    $qs = $_SERVER['QUERY_STRING'];
    $galleria = 'jcs';

    if($qs != null)
    {
        $galleria_tmp = explode('&', $qs);
        if($galleria_tmp != null && count($galleria_tmp) > 0)
        {
            $galleria = $galleria_tmp[1];
        }
        else
            $galleria = $qs;
    }

    $galleryArray = $gallery->readImageDirectory(strtolower($galleria));
    
    // Define theme path
    if (!defined('THEMEPATH')) {
        define('THEMEPATH', $gallery->getThemePath());
    }

    // Set path to theme index
    $themeIndex = $gallery->getThemePath(true) . '/index.php';

    // Initialize the theme
    if (file_exists($themeIndex)) {
        include($themeIndex);
    } else {
        die('ERROR: Failed to initialize theme' . $themeIndex);
    }
