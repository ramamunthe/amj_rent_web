<?php

namespace App\Controllers;

use App\Models\CarModel;
use App\Models\CategoryModel;
use App\Models\CustomerModel;
use App\Models\PakageModel;
use App\Models\SliderModel;
use App\Models\UserModel;

class Home extends BaseController
{
    protected $userModel, $carModel, $categoryModel, $sliderModel, $customerModel, $pakageModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->carModel = new CarModel();
        $this->categoryModel = new CategoryModel();
        $this->sliderModel = new SliderModel();
        $this->customerModel = new CustomerModel();
        $this->pakageModel = new PakageModel();
    }
    public function index()
    {
        $id = 1;
        $user = $this->userModel->find($id);
        $car = $this->carModel->findAll();
        $slider = $this->sliderModel->findAll();
        $data = [
            'cars' => $car,
            'sliders' => $slider,
            'user' => $user,
        ];
        return view('web/beranda', $data);
    }

    public function tentang()
    {
        $id = 1;
        $user = $this->userModel->find($id);
        $data = [
            'user' => $user,
        ];
        return view('web/tentang', $data);
    }

    public function pelanggan()
    {
        $id = 1;
        $user = $this->userModel->find($id);
        $customer = $this->customerModel->orderBy('id', 'DESC')->findAll();
        $data = [
            'user' => $user,
            'customers' => $customer
        ];
        return view('web/pelanggan', $data);
    }

    public function paket()
    {
        $id = 1;
        $user = $this->userModel->find($id);
        $pakage = $this->pakageModel->orderBy('id', 'DESC')->findAll();
        $data = [
            'user' => $user,
            'pakages' => $pakage
        ];
        return view('web/paket', $data);
    }

    public function armada()
    {
        $id = 1;
        $user = $this->userModel->find($id);
        $car = $this->carModel->orderBy('car_id')->findAll();
        $category = $this->categoryModel->orderBy('category_id')->findAll();
        $data = [

            'user' => $user,
            'cars' => $car,
            'categories' => $category
        ];
        return view('web/armada', $data);
    }

    public function category($id_category)
    {
        $id = 1;
        $user = $this->userModel->find($id);
        $car = $this->carModel->orderBy('car_id')->where('category_id', $id_category)->findAll();
        $category = $this->categoryModel->find($id_category);
        $data = [
            'user' => $user,
            'cars' => $car,
            'category' => $category,
        ];
        return view('web/category', $data);
    }
}
