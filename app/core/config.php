<?php

  // $_SERVER['SERVER_NAME']; //localhost
  // $_SERVER['REQUEST_SCHEME']; //http
  // $_SERVER['HTTP_HOST']; //localhost
  // $_SERVER['SERVER_NAME]; // server name
  // $_SERVER['SERVER_PORT']; //80
  // $_SERVER['SCRIPT_NAME']; //index.php
  // $_SERVER['PATH_INFO']; ///
  // $_SERVER['REQUEST_URI']; ///
  // $_SERVER['QUERY_STRING']; //
  // $_SERVER['HTTP_REFERER']; //
  // $_SERVER['HTTP_ACCEPT']; //
  // $_SERVER['REMOTE_ADDR']; //
  // $_SERVER['HTTP_X_FORWARDED_FOR']; //
  // $_SERVER['HTTP_X_FORWARDED_HOST']; //
  // $_SERVER['HTTP_X_FORWARDED_SERVER']; //
  // $_SERVER['HTTP_X_FORWARDED_PORT']; //
  // $_SERVER['HTTP_X_FORWARDED_PROTO'];

  //define relative path

  define("ROOT", $_SERVER['REQUEST_SCHEME'] . "://". $_SERVER['SERVER_NAME']. "/");
  define("ROOT_ASSETS_THEME", $_SERVER['REQUEST_SCHEME'] . "://". $_SERVER['SERVER_NAME']. "/" . "assets/theme/");
  define("ROOT_ASSETS_ADMIN", $_SERVER['REQUEST_SCHEME'] . "://". $_SERVER['SERVER_NAME']. "/" . "assets/admin/");
  
  //DATABASES CONNECTION
  define("db_HOST", $_SERVER['SERVER_NAME']);
  define("db_NAME", "personal_blog");
  define("db_USER", "root");
  define("db_PASS", "");
  define("db_DRIVER", "mysql");