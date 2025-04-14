<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\instance$batches][1]/ */
/* Type: array */
/* Expiration: 2025-04-19T10:33:40+02:00 */



$loaded = true;
$expiration = 1745051620;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'instance',
     'targetEntity' => 'InstanceItemBatch',
     'cascade' => 
    array (
      0 => 'remove',
    ),
     'fetch' => 'EXTRA_LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1744655507;
