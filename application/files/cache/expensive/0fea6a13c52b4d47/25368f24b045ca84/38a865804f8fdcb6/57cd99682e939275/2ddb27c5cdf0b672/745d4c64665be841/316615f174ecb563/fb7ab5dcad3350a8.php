<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\site\group\relation$site][1]/ */
/* Type: array */
/* Expiration: 2024-05-03T08:29:54+00:00 */



$loaded = true;
$expiration = 1714724994;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => '\\Concrete\\Core\\Entity\\Site\\Site',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => NULL,
  )),
  1 => 
  \Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'siteID',
     'referencedColumnName' => 'siteID',
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
$data['createdOn'] = 1714332382;
