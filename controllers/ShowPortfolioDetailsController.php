<?php

class ShowPortfolioDetailsController
{
    //show  page front
    public function showportfolio()
    {
        $id = $_GET["id"];
        $model = new Portfolio();
        $portfolio = $model->CallPortfoliobyId($id);

        include 'views/portfolio-details.phtml';
    }
}