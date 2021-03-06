<x-app-layout>
    <x-slot name="content">
        @if (Auth::user())
            <h1 id="hello">Olá, {{ Auth::user()->name }}</h1>
        @endif
        <section class="recipientsPageContent">
            <div class="buttonArea">
                <a href="{{ route('receivers.create') }}">
                    <div class="recipientsActionButton">
                        <h6 class="actionButtonText">Novo Endereço</h6>
                    </div>
                </a>
            </div>
            <div class="recipients">
                @foreach ($receivers as $item) 
                    <div class="columns">
                        <div class="recipient">
                            <h6 class="recipientName">{{ $item->name }}</h6>
                            <h6 class="recipientEmail">{{$item->email}}</h6>
                            <h6 class="recipientTag">{{$item->tag}}</h6>
                            <div class="actions">
                                <a href="{{ route("receivers.edit", $item->id) }}">
                                    <img src="{{ asset("/assets/img/settings.svg") }}" alt="config">
                                </a>
                                <a href="{{ route("receivers.destroy", $item->id) }}" onclick="return confirm('Deseja realmente excluir este endereço?')">
                                    <img src="{{ asset("/assets/img/lixo.png") }}" alt="delete" id="deleteIcon">
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </x-slot>
</x-app-layout>
