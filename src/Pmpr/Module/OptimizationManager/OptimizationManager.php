<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6688fb4047973             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager; use Exception; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Module\OptimizationManager\Subscription\Subscription; class OptimizationManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\117\x70\164\151\155\151\x7a\141\x74\151\x6f\156\x20\x4d\141\156\x61\x67\x65\x72", PR__MDL__OPTIMIZATION_MANAGER); }]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\154\157\147\151\156\x5f\x72\x65\x64\151\162\145\143\164", "\165\162\154\x64\x65\x63\157\x64\x65"); $this->aqaqisyssqeomwom("\x62\141\x63\153\154\151\x6e\x6b\x5f\155\141\156\141\x67\x65\162\x5f\x6d\157\x64\165\x6c\x65\x73", [$this, "\171\x77\143\x75\x65\171\x67\157\x73\141\x79\x73\155\145\161\x71"])->aqaqisyssqeomwom("\143\157\155\x70\157\156\x65\156\164\x5f\x6d\x75\154\164\151\x5f\163\x74\x65\160\137\160\162\157\x64\165\143\164\137\157\x62\x6a\145\143\x74", [$this, "\145\x69\145\x77\x6f\163\153\x77\141\x73\x6d\x63\171\151\145\x67"], 99, 3); } public function mameiwsayuyquoeq() { Setting::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\x73\165\142\163\x63\x72\x69\160\164\151\157\x6e", self::goqwwcuaqoyouoya)) { goto cecuyayqoioasumi; } Subscription::symcgieuakksimmu(); cecuyayqoioasumi: } public function eiewoskwasmcyieg($mksyucucyswaukig, $wksoawcgagcgoask, $product) : ?Product { if (!($product && $this->cqusmgskowmesgcg() === $wksoawcgagcgoask)) { goto qiaqsassksqiuyae; } $mksyucucyswaukig = Product::symcgieuakksimmu($wksoawcgagcgoask, $product); qiaqsassksqiuyae: return $mksyucucyswaukig; } public function ywcueygosaysmeqq($kuemsykessaoquoy) { $kuemsykessaoquoy[$this->cqusmgskowmesgcg()] = Setting::symcgieuakksimmu()->cisyiemkeykgkomc(); return $kuemsykessaoquoy; } public function cqusmgskowmesgcg() { return Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::ocwsuwyiiasigqaa, 0); } }
