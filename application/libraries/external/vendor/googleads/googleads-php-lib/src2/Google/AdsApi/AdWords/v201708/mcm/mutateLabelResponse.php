<?php

namespace Google\AdsApi\AdWords\v201708\mcm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class mutateLabelResponse
{

    /**
     * @var \Google\AdsApi\AdWords\v201708\mcm\ManagedCustomerLabelReturnValue $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdWords\v201708\mcm\ManagedCustomerLabelReturnValue $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201708\mcm\ManagedCustomerLabelReturnValue
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201708\mcm\ManagedCustomerLabelReturnValue $rval
     * @return \Google\AdsApi\AdWords\v201708\mcm\mutateLabelResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
