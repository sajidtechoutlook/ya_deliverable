<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
