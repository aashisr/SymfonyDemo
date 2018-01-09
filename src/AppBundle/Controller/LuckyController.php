<?php
    namespace AppBundle\Controller;

    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;

    class LuckyController extends Controller
    {
        /**
         * @Route("/lucky/number")
         */

        public function numberAction()
        {
            $number = mt_rand(0,100);

            /*
            return new Response(
                    '<html><body>Lucky Number: ' . $number . '</body></html'
            );
            */

            //Rendering a template with render()
            return $this->render('lucky/number.html.twig', array(
                'number' => $number
            ));
        }
    }
?>