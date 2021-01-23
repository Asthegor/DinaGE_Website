<?php

class Home extends Controller
{
    protected function index()
    {
        $viewModel = new HomeModel();
        $viewModelNews = $viewModel->Index();
        $viewModelAnnounce = $viewModel->GetAnnounce();
        $this->returnView(array("viewModelAnnounce" => $viewModelAnnounce, "viewModelNews" => $viewModelNews));
    }
}

?>