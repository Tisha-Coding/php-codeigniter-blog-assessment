<?php
namespace App\Controllers;

use App\Models\BlogModel;
use App\Models\CommentModel;
use App\Models\ContactModel;  // Make sure to create a ContactModel for handling contact form data

class BlogController extends BaseController {

    // Existing function to show all blogs
    public function index() {
        $model = new BlogModel();
        $data['blogs'] = $model->findAll();
        return view('blog/index', $data);
    }

    // Existing function to show a single blog post with comments
    public function detail($id) {
        $blogModel = new BlogModel();
        $commentModel = new CommentModel();

        $data['blog'] = $blogModel->find($id);

        if (!$data['blog']) {
            return redirect()->to('/')->with('error', 'Blog post not found.');
        }

        $data['comments'] = $commentModel->where('blog_id', $id)->findAll();

        return view('blog/detail', $data);
    }

    // Existing function to save comments
    public function comment() {
        $commentModel = new CommentModel();
        $validation = \Config\Services::validation();
        $validation->setRules([
            'blog_id' => 'required|integer',
            'name' => 'required|string|max_length[100]',
            'email' => 'required|valid_email',
            'comment' => 'required|string'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->with('comment_error', $validation->getErrors());
        }

        $commentModel->save([
            'blog_id' => $this->request->getPost('blog_id'),
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'comment' => $this->request->getPost('comment')
        ]);

        return redirect()->to('/blog/' . $this->request->getPost('blog_id'))->with('comment_success', 'Comment added successfully!');
    }

    // New function to load the About Us page
    public function about_us() {
        return view('blog/about_page');  // This loads the 'about_page.php' view under 'views/blog/'
    }

 
    public function contact()
{
    $contactModel = new ContactModel();
    $validation = \Config\Services::validation();

    // If the form is submitted
    if ($this->request->getMethod() === 'post') {
        $validation->setRules([
            'name' => [
                'label' => 'Name',
                'rules' => 'required|alpha', // 'alpha' ensures only alphabets (no numbers, spaces, or special characters)
                'errors' => [
                    'required' => 'The {field} field is required.',
                    'alpha' => 'The {field} field must contain only alphabetic characters without spaces or numbers.'
                ]
            ],
            'email' => 'required|valid_email',
            'subject' => 'required|string|max_length[100]',
            'message' => 'required|string'
        ]);

        // Check validation
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->with('contact_error', $validation->getErrors());
        }

        // Save to database
        $contactModel->save([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'subject' => $this->request->getPost('subject'),
            'message' => $this->request->getPost('message')
        ]);

        return redirect()->to('/contact')->with('contact_success', 'Thank you for contacting us!');
    }

    // Load contact page
    return view('blog/contact');
}



}
