<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
