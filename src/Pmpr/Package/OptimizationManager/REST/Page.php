<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c039b91a52c             |
    |_______________________________________|
*/
 namespace Pmpr\Package\OptimizationManager\REST; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\OptimizationManager\Model\Budget; use WP_Error; use Pmpr\Package\OptimizationManager\Model\Page as Model; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Page extends Common { public function __construct() { $this->rest_base = "\x70\141\147\145"; parent::__construct(); } public function register_routes() { $this->register("\57\x61\x64\x64", ["\155\x65\x74\x68\x6f\x64\163" => self::qucyckeykeuuaquw, "\x63\x61\x6c\x6c\142\x61\143\x6b" => [$this, "\141\144\144"]]); $this->register("\x2f\162\145\x6d\157\166\145", ["\155\145\164\x68\157\x64\163" => self::kqqquayqkucokyqi, "\143\x61\x6c\x6c\142\141\x63\x6b" => [$this, "\162\145\x6d\157\x76\145"]]); $this->register("\x2f\x63\x68\141\156\x67\x65\55\163\164\x61\164\165\163", ["\155\x65\x74\150\157\144\x73" => self::qucyckeykeuuaquw, "\143\x61\154\x6c\x62\x61\143\x6b" => [$this, "\141\171\x61\x6b\157\151\153\145\x77\165\x73\x73\x6b\x61\x79\143"]]); } public function add(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto ocokwuuquaokmasc; } $gwgucoaaqcwwciqq = ManipulateArray::get($keccaugmemegoimu, self::ciyoccqkiamemcmm); $akyiigeggqowmqqq = ManipulateArray::get($keccaugmemegoimu, self::gouqcwikiiygyasc); if ($akyiigeggqowmqqq && $gwgucoaaqcwwciqq) { goto uukumskkeggaowck; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\104\x6f\155\x61\x69\156\40\151\163\40\x6e\157\164\x20\166\x61\x6c\x69\x64\x2e", PR__PKG__OPTIMIZATION_MANAGER), 400); goto cggowoquuiwqkyew; uukumskkeggaowck: $suaemuyiacqyugsm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk); $iuekmkswcsacoawq = Model::symcgieuakksimmu(); $icwicymcioeyeyek = [$iuekmkswcsacoawq::auqoykcmsiauccao => $suaemuyiacqyugsm, $iuekmkswcsacoawq::iiooageieusuyomy => ManipulateArray::get($suaemuyiacqyugsm, self::iiooageieusuyomy, $iuekmkswcsacoawq::LEVEL_2), $iuekmkswcsacoawq::ciywsqoeiymemsys => ManipulateArray::get($suaemuyiacqyugsm, self::ciywsqoeiymemsys, self::eqewsqmqmsiocaeg), $iuekmkswcsacoawq::DOMAIN_ID => $akyiigeggqowmqqq]; $myagqecycsaiyqsk = $iuekmkswcsacoawq->cwkywyqksyucoyia([$iuekmkswcsacoawq::auqoykcmsiauccao => $suaemuyiacqyugsm, $iuekmkswcsacoawq::DOMAIN_ID => $akyiigeggqowmqqq]); $suckquwcuiuyiogc = false; if (!$myagqecycsaiyqsk) { goto kiqogmwcgcamwiig; } $suckquwcuiuyiogc = true; $icwicymcioeyeyek[$iuekmkswcsacoawq->kumuygiiqswoyasy()] = $iuekmkswcsacoawq->keeuqgyooycqoygw($myagqecycsaiyqsk); kiqogmwcgcamwiig: $keccaugmemegoimu = $this->uyksiewkykwokysc($akyiigeggqowmqqq); if (!($suckquwcuiuyiogc || $keccaugmemegoimu && !is_wp_error($keccaugmemegoimu))) { goto eequksumcoogyoem; } $sogksuscggsicmac = $iuekmkswcsacoawq->gscuuyuyauokoyuo($icwicymcioeyeyek); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto iomcaiwewsawiamu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(print_r($sogksuscggsicmac[self::iwyueouqaqegmcas], true), 400); goto sqiciiuwmykocycc; iomcaiwewsawiamu: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\120\141\147\x65\40\141\144\x64\145\x64\40\163\165\x63\143\145\x73\x73\x66\165\x6c\x6c\x79\x2e", PR__PKG__OPTIMIZATION_MANAGER)); sqiciiuwmykocycc: eequksumcoogyoem: cggowoquuiwqkyew: ocokwuuquaokmasc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function remove(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto mswsoaimesegiiic; } $aokagokqyuysuksm = ManipulateArray::get($keccaugmemegoimu, self::gouqcwikiiygyasc); $gwgucoaaqcwwciqq = ManipulateArray::get($keccaugmemegoimu, self::ciyoccqkiamemcmm); if (!($aokagokqyuysuksm && $gwgucoaaqcwwciqq)) { goto usqgaogkqgemuima; } $iuekmkswcsacoawq = Model::symcgieuakksimmu(); $suaemuyiacqyugsm = $iuekmkswcsacoawq->oqomcmyuuakigusk([$iuekmkswcsacoawq::auqoykcmsiauccao => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk), $iuekmkswcsacoawq::DOMAIN_ID => $aokagokqyuysuksm]); if ($suaemuyiacqyugsm) { goto meawswgwagoqgkye; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\145\x71\165\x65\163\x74\145\144\x20\x70\x61\147\145\40\156\157\164\40\x65\x78\x69\x74\x73\x2e", PR__PKG__OPTIMIZATION_MANAGER), 400); goto wcesymwqykqoyuqk; meawswgwagoqgkye: if ($iuekmkswcsacoawq->sgcuwcowgwimgsgk($iuekmkswcsacoawq->keeuqgyooycqoygw($suaemuyiacqyugsm), true)) { goto yiwiqaqmwiogawym; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x43\x61\x6e\40\x6e\157\x74\x20\x64\x65\154\145\x74\x65\56", PR__PKG__OPTIMIZATION_MANAGER), 500); goto goacqqsgaaigyuaw; yiwiqaqmwiogawym: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\120\x61\147\x65\x20\162\145\x6d\157\166\x65\144\40\x73\x75\143\143\x65\x73\x73\x66\165\154\154\171\56", PR__PKG__OPTIMIZATION_MANAGER)); goacqqsgaaigyuaw: wcesymwqykqoyuqk: usqgaogkqgemuima: mswsoaimesegiiic: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ayakoikewusskayc(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto sukskmcwsoysiuqu; } $gwgucoaaqcwwciqq = ManipulateArray::get($keccaugmemegoimu, self::ciyoccqkiamemcmm); $wqykqusigegasqeg = ManipulateArray::get($keccaugmemegoimu, self::gouqcwikiiygyasc); if (!($wqykqusigegasqeg && $gwgucoaaqcwwciqq)) { goto cgewcsueoyaeikgm; } $eeamcawaiqocomwy = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk); $iueymcwwscwqkiyq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ciywsqoeiymemsys); if ($eeamcawaiqocomwy && in_array($iueymcwwscwqkiyq, [self::eqewsqmqmsiocaeg, self::uucoeqmmykkwsmqc, self::wiewguakgwmoqaea])) { goto ygkcacsyyckescqs; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x50\x61\162\x61\x6d\x65\164\145\x72\163\40\x69\x73\x20\156\x6f\164\40\166\x61\x6c\151\144\56", PR__PKG__OPTIMIZATION_MANAGER), 400); goto cuoqqgaygogsmmic; ygkcacsyyckescqs: $iuekmkswcsacoawq = Model::symcgieuakksimmu(); $suaemuyiacqyugsm = $iuekmkswcsacoawq->oqomcmyuuakigusk([$iuekmkswcsacoawq::auqoykcmsiauccao => $eeamcawaiqocomwy, $iuekmkswcsacoawq::DOMAIN_ID => $wqykqusigegasqeg]); if ($suaemuyiacqyugsm) { goto ickcmqoiosquugwe; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\145\x71\165\x65\x73\164\145\x64\x20\x70\141\x67\145\40\x6e\x6f\x74\40\145\x78\151\x74\163\56", PR__PKG__OPTIMIZATION_MANAGER), 404); goto qmeoaqmsuseueqiy; ickcmqoiosquugwe: $swwmymiaiosiyqis = ManipulateArray::get($suaemuyiacqyugsm, self::ciywsqoeiymemsys); $acyqismwwkkaamus = $iuekmkswcsacoawq->keeuqgyooycqoygw($suaemuyiacqyugsm); $kigowwqauiumummw = false; if ($swwmymiaiosiyqis === $iueymcwwscwqkiyq) { goto qmiwsequckckoaei; } $keccaugmemegoimu = $this->uyksiewkykwokysc($wqykqusigegasqeg, $iueymcwwscwqkiyq === self::eqewsqmqmsiocaeg); if (!($keccaugmemegoimu && !is_wp_error($keccaugmemegoimu))) { goto qgegkeomwscwwiuw; } $sogksuscggsicmac = $iuekmkswcsacoawq->gscuuyuyauokoyuo([$iuekmkswcsacoawq->kumuygiiqswoyasy() => $acyqismwwkkaamus, self::ciywsqoeiymemsys => $iueymcwwscwqkiyq], true); $kigowwqauiumummw = $sogksuscggsicmac[self::ckcawaoawwioqecq]; if ($kigowwqauiumummw) { goto egasokooagakisiy; } $keccaugmemegoimu = $this->oemauiimmycumcsk(print_r($sogksuscggsicmac[self::iwyueouqaqegmcas], true), 500); goto kecwuwwcwokuksyq; egasokooagakisiy: $iuekmkswcsacoawq->scueyoccsmqoiuce($acyqismwwkkaamus, $swwmymiaiosiyqis, $iueymcwwscwqkiyq); kecwuwwcwokuksyq: qgegkeomwscwwiuw: goto goeoymmqqqeeoime; qmiwsequckckoaei: $kigowwqauiumummw = true; goeoymmqqqeeoime: if (!$kigowwqauiumummw) { goto eiawsoasmscmqswa; } $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x50\141\x67\x65\x20\x73\x74\141\x74\165\163\40\143\150\x61\x6e\147\145\x64\x20\163\x75\143\143\145\x73\163\x66\x75\x6c\154\171\x2e", PR__PKG__OPTIMIZATION_MANAGER)); eiawsoasmscmqswa: qmeoaqmsuseueqiy: cuoqqgaygogsmmic: cgewcsueoyaeikgm: sukskmcwsoysiuqu: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function uyksiewkykwokysc($mokawwccycoiqeka, $syukqkeqkkwuiiii = true) { $mkecsaoyggsmwmau = Budget::symcgieuakksimmu()->oewseeiwmgwckyuk($mokawwccycoiqeka); $keccaugmemegoimu = true; if ($mkecsaoyggsmwmau > 0) { goto eyiamcekkgkiawqy; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x59\157\165\40\143\x61\156\47\x74\x20\x64\x6f\x20\x74\x68\151\163\54\x20\142\x65\x63\x61\x75\163\x65\40\x79\x6f\165\x20\x64\x6f\x6e\47\164\40\150\141\166\145\x20\x61\156\171\x20\142\x75\x64\x67\x65\x74\56", PR__PKG__OPTIMIZATION_MANAGER), 401); goto twkmiuomimomscew; eyiamcekkgkiawqy: if (!$syukqkeqkkwuiiii) { goto mqccmesakuemceqi; } $ocqawgquwsqioses = Model::symcgieuakksimmu()->cwkywyqksyucoyia([Model::DOMAIN_ID => $mokawwccycoiqeka, self::ciywsqoeiymemsys => [self::eqewsqmqmsiocaeg, self::uucoeqmmykkwsmqc]]); if (!(count($ocqawgquwsqioses) >= $mkecsaoyggsmwmau)) { goto igymseewwyiocoug; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x59\x6f\x75\162\x20\142\x75\144\147\x65\x74\x20\x69\163\x20\x6e\157\164\x20\145\156\x6f\x75\x67\x68\40\x74\157\40\144\157\40\164\x68\151\163\56", PR__PKG__OPTIMIZATION_MANAGER)); igymseewwyiocoug: mqccmesakuemceqi: twkmiuomimomscew: return $keccaugmemegoimu; } }
