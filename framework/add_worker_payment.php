<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
