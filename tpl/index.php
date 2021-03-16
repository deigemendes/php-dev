<?php

// include
require "vendor/rain/raintpl/library/Rain/autoload.php";
require_once("vendor/autoload.php"); 


// namespace
use Rain\Tpl;

// config
$config = array(
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/",
   
);

Tpl::configure( $config );


// Add PathReplace plugin (necessary to load the CSS with path replace)

// create the Tpl object
$tpl = new Tpl;

// assign a variable
$tpl->assign( "name", "Deige Mendes - Teste" );

// assign an array


// draw the template
$tpl->draw( "index" );


?>