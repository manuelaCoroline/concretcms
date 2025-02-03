<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\user\groupsignuprequest$notifications][1]/ */
/* Type: array */
/* Expiration: 2024-05-03T09:20:06+00:00 */



$loaded = true;
$expiration = 1714728006;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'signupRequest',
     'targetEntity' => '\\Concrete\\Core\\Entity\\Notification\\GroupSignupRequestNotification',
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
