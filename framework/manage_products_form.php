<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
