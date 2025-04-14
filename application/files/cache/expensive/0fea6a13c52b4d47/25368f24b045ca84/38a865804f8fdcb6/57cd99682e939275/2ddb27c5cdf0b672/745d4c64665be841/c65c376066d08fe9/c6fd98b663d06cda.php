<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\site\group\group$site_groups][1]/ */
/* Type: array */
/* Expiration: 2025-04-19T04:11:48+02:00 */



$loaded = true;
$expiration = 1745028708;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'group',
     'targetEntity' => '\\Concrete\\Core\\Entity\\Permission\\SiteGroup',
     'cascade' => 
    array (
      0 => 'all',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1744654544;
