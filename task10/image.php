<?php 

class Image
{
    public $file;
    public $f_name;
    public $f_type;
    public $f_tmp_name;
    public $f_error;
    public $f_size;
    public $original_name;
    public $original_ext;
    public $desk;
    public $sql_image;
    public function __construct($i_name)
    {
        $this->file = $_FILES[$i_name];
        $this->f_name = $this->file['name'];
        $this->f_type = $this->file['type'];
        $this->f_tmp_name = $this->file['tmp_name'];
        $this->f_error = $this->file['error'];
        $this->f_size = $this->file['size'];

        $ext = pathinfo($this->f_name);
        $this->original_name = $ext['filename'];
        $this->original_ext = $ext['extension'];
    }
    public function allowed (array $mimes)
    {
        if(in_array($this->original_ext,$mimes)) {
            return false;
        } else {
            return true;
        }
    }
    public function checkErrors ()
    {
        if($this->f_error === 0) {
            return false;
        } else {
            return true;
        }
    }
    public function checkSize ($size)
    {
        if($this->f_size <= $size) {
            return true;
        } else {
            return false;
        }
    }
    public function upload ($name,$cat)
    {
        $this->desk = "uploads/$cat/$name.$this->original_ext";
        move_uploaded_file($this->f_tmp_name,'../../../'.$this->desk);
        return $this;
    }
}