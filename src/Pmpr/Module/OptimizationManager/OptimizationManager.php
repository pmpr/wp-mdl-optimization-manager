<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e6b26a6d446             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager; use Exception; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\OptimizationManager\Admin\Admin; use Pmpr\Module\OptimizationManager\Model\Budget; use Pmpr\Module\OptimizationManager\Model\Domain; use Pmpr\Module\OptimizationManager\Model\Model; use Pmpr\Module\OptimizationManager\Panel\Panel; use Pmpr\Module\OptimizationManager\REST\REST; class OptimizationManager extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x4f\x70\164\151\155\151\x7a\x61\164\x69\x6f\156\40\115\x61\156\141\x67\x65\x72", PR__MDL__OPTIMIZATION_MANAGER); }]); if (!$this->gmiyqqaekqcsoime()) { goto qcessicwuikwqsis; } parent::__construct(); $this->iemaakgqgqosiecm(); qcessicwuikwqsis: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\162\x6d\x5f\x70\165\162\x63\150\x61\163\x65\137\x66\141\x69\x6c\x65\x64\137\x63\x72\145\x61\x74\x65\144"), [$this, "\x73\153\x77\x75\x6b\147\x63\x71\x67\x71\x65\145\x6f\157\143\155"], 50, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\162\x6d\137\160\x75\x72\143\150\x61\x73\x65\x5f\x73\x75\x63\x63\145\x73\163\x66\165\x6c\x5f\x63\x72\145\x61\x74\145\x64"), [$this, "\163\x6b\167\165\x6b\x67\143\x71\x67\161\x65\x65\x6f\x6f\143\155"], 50, 2); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\142\141\x63\x6b\154\151\156\x6b\137\x6d\141\x6e\141\147\145\162\x5f\x6d\x6f\x64\165\x6c\145\x73"), [$this, "\171\167\143\165\145\171\147\157\163\x61\x79\163\155\145\x71\x71"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x77\157\x6f\x63\157\155\x6d\x65\x72\x63\x65\x5f\x61\164\x74\162\151\x62\x75\x74\x65\x5f\x74\141\170\x6f\156\157\155\151\x65\x73\137\166\141\154\x75\x65\137\164\171\x70\145\x73"), [$this, "\161\x75\x61\x69\151\x6b\x77\x61\x69\141\153\x73\141\161\155\x65"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x63\x6f\x6d\160\157\156\145\x6e\x74\x5f\155\x75\x6c\x74\x69\137\x73\x74\145\x70\137\x70\162\157\144\x75\143\164\137\x6f\142\152\x65\x63\x74"), [$this, "\x65\151\x65\167\157\x73\x6b\x77\x61\x73\155\143\x79\x69\x65\x67"], 99, 3); } public function skwukgcqgqeeoocm($mksyucucyswaukig, $icwicymcioeyeyek) { $syqougokmmgaoaee = ManipulateArray::get($icwicymcioeyeyek, self::ocwsuwyiiasigqaa . self::mswocgcucqoaesaa); $eumseywaqskomggw = ManipulateArray::get($icwicymcioeyeyek, self::weayyoewessosyko . self::mswocgcucqoaesaa); try { $umwqusowiqmyseom = null; $uamcoiueqaamsqma = ''; $gukqamyquokaeeai = Product::symcgieuakksimmu(); if (!($gukqamyquokaeeai && $gukqamyquokaeeai->auyygcmgumaikako($syqougokmmgaoaee))) { goto ygcsmkuycoagwyou; } $wyogkamcgoseimuk = null; if (!($yeyeakoqoeecqcuw = ManipulateArray::get($icwicymcioeyeyek, self::yuqaqwkmmeuawswk, 0))) { goto ieumumsgyguceusy; } $umwqusowiqmyseom = ManipulateWoocommerce::qusqcuegmmsiguym($yeyeakoqoeecqcuw); if (!(!$umwqusowiqmyseom || ($wyogkamcgoseimuk = $umwqusowiqmyseom->get_item($yeyeakoqoeecqcuw)))) { goto yssscwioiyygssec; } $this->yqkwsouguwgoywcw(__("\103\141\x6e\x20\156\157\x74\40\146\x69\156\x64\40\x6f\162\144\x65\162\40\x6f\162\x20\157\162\144\145\162\40\x69\164\x65\x6d\56", PR__MDL__OPTIMIZATION_MANAGER)); yssscwioiyygssec: ieumumsgyguceusy: if (!($eumseywaqskomggw && $syqougokmmgaoaee)) { goto omugkkesagcyagmk; } $yoqasmiegcmcqaus = Budget::symcgieuakksimmu(); $immcykkykeqgkgwg = Domain::symcgieuakksimmu(); if ($yoqasmiegcmcqaus && $immcykkykeqgkgwg) { goto ayyweymyuuiauamo; } $uamcoiueqaamsqma = $this->gcsweumukyckmgik($this->aqgegcykekmuggsu()); goto mosqsmqimqgqoase; ayyweymyuuiauamo: $wwwcwiueuuyyokia = $immcykkykeqgkgwg->uskosecsqoiqwmua($eumseywaqskomggw); if (!$wwwcwiueuuyyokia) { goto siqagquguiemuoku; } $kosiykkwwqmqwoqs = $immcykkykeqgkgwg->keeuqgyooycqoygw($wwwcwiueuuyyokia); goto ycakugokkqkuqyiu; siqagquguiemuoku: $sogksuscggsicmac = $immcykkykeqgkgwg->gscuuyuyauokoyuo([$immcykkykeqgkgwg::qkmqmaeuyokqgemg => $eumseywaqskomggw, $immcykkykeqgkgwg::ymamoeqaciwakwue => false]); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto coywmiyqgsweuiic; } $this->uocccyeugiykcmes($sogksuscggsicmac[self::iwyueouqaqegmcas], __("\103\x61\x6e\40\156\x6f\x74\x20\143\x72\x65\141\x74\145\40\157\160\x74\40\144\x6f\x6d\141\151\x6e\x3a\x20\x25\163", PR__MDL__OPTIMIZATION_MANAGER)); coywmiyqgsweuiic: $kosiykkwwqmqwoqs = $sogksuscggsicmac[self::gouqcwikiiygyasc]; ycakugokkqkuqyiu: if ($kosiykkwwqmqwoqs) { goto cmqucgoewuyieoyk; } $uamcoiueqaamsqma = __("\x44\x6f\x6d\141\151\156\x20\x69\163\x20\x72\145\161\x75\x69\162\x65\x20\x74\x6f\40\141\x64\144\x20\141\40\x62\165\x64\147\x65\x74\x2e", PR__MDL__OPTIMIZATION_MANAGER); goto yqykqysmiquwoasu; cmqucgoewuyieoyk: $ggkaciewmeqmgckg = date("\131\x2d\155\x2d\x64"); $isweyuoisomqyaag = null; if ($umwqusowiqmyseom) { goto gygawoqywkukmqee; } $weesokuqyggkegcg = $yoqasmiegcmcqaus->qumqowkwyaceeqwu([$yoqasmiegcmcqaus::iiooageieusuyomy => self::yygyasgygkeqacou, $yoqasmiegcmcqaus::ciyoccqkiamemcmm => 0, $yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $kosiykkwwqmqwoqs]); if ($weesokuqyggkegcg) { goto sycygoiaiqqageym; } $akoqwmessouuyeke = ManipulateWoocommerce::aeockkkqmycaawia($gukqamyquokaeeai->aqasygcsqysmmyke(), $gukqamyquokaeeai::smsioacowoikwikc, false, true); $isweyuoisomqyaag = $gukqamyquokaeeai->kkyysaymmqmqykam($akoqwmessouuyeke, [$gukqamyquokaeeai::imeuukiiccuqqosc => $ggkaciewmeqmgckg]); sycygoiaiqqageym: goto kciouyuaqkyqomam; gygawoqywkukmqee: $weesokuqyggkegcg = $yoqasmiegcmcqaus->qumqowkwyaceeqwu([$yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $kosiykkwwqmqwoqs, $yoqasmiegcmcqaus::yuqaqwkmmeuawswk => $yeyeakoqoeecqcuw]); if ($weesokuqyggkegcg) { goto oouoqimaaqcmccay; } $kuguwoaesuqsqysu = $wyogkamcgoseimuk->get_meta($gukqamyquokaeeai::gyeeyigiiewaqyyo); $ggkaciewmeqmgckg = ManipulateArray::get($kuguwoaesuqsqysu, $gukqamyquokaeeai::imeuukiiccuqqosc, $ggkaciewmeqmgckg); $isweyuoisomqyaag = $gukqamyquokaeeai->oyqguwgqyigmuwow($wyogkamcgoseimuk, $kuguwoaesuqsqysu); oouoqimaaqcmccay: kciouyuaqkyqomam: if (!$weesokuqyggkegcg) { goto iqcogmsguwoikame; } $uamcoiueqaamsqma = __("\x42\165\x64\147\x65\x74\x20\x77\151\x74\x68\40\x72\x65\x71\165\x65\x73\x74\x65\x64\40\x64\x61\x74\141\x20\141\154\x72\x65\141\x64\171\x20\x65\x78\x69\163\x74\56", PR__MDL__OPTIMIZATION_MANAGER); goto gimmuoqwckiseaik; iqcogmsguwoikame: if (!($wwgucssaecqekuek = ManipulateArray::get($isweyuoisomqyaag, self::ysskgssgwuwmqwym))) { goto quwcqmyokicssyew; } $eqgoocgaqwqcimie = ManipulateArray::get($wwgucssaecqekuek, $yoqasmiegcmcqaus::ciyoccqkiamemcmm); $iqaosyayeiuaisqi = ManipulateArray::get($wwgucssaecqekuek, $yoqasmiegcmcqaus::iiooageieusuyomy); $owiuekcekysskaoe = ManipulateArray::get($wwgucssaecqekuek, self::wcoquosyucmegcsq); $mksyucucyswaukig = ManipulateArray::get($isweyuoisomqyaag, self::ckmqoekmugkggeym); if (!($mksyucucyswaukig && ManipulateWoocommerce::okeikygoukyckqcc($mksyucucyswaukig, $gukqamyquokaeeai::smsioacowoikwikc))) { goto wwkgkaecgiwggcck; } $weesokuqyggkegcg = $yoqasmiegcmcqaus->qumqowkwyaceeqwu([$yoqasmiegcmcqaus::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, $yoqasmiegcmcqaus::iiooageieusuyomy => $iqaosyayeiuaisqi, $yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $kosiykkwwqmqwoqs]); wwkgkaecgiwggcck: if ($weesokuqyggkegcg) { goto kiwqkcaekqqyuegq; } $gqswsiquqaayuakq = [$yoqasmiegcmcqaus::wcoquosyucmegcsq => $owiuekcekysskaoe, $yoqasmiegcmcqaus::iiooageieusuyomy => $iqaosyayeiuaisqi, $yoqasmiegcmcqaus::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, $yoqasmiegcmcqaus::sqsuiimgeguwgmcg => $ggkaciewmeqmgckg, $yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $kosiykkwwqmqwoqs, $yoqasmiegcmcqaus::yuqaqwkmmeuawswk => $yeyeakoqoeecqcuw]; $sogksuscggsicmac = $yoqasmiegcmcqaus->gscuuyuyauokoyuo($gqswsiquqaayuakq); if (!$sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto umgaesggesswoaqe; } $uamcoiueqaamsqma = sprintf(__("\102\x75\x64\x67\145\164\x20\x77\151\x74\150\40\x6c\145\166\x65\154\40\45\x73\40\141\156\x64\x20\166\x61\154\x75\145\40\x25\x73\40\141\144\144\x65\x64\40\x73\x75\143\x63\145\x73\163\146\165\154\154\171\x2e", PR__MDL__OPTIMIZATION_MANAGER), $iqaosyayeiuaisqi, $eqgoocgaqwqcimie); goto qsygcycwieukkgwc; umgaesggesswoaqe: $uamcoiueqaamsqma = $this->gcsweumukyckmgik($sogksuscggsicmac[self::iwyueouqaqegmcas]); qsygcycwieukkgwc: kiwqkcaekqqyuegq: quwcqmyokicssyew: gimmuoqwckiseaik: yqykqysmiquwoasu: mosqsmqimqgqoase: omugkkesagcyagmk: ygcsmkuycoagwyou: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $this->kyacickkomkioeyu($wgaoewqkwgomoaai); } if (!$uamcoiueqaamsqma) { goto kqksuugcgsyeoayy; } ManipulateWoocommerce::mscqqcmmkkiqwcua($uamcoiueqaamsqma, $umwqusowiqmyseom ?: $this); kqksuugcgsyeoayy: } public function iemaakgqgqosiecm() { REST::symcgieuakksimmu(); Admin::symcgieuakksimmu(); Model::symcgieuakksimmu(); Setting::symcgieuakksimmu(); } public function quaiikwaiaksaqme($qgeeqyucwycemwmo = []) : array { $qgeeqyucwycemwmo[Product::kgyawuuygekasmwc] = __("\x4c\145\166\145\154", PR__MDL__OPTIMIZATION_MANAGER); return $qgeeqyucwycemwmo; } public function eiewoskwasmcyieg($mksyucucyswaukig, $wksoawcgagcgoask, $product) : ?Product { if (!($product && $this->cqusmgskowmesgcg() === $wksoawcgagcgoask)) { goto iggyqogweyosuikc; } $mksyucucyswaukig = Product::symcgieuakksimmu($wksoawcgagcgoask, $product); iggyqogweyosuikc: return $mksyucucyswaukig; } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\x70\x61\x6e\x65\154")) { goto qqewoyookaskiuek; } Panel::symcgieuakksimmu(); qqewoyookaskiuek: } public function ywcueygosaysmeqq($kuemsykessaoquoy) { $kuemsykessaoquoy[$this->cqusmgskowmesgcg()] = $this->kmuweyayaqoeqiyw()->cisyiemkeykgkomc(); return $kuemsykessaoquoy; } }
