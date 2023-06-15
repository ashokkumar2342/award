<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;  
use Illuminate\Support\Facades\Validator;  
use Illuminate\Support\Facades\Crypt;  
use Illuminate\Support\Facades\Response;  
use App\Model\OnlinePayment; 
use App\Http\Controllers\Admin\OnlinePaymentController;
use App\Helper\MyFuncs;

class BookingController extends Controller
{

    public function BookingStatus()
    {

        $user=Auth::guard('user')->user();
        if ($user->role_id==1) {
           $bookings = DB::table('booking') 
                              ->where('type',1)
                              ->get();  
         }else{
            $bookings = DB::table('booking')
                            ->where('user_id',$user->id)
                            ->where('type',1)
                            ->get();
         } 
         
        return view('admin.booking.booking_status',compact('bookings','user'));
    }
    public function BookingStatus2()
    {
        $user=Auth::guard('user')->user();
        if ($user->role_id==1) {
           $bookings = DB::table('booking') 
                              ->where('type',2)
                              ->get();  
         }else{
            $bookings = DB::table('booking')
                            ->where('user_id',$user->id)
                            ->where('type',2)
                            ->get();
         }
         
        return view('admin.booking.booking_status2',compact('bookings','user'));
    }
    

    

    public function storeBooking(Request $request)
    { 
        //  $this->validate($request,[
                                    
        //     'file' => 'required|mimes:pdf,docx|max:5000', 
            
             
        
        // ]);
        $request->except('_token');
       $user =Auth::guard('user')->user();
       //upload file
        $file = $request->file('resume');
       $imageName = time().'.pdf';
       $file->move(public_path('uploads'),$imageName);
       //end
       $json= json_encode($request->except('_token','resume'));
        DB::table('booking')->insert(
            ['json' => $json,'user_id'=>$user->id,'type'=>1,'file'=>$imageName,'status'=>0]
        );
        $bookings = DB::table('booking')
                            ->where('user_id',$user->id)
                            ->where('type',1)
                            ->get();
        return view('admin.booking.booking_status',compact('bookings','user'));
    }
    public function storeBooking2(Request $request)
    { 
        $request->except('_token');
       $user =Auth::guard('user')->user();
       $json= json_encode($request->except('_token'));
        DB::table('booking')->insert(
            ['json' => $json,'user_id'=>$user->id,'type'=>2,'status'=>0]
        );
        $bookings = DB::table('booking')
                            ->where('user_id',$user->id)
                            ->where('type',2)
                            ->get();
        return view('admin.booking.booking_status2',compact('bookings','user'));
    }
    public function approve(Request $request,$id)
    { 
       
        $bookings =  DB::table('booking')->where('id', $id)->update(
            ['status'=>1]
        );
        return redirect()->back();
    }
    public function reject(Request $request,$id)
    { 
       
        $bookings =  DB::table('booking')->where('id', $id)->update(
            ['status'=>2]
        );
        return redirect()->back();
    }

    public function showBookingForm()
    {
        try{
            $users=Auth::guard('user')->user();  
            $bookingTypes = DB::select(DB::raw("select * from `booking_type` order by `id`"));
            return view('admin.booking.booking',compact('bookingTypes','users')); 
        }catch (Exception $e) { }
    }
    public function showBookingForm2()
    {
        try{
            $users=Auth::guard('user')->user();  
            $bookingTypes = DB::select(DB::raw("select * from `booking_type_2` order by `id`"));
            return view('admin.booking.booking2',compact('bookingTypes','users')); 
        }catch (Exception $e) { }
    }
    public function downloadTicket($order_id)
    {
       
        $order_id=Crypt::decrypt($order_id);
        $downloadTicket = DB::select(DB::raw("select `booking_date` , `order_id` from `booking` where `order_id` = '$order_id'  limit 1;"));
        $booking_date=$downloadTicket[0]->booking_date;
        $order_id=$downloadTicket[0]->order_id;
        $downloadTicket = reset($downloadTicket);
        $documentUrl = Storage_path().'/app/ticket/'.$booking_date.'/'.$order_id;
        return response()->file($documentUrl.'.pdf');
    }
    public function report()
    {
        try{
            $users=Auth::guard('user')->user();  
            $bookingTypes = DB::select(DB::raw("select * from `booking_type` order by `id`"));
            return view('admin.booking.report',compact('bookingTypes','users')); 
        }catch (Exception $e) { }
    }
    public function reportPost(Request $request)
    {
        try{
            $users=Auth::guard('user')->user();  
            $bookings = DB::select(DB::raw("select * from `booking`;"));
            $response=array();
            $response["status"]=1;
            $response["data"]=view('admin.booking.report_table',compact('bookings'))->render();
            return response()->json($response); 
        }catch (Exception $e) { } 
    }
    public function paymentHistory()
    {
        try{
            return view('admin.booking.payment_history'); 
        }catch (Exception $e) { }
    }

    public function paymentHistoryShow(Request $request)
    {

        $rules=[ 
              'date_range'=> 'required', 
           ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
              $errors = $validator->errors()->all();
              $response=array();
              $response["status"]=0;
              $response["msg"]=$errors[0];
              return response()->json($response);// response as json
        }
        $user=Auth::guard('user')->user();
          
        $date_range= explode('-',$request->date_range);
        $from_date = date('Y-m-d H:i:s',strtotime($date_range[0]));
        $to_date =  date('Y-m-d H:i:s',strtotime($date_range[1]));  
        $bookings=DB::select(DB::raw(" select * from  `booking` where `booking_date` >= '$from_date' and `booking_date` < date_add('$to_date', INTERVAL 1 DAY) Order By  `booking_date` DESC ;"));  
        $response=array();
        $response["status"]=1;
        $response["data"]=view('admin.booking.payment_history_table',compact('bookings'))->render();
        return response()->json($response);
    }
    public function generateCoupon($value='')
    {
       try{
            $users=DB::select(DB::raw("select * from  `users` where `status`=1"));
            return view('admin.booking.generate_coupon',compact('users')); 
        }catch (Exception $e) { }  
    }
    public function couponPost(Request $request)
    {
        
        $rules=[ 
              'user_id'=> 'required', 
              'coupan_code'=> 'required|unique:coupan_detail|max:8|min:8', 
              
        ];
       
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
              $errors = $validator->errors()->all();
              $response=array();
              $response["status"]=0;
              $response["msg"]=$errors[0];
              return response()->json($response);// response as json
        }
      
        $user=Auth::guard('user')->user(); 
        $coupan_detail=DB::select(DB::raw("Insert Into `coupan_detail` (`user_id`, `coupan_code`, `discount_percent`, `discount_fix`, `complemantry_adult` , `complementry_child` ,`genereted_by`) Values ('$request->user_id', '$request->coupon_code', '$request->discount_percent', '$request->discount_fix', '$request->complementary_adult', '$request->complementary_child',$user->id);")); 
        $response=['status'=>1,'msg'=>'Generated Successfully'];
        return response()->json($response);
    } 
}