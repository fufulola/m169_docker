--TEST--
Bug #77569 (Write Access Violation in DomImplementation)
--SKIPIF--
<?php
if (!extension_loaded('dom')) die('skip dom extension not available');
?>
--FILE--
<?php
$imp = new DOMImplementation;
$dom = $imp->createDocument("", "");
try {
    $dom->encoding = null;
} catch (\ValueError $e) {
    echo $e->getMessage() . \PHP_EOL;
}
?>
--EXPECT--
Invalid document encoding
