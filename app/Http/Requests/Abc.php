<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest as Abc;

class Abc extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
         'PurchaseOrderNo' => 'required|string|max:50|string',
         'PODate' => 'required|date|before_or_equal:today',
         'No'=>'required|numeric',

         'FinancialYear' => 'required|string',
         'CurrentStatus' => 'required|string',
         'ItemLocation' => 'required|string',
         'EntryDate' => 'required|date|before_or_equal:today',
               ];

  foreach($this->request->get('itemDescription') as $key => $val)
  {
    $rules['itemDescription.'.$key] ='required|string|max:200',
  }
 foreach($this->request->get('Make') as $key => $val)
  {
    $rules['Make.'.$key] =  'required|string',
  }
  foreach($this->request->get('Quantity') as $key => $val)
  {
    $rules['Quantity.'.$key] =  'required|numeric',
  }
   foreach($this->request->get('Rate') as $key => $val)
  {
    $rules['Rate.'.$key] = 'required|numeric',
  }
   foreach($this->request->get('Gross') as $key => $val)
  {
    $rules['Gross.'.$key] =  'required|numeric',
  }
   foreach($this->request->get('Tax') as $key => $val)
  {
    $rules['Tax.'.$key] = 'required|numeric',
  }
   foreach($this->request->get('NetAmount') as $key => $val)
  {
    $rules['NetAmount.'.$key] =  'required|numeric',
  }
   foreach($this->request->get('RTax') as $key => $val)
  {
    $rules['RTax.'.$key] = 'required|string',
  }
   foreach($this->request->get('Type') as $key => $val)
  {
    $rules['Type.'.$key] =  'required|string',
  }
   foreach($this->request->get('ChalanNo') as $key => $val)
  {
    $rules['ChalanNo.'.$key] =  'required|string|',
  }
   foreach($this->request->get('ChalanDate') as $key => $val)
  {
    $rules['ChalanDate.'.$key] = 'required|date|before_or_equal:today',
  }
   foreach($this->request->get('ReceivedOn') as $key => $val)
  {
    $rules['ReceivedOn.'.$key] = 'required|date|before_or_equal:today',
  }
   foreach($this->request->get('ReceivedBy') as $key => $val)
  {
    $rules['ReceivedBy.'.$key] = 'required|string|max:50|alpha',
  }
  return $rules;
        
    }
}
