<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\instanceitembatch$instance][1]/ */
/* Type: array */
/* Expiration: 2024-06-02T20:57:44+00:00 */



$loaded = true;
$expiration = 1717361864;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => 'Instance',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => 'batches',
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
$data['createdOn'] = 1716986488;
