<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('F47B0BD88D68361EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/gQQWHByxDncajbXtiiJysoxwrndny2/TKwDpaUbbofSZtSyKHqg8EzWe6rZesiUpSmRZdHtrtMmHLKoK9tM6oiAMFs5jNyheNXHx9LFfQhSWEES+TiyUFVWxJPoo6LxTnum2/JOX8WeN6QJLcrDF0JG1FvaaqTfTUSNo44MX9lR9rgr/iawaPzQAAADIAAAAfpqmn/TQppQObochGQ10p4gofYs+IwC2KvnibiSwVkIQnaLLrRDyP4UFe0IsiziFBvABO7mR6eJF6yeoB18WWicbnbSBzSMheittn/2JZAe3/bK6jKIKWlOyt376YI1vtvY/pRqga/9X8ClekwGiTB1BfI8lALWEG3Iw+zk7h0Z+tU9T3j+PoTXvJNqUUpIT3ibm3kWP3hndbJjer9mWv43yxmcGT9Df0jMtBmdu8vaNwAbINwA4YeH7ja8id9+Vj6+v50QNPQ81AAAAuAAAAOyz73w1V90/mcon9jK56i7wzmWzZ+ti2QzHZ4kAKBjXG+uAhSbADps4hiGZ+KalSXMHWbmoecCb+va4MLkPKwr3A1Beu6H58wwQfFfsuBa1AjCUepe//FQMAcvWZRQxpmL4bWOL4T1Y6QIOxKHLmm1XbebnC5alXm+JbokO3juAk0zT/e5GNw1P1ETNSZImtRDhRf8Qx9Y2CcUxOrRA7evNWV/dywM1FVnaR3xixQBp3jhkkladdwI2AAAAyAAAAMBS8onkRMpEIgQ2MBcEqqJ5EPBbhnLjCDyWYaitelmiC6kaJpQ15VQba/k0XG7dfJu+Q71V1HIE8wvA6PQTZdCBxxMRRT0kYmsNOA5Tn6IGRp6w7aUcMxW3hgC2W1lzLO6NHw62yGAJRKpCt71YaRdNHPLq6E5C74GLu7BTFmo4yj15ZH4/F7bqMNBS1LvmZnmcQ5ILOzek2tcinbL5Gh+RlhjDiTNhrhCPSMlKi9OkuGYZ0oCPLuPceR491kIHyLP89z5RG/jANwAAANAAAAAgo2WXNoLWBxuSwAS8zOYEhedrlFYFIo9L5TaoHHUcQVd5PTTB8wdxIMx4CzG8avWqrOFXW0fzj686Q39reDet+UqWXtuMgRfwb0BVB2RxGnCh7v1UE7NUfrJJrp0YmDUotNCqHtl7CPywUb6nTFI3kxj1u8N62rrVcVY1jwvLaLEQOOZhsSRojCPOayk67Zd90vZC4qMjUjZS9k8qnwBpHpASfW5kSJ5C5xsO9/NVIqC2jevISo5cpAD5tuK0vz+B7q3vDxu1tOwVwVifsFPyOAAAANAAAAAEYHqeg0R33Kpq3rd2Juo56R/VfVmpVek+VJ1rqLzvnfsxOVRBTfzJssDLX7yEeodmFL5L45DHIpabvJymgJ2khV2BgNG7z/b/4nTMHIBoMMJzBTdVaXaQ6rsf6AYCacj5BKLLRMJKM+ZL++pMiCkOQtxa4qh/TzZKg5Yy9/1nlaPDqwbO6VwoyT2DIEaS2/fAUzN3IIyLVWVIfnvZRjJWOZhAIZh5qBfCtXu1KNuaPa6fvt+UiAGCIsXYv/74b3y7pDhJGEkLSglhtSqsN5OrAAAAAA==');
