<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
