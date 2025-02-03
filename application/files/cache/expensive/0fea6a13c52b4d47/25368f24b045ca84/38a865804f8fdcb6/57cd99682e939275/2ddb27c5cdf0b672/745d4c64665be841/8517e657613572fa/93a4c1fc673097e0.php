<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\item$tags][1]/ */
/* Type: array */
/* Expiration: 2024-04-29T14:20:05+00:00 */



$loaded = true;
$expiration = 1714400405;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'item',
     'targetEntity' => 'ItemTag',
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
