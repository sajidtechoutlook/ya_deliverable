<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
