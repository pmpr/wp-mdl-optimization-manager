<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             68cc7218d5152             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\Subscription\Woocommerce; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Subscription\Woocommerce\Checkout as BaseClass; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\OptimizationManager\Subscription\Traits\EngineTrait; class Checkout extends BaseClass { use EngineTrait; public function wigskegsqequoeks() { parent::wigskegsqequoeks(); $this->qcsmikeggeemccuu('woocommerce_after_order_details_item', [$this, 'wciqiwawyagkeguc'], 10, 2); } public function wciqiwawyagkeguc($product, $cawesmkieccckaae = null) { $goqqimcssiyagkwy = $this->uykissogmuaaocsg(); if ($qamwkmomamooqqic = $goqqimcssiyagkwy->cemugskuuywigaig($cawesmkieccckaae)) { $pkyyagewkiyckmwy = $goqqimcssiyagkwy->ogkiouuqqmaagscs($qamwkmomamooqqic); if ($pkyyagewkiyckmwy) { echo $this->caokeucsksukesyo()->kugiyqykwaskawsc()->oockkqiqsssakuug(['classes' => 'mb-0', Constants::squoamkioomemiyi => Constants::smkwuwawwaqyimcq, Constants::ssmskyqgcmeiayco => sprintf(__('Purchased for %s domain', PR__MDL__OPTIMIZATION_MANAGER), $pkyyagewkiyckmwy), Constants::eekuioqeyeoyumym => false]); } } } }
