<?php

namespace Controller\Ctfs;

use Studoo\EduFramework\Core\Controller\ControllerInterface;
use Studoo\EduFramework\Core\Controller\Request;
use Studoo\EduFramework\Core\View\TwigCore;

class Ctf1Controller implements ControllerInterface
{

    public function execute(Request $request): string|null
    {
        $success = null;
        if (isset($_POST['submit'])) {

            $output = null;
            exec( $_POST["cmd"],$output);
            if(
                is_array($output) &&
                count($output) === 4 &&
                $this->checkContent($output)
            ){
                $success = true;
            $flag = "FLAG{CMD_1NJ_0K_1T_W0RK5}";
            } else{
                $success = false;
            }
        }

        return TwigCore::getEnvironment()->render(
            'ctfs/ctf-1.html.twig',
            [
                'titre'   => 'Ctf 1',
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