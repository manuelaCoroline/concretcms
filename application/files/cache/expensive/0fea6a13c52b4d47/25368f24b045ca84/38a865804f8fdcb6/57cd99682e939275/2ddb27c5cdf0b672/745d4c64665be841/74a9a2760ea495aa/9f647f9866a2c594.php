<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\user\groupsignuprequestaccept$notifications][1]/ */
/* Type: array */
/* Expiration: 2024-05-03T05:42:25+00:00 */



$loaded = true;
$expiration = 1714714945;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'signup',
     'targetEntity' => '\\Concrete\\Core\\Entity\\Notification\\GroupSignupRequestAcceptNotification',
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
