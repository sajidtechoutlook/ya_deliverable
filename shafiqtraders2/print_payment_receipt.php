<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
