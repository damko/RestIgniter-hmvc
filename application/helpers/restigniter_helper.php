<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Created on Oct 9, 2011 by Damiano Venturin @ Squadra Informatica

function isTime($time) {
	return preg_match("#([0-1]{1}[0-9]{1}|[2]{1}[0-3]{1}):[0-5]{1}[0-9]{1}#", $time,$matches);
}

function methods_HTML($methods,$object)
{
	$methods_html = '<h4>Object: '.$object.'</h4>';
	$methods_html .= '<dl>';
	foreach ( $methods[$object]['functions'] as  $method) {
		if(empty($method->docstring))
		{
			$methods_html .= '<dt>'.$method->function.'</dt><dd>No description available</dd>';
		} else {
			$methods_html .= '<dt>'.$method->function.'</dt><dd>'.$method->docstring.'</dd>';
		}
	}
	$methods_html .= '</dl>';
	return $methods_html;
}

function dimensions($input)
{
	if(!is_array($input)) return 0;
	
	foreach ($input as $key => $value) {
		return is_array($value) ? 2 : 1;
	}
}
/* End of restigniter_helper.php */