<?php
class AppController {

    private $request;

    public function __construct()
    {
        //bedziemy mogli pobrac czy jest t metdoa GEt czy POST
        $this->request = $_SERVER['REQUEST_METHOD'];
    }

    protected function isPost() : bool
    {
        return $this->request === 'POST';
    }

    protected function isGet() : bool
    {
        return $this->request === 'GET';
    }


    protected function render(string $template = null, array $variables = []) {
        //$variables - zmienne przekazywane na widoki,

        $templatePath = 'public/views/'.$template.'.php';
        $output = 'File not found';

        if (file_exists($templatePath)) {
            extract($variables);

            ob_start();
            include $templatePath;
            $output = ob_get_clean();

        }
        print $output;
    }

    protected function isSession() : bool
    {
        session_start();
        if(isset($_SESSION['User']))
        {
            return true;
        }
        return false;
    }

    
}