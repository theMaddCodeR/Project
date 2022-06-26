<?php
session_start();
session_destroy();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['addtocart']))
    {
        if(isset($_SESSION['cart']))
        {
            $myitems=array_column($_SESSION['cart'],'item_name');
            if(in_array($_POST['item_name'],$myitems))
            {
              
            }
         $count=count($_SESSION['cart']);
         $_SESSION['cart'][$count]=array('item_name'=>$_POST['item_name'],'price'=>$_POST['price'],'quantity'=>1);
         
       
        }
        else{
            $_SESSION['cart'][0]=array('item_name'=>$_POST['item_name'],'price'=>$_POST['price'],'quantity'=>1);
           
        }
    }
}







?>