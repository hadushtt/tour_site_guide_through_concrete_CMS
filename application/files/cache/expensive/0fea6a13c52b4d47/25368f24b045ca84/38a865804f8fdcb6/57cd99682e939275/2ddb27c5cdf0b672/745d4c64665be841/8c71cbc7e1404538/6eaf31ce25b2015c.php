<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\user\user$attributes][1]/ */
/* Type: array */
/* Expiration: 2025-05-19T06:40:09+03:00 */



$loaded = true;
$expiration = 1747626009;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'user',
     'targetEntity' => '\\Concrete\\Core\\Entity\\Attribute\\Value\\UserValue',
     'cascade' => 
    array (
      0 => 'remove',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
  1 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'uID',
     'referencedColumnName' => 'uID',
     'unique' => false,
     'nullable' => true,
     'onDelete' => NULL,
     'columnDefinition' => NULL,
     'fieldName' => NULL,
     'options' => 
    array (
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1747210181;
