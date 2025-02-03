<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\user\grouprolechange$notifications][1]/ */
/* Type: array */
/* Expiration: 2024-05-03T15:02:04+00:00 */



$loaded = true;
$expiration = 1714748524;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'groupRoleChange',
     'targetEntity' => '\\Concrete\\Core\\Entity\\Notification\\GroupRoleChangeNotification',
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
$data['createdOn'] = 1714346515;
