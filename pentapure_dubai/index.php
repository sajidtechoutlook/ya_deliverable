<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('375C9A008D682466AAQAAAAWAAAABIgAAACABAAAAAAAAAD/Cz3y5ToufmZoErJK4dJysJQFtf/dS1ylK9pGueh42J4I47VM8sJcpcMaz+DHD93OrpNy2tt008+qMZynI62jvuzwcbXr/ohUHecPv4G6hducrVYfrrY7CsaSMex8kknqYPLLITZdKJIifmOCAS3wsLWcr5y9tHe1hFetWMXVRLkYk9vEXfE8ezQAAAD4AAAA1ggBEVfrr+gFqKAtCCYVxmJHM9zNzwzF2IaQTXDgBpCR0Dy0qe0brf80Jk7K74cFPWi6g0OSnY937s3fX+1x1WGepOdx/1w4xEEf52SdjGNMA8CB8ASw/u9CBK6M/iRvE9Lg8pbQkTsSKXPiv7B+06yPKZE1vyHwpAHxZmQqXvQK+bR/4R4zHYRd5R99Rt3j6R25qgf9HcjkNIm1d7oAmy5w0CwJ+LlgQC4lGNkq1ewDZNUsqs9d+j2gxH7xlpzq32RluYw0k7YWY2BYsoA2W+EsjUsWaK/bBnjHb+7Vk8TsgBd2fLnI69MAt6prCAh7rm3MAZ6sdVU1AAAA2AAAANJCNsMjHju9jcWmk2UZ2bfxx0EuAVXsBxHz2AVhkS7SxyMROK5sgJ+v5xv4HrUT2vGrCImmHKqtJQOaXKH4jZfRkmY0Pa7hnsIDlkfj0GixtDxZgyiDDCUoYbrKafcrm721GkAR1+uXyX7Rq3/7ETMrockWJUXAZCZMHv+/L8st0rGPRP0j/vQNo3+4RxHFT0CZH9gfCJ9BWFPBCL2n3aBgJPWKtRvUmnLHsYKGvVRb8JAarknaMJ9nZLbdFblYRkFxpKdBuiSB9wj972GKqB/FICd1bnktqDYAAADYAAAAoTM5qkkrt3CN6FJ+F5HaU054Be63XDlqrhYA+fhs7W7Ux128dur/F4R3XnPsqCzbtf+bHFxVkXRM7T8mIQLWOe0xDyxrDS2whdzCKpfhyej7oTlQM+jryLoLUYxhhxq8C27dt4VwZ0DfcuRrfZga3OfgP6lT9ghbmoNCDZeBs5u9IIxOzdU94TEhi0cOWedhAZnu2sXz+ZX8KX9pV9ICHiXFDdITHRloB/b3X9dHHBT3cVGJlKI5UBmT8FRuyuvvns1Oe5KMdesz81UMqxkdwjagTim1tgOSNwAAAOgAAACAfbZXLk0zBp5jjZo5a+/p7vnnYbhVhsGoICtaUKgVWK1oUOUCMKQMmDX+LY6tDZyzzq55MvTRcCauPIXTfL6BIhla3Ob0QR4R9JoLUF9/ZvRIOnjOsdVsfOECTed70ETpf6DPscyVHxBRLo49oK72BMEn7k0M8Y6EKatCr0d2ks213cI26rK4eNA6TMMK2amaOqDxlGa6Iq4AA2mgon2nzNCtqunJmcoYrXa8aGBe0gDt4/kp8SBk3b6mRNme8/TGnEUirVu84TwkjAUYW0w6gcE+qDEVd94oMNXpXKiJVY9Lu9v5AWf9OAAAAOAAAADSgAz2b1aAN2Z3W2FmMyJPuG8Ws18UCCwebf6rWJL88bG3F7w3NhQCTvG5qlGnK1hJ73S3agf9+g1FzIQ0csVeS2fDiTvMD6zLxJEusTrZwpqibVIUC5Qxxj5FsXXg7OqvNtYTdlN7y0XCD+MgRia0eE4NfBl1b6xTl8U7HsWcg+g8I5bz0yEdtYE8uf94f5xomzKmoIyEClLrvxWC4ieYE41L61LmVLMv2/6E81H43auosXZKQs9iwfKobo057906okWHEtYZRg6z2J4UnAhEMheousr8/9xOnm7y240CcQAAAAA=');
