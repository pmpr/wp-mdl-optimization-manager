<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             629e44f152c52             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\REST; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\OptimizationManager\Setting; use Pmpr\Module\OptimizationManager\Model\Page; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Remote extends Common { public function __construct() { $this->rest_base = "\x72\x65\x6d\157\164\145"; parent::__construct(); } public function register_routes() { $this->register("\57\147\x65\164\55\141\x70\160\163", ["\143\x61\154\x6c\x62\141\143\153" => [$this, "\x6b\x79\x6b\167\x61\145\155\155\x73\163\x71\163\x67\165\161\167"]]); $this->register("\x2f\143\x68\145\x63\x6b\x2d\x75\162\x6c\x73", ["\155\x65\x74\x68\157\144\x73" => self::qucyckeykeuuaquw, "\x63\x61\x6c\x6c\142\141\x63\x6b" => [$this, "\141\143\145\167\145\x67\x69\x61\x79\167\x67\167\x73\141\x71\153"]]); } public function acewegiaywgwsaqk(WP_REST_Request $aqmwamyiwgeeymqa) { $auwuoyyagaiegwae = array_filter((array) $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x75\x72\x6c\x73", [])); $migiiksoiymissge = ManipulateArray::get(array_values($auwuoyyagaiegwae), 0); $gwgucoaaqcwwciqq = ManipulateFormat::gooqqcmsyseiaikc($migiiksoiymissge, PHP_URL_HOST); $keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa, $gwgucoaaqcwwciqq); if (!is_wp_error($keccaugmemegoimu) && $auwuoyyagaiegwae) { goto kosaqwikueyksqmw; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\145\x71\165\151\x72\x65\40\x70\x61\162\x61\155\x65\x74\x65\x72\163\40\151\x73\x20\155\x69\163\163\151\156\147\x20\157\x72\40\165\156\143\x6f\162\162\x65\x63\164\x65\144", PR__MDL__OPTIMIZATION_MANAGER), 400); goto gicyayswqyuoekcq; kosaqwikueyksqmw: $akyiigeggqowmqqq = ManipulateArray::get($keccaugmemegoimu, self::gouqcwikiiygyasc); $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $ocqawgquwsqioses = $iuekmkswcsacoawq->ssiyoimagsskwsoi([$iuekmkswcsacoawq::auqoykcmsiauccao => $auwuoyyagaiegwae, $iuekmkswcsacoawq::ciywsqoeiymemsys => $iuekmkswcsacoawq::eqewsqmqmsiocaeg, $iuekmkswcsacoawq::qkmqmaeuyokqgemg => $akyiigeggqowmqqq], self::auqoykcmsiauccao); if ($ocqawgquwsqioses) { goto ykomgumacooyomsk; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\131\157\165\x72\40\x72\145\x71\165\x65\163\x74\x20\160\145\162\155\141\154\151\x6e\153\163\40\x69\x73\40\x6e\x6f\x74\x20\166\x61\x6c\x69\x64\x2e", PR__MDL__OPTIMIZATION_MANAGER)); goto mqkmcysgoiaouiwm; ykomgumacooyomsk: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x52\x65\161\x75\145\x73\x74\40\x69\x73\40\x76\x61\x6c\151\x64", PR__MDL__OPTIMIZATION_MANAGER), ["\165\x72\154\x73" => $ocqawgquwsqioses]); mqkmcysgoiaouiwm: gicyayswqyuoekcq: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kykwaemmssqsguqw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto cuumeogeomowqisc; } $usmiuwiumyygmucg = Setting::kykwaemmssqsguqw(); if ($usmiuwiumyygmucg && is_array($usmiuwiumyygmucg)) { goto iikiiioqiyegyaak; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x61\x70\160\163\40\x69\163\x20\145\x6d\160\x74\x79\x2c\40\160\154\x65\x61\163\145\x20\x63\x6f\x6e\164\141\143\164\40\167\151\x74\x68\x20\141\x64\x6d\151\156", PR__MDL__OPTIMIZATION_MANAGER)); goto uiosisocuwokwkie; iikiiioqiyegyaak: $keccaugmemegoimu = $this->qasywwyamoesisyi('', $usmiuwiumyygmucg); uiosisocuwokwkie: cuumeogeomowqisc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { return true; } }
