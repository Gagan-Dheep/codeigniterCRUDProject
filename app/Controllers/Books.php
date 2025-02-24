<?php

namespace App\Controllers;

use App\Models\BookModel;
use CodeIgniter\Controller;

class Books extends Controller
{
    public function index()
    {
        $model = new BookModel();
        $data['books'] = $model->findAll();

        return view('books/index', $data);
    }

    public function create()
    {
        return view('books/create');
    }

    public function store()
    {
        $model = new BookModel();

        $data = [
            'title' => $this->request->getPost('title'),
            'author' => $this->request->getPost('author'),
            'published_date' => $this->request->getPost('published_date'),
        ];

        $model->save($data);

        return redirect()->to('/');
    }

    public function edit($id)
    {
        $model = new BookModel();
        $data['book'] = $model->find($id);

        return view('books/edit', $data);
    }

    public function update($id)
    {
        $model = new BookModel();

        $data = [
            'title' => $this->request->getPost('title'),
            'author' => $this->request->getPost('author'),
            'published_date' => $this->request->getPost('published_date'),
        ];

        $model->update($id, $data);

        return redirect()->to('/');
    }

    public function delete($id)
    {
        $model = new BookModel();
        $model->delete($id);

        return redirect()->to('/');
    }
}
?>