<?php

namespace App\Http\Controllers;

use App\Models\Tbl_services;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ServicerequestController extends Controller
{
    
    public function getrequestpage()
    {
        $allservice = Tbl_services::all();
        $sql = DB::table('tbl_services as ts')->
            select('ts.*','tsr.cust_availability','tsr.actuallocation','tsr.id as servicerequestid','tc.custname as customername','tc.address as caddress','tc.profilepath','tc.description')
           ->Join('tbl_servicerequest as tsr', 'tsr.serviceid', '=', 'ts.id')
           ->Join('tbl_customerdetails as tc', 'tc.id', '=', 'tsr.customerid')->where('tsr.status', 0);
            $requestorders = $sql->orderBy('tsr.id','desc')->get();

        return view('requests', array(
            'allservice' => $allservice,
            'requestorders' => $requestorders,
        ));
    }

    public function getservicespage()
    {
        $allservice = Tbl_services::all();
        $sql = DB::table('tbl_services as ts')->
            select('ts.*','tsr.cust_availability','tsr.actuallocation','tsr.id as servicerequestid','tc.custname as customername','tc.address as caddress','tc.profilepath','tc.description')
           ->Join('tbl_servicerequest as tsr', 'tsr.serviceid', '=', 'ts.id')
           ->Join('tbl_customerdetails as tc', 'tc.id', '=', 'tsr.customerid')->where('tsr.status', 1);
            $requestorders = $sql->orderBy('tsr.id','desc')->get();

        return view('services', array(
            'allservice' => $allservice,
            'requestorders' => $requestorders,
        ));
    }

    public function getpaymentpage()
    {
        $allservice = Tbl_services::all();
        $sql = DB::table('tbl_services as ts')->
            select('ts.*','tsr.id as servicerequestid','tc.custname as customername','tc.address as caddress','tc.profilepath','tc.description')
           ->Join('tbl_servicerequest as tsr', 'tsr.serviceid', '=', 'ts.id')
           ->Join('tbl_customerdetails as tc', 'tc.id', '=', 'tsr.customerid')->where('tsr.status', 2);
            $requestorders = $sql->orderBy('tsr.id','desc')->get();

        return view('payments', array(
            'allservice' => $allservice,
            'requestorders' => $requestorders,
        ));
    }

    public function saverequestpage(Request $request) {
        $servicerequestid = $request->servicerequestid;
        DB::update('update tbl_servicerequest set status=1 where id=?',[$servicerequestid]);
        return redirect('services');
    }

    public function saveservicepage(Request $request) {
        $servicerequestid = $request->servicerequestid;
        DB::update('update tbl_servicerequest set status=2 where id=?',[$servicerequestid]);
        return redirect('payments');
    }
}
