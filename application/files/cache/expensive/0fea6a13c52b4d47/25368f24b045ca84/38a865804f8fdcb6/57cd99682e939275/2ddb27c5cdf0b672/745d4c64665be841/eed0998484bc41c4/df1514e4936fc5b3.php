<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\permission\ipaccesscontrolrange$category][1]/ */
/* Type: array */
/* Expiration: 2024-06-03T07:59:21+00:00 */



$loaded = true;
$expiration = 1717401561;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => 'Concrete\\Core\\Entity\\Permission\\IpAccessControlCategory',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => 'ranges',
  )),
  1 => 
  \Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'iacrCategory',
     'referencedColumnName' => 'iaccID',
     'unique' => false,
     'nullable' => false,
     'onDelete' => 'CASCADE',
     'columnDefinition' => NULL,
     'fieldName' => NULL,
     'options' => 
    array (
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1716986688;
