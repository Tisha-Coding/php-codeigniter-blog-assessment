<?php
namespace App\Models;
use CodeIgniter\Model;

class CommentModel extends Model {
    protected $table = 'comments';
    protected $allowedFields = ['blog_id', 'name', 'email', 'comment'];
}
?>
