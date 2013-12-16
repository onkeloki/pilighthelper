<?php

class  Pilighthelper
{
    /**
     * @param $location
     * @param $device
     * @param int $delay
     */
    public function turnOn($location, $device, $delay = 0)
    {
        echo exec("php -f " . __FILE__ . " " . $delay . " 'sudo pilight-control -l  " . $location . " -d " . $device . " -s on'  > /dev/null &  ");
    }

    /**
     * @param $location
     * @param $device
     * @param int $delay
     */
    public function turnOff($location, $device, $delay = 0)
    {
        exec("php -f " . __FILE__ . " " . $delay . " 'sudo pilight-control -l  " . $location . " -d " . $device . " -s off'  > /dev/null &  ");
    }


}

if (isset($argv[1]) && isset($argv[2])) {
    sleep($argv[1]);
    exec($argv[2]);
}