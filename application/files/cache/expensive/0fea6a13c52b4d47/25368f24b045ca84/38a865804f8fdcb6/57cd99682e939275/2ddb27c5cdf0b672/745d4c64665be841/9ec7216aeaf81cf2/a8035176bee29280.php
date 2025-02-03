<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\file\downloadstatistics$downloaddatetime][1]/ */
/* Type: array */
/* Expiration: 2024-05-04T03:05:57+00:00 */



$loaded = true;
$expiration = 1714791957;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\Column::__set_state(array(
     'name' => 'timestamp',
     'type' => 'datetime_immutable',
     'length' => NULL,
     'precision' => NULL,
     'scale' => NULL,
     'unique' => false,
     'nullable' => false,
     'insertable' => true,
     'updatable' => true,
     'enumType' => NULL,
     'options' => 
    array (
      'comment' => 'Date/time when the file has been downloaded',
    ),
     'columnDefinition' => 'TIMESTAMP DEFAULT current_timestamp',
     'generated' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1714406116;
