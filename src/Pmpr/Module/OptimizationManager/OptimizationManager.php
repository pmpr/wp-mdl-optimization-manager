<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668c5b679666b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager; use Exception; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Module\OptimizationManager\Subscription\Subscription; class OptimizationManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x4f\160\x74\151\x6d\x69\x7a\x61\164\x69\157\x6e\40\x4d\141\156\x61\147\x65\x72", PR__MDL__OPTIMIZATION_MANAGER); }]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\154\157\147\151\x6e\137\x72\x65\144\x69\162\145\x63\164", "\165\162\x6c\144\145\143\157\144\x65"); $this->aqaqisyssqeomwom("\x62\141\x63\153\x6c\151\x6e\153\x5f\x6d\141\156\x61\147\145\162\x5f\x6d\157\x64\x75\154\x65\x73", [$this, "\171\x77\143\x75\145\171\x67\157\x73\141\171\163\x6d\x65\x71\161"])->aqaqisyssqeomwom("\x63\x6f\155\x70\157\156\x65\156\164\137\x6d\165\154\164\x69\137\163\x74\x65\160\137\x70\x72\157\144\x75\143\x74\x5f\x6f\x62\x6a\x65\x63\x74", [$this, "\x65\x69\x65\167\157\163\153\x77\141\x73\155\x63\171\151\x65\147"], 99, 3); } public function mameiwsayuyquoeq() { Setting::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\163\x75\142\163\x63\162\x69\160\164\x69\x6f\x6e", self::goqwwcuaqoyouoya)) { goto cecuyayqoioasumi; } Subscription::symcgieuakksimmu(); cecuyayqoioasumi: } public function eiewoskwasmcyieg($mksyucucyswaukig, $wksoawcgagcgoask, $product) : ?Product { if (!($product && $this->cqusmgskowmesgcg() === $wksoawcgagcgoask)) { goto qiaqsassksqiuyae; } $mksyucucyswaukig = Product::symcgieuakksimmu($wksoawcgagcgoask, $product); qiaqsassksqiuyae: return $mksyucucyswaukig; } public function ywcueygosaysmeqq($kuemsykessaoquoy) { $kuemsykessaoquoy[$this->cqusmgskowmesgcg()] = Setting::symcgieuakksimmu()->cisyiemkeykgkomc(); return $kuemsykessaoquoy; } public function cqusmgskowmesgcg() { return Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::ocwsuwyiiasigqaa, 0); } }
