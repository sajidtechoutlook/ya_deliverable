<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
