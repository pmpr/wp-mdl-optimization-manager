<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6668a93c651c2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\Subscription\REST; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\OptimizationManager\REST\Controller as BaseClass; use Pmpr\Module\OptimizationManager\Subscription\Model\Plan; use Pmpr\Module\OptimizationManager\Subscription\Setting; use Pmpr\Module\OptimizationManager\Subscription\Traits\EngineTrait; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends BaseClass { use EngineTrait; public function ikcgmcycisiccyuc() { parent::ikcgmcycisiccyuc(); $this->rest_base .= "\x2f\163\x75\142\x73\143\162\x69\x70\164\151\157\156"; } public function register_routes() { $this->register("\x2f\143\x68\x65\143\x6b", [self::wwgusigoaksqmwsm => [$this, "\x71\x67\x6b\155\143\157\x73\167\151\x71\x69\167\147\153\x77\x6f"]]); $this->register("\x2f\x61\144\x64\x2d\x75\x73\x61\147\145", [self::wwgusigoaksqmwsm => [$this, "\163\153\153\171\163\x75\161\161\x79\x73\x69\x6f\151\167\167\x67"]]); $this->register("\57\146\145\164\x63\x68\55\x64\141\x74\141", [self::wwgusigoaksqmwsm => [$this, "\x6d\x73\x79\x6f\x61\x6b\x77\171\x73\x6b\x61\x6d\155\x67\161\x69"]]); } public function msyoakwyskammgqi(WP_REST_Request $aqmwamyiwgeeymqa) { $gwgucoaaqcwwciqq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::aciemiuuwgysykom); if ($esuksqieigiqcaie && $gwgucoaaqcwwciqq) { goto kiqogmwcgcamwiig; } $keccaugmemegoimu = $this->gygamsmycwkqqwcc(); goto iomcaiwewsawiamu; kiqogmwcgcamwiig: $umwagewoweuckiso = null; $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $mokawwccycoiqeka = $swgwkyqkakceqeia->aqiwcawmimkygoau($esuksqieigiqcaie, $gwgucoaaqcwwciqq); if (!($mokawwccycoiqeka && !is_wp_error($mokawwccycoiqeka))) { goto eqkauqciwewmgeoi; } $goqqimcssiyagkwy = $this->uykissogmuaaocsg(); $wqykqusigegasqeg = $swgwkyqkakceqeia->keeuqgyooycqoygw($mokawwccycoiqeka); $umwagewoweuckiso = $goqqimcssiyagkwy->mkiwiwaquqeegaik($wqykqusigegasqeg); if ($umwagewoweuckiso) { goto sciwggaeogcoesiu; } $ekucuuaawysekyca = $goqqimcssiyagkwy->mkiwiwaquqeegaik($wqykqusigegasqeg, false); if ($ekucuuaawysekyca) { goto mkwskuycuyguqqok; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $akqaumomesyiuiym = $ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::gccwqcewuysckgic); if (!$akqaumomesyiuiym) { goto kuicqywysciceggs; } $sogksuscggsicmac = $goqqimcssiyagkwy->subscribe($wqykqusigegasqeg, $akqaumomesyiuiym); if (!($sogksuscggsicmac && !is_wp_error($sogksuscggsicmac))) { goto cuykwgmswkskqkyi; } $umwagewoweuckiso = $sogksuscggsicmac; cuykwgmswkskqkyi: kuicqywysciceggs: mkwskuycuyguqqok: sciwggaeogcoesiu: eqkauqciwewmgeoi: $omouioamescuegke = Plan::symcgieuakksimmu(); $kekgkgqeyesmkywu = $omouioamescuegke->qyaiiayimwmuomey(false); $qsqwqsymmqeoqwcu = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($kekgkgqeyesmkywu as $gesuaewsacmmwoeo) { $gmcgeogogyqsgawk = $omouioamescuegke->asosocqswygacyyk($gesuaewsacmmwoeo); $qsqwqsymmqeoqwcu[] = [$omouioamescuegke::gouqcwikiiygyasc => $omouioamescuegke->keeuqgyooycqoygw($gesuaewsacmmwoeo), $omouioamescuegke::oayciggqokqmayuy => [$omouioamescuegke::wogaqauoigwyaoig => $gkyciwoiiisgywcs->get($gmcgeogogyqsgawk, $omouioamescuegke::wogaqauoigwyaoig, 0), $omouioamescuegke::cgiaykosmmoyuagu => $gkyciwoiiisgywcs->get($gmcgeogogyqsgawk, $omouioamescuegke::cgiaykosmmoyuagu, 0)], $omouioamescuegke::uomuwqaqggoekwwg => $gkyciwoiiisgywcs->get($gmcgeogogyqsgawk, $omouioamescuegke::uomuwqaqggoekwwg, false), $omouioamescuegke::mykiyeswieqamagm => $gkyciwoiiisgywcs->get($gmcgeogogyqsgawk, $omouioamescuegke::mykiyeswieqamagm), $omouioamescuegke::qescuiwgsyuikume => $gkyciwoiiisgywcs->get($gmcgeogogyqsgawk, $omouioamescuegke::quumookoiuysuyuw), $omouioamescuegke::eeeyoywyquqywwoo => $gkyciwoiiisgywcs->get($gmcgeogogyqsgawk, $omouioamescuegke::eeeyoywyquqywwoo), $omouioamescuegke::qscwcyiaqccoayqk => $gkyciwoiiisgywcs->get($gmcgeogogyqsgawk, $omouioamescuegke::qscwcyiaqccoayqk), $omouioamescuegke::iuqumwggccmcuyem => $gkyciwoiiisgywcs->get($gmcgeogogyqsgawk, $omouioamescuegke::iuqumwggccmcuyem), $omouioamescuegke::oguseymmyyoyaako => [self::ueasagmikqewqcay => $gkyciwoiiisgywcs->get($gmcgeogogyqsgawk, $omouioamescuegke::ueasagmikqewqcay), self::sauwwsocmukoaayu => $gkyciwoiiisgywcs->get($gmcgeogogyqsgawk, $omouioamescuegke::sauwwsocmukoaayu), self::acymsykymkiewqsy => $gkyciwoiiisgywcs->get($gmcgeogogyqsgawk, $omouioamescuegke::acymsykymkiewqsy)]]; yowsmsiyimmimemc: } kwagwqyusyiyoaqs: $keccaugmemegoimu = $this->qasywwyamoesisyi('', ["\x70\154\x61\x6e\x73" => $qsqwqsymmqeoqwcu, "\x73\165\x62\163\x63\162\x69\160\164\151\157\x6e" => $umwagewoweuckiso]); iomcaiwewsawiamu: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function skkysuqqysioiwwg(WP_REST_Request $aqmwamyiwgeeymqa) { } public function qgkmcoswiqiwgkwo(WP_REST_Request $aqmwamyiwgeeymqa) { $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::aciemiuuwgysykom); $migiiksoiymissge = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::sauwwsocmukoaayu); if ($esuksqieigiqcaie && $migiiksoiymissge) { goto ocokwuuquaokmasc; } $keccaugmemegoimu = $this->gygamsmycwkqqwcc(); goto yiwiqaqmwiogawym; ocokwuuquaokmasc: $gwgucoaaqcwwciqq = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($migiiksoiymissge, PHP_URL_HOST); $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $mokawwccycoiqeka = $swgwkyqkakceqeia->aqiwcawmimkygoau($esuksqieigiqcaie, $gwgucoaaqcwwciqq); if ($mokawwccycoiqeka && !is_wp_error($mokawwccycoiqeka)) { goto uukumskkeggaowck; } $keccaugmemegoimu = $mokawwccycoiqeka; goto cggowoquuiwqkyew; uukumskkeggaowck: $wqykqusigegasqeg = $swgwkyqkakceqeia->keeuqgyooycqoygw($mokawwccycoiqeka); $goqqimcssiyagkwy = $this->uykissogmuaaocsg(); if ($goqqimcssiyagkwy->koeimwecyiiqgesk($wqykqusigegasqeg, [$goqqimcssiyagkwy::cwuyiqcqccegmmis => $goqqimcssiyagkwy::mykiyeswieqamagm])) { goto sqiciiuwmykocycc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\x6f\162\x72\171\x2c\x20\x79\x6f\x75\162\x20\x64\x6f\155\141\x69\156\40\150\x61\163\x20\156\x6f\40\x73\165\142\x73\143\162\x69\x70\x74\151\x6f\x6e\x20\x79\x65\164\56", PR__MDL__OPTIMIZATION_MANAGER), PR__MDL__OPTIMIZATION_MANAGER); goto eequksumcoogyoem; sqiciiuwmykocycc: eequksumcoogyoem: cggowoquuiwqkyew: yiwiqaqmwiogawym: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
