<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\instance$batches][1]/ */
/* Type: array */
/* Expiration: 2024-06-03T05:22:09+00:00 */



$loaded = true;
$expiration = 1717392129;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'instance',
     'targetEntity' => 'InstanceItemBatch',
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
$data['createdOn'] = 1716986487;
