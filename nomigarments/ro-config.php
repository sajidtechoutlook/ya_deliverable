<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('268D98A28D6823C6AAQAAAAWAAAABIgAAACABAAAAAAAAAD/hUaNClqlDVjDx5ShR65+8Jq1FoPQAVJMzCojz/91BwWC3rdRt4OkUTnv1CRnRty+k57I0nVo4xC+nerNJxAm07Lw33FtQSJ9BcEk99meEoyekwjNPm+FV6i1vNwe/Es2DNoMuqUZuHpa7bZdy3o2Vv/Y/fIfpqWH4BBDJQSE5OlGkN4YLUvD0TQAAAC4AAAAbfdq8GsW2PpdJqqnegi2T/QoH5MT1gPsv5w5WC7TFNsnpuewSEfS9Snpn4BiWlKW0BrPrE5mxgUiIT/0nHPnu7V/gwaqCj3aCy/+lGmND7wBLOVHgrZe6ewiYNu0RCPYftwuSW+UqkUgeArOr+PKz3lGDHiIjsBnJaAjLHxJGlob0Mt40GKHtOWo3N9NdQw0BOGU1MsaO5MFkKIe5q9NXN/z30PcD29Vf8Q7Ikg9FtXBv7sByhyURTUAAAC4AAAA1Qe+qSHYs9un4G/yGXvKu5a4fIQisgLamVKugRj3zjbJeL3q/t+zJ8KkqFe8P9o5h1ZUgcJ7BATxkHCcY9nBkUUsiFkxqwydSajIVpVoR75Yi7osTPIre1hYdnVqGJaOE1TIWBAnWX5qj3N4Q/h5utuBO6wJvKVQjrzxdDspaBESglG17QJs74LmkYyqh5HiVzw0jSSdOkxrDvXK7zSqHOmlyl2mx6y31r+T3Nsbj9sRs8ie31eujjYAAADAAAAAHsfKK++jMLwX4qZ1d8lOqv7ND9sf4ridbT/ND6TY+ZoxVNP7tMGqymR70SnGPwYf/uuv1Zmg/ShwARU/sYI++45cPQ30BqoyL2lM9acpbVM4cwUDmOW1XOJIT98ERRkkdFeQ8W0T0oey+4y35RstU3hVieRkZvq4gZ7crHfBwxCeYuZFfZ7b62uqEupk961Z1O3gQBsTL/m67pDf0RDJx2xRpQNQ2SvdDFuIQKwSWQXwPrq3g5q04NDpuK/+difKNwAAALgAAACXbAvizfZxWOkReXk9yH0QjlrGndlHtNNnRHRN/M1sVdWTQMz4r4vODzt6N0eJkKNyptyph+pquRPUSM6mloKBNSGKGuA/pzLJPj+s9ExiqDkj26kH2xRknoX30uVOe6FVYU+lgu+UcUXu8fmABmseolqRE16wqxjAhaNqV+AOSpr0q8llHYANsHEVZsWtI5HZtbwrqjjpVbpcRxz6tiI4L+UriEzzNbDG4z9yIVjIZOcbs6Pfob+7OAAAAMAAAADb1bVmLrg3GGBJt9fXQit7NVzwQp7oOLXPyqbsLnwUt7BMVWR224S7ogludZUI/uWyb37UHsCbXK/afc/J/Yg1nRzE6e/a6eFgdItZb15noDA1KcFc4pLs9OLqMxRq5rDC/+lG++/OkK6xb1x7LBk5pJ2lkDqI0gYW0SDPg4IyspcP0lOFB13vbZG3Hp3HFeLfgXDs8KF/sGna17/ztB4GFSR3S+8aS/6d8Ct1rxmpjkZjZiR5h2pUeH8tM02QIIsAAAAA');
