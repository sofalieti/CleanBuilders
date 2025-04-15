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

class DomainEditScreen extends Screen
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
        return $this->domain ? 'Редактирование домена' : 'Создание домена';
    }

    /**
     * Display header description.
     *
     * @return string|null
     */
    public function description(): ?string
    {
        return $this->domain ? 'Редактирование домена' : 'Создание нового домена';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Сохранить')
                ->icon('check')
                ->method('save')
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
        ];
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Request $request)
    {
        $domain = $this->domain ?? new Domain();
        
        $validated = $request->validate([
            'domain.name' => 'required|string|unique:domains,name,' . ($domain->id ?: 'NULL'),
            'domain.title' => 'required|string',
            'domain.description' => 'nullable|string',
            'domain.content' => 'nullable|string',
            'domain.is_active' => 'boolean'
        ]);

        $domain->fill($validated['domain']);
        $domain->save();

        Alert::info('Домен успешно сохранен');

        return redirect()->route('platform.domains');
    }
} 