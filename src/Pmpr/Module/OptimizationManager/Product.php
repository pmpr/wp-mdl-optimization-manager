<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6284dc10aad8b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager; use Exception; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateBootstrap; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\ComponentManager\Product as BaseClass; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\OptimizationManager\Interfaces\CommonInterface; use Pmpr\Module\OptimizationManager\Model\Budget; use Pmpr\Module\OptimizationManager\Model\Domain as OptDomain; use Pmpr\Module\OptimizationManager\Traits\CommonTrait; use WC_Order_Item_Product; class Product extends BaseClass implements CommonInterface { use CommonTrait; const kgyawuuygekasmwc = "\x6c\x65\166\145\x6c"; const imeuukiiccuqqosc = "\163\164\141\x72\164\137\x62\x75\x64\147\x65\x74\x5f\144\x61\x74\145"; public function __construct($wksoawcgagcgoask = null, $product = null) { $this->backlinkable = true; parent::__construct($wksoawcgagcgoask, $product); } protected ?string $expire = null; public function oycgwasemqgaskiu() : ?string { return $this->expire; } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\155\165\x6c\x74\x69\x5f\x73\164\x65\x70\x5f\143\150\145\x63\x6b\137\166\141\162\x69\141\164\151\x6f\x6e\163"), [$this, "\x6f\147\x71\x6b\155\155\x6b\x61\157\x63\141\141\x6d\x71\x73\x6d"], 10, 4)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\155\165\x6c\164\151\x5f\163\x74\145\160\x5f\x76\x61\x72\151\141\164\x69\157\x6e\163\137\x62\145\x66\x6f\x72\145\x5f\x61\144\x64\137\x74\157\137\143\141\x72\x74"), [$this, "\x6f\x63\x63\x67\145\165\167\143\161\163\153\x73\171\x79\171\171"], 10, 3); parent::kgquecmsgcouyaya(); } public function occgeuwcqsksyyyy($qecuekqmeaiykeek, $product, $mokawwccycoiqeka) { if (!($this->ciauysumoumgskgw($product) && $this->gaiasoueuycmiwcm($mokawwccycoiqeka, $wiiucqsygckgwcia))) { goto ywqgcegomwaiuquc; } ManipulateArray::unset($qecuekqmeaiykeek, 0); ywqgcegomwaiuquc: return $qecuekqmeaiykeek; } public function ogqkmmkaocaamqsm($uamcoiueqaamsqma, $product, $mokawwccycoiqeka, $qecuekqmeaiykeek) { if (!$this->ciauysumoumgskgw($product)) { goto suswcqoyyqkkquuo; } if ($qecuekqmeaiykeek && is_array($qecuekqmeaiykeek)) { goto soqqemyioggmoakg; } $uamcoiueqaamsqma = __("\x4e\157\x20\166\141\162\x69\141\x74\x69\157\156\163\40\x73\x65\154\145\143\x74\x65\144", PR__MDL__OPTIMIZATION_MANAGER); goto acaqummmoyiemqss; soqqemyioggmoakg: if (!(count($qecuekqmeaiykeek) < 2 && $this->gaiasoueuycmiwcm($mokawwccycoiqeka, $wiiucqsygckgwcia))) { goto wmmggowmigekyoso; } $uamcoiueqaamsqma = sprintf(__("\x64\157\x6d\x61\151\x6e\x20\45\x73\x2c\x20\x61\154\x72\145\141\x64\171\x20\x68\141\x73\40\146\x72\145\x65\x20\x76\x65\162\x73\x69\x6f\x6e\54\40\x70\x6c\145\141\163\145\40\x61\144\x64\40\155\x6f\162\x65\40\x76\x61\162\x69\x61\x74\151\157\x6e\40\x74\157\x20\x63\157\156\x74\151\x6e\x75\x65", PR__MDL__OPTIMIZATION_MANAGER), ManipulateHTML::ciuuiyckmsygceis(ManipulateArray::get($wiiucqsygckgwcia, self::ciyoccqkiamemcmm))); wmmggowmigekyoso: acaqummmoyiemqss: suswcqoyyqkkquuo: return $uamcoiueqaamsqma; } public function gaiasoueuycmiwcm($mokawwccycoiqeka, &$wiiucqsygckgwcia) : bool { $myagqecycsaiyqsk = false; $wiiucqsygckgwcia = $this->gugmsucsyeywucoe($mokawwccycoiqeka); if (!$wiiucqsygckgwcia) { goto iekumemscwieugqw; } $immcykkykeqgkgwg = OptDomain::symcgieuakksimmu(); if (!$immcykkykeqgkgwg) { goto foeeqckqsyockkak; } $wwwcwiueuuyyokia = $immcykkykeqgkgwg->uskosecsqoiqwmua($wiiucqsygckgwcia); if (!$wwwcwiueuuyyokia) { goto oqugqwcyomiaaoqu; } $yoqasmiegcmcqaus = Budget::symcgieuakksimmu(); if (!$yoqasmiegcmcqaus) { goto eeqesooyqagwawae; } $myagqecycsaiyqsk = $yoqasmiegcmcqaus->qumqowkwyaceeqwu([self::iiooageieusuyomy => self::yygyasgygkeqacou, self::ciyoccqkiamemcmm => "\60", Budget::qkmqmaeuyokqgemg => $immcykkykeqgkgwg->keeuqgyooycqoygw($wwwcwiueuuyyokia)]); eeqesooyqagwawae: oqugqwcyomiaaoqu: foeeqckqsyockkak: iekumemscwieugqw: return $myagqecycsaiyqsk; } public function umeweaskauicgikc($icwicymcioeyeyek, $wiiucqsygckgwcia, WC_Order_Item_Product $cawesmkieccckaae, bool $wmgiiumwscoyqkqa) { $umwqusowiqmyseom = $cawesmkieccckaae->get_order(); if (!($umwqusowiqmyseom && $this->qaueesycysuwggmc())) { goto ewymsmkkiksgwysk; } try { $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $yoqasmiegcmcqaus = Budget::symcgieuakksimmu(); $immcykkykeqgkgwg = OptDomain::symcgieuakksimmu(); if (!($swgwkyqkakceqeia && $yoqasmiegcmcqaus && $immcykkykeqgkgwg)) { goto syiqkaasoueowwui; } $wwwcwiueuuyyokia = null; $fooqqkeicsiaascw = null; if (!($wiiucqsygckgwcia && !$wmgiiumwscoyqkqa)) { goto hoeeyiowekaeemko; } $wwwcwiueuuyyokia = $immcykkykeqgkgwg->uskosecsqoiqwmua($wiiucqsygckgwcia); hoeeyiowekaeemko: $akyiigeggqowmqqq = $swgwkyqkakceqeia->keeuqgyooycqoygw($wiiucqsygckgwcia); if (!$wwwcwiueuuyyokia) { goto qicwaskssogcokgm; } $fooqqkeicsiaascw = $immcykkykeqgkgwg->keeuqgyooycqoygw($wwwcwiueuuyyokia); goto uguigkcmukuouway; qicwaskssogcokgm: $sogksuscggsicmac = $immcykkykeqgkgwg->gscuuyuyauokoyuo([$immcykkykeqgkgwg::qkmqmaeuyokqgemg => $akyiigeggqowmqqq, $immcykkykeqgkgwg::ymamoeqaciwakwue => false]); if (!$sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto kymkucucyeoeikim; } $fooqqkeicsiaascw = $swgwkyqkakceqeia->keeuqgyooycqoygw($sogksuscggsicmac); goto usquiuuyiyqaeyiu; kymkucucyeoeikim: $this->uocccyeugiykcmes($sogksuscggsicmac[self::iwyueouqaqegmcas], __("\x43\141\x6e\40\x6e\x6f\164\40\x63\x72\x65\x61\164\x65\x20\x6f\x70\164\x20\x64\157\155\141\151\156\x3a\40\x25\163", PR__MDL__OPTIMIZATION_MANAGER)); usquiuuyiyqaeyiu: uguigkcmukuouway: if (!$fooqqkeicsiaascw) { goto cgiscsqwwgqqaeqi; } if ($yoqasmiegcmcqaus->qumqowkwyaceeqwu([$yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $fooqqkeicsiaascw, $yoqasmiegcmcqaus::yuqaqwkmmeuawswk => $cawesmkieccckaae->get_id()])) { goto skkamseieeusycye; } $isweyuoisomqyaag = $this->oyqguwgqyigmuwow($cawesmkieccckaae, $icwicymcioeyeyek); if (!$isweyuoisomqyaag) { goto wiysogeqqwgioyka; } $wwgucssaecqekuek = ManipulateArray::get($isweyuoisomqyaag, self::ysskgssgwuwmqwym); $mksyucucyswaukig = ManipulateArray::get($isweyuoisomqyaag, self::ckmqoekmugkggeym); $ggkaciewmeqmgckg = ManipulateArray::get($icwicymcioeyeyek, self::imeuukiiccuqqosc, date("\x59\x2d\155\x2d\x64")); if (!$wwgucssaecqekuek) { goto soaccwqimeksgwiw; } if (!ManipulateWoocommerce::okeikygoukyckqcc($mksyucucyswaukig, self::smsioacowoikwikc)) { goto esuiysskoweawsue; } $uoomaookgsyciacm = [$yoqasmiegcmcqaus::ciyoccqkiamemcmm => ManipulateArray::get($wwgucssaecqekuek, $yoqasmiegcmcqaus::ciyoccqkiamemcmm), $yoqasmiegcmcqaus::iiooageieusuyomy => ManipulateArray::get($wwgucssaecqekuek, $yoqasmiegcmcqaus::iiooageieusuyomy), $yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $fooqqkeicsiaascw]; if (!$yoqasmiegcmcqaus->qumqowkwyaceeqwu($uoomaookgsyciacm)) { goto uqqaiagaeqgqgaiy; } $this->yqkwsouguwgoywcw(''); uqqaiagaeqgqgaiy: esuiysskoweawsue: $gqswsiquqaayuakq = [$yoqasmiegcmcqaus::sqsuiimgeguwgmcg => $ggkaciewmeqmgckg, $yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $fooqqkeicsiaascw, $yoqasmiegcmcqaus::yuqaqwkmmeuawswk => $cawesmkieccckaae->get_id()]; $gqswsiquqaayuakq = array_merge($wwgucssaecqekuek, $gqswsiquqaayuakq); if (count($gqswsiquqaayuakq) === 6) { goto aegysmeecgcgayyw; } $this->yqkwsouguwgoywcw(__("\102\165\x64\x67\x65\x74\x20\x63\141\156\x27\x74\x20\x62\145\40\x61\x64\x64\54\x20\x73\x6f\155\145\x20\162\145\161\x75\151\x72\145\40\146\x69\145\154\144\163\x20\x6e\157\164\x20\x73\145\164\x2e", PR__MDL__OPTIMIZATION_MANAGER)); goto suqkuqygkkgwyaie; aegysmeecgcgayyw: $sogksuscggsicmac = $yoqasmiegcmcqaus->gscuuyuyauokoyuo($gqswsiquqaayuakq); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto gaomwagkcciesyqy; } $this->uocccyeugiykcmes($sogksuscggsicmac[self::iwyueouqaqegmcas]); gaomwagkcciesyqy: suqkuqygkkgwyaie: soaccwqimeksgwiw: wiysogeqqwgioyka: skkamseieeusycye: cgiscsqwwgqqaeqi: syiqkaasoueowwui: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $this->kyacickkomkioeyu($wgaoewqkwgomoaai); if (!$uamcoiueqaamsqma) { goto giaacoqqqsekcayy; } $umwqusowiqmyseom->add_order_note($uamcoiueqaamsqma); giaacoqqqsekcayy: } ewymsmkkiksgwysk: } public function micmaeaccooaeuim($uomewyckeuqoqocu, $isweyuoisomqyaag, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $sqeykgyoooqysmca, $icwicymcioeyeyek) { switch ($sqeykgyoooqysmca) { case self::kumuoysauoagaiiy: $ucicuwcaawugkseg = ManipulateArray::get($ymkomoccmymcoiea, self::gouqcwikiiygyasc); $euceoqscgmweosya = ManipulateTerm::igawqaomowicuayw($ucicuwcaawugkseg, "\x64\x61\164\x65\137\164\x79\x70\x65", true); if ($euceoqscgmweosya) { goto gkyawqqcmigqgaiq; } $euceoqscgmweosya = self::qummiiakyucoycws; gkyawqqcmigqgaiq: $qmeuaeiseuacgiqc = $this->oycgwasemqgaskiu(); $ggkaciewmeqmgckg = ManipulateArray::get($icwicymcioeyeyek, self::imeuukiiccuqqosc, date("\131\x2d\155\x2d\x64")); if ($qmeuaeiseuacgiqc) { goto egyyiccaeeiooaua; } $qmeuaeiseuacgiqc = $this->myaugesymggoiooy($ggkaciewmeqmgckg, $eqgoocgaqwqcimie, $euceoqscgmweosya); if (!(is_string($qmeuaeiseuacgiqc) && !ManipulateWoocommerce::okeikygoukyckqcc($isweyuoisomqyaag, self::smsioacowoikwikc))) { goto ooeausyowguqicuo; } $this->expire = $qmeuaeiseuacgiqc; ooeausyowguqicuo: egyyiccaeeiooaua: $uomewyckeuqoqocu[self::wcoquosyucmegcsq] = $qmeuaeiseuacgiqc; goto cmegwsegsosyqcai; case self::eymwucuaaiiciymc: $uomewyckeuqoqocu[self::ciyoccqkiamemcmm] = $eqgoocgaqwqcimie ?: 0; goto cmegwsegsosyqcai; case self::kgyawuuygekasmwc: $uomewyckeuqoqocu[self::iiooageieusuyomy] = $eqgoocgaqwqcimie >= 2 ? self::cwoackywkgsameww : self::yygyasgygkeqacou; goto cmegwsegsosyqcai; default: } wmywuusgukmmaams: cmegwsegsosyqcai: return parent::micmaeaccooaeuim($uomewyckeuqoqocu, $isweyuoisomqyaag, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $sqeykgyoooqysmca, $icwicymcioeyeyek); } public function enqueue() { if (!($eygsasmqycagyayw = $this->miocmcoykayoyyau())) { goto scisgsyemmsekgos; } $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\x70\162\157\144\x75\143\x74", $eygsasmqycagyayw->get("\x70\162\x6f\144\165\143\x74\56\x6a\163"))->simswskycwagoeqy()); $eygsasmqycagyayw->ieayqiyiuuguowyq(self::iwyueouqaqegmcas, ["\163\x74\141\x72\x74\137\144\x61\x74\x65\x5f\x6e\157\x74\137\x76\x61\154\x69\x64" => __("\123\x74\x61\162\164\x20\104\141\x74\145\x20\151\163\x20\156\x6f\x74\x20\x61\40\x76\x61\154\151\x64\x20\x64\x61\164\145\56", PR__MDL__OPTIMIZATION_MANAGER), "\163\164\x61\x72\164\137\144\x61\x74\x65\137\x72\x65\x71\165\151\162\145" => __("\120\x6c\145\141\x73\145\x20\146\x69\154\x6c\x20\x73\164\141\x72\164\40\x64\x61\x74\145\56", PR__MDL__OPTIMIZATION_MANAGER), "\x73\x74\x61\x72\x74\137\x64\x61\164\x65\x5f\x70\141\163\x73\x65\144" => __("\131\157\x75\x20\103\x61\x6e\40\x6e\157\164\40\165\163\145\40\160\x61\163\x73\145\x64\40\x64\x61\164\145\x20\146\157\162\x20\x73\164\141\x72\164\40\x64\x61\x74\145\56", PR__MDL__OPTIMIZATION_MANAGER)]); scisgsyemmsekgos: parent::enqueue(); } public function iqomsiuaqegycowu($ewgwqamkygiqaawc, $product) : string { $mykomoygwwmoksge = Setting::eiwcuqigayigimak(Setting::ueagcuikcyyoyymi, []); if (!$mykomoygwwmoksge) { goto cewmoqyysgsmuiya; } $xwwgygqkqwuaqwsa = $this->qqmwsmimiiiqkooo(); $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\163\x74\141\164\151\163\x74\x69\x63\163", ["\x6c\145\166\145\154\x73" => $xwwgygqkqwuaqwsa, self::qescuiwgsyuikume => Setting::eiwcuqigayigimak(Setting::csascsakmmskewuy, ''), self::qwumqqyuasyskkkc => Setting::eiwcuqigayigimak(Setting::ueagcuikcyyoyymi, []), self::soquiwyuimckgiow => [self::qescuiwgsyuikume => ''] + $xwwgygqkqwuaqwsa, self::eqkeooqcsscoggia => Setting::eiwcuqigayigimak(Setting::wimciyacmqeewiqk, '')]); cewmoqyysgsmuiya: return $ewgwqamkygiqaawc; } public function ewweaossowcqywaw(array $qookweymeqawmcwo, array $ikgwqyuyckaewsow, ?string $qqscaoyqikuyeoaw = null) : array { if (!($qqscaoyqikuyeoaw === self::cwgqacsqwyukoeiy)) { goto omqiayeucoioqoao; } if (!($cmwygeyygwqaemaq = Setting::eiwcuqigayigimak(Setting::yuwgaqcmuqeeyqmi))) { goto igooksugieceoege; } $eosogusikmqwywgs = ManipulateBootstrap::oockkqiqsssakuug($cmwygeyygwqaemaq, self::ckcawaoawwioqecq, [], false); $ikgwqyuyckaewsow[] = Form::wowyaacgaccyeici($eosogusikmqwywgs)->jyumyyugiwwiqomk(0); igooksugieceoege: $ikgwqyuyckaewsow[] = Form::cmmsoiggwwuyqqks(self::imeuukiiccuqqosc, __("\x53\x74\141\x72\x74\40\102\x75\x64\147\145\164\40\104\141\164\145", PR__MDL__OPTIMIZATION_MANAGER))->cgeiiwakumywwowu()->jyumyyugiwwiqomk(100)->qqoqoqmusaueoyca()->uuagoowwgcuosuuu()->cyuyuseegoqgwmas(); omqiayeucoioqoao: return parent::ewweaossowcqywaw($qookweymeqawmcwo, $ikgwqyuyckaewsow, $qqscaoyqikuyeoaw); } }
