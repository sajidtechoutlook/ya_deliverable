<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
