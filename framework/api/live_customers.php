<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
