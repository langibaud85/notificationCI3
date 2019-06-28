<?php ;

class SendNotification extends CI_Controller
{
	public function index()
	{

	// On sauvegarde la souscription
	$file = "souscription.txt";
	error_log($file) ;
	$handle = fopen($file, "r");
	
	$tmp01=fread($handle,5555);

	//	$contents = fwrite($handle,$HTTP_RAW_POST_DATA);

    fclose($handle);
    $tmp02 =array() ;
	parse_str( $tmp01, $tmp02) ;

	$tmp03=array() ;
	$i= 0 ;
	
	foreach ($tmp02 as $key => $value) {
		$tmp03[$i]= $key ;
		$i=$i+1 ;
		//  echo "Clé: ". $key . ", Valeur : ". $value . "<br/ >\n";
		}
	
	// on envoie la notification

	$this->load->view('sendnotification');
	
	}
}
?>
