<?php

session_start(); 

echo session_id();

session_destroy();

session_start(); 

session_regenerate_id();

echo session_id(); 
