<?php

class Portfolio extends ModelManager
{
    public function GetAllPortfolio()
    {
        $req = "SELECT * FROM `portfolio`";
        return $this->queryFetchAll($req);
    }

    public function CallPortfoliobyId($id)
    {
        $req = " SELECT *
                 FROM portfolio
                 WHERE id_portfolio=?";
        return $this->queryFetch($req, [$id]);
    }

}