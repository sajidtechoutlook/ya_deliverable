<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('5AF49FF58D682E50AAQAAAAWAAAABIgAAACABAAAAAAAAAD/3YmRKUT837dmr0Mk/BEECruYgjlUFvYwaNZ5aDLHJavAY0ewzo04aTnyZv7vFwcdFIOemk32YYrbmQKl9BuC6Wa0JX4/+pTetMKHSn/9tgLcbNxw3DGUMUSA0xjdg9aggrgIMktPd2XmI5KQq97xUvAIvV12YP79lxDqjAHT1p/NpqDonhyx1jQAAADoAAAA8VFbry5YoD0XenDMYmQWvLu3UE8KKmmUFSKWZZ7qlvZFJ5uUYtwoyfjlqzsTb+rJ50gW5Djo8uJ6GalbaWMQOfItpfpMMMoaQ2b7rvHsPa33wY6aW0/Jqm5TWKn201XeZs+Ntz2GvtGr+ldZNiMZ8Hi1Z+3miStl0EDInn/Uv+4R1nyphw7yWEgjtEFo2IaFLEDAZ+l49EKnfoLvWYJGQR8t8lR29gTvkxoUALnGmW5crlRe8/+nQw7ZLY+SOrFhSnO6WgUwXUIgvsTzFOHYY3ssT3kLj7aN6mF1y8DEERI4ZE+q6ECKsjUAAADQAAAAcM5mWWj8r++Bv9U9zX9zzEpJwZVM5wmxTXcVRDkFJeyVJ6p2oIesm0bW7t5p2O4icwzOKllcZpixlPhfUyBwNaeIKNrIMW370KxhSOZP8IpZw1Cv9B0KZIIRFyOdKG2QhgRF/kv/K/tlq6jM1/goZ/1I9sK6asYrujZFXHqMhCU9E2b18XwY+XoMNgr8cVgUoidXjAOGx89//HYdzLfJonmsgfH2NgCSJ3LDi1aXILhr2hyB9bJ5vNx1NpvB2qN4kcbrO8dlii1eTVcLnkeWyzYAAADYAAAAtlGVpDRJtBugxQ1RIghHPIQJjMBSv9RrfzYTXicudkAPTEFBisxAXhJP41Bp7JVjaj9YI63o1MHSdJg5771RR6g/oLHtYsdZIK41w6AsPIi0ttAeEeGYlAMjtUPouctycljxQ2AdIz7QCLeHdWfkay/M8MoN6wYLGUMGdgufoGp35YBdryoy0QhEP35xDRaKb0xIiEWhNZzN+CtilBEKkFIaq5lLzTNBvxp2t5zbKS5yYK10YMiclvJ4Srrrs5cWXZBxxK9rKT6Dul34xjqoPSdSMlTrdZuVNwAAANAAAACOUkREf+rngvoqoMJjYqCmdCkVBZmGP5pA95KsrRN4D6S2xXLFVmmSUk04pcYFDc1/1WPFg5sDbgB8ZuO67QmOlwhbzphvDnUYI0KaGhxnT9Gi/qxEbeM5U644EgJCXZbeL4SggYozj2Nqd2D5UxZ+1ijekw4jzWa0TU4dbhS3FCU2TxDQrDPko+9iiDA6weJ9lVwJyUeX2PTY1aGz1WVM4eWY5OvsejdLShEqxwrtcB7mDk2lhWmfMewA/URwL3BInUZLnOjwTL/yov6kJ5qQOAAAANgAAAASGlHGDjNWzf9NGjhw5U4VTJ6YMnqNNvaPhVLQQCO+d1igM4hVLGb2+vrssiR8vOAHtV5O7DVEvM5sMwHLHEBezj3hXw+6suq/RRrYcC+5bGavvsThDBCFACwdCDWJV3bsZAO+R4qaMM7gE3IbQofXs3dwT3llirMysAnKl6jxEoQNuPHnpS5GGPLgBR51XFBqTBZHVru8QEHmdPflF0O4QBaDDPPdmgvB+QSgk/Bzjg/xjBHMVsKS8RtAMujv+0uhH0I3KaJq1qkw+Bs0sgTxZ6FpvLIiLtYAAAAA');
