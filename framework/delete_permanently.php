<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
