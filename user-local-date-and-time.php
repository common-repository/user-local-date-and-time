<?php
/**
* Plugin Name: User Local Date and Time
* Plugin URI:
* Description: This plugin will give you a simple shortcode allowing you to display the visitor current date and time. Works both with standard time and arabic time.
* Version: 1.0
* Author: Ivan Popov
* Author URI: https://vipestudio.com
**/

if ( ! defined( 'ABSPATH' ) ) exit;

function uldt_arabic_time() {
echo '<p class="arabictime" dir="rtl"><script type="text/javascript">
var event = new Date();
var options = { weekday: "long", year: "numeric", month: "long", day: "numeric" };
document.write(event.toLocaleDateString("ar-AE", options), (",&nbsp;"), event.toLocaleTimeString("ar-AE"));
</script></p>';
}
add_shortcode('arabic-current-date','uldt_arabic_time');

function uldt_standard_time() {
echo '<p class="standardtime""><script type="text/javascript">
var event = new Date();
var options = { weekday: "long", year: "numeric", month: "long", day: "numeric" };
document.write(event.toLocaleDateString("en-GB", options), (",&nbsp;"), event.toLocaleTimeString("en-GB"));
</script></p>';
}
add_shortcode('current-date','uldt_standard_time');

function uldt_bulgarian_time() {
echo '<p class="bgtime""><script type="text/javascript">
var event = new Date();
var options = { weekday: "long", year: "numeric", month: "long", day: "numeric" };
document.write(event.toLocaleDateString("bg-BG", options), (",&nbsp;"), event.toLocaleTimeString("bg-BG"));
</script></p>';
}
add_shortcode('bg-current-date','uldt_bulgarian_time');

?>
