<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             680177152c08b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\Subscription\Model; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Collection; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Radio; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Subscription\Model\Plan as BaseClass; use Pmpr\Module\OptimizationManager\Subscription\Traits\EngineTrait; class Plan extends BaseClass { use EngineTrait; const oquukmukaoqegcuk = 'usage_ids'; const kceiayeyisgquuim = 'speed_test_usage'; const cgiaykosmmoyuagu = 'critical_css_usage'; public function uwmqacgewuauagai() { $this->cquokmemekqqywgi($this->caokeucsksukesyo()->skckwsgymkimyuwo()->eoaomaokwkwqyqiq(Constants::qymgycqkoqecugsi)->gswweykyogmsyawy(__('Subscriptions', PR__MDL__OPTIMIZATION_MANAGER))->ckgquisaimmgwuyu(Subscription::class)->acokiqqgsmoqaeyu()); parent::uwmqacgewuauagai(); } public function asgweuiucesqyocq() : Collection { $aiowsaccomcoikus = parent::asgweuiucesqyocq(); $aiowsaccomcoikus->cuomeiwckekemywm(__('Only the first coin type rule is included in the subscription process.', PR__MDL__OPTIMIZATION_MANAGER), Constants::smkwuwawwaqyimcq); $couuyeucwooyseic = $aiowsaccomcoikus->ygwimyogyaqgumam(Constants::cwuyiqcqccegmmis); if ($couuyeucwooyseic instanceof Radio) { $couuyeucwooyseic->kesomeowemmyygey(Constants::mykiyeswieqamagm, __('Coin', PR__MDL__OPTIMIZATION_MANAGER))->qyucewwiggkyeaso(Constants::kqesaikwiwcgimuk, [Constants::wuawcaggsyeaaswe, Constants::ecygggyugmmoeaky])->qyucewwiggkyeaso(Constants::mykiyeswieqamagm, [Constants::mykiyeswieqamagm, self::cgiaykosmmoyuagu, self::kceiayeyisgquuim]); } $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $aiowsaccomcoikus->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::mykiyeswieqamagm)->gswweykyogmsyawy(__('Coin', PR__MDL__OPTIMIZATION_MANAGER))->eumecwmqmukqgyea()->escqqisecooswqgo()->mkmssscwmeekwgqo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::cgiaykosmmoyuagu)->eumecwmqmukqgyea()->escqqisecooswqgo()->mkmssscwmeekwgqo()->gswweykyogmsyawy(__('Critical CSS Usage', PR__MDL__OPTIMIZATION_MANAGER))->gucwmccyimoagwcm(__('For all devices(Desktop & Mobile)', PR__MDL__OPTIMIZATION_MANAGER)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::kceiayeyisgquuim)->eumecwmqmukqgyea()->escqqisecooswqgo()->mkmssscwmeekwgqo()->gswweykyogmsyawy(__('Speed Test Usage', PR__MDL__OPTIMIZATION_MANAGER))->gucwmccyimoagwcm(__('For each page', PR__MDL__OPTIMIZATION_MANAGER))); return $aiowsaccomcoikus; } public function asosocqswygacyyk($gesuaewsacmmwoeo) : array { $gmcgeogogyqsgawk = parent::asosocqswygacyyk($gesuaewsacmmwoeo); $acqqmqmcquukaqsc = $gmcgeogogyqsgawk[Constants::eeeoygaqqmoukaeg] ?? []; if (is_array($acqqmqmcquukaqsc)) { foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $cosmgoaiwuamyesi = $ekuqiqmikiicgoss[Constants::mykiyeswieqamagm] ?? ''; $caokcyqaukiegscs = $ekuqiqmikiicgoss[self::cgiaykosmmoyuagu] ?? ''; $wmycqosmaeakkyac = $ekuqiqmikiicgoss[self::kceiayeyisgquuim] ?? ''; if ($cosmgoaiwuamyesi !== '' && $caokcyqaukiegscs !== '' && $wmycqosmaeakkyac !== '') { $gmcgeogogyqsgawk[Constants::mykiyeswieqamagm] = $cosmgoaiwuamyesi; $gmcgeogogyqsgawk[self::kceiayeyisgquuim] = $wmycqosmaeakkyac; $gmcgeogogyqsgawk[self::cgiaykosmmoyuagu] = $caokcyqaukiegscs; break; } } $momcqeuuwwsaagyc = __('%s coin', PR__MDL__OPTIMIZATION_MANAGER); $gmcgeogogyqsgawk[Constants::quywusioaoakumaw] = [Constants::mykiyeswieqamagm => [Constants::qescuiwgsyuikume => __('Initial Coin', PR__MDL__OPTIMIZATION_MANAGER), Constants::qgqyauaqwqmqseim => IconInterface::mwayoguieimqyksk, Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($gmcgeogogyqsgawk[Constants::mykiyeswieqamagm] ?? 0))], Constants::eeeyoywyquqywwoo => [Constants::qescuiwgsyuikume => __('Subscription Period', PR__MDL__OPTIMIZATION_MANAGER), Constants::qgqyauaqwqmqseim => IconInterface::uaukqiccmgkacyms, Constants::ciyoccqkiamemcmm => $gmcgeogogyqsgawk[Constants::eeeyoywyquqywwoo] ?? '']]; $gmcgeogogyqsgawk[Constants::owimkwkiwawmeicq] = [self::cgiaykosmmoyuagu => [Constants::qescuiwgsyuikume => __('Critical CSS', PR__MDL__OPTIMIZATION_MANAGER), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($gmcgeogogyqsgawk[self::cgiaykosmmoyuagu] ?? 0))], self::kceiayeyisgquuim => [Constants::qescuiwgsyuikume => __('Speed Test', PR__MDL__OPTIMIZATION_MANAGER), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($gmcgeogogyqsgawk[self::kceiayeyisgquuim] ?? 0))]]; } return $gmcgeogogyqsgawk; } }
