<?php
// bootstrap.php
// Include Composer Autoload (relative to project root).

require_once __DIR__ . "/vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array("/path/to/entity-files");
$isDevMode = false;

// the connection configuration
$dbParams = array(
  'driver'   => 'pdo_mysql',
  'host'   => 'u449610.mysql.masterhost.ru',
  'user'     => 'u449610',
  'password' => '-re3tio_6Z',
  'dbname'   => 'u449610',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);

//$entityManager = GetEntityManager();

//print_r($config);