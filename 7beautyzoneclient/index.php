<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
