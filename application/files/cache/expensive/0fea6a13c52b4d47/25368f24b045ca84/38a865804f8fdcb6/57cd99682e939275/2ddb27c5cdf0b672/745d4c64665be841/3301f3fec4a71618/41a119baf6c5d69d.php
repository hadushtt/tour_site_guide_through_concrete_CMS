<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\instancelogentry$log][1]/ */
/* Type: array */
/* Expiration: 2025-05-19T07:53:36+03:00 */



$loaded = true;
$expiration = 1747630416;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => 'InstanceLog',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => 'entries',
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1747210526;
