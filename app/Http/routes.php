<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Task;
use Illuminate\Http\Request;

/*顯示所有任務*/

Route::get('/', function () {
    $taskssss= Task::orderBy("created_at","asc")->get();

    return view('task',[ "abc"=>$taskssss]);

});


/*接收表單來新增任務*/

Route::post('/task', function (Request $request) {
    $validator = Validator::make($request->all(),["name"=>"required| max:50"]);

    if($validator->fails()){
// return "資料錯誤";
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $task=new Task;
    $task->name=$request->name;
    $task->save();
    return redirect("/");
});

/*刪除任務*/
Route::delete('/task/{id}', function ($id) {
    Task::findOrFail($id)->delete();
    return redirect("/");
});