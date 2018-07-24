<?php
namespace App\Http\Controllers;
use App\Http\Requests\ABCD;
use Illuminate\Http\Request;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Paginition\Paginator;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;
use Illuminate\Support\Facades\Input;
use App\Cpanel;
use Auth;
use App\User;
use Image;
use DB;
//use App\Delete;

class CpanelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user_id)
    {
      $user = User::where('user_id',$user_id)->first();
      $cpanels=Cpanel::simplePaginate(10);
      return view('new.index' , ['cpanels'=>$cpanels , 'user'=>$user]);
    }
    public function index222($user_id)
    {
      //$user = User::where('user_id',$user_id)->first();
      //$cpanels=Cpanel::where($value,'LIKE',$str)->simplePaginate(5);
           //$cpanels=Cpanel::where($value,'LIKE',$str)->get();
         //return  view('new.index',['cpanels'=>$cpanels ,'user'=>$user]);
      //$cpanels=Cpanel::simplePaginate(5);
     // return view('new.index' , ['cpanels'=>$cpanels , 'user'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function create( $user_id )
    {
      $user = User::where('user_id',$user_id)->first();
      return  view('new.first_create',['user'=>$user]);
    }

    function no(Request $request , $user_id)
    {   $user = User::where('user_id',$user_id)->first();
        $this->validate($request,[
         'PurchaseOrderNo' => 'required|string|unique:cpanels|max:50|string',
         'PODate' => 'required|date|before_or_equal:today',
         'No'=>'required|numeric',
         ]);

          $PurchaseOrderNo = $request->PurchaseOrderNo;
          $PODate = $request->PODate;
          $No=$request->No;
          return view('new.after_create' , ['No'=>$No , 'PODate'=>$PODate , 'PurchaseOrderNo'=>$PurchaseOrderNo , 'user'=>$user]);
    }
   function showNo()
    {
          $No=$_REQUEST['No'];
          return view('new.after_create' , ['No'=>$No ]);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
 
    public function store(ABCD $request , $user_id)
    {   $user = User::where('user_id',$user_id)->first();
        $No = $request->No;
        for($i=1; $i<=$No ; $i++)
        {  
          $check[$i]=Cpanel::where('PurchaseOrderNo',$request->PurchaseOrderNo)
                         ->where('itemDescription',$request->itemDescription[$i])
                         ->where('Make',$request->Make[$i])
                         ->where('Quantity',$request->Quantity[$i])
                         ->where('Rate',$request->Rate[$i])->first();
       // }
         if($check[$i]){
          //echo $check[$i];
     echo "already entered";
     $cpanels=Cpanel::where('PurchaseOrderNo',$request->PurchaseOrderNo)->get();
     $one=Cpanel::where('PurchaseOrderNo',$request->PurchaseOrderNo)->first();
     return  view('search.after_search',['cpanels'=>$cpanels ,'one'=>$one , 'user'=>$user]);
    
   }
         else{
        //for($i=1; $i<=$No ; $i++)
        //{   
              Cpanel::create( [ 
                               'PurchaseOrderNo'=>$request->PurchaseOrderNo,
                               'PODate'=>$request->PODate,
                               'No'=>$request->No,
                               'itemDescription'=>$request->itemDescription[$i],
                               'Make'=>$request->Make[$i],
                               'Quantity'=>$request->Quantity[$i],
                               'Rate'=>$request->Rate[$i],
                               'Gross'=>$request->Gross[$i],
                               'Tax'=>$request->Tax[$i],
                               'NetAmount'=>$request->NetAmount[$i],
                               'RTax'=>$request->RTax[$i],
                               'Type'=>$request->Type[$i],
                               'ChalanNo' =>$request->ChalanNo[$i],
                               'ChalanDate' => $request->ChalanDate[$i],
                               'ReceivedOn' => $request->ReceivedOn[$i],
                               'ReceivedBy' => $request->ReceivedBy[$i],
                               'FinancialYear' => $request->FinancialYear,
                               'CurrentStatus' =>$request->CurrentStatus,
                               'ItemLocation' => $request->ItemLocation,
                               'EntryDate' => $request->EntryDate,
                               ] );

        }
      }
         $cpanels=Cpanel::where('PurchaseOrderNo',$request->PurchaseOrderNo)->get();
         $one=Cpanel::where('PurchaseOrderNo',$request->PurchaseOrderNo)->first();
         return  view('search.after_search',['cpanels'=>$cpanels ,'one'=>$one , 'user'=>$user]);
    
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($PurchaseOrderNo , $user_id)
    {   $user = User::where('user_id',$user_id)->first();
        $cpanels = Cpanel::where('PurchaseOrderNo',$PurchaseOrderNo)->get();
        $one = Cpanel::where('PurchaseOrderNo',$PurchaseOrderNo)->first();
       return view('forms.edit',['cpanels'=>$cpanels,'one'=>$one , 'user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update3(Request $request, $PurchaseOrderNo , $user_id)
    {    $user = User::where('user_id',$user_id)->first();
         $ones = Cpanel::where('PurchaseOrderNo',$PurchaseOrderNo)->first();
         $No = $request->No;
          for($i=1; $i<=$No ; $i++)
          {
            Cpanel::where('id', $ones->id++)->update( [ 
                               'PurchaseOrderNo'=>$request->PurchaseOrderNo,
                               'PODate'=>$request->PODate,
                               'No'=>$request->No,
                               'itemDescription'=>$request->itemDescription[$i],
                               'Make'=>$request->Make[$i],
                               'Quantity'=>$request->Quantity[$i],
                               'Rate'=>$request->Rate[$i],
                               'Gross'=>$request->Gross[$i],
                               'Tax'=>$request->Tax[$i],
                               'NetAmount'=>$request->NetAmount[$i],
                               'RTax'=>$request->RTax[$i],
                               'Type'=>$request->Type[$i],
                               'ChalanNo' =>$request->ChalanNo[$i],
                               'ChalanDate' => $request->ChalanDate[$i],
                               'ReceivedOn' => $request->ReceivedOn[$i],
                               'ReceivedBy' => $request->ReceivedBy[$i],
                               'FinancialYear' => $request->FinancialYear,
                               'CurrentStatus' =>$request->CurrentStatus,
                               'ItemLocation' => $request->ItemLocation,
                               'EntryDate' => $request->EntryDate,


                             ] );
      }
       $cpanels = Cpanel::where('PurchaseOrderNo',$PurchaseOrderNo)->get();
       $one = Cpanel::where('PurchaseOrderNo',$PurchaseOrderNo)->first();
      return view('forms.likeafter_search',['cpanels'=>$cpanels,'one'=>$one , 'user'=>$user]);
     
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy1(Request $request , $id, $PurchaseOrderNo , $user_id)
    {    $user = User::where('user_id',$user_id)->first();
    
         $cpanels = Cpanel::where('id',$id)->first();
if($cpanels){
          $Iddd = Cpanel::where('PurchaseOrderNo',$PurchaseOrderNo)->first(['id']);
          $Idd = $Iddd->id;
        $nn = Cpanel::where('PurchaseOrderNo',$PurchaseOrderNo)->first(['No']);
        $No = $nn->No;

        for($i=1; $i<=$No; $i++)
        {
          $Noo = Cpanel::where('id',$Idd)->first();
         $Nooo = $Noo->No -1 ;
           
          Cpanel::where('id', $Idd++)->update( [
            'No'=>$Nooo,
          ]);
         
        }
         Cpanel::destroy($id);
       }
         $PO = Cpanel::where('PurchaseOrderNo',$PurchaseOrderNo)->get();
          
          return view('delete.del' , ['user'=>$user]);
         
    }
    public function destroy2(Request $request , $PurchaseOrderNo , $user_id)
    {    $user = User::where('user_id',$user_id)->first();
         $cpanels = Cpanel::where('PurchaseOrderNo',$PurchaseOrderNo)->get();
         
         //Cpanel::destroy($id);
          foreach($cpanels as $cpanel) {
        $cpanel->delete( ['PurchaseOrderNo'=>$request->PurchaseOrderNo,
                              'PODate'=>$request->PODate,
                              'No'=>$request->No,
                              'itemDescription'=>$request->itemDescription,
                              'Make'=>$request->Make,
                              'Quantity'=>$request->Quantity,
                              'Rate'=>$request->Rate,
                               'Gross'=>$request->Gross,
                               'Tax'=>$request->Tax,
                               'NetAmount'=>$request->NetAmount,
                               'RTax'=>$request->RTax,
                               'Type'=>$request->Type,
                               'ChalanNo' =>$request->ChalanNo,
                               'ChalanDate' => $request->ChalanDate,
                               'ReceivedOn' => $request->ReceivedOn,
                               'ReceivedBy' => $request->ReceivedBy,
                               'FinancialYear' => $request->FinancialYear,
                               'CurrentStatus' =>$request->CurrentStatus,
                               'ItemLocation' => $request->ItemLocation,
                               'EntryDate' =>$request->EntryDate


                             ] );
      }
         
       return view('delete.del' , ['user'=>$user]);
    }
    


//profile
     public function profileindex(Request $request)
    { 
         $user=Auth::user()->user_id;
          return redirect('profile/'.$user);
    }
     public function profile($user_id)
     {    
        
        $user = User::where('user_id',$user_id)->first();
        return view('admin.layout',compact('user'));
         
    }


     
    

//search
    public function searchfirst($user_id)
    {  $user = User::where('user_id',$user_id)->first();
         return  view('search.search',['user'=>$user]);
      }
    public function search(Request $request , $user_id)
    {  $user = User::where('user_id',$user_id)->first();
      
       $str = $request->Search;
         $value =$request->optionsRadios;
         
         if($value=="PurchaseOrderNo")
         {
         $cpanels=Cpanel::where($value,'LIKE',$str)->get();
         $one=Cpanel::where($value,'LIKE',$str)->first();
         return  view('search.after_search',['cpanels'=>$cpanels,'one'=>$one ,'user'=>$user]);
         }
         elseif($value!="All")
         {  //return redirect('cpanel222/'.$user->user_id);
        $cpanels=Cpanel::where($value,'LIKE',$str)->get();
           //$cpanels=Cpanel::where($value,'LIKE',$str)->get();
         //return  view('new.index',['cpanels'=>$cpanels ,'user'=>$user]);
         return  view('search.after_search2',['cpanels'=>$cpanels ,'user'=>$user]);
         }
         else
         {//$cpanels=Cpanel::simplePaginate(5);
          //redirect('/cpanel/{$user->user_id}');
           return redirect('cpanel/'.$user->user_id);
          //return  view('new.index',['cpanels'=>$cpanels ,'user'=>$user]);
         }
    }

    function showPO()
    {      $txt=$_REQUEST['txt'];
    echo $txt;
           $search=Cpanel::distinct()->get([$txt]);

      echo "<option value=''>SELECT</option>";
        
        foreach ($search as $s) {
            echo '<option value="'.$s->$txt.'">'.$s->$txt.'</option>';
            
                 }  
     }

      function showId()
    {         
              
         $id = User::orderBy('created_at', 'desc')->first();
       $i = $id->id;
       $new = $i + 1;
       echo 'CEG'.$new ;
    }

     //mydetail
      public function mydetail($user_id){
      $user = User::where('user_id',$user_id)->first();
      return view('new.mydetail',compact('user'));
                       }   

     public function edit2($id)
    {
    $user = User::find($id);
       return view('new.edit', compact('user'));
        
    } 
     public function update2(Request $request, $id)
    {
        $user = User::find($id);
        $password=bcrypt($request->password);
      //  $user->update($request->all());
        $user->update([
                      'name'=>$request->name,
                      'user_id'=>$request->user_id,
                      'email'=>$request->email,
                      'Address'=>$request->Address,
                      'dob'=>$request->dob,
                      'Contact_no'=>$request->Contact_no,
                      'password'=>$password
                      ]);
         return  view('new.urdetail', compact('user'));
    }
//group

     public function update1(Request $request, $id ,$user_id)
    {   $all = User::where('user_id',$user_id)->first();
        $userss = User::find($id);
        $userss->update($request->all());
        $users=User::simplePaginate(10);
        return view('new.group' , ['users'=>$users , 'all'=>$all]);
                    
      
} 
     public function group($user_id)
    {   $all = User::where('user_id',$user_id)->first();
      
        $users=User::simplePaginate(10);
        
          return view('new.group' , ['users'=>$users , 'all'=>$all]);
                    
      

    }

    //allusers
     public function allusers($user_id)
    {    $all = User::where('user_id',$user_id)->first();
      
        $users=User::simplePaginate(10);
        return view('new.allusers' , ['users'=>$users , 'all'=>$all]);
                    

    }
     public function delete_user($user_id)
    {   $all = User::where('user_id',$user_id)->first();
      
        $users=User::simplePaginate(10);
        return view('new.delete_user' , ['users'=>$users , 'all'=>$all]);
    }

    public function destroy_user(Request $request , $id , $user_id)
    { $userss = User::where('id',$id)->get();
         $all = User::where('user_id',$user_id)->first();
         User::destroy($id);
         $users=User::simplePaginate(10);
         return  view('new.allusers',['users'=>$users , 'all'=>$all]);
    
       
    }
//edit
    public function editsearch($user_id)
    { $user = User::where('user_id',$user_id)->first();
      
     $PO=Cpanel::distinct()->get(['PurchaseOrderNo']);
      
      return  view('forms.likesearch',['PO'=>$PO, 'user'=>$user]);
   }
     public function likesearch(Request $request , $user_id)
    {    $user = User::where('user_id',$user_id)->first();
         $PurchaseOrderNo = $request->PurchaseOrderNo;
          
         $cpanels=Cpanel::where('PurchaseOrderNo',$PurchaseOrderNo)->get();
         $one=Cpanel::where('PurchaseOrderNo',$PurchaseOrderNo)->first();
      
      
        return  view('forms.likeafter_search',['cpanels'=>$cpanels ,'one'=>$one , 'user'=>$user]);
   }
   
   public function delsearch(Request $request , $user_id)
    {    $user = User::where('user_id',$user_id)->first();
         $PurchaseOrderNo = $request->PurchaseOrderNo;
          
         $cpanels=Cpanel::where('PurchaseOrderNo',$PurchaseOrderNo)->get();
         $one=Cpanel::where('PurchaseOrderNo',$PurchaseOrderNo)->first();
      
      
        return  view('delete.delafter_search',['cpanels'=>$cpanels ,'one'=>$one , 'user'=>$user]);
   }
   
    public function deleteesearch($user_id)
    { 
         $user = User::where('user_id',$user_id)->first();
          
         $PO=Cpanel::distinct()->get(['PurchaseOrderNo']);
      
      return  view('delete.delsearch',['PO'=>$PO , 'user'=>$user]);
   }


 public function update_avatar(Request $request , $user_id)
    {    

$target_dir = "uploads/avatars/";
$target_file = $target_dir . basename($_FILES["avatar"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["avatar"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["avatar"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["avatar"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

echo $filenm=$_FILES['avatar']['name'];
User::where('user_id',$request->user_id)->update(['avatar'=>$filenm]);
return redirect('/mydetail/'.$request->user_id);


}
public function update_avatar2(Request $request , $user_id)
    {    

$target_dir = "uploads/avatars/";
$target_file = $target_dir . basename($_FILES["avatar"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["avatar"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["avatar"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["avatar"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

echo $filenm=$_FILES['avatar']['name'];
User::where('user_id',$request->user_id)->update(['avatar'=>$filenm]);
return redirect('/profile/'.$request->user_id);


}
}
