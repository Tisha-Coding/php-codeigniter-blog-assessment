<?php

namespace App\Controllers;

use App\Models\AdminModel;
use CodeIgniter\Controller;

class AdminAuthController extends Controller
{
    public function index()
    {
        return view('admin/auth');
    }

    public function signup()
    {
        $adminModel = new AdminModel();

        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Validate Name (Only letters)
        if (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
            return redirect()->back()->with('error', 'Name can only contain letters and spaces.');
        }

        // Check if email already exists
        if ($adminModel->where('email', $email)->first()) {
            return redirect()->back()->with('error', 'Email already exists.');
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $adminModel->save([
            'name' => $name,
            'email' => $email,
            'password' => $hashedPassword
        ]);

        return redirect()->to('/admin')->with('success', 'Signup successful! Please login.');
    }

    public function login()
    {
        $adminModel = new AdminModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $adminModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            session()->set('admin_id', $user['id']);
            session()->set('admin_name', $user['name']);
            return redirect()->to('/admin/home');
        }

        return redirect()->back()->with('error', 'Invalid credentials.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/admin');
    }
}
