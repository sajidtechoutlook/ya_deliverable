<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
