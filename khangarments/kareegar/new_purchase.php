<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('F27BD2BE8D6835F0AAQAAAAWAAAABIgAAACABAAAAAAAAAD/EG+UxHOQyguRHcZ0QVZUnI+93/ew/bKlIB+fx73KhtLKdQQ26WgaErmLaUimMXav70UV1QyfiGgFfgvOflR8WahiuMfOz5cQB+lePt4qGmguhJaV+jXxc1vN3rckhmYAlGW4TZbMNXwZ9yB//oNI1XQHn8v8gtUvULkL3SUEWFRkUfH76b2FqTQAAACgAAAAsqQ0FHlTUMqlWW7W6YEeYC5waagcy0bVG9G1nYKRpURzfjCVl26lLFmMYEmL08hHUpf6ZaXlEKajpatSNWz44dF21m6a0bqbHtyOwH7pJ7Mzxr4AAFXRJo2jZnVGa6+fg1BX/Q442uNk+XNekYb+RK5J3d5wQCZoyYGAjpZcRnOMtA0X/gOqhfpOvArUEHve+cnavjESFAFB4Pcuq00gHTUAAACYAAAAbO4YZMIADIosVna1eJs/yLnEepf8ebhaHaLL8U0EBEJyy5KT2cOePx2mNY/PV8l/MVqgvZut+/zyt8ZIksjq4jhOEB3WY9MiBaD1qQ+b2vU+2zH/NjH+Cedl6D8UMKRHCibOijwxJTSgYZ+kvbJs2C/lTb7oegYdbGFSAuOJKJeN5lILobiSq/Qy7alxtEShsEaKmOCV/qo2AAAAoAAAAIAg/K8l7LtGyMHK+TDytLqQiz8o+F9+pL3XXKQSUiq2dbhkkO91keRomDC+9iRxKUVCDyXT/YYcP6TX2BAbcgtaWsYCCgcZsZL4KYymHkWeKxLkY7ydhrw/vIeTD7bQfKK8S9V8VPht1v6P8dxey/ZmiMtXrc2kzJh/OxZ09vuzyaFi5tooS8mCtczhuvMDOuXUettSmyHTHnsN4RFMynE3AAAAsAAAAO6qKdmhfx/MWOkdW01dFCKUA0I4YqlzOILRb6r0tgMVj10C8AtlvyXv5rwpPOlazf5jbJ6rjVQkqZB/t+LIiGsGxqXpRrSfA/X+dL3yrDQeJPvaehg80zWRzdgtddX5inXETFNkFMQnOFCc4qOR1ScghJBFAKhX7mnNVP6lJgxko6/I1jPyHtnMkIPtihxDmV18r3YKQ4Ih7J00J5WPsEmwxd+epPdVD2+ViCceQjmQOAAAALgAAADvXydh5DATlTKcFRSpjDPIHQjllNFY9h/Qg5Q2h+yCilHqdxjSo/cORbaH46lt3sWhohnx7EohUKA+Oy3owjIqkzXZvyQPY0U+0n0Lw14jdBaTQh+ajyiispPkgHfJ5bRJ2Q4cM7/dutcrbEivq1YTbWPQxYsBdPs5hEuJf6rm35miN9Rosg6lu1XW8R+dz5zEDV7jOuO5vxkXL2fGod1seWpF8G/d5HpBv7ktF/1s4mzFJ1vW7SMeAAAAAA==');
