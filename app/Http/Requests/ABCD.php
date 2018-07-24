<?php
namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class ABCD extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
         $rules = [
         'PurchaseOrderNo' => 'required|max:50|string',
         'PODate' => 'bail|required|date|before_or_equal:today',
         'No'=>'bail|required|numeric',
         'FinancialYear' => 'required',
         'CurrentStatus' => 'required',
         'ItemLocation' => 'required',
         'EntryDate' => 'required|date|before_or_equal:today',
               ];

  foreach($this->request->get('itemDescription') as $key => $No)
  {
    $rules['itemDescription.'.$key] ='required|string|max:200';
  }
 foreach($this->request->get('Make') as $key => $No)
  {
    $rules['Make.'.$key] =  'required|string';
  }
  foreach($this->request->get('Quantity') as $key => $No)
  {
    $rules['Quantity.'.$key] =  'required|numeric';
  }
   foreach($this->request->get('Rate') as $key => $No)
  {
    $rules['Rate.'.$key] = 'required|numeric';
  }
   foreach($this->request->get('Gross') as $key => $No)
  {
    $rules['Gross.'.$key] =  'required|numeric';
  }
   foreach($this->request->get('Tax') as $key => $No)
  {
    $rules['Tax.'.$key] = 'required|numeric';
  }
   foreach($this->request->get('NetAmount') as $key => $No)
  {
    $rules['NetAmount.'.$key] =  'required|numeric';
  }
   foreach($this->request->get('RTax') as $key => $No)
  {
    $rules['RTax.'.$key] = 'required|string';
  }
   foreach($this->request->get('Type') as $key => $No)
  {
    $rules['Type.'.$key] =  'required|string';
  }
   foreach($this->request->get('ChalanNo') as $key => $No)
  {
    $rules['ChalanNo.'.$key] =  'required|string';
  }
   foreach($this->request->get('ChalanDate') as $key => $No)
  {
    $rules['ChalanDate.'.$key] = 'required|date|before_or_equal:today';
  }
   foreach($this->request->get('ReceivedOn') as $key => $No)
  {
    $rules['ReceivedOn.'.$key] = 'required|date|before_or_equal:today';
  }
   foreach($this->request->get('ReceivedBy') as $key => $No)
  {
    $rules['ReceivedBy.'.$key] = 'required|string|max:50';
  }

   
         
  return $rules;
 }
}
