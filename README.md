<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# search-dropdown 

### Como Usar ? 

 Exemplo
  <livewire:search-dropdown :modelClassName="'App\\Models\\User'" :column="'name'"  :search_mode="'colaborador'"/>

 Passe a rota do seu modelo dentro da variavel  :modelClassName   :column="'nome_coluna_selecionada'"  :search_mode="'(tag_identificacao) '"  

    public $search_id, $search_mode;

    protected $listeners = [
        'search_id' => 'setIdModel',
    ];


    public function setIdModel($search_id, $search_mode)
    {
        $this->search_mode = $search_mode;
        if ($this->search_mode == 'veiculo')
            dump($this->search_mode);
        $this->search_id = $search_id;
    }
## Testar quando chegar em casa

 "<div class="w-2/3 flex justify-end items-center relative rounded-md bg-gray-200 border border-gray-300 rounded">
            <input type="text"
                class="form-input rounded-md w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="{{ $atributte ?? 'Pesquisar ...' }}" wire:model="query" wire:keydown.escape="clear"
                wire:keydown.tab="clear" wire:keydown.arrow-up="decrementHighlight"
                wire:keydown.arrow-down="incrementHighlight" wire:keydown.debounce.300ms="search"
                wire:keydown="selectContact" wire:model="atributte" />
            <div class="flex items-center pr-4" wire:click.prevent="">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2 -mr-1 " viewBox="0 0 20 20"
                    fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M6.293 9.293a1 1 0 011.414 0L10 11.586l2.293-2.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </div>
 </div>"

