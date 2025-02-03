<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\item$categories][1]/ */
/* Type: array */
/* Expiration: 2024-04-29T13:37:10+00:00 */



$loaded = true;
$expiration = 1714397830;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'item',
     'targetEntity' => 'ItemCategory',
     'cascade' => 
    array (
      0 => 'persist',
      1 => 'remove',
    ),
     'fetch' => 'EXTRA_LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1714011131;
