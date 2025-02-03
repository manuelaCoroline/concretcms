<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\item$relevantthumbnail][1]/ */
/* Type: array */
/* Expiration: 2024-04-29T18:49:53+00:00 */



$loaded = true;
$expiration = 1714416593;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => '\\Concrete\\Core\\Entity\\File\\File',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => NULL,
  )),
  1 => 
  \Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'fID',
     'referencedColumnName' => 'fID',
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
$data['createdOn'] = 1714011131;
