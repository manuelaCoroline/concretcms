<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\page\pagepath][1]/ */
/* Type: array */
/* Expiration: 2025-02-08T14:31:18+00:00 */



$loaded = true;
$expiration = 1739025078;

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
     'name' => 'PagePaths',
     'schema' => NULL,
     'indexes' => 
    array (
      0 => 
      \Doctrine\ORM\Mapping\Index::__set_state(array(
         'name' => 'ppIsCanonical',
         'columns' => 
        array (
          0 => 'ppIsCanonical',
        ),
         'fields' => NULL,
         'flags' => NULL,
         'options' => NULL,
      )),
      1 => 
      \Doctrine\ORM\Mapping\Index::__set_state(array(
         'name' => 'cID',
         'columns' => 
        array (
          0 => 'cID',
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
$data['createdOn'] = 1738605002;
