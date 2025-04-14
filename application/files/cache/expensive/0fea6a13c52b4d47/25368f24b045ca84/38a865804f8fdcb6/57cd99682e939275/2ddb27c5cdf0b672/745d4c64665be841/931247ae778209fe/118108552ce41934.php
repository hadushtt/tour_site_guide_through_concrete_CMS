<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\instance$slots][1]/ */
/* Type: array */
/* Expiration: 2025-04-19T04:53:29+02:00 */



$loaded = true;
$expiration = 1745031209;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'instance',
     'targetEntity' => 'InstanceSlot',
     'cascade' => 
    array (
      0 => 'persist',
      1 => 'remove',
    ),
     'fetch' => 'EXTRA_LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
  1 => 
  Doctrine\ORM\Mapping\OrderBy::__set_state(array(
     'value' => 
    array (
      'slot' => 'ASC',
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1744655507;
