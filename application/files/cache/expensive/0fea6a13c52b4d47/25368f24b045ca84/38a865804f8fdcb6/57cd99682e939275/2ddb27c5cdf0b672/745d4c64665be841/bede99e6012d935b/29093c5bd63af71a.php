<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\page\container\instance$instanceareas][1]/ */
/* Type: array */
/* Expiration: 2025-05-18T22:00:41+03:00 */



$loaded = true;
$expiration = 1747594841;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'instance',
     'targetEntity' => 'InstanceArea',
     'cascade' => 
    array (
      0 => 'remove',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1747210184;
