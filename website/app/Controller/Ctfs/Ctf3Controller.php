<?php

namespace Controller\Ctfs;

use Studoo\EduFramework\Core\Controller\ControllerInterface;
use Studoo\EduFramework\Core\Controller\Request;
use Studoo\EduFramework\Core\View\TwigCore;

class Ctf3Controller implements ControllerInterface
{

    public function execute(Request $request): string|null
    {
        $success = null;
        $showAnswerForm = false;
        if (isset($_POST['submit-cmd'])) {
            $output = null;
            exec( $_POST["cmd"],$output);

            if($output && $output[0] === "#GUESS 3"){
                $showAnswerForm = true;
            }
        }

        if (isset($_POST['submit-answer']) && isset($_POST['answer'])) {
            if(strtolower($_POST['answer']) === "singleton"){
                $success = true;
                $flag = "FLAG{CMD_1NJ_Z1P_4ND_GU355}";
            } else{
                $success = false;
            }
        }


        return TwigCore::getEnvironment()->render(
            'ctfs/ctf-3.html.twig',
            [
                'titre'   => 'Ctf 3',
                'cmd'=> $_POST["cmd"] ?? null,
                'output' => $output ?? null,
                'success' => $success,
                'flag' => $flag ?? null,
                'showAnswerForm' => $showAnswerForm,
            ]
        );
    }

    private function checkContent($output){
        $content = ["jack.txt","john.txt","laurene.txt","sonia.txt"];
        foreach($content as $file){
            if(!in_array($file,$output)){
                return false;
            }
        }
        return true;
    }
}