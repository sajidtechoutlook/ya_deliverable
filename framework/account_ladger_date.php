<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
