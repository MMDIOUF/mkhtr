<?php
interface IModel{
    public function insert();
    public function update();
    public static function selectAll();
    public static function delete(int $id);
    public static function selectById(int $id);
}