<?php 
require_once("../include/initialize.php");  
if (isset($_SESSION['APPLICANTID'])) {
	redirect(web_root.'index.php');
}
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
switch ($view) { 
	case 'appliedjobs' :
	    $title="Profile";	
        $_SESSION['appliedjobs']	='active' ; 
		$content ='P\profile.php';
		break;

	case 'notification' :
	    $title="Profile";	
        $_SESSION['notification']	='active' ; 
		$content ='profile.php';
		break;
  
	case 'accounts' : 
	    $title="Profile";	
        $_SESSION['accounts']	='active' ;
        $content ='profile.php';
		break;
	
	 
	default : 
	    $title="Profile";	
        $_SESSION['appliedjobs']	='active' ;
		$content ='profile.php';		
}
require_once("../theme/templates.php");
?>