<?php

class Values {

	function getNavigationValues() {
		$navigationValues = [];
		$navigationValues[] = ["?p=1","Home"];
		$navigationValues[] = ["?p=2","Abount"];
		$navigationValues[] = ["?p=3","Contact"];
		$navigationValues[] = ["?p=4","Blog"];
		return $navigationValues;
	}
	function getMenuValues() {
		$menuValues = [];
		$menuValues[] = ["?p=1","Post 1"];
		$menuValues[] = ["?p=2","Post 1"];
		$menuValues[] = ["?p=3","Post 1"];
		$menuValues[] = ["?p=4","Post 1"];
		return $menuValues;
	}
}
