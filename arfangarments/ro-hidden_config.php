<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
