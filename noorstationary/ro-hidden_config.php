<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
