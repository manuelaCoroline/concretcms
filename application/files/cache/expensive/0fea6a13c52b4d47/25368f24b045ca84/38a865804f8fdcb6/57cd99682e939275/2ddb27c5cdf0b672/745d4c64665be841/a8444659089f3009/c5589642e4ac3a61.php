<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\datasource\configureddatasource$items][1]/ */
/* Type: array */
/* Expiration: 2024-06-02T19:36:28+00:00 */



$loaded = true;
$expiration = 1717356988;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'data_source',
     'targetEntity' => 'Concrete\\Core\\Entity\\Board\\InstanceItem',
     'cascade' => 
    array (
      0 => 'remove',
    ),
     'fetch' => 'EXTRA_LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1716986489;
