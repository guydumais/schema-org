<?php

namespace Spatie\SchemaOrg\Contracts;

interface PoliceStationContract
{
    public function openingHours($openingHours);

    public function additionalProperty($additionalProperty);

    public function address($address);

    public function aggregateRating($aggregateRating);

    public function amenityFeature($amenityFeature);

    public function branchCode($branchCode);

    public function containedIn($containedIn);

    public function containedInPlace($containedInPlace);

    public function containsPlace($containsPlace);

    public function event($event);

    public function events($events);

    public function faxNumber($faxNumber);

    public function geo($geo);

    public function globalLocationNumber($globalLocationNumber);

    public function hasMap($hasMap);

    public function isAccessibleForFree($isAccessibleForFree);

    public function isicV4($isicV4);

    public function latitude($latitude);

    public function logo($logo);

    public function longitude($longitude);

    public function map($map);

    public function maps($maps);

    public function maximumAttendeeCapacity($maximumAttendeeCapacity);

    public function openingHoursSpecification($openingHoursSpecification);

    public function photo($photo);

    public function photos($photos);

    public function publicAccess($publicAccess);

    public function review($review);

    public function reviews($reviews);

    public function slogan($slogan);

    public function smokingAllowed($smokingAllowed);

    public function specialOpeningHoursSpecification($specialOpeningHoursSpecification);

    public function telephone($telephone);

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

    public function branchOf($branchOf);

    public function currenciesAccepted($currenciesAccepted);

    public function paymentAccepted($paymentAccepted);

    public function priceRange($priceRange);

    public function areaServed($areaServed);

    public function award($award);

    public function awards($awards);

    public function brand($brand);

    public function contactPoint($contactPoint);

    public function contactPoints($contactPoints);

    public function department($department);

    public function dissolutionDate($dissolutionDate);

    public function duns($duns);

    public function email($email);

    public function employee($employee);

    public function employees($employees);

    public function founder($founder);

    public function founders($founders);

    public function foundingDate($foundingDate);

    public function foundingLocation($foundingLocation);

    public function funder($funder);

    public function hasOfferCatalog($hasOfferCatalog);

    public function hasPOS($hasPOS);

    public function legalName($legalName);

    public function leiCode($leiCode);

    public function location($location);

    public function makesOffer($makesOffer);

    public function member($member);

    public function memberOf($memberOf);

    public function members($members);

    public function naics($naics);

    public function numberOfEmployees($numberOfEmployees);

    public function offeredBy($offeredBy);

    public function owns($owns);

    public function parentOrganization($parentOrganization);

    public function publishingPrinciples($publishingPrinciples);

    public function seeks($seeks);

    public function serviceArea($serviceArea);

    public function sponsor($sponsor);

    public function subOrganization($subOrganization);

    public function taxID($taxID);

    public function vatID($vatID);

}
