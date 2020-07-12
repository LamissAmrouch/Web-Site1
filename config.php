<?php 
    session_start();
    if(!isset($_SESSION['lang']))
        $_SESSION['lang'] = 'en';
    else if ( isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
        if ($_GET['lang'] == 'en')
            $_SESSION['lang']="en";
        else if ($_GET['lang'] =='fr' ) $_SESSION['lang']="fr";
        else if ($_GET['lang'] == 'ar') $_SESSION['lang']="ar";
    }
    $lang_array = array('en','fr','ar');
    $xml = simplexml_load_file(__DIR__."/xml/data.xml") or die("xml not found");
    $lang = $_SESSION['lang'];
 //   require_once 'language/'. $_SESSION['lang']. ".php";
?>
