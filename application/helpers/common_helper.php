<?php
defined('BASEPATH') OR exit('No direct script access allowed');



if ( ! function_exists('greeting'))
{
	function greeting($user = "User")
	{
		return "Hello ".$user." Kiase ho bhai ";
	}
}
