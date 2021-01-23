<?php

class Downloads extends Controller
{
    protected function index()
    {
        $viewModel = new DownloadsModel();
        $viewModelFiles = $viewModel->Index();
        $viewModelLastVersion = $viewModel->GetLastVersion();
        $this->returnView(array("viewModelFiles" => $viewModelFiles, "viewModelLastVersion" => $viewModelLastVersion));
    }
}

?>