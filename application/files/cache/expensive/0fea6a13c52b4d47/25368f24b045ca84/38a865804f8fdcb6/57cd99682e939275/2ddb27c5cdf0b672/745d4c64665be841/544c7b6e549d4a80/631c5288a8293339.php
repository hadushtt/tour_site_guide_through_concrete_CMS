<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\site\group\group$group_relations][1]/ */
/* Type: array */
/* Expiration: 2025-05-19T02:05:21+03:00 */



$loaded = true;
$expiration = 1747609521;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'group',
     'targetEntity' => 'Relation',
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
$data['createdOn'] = 1747210521;
