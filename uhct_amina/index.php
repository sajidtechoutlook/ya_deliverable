<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('F47B0BD88D68361EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/gQQWHByxDncajbXtiiJysoxwrndny2/TKwDpaUbbofSZtSyKHqg8EzWe6rZesiUpSmRZdHtrtMmHLKoK9tM6oiAMFs5jNyheNXHx9LFfQhSWEES+TiyUFVWxJPoo6LxTnum2/JOX8WeN6QJLcrDF0JG1FvaaqTfTUSNo44MX9lR9rgr/iawaPzQAAACYAQAATowH+5dJLiLi8BSlmWBlj0T0gTYwmflMBWLGkqSECCAzXe4MMuGndv79siC0nI0gpN8B+n96FnUYeO94yxBR5HBsl6xWSn4rDJ+l884rAAtSSTLBneWHwLCMKGsXNE+hmupLochH9pC5jY+awo59eBwDcvr6vhTRSWhgO6LrhGzEVQftA/JfyeNbkJKW6CKRbeHWzFQYNjYw/Y4UYR7H+znr15KB9HO8KLEs3NbQD+mFeq40OIsoze0qWLEavnxCWM2nuCBVG1wiHMUxrk0agx3yhY/xYRCGR2gsAEfwKTlCWdzfpGX0663WLWA+aQBXIVhn8T01D9oxSyiwN2NLBEPWagfTiF4xQtb5YBoORZfLASW03+w3GHiFBlWSV0MS3GYRwC4A3hEOBKx8h39dhQNf1KLXEwO0sLmhDdVFzguHU8fUuyUMmM3hHiHJUJmmkIX5GEl39hZ1H8G7LpyL3Frcau6Jv8qAiHuBzSQfRhzwrG5ZzzXsapoFjjXT9hEqmqlQLfOf4nwAPqv7pVF6GTB/UmlJM/koNQAAAHgBAAB3DZEqUVbq4BF8Y7SuQxqztYdDAcIj/Llv52dZug45K1XwUZYNRkZ+j7QXEdSYbCC+NT2dvPLORloRoxf1rUSpAUYich/EjIefr6IqIP3SubcIjx5EHue/7aWzf/WaddgseHDJ1qLbsWxLXfo3RQncdGJRHLAjilnXSlZJAmJyDPwA46G0jamNWiz8f+29PWeS+0d+FgIVVgr/kapFo/haAyiTkKsRStBTJ9pKaTsiAW9zDNXZjr0rZi/HVGdHqgMnjG75tbBRXkmgEGlTw0eHXCcVfmpZei31sQpmb+Dz/SHgAb21WUeQSU2cvF/MUly88gNCQKY1ngc+8WpBfhocfcW1DrNHrfs8rEYyezEcHXaAINbhTApjZLREUbJUJ4N6VON8cCO2EztiOolSMiDU2v2xKe7tj1I5182GzhundtU7mZ5M1ZWnCi6tGtfFB5weKBc3fNnihfQF/a5YgFojIlXcIAKhQfb4k9jeoWL2VQBukHZhC6zaNgAAAIgBAABGxc316zr9KEVS6TPPi/lAgjVyPitts3hE9wU6FzaWWtlNn9SKMiRd1NtolZ9wjgyUtTfczkBNqm7UpdHT+1boVGnW9cKuchsbF4tNO8NqqDMlwYy5HBIzsCpvVwtO2CzC8Plw1Wps06JKhw9NNj4bcWh6v3AxkrQC0HwSKjIqfJXZ7NOA6Vr4Hc0DwttPmhIQWn/m2FtsPggT0ljpOJECRLQHpby3AaXNOxmAa8PcaTWMnePrZv3VZNfJqVRQMeqxbXzIgdBRTWvrn9NkOFscdCJVwZHleVpBmqae+EOSrZKwtHcXgd8qsuXqZ7DwhsdA/0H/aUlm335ydOJPMrz2ZQD9qU/7ywJesz6qki6UoHyrAeCi5hNJeje8qlDbH+W3ljlnEQQEkxJmgR7UmPQWgbNuHbsuJ2N5UCHkNhuIcYZSIFeDo+l0//PJixmeqVIe9KsqOQgdlEgHN6M38COIdMbzi/iasm3H3Jx87G2hFO7NkfSp7oAcI+zF7FAvHmdLybGh8mMgtTcAAACYAQAAudnidMjiXt5Utvha9NamQ8fqToW4evfXg0dgciMI9Ou2aBWD9Dmoge8JpxMNPDjohxuxdcfa3xYbG3LbNsW+W5NBvmvOULxjfwzqZgsNH63gozatqRde7oiW08C/H96+iHbg8kDYzvvMPfo1zy2XyIYgFKtHTex9y3p21NXOY4cCFefg4GJK8j8Ad88my+00flD3BQXtLwWjPL/vRXbB+vNjDw40Gc/2nmrSWkVcWNqKYyxKAED1GiiAYitc5XSkf3RMYBHR4ql9DaiyqINJdeTO2z/B8ljeFhYbmD/+1A9DvmF2BMANCSpuvmJmtnRvabm1YV5iqRgDViIRsL4vuiAnFowsHvCbCYcMRjfh0wg1sn36XgCPR9U0Pi6HdtzsgC6401bSpj9qAyQXndALzbhhfmBo05t1dSJ1bya70SNfB6jMjKGn5qwtK7RT/HiPSt1iAMCrZQHlRoMvqb8UPRpUrISrSOoRP7ysQnfhA1Ft/H2p4wO+ceSEF7i2xYoE/PQBDCVlMcQqr6OrYmzR/tI8nJbvotG/OAAAAJgBAAB0AhFuMMVCCrT4LhNrwYNicoe6GQbkOtVorEAz10VeI9MAzYjzyy7bGPoCSOwOwnMvt1JB1Fl8EO5nqqcRggzzDE3+YeMW2sc9wg6uh3sUGZ4Dkf7IrhBelJVM15/liUOX8VX9v1M7w8k15WwDmXmJSgYMyBugR0V0X2uPdc34VGWQwEn2t1s6chrhJwQfl7b2ba0i5fwRddVn8SoNmxqfMzHx0JhKSwhTGU8qNN595YYDhlbJrnMDPWgAM9G9y46bP6FNxXxCMSQiUPxgpVeA2NQZaK6yrERDYjfIQLYPTMBXk1Pli9JILBg59zm93UtO/13rEj2dJjJ8Aa5MXbCEVI1JqOSXy7XyG5QaTT8gElQJ4A5i7Q2IxCAqDTUbgj0oQ149G9ISLZN84nLLype3eZQIXNUXx/0E6ORF71l1QUYcDChUMcrumemaAFCi9bmoC5V0Y9yhx2RreWe9JlWuWAoP8jOnaP1JxFqDg2AKt3RYPQ555MJQYO0NDJLmtYzaphU+27fSdIHNwlwjtwdV/nzvqAXQowAAAAAA');
