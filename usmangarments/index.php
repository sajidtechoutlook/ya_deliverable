<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('F47B0BD88D68361EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/gQQWHByxDncajbXtiiJysoxwrndny2/TKwDpaUbbofSZtSyKHqg8EzWe6rZesiUpSmRZdHtrtMmHLKoK9tM6oiAMFs5jNyheNXHx9LFfQhSWEES+TiyUFVWxJPoo6LxTnum2/JOX8WeN6QJLcrDF0JG1FvaaqTfTUSNo44MX9lR9rgr/iawaPzQAAACYAQAAM+ifSvQRAu0zvruzyZcJxDuTp+6oNK+7nJp9e9Shw6E70Fv73oEmkWk8AAO5CD1sLSRrs8N5cXJzlx/PpOBX8phYWTwuu0njW2jrT3TLD41XEHFfh8TEF6YQ7j32/jis82HvxBQjS1T2u6rYnnZT4vq7nkmKShZCtr7jD7JO4zJ5CO/ifs+OIHoVTRDrJkSL3mqqSM1PXBUVYDXYw2/Elph5sEJUgrbKoyoI+vGNe5ksrpbxg089oUvqAmyqAp4I82DQO19Xk4lHtg3fQbu3r2VDZIHUVmEW4uzK8eR4+8D3rcBs/k2oMmTiZICXLlRJKWTFd70mS6Y0Bq0Gso2CjWzMQKuFJZUFK7uKlb9ws4MRT5xDit29Qr4SRxglw/xjGV81b3mPtUlt6RCNSptRdX0wfE+CMLFLNjkbliYrsW9NXtX/qR2eEnTBTsKZ/bzB3h57lskXKpkCpREr9CwwHkOEn6ILXH4F7pXO1yuLGhw5kgZpEIAmy6LC4peRUtwr/Zknw0s6sHMgpG9WMBFiBOgpMxQT7ZW/NQAAAHgBAABzd9VP7hpZH9rbYK8eZaxuuXNtVWaB9ld89MGqgQMvYLauVFq+JC0CXhqHr4jI5LV+w9HTpKJJBSvYzl9/GuVzSBq6GWDxQIv0jkPVRTgITya+4CNEd9O5XQDz3F24jLon5b65zB9ptO4zZH5PY7QqMJ09YJ1qL/1TVPJllUSwo/+IDEoG552oXo3xcmraeTEbdWugh9I0ZouQYS+X9chC3SlaoY0ojeZCC367Y/d8KQVhqUvwoaGyeNAcdIXNbDM2QWYbQU2XEntWpgWqOH48yzL/a0d4pzYQgw9mO71LjjZVRcKO359qpUkXMMXwVDmS0mPsCsh/CgrFFuIsUtN2zsam6Qba2vRoILoqYKUTOvvdI17qqu4jmUnRfBdBr0Aktkiddm3TcXCq+hc4lTl6d8Vjx5aPCUKs5zL7yu0AFLDzxSwnGVPhNQ0bw4fncyFGdeofy1++zdpAqfGSWtIWmiVYqhMciuCt27Eef3Sc+xt1T5lvYl27NgAAAIgBAAAbrcpa4pEho65lGaIKTbGqPLmzgeuYDpvjqTt6lSD/hNE+I2wMXUr/I7FE8vel6GYHF4RuF4e9/9WRkoKzkhaVlC5FEB++uJDL1RJPocORTQHztrQIFIEqQi24ENGRsXj9bRC/zuyNVD9dH0JwlheMVZiRrOaon34DAuN5UxcagDI+iIRPU1jEl68bVum2UsmLIl87KzKNK602PHbGjt9mtLlbniA5FptZeEOhw1q30ZUA65TZPVWI2bdN5fknypN2h5MKZA7H0ii3+iMa8JK1wTFybZFvHulYabqQVO0BJaH5vu5eKoSDsgkZTmUsnzbBpV7Y6isZ4x1KC0Z3UKHzoNoHQBAL3KCNGTTmnCvHlEOXt3E+4vgw5257uTAOy+EFdlCu+LNS4TW0hXED4KVAkRTxpEFJdD4GXb/8qMLIjgnFLhSqibzq9aMAGpPFNXhM1+pdYBW60nhRxygFZy1UNRlogy+wS7J61+zKLuq6ku7SAdk9zD36UExS5LOgReG2NmZwwa+QOjcAAACYAQAAsZzvkqJsbLgPh35tqeJSJ5G8+DLkNb85i6HeqmvMxDun/WtctE8I68tF9TBwOXtWWZ8hE8OnjjCLTve40Vp+Qlu3Y102rCq4u3E3vqO5TvBttwx0/09krLnhk0VPSMqr4dDK8tU6Kce/9yR0+eLVQEzAn6vRYkRpI54pCV3vaNYAyjqqlCmL1yC3jMbq7VAPYbyjNq0Ze2cnd7/e1VI6fD/PqInj4EuSlew+Je8KlI7hCZZSAx1TRhcduvNdKx/JqiHDkUPtI/XWw81wlEsuJj5sEegr4ggjVpOqn+TksJgxfuXAw0cDNJ2RN2M+m8VIrEsrUKIk6AhFov5s8EV1zAGxdBPawZaX2OPqYtuvg/ZYbewRa5N8An6+z4TdkD5embTu4q4xXNY+ont4eLUF+fu+roCuTQpGh2YN6p/UWzM/zAVQI4lpP/plJXt4357zaXNZBsXJq03Tibj/3OtzIyOjl5SMB4z34aLlFBBAMgC/unnHlyx0McvIFpKoT7epUfl/j256cvfoFA8wgndqLL8/WZTgaHkAOAAAAJgBAAB0AhFuMMVCCrT4LhNrwYNicoe6GQbkOtVorEAz10VeI9MAzYjzyy7bGPoCSOwOwnMvt1JB1Fl8EO5nqqcRggzzDE3+YeMW2sc9wg6uh3sUGZ4Dkf7IrhBelJVM15/liUOX8VX9v1M7w8k15WwDmXmJSgYMyBugR0V0X2uPdc34VGWQwEn2t1s6chrhJwQfl7b2ba0i5fwRddVn8SoNmxqfMzHx0JhKSwhTGU8qNN595YYDhlbJrnMDPWgAM9G9y46bP6FNxXxCMSQiUPxgpVeA2NQZaK6yrERDYjfIQLYPTMBXk1Pli9JILBg59zm93UtO/13rEj2dJjJ8Aa5MXbCEVI1JqOSXy7XyG5QaTT8gElQJ4A5i7Q2IxCAqDTUbgj0oQ149G9ISLZN84nLLype3eZQIXNUXx/0E6ORF71l1QUYcDChUMcrumemaAFCi9bmoC5V0Y9yhx2RreWe9JlWuWAoP8jOnaP1JxFqDg2AKt3RYPQ555MJQYO0NDJLmtYzaphU+27fSdIHNwlwjtwdV/nzvqAXQowAAAAAA');
