<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             614b1b0cd3c88             |
    |_______________________________________|
*/
 namespace Pmpr\Package\OptimizationManager; use Exception; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconBrandInterface; use Pmpr\Package\ComponentManager\Product as BaseClass; use Pmpr\Package\DomainManager\Model\Domain; use Pmpr\Package\OptimizationManager\Model\Budget; use Pmpr\Package\OptimizationManager\Model\Domain as OptDomain; use WC_Order; class Product extends BaseClass { const LEVEL_TYPE = "\154\x65\x76\145\154"; const START_BUDGET_DATE = "\163\x74\x61\162\164\137\x62\x75\x64\147\x65\164\x5f\x64\x61\x74\145"; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\167\157\157\x63\157\x6d\155\x65\162\x63\x65\137\141\x74\x74\x72\151\x62\165\164\145\x5f\164\x61\170\157\156\157\x6d\151\x65\163\137\166\141\x6c\165\x65\x5f\164\171\x70\145\x73"), [$this, "\161\x75\x61\151\151\x6b\x77\x61\151\x61\x6b\163\141\x71\155\x65"]); parent::kgquecmsgcouyaya(); } public function umeweaskauicgikc($icwicymcioeyeyek, $wiiucqsygckgwcia, WC_Order $umwqusowiqmyseom, bool $wmgiiumwscoyqkqa) { try { $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $yoqasmiegcmcqaus = Budget::symcgieuakksimmu(); $immcykkykeqgkgwg = OptDomain::symcgieuakksimmu(); $wwwcwiueuuyyokia = null; $fooqqkeicsiaascw = null; if (!($wiiucqsygckgwcia && !$wmgiiumwscoyqkqa)) { goto cecuyayqoioasumi; } $wwwcwiueuuyyokia = $immcykkykeqgkgwg->uskosecsqoiqwmua($wiiucqsygckgwcia); cecuyayqoioasumi: $akyiigeggqowmqqq = $swgwkyqkakceqeia->keeuqgyooycqoygw($wiiucqsygckgwcia); if (!$wwwcwiueuuyyokia) { goto qgoiooayqmqqsiok; } $fooqqkeicsiaascw = $immcykkykeqgkgwg->keeuqgyooycqoygw($wwwcwiueuuyyokia); goto qwigomakwmyiwkgo; qgoiooayqmqqsiok: $sogksuscggsicmac = $immcykkykeqgkgwg->gscuuyuyauokoyuo([$immcykkykeqgkgwg::DOMAIN_ID => $akyiigeggqowmqqq, $immcykkykeqgkgwg::PRIVILEGED => false]); if (!$sogksuscggsicmac[self::SUCCESS]) { goto qiaqsassksqiuyae; } $fooqqkeicsiaascw = $swgwkyqkakceqeia->keeuqgyooycqoygw($sogksuscggsicmac); goto qogqewiwmwiwskgm; qiaqsassksqiuyae: $this->uocccyeugiykcmes($sogksuscggsicmac[self::ERRORS], __("\x43\x61\x6e\40\x6e\157\x74\x20\x63\162\x65\141\164\145\x20\157\x70\164\x20\144\x6f\x6d\x61\151\156\72\x20\45\x73", PR__PKG__OPTIMIZATION_MANAGER)); qogqewiwmwiwskgm: qwigomakwmyiwkgo: if (!$fooqqkeicsiaascw) { goto eqkauqciwewmgeoi; } $qecuekqmeaiykeek = $this->icoiiymcckycueyg($umwqusowiqmyseom, $icwicymcioeyeyek); if (!$qecuekqmeaiykeek) { goto sciwggaeogcoesiu; } $ggkaciewmeqmgckg = ManipulateArray::get($icwicymcioeyeyek, self::START_BUDGET_DATE, date("\131\55\x6d\x2d\144")); $gqswsiquqaayuakq = [$yoqasmiegcmcqaus::ORDER => $umwqusowiqmyseom->get_id(), $yoqasmiegcmcqaus::START => $ggkaciewmeqmgckg, $yoqasmiegcmcqaus::DOMAIN_ID => $fooqqkeicsiaascw]; foreach ($qecuekqmeaiykeek as $isweyuoisomqyaag) { $wwgucssaecqekuek = ManipulateArray::get($isweyuoisomqyaag, self::ATTRS); if (!$wwgucssaecqekuek) { goto mkwskuycuyguqqok; } $wwgucssaecqekuek = array_merge($wwgucssaecqekuek, $gqswsiquqaayuakq); if (count($wwgucssaecqekuek) === 6) { goto cuykwgmswkskqkyi; } $this->yqkwsouguwgoywcw(__("\x42\165\144\147\x65\x74\x20\143\141\156\47\x74\40\142\x65\x20\141\144\144\x2c\40\x73\x6f\155\x65\40\162\145\161\x75\151\x72\x65\40\146\151\x65\154\144\163\40\156\x6f\164\x20\163\x65\x74\56", PR__PKG__OPTIMIZATION_MANAGER)); goto kuicqywysciceggs; cuykwgmswkskqkyi: $sogksuscggsicmac = $yoqasmiegcmcqaus->gscuuyuyauokoyuo($gqswsiquqaayuakq); if ($sogksuscggsicmac[self::SUCCESS]) { goto csscmcacoikwsecs; } $this->uocccyeugiykcmes($sogksuscggsicmac[self::ERRORS]); csscmcacoikwsecs: kuicqywysciceggs: mkwskuycuyguqqok: asmecuqiyyswueqe: } myoicgcuugciueis: sciwggaeogcoesiu: eqkauqciwewmgeoi: } catch (Exception $wgaoewqkwgomoaai) { } parent::umeweaskauicgikc($icwicymcioeyeyek, $wiiucqsygckgwcia, $umwqusowiqmyseom, $wmgiiumwscoyqkqa); } public function micmaeaccooaeuim(&$uomewyckeuqoqocu, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $sqeykgyoooqysmca, $icwicymcioeyeyek) { switch ($sqeykgyoooqysmca) { case self::DATE: $euceoqscgmweosya = ManipulateArray::get($ymkomoccmymcoiea, "\x64\141\164\x65\x5f\164\171\x70\145"); if ($euceoqscgmweosya) { goto kiqogmwcgcamwiig; } $euceoqscgmweosya = self::MONTH; kiqogmwcgcamwiig: if ($this->icmwkisamycmacgi()) { goto iomcaiwewsawiamu; } $uoqgqaquumsucqau = ManipulateArray::get($icwicymcioeyeyek, self::START_BUDGET_DATE, date("\x59\55\155\55\144")); $this->backlinkExpire = $this->myaugesymggoiooy($uoqgqaquumsucqau, $eqgoocgaqwqcimie, $euceoqscgmweosya); iomcaiwewsawiamu: $uomewyckeuqoqocu[Budget::END] = $this->icmwkisamycmacgi(); goto kwagwqyusyiyoaqs; case self::NUMBER: $uomewyckeuqoqocu[Budget::VALUE] = $eqgoocgaqwqcimie; goto kwagwqyusyiyoaqs; case self::LEVEL_TYPE: $uomewyckeuqoqocu[Budget::LEVEL] = $eqgoocgaqwqcimie == 1 ? Budget::LEVEL_1 : Budget::LEVEL_2; goto kwagwqyusyiyoaqs; default: } yowsmsiyimmimemc: kwagwqyusyiyoaqs: return parent::micmaeaccooaeuim($uomewyckeuqoqocu, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $sqeykgyoooqysmca, $icwicymcioeyeyek); } public function enqueue() { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\x70\x72\x6f\144\165\143\164", $eygsasmqycagyayw->get("\x70\162\157\144\x75\x63\x74\56\x6a\x73"))->ayuciigykaswwqeo("\152\x71\165\145\x72\171")); $eygsasmqycagyayw->ieayqiyiuuguowyq(self::ERRORS, ["\x73\164\141\x72\164\137\144\141\164\x65\x5f\x6e\157\x74\x5f\x76\x61\154\x69\x64" => __("\123\164\141\162\x74\x20\104\x61\x74\145\40\x69\x73\40\x6e\x6f\164\x20\141\40\166\x61\x6c\151\144\x20\144\141\164\145\56", PR__PKG__OPTIMIZATION_MANAGER), "\163\164\141\162\164\x5f\x64\x61\x74\x65\x5f\x72\145\x71\165\x69\162\145" => __("\x50\154\x65\x61\163\145\x20\x66\151\x6c\x6c\40\163\164\141\162\164\40\144\141\x74\x65\x2e", PR__PKG__OPTIMIZATION_MANAGER), "\x73\164\x61\x72\x74\137\144\141\x74\x65\x5f\x70\141\163\x73\145\144" => __("\131\x6f\x75\40\103\141\156\40\x6e\157\164\x20\165\x73\145\x20\x70\141\x73\163\x65\144\x20\x64\x61\x74\x65\40\146\x6f\x72\40\x73\x74\141\162\x74\x20\144\x61\164\x65\56", PR__PKG__OPTIMIZATION_MANAGER)]); parent::enqueue(); } public function quaiikwaiaksaqme($qgeeqyucwycemwmo = []) : array { $qgeeqyucwycemwmo[self::LEVEL_TYPE] = __("\x4c\145\166\145\x6c", PR__PKG__OPTIMIZATION_MANAGER); return $qgeeqyucwycemwmo; } public function iqomsiuaqegycowu($ewgwqamkygiqaawc, $product) : string { $qookweymeqawmcwo["\147\165\151\x64\163"] = [__("\104\x6f\x77\156\x6c\x6f\x61\144\x20\141\x6e\144\x20\151\x6e\x73\164\x61\154\154\x20\x77\x6f\x72\144\160\162\x65\x73\163\x20\x70\x6c\x75\147\151\156\56", PR__PKG__OPTIMIZATION_MANAGER), sprintf(__("\106\162\157\x6d\40\45\x73\x20\155\x65\156\x75\54\40\x69\x6e\x73\164\141\x6c\x6c\x20\x61\156\144\40\141\x63\164\151\x76\x65\x20\x25\163\x2e", PR__PKG__OPTIMIZATION_MANAGER), ManipulateHTML::ciuuiyckmsygceis(__("\115\x6f\144\165\154\x65\163", PR__PKG__OPTIMIZATION_MANAGER)), ManipulateHTML::ciuuiyckmsygceis(__("\117\x70\x74\x69\155\151\x7a\x61\164\151\x6f\156", PR__PKG__OPTIMIZATION_MANAGER))), sprintf(__("\x46\x72\x6f\155\x20\45\163\40\x74\x61\x62\x2c\x20\163\145\x65\x20\164\x68\x65\40\156\x75\155\142\x65\x72\40\157\x66\x20\x62\x75\144\x67\145\x74\163\40\162\145\161\165\151\x72\x65\144\56", PR__PKG__OPTIMIZATION_MANAGER), ManipulateHTML::ciuuiyckmsygceis(__("\x45\163\x74\x69\x6d\141\x74\x69\x6f\156", PR__PKG__OPTIMIZATION_MANAGER)))]; $qookweymeqawmcwo[self::TITLE] = __("\x53\x65\154\145\x63\x74\151\157\156\x20\x47\x75\x69\144\x65", PR__PKG__OPTIMIZATION_MANAGER); $qookweymeqawmcwo["\x77\x6f\x72\144\x70\x72\145\163\163\137\151\x63\157\156"] = IconBrandInterface::ICON_WORDPRESS; $qookweymeqawmcwo[self::DESCRIPTION] = __("\107\x65\x74\40\x68\x65\154\x70\40\146\162\157\155\40\157\165\162\x20\163\x70\x65\143\x69\x61\x6c\40\x70\154\x75\147\151\156\x20\x74\157\40\x63\x68\x6f\157\x73\145\x20\163\x65\162\x76\151\143\x65\40\144\145\x74\141\x69\154\x73\40\x77\x69\x73\145\154\x79", PR__PKG__OPTIMIZATION_MANAGER); $qookweymeqawmcwo["\x69\156\x73\164\x61\x6c\x6c\137\160\x6c\x75\147\151\156\137\x74\145\170\x74"] = __("\120\115\x50\122\x20\x50\x6c\165\x67\151\156", PR__PKG__OPTIMIZATION_MANAGER); return $this->iuygowkemiiwqmiw("\x62\x75\x64\x67\145\x74\x5f\x67\x75\x69\144\145", $qookweymeqawmcwo); } public function ewweaossowcqywaw(array $qookweymeqawmcwo, array $ikgwqyuyckaewsow, ?string $qqscaoyqikuyeoaw = null) : array { if (!($qqscaoyqikuyeoaw === self::CHOICE_VARIATIONS_STEP)) { goto sqiciiuwmykocycc; } $ikgwqyuyckaewsow[] = Form::cmmsoiggwwuyqqks(self::START_BUDGET_DATE, __("\x53\x74\141\x72\164\40\x42\x75\x64\147\x65\164\40\104\141\x74\x65", PR__PKG__OPTIMIZATION_MANAGER))->cgeiiwakumywwowu()->jyumyyugiwwiqomk(100)->qqoqoqmusaueoyca()->uuagoowwgcuosuuu(); sqiciiuwmykocycc: return parent::ewweaossowcqywaw($qookweymeqawmcwo, $ikgwqyuyckaewsow, $qqscaoyqikuyeoaw); } }