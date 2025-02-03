<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\instance$slots][1]/ */
/* Type: array */
/* Expiration: 2024-06-02T21:01:15+00:00 */



$loaded = true;
$expiration = 1717362075;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'instance',
     'targetEntity' => 'InstanceSlot',
     'cascade' => 
    array (
      0 => 'persist',
      1 => 'remove',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
  1 => 
  \Doctrine\ORM\Mapping\OrderBy::__set_state(array(
     'value' => 
    array (
      'slot' => 'ASC',
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1716986487;
