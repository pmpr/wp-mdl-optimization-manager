<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             614b658e34efc             |
    |_______________________________________|
*/
 namespace Pmpr\Package\OptimizationManager\Model; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; class Page extends Common { const LOGS = "\x6c\x6f\x67\163"; const SERVICES = "\x73\x65\162\x76\151\143\145\163"; const DOMAIN_ID = "\x64\x6f\155\141\151\x6e\x5f\x69\x64"; const EVALUATIONS = "\145\x76\141\x6c\x75\x61\x74\151\x6f\x6e\163"; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->yioesawwewqaigow(IconFontawesomeInterface::ICON_BROWSER)->guiaswksukmgageq(__("\x50\x61\x67\x65", PR__PKG__OPTIMIZATION_MANAGER))->muuwuqssqkaieqge(__("\120\141\x67\x65\163", PR__PKG__OPTIMIZATION_MANAGER))->wkesqcmiekqoykag()->aseucqksocwomwos()->qemeyueyiwgsokuc(["\160\157\163\151\164\x69\157\x6e" => 30]); } public function iysseyicgouwysgk($mksyucucyswaukig) : ?string { return ManipulateArray::get($mksyucucyswaukig, self::URL); } public function eucukwckumgiyyww($oyuikeusicgqgwak = []) : array { return parent::eucukwckumgiyyww([$this->ymuegqgyuagyucws(self::URL)->eccqsggkcosmqumc()->gswweykyogmsyawy(__("\125\122\114", PR__PKG__OPTIMIZATION_MANAGER)), $this->qcyqgwuuymykkcke(self::STATUS)->acceqyqygswoecwe(10)->eyygsasuqmommkua(self::INACTIVE)->aguakyuusmksagai()->gswweykyogmsyawy(__("\x53\164\x61\164\165\163", PR__PKG__OPTIMIZATION_MANAGER)), $this->owgikiusoocuqqgo(self::LEVEL, $this->qqmwsmimiiiqkooo())->gswweykyogmsyawy(__("\x4c\145\166\145\x6c", PR__PKG__OPTIMIZATION_MANAGER))->eyygsasuqmommkua(self::LEVEL_1), $this->ggiieomioscuigco(self::DOMAIN_ID)->jyumyyugiwwiqomk(0)->wuuqgaekqeymecag()->uwmyqckcyamwaiww(Domain::class)->gswweykyogmsyawy(__("\x44\157\x6d\x61\151\x6e", PR__PKG__OPTIMIZATION_MANAGER)), $this->ggiieomioscuigco(self::EVALUATIONS)->gswweykyogmsyawy(__("\105\166\x61\154\165\x61\164\151\x6f\x6e\163", PR__PKG__OPTIMIZATION_MANAGER))->ckgquisaimmgwuyu()->uwmyqckcyamwaiww(Evaluation::class)->acokiqqgsmoqaeyu(), $this->ggiieomioscuigco(self::SERVICES)->gswweykyogmsyawy(__("\x53\x65\162\x76\x69\x63\145\163", PR__PKG__OPTIMIZATION_MANAGER))->ckgquisaimmgwuyu()->uwmyqckcyamwaiww(Service::class)->acokiqqgsmoqaeyu(), $this->ggiieomioscuigco(self::LOGS)->gswweykyogmsyawy(__("\114\x6f\147\163", PR__PKG__OPTIMIZATION_MANAGER))->ckgquisaimmgwuyu()->uwmyqckcyamwaiww(PageLog::class)->acokiqqgsmoqaeyu()]); } public function scueyoccsmqoiuce($suaemuyiacqyugsm, $msqkueqksqwmskak, $uwomkgseoiegeume, $aiowsaccomcoikus = self::STATUS, $mkucggyaiaukqoce = PageLog::CUSTOMER) : array { $uoakiwyyoqamqemm = PageLog::symcgieuakksimmu(); return $uoakiwyyoqamqemm->gscuuyuyauokoyuo([$uoakiwyyoqamqemm::USER => $mkucggyaiaukqoce, $uoakiwyyoqamqemm::FIELD => $aiowsaccomcoikus, $uoakiwyyoqamqemm::PAGE_ID => $suaemuyiacqyugsm, $uoakiwyyoqamqemm::OLD_VALUE => $msqkueqksqwmskak, $uoakiwyyoqamqemm::NEW_VALUE => $uwomkgseoiegeume], true); } public function qeowcucuoaqyqwuw($umwgoasiowmqcumw) : array { goto cigesysuauaiccms; gcskyqewysqaceeg: gwiaimosqoiquwkc: goto kkewoqqowugagwoy; qumkwsqqocooyuoq: foreach ($oqseeekuqisekiwy as $iueymcwwscwqkiyq => $meqocwsecsywiiqs) { $umwgoasiowmqcumw[$iueymcwwscwqkiyq] = [self::TITLE => $meqocwsecsywiiqs, self::COUNT => $this->ieieyoeqmmeysauc(self::STATUS, $iueymcwwscwqkiyq)]; owgakkqgckqcegoi: } goto gcskyqewysqaceeg; cigesysuauaiccms: $oqseeekuqisekiwy = $this->agausceiyceikeag(); goto qumkwsqqocooyuoq; kkewoqqowugagwoy: return parent::qeowcucuoaqyqwuw($umwgoasiowmqcumw); goto wwswmaewcaisauei; wwswmaewcaisauei: } public function agausceiyceikeag($iueymcwwscwqkiyq = null) { $oqseeekuqisekiwy = [self::ACTIVE => __("\x41\143\x74\x69\x76\x65", PR__PKG__OPTIMIZATION_MANAGER), self::INACTIVE => __("\x49\x6e\141\143\x74\x69\x76\x65", PR__PKG__OPTIMIZATION_MANAGER), self::IGNORED => __("\x49\x67\x6e\x6f\162\145\x64", PR__PKG__OPTIMIZATION_MANAGER)]; return ManipulateArray::get($oqseeekuqisekiwy, $iueymcwwscwqkiyq, $oqseeekuqisekiwy); } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { goto yeemsgmumygmumqw; yeemsgmumygmumqw: switch ($qgoqiacsiccwoawi) { case self::URL: goto isqwwmikecauwyuc; asqqqqakiagymemk: goto aaogeemgkogagkai; goto jkgouewqysmscmqs; ayamomygygmgwgkg: $meqocwsecsywiiqs = $uammqaqiwgcmeska[1]; goto gygqgauaceiuawkq; gicmaqmuscawegie: goto ooysmgyeqoiesgqm; goto oymyqcoekqyuiguq; iquecygaakmiomeg: qqmmycmsoqegcqqw: goto eacysqsegwcqawsa; gygqgauaceiuawkq: ooysmgyeqoiesgqm: goto ucksaiwquekagyqe; kceeuicccqscwgsu: aaogeemgkogagkai: goto iquecygaakmiomeg; oiiqqgyqmggyiums: $keccaugmemegoimu = wp_remote_get($eqgoocgaqwqcimie); goto magymcqykamwqigw; iyeswoaqkaeggiiy: $eqgoocgaqwqcimie = $this->geyuyukmwaoksywa($eqgoocgaqwqcimie, $meqocwsecsywiiqs); goto asqqqqakiagymemk; magymcqykamwqigw: if (!is_wp_error($keccaugmemegoimu) && preg_match("\57\x3c\x74\151\x74\154\x65\x3e\50\x2e\52\77\51\x3c\134\x2f\x74\x69\x74\x6c\145\x3e\x2f", $keccaugmemegoimu["\142\x6f\x64\x79"], $uammqaqiwgcmeska)) { goto wmaeicoyyciuaiuy; } goto ukogwqiuuuakkawy; eacysqsegwcqawsa: goto wsemeeocquawyauo; goto yimeskeioamqmuwg; jkgouewqysmscmqs: kwoyiysciqumswcy: goto sgiuwkisugmewmcs; oymyqcoekqyuiguq: wmaeicoyyciuaiuy: goto ayamomygygmgwgkg; sgiuwkisugmewmcs: $eqgoocgaqwqcimie = $this->geyuyukmwaoksywa($this->uesweuocqoywoyms($mksyucucyswaukig), $meqocwsecsywiiqs); goto kceeuicccqscwgsu; isqwwmikecauwyuc: if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto qqmmycmsoqegcqqw; } goto oiiqqgyqmggyiums; ucksaiwquekagyqe: if (is_numeric($mksyucucyswaukig)) { goto kwoyiysciqumswcy; } goto iyeswoaqkaeggiiy; ukogwqiuuuakkawy: $meqocwsecsywiiqs = $eqgoocgaqwqcimie; goto gicmaqmuscawegie; yimeskeioamqmuwg: case self::STATUS: $eqgoocgaqwqcimie = $this->agausceiyceikeag($eqgoocgaqwqcimie); goto wsemeeocquawyauo; case self::DOMAIN_ID: $eqgoocgaqwqcimie = $this->aouwuegyyugiwksc($qgoqiacsiccwoawi, $mksyucucyswaukig, !$this->wmwguecgowcscues()); goto wsemeeocquawyauo; } goto wkaoyycsoeoyqcae; uuuceqkseqkqawko: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); goto ekoegocuqoycoeyq; cwugokqsmiomgmqg: wsemeeocquawyauo: goto uuuceqkseqkqawko; wkaoyycsoeoyqcae: ocgkwqqmgasuoies: goto cwugokqsmiomgmqg; ekoegocuqoycoeyq: } public function kssgsuewkcwgiksa() : array { return [self::URL => ["\143\157\154" => "\x6d\x64\55\x36", "\164\171\x70\x65" => "\164\145\x78\164", "\x61\x73\x2d\x75\x72\x6c"], self::STATUS => ["\x63\157\154" => "\155\x64\55\x36", "\x74\171\x70\x65" => "\x62\163\x73\x65\x6c\x65\x63\x74", "\x6f\160\x74\151\x6f\x6e\163" => $this->agausceiyceikeag()]]; } }
