<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MediaBlanketController extends Controller
{
    public function index()
    {
        $response =
        Http::withHeaders([
            'Content-Type' => 'application/json'   
        ])->post("https://leads.supadata.co.uk/submit-lead", [
            "test_lead" => true,
            "aff_id" => 161,
            "aff_password" => "XfXaQWmUWjhhBZKWv0gwHTa",
            "sub_id" => "101245",
            "referring_website" => "www.some-loan-company.co.uk",
            "loan_purpose" => "other",
            "loan_amount" => 1250,
            "loan_term" => 12,
            "title" => "Mr",
            "first_name"=> "TestRae",
            "middle_name"=> "test",
            "last_name"=> "TestRae",
            "date_of_birth"=> "30-11-1999",
            "marital_status"=> "single",
            "number_of_dependents"=> 0,
            "house_number"=> 2,
            "house_name"=> "clifford house",
            "flat_number"=> 2,
            "street_name"=> "clifford avenue",
            "city"=> "manchester",
            "county"=> "greater manchester",
            "post_code"=> "m3 2hw",
            "residential_status"=> "private_tenant",
            "address_move_in_date"=> "08-03-2016",
            "mobile_number"=> "07000000001",
            "mobile_phone_type"=> "contract",
            "home_number"=> "01617110415",
            "work_number"=> "01617110415",
            "email_address"=> "test@mediablanket.co.uk",
            "employment_status"=> "full_time",
            "payment_frequency"=> "weekly",
            "payment_method"=> "uk_direct_deposit",
            "monthly_income"=> 1234,
            "next_pay_date"=> "28-03-2023",
            "following_pay_date"=> "28-04-2023",
            "job_title"=> "webmaster",
            "employer_name"=> "mediablanket",
            "employer_industry"=> "health",
            "employment_start_date"=> "03-01-2017",
            "expenditure_housing"=> 50.75,
            "expenditure_credit"=> 50.75,
            "expenditure_transport"=> 50.75,
            "expenditure_food"=> 50.75,
            "expenditure_utilities"=> 50.75,
            "expenditure_other"=> 50.75,
            "bank_name"=> "rbs",
            "bank_account_number"=> "12345678",
            "bank_sort_code"=> "12-34-56",
            "bank_card_type"=> "visa_debit",
            "consent_email_sms"=> false,
            "consent_credit_search"=> true,
            "consent_financial"=> true,
            "user_agent"=> "Mozilla\/5.0 (X11; Linux x86_64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/51.0.2704.103 Safari\/537.36",
            "ip_address"=> "192.168.1.1",
            "guarantor"=> "no",
            "consent_email"=> "true",
            "consent_sms"=> "true",
            "consent_call"=>"true"
        ]);

        return $response;
    }
}
