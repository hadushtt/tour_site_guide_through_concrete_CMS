<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\express\entity$associations][1]/ */
/* Type: array */
/* Expiration: 2025-04-19T04:37:10+02:00 */



$loaded = true;
$expiration = 1745030230;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'source_entity',
     'targetEntity' => 'Association',
     'cascade' => 
    array (
      0 => 'persist',
      1 => 'remove',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1744653705;
