<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\board$instances][1]/ */
/* Type: array */
/* Expiration: 2025-05-19T04:45:02+03:00 */



$loaded = true;
$expiration = 1747619102;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'board',
     'targetEntity' => 'Instance',
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
