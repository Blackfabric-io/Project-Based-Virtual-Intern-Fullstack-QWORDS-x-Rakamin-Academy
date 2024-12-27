<?php

namespace App\Repositories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Collection;

class ContactRepository
{
    protected $model;

    /**
     * ContactRepository constructor.
     *
     * @param Contact $model
     */
    public function __construct(Contact $model)
    {
        $this->model = $model;
    }

    /**
     * Retrieve all contacts.
     *
     * @return Collection
     */
    public function getAll(): Collection
    {
        return $this->model::all();
    }

    /**
     * Find a contact by its ID.
     *
     * @param int $id
     * @return Contact|null
     */
    public function find(int $id): ?Contact
    {
        return $this->model::find($id);
    }

    /**
     * Create a new contact.
     *
     * @param array $data
     * @return Contact
     */
    public function create(array $data): Contact
    {
        return $this->model::create($data);
    }

    /**
     * Update an existing contact.
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function update(int $id, array $data): bool
    {
        $contact = $this->find($id);
        if ($contact) {
            return $contact->update($data);
        }
        return false;
    }

    /**
     * Delete a contact.
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        $contact = $this->find($id);
        if ($contact) {
            return $contact->delete();
        }
        return false;
    }
}
