<?php
namespace MageInsight\Contact\Api\Data;

/**
 * Interface ContactInterface
 *
 * @api
 */
interface ContactInterface
{
    /**
     * @return int
     */
    public function getContactId();

    /**
     * @param int $contactId
     * @return $this
     */
    public function setContactId($contactId);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getEmail();

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail($email);

    /**
     * @return string
     */
    public function getTelephone();

    /**
     * @param string $phone
     * @return $this
     */
    public function setTelephone($telephone);

    /**
     * @return string
     */
    public function getComment();

    /**
     * @param string $comment
     * @return $this
     */
    public function setComment($comment);

    /**
     * @return string
     */
    public function getContactedAt();

    /**
     * @param string $contactedAt
     * @return $this
     */
    public function setContactedAt($contactedAt);
}