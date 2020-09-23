<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'ec2-54-160-120-28.compute-1.amazonaws.com';
$CFG->dbname    = 'd1uip49jgn9g1q';
$CFG->dbuser    = 'blbklmibsqfwsh';
$CFG->dbpass    = '44cdd552b076789e50a5a385d9ba664c3d6ae269c43d90ca3300a2e5dc92e580';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 5432,
  'dbsocket' => 0,
);

$CFG->wwwroot   = 'https://marcelo-moodle.herokuapp.com';
$CFG->dataroot  = '/tmp';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
