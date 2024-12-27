<?php

namespace App\Services;

use App\Repositories\PartnerRepository;
use Illuminate\Support\Collection;

class PartnerService
{
    protected $partnerRepository;

    /**
     * PartnerService constructor.
     *
     * @param PartnerRepository $partnerRepository
     */
    public function __construct(PartnerRepository $partnerRepository)
    {
        $this->partnerRepository = $partnerRepository;
    }

    /**
     * Retrieve all partners.
     *
     * @return Collection
     */
    public function getAllPartners(): Collection
    {
        return $this->partnerRepository->getAll();
    }

    /**
     * Retrieve a specific partner by ID.
     *
     * @param int $id
     * @return mixed
     */
    public function getPartnerById(int $id)
    {
        return $this->partnerRepository->find($id);
    }

    /**
     * Create a new partner.
     *
     * @param array $data
     * @return mixed
     */
    public function createPartner(array $data)
    {
        return $this->partnerRepository->create($data);
    }

    /**
     * Update an existing partner.
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function updatePartner(int $id, array $data): bool
    {
        return $this->partnerRepository->update($id, $data);
    }

    /**
     * Delete a partner.
     *
     * @param int $id
     * @return bool
     */
    public function deletePartner(int $id): bool
    {
        return $this->partnerRepository->delete($id);
    }
}
