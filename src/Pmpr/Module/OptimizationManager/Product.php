<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e6466a20679             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager; use Exception; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateBootstrap; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\ComponentManager\Product as BaseClass; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\OptimizationManager\Model\Budget; use Pmpr\Module\OptimizationManager\Model\Domain as OptDomain; use Pmpr\Module\OptimizationManager\Traits\CommonTrait; use WC_Order_Item_Product; class Product extends BaseClass { use CommonTrait; const kgyawuuygekasmwc = "\x6c\145\x76\145\154"; const imeuukiiccuqqosc = "\163\164\141\162\x74\137\x62\x75\x64\147\145\164\137\144\141\164\x65"; public function __construct($wksoawcgagcgoask = null, $product = null) { $this->backlinkable = true; parent::__construct($wksoawcgagcgoask, $product); } protected ?string $expire = null; public function oycgwasemqgaskiu() : ?string { return $this->expire; } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\155\x75\154\164\x69\x5f\163\x74\x65\x70\137\143\150\x65\143\x6b\x5f\166\141\x72\151\x61\x74\x69\157\x6e\163"), [$this, "\x6f\x67\x71\153\155\x6d\x6b\x61\x6f\143\x61\141\155\161\163\x6d"], 10, 4)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\155\165\154\x74\151\x5f\163\164\x65\x70\x5f\166\141\x72\151\x61\164\x69\x6f\x6e\x73\137\x62\145\146\x6f\162\145\137\x61\x64\144\x5f\164\157\137\143\141\162\164"), [$this, "\x6f\x63\143\147\x65\x75\x77\x63\x71\x73\153\x73\171\171\171\x79"], 10, 3); parent::kgquecmsgcouyaya(); } public function occgeuwcqsksyyyy($qecuekqmeaiykeek, $product, $mokawwccycoiqeka) { if (!($this->ciauysumoumgskgw($product) && $this->gaiasoueuycmiwcm($mokawwccycoiqeka, $wiiucqsygckgwcia))) { goto ssoucoucsgccekwe; } ManipulateArray::unset($qecuekqmeaiykeek, 0); ssoucoucsgccekwe: return $qecuekqmeaiykeek; } public function ogqkmmkaocaamqsm($uamcoiueqaamsqma, $product, $mokawwccycoiqeka, $qecuekqmeaiykeek) { if (!$this->ciauysumoumgskgw($product)) { goto ywqgcegomwaiuquc; } if ($qecuekqmeaiykeek && is_array($qecuekqmeaiykeek)) { goto miyqyeiwquwsacsm; } $uamcoiueqaamsqma = __("\116\x6f\40\166\141\x72\151\141\164\x69\157\x6e\163\40\x73\145\x6c\145\x63\x74\x65\x64", PR__MDL__OPTIMIZATION_MANAGER); goto eegqyykygiccaoeo; miyqyeiwquwsacsm: if (!(count($qecuekqmeaiykeek) < 2 && $this->gaiasoueuycmiwcm($mokawwccycoiqeka, $wiiucqsygckgwcia))) { goto qkcyqocqqwmqgqww; } $uamcoiueqaamsqma = sprintf(__("\x64\x6f\x6d\x61\x69\156\40\x25\x73\54\x20\x61\x6c\x72\x65\x61\144\x79\40\x68\x61\x73\40\146\x72\x65\x65\x20\166\145\x72\163\151\157\x6e\54\40\x70\154\145\141\x73\x65\x20\141\144\144\x20\x6d\157\x72\145\x20\x76\x61\162\151\x61\164\x69\157\x6e\x20\164\x6f\x20\143\x6f\156\x74\x69\x6e\165\145", PR__MDL__OPTIMIZATION_MANAGER), ManipulateHTML::ciuuiyckmsygceis(ManipulateArray::get($wiiucqsygckgwcia, self::ciyoccqkiamemcmm))); qkcyqocqqwmqgqww: eegqyykygiccaoeo: ywqgcegomwaiuquc: return $uamcoiueqaamsqma; } public function gaiasoueuycmiwcm($mokawwccycoiqeka, &$wiiucqsygckgwcia) : bool { $myagqecycsaiyqsk = false; $wiiucqsygckgwcia = $this->gugmsucsyeywucoe($mokawwccycoiqeka); if (!$wiiucqsygckgwcia) { goto suswcqoyyqkkquuo; } $immcykkykeqgkgwg = OptDomain::symcgieuakksimmu(); if (!$immcykkykeqgkgwg) { goto acaqummmoyiemqss; } $wwwcwiueuuyyokia = $immcykkykeqgkgwg->uskosecsqoiqwmua($wiiucqsygckgwcia); if (!$wwwcwiueuuyyokia) { goto soqqemyioggmoakg; } $yoqasmiegcmcqaus = Budget::symcgieuakksimmu(); if (!$yoqasmiegcmcqaus) { goto wmmggowmigekyoso; } $myagqecycsaiyqsk = $yoqasmiegcmcqaus->qumqowkwyaceeqwu([self::iiooageieusuyomy => self::yygyasgygkeqacou, self::ciyoccqkiamemcmm => "\60", Budget::qkmqmaeuyokqgemg => $immcykkykeqgkgwg->keeuqgyooycqoygw($wwwcwiueuuyyokia)]); wmmggowmigekyoso: soqqemyioggmoakg: acaqummmoyiemqss: suswcqoyyqkkquuo: return $myagqecycsaiyqsk; } public function umeweaskauicgikc($icwicymcioeyeyek, $wiiucqsygckgwcia, WC_Order_Item_Product $cawesmkieccckaae, bool $wmgiiumwscoyqkqa) { $umwqusowiqmyseom = $cawesmkieccckaae->get_order(); if (!($umwqusowiqmyseom && $this->qaueesycysuwggmc())) { goto skkamseieeusycye; } try { $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $yoqasmiegcmcqaus = Budget::symcgieuakksimmu(); $immcykkykeqgkgwg = OptDomain::symcgieuakksimmu(); if (!($swgwkyqkakceqeia && $yoqasmiegcmcqaus && $immcykkykeqgkgwg)) { goto soaccwqimeksgwiw; } $wwwcwiueuuyyokia = null; $fooqqkeicsiaascw = null; if (!($wiiucqsygckgwcia && !$wmgiiumwscoyqkqa)) { goto eeqesooyqagwawae; } $wwwcwiueuuyyokia = $immcykkykeqgkgwg->uskosecsqoiqwmua($wiiucqsygckgwcia); eeqesooyqagwawae: $akyiigeggqowmqqq = $swgwkyqkakceqeia->keeuqgyooycqoygw($wiiucqsygckgwcia); if (!$wwwcwiueuuyyokia) { goto iekumemscwieugqw; } $fooqqkeicsiaascw = $immcykkykeqgkgwg->keeuqgyooycqoygw($wwwcwiueuuyyokia); goto hoeeyiowekaeemko; iekumemscwieugqw: $sogksuscggsicmac = $immcykkykeqgkgwg->gscuuyuyauokoyuo([$immcykkykeqgkgwg::qkmqmaeuyokqgemg => $akyiigeggqowmqqq, $immcykkykeqgkgwg::ymamoeqaciwakwue => false]); if (!$sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto oqugqwcyomiaaoqu; } $fooqqkeicsiaascw = $swgwkyqkakceqeia->keeuqgyooycqoygw($sogksuscggsicmac); goto foeeqckqsyockkak; oqugqwcyomiaaoqu: $this->uocccyeugiykcmes($sogksuscggsicmac[self::iwyueouqaqegmcas], __("\103\x61\x6e\40\x6e\x6f\x74\x20\x63\x72\x65\x61\x74\x65\40\157\x70\x74\40\x64\x6f\155\x61\x69\x6e\x3a\40\x25\163", PR__MDL__OPTIMIZATION_MANAGER)); foeeqckqsyockkak: hoeeyiowekaeemko: if (!$fooqqkeicsiaascw) { goto suqkuqygkkgwyaie; } if ($yoqasmiegcmcqaus->qumqowkwyaceeqwu([$yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $fooqqkeicsiaascw, $yoqasmiegcmcqaus::yuqaqwkmmeuawswk => $cawesmkieccckaae->get_id()])) { goto aegysmeecgcgayyw; } $isweyuoisomqyaag = $this->oyqguwgqyigmuwow($cawesmkieccckaae, $icwicymcioeyeyek); if (!$isweyuoisomqyaag) { goto gaomwagkcciesyqy; } $wwgucssaecqekuek = ManipulateArray::get($isweyuoisomqyaag, self::ysskgssgwuwmqwym); $mksyucucyswaukig = ManipulateArray::get($isweyuoisomqyaag, self::ckmqoekmugkggeym); $ggkaciewmeqmgckg = ManipulateArray::get($icwicymcioeyeyek, self::imeuukiiccuqqosc, date("\x59\x2d\155\55\x64")); if (!$wwgucssaecqekuek) { goto esuiysskoweawsue; } if (!ManipulateWoocommerce::okeikygoukyckqcc($mksyucucyswaukig, self::smsioacowoikwikc)) { goto usquiuuyiyqaeyiu; } $uoomaookgsyciacm = [$yoqasmiegcmcqaus::ciyoccqkiamemcmm => ManipulateArray::get($wwgucssaecqekuek, $yoqasmiegcmcqaus::ciyoccqkiamemcmm), $yoqasmiegcmcqaus::iiooageieusuyomy => ManipulateArray::get($wwgucssaecqekuek, $yoqasmiegcmcqaus::iiooageieusuyomy), $yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $fooqqkeicsiaascw]; if (!$yoqasmiegcmcqaus->qumqowkwyaceeqwu($uoomaookgsyciacm)) { goto kymkucucyeoeikim; } $this->yqkwsouguwgoywcw(''); kymkucucyeoeikim: usquiuuyiyqaeyiu: $gqswsiquqaayuakq = [$yoqasmiegcmcqaus::sqsuiimgeguwgmcg => $ggkaciewmeqmgckg, $yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $fooqqkeicsiaascw, $yoqasmiegcmcqaus::yuqaqwkmmeuawswk => $cawesmkieccckaae->get_id()]; $gqswsiquqaayuakq = array_merge($wwgucssaecqekuek, $gqswsiquqaayuakq); if (count($gqswsiquqaayuakq) === 6) { goto uguigkcmukuouway; } $this->yqkwsouguwgoywcw(__("\x42\165\144\147\x65\164\40\x63\x61\x6e\47\x74\x20\142\145\x20\x61\144\x64\x2c\40\x73\x6f\155\x65\40\162\145\x71\x75\151\162\x65\x20\x66\151\x65\154\x64\163\40\x6e\157\x74\x20\x73\145\164\x2e", PR__MDL__OPTIMIZATION_MANAGER)); goto uqqaiagaeqgqgaiy; uguigkcmukuouway: $sogksuscggsicmac = $yoqasmiegcmcqaus->gscuuyuyauokoyuo($gqswsiquqaayuakq); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto qicwaskssogcokgm; } $this->uocccyeugiykcmes($sogksuscggsicmac[self::iwyueouqaqegmcas]); qicwaskssogcokgm: uqqaiagaeqgqgaiy: esuiysskoweawsue: gaomwagkcciesyqy: aegysmeecgcgayyw: suqkuqygkkgwyaie: soaccwqimeksgwiw: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $this->kyacickkomkioeyu($wgaoewqkwgomoaai); if (!$uamcoiueqaamsqma) { goto wiysogeqqwgioyka; } $umwqusowiqmyseom->add_order_note($uamcoiueqaamsqma); wiysogeqqwgioyka: } skkamseieeusycye: } public function micmaeaccooaeuim($uomewyckeuqoqocu, $isweyuoisomqyaag, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $sqeykgyoooqysmca, $icwicymcioeyeyek) { switch ($sqeykgyoooqysmca) { case self::kumuoysauoagaiiy: $ucicuwcaawugkseg = ManipulateArray::get($ymkomoccmymcoiea, self::gouqcwikiiygyasc); $euceoqscgmweosya = ManipulateTerm::igawqaomowicuayw($ucicuwcaawugkseg, "\144\141\164\145\x5f\x74\171\x70\x65", true); if ($euceoqscgmweosya) { goto giaacoqqqsekcayy; } $euceoqscgmweosya = self::qummiiakyucoycws; giaacoqqqsekcayy: $qmeuaeiseuacgiqc = $this->oycgwasemqgaskiu(); $ggkaciewmeqmgckg = ManipulateArray::get($icwicymcioeyeyek, self::imeuukiiccuqqosc, date("\x59\55\x6d\55\144")); if ($qmeuaeiseuacgiqc) { goto cmegwsegsosyqcai; } $qmeuaeiseuacgiqc = $this->myaugesymggoiooy($ggkaciewmeqmgckg, $eqgoocgaqwqcimie, $euceoqscgmweosya); if (!(is_string($qmeuaeiseuacgiqc) && !ManipulateWoocommerce::okeikygoukyckqcc($isweyuoisomqyaag, self::smsioacowoikwikc))) { goto ewymsmkkiksgwysk; } $this->expire = $qmeuaeiseuacgiqc; ewymsmkkiksgwysk: cmegwsegsosyqcai: $uomewyckeuqoqocu[self::wcoquosyucmegcsq] = $qmeuaeiseuacgiqc; goto cgiscsqwwgqqaeqi; case self::eymwucuaaiiciymc: $uomewyckeuqoqocu[self::ciyoccqkiamemcmm] = $eqgoocgaqwqcimie ?: 0; goto cgiscsqwwgqqaeqi; case self::kgyawuuygekasmwc: $uomewyckeuqoqocu[self::iiooageieusuyomy] = $eqgoocgaqwqcimie >= 2 ? self::cwoackywkgsameww : self::yygyasgygkeqacou; goto cgiscsqwwgqqaeqi; default: } syiqkaasoueowwui: cgiscsqwwgqqaeqi: return parent::micmaeaccooaeuim($uomewyckeuqoqocu, $isweyuoisomqyaag, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $sqeykgyoooqysmca, $icwicymcioeyeyek); } public function enqueue() { if (!($eygsasmqycagyayw = $this->miocmcoykayoyyau())) { goto wmywuusgukmmaams; } $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\160\x72\x6f\x64\x75\x63\x74", $eygsasmqycagyayw->get("\x70\x72\157\144\x75\143\164\x2e\x6a\x73"))->simswskycwagoeqy()); $eygsasmqycagyayw->ieayqiyiuuguowyq(self::iwyueouqaqegmcas, ["\163\x74\141\162\x74\x5f\x64\x61\x74\145\137\x6e\x6f\x74\137\x76\x61\154\x69\x64" => __("\x53\x74\x61\x72\x74\x20\x44\x61\164\145\40\x69\163\40\156\x6f\164\x20\x61\40\x76\x61\154\151\x64\x20\x64\x61\164\145\x2e", PR__MDL__OPTIMIZATION_MANAGER), "\163\x74\141\x72\164\137\x64\141\x74\x65\137\162\x65\x71\x75\x69\x72\145" => __("\x50\x6c\145\141\x73\145\x20\x66\151\154\154\x20\163\x74\x61\162\164\x20\x64\141\x74\145\x2e", PR__MDL__OPTIMIZATION_MANAGER), "\163\x74\141\x72\x74\x5f\x64\141\x74\145\137\160\x61\163\x73\x65\144" => __("\131\x6f\165\x20\103\x61\x6e\40\156\x6f\x74\x20\x75\163\x65\x20\160\x61\x73\x73\145\x64\x20\144\x61\x74\x65\40\x66\157\162\40\163\x74\x61\162\164\x20\x64\141\164\145\x2e", PR__MDL__OPTIMIZATION_MANAGER)]); wmywuusgukmmaams: parent::enqueue(); } public function iqomsiuaqegycowu($ewgwqamkygiqaawc, $product) : string { $mykomoygwwmoksge = Setting::eiwcuqigayigimak(Setting::ueagcuikcyyoyymi, []); if (!$mykomoygwwmoksge) { goto gkyawqqcmigqgaiq; } $xwwgygqkqwuaqwsa = $this->qqmwsmimiiiqkooo(); $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x73\x74\141\164\x69\x73\x74\x69\x63\x73", ["\154\145\x76\x65\x6c\163" => $xwwgygqkqwuaqwsa, self::qescuiwgsyuikume => Setting::eiwcuqigayigimak(Setting::csascsakmmskewuy, ''), self::qwumqqyuasyskkkc => Setting::eiwcuqigayigimak(Setting::ueagcuikcyyoyymi, []), self::soquiwyuimckgiow => [self::qescuiwgsyuikume => ''] + $xwwgygqkqwuaqwsa, self::eqkeooqcsscoggia => Setting::eiwcuqigayigimak(Setting::wimciyacmqeewiqk, '')]); gkyawqqcmigqgaiq: return $ewgwqamkygiqaawc; } public function ewweaossowcqywaw(array $qookweymeqawmcwo, array $ikgwqyuyckaewsow, ?string $qqscaoyqikuyeoaw = null) : array { if (!($qqscaoyqikuyeoaw === self::cwgqacsqwyukoeiy)) { goto egyyiccaeeiooaua; } if (!($cmwygeyygwqaemaq = Setting::eiwcuqigayigimak(Setting::yuwgaqcmuqeeyqmi))) { goto ooeausyowguqicuo; } $eosogusikmqwywgs = ManipulateBootstrap::oockkqiqsssakuug($cmwygeyygwqaemaq, self::ckcawaoawwioqecq, [], false); $ikgwqyuyckaewsow[] = Form::wowyaacgaccyeici($eosogusikmqwywgs)->jyumyyugiwwiqomk(0); ooeausyowguqicuo: $ikgwqyuyckaewsow[] = Form::cmmsoiggwwuyqqks(self::imeuukiiccuqqosc, __("\123\x74\141\162\164\40\102\x75\144\x67\x65\164\40\104\x61\164\145", PR__MDL__OPTIMIZATION_MANAGER))->cgeiiwakumywwowu()->jyumyyugiwwiqomk(100)->qqoqoqmusaueoyca()->uuagoowwgcuosuuu()->cyuyuseegoqgwmas(); egyyiccaeeiooaua: return parent::ewweaossowcqywaw($qookweymeqawmcwo, $ikgwqyuyckaewsow, $qqscaoyqikuyeoaw); } }
