<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668daba42442f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Module\OptimizationManager\Subscription\Subscription; class OptimizationManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x4f\x70\x74\x69\x6d\x69\x7a\141\164\x69\x6f\x6e\x20\115\x61\156\x61\147\x65\162", PR__MDL__OPTIMIZATION_MANAGER); }]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x6c\x6f\147\x69\x6e\x5f\162\145\144\151\x72\x65\x63\x74", "\x75\x72\x6c\144\x65\143\x6f\144\145"); $this->aqaqisyssqeomwom("\x62\x61\x63\153\x6c\151\x6e\x6b\137\155\x61\x6e\141\147\x65\162\x5f\155\157\x64\165\154\x65\163", [$this, "\x79\x77\x63\165\x65\x79\147\x6f\x73\x61\171\x73\x6d\145\161\161"])->aqaqisyssqeomwom("\143\x6f\x6d\x70\x6f\x6e\x65\156\x74\x5f\x6d\x75\x6c\164\x69\x5f\163\164\145\x70\x5f\160\162\x6f\144\x75\x63\x74\x5f\x6f\142\x6a\x65\x63\164", [$this, "\x65\151\x65\167\x6f\x73\153\x77\x61\163\x6d\x63\x79\x69\145\147"], 99, 3); } public function mameiwsayuyquoeq() { Setting::symcgieuakksimmu(); Subscription::symcgieuakksimmu(); } public function eiewoskwasmcyieg($mksyucucyswaukig, $wksoawcgagcgoask, $product) : ?Product { if (!($product && $this->cqusmgskowmesgcg() === $wksoawcgagcgoask)) { goto cecuyayqoioasumi; } $mksyucucyswaukig = Product::symcgieuakksimmu($wksoawcgagcgoask, $product); cecuyayqoioasumi: return $mksyucucyswaukig; } public function ywcueygosaysmeqq($kuemsykessaoquoy) { $kuemsykessaoquoy[$this->cqusmgskowmesgcg()] = Setting::symcgieuakksimmu()->cisyiemkeykgkomc(); return $kuemsykessaoquoy; } public function cqusmgskowmesgcg() { return Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::ocwsuwyiiasigqaa, 0); } }
