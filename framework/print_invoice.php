<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
