<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
