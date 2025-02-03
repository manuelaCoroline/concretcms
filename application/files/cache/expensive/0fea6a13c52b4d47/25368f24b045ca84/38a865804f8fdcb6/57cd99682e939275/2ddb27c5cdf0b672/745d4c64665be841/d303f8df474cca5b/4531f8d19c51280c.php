<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\user\groupsignuprequestdecline$notifications][1]/ */
/* Type: array */
/* Expiration: 2024-05-03T11:07:48+00:00 */



$loaded = true;
$expiration = 1714734468;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'signup',
     'targetEntity' => '\\Concrete\\Core\\Entity\\Notification\\GroupSignupRequestDeclineNotification',
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
