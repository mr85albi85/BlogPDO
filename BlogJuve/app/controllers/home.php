<?php

class home extends Controller //mi dà tutti attr e metodi non privati di controller
{


    /**  azione index viene renderizzata di default
     * @param $nome inserire argomenti da passare alla vista
     */
    public function index($nome = '')  //metodo index chiama metodo view dentro controller
    {
        $this->view('main/header');
        echo "<h1>Benvenuto nel Blog</h1>";
        echo "<h2>.TITOLO.</h2>";
        echo "<img src='https://www.radioliberatutti.it/media/k2/items/cache/a34f09774741b64b4d575b5d72e61aa3_XL.jpg' height=200 width=200>";
        $this->view('main/footer');
    }
}
