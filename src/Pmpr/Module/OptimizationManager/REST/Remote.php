<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62828fb8dac1a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\REST; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\OptimizationManager\Setting; use Pmpr\Module\OptimizationManager\Model\Page; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Remote extends Common { public function __construct() { $this->rest_base = "\x72\145\155\x6f\164\145"; parent::__construct(); } public function register_routes() { $this->register("\57\147\x65\164\55\x61\x70\x70\163", ["\x63\x61\x6c\x6c\x62\141\x63\x6b" => [$this, "\x6b\x79\x6b\x77\x61\145\x6d\x6d\x73\163\161\x73\x67\165\161\x77"]]); $this->register("\x2f\x63\x68\x65\x63\153\x2d\x75\x72\x6c\163", ["\155\x65\164\x68\x6f\x64\x73" => self::qucyckeykeuuaquw, "\143\x61\x6c\x6c\x62\141\143\x6b" => [$this, "\141\143\x65\x77\x65\x67\151\141\171\x77\147\x77\163\141\161\x6b"]]); } public function acewegiaywgwsaqk(WP_REST_Request $aqmwamyiwgeeymqa) { $auwuoyyagaiegwae = array_filter((array) $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\165\x72\x6c\x73", [])); $migiiksoiymissge = ManipulateArray::get(array_values($auwuoyyagaiegwae), 0); $gwgucoaaqcwwciqq = ManipulateFormat::gooqqcmsyseiaikc($migiiksoiymissge, PHP_URL_HOST); $keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa, $gwgucoaaqcwwciqq); if (!is_wp_error($keccaugmemegoimu) && $auwuoyyagaiegwae) { goto kosaqwikueyksqmw; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\x65\161\x75\151\162\145\40\x70\x61\x72\x61\x6d\x65\x74\145\x72\163\40\151\x73\x20\155\x69\x73\163\x69\x6e\147\40\157\162\40\165\156\x63\157\x72\x72\145\x63\x74\145\x64", PR__MDL__OPTIMIZATION_MANAGER), 400); goto gicyayswqyuoekcq; kosaqwikueyksqmw: $akyiigeggqowmqqq = ManipulateArray::get($keccaugmemegoimu, self::gouqcwikiiygyasc); $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $ocqawgquwsqioses = $iuekmkswcsacoawq->ssiyoimagsskwsoi([$iuekmkswcsacoawq::auqoykcmsiauccao => $auwuoyyagaiegwae, $iuekmkswcsacoawq::ciywsqoeiymemsys => $iuekmkswcsacoawq::eqewsqmqmsiocaeg, $iuekmkswcsacoawq::qkmqmaeuyokqgemg => $akyiigeggqowmqqq], self::auqoykcmsiauccao); if ($ocqawgquwsqioses) { goto ykomgumacooyomsk; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\131\x6f\x75\162\40\x72\x65\x71\x75\145\163\164\40\x70\145\x72\x6d\x61\154\151\156\x6b\x73\x20\x69\163\x20\156\x6f\164\x20\166\141\154\151\x64\x2e", PR__MDL__OPTIMIZATION_MANAGER)); goto mqkmcysgoiaouiwm; ykomgumacooyomsk: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\122\x65\161\x75\x65\x73\164\40\151\163\x20\x76\x61\x6c\151\144", PR__MDL__OPTIMIZATION_MANAGER), ["\x75\162\x6c\163" => $ocqawgquwsqioses]); mqkmcysgoiaouiwm: gicyayswqyuoekcq: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kykwaemmssqsguqw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto cuumeogeomowqisc; } $usmiuwiumyygmucg = Setting::kykwaemmssqsguqw(); if ($usmiuwiumyygmucg && is_array($usmiuwiumyygmucg)) { goto iikiiioqiyegyaak; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\141\160\160\x73\40\x69\163\40\x65\x6d\160\x74\171\x2c\40\x70\154\x65\x61\x73\145\x20\143\x6f\156\164\141\x63\x74\x20\x77\151\x74\x68\40\141\144\x6d\x69\x6e", PR__MDL__OPTIMIZATION_MANAGER)); goto uiosisocuwokwkie; iikiiioqiyegyaak: $keccaugmemegoimu = $this->qasywwyamoesisyi('', $usmiuwiumyygmucg); uiosisocuwokwkie: cuumeogeomowqisc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { return true; } }
