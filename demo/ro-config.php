<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('2DABC44E8D682D38AAQAAAAWAAAABIgAAACABAAAAAAAAAD/uSdLEHSKXupzgxNzqoC/7TNpfOyKIVuTZuLXTodScRRJpaIJAI+Kf1ptlOHucuSB+uoRP1i2W6FG1qL4Sh8sGReKwIH9dQh2NZxTMfBK40z9t+xg+CJI96R2IMUg6dC2/64McZy5hnALjGlY5eNvsKzXnvceAti/VyPTswHOECm+BsJnzexYKjQAAACgAAAAkbpONfKeIwe/0GU1uhLyXLQkE6Egn3PiRBm2wS0b5GQHft5miJGAdGKvfoX1IF6kZMjO86gYIac0J9jabJ5qm4h1LmOks80EOtsExCBRezgfHdARUYpn7htsaYLMGFHfAoLYPuYfhyy78lNYp36P8hRcthBIzs67miJWtAUkv2874TcIt/CDfSRwn6iG9ylDb7xHKwuzxzINroKg956UHDUAAACgAAAAe0CGaeMenGXaY6rjxPmS4KN/Kdv/7Qbg0QLvNsO0F/rRFrcKcY373M5LqexRWFmeTK6op3un09oLyJnvyLCNVET3QFCQbw1plMB07i6bZUs5GOI9q8IdtILSvnSY1oNmz2c53bB184ik+Oo+CnaFqzznYQx9cEdvl3nYDQmXdJXfMBMdh16XGm4Io70TQ0mykZCBbXbOUOpM2o7yZF8pWTYAAACoAAAAO27V6M4+Dg3PW/RDooEtEvBfayOZwrFBRqeEs5cKiSnMoxBNee6JtUCNDZtFz0oVHlGlHMTFV4eljR/D+zdC7TYWkcZ1Ov8XK3fEZu5zVt+y1smqTkjBHL+4v6z1Gz5/lwkE32a4J1QjnIMQ4k6+V82awO4uXdtLCBLPTJlI1wOChEM/92IGXnVG+KDhfWSs+DMxDh18Ox9ACrC7UHjpQgZd4CpsO10aNwAAAKgAAACXZHfod00Ue1bdjFGNjCTeq3K4eAKTgTji0z2Fo46VQ79HM6yMvTOI8NVT15eSK288oAlaKalYIoMIccMz6/cd41z0iR/U6oUBZOlFquXDNk9x2nyxIbm/CdKtjuZxgACgeT53EjFI6mX7ZBtfm949V5nSJSAOMTTlfbqeZezgncdFTGH34vLtis1xaTL65Hv2vsxXH5bF9t+FfRjnsODYxNbFxkpFQVU4AAAAqAAAAESrYPNOGwbgdhXAAe1LZrUNCRemceKF+tEdXQ8VGEHL2rXskZMkDJbMRzaTpsvp4jHTJ5t+oCUjAKSCXLOUGRDC49ufd5AztmxU66+mr95vPsHXJuSG683feyh5q6fmDCiwsw8qT5ahFVOT1YhI1wcnsziLnR4VSBVv5WJH3X9kArcctw8NLNV7LJ6xqbahqeioixy8ip9FxSH4mIwOtbHxWc+NvPwg6AAAAAA=');
