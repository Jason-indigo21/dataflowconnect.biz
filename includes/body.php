<?php
switch ($_REQUEST['page']) {

	case 'about-us':
		include('views/about-us.php');
		break;
	case 'our-proposal':
		include('views/our-proposal.php');
		break;
	case 'solutions-by-sector':
		include('views/solutions-by-sector.php');
		break;
	case 'digital-infrastructure':
		include('views/digital-infrastructure.php');
		break;
	case 'discover-more':
		include('views/discover-more.php');
		break;
	case 'frequesntly-asked-question':
		include('views/frequesntly-asked-question.php');
		break;
	case 'contact-us':
		include('views/contact-us.php');
		break;
	case 'privacy-policy':
		include('views/privacy-policy.php');
		break;
	case 'cookie-privacy':
		include('views/cookies-policy.php');
		break;
	default:
		include('views/home.php');
		break;
}
?>