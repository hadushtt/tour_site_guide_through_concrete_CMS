<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\permission\ipaccesscontrolcategory$package][1]/ */
/* Type: array */
/* Expiration: 2025-05-19T06:41:33+03:00 */



$loaded = true;
$expiration = 1747626093;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => 'Concrete\\Core\\Entity\\Package',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => NULL,
  )),
  1 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'iaccPackage',
     'referencedColumnName' => 'pkgID',
     'unique' => false,
     'nullable' => true,
     'onDelete' => 'CASCADE',
     'columnDefinition' => NULL,
     'fieldName' => NULL,
     'options' => 
    array (
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1747212652;
