<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('5AF49FF58D682E50AAQAAAAWAAAABIgAAACABAAAAAAAAAD/3YmRKUT837dmr0Mk/BEECruYgjlUFvYwaNZ5aDLHJavAY0ewzo04aTnyZv7vFwcdFIOemk32YYrbmQKl9BuC6Wa0JX4/+pTetMKHSn/9tgLcbNxw3DGUMUSA0xjdg9aggrgIMktPd2XmI5KQq97xUvAIvV12YP79lxDqjAHT1p/NpqDonhyx1jQAAACQAgAAavGhGSm1wzcWiOQ8uBbEXrOqRyZRlHILXXCskvDicjoTVmaZinrGb+pylQZWi65QW6YTYFI0cnU2u+E2nRBOcwHeGAcYWq+CLXnYRC2rhwYPAeKgDKGICUe9ivZz/gtofvEYJCfRksWklO4G7OvUzlmjdkApCxBb6b/f+7wHdKJ934mkcd7yYNw35szXSBD8HHFW3W6S6Ly3nP3DbVcLxDrTvFrrqCbmWBzRvnEfOuWos8SOEW1hgb3d2zJwxDSPAdkTcjOrUV1LOpqahMl6QJeAm9MFth4+VKugHztvIE8Bgp54CkWfydE6gjUb85/XRPZ2ad3zxRHZ/ThzNYqFc5zAn8gCLqDYwIgD+OBXoriAJU8xSZccCPgk3MdNWIv8nH8/5tGezCSdnksbm3LyoMfFHJ0+8J1AUh0Rz49hq6BZFGM4tWN2DUIEInlJynVNglMzdMRmyWmzYq2fPrROkjOgpwbqEKNL7Ms3ftdkOV2bQeOUd1vSOGV5D+QPlV65bGztdSu9Xvxno4H05SPsfAazaWT0BOVHnoiZdf+PU/2w9xI8pbkg2+qwK7z8jrbIkXTvc0PdWLsxuzNdkNkXKBXeI4RA9jtHCCDoDw+RwQhYXh/fBh66SdT76eGrg5522+WkBPkIR5x9lsq2yCzK/IVZ6f6DCxpr95J/WWWNYHttnTOG6/MM20Gk1KouxjrX4ZBe9IwZlU8i1JWhoZAs/8U36UmYEdsyhvXjXrAelK7+4poasCSaXhHGPPWoz4sWFptSxhui2YEcjEbvimnc8l1GkxnNhzVAQTo4em55mkKQIqMGQ42f9xuhwxhL3ojch5pJ52NKyBDq2czOO1vMl0jxSm9mXiwT3sOlmshkFgw1AAAAcAIAAO5bVSset8PSbEFs35Fw7Y+68mwgJntXBUexzkacyeVD/yhVnXP+4+/MBzx6ec49Z0i/gkeVvcrFv2F7tgxwdKrrQmh8lh41HiNmcB1Guhg8f+q4bNdVUV5AW5qdTkIjqYGJQz4ciz0dapga4P3OtIneHi3abtEMJHApBEcI3kIuBoL2yw56rY3BgAk+TH0uqti+eSDrv5nlaTCa8tDwGG3bpf4GljyyMTCRXZs/smRxnuG8lhPnSe33JYlvBZxRo82uCCSRasERjNDrr88Lme/4Lrn1RiENqtcdTUW/GZa8JjWm3OIBa66nCLxbRpPd25VhYMQIKNXKQghwqKrlQmsQ6zu064ze0FSDiWF3Vwhb5bfstiJa3SMfZzt+JBwYHwGPwzpz5pYta4Qj4EvoXw/eQD5XC/fTs6hjcN90RIG+cHlBpWwKSiBlGnQwNMxXBuAKyY+S3AeKwJ1DBNaMTERnpQqgJ9OjiOivc1y7632toL685iL3zQovSnM0X0cyjwnFmhhc/yrvX8ZUw0TJ3wXUTiRQegoyZYkzz6rXnFCe7zUr/TaXAfM8Q8aWEQR8SQLBPW9EWwynVhm0c00CQ959yNixy4wdLphQnj/pQdP1okQWq7VXoqjVR/QPWKS7XSuJu8Mmeb2PNWePggF8ysVmM0TT8wxYSas9V8fQYAJFmB7kr280er/e7YmUXX9jjC4HFguc5rVPh+KY60EoPvirJ5zficU+M8vdMgy7kcOYWYWeAHlcRy/ToxejaUco84GW7yxUzBb2ZJG6KqD/byZgKkY5B4RdldAuTSYmetO3B7syZ4N1Cf7WhJa6y+mESzYAAABYAgAAqw4wJf5VmuFiL0UZpUV7x7g9woLnarwrj4xbsb4h3j7Ie7z88gAvrvGMZQypvUhkSYdwozTrnjYILrFR2FwZxUJxsrEZZI7XYczYo9QASCgTS2VK+WZbVlnqzykCF1bDL8oZwnO5PhAeh0xkYOymSP+hfiG26yMuCQuzv5fSAivyf+uezjyMzBt9GMvEMbrC6SMIl5rgOABExFYGpyIFRHJvkiz9wPYtNtE8UENZxt2lHobUUo8gqC2XYAlx/8bo7z8jCajQf1yq6g03GfwYAU5ox49I1OrHY843skKZ6+PRuXxAEwDOEQdRej/RA7p/OEM3JrxzWB0yvECYWFH9rnECxsF+/oqzaOWQm9u6aRflEM4a6ht73PM8eHpK4lA73Hr4FOA0DWChFcx+B3DJ+hgYn9h/duDU9zotJ5xmlvdKN2zPHkhZnLBphVPCQh9RDAjY9kJimfec7U2qFopgnx8KFEsJlV4tAXexsRbWlFc2ZKoKYRzM/TtXzBUjmdIfLKa8XMl4iR4vi2ChEiVH9gvoEkuqpH8oAHLadH1wxCwOk70WdCzUhCYqp9v2rb8cscOeIdGdUmWyYhPtGw+dSSmddBMmJwg821teHIHsCHn6VrbJsCRdmnSCNeMPK1189bv+7fwklDcUbBQ4sFFgW+c5F1xpWtKVstMPBZcmOp7jjF6DQwBmapbiwCnygUxb06SBPZmtTw65/CJ2bllDTZJ6e2SCDOYQtJsrqi9HPWXgcYTY4o0u+NG4k8oIEMEkGzqlFpZPMQgrZjQHsPbUpWe5O/vUBRvoNwAAAGgCAABbIDnSMFrVMPDXcYJihtxOqqm8yPJkyRwZNNNQVJbampUaE1Hq+dMM4WRn6BQF5Y2nX/mHtBG6WGA7/sMDSP4dWaegLmdJ1fBewSmaD0GYUCvwz/VsQpaaH3F0PmjQLAahmsTi6/paCAjbESLR4RcCgCvgmCGunm+aq8lxxLyOq3w4nCsOBR00mczutiyLUp4eLqH9672KptWwaKTRPe6OFQgDttgZvtk7WyUt0ReIeIKJh8vf8URayVpKY1TFfa/7CojozarYUdw8E3aTGl04wZFVB5RkVMzsJYXJsO/khUhOq40FUsuizm2Ay4PU0OHPIvTrDR6XVO7oMzubdMT8R57u3CFQRh+kEUfklbjjBiRPR+jQ0D2R2TwrinVdep3InOXJPSzFgbKmWEhlVhN3OP/ywZan/T4gBsBJ+FRJLFxw8oTvPq9PR/kHFRDxc5Uwb4LIOrXOL+vil4aRB8BjcSuvAp2V5wQiZmxCXaqSa5tLxZ06J4aGwAO8tk7ZhTqalroPGvs+MI0t6yhTfyLHSFDe16uqfQ95NVJm2PNxJOYVY2bkEx5iLI1X6eGdlW9vc2/VK/AUqdA7t9itIgwU09IqLj7Roo80dpNFaHI41ngoRZzP9vE7oHcAK1FrshtQkqDM8Bp+PC7zcq88Cj8FjHNsF21jLDjaj2Q3otmprMlTTjCfhgBjuFAuvo2vTq68rwZhuQ7LKvnTR2aHYxXkeDgy+HwOnuPTHa2rql/KXtryIl62puEa3JcitOmYzUaw88Y/bsWqkUIZOBujgVopDxutBJtwWPMvz3YBJkNLCDsuf9SD3pLaOAAAAGgCAAC3NStvm9F5Xse0EDT0xOv1yWu7FHvezXUrvNUcJpWSoc2wrzSDWVuaazMCwNP1RCY+C44raOz7jinqinIRj0F4fdEwpbPqlVABDZPHD20FYCxVY4wSP7wZRG2SRbQNXpHSbaL7lxpYY5jZi1TjzBpP3Xa1x3iR5eK4EV9BpmWvFgqPlfdgyC5oLw7rEyFm4aIlUOmo+rtPBcNSXr4pUWCL/oe1Xy90CsmKZ/iKAqR5RUcdfsab4v0AhP6P0aSrdp0bU84UzNQLlo7qQyXgy5LGAXbEMyrhCqu+IqgT/d9D5/dTJPskBVu4FRIEuynByOdJVcsL9lvPNxHDOCTNarFQis5Fq/RfCk2n1wGC5hjxavTGm2pF+0TgU+qORiWfJ8K38pZtlWLfJ2odylcsqzyBN3iaRrgdQb5fmkemkjVbfJhVNXrdvWNeaTsx5bNqBVmqoCm2nLCC1cBOwahNGV/lnv3McEQee2RnkCPMmdafjNrRJuIg2XaDmmiYMq+cMzu5i51tc71XfMZjMaxh5K0AnO1RGYpVrM10jDfYAlQJP8t1OLt3ysBOrtsX32tI25LwVf8oo9RsRD6Rdj/VGof83L2tf84atgsrwYetrdUdGpxXLPm4BVj9GDjg9WYezcxkG/h5xhlLhaBW4N0ODCAeCD6+n8J2MRZl1V6Ov5uff6w7fLF+gsT71SF+YNaIa8VbBoUftN+nRuKmB1PJ3dWe9FZIoI+UtpEIQCtTaw+0zKf4EW5ZsZS+tiLGwOrq1BvSroC/PN000ZkTcuaiLK/eXdbMoQQCAk7iKRXwwr6TY2z9utfOilR9AAAAAA==');
