<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
