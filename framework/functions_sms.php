<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('57414C1B8D6823CEAAQAAAAWAAAABIgAAACABAAAAAAAAAD/n+4lKL6/vBVFLLbNviLBThu5tEk4G9/YEh9JY9LZvikgOzd71jpL+yaBJij26qNDbP8lpVcprQbLF03Qs/R97OC9X1HlxN1RvDYN9+q2JlO9xCxP0UaPNAmei4RDIjj2bhWgbJLYgiyAcrZttpTXwtzIavdTvyLj8QGtNsmakcT6lt+r9lW24jQAAACYDAAAvV6YMPww0kIthKc03Gat2qSEQe4wQfAdZDNXyqnZkYj0Gb/v1kmGZQHE2l2dF/JnWsfXzRSz2HFEYhB44Kgq+UsB1h/J6JfcSTbHdumqnOx0tEmkL8qLkriuP5QQQpY63fmGVrzO245tIfabuYGOOiYfemH2O26IrBHlDjjuUwNtOsTnPzgrSajF8cWJ4gBe8PPEaRv7CxitHUtuAcj/8MtXJZuGx1/ywg+KVP8cVxHY6lwj2DrroE6P62ez9pjNkgjF2EA3/tjnBiYJugBqn48bzzAJ9IflGTjFyysOFEIuEYjHQyHVhYq8zkZCjSPrkYwovZWtPgBEZ6MNrmOA4T0XQffyEdgGPyxEXh8ZY5XtpCTRb/f6WbicG31clt61zVXMMGpoarGqdPiAX1z+M4uOU4Is0Pt8sV+d4rWY5gIN2rMG1xq455NmUEsqFtTsFQPsEqhY5dDczJ+33mZm/EJADGgSmc7K2ae7ljHBdeBntxdYGEUCqLFL0Tm1eaSwnEuXgE4exH+2Ay8cYor5V8kO0gmTr298DrHfxcug907jELoeckRf20eJiv3nsfWl1m6xVoPjz1W3WqyXZVVNzRUz4iVFsJUtTn67C6XCY18/i70RP+nYwytfUkI5m3YkXJ6Tw1OAg2Kktvh0DtHu2KsGT2XfZf7iYYlmHNd/btwf6xKTV1EAiPdlWUBWI0lV846EFHJ9EOqEEiFXfGrvUVpbF5yx7mnceSuq8U9r/sDa5VPgLhh0zbQ9G4yW9d7l78vbN1oHNHU486bP2lsfYZ2Q6bIBZ/fX7oPB5dU8h1++rnI1ZB7JWZgM3pJQpiUl+Lsi80rVwxh9RfoHuQZjuyMlgmGhr+S0Oyycr6a04aoXzMVscaG5rAkKl2gOf8boEKaDQZYv8BtRy0u0VqfZqq4CtHom5npNgmtFLdfYxZv9Do1eEMygjXT7ecgIlwz6p5XQlKTnwlw+W5gNAKe49WE2OqBfC+SummBUxaQiCrXDqngxbm/9Wmu92Pm2mN2hEiwLbPoxT/BIS64eUo4rpPtl3k0HbRDyHhNfStF6bCadhksrmYlEXpOCJHQfbjOt41ozhP/5wKLG7lMiPLwNMGBzDEmIRUwRB5aNFMuqk+P20DO5lwqv9+1CXvFVZzoYeo17gehQE8ccZj10feyPq57ubz84iXt6L0nHcPOmotklcCBDVgd9CzEVhSjRiKZ0ff/sj+7sF2yLDRcq5dpx0K4RqKr2usxZObZsQSBLRu3EwXmT9RK2/fKTGfGuCkp6lTwwmQKCVJSDUdB3MVdadvsiV5HhtpZ3opeq7Yj9bVTRqAvqxFmKKdWejIJWkmRSCsTqGjmefKT+LkAz3XE9bCADYSk22Y44T9xmjR9vk4dl+fwAW+rHDKOJL1AxCW8MCPMQtkwVL0UG6vUvc8RQEfG/7S4K5IuOwrrGEp+wCMcocRTZW9Qd7xAdOOGyUfDHeLNeLmNAG8WlH1ok67KJK1qzycptOP3CGr1zvfonQZiLWtY9NaxssmwcCJS4yo3VBsPaxl3lwWE/fswOulK3ZJmZN3i1o4+NdZ2YyJWvFoSwqw1yiLxdFnyOEhBqVPC4ep6B8ddjPOz8fS2PxMFsKBdGybdZhMbiFDeRfjNmVRtmxSswwWcsC1xKRzle1EGGlBxmD7+2MJBtMBpDP64Hbv4GkRanI3vU/NsPPTeHAu58sXJ36+FzyTp1Xq8/OMCXoNkINfgGOolgdBQZTuEQj0KAByozYC9zblv0nJhoTHE3aPh0BBkqVfsq3DLD9MHTG2Wjn1pYcGPMEf3QYAkfTbYuCToz7a6YqXCgDlD2lMZ/MfXp5gUoqy12binF5Y9/PpU6Fb6dqIp9l8zlfMs27gbphTeaXKQjtSp5LI/i2Hb41HUGZoOpdhREzH+361r4gSRSXujNEqUiz0zL3zQJe+qWlh+uVTqev0fifJ/FRqdUF5dlhlu0UpGTZrObOIPzqAYTM8G8/8nLz9hqzB0vDhYNwnXZL3IcixMDoQsDcnGtQijAjRGUHDvcqq1aDI+NotHNcqij4AEXbzHJAKoT3hvMW9bIpbtD0NAfcqtCRHbeuP5o7rtrkBdllGri0FCZ6tmiIytpq/uCBa0lwkYCwL4kb9oSFF/xPTYee53rken+wcrXE1Xwa2PqtIXy76QIq6GnAoIPpqgXxDgDC9VrlygqFqN5MiBR7HQ302h7D6iptzJcu24B9UO9q39rDGdvwHSLt2aeLO9VY9Py+PNpmkEw6P/NkgayXIQXrQR/ATisMY8rAUhyadwlG9nOACnbOgYRI8AMT6/sQ52LsvM4Proprwh7iKePlozknwXI1xNK1dY2EURCr28o4z93Flgi7MmRQBV7vxMqdM2OVzPPxDxxp26WiGK5vNeDGFT7q8ShQGfBIs6AQqmuGmZ3MAw86iyIyfJgxi5+hzkqMqqdKRVp/86bSMPKa98yANe7IYGmYQYoMQX/CCxAlcBCPkSHXflRvFgIJrlThC+Et/cjtpq+3nTA+DcR/aetFDjKPzHw9PRVqglAMU4VnI4tifqbXSYJC9AWqbbkaKK1dOBSnDHoI15miOo4A1Tx0MbXUYfKcdakShfEvbP63eNbmGMCHC6KSd5gxDjhiMdbQ0L8cTxqx5m7MmOa2aPjrYzIrlCNzSrBZmHYr2bzVt6CAxcovu+jxCxdkjcRCwv3gVPBzAsV+lSmVzQLCUUUUEfXAM+V6PddTrLxPeaWrp/3QLZaD8gJqkUMC+Elw/2cNrR+APaG0xCkBh+nYoKTKEmm8/FY72oiKdzPsZQj8A5s3aRDjcYKfsCs5WTK77lNkYS9Ex/lWciw9ufYOb4+nWD4QpE/khpbE8CZiTz7Tppq4X/8zYUxvJSjrc2muy06blvPmvjxBq/FO0iHlpvp+OCVOPWdN2etbZxzkM1TJoDTeNAyU+CjmzAlWyY605P1earoKNJDCP3t9cle+vNAxHL5i56SKsLmFWws5ITznXBgjPEHjpx/+6UU1PnszwXLD3QkerrnvEhff4wavPDMwr1Fo4D7+YcKUAksym/s+GoLMo91IiE92ZAe7J3jY37ojWfMV49PW0J/kx4T7g5wIq1A+Wa73btsej4yb0DjotJqr/PHsseb4LI+mMOxZiHebGnt1n/QmxRLZ0YAXGs3Zl2vKPlJBv5ECtbvY4ZAnBwWbldIMHNKS30r/uhRr+Kg/M3xAmSgNVLgsMrpYmv/GUV1toTnzUtzzn7B37YyA1wPgJxDKrdM1ac8jyXcHBH5r/vNPeCGTG6DHPaU5lbp+1I4JNvz+RFJFUDPrQEFMNEMxzeOyYpygzdgT6Y/bz7RV4SnYOjKL87wdJvwOGcaMXYd59v0VTX4tAGNhbBVMrl4NY4cRRddXJ1kZ9j+DX7H82fJesjBRSPeOdQvnWGxXEn7TSuqYU8DNCP6e6nTKDNY67SakcHY8JEUTXEh60ekg0yiN0NeZAztViwmc42xKNVuS7BbHZWxGXJ109H0TQBI9jNP82fsvWL49QCfiATSotqVRvl0BDxqRclyFEKh4o1nlQd5FZm7iMVdPb/PN8Q06ICGhzJaBSBBdD0bqWfe7Tgjw/4Gvf7onewyDX0wAllWhjmsidkSnvVUB6GAYeBuGwedv7P7UH93cbEzY8Ar9RyNh7TDoKObbamBHw0G7CRv5RdqNAXHfrfcUamvD/4tQ0mL3tGaMqkfvgxTT1r3KbeLfYP/1XQLDNv0rySc+B9uXfjogyL7k6GylpszpiJx6iP0DLBXmErkcXCM69eLE6mtvnZH0b80vjcxz7Q7FD5CWZGdBbqH2vEHTZxK69Jz6LqkFppT6miDkqBdXihFP2DtwmNraSAjZhWTkLClBZJArQXVFrs8W1E0W5oPAVqJFKcW+JxXiUGQGTGz58n5liUbh1RdJQS/pr/IAl5AlyP8gsauT6rQmrxeT8qFIO4IPkgT4msuZu5l3rLHDx2nbNf9fREHpoKMn7LHU2hE94DoVKt/iXP9CODMpu82EcGnkRJJp8t7rDFDWvqyjrPyZOxFgtYWMqf1iuGS5+VjnzJfZ8H9ZyQ3Rq97K9sYOKGiTaunQeKvpMD4ssqI/TsKINdirQgMuKFN+77iysU93cShEp4WQjZqyizLeEQQKVOYmwnCVXOK4h2l4kEe4KzRvHw/ihhXGOnBAduA734sqMogANjr9F7V+RCXE43CMNMIxW/hdrp+BRMTjOlsvAM1Ugj0Tayx1DgHONeAzLlLROsF68m3h1K6xdyB7w9xE6h8q3xiG5yOyLDql9c1AAAAyAwAALjd3Xelus+vT0SlaLpua3gTK9kzSQE7afWatHg6gO0GfbC+qy8JzXAMhajHcgfk2yj0Vm/vgl1Y99/ctaa+j69z6ENFW9vo34QZnDF7FPnymqCLpDlrSTWBAQaTrbHOrCzstbIkbuLMAeTG0q6DBTxp2k8srqqJ8SQ8IUj75tfQENy/gKP+ejOOH69ORlm2OCojLGRECl6cLXR5KVt1WVf1ABPuF1Vy7E27bL4nU7oYbTiGNQMtO46JiIJwqnpLQ4p89/LSMBLJNyZyDhTnqJIPq/fTBucHtBjSCzm/EOf5/nKoddUGRtfnhzUGupJQQTr+P2sQEVjlzr+l+t8Hqa6PCJP+fP0tRZbh+DuQZjxgY4NkAKnRx7CNzs1ML849HUZGBDogvcWs64LZ67225432SQPciKePx7ZBDXRDF4WWayA3uBnvMEe7Ed2RajtJqElZj0cyVdpSlsWTnwlxoY6FiYpnBRlNCQ93vjhXqtMXxidXe0xktOxhlOPj2uXZw64YGEieatH87xxJkqA9E3ioGzTww/76OOByvTFxl6kBh3ZgahpoPAZPZ8BQgtlao00Sfu9ITO6Jlw+bSMW660jkenpu0ug8P2GzWkjb/zb66UhbFMhf9H+xp480ak8l3HfSfACFGHzlF3OGF6AbeGx4fXCpqY3I9lUg17gD+ft7Nj3ZBu4qQlty5jzD56+zoPCHym/RkPrRigkZmYXozDpLORVCCdZu9OjuvqyM+j9SirRhdejnAK3dHjSo8yniumj9piTFSgnBha+27uFQMZNn1zPppsAY39UdwlA7rLhyzagzOpTp4xi6MCEUcxTKsH90Q2UGlHmeGm8orcE0Sfqr1fj83SblPE7Z2rD4wbzDXsH1k+91hfKLYQSL/+qB/szoyi6NflHLnYBEvPKoWOMsfYwsTD8os5Uosk6QBxaNG8k5Jcvwcan+MyVqMZQoQNIJSMX7Z2iq8lzAm4/5mxW2sN0AQ2WVNFaRoyEQHj3pDRGJXvZNpipTPxhvy/dL+eZ4o8Wp2InESXnj/th9c6EiM/z+K7a8kWqn29E5UHOM0X328PwXTnuDNqyM9/ocsWLeKSmBG7OlOAbMYsCWkHA2Zgba5l/OR4IFyFAbWBSsK4V/5mVwxHwONFzUFDYMZxuLnzgVbfpQb0qtKqkIBVoIkgoG/7djmCQH7LYWr4nV2Pw88X4HbTpVnGIGIUwt5Yr+uQwakdbPYrd/8Mu+jfcs+u2otbp2V3mVz80DarXx9CE4YDSf5IkWI38nx5vdim/lOq3Ds7fELh/SRF6ptklNc47JtIsgOqybByHDr3vFXb2bMwxUEnrWF439so9UoKhjA3F/SVyBoDY59g2WYJL4E11qAyJr8IMEv0Rl2vP+bdXztye8TY5msDXJLdNIOHe4h2DH6ofLnWToRtpmwjS1TZ3/buOir+HmpcMvRWAAW0mLf8fwzvDpTJeswVjaZaIhXD3Z7h2GtXxzlRWHMEk46oQfHmex6jMjnUgERbEjDpzzGrjN1VB+MhOxbyBEc/ZR94yH7bdJW74kbuFeN+N/XO2IrBghBmz6I87Df7MLHnbnywqpN41d5V3XUwjdCn17dTMz2GfzROIr7M13WlAucB0gzkqozG5jgF3/W7t+bLzKVqsqNMKpTyxBq9xU/BG62GeYLr36+YcGkRr+bdCtWMx9z0nH4/z1uCkHfMbR7xKPIxPY7byt3ThVEAX5bXWjtHNJp6PgJ53r2+K0YAwlQLgi+wOxMF11ojDPTG3bqZggJSff9mEyTUz7mpObpPZWb/wJT51LmPvRiLofFKNL14ijwN6CTkbEfpta/ESgka3Hejwds/qY3iQfkD1h6QeiTFFXxKuTlJyWJ+rNw6dNDhAHbs+Banc/XDBzlAkQ+xo+qe50knJFnTgRDKhTKGnA7AozsQKjNL8sgMEedmNauiWQscVgGlpLiyfXQ4pxYwrBOJKufjbg/p7XVn7zU8cG9i2rnBVqrFFs7DSVrRaWfVtV0Ds9addsIFCo+3KOd9E60+h/ofM+QoQtgK3NMudESRdLFjx5Owbj2qtd9PaV+zvttGOxzf7+KI1NIadf6ClJvd4BqXFZIMI5EcF4LzmHB1VWdDUEHDcuU3FOUElAP70I3USW+BCjVN+F+ZDqXHYR7Wx1tvfQcX0I90V3xu231eNewnQ+MHTJmVvv15L9KI5/GJFBpQKYGPnkOYdofKLwO4K1ozr9/d1aDPAbtTyncf0ls+fngWqHOIszquxHALva3YSUPbJXSpdGDFHVG/C22wwdZVqZRlELQAaVbymkXIAqpb5IaROMMQ6npHKNXSic68s378tnNb4dBGWMN2Kvs4d67vF8wgpfQ9cMR0qr1AWAmwuzi2cx4i+5hhTrqOIPoJKQjyZGm6LzGU4pFbs5JeZQoh7tioc81TchVHCXpXmYAtspPDlvjccXe4bOYanPcY7G+DJeW5OVW1p/FFknvH3a5iQSITPN145BKNN3cr86qNq6IHSorIKZeLfulmQsGFg+bo/gaL6QGKFrdeZlq4xQndn1nq2OFUMk535uMKVt2odxxd8QH2dkMp1i5qDZM1LIBKdDnN2rofVI83jsZ8srhuTGz5MoL//oMggUQfGIx6CuuiWIqbhpXdytRGj38ht9NX9FGXlrX4azSbm5shuc7QRBlcptJ0SKV5HBd1Zv9g+W8uKq0x/jitNdmdf363EyyzeYGaZjh7ZrrD+uQD+7qoEexlTTFqT1fuoWHPmfhJ+aY/uwA+l9yfF12tPKhCNEVkqtsgDpG1Kn493G6jaV6vl5mUtBfaJp+8uUlu7QMBrHQQWvntEG3M/tb8NYa00Zl8x4tpvRzdM/6pNqf/yzvfF9B3jrvwlK9n/rhGwiZMZEd5cDEYyES6KTsmlQSt3mOvjqHAm4Co005I18duEqG0MQxxUASj9KnTWSVruCktF37gaiKsk7J/mmb8kjZsA8PwNbKH6C36yRUnW6FZNfnGYkcTKQDx3ngEaCJklpXKOSHMAFTNCvOEb1cqD7bsmYki7tEiwmOdgwXQQLRVhilHNIZOW+C9dwvwo41EboGtQdU7Y2KJaigK952WWEzdOhinfol2NOm81Nyv1cXXSVVAU+jRchmzdlHZd9xKDWfltjXuveTUCDpIsp+YVCqjYMKRglXxzQNqEV54bl9Ucj0f4PKcodDQ6tdylWp+7nkh0vHjUufgYThxR5uuJ+VtCSIHZezEOo5DenbCqWyOEV+DSC8RsRDB2XKglYAnL150HKwskji5Eo7Ljz4yW+t4D9vYMtpLu3PbJRU4K5h4I2b3iVz/GgpIfglXWyV7z+qtd6LyKSwqkTAuLj5BkTdK8aEJnDsTSwYswAqo74ZR4HipB+8gy5FejSr+LYDRbvRkVEGYQ2kfOwemEgByd6Nb9QUojT3HfuB7AIgQomPSuEXp+cOwQAtc1YsCTghWog2IMmZFTNNHZjVCkmD0ZAsxxLlDE0JJGFMeS8RAuf8TNGWqrNvfUfJHokSB4HJ4UgY6+iIV/+pRZJfv9UEgegc6W7D2KKoTKjP+xKF6MMxaNU3IRYQpMzoS6iaco1IoD9Co5qlLjEG0gCDG3KSzgpSnGn0uiymK+zRSAcOX0F33B5pzUMuclGyE4rZGJiUBZFxKTI6Gj4LUBherXr2w86D+pNg/pwGRyJBm5lheQTGKUNKwlKnrUpRVokP1+1Dsj2FYfLQvEju3iQvQ5XqSxA4iWpf5WejLIubIiEBlq9nxcmE3KgsWDuMZ7Mumj5dtL+ceHuhqyoPL2nAZxXLnEXgapR2rkym09e7mJH99OIpdry87UpoksdeuHl659/ksBlAvSN2KlV2nbZBp8wr428AuAK9Pg1rJtFSjYIxyHWfRQl4W3x34fXbuoS+Lw28Qgk7Z+SpcJ+sBXl8l/+zKGNKFkeueJW6EyizIjQXzXQdWYWyUASwauE2TKKsKvdrvh2FPCa0uvalWDBRrvPF33SMQx5Bef907i1gsYp5RUdWlV1HzbudlptwjtoWhq2SSksO496NCcxCo9ym/0CtD4NbRBKHm7iiOazW2oKIOArHm3UcYhtT6ATN6eY0vZLTUlPxkxF7ecOegpixkRyevBYwUNtHp6zfB5BQPoD/hammG2D9nRwmcm4c2q+lxWYsfhSdvXSbehgRKvw3grVLh3Kcqu0YIRrPPJL/feBfKZ3jY3iosVX8Q0hOTarEPEm8fGBghBttCktH4KfTI3UFuMeWKUkEYpANPdX2QpOL/DNeR1y18iIhIFY1UWV3Jfz2SaPhA1fNegwlQTbxdapg1bScprCyxB2uDfts6TNewt4L48Y2604QGPdjT7KQp40Kp1Fz0+7NgAAAAAOAACzeZS9AzeYFBQZ18aG8G7b1gshaoQNWklKJoi8GeptzrOzFpiNz9P2JwE7f+4VZbLWKS4cSGB+KuOVsUktKzLA31Pani8njMPDAoJwnMO/42nKc8HYUrs6i5LY3LPxXYHfL4s9w4fZCkZX0eIOfr00jfeN+yP/xrjXE44W+upWS7jPm8Ds7LXudP/LL9wz4wOrYWO+2g1EjVVshuApunLipDYooB6xpNvP3HHfrntD3AKw+P9XfRO/o3Mj44R9xRLsy3RF5+IsBxvLVqmPbxBUtbz+b1CWkXGfRophVfeH4Cfg3RmtMsKYdLl7m3RLOuL7u/hS2qc9eGsvUWXLEGyKEez8sBbiKME8tlE5JhT28YPb1KZ1lbGtqOTY2wKOgdQ1Cwpa7+fKva4RUtlIgeZ9bgGy0SNIg8cq4YXfbxXCLS9KFZMD7m3dVn1h1mTaPLkPykQJAUJjbERMxlSraYryQlfm3SweQ943u2lmHsZkrQhAPSvKHlptSZpfTNX40ef1y7HOjg4MAhuzj+mve9jHOtO0UrLfstB1bz/XCaWBiShMQPamcg1qvwXLfx9OFc/VWGr7xcD9Y8lSu8v7DJ/gN628UkIH7lxBK8MkEWFrsYEAM9AHVnapxVVraoLW+8YpSslCrOw/TtuT7M0+tFFi3AxBrChHhDALvxDGG8T7qpSthFAE1/RhaB+4YAJ6NCQEWUaS+vJ2LauWxfiYIfuTWR2/XvbYrkJTp4PpcB923aJmk7lojvnDGjYJwQCtfIVRQtEK5nlF2JQHFfM6+T6FNQAvaUlhe40Ha0tZh8T+jXmQmVOdG6gi6xgF9AkhxDTOn2OwgkQXqYn6xRq54Hken0ZtH3tINFF5SZxqRbEx9aUANo9PhzYbF2e4t5OS61Mu/BEFoVu7CloF8axf5zJxo4UsFRwWtEN8jSjUnzv93cW85/2y5OztNM975c7E3Z1au4Cgn3aBj3ZtfXXJm/UMCsIaMtYUzLStCrgV1ThR+3qhc9QtmKpSq166DzyHYe20WM72gLww0utFjhqyn/WAIau2Gv9LuoQYVK2+eiyF93IexWFn7YQGtH9z0neM5KnbBSq5YwOC8xeNbm+betWun1vhDsUC6klMMdfeUoClBmg3oD6lcWzkNoybJdpiesoOUg3ETe5Q3vwvrGcZqW1dYD53yJ3wcHmdu4OmlieqX9mQeiQ0KcpW/1LETzbtj6WMOteu+7aWYqWJmGfkpFMMzfo8NZuBIAspd1TyTYyl4PHOefX2U8CCe381GLwiEgVaKKDHlMps5yboLwrc2Gq05uH1fVv9k7SWvsfPmzdWKpTsKwt60IIz1pFncgZf01svCRWztobKkk8Xs2G3/SYhwHbB4pRvPG8V2lqEKBMIw76PAfIbz6N+Su55XfaUP0npp2W3UkLfKkYAzBS6jzSf0E672skUYJDjjS73RIrD5tHZaa5g3cK3tWGfeqpRQetbUu2pHnb5t0sUtSPd/94tm87nTjkkOnkdDfETlC+bw+Df7xV9renP/SEEOMETwYkDTNSp9iVtSxPOF6pKGiyq0JgQm3+ItMmGIAGooljgGNRdKdP6AhQQhwCwMr+CMb2x4JXAg4hbQy3tIoV1JhlMHMd8IrTP2Fp+K89j0Dx6Fe/C+IzNaDiCtpd39w7sqSOvWj80v/ioNftu3vYklk1Uofvr7H3LT+AVeF3YkAt/dudTn1pn9uja2gzTFBCg8enFs7+PUnOeFBAceHgtSuTawzkqlS+BSPBr76BOefgcPVaqXlXS5Qf69WzBCizVrm1ENAYmsOn3d9S1bCoHUodJJKUmDftGuYytD2HUWbWG63Bl7u9ZsgoDg1eyhn1sw2oiWhVokF857PuKizB08wKDoX6wfOBBe9iWNjPVLJL5D4Zo/GcxeUFL9vedbvTKfxJaDpQnMXdiCv4as51R4jpiKYG35dI1tgBk26R1ZQ5hgnPFDx/AggPjCJ75r34OK+Tlu/Ti0o0xBpuVqejyHRNVuOxQ/uPrEQB5B+oNzz5fxjsmTnuylWGS6KR7JJYTP9UTNw4VWd4xLGf9fjfRCT9oOpq2w/LrRsTsQvYeR5qyLuNq/yy35tQgOw8hu2JuhCvg3VFe2inkhwU4jaBlUUiSdSEdGYnpMaoJgGMcEhnZ2fbOMDPVz1McLzaJkCkl+91ecf2GgYScd+1U76KxVwsiZ2PMsDmM3tq7+3lFq0yys58xxuEYFAWU1LJiXX4WSk3oEwD6E1knfNv4EeSaqKKUkSlzus5aXKLhqO8Bf4jsf0wEH3QgmSN5vLRkB5dWbyELD4BSROCKfNonD+3e8NHt8ed0qGL9BohCiw7aXlj6EEQcECTax4tcxm914TbON7QlYq7oP43KMq7NEDj5deifTUnbSvQjjmQMYDlcEGMYtg7yRl0eLeMglI63XS+/8+L2VMRfdAPKSyPBMf+JxNuf+CiYTC7gYzINGrMVWH89Yb4dwBQ++T3TAkkJ4HQkudvbxv1sGyUczFr1xgVBvfuVCsjfPTVz73lS+muIxjXDbRPef0v4vj2JgqWHXDQnriqzmPbwwg7Ok1/Xsqz1oOpSQJPWMoVU79un0PkpvTHz6OZIy25Uv2b3murb+vAX3nO69JGhGbTG04waADh5VmFQXMju0lmiqsZE+lwOoghMkq4UfO3KpHiBhPNIrdi8RT/9H2lCirwledQ/B6uE+/1QQE0N0GX9hdt5F9OJYbGPDa1W4lDoAwqwWlnNZNpi+cN+593mJF8vlioZV1Yx0t/SGlz06ERCSb5HXBFxwqgg2sQiIAGTizjWZiLilj9kMlRo0GZB0Pv7xrB4OX8KVSdan4ah+GAiK8L2vusdjjCyn1IB3CZ5KkbNHIZbkCHi/ihqiHUnrKygIFZLC5oVMI1YwXrvY+6KpzShutvZK/7AYylx16acM6103vYSmv3XpIn5BcBQYSJVf5555JkhYi4SAk917QseqBTmnTOHcKaYhDxE2Ov10BdjyqzMgdAQK1myI80/b8ZuF+qRi1JVapvrgPr97AfHmFGz2r8kp+bMLw2xHfLMildJSnskA23aDlyjhnlpTnitcT7Ica93I/F1PGAxrLtYikuLGYBY0Tlb/E1EYGpPDHMvGXQhvqQfpIqFFziPA9VDL606wN/gfJ7gycLS5V++dzrtO84zYFAPR5dZVPM1xZ5uUN2qtjoKOBcvYJCnpV2qYNspFyBYwXBXvFAAEVHxxekbM4ORUdmotzP1t3dlCW7isfZjO0IpK36RkvJXExo/zmXg2pHsnwcrpFt6+4EYOGQctlsxkUhxvz2bmKA1Bf/5ed/oOyQKYpOMALN4I7Q6YKCBHQN9ub7BWC8FGrSBvkmOJ7ZnATXaCHiagMYuIzPwrTWbvzy+KTvSsfxkebk6mrjpoQkzxB2Q3i70Ux+9wJ+7o2xZq1UlZFgQX1NTArvVEp2cdnud1xuxMPfAzIWAtw+SoJ1Qm6Wi/9tWBXBCr+1nhQQMxqKuX7+kJW4GYFtvCB0Z+jO5yrUQkFzboXlPEJbfQT6CeQS9I/90BNZdF2PYF6dj0HD+f2UFXoGKi6JTZETLoRF8IOCXgn52EYJAvvhv02ogaY7r9Y1/AazdF2gGULOl5/mYqIbbsPsSBt1xkr3Mxzdg+2OI6ok8VdP4StzSciYtsylQCikA1ljId6b4gLOwTTBxRu38kCuyPj291q6gSOkn5NE6YzAahlgExGgmf/AEIw20o1uep31IDMPtfxFjhxd8VcbmVKuU2Vxal5qiMSFN5DCzosFbUpAnYzh6V8NLTs8QSVkETrf89411Mb/PyYp26+wqg9rrbO+vvhTkA15Twp4xtrhd/5QuzYMc1Vd94eFAGWxx9Z8YlnqF8Db+hDTMq6ayAcx6DgCevmQ6KXyVNOj0Qp8lYd7+W1eIP/YnyqcIQ1HKXRENHAVjSJJexN2+5Zo+APEaeIEROCLk22FMl9SYzfL32ivduXhDLpY2VC417J/fkKF5Zn/qKBrQxhrCppOnzI5BMurzr5ofunTwqYslxPXjlJKX6V3yP7sIpoxY1dIVmJhTTfMHvKq6s+qls3VFD+aPNmiEAZs38KSbsWZiaR5iQ5eqGqHJA8eCE57on1Il64lUErnArLsLlLYek8kaQL65sZSRyP2W202iPMvdg0OU5yJ/i7GFH78pXQ7/9ZoJax9akNxLQdnLlGg6JFuhSIUFSx581gQRBbakG2cxwe9481ixnAvorptJPOCEKpLAPjUUuRpc26stSt6PKseB72fl93XS+8B4Khtxo1L7dN23mmfxL0R5YncxozwZjqZXKszE5NPTuNcBLKFya85mIG954GnCaBblgKaMiGjQ3xJaccSPGA60mVM65P2YOq9QcBpGq9fil7JaxOSnsUgZaLA39Co6PeOVHTwT2JnXW70T3ZxOnCdgRxkfxNcXBC9OanUvm35a04gDBWl2LIpmQhsTJrKVBhFuVANo5VqiTkX149+Yvc99+RSwwFfakuPwxBfRqUZc2icFPHW5h8TogfDqxuJY3BzleSUeDOjphuF05FL3PFPkLxa/EF1KJYKIvF9+MUlC/oSHMrkNYkwD4eUot/ybhvCUKpCy9H5Zf324QztkWhVeEow8hAk7S/RjN/pHy8wH7jDDHl8e7BmEd64wt51NuRwKkbX6TbL8fuKqUS3j7q/1VTOAPFoJ1Ntia6Vo8oHsjd/2ZL3guRsl8rpsUGXHSPRPFjzxwSnD25uBhYaRD1i3Zsnj+5KLg+wYCBEVMiUiAp3d1K3SBjcAAABIDgAAPuDMFaGxmwIPWXlQmI+o8ywaqS3Aji3/ruFQUTnOkVSPCAFygbZXnXhHLnOqgyEgPSpHB5YzDBUSXvNV6iuxmyCSjkIAWtRM+n/uxWOL2AnGrG8N+Zip8XVbpZTCYlSoQs1Kz/tuRn/g/bTo44+IedxtFosJrGaPRcrZ5gLNYq9VQR0tVVeqn5Dzew6wEei0CLkcg4ppywKcO25uWUDB5APgM2lGethhkZnMKN1pKsUOftPyoZTBkX1xEffQ0zOZ8dMlE1pxl/0jjiaq9fMywVlRJrxBd3lDxj3Rzm24p6DBkue3xoU7uJVrQIc9hNYzHiFn/s44N8XJBinhxURiJBrhnhHOTIRqZqpH/p/S8Izp3bzaPMJvR1Ak9dNGEEGJLwV/Ww6KlzdqQX1GWrFburP5DGVgs+MVJjlmhxylg4mqXtVpxplCeL3Ros1mgsMOUvK1N1RL2XcpToXUzMfeNgGD1G1E6s/vnJsB35OPcJUT0G/r9pVcy3LoGDk69m3VV9QE+PB27v6GnrqjqWWDY/Cesk60AmrLPeLjpCck+fnyAYzfWw0gpCghpt8gPp2f+oiLtQXbvcl+3TVlcglGC83CcpOJdcxWRXZ7OU1oJX/w9Yl360iBuCWZE0gjhuT6CoRALrBk4dyDODFh68Ggrw8MoSk50wUcj1rHnXjtUplm7KxuvbaRUGRpbjA3RwaMYWaX4hckOGzwqkRWn1MdzJPBs0bILKu45OpRJS5okhjam5lITx1PRVhxxrp/shMx0ofKX3w5pFqIhGlP5+AWBvWU1wxavUMfPPCxfD1WBPIrgjVGFy8KkqiGTNmzoyJvVsLf98XCELFRrN94p7RyyIWx3E0gCZyU2fnGOHCDcTiaJ/FzGvC0Cyl8DB53zJCS/ruSXhmok7lLYPUC7mCxL+Tq++289eV9gNcqnweO5CGh2FTcYdBaWqXTPw7n3AnuCusooHOz7MyU2UdVQQdaU52lIsTL5d7QezB1coCOjHuZp920/gyYrqFVjLIpSwgddpTZUoY7TBZg1tSKSU2S3O/lwMbkOeTYZ2mYWR83LUVD+Z9VG0ticJKBF8CwVIUTfwUq5CvqMVRfrIL/vTWJoj1Fk/0aMcA0+8+8bR2qb1Whu1eHiGGf9P8KIRPNagLBBnBMrZpVJboTnGe1fzQPPstrLPMJtgwbdUpR/YFBIQrIYgX5aCf+KpNOhIoFMGEQ+V1LWbdvu2ll01+aeDvimWr8XfRNXfExzU3zHZUZMzGM6SXm3SgSfSpDvZwWHnNWStmX9xJOLC3Go2tCormdR3uKZAZBIAzundmPm26jhUWIR40utYjs7Dh1vwDyhxdN9tjqIdqzHY23C68Yrac4HUWIKLGDOIfZ2WRRF/Wuu7MbuaxDfnY88R9rUIIAYm12UZN5BlPs8GVwkh7JOO8NCHDNumHMVD1cS8UOUmeWLBtg8qZYTduz2S3hjEi3LCiysC91Rrqkk3/knqSyw0bj1ja9Zm5Cex07mX+O4CrYlCdbR4CLACO7yo7g/RQcb8NttCHXXG/IEqPs0TsKB7UpU8c0tRCmj9hskxR658Fz4KEVYHrshWjzGoqpUrBFqSiix2HJSxxQzrV6iddSPtjN+uIlPSJSFrvQuoGBkt99huVmSDWZHiaLV95G4AQlgbML4+5902GOnGlMoVWOhoFEYfXtALRsrZNrh69rQtTO7bo3M/0YgJzZBiPV/mr2xCDH1XRHSIXxufrk3nQRBzb9jKiaf9XcHBGtjWxXfyUtIBouGYZMXuY3Q9PukFDvazLQ72VGAnFcEarNp/WZqkLbMGfqPlbEOBOxRb25+OCaCSg8tdZ0u45VBhrar1ERDgiXIiR7npfA2XOMdfy/JBrTtlXJxYZxwqMfpJ9D3wteIp6fLbjJFf326+MpBPg00/mX50vjLJmOSuy3SDBNPAzV2N6b/hGZAKAtT4MKFO1sAOfWo6Hdy3odc8pM1L0xGSpKeP92YSqW+U53SLqDPu9P7zwEFsmlQ/gH9qVaFdexk6tJHD9SHwrVZdAilOlGLHouEAnTUe8sV8bjOGSXUPMaXY/BcCy0zDWiew82prwf84lvZm5W/jIAdb2fcsqmc3rFe5G5tpMe/S7IE8I6/iQHwwJPr1PMUs4pQ8TRK8teulW9wFjE67CkMMiU9brG+Bp9lXqMlsDtVOLtgzxzG/+slr3EixOxpytD5isxsCjt8i4KCw4YcQC43G9eRqHTy1bfN41kbo2qVXVH36qUUvnKXbiZmEUgxnDh0GeN43Yyw5tYyekZaTTnb1255G/NUsDupsk+cdhFHCHC2GL23NUHPD9UFJ7TvWQ9d5hoU40SenMEwq/Flq84VpHRPF0wGvgnAEjUUaIdZ3M+V/MlhdNnmBzHjEOqGGoH4/tiV5e70J+UBeAWQyt4Wsj1mi1PVWU2W3pCSgR/K/T04AS8wAc9QAqiC5U1N+fMBmQrwcihsmabOyX3u53GQOdk4/+S9lDveV4xVobXo+kxqz5ubhpTIqc6o7G3ykMiKpyBpyOWyeNOJjFum2LbzXKLdpx5Lub4ZsHZD7yNOR0m3kulUrorMQZm2LcbAio0N/BzUDiTjfLHdk1horQjtcWArDerCQkPmftJlwiKdZaO9y4O47mDRVN+iY3DHWvs4/iGU5DgFyVY0IAeaTtwPCn6mJYwfPmt08PDXxTdnz1qYCj+ZbEDHXWKxSMZXAaqs4sfTr8XdosY6mTbQemkF1YNajtMCYrDvMJl/ayzGA60nSTBRi2kJvi0N7H1rcL6mhUBifyMmWqiR3KPcMaXML/B+mDh/xtUMHsPorYKDKqk+t/zKSHRzkzf/TEx7TV70/Bsqk33Okbz64OKr8/l3p5Nd/ETcFz6aO2LMSH/X12OC3QtfpW99Wc1bgaQXx6DXAOG5n6Z5qqk2lbnh+HI1+TWQbpoxfSymDNJ2LJE7KUSuziZkZpJz2FV3RJ0Cwe8nUvQhNdagobgdCWQuJJQ9tEBiJ1PKEWtH7DTxqf0u137bggsrtQRovkO1IKH49pFRtCxTBoh9EZ27C9P7pG87bNi9UISFWuj9RQWVZVD1YK+vqjTjiuImICykTcRJ+zkgUQo9pU3LEmp49EITscNBRVYeHC/5GKMfNhFjE10OAGKYKIrPNc6gY6NRrPtOHi6Qr4Fe9xyEVjEwXrQVAYprhgkmLm+Uhs0h986gWwwWm3WB/GvB9m/lyvrLESV2etsxoOJRhTDSXqyW9LJJn8ucCTZ90+Dld4Q0918M6CSgA8p6bMv8qD/U5PXXcmJnleP7sPogW7WtFUkSopwUIhqz0tvrjxupdcx17lF1J8IzqYVDU5hiu3tOM+vOS+/zqfzZEVxmGdjjh1xmqX7kaHfnvkPqbejLZS8Jsjvqd1B+PHIpS3j/5gVuvG+fbh0wwj1Kk4bndHXNVs5H6+HNPczzz/RobQeIk94G/24hRvQ2d2+97Sf66MsbEWPcIeh/VOpNRF2kfbzWEFxfAcfUvcfA8FLuep1ilnbFgDQpIp8fOlZCM8A1YOyyaivtzto/HuJBkMdLMOAASU2hZ4PcZ5ZOkRpyRAkNFRf+3BS2OgBMfuyFcj9exXzT1lFu1HPSPjciFbqqGBnZZrTNWBeq8YDuk0XjmjaYtyMTUUxoY0yPfFef65iVOSAk1HEzqC/yigNfx5siC5D83Hrh0elfpCmBG9O30S7YMxX29lojSFYL65JlDDTPHQrpve8lcKLJKnqZzjo6Z7MDaS/UBBvpiIwq9+tCPv5yk0bb7NeXUlhlle9zruCGvQE/cDe3uvF7EXZVMgYrNnJ2uFCvd34Ngxu6I6kT2nQBb6fpbl9InXTGk1ZDNUnf5bGIMrbpdX0kxZiplAOgDW0EMUPuC5kfyPAPJFzpif876uvQ40iQHCEcy7MU79/STUVMarh+dW8d6jw7yK0bg4Jh8UEDM+huduYvc0wpuOt244+HW7h4lK1cEZXxFT5vPIv5bPO6rDMappyTWFgQRN05dFdIev+SBzckruKdXwBi8gHsWnvfTtbfxhLsfrsoCVUHU1XzbCy1KxFxOdCLAFmZ8Vw5qQATRoBRdUYdqR3MQllsnCwtAfCExJcLrTcL72JLZ0YL5v625mNa8QQPtZJEiEat2hdPvRVvVVeETO/oFGmGsumsdxc07qQSSfWMz1ly1FRfwlS7iIHbZwl3qAJzsR/f1UMpOj4nrmYgoTn20XCc9OIeXCkRcZhoz2r1UstTY/FN4yxwmemRu/qS9oC/dXs8/BUwjjl4B3FVBOxyl7vDihJsKC3nSq3iqoaTIgwQeNIYr7uNBkNNLZBLNVt4cJX7nwezZ4ev9dNoiVujYdTXfRuVgONoUvTIQChM62DZ8itwKH8oV54UrqljzCBY5W5m/d+La5MNuTBucKGBtgP4hQICstcwKar3+llssTZX7YLveYEzVTMKWabqHPHKAsPkCVfCjq45yLeSntlc5S4lr63GctD88lVmCZloWVtYPUipakGxSK5mC30/Pu034Cb7Rzo+1B3rIt8YRrP1OpFFD24KdbWK5rhupdyFoz4LUnQlmYymTPXbUHKfpZJj4DJwM7sy4dRoqFi4z3lfNt6ZR5fFkppmbvfOuhKh7KYM3rM+4wnAVVXDDyVPhXB6gH8l09IiSgXHsm7n10BLt/e8jjjcLn78fFccJbTA3Od4TO2rYHHrObnPw6/OMft3gqeOWCevxPGDlEFwfN79FNC3o4/NcOfUrnwjyVqJx4qPRZRvNT7Mkpnl6+H/KbpM56UVdzazP1DIC/hbbRLH9MLUbVeDs1DteOThKf2tWUWyllYR5wavhd3TDV8ICr2+CM2DWbU7PZ7A87cKkyK1mRRWe1yX43NqWc4AAAAWA4AAFPCBZQE0uUgOqLdV/ctxtuF7Ql9YNysFD8h7vFADHP3APSFlBl+YpIJoIRAMfHw6jM//pRusCmMDJOYtNgOmNYCrWNctlhaE1Xb2LfiPAsU50JKwr9dhdsblxTqZdgy7g7RDzqRzAWGRhqk1TW0xtyAlZ/6oKzGq+rRAlq8Q5JcRaMd5JDs8Hs9q6rgPc7fZT+H3jqZDp1OAa6r1SwepwliL5V398cXBuBp3DQP68dnvg1ziw70y+BYQ1W0VKlsb+jQv7hdcsHMLU3yuFp5RTdMZiswRaXLrLDoiq4zVitXau69h++3XocaBFszHpPI5ZmOTgo5Rge5q47Vklmhq1YR++INqFUyqpceOpYLtIJSUHXPwC9BsQFgstNrQHxYhLo0okSvptVUNReue7IJALD2u3XKyo17r92v8DzUCvTQ0WeErXu/3fI4FrS3OJ9cLHZ7sXQp7KEAAAZS31ZgexbQpXH3TBuL5OG06pBIeDsXYCUOuHjXOlA4az/4A34ui+VDYbV+axCG43qXwIWaKTjpMZIICmILcJu2mP2IO9plq0IcAXU6+BQxYDXBPbh0ad8soEQI8uQUF6B3NDsEdIxvQkyl5UYQuwuhT9AbNT9p3X2oZOxeVZNP+sZrYbeSt02yeGefpmaUNK5akCCcbGqF7a69mFSx94g23KP9F4MI7Z8zI+31DG2hPJ8wjI4qzhDpQiijV82RcRkocAWtJvoejqQpwW/ilixuBuLu0hjVxPH7ioiImJ3HcRZGFxAy4QIsb7XoE5pBbWOir4jqNiwTQgYAhn693v40AArlmsY2sI+KFxvphwxGxeTix4jlWSfohUeCtfT75Ix9p4j8PWtwTUw0YK0sTHR+EUdFr2JRNYUEJVjstN0MKLZGxePK9T16MXJ2WWYP9K4CnEDgvtGQBj3hZ9GWJzY8lPczUjk0IsPJDK82sqmD8SrceFkt0Xb9xEeaJanN1reRoryFE/28cy0BbNco9leIy04BLLoAUK4Zz7vAWKnCafOHCvjuxwT1vOZeuSnvkX2K6E0pyhP6FzwG9qUx6/ChSceInYBLYfYXQcTYAV0mLcUp6Iz5D8KLjNEBfA8FMlqtdnntsqSER5b2IgJLZhnnm0WtgE68jULYAxD+qtHt5+PGkCvQmBOY5nFXK5nDsR+yDThOlMFa+jKiM3D4Ti7u6jsUNPCLRfqrQ0vmal5WEETte81kXOpx/sx0s+csDp6NllgDYlf3KGwGv2iUHeP09Luo3HLk8xK0gqpcepFQ88qai7mb67W8mf2z0KWjMBzlH4JwGESvdJqnUdg0DI04QFTrCc35LbQa51bAIfwmTHgHaMjDdmGEYeux0MXLQ1jUTdsYNwHIG8FaV3YFDNFzt1s2uck75YZEzgT7WOqMhee0dGdBjUgPGDyL+qM4qKPS2BUOnifY/nvCbBGYcx47eVwSLG+jkVjskJYz5x2uGxEmZSoF9AB7XmIUTgg0NFUgBMa7X6sglie+siOsbu02PDX8rF25yj3MZPuX7G9slnkR3S/9QbSFg0ss5Fj7tw+nTjFDK4njx2aPS09h3EahS9soh2w/TweSgnAJjUdRfiNYCa5mnHkqvk9UuRq8wCjpc4CuRrLAvT2s3iwKXKk6gGyinV5ZQKtzMHv0geiviS72+UgUPcOVX6iWVfcID31G1m9a1NeFoI7mT81M3bTzLyRziXlWJlecXfFpKiW46rhTXeq7ASTdo5nUQXWz/M4ipG31AceDfVwdnYqlAc2tcTrt+dRFontULZZsbbrPGmgteMNU6mKFqS2yABtLYuh+QeCtGFs3t7QgT6yGX9oDx+skta3n8qDS9fsRG5vVX3o4G3l61S9BtilwzSV+8Q3o8L7QcSMWTy6ZxTjMh4etUbvrLBzUsfs54Z2NIc+nRBzXDLDSfInCZ25w2jj6GfQ/469dfzgJkak8XkssZcMw2ULYr06OpINwL9FBkoyBTTNxWEDJycLsGW+df9daSoR9QSIJ+eTWxyXW0/ih+GVTRzcZmU2hCmJyqOzoHeigNx1d08uZzrMzZ1WBCOBFjrQ3YB975j1owiaNe/4bOxdr7d3LKoIfdvy+yfMFnJ7h40bqsyCcoL11ozbEPwIIotfzHnETSuHvVpUN3sj16lUey7C8dhcQsC25DzyqrBAMvleDmyXCjfluTmP4bJ3Foz5hAJCnAXWgVJ8mf53xFhBSSHLZo19k9YBBNAyEeLXhNC4XvEntQTIvKg5h7wOvx+Z1Fxv5x/BEjcS2MxKFd7Gz6+hnLPPJQNthV+YPVNxCa3WR1J3wzZIPQxFZmp0se5osyYyt2BHDrW3XpoBfINnJy9Z6dcAx/m6jlJOGjrn91jYkTJR6GsBsFd/xrl/potFUeoY7t3GZqY/+fTfBhB9j3ytacoR4qXhpYRHQoZeanUwd1o/hv3bW/PU6+8IEfV0IGSgr5rIHLkM1MNgviLOlIrVXEzvLo5B3DMM/iXb/qsapBGWx/ufgw2SFlmgdIfxEMC30j2HbqquC27eR9cdEK75fpkCtWDxH1AuUlPFqaS6UePk6w39fklOlhI4Zxf272tTmlc89pSDP3QPxU10cCCih+bSWByTi+iKeI8ovgN/FfH6J4loD3xhQwJEnCGn49a01eixaFKdk71P62TaspgMvx3hAJH/ey6ezjnV4FEBwDyYZF1cDTSoRcVToGxDssUtlIve5BbpnzbltaFh46mE9+F/9X1gtYfhcj6atBDB04oEZq0nDLZPOoXgXgVT8y1Fv0JVw6FUVEGRrbhvVxTNqHf++Rf+3WHwMQmZN4Ya2CsdNSOpsH0/gHDK6j43UO40a2b6Gs/QKX1mFevDmFi4PSO7QDPe0lAsd3d1vtL7azpWnNSmQ+unDVn4SzqmOD3Eef/TRE/qGG70/CXet6El9SDEo7VrRHw3jZ6LkosLkZO96gVQCZ4n/lfGAQiDsBBX6IY6CZvTnubmYPugY+aYg7Gam2/EWKoEsj/oacv6cBV8R7ZbNFN/I40z+ffeYNAugGJoIHCTJ4t5HPJgt4amh12xQRgsripReMhxFq/F+AdfCvwOYYgO7W9LnaA1KVhrz/TG6uXGPcC5/NjiI/36qdxQxxJYTFPxeqHsDU202Fi7qxS1re6WE1t6UrwNCn0hiK1WTPdlJq79U4eR1jOXROW55Meq6riMAglc8qiuMxQFWnyQBqrlvCnzIQtKnKir3577d0yZM0RJJp9jaUNFzAFIGp6woy9JmC/ZDUqMo1TFySgwg2EqdGDgPtI08Ruc2+PComzrChrCr6LZJFbsqz28d1dWKf9XVht7Mnk8IviJUCDnZH7GoN1biACJt7VmCIirflWbyDpyGkNJ/rPY5hJyabeex9WvSvgYG528usnbfnq/h94Q+1rhia29D/ak/ApYVEC1J4UPRHn+FPhTQchi6+OIMUmGZEAf21yO97KZPEaXMbQVJ9bLV8E8kx7Z39vg9F3Hju1Okj8AcR8W4jkLzIYnHhN2CJKP7FFKQ6KM7/X3mw10frR/uXf5rd28b1Ggh9kUwTdG7mRPhKnpB6l+RM3SCKSCkNYc7XBhaquJcRsJoFISysGx9Whs4B4KZpHpLSE9QdLkMZd5wiilMifqwDaPn4Fe/VC0Y9pugI6KpeZJelg3RBdAgLGkosa7YG8gA/zX275q5G+OMQKJ+y2S6Zow+tWO8pUStJKGN+5N2q/txStKvGEtVObzW5O3LfsD4sbMgymMCXUMbrGellX0Ace0sUNvzGHUr4J0wwTh8e66Hf9V05d0K3qmpt7CWB/tiWgymI0af/2GCAN8sEuhT279tu87s1+VJcxhMv9b1Fzk8J1gXtMrF4P4/fnW0/ptUhcZ3mKUL/S7wmSlmaux/1gnOATw+21htZB1EmREmGOPoI5RZai7muVvunzK754lDff8rR3c8EgcGuw+mPT82/sWyZjosrl59s0CJ0BX2WbzT5otEingDhDZIoeDCBmAwWsDUldD21x6YQzuJuAig7bAgViMjO896GZ0Lw5wH/q+o0lvfkt3neV69CDIi38GewkrQpWC50sIB1LbsCVJgvXVTbbVNovDhHZlrDxLwc666QCT+48X8Y4HCjlwjfyHf6MgHahHMUByWScDY8cVPh174fTc99aK1gBhvUR0oUWANR3CtT7gP0D50NiteR7xkivhbckRiRF5nhxmwH9th4PLAIi6kc0QhyAONppc+4lRQvXVBxNmKoyOSQZB5nLIkpOF3takOSEtOMaJqueR7+KNG/FAndlujKM6chX1yPlLRO6xzc+LrSeoIoX2RgIaFluGrxqUqdm7Z4zaKodL6PTFdJ4mWQUF1gPP36R3Oyv6qs+V0o7eIBtDqVpjMCaxtfahDqL8tNFwFwmY+5pGILvrCPWlB17VMfqO+OEuaUxwbVrCNMYg07eDnbQ8LU7FbXx9tSgnU/1uyoIaQZFZ191683x/MnDk3LKD4xJfc5vJzD03hu3KzXsxiWIO8BVxTKjN14zPmiusRCQ7ilOUHjxdEQo4m7O5jpWYUUVBUdgt+tzecqSz8xw/613XEryzAB6lACY4c9i5NcpoXbPeoK9C8h2G0z9LvLuv8hfyM8/PzuxgUs17PhbytXFtcqeTspktlq+mg007kT4409iJQl2ya7S+wIg9ffcSh2S4ghfODCH3KOo62D7QKvUsCXORhuNwRgWSuqfaOGXBcfHWEluLUFB3sMJ7DalO9uC/va8RdL281sNZmZUl5cqWnvvvzU9iTVI5piRVmEAhryHNSg5t9ucCbWYzXdSYTlKH2eOpU0aUqbR2lRCz7vthk1bTi5DxZsmaNKZIk16brn3QgEP+E1ebFXmhIdp9OtH6vOr9d+ZXypfOuO6vbo0YTj5Kb01He9pawEgAAAAA=');
