<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
