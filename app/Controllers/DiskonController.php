<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DiskonModel;

class DiskonController extends BaseController
{
    protected $diskonModel;

    public function __construct()
    {
        $this->diskonModel = new DiskonModel();
    }

    public function index()
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('/home');
        }

        $data['diskon'] = $this->diskonModel->orderBy('tanggal', 'DESC')->findAll();
        return view('v_diskon', $data);
    }

    public function create()
    {
        return view('v_diskon_create');
    }

    public function store()
    {
        $tanggal = $this->request->getPost('tanggal');

        $existing = $this->diskonModel->where('tanggal', $tanggal)->first();
        if ($existing) {
            return redirect()->back()->withInput()->with('error', 'Diskon untuk tanggal ini sudah ada.');
        }

        $this->diskonModel->save([
            'tanggal'    => $tanggal,
            'nominal'    => $this->request->getPost('nominal'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to('/diskon')->with('success', 'Diskon berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data['diskon'] = $this->diskonModel->find($id);
        return view('v_diskon_edit', $data);
    }

    public function update($id)
    {
        $this->diskonModel->update($id, [
            'nominal'    => $this->request->getPost('nominal'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to('/diskon')->with('success', 'Diskon berhasil diupdate.');
    }

    public function delete($id)
    {
        $this->diskonModel->delete($id);
        return redirect()->to('/diskon')->with('success', 'Diskon berhasil dihapus.');
    }
}
