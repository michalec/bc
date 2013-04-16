<?php

function pre_r($expression, $return = false)
{
	if ($return)
	{
	  if (is_string($expression)) return '<pre>' . print_r(str_replace(array('<','>'), array('&lt;','&gt;'), $expression), true) . '</pre>';
		return '<pre>' . print_r($expression, true) . '</pre>';
	}
	else
	{
		echo '<pre>';
		if (is_string($expression)) print_r(str_replace(array('<','>'), array('&lt;','&gt;'), $expression), false);
		else print_r($expression, false);
		echo '</pre>';
	}
}