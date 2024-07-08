<h3>Fornecedor</h3>

{{-- Fica aqui o comentario que não será exibido no navegador --}}

@php

    // $fornecedores = ['Fornecedor 1',  'Fornecedor 2', 'Fornecedor 3'];
    @endphp


@isset($fornecedores)
Fornecedor: {{ $fornecedores[1]['nome'] }}
<br>
Status: {{ $fornecedores[1]['status'] }}
<br>
    @isset($fornecedores[1]['cnpj'])
        CNPJ: {{ $fornecedores[1]['cnpj'] }}
    @endisset

@endIsset
