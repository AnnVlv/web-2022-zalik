<?php


class EmployerController extends Controller
{
   /**
    * Get the employer.
    *
    * @param  int  $id
    * @return \Illuminate\View\View
    */
   public function getEmployer($id)
   {
       return view('employer.view', [
           'employer' => Employer::findOrFail($id)
       ]);
   }
 
   /**
    * Create a employer.
    *
    * @return \Illuminate\View\View
    */
   public function createEmployer($name, $address, $card_code)
   {
       return view('employer.created', [
           'employer' => Employer::create($name, $address, $card_code)
       ]);
   }
 
   /**
    * Update a employer by it's id.
    *
    * @return \Illuminate\View\View
    */
   public function updateEmployer($id, $name, $address, $card_code)
   {
       return view('employer.updated', [
           'employer' => Employer::update($id, $name, $address, $card_code)
       ]);
   }
 
   /**
    * Remove a employer by it's id.
    *
    * @param  int  $id
    * @return \Illuminate\View\View
    */
   public function removeEmployer($id)
   {
       return view('employer.removed', [
           'employer' => Employer::delete($id)
       ]);
   }
}
