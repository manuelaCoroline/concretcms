<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\summary\template$categories][1]/ */
/* Type: array */
/* Expiration: 2024-06-03T11:19:35+00:00 */



$loaded = true;
$expiration = 1717413575;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\ManyToMany::__set_state(array(
     'targetEntity' => 'Category',
     'mappedBy' => NULL,
     'inversedBy' => 'templates',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
  1 => 
  \Doctrine\ORM\Mapping\JoinTable::__set_state(array(
     'name' => 'SummaryTemplateCategories',
     'schema' => NULL,
     'joinColumns' => 
    array (
    ),
     'inverseJoinColumns' => 
    array (
    ),
     'options' => 
    array (
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1716986367;
