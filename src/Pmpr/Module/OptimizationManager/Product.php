<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6688fb4047973             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager; use Exception; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateBootstrap; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\ComponentManager\Product as BaseClass; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\OptimizationManager\Traits\CommonTrait; use WC_Order_Item_Product; class Product extends BaseClass { use CommonTrait; const kgyawuuygekasmwc = "\154\145\166\x65\154"; const imeuukiiccuqqosc = "\163\164\x61\x72\x74\x5f\142\x75\x64\147\145\x74\137\x64\x61\x74\145"; public function __construct($wksoawcgagcgoask = null, $product = null) { $this->backlinkable = true; parent::__construct($wksoawcgagcgoask, $product); } protected ?string $expire = null; public function oycgwasemqgaskiu() : ?string { return $this->expire; } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\155\x75\x6c\164\x69\137\x73\164\x65\160\137\143\x68\145\x63\153\137\166\x61\162\151\141\164\x69\x6f\156\x73", [$this, "\x6f\x67\x71\153\155\x6d\153\x61\x6f\x63\141\x61\155\x71\x73\155"], 10, 4)->aqaqisyssqeomwom("\x6d\x75\154\164\x69\x5f\163\164\145\x70\x5f\x76\x61\162\151\141\x74\x69\157\156\x73\x5f\x62\x65\146\157\162\145\137\x61\x64\144\137\164\157\137\x63\141\162\x74", [$this, "\157\x63\x63\147\x65\165\167\143\161\163\x6b\x73\x79\x79\x79\x79"], 10, 3); parent::kgquecmsgcouyaya(); } public function occgeuwcqsksyyyy($qecuekqmeaiykeek, $product, $mokawwccycoiqeka) { if (!($this->ciauysumoumgskgw($product) && $this->gaiasoueuycmiwcm($mokawwccycoiqeka, $wiiucqsygckgwcia))) { goto qogqewiwmwiwskgm; } $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($qecuekqmeaiykeek, 0); qogqewiwmwiwskgm: return $qecuekqmeaiykeek; } public function ogqkmmkaocaamqsm($uamcoiueqaamsqma, $product, $mokawwccycoiqeka, $qecuekqmeaiykeek) { if (!$this->ciauysumoumgskgw($product)) { goto asmecuqiyyswueqe; } if ($qecuekqmeaiykeek && is_array($qecuekqmeaiykeek)) { goto qwigomakwmyiwkgo; } $uamcoiueqaamsqma = __("\x4e\157\40\x76\141\x72\x69\x61\x74\151\x6f\x6e\163\40\x73\145\x6c\145\x63\164\x65\x64", PR__MDL__OPTIMIZATION_MANAGER); goto myoicgcuugciueis; qwigomakwmyiwkgo: if (!(count($qecuekqmeaiykeek) < 2 && $this->gaiasoueuycmiwcm($mokawwccycoiqeka, $wiiucqsygckgwcia))) { goto qgoiooayqmqqsiok; } $uamcoiueqaamsqma = sprintf(__("\144\157\x6d\141\x69\156\40\45\x73\x2c\40\141\x6c\162\145\141\144\171\40\150\141\163\x20\x66\x72\x65\145\x20\x76\x65\162\163\151\x6f\x6e\x2c\40\x70\x6c\145\x61\x73\x65\x20\141\x64\x64\40\x6d\x6f\162\x65\x20\166\141\162\151\141\164\x69\x6f\x6e\x20\x74\x6f\x20\143\x6f\156\x74\x69\x6e\x75\145", PR__MDL__OPTIMIZATION_MANAGER), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wiiucqsygckgwcia, self::ciyoccqkiamemcmm))); qgoiooayqmqqsiok: myoicgcuugciueis: asmecuqiyyswueqe: return $uamcoiueqaamsqma; } public function gaiasoueuycmiwcm($mokawwccycoiqeka, &$wiiucqsygckgwcia) : bool { $myagqecycsaiyqsk = false; $wiiucqsygckgwcia = $this->gugmsucsyeywucoe($mokawwccycoiqeka); if (!$wiiucqsygckgwcia) { goto cuykwgmswkskqkyi; } $immcykkykeqgkgwg = OptDomain::symcgieuakksimmu(); $wwwcwiueuuyyokia = $immcykkykeqgkgwg->uskosecsqoiqwmua($wiiucqsygckgwcia); if (!$wwwcwiueuuyyokia) { goto csscmcacoikwsecs; } $yoqasmiegcmcqaus = Budget::symcgieuakksimmu(); $myagqecycsaiyqsk = $yoqasmiegcmcqaus->qumqowkwyaceeqwu([self::iiooageieusuyomy => self::yygyasgygkeqacou, self::ciyoccqkiamemcmm => "\60", Budget::qkmqmaeuyokqgemg => $immcykkykeqgkgwg->keeuqgyooycqoygw($wwwcwiueuuyyokia)]); csscmcacoikwsecs: cuykwgmswkskqkyi: return $myagqecycsaiyqsk; } public function umeweaskauicgikc($icwicymcioeyeyek, $wiiucqsygckgwcia, WC_Order_Item_Product $cawesmkieccckaae, bool $wmgiiumwscoyqkqa) { $umwqusowiqmyseom = $cawesmkieccckaae->get_order(); if (!($umwqusowiqmyseom && $this->qaueesycysuwggmc())) { goto meawswgwagoqgkye; } try { $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $yoqasmiegcmcqaus = Budget::symcgieuakksimmu(); $immcykkykeqgkgwg = OptDomain::symcgieuakksimmu(); $wwwcwiueuuyyokia = null; $fooqqkeicsiaascw = null; if (!($wiiucqsygckgwcia && !$wmgiiumwscoyqkqa)) { goto kuicqywysciceggs; } $wwwcwiueuuyyokia = $immcykkykeqgkgwg->uskosecsqoiqwmua($wiiucqsygckgwcia); kuicqywysciceggs: $akyiigeggqowmqqq = $swgwkyqkakceqeia->keeuqgyooycqoygw($wiiucqsygckgwcia); if (!$wwwcwiueuuyyokia) { goto eqkauqciwewmgeoi; } $fooqqkeicsiaascw = $immcykkykeqgkgwg->keeuqgyooycqoygw($wwwcwiueuuyyokia); goto kwagwqyusyiyoaqs; eqkauqciwewmgeoi: $sogksuscggsicmac = $immcykkykeqgkgwg->gscuuyuyauokoyuo([$immcykkykeqgkgwg::qkmqmaeuyokqgemg => $akyiigeggqowmqqq, $immcykkykeqgkgwg::ymamoeqaciwakwue => false]); if (!$sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto mkwskuycuyguqqok; } $fooqqkeicsiaascw = $swgwkyqkakceqeia->keeuqgyooycqoygw($sogksuscggsicmac); goto sciwggaeogcoesiu; mkwskuycuyguqqok: $this->uocccyeugiykcmes($sogksuscggsicmac[self::iwyueouqaqegmcas], __("\103\x61\x6e\x20\156\157\x74\x20\x63\162\x65\141\x74\145\x20\x6f\160\x74\40\144\x6f\155\141\x69\156\x3a\40\45\163", PR__MDL__OPTIMIZATION_MANAGER)); sciwggaeogcoesiu: kwagwqyusyiyoaqs: if (!$fooqqkeicsiaascw) { goto yiwiqaqmwiogawym; } if ($yoqasmiegcmcqaus->qumqowkwyaceeqwu([$yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $fooqqkeicsiaascw, $yoqasmiegcmcqaus::yuqaqwkmmeuawswk => $cawesmkieccckaae->get_id()])) { goto ocokwuuquaokmasc; } $isweyuoisomqyaag = $this->oyqguwgqyigmuwow($cawesmkieccckaae, $icwicymcioeyeyek); if (!$isweyuoisomqyaag) { goto cggowoquuiwqkyew; } $wwgucssaecqekuek = ManipulateArray::get($isweyuoisomqyaag, self::ysskgssgwuwmqwym); $mksyucucyswaukig = ManipulateArray::get($isweyuoisomqyaag, self::ckmqoekmugkggeym); $ggkaciewmeqmgckg = ManipulateArray::get($icwicymcioeyeyek, self::imeuukiiccuqqosc, date("\x59\x2d\x6d\55\x64")); if (!$wwgucssaecqekuek) { goto uukumskkeggaowck; } if (!ManipulateWoocommerce::okeikygoukyckqcc($mksyucucyswaukig, self::smsioacowoikwikc)) { goto kiqogmwcgcamwiig; } $uoomaookgsyciacm = [$yoqasmiegcmcqaus::ciyoccqkiamemcmm => ManipulateArray::get($wwgucssaecqekuek, $yoqasmiegcmcqaus::ciyoccqkiamemcmm), $yoqasmiegcmcqaus::iiooageieusuyomy => ManipulateArray::get($wwgucssaecqekuek, $yoqasmiegcmcqaus::iiooageieusuyomy), $yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $fooqqkeicsiaascw]; if (!$yoqasmiegcmcqaus->qumqowkwyaceeqwu($uoomaookgsyciacm)) { goto yowsmsiyimmimemc; } $this->yqkwsouguwgoywcw(''); yowsmsiyimmimemc: kiqogmwcgcamwiig: $gqswsiquqaayuakq = [$yoqasmiegcmcqaus::sqsuiimgeguwgmcg => $ggkaciewmeqmgckg, $yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $fooqqkeicsiaascw, $yoqasmiegcmcqaus::yuqaqwkmmeuawswk => $cawesmkieccckaae->get_id()]; $gqswsiquqaayuakq = array_merge($wwgucssaecqekuek, $gqswsiquqaayuakq); if (count($gqswsiquqaayuakq) === 6) { goto sqiciiuwmykocycc; } $this->yqkwsouguwgoywcw(__("\x42\x75\144\x67\145\x74\x20\x63\141\156\x27\x74\x20\x62\x65\40\x61\144\144\54\x20\x73\x6f\155\145\x20\x72\145\161\165\x69\x72\x65\x20\x66\151\x65\154\x64\x73\40\156\157\x74\x20\163\x65\164\x2e", PR__MDL__OPTIMIZATION_MANAGER)); goto eequksumcoogyoem; sqiciiuwmykocycc: $sogksuscggsicmac = $yoqasmiegcmcqaus->gscuuyuyauokoyuo($gqswsiquqaayuakq); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto iomcaiwewsawiamu; } $this->uocccyeugiykcmes($sogksuscggsicmac[self::iwyueouqaqegmcas]); iomcaiwewsawiamu: eequksumcoogyoem: uukumskkeggaowck: cggowoquuiwqkyew: ocokwuuquaokmasc: yiwiqaqmwiogawym: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $this->kyacickkomkioeyu($wgaoewqkwgomoaai); if (!$uamcoiueqaamsqma) { goto goacqqsgaaigyuaw; } $umwqusowiqmyseom->add_order_note($uamcoiueqaamsqma); goacqqsgaaigyuaw: } meawswgwagoqgkye: } public function micmaeaccooaeuim($uomewyckeuqoqocu, $isweyuoisomqyaag, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $sqeykgyoooqysmca, $icwicymcioeyeyek) { switch ($sqeykgyoooqysmca) { case self::kumuoysauoagaiiy: $ucicuwcaawugkseg = ManipulateArray::get($ymkomoccmymcoiea, self::gouqcwikiiygyasc); $euceoqscgmweosya = ManipulateTerm::igawqaomowicuayw($ucicuwcaawugkseg, "\x64\x61\164\145\137\x74\x79\160\145", true); if ($euceoqscgmweosya) { goto mswsoaimesegiiic; } $euceoqscgmweosya = self::qummiiakyucoycws; mswsoaimesegiiic: $qmeuaeiseuacgiqc = $this->oycgwasemqgaskiu(); $ggkaciewmeqmgckg = ManipulateArray::get($icwicymcioeyeyek, self::imeuukiiccuqqosc, date("\131\55\155\55\x64")); if ($qmeuaeiseuacgiqc) { goto kecwuwwcwokuksyq; } $qmeuaeiseuacgiqc = $this->myaugesymggoiooy($ggkaciewmeqmgckg, $eqgoocgaqwqcimie, $euceoqscgmweosya); if (!(is_string($qmeuaeiseuacgiqc) && !ManipulateWoocommerce::okeikygoukyckqcc($isweyuoisomqyaag, self::smsioacowoikwikc))) { goto egasokooagakisiy; } $this->expire = $qmeuaeiseuacgiqc; egasokooagakisiy: kecwuwwcwokuksyq: $uomewyckeuqoqocu[self::wcoquosyucmegcsq] = $qmeuaeiseuacgiqc; goto wcesymwqykqoyuqk; case self::eymwucuaaiiciymc: $uomewyckeuqoqocu[self::ciyoccqkiamemcmm] = $eqgoocgaqwqcimie ?: 0; goto wcesymwqykqoyuqk; case self::kgyawuuygekasmwc: $uomewyckeuqoqocu[self::iiooageieusuyomy] = $eqgoocgaqwqcimie >= 2 ? self::cwoackywkgsameww : self::yygyasgygkeqacou; goto wcesymwqykqoyuqk; default: } usqgaogkqgemuima: wcesymwqykqoyuqk: return parent::micmaeaccooaeuim($uomewyckeuqoqocu, $isweyuoisomqyaag, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $sqeykgyoooqysmca, $icwicymcioeyeyek); } public function enqueue() { if (!($eygsasmqycagyayw = $this->miocmcoykayoyyau())) { goto qgegkeomwscwwiuw; } $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\x70\162\157\144\x75\143\164", $eygsasmqycagyayw->get("\x70\162\x6f\x64\x75\x63\164\56\x6a\x73"))->simswskycwagoeqy()); $eygsasmqycagyayw->ieayqiyiuuguowyq(self::iwyueouqaqegmcas, ["\163\x74\x61\x72\164\x5f\144\x61\164\145\x5f\x6e\157\x74\137\166\x61\154\151\x64" => __("\123\x74\141\x72\x74\x20\x44\x61\x74\145\x20\151\x73\40\x6e\x6f\x74\40\x61\x20\x76\x61\x6c\x69\x64\40\144\141\164\x65\x2e", PR__MDL__OPTIMIZATION_MANAGER), "\x73\164\x61\162\164\x5f\144\141\164\145\137\162\x65\161\165\x69\162\145" => __("\120\154\145\141\163\145\x20\146\x69\154\154\40\163\164\141\x72\x74\x20\144\x61\164\145\56", PR__MDL__OPTIMIZATION_MANAGER), "\x73\x74\141\162\164\x5f\144\141\164\145\x5f\x70\141\163\163\x65\x64" => __("\x59\157\x75\x20\x43\141\x6e\40\156\157\x74\40\165\x73\145\40\x70\x61\x73\x73\x65\x64\40\144\x61\164\145\x20\x66\x6f\162\40\163\164\x61\162\x74\40\x64\141\x74\x65\x2e", PR__MDL__OPTIMIZATION_MANAGER)]); qgegkeomwscwwiuw: parent::enqueue(); } public function iqomsiuaqegycowu($ewgwqamkygiqaawc, $product) : string { $mykomoygwwmoksge = Setting::eiwcuqigayigimak(Setting::ueagcuikcyyoyymi, []); if (!$mykomoygwwmoksge) { goto qmiwsequckckoaei; } $xwwgygqkqwuaqwsa = $this->qqmwsmimiiiqkooo(); $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\163\x74\x61\x74\x69\x73\164\151\143\x73", ["\154\x65\166\x65\x6c\163" => $xwwgygqkqwuaqwsa, self::qescuiwgsyuikume => Setting::eiwcuqigayigimak(Setting::csascsakmmskewuy, ''), self::qwumqqyuasyskkkc => Setting::eiwcuqigayigimak(Setting::ueagcuikcyyoyymi, []), self::soquiwyuimckgiow => [self::qescuiwgsyuikume => ''] + $xwwgygqkqwuaqwsa, self::eqkeooqcsscoggia => Setting::eiwcuqigayigimak(Setting::wimciyacmqeewiqk, '')]); qmiwsequckckoaei: return $ewgwqamkygiqaawc; } public function ewweaossowcqywaw(array $qookweymeqawmcwo, array $ikgwqyuyckaewsow, ?string $qqscaoyqikuyeoaw = null) : array { if (!($qqscaoyqikuyeoaw === self::cwgqacsqwyukoeiy)) { goto eiawsoasmscmqswa; } if (!($cmwygeyygwqaemaq = Setting::eiwcuqigayigimak(Setting::yuwgaqcmuqeeyqmi))) { goto goeoymmqqqeeoime; } $eosogusikmqwywgs = ManipulateBootstrap::oockkqiqsssakuug($cmwygeyygwqaemaq, self::ckcawaoawwioqecq, [], false); $ikgwqyuyckaewsow[] = Form::wowyaacgaccyeici($eosogusikmqwywgs)->jyumyyugiwwiqomk(0); goeoymmqqqeeoime: $ikgwqyuyckaewsow[] = Form::cmmsoiggwwuyqqks(self::imeuukiiccuqqosc, __("\123\x74\x61\x72\x74\40\102\165\x64\x67\145\164\x20\104\x61\164\145", PR__MDL__OPTIMIZATION_MANAGER))->cgeiiwakumywwowu()->jyumyyugiwwiqomk(100)->qqoqoqmusaueoyca()->uuagoowwgcuosuuu()->cyuyuseegoqgwmas(); eiawsoasmscmqswa: return parent::ewweaossowcqywaw($qookweymeqawmcwo, $ikgwqyuyckaewsow, $qqscaoyqikuyeoaw); } }
