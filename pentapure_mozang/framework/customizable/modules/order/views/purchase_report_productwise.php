<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
