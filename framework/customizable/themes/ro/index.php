<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
