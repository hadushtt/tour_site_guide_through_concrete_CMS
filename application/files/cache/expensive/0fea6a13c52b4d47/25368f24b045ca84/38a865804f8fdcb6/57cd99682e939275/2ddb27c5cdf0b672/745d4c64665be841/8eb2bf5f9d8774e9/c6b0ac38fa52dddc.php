<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\express\form$field_sets][1]/ */
/* Type: array */
/* Expiration: 2025-05-18T17:29:36+03:00 */



$loaded = true;
$expiration = 1747578576;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'form',
     'targetEntity' => 'FieldSet',
     'cascade' => 
    array (
      0 => 'persist',
      1 => 'remove',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
  1 => 
  Doctrine\ORM\Mapping\OrderBy::__set_state(array(
     'value' => 
    array (
      'position' => 'ASC',
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1747210189;
