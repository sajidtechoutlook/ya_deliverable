<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
