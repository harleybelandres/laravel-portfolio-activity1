<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
$name = 'John Harley Paciente Belandres'; // Replace with YOUR name
$course = 'Bachelor of Science in Information Technology';
$university = 'Central Mindanao University'; // Replace with YOUR university
$hobbies = ['Reading', 'Traveling', 'Coding', 'Gaming', 'Photography', 'Music', 'Sports', 'Cooking', 'Hiking', 'Drawing'];
return view('about', [
'name' => $name,
'course' => $course,
'university' => $university
]);
})->name('about');

Route::get('/projects', function () {
$projects = [
['title' => 'Online Voting App', 'description' => 'cmu campus based online voting app'],
['title' => 'Online marketplace', 'description' => 'cmu campus based marketplace'],
];
return view('projects', ['projects' => $projects]);
})->name('projects');

Route::get('/contact', function () {
$email = 's.belandres.johnharley@cmu.edu.ph'; // Replace with YOUR email
$phone = '+63 935 9983 575'; // Replace with YOUR phone
$Facebook= 'Harley Paciente Belandres'; // Replace with YOUR Facebook username

return view('contact', [
'email' => $email,
'phone' => $phone
,'Facebook' => $Facebook
]);
})->name('contact');

route::get('/hobbies', function () {
$hobbies = ['Reading', 'Traveling', 'Coding', 'Gaming', 'Photography', 'Music', 'Sports', 'Cooking', 'Hiking', 'Drawing'];
return view('hobbies', ['hobbies' => $hobbies]);
})->name('hobbies');    
