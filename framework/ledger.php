<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
