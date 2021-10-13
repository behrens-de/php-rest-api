<?

    defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
    defined('SITE_ROOT') ? null : define('SITE_ROOT', DS.'localhost'.DS.'api'); // /localhost/api

    // PATHS
    defined('INC_PATH') ? null : define('INC_PATH', __DIR__.DS.'..'.DS.'includes');
    defined('CORE_PATH') ? null : define('CORE_PATH', __DIR__.DS.'..'.DS.'core');


    // LOAD THE CONFIG FILE
    require_once(INC_PATH.'/config.php');

    // LOAD THE CORE CLASSES
    require_once(CORE_PATH.DS.'/Post.php');

