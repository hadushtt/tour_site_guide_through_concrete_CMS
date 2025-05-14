<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\instance$items][1]/ */
/* Type: array */
/* Expiration: 2025-05-19T07:23:23+03:00 */



$loaded = true;
$expiration = 1747628603;

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
$data['createdOn'] = 1747210525;
