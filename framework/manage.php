<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
