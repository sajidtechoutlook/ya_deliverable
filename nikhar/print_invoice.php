<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
