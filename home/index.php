<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
