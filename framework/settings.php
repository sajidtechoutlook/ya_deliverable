<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
