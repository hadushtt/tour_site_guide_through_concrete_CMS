<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\datasource\configuration\configuration$data_source][1]/ */
/* Type: array */
/* Expiration: 2025-05-18T23:30:12+03:00 */



$loaded = true;
$expiration = 1747600212;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToOne::__set_state(array(
     'targetEntity' => 'Concrete\\Core\\Entity\\Board\\DataSource\\ConfiguredDataSource',
     'mappedBy' => NULL,
     'inversedBy' => 'configuration',
     'cascade' => 
    array (
      0 => 'persist',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
  )),
  1 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'configuredDataSourceID',
     'referencedColumnName' => 'configuredDataSourceID',
     'unique' => false,
     'nullable' => true,
     'onDelete' => NULL,
     'columnDefinition' => NULL,
     'fieldName' => NULL,
     'options' => 
    array (
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1747210526;
