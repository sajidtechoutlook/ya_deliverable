<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
