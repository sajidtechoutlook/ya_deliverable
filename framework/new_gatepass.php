<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('787516B88D682726AAQAAAAWAAAABIgAAACABAAAAAAAAAD/VzADNqIEnSmmkpHIpmf6RVfWSUJ3TMOqokEx7dLlQrDcgeuC3Utpxt9MvhdIHwGtPvwjAl2yWrnrgktqV/V/HRa5iXw0qMV15/Wb7roWAtptlJHib2N9968JO3+fjk80iiTu1B592hM0o798MoetdW2r68rbI+8VUGuEvm0+HJ7LLRNSmLAwNDQAAACgAAAA9d7SSyxWvluj67gg3lPOp/Qs9gpfBgEoSqYc2sqwTc+u3t2BrqNaCLTuUeaPzET9C4pMphD2NV7Bxy7ajO3vEPXNIoy7QvrROYZ/0Vh9PFmtQjjLzAdL46yuJtd+KDXPBnYEGdMACjBjObxci6VeMAssCd1PT+0JakIlPiLHZ9El35AhbS0aKncVD+qS0i0JZR6K4OfZy4YVbVFrt9x8vjUAAACQAAAA74WsgzPqAZdGfks30cIPqWRK7fn2/AUSO7vL0ZVFeoXtTUVVuUhlCedUayFRAQjowRQV+Tm4xT34DR9XK7LUtmZ5epxed1UgTC/2/MsvW6UFxUJPjumVses7pzpVXhG7LTQPWN17dD3veNinRcF949I81Igy6SqGd5QaYQHaB/W7SkLwOkICg1OmtEgfeOi4NgAAAKAAAAA1g+aCfKoqeeJ5gLcsrHSaMtd71UfmY1e+GnWCePuDIWdGlNYojim8fYjZe/bU3GK1NuYyVlIfICqYbYeuz100pTygExXzdeMs2dtWD4SXQeQNc/9SpgxD+THTu+OYI3mL3Og/PjuBrOhRaaMu7VmSh72mjSjCCSyBwrS88FWIUK3XzqZNEtfCQ4pXxsex3LdsoQWprtyH/UYsILCsXxAKNwAAALAAAAA0IfyAIwUDs/FnujqHOyUQdKSXqmxIuNJJ+BEgrWhh2HquW03Mg5kNgcLan1Fs9K2Xd4ziBh6tMeYX3qNKSkPz3+mx1SZDB+ZNIXtBU8a2L5sI0pzTtUTjnWH0B/otDbXgcu6SL1f21el17+6UbDCwhjGFgRXaGg+mIwBHtCwEHECtgAL7BuAGU2yymy/vd3xNw1ctrR5Rs5SbcCSqnh0uBiqTbZjspsgZezy6xBjdLDgAAACwAAAAPi7WlstE6n8Vw2d9t5rCRqvrkZGRaUiRa6Qd2/gdCa1hvbgT8KQ1NWnXvoYZSKUr+Qz32Bt2sOxcVKxqHtsV5wG6JVZG/+aZwmaeHCuipEiCFwqMHtZCLyx3P9iAxElhLQPxkq1QhkPQ//wyT+/I/JWhurH58Of9xOh50Ry9f6ty6htsMw7rX87bxnPh+8Fb9MzIe+//2Tjlxx4jIi4S5DUweBiAx2RTU3Pl+2uUxfoAAAAA');
