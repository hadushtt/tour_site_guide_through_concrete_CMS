<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\attribute\key\key$type][1]/ */
/* Type: array */
/* Expiration: 2025-05-18T19:53:40+03:00 */



$loaded = true;
$expiration = 1747587220;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => '\\Concrete\\Core\\Entity\\Attribute\\Type',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => NULL,
  )),
  1 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'atID',
     'referencedColumnName' => 'atID',
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
$data['createdOn'] = 1747210180;
