<?php

namespace Alura\CoursesSearch;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class Searcher
{
    private $httpClient;
    private $crawler;
    public function __construct(ClientInterface $httpClient, Crawler $crawler)
    {
        $this->httpClient = $httpClient;
        $this->crawler = $crawler;
    }


    public function search(string $url): array
    {
        $response = $this->httpClient->request("GET", $url);

        $html = $response->getBody();

        $this->crawler->addHtmlContent($html, 'UTF-8');

        $coursesElements = $this->crawler->filter('span.card-curso__nome');
        $courses = [];

        foreach ($coursesElements as $courseElement) {
            $courses[] = $courseElement->textContent;
        }

        return $courses;
    }
}
