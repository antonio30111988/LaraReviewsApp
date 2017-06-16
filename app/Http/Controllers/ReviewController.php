<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

/**
* Review Class Controller
* 
* @author Antonio Lolić
* @license   Salonasoft 2017
* 
*/
class ReviewController extends Controller
{
    /**
	* Class constructor
	* 
	* @param Request object
	* @param Review object
	* 
	*/
    public function __construct(Request $resquests,Review $reviews){
    	$this->reviews=$reviews;
    	$this->requests=$requests;
    } 
    /**
	* Show listof reviews
	* 
	* @return View template
	* 
	*/
    public function index(){
    	$tasks=$this->reviews->all(); 

    	return view('pages.index',compact('tasks'));
    }

    /**
	* GET- Show individual review
	* 
	* @param  $id of review
	* @return View template
	* 
	*/
    public function show($id){
    	//get review by id
    	$tasks=Review::findOrFail($id);

    	return view('pages.show',compact('tasks'));
    }

    /**
	* GET-CCreate review
	* 
	* @return View template create form
	*/
    public function create(){
    	return view('pages.create');
    }

     /**
	* POST- Store new review to DB
	* 
	* @param  Request object
	* @return Success message
	*/
    public function store(Request $request){
    	//make object and save
    	$review = new Review();
		$review->category = $request->category;
		$review->title = $request->title;
		$review->content = $request->content;
		$review->rating = $request->rating;
		$review->save();

		return "Success";
    }

    /**
	* GET- Edit reviews page
	* 
	* @return Edit reviews separate form display
	*/
    public function editreview(){
    	$tasks=$this->reviews->get();
    	//return all $tasks;
 		return view('pages.editreview', compact('tasks'));
    }

    /**
	* GET -Edit single review for update
	* 
	* @param $id of review 
	* @return View of form for update
	*/
    public function edit($id){
    	$tasks=$this->reviews->find($id);

    	//return form of matched review
 		return view('pages.edit', compact('tasks'));
    }

    /**
	* PUT/PATCH Update post request
	* 
	* @param $id of review  
	* @return Success message
	*/
    public function update($id){
    	$tasks=$this->reviews->find($id);

    	//get request variables from constructor instead direct dependeny method injection
    	$request=$this->requests;

    	//update review object and save
    	$review->category = $request->category;
    	$review->title = $request->title;
		$review->content = $request->content;
		$review->rating = $request->rating;

		$review->save();
		return "Success";
    }

    /**
	* DELETE Remove review
	* 
	* @param $id of review  
	* @return Success message
	*/
    public function remove($id){
    	$task=Review::destroy($id);

		return "Success";
    }
}
