<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
