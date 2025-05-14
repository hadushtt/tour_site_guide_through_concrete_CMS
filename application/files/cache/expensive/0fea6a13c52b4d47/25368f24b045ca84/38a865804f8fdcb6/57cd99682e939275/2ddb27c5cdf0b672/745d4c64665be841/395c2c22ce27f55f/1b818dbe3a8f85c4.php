<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\calendar\calendar$permission_assignments][1]/ */
/* Type: array */
/* Expiration: 2025-05-18T22:38:56+03:00 */



$loaded = true;
$expiration = 1747597136;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'calendar',
     'targetEntity' => 'CalendarPermissionAssignment',
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
$data['createdOn'] = 1747210526;
