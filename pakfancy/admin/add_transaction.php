<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
