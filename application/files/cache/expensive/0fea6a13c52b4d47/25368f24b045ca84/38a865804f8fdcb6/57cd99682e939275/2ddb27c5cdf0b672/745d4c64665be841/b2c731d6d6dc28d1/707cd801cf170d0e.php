<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\board$instances][1]/ */
/* Type: array */
/* Expiration: 2024-06-03T00:30:36+00:00 */



$loaded = true;
$expiration = 1717374636;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'board',
     'targetEntity' => 'Instance',
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
