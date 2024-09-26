<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

use App\Models\user;
use App\Models\newsletter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/Services', function () {
    return view('serve');
});

Route::get('/Contact Us', function () {
    return view('contact');
});

Route::get('/SignIn', function () {
    return view('signin');
});

Route::get('/Menu', function () {
    return view('menu');
});
Route::get('/Decoration', function () {
    return view('decor');
});
Route::get('/Catering', function () {
    return view('catering');
});
Route::get('/Birthday', function () {
    return view('birthday');
});

Route::post('/Sign-up', function () {
    
    $validator = Validator::make(request()->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|string|min:6',
        'phone' => 'required|string|max:15',
    ]);
    
    User::create([
        'name' => request('name'),
        'email' => request('email'),
        'password' => bcrypt(request('password')), // Hash the password for security
        'contact' => request('phone'),
    ]);

    return redirect('/');



});

Route::post('/SignIn', function () {
    $email = request('email');
    $password = request('password');

    $tableExist = Schema::connection('mysql')->hasTable('users');

    if ($tableExist) {
        $user = DB::table('users')
            ->select(['email', 'password'])
            ->where('email', $email)
            ->first();

        if ($user !== null && Hash::check($password, $user->password)) {
            // Password is correct
            echo "<script>alert('Login Successfull');</script>";
            return redirect('/');
            
        } else {
            echo "<script>
            alert('Incorrect Email or Password'); 
           </script>";
            // Incorrect email or password
            return redirect('SignIn');
        }
    }
});
    



Route::post('/Subscribe', function(){
    $email = request('email');
    $tableExist=Schema::connection('mysql')->hasTable('newsletter');
    if($tableExist){
    DB::table('newsletter')->insert(['email'=>$email]);
    }
    return redirect('./');
});


?>