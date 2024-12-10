<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Property;
use App\Models\PropertyDetail;
use App\Models\Order;

class HomeController extends Controller {

  
    public function index(Request $request) {

        $id = $request->session()->get('id');
        $properties = Property::getPropertiesWithDetails();
        return view('welcome',['user_id' => $id, 'property' => $properties]);
    }

    public function about(Request $request) {

        $id = $request->session()->get('id');

        return view('frontend.about',['user_id' => $id]);
    }

   
    public function property(Request $request) {

        $id = $request->session()->get('id');
        $properties = Property::getPropertiesWithDetails();

        return view('frontend.property',['user_id' => $id , 'property' => $properties]);
    }

    public function property_detail(Request $request,$id) {

        $idd = $request->session()->get('id');

        $data = Property::where('id','=',$id)->get();


        return view('frontend.property-detail',['user_id' => $idd , 'data' => $data]);
    }

    
    public function registerView(Request $request) {

        $success_msg =  $request->session()->get('success');
        $error_msg =  $request->session()->get('error');

        return view('frontend.register',['success_msg' => $success_msg,'error_msg' => $error_msg]);
    }


    public function addUser(Request $request)
    {
        
        $this->validate($request,[
            'username' => 'required',
            'email' => 'required',
            'password' => 'required|min:6', 
            'address' => 'required',
        ]);
          

        $user = new Client();
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->address = $request->input('address');
           
        if($user->save()){

           $request->session()->flash('success','Registration successful! Please login.');
           
        } else {
            $request->session()->flash('error','something went wrong. Please try again!');
        }

        return redirect('/login')->with('success', 'Registration successful! Please login.');

    }


    public function login(Request $request) {

        $success_msg =  $request->session()->get('success');
        $error_msg =  $request->session()->get('error');

        return view ('frontend.login',['success_msg' => $success_msg,'error_msg' => $error_msg]);
      
    }

    public function userLogin(Request $request) {
    
        $this->validate($request,[

            'email' => ['required','email'],
            'password' => ['required']
                  
            ]);
            
            $email = $request->input('email');
            $password = $request->input('password');
    
            $user = Client::where(['email' => $email,'password'=> $password])->first();
            
            if($user){    

                $request->session()->put('id',$user->id);

            } else{  

                $request->session()->flash('error','something went wrong. Please try again!');

                return redirect('/login');
            }
           
            return redirect('/home');         

    }

    public function contact(Request $request) {

        $id = $request->session()->get('id');
        
        $success_msg =  $request->session()->get('success');
        $error_msg =  $request->session()->get('error');

        return view('frontend.contact',['user_id' => $id , 'success_msg' => $success_msg,'error_msg' => $error_msg]);
    }

    public function addContact(Request $request) {

        $this->validate($request,[

            'name' => 'required',
            'phone' => 'required',
            'client_demand' => 'required',
            'message' => 'required',
                  
        ]);

        $user = new Contact();
        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->client_demand = $request->input('client_demand');
        $user->message = $request->input('message');
           
        if($user->save()){

           $request->session()->flash('Success','Your Inquiry Added Successful!');
           
        } else {
            $request->session()->flash('error','something went wrong. Please try again!');
        }

        return redirect('/contact')->with('Success','Your Inquiry Added Successful!');

    }
    public function logout(Request $req)
    {
        $req->session()->forget('id');

        return redirect('/login'); 
    }

    public function checkout(Request $request, $id) {

        $success_msg =  $request->session()->get('success');
        $error_msg =  $request->session()->get('error');

        $output = Property::find($id);

        return view ('frontend.checkout',['success_msg' => $success_msg,'error_msg' => $error_msg,'output' => $output]);
      
    }
    public function submit_checkout(Request $request)
    {
        $user_id = $request->session()->get('id');
    
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'paid_amount' => 'required|numeric',
            'property_name' => 'required|string|max:255',
        ]);
    
        try {
            
            $order_number = '#ORD-' . strtoupper(uniqid());
    
            $order = new Order();
            $order->customer_name = $validated['customer_name'];
            $order->email = $validated['email'];
            $order->phone = $validated['phone'];
            $order->paid_amount = $validated['paid_amount'];
            $order->property_name = $validated['property_name'];
            $order->order_number = $order_number; 
            $order->user_id = $user_id; 

            if( $order->save()){
                $request->session()->flash('success', 'Order placed successfully!');
                return redirect('/orderList');
            }

        } catch (\Exception $e) {

            return back()->withErrors(['error' => 'There was an issue placing the order. Please try again.']);
        }
    }
     
    public function order_list(Request $request) {

        $user_id = $request->session()->get('id');

        $data = Order::where('user_id','=',$user_id)->get();

        return view('frontend.orderList',['order' => $data]);
    }

    public function search(Request $request) {
        $location = $request->input('location');
        $sqft = $request->input('sqft');
        
        $query = Property::query();
        
        // Check if location is provided
        if ($location) {
            $query->where('location', 'LIKE', "%{$location}%");
        }
        
        // Check if area provided
        if ($sqft) {
            // Join properties and property_details table
            $query->join('property_details', 'properties.id', '=', 'property_details.property_id')
                  ->where('property_details.area', '>=', $sqft);
        }
        
       
        $output = $query->get();
        
        // Return the search results
        return view('frontend.search', ['search' => $output]);
    }
    
    
    
    // backend
   
    public function adminLoginView(Request $request)
    {
        
        $success_msg =  $request->session()->get('success');
        $error_msg =  $request->session()->get('error');

        return view('backend.login',['success_msg' => $success_msg,'error_msg' => $error_msg]);
    }

    public function adminLoginAdd(Request $request)
    {

        $this->validate($request,[

            'email' => ['required','email'],
            'password' => ['required']
                  
            ]);
            
            $email = $request->input('email');
            $password = $request->input('password');
    
            $user = Client::where(['email' => $email,'password'=> $password , 'role' => 1])->first();
            
            if($user){    

                $request->session()->put('admin_id',$user->id);

            } else{  

                $request->session()->flash('error','something went wrong. Please try again!');

                return redirect('/backend/login');
            }
           
            return redirect('/admin/dashboard');         
    }

    public function adminDashboard(Request $request)
    {
        $admin_id = $request->session()->get('admin_id');
        $user_count = Client::where('role','=','0')->count();
        $property_count = Property::count();
        $inquiry_count = Contact::count();
        $order_count = Order::count();

        return view('backend.dashboard',['admin_id' => $admin_id ,'user_count' => $user_count, 'property_count' => $property_count , 'Inquiry_count' => $inquiry_count , 'order_count' => $order_count]);
    }

    public function adminListing(Request $request)
    {
        $admin_id = $request->session()->get('admin_id');

        $user_list = Client::where('role','=','0')->get();

        return view('backend.listing',['admin_id' => $admin_id , 'user_list' => $user_list]);
    }

    public function adminPropertyView(Request $request)
    {
        $success_msg =  $request->session()->get('success');
        $error_msg =  $request->session()->get('error');

        $admin_id = $request->session()->get('admin_id');

        return view('backend.propertyAdd',['admin_id' => $admin_id,'success_msg' => $success_msg,'error_msg' => $error_msg]);
    }

    public function adminPropertyAdd(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'property_name' => 'required|string|max:255',
            'area' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'property_rent' => 'required|numeric',
            'location' => 'required|string|max:255',
            'wifi_service' => 'required|in:0,1', 
            'description' => 'nullable|string',
            'no_of_bathrooms' => 'required|numeric',
            'no_of_bedrooms' => 'required|numeric',
            'no_of_garages' => 'required|numeric',
            'no_of_parkings' => 'required|numeric',
        ]);
    
        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $imagePath = public_path('uploads'); 
            $image->move($imagePath, $imageName); 
        }
    
        // Create the Property entry
        $property = new Property();
        $property->property_name = $request->input('property_name');
        $property->image = isset($imageName) ? 'uploads/' . $imageName : null;
        $property->rent = $request->input('property_rent'); 
        $property->location = $request->input('location'); 
        $property->description = $request->input('description'); 
        // Save the property first
        $property->save(); 
    
        // Create the PropertyDetail entry
        $propertyDetail = new PropertyDetail();
        $propertyDetail->property_id = $property->id; 
        $propertyDetail->no_of_bathrooms = $request->input('no_of_bathrooms');
        $propertyDetail->no_of_bedrooms = $request->input('no_of_bedrooms');
        $propertyDetail->no_of_garages = $request->input('no_of_garages');
        $propertyDetail->area = $request->input('area'); 
        $propertyDetail->no_of_parkings = $request->input('no_of_parkings');
        $propertyDetail->available_wifi = $request->input('wifi_service') === '0' ? 1 : 0; 
        // Save the property details
        $propertyDetail->save(); 
    
        // Flash success message to session
        $request->session()->flash('success', 'Property added successfully!');
        
        // Redirect back to the property list
        return redirect('/admin/propertyList')->with('success_msg', 'Property added successfully!');
    }
    


    public function adminPropertyEdit(Request $request,$id)
    {
        $success_msg =  $request->session()->get('success');
        $error_msg =  $request->session()->get('error');

        $admin_id = $request->session()->get('admin_id');

        $data = property::find($id);

        return view('backend.propertyEdit',['admin_id' => $admin_id, 'property_data' => $data ,'success_msg' => $success_msg,'error_msg' => $error_msg]);
    }

    public function adminPropertyEditAdd(Request $request){
        // Validate the incoming request
        $request->validate([
            'property_name' => 'required|string|max:255',
            'rent' => 'required|numeric',
            'location' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
            'no_of_bathrooms' => 'required|integer',
            'no_of_bedrooms' => 'required|integer',
            'no_of_garages' => 'required|integer',
            'no_of_parkings' => 'required|integer',
            'wifi_service' => 'required|in:0,1', // Wi-Fi service (0 for not available, 1 for available)
            'area' => 'required|integer',
        ]);

        // Find the property by ID
        $property = Property::find($request->id);
        if (!$property) {
            return redirect('/admin/propertyList')->with('error', 'Property not found.');
        }

        // Update the property fields
            $property->property_name = $request->property_name;
            $property->rent = $request->rent;
            $property->location = $request->location;
            $property->description = $request->description;

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($property->image && file_exists(public_path('uploads/' . $property->image))) {
                // Delete the old file
                unlink(public_path('uploads/' . $property->image)); 
            }

            // Upload the new image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $property->image = 'uploads/' . $imageName;
        }

        if($property->save()){  
            
            // Update the property details
        $propertyDetail = $property->details ? $property->details : new PropertyDetail();

        // Update the property details
        $propertyDetail->property_id = $property->id;
        $propertyDetail->no_of_bathrooms = $request->no_of_bathrooms;
        $propertyDetail->no_of_bedrooms = $request->no_of_bedrooms;
        $propertyDetail->no_of_garages = $request->no_of_garages;
        $propertyDetail->no_of_parkings = $request->no_of_parkings;
        $propertyDetail->area = $request->area;
        $propertyDetail->available_wifi = $request->wifi_service;

        // Save the property details
        $propertyDetail->save();

            $request->session()->flash('success','Property Edit successfully!');
           
        } else {
            $request->session()->flash('error','something went wrong. Please try again!');
        }

        return redirect('/admin/propertyList');

    }

    public function adminLogout(Request $req)
    {
        $req->session()->forget('admin_id');

        return redirect('/admin/login'); 
    }
    
    public function adminPropertyList(Request $request)
    {
        $admin_id = $request->session()->get('admin_id');
        $properties = Property::getPropertiesWithDetails();

        return view('backend.propertyList',['admin_id' => $admin_id , 'properties' => $properties]);
    }
    
    public function adminOrderList(Request $request)
    {
        $admin_id = $request->session()->get('admin_id');

        $order = Order::all();

        return view('backend.list',['admin_id' => $admin_id,'order' => $order]);
    }

    public function adminInquiryList(Request $request)
    {
        $admin_id = $request->session()->get('admin_id');
        $contact_list = Contact::all();

        return view('backend.contactList',['admin_id' => $admin_id , 'contact_list' => $contact_list]);
    }

    
}
