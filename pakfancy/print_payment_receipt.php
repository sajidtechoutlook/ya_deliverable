<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
