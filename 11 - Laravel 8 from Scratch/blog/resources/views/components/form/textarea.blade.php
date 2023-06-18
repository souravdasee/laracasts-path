@props(['name'])

<x-form.field>
    <x-form.label name="{{ $name }}" />

    <textarea  class="border border-gray-400 p-2 w-full rounded-3xl"
            type="text"
            name="{{ $name }}"
            id="{{ $name }}"
            required
    >{{ old($name) }}</textarea>

    <x-form.error name="{{ $name }}" />
</x-form.field>