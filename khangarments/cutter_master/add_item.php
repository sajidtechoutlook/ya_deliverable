<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
