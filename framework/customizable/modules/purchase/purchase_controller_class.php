<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
