<?php

namespace App\classes;

class Home
{
    public $product, $products, $singleProduct, $blog, $blogs, $singleBlog;
    public function __construct()
    {
        session_start();
    }
    public function index()
    {
        $this->product = new Product();
        $this->products = $this->product->getAllProduct();
        return view("home", ["products"=>$this->products]);
    }
    public function about()
    {
        return view('about');
    }
    public function detail($id)
    {
        $this->product = new Product();
        $this->products = $this->product->getAllProduct();
        foreach ($this->products as $product)
        {
            if ($product['id']==$id)
            {
                $this->singleProduct = $product;
            }
        }
        return view("detail", ['product'=>$this->singleProduct]);
    }
    public function blog()
    {
        $this->blog = new Blog();
        $this->blogs = $this->blog->getAllBlog();
        return view("blog", ["blogs" => $this->blogs]);
    }
    public function blogDetail($id)
    {
        $this->blog = new Blog();
        $this->blogs = $this->blog->getAllBlog();
        foreach ($this->blogs as $blog)
        {
            if ($blog["id"]==$id)
            {
                $this->singleBlog = $blog;
            }
        }
        return view("blog-detail",["blog" => $this->singleBlog]);
    }
    public function contact()
    {
        if (isset($_SESSION['id']))
        {
            return view("contact");
        }
        else
        {
            header("Location: web.php?page=login&&message=Please Login First to access Contact");
        }

    }
    public function calculator()
    {
        if (isset($_SESSION['id']))
        {
            return view("calculator");
        }
        else
        {
            header("Location: web.php?page=login&&message=Please Login First to access Calculator");
        }
    }
    public function series()
    {
        if (isset($_SESSION['id']))
        {
            return view("series");
        }
        else
        {
            header("Location: web.php?page=login&&message=Please Login First to access Series");
        }
    }
    public function login()
    {
        return view('login');
    }
    public function dashboard()
    {
        if (isset($_SESSION['id']))
        {
            return view("dashboard");
        }
        else
        {
            header("Location: web.php?page=login&&message=Please Login First to access Dashboard");
        }
    }
    public function logout()
    {
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header("Location: web.php?page=home");
    }

}