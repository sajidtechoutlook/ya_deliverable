<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('0BAFDEFB8D682B92AAQAAAAWAAAABIgAAACABAAAAAAAAAD/MycO/c4zpn6teeRjYmpBEtl0ANHzBR8daaTZN/dmIt2vOYmOYBh5gmJlLxrKvPeLl33Hrd+vvAhr6Cz/KpFVTGAC//0iJm0zryEeVovNaCn7YUhTsCrF+sOBOaI+EUWCWgNMFMWq9QOThHddqSPAW4MF1/U8FxHR+QajqtJOiliDUL7t/kV2cTQAAACgAAAAtysFqKueE9GI7v1hatkDRdF9cDffM/Lva/cBqXARb4wHoCAJoheEJwGAIT802MiOAGkCi554OpMivnOi5V7cR/dlBAOIq2LaKeYpC+x1GrqK6UscYZFDQ5KlY8pwpsA4O2um0MG8IAW2LA05tc2RLchdj8AbGf857358rPi4+dFpnxjhVsBu6bPS1Wv7+xMJGkTxPWahzrwuUOX/ZPkKYjUAAACYAAAA+XrKmkCogE85wU0UdRLJCVBjuIMFFVnEkrrueyvJGSriodoUEoKjo7T/2BMpqq4wDYb4bGlg0efv4ol5t0GqzOhhHoDS3BKNZsY5PbxA0QzM/SBH9eSZ52Ilq4eacH8pdU0S44bm3Z+iwkxTQAe2GNhfvQ0khK0rubygpGyqwnnoL5rK6xK+LnnUSuaIEQbMxk341vfWUks2AAAAoAAAABqqQRJ/VSo66G7Ekxe/FTC7EjrZP8D+Q4JF/Gj4FoS4Q6gUDKIOgpFj8D5dZty7A5QwiEFMAwUCyp7Fr9i6NfPkh+uwnlyiz1e9GHb29QF+Ed6bqLIdZ+urvUeRf8L7ktfkQV9fh/T0OfLCN4D0Aq7dLI2419i6RlAYQjVwS+eS9yuHGQ5BObe+D6yA71MU/kQi2jXg90VRshVbOIdyCQQ3AAAAqAAAAG9Pdbks1NsZde3DtH1fmG0O7Bartn3AKuNkvn74/DAWH57ohhQL8DLq5Zwmw4JkEYW14guieMyhPPoYTIQz2yPOCDqkUBPUXg7GXdfFW1eaHc7AlrPFOsHHlAd5l7jyxna0bPpJKxQPjngsNmS85gBHdT3UiQ3nRZVRFe1hbs0PpdGhkTH0oVFd0AL0gzlwPLcl8AeWV/J+Fa8qh80EL7IKNjj/s4WTpTgAAACoAAAAutTRIkeNfe3nsCvw/s8vZHMLRkLCS+kJxsKZCRZ0A5u2rQEpMmwwl6OJiVJGYoTNVJVDArWfIjr453VOKD2mbRIjeYeVglmY4MGH38eqqnAPcZ46rH0ylMyulEr6dR3Bmsbg6QnhfYU//4EQmuB/nXGhShE3tnyxoHzb1Beov9U6Gl0yRANAjff6Q6bea5OLa0R62r8yG0HKoSWl01WItnxwADTDezI8AAAAAA==');
