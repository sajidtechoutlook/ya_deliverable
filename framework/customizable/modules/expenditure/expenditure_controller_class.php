<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
