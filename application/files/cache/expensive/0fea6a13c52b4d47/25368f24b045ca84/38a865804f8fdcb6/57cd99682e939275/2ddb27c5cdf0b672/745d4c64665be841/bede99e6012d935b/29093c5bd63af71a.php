<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\page\container\instance$instanceareas][1]/ */
/* Type: array */
/* Expiration: 2025-02-08T03:54:05+00:00 */



$loaded = true;
$expiration = 1738986845;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'instance',
     'targetEntity' => 'InstanceArea',
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
$data['createdOn'] = 1738605020;
