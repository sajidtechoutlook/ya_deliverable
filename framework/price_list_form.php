<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
