<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\datasource\configureddatasource$configuration][1]/ */
/* Type: array */
/* Expiration: 2024-06-03T02:26:46+00:00 */



$loaded = true;
$expiration = 1717381606;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToOne::__set_state(array(
     'targetEntity' => 'Concrete\\Core\\Entity\\Board\\DataSource\\Configuration\\Configuration',
     'mappedBy' => 'data_source',
     'inversedBy' => NULL,
     'cascade' => 
    array (
      0 => 'persist',
      1 => 'remove',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1716986489;
