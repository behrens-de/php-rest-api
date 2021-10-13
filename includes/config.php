<?
    include_once(__DIR__.'/../settings/_mysql.php');
    // Database connection
    $db_user        = $_mysql["user"];
    $db_password    = $_mysql["password"];
    $db_name        = $_mysql["name"];
    $db_host        = $_mysql["host"];

    $db = new PDO('mysql:host='.$db_host.'; dbname='.$db_name.'', $db_user, $db_password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
     
    // Database attributes
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,true);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    define('APP_NAME','PHP REST API');
    ?>