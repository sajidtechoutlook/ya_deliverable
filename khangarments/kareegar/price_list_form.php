<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('F27BD2BE8D6835F0AAQAAAAWAAAABIgAAACABAAAAAAAAAD/EG+UxHOQyguRHcZ0QVZUnI+93/ew/bKlIB+fx73KhtLKdQQ26WgaErmLaUimMXav70UV1QyfiGgFfgvOflR8WahiuMfOz5cQB+lePt4qGmguhJaV+jXxc1vN3rckhmYAlGW4TZbMNXwZ9yB//oNI1XQHn8v8gtUvULkL3SUEWFRkUfH76b2FqTQAAACoBwAANjOpvSuPKwtOXqZLM8EpUsY/9mCvf4dMAY63BE7UZLSiFrCpQ8y8yTPEgVARQ9ywyHdCYOyyR0gLo3WOw4X1c6M5kVJk2aeI6jEIYoJEkqXK9+r2N09MO9BsVmWWIKEzbdFZ+vvlPTcpgUsGip2MZcYnK3Zr3wLSkjhhCDVZPNja10Bm7gkv6pXbDV0ikQrc2P8cSIJ//zKjNPVKch32U2Kn7iJP7Wu/ZBzt66NsNZppv40bV0/AAbFlmpMu82lk3CXm1lUZwHsixqDItcsvKF9yQIrxjD9IZQT4s0hq3vM/K4JXtD/gIxsadaVbUdSWvseLOg8yq1sp7S+CHEbH+BHfwGS6/VgpNP87l7r8ipI2hbiV8EWNs3DIVZy+cSCzp1fHrr2bxVXMIq9ncCUfZTZgfwpbvnUEzkwDlIcgIcspFgM+SgUSjc1YCvrL1XUyUeECj734JA4n3tB2muS2H2jxjPjmLMyMELnu/6WsW+jFLFvgD9oFtZ1rJdaFO7Dh5u8MFUj51by/yJ22OrQtTvIBor0nTa09tg8KmaSwlNO8YCSxFtfGlg8GfHRlBRGA0lbQ8ciIhCve0tDnKcrRCJW7aTjckC6vOlFgO2gl9Xo0yzE4tPBS+Ra9CKBwvVgei3xmspxceRMUoW/CH5dIo4g62L7vqv+sbSN4v2hRG+DDxc0y4Uy5RIZawNYelhXWY7e+fqqHNC8bAuCDMah3fpBgGEa6CwvkV0oCDJmsWzVva3QcB4tq7tU/1VyH2yaTbSMPE2VBzaEZOHKF27JT5IXGDA78YKj9ORuvTe14fWM6HMLbPbR9oQwJszqqf0FbtrdufzEmDylJFAu9KC72i0+qGk12LGQ4xIvDqlha1zeNlv6bkzGoBeLhvYQg8y2MSLgLjYnbABpXsXmHUsbN4nvVNzxS1LUf9LO9LSuxd4rzvYfUqsskewnE/cYUETxLjUuWvfIznN7CZz+TtSw6SJO1eWM+U1aAMppghP1KtovVytMS/EOZTXkEeZnhdQX6pVOrV3qYtIWY5p8gAPte1SjIdZ50/1upgpyh6Fam7u1TcxUJ3krvUjw8B2aYPxMZBf4pjYvWaxdIUONW6MkXvor0/cxTSJHINKEF+OIx93F3sftFT2bIEN3K6F2KokGIg1fZZodMhMIRs/2oWByGAVPZU11+DfDtTe78XtaRIcMaSZWScQD5tQ5OzILX0FSObWjT+V0CFRoIIowDuPM1RUjuofqVYfT48x4IUwQqPlH4dSJ1LrcErzro0oke4dPCvb0neOXC7XSfnT8d4YHvy0iw76mND1tsQthvQk7mXUI2R/fthgJ0B24p8JPJX3DzCSjzUap+ZjZZdqla0fP1+SJF3hIhUHi61GVqLtPj81wMlVxtGZLJXUUzNJdrYX1i4UGxjjNXrZE0FyQ37eYY6vF4gMDjZSHe5juBFRIZCsVX4VpgTK++mKBXwU9JgNQc9VtawgNm9dQP5X/ya8l4Z+4zImH4dsa7XtLxQ2pztiHQzkhftRnClyWbri1uYt3RhFtGHR7Vw8hoUkiFfB00vCJv+kFuKXLCJUsuGiTRTPYBK/KOII6Ct2U4vjWTeTJ2O8mfAYEPEhvLKparzYezcl+FUJxwLFJGXyX16ymZ9ZQzN4cVNrwPfHLpcHZ5Y4eawSYG0TbPR3HikQ8j4wQMBZF4MRGv6GjF5VjoBG9NGOA3MQubmpC/Z8SAz6VLQVOUy9/x3IQ9Ge8XEJmyZM2nBx/RzNqWsL1FmU9mlgKFnogatq3wU5ygPnc9VpVokL6SclkoCaJXXjh/Lrxp3s8sYWgRoRtpU3datUtbhPMOg6v5E1AxGxq+ttpDGNERbK4gEscFaPujZbw+0gCpJpFgGv/7+CREKXSD7Io/pL5KC2HtSN0S3ySYZFjTWIIsfbzBU1I/pKYr6PM+3SvFA80QmVqFilKKUByzZzBP0SwV5wRvnjTsu58lKvJ78o077nGYiqECQ5uYPpo1jDliYM7uvQgdEK2I1OD0KkAJZwN6qpEKiS3Wz9x7kQqZkk7vg+NqKsi9lbeP4jPSPdHE2F5nIWl+yXXk67evP1nbA6zzlI0o5EXpy1N/OxeQtgSD07wU6PeZWyeCAKPW+zPx+vTztBJRquIMRcgjlnquTNVSsXdfJih2Q3+FmxwBhdqyjFDWt2Q+TsjygxS/OEKEL8NE9WacmsSaFWrdSoe5r91NbJHxp8+dsfJJ5XvF/cFRUJ4gOYONegGjKnku9RRvVEifWixJB/XupIW80V8Z0Nb1nfjzmbw6comjB1pL1onCiovx+0cl3ecel/GJLEF6CGgE0VTrn+RPWVArkZ5HMO5L89TYrQ6mDPEvKWGON9Fqzd2njUlEvmYjp2mWuPfICW/9gl0XsAEP5uu0m+mnYabY3m/6iDEaZeBMy3IvlkFwGFatqdKC/FmX/BrkBufXO8ZqCds+rcSn2PuhGE7gI+rb16ALloEhM7eSP7D3Lk5BXE7hK2ElrZMh6hcxyGRfKYXe/vCDJv/CKezRgmwenixeeHRbqyuO/38xKLxZTMXK+KPE/MwYktDMruZN/nSs4CSTl3TlBYo1n3noNBakfH13lqteIpVopLChQjUAAABoBwAADpcXCPi8lmlcsX3VbsLCgFT9bgFS+Is+I8dCfzHjguGum26/a42fLd1A9HI1x8lIxK1SYf3pEdRpfcnPW7H+jcA/sh+fOyBq6o3qouCjXzGmvlYAP06fskJCJtk0XdD+5P1T8IoQjcp5Eda+1E/QH/uaedhTCd01YobMnfYTdlXCl7LE5lQW6ssw6WpdF1aCJApM9ni0KHv1oLL9Q+U9e7RvQ83m6Zm387wo7oPEsP627ejfDDovPSb/1N/bUAFy4Fs3H4Jmhpjl8BnhSwQuNeywA4o4STL01TOSsRVP9WXRUnMhnEYNxVuGbzvf9c7D0aaX5GCfJ3w1yywdGtzP5JEnEiZl7H5QXzfopHyVzNxbqaV5DSS7QoI1QN46CHMaGj5fkvBFJaQwnTAzoHutJglW1+rSbkPEkOjZ1kv/j1z+VDD2WsBRJQUjp2hZ9p59Uo5dS4zzF/Xs45tC++45kBI9sBwdqMlpbvaWUDxkRuYjRuMIsN3z30t9yqYVLZ7IYbUbZg7GTHK+kT+0d/tGiqDH+sOtYQMgQtBgqtqLz9z52nvwIgarlcrjMPt/iVkkHfT+CjOYoWZ+bHpXfAp04JiTM0I3G4eTSpSKz1eWT2Ezk3ARc+v8Ho/qJhUv8hqUSVoCW2rhYa9eBaTMK7Gxkzy5TBkJhX3MF96H5V4X8nbH4JD9D0HLIkL5QtItJuLwZjzjiZ+PipGhLeYg3LrrjXS5w5HlIFK9Iv0kHzCSnFkmEaSqF0Zq58lK5xTrWBJEXXfnuXg7bPkzhLXxmr0P3tkCDrSFpCb0zTom9sjTNwzyrdzqBu7EI1IMSKNpZ1hlibnqqhC7l/z/ZOVSHi6V1YsnflpC8CgWt6t65q1Q+ZlrJ5Udk6td6aHEVDv7UblrmOje/P325Ojkfpc2QEXOI6VJ0u8YofUYhDkMlc4SWsR7OpU1e+e2AoSFJbZ1ouYfOkxdEqXUhdRytPqFMq8NxQtPHKFxpHhJQQhV5a6QR66cJ4caLipDERKAbUiN7Hkt90d9mVWns1kw4R7y1V8DJ85EDANyAGOjIw+0LXIU7riU6SfOfnaz+3e6IhWdtI69K13i4JYZ8I01EVg6Kkpb6WgUvCnaJvZeut/TU9g7seBwMCYV4lbjXpQk019HcWHiODXEWsbkEG/cMJnBmEF1B+SxVAe7v4DKX73yN2jymQVgaMqlA0u9+6mrVoAqMsfk+o/Ya08JOE6nwsbEq1TtGVX7FbMLIPuE5T8rIXZ8SHCsu7PNnVGJ3NQ2K0JxCwG/rVHrRm9lDEVYTPBu+55ChT4FIO+i7C0f089svlEOCnogEpDgjetI9YMRFCL35IRghpImfd9DCuCiTuJqukBp+Lq0bExKeAo8Y58HJdz0ubl0yKCR+/C3NC/MtOQY32d5gFHWX+kSKJMTzgFcV6CFesH2Hp76Q3bhkKcc/3/DYRc5Dxn31AeumYhVfYiYP+r3kfrewA/s03yD31YNL0aznqwSwm1yuRlJNNOMKxN7bu+uFnuc6OMjSGlgsJP2jQXGg4viKVYob+AzdLKwpaU3fanh55/eJWtNeHY4g7mQsuq6vLNbgLJEnaH+APeejx7GWU7LCeT5fdfMwtRje+ca4ySZ1zngqf8Gx6LzmYDFLKrmkDdm5p/bEMy46wu+HZHzGIlillyloIdqlC1CHBuPzsD0hDuP3S+mloqTuo4VpgEZa5h3qCe0QEFvflKB1HLlQXTPjQDsZz+26F1GrUMdYoR7sGKzg84CA8Woe2bKFNydNpulJHcgM9R9d5+d0H3+BaLO+8OHumnY/62zN0+BmMjNx7mq81XWQcqA2Jp9EFW8zDwvubohP+d1ipeI7TPeoxKDH0MkAy2vHkS11A/2wMKLFMHb8U5SCew4FG33c9DigofwTrr5jg7SlfQNLydYsjUOqyIHyaNZrMAG39yMUZNSCZYwSMNHeqjz8h0sni+y1xAvuKxFsR8pHfrMjC9uve2SPLARM6bYw8MaouRs6XrdE4Qak1R9xLD/7o9zc66KlRywKYbdC/+asK2zOVSIwTIuHixNXDCtbAVU2I3aSunJYFmP46BfE9EaqjKINxJEFv5UZWsjgL/7dKF6W/vcPtPPB50nUhDEPYLICnaAe5ZEdEZFgVEzGwoCw4kSTt0TshIuNFgMgAvaLQdm1eH4OoHRFZWpexWPH9QFrfBnOi2DoIhcIqQpwGN4nHOuJnFt/Srlw31ffuNZ6+V4/EdltoY97ry98wjqVZy2UT6aMeJTqRAMNRRk90WzV33P1pRMwt1s6w0DGQziv26ITiNzQPqNvmQdcStGnk3JeoTK5QU9i/zH5Dt9QARduOtzP/97zDT/6VgH3M77mrlxHj98XxecrqthAuDvA21VcmDim0s7UlKKHN5t12XL+8j0knF9tSd9BDnLLiQILnGzrnz8+KY6KjyS8+dDyPAC+6EhmyLG/ukeA8MKGeqxdlBbMuTzt/60ucs7Eoa4mkEZGsh6BJIW33xX9cfXhZWIVsQUP/smEnMbe5HCNgAAAOgHAADtDeQMVjLqhqaia/kJkWiAVXg2heRqbUNdPWoujldPSQMPG0rnWKR/HggnPcHiwn47YY6VEwYpPveQMmS32twh3gX99ekfCLpIAdmWU//9OUgW6MTmZ5SxM86xS+NZFsybuHIrx0U9X5t9B7C84qwBCcDZunatrZiGmaOcavx4M50A5OcZXzeatpH96vNR59dIqd0RzX9LTiHA9MkDmbEMSZBvcYUI3HjZDqnU4MsfX5qSb8xqPO7dA9i19VbDm9eXIKMWd1RppaJcSTKSEVOAZUgdCsaF1bXwO1LeJfUIXP7QgL0HbfQYD+6SvxGjmOBcYl+8iSQvcgdoqjBilDoGfcmKHeqls7Bo+8LoE6n4qGeIAgWQyMBOE6K0t6Dltn+i0ykDr9Ry6gqneIVdg03uS7py3h0tSUGTLJoK3joKe4e0Dzo0Rie4Z5FRovxSiE9cNqToOFQ4v3tXoXYWJyInDFVKAPqhuEXAcktAE20V0Rd8APl+5Oo3id/HMcfcZakwr+rY0zR5OCI6wN+yYBsiHoJiWqALTTHpMP8KK+4g0bCDch6KcM0gOEeRKpAOGQrTAkIdlEEmJxlrETp+46uPo5mHBUcXD6PozS/ToXgjZrpGMyOvnrPKuZqub6aZERhTNG/nky7rHL0BzMkZdWOkjpQ3Y9ddivyqYP0peIDvE4NRFX1oEpw+DRfwbGMdZdF/kVP/nwi4OULo8WA8DSlevM5aEuJqBiinFQj9X595df6uQTf+3Uy6WlOID87UNcA1rEDE0LC04S/yulbGylM/quJcpBXf1PgSIs0u89MLJZxKdr5yiaOk/Nfj2ugoKLDO15rcZ0mXqxkm1hU+L57oKKw+YuaNXKvBQHWR4lYl5p9PQ1qla/1kPl4OYrQzToyFBVWNwR3lvAdU3e8/rLsgwj3TKh4tuwxgV94pRbM2u7oNw93DLnw0H7muozx45b7CTQHpXmebdomOMit2muHRqZ7jFepmUo+RbETzUXXJ4DwVmeDRMRzNmtW6xojfso6yeGme52/uGDQ95ONXGoK6HWsEUzyhhZrhLsBw9yG5Wr3FbAk9uNrqshf30dJgXL8Vh8vaTLr0ksEd1YGrJ3ZXhA2+IUjhYmuE3dck1SUjpxa05LSzerFC7LQlsKp4xemFNzEJoqko+sYLMBnQhCrf/NxgGjdcXy4mJMhDW6N5QyT0UIWC2gDqd4gXoXxQAE7VXrDTwnoskpcKHpak095WRuqK0nr0NZqO/BgPdpEUWuwEDOXZZk0iu8HiRAZ+pdoHfzlkwq0ldCUobfvf5+UfgO0x27O3cxofUVyulv91WR0YCGa9MGL0fDHiuZI/B3ChDcSpoc0OUDbPDbJX48Xeuu2ViR2KrFV8oGt3smHWbBNXiQiOiz809SUsbHjHTVtFAMXxBczaO03HKA7Kyw+g+fvxAp+VwBm6dfrDpTP0KEmWEGfCzA9tDJwTNojXwzRR5SVY85waqnRcHT/E4lkz35bqQTptv09qbrwkPUVPPkSkaY7VeoRHPdMZ+X0MHOtkcesPFvbMlCxzZZCoxqivh13uiXVYuRei2C+alZXLQ0gaJOTbN78bQfkNkDQkM4rbgeMArWQk/ODZcs3rjP958NBkq+mW61o7oOXfmRinxakk9i8nfZKhv4ZaWiuDGY/5LxFMug8daqWNjPtpGSYr7D2PSm6+3cvevBW4+zVwmab2vqiAa/60Eba9luyr2RXxH+iJqOdAmYwkGlqwwu0UcwfetO9a6TwlPQXvzF30loTfm1hCUvjPL06JvOblYZBWjBI4gTy57q6IG0U//1D1xmoEmh4YRKUuq62pEAP6qZYLnO13eZU5n/l8FXZIuypI+iMc+oKvVsX+xiwcPmjw/mthrUBBJPFYIL2m4I46HtZHYXYxLw2jwz9cVGdnKtwwzyz+RrvtMaqcvN84zyiEvKxtV4m9/mflYPXAtceSOj70o8p6nhb1fOLvzRfmrTcQpmjRb+n5ZMfRmscgpl6ehMo2c/+IIz5o5deOhLtFBDkBgAmRZNpdgZeJiDNqn5WVTCEDDG6voZhSY3g3aS9PU5BM+kyIxMnmysa1i/GOF1IrlhrQd0X9ahVjPm9enhr9O/8ZuUPKnwkBNhpB20Xtzxq0yyb/N86HMEhkPQBoUV6qCMVCD/6o5hkaCQlZrpFf2NDHk+nGkf6mQIj/zJ5fycCJ0JMV16OQsxfIyIrAKpLQmMVLZzlavUHawdKqLlzcj81DcvL67DKhOyrYyOvPY6vppMC4an9cPMhoFcm0YBB7sJqLiyk6MVMBcmErI7nXyVkYFWjwJERuvOYf9Ykt4nyvXboUf3WLf22oELTFdZNfLEBxTHUdxeJ/3TgGnDIL22vfFij3nqOaOVV4hyuiwnV8iK3ZPgZYXvKhu8JRIxBB0oEGuB1BHkSE90kzQW9LlFNP2yrOS2cHWZhiGZm+ADaJOmov/xqAHVcL99vZDNChmPle7xAdE1yw1u1McyydmDHQOlKz+gdW7RIYO4FulfHxqahpLeJGqSQjBZQFyDFefRU4U48f1TulYw1Egoj8gjS+w2VpvA8HE/6auyP85NHSBPNriErxYZfOGHrLL79hwFbQQOnY/QdMFI7Es9Ppx6M8wjMvBSg9levYNAyD7/9w4Khs8dPFmayPSXZtBzpyiFnoqE8625sPP9ngnV0FHzddmzotFDcAAAAICAAAopZ9Vd9dRbU4x7qT/GnLv2CKmniSEitL1kLW5EFET5hCXINv7inOrJrR0SqNEJPt0ijEfgP9TTPN+crtJ+mrohYsTDc36qm4HzzY3t7FLJA3IZh+nJLRTBSRXB9B48kq3Md8q/LSRiU9bcPqxkpdubimCOZGJNoiYbpzqQgcvSYskIV6qJH8VVfO5nhyr4+j2Ae2jDdcl2WecQFwjq7LCWm3+ugNnH8NiwJaV3dYZn0xMCbykMG6bI2KJfk2XyFQDwzHyJ+aUKCq0QAM4yNbQokIgLvlIrFN1DLxj/AaVLLkwc2dViOw60QRqBfYIpt10b6SqppMMJ+bq8AzDWmzuTGG0OIoF1Q2YYYI7TfeQmocbSkQDAqH8VxOFwS6DQ569NGxBRSyJJqJJCmz5o4yy8gsl20eO4DfMOVw1gpiDhbpPuq5zuUrFYxJm/ZaKAs+uyyEI/6QTuekrb0jnb7BLVr5lHbW3mn8xhjZDU8wVZwobrF+2ncGvy78uRUoMx6vaWf+EyFZdSqCYhiHxvdKMq0fG8hZlEaGIc6t4ZKPPoB51DvESra34I5X9RbMoGFtEIo2VJwErbgNaC9vZNIEf7wRF+S0DbjsBEXjglWhk1IxUDE70p0GTpRXQJ86LJVoScqTVq/dFnxqpNnRgnPnG1lWNwONy5FCxsvomy2XJNbtsElmuIj7ce6XgGGbVeERMK/n1mFG6myr6ARu4mT4eoHHHt+c1CUbL58TSEQD3pjEHfgnp3Fkp2ANu0DKRzQMngKydO3K/G92WWpNKVj/WztOapcAmaq18llKQdc26xzSa2+4xGBsCXfzT72ZyhtSXMMae7bviTHcua9DTRv8/XowUnlRs8Q5IyOpPXHxh+nw0+tBbpdu/i4YxRMVn7kwxNHkAHKj/+jpSDY7D46IKh6cN62P4omZ5UO78/Ma+omgD20coQ63tBtRcqDyU3sL6wQPGImLfhpZS6+Fe3MZ7A9W8UbfNncP0b2wnTfM+E9d4t2Ymdg9yV/VnClNpFi+S8MV5P57SIcT3KKzzYzxG2SqZZQUDHFAsgNUONeDQurGzjT3T/THFc3/GE6pFKVzPtdLorNTir7VzmNsBywaCaoooiNatPkH02t4NjC6Y5dc2dxpLYf7QWC0YCVgZgYM9sqRQM50E9JVhkZrh8GpA9lpS3rU4B6PAdB/qaswU+qGQ8fk5HAX2JgcjpwVEgc4gHxV8YPV65Hr2qFiIvYB+0aYDOba11CaW6VPb2ODhlMBv0XrsaklJsiTmXyA6zgSLrl5297o+rVePNLRuCHzJq1NgbEdsU4EwxmNq22r3ihO8Nz0/SKTD25I0AOCbC87Af6F3QbP8ws9afnkoRjWKr6MVyEhoVN3wclqrgPuuc9XHgBUptAaWeer4oNQxpgb97u4hbTljdv3oUXQ0Xn5B2puGS4GPFH5d3z/2ZND9AjfF5ycZdJwZ93ZX58PXfPfFL4fUNRUxyASv2CDzImvlmL+T/5XKxK2n033WD6RrqkoJKRP5Udc5c1qkoM2qe28uJUk+Up8gl/JsOMiUBt6ReIu6qZ3HAfeQVP7eJ5sW4DFYPPFdc5vDo0u3PBVZSbxPere3+9MIpoKrcjmEN05ufl9+TAZRDoLwZMZ7pkAaitlfNymaae7V2dWgKzHSZmFUFrSlrJDW+7JNRQaQIkZRbyYIqVodBF6PLkBE2zRgn9bANYiHElhbOMfY6/BSEo3n5YsXAxTsAg8r19CuWRcsF9WHsPe+aNXvICOGolyaOzlM+HtsDMIUdxsO5bbNTRwZMj/qN6l+kbgvzAr6ewmEYLjoJpxSZENx0nAyw/D5dOeGJebSBe31yoUqmRGgCq/BRqV7zUbzGTWUYHVXDb70ysDELcogLq0fdSnmgd6P7is43eGUQc7Nk+d6blWFNGRmknvlK4TERuXl9IGFX4R8SILDvlDk28JViMq7cgbv6FB+IhaUL2INFy8RxSntv13pYhb9kiZHi5l7XVVQE8xUvlRLMtHU9zSf3N+Pn6JWvbAb5FRWPwbek4FBBI5lNG1s6skG7eZOYVK6DAdtOOgoqgXwHIqxT1isQa+9GREZTeXOklGwYKpvd24UKkrnWy5DgNlYBbGpYf2cr9awtgATuG57Irn7voup1zQFgY74THkIRgusFIPMYRTspO0l74xVkhSodgPwqRO3BUpksjWdwE4i15GSej10UluoW1l0guJCNn0lEs1iL8Tsu/uwVme5srIVLHYHyfvMeloS/Rc2KcVDWBzzGgXaDj3XtgMiFmjX1CnJNYq+Lb2gsXwOM9jb2fxNeiE8ZkGteR7ujxxlPKNFI/rTYqG7RXZnAU7K3c6ZMcKY6QnZR+ndXpY24fYbYm6wksUsyHDm7lY7CIRy5Bpk6rDyl7+jmJ4K6JZ5W9NtrI87BaB2PU91uC893RDtYWukrg83b9KjWJ7neHS8fZ14FB6XG4vilI+rainaVxhHisreu0prKIz0WjJ0WSPm6WvBwY/Dhz/w5KWYUYELRtZnHnzaTmTdMNTsyTLBCVa3+QPYLqi2icjJgc8RXdAHzVr7giqt9i5JJKPv3HZz8rAAJok2NiWZk9Do4527wPGI5BWKr0C8xSqwrQD4WhMoch0lRV7saSnI6gKNqiHGrb7U/MmG+JQ7tktigcGy3swlAcK+hlYF3Ij+67A2iT5VTQfCNQ2vXhL1xkP6doWf7vNl4rDZsgziHeIg2rVsHGG4YyEFfNgyTgAAAAICAAAByDRl5EjxhAW4BMJmTbFR758sq2mrnsWwLQ5aoNaNjK0yl6jPEHplvQfNOc7pOZgYL5XJ6zDYrOCBKtomzo5YYi/uT8qDgExEVkf5w+5jaZdE+2oRYUA1aOmjG1N9UgOMvfJbig1y6khSP/xPs5ZUyx1CXKf931Kxg8KOIFonVSgsrky0TMOAsYxcB+I/2SPork8vDdl8njoyx4acxIf5tvcAqouMvOPDbpL0IHq7vvs57I2n7SdI3lUWeMZjhgYCSVQJ+DLUKOJn4rySrOJOduzlmMl4/FJpN0IvPR9EFefCPjO6qIQ0w4nz8jg9f819foWqNTIzL8lfYtYj0xpZxyim6MZlSkcrCVBgNm3wAr5DcRD29Jk1DcHDOWVY7Eeiwxq/HbOuZXv4lWQ/sTPvjTZyPE/CZ9YEV1e/6TWICUz24zVlWd2MzioJJpXamsiokyJEdn3kdcvErJ6hmV8b3Y9VLCfjcYlZ9VMNqZONIQhYapnU1lIOU50g7/NtfMhGErT2zMMvrMmrUPVDmDAO0kd6KPSCjtGpne5HGHaav/QgDU2u2mHPfEcY2zUqLacSvGAHbMKNmtA92BdN9q3g9kYsfhE2R8pbqMjrHtSHfd6TW4nWqC9paalSrHO+DedNcnFZmlYYJ1su/D24DdshgFknsi3t1a/CSiTSJk5Hg8dyp7KBGdIUA5Ur4n4nb08NqbiEdEgEWyaA/gMKhDfh/WXT4ozvT2qSXFnHaM6B6i6skTe2ScmTm6vRH20bvwt/Gqifo2/MIVn3cRE80WhNlnMxp82uBpElVvymLihYz5r5jkB9pCbZ1Q933clI31IzQZK9njv3ddskNznLB44pDdLHC2FhOUD+sTdJvYPZFMyQJom9wpq6LSHF3Wg/bY+bCql4tsNo45gqEm6LuSeE1MhFE5+m3I3L9Ksk5hftpCgEcSicEShmGjFmIoj0RcwK7QqrZcJ1MqPZe1ydZhK9STfyuOMQzgwY6CiQ0QSj/DubOxcUSnAXS25znNuALfs2ni3wk8cpbusm1suj+M7MRq7s5Qpo8pQPORxDC8vuYwNfoONHUCnNaL2qsWNcY5joSajKUFX4Q2ls5RT5S2rwyyONKmAwJ8759ebtEUzrYKZz5NrZR761Pd1u0UgWfoHsI6M1PkMFwedL+pFKKNS7XKAjIjkCnHO7suvykePfmA9cLytqZuN4FMvuaaxK/E1cK8qT36eVIilDsPBFqIwlvWKjgxTYC91n3h0qHUdVhH3cUfWkNKlEaYVRqfkQOXwPt0FQ/zKE/7Kem8HIFDAPZMyG9HeQgrwhBtVGZ59k56mzQWSnkXUDvMuXuMwM6NlHbOwg4goVYsyYkwASFANP5rdThXDI6iiEE5bNXreEdvkvAOVgbm8DtK7vg4WSnfgiL/PuIIVdGZU8A2Y2oI0QsToEc1RMo6Mgs1wdLoivvml1X7ehyIgI4BHWq+m/BV9DV6MhgTU1ibUpr9Un0eXKSNIXWJ4m4AFUrxjEfbzKB/iKYXYqtj7yTv+7vuQTiYDH9p1mU1bUiEmaO6kTBpZSD6pAWvT5ysKV66l2k71xKjgGxBxa1Ap5t/CGB5Gjrs22vj6F5favWjNVEHBVM3HxnrjyW/N2LYfZkX8aSNiZV/DufgHm09DLFUWkHqUOe+XlZ9Y9JfSMD+J9ZhrLlA8fEzu/G869ort/APWBLA7fToJGGjdPHI1x4dam1EleIRkTwMabmhZ9PJI7JZXjyHf1NzqXeo2NlRU+IpWB7BzHMOKnC3edn280xH9feyj4mRsQB9OWh6oNpATJ0KTkKPsDW6qjiKmjeBJaScdD5Ng4qYZQj/Gxc7JWU26iRUcfkwDtEri4GdB6+l6l3jR+FLMUMBf9bdRghJIayIF8QWD1vPyp18jHKuc1WKyXeLiZPZMUuclJyxI92D1qUi7GT28HGZaoJkep2CX7aZIgtD30ijtSChTd0mEiulG9ZJIkNuUAAN/7XEXcGND8xONf3D1PpfHvGB3i5HssR3iNBxCnFwPsGKn66Y3AvrRPYC4BgnINHPkup1E/P+M5ptQvftknmQ08rOKNzzeTagOWgTRCzUo5OmkHn8Z5DSrQXSqN64Bg3i4X1Ubatg5MRIuEQbaH/1u1aUaEo8LGO2pIWjv18nMlJWlvt1XKmIrDqBOhPZR6pVD5GWPkhyLN+lqVAaGwKt98Wr6VYPssn71ZBO4YyKlHskAaQ0k8liHcHcwi/kXjsOJD59rflvAVuIWrZ3mZtsolM5qLW721xE+wKmW57zQuqyK8GWD5x6FBz2QjT23P0VbAkRF1Zt+bfBaNP6nTbg9Y6YClIRDxTIUYacNu4jzetCe8qCMP7OZvb2ior2f/ejHxv0b0b8ac72jgGI1bOWAGHwpUqkM0Kh76BlXHu1O+PpJV3cCShzCnzoU+YSCjHPwUoUkG/WScecwzItMpuoNTQ3WRSbMvavaeRYYBtGWe3h7cs4xKOZpMQ0YnBATb3YBNBzITOW87q4U8tI1hRrZ9sd63KVKBsClA8FAx4pejJ2iHT96U58o39to11WAM+BgcrPkauWQJPAw+Ypf3UmIe89OVE+HgQRTlUzW5OyLptW4mJaBZOphH0FbBsBO4Ull7zUMfj8TBWF0OsmN9ZxCglt25n9P2ThNu5FMUsFh5eVJ4laBSG2orE53Y5vj3070ajDnrp+N1Dve19+OkRPRXF274TRyCU6fF9KUi8ebXRH1chobeAAAAAA=');
