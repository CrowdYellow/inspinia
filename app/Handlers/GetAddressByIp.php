<?php

namespace App\Handlers;


class GetAddressByIp
{
    protected $url = "http://ip.taobao.com/service/getIpInfo.php?ip=";

    public function getAddress($ip)
    {
        $url = $this->url.$ip;

        $info = json_decode(file_get_contents($url), true);

        return $info["data"];
    }
}