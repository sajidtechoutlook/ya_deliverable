<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
