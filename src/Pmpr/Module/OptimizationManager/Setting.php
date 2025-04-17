<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             680106384c92e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\ComponentManager\Model\Component; class Setting extends BaseClass { const yemcsuieyckgsyek = 'apps'; const gmquuqmomuaqueyi = 'cart'; const cwswygwykwgsqiwu = 'single'; const qseekcawwuumgacy = 'checkout'; const ueagcuikcyyoyymi = 'statistics'; const csascsakmmskewuy = self::ueagcuikcyyoyymi . Constants::icmokuskwoskgace; const wimciyacmqeewiqk = self::ueagcuikcyyoyymi . Constants::oiuiymiygsoiasug; const yuwgaqcmuqeeyqmi = 'free_variation_alert_text'; const eiguikqsqiemumcm = 'request_' . Constants::imywcsggckkcywgk; const wqcuaiwumkeqycas = 'wp_speed_' . Constants::imywcsggckkcywgk; public function qiccuiwooiquycsg() { parent::qiccuiwooiquycsg(); $this->hasLicense = false; $this->igiywquyccyiaucw(Constants::qoquaeuooeycomks, $this->mwikyscisascoeea())->gswweykyogmsyawy(__('Optimization Manager Setting', PR__MDL__OPTIMIZATION_MANAGER))->igiywquyccyiaucw(Constants::qsegwakiwaiyimyy, __('Module Setting', PR__MDL__OPTIMIZATION_MANAGER)); } public function ykwqaukkycogooii() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg(Constants::ioomakeyqiqowgmk)->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->gswweykyogmsyawy(__('General', PR__MDL__OPTIMIZATION_MANAGER))->gucwmccyimoagwcm(__('General Configuration', PR__MDL__OPTIMIZATION_MANAGER))->kwkugmqouisgkqig($uuyucgkyusckoaeq->ycgeeoiieoiakgam(Constants::yeowwkiiyimoykye)->saemoowcasogykak(IconInterface::isscgcamsuaqwwkc)->gswweykyogmsyawy(__('Config', PR__MDL__OPTIMIZATION_MANAGER))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::wqcuaiwumkeqycas)->ukqywcsoogkyoaoa(Constants::imywcsggckkcywgk)->eumecwmqmukqgyea()->gswweykyogmsyawy(__('WP Speed Page', PR__MDL__OPTIMIZATION_MANAGER)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::ocwsuwyiiasigqaa)->ugquamoakekwyiqg(Component::class)->gswweykyogmsyawy(__('Related Component', PR__MDL__OPTIMIZATION_MANAGER)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->sciaycsmsiekqueg(self::yuwgaqcmuqeeyqmi)->gswweykyogmsyawy(__('Free Variation Alert', PR__MDL__OPTIMIZATION_MANAGER))->qsecygiycssgacqs(3)->gsomueooycksswcy())->mkksewyosgeumwsa($uuyucgkyusckoaeq->qqmgmgasauucoago(self::yemcsuieyckgsyek)->omsoosuoikgueyke()->gswweykyogmsyawy(__('VirtualBrowser Apps', PR__MDL__OPTIMIZATION_MANAGER))->gucwmccyimoagwcm(__('Used for extract critical css and other remote optimizations.', PR__MDL__OPTIMIZATION_MANAGER))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::ciyoccqkiamemcmm)->xkgcwkwsqysqamic()->gswweykyogmsyawy(__('App name', PR__MDL__OPTIMIZATION_MANAGER))->gucwmccyimoagwcm(__('Write full url', PR__MDL__OPTIMIZATION_MANAGER)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::sygmkaeayiiouiwm)->kqqqugemmqagucuq()->gswweykyogmsyawy(__('App Token', PR__MDL__OPTIMIZATION_MANAGER))->gucwmccyimoagwcm(__('Use for communication between pmpr & remote app', PR__MDL__OPTIMIZATION_MANAGER)))))->kwkugmqouisgkqig($uuyucgkyusckoaeq->ycgeeoiieoiakgam('statistics')->saemoowcasogykak(IconInterface::ywgkseaaoygggyiq)->gswweykyogmsyawy(__('Statistics', PR__MDL__OPTIMIZATION_MANAGER))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::csascsakmmskewuy)->gswweykyogmsyawy(__('Title', PR__MDL__OPTIMIZATION_MANAGER)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->sciaycsmsiekqueg(self::wimciyacmqeewiqk)->gswweykyogmsyawy(__('Description', PR__MDL__OPTIMIZATION_MANAGER))->qsecygiycssgacqs(3)->gsomueooycksswcy())->mkksewyosgeumwsa($uuyucgkyusckoaeq->qqmgmgasauucoago(self::ueagcuikcyyoyymi)->omsoosuoikgueyke()->gswweykyogmsyawy(__('Items', PR__MDL__OPTIMIZATION_MANAGER))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->gswweykyogmsyawy(__('Title', PR__MDL__OPTIMIZATION_MANAGER)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::qgqyauaqwqmqseim)->mmwqwkuqkqccuqye()->gswweykyogmsyawy(__('Icon', PR__MDL__OPTIMIZATION_MANAGER))))))->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg('installation_request')->saemoowcasogykak(IconInterface::ggymkeaswocmyaiw)->gswweykyogmsyawy(__('Installation Request', PR__MDL__OPTIMIZATION_MANAGER))->gucwmccyimoagwcm(__('Configure Multistep', PR__MDL__OPTIMIZATION_MANAGER))->kwkugmqouisgkqig($uuyucgkyusckoaeq->ycgeeoiieoiakgam(Constants::imywcsggckkcywgk)->saemoowcasogykak(IconInterface::cccywmcmsmqismea)->gswweykyogmsyawy(__('Request Page', PR__MDL__OPTIMIZATION_MANAGER))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::eiguikqsqiemumcm)->ukqywcsoogkyoaoa(Constants::imywcsggckkcywgk)->eumecwmqmukqgyea()->gswweykyogmsyawy(__('Page', PR__MDL__OPTIMIZATION_MANAGER))))); parent::ykwqaukkycogooii(); } public function kykwaemmssqsguqw() : array { $usmiuwiumyygmucg = $this->giiuwsmyumqwwiyq(self::yemcsuieyckgsyek, []); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($usmiuwiumyygmucg as $momcykaoccoymeig => $qcaiykuysiowsimu) { $usmiuwiumyygmucg[$momcykaoccoymeig] = $gkyciwoiiisgywcs->get($qcaiykuysiowsimu, Constants::ciyoccqkiamemcmm); } return array_filter($usmiuwiumyygmucg); } }
