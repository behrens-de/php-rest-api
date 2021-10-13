<?
    // Database connection
    $db_user        = 'root';
    $db_password    = 'pass';
    $db_name        = 'api';
    $db_host        = '127.0.0.1';
    $db_charset     = 'uft8';

    $db_pdo_string  = 'mysql:host='.$db_host.';dbname='.$db_name.';charset='.$db_charset.','.$db_user.','.$db_password;

    $db = new PDO($db_pdo_string);
    
    // Database attributes
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,true);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


    ?>