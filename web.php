<?php
require_once "vendor/autoload.php";

use App\classes\Home;
use App\classes\FullName;
use App\classes\Calculator;
use App\classes\Series;
use App\classes\Auth;

$home = new Home();

if (isset($_GET["page"]))
{
    if ($_GET['page']=='home')
    {
        $home->index();
    }
    elseif ($_GET['page']=='about')
    {
        $home->about();
    }
    elseif ($_GET['page']=='detail')
    {
        $home->detail($_GET['id']);
    }
    elseif ($_GET['page']=='blog')
    {
        $home->blog();
    }
    elseif ($_GET['page']=='blog-detail')
    {
        $home->blogDetail($_GET['id']);
    }
    elseif ($_GET["page"]=="contact")
    {
        $home->contact();
    }
    elseif ($_GET["page"] == "calculator")
    {
        $home->calculator();
    }
    elseif ($_GET["page"] == "series")
    {
        $home->series();
    }
    elseif ($_GET['page'] == "login")
    {
        $home->login();
    }
    elseif ($_GET['page'] == 'dashboard')
    {
        $home->dashboard();
    }
    elseif ($_GET['page'] == 'logout')
    {
        $home->logout();
    }
}
elseif (isset($_POST['full_name_btn']))
{
    $fullName = new FullName($_POST);
    $fullName->index();
}
elseif (isset($_POST['calculator_btn']))
{
    $calculator = new Calculator($_POST);
    $calculator->index();
}
elseif (isset($_POST['series_btn']))
{
    $series = new Series($_POST);
    $series->index();
}
elseif (isset($_POST['login_btn']))
{
    $auth = new Auth($_POST);
    $auth->loginCheck();
}