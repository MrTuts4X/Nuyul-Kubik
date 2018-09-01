<?php
date_default_timezone_set('Asia/Jakarta');
require_once("sdata-modules.php");
/**
 * @Author: MrTuts4X
 * @Date:   2018-5-11 17:01:26
 * @Last Modified by:   MrTuts4X
 * @Last Modified time: 2018-08-17 15:13:34
*/


#########################################################################################$
$config['deviceCode']           = '354068080309965';
$config['tk']                           =
'ACHhY3ZHqz1MJJTHQt3Q8ARmzQkhpnEdw9hxdHRodw';
$config['token']                        =
'6356WijKFDUW9WsTXYm57ymSx_NLz0sCYsdQB2wwSDnD_OXhDipRrx0pft_sH7R4E1gfRRpoCt9F1C4';
$config['uuid']                         = '2479652e327943b3bf04e01af84f58d0';
$config['sign']                         = '194e823dd66f922fd6522d335c014f14';
$config['android_id']           = '8f0d10e3eab29d20';
#########################################################################################$


for ($x=0; $x <1; $x++) {
        $url    = array();
        for ($cid=0; $cid <20; $cid++) {
                for ($page=0; $page <10; $page++) {
                        $url[] = array(
                                'url'   => 'http://api.beritaqu.net/content/getList?cid='$
                                'note'  => 'optional',
                        );
                }
                $ambilBerita = $sdata->sdata($url); unset($url);unset($header);
                foreach ($ambilBerita as $key => $value) {
                        $jdata = json_decode($value[respons],true);
                        foreach ($jdata[data][data] as $key => $dataArtikel) {
                                $artikel[] = $dataArtikel[id];
                        }
                }
                $artikel = array_unique($artikel);
                echo "[+] Mengambil data artikel (CID : ".$cid.") ==> ".count(array_uniqu$
        }
        while (TRUE) {
        $timeIn30Minutes = time() + 30*60;
        $rnd    = array_rand($artikel);
        $id     = $artikel[$rnd];
        $url[] = array(
        'url'   => 'http://api.beritaqu.net/timing/read',
        'note'  => $rnd,
        );
        $header[] = array(
        'post' => 'OSVersion=8.0.0&android_channel=google&android_id='.$c$
        );
        $respons = $sdata->sdata($url , $header);
        unset($url);unset($header);
        foreach ($respons as $key => $value) {
        $rjson = json_decode($value[respons],true);
        echo "[+][".$id." (Live : ".count($artikel).")] Message : ".$rjso$
        if($rjson[code] == '-20003' || $rjson['data']['current_read_secon$
        unset($artikel[$value[data][note]]);
        }
        }
        if(count($artikel) == 0){
        sleep(30);
        break;
        }
        sleep(5);
        }
        $x++;
        }