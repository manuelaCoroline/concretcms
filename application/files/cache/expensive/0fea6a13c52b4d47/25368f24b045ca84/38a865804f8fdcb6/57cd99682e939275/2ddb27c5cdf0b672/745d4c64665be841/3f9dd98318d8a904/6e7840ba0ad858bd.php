<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\instanceitem$instance][1]/ */
/* Type: array */
/* Expiration: 2024-06-03T12:06:25+00:00 */



$loaded = true;
$expiration = 1717416385;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => 'Instance',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => 'items',
  )),
  1 => 
  \Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'boardInstanceID',
     'referencedColumnName' => 'boardInstanceID',
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
$data['createdOn'] = 1716986487;
