<?php

class Admin extends CI_Controller{

    function __construct(){
        parent::__construct();
    
        if($this->session->has_userdata('logged_in') == FALSE){
            redirect("login");
        } 
    }

    public function index(){
        redirect("admin/galleryadmin");
    }

    public function homeadmin(){
        $this->load->model('admin_model');
        $this->load->helper('form');

        // Retrieve data from the existing table
        $result = $this->admin_model->getHomepageContent();
        
        // Retrieve data from the new table
        $newTableData = $this->admin_model->getHomepage2Content();

        $data = array(
            'title' => 'Welcome to Micro-Bloom',
            'AllItems' => $result,
            'NewTableData' => $newTableData
        );
        $this->load->view("admin/includes/adminheader", $data);
        $this->load->view("admin/testadminhomepage");
        $this->load->view("admin/includes/adminfooter");
        

    }

    //THE FIRST save_content effect is similar to the 2nd save_content below it, the adminhomepage should also be changed depending on which save_content function you will use

    // public function save_content(){
    //     $this->load->model('Admin_model');
    //     $data = array(
    //         'container1_header' => $this->input->post('container1_header'),
    //         'container1_background' => $this->input->post('container1_background'),
    //         'container2_header' => $this->input->post('container2_header'),
    //         'container2_subtext' => $this->input->post('container2_subtext'),
    //         'container3_header' => $this->input->post('container3_header'),
    //         'container3_subtext' => $this->input->post('container3_subtext')
    //     );
    //     $this->Admin_model->updateHomepageContent($data);
    //     redirect("admin/homeadmin");
    // }

    public function save_content() {
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    
        // Set the validation rules
        $this->form_validation->set_rules('container1_background', 'Background Image', 'callback_validate_image_url');
    
        // Check if the form validation passed
        if ($this->form_validation->run() == FALSE) {
            // Validation failed, display error message or redirect back to the form
            redirect('admin/aboutadmin');
        } else {

            // Validation passed, proceed with saving the content
    
            // Get all the form inputs as an array
            $data = $this->input->post();
    
            // Remove unnecessary fields from the $data array
            unset($data['submit']);
    
            // Manipulate container3_highlight1 & 2 & 3 value
            $container3_highlight1 = trim($data['container3_highlight1']); // Remove leading and trailing whitespaces
            if (empty($container3_highlight1)) {
                $data['container3_highlight1'] = null; // Set to null if empty or only contains whitespaces
            }
            $container3_highlight2 = trim($data['container3_highlight2']); // Remove leading and trailing whitespaces
            if (empty($container3_highlight2)) {
                $data['container3_highlight2'] = null; // Set to null if empty or only contains whitespaces
            }
            $container3_highlight3 = trim($data['container3_highlight3']); // Remove leading and trailing whitespaces
            if (empty($container3_highlight3)) {
                $data['container3_highlight3'] = null; // Set to null if empty or only contains whitespaces
            }

            

            // Create a new data array specifically for updateHomepage2Content()
            $newTableData = array(
                'container3_img1' => $data['container3_img1'], // Add the specific column and its value
                'container3_img2' => $data['container3_img2'], // Add the specific column and its value
                'container3_img3' => $data['container3_img3'] // Add the specific column and its value
            );

            // Remove the container3_img1-3 data from the main $data array
            unset($data['container3_img1']);
            unset($data['container3_img2']);
            unset($data['container3_img3']);

            // Update the homepage content in the database
            $this->Admin_model->updateHomepageContent($data);

            

            // Update the data in the new table
            $this->Admin_model->updateHomepage2Content($newTableData);
    
            redirect("admin/homeadmin");
        }
    }

    public function save_contentabout() {
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    
        // Set the validation rules
        // $this->form_validation->set_rules('container1_background', 'Background Image', 'callback_validate_image_url');
    
        // Check if the form validation passed
        if ($this->form_validation->run() == TRUE) {
            // Validation failed, display error message or redirect back to the form
        } else {

            // Validation passed, proceed with saving the content
    
            // Get all the form inputs as an array
            $data = $this->input->post();
    
            // Remove unnecessary fields from the $data array
            unset($data['submit']);
    
            // Manipulate container3_highlight1 & 2 & 3 value
            $container3_highlight1 = trim($data['about1_header_text1']); // Remove leading and trailing whitespaces
            if (empty($container3_highlight1)) {
                $data['about1_header_text1'] = null; // Set to null if empty or only contains whitespaces
            }
            $container3_highlight2 = trim($data['about1_subtext1']); // Remove leading and trailing whitespaces
            if (empty($container3_highlight2)) {
                $data['about1_subtext1'] = null; // Set to null if empty or only contains whitespaces
            }
            $container3_highlight3 = trim($data['about1_header_text2']); // Remove leading and trailing whitespaces
            if (empty($container3_highlight3)) {
                $data['about1_header_text2'] = null; // Set to null if empty or only contains whitespaces
            }
            $container3_highlight4 = trim($data['about1_subtext2']); // Remove leading and trailing whitespaces
            if (empty($container3_highlight4)) {
                $data['about1_subtext2'] = null; // Set to null if empty or only contains whitespaces
            }
            $container3_highlight5 = trim($data['page_header']); // Remove leading and trailing whitespaces
            if (empty($container3_highlight5)) {
                $data['page_header'] = null; // Set to null if empty or only contains whitespaces
            }

            

            // // Create a new data array specifically for updateHomepage2Content()
            // $data = array(
            //     'container3_img1' => $data['container3_img1'], // Add the specific column and its value
            //     'container3_img2' => $data['container3_img2'], // Add the specific column and its value
            //     'container3_img3' => $data['container3_img3'] // Add the specific column and its value
            // );

            // // Remove the container3_img1-3 data from the main $data array
            // unset($data['container3_img1']);
            // unset($data['container3_img2']);
            // unset($data['container3_img3']);

            // Update the aboutpage content in the database
            $this->Admin_model->updateAboutpageContent($data);

            

            // Update the data in the new table
            // $this->Admin_model->updateHomepage2Content($newTableData);
    
            redirect("admin/aboutadmin");
        }
    }
    
    public function validate_image_url($image_url) {
        // Custom validation logic to check if the image URL exists
        
        // Make a HEAD request to the URL
        $ch = curl_init($image_url);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_exec($ch);
        $response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        if ($response_code !== 200) {
            // The image URL does not exist or could not be accessed, return FALSE to indicate validation failure
            $this->form_validation->set_message('validate_image_url', 'The image URL is invalid or does not exist.');
            return FALSE;
        }
        
        return TRUE; // The image URL exists, validation passed
    }
    
    public function aboutadmin(){
        $this->load->model('admin_model');
        $this->load->helper('form');

        // Retrieve data from the existing table
        $result = $this->admin_model->getAboutpageContent();
        
        // Retrieve data from the new table
        // $newTableData = $this->admin_model->getAboutpage2Content();

        $result2 = $this->admin_model->getHomepageContent();

        $data = array(
            'title' => 'Welcome to Micro-Bloom',
            'AllItems' => $result,
            // 'NewTableData' => $newTableData,
            'BGItem' => $result2
        );
        $this->load->view("admin/includes/adminheader", $data);
        $this->load->view("admin/adminaboutpage");
        $this->load->view("admin/includes/adminfooter");
    }


    public function galleryadmin(){

        $this->load->model('admin_model');
        $result = $this->admin_model->getAllItems();

        $data = array(
            'title' => 'Welcome to Micro-Bloom',
            'AllItems' => $result
        );
        $this->load->view("admin/includes/adminheader", $data);
        $this->load->view("admin/admingallerypage.php");
        $this->load->view("admin/includes/adminfooter");
    }

    public function insertRecord(){
 
        $config['upload_path']          =  './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('pictureImage'))
        {
            $data = array('upload_data' => $this->upload->data());
        }
        $path = $this->config->base_url("uploads/");
       
        $fname = $_POST['pictureMessage'];
        $filename = $_FILES['pictureImage']['name'];
        $filename = str_replace(' ', '_', $filename);
        $encodedFilename = urlencode($filename);
        $finalAddress = $path . $encodedFilename;

        // Get the modified file name
        $modifiedFilename = $data['upload_data']['file_name'];
        $encodedModifiedFilename = urlencode($modifiedFilename);
        $finalAddress = $path . $encodedModifiedFilename;

        $this->load->model('admin_model');

        $foodInfo = array(
            'pictureMessage'      => $fname,
            'pictureimage'     => $finalAddress,
        );

        $this->admin_model->insertItem($foodInfo);
        redirect("admin/galleryadmin");
    }

    public function deleteRecord($thirdsegment) {
        $this->load->model('admin_model');
        $item = $this->admin_model->getItemById($thirdsegment);
    
        if (!empty($item)) {
            $filePath = urldecode($item[0]->pictureImage);         
    
            // Extract the filename from the URI
            $filename = basename($filePath);
    
            // Delete file from the uploads folder
            $uploadsPath = './uploads/';
            $fullPath = $uploadsPath . $filename;
            if (file_exists($fullPath)) {
                unlink($fullPath);
            }
    
            // Delete item from the database
            $this->admin_model->deleteItem($thirdsegment);
        }
    
        redirect("admin/galleryadmin");
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect("gamewebsite/home");
    }
}













?>