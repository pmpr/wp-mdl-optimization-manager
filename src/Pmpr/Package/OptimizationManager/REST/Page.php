<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6151a28c9c64a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\OptimizationManager\REST; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\OptimizationManager\Model\Budget; use WP_Error; use Pmpr\Package\OptimizationManager\Model\Page as Model; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Page extends Common { public function __construct() { $this->rest_base = "\160\x61\147\145"; parent::__construct(); } public function register_routes() { goto ocaguquugeamqckq; eekcoeikaeaaeyii: $this->register("\57\x63\x68\141\156\x67\145\55\163\x74\x61\x74\165\163", ["\x61\x72\147\x73" => [], "\155\x65\x74\x68\157\x64\163" => self::CREATABLE, "\143\141\x6c\x6c\x62\141\x63\153" => [$this, "\141\171\x61\x6b\x6f\151\x6b\145\x77\165\163\x73\x6b\x61\x79\143"]]); goto cogywoqcqummsyus; ocaguquugeamqckq: $this->register("\x2f\141\x64\x64", ["\x61\162\x67\163" => [], "\x6d\x65\164\x68\x6f\x64\x73" => self::CREATABLE, "\x63\141\x6c\x6c\x62\141\x63\153" => [$this, "\141\144\144"]]); goto eekcoeikaeaaeyii; cogywoqcqummsyus: $this->register("\57\162\145\155\157\x76\145", ["\x61\x72\147\x73" => [], "\x6d\x65\164\x68\x6f\144\x73" => self::DELETABLE, "\143\141\154\x6c\x62\141\143\153" => [$this, "\x72\x65\155\x6f\166\x65"]]); goto gmwykkouysyaqwqm; gmwykkouysyaqwqm: } public function add(WP_REST_Request $aqmwamyiwgeeymqa) { goto mggeqkcksyaymcsa; gygwewcqsmwqismo: $myagqecycsaiyqsk = $iuekmkswcsacoawq->cwkywyqksyucoyia([$iuekmkswcsacoawq::URL => $suaemuyiacqyugsm, $iuekmkswcsacoawq::DOMAIN_ID => $akyiigeggqowmqqq]); goto uougwgeyiokewkkm; wusciwkkckmqigms: goto cscusseysqygsoiy; goto iiiccouaaqsyikae; mscyggqcesgqqksu: mkwkkmkgiqiamacc: goto oyeyomcgkmgymogq; ucqmumuygcywwqma: $icwicymcioeyeyek[$iuekmkswcsacoawq->kumuygiiqswoyasy()] = $iuekmkswcsacoawq->keeuqgyooycqoygw($myagqecycsaiyqsk); goto uykousayyomcaeaa; iesekaeqeomeuaui: isgwkwacoyimiauk: goto wsesqmcqoiyyqkqi; uegouoiuyoqkcscg: if (is_wp_error($keccaugmemegoimu)) { goto isgwkwacoyimiauk; } goto cgyakcqgugqgkqiw; gamqcwuwkikwqoay: sockeswygwcskeuq: goto mscyggqcesgqqksu; wsesqmcqoiyyqkqi: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto mogkoocsoeuyoqqa; kocqqoyymosmuksu: $sogksuscggsicmac = $iuekmkswcsacoawq->gscuuyuyauokoyuo($icwicymcioeyeyek); goto uqokiksoqcwwqgio; kqswcsysqawkcgye: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\104\x6f\x6d\141\151\156\40\x69\163\40\x6e\x6f\164\40\x76\x61\154\x69\x64\x2e", PR__PKG__OPTIMIZATION_MANAGER), 400); goto wusciwkkckmqigms; qukocuwgakemmyga: $keccaugmemegoimu = $this->oemauiimmycumcsk(print_r($sogksuscggsicmac[self::ERRORS], true), 400); goto sioekkmekwygemyc; ewscugeuicukkycc: if ($akyiigeggqowmqqq && $gwgucoaaqcwwciqq) { goto uaqackioaiqwcocy; } goto kqswcsysqawkcgye; ukqocwewouckikso: $suckquwcuiuyiogc = true; goto ucqmumuygcywwqma; mggeqkcksyaymcsa: $keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa); goto uegouoiuyoqkcscg; ieqesiiageaauiuw: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\120\x61\x67\145\40\141\x64\x64\145\x64\x20\x73\165\x63\143\145\163\x73\146\x75\x6c\154\171\x2e", PR__PKG__OPTIMIZATION_MANAGER)); goto gamqcwuwkikwqoay; uougwgeyiokewkkm: $suckquwcuiuyiogc = false; goto gommacygsykyussk; iuuuususuuuaieem: if (!($suckquwcuiuyiogc || $keccaugmemegoimu && !is_wp_error($keccaugmemegoimu))) { goto mkwkkmkgiqiamacc; } goto kocqqoyymosmuksu; iiiccouaaqsyikae: uaqackioaiqwcocy: goto ukkcmocamwgiqayu; oyeyomcgkmgymogq: cscusseysqygsoiy: goto iesekaeqeomeuaui; gommacygsykyussk: if (!$myagqecycsaiyqsk) { goto ugqwuugsweqgmywk; } goto ukqocwewouckikso; uykousayyomcaeaa: ugqwuugsweqgmywk: goto uimeeckqksqeekqq; uimeeckqksqeekqq: $keccaugmemegoimu = $this->uyksiewkykwokysc($akyiigeggqowmqqq); goto iuuuususuuuaieem; eeyyskqsmquyquqw: $akyiigeggqowmqqq = ManipulateArray::get($keccaugmemegoimu, self::ID); goto ewscugeuicukkycc; mwysseaekcsiesmm: $iuekmkswcsacoawq = Model::symcgieuakksimmu(); goto amgsueumgaguceaa; ukkcmocamwgiqayu: $suaemuyiacqyugsm = $aqmwamyiwgeeymqa->get_param(self::PAGE); goto mwysseaekcsiesmm; yiowgigkkwsoqcci: uaukmuiwskcemcsw: goto ieqesiiageaauiuw; amgsueumgaguceaa: $icwicymcioeyeyek = [$iuekmkswcsacoawq::URL => $suaemuyiacqyugsm, $iuekmkswcsacoawq::LEVEL => ManipulateArray::get($suaemuyiacqyugsm, self::LEVEL, $iuekmkswcsacoawq::LEVEL_1), $iuekmkswcsacoawq::STATUS => ManipulateArray::get($suaemuyiacqyugsm, self::STATUS, self::ACTIVE), $iuekmkswcsacoawq::DOMAIN_ID => $akyiigeggqowmqqq]; goto gygwewcqsmwqismo; uqokiksoqcwwqgio: if ($sogksuscggsicmac[self::SUCCESS]) { goto uaukmuiwskcemcsw; } goto qukocuwgakemmyga; cgyakcqgugqgkqiw: $gwgucoaaqcwwciqq = ManipulateArray::get($keccaugmemegoimu, self::VALUE); goto eeyyskqsmquyquqw; sioekkmekwygemyc: goto sockeswygwcskeuq; goto yiowgigkkwsoqcci; mogkoocsoeuyoqqa: } public function remove(WP_REST_Request $aqmwamyiwgeeymqa) { goto uckewycoogsogwiy; esaqcqqwuussiiwo: if ($iuekmkswcsacoawq->sgcuwcowgwimgsgk($iuekmkswcsacoawq->keeuqgyooycqoygw($suaemuyiacqyugsm), true)) { goto wkwamkgkwykeqkec; } goto ikqeeaysmqgcgawq; iwsmmkqaoksmocok: if ($suaemuyiacqyugsm) { goto oeocukauoyosicso; } goto esikeyqyuikmaiek; wwukgaquuyoissgy: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x50\x61\147\x65\40\x72\x65\x6d\157\166\145\144\40\x73\165\x63\143\x65\163\x73\146\165\154\x6c\171\56", PR__PKG__OPTIMIZATION_MANAGER)); goto gsygwgsiawgmqiyi; yuimwyoywaiiqacs: if (!($aokagokqyuysuksm && $gwgucoaaqcwwciqq)) { goto yykqaowwsqgqysmq; } goto ocywegekakimmwcq; gsygwgsiawgmqiyi: oimkeqocuguqqsqk: goto qsgqwyqaqiowkmco; ocywegekakimmwcq: $iuekmkswcsacoawq = Model::symcgieuakksimmu(); goto emqswoaawgeyosmi; okkmcocqokkskasy: goto suqceasgacskcmkc; goto qiiigwkqeoewsuwm; suqcsgaosywaauuu: wkwamkgkwykeqkec: goto wwukgaquuyoissgy; qikaewekoecykeou: kwiggogcgciwuwqk: goto eucqomyqykgoiuge; ikuuiauwouuqawuw: if (is_wp_error($keccaugmemegoimu)) { goto kwiggogcgciwuwqk; } goto yoqakewookqoqacm; qiiigwkqeoewsuwm: oeocukauoyosicso: goto esaqcqqwuussiiwo; mscgewkcqcoowweg: goto oimkeqocuguqqsqk; goto suqcsgaosywaauuu; esikeyqyuikmaiek: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\145\x71\x75\x65\163\164\145\144\40\160\141\x67\145\40\156\157\x74\x20\145\170\x69\x74\163\56", PR__PKG__OPTIMIZATION_MANAGER), 400); goto okkmcocqokkskasy; ikqeeaysmqgcgawq: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\103\141\156\40\x6e\157\x74\x20\144\x65\x6c\145\164\145\x2e", PR__PKG__OPTIMIZATION_MANAGER), 500); goto mscgewkcqcoowweg; yoqakewookqoqacm: $aokagokqyuysuksm = ManipulateArray::get($keccaugmemegoimu, self::ID); goto gswcoeiisamakwii; emqswoaawgeyosmi: $suaemuyiacqyugsm = $iuekmkswcsacoawq->oqomcmyuuakigusk([$iuekmkswcsacoawq::URL => $aqmwamyiwgeeymqa->get_param(self::PAGE), $iuekmkswcsacoawq::DOMAIN_ID => $aokagokqyuysuksm]); goto iwsmmkqaoksmocok; qsgqwyqaqiowkmco: suqceasgacskcmkc: goto yqagomygmeoecwey; gswcoeiisamakwii: $gwgucoaaqcwwciqq = ManipulateArray::get($keccaugmemegoimu, self::VALUE); goto yuimwyoywaiiqacs; yqagomygmeoecwey: yykqaowwsqgqysmq: goto qikaewekoecykeou; uckewycoogsogwiy: $keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa); goto ikuuiauwouuqawuw; eucqomyqykgoiuge: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto usymasgsyqgsuocg; usymasgsyqgsuocg: } public function ayakoikewusskayc(WP_REST_Request $aqmwamyiwgeeymqa) { goto oocuemosmeeekgas; ecouwqosmoyyqmkw: sqyokemumceysegy: goto mqiiqkuaoekeuswo; eckcqesiokgwkkiw: $iuekmkswcsacoawq->scueyoccsmqoiuce($acyqismwwkkaamus, $swwmymiaiosiyqis, $iueymcwwscwqkiyq); goto ecouwqosmoyyqmkw; egsycocugqyyswsi: $wqykqusigegasqeg = ManipulateArray::get($keccaugmemegoimu, self::ID); goto qiaimmucomukkeka; wkgskiuiukiuyque: $swwmymiaiosiyqis = ManipulateArray::get($suaemuyiacqyugsm, self::STATUS); goto oyiuyywyeoskckuw; mqiiqkuaoekeuswo: oqousikwiiqagoyw: goto qmoocweoekqueuyy; eyiwqgqcsqakwqss: syuaummumssgwwee: goto sckioayasmkcoeoo; wmumywgyyeagqoeq: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\120\141\x67\x65\x20\163\x74\141\x74\165\x73\x20\143\x68\141\156\x67\x65\x64\40\163\165\143\143\x65\163\x73\146\x75\x6c\154\171\56", PR__PKG__OPTIMIZATION_MANAGER)); goto smcguieygyqcaqgs; ukomuiwukymcoaso: egmayaiikwsskgmy: goto wkgskiuiukiuyque; mgcuiguaomoqwwwm: ucuoeymyqeokgsya: goto eoyiumycaigawmmc; smcguieygyqcaqgs: mysueeoswqgccmui: goto mgcuiguaomoqwwwm; mkomygccqkmkumsi: goto sguskaeaaqcagqgc; goto ussceseaimqywuiy; eoyiumycaigawmmc: sguskaeaaqcagqgc: goto yuoeumyiuqkuouey; ceiwqkyquikcemmo: goto ucuoeymyqeokgsya; goto ukomuiwukymcoaso; quaqmuusokiyqgqe: $kigowwqauiumummw = $sogksuscggsicmac[self::SUCCESS]; goto smiemmcqqukyguuu; smiemmcqqukyguuu: if ($kigowwqauiumummw) { goto aiccyaswigkaycqk; } goto iksewmsaugayqaqq; ussceseaimqywuiy: yuuyikiacmmueosu: goto oyiuemaaykgkqqam; ciucewqgyoiouesq: if ($eeamcawaiqocomwy && in_array($iueymcwwscwqkiyq, [self::ACTIVE, self::INACTIVE, self::IGNORED])) { goto yuuyikiacmmueosu; } goto cgmgqucewwssmicq; yoagcooekomeokwg: aiccyaswigkaycqk: goto eckcqesiokgwkkiw; yamyagayiooyeekg: goto sqyokemumceysegy; goto yoagcooekomeokwg; oyiuemaaykgkqqam: $iuekmkswcsacoawq = Model::symcgieuakksimmu(); goto gqmewagyagamokok; osuscoaaomwcqkew: $iueymcwwscwqkiyq = $aqmwamyiwgeeymqa->get_param(self::STATUS); goto ciucewqgyoiouesq; sckioayasmkcoeoo: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto yssqmyoaokkksukc; cgmgqucewwssmicq: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x50\x61\x72\x61\x6d\145\x74\145\x72\x73\x20\151\163\40\156\157\x74\x20\x76\x61\x6c\x69\x64\x2e", PR__PKG__OPTIMIZATION_MANAGER), 400); goto mkomygccqkmkumsi; qkuiwoqksgayqqmg: $keccaugmemegoimu = $this->uyksiewkykwokysc($wqykqusigegasqeg, $iueymcwwscwqkiyq === self::ACTIVE); goto easqmyamcmeesgya; mmgmqogugasaqkgg: if (!$kigowwqauiumummw) { goto mysueeoswqgccmui; } goto wmumywgyyeagqoeq; oyiuyywyeoskckuw: $acyqismwwkkaamus = $iuekmkswcsacoawq->keeuqgyooycqoygw($suaemuyiacqyugsm); goto goqmywuiicciasyk; gqmewagyagamokok: $suaemuyiacqyugsm = $iuekmkswcsacoawq->oqomcmyuuakigusk([$iuekmkswcsacoawq::URL => $eeamcawaiqocomwy, $iuekmkswcsacoawq::DOMAIN_ID => $wqykqusigegasqeg]); goto sqmoqymckwsogsqg; skuqigsokaguscas: $kigowwqauiumummw = true; goto quyogmwugsyoaaiu; qiaimmucomukkeka: if (!($wqykqusigegasqeg && $gwgucoaaqcwwciqq)) { goto agkmiayuawacakau; } goto aoquoewagkseayug; goqmywuiicciasyk: $kigowwqauiumummw = false; goto siecswkggyikqkga; yuqgwwmqwqiuwmaw: $sogksuscggsicmac = $iuekmkswcsacoawq->gscuuyuyauokoyuo([$iuekmkswcsacoawq->kumuygiiqswoyasy() => $acyqismwwkkaamus, self::STATUS => $iueymcwwscwqkiyq], true); goto quaqmuusokiyqgqe; sqmoqymckwsogsqg: if ($suaemuyiacqyugsm) { goto egmayaiikwsskgmy; } goto uycesqqkoeamocgm; uycesqqkoeamocgm: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\x65\161\x75\x65\163\164\x65\x64\40\160\141\x67\x65\x20\156\157\164\x20\145\x78\151\164\163\56", PR__PKG__OPTIMIZATION_MANAGER), 404); goto ceiwqkyquikcemmo; siecswkggyikqkga: if ($swwmymiaiosiyqis === $iueymcwwscwqkiyq) { goto zayqqeqgcwkekwws; } goto qkuiwoqksgayqqmg; qmoocweoekqueuyy: goto aueaceeyommgkicu; goto sgiwoiscywusgmmm; uoeasoimegouymka: $gwgucoaaqcwwciqq = ManipulateArray::get($keccaugmemegoimu, self::VALUE); goto egsycocugqyyswsi; sgiwoiscywusgmmm: zayqqeqgcwkekwws: goto skuqigsokaguscas; qkcsykuocwuyaice: if (is_wp_error($keccaugmemegoimu)) { goto syuaummumssgwwee; } goto uoeasoimegouymka; yuoeumyiuqkuouey: agkmiayuawacakau: goto eyiwqgqcsqakwqss; oocuemosmeeekgas: $keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa); goto qkcsykuocwuyaice; aoquoewagkseayug: $eeamcawaiqocomwy = $aqmwamyiwgeeymqa->get_param(self::PAGE); goto osuscoaaomwcqkew; iksewmsaugayqaqq: $keccaugmemegoimu = $this->oemauiimmycumcsk(print_r($sogksuscggsicmac[self::ERRORS], true), 500); goto yamyagayiooyeekg; quyogmwugsyoaaiu: aueaceeyommgkicu: goto mmgmqogugasaqkgg; easqmyamcmeesgya: if (!($keccaugmemegoimu && !is_wp_error($keccaugmemegoimu))) { goto oqousikwiiqagoyw; } goto yuqgwwmqwqiuwmaw; yssqmyoaokkksukc: } public function uyksiewkykwokysc($mokawwccycoiqeka, $syukqkeqkkwuiiii = true) { goto aukucaieceiwesmm; kqyoakickmseyyeq: $keccaugmemegoimu = true; goto micceocwuwkyusic; micceocwuwkyusic: if ($mkecsaoyggsmwmau > 0) { goto wgiygcmqaokywuqa; } goto iwueukqcywkiyqge; kicwiowcogmauwiy: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\131\x6f\x75\162\40\x62\165\x64\147\x65\x74\40\x69\x73\40\156\157\164\x20\145\x6e\157\165\147\x68\x20\x74\157\x20\x64\157\40\164\150\151\163\x2e", PR__PKG__OPTIMIZATION_MANAGER)); goto cwswueuqoamqasya; omykokikgocoikec: return $keccaugmemegoimu; goto csieaismmmocyacu; kgmeiwiakwicgkkk: osmmoyqkqoucsgow: goto suuskagowwgsouqw; iwueukqcywkiyqge: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\131\157\165\x20\143\x61\156\x27\164\x20\x64\157\x20\164\x68\x69\163\54\40\x62\145\143\141\x75\163\x65\40\171\x6f\x75\40\144\157\x6e\x27\x74\40\x68\x61\x76\145\x20\141\156\171\x20\142\165\x64\147\x65\164\56", PR__PKG__OPTIMIZATION_MANAGER), 401); goto ykwasaaoeeiuomim; egaymskkosukqeao: $ocqawgquwsqioses = Model::symcgieuakksimmu()->cwkywyqksyucoyia([Model::DOMAIN_ID => $mokawwccycoiqeka, self::STATUS => [self::ACTIVE, self::INACTIVE]]); goto kaiesowkgwogqseg; ykwasaaoeeiuomim: goto iauwuugggmegwisk; goto acggikioyeueeowg; kaiesowkgwogqseg: if (!(count($ocqawgquwsqioses) >= $mkecsaoyggsmwmau)) { goto ooqksueucyagyuoe; } goto kicwiowcogmauwiy; cwswueuqoamqasya: ooqksueucyagyuoe: goto kgmeiwiakwicgkkk; aukucaieceiwesmm: $mkecsaoyggsmwmau = Budget::symcgieuakksimmu()->oewseeiwmgwckyuk($mokawwccycoiqeka); goto kqyoakickmseyyeq; cwikoaeqmmoimmso: if (!$syukqkeqkkwuiiii) { goto osmmoyqkqoucsgow; } goto egaymskkosukqeao; suuskagowwgsouqw: iauwuugggmegwisk: goto omykokikgocoikec; acggikioyeueeowg: wgiygcmqaokywuqa: goto cwikoaeqmmoimmso; csieaismmmocyacu: } }
