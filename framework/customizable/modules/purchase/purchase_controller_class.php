<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
