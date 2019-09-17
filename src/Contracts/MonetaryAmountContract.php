<?php

namespace Spatie\SchemaOrg\Contracts;

interface MonetaryAmountContract
{
    public function currency($currency);

    public function maxValue($maxValue);

    public function minValue($minValue);

    public function value($value);

    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function url($url);

}
