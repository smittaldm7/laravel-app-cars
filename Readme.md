#  MVC App Cars

Just a very basic first mvc app using laravel
https://selftaughtcoders.com/from-idea-to-launch/lesson-17/laravel-5-mvc-application-in-10-minutes/

To create a model
php artisan make:model Car

To create migration file for create car table
php artisan make:migration create_cars_table

To create model and create table migration in 1 command
php artisan make:model Car --migration


For any changes in a table structure an additional migration file can be created with the approriate code for the up() and down() method.
For example adding a column, the Schema::table method is used and 
https://laravel.com/docs/5.0/schema

To generate a resource controller for the resource Car, the following command can be run
php artisan make:controller CarController --resource


To generate a set of routes associated with the Car resource the following command is used. This generates a bunch of routes to the car controller.
Route::resource('cars', 'CarController'); 

Verb		URI					Controller		Action		
GET			/cars				CarController	index		
GET			/cars/create						create		
POST		/cars								store		
GET			/cars/{car}							show		
GET			/cars/{car}/edit					edit		
PUT/PATCH	/cars/{car}							update		
DELETE		/cars/{car}							destroy		

