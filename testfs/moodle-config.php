<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli'; # or mariadb
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('DB_HOST');
$CFG->dbname    = getenv('DB_NAME');
$CFG->dbuser    = getenv('DB_USERNAME');
$CFG->dbpass    = getenv('DB_PASSWORD');
$CFG->prefix    = 'mdl';
$CFG->dboptions = array (
  'dbpersist' => false,
  'dbsocket'  => false,
);

$CFG->wwwroot  = getenv('DOMAIN_URL');
$CFG->dataroot  = '/moodle/data';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 02775;

$CFG->passwordsaltmain = 'y0uR34l!ySh0uldtU$3-th1sS&lt';

require_once "/var/www/html/lib/setup.php";
// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
