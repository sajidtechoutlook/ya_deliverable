<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
