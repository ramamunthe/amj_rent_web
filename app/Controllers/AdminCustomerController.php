<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class AdminCustomerController extends BaseController
{
    protected $customerModel;
    public function __construct()
    {
        $this->customerModel = new CustomerModel();
    }
    public function index()
    {
        $customer = $this->customerModel->orderBy('id', 'DESC')->findAll();
        $data = [
            'customers' => $customer
        ];
        return view('admin/customer', $data);
    }

    public function store()
    {
        $fileImage = $this->request->getFile('image');
        $nameImage = $fileImage->getRandomName();
        $fileImage->move('images', $nameImage);

        $attr = $this->request->getVar();
        $attr['image'] = $nameImage;
        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        $this->customerModel->save($attr);
        return redirect()->back();
    }

    public function edit($id)
    {
        $cutomer = $this->customerModel->find($id);
        $data = [
            'customer' => $cutomer
        ];

        return view('admin/e_cutomer', $data);
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
        session()->setFlashdata('success', 'Data berhasil diubah.');
        $this->customerModel->update($id, $attr);
        return redirect()->back();
    }

    public function delete($id)
    {
        $customer = $this->customerModel->find($id);
        unlink('images/' . $customer['image']);
        $this->customerModel->delete($id);
        session()->setFlashdata('success', 'Data berhasil dihapus.');
        return redirect()->to('/admin-customer');
    }
}
