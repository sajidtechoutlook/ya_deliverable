<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
