<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('5AF49FF58D682E50AAQAAAAWAAAABIgAAACABAAAAAAAAAD/3YmRKUT837dmr0Mk/BEECruYgjlUFvYwaNZ5aDLHJavAY0ewzo04aTnyZv7vFwcdFIOemk32YYrbmQKl9BuC6Wa0JX4/+pTetMKHSn/9tgLcbNxw3DGUMUSA0xjdg9aggrgIMktPd2XmI5KQq97xUvAIvV12YP79lxDqjAHT1p/NpqDonhyx1jQAAAAoBAAAtN/Kv5ERcmrU6whSWsfZJ/PUkQ1oM+dIYdZTBCwiA7zM4gM0sVIitR4cr62G8ugqeKKQUBVUIFTZ3dbMMQl8ttbTCgb+3fhqgf54R94UeBtgZ1iOe3zgoHk7krkbudgUzuFSb8kIj8PAkWWVrZ50JYZ6TBLdoI2wWDcHD3YPeXFeE+fD0+dJhZZFKNRDwAEzqSwYnjct9AjiEQCV9QZYyhh3pCb6feW1vFL8nHrt4A0XRoVNd4D5c7UeZyvTz25ayqi/EJ09Vhf8qx21gBbB4LfwRAPKCA8Q12fnMV+IkzYoQh2XKw3zFBOJlxnDZmowxTUt5SQ0LB7n7QoA7wcdHZimzmzgMzh/xCDovuKpONyMrJ1rXHO50c5Ioqbbv/5q4+OU93rwL9Kqk89XDXyV2hKPTMLiT+2vLFnh2fMfbxrrDlxRentocLzBk7/WXlZ+zjy0uUw723hYm5vbR1hO2hLS5ggzfFptEH79zY9JEjIR9/TpugAHK+Um2ZjEvEfp+1GnxvcyyQo+kCOL+UWxcmrpBlgrjhOKqij3HajHXxlp/lOlxi1amj8vBaMeEFaaDhec3Sc62D8G/Kp2qh9HH0jn7+G8MoHIMVTwaz3CKL0lbVHZq5yfoq4Fp7l4O/6tyVBk99tkcG+RvCFpkSSVO9T/KPv+V/mROSRU2XAHX+Le4z/vl2o/BNt9Ra55Ny4mRB/84mBgSw+FgzJGzeozNXMeEwZqznefhJVH1gZAzcDfXrWBEB7siBv/c/XA0rGiA4sZYVEYu7ZVBRV2yawz5Ff05XL9yA0RgDqWrttYv1UY2BkLGugdPNWuMarjZjJfNcgHzQnliieQ0t7mSNPVXFZ8nspLLvvmiHNMmzapi0AsEvV4gX5k3pzyuuF+aTXgh1uU3vzlmIjXtZcPEU1OKpWSoV/yrjNQkPd+nxqViEnjWpIIxUVGJMN/FnUdI+AtQFkdg/VQbRLV05Mel138l81FxJ5ag8TyADJDGhlV0ZJShW5MeXpc8fKjcudDGnLVIz0LmT1Rmo5+LAgJIBKLUW+Vm2JlmQ98PumsImEXX/WVcS6eJWdKfkqqkn1HhfgVfwxQM4EhK8eapy79JFQKIxrc7l0ltBD1dADEdYMu/TjT6trcHoQcaEFsP9Ewwi5LqpFoqIveb3PQ/2AZm0T//0B4kMvqQ9olYdKm2eXt06grO7GkF6FAv/liob9/mKgOBxliDYBYPzGYbijcoQlzCWcT42gfB2OlieAdpyYspV0sQJQPLfoNVYb/CWcnnJdHFRKPT9nIyKbp00E/QbfLFo8obtSIggZalm/RMKfXIiCsRpOvojHXjMah4YP0b9GKTiG+ZI6qmNJu+jw/wtCjMh/NshV8y+QBwBnlKlErtHGzrCaUxGRI7xkk1bJpDc19KSjPvMh6Oqk1AAAAGAQAAJIsS+4nV6Vg+EGnsvNvlMlSXZ9KUeaYT+qUWVTUY+kKkEHqAV5Lwhpi4VjFvO4837eeywbRY+uYVOsAOxzt3YyqE/nZiY8ixb7OCRciT23/M/LFbpCjqrnPtMcZyHU+oPc6DNpAEPdMyhlLPw0tdEpZy0IPq3kc0ysjL+eluXtKkN3ZD+uF/rohSFV5zvOqsnrp6RAAeYuX23qtL2SaH5OGJqjFq5UkqmJ2tffcrVgIFQwb5pPjeEByf2WvPhz4qZK+sbJZlrk6r4k75jyI+PEKtwZe1z52Y6wkgcsz3bjWOifx0uRrvpo0el7W0aLh8F1Hmv3c6VAXydg+3EYP35qe9vkpmiE0XWC5uDcAN0ZVGRSMzptIhjIEQC3GCmxqckCDC3yfhj5vLP8ule0MHARRanTCoQiFNoP7mERsFVzQbm4NCSp071p4C0USN4fpiGayTuVTnVIrXu58nTb10NTYEoeTM4Inm6fU6W9h2fGlXUby1IPf6xU3HllOoCKX+dWeIJQCIZxGlybcye3FjWBQIpsNJTZL/4dtiMrg1OHS4JjBhQ9gllIDtLuwY+fA+Sy2GtDnffMsi4qbo8TSIWgcajozAVfd5yD62bnxry/CeQmlzrAHfY7ypzTCqGHiCI7K16lyqUwrqnm6086Or8Eei0K100zRgrBsyBJZ7O6uhjEgiejy1TVfysRbObj2jnA0XsO7t9G8V3IrzwXUpJ2AjiEIxCeOkXnMJ3U9onVQ6bY4M9/3NGazs2SiU3YAtpGNTQAD/pfOewCo+PK0x62wa57llk5sl46tToDH6TItfwaTRtHwLxa4veTqqaNPKvyjYjKkXiUEgJhj2TCBSTwMGdkcsQqmeb92C8fLmzJEdWUDOp+cWuKQFd6pEGPpHqePULDDL1pE+hTIgAlkq8P1V5WUYGtHOxvQLUeGOKxPdqz+wZ65Gpedqufmd8PNGAW8S+CxpsuRPcrtZ0Mw0ISih04MLezLPCfcGwO0Aac4ukl9gsYtNSLEOcAyY3jmaqpviaLY3w6ftJzbnfkm5IjPRYATp4lfRzdZ0iKqQP+Pjfq4Sc+pp2K4wuXxUoen1QknlVlQC4naAyQcLoipsihuu+La//eOmvOQ2TsMAMErcMuo5ibm3fnQ/Jp8aDyy1fDfdRUoVzFWHBmwSqKBdAyHFgV3ZfvKj60jD+rcFePgf0oXKvIsA7BEGRfJeVXUKlo+sYXQI4L6hvLkL6muxpbFze6qoMztfgMd/ePKK2xqzBRhFzpCHBA364Ayo82rCqyo1/1BMaDPkWvVV6PcTILuwMpEXLrRwWSJ9sozNXqjQ20pMQR5oIpyZhZP4+Pl9mWsFwXDyOnGoEaAJB4poKXKAHbv8nM89xO7pv7quI6z+vsaANhxoJs2AAAA6AQAAMUmboa5dPaeMDPNbrNxRsGYG4y3ww3UXrnEP8/dn5AYTmXNcwJTVjSIElb+5ztyB+FyvlBVJpO/LohHO0xywBNGGSKp5rLY/f9z5JxmIdiyCsSlUZQw3BNUrg6DhaXra03pmesdJ6GQRSNLnX9ZQuxzpFxgeavGTWG2iax/TgiZYrkDq0xFdwMKZaWINEcT7xc1xEX400OrPeOIgpOGHFb4XHsi2At4f3HBwa2sPY7hUzV1glXQRGGbmS5USWDFVo09GeQh6Nt40Y85MH5k984377QK184KR/pyVVbADDEFZKY9A6FxuVkZvq0ig30bxQnt9sFM8AK2QOplLpVLTadkMGYpVAvpxpOChhdKtMtMkmCDsPzl57L5JsXd370d4y4rRDN3Ongse82uAx7cWSMPH0Ive/l8FIg3VVJJehwIWE5k3dDsJBF/fxh/0Hx8L1pZl7oSaP7QKpv1x9SFgrnT/rNRHts0JMNNjSOHqK4xo0NF5vP8tcXinf0biWt0V7BETyhpSddj3A2VO+HJmqY3wJJ4dow+ticVfk2XV7jZnA3/lLy9UA+47+qtHp5j8mHFYeCXL6K9nOqZ1l7xIaT5PU4DdAcDeB5sQJWvRKnQSMojTt/ry+riDPlZwTISOnJ/IVgKxlb97uSTnKrm0uOkpbXKtH0INL6VpbVlHOhLY8BJedDGRxqBQJyyNI75dSlb8ININRZ6INOZPAU2sVXK9fgNRobFrB8jEWs2rXaKlOhBtX03V7mwJPW40qU1LkSNTs3KmZwnY2kRj4Asy+7Ehd6dI5Pj+MSTpL8G9MOIlubnH5Igm+tVObY1Vo7lqrkGQ98NVIWixHDv9YjZLQbhpioiATYuuAt489pjbKlnynT/HTowTpQQIDihXOTK+Zbb6kJ7t1zEpJ4bRJB7MDPXfT0VHsFWKefiIXPrfOgROYEI4m4Z6IUJ/Hlya2lo7aOZ3/DBHIYiLapuhOqk5Cu4G3cYPyshbk+1fc6iNKb0EYvwS1qdsGV/3DomfO5OXbdYnNvNCdWBVRQkXhYa110Z74WOyJunETDIKwLzck08lPd1+cMRioTn+3vS1fM9CSnYa2gPDKenIZAp6EgqYzBCPmGNDT+gTVTqrBpV+ej2zDizUwi/tajhEnjyImbfJAYdCiVeS1ubQeyQwpex/Jqirxjy7i2UIYY9pTqDrye+GiP37GfnpHzimI0Bu8zySJXiRRMNsUrdtaEqlydPpfooXph6s04r9r9IbtI+WnOMtJc6V/Cy9r4Cn0FypKJFxA5efKrgG+qdyDgJkwAdHZeoh0znphUylrkcpV5DtQTxkSxXSUW+eHEvc9xe9EGUAC6oCGKdzzJYF6lGWOCr2uNmZJeSTC3lDaqJR5laHCMgc0tELt5zFwvr2N5kNmIM9xhHYXr5mc/qUAMDN6JGIFRq1QAx9WMfCtbj51kuap77oXI9mdmxow4ySHmORDyAnjzzAVSwlw0pf87o8jNkiYhyQhzjmkvB5gogDcHaRTo668kkIXVmVtSI3tQhyLTSVzy9Lce+IIHeETQzIi+ngmRI9bU4gYQzCGX1Ey/kmis4AG8Kq+jnmrhflvFbncEqezU118LNRRHUS3Zk5vaYB6k9DSGZ1/Qag6eCTHU4AyNktzdXDfleBPz2c+MmqnUVb7j8ZL5vmE7yNwAAALgEAABp5U8VXnc5jLMbOa/7hSOYsQMadKfidwXaOrejDT23QQ4nnK0ZVIhyAa20tIyONjGzY9+4ve94HMGjk5Fl+YFeZ/TZjPHGSnaAlqPr11z/mc1vmm460oOymmgaiy1G1lo03zb/rrBT3OXzA/4ug0V3N/AXXcDx9NtOZylHyD1s+hIJyF5fSFrTa9RV1eYLZPam9hGGIpl/u23MYGwfymHhfl9oyJAScGmE1PNBHDQBSvt3x1qcMw8znY14EvIHJBBvPF5pSmOO4DKI14pTDjENGkRXTzMY3JAFbBffZIy+Agk+pPZZThfmcYceck+OgbzpPmrPytyj8UA82A4iayKNOzs13sYvhK6ttiyKmvZDF3rb0elR+aLJ3Q+4TuRf8hXN7gKMiGYIHz8nqBptYLWSFTQQioAXiZrXrfcSCBipVsgKuX8CJX8EMW3vDAfH3N//UWTDK3QYZKZXp56yD/Kn4n65CZEMgn3mn7l+CNGBRH0zONcCxxsZCaRX91vyMVTNkOyRawT6N6aWaklTA8l16JWhStEBvDaxU59d6qQ3JUac7fT1py2CRzpn2a9xSYn1mMbqNFJ6fMkD+vRoyo+kvphY/yeo81YRkey1GpA4IboONAP8RJWVbqtDIokkX3P1R0oKTkbd7E1QDr0tzvhs5M4xSIEkLEalyvcPuBk2P4OooxiOhT0Hgf6Jto62oM5i3gY4WasR5LuVRiVNm5qAOEbzmz42hjs5H4ryqO9NhFNyFiXr0x8lecOD4+yO73XXXsdk+0Cu0Cb6zsif/Vkd7l3n5huKbKhfHryplP5IakuYZOUMwJfa07eyvkNoKNmgbkbc20I53G5dWqcb09Dg8Z0bWlAGCf8LJYe3lN8YnHu+/r3JIlyP/psq6fWDfRKXsCpsFlq/Q+7eVzVwxjukP5KGVu80PFRebQU7XVxFsChZYFsC8ty9Gz3ov7nErag6dAl+RE5AoPQalUhfhpTEoIaXb/CwkllmavPCMe5UGgbwLBsXR6URWz2ErRj6ROJTV4AtRZhgSNcRoVPBYT1lAwmZmZ8cG8req8vBJLRdgi8JGM1dAeHW2CJF2crSsnK/QTsgjES7LcY4QKXTGVjcNaXOhYqI5vjD+gGCbiBcGoixeSZKj8k0DD7JF95bqvEpgfYc3b+yfKuWPKpBgOeqCWwOgSikloRtXS/UbrwHz6aXP8hUI89KBhbRtDgDV/TV3TQnEQszZisk4OSm47DbJMaDP673diBD+TUc4J3wYlrystchr8et4gKKHKEbw+i/SKDhGiNDXmcXAlkcnlFYPUgl/lbAVsj97omAhegjzZcPJpCPyLtXQPpi7F7asUGPqF3KCQZHFoyz4gsKPfOQpSnz01txeBDQzkS79pbZMAl15puIVN8B8HFQFJhwhO0bwzQnS5xuUHtl0eQb3pUStSNKoDzUygBpGy8EHX/Erfz5C/U2MdRMGBONB6R7PrfJTmannvrwE0XnVBoqCiH2aohTiaEEl5RW8fQ4/LJq0lq6EimXjZBA7j3sNTE4nTf+rw0+3T4mApKtkTZK7Jg/5zq9V3rEG9CSS45vj8seZzcpC4vDNsJN1GOeid9yb+A9O+uMEIIfEjgAAAC4BAAAFgAnTNoCSxNILUha+jo7sRQkHny598OEpiiJsDFwfmvjO/fHb5N55dW8AvXnrvYM/siL/lfkOXkaYizgyAhw8jmK6+hHhO3fNP619WqjGsZWGRm3790OsGsUElLA7sYDcVE+9AjlRsICOvGhVi1dfOw3Jyl+Neet8CUVLuq0Ti7t6RolpGoa5df5Qjt1UlKkZDpr+0gWIz+51phqHb0hpk+8AzrfTKKui2Pwp5UrcmtAwOviGi3F4N5/nQdmziRbWIEmTGFXc7uPRX9hoVh2eVJUZEuidP0YYV43JBVaCyUg/A1kMC4B8Sp1gL4jrKNKlxYpDNdP48mOq4blczehe1RVjtFz0IYfauI/6ks1r0T2sTvf4LSUFkonlcjVTciynYxoqRzDP464i1FP1eBmy5dmm8AecdWfgST3gj0Rz6ded9FwgOuUZnZNPs3anTrqTgXxG0VpLPRYVvaaPE283yRSqzIUvWIclaSyFqVHP27aIEvfZqKbc5XfoZfwtIH/EgkPY6EZM0PKdAdTFLeV96kRsTFCzjE+MGn5BHgd2LlxW2BHeVFmfHfR0p3ELIxbCXyN8MtDCJuOBz9zqIPPAIfgM+NTIz8RVwLil+klNcfaF7Cc1kT1rhrMN4VF3w0FAdW74bOzfmtay9DZW+GfPcHFS5JSE6wRFjz+CKO8g0CRKx34f6rwz1yAQzGF7h2VbACcEqe/vCNq6m8QccfGkYZghGSggVoW8Fo7mtqyZw3u9+W+7I3w/TuDdvzPK5K00lFfWmCB/eqYpWgtZu+xr3Md4zBC8T/DolPu3U4dl53nbNKfC3QZCRT1LFiIAY/nkOqgyAcVkLefS8S3vEOzmmRnfHLMxGzyYWxUdQrZHGjIFHF2TJosmern8JOcyiyCrnRMxnbe6QywFcpIEdZQHskLBp/FkMqvB0+JVLBHBkcSCzwr00fDCfzF06DDU20R6IdFjsNBm+dokq5BXc+f+lCVSR1N1pAV02+Rnl5vC+SvHV79lraZ0AmIbGCEM6oq//ed73yeoxEF6hxu4IK38gIMhCHUQg9Hm0+5ReZzpUq3GyASeesmsyyhvHMyihj9jgD4W45Jm0/oFT9PaCIx1m8wuJjYF/0AyNdorUJ0EFe1jXcgGb1pINxNEDn6w/j76AAUiJFjqqAR6b3poinWYWsrt2iOn2YXmuLItHcGw9AWG9dk5soCE0FdozXzX0a65NqhXlcm5yjd3Z2QLSLQuxr76Fvxy6+FS56p8AvC6U5KBp/rRl+ZUuIZ+utBZTfolYyJQ76nNkSbhoyVZ90OAQzxigLMABFzG/ARosVy8y5lmu0MXTmW1N5VaWM+/MJVFXl5pY5CTAvVpPaJvyVO1mAzjujCbCRRX/OoSduqQc3wfO3knnYrwXKhstCCw9toJcTtpUJ3OPaUKNod1CsKXJyixWiwX/nnaGzoDjBSesAARYv9wtaVT6UffAYQvU61XYKWZ4vT7JUuzuBFsBcc4tGtBJjEAA+8RLO32JNNJuDOfigy2Fp5ZqIkl2aKRzTJGNHOtJxTTgzsYxYeAhxW3IFsHekfPJ1iRe7SCrI4ULfSsioDI2IIUnzVfWg9er5VzG2xuzPW4/EAAAAA');
