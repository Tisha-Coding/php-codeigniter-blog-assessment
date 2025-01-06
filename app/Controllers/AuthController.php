<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth_view');
    }

    public function signup()
    {
        // Get user input
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
    
        // Validate name (only letters and spaces, no numbers)
        if (!preg_match("/^[A-Za-z\s]+$/", $name)) {
            return redirect()->back()->with('error', 'Name can only contain letters and spaces.');
        }
    
        // Load the User model
        $userModel = new UserModel();
    
        // Check if the email already exists
        if ($userModel->where('email', $email)->first()) {
            return redirect()->back()->with('login_error', 'Email already registered.');
        }
    
        // Encrypt the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
        // Save user data
        $userModel->save([
            'name' => $name,
            'email' => $email,
            'password' => $hashedPassword
        ]);
    
        return redirect()->to('/')->with('login_success', 'Signup successful! You can now login.');
    }
    

    public function login()
    {
        // Get login input
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Load the User model
        $userModel = new UserModel();

        // Find the user by email
        $user = $userModel->where('email', $email)->first();

        // Check if user exists and verify password
        if ($user && password_verify($password, $user['password'])) {
            // Set session data
            session()->set('user_id', $user['id']);
            session()->set('user_name', $user['name']);
            return redirect()->to('/blog');
        }

        return redirect()->back()->with('login_error', 'Invalid login credentials.');
    }

    public function logout()
    {
        // Destroy session
        session()->destroy();
        return redirect()->to('/');
    }
}
