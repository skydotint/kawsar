<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * @author Samrat Khan <facebook.com/saamraatkhaan>
 */
function jsonEncode($data) {
    return json_encode($data);
}

/**
 * @author Samrat Khan <facebook.com/saamraatkhaan>
 */
function jsonDecode($data) {
    return json_decode($data);
}

/**
 * @author Samrat Khan <facebook.com/saamraatkhaan>
 */
function serializeArr($data) {
    return serialize($data);
}

/**
 * @author Samrat Khan <facebook.com/saamraatkhaan>
 */
function unserializeArr($data) {
    return unserialize($data);
}

/**
 * @author Samrat Khan <facebook.com/saamraatkhaan>
 */
function base64Encode($data) {
    return base64_encode($data);
}

/**
 * @author Samrat Khan <facebook.com/saamraatkhaan>
 */
function base64Decode($data) {
    return base64_decode($data);
}

/**
 * @author Samrat Khan <facebook.com/saamraatkhaan>
 */
function implodeArr($separator, $array) {
    return implode($separator, $array);
}

/**
 * @author Samrat Khan <facebook.com/saamraatkhaan>
 */
function getRange($min, $max) {
    return range($min, $max);
}

/**
 * @author Samrat Khan <facebook.com/saamraatkhaan>
 */
function strReplace($match, $slag, $str) {
    return str_replace($match, $slag, $str);
}

/**
 * @author Samrat Khan <facebook.com/saamraatkhaan>
 */
function sprtf($num, $slag) {
    return sprintf('%.' . $slag . 'f', $num);
}

/**
 * @author Samrat Khan <facebook.com/saamraatkhaan>
 */
function getDayLists() {

    $day = '';
    $selected = '';
    $Arr = array(
        '01' => "01",
        '02' => "02",
        '03' => "03",
        '04' => "04",
        '05' => "05",
        '06' => "06",
        '07' => "07",
        '08' => "08",
        '09' => "09",
        '10' => "10",
        '11' => "11",
        '12' => "12",
        '13' => "13",
        '14' => "14",
        '15' => "15",
        '16' => "16",
        '17' => "17",
        '18' => "18",
        '19' => "19",
        '20' => "20",
        '21' => "21",
        '22' => "22",
        '23' => "23",
        '24' => "24",
        '25' => "25",
        '26' => "26",
        '27' => "27",
        '28' => "28",
        '29' => "29",
        '30' => "30",
        '31' => "31"
    );

    foreach ($Arr as $key => $values) {

        if ($values == date('d'))
            $selected = 'selected="selected"';
        else
            $selected = '';

        $day .= "<option value=\"" . $values . "\"";
        $day .= $selected;
        $day .= ">" . $values . "</option>\n";

        if ($values == date('t'))
            break;
    }

    return $day;
}

/**
 * @author Samrat Khan <facebook.com/saamraatkhaan>
 */
function getMonthLists() {

    $arr = array(
        '01' => "01",
        '02' => "02",
        '03' => "03",
        '04' => "04",
        '05' => "05",
        '06' => "06",
        '07' => "07",
        '08' => "08",
        '09' => "09",
        '10' => "10",
        '11' => "11",
        '12' => "12"
    );

    $monthlist = '';

    foreach ($arr as $key => $val) {
        $monthlist .= "<option value=\"$key\"";
        $monthlist .= ($key == date('m')) ? ' selected="selected"' : '';
        $monthlist .= ">$val</option>\n";
    }

    return $monthlist;
}

/**
 * @author Samrat Khan <facebook.com/saamraatkhaan>
 */
function setFirstLetterCapital($word) {
    return ucfirst($word);
}

/**
 * @author Samrat Khan <facebook.com/saamraatkhaan>
 */
function getToken($length = "") {

    $code = uniqid(rand(), true);
    if ($length != "") {
        return substr($code, 0, $length);
    } else
        return $code;
}

/**
 * @author Samrat Khan <facebook.com/saamraatkhaan>
 */
function hashSha1($data) {
    return sha1($data);
}

/**
 * @author Samrat Khan <facebook.com/saamraatkhaan>
 */
function getArraySum($array) {
    return array_sum($array);
}

/**
 * @author Samrat Khan <facebook.com/saamraatkhaan>
 */
function getCount($array) {
    return count($array);
}

/**
 * @author Samrat Khan <facebook.com/saamraatkhaan>
 */
function getExplode($slag, $str) {
    return explode($slag, $str);
}

/**
 * @author Samrat Khan <facebook.com/saamraatkhaan>
 */
function getImplode($slag, $str) {
    return implode($slag, $str);
}

/**
 * @author Samrat Khan <facebook.com/saamraatkhaan>
 */
function getRound($num, $decimal_num) {
    return round($num, $decimal_num);
}

/**
 * @author Samrat Khan <facebook.com/saamraatkhaan>
 */
function setRules($config) {

    $ci = getInstance();
    return $ci->form_validation->set_rules($config);
}

/**
 * @author Samrat Khan <facebook.com/saamraatkhaan>
 */
function getMaxArrayValue($array) {
    return max($array);
}

/**
 * @author Samrat Khan <facebook.com/saamraatkhaan>
 */
function getMinArrayValue($array) {
    return min($array);
}

/**
 * @author Samrat Khan <facebook.com/saamraatkhaan>
 */
function getTime() {
    return date("Y-m-d H:i:s");
}

/**
 * @author Samrat Khan <facebook.com/saamraatkhaan>
 */
if (!function_exists('get_css_files')) {

    function get_css_files() {
        $str = '';
        $ci = &get_instance();
        $css_files = $ci->config->item('css_files');

        foreach ($css_files AS $item) {
            $str_css[] = $item;
            $str .= '<link rel="stylesheet" href="' . base_url() . '' . $item . '" type="text/css" />' . "\n";
        }
        return $str;
    }
}
if (!function_exists('get_single_css_files')) {

    function get_single_css_files($file = '') {
        $str = '';
        $ci = &get_instance();
        $header_css = $ci->config->item('css_files');

        if (empty($file)) {
            return;
        }

        if (is_array($file)) {
            if (!is_array($file) && count($file) <= 0) {
                return;
            }
            foreach ($file AS $item) {
                $header_css[] = $item;
            }
            $ci->config->set_item('css_files', $header_css);
        } else {
            $str = $file;
            $header_css[] = $str;
            $ci->config->set_item('css_files', $header_css);
        }
    }

}

/**
 * @author Samrat Khan <facebook.com/saamraatkhaan>
 */
if (!function_exists('get_js_files')) {

    function get_js_files() {
        $str = '';
        $ci = &get_instance();
        $js_files = $ci->config->item('js_files');

        foreach ($js_files AS $item) {
            $str .= '<script language="javascript" type="text/javascript"  src="' . base_url() . '' . $item . '"></script>' . "\n";
        }

        return $str;
    }

}

/**
 * @author Samrat Khan <facebook.com/saamraatkhaan>
 */