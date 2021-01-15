
<x-app-layout>
    <x-slot name="content">
        <section class="recipientsPageContent">
            <div class="buttonArea">
                <a href="/recipients/new">
                    <div class="recipientsActionButton">
                        <h6 class="actionButtonText">Novo Endereço</h6>
                    </div>
                </a>
            </div>
            <div class="recipients">
                @foreach ($receivers as $item)
                    <div class="recipient">
                        <h6 class="recipientName">{{ dd($item) }}</h6>
                        <h6 class="recipientEmail">{{$item->teste2}}</h6>
                        <h6 class="recipientTag">{{$item->teste}}</h6>
                        <div class="actions">
                            <a href="/recipients/{$value.idRecipient}">
                                <img src="../../res/assets/img/settings.svg" alt="config">
                            </a>
                            <a href="/recipients/{$value.idRecipient}/delete" onclick="return confirm('Deseja realmente excluir este endereço?')">
                                <img src="../../res/assets/img/lixo.png" alt="delete" id="deleteIcon">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </x-slot>
</x-app-layout>
