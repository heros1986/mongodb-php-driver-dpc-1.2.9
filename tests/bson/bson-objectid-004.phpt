--TEST--
MongoDB\BSON\ObjectID #004 Constructor supports uppercase hexadecimal strings
--FILE--
<?php

var_dump(new MongoDB\BSON\ObjectID('56925B7330616224D0000001'));

?>
===DONE===
<?php exit(0); ?>
--EXPECTF--
object(MongoDB\BSON\ObjectID)#%d (%d) {
  ["oid"]=>
  string(24) "56925b7330616224d0000001"
}
===DONE===
