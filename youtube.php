<?php

use Pronto\ShortcodeContainer;

ShortcodeContainer::add('youtube', function($attributes) {
	$youtube = array_shift($attributes);
	$append = array();
	foreach($attributes as $key => $val) {
		$append[] = ' '.$key.'="'.$val.'"';
	}
	return '<iframe href="https://www.youtube.com/embed/'.$youtube.'"'.implode($append).'></iframe>';
});

?>