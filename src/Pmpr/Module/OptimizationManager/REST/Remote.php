<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62bffa51c1023             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\REST; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\OptimizationManager\Setting; use Pmpr\Module\OptimizationManager\Model\Page; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Remote extends Common { public function __construct() { $this->rest_base = "\162\145\155\157\x74\x65"; parent::__construct(); } public function register_routes() { $this->register("\57\x67\x65\x74\55\x61\160\160\163", ["\143\141\154\154\x62\x61\x63\153" => [$this, "\153\x79\153\x77\141\145\155\x6d\x73\163\x71\163\x67\165\161\167"]]); $this->register("\x2f\x63\x68\145\143\x6b\55\165\x72\154\x73", ["\155\145\x74\150\157\144\x73" => self::qucyckeykeuuaquw, "\143\x61\154\x6c\x62\x61\x63\153" => [$this, "\x61\x63\145\x77\x65\x67\151\141\x79\167\x67\167\163\141\x71\153"]]); } public function acewegiaywgwsaqk(WP_REST_Request $aqmwamyiwgeeymqa) { $auwuoyyagaiegwae = array_filter((array) $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::eimuuyqioyqiqwgq, [])); $wkaekswggyskcymu = array_rand($auwuoyyagaiegwae); $gwgucoaaqcwwciqq = ManipulateFormat::gooqqcmsyseiaikc($wkaekswggyskcymu, PHP_URL_HOST); $keccaugmemegoimu = $this->ckeqsmmgoowoiosq($aqmwamyiwgeeymqa, $gwgucoaaqcwwciqq); if ($auwuoyyagaiegwae && !is_wp_error($keccaugmemegoimu)) { goto qwigomakwmyiwkgo; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\x65\161\165\x69\162\145\40\160\x61\162\x61\x6d\145\164\x65\162\x73\x20\x69\x73\40\155\x69\x73\x73\x69\156\147\x20\157\162\40\165\x6e\143\x6f\162\162\145\x63\164\145\x64", PR__MDL__OPTIMIZATION_MANAGER), 400); goto myoicgcuugciueis; qwigomakwmyiwkgo: $wqykqusigegasqeg = ManipulateArray::get($keccaugmemegoimu, self::gouqcwikiiygyasc); if ($iuekmkswcsacoawq = Page::symcgieuakksimmu()) { goto qogqewiwmwiwskgm; } $keccaugmemegoimu = $this->aqgegcykekmuggsu(); goto qgoiooayqmqqsiok; qogqewiwmwiwskgm: $ocqawgquwsqioses = $iuekmkswcsacoawq->ssiyoimagsskwsoi([$iuekmkswcsacoawq::auqoykcmsiauccao => $auwuoyyagaiegwae, $iuekmkswcsacoawq::ciywsqoeiymemsys => $iuekmkswcsacoawq::eqewsqmqmsiocaeg, $iuekmkswcsacoawq::qkmqmaeuyokqgemg => $wqykqusigegasqeg], self::auqoykcmsiauccao); if ($ocqawgquwsqioses) { goto cecuyayqoioasumi; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x59\157\165\x72\40\x72\x65\x71\x75\145\163\164\x20\x70\x65\162\155\141\x6c\151\x6e\x6b\163\x20\151\163\40\156\x6f\164\x20\166\141\x6c\x69\144\56", PR__MDL__OPTIMIZATION_MANAGER)); goto qiaqsassksqiuyae; cecuyayqoioasumi: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x52\145\x71\x75\145\x73\x74\x20\151\x73\40\166\141\154\x69\x64", PR__MDL__OPTIMIZATION_MANAGER), [self::eimuuyqioyqiqwgq => $ocqawgquwsqioses]); qiaqsassksqiuyae: qgoiooayqmqqsiok: myoicgcuugciueis: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kykwaemmssqsguqw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->ckeqsmmgoowoiosq($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto cuykwgmswkskqkyi; } if ($usmiuwiumyygmucg = Setting::kykwaemmssqsguqw()) { goto asmecuqiyyswueqe; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\141\x70\160\x73\40\x69\163\x20\x65\155\x70\x74\171\54\40\x70\x6c\145\x61\x73\x65\40\x63\157\x6e\164\x61\x63\164\x20\167\151\164\150\x20\141\144\155\151\156\x2e", PR__MDL__OPTIMIZATION_MANAGER)); goto csscmcacoikwsecs; asmecuqiyyswueqe: $keccaugmemegoimu = $this->qasywwyamoesisyi('', $usmiuwiumyygmucg); csscmcacoikwsecs: cuykwgmswkskqkyi: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { return true; } }
