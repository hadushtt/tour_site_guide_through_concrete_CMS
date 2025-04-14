<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\instance$log][1]/ */
/* Type: array */
/* Expiration: 2025-04-19T20:09:27+02:00 */



$loaded = true;
$expiration = 1745086167;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToOne::__set_state(array(
     'targetEntity' => 'InstanceLog',
     'mappedBy' => 'instance',
     'inversedBy' => NULL,
     'cascade' => 
    array (
      0 => 'persist',
      1 => 'remove',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
  )),
  1 => 
  Doctrine\ORM\Mapping\OrderBy::__set_state(array(
     'value' => 
    array (
      'dateCreated' => 'DESC',
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1744655507;
