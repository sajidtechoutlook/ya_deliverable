<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
