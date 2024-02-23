<?php

session_start();


if (isset($_GET['product'])) {

    $product = $_GET['product'];

    if (!empty($_SESSION['cart'])) {

        $column = array_column($_SESSION['cart'], 'id');

        if (in_array($product, $column)) {

            $_SESSION['cart'][(int)$product]['qnty']++;
            header('Location: ../php_class06/htmlecommercetemplate/index.php');
        } else {

            $products_details = [
                'id' => $product,
                'qnty' => 1
            ];

            $_SESSION['cart'][$product] = $products_details;
            header('Location: ../php_class06/htmlecommercetemplate/index.php');
        }
    } else {

        $products_details = [
            'id' => $product,
            'qnty' => 1
        ];

        $_SESSION['cart'][$product] = $products_details;
        header('Location: ../php_class06/htmlecommercetemplate/index.php');
    }
}
