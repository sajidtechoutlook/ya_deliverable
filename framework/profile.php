<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
