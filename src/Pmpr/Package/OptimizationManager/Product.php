<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c0277fe82f9             |
    |_______________________________________|
*/
 namespace Pmpr\Package\OptimizationManager; use Exception; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateBootstrap; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\ComponentManager\Product as BaseClass; use Pmpr\Package\DomainManager\Model\Domain; use Pmpr\Package\OptimizationManager\Interfaces\CommonInterface; use Pmpr\Package\OptimizationManager\Model\Budget; use Pmpr\Package\OptimizationManager\Model\Domain as OptDomain; use Pmpr\Package\OptimizationManager\Traits\CommonTrait; use WC_Order_Item_Product; class Product extends BaseClass implements CommonInterface { const LEVEL_TYPE = "\x6c\x65\166\145\154"; const START_BUDGET_DATE = "\x73\164\x61\162\x74\137\142\165\144\x67\145\x74\x5f\144\141\164\145"; use CommonTrait; protected ?string $expire = null; public function oycgwasemqgaskiu() : ?string { return $this->expire; } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6d\165\154\164\x69\137\163\164\x65\160\x5f\143\x68\x65\x63\153\x5f\166\141\162\151\141\x74\x69\x6f\x6e\163"), [$this, "\x6f\147\161\153\x6d\155\153\x61\x6f\x63\141\x61\x6d\161\x73\155"], 10, 4)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\155\x75\154\x74\151\x5f\163\x74\145\160\137\x76\x61\162\151\x61\164\x69\x6f\x6e\x73\x5f\x62\x65\x66\157\x72\145\137\141\144\144\x5f\164\x6f\137\143\141\x72\164"), [$this, "\x6f\143\x63\147\145\x75\x77\143\161\163\x6b\163\171\x79\171\171"], 10, 3); parent::kgquecmsgcouyaya(); } public function occgeuwcqsksyyyy($qecuekqmeaiykeek, $product, $mokawwccycoiqeka) { if (!(ManipulateWoocommerce::omwkqcuwceweymcc($product) == $this->aqasygcsqysmmyke())) { goto gygawoqywkukmqee; } if (!$this->gaiasoueuycmiwcm($mokawwccycoiqeka, $wiiucqsygckgwcia)) { goto sycygoiaiqqageym; } ManipulateArray::unset($qecuekqmeaiykeek, 0); sycygoiaiqqageym: gygawoqywkukmqee: return $qecuekqmeaiykeek; } public function ogqkmmkaocaamqsm($uamcoiueqaamsqma, $product, $mokawwccycoiqeka, $qecuekqmeaiykeek) { if (!(ManipulateWoocommerce::omwkqcuwceweymcc($product) == $this->aqasygcsqysmmyke())) { goto kiwqkcaekqqyuegq; } if ($qecuekqmeaiykeek && is_array($qecuekqmeaiykeek)) { goto umgaesggesswoaqe; } $uamcoiueqaamsqma = __("\116\157\40\166\x61\162\151\x61\x74\x69\x6f\x6e\x73\x20\163\145\154\x65\x63\164\145\144", PR__PKG__OPTIMIZATION_MANAGER); goto qsygcycwieukkgwc; umgaesggesswoaqe: if (!(count($qecuekqmeaiykeek) < 2)) { goto wwkgkaecgiwggcck; } if (!$this->gaiasoueuycmiwcm($mokawwccycoiqeka, $wiiucqsygckgwcia)) { goto kciouyuaqkyqomam; } $uamcoiueqaamsqma = sprintf(__("\144\157\155\x61\x69\156\40\x25\x73\54\40\141\154\x72\x65\141\144\x79\x20\150\141\x73\x20\x66\162\x65\145\40\166\x65\162\163\x69\157\x6e\x2c\40\x70\154\x65\x61\163\x65\x20\141\x64\x64\40\x6d\x6f\x72\145\40\166\141\162\x69\141\x74\151\x6f\x6e\40\x74\x6f\40\143\157\x6e\x74\151\156\165\x65", PR__PKG__OPTIMIZATION_MANAGER), ManipulateHTML::ciuuiyckmsygceis(ManipulateArray::get($wiiucqsygckgwcia, self::ciyoccqkiamemcmm))); kciouyuaqkyqomam: wwkgkaecgiwggcck: qsygcycwieukkgwc: kiwqkcaekqqyuegq: return $uamcoiueqaamsqma; } public function gaiasoueuycmiwcm($mokawwccycoiqeka, &$wiiucqsygckgwcia) : bool { $myagqecycsaiyqsk = false; $wiiucqsygckgwcia = $this->gugmsucsyeywucoe($mokawwccycoiqeka); if (!$wiiucqsygckgwcia) { goto iqcogmsguwoikame; } $immcykkykeqgkgwg = OptDomain::symcgieuakksimmu(); $wwwcwiueuuyyokia = $immcykkykeqgkgwg->uskosecsqoiqwmua($wiiucqsygckgwcia); if (!$wwwcwiueuuyyokia) { goto quwcqmyokicssyew; } $myagqecycsaiyqsk = Budget::symcgieuakksimmu()->qumqowkwyaceeqwu([Budget::iiooageieusuyomy => Budget::LEVEL_1, Budget::ciyoccqkiamemcmm => "\x30", Budget::DOMAIN_ID => $immcykkykeqgkgwg->keeuqgyooycqoygw($wwwcwiueuuyyokia)]); quwcqmyokicssyew: iqcogmsguwoikame: return $myagqecycsaiyqsk; } public function umeweaskauicgikc($icwicymcioeyeyek, $wiiucqsygckgwcia, WC_Order_Item_Product $cawesmkieccckaae, bool $wmgiiumwscoyqkqa) { $umwqusowiqmyseom = $cawesmkieccckaae->get_order(); if (!($umwqusowiqmyseom && $this->qaueesycysuwggmc())) { goto wmmggowmigekyoso; } try { $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $yoqasmiegcmcqaus = Budget::symcgieuakksimmu(); $immcykkykeqgkgwg = OptDomain::symcgieuakksimmu(); $wwwcwiueuuyyokia = null; $fooqqkeicsiaascw = null; if (!($wiiucqsygckgwcia && !$wmgiiumwscoyqkqa)) { goto gimmuoqwckiseaik; } $wwwcwiueuuyyokia = $immcykkykeqgkgwg->uskosecsqoiqwmua($wiiucqsygckgwcia); gimmuoqwckiseaik: $akyiigeggqowmqqq = $swgwkyqkakceqeia->keeuqgyooycqoygw($wiiucqsygckgwcia); if (!$wwwcwiueuuyyokia) { goto ayyweymyuuiauamo; } $fooqqkeicsiaascw = $immcykkykeqgkgwg->keeuqgyooycqoygw($wwwcwiueuuyyokia); goto mosqsmqimqgqoase; ayyweymyuuiauamo: $sogksuscggsicmac = $immcykkykeqgkgwg->gscuuyuyauokoyuo([$immcykkykeqgkgwg::DOMAIN_ID => $akyiigeggqowmqqq, $immcykkykeqgkgwg::ymamoeqaciwakwue => false]); if (!$sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto cmqucgoewuyieoyk; } $fooqqkeicsiaascw = $swgwkyqkakceqeia->keeuqgyooycqoygw($sogksuscggsicmac); goto yqykqysmiquwoasu; cmqucgoewuyieoyk: $this->uocccyeugiykcmes($sogksuscggsicmac[self::iwyueouqaqegmcas], __("\x43\141\x6e\x20\x6e\157\x74\40\x63\x72\x65\141\164\x65\x20\x6f\x70\164\40\x64\x6f\x6d\141\x69\x6e\x3a\40\45\x73", PR__PKG__OPTIMIZATION_MANAGER)); yqykqysmiquwoasu: mosqsmqimqgqoase: if (!$fooqqkeicsiaascw) { goto eegqyykygiccaoeo; } if ($yoqasmiegcmcqaus->qumqowkwyaceeqwu([$yoqasmiegcmcqaus::DOMAIN_ID => $fooqqkeicsiaascw, $yoqasmiegcmcqaus::ORDER_ITEM => $cawesmkieccckaae->get_id()])) { goto miyqyeiwquwsacsm; } $isweyuoisomqyaag = $this->oyqguwgqyigmuwow($cawesmkieccckaae, $icwicymcioeyeyek); if (!$isweyuoisomqyaag) { goto qkcyqocqqwmqgqww; } $wwgucssaecqekuek = ManipulateArray::get($isweyuoisomqyaag, self::ysskgssgwuwmqwym); $mksyucucyswaukig = ManipulateArray::get($isweyuoisomqyaag, self::ckmqoekmugkggeym); $ggkaciewmeqmgckg = ManipulateArray::get($icwicymcioeyeyek, self::START_BUDGET_DATE, date("\x59\55\155\x2d\144")); if (!$wwgucssaecqekuek) { goto ssoucoucsgccekwe; } if (!ManipulateWoocommerce::okeikygoukyckqcc($mksyucucyswaukig, self::INDICATOR_NOT_ADDABLE_BY_USER)) { goto ygcsmkuycoagwyou; } $uoomaookgsyciacm = [$yoqasmiegcmcqaus::ciyoccqkiamemcmm => ManipulateArray::get($wwgucssaecqekuek, $yoqasmiegcmcqaus::ciyoccqkiamemcmm), $yoqasmiegcmcqaus::iiooageieusuyomy => ManipulateArray::get($wwgucssaecqekuek, $yoqasmiegcmcqaus::iiooageieusuyomy), $yoqasmiegcmcqaus::DOMAIN_ID => $fooqqkeicsiaascw]; if (!$yoqasmiegcmcqaus->qumqowkwyaceeqwu($uoomaookgsyciacm)) { goto omugkkesagcyagmk; } $this->yqkwsouguwgoywcw(''); omugkkesagcyagmk: ygcsmkuycoagwyou: $gqswsiquqaayuakq = [$yoqasmiegcmcqaus::sqsuiimgeguwgmcg => $ggkaciewmeqmgckg, $yoqasmiegcmcqaus::DOMAIN_ID => $fooqqkeicsiaascw, $yoqasmiegcmcqaus::ORDER_ITEM => $cawesmkieccckaae->get_id()]; $gqswsiquqaayuakq = array_merge($wwgucssaecqekuek, $gqswsiquqaayuakq); if (count($gqswsiquqaayuakq) === 6) { goto iggyqogweyosuikc; } $this->yqkwsouguwgoywcw(__("\x42\165\x64\147\145\x74\x20\143\x61\x6e\x27\164\x20\142\145\x20\x61\x64\x64\54\40\x73\157\155\x65\40\162\x65\x71\165\x69\162\x65\40\x66\151\145\x6c\x64\163\40\x6e\x6f\x74\40\x73\x65\164\56", PR__PKG__OPTIMIZATION_MANAGER)); goto qqewoyookaskiuek; iggyqogweyosuikc: $sogksuscggsicmac = $yoqasmiegcmcqaus->gscuuyuyauokoyuo($gqswsiquqaayuakq); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto kqksuugcgsyeoayy; } $this->uocccyeugiykcmes($sogksuscggsicmac[self::iwyueouqaqegmcas]); kqksuugcgsyeoayy: qqewoyookaskiuek: ssoucoucsgccekwe: qkcyqocqqwmqgqww: miyqyeiwquwsacsm: eegqyykygiccaoeo: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $this->kyacickkomkioeyu($wgaoewqkwgomoaai); if (!$uamcoiueqaamsqma) { goto ywqgcegomwaiuquc; } $umwqusowiqmyseom->add_order_note($uamcoiueqaamsqma); ywqgcegomwaiuquc: } wmmggowmigekyoso: parent::umeweaskauicgikc($icwicymcioeyeyek, $wiiucqsygckgwcia, $cawesmkieccckaae, $wmgiiumwscoyqkqa); } public function micmaeaccooaeuim($uomewyckeuqoqocu, $isweyuoisomqyaag, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $sqeykgyoooqysmca, $icwicymcioeyeyek) { switch ($sqeykgyoooqysmca) { case self::kumuoysauoagaiiy: $ucicuwcaawugkseg = ManipulateArray::get($ymkomoccmymcoiea, self::gouqcwikiiygyasc); $euceoqscgmweosya = ManipulateTerm::igawqaomowicuayw($ucicuwcaawugkseg, "\144\x61\x74\x65\x5f\x74\171\x70\x65", true); if ($euceoqscgmweosya) { goto suswcqoyyqkkquuo; } $euceoqscgmweosya = self::qummiiakyucoycws; suswcqoyyqkkquuo: $qmeuaeiseuacgiqc = $this->oycgwasemqgaskiu(); if ($qmeuaeiseuacgiqc) { goto foeeqckqsyockkak; } $ggkaciewmeqmgckg = ManipulateArray::get($icwicymcioeyeyek, self::START_BUDGET_DATE, date("\x59\x2d\x6d\55\x64")); $qmeuaeiseuacgiqc = $this->myaugesymggoiooy($ggkaciewmeqmgckg, $eqgoocgaqwqcimie, $euceoqscgmweosya); if (ManipulateWoocommerce::okeikygoukyckqcc($isweyuoisomqyaag, self::INDICATOR_NOT_ADDABLE_BY_USER)) { goto oqugqwcyomiaaoqu; } if (!is_string($qmeuaeiseuacgiqc)) { goto eeqesooyqagwawae; } $this->expire = $qmeuaeiseuacgiqc; eeqesooyqagwawae: oqugqwcyomiaaoqu: foeeqckqsyockkak: $ggkaciewmeqmgckg = ManipulateArray::get($icwicymcioeyeyek, self::START_BUDGET_DATE, date("\x59\55\x6d\x2d\x64")); $uomewyckeuqoqocu[Budget::wcoquosyucmegcsq] = $this->myaugesymggoiooy($ggkaciewmeqmgckg, $eqgoocgaqwqcimie, $euceoqscgmweosya); goto soqqemyioggmoakg; case self::eymwucuaaiiciymc: $uomewyckeuqoqocu[Budget::ciyoccqkiamemcmm] = $eqgoocgaqwqcimie; goto soqqemyioggmoakg; case self::LEVEL_TYPE: $uomewyckeuqoqocu[Budget::iiooageieusuyomy] = $eqgoocgaqwqcimie == 1 ? Budget::LEVEL_1 : Budget::LEVEL_2; goto soqqemyioggmoakg; default: } acaqummmoyiemqss: soqqemyioggmoakg: return parent::micmaeaccooaeuim($uomewyckeuqoqocu, $isweyuoisomqyaag, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $sqeykgyoooqysmca, $icwicymcioeyeyek); } public function enqueue() { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\x70\162\x6f\x64\165\x63\164", $eygsasmqycagyayw->get("\x70\x72\157\x64\165\143\x74\x2e\152\x73"))->ayuciigykaswwqeo("\x6a\x71\x75\145\162\x79")); $eygsasmqycagyayw->ieayqiyiuuguowyq(self::iwyueouqaqegmcas, ["\163\x74\x61\x72\164\x5f\x64\141\x74\145\137\x6e\x6f\164\x5f\x76\x61\x6c\x69\x64" => __("\123\164\141\x72\164\x20\104\141\164\x65\40\151\163\40\156\157\x74\x20\141\40\x76\x61\154\151\x64\x20\144\141\164\145\x2e", PR__PKG__OPTIMIZATION_MANAGER), "\163\164\x61\162\164\x5f\x64\141\164\145\x5f\162\x65\x71\165\x69\x72\145" => __("\x50\x6c\145\141\163\x65\40\146\151\x6c\x6c\x20\x73\164\x61\162\164\x20\144\141\x74\x65\x2e", PR__PKG__OPTIMIZATION_MANAGER), "\x73\x74\141\162\x74\x5f\144\141\164\x65\x5f\x70\141\x73\x73\x65\144" => __("\x59\157\165\40\x43\141\156\40\x6e\157\164\x20\165\x73\x65\x20\x70\x61\x73\163\x65\x64\40\x64\141\x74\145\40\146\x6f\162\40\x73\164\x61\162\164\40\x64\141\164\145\x2e", PR__PKG__OPTIMIZATION_MANAGER)]); parent::enqueue(); } public function iqomsiuaqegycowu($ewgwqamkygiqaawc, $product) : string { $mykomoygwwmoksge = Setting::eiwcuqigayigimak(Setting::ueagcuikcyyoyymi, []); if (!$mykomoygwwmoksge) { goto iekumemscwieugqw; } $xwwgygqkqwuaqwsa = $this->qqmwsmimiiiqkooo(); $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x73\164\x61\x74\x69\163\x74\x69\143\x73", ["\154\x65\x76\x65\154\163" => $xwwgygqkqwuaqwsa, "\164\x69\x74\154\145" => Setting::eiwcuqigayigimak(Setting::STATISTICS_TITLE, ''), "\151\164\145\x6d\x73" => Setting::eiwcuqigayigimak(Setting::ueagcuikcyyoyymi, []), "\143\157\154\x75\x6d\x6e\163" => [self::qescuiwgsyuikume => ''] + $xwwgygqkqwuaqwsa, "\144\145\x73\x63\162\x69\160\164\x69\x6f\156" => Setting::eiwcuqigayigimak(Setting::STATISTICS_DESCRIPTION, '')]); iekumemscwieugqw: return $ewgwqamkygiqaawc; } public function ewweaossowcqywaw(array $qookweymeqawmcwo, array $ikgwqyuyckaewsow, ?string $qqscaoyqikuyeoaw = null) : array { if (!($qqscaoyqikuyeoaw === self::CHOICE_VARIATIONS_STEP)) { goto kymkucucyeoeikim; } $cmwygeyygwqaemaq = Setting::eiwcuqigayigimak(Setting::FREE_VARIATION_ALERT_TEXT); if (!$cmwygeyygwqaemaq) { goto hoeeyiowekaeemko; } $eosogusikmqwywgs = ManipulateBootstrap::oockkqiqsssakuug($cmwygeyygwqaemaq, self::ckcawaoawwioqecq, [], false); $ikgwqyuyckaewsow[] = Form::wowyaacgaccyeici($eosogusikmqwywgs)->jyumyyugiwwiqomk(0); hoeeyiowekaeemko: $ikgwqyuyckaewsow[] = Form::cmmsoiggwwuyqqks(self::START_BUDGET_DATE, __("\x53\164\141\x72\x74\40\102\x75\144\x67\x65\164\x20\104\x61\x74\x65", PR__PKG__OPTIMIZATION_MANAGER))->cgeiiwakumywwowu()->jyumyyugiwwiqomk(100)->qqoqoqmusaueoyca()->uuagoowwgcuosuuu()->cyuyuseegoqgwmas(); kymkucucyeoeikim: return parent::ewweaossowcqywaw($qookweymeqawmcwo, $ikgwqyuyckaewsow, $qqscaoyqikuyeoaw); } }
