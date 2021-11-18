<?php

namespace App\Controllers;

use App\Models\PakageModel;
use App\Models\SliderModel;

class AdminPakageController extends BaseController
{
    protected $pakageModel;
    public function __construct()
    {
        $this->pakageModel = new PakageModel();
    }
    public function index()
    {
        $pakage = $this->pakageModel->orderBy('id', 'DESC')->findAll();
        $data = [
            'pakages' => $pakage
        ];
        return view('admin/pakage', $data);
    }

    public function store()
    {
        $fileImage = $this->request->getFile('image');
        $nameImage = $fileImage->getRandomName();
        $fileImage->move('images', $nameImage);

        $attr = $this->request->getVar();
        $attr['image'] = $nameImage;
        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        $this->pakageModel->save($attr);
        return redirect()->back();
    }

    public function edit($id)
    {
        $pakage = $this->pakageModel->find($id);
        $data = [
            'pakage' => $pakage
        ];
        return view('admin/e_pakage', $data);
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
        $this->pakageModel->update($id, $attr);
        return redirect()->to('/admin-pakage');
    }

    public function delete($id)
    {
        $pakage = $this->pakageModel->find($id);
        unlink('images/' . $pakage['image']);
        $this->pakageModel->delete($id);
        session()->setFlashdata('success', 'Data berhasil dihapus.');
        return redirect()->to('/admin-pakage');
    }
}
