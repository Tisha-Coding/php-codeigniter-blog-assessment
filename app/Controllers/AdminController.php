<?php
namespace App\Controllers;

use App\Models\BlogModel;
use App\Models\ContactModel;

class AdminController extends BaseController {
    public function index() {
        $model = new BlogModel();
        $data['blogs'] = $model->findAll();
        return view('admin/list', $data);
    }

    public function add() {
        return view('admin/add');
    }

    public function store() {
        $model = new BlogModel();
        $model->save([
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
            'author' => $this->request->getPost('author'),
            'created_at' => date('Y-m-d H:i:s')
        ]);
        return redirect()->to('/admin/home')->with('success', 'Blog added successfully!');
    }

    public function edit($id) {
        $model = new BlogModel();
        $data['blog'] = $model->find($id);
        return view('admin/edit', $data);
    }

    public function update($id) {
        $model = new BlogModel();
        $model->update($id, [
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
            'author' => $this->request->getPost('author'),
        ]);
        return redirect()->to('/admin/home')->with('success', 'Blog updated successfully!');
    }

    public function delete($id) {
        $model = new BlogModel();
        $model->delete($id);
        return redirect()->to('/admin/home')->with('success', 'Blog deleted successfully!');
    }

    public function contact($id = null) {
        $model = new ContactModel();
    
        if ($id) {
            // Fetch single query by ID
            $data['query'] = $model->find($id);
    
            if (!$data['query']) {
                return redirect()->to('/admin/contact')->with('error', 'Query not found!');
            }
        } else {
            // Fetch all queries
            $data['queries'] = $model->findAll();
        }
    
        return view('admin/contact', $data);
    }

    public function respond() {
        // Get form data
        $query_id = $this->request->getPost('query_id');
        $user_query = $this->request->getPost('user_query');
        $admin_response = $this->request->getPost('admin_response');
    
        // Fetch the query by ID
        $model = new ContactModel();
        $query = $model->find($query_id);
    
        if (!$query) {
            return redirect()->to('/admin/contact')->with('error', 'Query not found!');
        }
    
        // Update the query with admin response
        $model->update($query_id, [
            'admin_response' => $admin_response,
            'responded_at' => date('Y-m-d H:i:s')
        ]);
    
        return redirect()->to('/admin/contact')->with('success', 'Response updated successfully!');
    }

    public function deleteContact($id) {
        $model = new ContactModel();
        $model->delete($id);
    
        return redirect()->to('/admin/contact')->with('success', 'Query deleted successfully!');
    }
}
