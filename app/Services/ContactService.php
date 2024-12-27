<?php

namespace App\Services;

use App\Repositories\ContactRepository;
use Illuminate\Support\Collection;

class ContactService
{
    protected $contactRepository;

    /**
     * ContactService constructor.
     *
     * @param ContactRepository $contactRepository
     */
    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    /**
     * Retrieve all contact inquiries.
     *
     * @return Collection
     */
    public function getAllContacts(): Collection
    {
        return $this->contactRepository->getAll();
    }

    /**
     * Retrieve a specific contact inquiry by ID.
     *
     * @param int $id
     * @return mixed
     */
    public function getContactById(int $id)
    {
        return $this->contactRepository->find($id);
    }

    /**
     * Create a new contact inquiry.
     *
     * @param array $data
     * @return mixed
     */
    public function createContact(array $data)
    {
        return $this->contactRepository->create($data);
    }

    /**
     * Update an existing contact inquiry.
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function updateContact(int $id, array $data): bool
    {
        return $this->contactRepository->update($id, $data);
    }

    /**
     * Delete a contact inquiry.
     *
     * @param int $id
     * @return bool
     */
    public function deleteContact(int $id): bool
    {
        return $this->contactRepository->delete($id);
    }
}
