<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
