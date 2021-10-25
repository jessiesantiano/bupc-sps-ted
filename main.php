<?php


$content = 'index.php';
$view = (isset($_GET['q']) && $_GET['q'] != '') ? $_GET['q'] : '';


switch ($view) {


    case 'profile':
        $title = "Profile";
        $content = 'student/profile.php';
        break;

    case 'password':
        $title = "Change Password";
        $content = 'student/password.php';
        break;

    case 'faculty':
        $title = "Faculty";
        $content = 'contact.php';
        break;

    case 'about':
        $title = "About Us";
        $content = 'about.php';
        break;
        // case 'login' :
        //     $title="Login";	
        // 	$content='index-s.php';		
        // 	break;

    case 'announcement':
        $title = "Announcement";
        $content = 'announcement.php';
        break;
        // case 'singleblog' :
        //     $title="Announcement";	
        // 	$content='single-blog.php';		
        // 	break;
    default:
        $title = "Home";
        $content = 'home.php';
}




require_once("template.php");
