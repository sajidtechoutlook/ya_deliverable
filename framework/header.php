<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
