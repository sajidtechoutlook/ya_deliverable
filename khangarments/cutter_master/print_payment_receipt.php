<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
