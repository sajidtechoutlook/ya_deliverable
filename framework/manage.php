<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
