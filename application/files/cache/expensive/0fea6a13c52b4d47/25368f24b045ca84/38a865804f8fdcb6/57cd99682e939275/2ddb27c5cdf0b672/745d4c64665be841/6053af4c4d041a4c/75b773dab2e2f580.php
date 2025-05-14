<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\instance$batches][1]/ */
/* Type: array */
/* Expiration: 2025-05-19T01:46:32+03:00 */



$loaded = true;
$expiration = 1747608392;

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
$data['createdOn'] = 1747210525;
