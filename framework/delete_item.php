<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
