<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\attribute\value\value\abstractvalue$generic_value][1]/ */
/* Type: array */
/* Expiration: 2025-05-19T07:19:35+03:00 */



$loaded = true;
$expiration = 1747628375;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\Id::__set_state(array(
  )),
  1 => 
  Doctrine\ORM\Mapping\OneToOne::__set_state(array(
     'targetEntity' => '\\Concrete\\Core\\Entity\\Attribute\\Value\\Value\\Value',
     'mappedBy' => NULL,
     'inversedBy' => NULL,
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
  )),
  2 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'avID',
     'referencedColumnName' => 'avID',
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
$data['createdOn'] = 1747210183;
