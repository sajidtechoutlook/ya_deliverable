<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
