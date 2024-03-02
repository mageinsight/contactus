<?php
namespace MageInsight\Contact\Model;

use Magento\Framework\Model\AbstractModel;
use MageInsight\Contact\Api\Data\ContactInterface;

class Contact extends AbstractModel implements ContactInterface
{
	protected function _construct() {
		$this->_init('MageInsight\Contact\Model\ResourceModel\Contact');
	}

	/**
   * @return int
   */
  public function getContactId() {
		return $this->getData('contact_id');
	}

  /**
   * @param int $contactId
   * @return $this
   */
  public function setContactId($contactId) {
		return $this->setData('contact_id', $contactId);
	}

  /**
   * @return string
   */
  public function getName() {
		return $this->getData('name');
	}

  /**
   * @param string $name
   * @return $this
   */
  public function setName($name) {
		return $this->setData('name', $name);
	}

  /**
   * @return string
   */
  public function getEmail() {
		return $this->getData('email');
	}

  /**
   * @param string $email
   * @return $this
   */
  public function setEmail($email) {
		return $this->setData('email', $email);
	}

  /**
   * @return string
   */
  public function getTelephone() {
		return $this->getData('telephone');
	}

  /**
   * @param string $telephone
   * @return $this
   */
  public function setTelephone($telephone) {
		return $this->setData('telephone', $telephone);
	}

  /**
   * @return string
   */
  public function getComment() {
		return $this->getData('comment');
	}

  /**
   * @param string $comment
   * @return $this
   */
  public function setComment($comment) {
		return $this->setData('comment', $comment);
	}

  /**
   * @return string
   */
  public function getContactedAt() {
		return $this->getData('contacted_at');
	}

  /**
   * @param string $contactedAt
   * @return $this
   */
  public function setContactedAt($contactedAt) {
		return $this->setData('contacted_at', $contactedAt);
	}
}