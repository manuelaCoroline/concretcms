<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\express\entry\association$selectedentries][1]/ */
/* Type: array */
/* Expiration: 2024-05-03T15:12:59+00:00 */



$loaded = true;
$expiration = 1714749179;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'association',
     'targetEntity' => '\\Concrete\\Core\\Entity\\Express\\Entry\\AssociationEntry',
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
$data['createdOn'] = 1714346509;
