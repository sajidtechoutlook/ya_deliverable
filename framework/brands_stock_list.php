<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
