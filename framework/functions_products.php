<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
