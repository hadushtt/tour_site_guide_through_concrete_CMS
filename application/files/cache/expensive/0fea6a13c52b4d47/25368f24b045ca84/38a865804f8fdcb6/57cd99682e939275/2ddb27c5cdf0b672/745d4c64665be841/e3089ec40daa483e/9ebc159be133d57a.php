<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\board$permission_assignments][1]/ */
/* Type: array */
/* Expiration: 2025-05-19T10:20:48+03:00 */



$loaded = true;
$expiration = 1747639248;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'board',
     'targetEntity' => 'BoardPermissionAssignment',
     'cascade' => 
    array (
      0 => 'remove',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1747210525;
