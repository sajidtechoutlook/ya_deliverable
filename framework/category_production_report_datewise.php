<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
