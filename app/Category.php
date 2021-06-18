<?php

namespace App;

class Category extends Koneksi {

   public function __construct ()
   {
       parent::__construct();
   }

   public function tampil()
   {
       $sql = "SELECT * FROM tb_category";
       $stmt = $this->db->prepare($sql);
       $stmt->execute();

       $data = [];
       while ($rows = $stmt->fetch()) {
           $data[] = $rows;
       }

       return $data;
   }

   public function input()
   {
       $i_name = $_POST['i_name'];
       $i_text = $_POST['i_text'];

       $sql = "INSERT INTO tb_category VALUES (NULL, : category_name, :category_text)";
       $stmt = $this->db->prepare($sql);
       $stmt->bindparam(":category_name", $i_name);
       $stmt->bindparam(":category_text", $i_text);
       $stmt->execute();

   }

}