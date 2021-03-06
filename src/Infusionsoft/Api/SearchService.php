<?php

namespace Infusionsoft\Api;

class SearchService extends AbstractApi {

	/**
	 * @param integer $savedSearchId
	 * @param integer $userId
	 * @return {{return}}
	 */
	public function getAllReportColumns($savedSearchId, $userId)
	{
		return $this->client->request($this->method(), $savedSearchId, $userId);
	}

	/**
	 * @param integer $sacedSearchId
	 * @param integer $userId
	 * @param integer $pageNumber
	 * @return {{return}}
	 */
	public function getSavedSearchResultsAllFields($sacedSearchId, $userId, $pageNumber)
	{
		return $this->client->request($this->method(), $sacedSearchId, $userId, $pageNumber);
	}

	/**
	 * @param integer $savedSearchId
	 * @param integer $userId
	 * @param integer $pageNumber
	 * @param array $returnFields
	 * @return {{return}}
	 */
	public function getSavedSearchResults($savedSearchId, $userId, $pageNumber, $returnFields)
	{
		return $this->client->request($this->method(), $savedSearchId, $userId, $pageNumber, $returnFields);
	}

	/**
	 * @param integer $userId
	 * @return {{return}}
	 */
	public function getAvailableQuickSearches($userId)
	{
		return $this->client->request($this->method(), $userId);
	}

	/**
	 * @param integer $quickSearchType
	 * @param integer $userId
	 * @param integer $searchData
	 * @param integer $page
	 * @param integer $returnLimit
	 * @return {{return}}
	 */
	public function quickSearch($quickSearchType, $userId, $searchData, $page, $returnLimit)
	{
		return $this->client->request($this->method(), $quickSearchType, $userId, $searchData, $page, $returnLimit);
	}

	/**
	 * @param integer $userId
	 * @return {{return}}
	 */
	public function getDefaultQuickSearch($userId)
	{
		return $this->client->request($this->method(), $userId);
	}

}