<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
