<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersPhoneEmail extends Model
{
    public function index(){

        $sid = "AC9e15807c6c00194d0aa11022857be8e7";
        $token = "6944f2344d379aad3362b8d18a6d724b";
        $client = new Client($sid, $token);
        
        
        $smsCount = $client->messages("SM637f5a7d16884a9aba61bdadbc143f93")->fetch();
        echo count($smsCount);
        
        
        
    }
}