<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
