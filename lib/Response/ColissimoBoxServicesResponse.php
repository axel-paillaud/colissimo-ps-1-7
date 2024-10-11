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
 * Class ColissimoBoxServicesResponse
 */
class ColissimoBoxServicesResponse extends AbstractColissimoResponse implements ColissimoReturnedResponseInterface
{
    /** @var string */
    public $cgv;

    /** @var string */
    public $contractType;

    /** @var bool */
    public $optionRetourToken;

    /**
     * @param mixed $responseHeader
     * @param mixed $responseBody
     * @return ColissimoBoxServicesResponse
     */
    public static function buildFromResponse($responseHeader, $responseBody)
    {
        $servicesResponse = new self();
        $responseArray = json_decode($responseBody, true);

        if (!empty($responseArray)) {
            $servicesResponse->cgv = $responseArray['cgv']['accepted'];
            $servicesResponse->contractType = $responseArray['contractType'];
            $servicesResponse->optionRetourToken = $responseArray['optionRetourToken'];
        }

        return $servicesResponse;
    }
}
