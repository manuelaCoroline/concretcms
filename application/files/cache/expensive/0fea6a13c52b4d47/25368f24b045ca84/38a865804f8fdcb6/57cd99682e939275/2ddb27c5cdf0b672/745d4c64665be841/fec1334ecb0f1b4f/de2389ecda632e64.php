<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\datasource\configureddatasource$data_source][1]/ */
/* Type: array */
/* Expiration: 2024-06-03T02:02:15+00:00 */



$loaded = true;
$expiration = 1717380135;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => 'DataSource',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => NULL,
  )),
  1 => 
  \Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'dataSourceID',
     'referencedColumnName' => 'dataSourceID',
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
$data['createdOn'] = 1716986489;
