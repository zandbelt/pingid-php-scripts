<?php
/*
	PingID API Sample PHP Script: getUserDetails.php
	
	This script will query the PingID API GetUserDetails operation to return the details
	about a PingID user. For more information, review the API documentation:
	https://developer.pingidentity.com/en/api/pingid-api.html

	Note:	This software is open sourced by Ping Identity but not supported commercially
			as such. Any questions/issues should go to the Github issues tracker or discuss
			on the [Ping Identity developer communities] . See also the DISCLAIMER file in
			this directory.
*/

require_once 'Utils.php';

if (count($argv) < 2) {
	echo "Usage: $argv[0] <username>\n";
	exit;
}

print pingid_exec_command('pingid.properties', 'getuserdetails', array(
		'getSameDeviceUsers' => true,
		'userName' => $argv[1]
));

?>
