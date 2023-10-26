<?php 

class DeleteImage
{
    public function delete ($path) 
    {
        unlink($path);
    }
}