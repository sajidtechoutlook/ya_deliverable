<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
