<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
