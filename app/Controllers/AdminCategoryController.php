<?php

namespace App\Controllers;

use App\Models\CategoryModel;

class AdminCategoryController extends BaseController
{
    protected $categoryModel;
    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
    }
    public function index()
    {
        $category = $this->categoryModel->orderBy('category_id', 'DESC')->findAll();
        $data = [
            'categories' => $category,
        ];
        return view('admin/category', $data);
    }

    public function store()
    {
        $attr = $this->request->getVar();
        $this->categoryModel->save($attr);
        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->back();
    }

    public function update($id)
    {
        $attr = $this->request->getVar();
        $this->categoryModel->update($id, $attr);
        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect()->back();
    }

    public function delete($id)
    {
        $this->categoryModel->delete($id);
        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->back();
    }
}
