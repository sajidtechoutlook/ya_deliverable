<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
