<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
