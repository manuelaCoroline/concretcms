<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\instance$items][1]/ */
/* Type: array */
/* Expiration: 2024-06-03T11:48:47+00:00 */



$loaded = true;
$expiration = 1717415327;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'instance',
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
$data['createdOn'] = 1716986487;
