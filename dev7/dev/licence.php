<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('3816C6B78D6822E4AAQAAAAWAAAABIgAAACABAAAAAAAAAD/h3gjIRQWNAtxb3BYLDl6rcSDeKrJKsq/7OoX9t34DT2OsVMCsMfAW3w+zII8IADAZx8xGgwtvotTrEjFBcqESXW3bxckYCvs41WZ8JAQFxOlttCyV6wo5PeDOKC9eQa4XV/c7Nlqo4SjdLojqzAmVHrmoNQmDyxSfpgTqVNhdPEgUme5T3hYgDQAAADIAAAAjRMsM7duUgBFeYVWoMP6D4Wa7nxDLIk0GAqmK/uiVQ/XaQhzZwOpiDpjwtXkIM21JKIMpS6J/BTlAzduqgHHhH6rxseOHPC9zAYbvm1AVclJn1/TWbym6TCA2vq4N6eu+aSdw3buyn2EronX+tMJwrqT2GrtYJc2FC6Q0kOI/JYC8/lCZd5VG+iI/R/VBaH8N2+nEpI3deE2bk8bQj7lQezb+U5RrDMDYvlm8cYQdi9s56gqZmXeHfOQQ/Ie65GhaCVvUGCcvg81AAAAuAAAABfQQ14blINRc3HJvOvTBjnA/cNab+3TzszXWx+wtBvjQVKk3dDXeub9MUXjISwWHRur258e18+UeGjbMJzOdWZL/RLYVpWJPdQBqmPwso/7wfsI4oxeCusXWu82e46Y92Ylch3uRHbxjkZMPqLceF+Uyl2u6FqcVMZcLBhvVFP5TsYkEYzBErg3k3BSAcI2v0xe1CR5OATLuAlQmNZoXaa0JMxuAjafwMR6cXJFKwKt9k9wYJsG4eI2AAAAyAAAAOXBNd5FcuCGOx+2UaPu5tyk707dluIpnTPnfeA0SseW3inv5kia4K5tKoMlFOhoFJ5AssDtiYPAp8QDldPzwStvK8aPk4d5BX1EJduZQ/ssUqjcjLV5FIAy4oB5T9o7pxdhUh394PZ4DZafxg+AWLTNc9XFnWIRiTPA81aD5EK8womDoBbkqXXRxXuy51Fsqyb3k30lMIg0mQ2+UZIC+e+A4vCYLb1QMhVxW05KpGNWfHL36nfM8wkssMuUOYgPTxzjN8nQZk9XNwAAANAAAADuLiEW4KNj5LaHSRuf+nOQONMlbWnaMOL2fizMDk2vpFp4wqpm5iWS87eGXsvKMD3gRV7CkhJlWJZughJzgxRvtxNCUukeA2KLxmj+yfGOle0Nlx42bPV1WoBT18b6HyESpv5IbGvLGxPv1C+1UFvy1lVJxTpm1xByLezer78dTBpLdH9RHWu07PI1kwMG7HybI5RjS/A9N18fAJpmRx/n6gUV85Y7DPMttwTvDaUlBbpdraT12xS4zzrmKFci6cKZLRuBvDzUtzmSe7GLRf9iOAAAANAAAACwy0uqG7FqEGpZrWU55Z6TQRGG5x6Hybk4bmc4kvt4Gku55cRv6iOy3T1N+XAojnsQUwWBXIf+V3HL8KBGoYTX5xXA1NhYNS6LJka5LRsMi3Bbunf1+PbXyTS50ZPYV9/3R8R6YWtMGOzVtKzYSldoJbO/sy86y6WAgt9/at7Bpwe/j0LC7+eu0Nks5ePKdr40cZ8ynoZSZ6Anctc4/95WYUQyj5UHz0vGAFB/afDz/ZK26VGI5mctn0EvLDukdW6noGGn7nZpMQofiw1OjfPgAAAAAA==');
