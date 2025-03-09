<?php

 namespace App\Controller;
    
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
   
    class HelloController extends AbstractController
    {

        #[Route('/', name: '/')]

        public function index(): Response
        {
             function mes(){
              
                $a=rand(1,100);
                $b=rand(1,100);

        
                $result = $a + $b;
                return $result;

            };
    
            $result = mes();


            return $this->render('index.html.twig', [
                'result' => $result, // Przekazujemy zmienną do szablonu
            ]);
        }
    }















?>