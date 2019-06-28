<?php ;

class SaveSouscription extends CI_Controller
{
	public function index()
	{

	// On sauvegarde la souscription
	$file = "souscription.txt";
	error_log($file) ;
	$handle = fopen($file, "w+");
	$tmp01= http_build_query ($_REQUEST) ;
	fwrite($handle,$tmp01.PHP_EOL);

	//	$contents = fwrite($handle,$HTTP_RAW_POST_DATA);

	fclose($handle);

	}

	//--------------------------------------------------------------------

}
?>

