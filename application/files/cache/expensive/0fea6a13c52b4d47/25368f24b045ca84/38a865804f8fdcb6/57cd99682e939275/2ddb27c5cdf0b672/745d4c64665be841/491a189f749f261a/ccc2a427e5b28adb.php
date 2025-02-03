<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\express\entry$associations][1]/ */
/* Type: array */
/* Expiration: 2025-02-08T11:57:06+00:00 */



$loaded = true;
$expiration = 1739015826;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'entry',
     'targetEntity' => '\\Concrete\\Core\\Entity\\Express\\Entry\\Association',
     'cascade' => 
    array (
      0 => 'all',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1738605029;
