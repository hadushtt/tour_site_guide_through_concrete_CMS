<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\health\report\successfinding][1]/ */
/* Type: array */
/* Expiration: 2025-05-19T01:21:48+03:00 */



$loaded = true;
$expiration = 1747606908;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\Entity::__set_state(array(
     'repositoryClass' => NULL,
     'readOnly' => false,
  )),
  1 => 
  Doctrine\ORM\Mapping\Table::__set_state(array(
     'name' => 'HealthReportResultFinding',
     'schema' => NULL,
     'indexes' => NULL,
     'uniqueConstraints' => NULL,
     'options' => 
    array (
    ),
  )),
  2 => 
  Doctrine\ORM\Mapping\InheritanceType::__set_state(array(
     'value' => 'SINGLE_TABLE',
  )),
  3 => 
  Doctrine\ORM\Mapping\DiscriminatorColumn::__set_state(array(
     'name' => 'type',
     'type' => 'string',
     'length' => NULL,
     'columnDefinition' => NULL,
     'enumType' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1747210526;
