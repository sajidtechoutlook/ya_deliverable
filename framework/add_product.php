<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
