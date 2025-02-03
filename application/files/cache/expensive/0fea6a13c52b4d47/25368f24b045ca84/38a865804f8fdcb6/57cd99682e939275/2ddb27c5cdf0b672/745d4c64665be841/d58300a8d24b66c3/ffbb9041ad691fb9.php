<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\statistics\usagetracker\stackusagerecord][1]/ */
/* Type: array */
/* Expiration: 2025-02-08T16:03:17+00:00 */



$loaded = true;
$expiration = 1739030597;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\Entity::__set_state(array(
     'repositoryClass' => NULL,
     'readOnly' => false,
  )),
  1 => 
  \Doctrine\ORM\Mapping\Table::__set_state(array(
     'name' => 'StackUsageRecord',
     'schema' => NULL,
     'indexes' => 
    array (
      0 => 
      \Doctrine\ORM\Mapping\Index::__set_state(array(
         'name' => 'block',
         'columns' => 
        array (
          0 => 'block_id',
        ),
         'fields' => NULL,
         'flags' => NULL,
         'options' => NULL,
      )),
      1 => 
      \Doctrine\ORM\Mapping\Index::__set_state(array(
         'name' => 'collection_version',
         'columns' => 
        array (
          0 => 'collection_id',
          1 => 'collection_version_id',
        ),
         'fields' => NULL,
         'flags' => NULL,
         'options' => NULL,
      )),
    ),
     'uniqueConstraints' => NULL,
     'options' => 
    array (
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1738605003;
