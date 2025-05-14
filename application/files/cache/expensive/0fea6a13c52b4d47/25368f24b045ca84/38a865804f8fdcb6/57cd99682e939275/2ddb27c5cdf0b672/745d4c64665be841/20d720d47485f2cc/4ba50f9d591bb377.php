<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\instance$log][1]/ */
/* Type: array */
/* Expiration: 2025-05-18T22:09:45+03:00 */



$loaded = true;
$expiration = 1747595385;

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
$data['createdOn'] = 1747210525;
