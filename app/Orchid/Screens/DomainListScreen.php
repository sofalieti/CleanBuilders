<?php

namespace App\Orchid\Screens;

use App\Models\Domain;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;

class DomainListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'domains' => Domain::filters()->defaultSort('id', 'desc')->paginate()
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Управление доменами';
    }

    /**
     * Display header description.
     *
     * @return string|null
     */
    public function description(): ?string
    {
        return 'Список всех доменов и их управление';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Создать домен')
                ->icon('plus')
                ->route('platform.domains.create')
                ->class('btn btn-primary'),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]
     */
    public function layout(): iterable
    {
        return [
            Layout::table('domains', [
                TD::make('name', 'Название домена')
                    ->sort()
                    ->filter(TD::FILTER_TEXT),

                TD::make('title', 'Заголовок')
                    ->sort()
                    ->filter(TD::FILTER_TEXT),

                TD::make('is_active', 'Статус')
                    ->sort()
                    ->render(function (Domain $domain) {
                        return $domain->is_active ? 'Активен' : 'Неактивен';
                    }),

                TD::make('actions', 'Действия')
                    ->align(TD::ALIGN_CENTER)
                    ->width('100px')
                    ->render(function (Domain $domain) {
                        return Link::make('Редактировать')
                            ->route('platform.domains.edit', $domain)
                            ->icon('pencil')
                            ->class('btn btn-primary');
                    }),
            ]),
        ];
    }

    /**
     * @param Domain $domain
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove(Domain $domain)
    {
        $domain->delete();

        return redirect()->route('platform.domains');
    }
} 