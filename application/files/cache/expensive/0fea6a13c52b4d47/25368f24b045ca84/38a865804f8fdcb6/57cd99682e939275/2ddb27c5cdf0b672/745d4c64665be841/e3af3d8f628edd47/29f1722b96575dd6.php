<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\file\image\thumbnail\type\type$ftassociatedfilesets][1]/ */
/* Type: array */
/* Expiration: 2025-04-19T15:38:43+02:00 */



$loaded = true;
$expiration = 1745069923;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'ftfsThumbnailType',
     'targetEntity' => 'TypeFileSet',
     'cascade' => 
    array (
      0 => 'all',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => true,
     'indexBy' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1744653535;
