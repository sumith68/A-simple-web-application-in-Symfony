<?php
// auto-generated by sfDatabaseConfigHandler
// date: 2011/01/01 10:02:47

return array(
'doctrine' => new sfDoctrineDatabase(array (
  'dsn' => 'mysql:host=localhost;dbname=my_db',
  'username' => 'root',
  'password' => 'asdfgh',
  'attributes' => 
  array (
    'quote_identifier' => false,
    'use_native_enum' => false,
    'validate' => 'all',
    'idxname_format' => '%s_idx',
    'seqname_format' => '%s_seq',
    'tblname_format' => '%s',
  ),
  'name' => 'doctrine',
)),);
