<?php

namespace App\Soap\Response;

class GetConversionAmountResponse
{
  /**
   * @var string
   */
  public $GetConversionAmountResult;

  /**
   * GetConversionAmountResponse constructor.
   *
   * @param string
   */
  public function __construct($GetConversionAmountResult)
  {
    $this->GetConversionAmountResult = $GetConversionAmountResult;
  }

  /**
   * @return string
   */
  public function getGetConversionAmountResult()
  {
    return $this->GetConversionAmountResult;
  }
}