<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var list<string>
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------

    /**
     * Validation rules for the contact form.
     */
    public array $contactRules = [
        'name'    => 'required|string|max_length[100]',
        'email'   => 'required|valid_email',
        'subject' => 'required|string|max_length[100]',
        'message' => 'required|string',
    ];

    /**
     * Validation rules for the Signup form.
     */
    // public array $signupRules = [
    //     'name'     => 'required|string|max_length[100]',
    //     'email'    => 'required|valid_email|is_unique[users.email]',
    //     'password' => 'required|min_length[6]',
    // ];

    // /**
    //  * Validation rules for the Login form.
    //  */
    // public array $loginRules = [
    //     'email'    => 'required|valid_email',
    //     'password' => 'required',
    // ];
}
