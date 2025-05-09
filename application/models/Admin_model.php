<?php

class Admin_model extends CI_Model{

    function getAllItems(){
        $query = $this->db->get("pictureitems");
        return $query->result();
    }
    function insertItem($orderArrayStructure){
        $this->db->insert('pictureitems',$orderArrayStructure);
    }

    function deleteItem($fid) {
        $this->db->where('pictureID', $fid);
        $query = $this->db->get('pictureitems');
        $result = $query->row();
    
        if (!empty($result)) {
            $filePath = $result->pictureImage;
    
            // Extract the filename from the URI
            $filename = basename($filePath);
    
            // Delete file from the uploads folder
            $uploadsPath = './uploads/';
            $fullPath = $uploadsPath . $filename;
            if (file_exists($fullPath)) {
                unlink($fullPath);
            }
    
            // Delete item from the database
            $this->db->where('pictureID', $fid);
            $this->db->delete('pictureitems');
        }
    }

    function getItemById($fid){
        $this->db->where('pictureID',$fid);
        $query = $this->db->get("pictureitems"); // SELECT * FROM fruits WHERE fruit_id = '$fid';
        return $query->result();
    }


    // FOR HOMEPAGE
    function getHomepageContent(){
        $query = $this->db->get("homeitems");
        return $query->result();
    }

    function updateHomepageContent($data){
        $this->db->where('id' , 1);
        $this->db->update('homeitems', $data);
    }

    // FOR HOMEPAGE2
    function getHomepage2Content() {
        $query = $this->db->get("homeitems2");
        return $query->result();
    }

    function updateHomepage2Content($newTableData) {
        $this->db->where('id', 1);
        $this->db->update('homeitems2', $newTableData);
    }

    //FOR ABOUTPAGE
    function getAboutpageContent(){
        $query = $this->db->get("aboutitems");
        return $query->result();
    }
    function getAboutpage2Content(){
        $query = $this->db->get("");
        return $query->result();
    }

    function updateAboutpageContent($data){
        $this->db->where('id' , 1);
        $this->db->update('aboutitems', $data);
    }
}