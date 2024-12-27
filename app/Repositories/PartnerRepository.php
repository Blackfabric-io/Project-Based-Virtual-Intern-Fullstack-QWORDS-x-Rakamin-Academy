<?php

namespace App\Repositories;

use App\Models\Partner;
use Illuminate\Database\Eloquent\Collection;

class PartnerRepository
{
    protected $model;

    /**
     * PartnerRepository constructor.
     *
     * @param Partner $model
     */
    public function __construct(Partner $model)
    {
        $this->model = $model;
    }

    /**
     * Retrieve all partners.
     *
     * @return Collection
     */
    public function getAll(): Collection
    {
        return $this->model::all();
    }

    /**
     * Find a partner by its ID.
     *
     * @param int $id
     * @return Partner|null
     */
    public function find(int $id): ?Partner
    {
        return $this->model::find($id);
    }

    /**
     * Create a new partner.
     *
     * @param array $data
     * @return Partner
     */
    public function create(array $data): Partner
    {
        return $this->model::create($data);
    }

    /**
     * Update an existing partner.
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function update(int $id, array $data): bool
    {
        $partner = $this->find($id);
        if ($partner) {
            return $partner->update($data);
        }
        return false;
    }

    /**
     * Delete a partner.
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        $partner = $this->find($id);
        if ($partner) {
            return $partner->delete();
        }
        return false;
    }
}
