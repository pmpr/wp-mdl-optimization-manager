<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668daba42442f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\Subscription; use Pmpr\Common\Subscription\Engine as BaseClass; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\OptimizationManager\Subscription\Frontend\Page\Pricing; use Pmpr\Module\OptimizationManager\Subscription\Interfaces\CommonInterface; use Pmpr\Module\OptimizationManager\Subscription\Model\Extra; use Pmpr\Module\OptimizationManager\Subscription\Model\Plan; use Pmpr\Module\OptimizationManager\Subscription\Model\Usage; use Pmpr\Module\OptimizationManager\Subscription\Model\Subscription; class Engine extends BaseClass implements CommonInterface { public function ikcgmcycisiccyuc() { $this->settingObj = Setting::symcgieuakksimmu(); } public function aakmagwggmkoiiyu() : string { return "\x6f\160\164\x69\x6d\x69\172\x61\164\x69\x6f\x6e\x5f\155\141\156\x61\x67\145\162"; } public function esqsaiqmmsyymoea() : Plan { return Plan::symcgieuakksimmu(); } public function oisakkmieamkammc() : Extra { return Extra::symcgieuakksimmu(); } public function uaikmqggwqeiigwe() : Usage { return Usage::symcgieuakksimmu(); } public function ucugmoqeawkymskk() : Subscription { return Subscription::symcgieuakksimmu(); } public function eyymssiiosygicem($cusggmuosggikeas = null) { return Domain::symcgieuakksimmu()->akkkoiiymmamsauc($cusggmuosggikeas); } public function ogkiouuqqmaagscs($cusggmuosggikeas = null) : ?string { return Domain::symcgieuakksimmu()->uikgwcuascgeissw($this->eyymssiiosygicem($cusggmuosggikeas)); } public function mcwgysaowamqkcsc($isweyuoisomqyaag, $oymcauiugwyscqgs) : array { $qsqwqsymmqeoqwcu = parent::mcwgysaowamqkcsc($isweyuoisomqyaag, $oymcauiugwyscqgs); if (!$qsqwqsymmqeoqwcu) { goto wyuemgggaqogsmsq; } $qsqwqsymmqeoqwcu[self::qscwcyiaqccoayqk] = ["\x63\x6f\151\156" => [self::qescuiwgsyuikume => __("\x4e\x75\155\x62\x65\162\40\157\146\40\x43\x6f\151\x6e\163", PR__MDL__OPTIMIZATION_MANAGER), self::ciyoccqkiamemcmm => $this->caokeucsksukesyo()->aqasygcsqysmmyke()->waecsyqmwascmqoa($isweyuoisomqyaag, $oymcauiugwyscqgs)], "\145\x78\160\x69\x72\x61\x74\x69\157\x6e" => [self::qescuiwgsyuikume => __("\x45\170\x70\x69\162\141\x74\151\x6f\156\40\x44\141\164\x65", PR__MDL__OPTIMIZATION_MANAGER), self::ciyoccqkiamemcmm => __("\110\141\x76\145\x20\116\157\164", PR__MDL__OPTIMIZATION_MANAGER)], "\x74\x72\x61\156\163\146\145\x72" => [self::qescuiwgsyuikume => __("\124\x68\145\40\x61\142\151\x6c\x69\164\x79\x20\164\157\x20\x74\x72\141\156\163\146\145\x72\40\x74\157\40\x61\x20\156\x65\167\x20\160\154\x61\x6e", PR__MDL__OPTIMIZATION_MANAGER), self::ciyoccqkiamemcmm => __("\x48\141\163\x20\111\164", PR__MDL__OPTIMIZATION_MANAGER)]]; wyuemgggaqogsmsq: return $qsqwqsymmqeoqwcu; } public function cuwsksauyogikoks($cusggmuosggikeas, array $ccowyogiqwikkkie) : int { $smowyuyseuwiaiei = 0; $umwagewoweuckiso = $this->mkiwiwaquqeegaik($cusggmuosggikeas); if (!$umwagewoweuckiso) { goto ousiuuwgwkiyikyq; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($ccowyogiqwikkkie as $aiamqeawckcsuaou) { switch ($aiamqeawckcsuaou) { case "\143\x72\x69\x74\x69\143\x61\x6c\137\x63\x73\x73": $smowyuyseuwiaiei += (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, self::cgiaykosmmoyuagu, 0); goto miweggwqeiaeweia; case "\x6c\143\x70\x5f\x69\x74\145\155": $smowyuyseuwiaiei += (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, self::wogaqauoigwyaoig, 0); goto miweggwqeiaeweia; } kqqiegkuqagcqsya: miweggwqeiaeweia: kkumywowcoycymeo: } guykyqecgswcsmws: ousiuuwgwkiyikyq: return $smowyuyseuwiaiei; } public function ucqceiamukugecuu($cusggmuosggikeas, $smowyuyseuwiaiei) : array { $bsgyawiqyuquqmyy = $smowyuyseuwiaiei; $ccmoacwicocuoseg = []; $gcmkukicuycuoayg = $aomcqcgmkgcowmsc = 0; $gqaqqcmkaoqocsue = $this->uaikmqggwqeiigwe(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $umwagewoweuckiso = $this->mkiwiwaquqeegaik($cusggmuosggikeas); if (!$umwagewoweuckiso) { goto iwekmyyccgiyuecc; } $omcwcsgeyeyoiwyi = $this->ucugmoqeawkymskk(); $gcmkukicuycuoayg = $omcwcsgeyeyoiwyi->keeuqgyooycqoygw($umwagewoweuckiso); $qsmaqqyoggcuyukq = $gqaqqcmkaoqocsue->qgiewwqykwugcuoo(self::ciyoccqkiamemcmm, [$gqaqqcmkaoqocsue::ciywsqoeiymemsys => [self::sgoswgskyiiwkyuo, self::amcogigwsaqssuai], $gqaqqcmkaoqocsue::igecewwoemccgwsq => self::eoigaocgcaekssuw, $gqaqqcmkaoqocsue::yocqkmeouaamomke => $gcmkukicuycuoayg]); $keygqgeekqumqccy = (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, self::mykiyeswieqamagm, 0); if (!($keygqgeekqumqccy > 0 && $qsmaqqyoggcuyukq < $keygqgeekqumqccy)) { goto ogsaaqsaogcqiouy; } $ksokgmueuaceawue = $keygqgeekqumqccy - $qsmaqqyoggcuyukq; $aomcqcgmkgcowmsc = $ksokgmueuaceawue >= $bsgyawiqyuquqmyy ? $bsgyawiqyuquqmyy : $bsgyawiqyuquqmyy - $ksokgmueuaceawue; $bsgyawiqyuquqmyy -= $aomcqcgmkgcowmsc; ogsaaqsaogcqiouy: iwekmyyccgiyuecc: if (!($bsgyawiqyuquqmyy > 0)) { goto ykomgumacooyomsk; } $gkaemmicaykeooqe = $this->oisakkmieamkammc(); $wayuuiaskyoiociq = $gkaemmicaykeooqe->cwkywyqksyucoyia([self::kuqwimiimiqsimgo => $cusggmuosggikeas, self::ciywsqoeiymemsys => self::eqewsqmqmsiocaeg]); foreach ($wayuuiaskyoiociq as $gyskaqycyaywiiyi) { $qguauucmeiywiaue = $gkaemmicaykeooqe->keeuqgyooycqoygw($gyskaqycyaywiiyi); $qsmaqqyoggcuyukq = $gqaqqcmkaoqocsue->qgiewwqykwugcuoo(self::ciyoccqkiamemcmm, [$gqaqqcmkaoqocsue::ciywsqoeiymemsys => [self::sgoswgskyiiwkyuo, self::amcogigwsaqssuai], $gqaqqcmkaoqocsue::igecewwoemccgwsq => self::mayesweykoooyugy, $gqaqqcmkaoqocsue::yocqkmeouaamomke => $qguauucmeiywiaue]); $keygqgeekqumqccy = (int) $gkaemmicaykeooqe->qogaqkcsogcqiaic($gyskaqycyaywiiyi, self::ciyoccqkiamemcmm, 0); if ($keygqgeekqumqccy > 0 && $qsmaqqyoggcuyukq < $keygqgeekqumqccy) { goto awoaooyoeoyeeqee; } $gkaemmicaykeooqe->wqikesawekycweoi($gyskaqycyaywiiyi, [self::ciywsqoeiymemsys => self::uyckmiswqmqggysk], true); goto ogqmesokykywseys; awoaooyoeoyeeqee: $ksokgmueuaceawue = $keygqgeekqumqccy - $qsmaqqyoggcuyukq; $sissosgmaqeickya = $ksokgmueuaceawue >= $bsgyawiqyuquqmyy ? $bsgyawiqyuquqmyy : $bsgyawiqyuquqmyy - $ksokgmueuaceawue; $ccmoacwicocuoseg[$qguauucmeiywiaue] = $sissosgmaqeickya; $bsgyawiqyuquqmyy -= $sissosgmaqeickya; if (!($bsgyawiqyuquqmyy <= 0)) { goto cwwmimggaaecmucw; } goto ikqqskkqqwmwssoo; cwwmimggaaecmucw: ogqmesokykywseys: aomysykcgikegiau: } ikqqskkqqwmwssoo: ykomgumacooyomsk: return [self::ciywsqoeiymemsys => $bsgyawiqyuquqmyy <= 0 ? self::gymusgeumuwomwuy : self::uasuowkaguiwoouw, self::mayesweykoooyugy => $ccmoacwicocuoseg, self::eoigaocgcaekssuw => [self::gouqcwikiiygyasc => $gcmkukicuycuoayg, self::ciyoccqkiamemcmm => $aomcqcgmkgcowmsc]]; } public function xowkiecqumsskiec($cusggmuosggikeas) : array { $ecwacmeyceocemai = $cikuayiemiugqiui = [self::ALL => 0, self::gikauwqcswqcsmqw => 0]; $gqaqqcmkaoqocsue = $this->uaikmqggwqeiigwe(); $umwagewoweuckiso = $this->mkiwiwaquqeegaik($cusggmuosggikeas); if (!$umwagewoweuckiso) { goto mqkmcysgoiaouiwm; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $omcwcsgeyeyoiwyi = $this->ucugmoqeawkymskk(); $gcmkukicuycuoayg = $omcwcsgeyeyoiwyi->keeuqgyooycqoygw($umwagewoweuckiso); $ecwacmeyceocemai = [self::ALL => (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, self::mykiyeswieqamagm, 0), self::gikauwqcswqcsmqw => $gqaqqcmkaoqocsue->qgiewwqykwugcuoo(self::ciyoccqkiamemcmm, [$gqaqqcmkaoqocsue::ciywsqoeiymemsys => [self::sgoswgskyiiwkyuo, self::amcogigwsaqssuai], $gqaqqcmkaoqocsue::igecewwoemccgwsq => self::eoigaocgcaekssuw, $gqaqqcmkaoqocsue::yocqkmeouaamomke => $gcmkukicuycuoayg])]; mqkmcysgoiaouiwm: $gkaemmicaykeooqe = $this->oisakkmieamkammc(); $wayuuiaskyoiociq = $gkaemmicaykeooqe->cwkywyqksyucoyia([self::kuqwimiimiqsimgo => $cusggmuosggikeas, self::ciywsqoeiymemsys => self::eqewsqmqmsiocaeg]); foreach ($wayuuiaskyoiociq as $gyskaqycyaywiiyi) { $cikuayiemiugqiui[self::ALL] += (int) $gkaemmicaykeooqe->qogaqkcsogcqiaic($gyskaqycyaywiiyi, self::ciyoccqkiamemcmm, 0); $cikuayiemiugqiui[self::gikauwqcswqcsmqw] += $gqaqqcmkaoqocsue->qgiewwqykwugcuoo(self::ciyoccqkiamemcmm, [$gqaqqcmkaoqocsue::ciywsqoeiymemsys => [self::sgoswgskyiiwkyuo, self::amcogigwsaqssuai], $gqaqqcmkaoqocsue::igecewwoemccgwsq => self::mayesweykoooyugy, $gqaqqcmkaoqocsue::yocqkmeouaamomke => $gkaemmicaykeooqe->keeuqgyooycqoygw($gyskaqycyaywiiyi)]); gicyayswqyuoekcq: } kosaqwikueyksqmw: return [self::mayesweykoooyugy => $cikuayiemiugqiui, self::eoigaocgcaekssuw => $ecwacmeyceocemai]; } public function skwookiukacyyaeo($sqeykgyoooqysmca, $ccamueccusigaaio, array $ekuqiqmikiicgoss = [], array $ywmkwiwkosakssii = []) : bool { $ockekyouswmoccck = false; switch ($sqeykgyoooqysmca) { case self::mykiyeswieqamagm: $ockekyouswmoccck = true; goto iikiiioqiyegyaak; } uiosisocuwokwkie: iikiiioqiyegyaak: return $ockekyouswmoccck; } #[\Override] public function gsmygqkksqsseoeq() : string { return Pricing::symcgieuakksimmu()->ycqquoiyyuesegsy(); } }
