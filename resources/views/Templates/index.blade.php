<x-app-layout>
    <x-slot name="content">
        <div class="templatesPageContent">
            <div class="buttonArea">
                <a href="{{ route('templates.create') }}">
                    <div class="actionButton">
                        <h6 class="actionButtonText">Novo Template</h6>
                    </div>
                </a>
            </div>
            <div class="templatesGrid">
                @foreach ($templates as $item)
                <a href="/templates/{{ $item->id }}">
                    <div class="template">
                        <h6 class="templateText">{{ $item->title }}</h6>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </x-slot>
</x-app-layout>