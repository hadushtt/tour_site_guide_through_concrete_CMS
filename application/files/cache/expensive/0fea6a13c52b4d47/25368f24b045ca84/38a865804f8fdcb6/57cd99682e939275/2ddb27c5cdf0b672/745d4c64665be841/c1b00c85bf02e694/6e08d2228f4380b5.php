<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\attribute\category$sets][1]/ */
/* Type: array */
/* Expiration: 2025-05-19T08:39:39+03:00 */



$loaded = true;
$expiration = 1747633179;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'category',
     'targetEntity' => 'Set',
     'cascade' => 
    array (
      0 => 'remove',
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
  2 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'akCategoryID',
     'referencedColumnName' => 'asID',
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
