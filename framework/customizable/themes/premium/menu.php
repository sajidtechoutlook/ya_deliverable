<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
