<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\user\groupsignuprequestdecline$manager][1]/ */
/* Type: array */
/* Expiration: 2024-05-03T14:43:54+00:00 */



$loaded = true;
$expiration = 1714747434;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => '\\Concrete\\Core\\Entity\\User\\User',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => NULL,
  )),
  1 => 
  \Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'managerUID',
     'referencedColumnName' => 'uID',
     'unique' => false,
     'nullable' => true,
     'onDelete' => 'SET NULL',
     'columnDefinition' => NULL,
     'fieldName' => NULL,
     'options' => 
    array (
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1714346515;
