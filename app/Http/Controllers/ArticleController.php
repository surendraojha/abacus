<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Artical;

use Carbon\Carbon;

use File;
class ArticleController extends Controller{
    
    //admin part
    public function index(){

    	$article = Artical::all()->sortByDesc('updated_at');

    	return view('admin.article-listing',compact('article'));
    }

    public function create(){

    	return view('admin.create-article');
    }



    public function store(Request $request){

    	$rules = [
    		'title' =>'required|min:5',
    		'content' => 'required|min:50',
            'photo' => 'mimes:jpeg,jpg,png,gif|max:10000'
    	];

    	$request->validate($rules);

    	$article = new Artical;

    	$article->title = $request->title;

    	$article->content = $request->content;

    	$user = auth()->user();

    	$article->author = $user->username; 

        //code for file upload 

        if ($request->hasFile('photo')) {
            /*echo 'hii';

            die;*/
            $imageName = date('ymdhis').'.'.request()->photo->getClientOriginalExtension();

            $uploadedImage = $request->file('photo');

            $article->photo = $imageName;

            $uploadedImage->move(public_path('uploads'), $imageName);
        }    

    	$article->save();

        Session::flash('message', 'Article created successfully!!'); 

        Session::flash('alert-class', 'alert-success'); 

    	return redirect('admin/article-listing');

    }

    public function edit($id){

    	$article = Artical::find($id);

    	return view('admin.edit-article',compact('article'));
    }

    public function update(Request $request){

    	$rules = [
            'title' =>'required|min:5',
            'content' => 'required|min:50',
            'photo' => 'mimes:jpeg,jpg,png,gif|max:10000'
        ];

    	$request->validate($rules);

    	$article = Artical::find($request->id);

    	$article->title = $request->title;

    	$article->content = $request->content;

		$article->updated_at = Carbon::now();

        $old_file='';

        if ($request->hasFile('photo')) {

            //delete old file
            $old_file = $article->photo;


            $old_file=public_path().'\\uploads\\'.$old_file;

            if (File::exists($old_file)) {

                File::delete($old_file);
            }

            

            $imageName = date('ymdhis').'.'.request()->photo->getClientOriginalExtension();

            $uploadedImage = $request->file('photo');

            $article->photo =   $imageName;

            $uploadedImage->move(public_path('uploads'), $imageName);
        }

		$article->save(['timestamps' => FALSE]);

        Session::flash('message', 'Article updated successfully!!'); 

        Session::flash('alert-class', 'alert-success'); 
    	return redirect('admin/article-listing');

    }

    public function deleteArticle(Request $request){

    	$rules =[
   			'check' => 'required'
   		];

   		$request->validate($rules);


   		foreach ($request->check as $value) {

   			$article = Artical::find($value);

            $old_file=public_path().'\\uploads\\'.$article->photo;

            if (File::exists($old_file)) {

                File::delete($old_file);
            }
   			$article->delete();
   		}

         Session::flash('message', 'Article deleted successfully!!'); 

        Session::flash('alert-class', 'alert-success'); 
   		return redirect('admin/article-listing');
    }
}
