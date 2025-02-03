<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\attribute\key\settings\selectsettings$list][1]/ */
/* Type: array */
/* Expiration: 2024-05-05T21:02:23+00:00 */



$loaded = true;
$expiration = 1714942943;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToOne::__set_state(array(
     'targetEntity' => 'Concrete\\Core\\Entity\\Attribute\\Value\\Value\\SelectValueOptionList',
     'mappedBy' => NULL,
     'inversedBy' => NULL,
     'cascade' => 
    array (
      0 => 'all',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
  )),
  1 => 
  \Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'avSelectOptionListID',
     'referencedColumnName' => 'avSelectOptionListID',
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
$data['createdOn'] = 1714567201;
