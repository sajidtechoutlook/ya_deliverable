<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
