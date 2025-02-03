<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\board$permission_assignments][1]/ */
/* Type: array */
/* Expiration: 2024-06-03T11:45:13+00:00 */



$loaded = true;
$expiration = 1717415113;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'board',
     'targetEntity' => 'BoardPermissionAssignment',
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
