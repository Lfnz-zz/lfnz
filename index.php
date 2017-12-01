<?php
include 'includes/header.php';
include 'includes/nav.php';
?>
<?php
if(isset($_GET['page']))
		{
			switch($_GET['page'])
			{
				case "home":
					include('pages/home.php');
					break;
				case "proyectos":
					include('pages/proyectos.php');
					break;
				case "bio":
					include('pages/bio.php');
					break;
                case "cv":
					include('pages/cv.php');
					break;
				default:
					include('pages/404.php');
					break;
			}
		}
		else
		{
			include('pages/home.php');
		}
?>

<?php
include 'includes/footer.php';
?>