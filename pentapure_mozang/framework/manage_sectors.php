<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
