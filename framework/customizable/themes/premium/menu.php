<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
