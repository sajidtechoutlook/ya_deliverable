<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
