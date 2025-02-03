<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\permission\ipaccesscontrolcategory$timewindow][1]/ */
/* Type: array */
/* Expiration: 2024-06-03T08:42:41+00:00 */



$loaded = true;
$expiration = 1717404161;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\Column::__set_state(array(
     'name' => 'iaccTimeWindow',
     'type' => 'integer',
     'length' => NULL,
     'precision' => NULL,
     'scale' => NULL,
     'unique' => false,
     'nullable' => true,
     'insertable' => true,
     'updatable' => true,
     'enumType' => NULL,
     'options' => 
    array (
      'unsigned' => true,
      'comment' => 'The time window (in seconds) where the events should be counted (NULL means no limits)',
    ),
     'columnDefinition' => NULL,
     'generated' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1716986687;
