<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';

	# @start snippet
	$user_pushed = (int) $_REQUEST['Digits'];
	# @end snippet

	if ($user_pushed == 1)
	{
		echo '<Say>Inserting the block.</Say>';
                file_get_contents('http://opendaylights.cloudapp.net/cgi-bin/start.sh');
	}
        if ($user_pushed == 2)
        {
		echo '<Say>Removing the block</Say>';
                file_get_contents('http://opendaylights.cloudapp.net/cgi-bin/stop.sh');

	}

	else {
		// We'll implement the rest of the functionality in the 
		// following sections.
		//echo "<Say>Sorry, I can't do that yet.</Say>";
		echo '<Redirect method="GET">http://opendaylights.cloudapp.net/handle-incoming-call.xml</Redirect>';
	}

	echo '</Response>';
?>
