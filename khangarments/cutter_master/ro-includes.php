<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('F27BD2BE8D6835F0AAQAAAAWAAAABIgAAACABAAAAAAAAAD/EG+UxHOQyguRHcZ0QVZUnI+93/ew/bKlIB+fx73KhtLKdQQ26WgaErmLaUimMXav70UV1QyfiGgFfgvOflR8WahiuMfOz5cQB+lePt4qGmguhJaV+jXxc1vN3rckhmYAlGW4TZbMNXwZ9yB//oNI1XQHn8v8gtUvULkL3SUEWFRkUfH76b2FqTQAAACgAAAAJprP7U4lZAfElNkvFI7tKZkCl3+QYEW4y0Digqp5MvcCLdgU4nxJbMe5/MYF2qSN7/4ePJ2zB2AJsMhmUMDM2VfpC5npaa4gCaB6CY+qwrkGoJcc7jD1ewolRjl/VzozVsLD1Vv/RfLdT9V0lAV2hqgh3V12WAJQUkajWkb+y7a9MkYn/bVsWoLAmBCvYX0Uxhqwu4d4tMEWAR0AbeSZsjUAAACQAAAAi/Yi6WVkdAyMgRqm0xM5ZypbxbmFoRoh8KkpJ1ROjHcnW0TigeawAOS4cVdYE7JtOjdPx6/KT/wUlDjiGdUiSLf3neMAaJX6Tb/pZduFlvZLHILut3SGathcDagI+uLfxCDre9ixOq0QqxYQjBHVkBxCTwUlI82/IaMnx3jZu5pgT9RIk2lar1wqeD+eJuqzNgAAAKAAAADI+HjZaLbX2YKxN5MPJJFkgeLqL3faIKK5/5ZsC862R/PpcCYXKzXEn/Roi0MW3XetNVwf+G2C+FrS+YhUWFlQWkSSVn5ST5HmsgvWtD2d3pMnQ210jtBoZqx9RU0fXEckB5i/ajXp/kG8tGy7qWrngvCbHVelTVIA/Pv55Dz7QD+WuTJvM/YJ+L257S3dE/WCfusXZaHEwgqa1pYdstzkNwAAAKgAAABzyOIX49icC8k8njHWaZkkAT9GdJfmaNJvVcWhHmErA6+BohoPFD4FlMYNsSBexCgIVvVwe7AQOAWxA97BlbyO2GZxj3wd3X67RV+7IbPSyn22T/MVBfGOXNJxPMAO2tMlMtJ2hI2UnyTo+dQhp/Kvs81YflDx5lUUvIL6iguZ7OyLDKEW/zF2OaTgkEkk85ymqvQX4xwpCaMbNACik32WsnVIsYXfJws4AAAAsAAAAJR3mFD+GUtf/YTnTM3rXkOWCDC6tm0heZN9fV/ROIx4l1lsJYdY7AH9ayjqFBkoIUaYMrCAD4RcXgUdzpkSARs7lTn5AqFeVK/UokMctdiyu1+9/Qi2CiOBOjhQQZlECxWY46e7iQCYpgD0mnWc8yRCUB9/PZScP8M4KSnGycwh2H3189rUgFxogCgx0g0pPNnJUetcHOgsGygdRyAI1UecP8msXyiFa68qD7zLI+KNAAAAAA==');
