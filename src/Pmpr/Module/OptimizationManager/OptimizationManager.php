<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668107472aaf4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager; use Exception; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Module\OptimizationManager\Subscription\Subscription; class OptimizationManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x4f\x70\x74\x69\x6d\x69\172\141\164\151\x6f\156\x20\x4d\x61\x6e\141\147\x65\x72", PR__MDL__OPTIMIZATION_MANAGER); }]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x6c\x6f\x67\151\156\137\162\145\144\151\162\x65\x63\164", "\165\162\x6c\144\x65\x63\x6f\x64\x65"); $this->aqaqisyssqeomwom("\x62\x61\143\x6b\x6c\151\x6e\153\137\x6d\x61\156\141\147\145\x72\x5f\x6d\x6f\x64\165\x6c\x65\163", [$this, "\x79\167\x63\x75\145\x79\147\157\x73\x61\171\x73\x6d\x65\x71\x71"])->aqaqisyssqeomwom("\143\157\155\x70\x6f\x6e\145\156\164\137\155\165\x6c\x74\151\x5f\163\x74\x65\160\x5f\160\162\157\x64\165\x63\x74\x5f\157\142\152\145\143\164", [$this, "\x65\x69\x65\x77\157\163\153\x77\x61\163\x6d\143\171\151\x65\x67"], 99, 3); } public function mameiwsayuyquoeq() { Setting::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\123\x75\x62\163\x63\162\151\160\x74\x69\x6f\156", self::goqwwcuaqoyouoya)) { goto cecuyayqoioasumi; } Subscription::symcgieuakksimmu(); cecuyayqoioasumi: } public function skwukgcqgqeeoocm($mksyucucyswaukig, $icwicymcioeyeyek) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $syqougokmmgaoaee = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, self::ocwsuwyiiasigqaa . self::mswocgcucqoaesaa); $eumseywaqskomggw = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, self::weayyoewessosyko . self::mswocgcucqoaesaa); try { $umwqusowiqmyseom = null; $uamcoiueqaamsqma = ''; $gukqamyquokaeeai = Product::symcgieuakksimmu(); $aqauykcugwiqkumq = $this->caokeucsksukesyo()->mmmcswscsiecscwg(); if (!$gukqamyquokaeeai->auyygcmgumaikako($syqougokmmgaoaee)) { goto cggowoquuiwqkyew; } $wyogkamcgoseimuk = null; if (!($yeyeakoqoeecqcuw = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, self::yuqaqwkmmeuawswk, 0))) { goto qogqewiwmwiwskgm; } $umwqusowiqmyseom = $aqauykcugwiqkumq->igiwycommqemseky($yeyeakoqoeecqcuw); if (!(!$umwqusowiqmyseom || ($wyogkamcgoseimuk = $umwqusowiqmyseom->get_item($yeyeakoqoeecqcuw)))) { goto qiaqsassksqiuyae; } $this->yqkwsouguwgoywcw(__("\x43\141\156\40\x6e\x6f\x74\40\x66\x69\156\144\40\157\162\x64\x65\x72\x20\157\162\40\157\x72\x64\x65\x72\x20\x69\x74\145\155\56", PR__MDL__OPTIMIZATION_MANAGER)); qiaqsassksqiuyae: qogqewiwmwiwskgm: if (!($eumseywaqskomggw && $syqougokmmgaoaee)) { goto uukumskkeggaowck; } $yoqasmiegcmcqaus = Budget::symcgieuakksimmu(); $immcykkykeqgkgwg = Domain::symcgieuakksimmu(); $wwwcwiueuuyyokia = $immcykkykeqgkgwg->uskosecsqoiqwmua($eumseywaqskomggw); if (!$wwwcwiueuuyyokia) { goto qwigomakwmyiwkgo; } $kosiykkwwqmqwoqs = $immcykkykeqgkgwg->keeuqgyooycqoygw($wwwcwiueuuyyokia); goto myoicgcuugciueis; qwigomakwmyiwkgo: $sogksuscggsicmac = $immcykkykeqgkgwg->gscuuyuyauokoyuo([$immcykkykeqgkgwg::qkmqmaeuyokqgemg => $eumseywaqskomggw, $immcykkykeqgkgwg::ymamoeqaciwakwue => false]); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto qgoiooayqmqqsiok; } $this->uocccyeugiykcmes($sogksuscggsicmac[self::iwyueouqaqegmcas], __("\103\141\156\40\156\x6f\164\x20\143\x72\145\x61\x74\145\40\157\160\x74\40\144\x6f\155\x61\x69\x6e\x3a\x20\x25\x73", PR__MDL__OPTIMIZATION_MANAGER)); qgoiooayqmqqsiok: $kosiykkwwqmqwoqs = $sogksuscggsicmac[self::gouqcwikiiygyasc]; myoicgcuugciueis: if ($kosiykkwwqmqwoqs) { goto sqiciiuwmykocycc; } $uamcoiueqaamsqma = __("\104\x6f\x6d\141\x69\156\x20\x69\163\40\x72\145\161\165\151\162\145\40\x74\157\x20\141\x64\144\40\x61\40\x62\165\144\x67\x65\164\56", PR__MDL__OPTIMIZATION_MANAGER); goto eequksumcoogyoem; sqiciiuwmykocycc: $ggkaciewmeqmgckg = date("\x59\55\155\55\144"); $isweyuoisomqyaag = null; if ($umwqusowiqmyseom) { goto cuykwgmswkskqkyi; } $weesokuqyggkegcg = $yoqasmiegcmcqaus->qumqowkwyaceeqwu([$yoqasmiegcmcqaus::iiooageieusuyomy => self::yygyasgygkeqacou, $yoqasmiegcmcqaus::ciyoccqkiamemcmm => 0, $yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $kosiykkwwqmqwoqs]); if ($weesokuqyggkegcg) { goto csscmcacoikwsecs; } $akoqwmessouuyeke = ManipulateWoocommerce::aeockkkqmycaawia($gukqamyquokaeeai->aqasygcsqysmmyke(), $gukqamyquokaeeai::smsioacowoikwikc, false, true); $isweyuoisomqyaag = $gukqamyquokaeeai->kkyysaymmqmqykam($akoqwmessouuyeke, [$gukqamyquokaeeai::imeuukiiccuqqosc => $ggkaciewmeqmgckg]); csscmcacoikwsecs: goto kuicqywysciceggs; cuykwgmswkskqkyi: $weesokuqyggkegcg = $yoqasmiegcmcqaus->qumqowkwyaceeqwu([$yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $kosiykkwwqmqwoqs, $yoqasmiegcmcqaus::yuqaqwkmmeuawswk => $yeyeakoqoeecqcuw]); if ($weesokuqyggkegcg) { goto asmecuqiyyswueqe; } $kuguwoaesuqsqysu = $wyogkamcgoseimuk->get_meta($gukqamyquokaeeai::iskqcquwkyuscqmg); $ggkaciewmeqmgckg = $gkyciwoiiisgywcs->get($kuguwoaesuqsqysu, $gukqamyquokaeeai::imeuukiiccuqqosc, $ggkaciewmeqmgckg); $isweyuoisomqyaag = $gukqamyquokaeeai->oyqguwgqyigmuwow($wyogkamcgoseimuk, $kuguwoaesuqsqysu); asmecuqiyyswueqe: kuicqywysciceggs: if (!$weesokuqyggkegcg) { goto kiqogmwcgcamwiig; } $uamcoiueqaamsqma = __("\x42\165\x64\x67\x65\x74\40\167\x69\164\x68\x20\162\145\x71\165\x65\x73\164\145\x64\x20\144\x61\x74\141\40\x61\x6c\x72\x65\141\144\171\x20\145\170\x69\x73\164\x2e", PR__MDL__OPTIMIZATION_MANAGER); goto iomcaiwewsawiamu; kiqogmwcgcamwiig: if (!($wwgucssaecqekuek = $gkyciwoiiisgywcs->get($isweyuoisomqyaag, self::ysskgssgwuwmqwym))) { goto yowsmsiyimmimemc; } $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($wwgucssaecqekuek, $yoqasmiegcmcqaus::ciyoccqkiamemcmm); $iqaosyayeiuaisqi = $gkyciwoiiisgywcs->get($wwgucssaecqekuek, $yoqasmiegcmcqaus::iiooageieusuyomy); $owiuekcekysskaoe = $gkyciwoiiisgywcs->get($wwgucssaecqekuek, self::wcoquosyucmegcsq); $mksyucucyswaukig = $gkyciwoiiisgywcs->get($isweyuoisomqyaag, self::ckmqoekmugkggeym); if (!($mksyucucyswaukig && ManipulateWoocommerce::okeikygoukyckqcc($mksyucucyswaukig, $gukqamyquokaeeai::smsioacowoikwikc))) { goto mkwskuycuyguqqok; } $weesokuqyggkegcg = $yoqasmiegcmcqaus->qumqowkwyaceeqwu([$yoqasmiegcmcqaus::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, $yoqasmiegcmcqaus::iiooageieusuyomy => $iqaosyayeiuaisqi, $yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $kosiykkwwqmqwoqs]); mkwskuycuyguqqok: if ($weesokuqyggkegcg) { goto kwagwqyusyiyoaqs; } $gqswsiquqaayuakq = [$yoqasmiegcmcqaus::wcoquosyucmegcsq => $owiuekcekysskaoe, $yoqasmiegcmcqaus::iiooageieusuyomy => $iqaosyayeiuaisqi, $yoqasmiegcmcqaus::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, $yoqasmiegcmcqaus::sqsuiimgeguwgmcg => $ggkaciewmeqmgckg, $yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $kosiykkwwqmqwoqs, $yoqasmiegcmcqaus::yuqaqwkmmeuawswk => $yeyeakoqoeecqcuw]; $sogksuscggsicmac = $yoqasmiegcmcqaus->gscuuyuyauokoyuo($gqswsiquqaayuakq); if (!$sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto sciwggaeogcoesiu; } $uamcoiueqaamsqma = sprintf(__("\x42\165\144\x67\x65\164\40\167\x69\x74\150\x20\154\145\x76\145\x6c\40\45\x73\x20\141\x6e\x64\40\166\141\x6c\165\145\40\45\x73\40\141\144\x64\145\x64\x20\163\165\x63\143\145\x73\163\x66\165\x6c\154\x79\x2e", PR__MDL__OPTIMIZATION_MANAGER), $iqaosyayeiuaisqi, $eqgoocgaqwqcimie); goto eqkauqciwewmgeoi; sciwggaeogcoesiu: $uamcoiueqaamsqma = $this->gcsweumukyckmgik($sogksuscggsicmac[self::iwyueouqaqegmcas]); eqkauqciwewmgeoi: kwagwqyusyiyoaqs: yowsmsiyimmimemc: iomcaiwewsawiamu: eequksumcoogyoem: uukumskkeggaowck: cggowoquuiwqkyew: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $this->kyacickkomkioeyu($wgaoewqkwgomoaai); } if (!$uamcoiueqaamsqma) { goto ocokwuuquaokmasc; } $this->caokeucsksukesyo()->mmmcswscsiecscwg()->mscqqcmmkkiqwcua($uamcoiueqaamsqma, $umwqusowiqmyseom ?: $this); ocokwuuquaokmasc: } public function eiewoskwasmcyieg($mksyucucyswaukig, $wksoawcgagcgoask, $product) : ?Product { if (!($product && $this->cqusmgskowmesgcg() === $wksoawcgagcgoask)) { goto yiwiqaqmwiogawym; } $mksyucucyswaukig = Product::symcgieuakksimmu($wksoawcgagcgoask, $product); yiwiqaqmwiogawym: return $mksyucucyswaukig; } public function ywcueygosaysmeqq($kuemsykessaoquoy) { $kuemsykessaoquoy[$this->cqusmgskowmesgcg()] = Setting::symcgieuakksimmu()->cisyiemkeykgkomc(); return $kuemsykessaoquoy; } public function cqusmgskowmesgcg() { return Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::ocwsuwyiiasigqaa, 0); } }
