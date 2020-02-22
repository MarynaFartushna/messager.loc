--TEST--
Undefined type (deprecated): Undefined
--DESCRIPTION--
Generated by scripts/convert-bson-corpus-tests.php

DO NOT EDIT THIS FILE
--FILE--
<?php

require_once __DIR__ . '/../utils/tools.php';

$canonicalBson = hex2bin('0800000006610000');
$convertedBson = hex2bin('080000000A610000');
$canonicalExtJson = '{"a" : {"$undefined" : true}}';
$convertedExtJson = '{"a" : null}';

// Canonical BSON -> Native -> Canonical BSON 
echo bin2hex(fromPHP(toPHP($canonicalBson))), "\n";

// Canonical BSON -> Canonical extJSON 
echo json_canonicalize(toCanonicalExtendedJSON($canonicalBson)), "\n";

// Canonical extJSON -> Canonical BSON 
echo bin2hex(fromJSON($canonicalExtJson)), "\n";

?>
===DONE===
<?php exit(0); ?>
--EXPECT--
0800000006610000
{"a":{"$undefined":true}}
0800000006610000
===DONE===