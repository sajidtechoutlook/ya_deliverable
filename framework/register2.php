<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
