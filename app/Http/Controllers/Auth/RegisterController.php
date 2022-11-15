<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\RsOffice;
use App\subUser;
use App\subscription;
use App\UsersRoles;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'CRN' => [ 'unique:rs_offices'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
       // dd($data);
     
    if($data['fromWhere'] == "home_page")
        {
            $create_user=User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);


            try {
          
                $imageName = time().'.'.$data['company_logo']->extension();
               
               $upload= $data['company_logo']->move(public_path('RS_logos'), $imageName);
            
                
                $comp = new RsOffice();
                $comp->CRN=$data['CRN'];
                $comp->Company_name=$data['Company_name'];
                $comp->city=$data['city'];
                $comp->status=$data['status'];
                $comp->presenter_name=$data['name'];
                $comp->presenter_number=$data['presenter_number'];
                $comp->company_logo=$imageName;
                $comp->presenter_email=$data['email'];
                $comp->save();

               //  dd($comp->latest()->first()->id);
              try{

                $sub = new subUser();
                $sub->rs_offices_id=$comp->latest()->first()->id;
                $sub->email=$data['email'];
                $sub->password=$data['password'];
                $sub->owners="on";
                $sub->renters="on";
                $sub->accountant="on";
                $sub->CRM="on";
                $sub->bills="on";
                $sub->tells="on";
                $sub->subusers="on";
                $sub->support="on";
                $sub->subscriptions="on";
                $sub->userType="RS_ADMIN";
                $sub->save();

             

              }catch (\Exception $e) {

               dd($e);
           }
              

           try{
                $dt = Carbon::now();
               // $dt->toDateString(); // Equivalent: echo $dt->format('Y-m-d');
                
                $subscription = new subscription();
                $subscription->rs_offices_id=$comp->latest()->first()->id;
                $subscription->subscriptions_type="free";
                $subscription->date_start=Carbon::now();
                $subscription->date_end=Carbon::now()->addMonth(2);
                $subscription->status="Active";
                $subscription->save();
            }catch (\Exception $e) {

                dd($e);
            }
            try{
                $UsersRoles = new UsersRoles();
                $UsersRoles->email=$data['email'];
                $UsersRoles->role="RS_ADMIN";
                $UsersRoles->save();
            }catch (\Exception $e) {

                dd($e);
            }
                //return redirect('index')->with('status',"Insert successfully");
              //  return redirect('/home');
              return $create_user;

            


        } catch (\Exception $e) {

            return \Redirect::back()->withErrors(['msg' => 'لم يتم اضافة الشركة الرجاء التاكد من المدخلات مجدداً ']);
        }

         
        return $create_user;


        }

       
    




    }
}
