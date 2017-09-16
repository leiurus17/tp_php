<!DOCTYPE html>
<html>
<head>
	<title>PHP Get Browser</title>
</head>
<body>
	<?php
		function getBrowser() {
			$u_agent  = $_SERVER['HTTP_USER_AGENT'];
			$bname    = 'Unknown';
			$platform = 'Unknown';
			$version  = "";

		// First, get the platform?
		if (preg_match('/linux/i', $u_agent)) {
			$platform = 'linux';
		} elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
			$platform = 'mac';
		} elseif (preg_match('/windows|win32/i', $u_agent)) {
			$platform = 'windows';
		}

		// Next, get the name of the useragent. Yes, separately and for good reason
		if(preg_match('/Firefox/i', $u_agent)) {
			$bname = 'Mozilla Firefox';
			$ub    = "Firefox";
		} elseif (preg_match('/Chrome/i', $u_agent)) {
			$bname = 'Google Chrome';
			$ub    = 'Chrome';
		}

		// Finally, get the correct version number
		$known   = array('Version', $ub, 'other');
		$pattern = '#(?<browser>' . join('|', $known) . ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';

		if (!preg_match_all($pattern, $u_agent, $matches)) {
			// we have no matching number, just continue
		}

		// See how many we have
		$i = count($matches['browser']);

		if ($i != 1) {
			// We will have two since we are not using 'other' argument yet
			// See if the version is before or after the name
			if (strripos($u_agent, "Version") < strripos($u_agent, $ub)) {
				$version = $matches['version'][0];
			} else {
				$version = $matches['version'][1];
			}
		} else {
			$version = $matches['version'][0];
		}

		// Check if we have a number
		if ($version == null || $version == "") {$version = "?";}
	
		return array(
			'userAgent' => $u_agent,
			'name'		=> $bname,
			'version'   => $version,
			'platform'  => $platform,
			'pattern'   => $pattern
		);
		}
		// Now try it
		$ua = getBrowser();
		$yourbrowser = "Your browser: "
		. $ua['name']. " "
		. $ua['version'] . " on "
		. $ua['platform'] . " reports <br />" 
		. $ua['userAgent'];

		print_r($yourbrowser);


	?>
</body>
</html>