<?php

class TestController extends ControllerBase
{

    public function indexAction()
    {
        $test = new TestHelper();
        //$test->dosth('dkaldlasda');
    }

    public function tAction($name = null,$age=0)
    {
        echo $this->tag->linkTo("good","supslsl here");
        echo $this->tag->submitButton('save');
        die;

        echo "name:{$name}";
        die;
    }

    public function registerAction()
    {
        $persons = new Persons();
        $success = $persons->save($this->request->getPost(),['name','email']);
        if($success)
            echo 'thank you for register';
        else{
            echo 'sorry, the following problems were generated';
            foreach ($persons->getMessages() as $message) {
                echo $message->getMessage(),"<br>";
            }
        }
        $this->view->disable();

    }

}

