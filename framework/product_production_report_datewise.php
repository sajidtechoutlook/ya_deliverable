<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
