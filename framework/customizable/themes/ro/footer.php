<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
