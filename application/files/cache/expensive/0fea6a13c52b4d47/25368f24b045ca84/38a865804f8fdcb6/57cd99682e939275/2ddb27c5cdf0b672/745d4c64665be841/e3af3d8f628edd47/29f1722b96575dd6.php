<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\file\image\thumbnail\type\type$ftassociatedfilesets][1]/ */
/* Type: array */
/* Expiration: 2025-02-08T01:37:16+00:00 */



$loaded = true;
$expiration = 1738978636;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'ftfsThumbnailType',
     'targetEntity' => 'TypeFileSet',
     'cascade' => 
    array (
      0 => 'all',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => true,
     'indexBy' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1738605019;
