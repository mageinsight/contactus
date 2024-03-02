<?php
namespace MageInsight\Contact\Api;

use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use MageInsight\Contact\Api\Data\ContactInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Interface ContactRepositoryInterface
 *
 * @api
 */
interface ContactRepositoryInterface
{
    /**
     * Create or update a Contact.
     *
     * @param ContactInterface $contact
     * @return ContactInterface
     */
    public function save(ContactInterface $contact);

    /**
     * Get a contact by Id
     *
     * @param int $id
     * @return ContactInterface
     * @throws NoSuchEntityException If contact with the specified ID does not exist.
     * @throws LocalizedException
     */
    public function getById($id);

    /**
     * Retrieve contacts which match a specified criteria.
     *
     * @param SearchCriteriaInterface $criteria
     */
    public function getList(SearchCriteriaInterface $criteria);

    /**
     * Delete a contact
     *
     * @param ContactInterface $contact
     * @return ContactInterface
     * @throws NoSuchEntityException If contact with the specified ID does not exist.
     * @throws LocalizedException
     */
    public function delete(ContactInterface $contact);

    /**
     * Delete a Contact by Id
     *
     * @param int $id
     * @return ContactInterface
     * @throws NoSuchEntityException If contact with the specified ID does not exist.
     * @throws LocalizedException
     */
    public function deleteById($id);
}