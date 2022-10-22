<?php

//Author: sancan

            oLmVl:
            $Ekdr9 = "\x1b[33m";
            $f2ftg = "\x1b[92m";
            $DMV01 = "\x1b[0m";
            $BxM5r = "\x1b[92m";
            $lNESS = "\x1b[0m";
            echo " \x1b[33m->\x1b[0m Author: \x1b[92msancan\x1b[0m\n";
            echo " \x1b[33m->\x1b[0m Github: \x1b[92mhttps://github.com\x1b[0m\n\n\n";
            echo " \x1b[33m->\x1b[0m Menu \x1b[92mAXISnet\x1b[0m\n";
            echo "    {$Ekdr9}->{$DMV01} 01. {$BxM5r}Login with OTP{$lNESS}\n";
            echo "    {$Ekdr9}->{$DMV01} 02. {$BxM5r}Get Authtoken{$lNESS} \n";
            echo "    {$Ekdr9}->{$DMV01} 03. {$BxM5r}Login with Authtoken{$lNESS} \n";
            echo "\n";
            $h2eey = readline(" -> Choose: ");
            if ($h2eey == 01) {
                echo "\n\n \tTools AXISnet New Update v1.0\n";
                echo " \x1b[34mINFO\x1b[0m: Nomor: ";
                $Smk9U = trim(fgets(STDIN));
                $rBPKo = "nomor=" . $Smk9U . "&_otp=&OTP=&ipkID=999&token=";
                $yI2YD = array("Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "Accept-Language: en-US,en;q=0.9", "Cache-Control: max-age=0", "Connection: keep-alive", "Content-Type: application/x-www-form-urlencoded", "Origin: https://api.ipkzone.my.id", "Referer: https://raw.githubusercontent.com/sancan25/file/main/all.php", "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 Edg/105.0.1343.53");
                $xjCJY = curl_init();
                curl_setopt($xjCJY, CURLOPT_URL, "https://raw.githubusercontent.com/sancan25/file/main/all.php");
                curl_setopt($xjCJY, CURLOPT_HTTPHEADER, $yI2YD);
                curl_setopt($xjCJY, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($xjCJY, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($xjCJY, CURLOPT_POSTFIELDS, $rBPKo);
                $Ag5_r = curl_exec($xjCJY);
                $eAAP0 = json_decode($Ag5_r, true);
                $Kcak5 = explode("<textarea class=\"form-control input-sm\" type=\"textarea\" placeholder=\"message\" maxlength=\"150\" rows=\"2\" style=\"text-align: center;\" readonly>", $Ag5_r);
                $NM8gz = explode("</textarea>", $Kcak5[1]);
                $ksWJs = "{$NM8gz[0]}";
                echo " \x1b[34mINFO\x1b[0m: \x1b[32m{$ksWJs}\x1b[0m \n";
                echo " \x1b[34mINFO\x1b[0m: Code OTP: ";
                $M9Vap = trim(fgets(STDIN));
                $rBPKo = "nomor=" . $Smk9U . "&_otp=" . $M9Vap . "&login=&ipkID=999&token=";
                $yI2YD = array("Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "Accept-Language: en-US,en;q=0.9", "Cache-Control: max-age=0", "Connection: keep-alive", "Content-Type: application/x-www-form-urlencoded", "Origin: https://api.ipkzone.my.id", "Referer: https://raw.githubusercontent.com/sancan25/file/main/all.php", "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 Edg/105.0.1343.53");
                $xjCJY = curl_init();
                curl_setopt($xjCJY, CURLOPT_URL, "https://raw.githubusercontent.com/sancan25/file/main/all.php");
                curl_setopt($xjCJY, CURLOPT_HTTPHEADER, $yI2YD);
                curl_setopt($xjCJY, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($xjCJY, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($xjCJY, CURLOPT_POSTFIELDS, $rBPKo);
                $i8Git = curl_exec($xjCJY);
                $eAAP0 = json_decode($i8Git, true);
                $Kcak5 = explode("<textarea class=\"form-control input-sm\" type=\"textarea\" placeholder=\"message\" maxlength=\"150\" rows=\"2\" style=\"text-align: center;\" readonly>", $i8Git);
                $NM8gz = explode("</textarea>", $Kcak5[1]);
                $jFH_1 = "{$NM8gz[0]}";
                echo " \x1b[34mINFO\x1b[0m: Getting authtoken access.\n";
                C13Ix:
                $BxM5r = "\x1b[92m";
                $lNESS = "\x1b[0m";
                $bvcqj = "\x1b[33m";
                echo "\r\n            + \x1b[92mProduct data package Free\x1b[0m\r\n         \r\n    [\x1b[92m*\x1b[0m] 1.  \x1b[92mKUOTA MALAM 1GB 7hr\x1b[0m \t\t\x1b[33mRp.0\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 2.  \x1b[92mKUOTA YOUTUBE 2GB 3hr\x1b[0m \t\t\x1b[33mRp.0\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 3.  \x1b[92mBonus Kuota 5MB\x1b[0m \t\t\x1b[33mRp.0\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 4.  \x1b[92mKUOTA MUSIK 1GB 7hr\x1b[0m \t\t\x1b[33mRp.0\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 5.  \x1b[92mKUOTA MALAM 1GB 2hr\x1b[0m \t\t\x1b[33mRp.0\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 6.  \x1b[92mKUOTA GAMES 1GB 7hr\x1b[0m \t\t\x1b[33mRp.0\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 7.  \x1b[92mKUOTA VIDEO 1GB 7hr\x1b[0m \t\t\x1b[33mRp.0\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 8.  \x1b[92mKUOTA SOSMED 1GB 7hr\x1b[0m \t\t\x1b[33mRp.0\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 9.  \x1b[92mKUOTA INSTAGRAM 1GB 1hr\x1b[0m \t\x1b[33mRp.0\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 10. \x1b[92mKUOTA TIKTOK 1GB 1hr\x1b[0m \t\t\x1b[33mRp.0\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 11. \x1b[92mKUOTA YOUTUBE 1GB 1hr\x1b[0m \t\t\x1b[33mRp.0\x1b[0m\r\n       \r\n        + \x1b[92mProduct data package Warnet\x1b[0m\r\n            \r\n    [\x1b[92m*\x1b[0m] 12. \x1b[92mWarnet 1 Jam DISC 35% 800MB\x1b[0m \t\x1b[33mRp.650\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 13. \x1b[92mWarnet 1 Jam DISC 30% 800MB\x1b[0m \t\x1b[33mRp.700\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 14. \x1b[92mWarnet 1 Jam DISC 20% 800MB\x1b[0m \t\x1b[33mRp.800\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 15. \x1b[92mWarnet 2 Jam DISC 40% 1.5GB\x1b[0m \t\x1b[33mRp.1410\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 16. \x1b[92mWarnet 2 Jam DISC 35% 1.5GB\x1b[0m \t\x1b[33mRp.1530\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 17. \x1b[92mWarnet 2 Jam DISC 20% 1.5GB\x1b[0m \t\x1b[33mRp.1880\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 18. \x1b[92mWarnet 3 Jam DISC 35% 3GB\x1b[0m \t\x1b[33mRp.2370\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 19. \x1b[92mWarnet 3 Jam DISC 30% 3GB\x1b[0m \t\x1b[33mRp.2560\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 20. \x1b[92mWarnet 3 Jam DISC 20% 3GB\x1b[0m \t\x1b[33mRp.2920\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 21. \x1b[92mWarnet 6 Jam DISC 40% 3GB\x1b[0m \t\x1b[33mRp.3100\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 22. \x1b[92mWarnet 6 Jam DISC 30% 3GB\x1b[0m \t\x1b[33mRp.3650\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 23. \x1b[92mWarnet 3 Jam 3GB\x1b[0m \t\t\x1b[33mRp.2190\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 24. \x1b[92mWarnet 3 Jam 3.5GB\x1b[0m \t\t\x1b[33mRp.2590\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 25. \x1b[92mWarnet 1 Jam 1GB\x1b[0m \t\t\x1b[33mRp.590\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 26. \x1b[92mWarnet 1 Jam 1GB\x1b[0m \t\t\x1b[33mRp.490\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 27. \x1b[92mWarnet 2 Jam 2GB\x1b[0m \t\t\x1b[33mRp.1290\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 28. \x1b[92mWarnet 3 Jam 3GB\x1b[0m \t\t\x1b[33mRp.1890\x1b[0m\r\n       \r\n        + \x1b[92mProduct data package BRONET\x1b[0m\r\n       \r\n    [\x1b[92m*\x1b[0m] 29. \x1b[92mBRONET 24Jam 8GB 7hr\x1b[0m \t\t\x1b[33mRp.13400\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 30. \x1b[92mBRONET 24Jam 1GB 3hr\x1b[0m \t\t\x1b[33mRp.7500\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 31. \x1b[92mBRONET 24Jam 1.5GB 3hr\x1b[0m \t\t\x1b[33mRp.8500\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 32. \x1b[92mBRONET 24Jam 2GB 3hr\x1b[0m \t\t\x1b[33mRp.9500\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 33. \x1b[92mBRONET 24Jam 3GB 3hr\x1b[0m \t\t\x1b[33mRp.11000\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 34. \x1b[92mBRONET 24Jam 5GB 3hr\x1b[0m \t\t\x1b[33mRp.13000\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 35. \x1b[92mBRONET 24Jam 8GB 3hr\x1b[0m \t\t\x1b[33mRp.16500\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 36. \x1b[92mNEW BRONET 24Jam 1GB 7hr\x1b[0m \t\x1b[33mRp.11300\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 37. \x1b[92mNEW BRONET 24Jam 1.5GB 7hr\x1b[0m \t\x1b[33mRp.13700\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 38. \x1b[92mNEW BRONET 24Jam 2GB 7hr\x1b[0m \t\x1b[33mRp.16200\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 39. \x1b[92mNEW BRONET 24Jam 3GB 7hr\x1b[0m \t\x1b[33mRp.18400\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 40. \x1b[92mNEW BRONET 24Jam 5GB 7hr\x1b[0m \t\x1b[33mRp.21500\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 41. \x1b[92mNEW BRONET 24Jam 8GB 7hr\x1b[0m \t\x1b[33mRp.26800\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 42. \x1b[92mBRONET SPESIAL 24Jam 1GB 1hr\x1b[0m \t\x1b[33mRp.3500\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 43. \x1b[92mBRONET SPESIAL 24Jam 2GB 1hr\x1b[0m \t\x1b[33mRp.5500\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 44. \x1b[92mBRONET SPESIAL 24Jam 3GB 1hr\x1b[0m \t\x1b[33mRp.7500\x1b[0m\r\n       \r\n       \r\n        + \x1b[92mProduct data package Bonus Harian\x1b[0m\r\n       \r\n    [\x1b[92m*\x1b[0m] 45. \x1b[92mBonus Harian 1GB 1hr\x1b[0m \t\t\x1b[33mRp.1\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 46. \x1b[92mBonus Harian 1,25GB 1hr\x1b[0m \t\x1b[33mRp.1\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 47. \x1b[92mBonus Harian 1,5GB 1hr\x1b[0m \t\t\x1b[33mRp.1\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 48. \x1b[92mBonus Harian 2,5GB 1hr\x1b[0m \t\t\x1b[33mRp.1\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 49. \x1b[92mBonus Harian 3GB 1hr\x1b[0m \t\t\x1b[33mRp.1\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 50. \x1b[92mBonus Youtube 1GB 7hr\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 51. \x1b[92mFree 500MB 3D\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 52. \x1b[92mFree 1GB 7D\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 53. \x1b[92mBonus Kuota 1GB, 15D\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 54. \x1b[92mBonus 1GB 30hari\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 55. \x1b[92mBonus Video 1GB 1hr\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 56. \x1b[92mBonus Kuota Malam 5GB 5hr\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 57. \x1b[92mBonus Kuota Netflix 7hr\x1b[0m\r\n       \r\n       \r\n       \r\n       \n";
                echo " \x1b[34mINFO\x1b[0m: Choose : ";
                $LWU64 = trim(fgets(STDIN));
                if ($LWU64 == "1") {
                    $hjMee = "10";
                    goto HqXWF;
                }
                if ($LWU64 == "2") {
                    $hjMee = "11";
                    goto hgwRO;
                }
                if ($LWU64 == "3") {
                    $hjMee = "12";
                    goto f6lK9;
                }
                if ($LWU64 == "4") {
                    $hjMee = "13";
                    goto X8kFP;
                }
                if ($LWU64 == "5") {
                    $hjMee = "14";
                    goto UPXxi;
                }
                if ($LWU64 == "6") {
                    $hjMee = "15";
                    goto Mq28c;
                }
                if ($LWU64 == "7") {
                    $hjMee = "16";
                    goto PUL2H;
                }
                if ($LWU64 == "8") {
                    $hjMee = "17";
                    goto uk1dT;
                }
                if ($LWU64 == "9") {
                    $hjMee = "18";
                    goto LU_8l;
                }
                if ($LWU64 == "10") {
                    $hjMee = "19";
                    goto eMfoN;
                }
                if ($LWU64 == "11") {
                    $hjMee = "20";
                    goto kSGeC;
                }
                if ($LWU64 == "12") {
                    $hjMee = "40";
                    goto n39xs;
                }
                if ($LWU64 == "13") {
                    $hjMee = "41";
                    goto r18oD;
                }
                if ($LWU64 == "14") {
                    $hjMee = "42";
                    goto Yzcbp;
                }
                if ($LWU64 == "15") {
                    $hjMee = "43";
                    goto aU0yK;
                }
                if ($LWU64 == "16") {
                    $hjMee = "44";
                    goto nRLs0;
                }
                if ($LWU64 == "17") {
                    $hjMee = "45";
                    goto hE2Uh;
                }
                if ($LWU64 == "18") {
                    $hjMee = "46";
                    goto xsgzV;
                }
                if ($LWU64 == "19") {
                    $hjMee = "47";
                    goto adOyb;
                }
                if ($LWU64 == "20") {
                    $hjMee = "48";
                    goto ezwnF;
                }
                if ($LWU64 == "21") {
                    $hjMee = "49";
                    goto RoVBF;
                }
                if ($LWU64 == "22") {
                    $hjMee = "50";
                    goto GohZG;
                }
                if ($LWU64 == "23") {
                    $hjMee = "51";
                    goto uH47U;
                }
                if ($LWU64 == "24") {
                    $hjMee = "52";
                    goto wnn1K;
                }
                if ($LWU64 == "25") {
                    $hjMee = "53";
                    goto YiDX3;
                }
                if ($LWU64 == "26") {
                    $hjMee = "77";
                    goto ooWKb;
                }
                if ($LWU64 == "27") {
                    $hjMee = "78";
                    goto uyHWj;
                }
                if ($LWU64 == "28") {
                    $hjMee = "79";
                    goto LSAm7;
                }
                if ($LWU64 == "29") {
                    $hjMee = "80";
                    goto HAQrc;
                }
                if ($LWU64 == "30") {
                    $hjMee = "87";
                    goto NFWJn;
                }
                if ($LWU64 == "31") {
                    $hjMee = "88";
                    goto VTuKI;
                }
                if ($LWU64 == "32") {
                    $hjMee = "89";
                    goto cHHs6;
                }
                if ($LWU64 == "33") {
                    $hjMee = "90";
                    goto KPodo;
                }
                if ($LWU64 == "34") {
                    $hjMee = "91";
                    goto LfRP6;
                }
                if ($LWU64 == "35") {
                    $hjMee = "92";
                    goto Ic4Bc;
                }
                if ($LWU64 == "36") {
                    $hjMee = "93";
                    goto ygRIm;
                }
                if ($LWU64 == "37") {
                    $hjMee = "94";
                    goto x01Hw;
                }
                if ($LWU64 == "38") {
                    $hjMee = "95";
                    goto LBj1A;
                }
                if ($LWU64 == "39") {
                    $hjMee = "96";
                    goto C0kDh;
                }
                if ($LWU64 == "40") {
                    $hjMee = "97";
                    goto yTvH8;
                }
                if ($LWU64 == "41") {
                    $hjMee = "98";
                    goto gYAjK;
                }
                if ($LWU64 == "42") {
                    $hjMee = "99";
                    goto DiXYP;
                }
                if ($LWU64 == "43") {
                    $hjMee = "100";
                    goto CxSFr;
                }
                if ($LWU64 == "44") {
                    $hjMee = "101";
                    goto YMcTb;
                }
                if ($LWU64 == "45") {
                    $hjMee = "102";
                    goto QBrGR;
                }
                if ($LWU64 == "46") {
                    $hjMee = "103";
                    goto YRnKe;
                }
                if ($LWU64 == "47") {
                    $hjMee = "104";
                    goto PokoG;
                }
                if ($LWU64 == "48") {
                    $hjMee = "105";
                    goto CzM1e;
                }
                if ($LWU64 == "49") {
                    $hjMee = "106";
                    goto kcrLa;
                }
                if ($LWU64 == "50") {
                    $hjMee = "107";
                    goto cVhdz;
                }
                if ($LWU64 == "51") {
                    $hjMee = "108";
                    goto Ib6uX;
                }
                if ($LWU64 == "52") {
                    $hjMee = "109";
                    goto x2cfe;
                }
                if ($LWU64 == "53") {
                    $hjMee = "110";
                    goto lTaM_;
                }
                if ($LWU64 == "54") {
                    $hjMee = "111";
                    goto ImKem;
                }
                if ($LWU64 == "55") {
                    $hjMee = "112";
                    goto GOolA;
                }
                if ($LWU64 == "56") {
                    $hjMee = "113";
                    goto pIDs9;
                }
                if (!($LWU64 == "57")) {
                    goto QsDfe;
                }
                $hjMee = "114";
                QsDfe:
                pIDs9:
                GOolA:
                ImKem:
                lTaM_:
                x2cfe:
                Ib6uX:
                cVhdz:
                kcrLa:
                CzM1e:
                PokoG:
                YRnKe:
                QBrGR:
                YMcTb:
                CxSFr:
                DiXYP:
                gYAjK:
                yTvH8:
                C0kDh:
                LBj1A:
                x01Hw:
                ygRIm:
                Ic4Bc:
                LfRP6:
                KPodo:
                cHHs6:
                VTuKI:
                NFWJn:
                HAQrc:
                LSAm7:
                uyHWj:
                ooWKb:
                YiDX3:
                wnn1K:
                uH47U:
                GohZG:
                RoVBF:
                ezwnF:
                adOyb:
                xsgzV:
                hE2Uh:
                nRLs0:
                aU0yK:
                Yzcbp:
                r18oD:
                n39xs:
                kSGeC:
                eMfoN:
                LU_8l:
                uk1dT:
                PUL2H:
                Mq28c:
                UPXxi:
                X8kFP:
                f6lK9:
                hgwRO:
                HqXWF:
                $rBPKo = "nomor=" . $Smk9U . "&_otp=" . $M9Vap . "&ipkID=" . $hjMee . "&beli=&token=" . $jFH_1 . '';
                $yI2YD = array("Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "Accept-Language: en-US,en;q=0.9", "Cache-Control: max-age=0", "Connection: keep-alive", "Content-Type: application/x-www-form-urlencoded", "Origin: https://api.ipkzone.my.id", "Referer: https://raw.githubusercontent.com/sancan25/file/main/all.php", "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 Edg/105.0.1343.53");
                $xjCJY = curl_init();
                curl_setopt($xjCJY, CURLOPT_URL, "https://raw.githubusercontent.com/sancan25/file/main/all.php");
                curl_setopt($xjCJY, CURLOPT_HTTPHEADER, $yI2YD);
                curl_setopt($xjCJY, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($xjCJY, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($xjCJY, CURLOPT_POSTFIELDS, $rBPKo);
                $lCupE = curl_exec($xjCJY);
                $eAAP0 = json_decode($lCupE, true);
                $Kcak5 = explode("<textarea class=\"form-control input-sm\" type=\"textarea\" placeholder=\"message\" maxlength=\"150\" rows=\"2\" style=\"text-align: center;\" readonly>", $lCupE);
                $NM8gz = explode("</textarea>", $Kcak5[1]);
                $Jt3v2 = "{$NM8gz[0]}";
                echo " \x1b[34mINFO\x1b[0m: {$Jt3v2}\n";
                $CnCoG = readline(" Buy again package [y/n] Back to menu: ");
                if ($CnCoG == "y") {
                    goto C13Ix;
                }
                goto oLmVl;
            }
            if ($h2eey == 02) {
                echo "\n {$Ekdr9}->{$DMV01} Get {$f2ftg}Authtoken{$DMV01}\n";
                echo " \x1b[34mINFO\x1b[0m: Nomor: ";
                $Smk9U = trim(fgets(STDIN));
                $rBPKo = "nomor=" . $Smk9U . "&_otp=&OTP=&ipkID=999&token=";
                $yI2YD = array("Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "Accept-Language: en-US,en;q=0.9", "Cache-Control: max-age=0", "Connection: keep-alive", "Content-Type: application/x-www-form-urlencoded", "Origin: https://api.ipkzone.my.id", "Referer: https://raw.githubusercontent.com/sancan25/file/main/all.php", "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 Edg/105.0.1343.53");
                $xjCJY = curl_init();
                curl_setopt($xjCJY, CURLOPT_URL, "https://raw.githubusercontent.com/sancan25/file/main/all.php");
                curl_setopt($xjCJY, CURLOPT_HTTPHEADER, $yI2YD);
                curl_setopt($xjCJY, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($xjCJY, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($xjCJY, CURLOPT_POSTFIELDS, $rBPKo);
                $Ag5_r = curl_exec($xjCJY);
                $eAAP0 = json_decode($Ag5_r, true);
                $Kcak5 = explode("<textarea class=\"form-control input-sm\" type=\"textarea\" placeholder=\"message\" maxlength=\"150\" rows=\"2\" style=\"text-align: center;\" readonly>", $Ag5_r);
                $NM8gz = explode("</textarea>", $Kcak5[1]);
                $ksWJs = "{$NM8gz[0]}";
                echo " \x1b[34mINFO\x1b[0m: \x1b[32m{$ksWJs}\x1b[0m \n";
                echo " \x1b[34mINFO\x1b[0m: Code OTP: ";
                $M9Vap = trim(fgets(STDIN));
                $rBPKo = "nomor=" . $Smk9U . "&_otp=" . $M9Vap . "&login=&ipkID=999&token=";
                $yI2YD = array("Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "Accept-Language: en-US,en;q=0.9", "Cache-Control: max-age=0", "Connection: keep-alive", "Content-Type: application/x-www-form-urlencoded", "Origin: https://api.ipkzone.my.id", "Referer: https://raw.githubusercontent.com/sancan25/file/main/all.php", "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 Edg/105.0.1343.53");
                $xjCJY = curl_init();
                curl_setopt($xjCJY, CURLOPT_URL, "https://raw.githubusercontent.com/sancan25/file/main/all.php");
                curl_setopt($xjCJY, CURLOPT_HTTPHEADER, $yI2YD);
                curl_setopt($xjCJY, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($xjCJY, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($xjCJY, CURLOPT_POSTFIELDS, $rBPKo);
                $i8Git = curl_exec($xjCJY);
                $eAAP0 = json_decode($i8Git, true);
                $Kcak5 = explode("<textarea class=\"form-control input-sm\" type=\"textarea\" placeholder=\"message\" maxlength=\"150\" rows=\"2\" style=\"text-align: center;\" readonly>", $i8Git);
                $NM8gz = explode("</textarea>", $Kcak5[1]);
                $jFH_1 = "{$NM8gz[0]}";
                $tkDvm = "{$jFH_1} Live!\n";
                $rdmkp = fopen("authtoken.txt", "a");
                fwrite($rdmkp, $tkDvm);
                fclose($rdmkp);
                echo " \x1b[34mINFO\x1b[0m: Getting authtoken access.\n";
                sleep(2);
                echo " \x1b[34mINFO\x1b[0m: Your authtoken: {$jFH_1}\n";
                echo " \x1b[34mINFO\x1b[0m: Success save.\n";
                $P3Gy8 = readline(" Back to menu [y/n]: ");
                if ($P3Gy8 == "y") {
                    goto oLmVl;
                }
                exit(" Termakasi telah menggunakan menu ini.\n");
            }
            if ($h2eey == 03) {
                echo "\n {$Ekdr9}->{$DMV01} Login With {$f2ftg}Authtoken{$DMV01}\n";
                echo " \x1b[34mINFO\x1b[0m: Authtoken: ";
                $u4GVE = trim(fgets(STDIN));
                BH4yT:
                $BxM5r = "\x1b[92m";
                $lNESS = "\x1b[0m";
                $bvcqj = "\x1b[33m";
                echo "\r\n            + \x1b[92mProduct data package Free\x1b[0m\r\n         \r\n    [\x1b[92m*\x1b[0m] 1.  \x1b[92mKUOTA MALAM 1GB 7hr\x1b[0m \t\t\x1b[33mRp.0\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 2.  \x1b[92mKUOTA YOUTUBE 2GB 3hr\x1b[0m \t\t\x1b[33mRp.0\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 3.  \x1b[92mBonus Kuota 5MB\x1b[0m \t\t\t\x1b[33mRp.0\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 4.  \x1b[92mKUOTA MUSIK 1GB 7hr\x1b[0m \t\t\x1b[33mRp.0\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 5.  \x1b[92mKUOTA MALAM 1GB 2hr\x1b[0m \t\t\x1b[33mRp.0\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 6.  \x1b[92mKUOTA GAMES 1GB 7hr\x1b[0m \t\t\x1b[33mRp.0\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 7.  \x1b[92mKUOTA VIDEO 1GB 7hr\x1b[0m \t\t\x1b[33mRp.0\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 8.  \x1b[92mKUOTA SOSMED 1GB 7hr\x1b[0m \t\t\x1b[33mRp.0\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 9.  \x1b[92mKUOTA INSTAGRAM 1GB 1hr\x1b[0m \t\t\x1b[33mRp.0\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 10. \x1b[92mKUOTA TIKTOK 1GB 1hr\x1b[0m \t\t\x1b[33mRp.0\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 11. \x1b[92mKUOTA YOUTUBE 1GB 1hr\x1b[0m \t\t\x1b[33mRp.0\x1b[0m\r\n       \r\n        + \x1b[92mProduct data package Warnet\x1b[0m\r\n            \r\n    [\x1b[92m*\x1b[0m] 12. \x1b[92mWarnet 1 Jam DISC 35% 800MB\x1b[0m \t\x1b[33mRp.650\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 13. \x1b[92mWarnet 1 Jam DISC 30% 800MB\x1b[0m \t\x1b[33mRp.700\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 14. \x1b[92mWarnet 1 Jam DISC 20% 800MB\x1b[0m \t\x1b[33mRp.800\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 15. \x1b[92mWarnet 2 Jam DISC 40% 1.5GB\x1b[0m \t\x1b[33mRp.1410\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 16. \x1b[92mWarnet 2 Jam DISC 35% 1.5GB\x1b[0m \t\x1b[33mRp.1530\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 17. \x1b[92mWarnet 2 Jam DISC 20% 1.5GB\x1b[0m \t\x1b[33mRp.1880\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 18. \x1b[92mWarnet 3 Jam DISC 35% 3GB\x1b[0m \t\t\x1b[33mRp.2370\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 19. \x1b[92mWarnet 3 Jam DISC 30% 3GB\x1b[0m \t\t\x1b[33mRp.2560\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 20. \x1b[92mWarnet 3 Jam DISC 20% 3GB\x1b[0m \t\t\x1b[33mRp.2920\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 21. \x1b[92mWarnet 6 Jam DISC 40% 3GB\x1b[0m \t\t\x1b[33mRp.3100\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 22. \x1b[92mWarnet 6 Jam DISC 30% 3GB\x1b[0m \t\t\x1b[33mRp.3650\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 23. \x1b[92mWarnet 3 Jam 3GB\x1b[0m \t\t\t\x1b[33mRp.2190\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 24. \x1b[92mWarnet 3 Jam 3.5GB\x1b[0m \t\t\t\x1b[33mRp.2590\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 25. \x1b[92mWarnet 1 Jam 1GB\x1b[0m \t\t\t\x1b[33mRp.590\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 26. \x1b[92mWarnet 1 Jam 1GB\x1b[0m \t\t\t\x1b[33mRp.490\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 27. \x1b[92mWarnet 2 Jam 2GB\x1b[0m \t\t\t\x1b[33mRp.1290\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 28. \x1b[92mWarnet 3 Jam 3GB\x1b[0m \t\t\t\x1b[33mRp.1890\x1b[0m\r\n       \r\n        + \x1b[92mProduct data package BRONET\x1b[0m\r\n       \r\n    [\x1b[92m*\x1b[0m] 29. \x1b[92mBRONET 24Jam 8GB 7hr\x1b[0m \t\t\x1b[33mRp.13400\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 30. \x1b[92mBRONET 24Jam 1GB 3hr\x1b[0m \t\t\x1b[33mRp.7500\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 31. \x1b[92mBRONET 24Jam 1.5GB 3hr\x1b[0m \t\t\x1b[33mRp.8500\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 32. \x1b[92mBRONET 24Jam 2GB 3hr\x1b[0m \t\t\x1b[33mRp.9500\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 33. \x1b[92mBRONET 24Jam 3GB 3hr\x1b[0m \t\t\x1b[33mRp.11000\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 34. \x1b[92mBRONET 24Jam 5GB 3hr\x1b[0m \t\t\x1b[33mRp.13000\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 35. \x1b[92mBRONET 24Jam 8GB 3hr\x1b[0m \t\t\x1b[33mRp.16500\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 36. \x1b[92mNEW BRONET 24Jam 1GB 7hr\x1b[0m \t\t\x1b[33mRp.11300\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 37. \x1b[92mNEW BRONET 24Jam 1.5GB 7hr\x1b[0m \t\t\x1b[33mRp.13700\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 38. \x1b[92mNEW BRONET 24Jam 2GB 7hr\x1b[0m \t\t\x1b[33mRp.16200\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 39. \x1b[92mNEW BRONET 24Jam 3GB 7hr\x1b[0m \t\t\x1b[33mRp.18400\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 40. \x1b[92mNEW BRONET 24Jam 5GB 7hr\x1b[0m \t\t\x1b[33mRp.21500\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 41. \x1b[92mNEW BRONET 24Jam 8GB 7hr\x1b[0m \t\t\x1b[33mRp.26800\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 42. \x1b[92mBRONET SPESIAL 24Jam 1GB 1hr\x1b[0m \t\x1b[33mRp.3500\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 43. \x1b[92mBRONET SPESIAL 24Jam 2GB 1hr\x1b[0m \t\x1b[33mRp.5500\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 44. \x1b[92mBRONET SPESIAL 24Jam 3GB 1hr\x1b[0m \t\x1b[33mRp.7500\x1b[0m\r\n       \r\n       \r\n        + \x1b[92mProduct data package Bonus Harian\x1b[0m\r\n       \r\n    [\x1b[92m*\x1b[0m] 45. \x1b[92mBonus Harian 1GB 1hr\x1b[0m \t\t\x1b[33mRp.1\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 46. \x1b[92mBonus Harian 1,25GB 1hr\x1b[0m \t\t\x1b[33mRp.1\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 47. \x1b[92mBonus Harian 1,5GB 1hr\x1b[0m \t\t\x1b[33mRp.1\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 48. \x1b[92mBonus Harian 2,5GB 1hr\x1b[0m \t\t\x1b[33mRp.1\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 49. \x1b[92mBonus Harian 3GB 1hr\x1b[0m \t\t\x1b[33mRp.1\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 50. \x1b[92mBonus Youtube 1GB 7hr\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 51. \x1b[92mFree 500MB 3D\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 52. \x1b[92mFree 1GB 7D\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 53. \x1b[92mBonus Kuota 1GB, 15D\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 54. \x1b[92mBonus 1GB 30hari\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 55. \x1b[92mBonus Video 1GB 1hr\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 56. \x1b[92mBonus Kuota Malam 5GB 5hr\x1b[0m\r\n    [\x1b[92m*\x1b[0m] 57. \x1b[92mBonus Kuota Netflix 7hr\x1b[0m\r\n       \r\n       \r\n       \r\n       \n";
                echo " \x1b[34mINFO\x1b[0m: Choose : ";
                $LWU64 = trim(fgets(STDIN));
                if ($LWU64 == "1") {
                    $hjMee = "10";
                    goto pUttZ;
                }
                if ($LWU64 == "2") {
                    $hjMee = "11";
                    goto RJ0xP;
                }
                if ($LWU64 == "3") {
                    $hjMee = "12";
                    goto QhyLW;
                }
                if ($LWU64 == "4") {
                    $hjMee = "13";
                    goto iy0p7;
                }
                if ($LWU64 == "5") {
                    $hjMee = "14";
                    goto J8u6H;
                }
                if ($LWU64 == "6") {
                    $hjMee = "15";
                    goto eN2Jr;
                }
                if ($LWU64 == "7") {
                    $hjMee = "16";
                    goto WYwe2;
                }
                if ($LWU64 == "8") {
                    $hjMee = "17";
                    goto EiOy7;
                }
                if ($LWU64 == "9") {
                    $hjMee = "18";
                    goto MlNkf;
                }
                if ($LWU64 == "10") {
                    $hjMee = "19";
                    goto uNZed;
                }
                if ($LWU64 == "11") {
                    $hjMee = "20";
                    goto VFXJH;
                }
                if ($LWU64 == "12") {
                    $hjMee = "40";
                    goto kfWxN;
                }
                if ($LWU64 == "13") {
                    $hjMee = "41";
                    goto CcvKr;
                }
                if ($LWU64 == "14") {
                    $hjMee = "42";
                    goto Fb9ri;
                }
                if ($LWU64 == "15") {
                    $hjMee = "43";
                    goto Ae8qb;
                }
                if ($LWU64 == "16") {
                    $hjMee = "44";
                    goto muHrm;
                }
                if ($LWU64 == "17") {
                    $hjMee = "45";
                    goto uPyRr;
                }
                if ($LWU64 == "18") {
                    $hjMee = "46";
                    goto PiDdS;
                }
                if ($LWU64 == "19") {
                    $hjMee = "47";
                    goto AnXsS;
                }
                if ($LWU64 == "20") {
                    $hjMee = "48";
                    goto eiDh0;
                }
                if ($LWU64 == "21") {
                    $hjMee = "49";
                    goto nE1Ci;
                }
                if ($LWU64 == "22") {
                    $hjMee = "50";
                    goto p9wVb;
                }
                if ($LWU64 == "23") {
                    $hjMee = "51";
                    goto tg8oJ;
                }
                if ($LWU64 == "24") {
                    $hjMee = "52";
                    goto SCds0;
                }
                if ($LWU64 == "25") {
                    $hjMee = "53";
                    goto tvA3Y;
                }
                if ($LWU64 == "26") {
                    $hjMee = "77";
                    goto laWo8;
                }
                if ($LWU64 == "27") {
                    $hjMee = "78";
                    goto rOslu;
                }
                if ($LWU64 == "28") {
                    $hjMee = "79";
                    goto HgufV;
                }
                if ($LWU64 == "29") {
                    $hjMee = "80";
                    goto iyHzU;
                }
                if ($LWU64 == "30") {
                    $hjMee = "87";
                    goto bttqw;
                }
                if ($LWU64 == "31") {
                    $hjMee = "88";
                    goto A_E2k;
                }
                if ($LWU64 == "32") {
                    $hjMee = "89";
                    goto Ftnyw;
                }
                if ($LWU64 == "33") {
                    $hjMee = "90";
                    goto Tu3DE;
                }
                if ($LWU64 == "34") {
                    $hjMee = "91";
                    goto q0Djx;
                }
                if ($LWU64 == "35") {
                    $hjMee = "92";
                    goto rBJOy;
                }
                if ($LWU64 == "36") {
                    $hjMee = "93";
                    goto WRGnY;
                }
                if ($LWU64 == "37") {
                    $hjMee = "94";
                    goto XnvGp;
                }
                if ($LWU64 == "38") {
                    $hjMee = "95";
                    goto RveOT;
                }
                if ($LWU64 == "39") {
                    $hjMee = "96";
                    goto Qm2lw;
                }
                if ($LWU64 == "40") {
                    $hjMee = "97";
                    goto KwMN_;
                }
                if ($LWU64 == "41") {
                    $hjMee = "98";
                    goto fTL0g;
                }
                if ($LWU64 == "42") {
                    $hjMee = "99";
                    goto v_vYF;
                }
                if ($LWU64 == "43") {
                    $hjMee = "100";
                    goto c0NWt;
                }
                if ($LWU64 == "44") {
                    $hjMee = "101";
                    goto Q4ETB;
                }
                if ($LWU64 == "45") {
                    $hjMee = "102";
                    goto VZ0Mx;
                }
                if ($LWU64 == "46") {
                    $hjMee = "103";
                    goto zK45X;
                }
                if ($LWU64 == "47") {
                    $hjMee = "104";
                    goto AtFkq;
                }
                if ($LWU64 == "48") {
                    $hjMee = "105";
                    goto vtBA_;
                }
                if ($LWU64 == "49") {
                    $hjMee = "106";
                    goto onNdL;
                }
                if ($LWU64 == "50") {
                    $hjMee = "107";
                    goto VyUG8;
                }
                if ($LWU64 == "51") {
                    $hjMee = "108";
                    goto rBHaK;
                }
                if ($LWU64 == "52") {
                    $hjMee = "109";
                    goto WaHlA;
                }
                if ($LWU64 == "53") {
                    $hjMee = "110";
                    goto BDHEL;
                }
                if ($LWU64 == "54") {
                    $hjMee = "111";
                    goto Ib5FJ;
                }
                if ($LWU64 == "55") {
                    $hjMee = "112";
                    goto EKMC6;
                }
                if ($LWU64 == "56") {
                    $hjMee = "113";
                    goto uQRbl;
                }
                if (!($LWU64 == "57")) {
                    goto eKawB;
                }
                $hjMee = "114";
                eKawB:
                uQRbl:
                EKMC6:
                Ib5FJ:
                BDHEL:
                WaHlA:
                rBHaK:
                VyUG8:
                onNdL:
                vtBA_:
                AtFkq:
                zK45X:
                VZ0Mx:
                Q4ETB:
                c0NWt:
                v_vYF:
                fTL0g:
                KwMN_:
                Qm2lw:
                RveOT:
                XnvGp:
                WRGnY:
                rBJOy:
                q0Djx:
                Tu3DE:
                Ftnyw:
                A_E2k:
                bttqw:
                iyHzU:
                HgufV:
                rOslu:
                laWo8:
                tvA3Y:
                SCds0:
                tg8oJ:
                p9wVb:
                nE1Ci:
                eiDh0:
                AnXsS:
                PiDdS:
                uPyRr:
                muHrm:
                Ae8qb:
                Fb9ri:
                CcvKr:
                kfWxN:
                VFXJH:
                uNZed:
                MlNkf:
                EiOy7:
                WYwe2:
                eN2Jr:
                J8u6H:
                iy0p7:
                QhyLW:
                RJ0xP:
                pUttZ:
                $rBPKo = "nomor=&_otp=&ipkID=114&beli=&token=" . $u4GVE . '';
                $yI2YD = array("Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "Accept-Language: en-US,en;q=0.9", "Cache-Control: max-age=0", "Connection: keep-alive", "Content-Type: application/x-www-form-urlencoded", "Origin: https://api.ipkzone.my.id", "Referer: https://raw.githubusercontent.com/sancan25/file/main/all.php", "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 Edg/105.0.1343.53");
                $xjCJY = curl_init();
                curl_setopt($xjCJY, CURLOPT_URL, "https://raw.githubusercontent.com/sancan25/file/main/all.php");
                curl_setopt($xjCJY, CURLOPT_HTTPHEADER, $yI2YD);
                curl_setopt($xjCJY, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($xjCJY, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($xjCJY, CURLOPT_POSTFIELDS, $rBPKo);
                $lCupE = curl_exec($xjCJY);
                $eAAP0 = json_decode($lCupE, true);
                $Kcak5 = explode("<textarea class=\"form-control input-sm\" type=\"textarea\" placeholder=\"message\" maxlength=\"150\" rows=\"2\" style=\"text-align: center;\" readonly>", $lCupE);
                $NM8gz = explode("</textarea>", $Kcak5[1]);
                $Jt3v2 = "{$NM8gz[0]}";
                echo " \x1b[34mINFO\x1b[0m: {$Jt3v2}\n\n";
                $P3Gy8 = readline(" Buy again package [y/n] Back to menu: ");
                if ($P3Gy8 == "y") {
                    goto BH4yT;
                }
                goto oLmVl;
            }
            if ($h2eey == 04) {
                $P3Gy8 = readline(" Buy again package [y/n] Back to menu: ");
                if ($P3Gy8 == "y") {
                    PZtcn:
                    goto WWKMh;
                }
                goto oLmVl;
            }
            if ($h2eey == 05) {
                wWDME:
                WWKMh:
                JKdnK:
                Fgk6A:
                KyqHf:
                // [PHPDeobfuscator] Implied return
                return;
            }
            if ($h2eey == 06) {
                $BYtTx = readline(" Back to menu[y/n]: ");
                if ($BYtTx == "y") {
                    goto oLmVl;
                }
                exit(" Termakasi telah menggunakan menu ini.\n");
            }
            exit(" Pilih menu yang di inginkan.\n");
