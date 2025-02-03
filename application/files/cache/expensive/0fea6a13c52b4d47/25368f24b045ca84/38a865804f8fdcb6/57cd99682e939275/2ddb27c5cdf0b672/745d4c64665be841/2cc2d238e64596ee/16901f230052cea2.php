<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\attribute\key\key][1]/ */
/* Type: array */
/* Expiration: 2025-02-08T03:14:12+00:00 */



$loaded = true;
$expiration = 1738984452;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\Entity::__set_state(array(
     'repositoryClass' => NULL,
     'readOnly' => false,
  )),
  1 => 
  \Doctrine\ORM\Mapping\InheritanceType::__set_state(array(
     'value' => 'JOINED',
  )),
  2 => 
  \Doctrine\ORM\Mapping\DiscriminatorColumn::__set_state(array(
     'name' => 'akCategory',
     'type' => 'string',
     'length' => NULL,
     'columnDefinition' => NULL,
     'enumType' => NULL,
  )),
  3 => 
  \Doctrine\ORM\Mapping\EntityListeners::__set_state(array(
     'value' => 
    array (
      0 => '\\Concrete\\Core\\Attribute\\Key\\Listener',
    ),
  )),
  4 => 
  \Doctrine\ORM\Mapping\Table::__set_state(array(
     'name' => 'AttributeKeys',
     'schema' => NULL,
     'indexes' => 
    array (
      0 => 
      \Doctrine\ORM\Mapping\Index::__set_state(array(
         'name' => 'pkgID',
         'columns' => 
        array (
          0 => 'pkgID',
        ),
         'fields' => NULL,
         'flags' => NULL,
         'options' => NULL,
      )),
      1 => 
      \Doctrine\ORM\Mapping\Index::__set_state(array(
         'name' => 'akHandle',
         'columns' => 
        array (
          0 => 'akHandle',
        ),
         'fields' => NULL,
         'flags' => NULL,
         'options' => NULL,
      )),
      2 => 
      \Doctrine\ORM\Mapping\Index::__set_state(array(
         'name' => 'akIsSearchable',
         'columns' => 
        array (
          0 => 'akIsSearchable',
        ),
         'fields' => NULL,
         'flags' => NULL,
         'options' => NULL,
      )),
      3 => 
      \Doctrine\ORM\Mapping\Index::__set_state(array(
         'name' => 'akIsInternal',
         'columns' => 
        array (
          0 => 'akIsInternal',
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
$data['createdOn'] = 1738604996;
