<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
