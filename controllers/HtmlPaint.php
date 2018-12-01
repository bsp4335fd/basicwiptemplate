<?php

class HtmlPaint {
	function prettyLinks($links) {
		$html = "";
		foreach ($links as $link) {
		  $html .= "<li><a class=\"btn\" href=\"index.php$link[0]\">$link[1]</a></li>";
		}
		return $html;
	}

	function prettyMenu($menu) {
		$html = "";
		foreach ($menu as $item) {
		  $html .= "<li><a class=\"btn\" href=\"index.php$item[0]\">$item[1]</a></li>";
		}
		return $html;
	}

	function init() {
		return 'Paint Header';
	}
}
