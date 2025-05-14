<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\instance$rules][1]/ */
/* Type: array */
/* Expiration: 2025-05-19T06:40:00+03:00 */



$loaded = true;
$expiration = 1747626000;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'instance',
     'targetEntity' => 'InstanceSlotRule',
     'cascade' => 
    array (
      0 => 'remove',
    ),
     'fetch' => 'EXTRA_LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
  1 => 
  Doctrine\ORM\Mapping\OrderBy::__set_state(array(
     'value' => 
    array (
      'ruleType' => 'DESC',
      'slot' => 'ASC',
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1747210525;
