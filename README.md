Pilighthelper
=============

php class helps you executing pilight-control from pilight for your raspberrypi


this class provides two functions to trigger on 
or trigger of your pilight configurations by php.
the possibility to add a delay is also included.

**Example Usage**

	<?php
	include "Pilighthelper.php";
	$plh = new Pilighthelper();
	$plh->turnOn("YOUR_LOCATION","YOUR_DEVICE");
	$plh->turnOff("YOUR_LOCATION","YOUR_DEVICE",5);
	?>

This will power on "YOUR_DEVICE"  on "YOUR_LOCATION"
and will power off it in 5 seconds.

depending on your configuration you might need to add

	ignore_user_abort(true);
	set_time_limit(0);

to your php file

**Attention**

you definitley need to add www-data to your **/etc/sudoers** file
    www-data ALL = NOPASSWD: ALL
