<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\instanceitem$batch][1]/ */
/* Type: array */
/* Expiration: 2024-06-02T22:42:01+00:00 */



$loaded = true;
$expiration = 1717368121;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => 'InstanceItemBatch',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => 'items',
  )),
  1 => 
  \Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'boardInstanceItemBatchID',
     'referencedColumnName' => 'boardInstanceItemBatchID',
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
