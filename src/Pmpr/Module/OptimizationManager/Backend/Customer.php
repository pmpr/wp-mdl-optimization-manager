<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             68cc7218d5152             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\Backend; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Page\Admin\Page; class Customer extends Page { const wuowaiyouwecckaw = 'optimization_customers'; public function __construct() { $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this); $this->args = [Constants::qoquaeuooeycomks => $wksoawcgagcgoask, Constants::ysgwugcqguggmigq => __('Customers', PR__MDL__OPTIMIZATION_MANAGER), Constants::wuowaiyouwecckaw => self::wuowaiyouwecckaw, Constants::kekcgssiyagioocg => 0]; parent::__construct(); } public function suicksywcwiggasc() { $this->listTable = new CustomerList(); $this->waeasakssissiuqg()->prepare_items(); parent::suicksywcwiggasc(); } }
