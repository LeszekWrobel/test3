<?php function remove_pl($text,$from) {
//remove_pl by tosiek - http://tosiek.pl/ funkcja usuwa ze stringa wszystkie polskie znaki
	if($from == 'utf8') {
		$from = array(
			"\xc4\x85", "\xc4\x87", "\xc4\x99",
			"\xc5\x82", "\xc5\x84", "\xc3\xb3",
			"\xc5\x9b", "\xc5\xba", "\xc5\xbc",
			"\xc4\x84", "\xc4\x86", "\xc4\x98",
			"\xc5\x81", "\xc5\x83", "\xc3\x93",
			"\xc5\x9a", "\xc5\xb9", "\xc5\xbb",
		);
	}elseif($from == 'latin2') {
		$from = array(
			"\xb1", "\xe6", "\xea",
			"\xb3", "\xf1", "\xf3",
			"\xb6", "\xbc", "\xbf",
			"\xa1", "\xc6", "\xca",
			"\xa3", "\xd1", "\xd3",
			"\xa6", "\xac", "\xaf", 
		);
	}elseif($from == 'cp1250') {
		$from = array(
			"\xb9", "\xe6", "\xea",
			"\xb3", "\xf1", "\xf3",
			"\x9c", "\x9f", "\xbf",
			"\xa5", "\xc6", "\xca",
			"\xa3", "\xd1", "\xd3",
			"\x8c", "\x8f", "\xaf",
		);
	}
	$clear = array(
		"\x61", "\x63", "\x65",
		"\x6c", "\x6e", "\x6f",
		"\x73", "\x7a", "\x7a",
		"\x41", "\x43", "\x45",
		"\x4c", "\x4e", "\x4f",
		"\x53", "\x5a", "\x5a",
	);
	if(is_array($text)) {
		foreach($text as $key => $value) {
			$array[str_replace($from, $clear, $key)]= str_replace($from, $clear, $value);
		}
		return $array;
	}else {
		return str_replace($from, $clear, $text);
	}
}
?>