{*
* 2007-2024 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author     PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2024 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<div class="col-lg-offset-3">
  <input type="hidden" name="id_colissimo_pickup_point" value="{$pickup_point.colissimo_id|escape:'html':'UTF-8'}"/>
  <p style="font-weight: bold;">{$pickup_point.company_name|escape:'html':'UTF-8'}</p>
  <p>
    {$pickup_point.address1|escape:'html':'UTF-8'}<br/>
    {$pickup_point.zipcode|escape:'html':'UTF-8'} {$pickup_point.city|escape:'html':'UTF-8'}<br/>
    {$pickup_point.country|escape:'html':'UTF-8'}
  </p>
</div>
