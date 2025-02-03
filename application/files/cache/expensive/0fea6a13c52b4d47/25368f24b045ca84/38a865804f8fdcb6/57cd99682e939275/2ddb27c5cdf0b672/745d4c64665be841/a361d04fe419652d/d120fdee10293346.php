<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\express\entry\association$entry][1]/ */
/* Type: array */
/* Expiration: 2024-05-03T09:08:02+00:00 */



$loaded = true;
$expiration = 1714727282;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => '\\Concrete\\Core\\Entity\\Express\\Entry',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => 'associations',
  )),
  1 => 
  \Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'exEntryID',
     'referencedColumnName' => 'exEntryID',
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
$data['createdOn'] = 1714346509;
