<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6714e1dfc2332             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\Subscription; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\OptimizationManager\OptimizationManager; use Pmpr\Module\OptimizationManager\Subscription\Frontend\PricingMultistep; use Pmpr\Module\OptimizationManager\Subscription\Traits\EngineTrait; class Ajax extends Common { use EngineTrait; const wiysygukkaksueso = OptimizationManager::aksyiucmwcsqgese . "\163\x75\x62\x73\x63\162\x69\160\164\x69\157\x6e\x5f"; const yqmwwmeyssagguom = self::wiysygukkaksueso . "\x61\144\x64\x5f\164\x6f\x5f\143\141\162\164"; public function wigskegsqequoeks() { $this->iqkqummseggmikgo(self::yqmwwmeyssagguom, [$this, "\153\145\151\141\x67\155\147\147\165\x67\x67\167\145\x79\157\157"]); } public function keiagmgguggweyoo() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; $wksoawcgagcgoask = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::ocwsuwyiiasigqaa); $kiywimggieuowqai = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::wwcycgyaiaksckuk); $ccamueccusigaaio = $eiicaiwgqkgsekce->yyqgamuwwakgciey($kiywimggieuowqai); $keccaugmemegoimu = ''; $iqauecoycmqkimak = $this->ocksiywmkyaqseou("\x6f\160\164\x69\x6d\x69\x7a\141\164\x69\157\156\x5f\155\x61\156\141\147\145\162\x5f\163\165\142\x73\143\x72\151\x70\x74\151\x6f\x6e\137\141\x64\x64\137\x74\157\137\143\x61\162\x74\x5f\x76\141\154\x69\x64\141\x74\x69\x6f\156", true, $eiicaiwgqkgsekce->yyqgamuwwakgciey()); if (is_wp_error($iqauecoycmqkimak)) { $keccaugmemegoimu = $iqauecoycmqkimak; } else { if ($ccamueccusigaaio && $kiywimggieuowqai && $wksoawcgagcgoask) { $goqqimcssiyagkwy = $this->uykissogmuaaocsg(); if (in_array($kiywimggieuowqai, [Constants::uswkskaqiieoyacg, Constants::mayesweykoooyugy], true)) { $wqykqusigegasqeg = PricingMultistep::symcgieuakksimmu()->ieicgucoqmygemig($eiicaiwgqkgsekce->yyqgamuwwakgciey()); if ($wqykqusigegasqeg && !is_wp_error($wqykqusigegasqeg)) { $ekymkycgewkiouqe = $this->caokeucsksukesyo()->wikusamwomuogoau(); $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); switch ($kiywimggieuowqai) { case Constants::uswkskaqiieoyacg: if ($ogaeiucyqmowuqms = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::uswkskaqiieoyacg)) { $omouioamescuegke = $goqqimcssiyagkwy->esqsaiqmmsyymoea(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $aaosycakukwgwysy = $omouioamescuegke->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, Constants::eqewsqmqmsiocaeg), $eqwoegegiamegqsm->megqywqeuquawkim($omouioamescuegke->kumuygiiqswoyasy(), $ogaeiucyqmowuqms)]); if ($aaosycakukwgwysy) { if ((int) $ogaeiucyqmowuqms === $goqqimcssiyagkwy->imicysmecoiycoqc()) { if (!$goqqimcssiyagkwy->aiiaaeioukuaiuok($wqykqusigegasqeg)) { $sogksuscggsicmac = $goqqimcssiyagkwy->subscribe($wqykqusigegasqeg, $ogaeiucyqmowuqms); if ($sogksuscggsicmac && !is_wp_error($sogksuscggsicmac)) { $keccaugmemegoimu = [Constants::eoskkkieowogacws => sprintf(__("\45\x73\x20\150\141\x73\x20\163\165\143\143\x65\163\x73\x66\x75\x6c\154\171\40\x73\165\142\x73\143\162\151\142\145\144\x20\x74\157\x20\x25\x73\x2e", PR__MDL__OPTIMIZATION_MANAGER), $goqqimcssiyagkwy->ogkiouuqqmaagscs($wqykqusigegasqeg), $omouioamescuegke->uikgwcuascgeissw($aaosycakukwgwysy)) . $this->kqwomkwisamggaww($wksoawcgagcgoask)]; $occymigcemkqucuw = true; } else { $keccaugmemegoimu = $sogksuscggsicmac; } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x59\x6f\x75\162\40\144\x6f\x6d\141\x69\156\40\x61\x6c\x72\145\141\x64\x79\40\163\x75\142\x73\x63\162\151\142\x65\x64\x20\141\x6e\x64\40\x63\x61\x6e\40\x6e\157\x74\40\x73\x75\142\163\x63\x72\151\142\x65\40\164\x6f\x20\45\163", PR__MDL__OPTIMIZATION_MANAGER), $omouioamescuegke->uikgwcuascgeissw($aaosycakukwgwysy)) . $this->kqwomkwisamggaww($wksoawcgagcgoask)); } } else { $umkkkaqkwugkemce = $goqqimcssiyagkwy->wmsewmwmcaiioeyo($aaosycakukwgwysy, $wqykqusigegasqeg, false); if (is_numeric($umkkkaqkwugkemce)) { if (!$goqqimcssiyagkwy->eueeumkwymsyoacq($wqykqusigegasqeg, $ogaeiucyqmowuqms)) { $keccaugmemegoimu = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::uckosuiscwyyimgc, ''); } else { $occymigcemkqucuw = $ekymkycgewkiouqe->mggqcqmaoaewoqke($umkkkaqkwugkemce, [Constants::uswkskaqiieoyacg => $ogaeiucyqmowuqms, Constants::kuqwimiimiqsimgo => $wqykqusigegasqeg]); if ($occymigcemkqucuw) { $keccaugmemegoimu = [Constants::auqoykcmsiauccao => $cgceoyqmmwumqyqa->aoqkwiysueqqwigk()]; } else { $keccaugmemegoimu = $yyauwyaeewsickwk->wkyacaaqicyakocs($cgceoyqmmwumqyqa->gmkeeackegqamuga(Constants::imkacwmiuiykyuim), Constants::mgowaqweusymwoqu); if (!$keccaugmemegoimu) { $keccaugmemegoimu = sprintf(__("\x53\157\x6d\145\x74\150\x69\156\147\40\167\x72\157\x6e\x67\40\157\156\x20\141\x64\x64\x69\x6e\x67\40\45\163\x20\x74\157\x20\143\141\x72\x74\54\x20\160\154\145\x61\163\145\x20\x74\x72\x79\40\141\x67\141\x69\x6e\56", PR__MDL__OPTIMIZATION_MANAGER), __("\x73\165\x62\x73\143\x72\x69\160\x74\151\157\156", PR__MDL__OPTIMIZATION_MANAGER)); } } } } else { $keccaugmemegoimu = $umkkkaqkwugkemce; } } } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__("\x50\154\x61\156", PR__MDL__OPTIMIZATION_MANAGER)); } break; case Constants::mayesweykoooyugy: if ($ckkqcoeeekoowmok = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::mayesweykoooyugy)) { $sogksuscggsicmac = $goqqimcssiyagkwy->kcaaccuueqiwameg($wqykqusigegasqeg); if ($sogksuscggsicmac && !is_wp_error($sogksuscggsicmac)) { $occymigcemkqucuw = $ekymkycgewkiouqe->eyqowkegeuiqawos($goqqimcssiyagkwy->giweasosqeiqeeqg(), 1, $ckkqcoeeekoowmok, [], [Constants::kuqwimiimiqsimgo => $wqykqusigegasqeg]); if ($occymigcemkqucuw) { $keccaugmemegoimu = [Constants::auqoykcmsiauccao => $cgceoyqmmwumqyqa->aoqkwiysueqqwigk()]; } else { $keccaugmemegoimu = $yyauwyaeewsickwk->wkyacaaqicyakocs($cgceoyqmmwumqyqa->gmkeeackegqamuga(Constants::imkacwmiuiykyuim), Constants::mgowaqweusymwoqu); if (!$keccaugmemegoimu) { $keccaugmemegoimu = sprintf(__("\x53\x6f\155\145\x74\150\151\x6e\x67\40\167\x72\x6f\x6e\147\x20\x6f\x6e\40\x61\144\144\151\x6e\x67\x20\45\x73\40\164\157\40\x63\x61\x72\x74\54\x20\160\x6c\x65\x61\163\145\x20\x74\x72\x79\40\141\147\x61\151\156\56", PR__MDL__OPTIMIZATION_MANAGER), __("\143\157\151\x6e\x73", PR__MDL__OPTIMIZATION_MANAGER)); } } } else { $keccaugmemegoimu = $sogksuscggsicmac; } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__("\105\170\164\x72\x61\x20\x56\141\x72\x69\x61\x74\151\x6f\x6e", PR__MDL__OPTIMIZATION_MANAGER)); } break; } } else { $keccaugmemegoimu = $wqykqusigegasqeg; } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\111\x6e\166\141\x6c\x69\x64\40\x6f\162\144\x65\x72\40\164\171\x70\145", PR__MDL__COMPONENT_MANAGER)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function kqwomkwisamggaww($wksoawcgagcgoask) : string { if ($iwamiguusayooguq = (string) $this->ocksiywmkyaqseou("\x67\x65\x74\x5f\143\x6f\155\x70\x6f\x6e\x65\156\164\x5f\151\x6e\163\164\141\154\154\x61\x74\x69\x6f\156\x5f\147\x75\x69\x64\x65", '', $wksoawcgagcgoask)) { $iwamiguusayooguq = "\x3c\x62\162\76" . $iwamiguusayooguq; } return $iwamiguusayooguq; } }
