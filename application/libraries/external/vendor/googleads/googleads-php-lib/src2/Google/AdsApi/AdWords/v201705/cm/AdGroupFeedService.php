<?php

namespace Google\AdsApi\AdWords\v201705\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupFeedService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AdGroupFeed' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AdGroupFeed',
      'AdGroupFeedError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AdGroupFeedError',
      'AdGroupFeedOperation' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AdGroupFeedOperation',
      'AdGroupFeedPage' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AdGroupFeedPage',
      'AdGroupFeedReturnValue' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AdGroupFeedReturnValue',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AuthorizationError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ClientTermsError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\CollectionSizeError',
      'ConstantOperand' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ConstantOperand',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\DatabaseError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\DistinctError',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\EntityNotFound',
      'FeedAttributeOperand' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\FeedAttributeOperand',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\FieldPathElement',
      'Function' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\MatchingFunction',
      'FunctionError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\FunctionError',
      'FunctionOperand' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\FunctionOperand',
      'FunctionParsingError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\FunctionParsingError',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\InternalApiError',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ListReturnValue',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\NullError',
      'NullStatsPage' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\NullStatsPage',
      'FunctionArgumentOperand' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\FunctionArgumentOperand',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\OrderBy',
      'Page' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Page',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Paging',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Predicate',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\RejectedError',
      'RequestContextOperand' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\RequestContextOperand',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\RequiredError',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Selector',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\SelectorError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\StringLengthError',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\getResponse',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\mutateResponse',
      'queryResponse' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\queryResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201705/AdGroupFeedService?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * Returns a list of AdGroupFeeds that meet the selector criteria.
     *
     * adgroup feeds are returned.
     *
     * @param \Google\AdsApi\AdWords\v201705\cm\Selector $selector
     * @return \Google\AdsApi\AdWords\v201705\cm\AdGroupFeedPage
     * @throws \Google\AdsApi\AdWords\v201705\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201705\cm\Selector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->getRval();
    }

    /**
     * Adds, updates or removes AdGroupFeeds.
     *
     * @param \Google\AdsApi\AdWords\v201705\cm\AdGroupFeedOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201705\cm\AdGroupFeedReturnValue
     * @throws \Google\AdsApi\AdWords\v201705\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Returns the list of AdGroupFeeds that match the query.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201705\cm\AdGroupFeedPage
     * @throws \Google\AdsApi\AdWords\v201705\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->getRval();
    }

}
