<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
