<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('F47B0BD88D68361EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/gQQWHByxDncajbXtiiJysoxwrndny2/TKwDpaUbbofSZtSyKHqg8EzWe6rZesiUpSmRZdHtrtMmHLKoK9tM6oiAMFs5jNyheNXHx9LFfQhSWEES+TiyUFVWxJPoo6LxTnum2/JOX8WeN6QJLcrDF0JG1FvaaqTfTUSNo44MX9lR9rgr/iawaPzQAAAAIAgAAeJw17OdeUR1Wbs610wQD0CBQsCCHgamWbzimDInsFjAgvCdf35wGMR2lJrRgqw/eIeD5LvgE4xwGBqzDMbY24Kl3X9bQiMNaUx/zr3E8mFUDYCdU9m2OLAAnUo9bS4ATzI+whovsnd+xMaKFOyZg3AFj/lliC0Px3AuofoRG2V0hIwadrlHrzwEOoK6/SDw6XJQiM9tCZRcHka46YT9mm7z0XwJlW8693HJSHFdBUOaP7zRMZcVkBLXSO13M5Bh5yHsvqX30+peUlaSIQ6jYSaxWQR1jNqbEuGWz1MYMDopaU9sBh0ooXkB5ls0n2HWteXfWHkFLM5r1z1huPB2zxUiIlJU1y2+zMcfGkoBvL22NjThLl7buokBFewTSQ7LCqYqAm5S0lOoYgPrHqRbFbZxFLeA6oHAPxz+V8rrHrwYiW22wRepJFsxh/4rwa7p8sx/DHfDlUpkHcGCi+Oo04+7ywSb43SB3VWfAFzDZIj/OP8eSpiuLjoyp1c064HByRIQ5owJ+vpgrjNCBqkn0USAtGyAXlpyLCOfLqscFcbMCrG1yUsDVqb4xWzeTw08T2Y+7SIkPqYf3xO7K9TMAyyXH94By2hk776ptxzy+p6VklNhINNVj0XG3MNsN/P28ATpBslw1+UXGQ1gSxWGB1X9ZKH6+/itMLazcqiJXHabWImTPl75oTjUAAADgAQAACK0icRgEUZvrlimwZZULgnHCIY5Pzs+ceMDJ3lEHbwe7+sd3AmlzYteb17PsmwGYtHZ7+aGEPUQWqI0xfnjqo1FP8ZIoRfH0KYO7az+gzQxBmYV0ea9QzAMZ1eF1wqEK5kx8nIHkToiXiWRnfcZ598rclO8gfl98H0ibnDzynr2uE3ZexlbEKLoYOQig21XSBM7p56BiRy+bYZ5WAe5rfYJBY7ScbbrVVWy8Vs5bflUiYUKHBtqQm6ZSN8r9B72jhPbf29RuCVGKMtFNxEgx+ULAqB7zNfqZNK8PRlU/ztKBT15+JFoGphB5U5qmETnnhsORXKn3aQH1qZkcuq8JArDn+6LMk2itoI22qwcoGDCT1EMWWUf6bTs5UWtMHRXsm0Y2Y279SK27PZx+WH+JGYVMU4wJh9n90aOhkGzBRO1iC3POBSrvLRZOlM5ny7L6pwOgLaKF9U7Ib8papuemHCEgLbXRvkcVV9RlxsxBkxBjzkIywtg0MsG+7y70K+IMei6B1WEw1Mli9lf91JMKPLg969dFM4q9kb2mFxVN8NYMLVsouPnk01biCvV55IjaDOTdqYl7LdKqpUw/lOf5YtjJoILPL80Zn3w6f5SPxm2n4T7jSt9JwPEm6HBO5rSDNgAAAOgBAADEiOzevkhYpVo2zpe70Tf0WseBT4dBX9HlwcMU0MMwMctUC05c1hsDsSlot06ghDZl9Jvj4XW8cD6D1/oVAxAErX8Z4w/7fh2mFmEC+Be0kDNG4GituHvouSSyXVsk2T3ryXTMKVfNv45UHnVGzFhUmyjVNze77ELEY7TIAMflHkvABo7LPBZQ/8sHkfXACggb2ebR0QkOpIf5QSDw2xxGtcF1m40vX/GIsyvxef9PWp9oyelRWKYi0ZKR8y/ERs2B0p0FAStXTE9GCCcQ3BCJAtAZpdKK/oCAUH2btVFF+ORx5fOpZzcU8Cdav1TH0xw5wwWGsw1RXujH0ze3DgOlws8N4YVGaZXsnbJmUjtS+2aSH3wyYhI94e4mU7djsNZC9zcq58gyag9BWFh/6h9kXqdv4xMQU8MoX19nJ2x0vKQWRXNeOPwjSwjaSqS2VwzfZKI2hcElg8s0m3fXUfnjV6PG4KuEg5/nl8FkoBRaeaQGEuRHafv4S4L2Vn6oBxv24mbqwfFNreV5Zc3AAwIKlK9xtYkvMjCHk5lB436QpgLfZG7O3KAKXt7HWtdEtFWuBgp+HoVv/5rF+xlfy8Knqn7PC45T1B9szlf7Xy59mUnJHRHRVwe0DCObiRylHtA3nU7Pz42IJzcAAADwAQAAG/7OFxsS8sgleOXK4xu1ROt169CzrIHWoTKv/OCejeMT+/IP/fx5K4P9cUXaS4WGVZmip+0Bteo5bC4Z1rhakhspDtwE1lylbZ26LMliORqSnvXr7+om3GkC7d4bE/sin4frH/4dhjGwsHU2mLnP2UaMM0nm3yhYX9AzNok4J/cmVH8MPV1ccR6sTKTd2VvKgq9s6Cq081lEYB3p3cB1hgV3ftQg5uPB0tx23NqI5qkH/k+GlsCU5LDaG8IzK3NxvQruzTsyA38izdIN+bugtdP6InlQaayjZZbX/MFlOURbBBeOEi/sDFcpRlcvASOxlpHwP7KBv/43HvMg1UbY6wu2++ADVWr0OPrDCvWD90317UEq/P71AY28A955Qh/efT+GIsnRPZDhxTdyyhrZsJks2tpFX5qnlN051NHJ3Qbu1zmfqVT6H/H0iIAmJJLFS/CXiMWQamc0+CSD6/nrr5aY6v6xTe3aqvCm3wBz8IE/eU+4nI8IE13oFSQ4odD1YDEBdHbvqehY0EJJEnNbtm+M5n3gct0SUqyP4IZ8Hgyu+sw0rAJRNB1KXjxFUmD3BTLtW9INuuViJ2fUgHZUcRVgopaP+62gY9p377LnAwnq4A5hRk7/6G8smAW4EOusVCN8ynF0KwffoMZXZEdmlzgAAADwAQAARaEGiQpw+xSoQGqPDDyH1jokIXjmIejg6dDuzsEYr9KFWO2yvZU0Rg7UXncJjuRYcY4I+X8te5eYl6HHRVNtrY/3xfh/ZdjDsBqqfWXGTkGoum/QPTjTcjaOhScINGoVjOUyiqFqFjCqDMK0+Fh9e/jNYP3C4kKVVcnkic1pG0K/MXA/voLPEq9OeobwSa4dClX8qBEWlg7Ehw1De+NH6XVfTm5jCS+Q1cpMNuGXA2t7OOzDqw1cC2UnzUWJTzZWCCHaTiZO90iBEpuUu5o3yAUGjIclOVXtY61iDR8wJys6HR4zoMVwnVlmr0hrPP5AmEdcRSzVKYi/aE1p9B4rbu54tjG9wy+xl18Zr/2g/YzagnEnTZLhvgeR6FMA1zLxCcL6ntt1KpRNs2d6GL+AuJzRIedfCUyp1XxX957ur55wucaDMQ8BTM2XqdwURvsKyqKz9MnyUbtZpLUVBqulI5rBCMXgKSpAjXQ+bd2ISR7VD4uHMpavydyNHHwoBTJdbxRVo61+VtNgBxi8OmMtQjH+EDGawIqahmVFBmpBcMA2lVqcF15BgZ+taMiotzx8AXiWtnlz3i1vvKDGR4lJjyXnjeQ24lItHGzF16W5ScT9mIcsVEHK8FMhsi93RN4C2OQRVesbcynD/h0mCoWPAAAAAAA=');
