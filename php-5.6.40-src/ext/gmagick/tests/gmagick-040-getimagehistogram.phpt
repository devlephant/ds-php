--TEST--
Set, get image histogram
--SKIPIF--
<?php
/* $Id: gmagick-040-getimagehistogram.phpt 280206 2009-05-09 18:22:48Z vito $ */
if(!extension_loaded('gmagick')) die('skip');
?>
--FILE--
<?php
$gm = new Gmagick();
$gm->read("magick:rose");
$gm->getImageHistogram();
echo "ok";
?>
--EXPECTF--
ok