<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
