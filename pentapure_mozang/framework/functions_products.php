<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
