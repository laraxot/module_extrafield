<div>
    @if ($can_verified == true)

        <x-flash-message />

        <button type="button" class="btn btn-success mt-3" wire:click="addToList()">Aggiungi alla Lista</button>
        <br />
        <label for="unverified">Seleziona Valore</label>

        <table class="table table-responsive table-striped table-hover">

            <tr>
                <th>Valore</th>
                <th>Verified</th>
                <th>Nota</th>
            </tr>


            @foreach ($this->getValuesList($this->user_id) as $unverified)
                {{--  <tr>
                    <td> {{ var_export($unverified, true) }} </td>
                </tr> --}}
                <tr>
                    <td>{{ $unverified->fieldMorph->value }}</td>
                    <td>
                        @if ($unverified->verified_at != null)
                            <i class="fa-solid fa-shield"></i>
                        @elseif ($unverified->token_sent_at == null)
                            <button wire:click="sendToken('{{ $unverified->id }}')" type="button"
                                class="btn btn-success mt-3">Verifica</button>
                        @elseif ($unverified->token_sent_at != null && $this->diffDaysToNow($unverified->token_sent_at) < 1)
                            <div class="input-group mb-3">
                                <input wire:model.lazy="form_data.token" type="text" class="form-control"
                                    placeholder="Inserisci Token" aria-label="Inserisci Token"
                                    aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="button"
                                        wire:click="verifyToken('{{ $unverified->id }}')">Conferma</button>
                                </div>
                            </div>
                        @endif
                    </td>
                    <td>
                        <div class="input-group-append">
                            <div class="input-group mb-3">
                                <input wire:model="form_data.{{ $unverified->id }}.note" type="text"
                                    class="form-control" placeholder="Inserisci Nota" aria-label="Inserisci Nota"
                                    aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="button"
                                        wire:click="changeNote('{{ $unverified->id }}')">Conferma</button>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>


    @endif
</div>
