<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\datasource\configureddatasource$board][1]/ */
/* Type: array */
/* Expiration: 2024-06-02T19:46:33+00:00 */



$loaded = true;
$expiration = 1717357593;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => 'Concrete\\Core\\Entity\\Board\\Board',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => 'data_sources',
  )),
  1 => 
  \Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'boardID',
     'referencedColumnName' => 'boardID',
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
