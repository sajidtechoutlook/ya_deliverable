<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
