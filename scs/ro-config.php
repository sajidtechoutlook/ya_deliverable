<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('F47B0BD88D68361EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/gQQWHByxDncajbXtiiJysoxwrndny2/TKwDpaUbbofSZtSyKHqg8EzWe6rZesiUpSmRZdHtrtMmHLKoK9tM6oiAMFs5jNyheNXHx9LFfQhSWEES+TiyUFVWxJPoo6LxTnum2/JOX8WeN6QJLcrDF0JG1FvaaqTfTUSNo44MX9lR9rgr/iawaPzQAAADAAAAAClKQaDtWBaIigC1ZVXvY6Vze/kK9Ws76DlWcX0LZ3ANSbcxEoS9ZXhIddJHW8xdzygWNhFFUSUNt5NYrHyzwYm0C6ueanTo6j674LvOq4VpbbN+iZ9QPTaeMJp2Sq8cOdDBuAhjrEzbUJyzO9vSI9WU+2pX9mmcHe64tPlTZdGEpwQnfWtCQmGjVGewv2+BiOW0l4+E/4p5RyapHDjOiNFiprxzOph0DyG0gMuIB+sEKTfXX/y9SyR6nShjl92roNQAAAKgAAAAe4ZQxKGdmiXN4RaZhB6N/R2AhQEDmbboAZVHqZZwn/eSHd+mtqTt2DGGWKLnqCzZg97Sg0CPh3dHgglgiYb8g2q9myyyiXXBEQuymyEIb+tmH6WlTSnxm2KBtxQAoqtDKDC2Ijydi05dR1xNSbqdVAAWRb4cajTtCX6rymbILZHIWStqqaCaewQ0jqq5DhP+m0I46ocBDkRZ8awEyFKg02T8L14PPvKA2AAAAsAAAAGtRWFFqUsk2w4QtUak2N6UmlA+79VeiHLyXl8QpD7bfmsn/D9Q43sxYnvIzsGshQho8JUI8dOcXEs3V5s8HiA9bKH7YiCt7KiAXCpZC5GYlXToiJVitQc/1An5gZFp7OuKXZVbWN0ttjT1RMA2A6GnrReJl3w4Z9MhYASL8hKEYpCzYIecqSpsEHu/Hr413o+GSLw5vE7wsGcNNjlP+pnYoaNtC6jKCfEsVF9CxiubQNwAAALgAAACnamgjXXbItK+dKvzlQ/6BC6aLxZYUhOan1izKA+9u/kPbaasB3caYdf3jQNKDnPX+tI6W6Csz1gZNx0X/7TXtWbsNlEvmWtbQ6p+bE0nnp6rMiEoMJRv6bT1QGzr3q+wpoTWo5ZHXJZJblssuTzVvYHxtm2DKpbwM+tQC16Ukv67HedisnvHCc/+BcrdaU7sf2ywRl7FIZbHLw+h0YyjuXonv2vx2zgTPyZ68LriMOVpdin7JekhZOAAAAMAAAAA8qx9N6vwb7jh6NjSPtSJez8fdV/nSS7ipCrGMy5eNZk9Um3NbOA9BTuZ/LqxHlUr8IbcNVqGl7xLgmnnC7hywuRU99tmAYzjU/eBQR6yAYU9bFU51gBUk/slrXrCUkE3OEDaIfvIfwFcbc7gRcwYJM/V12vV3K/KZad5F+X1nsb3wthaJQM8Izndr//9c8FjzBngnu9C2P6qco3SXf/32a3l+xwwctEBJqy9OsAzxqRT7i1RjHvBmQSRnpe8mY9cAAAAA');
