<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('06F0432E8D682238AAQAAAAWAAAABIgAAACABAAAAAAAAAD/mwHlOCYxBpugxWfrnvF3RF/VWRWSnw8uWwgJJmqNBKefpL1iXs448E1NJAxZQh/OLSp5paFRN09JIgE/04eKi14v14RQbkiIwf8izsEc31viSRQ5HVPx1ntMWr8YdMnGwdP3tGRXcJFWV/kj9BTEFNrcqJgZ7xh2w+zopa8ZoD0XDQE0ZJlF8TQAAABIAwAAtSBdaLKdHFQdey09ECpqPsMawyBNtUMElFvFteFexNm59v86QzoZVMu64/P/1sA7wQ4TSZdN2zjnPCXIOIXHgdhpk+wO/soRvkeoZKB6PqquiG0ZiJKbNdIDu49DEXO5kSz6wi8gHlnLAs711elRchgV8a93Wm8k+eXnmvkw7prBJQFmyH+05HQXGzT+535e82y9Bd4vNTGFJ8cwdQ0hWidf4Zwt0EbS/fJ63Mn4ApGsaEDu3m1XXJf+nGv5ezZNrZJnM31A7+SXW37FZGAnOabvc3ZuzUnEOfymCRmv14mj3ypTCp8B3gKOhOECDiqRCqm4ipxqmhGl35hifALJu6IvPUY50jDExNH+m1JM8cU/BLEjY36EYxX0+zLChFpKy6jNZUCnPxjZk1l7ooPC7h2rhm0rGcSAK4Zl8FsuXDh2y2Ew21uh+GTVGA8fk8flxLm2J1dbDXqxy1JDiSnYLxKd2dK9djvhqGtDp4Q88rRp9ppxH0JPx0Tzl5BGBEfXa8FdN+zHt8mVTzpja1h4t2TLXMK1KsWg00jY0CVok5dX8VnvyFCgCF8DShX7TOKMdKgxAPaLZKco5eoxUQnJ3s7edRd3qZPQqxYTnb3jvivTu0GAOnyIAu2EQf32SS7AnND+X/PLiPP6bCbtabRJGDXZ3TNMAF33c8MdZEmdm/IJfGviVomgnEkujrXvsCkAqrIvLhXLN9fYrRfTHfVyi/wmTUf2ZnnjK4Em+UuNIvT+ErQc3OxrHBOdWRXkLP3e8qdzCRbQbOupwajpPVa3PybDGHi4ho3g4D1Xnfh1HBW5cNtiKBk8nZdkrdEP5Ikl14SP3fOZ5QWx3yg8JYsM9HYA93d+z10jBxqyf95/N6/DnK9kj9u7UY22DQCeWMfE8cyBu7/vtp2WRwrK7x6VUAGdLvaP9ytjnuZil7C1NRE6jd4OMCSxnFoxlYved7SECsB+E4cEnDcT8qeB3a6dbKqsAtspXAONoo9+/nKevR6LCws4tYVYfsT0vHwz7iO1+XA2axKMDJs3027DRPGSb9+ABFD7nCOBo2ZmO2fbHVqX56AxWTV63Htt7Jix/MvLrHUfjtNHu+sHoJbxXN71OGPIzTVvvVvjNQAAAFADAADEH3MnCQNAwxeBPrVoptFlHIBqGe6lGAskxUPuV+AFOjr+4c+NN27Zz2lxkSjLumjalPon5YywLUHfyZG8lc5PnmplRblFGaD+OayStW6+epI8E9MJKIzJiWhrBEiMaPuq78zoni4gkhjYwB2GtZbF1umWU1GNwXO1vhNFyE881lFbEJV6a1ojnxc8s74qXCm1+W7iBLn+iKg+ADNG5qTwUTfc0xmzaVPokjCZKYNZJ7a/HiIrwKfSvjolqoICO52CUAUX9Hs2P950eKM00VGC9kZ6WS17Km8EjMZ+mfvoobtCgUVTZ+XWJrkrc+0P138F6gtMGn9v1BPZs0OeyJ9k4Ey+O5stGDUs4M9tqmc9erJxPzPzxoctuEdXOcApuoSyHhl/s3q/7MCXRW9ZO2Sy5lfTVyojVyBL2D9PR5EmbgISlIuxputGvyhc4qRsoIqEMlmsy1AhLX4jJxu3min2dE9TjLnwwU5PoLfyz6MmXFp60tbMTkxacmaFUdcS0pnZ1s12/AdAXGeEcfWkQL+qqmaL1JTwqgs0E8NvJbli2QSwzUzg0uizPXa2mFUku06139OZ5HOl7KUIPWJ3E3nuBbjBbOzyFbsHFluUFtY+5y8IHmuhZ8s1XDN+JCqcAEPdneppTItS+ew7TqsWFQUK+C2ZwC7MKMKoxvHM4jkheEX2hi1CTvxnMTfEIo26dyxcqcoUUQxH6wmLg+96qeW61W6bKAQtbYMOjONPnzq9xyLZdu5C7EF43dYBSsTSfS+dWzGZ7N6wK0nfm4hlq8Xx7VyLBpxC6Dj6pTJQP5FG7LAgX58l2jergInd/Ir1j/h2k16S6N/lafUVHvXz4LfDEFLCBECvllHtyloLA8oAp6PT9V9hAskGF+jnoQaWXtZW96D93bd+uMkXn7Lr5AihiM+Gv7AhSGjJTD4qfL3Hrju3XZ75VhdJRMdfRjww+s/1iIhl9GQ9jbhq4kToVMcj0SF7z1+9UTePwpLHRCOTASAxU2ijICMsqj86rwTF8jD2UTFqRlF2ond6Wck9UeG1xTvxaaUsOUBPyblejoKA/RuCGIoq7cGYKehVd5yafS1UuRdZGaNeLBFIbyH0ZRnHHPSCwTgrZtxSsfBGdF4aCTYAAABQAwAAN0HDr2bQvZJFC63rQwpYPrMQ3+nEIuZSOhZEvXzYvjl9Ys3i6vOqqOjw9vTreBhEIGPWe07AzEOsoFlG4bG0twreG0vxexu2/qeO0eCoB5wuRZQ4giNTrZMOCWIznknczK95eactzOUudXQTeKv82uw0eR46zDYKGtKbVug4jp3M6g/OevxVS8R59WwZ8AU4JGolgO6xZczN/OZ7KSpAHY+tXkOPI8CJAC9tQqhjEal3vxIqTqollJmQHWYO7rMOLNaygHuiM8TcFYjH0xww09cYmarvkVvHM6kFqZAYG7Aqf8+M1ZpToPqh8MQwEPDAf0n6CVI5VoWpStpAapBCxd0ENOdyF3IzOHtTtHjH0RBZqr02h2eIjv9DT5MUhY5RhGLflaQLzKPsyZ6mKH2SbwVKxdiTY7dvlfQXspDsBAu68jsreh4X4zZieHrKq+s44ocMveEcakfDku9AWrEdPLLVYjhzLoggPVAkC5pTaVyKb9E3/tdNBzpuLB6sJqUBnUVoWswIaVsX66qUfskqQ57t+f8hO4aT44KvO1Nkq/0BSc+FvdEOsq77iLA27LKTi3wTHcL7ygVlhARc3ghrKmiaHkET9ShI3gHzcz6e7lZhwWil4EhLN7XpezBXUfN6mPMeKaNI1AUjLHglJMTGHEbW0/Y5y2ePv1m/MSgy2VYN283kFFjhRdeS2QOfTMdR0SQQGSyyQYSuu0NLJ4H5pEAJTAPm3fWQLcGC6sccDuQBgqe/hETB9WnhqSFtnVhqYKXmECfxgIdi1urcP36O2IhKqBt7R0w/r9YKT5XymAo4HVqyqXct4HooTytuLYV3wfDzWIgYCA/A2CIU9ryWfEn2mAjbqKZ66S/gHqidwgxuiIRXmtHb3M3zYaGKo6wVXoXsvR7cg/VFJtQqhZb4qXhYd/KZS5TExrDYCNELvzBY5B/Uw5SDeRoDJqZHVPdsaQJmiAbsakYHDldy52Lbv5EMN4+jgMRAgLbc3ser6frAp9YJzawzilEgZSvD6tGtwUptwV8/cyILNVCSxD37QhjW+Doz2L421UvgmgcsuzdIbnZ8O3cjFc9UWj4cOUXoT/t/AYTGkq/PUlS8TlUAtzr10O1kk4cJR2Z5q44k5kg3AAAAYAMAABX5XNcZUt7PMu/x3h34Nt6G8zzqx/D6oXUIo//fhi/5x4p8DpvHx7jvMexRDW60h6HNR4eKGi4Lr9HV1IwORMiSyt0oMCiuP9FNYkIP+C5f7EEK17Nu7Glx80pJf/i1pYx4Nv0hjK6a0izinY+S0JYc1ptpUOwiGU5+e9/XuRt9LAqvN+zcURjxo6KVnJetpbO9SeNYE5nhjKB/VKEF2JewtINkm6ivBU2nIMuRl4Ekg+nipum3WDWsUXoIvK+Hhqdn6Y+0ei/E17tx1B0t0LJGgpu5Nnncg3hVVhhbw+eTlSRO5gvJRL0vxN3HzOV8JfNAhm850s+SlmawQVuKgHJzLoVI7Q79gdkn04HcuNXqJWwJLx8qTfPUypQ2TkakUiJu/EdIEg+cSa63vAIFbmStk7HYcqNr5T0cKVPL6LWQubaDtPiITVTYrzFgqYLKTtw+vkFflcfiW2L3J+J7AiRUGaC5sLQTxDjvQc9KhIou24ZM6F97n/H2HWiLW+XYwHJoh1iiXKAMcY0acyTctNSq5r0AGIvNtL/hC7t52yV/StjohTo6aDY8gkWm/yoMGTBsHuljDMs6Bv/QN/1OjAwPbfEa7V4vzik7vQZgybZ4gOnIXu1NtbEBuw9KrWtImHgZhB1si+LqTp8fCIbMoo306St8cZ9MapHjjEQ3KQiqA/RzUqqix2OAg8IWJNci/HFWecf/nvRmv2M/5mNAg5vxJiSHDumD8F/mmJcZZVZ1JsPlrYQOj5VXoS/AQs0Gxs6k4EBglj2G22DPUyhSMu3PknbouUSZWN5+OQ9apm2wHEcA5KZ8ZkeKN9v0LHxavn2Xg2FdCBz8CzsEKJCoe6XE2r27sggih/RFp70vSFwZ8aoRJv0lklBOe+G2PtEMsEyQ6wkyDKD6uK3eXNn1cWge2cS1j8M5k6SdDCbOinFRlIvhJMSX+ZtebS85pJDDNY8/bdfky+knMGnna/Wn59VAbLxbHa69Im+IF5AU2N2bWer40OG/gH3HXT27qBJHko56aW55Ov89yBpKMZrGQcaO8GACfZBHV31q/D4VPv4ULi9w6Q6wulO8oEAHvFvFh3ueoL4dgvEYfwKsA9Xs/2yDgquaQI+/c/PlPAAeU4XjUmSQappbNpHjREaeKWTDBTgAAABYAwAAzMVL9b3/eXNJ73LuFiVYCLITTYbd6NOE+6nuFTuulDRH0c3x8PXjWbgXQNXokybcHg43a7nv0oQ5fFKsE5EyYQOpmV87YXxQA87TtkFEg4Z2UIqT3jUGyhfvCLWyrOkn0l8avdkIpxppxRTe5IE6RgyJLZUEg4PpjWYOjwBGLD9w+iLXUYU8lnk7hSBfXMOKK/XSFMVNIca0T9GHwXrvv8tBv7k653DcpY9/bKDHQ3eTDbxFPf5GCu1vJiUhJuzbtqdX+/3zHHFddHJz1iNo7C67vAJGAcI+nKhPR40O1IcNGWROa+mMOKv0naugf2WQ0DpCoTbfxdzz31DnWnHt9ZlUF7vks1yvY1XX13hZ6ox3i8rk9nlFwt8N/kM1yvDHx6aZ9ippHP0JwgSC2ZC7H6LcaRt7xHa7FKUSyyqVBZ8bSkrYnIrfYfLzXonPC1duM49fBR+ugwacM4KmFiHomZvJgi0hHG4qFkURYah49HdEx4Li4Fv5x7aqI2LUQ0qbn/4Rmg1I6vM68Zy+JnCSp56PPcbI00/EFEkRkG5J20kiW+q1lZaFkkoLt2tNqHHwDyv7Uy2RpFo6nfenzNl7/UvnywmhlgsguGf1Z8cNtEZ7FLCmI/TpV0BQfavgUQSr4EznrEdAzTdfMgzfr5fPDeWCdadwNxF/Iy6o0oxNXOIobaw4HTspc3NRdfkEeGNpfmicoZ05uCFCmCPrwkFnhURg49UkIsgZhAvhXx7840A9uCi/ZJJRXrHR/pvvCZvVSS34LDTN+j++wgV6pXcHpe2B5hznFbkhaWUFZsjzBH9upbAIVZLToIMkQ+LkOc5f4vwlnLedYHyRxhn/sZEw0MCkoj+/rR8v0kAbyZdc582Xvq/D4y50AKRRnif5lMRWRT7VAATcxunad6jjq+tBtoHZNmBndhFxvPrPwY1oEsIyzuPQhAXiuKkvkaI75hWXbfRmVLLlMQRxqk+TqPp+tDmoE7F/ffx6OGYLF9R/ntPJV8tKvqJujXyp5Tc0nc/7IZrvB6CUvPL1EPjwXpvCQI0Eq13+xAZe4iBqxMS+TYDWxmzZX6b5TJ2Pb4pSWnnOBoHa+muvb3LpusuBzEbFvXvFfXHd+qBsh6nx3Jw6hsGBIGzSlE514wAAAAA=');
