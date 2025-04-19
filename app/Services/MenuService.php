<?php

namespace App\Services;

use App\Models\Domain;
use App\Models\MenuItem;
use Illuminate\Support\Collection;

class MenuService
{
    /**
     * Получить все пункты меню для указанного домена
     *
     * @param Domain|null $domain
     * @return Collection
     */
    public function getMenuItems(?Domain $domain = null): Collection
    {
        $query = MenuItem::query()
            ->where('is_active', true)
            ->where(function ($query) use ($domain) {
                $query->where('is_global', true);
                
                if ($domain) {
                    $query->orWhereHas('domains', function ($q) use ($domain) {
                        $q->where('domains.id', $domain->id);
                    });
                }
            })
            ->whereNull('parent_id')
            ->with(['children' => function ($query) use ($domain) {
                $query->where('is_active', true)
                    ->where(function ($q) use ($domain) {
                        $q->where('is_global', true);
                        if ($domain) {
                            $q->orWhereHas('domains', function ($subQ) use ($domain) {
                                $subQ->where('domains.id', $domain->id);
                            });
                        }
                    })
                    ->orderBy('sort_order');
            }])
            ->orderBy('sort_order');

        return $query->get();
    }
} 