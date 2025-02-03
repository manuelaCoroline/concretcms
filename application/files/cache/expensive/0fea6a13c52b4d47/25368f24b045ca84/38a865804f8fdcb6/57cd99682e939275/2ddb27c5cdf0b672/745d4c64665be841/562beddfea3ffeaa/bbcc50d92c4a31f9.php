<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\instanceitem$item][1]/ */
/* Type: array */
/* Expiration: 2024-06-02T22:48:47+00:00 */



$loaded = true;
$expiration = 1717368527;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => 'Item',
     'cascade' => 
    array (
      0 => 'remove',
    ),
     'fetch' => 'LAZY',
     'inversedBy' => NULL,
  )),
  1 => 
  \Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'boardItemID',
     'referencedColumnName' => 'boardItemID',
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
