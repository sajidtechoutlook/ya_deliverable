<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
