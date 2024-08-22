<?php

class Session implements SessionInterface
{

    public function open()
    {
        echo "Real opening the session ...";
    }

    public function close()
    {
        echo "Real closing the session ...";
    }

    public function write($product)
    {
        echo "Real writing the session ..." . $product;
    }
}