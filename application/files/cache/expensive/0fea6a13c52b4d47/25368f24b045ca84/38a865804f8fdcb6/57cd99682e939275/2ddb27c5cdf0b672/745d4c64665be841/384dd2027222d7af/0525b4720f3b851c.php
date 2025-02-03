<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\express\entry][1]/ */
/* Type: array */
/* Expiration: 2025-02-08T06:55:01+00:00 */



$loaded = true;
$expiration = 1738997701;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\Entity::__set_state(array(
     'repositoryClass' => '\\Concrete\\Core\\Entity\\Express\\EntryRepository',
     'readOnly' => false,
  )),
  1 => 
  \Doctrine\ORM\Mapping\Table::__set_state(array(
     'name' => 'ExpressEntityEntries',
     'schema' => NULL,
     'indexes' => 
    array (
      0 => 
      \Doctrine\ORM\Mapping\Index::__set_state(array(
         'name' => 'resultsNodeID',
         'columns' => 
        array (
          0 => 'resultsNodeID',
        ),
         'fields' => NULL,
         'flags' => NULL,
         'options' => NULL,
      )),
      1 => 
      \Doctrine\ORM\Mapping\Index::__set_state(array(
         'name' => 'createdSort',
         'columns' => 
        array (
          0 => 'exEntryDateCreated',
        ),
         'fields' => NULL,
         'flags' => NULL,
         'options' => NULL,
      )),
      2 => 
      \Doctrine\ORM\Mapping\Index::__set_state(array(
         'name' => 'modifiedSort',
         'columns' => 
        array (
          0 => 'exEntryDateModified',
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
  2 => 
  \Doctrine\ORM\Mapping\EntityListeners::__set_state(array(
     'value' => 
    array (
      0 => '\\Concrete\\Core\\Express\\Entry\\Listener',
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1738605000;
