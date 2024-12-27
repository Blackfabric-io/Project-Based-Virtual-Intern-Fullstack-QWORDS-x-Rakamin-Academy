<?php

namespace App\Services;

use App\Repositories\PageRepository;
use Illuminate\Support\Collection;

class PageService
{
    protected $pageRepository;

    /**
     * PageService constructor.
     *
     * @param PageRepository $pageRepository
     */
    public function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    /**
     * Retrieve all landing page sections.
     *
     * @return Collection
     */
    public function getAllSections(): Collection
    {
        return $this->pageRepository->getAll();
    }

    /**
     * Retrieve a specific landing page section by ID.
     *
     * @param int $id
     * @return mixed
     */
    public function getSectionById(int $id)
    {
        return $this->pageRepository->find($id);
    }

    /**
     * Create a new landing page section.
     *
     * @param array $data
     * @return mixed
     */
    public function createSection(array $data)
    {
        return $this->pageRepository->create($data);
    }

    /**
     * Update an existing landing page section.
     *
     * @param int $id
     * @param array $data
     * @return mixed
     */
    public function updateSection(int $id, array $data)
    {
        return $this->pageRepository->update($id, $data);
    }

    /**
     * Delete a landing page section.
     *
     * @param int $id
     * @return bool
     */
    public function deleteSection(int $id): bool
    {
        return $this->pageRepository->delete($id);
    }
}
