<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
