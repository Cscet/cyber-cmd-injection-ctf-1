<?php

namespace Controller\Ctfs;

use Studoo\EduFramework\Core\Controller\ControllerInterface;
use Studoo\EduFramework\Core\Controller\Request;
use Studoo\EduFramework\Core\View\TwigCore;

class Ctf2Controller implements ControllerInterface
{

    public function execute(Request $request): string|null
    {
        $success = null;
        if (isset($_POST['submit-cmd'])) {
            $output = null;
            exec( $_POST["cmd"],$output);
        }

        if (isset($_POST['submit-answer']) && isset($_POST['answer'])) {
            if(in_array(strtolower($_POST['answer']),["authorization","authorisation"])){
                $success = true;
                $flag = "FLAG{CMD_1NJ_C4N_R34D_F1L3}";
            } else{
                $success = false;
            }
        }


        return TwigCore::getEnvironment()->render(
            'ctfs/ctf-2.html.twig',
            [
                'titre'   => 'Ctf 2',
                'cmd'=> $_POST["cmd"] ?? null,
                'output' => $output ?? null,
                'success' => $success,
                'flag' => $flag ?? null,
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