<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
