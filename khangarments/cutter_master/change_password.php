<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
