<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
