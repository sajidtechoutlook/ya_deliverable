<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
