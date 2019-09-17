<?php

namespace Spatie\SchemaOrg\Contracts;

interface UnitPriceSpecificationContract
{
    public function billingIncrement($billingIncrement);

    public function priceType($priceType);

    public function referenceQuantity($referenceQuantity);

    public function unitCode($unitCode);

    public function unitText($unitText);

    public function eligibleQuantity($eligibleQuantity);

    public function eligibleTransactionVolume($eligibleTransactionVolume);

    public function maxPrice($maxPrice);

    public function minPrice($minPrice);

    public function price($price);

    public function priceCurrency($priceCurrency);

    public function validFrom($validFrom);

    public function validThrough($validThrough);

    public function valueAddedTaxIncluded($valueAddedTaxIncluded);

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
