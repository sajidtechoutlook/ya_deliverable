<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
