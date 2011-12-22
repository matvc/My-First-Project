$ip = $_SERVER['REMOTE_ADDR'];
$ipstart = array('10.0.0.0','192.168.80.0', '119.92.134.212', '121.1.11.119');
$ipend = array('10.255.255.255','192.168.80.255', '119.92.134.212', '121.1.11.119');

$is_valid = false;
$ip = ip2long($ip);
for($i=0; $i<count($ipstart); $i++){
        $start = ip2long($ipstart[$i]);
        $end = ip2long($ipend[$i]);

        if ($ip>=$start and $ip<=$end){
                $is_valid = true;
        }
}

/**/
if (!$is_valid){
        echo "Report this ticket number to MCI: ";
        echo $ip;
        die();
}
