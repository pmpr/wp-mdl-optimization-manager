<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63275b9c6e655             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\REST; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\OptimizationManager\Setting; use Pmpr\Module\OptimizationManager\Model\Page; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Remote extends Common { public function __construct() { $this->rest_base = "\x72\x65\155\157\164\x65"; parent::__construct(); } public function register_routes() { $this->register("\57\x67\145\x74\55\141\160\x70\x73", [self::wwgusigoaksqmwsm => [$this, "\x6b\171\x6b\167\x61\145\155\155\x73\163\x71\x73\x67\165\x71\167"]]); $this->register("\57\143\x68\145\143\153\x2d\x75\162\154\163", [self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\141\x63\145\x77\145\147\x69\141\x79\x77\147\167\x73\x61\x71\153"]]); } public function acewegiaywgwsaqk(WP_REST_Request $aqmwamyiwgeeymqa) { if ($auwuoyyagaiegwae = array_filter((array) $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::eimuuyqioyqiqwgq, []))) { goto iomcaiwewsawiamu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\x65\x71\165\x69\162\x65\x20\160\141\x72\141\155\145\164\x65\162\x73\x20\x69\163\x20\155\x69\x73\163\151\x6e\147\x20\x6f\162\40\x75\156\x63\157\162\x72\145\x63\x74\145\144", PR__MDL__OPTIMIZATION_MANAGER), 400); goto sqiciiuwmykocycc; iomcaiwewsawiamu: $wkaekswggyskcymu = ManipulateArray::get($auwuoyyagaiegwae, array_rand($auwuoyyagaiegwae)); $gwgucoaaqcwwciqq = ManipulateFormat::gooqqcmsyseiaikc($wkaekswggyskcymu, PHP_URL_HOST); $keccaugmemegoimu = $this->ckeqsmmgoowoiosq($aqmwamyiwgeeymqa, $gwgucoaaqcwwciqq); if (is_wp_error($keccaugmemegoimu)) { goto kiqogmwcgcamwiig; } $wqykqusigegasqeg = ManipulateArray::get($keccaugmemegoimu, self::gouqcwikiiygyasc); if ($iuekmkswcsacoawq = Page::symcgieuakksimmu()) { goto kwagwqyusyiyoaqs; } $keccaugmemegoimu = $this->aqgegcykekmuggsu(); goto yowsmsiyimmimemc; kwagwqyusyiyoaqs: $ocqawgquwsqioses = $iuekmkswcsacoawq->ssiyoimagsskwsoi([$iuekmkswcsacoawq::auqoykcmsiauccao => $auwuoyyagaiegwae, $iuekmkswcsacoawq::ciywsqoeiymemsys => $iuekmkswcsacoawq::eqewsqmqmsiocaeg, $iuekmkswcsacoawq::qkmqmaeuyokqgemg => $wqykqusigegasqeg], self::auqoykcmsiauccao); if ($ocqawgquwsqioses) { goto sciwggaeogcoesiu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x59\x6f\x75\x72\40\162\x65\161\x75\x65\x73\x74\x20\x70\145\x72\155\x61\x6c\x69\x6e\x6b\163\x20\151\163\40\x6e\157\164\40\x76\141\154\151\x64\x2e", PR__MDL__OPTIMIZATION_MANAGER)); goto eqkauqciwewmgeoi; sciwggaeogcoesiu: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x52\x65\x71\x75\x65\x73\164\x20\151\x73\40\166\141\154\x69\x64", PR__MDL__OPTIMIZATION_MANAGER), [self::eimuuyqioyqiqwgq => $ocqawgquwsqioses]); eqkauqciwewmgeoi: yowsmsiyimmimemc: kiqogmwcgcamwiig: sqiciiuwmykocycc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kykwaemmssqsguqw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->ckeqsmmgoowoiosq($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto cggowoquuiwqkyew; } if ($usmiuwiumyygmucg = Setting::kykwaemmssqsguqw()) { goto eequksumcoogyoem; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\141\x70\x70\163\40\x69\x73\x20\145\x6d\x70\x74\171\54\40\x70\154\145\x61\x73\145\x20\x63\157\156\164\x61\x63\164\40\167\x69\x74\x68\x20\x61\x64\155\x69\x6e\56", PR__MDL__OPTIMIZATION_MANAGER)); goto uukumskkeggaowck; eequksumcoogyoem: $keccaugmemegoimu = $this->qasywwyamoesisyi('', $usmiuwiumyygmucg); uukumskkeggaowck: cggowoquuiwqkyew: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { return true; } }
