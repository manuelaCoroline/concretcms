<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\express\fieldset$controls][1]/ */
/* Type: array */
/* Expiration: 2025-02-08T05:42:25+00:00 */



$loaded = true;
$expiration = 1738993345;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'field_set',
     'targetEntity' => '\\Concrete\\Core\\Entity\\Express\\Control\\Control',
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
      'position' => 'ASC',
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1738605028;
