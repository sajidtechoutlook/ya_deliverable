<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('5AF49FF58D682E50AAQAAAAWAAAABIgAAACABAAAAAAAAAD/3YmRKUT837dmr0Mk/BEECruYgjlUFvYwaNZ5aDLHJavAY0ewzo04aTnyZv7vFwcdFIOemk32YYrbmQKl9BuC6Wa0JX4/+pTetMKHSn/9tgLcbNxw3DGUMUSA0xjdg9aggrgIMktPd2XmI5KQq97xUvAIvV12YP79lxDqjAHT1p/NpqDonhyx1jQAAACYAAAA/nL6JiW6Nq2Tahjc9ZJ95sriDmoPcHvnWgXEFjqG0a716HUgxcIOtb5nBrwVvGEPC8bPwXfbMnEJXRvocpvgCDvHwycdo4Kdux4hIQou4uYyckWl2qwRLHMe+A/uT2/1ntjbAzG/DKQFnR+yUS4lmyWiAnQ5rj+NungV9TLwqLsw7ls24p+Mh0T1SwJvpCc3iAzFJFaQPRc1AAAAiAAAAHlZrAPnwGn/VjcmC3ZsyIGZt0w+5975Uy0RmKB3igDaeK+aNgDWrefZdrfyjnB2VRUjEa9Oc2S298Jn0JWtil9WlIQINdgptsKomd0L1YIvJrN5Nop/iJXyaWnoLmEhNAVCPVBS0qOhvBDkz49uKF6wMdPlXakyQ4dW3CSehEd11wG8VCVMsJo2AAAAmAAAAGG2B/kn3F77VgAKF3OlZsQMRZtA/vNgDyWXI1W9fWtiXIwjlPU+BuXSBw6JLeqkwHJvZv5cR9WQBWrfljYJ/Xz3SER1XRgOKI1hL4t21xC+HG4+bFktxs717t/SrOpsmiZLTE5LQ4GrnbabJjH4iAJlK3pcM66igasUjvEtrHs5ek5GvfvjPZTLjOwlP9/y4lSbDz9ZVpbHNwAAAKAAAABMzgrJjlKPuHCzi+Frk5KoNLzxNnmqzVWQeO9mv5nIuB1+vP4BgGt51Mdum8mieopFPgtXUcx9oWJX//VoyF1B8r63c7Ch8MFjrWlpxL3/R1COTrGdT2fxhHyH2UwMuCNcQUiTINCVlMwpEqBoViEd9Zsgp35BaDULv9kplx8KvP4QoWKa3jkt2RKCPHQ2wqgl7PJ84sbV5k88P96D2tnrOAAAAJgAAADPsQoCfICHWWSiexRFPm5OvaHc9ULrAd+oU4I3Br3JulKC1LYFKkXR/uTGy03gy6GcM2YoUHrgUDd/ngjbECMiLFqPK84RRBZKOGQDa4g9XULcgqWHNarCCXxUTOElv7AGUAhkE8VrT6gl4QJkyOEb+y2jvMg860YPGlydOn6N8Mo4oLAg6xZ5ha7HcHs/7GY72rqbHPk2JgAAAAA=');
