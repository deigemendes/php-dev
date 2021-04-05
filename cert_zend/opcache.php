<?php

//comandos opcache 

print_r(opcache_get_status());

print_r(opcache_get_configuration()); 

print_r(opcache_reset()); 

opcache_compile_file('meu_arquivo.php'); // cachear um arquivo especifico sem executar 

zend_extension = opcache.so // adicionar no php.ini