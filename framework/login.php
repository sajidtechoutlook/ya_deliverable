<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
