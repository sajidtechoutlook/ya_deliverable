<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
