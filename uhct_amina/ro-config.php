<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('98E792AE8D682D5CAAQAAAAWAAAABIgAAACABAAAAAAAAAD/BAH9m+y8RMAjmjaQWo5ab7rlDQAcw+EOfAEO9PKN1Wu3U/3ksI0J1vyBfuJeq6bS3xE/+9XJ6yjuKDbcRQO6cM5zYVmTgXhHpEYlycwpI4C7XU9/CsRKVUpGQHqTfqCWSReqiNNlkjpBlm5ISwfA/zIgphjTvaQwKmy2xdU5fbUDvZ31ivFnSDQAAADIAAAA2bKf11D1WV0Ndg9SCgm/eLB3fZSx0UnJebJ1Bo/znDmpX4b27SancIrtxCkxoVkB55wYh9q6AqxyTO6B89k1fnogs/pCldAVA3w9hQnP9FvLg19/YAmaV/xfRj/zJtZoUi5LClf0OiaBdUqEfBrQy14GYoVCFl+G24cVd+W6BfR3CyK3BQw29wFV5XG1X7//hPCTDWwSuaH7jKrawVVjpZLBl+zy3veDA761/YoY3Fd7EWTgTiliCePoPWm8/P/zasdETt0X9GI1AAAAuAAAADN8OpKbAqf+1KpkX+fB07PlEw054dbPAYW4k4hqt048+ke+D39cThXdsjngRR5zmEU0kCvn+nJfYDT2VtOPBaf4tE8XXwYpux+HkefBOL9QiBWA9AOz/m/7JfLEzzRsAYOFYKnDmnqn7XjDUuB7JqOUbuedCsuI8aLCSp9PmQvhPivluMUkeuoRRDN3rmysCJJga0Pm/WK7L6RboCMUTJeur+OOo6AHESyTjPwjkC2C4krV+UcaU9c2AAAAwAAAAJZgdVP7DvStECQy+A/zdZVwSJIGPcvaDce6VUfmgvVe/0Sm/jXjEXsFzsplWBAZHRApMPo5wlmCHBQczmZp4TPZZcFCvT3eJ5kJlXXL7hv4Q0KIgfBUlqwuZbGfNGvRQn5Cq8DJC1CqxVC8SztriG3sgS/vbmqumtLJP28vPDbNW3ov7ceTUpCxM3cyknYCqC7yBJCpSn2L3gWJU0f0ZxSU297m8VyW4ggrRDmZ/2QHLiQ5BLR/0IB219r7uJnJqTcAAAC4AAAAt4tEuNWWEyBXgHnn1sEKCNCnoiukpl7BWsytCoEgf7sfO7OqBXVeB1bgjNoUAJ+vOU6sPf3jcnSJTwsbGGHUVF2WqmELmhPuu2ueib9Yme21HB6RAHZ942Uhf+mmI3owFqiYJa6+9RJ+t2iv14rVjZkUCVUGs0hZCt/pA0vZsVR0jf7HaU5D+Ai0tv69w0qEFEc7MD7+xabZu9zvpIbIInUB9k4YrslajWEzekMD/LjkN+0B+5DyIjgAAADAAAAAZ3QMReq32GBxiD7Ap2cUQXQ2TlJl5ndkp7G2jytsEE9HOVM0xpoHHQU57kJfbFeqQzUvPLoL+VVitJYlGiSzYrjKYTdU9eFnzdicpqG6xOKv0mXwIv4mrZBOPS9As3mWk+DWTeziIUPSPUnRjqTfIX6ivhZiZ3k+2/OQ97/GO3x7HLZA6P5NWTZ9rs8rrikN9EiC3zszcG1CWO5eEFlsuSUXwQ/P5mtjwqqgDXFfI9WFNKKZtLf6djhtNJnuAmnnAAAAAA==');
