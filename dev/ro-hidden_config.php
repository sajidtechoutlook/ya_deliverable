<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
