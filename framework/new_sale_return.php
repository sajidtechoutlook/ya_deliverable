<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
