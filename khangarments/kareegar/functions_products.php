<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
