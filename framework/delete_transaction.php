<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
