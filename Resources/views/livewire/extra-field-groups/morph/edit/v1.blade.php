<div class="row">
    @foreach ($this->rows as $row)
        <hr />
        @foreach ($this->getFieldsByRow($row) as $field)
            <x-input.field :field="$field" />
        @endforeach
    @endforeach
    <pre>{{ print_r($form_data, true) }}</pre>
</div>
