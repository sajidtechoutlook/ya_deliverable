<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('5AF49FF58D682E50AAQAAAAWAAAABIgAAACABAAAAAAAAAD/3YmRKUT837dmr0Mk/BEECruYgjlUFvYwaNZ5aDLHJavAY0ewzo04aTnyZv7vFwcdFIOemk32YYrbmQKl9BuC6Wa0JX4/+pTetMKHSn/9tgLcbNxw3DGUMUSA0xjdg9aggrgIMktPd2XmI5KQq97xUvAIvV12YP79lxDqjAHT1p/NpqDonhyx1jQAAADwAQAA3u4gd4DV4VlfpQjL439ArRtY2o8wRMM+BAtglszrSmKfqkdqKTohylDUyiXAiEstRdemaym0RB4qxopFW2LjEUizsoIUhLu3qhy1X+63dd6K6Mb0rs4xsOL2HN4ngdsBfnPE9Khm5U2aUBaj7AD5FjxsJ5nA8p5T/ajc0eyuvtydt2cv9uCIJ4H6XvsSyVzD3hPWHvpe4vCivmdR6DtPnYNXbaw7pKL1HCUsL0yIycWMTqPwE/qxqb8sY1Xm8KJRRKx9fRdyWIdL8P+Y3fANvk/8bqPfDxbuuFfe8JzZX1NwTTxRqmIZ/TiB6ypRydvCK7VNNxiCPzpa8Rhd0/zUlZbumGXdWOXjKZN+IrA3QmN/dgF8gx0UQdaJauDwCT3/wKF7jXkHhasmnPcW4CxXZt4r4zrOMhbwF4QznVauc3s6RM3NbcsOsHQA9fNoPbwomgWNRcse97JJtOSjqb0VQj2J5Iw7/os2AckzvHO6sIbYD8PbmKX+nY9kBv9ZZGmAFCJMYmMcJBZahsYl7BxLiYcuitCJJQiDX0xnJd8dxeHCITNovxTmhIMFPPIuDDlzPG6WPGxCDKpBvllfPcHRDbpbMTLm7DncGmz8PhlAGPIx3ITTvY4E4olTCaCoHKov6pQYLAHaqTrNzRCY8opYdzUAAADgAQAA3YrVhzPruK6eg/xd0P0ze5fCl1uK0V0G5DV9n5V8bWKcd5SanM9c7FRkHKYUrauQidmcENWfsYsJj2IFzFM2aAGK5N6mmR+pTMAq4HOTP9zUvvdZWfCiD7CxUdto7xm3KJNUd6OPtqjT6E7svkUfqVcbf4/xmrIiEso28d5cgGnaPqY67lPKMMjJJFOX2zthQOvfpi1ri2PlDmsvdIG65BlwLxUx1H8BO1NrdCnG59wGLtUvssO4kPsccDp+mhJHjCHhNR54oav8GEdioKKqws8dMRxYC2JFy8IPGjkNrkhq96IohHJPhowIfXXo7B9x0LNBqHuE1Kwocbqb1a8trlNxTKdt0B9PlV0I+U9SggNdICAUSFTbvfpgcxerbpIo0rxI0FxEuYCrOkmZgIkuZa44PHeY17po7RjNEhGPVfzm+hx53IUJjN5FkzSZXI01BGttNAGWNkSuxmsQNSto8upRsZI+tpQ0az8jG+PEPhAUDuPuZNbXeFpyjIxz/sZhW8+IsNDawsi5b1wvkRO8RJQDqVehnQP+TLpkOSGI/oJDQq1s+2oFsOBhwNfeg7wr9VgLOiVvwVlmfdXfeFdq3fmcLKTBU+N9yD7+XycJmwsOlswa9w994IZKdxO/3o+bNgAAAPABAAD4J7ZJAnGKtJ2IPYTijGyd7MYi4TG0xlH+5WRcEVe/+gD4Wdhj9dQGv5cqWiW8vWKzGXW3Gq+EV68Ikrty6j/HnV3qQjp5mmbcfV6yUkuvldFoZMkR8Lh4mZwq2/z5+QiY5/2msTyW5nExkQqIezTbkdbwDxIUFDVJj8YcoT5vvdddv5pb205XKGHO8WHZotelRLB7UNoLQM+2r3Hw0rVfD02I0PmSfOVbboW5Pb+DY5J1jfuDEWCsG7yadom8Ep7FJf07jvjeCsoBuQJMnoReYJQdRcH7akUPgZU0S0Refbd2npEFc2686QIGhpY84NLYZ8Ir8ppSXRCnvE79xeZb0rYJgHxmPRN0UvyKeISFoeG1l+5umTJ3faSa2HSMQHLntwMUWJxNYo+XZQwRwDO+Zc6hJpVdEfFc/L5JXQrgLos7jwSxl9tnOEuDiDonSaulFWlUfgOogR+Jpm24/pe2NDGlTDhbdOAhHJ0mgnohGegras0tv/I33YtTKNWInpyeQBJr2lZWxbEzlLdUBToLNRzaJs23TzjNkf/7jTazjpNK6dU8Ir+DMHKPrGbfEhwnXFI20LuXWLS/fVaNrHnOueY/atEwuDwfsMiCVIKbCmp9Z83JpNro5RY61ET/NBXI4IL9As0WiD/3hMmF5GtbNwAAAAACAAA/w39He1PiXU8KtZOSDT6Ho44mqkVVcOhe7yyUzhDb1J9Twj9a+gR7H14/hpj/cn9y2fOX/9CfXVfVc9C50NqhMPbYLqwoF4BoN8PhLeqBZyOj06dBGlAy3OzwFScnnjpcj2QLVMii48ZMcyeA3A2tYY4RnlhBJ2mxCulii2fYKXUfBV6nEftBBk9ifSfSDzG+8kP3JANa6IdtjH6+vQJiF9DIuqwA5210rf/I2N6srS5wRnBGDRWLFvpgsehJd99iLXsIJzbA3S8+MRTM94Hh5BUBXPn9gVGPzX/kK6moi5A+57fWBHPotIwn2+zuL9OQ9za2c7tg8Cx3EvCwfaXM3y7OjJDquEj7v6XVupS8/w967JGzqT4Nni6gm6sccvuocKmW8/5qLRlV8bAXdS/pfS4v2LyZ/PDdjvTXtDqB1oRfVvs3KQrgo6cssC7ezcbdrIo/NmaR1FEqa7yyVH0WuIFCECnWlKhDxp3A/zhnGncTFYwMlSZ3YsrzbKctTHavRC+8wG9HLMi+ExtLSi/8z7SCyGG8PCnDtu/BqNIwp4LH9h416l5Uib077DFF41EHKJ4ptmN4jPgi23cHXeylV27VnzltEiFheEW7lcCi0QjZC63pHHFmQpe5q6jYeF4diHYH1Bd3EoLgr10p8RnOdLUy/QR7R6O5WbsO5bJ5zTgAAAAAAgAAc4h3h4RxDgipB0GvTJU9qxDtTzhXx0ko+cLqaKSyQ6CMM+va0pUaWdEKkp1YfxSmUDTKr4xOLIwi7FpZK5AySh0lXEdS/ux4KKi2sW6yDdDOUaAjUudhgNJfY92UV3hwl3RHaME4g80eRGNdEEVpNds5/qAz2Jx4H5KT8QZ4u5cQ6xtfdMIEW0YWn7d/HA1odwc0yFeig2OIOhXbU4iagoI/G5eNnyQOwvuWj2HJ9C6dKOe4/IamUw1f8bTAcHcMJcNiXV2shVjtUg02IjhdkzNTma6AsY8vrRsh6SmbUb0AAHtzrH/oSKIIGgvr1zdLPAeGWIj6xZTQ9ytgSw7v1UNUJOZWSU09WKKBaAVp4uv2smhABpraCBxkCIK6aacyocicigl4anhoMCjZUSVw0dzKCtsAb4tMrX6+ArxxLxJbmFM6X0s2y+dXzE2G+zGs8edtoMPp1P4hriTIgTiBwztlork0JQlpvY3qZy8sEK3PMNu/PPgI1So6m6FN3K3HR95XRHKOqGgbbubM9I0bfvF4X8Hj1B13SXClKW+8FBxmTUXopLfnczLzSVRM4VEJoYIVk2OKlYJHk5xxA6KZh2OIz3Hjul60NR9ocwU4FE7SZMwnkiUk8U9Ps7cgOtWxoaIE91KQiE6yBU61dyIljZX9CdUDTBS14MQp16jNIRIAAAAA');
