<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
