<?php
defined('BASEPATH') OR exit('No direct script access allowed');



if (!function_exists('assets_css'))
{
	function assets_css($str)
	{
		$obj =& get_instance();

		return base_url($obj->config->item('public_css') . $str);
	}
}

if (!function_exists('assets_js'))
{
	function assets_js($str)
	{
		$obj = &get_instance();

		return base_url($obj->config->item('public_js') . $str);
	}
}

if (!function_exists('assets_img'))
{
	function assets_img($str)
	{
		$obj = &get_instance();

		return base_url($obj->config->item('public_img') . $str);
	}
}

if (!function_exists('pic_user'))
{
	function pic_user($str)
	{
		$obj = &get_instance();

		if (!empty($str))
		{
			return base_url($obj->config->item('pic_user') . $str);
		}
		else
		{
			return base_url($obj->config->item('public_img') . 'user-default.png');
		}
	}
}

if (!function_exists('dateNoHour'))
{
	function dateNoHour($str)
	{
		$year = substr($str,0,4);
		$date = substr($str,8,2);
		$month = substr($str,5,2);
		$formatMonth = monthID($month);
		return $date.' '.$formatMonth.' '.$year;
	}
}

if (!function_exists('onlyDateHour'))
{
	function onlyDateHour($str)
	{
		$year = substr($str,0,4);
		$date = substr($str,8,2);
		$month = substr($str,5,2);
		$hour = substr($str,11,2);
		$minute = substr($str,14,2);
		$formatMonth = monthID($month);
		return $date.' '.$formatMonth.' '.$year.' '.$hour.':'.$minute;
	}
}

if (!function_exists('dateHourStripe'))
{
	function dateHourStripe($str)
	{
		$year = substr($str,0,4);
		$date = substr($str,8,2);
		$month = substr($str,5,2);
		$hour = substr($str,11,2);
		$minute = substr($str,14,2);
		$formatMonth = monthID($month);
		return $date.' '.$formatMonth.' '.$year.' ─ '.$hour.':'.$minute;
	}
}

if (!function_exists('dateHourIcon'))
{
	function dateHourIcon($str)
	{
		$year = substr($str,0,4);
		$date = substr($str,8,2);
		$month = substr($str,5,2);
		$hour = substr($str,11,2);
		$minute = substr($str,14,2);
		$formatMonth = monthID($month);
		$icon = array(
			'calendar' => '<span class="mif-calendar"></span>',
			'clock' => '<span class="mif-alarm"></span>',
			);
		return $icon['calendar'].' '.$date.' '.$formatMonth.' '.$year.' '.$icon['clock'].' '.$hour.':'.$minute;
	}
}

if (!function_exists('dateHourIconPrivate'))
{
	function dateHourIconPrivate($str)
	{
		$year = substr($str,0,4);
		$date = substr($str,8,2);
		$month = substr($str,5,2);
		$hour = substr($str,11,2);
		$minute = substr($str,14,2);
		$formatMonth = monthID($month);
		$icon = array(
			'calendar' => '<span class="fa fa-calendar"></span>',
			'clock' => '<span class="fa fa-clock-o"></span>',
			);
		return $icon['calendar'].' '.$date.' '.$formatMonth.' '.$year.' '.$icon['clock'].' '.$hour.':'.$minute;
	}
}

if (!function_exists('monthID'))
{
	function monthID($str)
	{
		$month = '';
		switch($str){
			case '01':
				$month = 'January';
			break;
			case '02':
				$month = 'February';
			break;
			case '03':
				$month = 'March';
			break;
			case '04':
				$month = 'April';
			break;
			case '05':
				$month = 'May';
			break;
			case '06':
				$month = 'June';
			break;
			case '07':
				$month = 'July';
			break;
			case '08':
				$month = 'August';
			break;
			case '09':
				$month = 'September';
			break;
			case '10':
				$month = 'October';
			break;
			case '11':
				$month = 'November';
			break;
			case '12':
				$month = 'December';
			break;
		}
		return $month;
	}
}

if (!function_exists('monthEN'))
{
	function monthEN($str)
	{
		$month = "";
		switch($str){
			case '01':
				$month = 'January';
			break;
			case '02':
				$month = 'February';
			break;
			case '03':
				$month = 'March';
			break;
			case '04':
				$month = 'April';
			break;
			case '05':
				$month = 'May';
			break;
			case '06':
				$month = 'June';
			break;
			case '07':
				$month = 'July';
			break;
			case '08':
				$month = 'August';
			break;
			case '09':
				$month = 'September';
			break;
			case '10':
				$month = 'October';
			break;
			case '11':
				$month = 'November';
			break;
			case '12':
				$month = 'December';
			break;
		}
		return $month;
	}
}

if (!function_exists('getDate'))
{
	function getDate($str)
	{
		$date = substr($str,8,2);
		return $date;
	}
}

if (!function_exists('getMonthNumber'))
{
	function getMonthNumber($str)
	{
		$month = substr($str,5,2);
		return $month;
	}
}

if (!function_exists('getMonthID'))
{
	function getMonthID($str)
	{
		$month = substr($str,5,2);
		return monthID($month);
	}
}

if (!function_exists('getMonthEN'))
{
	function getMonthEN($str)
	{
		$month = substr($str,5,2);
		return monthEN($month);
	}
}

if (!function_exists('getYear'))
{
	function getYear($str)
	{
		$year = substr($str,0,4);
		return $year;
	}
}

if (!function_exists('uri_encode'))
{
	function uri_encode($str)
	{
		$parse_format = array(
			" " => "-"
			);
		$clear = strtr($str, $parse_format);
		return strtolower($clear);
	}
}

if (!function_exists('uri_decode'))
{
	function uri_decode($str)
	{
		$parse_format = array(
			"-" => " "
			);
		$clear = strtr($str, $parse_format);
		return strtolower($clear);
	}
}

if (!function_exists('qa_url'))
{
	function qa_url($id, $title)
	{
		$character = array('{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+','-','/','\\',',','.','#',':',';','\'','"','[',']');
		$remove_char_strange = strtolower(str_replace($character, '', $title));
		$end_link = strtolower(str_replace(' ', '-', $id .'-'. $remove_char_strange));
		return $end_link;
	}
}

if (!function_exists('qa_remove_html'))
{
	function qa_remove_html($str)
	{
		return strip_tags(str_replace(array('\'', '"'), '', $str));
	}
}

if (!function_exists('qa_str_limit'))
{
	function qa_str_limit($str, $number)
	{
		if (strlen($str) >= $number)
		{
			return substr($str, 0, $number) . ' ...';
		}
		else
		{
			return $str;
		}		
	}
}

if (!function_exists('qa_remove_html_limit'))
{
	function qa_remove_html_limit($str, $number)
	{
		$var = strip_tags(str_replace(array('\'', '"'), '', $str));
		if (strlen($var) >= $number)
		{
			return substr($var, 0, $number) . ' ...';
		}
		else
		{
			return $var;
		}		
	}
}

if (!function_exists('qa_domain'))
{
	function qa_domain($str)
	{
        $host = @parse_url($str, PHP_URL_HOST);
        if (!$host)
            $host = $str;
        if (substr($host, 0, 4) == "www.")
            $host = substr($host, 4);
        if (strlen($host) > 50)
            $host = substr($host, 0, 47) . '...';
        return $host;
	}
}
