<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
