<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
