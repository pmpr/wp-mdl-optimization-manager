<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63275b9c6e655             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\REST; use Exception; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\OptimizationManager\Model\Domain; use Pmpr\Module\DomainManager\Model\Domain as OriginDomain; use WP_REST_Request; abstract class Common extends RESTController { public function __construct() { parent::__construct(); $this->namespace .= "\57\x6f\160\164\x69\x6d\151\x7a\x61\x74\x69\157\156\55\x6d\x61\x6e\141\x67\x65\162"; } public function wwawisckiqeueoua(WP_REST_Request $aqmwamyiwgeeymqa, $gwgucoaaqcwwciqq = null) { if ($gwgucoaaqcwwciqq) { goto cecuyayqoioasumi; } $gwgucoaaqcwwciqq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); cecuyayqoioasumi: $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::aciemiuuwgysykom); if ($swgwkyqkakceqeia = OriginDomain::symcgieuakksimmu()) { goto qwigomakwmyiwkgo; } $sogksuscggsicmac = $this->aqgegcykekmuggsu(); goto myoicgcuugciueis; qwigomakwmyiwkgo: try { if ($gwgucoaaqcwwciqq && strlen($esuksqieigiqcaie) === 32) { goto qiaqsassksqiuyae; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\131\x6f\165\162\40\162\x65\161\165\145\163\x74\x20\x69\163\x20\x6e\157\164\40\166\141\154\x69\x64", PR__MDL__OPTIMIZATION_MANAGER), 400); goto qogqewiwmwiwskgm; qiaqsassksqiuyae: $sogksuscggsicmac = $swgwkyqkakceqeia->oqomcmyuuakigusk([$swgwkyqkakceqeia::ciyoccqkiamemcmm => $gwgucoaaqcwwciqq, $swgwkyqkakceqeia::igswcauwsgmeougs => $esuksqieigiqcaie]); qogqewiwmwiwskgm: } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = $this->oemauiimmycumcsk($this->kyacickkomkioeyu($wgaoewqkwgomoaai), 500); } if ($sogksuscggsicmac) { goto qgoiooayqmqqsiok; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x44\157\155\x61\151\x6e\x20\156\157\x74\x20\x76\x61\x6c\151\144", PR__MDL__OPTIMIZATION_MANAGER), 400); qgoiooayqmqqsiok: myoicgcuugciueis: return $sogksuscggsicmac; } public function ckeqsmmgoowoiosq(WP_REST_Request $aqmwamyiwgeeymqa, $gwgucoaaqcwwciqq = null) { $mokawwccycoiqeka = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa, $gwgucoaaqcwwciqq); if ($mokawwccycoiqeka && !is_wp_error($mokawwccycoiqeka)) { goto kuicqywysciceggs; } $sogksuscggsicmac = $mokawwccycoiqeka; goto mkwskuycuyguqqok; kuicqywysciceggs: $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $yqimoiiocigqiski = OriginDomain::symcgieuakksimmu(); if ($swgwkyqkakceqeia && $yqimoiiocigqiski) { goto csscmcacoikwsecs; } $sogksuscggsicmac = $this->aqgegcykekmuggsu(); goto cuykwgmswkskqkyi; csscmcacoikwsecs: $sogksuscggsicmac = $swgwkyqkakceqeia->akkkoiiymmamsauc($yqimoiiocigqiski->keeuqgyooycqoygw($mokawwccycoiqeka), $swgwkyqkakceqeia::qkmqmaeuyokqgemg); if (!$sogksuscggsicmac) { goto asmecuqiyyswueqe; } $sogksuscggsicmac = ManipulateArray::mamuckeoceekuqsk($mokawwccycoiqeka, $sogksuscggsicmac); asmecuqiyyswueqe: cuykwgmswkskqkyi: mkwskuycuyguqqok: return $sogksuscggsicmac; } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { return parent::ackuaigiocsgyqwe($aqmwamyiwgeeymqa) && !is_wp_error($this->wwawisckiqeueoua($aqmwamyiwgeeymqa)); } }
