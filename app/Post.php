<?php

namespace App;

class Post extends Koneksi {

   public function __construct ()
   {
       parent::__construct();
   }

   public function tampil()
   {
       $sql = "SELECT  tb_post.*, tb_category.* FROM tb_post, tb_category WHERE tb_post.post_category_id=tb_category.category_id";
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
       $i_date = $_POST['i_date'];
       $i_slug = $_POST['i_slug'];
       $i_title = $_POST['i_title'];
       $i_text = $_POST['i_text'];
       $i_category_id = $_POST['i_category_id'];

       $sql = "INSERT INTO tb_post VALUES (NULL, :post_date, :post_slug, :post_title, :post_text, :post_category_id)";
       $stmt = $this->db->prepare($sql);
       $stmt->bindParam(":post_date", $i_date);
       $stmt->bindParam(":post_slug", $i_slug);
       $stmt->bindParam(":post_title", $i_title);
       $stmt->bindParam(":post_text", $i_text);
       $stmt->bindParam(":post_category_id", $i_category_id);
       $stmt->execute();
   }

}