<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
