<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\instanceslot$instance][1]/ */
/* Type: array */
/* Expiration: 2025-05-19T01:40:43+03:00 */



$loaded = true;
$expiration = 1747608043;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => 'Instance',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => 'slots',
  )),
  1 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'boardInstanceID',
     'referencedColumnName' => 'boardInstanceID',
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
$data['createdOn'] = 1747210526;
