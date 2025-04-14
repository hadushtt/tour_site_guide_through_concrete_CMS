<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\instance$items][1]/ */
/* Type: array */
/* Expiration: 2025-04-19T14:18:47+02:00 */



$loaded = true;
$expiration = 1745065127;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'instance',
     'targetEntity' => 'InstanceItem',
     'cascade' => 
    array (
      0 => 'remove',
    ),
     'fetch' => 'EXTRA_LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1744655507;
