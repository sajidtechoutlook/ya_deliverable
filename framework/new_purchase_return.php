<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('6E1BD7028D682DAAAAQAAAAWAAAABIgAAACABAAAAAAAAAD/Y8b09VkIVtlzJNPB/y0ob4ARIOChLDg2n8Q7Cr2Ga8xMA/ykczyfdrFEF8v88kP863Vfm67YIAxAary/JWDvKHOxiD3ln5tdRz6d6pBzGKsAXdUGcGF/TkJPV2iPcG3iY8vyKFQba2QCYyp5natiAYfn1at4VqhvBkV7u0l+mDkxcMtRlnJ0rDQAAACwAAAAfQGweusCSe0HuUSKC87YmnNo76aL/zUdrKn6cf05ISqMctmOVfYUQwCl43umS+qmMOv1kZNa8Xn8vj/L0GBH9UVX3VWryBtYuccO8gRBzdDgf67Z6q6ygdI5hGKks9R+blhIAi6XXqMWlVi/GCGPMhRs0Jm7yIbiu7vjjVkxHIahN5XdYcJN9nafdPNLR2DvVwFcgK3ve5kV5TW3qQvYEHgS+0ziN96YFJevo36hffY1AAAAoAAAAH3LXAXDO1m1FbGMb3i6FfYB2924zQW3R/QppSRJhRLFoRGJAbQaP9forlQPKAdf1MAf7wCnQDr7ezis39G4Ev2K1Ht8GGnfvFa4SKqKyEHpf36bw2dqv/hoJfqRzr2zAzYQWVGrSgalg4eusYPK0lzUo5ncomncU5RL1REwkU5JKTpv+OpsQ8y0jEimtAxjghxDZ5UNL2K/TywWTLwA6dg2AAAAqAAAAHqZlJMjCYg+omyGele4iXyiEgAcXL+L6nDfWbB2WYRsaL3vzuS4XyZDSpH2QlpVKWtOzAa1u8w/DiUyl09ldXsjhR6Uo8k+v32VmdRrWEOv7L8lkNhI+Iu2vclEWRqFQEtqti41O+7+0xjqPL7NegScWrAk+4NImVOpsJqxsaAQ588OxWLYYQfWvjbL7rI89yO9MK1zaVCNTwZxku5VD/gQkoArbvJ3CTcAAAC4AAAAaYfkjTpvxwQmRtIkl7PHkdJbkqE5uStoMKQMqpuxWNM157SR7mrVojh8OOqEHiSiZ8Eug4X4AZyOk0PA2mEcrqOkpLawHLIu8YxPq6fjtEhT2H7qGx4SY/Sj/A0GFZ4bUbMwsFZS9/QE3AFrVpvf+tkWIyilW6wzgP324kCekPH6IhU+ngj8vAGNU72wM1Jjn7ajvmq2435X4bJUQozgq8gETD7iwssJWCXcbNAwaFVtNS+USpB7OjgAAAC4AAAAOHicGl6FSkNejd+/vabYZk7UYX+CeC7ip1wfeYgE1i+IHQ1uXvWbjejOonbb3sRXu/mO7tf6UjeUmNHijnpmwuKtwajpu8Yy937F0bgma1sHXzgbNBHTI2fERKuJ2P6l+A67sM+dViGo+iWhPUDMQDZUaK8cMlLmujAfgCjRL6x/QBDhJNNgndseiyD4uPPvyRs5PeLynDtCk2pX7HMnBKn0L2+Ar+U+n44JilBcAmjSZdXw9GIlSAAAAAA=');
