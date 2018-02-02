<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class HasHtmlSnippetDynamicAllocationCreative extends \Google\AdsApi\Dfp\v201708\BaseDynamicAllocationCreative
{

    /**
     * @var string $codeSnippet
     */
    protected $codeSnippet = null;

    /**
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\Dfp\v201708\Size $size
     * @param string $previewUrl
     * @param string[] $policyViolations
     * @param \Google\AdsApi\Dfp\v201708\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\Dfp\v201708\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\Dfp\v201708\BaseCustomFieldValue[] $customFieldValues
     * @param string $codeSnippet
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyViolations = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $codeSnippet = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyViolations, $appliedLabels, $lastModifiedDateTime, $customFieldValues);
      $this->codeSnippet = $codeSnippet;
    }

    /**
     * @return string
     */
    public function getCodeSnippet()
    {
      return $this->codeSnippet;
    }

    /**
     * @param string $codeSnippet
     * @return \Google\AdsApi\Dfp\v201708\HasHtmlSnippetDynamicAllocationCreative
     */
    public function setCodeSnippet($codeSnippet)
    {
      $this->codeSnippet = $codeSnippet;
      return $this;
    }

}
