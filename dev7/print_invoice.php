<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
