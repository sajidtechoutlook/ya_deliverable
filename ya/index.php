<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
