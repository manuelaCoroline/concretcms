<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\board$data_sources][1]/ */
/* Type: array */
/* Expiration: 2024-06-03T09:17:39+00:00 */



$loaded = true;
$expiration = 1717406259;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'board',
     'targetEntity' => 'Concrete\\Core\\Entity\\Board\\DataSource\\ConfiguredDataSource',
     'cascade' => 
    array (
      0 => 'remove',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1716986487;
