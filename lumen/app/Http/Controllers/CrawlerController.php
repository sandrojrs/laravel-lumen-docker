<?php

namespace App\Http\Controllers;

use Clue\React\Buzz\Browser;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\DomCrawler\Crawler;
use React\EventLoop\Factory;



class CrawlerController extends Controller
{  
  
    public function index($page) 
    
    {              
        $loop = Factory::create();

        $client = new Browser($loop);

        if ($page == 1){
            $url= 'https://www.submarino.com.br/busca/tv';
        }else{
            $url= 'https://www.submarino.com.br/busca/tv?limite=24&offset=24';
        }

        $client
        ->get($url)
        ->then( function (ResponseInterface $response) {
            $output = array();

                $crawler = new Crawler((string)$response->getBody());           

                $name = $crawler->filter('.TitleUI-sc-1f5n3tj-13')->extract(['_text']);
                $price = $crawler->filter('.PriceUI-sc-1f5n3tj-9')->extract(['_text']);

                for ($i=0; $i < count($name) ; $i++) {   

                    $output[] = array( 'name' => $name[$i], 'price' => $price[$i] );

                };     
                
                echo json_encode($output);
                if (isset($_SERVER['HTTP_REFERER'])){
                   echo '<a href='.$_SERVER['HTTP_REFERER'].'>Voltar para pagina inicial</a>';
                }                   
                                
            }
        );

        $loop->run();

    }
}
