<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\notification\groupsignuprequestacceptnotification$signup][1]/ */
/* Type: array */
/* Expiration: 2024-05-03T10:04:18+00:00 */



$loaded = true;
$expiration = 1714730658;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => '\\Concrete\\Core\\Entity\\User\\GroupSignupRequestAccept',
     'cascade' => 
    array (
      0 => 'persist',
      1 => 'remove',
    ),
     'fetch' => 'LAZY',
     'inversedBy' => 'notifications',
  )),
  1 => 
  \Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'id',
     'referencedColumnName' => 'id',
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
$data['createdOn'] = 1714346515;
