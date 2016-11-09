<?php
namespace app\interfaces;

interface Cart{
    public function put($data);
    public function truncate();
    public function removeElement($id);
    public function getElements();
    public function GetElement($id);
}
