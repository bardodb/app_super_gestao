<h3>Fornecedor</h3>

{{-- Fica aqui o comentario que não será exibido no navegador --}}

@php

    // $fornecedores = ['Fornecedor 1',  'Fornecedor 2', 'Fornecedor 3'];
@endphp


@isset($fornecedores)

    @forelse(@$fornecedores as $indice => $fornecedor)
        Iteração atual:{{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>

        Status: {{ $fornecedor['status'] }}
        <br>

        CNPJ: {{ $fornecedor['cnpj'] ?? 'Não tem cnpj' }}
        <br>

        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <br>

        @if ($loop->first)

            Primeira Iteração do Looping

        @endif


        @if ($loop->last)
            Última Iteração do Looping


            Total de registros: {{ $loop->count }}
            <br>
        @endif



        <hr>
    @empty
        <p>Não existem fornecedores cadastrados</p>
    @endempty

@endisset


{{--
laço for

@for ($i = 0; isset($fornecedores[$i]); $i++)

    Fornecedor: {{ $fornecedores[$i]['nome'] }}
    <br>
    Status: {{ $fornecedores[$i]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[$i]['cnpj'] ?? '' }}
    <br>
    Telefone: ({{ $fornecedores[$i]['ddd'] ?? '' }}) {{ $fornecedores[0]['telefone'] ?? '' }}
    <hr>
    @endfor --}}

{{--
laço while

    @isset($fornecedores)

    @php $i = 0 @endphp


    @while (isset($fornecedores[$i]))
    Fornecedor: {{ $fornecedores[$i]['nome'] }}
    <br>

    Status: {{ $fornecedores[$i]['status'] }}
    <br>

    CNPJ: {{ $fornecedores[$i]['cnpj'] ?? '' }}
    <br>

    Telefone: ({{ $fornecedores[$i]['ddd'] ?? '' }}) {{ $fornecedores[0]['telefone'] ?? '' }}
    <hr>
    @php $i++ @endphp
    @endwhile

@endisset --}}


{{--

        for each
@isset($fornecedores)

    @foreach ($fornecedores as $indice => $fornecedor)
    Fornecedor: {{ $fornecedor['nome'] }}
    <br>

    Status: {{ $fornecedor['status'] }}
    <br>

    CNPJ: {{ $fornecedor['cnpj'] ?? 'Não tem cnpj' }}
    <br>

    Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
    <hr>

    @endforeach
@endisset --}}
