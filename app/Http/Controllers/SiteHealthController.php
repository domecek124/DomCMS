<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteHealthController extends Controller
{
    public function getSiteHealth()
    {
        $output = shell_exec('systeminfo | find "System Boot Time"');
        /*
            https://superuser.com/questions/1731987/get-uptime-output-using-systeminfo-find-boot-time
            Získá čas posledního restartu systému
        */
        preg_match('/System Boot Time:\s+(.+)/', $output, $matches);
        $bootTime = strtotime($matches[1]); // Převede string na timestamp

        $uptimeInSeconds = time() - $bootTime; // Rozdíl mezi now a posledním restartem (🫡)

        $dtF = new DateTime('@0'); // DateTime s timestampem 0
        $dtT = new DateTime("@$uptimeInSeconds"); // DateTime s timestampem (🫡)
        $uptime = $dtF->diff($dtT)->format('%a days, %h hours, %i minutes');

        return view('', compact('uptime'));

    }
}
