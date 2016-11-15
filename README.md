## Easy CRUD

Allow you to create a simple CRUD controller

##Installation

````
composer require efront/ease_curd
````

After install this package you have to set the service provider on your config/app.php file

````
EFrontSA\EasyCRUD\ServiceProvider::class,
````

Then you just need to publish files ! Copy and paste it

````
php artisan vendor:publish --provider="EFrontSA\EasyCRUD\ServiceProvider"
````

That's it!


##How to use

#Create Controller

* you have to use BasicCRUDTrait trait in your controller and define some variables in your constructor
* Inject you model into your constructor like `City`
* change `$this->view` to where your views are located. the trait look for (index, create, edit) views.

Ex. :
````
class CityController extends Controller
{
    use \EFrontSA\EasyCRUD\Models\BasicCRUDTrait;

    public function __construct(City $model) // You can change the model type hint to update the model in this controller
    {
        $this->model = $model;
        $this->view = 'cities'; // where the views located. the trait look for (index, create, edit) views.

        app()->bind(CRUDRequest::class, CityRequest::class); // bind your request with CRUDRequest interface
    }
}
````


#Create Form Request

Your form request should implement this interface `\EFrontSA\EasyCRUD\Requests\CRUDRequest`

````
class CityRequest extends Request implements CRUDRequest{

}
````