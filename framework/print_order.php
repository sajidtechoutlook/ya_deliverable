<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
