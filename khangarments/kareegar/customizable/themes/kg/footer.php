<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
