<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
