<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
