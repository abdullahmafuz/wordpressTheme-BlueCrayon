
<?php

function load_stylesheets()
{

    wp_register_style("bootsrap", get_template_directory_uri() . "/css/bootstrap/bootstrap.min.css", array(), 1, "all");
    wp_enqueue_style("bootsrap");

    wp_register_style("index", get_template_directory_uri() . "/css/custom/index.css", array(), 1, "all");
    wp_enqueue_style("index");
}

add_action("wp_enqueue_scripts", "load_stylesheets");


function load_script()
{

    wp_register_script("jquery", get_template_directory_uri() . "/js/jquery.min.js", array(), 1, 1, 1);
    wp_enqueue_script("jquery");
    wp_register_script("bootsrap", get_template_directory_uri() . "/js/bootstrap.min.js", array(), 1, 1, 1);
    wp_enqueue_script("bootsrap");
}
add_action("wp_enqueue_scripts", "load_script");








/*** Date Ago ***/
function getDaysAgo($date)
{
    $varLang = 'en';

    /**** AR ****/
    if ($varLang == 'ar') {
        if (empty($date)) {
            return 'غير متاح';
        }
        $periods = array("ثانية", "دقيقة", "ساعة", "يوم", "أسبوع", "شهر", "سنة", "عقد");
        $lengths = array("60", "60", "24", "7", "4.35", "12", "10");
        $now = time();
        $unix_date = strtotime($date);
        if (empty($unix_date)) {
            return 'خطأ';
        }
        if ($now > $unix_date) {
            $difference = $now - $unix_date;
            $tense = '';
        } else {
            $difference = $unix_date - $now;
            $tense = ''; // before
        }
        for ($j = 0; $difference >= $lengths[$j] && $j < count($lengths) - 1; $j++) {
            $difference /= $lengths[$j];
        }
        $difference = round($difference);
        if ($difference != 1) {
            //$periods[$j].= 's';
        }
        return "$difference $periods[$j] {$tense}";
    }
    /**** EN ****/
    else {
        if (empty($date)) {
            return 'Not available';
        }
        $periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
        $lengths = array("60", "60", "24", "7", "4.35", "12", "10");
        $now = time();
        $unix_date = strtotime($date);
        if (empty($unix_date)) {
            return 'error';
        }
        if ($now > $unix_date) {
            $difference = $now - $unix_date;
            $tense = 'ago';
        } else {
            $difference = $unix_date - $now;
            $tense = 'ago';
        }
        for ($j = 0; $difference >= $lengths[$j] && $j < count($lengths) - 1; $j++) {
            $difference /= $lengths[$j];
        }
        $difference = round($difference);
        if ($difference != 1) {
            $periods[$j] .= 's';
        }
        return "$difference $periods[$j] {$tense}";
    }
}





/*** Category Name Filters ***/
add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    }
    return $title;
});








/*** 404 Pages - nofollow / noindex meta ***/
add_filter('wpseo_robots', 'yoast_no_home_noindex', 999);
function yoast_no_home_noindex($string = "")
{
    if (is_404()) {
        get_404_template("404");
    }
    return $string;
}






/*** Full URL ***/
function getFullURL()
{
    return (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
}



/*** Check is Localhost ***/
function isLocalhost()
{
    if (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))) {
        return true;
    }
    return false;
}
