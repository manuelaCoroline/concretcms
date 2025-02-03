<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\automation\task$set_tasks][1]/ */
/* Type: array */
/* Expiration: 2024-06-03T10:30:31+00:00 */



$loaded = true;
$expiration = 1717410631;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'task',
     'targetEntity' => 'TaskSetTask',
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
$data['createdOn'] = 1716986696;
