<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\user\user$signup][1]/ */
/* Type: array */
/* Expiration: 2025-02-08T04:17:48+00:00 */



$loaded = true;
$expiration = 1738988268;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToOne::__set_state(array(
     'targetEntity' => '\\Concrete\\Core\\Entity\\User\\UserSignup',
     'mappedBy' => 'user',
     'inversedBy' => NULL,
     'cascade' => 
    array (
      0 => 'remove',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1738605010;
