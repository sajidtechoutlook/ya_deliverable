<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
