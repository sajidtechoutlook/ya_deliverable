<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
