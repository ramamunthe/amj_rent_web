<?php

namespace App\Controllers;

use App\Models\CarModel;
use App\Models\CategoryModel;

class AdminArmadaControlle extends BaseController
{
    protected $carModel;
    protected $categoryModel;

    public function __construct()
    {
        $this->carModel = new CarModel();
        $this->categoryModel = new CategoryModel();
    }

    public function login()
    {
        if (session()->get('login') == TRUE) {
            return redirect()->to('/admin');
        } else {
            return view('admin/login');
        }
    }

    public function verify()
    {
        $username = 'asd';
        $password = 'asd';

        $inpUsername = $this->request->getVar('username');
        $inpPassword = $this->request->getVar('password');

        if ($inpUsername == $username && $inpPassword == $password) {
            session()->set([
                'login' => TRUE,
            ]);
            session()->setFlashdata('success', 'Berhasil masuk...');
            return redirect()->to('/admin');
        } else {
            session()->setFlashdata('error', 'Username atau password salah!');
            return redirect()->to('/admin-login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/admin-login');
    }

    public function index()
    {
        if (session()->get('login') == TRUE) {
            $car = $this->carModel->orderBy('car_id', 'DESC')->findAll();
            $data = [
                'cars' => $car
            ];
            return view('admin/armada', $data);
        } else {
            return redirect()->to('/admin-login');
        }
    }

    public function create()
    {
        $category = $this->categoryModel->orderBy('category_id', 'ASC')->findAll();
        $data = [
            'categories' => $category
        ];
        return view('admin/c_armada', $data);
    }

    public function store()
    {
        $fileImage = $this->request->getFile('image');
        $nameImage = $fileImage->getRandomName();
        $fileImage->move('images', $nameImage);

        $attr = $this->request->getVar();
        $attr['image'] = $nameImage;
        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        $this->carModel->save($attr);
        return redirect()->to('/admin');
    }

    public function edit($id)
    {
        $category = $this->categoryModel->orderBy('category_id', 'ASC')->findAll();
        $cars = $this->carModel->find($id);
        $data = [
            'car' => $cars,
            'categories' => $category
        ];
        return view('admin/e_armada', $data);
    }

    public function update($id)
    {
        $fileImage = $this->request->getFile('image');
        if ($fileImage->getError() == 4) {
            $nameImage = $this->request->getVar('gambarLama');
        } else {
            $nameImage = $fileImage->getRandomName();
            $fileImage->move('images', $nameImage);
            unlink('images/' . $this->request->getVar('gambarLama'));
        }
        $attr = $this->request->getVar();
        $attr['image'] = $nameImage;
        session()->setFlashdata('success', 'Data berhasil diubah');
        $this->carModel->update($id, $attr);
        return redirect()->to('/admin');
    }

    public function delete($id)
    {
        $car = $this->carModel->find($id);
        unlink('images/' . $car['image']);
        $this->carModel->delete($id);
        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to('/admin');
    }
}
