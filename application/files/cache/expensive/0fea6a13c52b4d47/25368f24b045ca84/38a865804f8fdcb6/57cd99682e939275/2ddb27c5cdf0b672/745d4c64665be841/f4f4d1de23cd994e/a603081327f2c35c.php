<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\user\groupcreate$notifications][1]/ */
/* Type: array */
/* Expiration: 2024-05-03T19:07:10+00:00 */



$loaded = true;
$expiration = 1714763230;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'create',
     'targetEntity' => '\\Concrete\\Core\\Entity\\Notification\\GroupCreateNotification',
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
$data['createdOn'] = 1714346516;
