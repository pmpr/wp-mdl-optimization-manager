<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66aeb5d2abe77             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\Subscription\REST; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\OptimizationManager\REST\Controller as BaseClass; use Pmpr\Module\OptimizationManager\Subscription\Interfaces\CommonInterface; use Pmpr\Module\OptimizationManager\Subscription\Model\Extra; use Pmpr\Module\OptimizationManager\Subscription\Model\Plan; use Pmpr\Module\OptimizationManager\Subscription\Model\Subscription; use Pmpr\Module\OptimizationManager\Setting as ModuleSetting; use Pmpr\Module\OptimizationManager\Subscription\Setting; use Pmpr\Module\OptimizationManager\Subscription\Traits\EngineTrait; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends BaseClass implements CommonInterface { use EngineTrait; public function ikcgmcycisiccyuc() { parent::ikcgmcycisiccyuc(); $this->rest_base .= "\57\x73\165\x62\163\143\x72\x69\x70\x74\x69\157\156"; } public function register_routes() { $this->register("\57\141\x64\144\x2d\165\163\x61\x67\145", [self::wwgusigoaksqmwsm => [$this, "\163\153\x6b\171\x73\165\x71\x71\171\163\x69\x6f\151\167\167\x67"], self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::okeuagwgwkmiokac => [self::myikkigscysoykgy => [self::squoamkioomemiyi => "\141\162\x72\141\171", self::eqkeooqcsscoggia => __("\101\143\x74\151\157\156\x73", PR__MDL__OPTIMIZATION_MANAGER)], self::sygmkaeayiiouiwm => [self::squoamkioomemiyi => "\x73\x74\162\x69\x6e\147", self::eqkeooqcsscoggia => __("\124\x6f\x6b\x65\x6e", PR__MDL__OPTIMIZATION_MANAGER)]]]); $this->register("\x2f\143\150\x61\156\x67\145\x2d\x75\x73\141\147\145\163\x2d\163\x74\x61\x74\x75\163", [self::wwgusigoaksqmwsm => [$this, "\x61\155\153\x6f\x75\x6d\161\151\x77\x79\141\161\165\153\157\x77"], self::oaggieeykyaoiiyw => self::ouuaeeeqeqkagcgi, self::okeuagwgwkmiokac => [self::oquukmukaoqegcuk => [self::squoamkioomemiyi => "\141\x72\162\141\171", self::eqkeooqcsscoggia => __("\x55\163\x61\x67\x65\x20\x49\104\163", PR__MDL__OPTIMIZATION_MANAGER)], self::ciywsqoeiymemsys => [self::squoamkioomemiyi => "\x73\x74\x72\151\x6e\x67", self::eqkeooqcsscoggia => __("\125\163\x61\x67\145\163\40\123\x74\x61\x74\165\x73", PR__MDL__OPTIMIZATION_MANAGER)], self::sygmkaeayiiouiwm => [self::squoamkioomemiyi => "\163\164\162\x69\156\x67", self::eqkeooqcsscoggia => __("\x54\157\153\x65\156", PR__MDL__OPTIMIZATION_MANAGER)]]]); $this->register("\57\x67\x65\x74\55\160\165\162\x63\x68\141\163\x65\x73", [self::wwgusigoaksqmwsm => [$this, "\153\x73\171\153\165\141\171\x6b\x79\171\165\161\x67\163\x77\x67"], self::okeuagwgwkmiokac => [self::imywcsggckkcywgk => [self::squoamkioomemiyi => "\163\164\162\x69\156\147", self::eqkeooqcsscoggia => __("\x50\x61\x67\x65", PR__MDL__OPTIMIZATION_MANAGER)]]]); $this->register("\57\x67\145\164\x2d\144\x61\164\141", [self::wwgusigoaksqmwsm => [$this, "\x73\x65\x79\x79\x69\x71\155\147\167\x79\x6d\171\x75\x6d\157\161"]]); } public function seyyiqmgwymyumoq(WP_REST_Request $aqmwamyiwgeeymqa) { $gwgucoaaqcwwciqq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::aciemiuuwgysykom); if ($esuksqieigiqcaie && $gwgucoaaqcwwciqq) { goto aegysmeecgcgayyw; } $keccaugmemegoimu = $this->gygamsmycwkqqwcc(); goto suqkuqygkkgwyaie; aegysmeecgcgayyw: $qwgquweoiskugckg = 0; $umwagewoweuckiso = null; $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $mokawwccycoiqeka = $swgwkyqkakceqeia->aqiwcawmimkygoau($esuksqieigiqcaie, $gwgucoaaqcwwciqq); $goqqimcssiyagkwy = $this->uykissogmuaaocsg(); if (!($mokawwccycoiqeka && !is_wp_error($mokawwccycoiqeka))) { goto qicwaskssogcokgm; } $wqykqusigegasqeg = $swgwkyqkakceqeia->keeuqgyooycqoygw($mokawwccycoiqeka); $umwagewoweuckiso = $goqqimcssiyagkwy->mkiwiwaquqeegaik($wqykqusigegasqeg); if ($umwagewoweuckiso) { goto usquiuuyiyqaeyiu; } $ekucuuaawysekyca = $goqqimcssiyagkwy->mkiwiwaquqeegaik($wqykqusigegasqeg, false); if ($ekucuuaawysekyca) { goto kymkucucyeoeikim; } $akqaumomesyiuiym = $goqqimcssiyagkwy->imicysmecoiycoqc(); if (!$akqaumomesyiuiym) { goto hoeeyiowekaeemko; } $sogksuscggsicmac = $goqqimcssiyagkwy->subscribe($wqykqusigegasqeg, $akqaumomesyiuiym); if (!($sogksuscggsicmac && !is_wp_error($sogksuscggsicmac))) { goto iekumemscwieugqw; } $umwagewoweuckiso = $sogksuscggsicmac; iekumemscwieugqw: hoeeyiowekaeemko: kymkucucyeoeikim: usquiuuyiyqaeyiu: $qwgquweoiskugckg = $goqqimcssiyagkwy->xowkiecqumsskiec($wqykqusigegasqeg); qicwaskssogcokgm: $omouioamescuegke = Plan::symcgieuakksimmu(); $omcwcsgeyeyoiwyi = Subscription::symcgieuakksimmu(); $kekgkgqeyesmkywu = $omouioamescuegke->qyaiiayimwmuomey(false); $qsqwqsymmqeoqwcu = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($kekgkgqeyesmkywu as $gesuaewsacmmwoeo) { $ogaeiucyqmowuqms = $omouioamescuegke->keeuqgyooycqoygw($gesuaewsacmmwoeo); $oggygmyiawqsyecy = $goqqimcssiyagkwy->gsmygqkksqsseoeq(); if (!$oggygmyiawqsyecy) { goto esuiysskoweawsue; } $oggygmyiawqsyecy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\163\x74\x65\x70" => 4, "\164\x61\x72\x67\x65\x74" => $ogaeiucyqmowuqms, "\157\x72\x64\145\x72\x5f\x74\x79\160\145" => "\x70\x6c\141\156"], $oggygmyiawqsyecy); esuiysskoweawsue: $gmcgeogogyqsgawk = $omouioamescuegke->asosocqswygacyyk($gesuaewsacmmwoeo); $gmcgeogogyqsgawk = [$omouioamescuegke::uomuwqaqggoekwwg => $gkyciwoiiisgywcs->get($gmcgeogogyqsgawk, $omouioamescuegke::uomuwqaqggoekwwg, false), $omouioamescuegke::mykiyeswieqamagm => $gkyciwoiiisgywcs->get($gmcgeogogyqsgawk, $omouioamescuegke::mykiyeswieqamagm), $omouioamescuegke::qescuiwgsyuikume => $gkyciwoiiisgywcs->get($gmcgeogogyqsgawk, $omouioamescuegke::quumookoiuysuyuw), $omouioamescuegke::owimkwkiwawmeicq => $gkyciwoiiisgywcs->get($gmcgeogogyqsgawk, $omouioamescuegke::owimkwkiwawmeicq), $omouioamescuegke::eeeyoywyquqywwoo => $gkyciwoiiisgywcs->get($gmcgeogogyqsgawk, $omouioamescuegke::eeeyoywyquqywwoo), $omouioamescuegke::iuqumwggccmcuyem => $gkyciwoiiisgywcs->get($gmcgeogogyqsgawk, $omouioamescuegke::iuqumwggccmcuyem), $omouioamescuegke::qscwcyiaqccoayqk => $gkyciwoiiisgywcs->get($gmcgeogogyqsgawk, $omouioamescuegke::qscwcyiaqccoayqk), $omouioamescuegke::ueasagmikqewqcay => $gkyciwoiiisgywcs->get($gmcgeogogyqsgawk, $omouioamescuegke::ueasagmikqewqcay, 0), $omouioamescuegke::iysgkeueasmuwmcq => $oggygmyiawqsyecy, $omouioamescuegke::quywusioaoakumaw => $gkyciwoiiisgywcs->get($gmcgeogogyqsgawk, $omouioamescuegke::quywusioaoakumaw), $omouioamescuegke::wogaqauoigwyaoig => $gkyciwoiiisgywcs->get($gmcgeogogyqsgawk, $omouioamescuegke::wogaqauoigwyaoig, 0), $omouioamescuegke::cgiaykosmmoyuagu => $gkyciwoiiisgywcs->get($gmcgeogogyqsgawk, $omouioamescuegke::cgiaykosmmoyuagu, 0)]; $qsqwqsymmqeoqwcu[$ogaeiucyqmowuqms] = $gmcgeogogyqsgawk; if (!((int) $ogaeiucyqmowuqms === (int) $omcwcsgeyeyoiwyi->qogaqkcsogcqiaic($umwagewoweuckiso, $omcwcsgeyeyoiwyi::kiwgokskimawckie))) { goto gaomwagkcciesyqy; } $umwagewoweuckiso[self::qescuiwgsyuikume] = $gmcgeogogyqsgawk[self::qescuiwgsyuikume]; gaomwagkcciesyqy: uqqaiagaeqgqgaiy: } uguigkcmukuouway: $keccaugmemegoimu = $this->qasywwyamoesisyi('', ["\143\157\x69\x6e\x73" => $qwgquweoiskugckg, "\x70\x6c\141\x6e\163" => $qsqwqsymmqeoqwcu, "\x65\x78\x74\x72\x61\137\x63\x6f\151\156\163" => $goqqimcssiyagkwy->ycmmosmyyiycyeug(true), "\163\165\x62\163\x63\162\151\x70\164\x69\157\156" => $umwagewoweuckiso]); suqkuqygkkgwyaie: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ksykuaykyyuqgswg(WP_REST_Request $aqmwamyiwgeeymqa) { $gwgucoaaqcwwciqq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::aciemiuuwgysykom); if ($esuksqieigiqcaie && $gwgucoaaqcwwciqq) { goto syiqkaasoueowwui; } $keccaugmemegoimu = $this->gygamsmycwkqqwcc(); goto giaacoqqqsekcayy; syiqkaasoueowwui: $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $mokawwccycoiqeka = $swgwkyqkakceqeia->aqiwcawmimkygoau($esuksqieigiqcaie, $gwgucoaaqcwwciqq); if (!is_wp_error($mokawwccycoiqeka)) { goto skkamseieeusycye; } $keccaugmemegoimu = $mokawwccycoiqeka; goto cgiscsqwwgqqaeqi; skkamseieeusycye: if ($mokawwccycoiqeka) { goto soaccwqimeksgwiw; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\103\x61\x6e\x20\x6e\157\164\40\x64\145\x74\145\x63\x74\x20\171\x6f\x75\x72\x20\144\x6f\x6d\x61\151\x6e\56\x20\x70\x6c\145\141\163\x65\x20\x63\157\x6e\x74\x61\143\164\40\165\163\56", PR__MDL__OPTIMIZATION_MANAGER)); goto wiysogeqqwgioyka; soaccwqimeksgwiw: $suaemuyiacqyugsm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk, 1); $wqykqusigegasqeg = $swgwkyqkakceqeia->keeuqgyooycqoygw($mokawwccycoiqeka); $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x59\157\165\x72\x20\122\145\161\x75\145\x73\x74\x20\151\163\x20\x76\141\x6c\151\x64\x2e", PR__MDL__OPTIMIZATION_MANAGER), ["\145\x78\164\x72\x61\x73" => $this->kiyymmqeuqucwggg(Extra::symcgieuakksimmu(), $wqykqusigegasqeg, $suaemuyiacqyugsm), "\x73\x75\142\x73\x63\162\151\160\164\x69\157\156\x73" => $this->kiyymmqeuqucwggg(Subscription::symcgieuakksimmu(), $wqykqusigegasqeg, $suaemuyiacqyugsm)]); wiysogeqqwgioyka: cgiscsqwwgqqaeqi: giaacoqqqsekcayy: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function amkoumqiwyaqukow(WP_REST_Request $aqmwamyiwgeeymqa) { $mgegoogckgsumooq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::sygmkaeayiiouiwm); $iueymcwwscwqkiyq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ciywsqoeiymemsys); $yayiceymsscqcsoy = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::oquukmukaoqegcuk); if ($mgegoogckgsumooq && $yayiceymsscqcsoy && is_array($yayiceymsscqcsoy) && $iueymcwwscwqkiyq && in_array($iueymcwwscwqkiyq, [self::amcogigwsaqssuai, self::uasuowkaguiwoouw], true)) { goto ooeausyowguqicuo; } $keccaugmemegoimu = $this->gygamsmycwkqqwcc(); goto egyyiccaeeiooaua; ooeausyowguqicuo: if ($this->ycocqiwisouieuig($mgegoogckgsumooq)) { goto wmywuusgukmmaams; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\131\157\x75\162\40\162\x65\161\165\x65\163\164\x20\151\163\x20\x6e\157\164\40\166\141\x6c\151\x64\40\x61\x6e\x64\x20\x72\145\x71\165\x65\163\164\145\x64\x20\x72\157\x75\164\145\40\x64\157\x65\x73\40\x6e\157\164\x20\145\x78\x69\x73\x74\x73\56", PR__MDL__OPTIMIZATION_MANAGER), 400); goto gkyawqqcmigqgaiq; wmywuusgukmmaams: foreach ($yayiceymsscqcsoy as $wwcmeousycqgqwws) { $this->uykissogmuaaocsg()->ysqwckqmysqyuuow($wwcmeousycqgqwws, $iueymcwwscwqkiyq); cmegwsegsosyqcai: } ewymsmkkiksgwysk: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x55\163\x61\147\145\x73\x20\x73\164\x61\164\165\x73\145\x73\x20\143\150\x61\x6e\147\145\144\40\163\x75\x63\143\x65\x73\163\146\165\154\154\171\56", PR__MDL__OPTIMIZATION_MANAGER)); gkyawqqcmigqgaiq: egyyiccaeeiooaua: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function skkysuqqysioiwwg(WP_REST_Request $aqmwamyiwgeeymqa) { $mgegoogckgsumooq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::sygmkaeayiiouiwm); $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::aciemiuuwgysykom); $ccowyogiqwikkkie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::myikkigscysoykgy); if ($mgegoogckgsumooq && $esuksqieigiqcaie && $ccowyogiqwikkkie && is_array($ccowyogiqwikkkie)) { goto wakmayaoqoskekqy; } $keccaugmemegoimu = $this->gygamsmycwkqqwcc(); goto qmuwoecuacmkwgem; wakmayaoqoskekqy: if ($this->ycocqiwisouieuig($mgegoogckgsumooq)) { goto sggawugoykqcmsug; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x59\157\165\x72\40\x72\x65\161\165\145\163\x74\40\151\x73\40\x6e\157\164\40\x76\x61\x6c\151\144\x20\x61\x6e\144\x20\162\145\x71\x75\145\x73\164\x65\144\40\x72\x6f\x75\164\x65\40\x64\x6f\x65\x73\x20\x6e\157\x74\40\x65\170\x69\163\x74\163\x2e", PR__MDL__OPTIMIZATION_MANAGER), 400); goto wkeuuycukmuqiaom; sggawugoykqcmsug: $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $mokawwccycoiqeka = $swgwkyqkakceqeia->aqiwcawmimkygoau($esuksqieigiqcaie); if ($mokawwccycoiqeka && !is_wp_error($mokawwccycoiqeka)) { goto kqgcyoscsusgoaqi; } $keccaugmemegoimu = $mokawwccycoiqeka; goto ueigkucgaucgeimc; kqgcyoscsusgoaqi: $goqqimcssiyagkwy = $this->uykissogmuaaocsg(); $wqykqusigegasqeg = $swgwkyqkakceqeia->keeuqgyooycqoygw($mokawwccycoiqeka); $umwagewoweuckiso = $goqqimcssiyagkwy->mkiwiwaquqeegaik($wqykqusigegasqeg); if ($umwagewoweuckiso) { goto ugqaaewwmkocwwgy; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\x65\x65\155\x73\40\164\x68\145\40\144\x6f\155\141\151\x6e\x20\150\x61\x73\x20\156\x6f\40\166\141\x6c\151\x64\x20\163\165\142\x73\x63\x72\x69\160\164\151\x6f\x6e\x2e", PR__MDL__OPTIMIZATION_MANAGER), 400); goto wgewmqieuamsoayy; ugqaaewwmkocwwgy: $smowyuyseuwiaiei = $goqqimcssiyagkwy->cuwsksauyogikoks($wqykqusigegasqeg, $ccowyogiqwikkkie); if ($smowyuyseuwiaiei > 0) { goto igooksugieceoege; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x43\x61\x6e\x20\156\157\164\x20\143\141\154\143\x75\x6c\141\164\x65\40\x79\157\165\162\x20\162\x65\x71\165\145\x73\x74\x65\x64\40\x61\143\164\151\x6f\156\x73\40\143\157\x69\x6e\40\x61\155\157\165\x6e\x74\56", PR__MDL__OPTIMIZATION_MANAGER), 400); goto omqiayeucoioqoao; igooksugieceoege: if ($yayiceymsscqcsoy = $goqqimcssiyagkwy->iimacqcwqcucqcwo($wqykqusigegasqeg, $smowyuyseuwiaiei, self::sgoswgskyiiwkyuo)) { goto scisgsyemmsekgos; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x43\x61\156\x20\x6e\157\x74\40\141\x64\144\x20\x75\163\x61\147\x65\x20\x66\157\162\40\162\145\x71\165\x65\163\x74\x65\x64\x20\x64\157\155\141\151\x6e\56", PR__MDL__OPTIMIZATION_MANAGER), 403); goto cewmoqyysgsmuiya; scisgsyemmsekgos: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\125\163\141\147\x65\163\x20\x61\x64\x64\145\x64\x20\163\x75\143\x63\145\x73\163\x66\165\154\x6c\x79\56", PR__MDL__OPTIMIZATION_MANAGER), [self::sqcsaeqsycmuiiso => $smowyuyseuwiaiei, self::oquukmukaoqegcuk => $yayiceymsscqcsoy]); cewmoqyysgsmuiya: omqiayeucoioqoao: wgewmqieuamsoayy: ueigkucgaucgeimc: wkeuuycukmuqiaom: qmuwoecuacmkwgem: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } private function kiyymmqeuqucwggg($meywaqqsugaoeyys, $wqykqusigegasqeg, $suaemuyiacqyugsm) : array { $geeyaumoyycymeks = $meywaqqsugaoeyys instanceof Subscription; $omouioamescuegke = Plan::symcgieuakksimmu(); $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $aqauykcugwiqkumq = $this->caokeucsksukesyo()->mmmcswscsiecscwg(); $umkkkaqkwugkemce = 0; if ($geeyaumoyycymeks) { goto owmuceyswmgueasi; } $umkkkaqkwugkemce = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::ysogiyumowssousm, 0); owmuceyswmgueasi: $ymiyawysimukkoso = $meywaqqsugaoeyys->aeggeuqycwawueqy($meywaqqsugaoeyys->wkmkqaiwuqouweye(self::kuqwimiimiqsimgo, $wqykqusigegasqeg), [self::imywcsggckkcywgk => $suaemuyiacqyugsm, self::wosqwewmqmyweqea => false]); $cyymykkuugqaugia = []; $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); foreach ($ymiyawysimukkoso[self::qwumqqyuasyskkkc] as $igqsaukqcqscimok) { $icwicymcioeyeyek = []; $igqsaukqcqscimok = (array) $igqsaukqcqscimok; if ($geeyaumoyycymeks) { goto wagqgeqymeqoeuyi; } $cosmgoaiwuamyesi = $meywaqqsugaoeyys->qogaqkcsogcqiaic($igqsaukqcqscimok, self::ciyoccqkiamemcmm, 0); if (!($cosmgoaiwuamyesi > 0)) { goto msemumccgceyugmg; } $icwicymcioeyeyek[self::ciyoccqkiamemcmm] = $cosmgoaiwuamyesi; msemumccgceyugmg: goto qoqskyuuwueqkquk; wagqgeqymeqoeuyi: $zkoismskyqiakggu = (array) $omouioamescuegke->akkkoiiymmamsauc($igqsaukqcqscimok[Subscription::kiwgokskimawckie] ?? 0); if (!$zkoismskyqiakggu) { goto eogwckcymuugikuy; } $umkkkaqkwugkemce = $zkoismskyqiakggu[Plan::uecoocasykucckuu] ?? 0; eogwckcymuugikuy: $icwicymcioeyeyek["\x70\x6c\141\156"] = $omouioamescuegke->uikgwcuascgeissw($zkoismskyqiakggu); $icwicymcioeyeyek[self::icymuyeowqaciyyu] = $meywaqqsugaoeyys->qogaqkcsogcqiaic($igqsaukqcqscimok, self::icymuyeowqaciyyu); qoqskyuuwueqkquk: $aumscagymwyyicag = 0; if (!($umkkkaqkwugkemce && ($gkkgcoiwayaccqgm = $meywaqqsugaoeyys->qogaqkcsogcqiaic($igqsaukqcqscimok, self::awkcoioakcaougmq)))) { goto ciykoyeioqgyaeqo; } $mgwmckosekeimqms = $this->caokeucsksukesyo()->mmmcswscsiecscwg()->wasgwsogmuquqeaa($gkkgcoiwayaccqgm); foreach ($mgwmckosekeimqms as $cawesmkieccckaae) { if (!($umkkkaqkwugkemce === $aqauykcugwiqkumq->scwwywwaeuumakiq($cawesmkieccckaae))) { goto asiqwuoswmigcaki; } $aumscagymwyyicag = $cawesmkieccckaae->get_total(); asiqwuoswmigcaki: wcugqegqsuuuwqao: } iwsuawwqomaowuii: ciykoyeioqgyaeqo: $cyymykkuugqaugia[] = [self::gouqcwikiiygyasc => $meywaqqsugaoeyys->keeuqgyooycqoygw($igqsaukqcqscimok), self::kumuoysauoagaiiy => $meywaqqsugaoeyys->qogaqkcsogcqiaic($igqsaukqcqscimok, $meywaqqsugaoeyys::CREATED_AT), self::uiwqcumqkgikqyue => $icwicymcioeyeyek, self::acymsykymkiewqsy => $cgceoyqmmwumqyqa->aumscagymwyyicag($aumscagymwyyicag)]; eeauyscekuckoues: } mwsmsguqqkcwiiuk: return [self::qwumqqyuasyskkkc => $cyymykkuugqaugia, self::ycuusiweasqygwiw => $ymiyawysimukkoso[self::ycuusiweasqygwiw]]; } private function ycocqiwisouieuig($mgegoogckgsumooq) : bool { return $mgegoogckgsumooq === "\x31\x32\63\x34\x35"; } }
