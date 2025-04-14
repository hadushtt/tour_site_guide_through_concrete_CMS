<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\announcement\announcementuserview$user][1]/ */
/* Type: array */
/* Expiration: 2025-04-19T06:31:23+02:00 */



$loaded = true;
$expiration = 1745037083;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\Id::__set_state(array(
  )),
  1 => 
  Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => 'Concrete\\Core\\Entity\\User\\User',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => NULL,
  )),
  2 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'uID',
     'referencedColumnName' => 'uID',
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
$data['createdOn'] = 1744653566;
