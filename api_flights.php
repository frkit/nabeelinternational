<?php
header('Content-Type: application/json');

$flights = [
    [
        "id" => "FL-101",
        "airline" => "Emirates",
        "airline_logo" => "https://logo.clearbit.com/emirates.com",
        "departure" => "LHE",
        "departure_time" => "10:30 AM",
        "arrival" => "DXB",
        "arrival_time" => "12:45 PM",
        "duration" => "3h 15m",
        "stops" => 0,
        "price" => 85000,
        "type" => "Economy"
    ],
    [
        "id" => "FL-102",
        "airline" => "Qatar Airways",
        "airline_logo" => "https://logo.clearbit.com/qatarairways.com",
        "departure" => "LHE",
        "departure_time" => "02:15 PM",
        "arrival" => "DXB",
        "arrival_time" => "05:30 PM",
        "duration" => "4h 15m",
        "stops" => 1,
        "price" => 75000,
        "type" => "Economy"
    ],
    [
        "id" => "FL-103",
        "airline" => "PIA",
        "airline_logo" => "https://logo.clearbit.com/piac.com.pk",
        "departure" => "ISB",
        "departure_time" => "08:00 AM",
        "arrival" => "JED",
        "arrival_time" => "11:30 AM",
        "duration" => "4h 30m",
        "stops" => 0,
        "price" => 120000,
        "type" => "Economy"
    ],
    [
        "id" => "FL-104",
        "airline" => "Saudia",
        "airline_logo" => "https://logo.clearbit.com/saudia.com",
        "departure" => "KHI",
        "departure_time" => "11:00 PM",
        "arrival" => "JED",
        "arrival_time" => "02:00 AM",
        "duration" => "4h 00m",
        "stops" => 0,
        "price" => 135000,
        "type" => "Business"
    ],
    [
        "id" => "FL-105",
        "airline" => "Turkish Airlines",
        "airline_logo" => "https://logo.clearbit.com/turkishairlines.com",
        "departure" => "ISB",
        "departure_time" => "05:45 AM",
        "arrival" => "IST",
        "arrival_time" => "10:15 AM",
        "duration" => "5h 30m",
        "stops" => 0,
        "price" => 145000,
        "type" => "Economy"
    ],
    [
        "id" => "FL-106",
        "airline" => "Emirates",
        "airline_logo" => "https://logo.clearbit.com/emirates.com",
        "departure" => "LHE",
        "departure_time" => "09:00 AM",
        "arrival" => "JFK",
        "arrival_time" => "08:30 PM",
        "duration" => "20h 30m",
        "stops" => 1,
        "price" => 380000,
        "type" => "Economy"
    ],
    [
        "id" => "FL-107",
        "airline" => "British Airways",
        "airline_logo" => "https://logo.clearbit.com/britishairways.com",
        "departure" => "ISB",
        "departure_time" => "01:30 PM",
        "arrival" => "LHR",
        "arrival_time" => "06:00 PM",
        "duration" => "8h 30m",
        "stops" => 0,
        "price" => 250000,
        "type" => "Premium Economy"
    ]
];

echo json_encode(["status" => "success", "data" => $flights]);
