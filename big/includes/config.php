<?php
/**
 * config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

//Here are the keys for the server: seattlecentral.edu
$siteKey = "6LdRiqQUAAAAADsgbShD4DHGyw8BDxqvhfIjXLZa"; //REPLACE SITE KEYS
$secretKey = "6LdRiqQUAAAAAOfvi2LiqBHFCcexjO9kSISqod4o"; //REPLACE SITE KEYS

//this helps eliminate PHP date errors
date_default_timezone_set('America/Los Angles');

//this constant allows a page to know its own url/name
define('THIS_PAGE') ,basename($_SERVER['PHP-SELF']));

switch(THIS_PAGE)
{
//CONFIRM IF I NEED TO CHANGE ALL THESE LOGOS SINCE THEY'RE ON NAV CORRECT OR WHETHER I CAN JUST COPY PASTE THOSE LOGOS ONTO THE CONFIG and there are still some nav links I need to make these for if I have to do it for all
    case 'index.php';
        $title = 'Web Development Examples by Kelly';
        $logo = 'fa-home';
        $PageID = 'Client Questionnaire';
    break;
        
    case 'flexbox.php';
        $title = 'Flexbox Research';
        $logo = 'fa-users'; //find different font awesome to use??
        $PageID = 'Flexbox Research';
    break;
        
    case 'galleries.php';
        $title = 'Galleries';
        $logo = 'fa-users'; //find different font awesome to use??
        $PageID = 'Galleries';
    break;
        
    case 'calendar.php';
        $title = 'Google Calendar';
        $logo = 'fa-users'; //find different font awesome to use??
        $PageID = 'Google Calendar';
    break;
        
    case 'map.php';
        $title = 'Google Map';
        $logo = 'fa-users'; //find different font awesome to use??
        $PageID = 'Google Map';
    break;
        
    case 'youtube.php';
        $title = 'Google YouTube Video';
        $logo = 'fa-users'; //find different font awesome to use??
        $PageID = 'Google YouTube Video';
    break;
        
    case 'shoppingcarts.php';
        $title = 'Shopping Carts';
        $logo = 'fa-users'; //find different font awesome to use??
        $PageID = 'Shopping Carts';
    break;
        
    case 'siteapp.php';
        $title = 'Responsive vs. Mobile App';
        $logo = 'fa-users'; //find different font awesome to use??
        $PageID = 'Responsive vs. Mobile App';
    break;
        
    case 'webcam.php';
        $title = 'Live Web Cameras';
        $logo = 'fa-users'; //find different font awesome to use??
        $PageID = 'Live Web Cameras';
    break;
        
    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = '';
}