<?php
/**
 * Refer to LICENSE.txt distributed with the Temando Shipping module for notice of license
 */
namespace Temando\Shipping\Model\ResourceModel\Repository;

use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Temando\Shipping\Api\Data\Delivery\PickupLocationSearchResultInterface;
use Temando\Shipping\Api\Data\Delivery\QuotePickupLocationInterface;

/**
 * @package Temando\Shipping\Model
 * @author  Sebastian Ertner <sebastian.ertner@netresearch.de>
 * @license https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link    https://www.temando.com/
 */
interface QuotePickupLocationRepositoryInterface
{
    /**
     * Load pickup location by entity id.
     *
     * @param int $entityId
     * @return QuotePickupLocationInterface
     * @throws NoSuchEntityException
     */
    public function get(int $entityId): QuotePickupLocationInterface;

    /**
     * Load selected pickup location for given shipping address ID.
     *
     * @param int $addressId
     * @return QuotePickupLocationInterface
     * @throws NoSuchEntityException
     */
    public function getSelected(int $addressId): QuotePickupLocationInterface;

    /**
     * Save pickup location.
     *
     * @param QuotePickupLocationInterface $pickupLocation
     * @return QuotePickupLocationInterface
     * @throws CouldNotSaveException
     */
    public function save(QuotePickupLocationInterface $pickupLocation): QuotePickupLocationInterface;

    /**
     * Delete pickup location.
     *
     * @param QuotePickupLocationInterface $pickupLocation
     * @return bool
     * @throws CouldNotDeleteException
     */
    public function delete(QuotePickupLocationInterface $pickupLocation): bool;

    /**
     * Load collect locations.
     *
     * @param SearchCriteriaInterface $criteria
     * @return PickupLocationSearchResultInterface
     */
    public function getList(SearchCriteriaInterface $criteria): PickupLocationSearchResultInterface;
}
