<?php

namespace Andrarstn\BelajarUnitTest;

interface ProductRepository
{
    function save(Product $product): Product;
    function delete(Product $product): void;
    function findById(String $id): ?Product;
    function findAll(): array;
}