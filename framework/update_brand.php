<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
