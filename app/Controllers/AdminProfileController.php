<?php

namespace App\Controllers;

use App\Models\UserModel;

class AdminProfileController extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }
    public function index()
    {
        $id = 1;
        $user = $this->userModel->find($id);
        $data = [
            'user' => $user,
        ];
        return view('admin/profile', $data);
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
        $this->userModel->update($id, $attr);
        return redirect()->to('/admin-profil');
    }
}
