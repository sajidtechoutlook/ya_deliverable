<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
