<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
