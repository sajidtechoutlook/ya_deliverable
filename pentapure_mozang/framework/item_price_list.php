<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
