<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
