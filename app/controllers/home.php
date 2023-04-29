  <?php 

    class Home extends Controller{

      public function index()
      {
        $data['page_title'] = "Home | Personal Blog"; 
        return $this->view("theme","home", $data); 
      }

      

    }