<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('F47B0BD88D68361EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/gQQWHByxDncajbXtiiJysoxwrndny2/TKwDpaUbbofSZtSyKHqg8EzWe6rZesiUpSmRZdHtrtMmHLKoK9tM6oiAMFs5jNyheNXHx9LFfQhSWEES+TiyUFVWxJPoo6LxTnum2/JOX8WeN6QJLcrDF0JG1FvaaqTfTUSNo44MX9lR9rgr/iawaPzQAAADAAAAAIig83VqMw0ViAlSQGfiLfMGGpW+LhjLpsxkemsAfCSkvAIj5pRRR8O25zKoIRgVtRek8KBXfPYKacMo8Dzqr+khGdPF0aOFMw0/kEkVNN2SKFh2WqHqfiSInFvrajo+x+RUdOiRHX7tq83Onn0pQuMxzNAe9BVROuTqpvSSfMcTmrTQ9Olaxg16sAOMv090HwKzoAKWpnUaqmsz9+bTeiyw8/egTAdnEqxmwN3dkE6dZoS8zk0VXtd0bmonc+yCTNQAAALgAAAAvz1CBZiShYF4V1fabh99C8TxjevvLuZhezayG+t2c7Y/xsRNyl0JCedbh4zmql1nIwZXX77QKVRAQ9YnOSyTks2v9g8ih9lNylPQMvtnc/TVL/bhg5utPhC0NF1Bwif3q29ppxej5RYtJOlKhWhaxG+VLMIG0dZbTYxSnxLSmtuKA6xj/3vHU8MEv1uIqPTeWzJ0loXZTGxLKrkHCQwGbusu+8ElaRfztU91rgh4xYow0jtwvoIdYNgAAAMAAAAAU2eUlz9nPaPZbiBNz5uUmJUPrQIg+9BdH57dBBNhCm6ulkhaUqH7y5HXMnRyck2edX/ok/vuw9qFHW8kgitkGBMnpWnlc5ccRmBC+On5Q4CY2QTgcRImnBxdcEUKz/MHoTjaQLpgE5HPGAN3K+E3qyjswT8zJ6unNdy+Qv66kEwPM4kVkL+/hXYt/CP4kp3TTaUeBO8Sx2m9nhWGZnFw0uQSpKgrIPrs95oAyRjqIMUDmgiLNkPS/0bZajIW4E1Q3AAAAyAAAAOUp8WVFWnQPJNv0uN4o4PuJTg3RbxejEXi/wUMltpUPmpOmxr0+ygf9HtrDBxs1rbSoNbpkHdYCQnk8x0d9Rua004vd24GZ9YFFIDrnKE3sUkQSxEcnADFxmkTyPsN+BPKeDACrTuPaUFkSL9G+XHACBX8grNH/OXCZBojEv4gEsFvWi2YtcXvusJbmdnrJRrtRuu5DH2yxSneZDacFz/hybtUYaMOSAFjMLUMr3CmTWVnveIbC5dKMRx1y2etmxGYzGSrmWg/QOAAAAMgAAAAOdzDG7q4o5sKqSjMn4aM1N+ClG6Bhax3V0l3jwyEDzl2lpdbw+ajQe2DA61pLolBtZGwyu8rv9tFWrNZmWS0HGiOehz6E+9rSsvi+jV+yHXc/4Rsfb23B2Biv4vJyT7joufLUxKMjVtPFCvpEnYI8VR9Esq1dtACKZFj7APX5OkW1LS43cBbSYvZLj0NUYlx5BTYuLH/BB+eub5nD5lj8yj4Ml4CUl9x3nbOhSRaChnUadmx5ZW2LZe+r8+VFw1LplCL1p+y3ZgAAAAA=');
