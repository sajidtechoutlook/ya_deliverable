<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
