<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductRepository
{
    protected $model;

    /**
     * ProductRepository constructor.
     *
     * @param Product $model
     */
    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    /**
     * Retrieve all products with features and payment methods.
     *
     * @return Collection
     */
    public function getAllWithDetails(): Collection
    {
        return $this->model::with(['features', 'paymentMethods'])->get();
    }

    /**
     * Find a product by its ID with details.
     *
     * @param int $id
     * @return Product|null
     */
    public function findWithDetails(int $id): ?Product
    {
        return $this->model::with(['features', 'paymentMethods'])->find($id);
    }

    /**
     * Create a new product with features and payment methods.
     *
     * @param array $data
     * @return Product
     */
    public function createWithDetails(array $data): Product
    {
        return $this->model::create($data);
    }

    /**
     * Update an existing product with details.
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function updateWithDetails(int $id, array $data): bool
    {
        $product = $this->findWithDetails($id);
        if ($product) {
            return $product->update($data);
        }
        return false;
    }

    /**
     * Delete a product.
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        $product = $this->findWithDetails($id);
        if ($product) {
            return $product->delete();
        }
        return false;
    }
}
