<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('5AF49FF58D682E50AAQAAAAWAAAABIgAAACABAAAAAAAAAD/3YmRKUT837dmr0Mk/BEECruYgjlUFvYwaNZ5aDLHJavAY0ewzo04aTnyZv7vFwcdFIOemk32YYrbmQKl9BuC6Wa0JX4/+pTetMKHSn/9tgLcbNxw3DGUMUSA0xjdg9aggrgIMktPd2XmI5KQq97xUvAIvV12YP79lxDqjAHT1p/NpqDonhyx1jQAAADIAAAA+8MXDzrhlA0Qdu9mkmamKH16zp7vD8eD/G8jZ/Wy7oMcxLpqh9304v1R/fOTGuHJFtOt6tanb/tU5poUPSCz4gPoJZqRa1DFeay2QcLceRRhQ56eqV6hb9QpwDCoeWM0+39g/kn2kKRBIeglmjoaYxgP4XiAjfTkeD2K+CPGyZeXz2qx04HIVn3pl+rpbF0Xnj4hQcl3im8lhUfLYwvGa5Jndub6nKxlAA+VqIuKRhLkBepw7WvsyImfwr7Ys6qBhMYSxFCvpTs1AAAAuAAAACuZ+VgiV3sU2niYaA1jPGREZU7fvOqFyI1gG2nNgc9jyVlrA/3EvktlHUduxLckvuKkB3Rk0GkxhHQ5Ww4bEsNu1pzquEL/hfzukOViqSCzcN0NWwDwXGbPM4XduN5waIJsd7kEQPrdWp5Udl8i8cUM03HBXcIzI1ULhPvAiXN1lxDWS9x3o0OyiXKMwJkYpNSs/IscWhDkZ/qRrfz8VSna+ZLfVSY1Yc4CkMsURrAu3KDqDSzQMEQ2AAAAwAAAALV4o8yy1XDqN3oknNFCizlEVAeDg1/g5iqX6vCCLPhSwfc4MDPVvmnHXtDerOrj1TSynUCL+lLt7kYJTITrsDbEEED9gVpLLVFOV2ywI7DzfFfBPKUnOnWBoq5nI1idIeMdRrCUFQWiYq6VeswP9ntAyY5AmttuwLmI2DzVRT1EkzYvjFXK7pcwzm8U5mYkbFshEWAVocxamDkTn6do8lvo2jcBXgG+LQTZAfTaN/CU5C5bsfLLyfQycXHWvKAAWjcAAADAAAAA2aXk48PUNdvx0JJ11n0t2eyG9xnNq+A3WA4ZznKKtMigV7gmx0CCcisUKNt3F/6JErWiniUMtnmCtljqKlgfepOjOEjY9wzVyHUKl08jxjgMHJHrNT3KjRJ5VH55U8fOyYgNBnYyzaDnr7S80ixNUcI+cZlCBoAOmYwBwZ/ks+5gF4sCxdSkh9TgD8BsJvRU4XkyHjbb6jbtrZkwiYJFfOFlvRI1giiC44avRqopmu/aV39w8c6OO0XyX2m0fXQROAAAAMAAAADzy5LmXpDUoUMfHUSGfQzcsuDs/4eK3ab1QByzZS3orUwOk2t7XV5EpmasA76pZFR+8fPOQdfTAm3IuDQssOCx76cri7eLHhFpCLr4INzQzbERSej4T6YOmq4G+vDsEliLm0MOTuQDdBIGu2Jx8SnkecnKwxvxuT7rV6mH2NyL8uTbcJFRLf6QgMKH5mBVKt5WZxU7vQu6qHEjDHIzV/EkzJoJFB7aXtbU1Htb08D3e8D7PsRjDgY9XaVE9WvymjsAAAAA');
