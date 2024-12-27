<?php

namespace App\Repositories;

use App\Models\Page;
use Illuminate\Database\Eloquent\Collection;

class PageRepository
{
    protected $model;

    /**
     * PageRepository constructor.
     *
     * @param Page $model
     */
    public function __construct(Page $model)
    {
        $this->model = $model;
    }

    /**
     * Retrieve all pages.
     *
     * @return Collection
     */
    public function getAll(): Collection
    {
        return $this->model::all();
    }

    /**
     * Find a page by its ID.
     *
     * @param int $id
     * @return Page|null
     */
    public function find(int $id): ?Page
    {
        return $this->model::find($id);
    }

    /**
     * Create a new page.
     *
     * @param array $data
     * @return Page
     */
    public function create(array $data): Page
    {
        return $this->model::create($data);
    }

    /**
     * Update an existing page.
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function update(int $id, array $data): bool
    {
        $page = $this->find($id);
        if ($page) {
            return $page->update($data);
        }
        return false;
    }

    /**
     * Delete a page.
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        $page = $this->find($id);
        if ($page) {
            return $page->delete();
        }
        return false;
    }
}
