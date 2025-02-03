<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\instanceitembatch$items][1]/ */
/* Type: array */
/* Expiration: 2024-06-03T05:02:04+00:00 */



$loaded = true;
$expiration = 1717390924;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'batch',
     'targetEntity' => 'InstanceItem',
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
$data['createdOn'] = 1716986488;
