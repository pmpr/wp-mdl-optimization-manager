<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62bffa51c1023             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager; use Exception; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateBootstrap; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\ComponentManager\Product as BaseClass; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\OptimizationManager\Model\Budget; use Pmpr\Module\OptimizationManager\Model\Domain as OptDomain; use Pmpr\Module\OptimizationManager\Traits\CommonTrait; use WC_Order_Item_Product; class Product extends BaseClass { use CommonTrait; const kgyawuuygekasmwc = "\x6c\x65\x76\x65\x6c"; const imeuukiiccuqqosc = "\x73\164\x61\x72\x74\137\142\165\x64\147\x65\164\x5f\x64\141\x74\145"; public function __construct($wksoawcgagcgoask = null, $product = null) { $this->backlinkable = true; parent::__construct($wksoawcgagcgoask, $product); } protected ?string $expire = null; public function oycgwasemqgaskiu() : ?string { return $this->expire; } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\155\165\x6c\164\x69\x5f\x73\x74\145\x70\137\143\x68\x65\143\x6b\137\166\141\162\x69\141\x74\x69\x6f\156\163"), [$this, "\157\x67\x71\x6b\x6d\155\x6b\x61\157\143\x61\141\155\x71\x73\x6d"], 10, 4)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\155\165\154\x74\151\x5f\x73\164\145\160\137\166\x61\162\151\141\164\151\x6f\156\163\x5f\x62\145\146\157\x72\x65\x5f\x61\144\x64\137\x74\157\x5f\143\x61\162\164"), [$this, "\x6f\x63\x63\x67\145\165\x77\x63\x71\163\x6b\163\x79\x79\x79\171"], 10, 3); parent::kgquecmsgcouyaya(); } public function occgeuwcqsksyyyy($qecuekqmeaiykeek, $product, $mokawwccycoiqeka) { if (!($this->ciauysumoumgskgw($product) && $this->gaiasoueuycmiwcm($mokawwccycoiqeka, $wiiucqsygckgwcia))) { goto guykyqecgswcsmws; } ManipulateArray::unset($qecuekqmeaiykeek, 0); guykyqecgswcsmws: return $qecuekqmeaiykeek; } public function ogqkmmkaocaamqsm($uamcoiueqaamsqma, $product, $mokawwccycoiqeka, $qecuekqmeaiykeek) { if (!$this->ciauysumoumgskgw($product)) { goto ousiuuwgwkiyikyq; } if ($qecuekqmeaiykeek && is_array($qecuekqmeaiykeek)) { goto miweggwqeiaeweia; } $uamcoiueqaamsqma = __("\x4e\157\x20\x76\141\x72\151\x61\x74\x69\157\156\x73\40\163\x65\x6c\145\x63\x74\145\144", PR__MDL__OPTIMIZATION_MANAGER); goto kqqiegkuqagcqsya; miweggwqeiaeweia: if (!(count($qecuekqmeaiykeek) < 2 && $this->gaiasoueuycmiwcm($mokawwccycoiqeka, $wiiucqsygckgwcia))) { goto kkumywowcoycymeo; } $uamcoiueqaamsqma = sprintf(__("\x64\x6f\155\141\151\x6e\40\x25\163\54\40\141\154\x72\x65\x61\x64\x79\40\x68\x61\x73\x20\146\162\x65\x65\40\166\x65\x72\x73\x69\157\x6e\x2c\40\160\154\145\141\163\145\40\141\x64\x64\x20\155\157\162\x65\x20\166\141\x72\151\141\x74\151\157\156\40\164\157\40\143\157\156\x74\151\x6e\x75\145", PR__MDL__OPTIMIZATION_MANAGER), ManipulateHTML::ciuuiyckmsygceis(ManipulateArray::get($wiiucqsygckgwcia, self::ciyoccqkiamemcmm))); kkumywowcoycymeo: kqqiegkuqagcqsya: ousiuuwgwkiyikyq: return $uamcoiueqaamsqma; } public function gaiasoueuycmiwcm($mokawwccycoiqeka, &$wiiucqsygckgwcia) : bool { $myagqecycsaiyqsk = false; $wiiucqsygckgwcia = $this->gugmsucsyeywucoe($mokawwccycoiqeka); if (!$wiiucqsygckgwcia) { goto aomysykcgikegiau; } $immcykkykeqgkgwg = OptDomain::symcgieuakksimmu(); if (!$immcykkykeqgkgwg) { goto ikqqskkqqwmwssoo; } $wwwcwiueuuyyokia = $immcykkykeqgkgwg->uskosecsqoiqwmua($wiiucqsygckgwcia); if (!$wwwcwiueuuyyokia) { goto iwekmyyccgiyuecc; } $yoqasmiegcmcqaus = Budget::symcgieuakksimmu(); if (!$yoqasmiegcmcqaus) { goto ogsaaqsaogcqiouy; } $myagqecycsaiyqsk = $yoqasmiegcmcqaus->qumqowkwyaceeqwu([self::iiooageieusuyomy => self::yygyasgygkeqacou, self::ciyoccqkiamemcmm => "\x30", Budget::qkmqmaeuyokqgemg => $immcykkykeqgkgwg->keeuqgyooycqoygw($wwwcwiueuuyyokia)]); ogsaaqsaogcqiouy: iwekmyyccgiyuecc: ikqqskkqqwmwssoo: aomysykcgikegiau: return $myagqecycsaiyqsk; } public function umeweaskauicgikc($icwicymcioeyeyek, $wiiucqsygckgwcia, WC_Order_Item_Product $cawesmkieccckaae, bool $wmgiiumwscoyqkqa) { $umwqusowiqmyseom = $cawesmkieccckaae->get_order(); if (!($umwqusowiqmyseom && $this->qaueesycysuwggmc())) { goto gmwykkouysyaqwqm; } try { $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $yoqasmiegcmcqaus = Budget::symcgieuakksimmu(); $immcykkykeqgkgwg = OptDomain::symcgieuakksimmu(); if (!($swgwkyqkakceqeia && $yoqasmiegcmcqaus && $immcykkykeqgkgwg)) { goto eekcoeikaeaaeyii; } $wwwcwiueuuyyokia = null; $fooqqkeicsiaascw = null; if (!($wiiucqsygckgwcia && !$wmgiiumwscoyqkqa)) { goto cwwmimggaaecmucw; } $wwwcwiueuuyyokia = $immcykkykeqgkgwg->uskosecsqoiqwmua($wiiucqsygckgwcia); cwwmimggaaecmucw: $akyiigeggqowmqqq = $swgwkyqkakceqeia->keeuqgyooycqoygw($wiiucqsygckgwcia); if (!$wwwcwiueuuyyokia) { goto ykomgumacooyomsk; } $fooqqkeicsiaascw = $immcykkykeqgkgwg->keeuqgyooycqoygw($wwwcwiueuuyyokia); goto mqkmcysgoiaouiwm; ykomgumacooyomsk: $sogksuscggsicmac = $immcykkykeqgkgwg->gscuuyuyauokoyuo([$immcykkykeqgkgwg::qkmqmaeuyokqgemg => $akyiigeggqowmqqq, $immcykkykeqgkgwg::ymamoeqaciwakwue => false]); if (!$sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto awoaooyoeoyeeqee; } $fooqqkeicsiaascw = $swgwkyqkakceqeia->keeuqgyooycqoygw($sogksuscggsicmac); goto ogqmesokykywseys; awoaooyoeoyeeqee: $this->uocccyeugiykcmes($sogksuscggsicmac[self::iwyueouqaqegmcas], __("\103\x61\x6e\40\156\x6f\164\x20\x63\x72\x65\141\164\145\40\x6f\x70\164\x20\x64\x6f\x6d\141\x69\156\72\40\45\163", PR__MDL__OPTIMIZATION_MANAGER)); ogqmesokykywseys: mqkmcysgoiaouiwm: if (!$fooqqkeicsiaascw) { goto ocaguquugeamqckq; } if ($yoqasmiegcmcqaus->qumqowkwyaceeqwu([$yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $fooqqkeicsiaascw, $yoqasmiegcmcqaus::yuqaqwkmmeuawswk => $cawesmkieccckaae->get_id()])) { goto csammceowmqwaamq; } $isweyuoisomqyaag = $this->oyqguwgqyigmuwow($cawesmkieccckaae, $icwicymcioeyeyek); if (!$isweyuoisomqyaag) { goto qmkaeeomgkwggoyo; } $wwgucssaecqekuek = ManipulateArray::get($isweyuoisomqyaag, self::ysskgssgwuwmqwym); $mksyucucyswaukig = ManipulateArray::get($isweyuoisomqyaag, self::ckmqoekmugkggeym); $ggkaciewmeqmgckg = ManipulateArray::get($icwicymcioeyeyek, self::imeuukiiccuqqosc, date("\131\55\x6d\x2d\144")); if (!$wwgucssaecqekuek) { goto gcckqucukawcasgk; } if (!ManipulateWoocommerce::okeikygoukyckqcc($mksyucucyswaukig, self::smsioacowoikwikc)) { goto gicyayswqyuoekcq; } $uoomaookgsyciacm = [$yoqasmiegcmcqaus::ciyoccqkiamemcmm => ManipulateArray::get($wwgucssaecqekuek, $yoqasmiegcmcqaus::ciyoccqkiamemcmm), $yoqasmiegcmcqaus::iiooageieusuyomy => ManipulateArray::get($wwgucssaecqekuek, $yoqasmiegcmcqaus::iiooageieusuyomy), $yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $fooqqkeicsiaascw]; if (!$yoqasmiegcmcqaus->qumqowkwyaceeqwu($uoomaookgsyciacm)) { goto kosaqwikueyksqmw; } $this->yqkwsouguwgoywcw(''); kosaqwikueyksqmw: gicyayswqyuoekcq: $gqswsiquqaayuakq = [$yoqasmiegcmcqaus::sqsuiimgeguwgmcg => $ggkaciewmeqmgckg, $yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $fooqqkeicsiaascw, $yoqasmiegcmcqaus::yuqaqwkmmeuawswk => $cawesmkieccckaae->get_id()]; $gqswsiquqaayuakq = array_merge($wwgucssaecqekuek, $gqswsiquqaayuakq); if (count($gqswsiquqaayuakq) === 6) { goto uiosisocuwokwkie; } $this->yqkwsouguwgoywcw(__("\x42\165\x64\147\x65\164\x20\143\x61\x6e\x27\x74\x20\x62\x65\x20\x61\x64\x64\54\x20\163\x6f\x6d\145\40\x72\x65\x71\x75\x69\162\x65\x20\146\x69\145\x6c\x64\x73\40\156\157\x74\x20\163\x65\164\x2e", PR__MDL__OPTIMIZATION_MANAGER)); goto cuumeogeomowqisc; uiosisocuwokwkie: $sogksuscggsicmac = $yoqasmiegcmcqaus->gscuuyuyauokoyuo($gqswsiquqaayuakq); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto iikiiioqiyegyaak; } $this->uocccyeugiykcmes($sogksuscggsicmac[self::iwyueouqaqegmcas]); iikiiioqiyegyaak: cuumeogeomowqisc: gcckqucukawcasgk: qmkaeeomgkwggoyo: csammceowmqwaamq: ocaguquugeamqckq: eekcoeikaeaaeyii: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $this->kyacickkomkioeyu($wgaoewqkwgomoaai); if (!$uamcoiueqaamsqma) { goto cogywoqcqummsyus; } $umwqusowiqmyseom->add_order_note($uamcoiueqaamsqma); cogywoqcqummsyus: } gmwykkouysyaqwqm: } public function micmaeaccooaeuim($uomewyckeuqoqocu, $isweyuoisomqyaag, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $sqeykgyoooqysmca, $icwicymcioeyeyek) { switch ($sqeykgyoooqysmca) { case self::kumuoysauoagaiiy: $ucicuwcaawugkseg = ManipulateArray::get($ymkomoccmymcoiea, self::gouqcwikiiygyasc); $euceoqscgmweosya = ManipulateTerm::igawqaomowicuayw($ucicuwcaawugkseg, "\x64\141\164\145\x5f\x74\171\160\x65", true); if ($euceoqscgmweosya) { goto sockeswygwcskeuq; } $euceoqscgmweosya = self::qummiiakyucoycws; sockeswygwcskeuq: $qmeuaeiseuacgiqc = $this->oycgwasemqgaskiu(); $ggkaciewmeqmgckg = ManipulateArray::get($icwicymcioeyeyek, self::imeuukiiccuqqosc, date("\x59\55\x6d\55\x64")); if ($qmeuaeiseuacgiqc) { goto uaqackioaiqwcocy; } $qmeuaeiseuacgiqc = $this->myaugesymggoiooy($ggkaciewmeqmgckg, $eqgoocgaqwqcimie, $euceoqscgmweosya); if (!(is_string($qmeuaeiseuacgiqc) && !ManipulateWoocommerce::okeikygoukyckqcc($isweyuoisomqyaag, self::smsioacowoikwikc))) { goto mkwkkmkgiqiamacc; } $this->expire = $qmeuaeiseuacgiqc; mkwkkmkgiqiamacc: uaqackioaiqwcocy: $uomewyckeuqoqocu[self::wcoquosyucmegcsq] = $qmeuaeiseuacgiqc; goto ugqwuugsweqgmywk; case self::eymwucuaaiiciymc: $uomewyckeuqoqocu[self::ciyoccqkiamemcmm] = $eqgoocgaqwqcimie ?: 0; goto ugqwuugsweqgmywk; case self::kgyawuuygekasmwc: $uomewyckeuqoqocu[self::iiooageieusuyomy] = $eqgoocgaqwqcimie >= 2 ? self::cwoackywkgsameww : self::yygyasgygkeqacou; goto ugqwuugsweqgmywk; default: } uaukmuiwskcemcsw: ugqwuugsweqgmywk: return parent::micmaeaccooaeuim($uomewyckeuqoqocu, $isweyuoisomqyaag, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $sqeykgyoooqysmca, $icwicymcioeyeyek); } public function enqueue() { if (!($eygsasmqycagyayw = $this->miocmcoykayoyyau())) { goto cscusseysqygsoiy; } $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\160\162\157\x64\x75\143\164", $eygsasmqycagyayw->get("\x70\162\x6f\x64\165\143\164\56\152\163"))->simswskycwagoeqy()); $eygsasmqycagyayw->ieayqiyiuuguowyq(self::iwyueouqaqegmcas, ["\163\164\141\162\x74\137\x64\x61\x74\145\137\156\x6f\164\x5f\x76\x61\154\151\x64" => __("\x53\x74\x61\162\x74\x20\x44\141\164\145\40\x69\x73\x20\x6e\x6f\164\x20\x61\40\166\x61\154\151\144\x20\144\x61\164\x65\56", PR__MDL__OPTIMIZATION_MANAGER), "\163\164\141\162\x74\137\x64\x61\x74\145\x5f\x72\x65\x71\165\151\162\145" => __("\x50\x6c\x65\x61\x73\145\x20\x66\x69\x6c\x6c\40\163\x74\x61\x72\x74\40\144\x61\x74\145\56", PR__MDL__OPTIMIZATION_MANAGER), "\163\x74\x61\x72\164\x5f\x64\141\164\145\x5f\x70\x61\163\x73\145\x64" => __("\x59\157\165\40\x43\141\x6e\x20\156\x6f\164\x20\165\x73\x65\40\x70\x61\x73\x73\145\144\40\x64\141\164\145\x20\146\157\162\40\x73\164\141\x72\x74\40\144\141\x74\x65\56", PR__MDL__OPTIMIZATION_MANAGER)]); cscusseysqygsoiy: parent::enqueue(); } public function iqomsiuaqegycowu($ewgwqamkygiqaawc, $product) : string { $mykomoygwwmoksge = Setting::eiwcuqigayigimak(Setting::ueagcuikcyyoyymi, []); if (!$mykomoygwwmoksge) { goto isgwkwacoyimiauk; } $xwwgygqkqwuaqwsa = $this->qqmwsmimiiiqkooo(); $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x73\x74\141\x74\151\163\164\151\x63\x73", ["\x6c\x65\x76\145\x6c\x73" => $xwwgygqkqwuaqwsa, self::qescuiwgsyuikume => Setting::eiwcuqigayigimak(Setting::csascsakmmskewuy, ''), self::qwumqqyuasyskkkc => Setting::eiwcuqigayigimak(Setting::ueagcuikcyyoyymi, []), self::soquiwyuimckgiow => [self::qescuiwgsyuikume => ''] + $xwwgygqkqwuaqwsa, self::eqkeooqcsscoggia => Setting::eiwcuqigayigimak(Setting::wimciyacmqeewiqk, '')]); isgwkwacoyimiauk: return $ewgwqamkygiqaawc; } public function ewweaossowcqywaw(array $qookweymeqawmcwo, array $ikgwqyuyckaewsow, ?string $qqscaoyqikuyeoaw = null) : array { if (!($qqscaoyqikuyeoaw === self::cwgqacsqwyukoeiy)) { goto uegouoiuyoqkcscg; } if (!($cmwygeyygwqaemaq = Setting::eiwcuqigayigimak(Setting::yuwgaqcmuqeeyqmi))) { goto mggeqkcksyaymcsa; } $eosogusikmqwywgs = ManipulateBootstrap::oockkqiqsssakuug($cmwygeyygwqaemaq, self::ckcawaoawwioqecq, [], false); $ikgwqyuyckaewsow[] = Form::wowyaacgaccyeici($eosogusikmqwywgs)->jyumyyugiwwiqomk(0); mggeqkcksyaymcsa: $ikgwqyuyckaewsow[] = Form::cmmsoiggwwuyqqks(self::imeuukiiccuqqosc, __("\x53\x74\141\x72\164\40\x42\165\144\x67\145\x74\x20\x44\141\x74\x65", PR__MDL__OPTIMIZATION_MANAGER))->cgeiiwakumywwowu()->jyumyyugiwwiqomk(100)->qqoqoqmusaueoyca()->uuagoowwgcuosuuu()->cyuyuseegoqgwmas(); uegouoiuyoqkcscg: return parent::ewweaossowcqywaw($qookweymeqawmcwo, $ikgwqyuyckaewsow, $qqscaoyqikuyeoaw); } }
