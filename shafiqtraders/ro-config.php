<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('5AF49FF58D682E50AAQAAAAWAAAABIgAAACABAAAAAAAAAD/3YmRKUT837dmr0Mk/BEECruYgjlUFvYwaNZ5aDLHJavAY0ewzo04aTnyZv7vFwcdFIOemk32YYrbmQKl9BuC6Wa0JX4/+pTetMKHSn/9tgLcbNxw3DGUMUSA0xjdg9aggrgIMktPd2XmI5KQq97xUvAIvV12YP79lxDqjAHT1p/NpqDonhyx1jQAAADAAAAAGVD+ZRX0cmx8hjBoK7I2ARDFCB416puBtgzoIHG+7lsBTRmugzx910Ke+PtR4hY68yOO+fl53/wi1WCFkTenxTtRTNabLxa2wcC2BrDJIiJk9mg8Qj3p+IEE+zaLUzam+Pw5b3JD5BPfdlHP2OBRx1p0JJFVTIG8fxJa10a2144Akh7NceT4Cw6i4dvm960IbQJW6lv6Rd+QotQlMtAy+CjTOhjqOrv+nx1ccMEpqG2RHTtKpsvi3Qevvz0w+FasNQAAALAAAAAf8gytChYr0wTv2sH9EDAPQNlxSRHpcwBovEfaDyGkWtu7NWzuQBv2GbExsAWm4w2dZTJbzyar07ZbnuW01U7cHDNJPuAH6QIpfUQpRyqIb45nqRvV13vPt5lYt6OaVdf2J5gojTf14wrpg19FJ/ReDZklveXylnsMs6OD5afrgm0q26K2HSleMZ9gps8KJajukm1Cz3hxgAVFwHIRSrN5szW+0Di4oiNGNqJWcVyirjYAAAC4AAAAlafQbo1IHKEg2rUE068a/5x7QPsiAbxmsJyhb++yll8WZHgbgRnGFJVh1kER41djIms1LPGlQXlWBTDrxAlHzjLvIGs0f9oUiSddkp9qfUmp+0vmzgGj6V91r3RlJxwOtLN0sF0J9yHScg0aWdyxs43qAjUqmqQKkmeFv/LXFd3KmPJ68jauaPTz+cuzmvfUhpJivxS0KC6HqMJuQhxE12J15lLnRYnEzo+D125LdUXZQCjCuX/NkDcAAADAAAAAq6rD7V5Q/p08z54UpW7SyroUgEWozNfHdY7NaBXJq68lXRCuuOosJ81EZ+1QaiqxrbMGxqIjxS3z7f3KjjFYbvcXDm/uAxDaBvc5gF/9E6OmDfALEN2w6OREIppEcT1e4t9PuORxahDrmmG8c+Ei2DX/CQ1zI/c74/TOhuK3c4PikI2WuLWz5YUOuJ36EnPLlE8aBXc4FRQmAhVhVRWR1pKPHRPHn2S4qLdCDuKcLUOmcdhxEJCmgf00XWxQXXTpOAAAAMgAAAAIa7cs94E3OZTrY7UV1pgnfugeuIKv81+Z5Rv00dARO8KKD6nsmWnUWE6k71EwM9umI1Z52s0HO06645liz7XrhrJ6BicGUTbpXOhYFRDhOZ8NLrafqqdm2Un0KB8cKyT+PWx5bb6NU8pGjXy6SqSvD6qJMxacPZsi0W0c7ADIruOJnAOEpENv8md9YId+GD8qx8dOJgbrLSzNtoz9j/66LA19hGXoLzEd1vfK/t00TUUlEMg/bTeYcT414KdfrkgJBK7rv/UgIAAAAAA=');
