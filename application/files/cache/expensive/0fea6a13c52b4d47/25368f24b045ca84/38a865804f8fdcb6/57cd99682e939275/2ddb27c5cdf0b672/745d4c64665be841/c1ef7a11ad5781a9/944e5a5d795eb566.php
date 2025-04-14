<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\attribute\value\value\selectvalueoptionlist$options][1]/ */
/* Type: array */
/* Expiration: 2025-04-19T16:58:22+02:00 */



$loaded = true;
$expiration = 1745074702;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'list',
     'targetEntity' => 'SelectValueOption',
     'cascade' => 
    array (
      0 => 'all',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
  1 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'avSelectOptionListID',
     'referencedColumnName' => 'avSelectOptionListID',
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
$data['createdOn'] = 1744653711;
