<?php

namespace App\Orchid\Screens;

use App\Models\Domain;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Alert;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;

class DomainScreen extends Screen
{
    /**
     * @var Domain|null
     */
    private $domain;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Domain $domain = null): iterable
    {
        $this->domain = $domain;

        return [
            'domains' => Domain::filters()->defaultSort('id', 'desc')->paginate(),
            'domain' => $domain ?? new Domain(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->domain ? 'Редактирование домена' : 'Управление доменами';
    }

    /**
     * Display header description.
     *
     * @return string|null
     */
    public function description(): ?string
    {
        return $this->domain ? 'Редактирование домена' : 'Список всех доменов и их управление';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Создать домен')
                ->icon('plus')
                ->method('create')
                ->canSee(!$this->domain),
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
            Layout::rows([
                Input::make('domain.name')
                    ->title('Название домена')
                    ->placeholder('example.com')
                    ->required(),

                Input::make('domain.title')
                    ->title('Заголовок')
                    ->placeholder('Заголовок сайта')
                    ->required(),

                TextArea::make('domain.description')
                    ->title('Описание')
                    ->rows(3)
                    ->placeholder('Краткое описание домена'),

                TextArea::make('domain.content')
                    ->title('Контент')
                    ->rows(5)
                    ->placeholder('Основной контент домена'),

                CheckBox::make('domain.is_active')
                    ->title('Активен')
                    ->value(true)
                    ->sendTrueOrFalse(),
            ]),

            Layout::table('domains', [
                TD::make('name', 'Домен')
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
                        return DropDown::make()
                            ->icon('options-vertical')
                            ->list([
                                Link::make('Редактировать')
                                    ->route('platform.domains.edit', $domain)
                                    ->icon('pencil'),

                                Button::make('Удалить')
                                    ->icon('trash')
                                    ->method('remove')
                                    ->confirm('Вы уверены, что хотите удалить этот домен?')
                                    ->parameters([
                                        'domain' => $domain->id,
                                    ]),
                            ]);
                    }),
            ]),
        ];
    }

    /**
     * @param Domain $domain
     *
     * @return array
     */
    public function asyncGetDomain(Domain $domain): array
    {
        return [
            'domain' => $domain
        ];
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Request $request)
    {
        $domain = new Domain();
        $domain->fill($request->get('domain'))->save();

        Alert::info('Домен успешно создан');

        return redirect()->route('platform.domains');
    }

    /**
     * @param Domain $domain
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Domain $domain, Request $request)
    {
        $domain->fill($request->get('domain'))->save();

        Alert::info('Домен успешно обновлен');

        return redirect()->route('platform.domains');
    }

    /**
     * @param Domain $domain
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove(Domain $domain)
    {
        $domain->delete();

        Alert::info('Домен успешно удален');

        return redirect()->route('platform.domains');
    }
}
