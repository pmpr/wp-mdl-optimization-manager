<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6148f7712a1f0             |
    |_______________________________________|
*/
 namespace Pmpr\Package\OptimizationManager; use Exception; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconBrandInterface; use Pmpr\Package\ComponentManager\Product as BaseClass; use Pmpr\Package\DomainManager\Model\Domain; use Pmpr\Package\OptimizationManager\Model\Budget; use Pmpr\Package\OptimizationManager\Model\Domain as OptDomain; use WC_Order; class Product extends BaseClass { const LEVEL_TYPE = "\154\145\166\x65\154"; const START_BUDGET_DATE = "\163\164\x61\x72\x74\137\x62\165\x64\x67\145\164\x5f\x64\141\164\145"; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\167\x6f\x6f\143\157\x6d\155\145\x72\143\145\137\141\x74\x74\x72\x69\142\x75\x74\145\137\x74\x61\170\157\x6e\157\x6d\x69\x65\x73\x5f\166\141\x6c\x75\x65\137\164\171\160\x65\x73"), [$this, "\x71\165\x61\151\151\x6b\x77\x61\151\x61\x6b\163\x61\x71\x6d\145"]); parent::kgquecmsgcouyaya(); } public function umeweaskauicgikc($icwicymcioeyeyek, $wiiucqsygckgwcia, WC_Order $umwqusowiqmyseom, bool $wmgiiumwscoyqkqa) { try { $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $yoqasmiegcmcqaus = Budget::symcgieuakksimmu(); $immcykkykeqgkgwg = OptDomain::symcgieuakksimmu(); $wwwcwiueuuyyokia = null; $fooqqkeicsiaascw = null; if (!($wiiucqsygckgwcia && !$wmgiiumwscoyqkqa)) { goto cecuyayqoioasumi; } $wwwcwiueuuyyokia = $immcykkykeqgkgwg->uskosecsqoiqwmua($wiiucqsygckgwcia); cecuyayqoioasumi: $akyiigeggqowmqqq = $swgwkyqkakceqeia->keeuqgyooycqoygw($wiiucqsygckgwcia); if (!$wwwcwiueuuyyokia) { goto qgoiooayqmqqsiok; } $fooqqkeicsiaascw = $immcykkykeqgkgwg->keeuqgyooycqoygw($wwwcwiueuuyyokia); goto qwigomakwmyiwkgo; qgoiooayqmqqsiok: $sogksuscggsicmac = $immcykkykeqgkgwg->gscuuyuyauokoyuo([$immcykkykeqgkgwg::DOMAIN_ID => $akyiigeggqowmqqq, $immcykkykeqgkgwg::PRIVILEGED => false]); if (!$sogksuscggsicmac[self::SUCCESS]) { goto qiaqsassksqiuyae; } $fooqqkeicsiaascw = $swgwkyqkakceqeia->keeuqgyooycqoygw($sogksuscggsicmac); goto qogqewiwmwiwskgm; qiaqsassksqiuyae: $this->uocccyeugiykcmes($sogksuscggsicmac[self::ERRORS], __("\x43\141\156\x20\x6e\x6f\164\x20\143\162\x65\x61\x74\x65\40\157\160\164\40\144\x6f\x6d\x61\x69\x6e\x3a\40\x25\163", PR__PKG__OPTIMIZATION_MANAGER)); qogqewiwmwiwskgm: qwigomakwmyiwkgo: if (!$fooqqkeicsiaascw) { goto eqkauqciwewmgeoi; } $qecuekqmeaiykeek = $this->icoiiymcckycueyg($umwqusowiqmyseom, $icwicymcioeyeyek); if (!$qecuekqmeaiykeek) { goto sciwggaeogcoesiu; } $ggkaciewmeqmgckg = ManipulateArray::get($icwicymcioeyeyek, self::START_BUDGET_DATE, date("\x59\x2d\155\x2d\144")); $gqswsiquqaayuakq = [$yoqasmiegcmcqaus::ORDER => $umwqusowiqmyseom->get_id(), $yoqasmiegcmcqaus::START => $ggkaciewmeqmgckg, $yoqasmiegcmcqaus::DOMAIN_ID => $fooqqkeicsiaascw]; foreach ($qecuekqmeaiykeek as $isweyuoisomqyaag) { $wwgucssaecqekuek = ManipulateArray::get($isweyuoisomqyaag, self::ATTRS); if (!$wwgucssaecqekuek) { goto mkwskuycuyguqqok; } $wwgucssaecqekuek = array_merge($wwgucssaecqekuek, $gqswsiquqaayuakq); if (count($wwgucssaecqekuek) === 6) { goto cuykwgmswkskqkyi; } $this->yqkwsouguwgoywcw(__("\102\165\144\x67\x65\164\x20\x63\141\156\47\164\x20\x62\x65\x20\141\144\x64\x2c\x20\x73\x6f\x6d\x65\40\x72\145\161\165\151\x72\145\40\146\151\x65\154\x64\163\x20\156\x6f\164\x20\x73\145\164\x2e", PR__PKG__OPTIMIZATION_MANAGER)); goto kuicqywysciceggs; cuykwgmswkskqkyi: $sogksuscggsicmac = $yoqasmiegcmcqaus->gscuuyuyauokoyuo($gqswsiquqaayuakq); if ($sogksuscggsicmac[self::SUCCESS]) { goto csscmcacoikwsecs; } $this->uocccyeugiykcmes($sogksuscggsicmac[self::ERRORS]); csscmcacoikwsecs: kuicqywysciceggs: mkwskuycuyguqqok: asmecuqiyyswueqe: } myoicgcuugciueis: sciwggaeogcoesiu: eqkauqciwewmgeoi: } catch (Exception $wgaoewqkwgomoaai) { } parent::umeweaskauicgikc($icwicymcioeyeyek, $wiiucqsygckgwcia, $umwqusowiqmyseom, $wmgiiumwscoyqkqa); } public function micmaeaccooaeuim(&$uomewyckeuqoqocu, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $sqeykgyoooqysmca, $icwicymcioeyeyek) { switch ($sqeykgyoooqysmca) { case self::DATE: $euceoqscgmweosya = ManipulateArray::get($ymkomoccmymcoiea, "\x64\141\164\x65\137\x74\171\160\x65"); if ($euceoqscgmweosya) { goto kiqogmwcgcamwiig; } $euceoqscgmweosya = self::MONTH; kiqogmwcgcamwiig: if ($this->icmwkisamycmacgi()) { goto iomcaiwewsawiamu; } $uoqgqaquumsucqau = ManipulateArray::get($icwicymcioeyeyek, self::START_BUDGET_DATE, date("\131\x2d\x6d\55\144")); $this->backlinkExpire = $this->myaugesymggoiooy($uoqgqaquumsucqau, $eqgoocgaqwqcimie, $euceoqscgmweosya); iomcaiwewsawiamu: $uomewyckeuqoqocu[Budget::END] = $this->icmwkisamycmacgi(); goto kwagwqyusyiyoaqs; case self::NUMBER: $uomewyckeuqoqocu[Budget::VALUE] = $eqgoocgaqwqcimie; goto kwagwqyusyiyoaqs; case self::LEVEL_TYPE: $uomewyckeuqoqocu[Budget::LEVEL] = $eqgoocgaqwqcimie == 1 ? Budget::LEVEL_1 : Budget::LEVEL_2; goto kwagwqyusyiyoaqs; default: } yowsmsiyimmimemc: kwagwqyusyiyoaqs: return parent::micmaeaccooaeuim($uomewyckeuqoqocu, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $sqeykgyoooqysmca, $icwicymcioeyeyek); } public function enqueue() { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\x70\x72\x6f\x64\x75\x63\x74", $eygsasmqycagyayw->get("\x70\x72\x6f\144\x75\x63\x74\56\x6a\163"))->ayuciigykaswwqeo("\152\x71\x75\x65\x72\x79")); $eygsasmqycagyayw->ieayqiyiuuguowyq(self::ERRORS, ["\x73\x74\x61\162\x74\137\x64\x61\x74\x65\x5f\x6e\157\x74\x5f\166\141\x6c\x69\x64" => __("\x53\164\x61\162\x74\40\104\141\164\145\40\x69\x73\40\x6e\x6f\x74\40\x61\x20\x76\x61\x6c\x69\144\40\x64\141\164\145\56", PR__PKG__OPTIMIZATION_MANAGER), "\x73\164\141\162\164\137\x64\x61\x74\145\x5f\x72\145\x71\165\x69\162\145" => __("\120\x6c\x65\141\x73\x65\40\146\151\x6c\154\x20\x73\x74\x61\162\164\x20\144\141\x74\x65\56", PR__PKG__OPTIMIZATION_MANAGER), "\x73\x74\141\162\164\137\144\x61\x74\145\x5f\x70\x61\x73\x73\145\144" => __("\x59\x6f\x75\x20\x43\x61\x6e\40\x6e\157\x74\x20\165\163\145\x20\160\141\163\163\145\144\x20\x64\141\164\x65\40\146\157\162\40\x73\x74\141\x72\164\40\x64\141\x74\145\56", PR__PKG__OPTIMIZATION_MANAGER)]); parent::enqueue(); } public function quaiikwaiaksaqme($qgeeqyucwycemwmo = []) : array { $qgeeqyucwycemwmo[self::LEVEL_TYPE] = __("\114\x65\166\145\154", PR__PKG__OPTIMIZATION_MANAGER); return $qgeeqyucwycemwmo; } public function iqomsiuaqegycowu($ewgwqamkygiqaawc, $product) : string { $qookweymeqawmcwo["\147\165\x69\144\163"] = [__("\104\x6f\167\x6e\x6c\x6f\x61\144\x20\x61\156\x64\x20\x69\x6e\163\x74\x61\154\154\x20\167\x6f\x72\x64\160\162\145\x73\163\40\160\154\x75\x67\x69\x6e\x2e", PR__PKG__OPTIMIZATION_MANAGER), sprintf(__("\106\x72\157\155\x20\x25\163\x20\155\x65\x6e\165\x2c\40\x69\156\x73\164\x61\154\154\x20\141\x6e\144\x20\141\x63\164\x69\166\x65\x20\x25\163\56", PR__PKG__OPTIMIZATION_MANAGER), ManipulateHTML::ciuuiyckmsygceis(__("\x4d\x6f\144\165\x6c\x65\163", PR__PKG__OPTIMIZATION_MANAGER)), ManipulateHTML::ciuuiyckmsygceis(__("\x4f\x70\164\151\155\x69\x7a\x61\x74\x69\x6f\x6e", PR__PKG__OPTIMIZATION_MANAGER))), sprintf(__("\x46\x72\157\x6d\x20\x25\163\x20\164\x61\142\x2c\40\x73\145\145\x20\164\150\x65\40\156\165\x6d\x62\x65\x72\40\157\146\40\x62\x75\x64\147\145\x74\163\x20\x72\145\x71\x75\x69\x72\145\x64\x2e", PR__PKG__OPTIMIZATION_MANAGER), ManipulateHTML::ciuuiyckmsygceis(__("\x45\x73\x74\x69\155\141\164\151\157\x6e", PR__PKG__OPTIMIZATION_MANAGER)))]; $qookweymeqawmcwo[self::TITLE] = __("\123\145\154\145\x63\164\151\157\156\40\107\165\x69\144\x65", PR__PKG__OPTIMIZATION_MANAGER); $qookweymeqawmcwo["\x77\157\x72\x64\160\x72\x65\163\x73\x5f\151\x63\157\x6e"] = IconBrandInterface::ICON_WORDPRESS; $qookweymeqawmcwo[self::DESCRIPTION] = __("\x47\x65\x74\40\x68\x65\154\x70\40\146\162\x6f\x6d\x20\x6f\165\162\40\163\160\145\x63\x69\141\154\x20\x70\x6c\165\x67\151\x6e\40\164\157\x20\x63\150\x6f\157\x73\145\40\163\x65\x72\166\x69\x63\145\40\144\145\164\x61\x69\x6c\163\x20\x77\x69\x73\145\x6c\x79", PR__PKG__OPTIMIZATION_MANAGER); $qookweymeqawmcwo["\x69\x6e\163\164\141\154\154\137\160\x6c\165\147\x69\x6e\137\x74\x65\x78\x74"] = __("\120\115\x50\x52\x20\x50\x6c\165\x67\x69\x6e", PR__PKG__OPTIMIZATION_MANAGER); return $this->iuygowkemiiwqmiw("\142\165\144\147\145\164\x5f\147\165\151\144\145", $qookweymeqawmcwo); } public function ewweaossowcqywaw(array $qookweymeqawmcwo, array $ikgwqyuyckaewsow, ?string $qqscaoyqikuyeoaw = null) : array { if (!($qqscaoyqikuyeoaw === self::CHOICE_VARIATIONS_STEP)) { goto sqiciiuwmykocycc; } $ikgwqyuyckaewsow[] = Form::cmmsoiggwwuyqqks(self::START_BUDGET_DATE, __("\x53\164\141\x72\x74\40\x42\x75\x64\147\145\164\x20\x44\x61\164\x65", PR__PKG__OPTIMIZATION_MANAGER))->cgeiiwakumywwowu()->jyumyyugiwwiqomk(100)->qqoqoqmusaueoyca()->uuagoowwgcuosuuu(); sqiciiuwmykocycc: return parent::ewweaossowcqywaw($qookweymeqawmcwo, $ikgwqyuyckaewsow, $qqscaoyqikuyeoaw); } }
