<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
