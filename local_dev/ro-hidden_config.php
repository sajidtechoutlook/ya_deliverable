<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
