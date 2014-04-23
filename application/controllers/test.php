<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function create_ftp($cu='', $cp='')
	{
		// echo exec('sudo pure-pw useradd joe -u ftpuser -d /home/ftpusers/joe');
		// exec("adduser -c 'FTP USER Tom' -m tom -d /home/ftpusers/joe");
		// exec("passwd tom");
		// exec("");

		// if (isset($_REQUEST['fhomedir']))
		// 	echo $fhomedir = $_REQUEST['fhomedir'];

		// if (isset($_REQUEST['fquota']))
		// 	echo $fquota = $_REQUEST['fquota'];

		// echo $fhomedir = '/home/add';
		// echo $fquota = '600mb';

		// $url = "http://cpf:C1ippingpath@50.62.79.233:2082/frontend/x3/ftp/doaddftp.html?"; 
		// $url = $url . "login=kawsar&password=test&homedir=$fhomedir&quota=$fquota"; 
		// $result = @file_get_contents($url); 
		// if ($result === FALSE) die("ERROR: FTP Account not created. Please make sure you passed correct parameters."); 
		// echo $result;

		// your cPanel username
		$cpanel_user = 'cpf';

		// your cPanel password
		$cpanel_pass = 'Gc-]NZ-$RZ,2';

		// your cPanel skin
		$cpanel_skin = 'x3';

		// your cPanel domain
		$cpanel_host = '50.62.79.233';

		// ftp username
		$ftp_user = ($cu=='')?'itskawsar@gmail.com':$cu;

		 // ftp password
		$ftp_pass = ($cp=='')?'ftp_password':$cp;

		// ftp home directory
		$ftp_home = 'home';

		// ftp quota
		$ftp_quota = '0';

		// create the ftp account
		$request = "https://{$cpanel_user}:{$cpanel_pass}@{$cpanel_host}:2083";
		$request .= "/frontend/{$cpanel_skin}/ftp/doaddftp.html";
		$request .= "?login={$ftp_user}";
		$request .= "&password={$ftp_pass}";
		$request .= "&homedir=public_html/test_ftp/{$ftp_user}";
		// $request .= "a={$ftp_quota}";

		echo $result = @file_get_contents($request);
		if ($result === FALSE) die("ERROR: FTP Account not created. Please make sure you passed correct parameters."); 
		echo 'Successfully added user. Your Login: ' . $ftp_user . ' and Password: ' . $ftp_pass .'. Your ftp location is: public_html/test_ftp/' . $ftp_user;
	}

	public function givemeserverinfo()
	{
		phpinfo();
	}

}

/* End of file test.php */
/* Location: ./application/controllers/test.php */