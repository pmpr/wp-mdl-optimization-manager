<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65ae3b81daf53             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\Subscription\REST; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\OptimizationManager\REST\Controller as BaseClass; use Pmpr\Module\OptimizationManager\Subscription\Model\Subscription; use Pmpr\Module\OptimizationManager\Subscription\Traits\EngineTrait; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends BaseClass { use EngineTrait; public function ikcgmcycisiccyuc() { parent::ikcgmcycisiccyuc(); $this->rest_base .= "\x2f\x73\165\x62\x73\143\162\151\160\164\151\157\x6e"; } public function register_routes() { $this->register("\x2f\x63\x68\x65\x63\153", [self::wwgusigoaksqmwsm => [$this, "\x71\x67\x6b\x6d\143\157\x73\167\x69\x71\151\167\147\x6b\167\157"]]); } public function qgkmcoswiqiwgkwo(WP_REST_Request $aqmwamyiwgeeymqa) { $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $migiiksoiymissge = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::sauwwsocmukoaayu); if ($esuksqieigiqcaie && $migiiksoiymissge) { goto ickcmqoiosquugwe; } $keccaugmemegoimu = $this->gygamsmycwkqqwcc(); goto qmeoaqmsuseueqiy; ickcmqoiosquugwe: $gwgucoaaqcwwciqq = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($migiiksoiymissge, PHP_URL_HOST); $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $mokawwccycoiqeka = $swgwkyqkakceqeia->aqiwcawmimkygoau($esuksqieigiqcaie, $gwgucoaaqcwwciqq); if ($mokawwccycoiqeka && !is_wp_error($mokawwccycoiqeka)) { goto goeoymmqqqeeoime; } $keccaugmemegoimu = $mokawwccycoiqeka; goto eiawsoasmscmqswa; goeoymmqqqeeoime: $wqykqusigegasqeg = $swgwkyqkakceqeia->keeuqgyooycqoygw($mokawwccycoiqeka); $goqqimcssiyagkwy = $this->uykissogmuaaocsg(); if ($goqqimcssiyagkwy->koeimwecyiiqgesk($wqykqusigegasqeg, [$goqqimcssiyagkwy::cwuyiqcqccegmmis => $goqqimcssiyagkwy::reqeqykqwgqmkqsc])) { goto qgegkeomwscwwiuw; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\162\162\171\54\x20\171\x6f\165\162\x20\144\x6f\x6d\141\x69\156\40\x68\x61\x73\40\x6e\x6f\x20\163\x75\142\163\x63\x72\x69\160\164\151\x6f\x6e\40\x79\x65\164\x2e", PR__MDL__OPTIMIZATION_MANAGER), PR__MDL__OPTIMIZATION_MANAGER); goto qmiwsequckckoaei; qgegkeomwscwwiuw: qmiwsequckckoaei: eiawsoasmscmqswa: qmeoaqmsuseueqiy: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
