<div>
    <h4>groups</h4>
    <div class="row">
        <div class="col-md-5">

            <label for="cars">Gruppi Disponibili</label>

            <select class="form-control" name="available_groups" id="available_groups"
                wire:model.lazy="form_data.available_groups" multiple>
                @foreach ($availableGroups as $group)
                    <option value="{{ $group->id }}">{{ $group->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2 text-center"><br><br>
            <button type="button" wire:click="assign()"
                class="btn btn-sm bg-primary bg-opacity-20 bg-opacity-100-hover text-primary text-white-hover">Assign</button>
            <button type="button" wire:click="remove()"
                class="btn btn-sm bg-primary bg-opacity-20 bg-opacity-100-hover text-primary text-white-hover">Remove</button>
        </div>
        <div class="col-md-5">

            <label for="cars">Gruppi Assegnati</label>

            {{-- dddx($assignedGroups) --}}
            <select class="form-control" name="assigned_groups" id="assigned_groups"
                wire:model.lazy="form_data.assigned_groups" multiple>

                @foreach ($assignedGroups as $group => $group_id)
                    <option value="{{ $group_id }}">{{ $group }}</option>
                @endforeach
            </select>

        </div>
    </div>
</div>
