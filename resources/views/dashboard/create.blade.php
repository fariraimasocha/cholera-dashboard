<x-layout>
    <div class="w-full max-w-lg justify-center mx-auto mt-10">
        <h2 class="font-light text-2xl leading-tight">
            Create Patient
        </h2>
        <x-splade-form action="{{ route('reports.store') }}" class="mt-5 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <x-splade-input name="name" label="Name" type="text"/>
            <x-splade-input name="hospital" label="Hospital" type="text"/>
            <x-splade-select name="gender" label="Gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </x-splade-select>
            <x-splade-select name="status" label="Status">
                <option value="deceased">Deceased</option>
                <option value="recovered">Recovered</option>
                <option value="suspected">Suspected</option>
                <option value="confirmed">Confirmed</option>
            </x-splade-select>
            <x-splade-input name="province" label="Province" type="text"/>
            <x-splade-input name="district" label="District" type="text"/>
            <x-splade-input name="city" label="City" type="text"/>
            <x-splade-input name="age" label="Age" type="text"/>
            <x-splade-submit class="mt-5"/>
        </x-splade-form>
    </div>
</x-layout>
