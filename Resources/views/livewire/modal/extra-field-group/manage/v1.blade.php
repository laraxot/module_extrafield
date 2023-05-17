<x-modal.skin on-submit="save" :content-padding="false">
    <x-slot name="title">
        Title
    </x-slot>


    <table>
        <tr>
            <th>Name</th>
            <th>Cardinality</th>
            <th>Can Verified</th>
            <th>Mandatory</th>
        </tr>
        @foreach ($extra_field_group_morphs as $group_morph)
            <tr>
                <td>{{ $group_morph->extraFieldGroup->name }}</td>
                <td class="text-center">{{ $group_morph->extraFieldGroup->cardinaliy }}</td>
                <td class="text-center">{{ $group_morph->extraFieldGroup->can_verified }}</td>
                <td class="text-center">{{ $group_morph->extraFieldGroup->mandatory }}</td>
            </tr>
        @endforeach
    </table>


    <x-slot name="buttons">
        <x-button type="cancel" wire:click="$emit('modal.close')">
            Cancel
        </x-button>
    </x-slot>
</x-modal.skin>
