<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
