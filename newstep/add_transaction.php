<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
