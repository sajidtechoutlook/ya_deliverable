<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('5AF49FF58D682E50AAQAAAAWAAAABIgAAACABAAAAAAAAAD/3YmRKUT837dmr0Mk/BEECruYgjlUFvYwaNZ5aDLHJavAY0ewzo04aTnyZv7vFwcdFIOemk32YYrbmQKl9BuC6Wa0JX4/+pTetMKHSn/9tgLcbNxw3DGUMUSA0xjdg9aggrgIMktPd2XmI5KQq97xUvAIvV12YP79lxDqjAHT1p/NpqDonhyx1jQAAACgAAAAzNM8AYAt70ZQBpvGtfIV9qoPUkggCxTm2aVkc0nmMvbN6JhVHxyuxfoxQKlQOt+W0e/aBqBSH1Rzhq1OO63W0P88Ij7eosJhPMfb8GG6mlscHFbAn5KhFk6BHRg/MZyiBnyO7mSerZ85bMy9SUGImyyFa71gJ9dxj0CgvCBl7gGW6QLdMzc/GAPSr226CWfVcPWmfKVbPcz1WThRiTazQjUAAACgAAAAX3ZHcVnHjs6us3alb2YYlAeT0FU0s74Do5jjq3/AuO+tTKt2bJsM45mj6T6A87jRGIb9hzAdo+F+1f1oorJKCZXip2rEV/GAirIYRCo5pWqkm7yIlussA4YFaXruGZ5V1D8A/4tvearmklyMhGHKYnonSGjvZRfYLnQHNzpIpgqzCheW+n28ixqZBQe4wgNh2DafwF5w1Zpz63EB9SO7eDYAAACgAAAA+QoYV2/bTNzRODcMz5CeHoeRG4JWZShiANkBIXDDFyysRTniYpafeGM3cCnW5mjFLWgHV02W3rlTm7qRDwFksQ77se2iqOmvz9TVOZZupBTN6TIMW5DufGch4zVc5e999dOaDapsSseT5Q3Ojrn7Vt4VGaA8mo7NNSHEvm+dJM+qlLS6ghueN3P2Nq2sEZLT5WHFRhus3nsSK+eJuUGQkDcAAACwAAAAEN//r3F9ecGhVGJCCLyy3VhteHv1bC9yjFgkAMtaewAxkvu+3Ed43J65KpTf3pKcTQms/AzC5OWRKj1qHEW3B4l9m9bBghv27kM7r+iPSBV3RV1zb6NPuqn+hZd2ZVQKSYu7bLsld9/UDqctjmaXAwInJJz52GzUnUGPKPIO5BbfkPo0feyh9ayuYhPXidEgcAjxK0lD9nVKlS//v7ww6JM7juhHAeeJD/XgoVHLcYo4AAAAsAAAACszmEhZ2DzvXpka9/6wpkJ+6GL4DxlGUU5wb6wlpH5hAxOy3PFp62P9mFvazk5wyZSUPt5NxOFJ92uUOcv3AeQLaY+aJCByQ6ivHtGixRLTMREs30SrjaF+gAHTXwE2e1hCqZtHvDiy7UDT5jdPtwsAbwNuANfvf/+DFXdxBmr9tEplABD+DPY3BM6nXJp3GJmE1vVbHXBKGBZBhF6+WpPd/hNuIYcukpp0FHrtKPlJAAAAAA==');
