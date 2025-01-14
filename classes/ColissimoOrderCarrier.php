<?php
/**
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2024 PrestaShop SA
 * @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * Class ColissimoOrderCarrier
 */
class ColissimoOrderCarrier extends OrderCarrier
{
    /**
     * @param int $idOrder
     * @return ColissimoOrderCarrier
     */
    public static function getByIdOrder($idOrder)
    {
        $dbQuery = new DbQuery();
        $dbQuery->select(self::$definition['primary'])
            ->from(self::$definition['table'])
            ->where('id_order = ' . (int) $idOrder);
        $id = Db::getInstance(_PS_USE_SQL_SLAVE_)
            ->getValue($dbQuery);

        return new self((int) $id);
    }

    /**
     * @param int $idOrder
     * @return array|false|mysqli_result|null|PDOStatement|resource
     */
    public static function getAllByIdOrder($idOrder)
    {
        $dbQuery = new DbQuery();
        $dbQuery->select('*')
            ->from(self::$definition['table'])
            ->where('id_order = ' . (int) $idOrder);
        try {
            $orderCarriers = Db::getInstance(_PS_USE_SQL_SLAVE_)
                ->executeS($dbQuery);
        } catch (PrestaShopException $e) {
            return [];
        }

        return $orderCarriers;
    }
}
