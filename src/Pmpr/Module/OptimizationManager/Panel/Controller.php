<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62cb93a14d923             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\Panel; use Exception; use Pmpr\Module\DomainManager\Model\Domain as BaseDomain; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Module\DomainManager\Model\Ownership; use Pmpr\Module\OptimizationManager\Model\Budget; use Pmpr\Module\OptimizationManager\Model\Domain; use Pmpr\Module\OptimizationManager\Model\Page; use Pmpr\Module\Panel\REST\AbstractREST; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends AbstractREST { public function __construct() { $this->rest_base = "\157\x70\x74\151\155\151\x7a\x61\164\x69\x6f\156\x2d\155\141\x6e\x61\x67\145\x72"; parent::__construct(); } public function register_routes() { $this->register("\57\x67\x65\x74\55\144\x6f\x6d\x61\151\x6e\163", ["\x61\162\x67\x73" => [], "\155\x65\x74\x68\x6f\x64\163" => self::uigoseacoukemwqc, "\x63\141\x6c\x6c\x62\141\143\153" => [$this, "\x77\x69\161\x75\x6d\153\x6d\x71\153\x71\x6f\x79\x63\x71\171\151"]]); $this->register("\x2f\147\x65\164\55\x62\x75\x64\147\145\164\163", ["\x61\x72\x67\x73" => [], "\x6d\145\x74\150\157\x64\x73" => self::uigoseacoukemwqc, "\x63\141\154\x6c\x62\141\x63\153" => [$this, "\x6b\167\x61\165\157\x6b\141\x6f\141\163\x6f\155\x73\x69\x6d\153"]]); $this->register("\x2f\147\145\x74\55\160\x61\147\x65\x73", ["\x61\x72\x67\x73" => [], "\155\145\164\x68\157\144\x73" => self::uigoseacoukemwqc, "\143\141\154\x6c\142\141\143\x6b" => [$this, "\151\153\145\x67\151\x77\x61\x67\x6d\161\x6d\161\147\x79\165\x79"]]); } public function koomwsoyuucccawk($aqmwamyiwgeeymqa, $meywaqqsugaoeyys) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto emmsycooskoqmgeg; } $mokawwccycoiqeka = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x64\157\x6d\141\151\156"); if ($mokawwccycoiqeka) { goto mqicocmqegwukkwg; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x44\x6f\155\141\151\x6e\40\156\157\x74\40\x70\x61\x73\163\x65\x64", PR__MDL__OPTIMIZATION_MANAGER), 400); goto qgeugwymkkiacwoc; mqicocmqegwukkwg: $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $meywaqqsugaoeyys, [$meywaqqsugaoeyys::qkmqmaeuyokqgemg => $mokawwccycoiqeka]); qgeugwymkkiacwoc: emmsycooskoqmgeg: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ikegiwagmqmqgyuy(WP_REST_Request $aqmwamyiwgeeymqa) { return $this->koomwsoyuucccawk($aqmwamyiwgeeymqa, Page::symcgieuakksimmu()); } public function wiqumkmqkqoycqyi(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto wyuemgggaqogsmsq; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); $ciokmysiiuwmigum = BaseDomain::symcgieuakksimmu(); if (!($swgwkyqkakceqeia && $ueomouiqmosykioc && $ciokmysiiuwmigum)) { goto samwkqgwouggsguc; } $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu); try { $siykeiywomwwuoiw = $ueomouiqmosykioc->kqewyqqqiyiouaou([self::meksegaoamowuwoq => $ycoeoaakqyskgykq, self::ucmueuwwcmocgmig => [Ownership::myiiuekcoeksaasm, Ownership::gogsqoacoimiocqg], $swgwkyqkakceqeia->cokoiaeeomgssqgy() => [self::euoaaiqkqcqcgeco => self::ycasqqegycucigcy, self::ciyoccqkiamemcmm => [$ueomouiqmosykioc->myywwqkyiwawwquy($ueomouiqmosykioc::qkmqmaeuyokqgemg), $swgwkyqkakceqeia->myywwqkyiwawwquy($swgwkyqkakceqeia::qkmqmaeuyokqgemg)]], $ciokmysiiuwmigum->cokoiaeeomgssqgy() => [self::euoaaiqkqcqcgeco => self::ycasqqegycucigcy, self::ciyoccqkiamemcmm => [$ueomouiqmosykioc->myywwqkyiwawwquy($ueomouiqmosykioc::qkmqmaeuyokqgemg), $ciokmysiiuwmigum->kumuygiiqswoyasy(true)]]]); if ($siykeiywomwwuoiw) { goto acsqgiuageaasiyy; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\145\162\166\x69\143\145\x20\x75\x6e\141\x76\141\x69\154\141\142\154\x65\x20\x72\x69\x67\x68\x74\40\156\157\167\x2e", PR__MDL__OPTIMIZATION_MANAGER), 503); goto oomguqikqokqwgku; acsqgiuageaasiyy: $kugmgyukuauikwke = $ueomouiqmosykioc->iiqauwkoiguyeawu($siykeiywomwwuoiw, [$swgwkyqkakceqeia->kumuygiiqswoyasy(true), self::NAME, self::ciyoccqkiamemcmm, self::ciywsqoeiymemsys, self::ucmueuwwcmocgmig, $ciokmysiiuwmigum::igswcauwsgmeougs]); if ($kugmgyukuauikwke) { goto ouamogymawucwswu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\124\x68\145\x72\x65\40\151\x73\40\156\x6f\40\x6f\167\x6e\145\162\x73\x68\151\x70\40\146\157\x72\x20\x79\157\x75\x20\x6f\x6e\40\141\x6e\x79\40\x64\x6f\155\141\x69\x6e", PR__MDL__OPTIMIZATION_MANAGER)); goto mugqyyeayeyggqqk; ouamogymawucwswu: $keccaugmemegoimu = $kugmgyukuauikwke; mugqyyeayeyggqqk: oomguqikqokqwgku: } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->oemauiimmycumcsk($this->kyacickkomkioeyu($wgaoewqkwgomoaai), 500); } samwkqgwouggsguc: wyuemgggaqogsmsq: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kwauokaoasomsimk(WP_REST_Request $aqmwamyiwgeeymqa) { return $this->koomwsoyuucccawk($aqmwamyiwgeeymqa, Budget::symcgieuakksimmu()); } }
