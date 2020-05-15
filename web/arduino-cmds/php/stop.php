<?php
define('RASPBERRY_IP', '192.168.0.13');

$host = get_current_user() != 'pi' ? 'ssh pi@' . RASPBERRY_IP : "";
$file = $host . ':/home/pi/longibot-raspberry/web/arduino-cmds/sh/stop.sh';
$cmd = "$host bash /home/pi/longibot-raspberry/web/arduino-cmds/sh/stop.sh";
$output = exec($cmd);
$error = $cmd;

include '../../notifications.php';
