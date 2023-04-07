<?php

namespace App\HttpService;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use League\Flysystem\ConnectionErrorException;

class HttpServiceProvider extends Client{
    function testString(){
        return "Seems better now";
    }
    
    function getProperty(){
        return Http::get(Config::get('api_routes.api_properties'));
    }
    function getLatestProperty(){
        return Http::get(Config::get('api_routes.api_latest_property'));
    }

    function getRelatedProperty($id){
        try {
            return Http::get(Config::get('api_routes.api_related_property').'/'.$id);
            //code...
        } 
        catch (\Throwable $th) {
            return ['status'=>$th->getMessage()];
        }
    }

    function getById($id){
        return Http::get(Config::get('api_routes.api_properties').'/'.$id);
    }

    function genericGetProperty($argumentArray){
        return Http::get(Config::get('api_routes.api_generic_property'), $argumentArray);
    }

    function genericGetLatestTrending($argumentArray){
        return Http::get(Config::get('api_routes.api_generic_latest_property'), $argumentArray);
    }

    function getLatestTrendingProperty(){
        return Http::get(Config::get('api_routes.api_latest_trending_property'));
    }

    function getPropertyCount(){
        return Http::get(Config::get('api_routes.api_property_count'));
    }

    function genericGetPropertyCount($argumentArray){
        return Http::get(Config::get('api_routes.api_generic_property_count'));
    }

    public function postProperty($property)
    {
        # code...
        return Http::post(Config::get('api_routes.api_properties'), $property);
    }

    public function updateProperty($id, $property)
    {
        # code...
        return Http::post(Config::get('api_routes.api_properties').'/'.$id, $property);
    }

    public function deleteProperty($id){
        return Http::delete(Config::get('api_routes.api_properties').'/'.$id);
    }

    function postSchedule($schedule){
        return Http::post(Config::get('api_routes.api_schedules'), $schedule);
    }

    public function getScedules()
    {
        # code...
        return Http::get(Config::get('api_routes.api_schedules'));
    }

    public function getScheduleById($id)
    {
        # code...
        return Http::get(Config::get('api_routes.api_schedules').'/'.$id);
    }

    public function genericGetSchedules($argumentArray=[], $fields=[])
    {
        # code...
    }
    
    public function updateScedule($id, $schedule){
        return Http::post(Config::get('api_routes.api_schedules').'/'.$id, $schedule);
    }

    public function deleteSchedule($id)
    {
        # code...
        return Http::delete(Config::get('api_routes.api_schedules').'/'.$id);
    }

    public function getCustomers()
    {
        # code...
        return Http::get(Config::get('api_routes.api_customers'));
    }

    public function getCustomerById($id)
    {
        # code...
        return Http::get(Config::get('api_routes.api_customers').'/'.$id);
    }

    public function postCustomer($customer)
    {
        # code...
        return Http::post(Config::get('api_routes.api_custonmers'), $customer);
    }

    public function updateCustomer($id, $customer)
    {
        # code...
        return Http::post(Config::get('api_routes.api_customers').'/'.$id, $customer);
    }

    public function deleteCustomer($id)
    {
        # code...
        return Http::delete(Config::get('api_routes.api_customers').'/'.$id);
    }

    public function getMessages()
    {
        # code...
        return Http::get(Config::get('api_routes.api_messages'));
    }

    public function getMessageById($id)
    {
        # code...
        return Http::get(Config::get('api_routes.api_messages').'/'.$id);
    }

    public function postMessage($message)
    {
        # code...
        return Http::post(Config::get('api_routes.api_messages'), $message);
    }

    public function replyMessage($id, $message)
    {
        # code...
        return Http::post(Config::get('api_routes.api_messages').'/'.$id, $message);
    }

    public function deleteMessage($id)
    {
        # code...
        return Http::delete(Config::get('api_routes.api_messages').'/'.$id);
    }

    public function getUsers()
    {
        # code...
        return Http::get(Config::get('api_routes.api_users'));
    }

    public function postUser($user)
    {
        # code...
        return Http::post(Config::get('api_routes.api_users'));
    }

    public function getUserById($id)
    {
        # code...
        return Http::get(Config::get('api_routes.api_users').'/'.$id);
    }

    public function updateUser($id, $user)
    {
        # code...
        return Http::post(Config::get('api_routes.api_users').'/'.$id, $user);
    }

    public function deleteUser($id)
    {
        # code...
        return Http::delete(Config::get('api_routes.api_users').'/'.$id);
    }
}