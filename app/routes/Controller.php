<?php
/**
 *  This is the CONTROLLER for BAS Business Portfolio application
 *
 *  @authors Noah Lanctot, Mehak Saini, Braedon Billingsley, Will Castillo
 *  @copyright 2024
 *  @url https://bbillingsley.greenriverdev.com/355/BASBusinessPortfolio
 **/

class Controller
{
    private mixed $_f3;
    private PDO $_dbh;

    /**
     * Constructs a controller object.
     *
     * @param mixed $f3 The global $f3 hive to be assigned to the $_f3 parameter.
     * @return void
     */
    public function __construct(object $f3)
    {
        $this->_f3 = $f3;
        $this->_dbh = DatabaseConnection::getConnection();
    }

    /**
     * Renders the home HTML page.
     *
     * This method creates a new instance of the Template class and uses it to render the home.html page.
     * The rendered HTML is then echoed to the output.
     *
     * @return void
     */
    function home(): void
    {
        $view = new Template();
        echo $view->render('app/views/home.html');
    }
}