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

