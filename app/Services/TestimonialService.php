<?php

namespace App\Services;

use App\Repositories\TestimonialRepository;
use Illuminate\Support\Collection;

class TestimonialService
{
    protected $testimonialRepository;

    /**
     * TestimonialService constructor.
     *
     * @param TestimonialRepository $testimonialRepository
     */
    public function __construct(TestimonialRepository $testimonialRepository)
    {
        $this->testimonialRepository = $testimonialRepository;
    }

    /**
     * Retrieve all testimonials.
     *
     * @return Collection
     */
    public function getAllTestimonials(): Collection
    {
        return $this->testimonialRepository->getAllWithPartner();
    }

    /**
     * Retrieve a specific testimonial by ID.
     *
     * @param int $id
     * @return mixed
     */
    public function getTestimonialById(int $id)
    {
        return $this->testimonialRepository->findWithPartner($id);
    }

    /**
     * Create a new testimonial.
     *
     * @param array $data
     * @return mixed
     */
    public function createTestimonial(array $data)
    {
        return $this->testimonialRepository->create($data);
    }

    /**
     * Update an existing testimonial.
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function updateTestimonial(int $id, array $data): bool
    {
        return $this->testimonialRepository->update($id, $data);
    }

    /**
     * Delete a testimonial.
     *
     * @param int $id
     * @return bool
     */
    public function deleteTestimonial(int $id): bool
    {
        return $this->testimonialRepository->delete($id);
    }
}
