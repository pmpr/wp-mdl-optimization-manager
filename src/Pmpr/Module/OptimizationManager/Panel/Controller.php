<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62828fb8dac1a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\Panel; use Exception; use Pmpr\Module\DomainManager\Model\Domain as BaseDomain; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Module\DomainManager\Model\Ownership; use Pmpr\Module\OptimizationManager\Model\Budget; use Pmpr\Module\OptimizationManager\Model\Domain; use Pmpr\Module\OptimizationManager\Model\Page; use Pmpr\Module\Panel\REST\AbstractREST; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends AbstractREST { public function __construct() { $this->rest_base = "\x6f\x70\164\151\155\x69\172\x61\164\x69\x6f\x6e\55\x6d\141\156\141\147\145\162"; parent::__construct(); } public function register_routes() { $this->register("\x2f\x67\145\164\55\x64\x6f\x6d\141\x69\x6e\x73", ["\141\162\x67\163" => [], "\x6d\145\x74\150\157\x64\x73" => self::uigoseacoukemwqc, "\143\x61\x6c\x6c\x62\141\x63\x6b" => [$this, "\167\151\x71\165\x6d\153\155\161\153\161\x6f\171\x63\x71\171\151"]]); $this->register("\57\147\x65\164\x2d\x62\x75\144\147\145\164\x73", ["\x61\162\x67\x73" => [], "\x6d\x65\x74\150\x6f\144\163" => self::uigoseacoukemwqc, "\x63\141\x6c\x6c\x62\141\143\x6b" => [$this, "\153\167\141\x75\x6f\x6b\x61\157\x61\163\x6f\155\x73\x69\155\x6b"]]); $this->register("\57\147\145\x74\x2d\x70\141\147\145\163", ["\141\162\x67\163" => [], "\x6d\145\164\x68\157\x64\x73" => self::uigoseacoukemwqc, "\143\141\x6c\154\142\x61\x63\153" => [$this, "\151\x6b\145\147\151\167\141\147\x6d\161\155\161\147\171\165\171"]]); } public function koomwsoyuucccawk($aqmwamyiwgeeymqa, $meywaqqsugaoeyys) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto omugkkesagcyagmk; } $mokawwccycoiqeka = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x64\157\x6d\141\x69\156"); if ($mokawwccycoiqeka) { goto ayyweymyuuiauamo; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x44\157\x6d\141\151\156\40\x6e\157\x74\x20\160\141\x73\x73\145\144", PR__MDL__OPTIMIZATION_MANAGER), 400); goto mosqsmqimqgqoase; ayyweymyuuiauamo: $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $meywaqqsugaoeyys, [$meywaqqsugaoeyys::qkmqmaeuyokqgemg => $mokawwccycoiqeka]); mosqsmqimqgqoase: omugkkesagcyagmk: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ikegiwagmqmqgyuy(WP_REST_Request $aqmwamyiwgeeymqa) { return $this->koomwsoyuucccawk($aqmwamyiwgeeymqa, Page::symcgieuakksimmu()); } public function wiqumkmqkqoycqyi(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto qkcyqocqqwmqgqww; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); $ciokmysiiuwmigum = BaseDomain::symcgieuakksimmu(); if (!($swgwkyqkakceqeia && $ueomouiqmosykioc && $ciokmysiiuwmigum)) { goto ssoucoucsgccekwe; } $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu); try { $siykeiywomwwuoiw = $ueomouiqmosykioc->kqewyqqqiyiouaou([self::meksegaoamowuwoq => $ycoeoaakqyskgykq, self::ucmueuwwcmocgmig => [Ownership::myiiuekcoeksaasm, Ownership::gogsqoacoimiocqg], $swgwkyqkakceqeia->cokoiaeeomgssqgy() => [self::euoaaiqkqcqcgeco => self::ycasqqegycucigcy, self::ciyoccqkiamemcmm => [$ueomouiqmosykioc->myywwqkyiwawwquy($ueomouiqmosykioc::qkmqmaeuyokqgemg), $swgwkyqkakceqeia->myywwqkyiwawwquy($swgwkyqkakceqeia::qkmqmaeuyokqgemg)]], $ciokmysiiuwmigum->cokoiaeeomgssqgy() => [self::euoaaiqkqcqcgeco => self::ycasqqegycucigcy, self::ciyoccqkiamemcmm => [$ueomouiqmosykioc->myywwqkyiwawwquy($ueomouiqmosykioc::qkmqmaeuyokqgemg), $ciokmysiiuwmigum->kumuygiiqswoyasy(true)]]]); if ($siykeiywomwwuoiw) { goto iggyqogweyosuikc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\x65\x72\166\x69\143\x65\40\x75\x6e\x61\166\x61\151\x6c\x61\x62\x6c\145\40\x72\151\147\x68\164\40\x6e\157\167\56", PR__MDL__OPTIMIZATION_MANAGER), 503); goto qqewoyookaskiuek; iggyqogweyosuikc: $kugmgyukuauikwke = $ueomouiqmosykioc->iiqauwkoiguyeawu($siykeiywomwwuoiw, [$swgwkyqkakceqeia->kumuygiiqswoyasy(true), self::NAME, self::ciyoccqkiamemcmm, self::ciywsqoeiymemsys, self::ucmueuwwcmocgmig, $ciokmysiiuwmigum::igswcauwsgmeougs]); if ($kugmgyukuauikwke) { goto ygcsmkuycoagwyou; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x54\x68\x65\x72\x65\x20\151\163\x20\x6e\157\40\x6f\x77\x6e\145\x72\x73\150\x69\x70\40\x66\157\162\40\x79\x6f\165\x20\157\x6e\x20\x61\x6e\171\x20\x64\157\x6d\x61\x69\156", PR__MDL__OPTIMIZATION_MANAGER)); goto kqksuugcgsyeoayy; ygcsmkuycoagwyou: $keccaugmemegoimu = $kugmgyukuauikwke; kqksuugcgsyeoayy: qqewoyookaskiuek: } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->oemauiimmycumcsk($this->kyacickkomkioeyu($wgaoewqkwgomoaai), 500); } ssoucoucsgccekwe: qkcyqocqqwmqgqww: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kwauokaoasomsimk(WP_REST_Request $aqmwamyiwgeeymqa) { return $this->koomwsoyuucccawk($aqmwamyiwgeeymqa, Budget::symcgieuakksimmu()); } }
