<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6151a28c9c64a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\OptimizationManager\Model; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; class PageLog extends Common { const FIELD = "\146\151\x65\x6c\144"; const PAGE_ID = self::PAGE . self::_ID; const NEW_VALUE = "\156\x65\167\137\166\141\154\x75\145"; const OLD_VALUE = "\157\x6c\144\x5f\166\x61\x6c\x75\145"; const SYSTEM = "\x73\171\163\164\x65\155"; const CUSTOMER = "\143\x75\x73\x74\x6f\x6d\x65\162"; const UPDATED_AT = null; public $timestamps = [self::CREATED_AT]; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->yioesawwewqaigow(IconFontawesomeInterface::ICON_BUG)->guiaswksukmgageq(__("\x50\x61\x67\145\x20\x4c\x6f\x67", PR__PKG__OPTIMIZATION_MANAGER))->muuwuqssqkaieqge(__("\x50\x61\x67\x65\40\x4c\157\x67\163", PR__PKG__OPTIMIZATION_MANAGER))->qemeyueyiwgsokuc(["\x73\150\157\x77\137\151\x6e\137\x6d\145\x6e\165" => false])->aseucqksocwomwos(); } public function eucukwckumgiyyww($oyuikeusicgqgwak = []) : array { return parent::eucukwckumgiyyww([$this->qcyqgwuuymykkcke(self::FIELD)->acceqyqygswoecwe(20)->gswweykyogmsyawy(__("\x46\151\x65\x6c\144", PR__PKG__OPTIMIZATION_MANAGER)), $this->ymuegqgyuagyucws(self::OLD_VALUE)->gswweykyogmsyawy(__("\x4f\154\144\40\126\141\x6c\x75\145", PR__PKG__OPTIMIZATION_MANAGER)), $this->ymuegqgyuagyucws(self::NEW_VALUE)->gswweykyogmsyawy(__("\x4e\145\167\x20\126\141\x6c\165\145", PR__PKG__OPTIMIZATION_MANAGER)), $this->qcyqgwuuymykkcke(self::USER)->eyygsasuqmommkua(self::CUSTOMER)->acceqyqygswoecwe(8)->gswweykyogmsyawy(__("\125\x73\145\162", PR__PKG__OPTIMIZATION_MANAGER)), $this->ggiieomioscuigco(self::PAGE_ID)->wuuqgaekqeymecag()->uwmyqckcyamwaiww(Page::class)->gswweykyogmsyawy(__("\x50\x61\x67\x65", PR__PKG__OPTIMIZATION_MANAGER))]); } public function memuukwsmoyqusua($mkucggyaiaukqoce = null) { $kcugcsqiuqaomqom = [self::ADMIN => __("\101\144\155\x69\156", PR__PKG__OPTIMIZATION_MANAGER), self::SYSTEM => __("\123\171\x73\164\x65\x6d", PR__PKG__OPTIMIZATION_MANAGER), self::CUSTOMER => __("\x43\165\163\164\x6f\155\x65\x72", PR__PKG__OPTIMIZATION_MANAGER)]; return ManipulateArray::get($kcugcsqiuqaomqom, $mkucggyaiaukqoce, $kcugcsqiuqaomqom); } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { goto makomwwyomweyamm; asaowisseacciyia: ismeikacqqyqcmqe: goto qiaaqkymeuuueoqk; qiaaqkymeuuueoqk: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); goto ugswokwmkumcmigc; oqwcmgwimeisusoe: switch ($qgoqiacsiccwoawi) { case self::USER: $eqgoocgaqwqcimie = $this->memuukwsmoyqusua($eqgoocgaqwqcimie); goto ismeikacqqyqcmqe; case self::PAGE_ID: goto yseyyukqaowwouua; qcgyggiaowuqswuw: if (!$suaemuyiacqyugsm) { goto casgoamcqkekgeeo; } goto sooecucuakgkuyis; yseyyukqaowwouua: $suaemuyiacqyugsm = $this->iscemaoqqckmkago(self::PAGE_ID, $mksyucucyswaukig); goto qcgyggiaowuqswuw; ywqakqkmmcoceqka: casgoamcqkekgeeo: goto kwsqgqmwyyeykgum; sooecucuakgkuyis: $eqgoocgaqwqcimie = $iuekmkswcsacoawq->kamyqikiiuwqiiuw(self::URL, ManipulateArray::get($suaemuyiacqyugsm, self::URL), ManipulateArray::get($suaemuyiacqyugsm, $iuekmkswcsacoawq->kumuygiiqswoyasy())); goto ywqakqkmmcoceqka; kwsqgqmwyyeykgum: goto ismeikacqqyqcmqe; goto emauuoieewwoeyqq; emauuoieewwoeyqq: case self::FIELD: goto ekakkiuuquqkccse; oqwwacmigasucsoc: if (!$aaqqkgyougeiueyq) { goto koukiyqaccegmquc; } goto egkeqqgakieyimuq; cakuguiciaiaeukg: koukiyqaccegmquc: goto wswikooyuaaouqgk; egkeqqgakieyimuq: $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->qcgakseyaikigqco(); goto cakuguiciaiaeukg; wswikooyuaaouqgk: goto ismeikacqqyqcmqe; goto awwaiioyywmokwsm; ekakkiuuquqkccse: $aaqqkgyougeiueyq = $iuekmkswcsacoawq->oyeskqayoscwciem()->uqeoyqiwywwmsiew($eqgoocgaqwqcimie); goto oqwwacmigasucsoc; awwaiioyywmokwsm: case self::OLD_VALUE: case self::NEW_VALUE: goto gsqcoqqsioiyoykq; ysweqawmawicakeo: cumeycwmuuqawwyu: goto owisckseoogsugqq; iaomqomgiwiegoca: switch ($aaqqkgyougeiueyq->mwikyscisascoeea()) { case self::STATUS: $eqgoocgaqwqcimie = $iuekmkswcsacoawq->agausceiyceikeag($eqgoocgaqwqcimie); goto ckwmkquuyyugigom; } goto ysweqawmawicakeo; gsqcoqqsioiyoykq: $aaqqkgyougeiueyq = $iuekmkswcsacoawq->oyeskqayoscwciem()->uqeoyqiwywwmsiew(ManipulateArray::get($mksyucucyswaukig, self::FIELD)); goto goaowamiyyamueiw; cuseccewekgcgkyg: goto ismeikacqqyqcmqe; goto kgysyqkoqgwmoscq; owisckseoogsugqq: ckwmkquuyyugigom: goto ookcgumoacskyymy; ookcgumoacskyymy: uaicwcqwauosmsqm: goto cuseccewekgcgkyg; goaowamiyyamueiw: if (!$aaqqkgyougeiueyq) { goto uaicwcqwauosmsqm; } goto iaomqomgiwiegoca; kgysyqkoqgwmoscq: } goto acesyuieuuqwgkwm; makomwwyomweyamm: $iuekmkswcsacoawq = Page::symcgieuakksimmu(); goto oqwcmgwimeisusoe; acesyuieuuqwgkwm: qsokkkyoackoycie: goto asaowisseacciyia; ugswokwmkumcmigc: } }
