<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
