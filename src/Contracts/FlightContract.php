<?php

namespace Spatie\SchemaOrg\Contracts;

interface FlightContract
{
    public function aircraft($aircraft);

    public function arrivalAirport($arrivalAirport);

    public function arrivalGate($arrivalGate);

    public function arrivalTerminal($arrivalTerminal);

    public function boardingPolicy($boardingPolicy);

    public function carrier($carrier);

    public function departureAirport($departureAirport);

    public function departureGate($departureGate);

    public function departureTerminal($departureTerminal);

    public function estimatedFlightDuration($estimatedFlightDuration);

    public function flightDistance($flightDistance);

    public function flightNumber($flightNumber);

    public function mealService($mealService);

    public function seller($seller);

    public function webCheckinTime($webCheckinTime);

    public function arrivalTime($arrivalTime);

    public function departureTime($departureTime);

    public function offers($offers);

    public function provider($provider);

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
