<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
