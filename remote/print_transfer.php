<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
