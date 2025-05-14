<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\instance$board][1]/ */
/* Type: array */
/* Expiration: 2025-05-19T09:47:53+03:00 */



$loaded = true;
$expiration = 1747637273;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => 'Board',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => 'instances',
  )),
  1 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'boardID',
     'referencedColumnName' => 'boardID',
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
$data['createdOn'] = 1747210525;
