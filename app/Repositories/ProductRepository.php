<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use Illuminate\Support\Collection;

class ProductService
{
    protected $productRepository;

    /**
     * ProductService constructor.
     *
     * @param ProductRepository $productRepository
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * Retrieve all products with pricing and features.
     *
     * @return Collection
     */
    public function getAllProducts(): Collection
    {
        return $this->productRepository->getAllWithDetails();
    }

    /**
     * Retrieve a specific product by ID.
     *
     * @param int $id
     * @return mixed
     */
    public function getProductById(int $id)
    {
        return $this->productRepository->findWithDetails($id);
    }

    /**
     * Create a new product with pricing and features.
     *
     * @param array $data
     * @return mixed
     */
    public function createProduct(array $data)
    {
        return $this->productRepository->createWithDetails($data);
    }

    /**
     * Update an existing product.
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function updateProduct(int $id, array $data): bool
    {
        return $this->productRepository->updateWithDetails($id, $data);
    }

    /**
     * Delete a product.
     *
     * @param int $id
     * @return bool
     */
    public function deleteProduct(int $id): bool
    {
        return $this->productRepository->delete($id);
    }
}
