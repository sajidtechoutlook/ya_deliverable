<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
