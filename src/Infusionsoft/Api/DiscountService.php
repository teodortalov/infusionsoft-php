<?php

namespace Infusionsoft\Api;

class DiscountService extends AbstractApi {

	/**
	 * @param string $name
	 * @param string $description
	 * @param integer $freeTrialDays
	 * @param integer $hidePrice
	 * @param integer $subscriptionPlanId
	 * @return integer
	 */
	public function addFreeTrial($name, $description, $freeTrialDays, $hidePrice, $subscriptionPlanId)
	{
		return $this->client->request($this->method(), $name, $description, $freeTrialDays, $hidePrice, $subscriptionPlanId);
	}

	/**
	 * @param integer $trialId
	 * @return array
	 */
	public function getFreeTrial($trialId)
	{
		return $this->client->request($this->method(), $trialId);
	}

	/**
	 * @param string $name
	 * @param string $description
	 * @param integer $applyDiscountToCommission
	 * @param integer $perentOrAmt
	 * @param integer $amt
	 * @param string $payType
	 * @return integer
	 */
	public function addOrderTotalDiscount($name, $description, $applyDiscountToCommission, $perentOrAmt, $amt, $payType)
	{
		return $this->client->request($this->method(), $name, $description, $applyDiscountToCommission, $perentOrAmt, $amt, $payType);
	}

	/**
	 * @param integer $id
	 * @return array
	 */
	public function getOrderTotalDiscount($id)
	{
		return $this->client->request($this->method(), $id);
	}

	/**
	 * @param string $name
	 * @param string $description
	 * @param integer $applyDiscountToCommission
	 * @param integer $amt
	 * @return integer
	 */
	public function addCategoryDiscount($name, $description, $applyDiscountToCommission, $amt)
	{
		return $this->client->request($this->method(), $name, $description, $applyDiscountToCommission, $amt);
	}

	/**
	 * @param integer $id
	 * @return array
	 */
	public function getCategoryDiscount($id)
	{
		return $this->client->request($this->method(), $id);
	}

	/**
	 * @param integer $id
	 * @param integer $productId
	 * @return integer
	 */
	public function addCategoryAssignmentToCategoryDiscount($id, $productId)
	{
		return $this->client->request($this->method(), $id, $productId);
	}

	/**
	 * @param integer $id
	 * @return array
	 */
	public function getCategoryAssignmentsForCategoryDiscount($id)
	{
		return $this->client->request($this->method(), $id);
	}

	/**
	 * @param string $name
	 * @param string $description
	 * @param integer $applyDiscountToCommission
	 * @param integer $productId
	 * @param integer $percentOrAmt
	 * @param integer $amt
	 * @return integer
	 */
	public function addProductTotalDiscount($name, $description, $applyDiscountToCommission, $productId, $percentOrAmt, $amt)
	{
		return $this->client->request($this->method(), $name, $description, $applyDiscountToCommission, $productId, $percentOrAmt, $amt);
	}

	/**
	 * @param string $id
	 * @return array
	 */
	public function getProductTotalDiscount($id)
	{
		return $this->client->request($this->method(), $id);
	}

	/**
	 * @param string $name
	 * @param string $description
	 * @param integer $applyDiscountToCommission
	 * @param integer $percentOrAmt
	 * @param integer $amt
	 * @return integer
	 */
	public function addShippingTotalDiscount($name, $description, $applyDiscountToCommission, $percentOrAmt, $amt)
	{
		return $this->client->request($this->method(), $name, $description, $applyDiscountToCommission, $percentOrAmt, $amt);
	}

	/**
	 * @param integer $id
	 * @return array
	 */
	public function getShippingTotalDiscount($id)
	{
		return $this->client->request($this->method(), $id);
	}

}