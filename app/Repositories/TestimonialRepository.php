<?php

namespace App\Repositories;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Collection;

class TestimonialRepository
{
    protected $model;

    /**
     * TestimonialRepository constructor.
     *
     * @param Testimonial $model
     */
    public function __construct(Testimonial $model)
    {
        $this->model = $model;
    }

    /**
     * Retrieve all testimonials with associated partners.
     *
     * @return Collection
     */
    public function getAllWithPartner(): Collection
    {
        return $this->model::with('partner')->get();
    }

    /**
     * Find a testimonial by its ID with partner.
     *
     * @param int $id
     * @return Testimonial|null
     */
    public function findWithPartner(int $id): ?Testimonial
    {
        return $this->model::with('partner')->find($id);
    }

    /**
     * Create a new testimonial.
     *
     * @param array $data
     * @return Testimonial
     */
    public function create(array $data): Testimonial
    {
        return $this->model::create($data);
    }

    /**
     * Update an existing testimonial.
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function update(int $id, array $data): bool
    {
        $testimonial = $this->findWithPartner($id);
        if ($testimonial) {
            return $testimonial->update($data);
        }
        return false;
    }

    /**
     * Delete a testimonial.
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        $testimonial = $this->findWithPartner($id);
        if ($testimonial) {
            return $testimonial->delete();
        }
        return false;
    }
}
