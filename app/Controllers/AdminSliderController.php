<?php

namespace App\Controllers;

use App\Models\SliderModel;

class AdminSliderController extends BaseController
{
    protected $sliderModel;
    public function __construct()
    {
        $this->sliderModel = new SliderModel();
    }
    public function index()
    {
        $slider = $this->sliderModel->orderBy('id', 'DESC')->findAll();
        $data = [
            'sliders' => $slider
        ];
        return view('admin/slider', $data);
    }

    public function store()
    {
        $fileImage = $this->request->getFile('image');
        $nameImage = $fileImage->getRandomName();
        $fileImage->move('images', $nameImage);

        $attr = $this->request->getVar();
        $attr['image'] = $nameImage;
        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        $this->sliderModel->save($attr);
        return redirect()->back();
    }

    public function edit($id)
    {
        $slider = $this->sliderModel->find($id);
        $data = [
            'slider' => $slider
        ];
        return view('admin/e_slider', $data);
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
        $this->sliderModel->update($id, $attr);
        return redirect()->to('/admin-slider');
    }

    public function delete($id)
    {
        $slider = $this->sliderModel->find($id);
        unlink('images/' . $slider['image']);
        $this->sliderModel->delete($id);
        session()->setFlashdata('success', 'Data berhasil dihapus.');
        return redirect()->to('/admin-slider');
    }
}
