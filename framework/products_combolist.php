<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
