<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             680177152c08b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\Subscription; use Pmpr\Module\Security\AbstractSecurity; use WP_Error; class Security extends AbstractSecurity { const eugkiogoakkiwism = 'pricing_recaptcha'; public function ikcgmcycisiccyuc() { $this->setting = Setting::symcgieuakksimmu(); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom('component_manager_purchase_choice_domain_fields', [$this, 'ycecqoyamkukucmw'])->aqaqisyssqeomwom('optimization_manager_subscription_add_to_cart_validation', [$this, 'ikaseommceygisqu'], 10, 2); parent::kgquecmsgcouyaya(); } public function iucqycygmekqcggo() : array { return [$this->wcwmusaouiqaqeww(self::eugkiogoakkiwism)->gswweykyogmsyawy(__('Pricing Multistep', PR__MDL__CONTACT))->gucwmccyimoagwcm(__('Enable reCAPTCHA for pricing page\'s multistep.', PR__MDL__OPTIMIZATION_MANAGER))]; } public function ycecqoyamkukucmw($ikgwqyuyckaewsow) { if (is_array($ikgwqyuyckaewsow) && $this->giiuwsmyumqwwiyq(self::eugkiogoakkiwism)) { $aiowsaccomcoikus = $this->gusaciukmokcqeik(); if ($aiowsaccomcoikus) { $ikgwqyuyckaewsow[] = $aiowsaccomcoikus; } } return $ikgwqyuyckaewsow; } public function ikaseommceygisqu($sogksuscggsicmac, $icwicymcioeyeyek = []) { if ($sogksuscggsicmac && !is_wp_error($sogksuscggsicmac) && $this->ockgcoyewecmsqag() && $this->giiuwsmyumqwwiyq(self::eugkiogoakkiwism)) { $sogksuscggsicmac = $this->akquumwmywuqyeck($icwicymcioeyeyek); } return $sogksuscggsicmac; } }
