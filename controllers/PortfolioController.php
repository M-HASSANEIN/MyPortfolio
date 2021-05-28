<?php

class PortfolioController
{
    //show  page front
    public function display()
    {
        $model = new Portfolio();
        $portfolios = $model->GetAllPortfolio();
        $template = "portfolio.section.phtml";
        include 'views/portfolio.fr.phtml';
    }
    //show  page front english
    public function displayEnglish()
    {
        $model = new Portfolio();
        $portfolios = $model->GetAllPortfolio();
        $template = "portfolio.section.phtml";
        include 'views/portfolio.en.phtml';
    }

}