<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\attribute\set$keys][1]/ */
/* Type: array */
/* Expiration: 2025-05-19T05:24:11+03:00 */



$loaded = true;
$expiration = 1747621451;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'set',
     'targetEntity' => '\\Concrete\\Core\\Entity\\Attribute\\SetKey',
     'cascade' => 
    array (
      0 => 'all',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
  1 => 
  Doctrine\ORM\Mapping\OrderBy::__set_state(array(
     'value' => 
    array (
      'asDisplayOrder' => 'ASC',
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1747229000;
