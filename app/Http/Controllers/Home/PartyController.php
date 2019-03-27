<?php
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Model\Party;
class PartyController extends Controller{
    /*
     * 活动
     */
    public function Party(){
        return view('home.party.party');
    }
}