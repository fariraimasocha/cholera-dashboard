<x-layout>
    <div class="px-16 mt-10 to-black1 flex justify-between">


        @php
            $totalPatients = \App\Models\Cholera::count();
        @endphp
        <div class="bg-blue1 w-2/12 rounded py-3 hover:bg-black1 transition">
            <p class="text-white text-center">
                Total Cases
            </p>
            <h1 class="text-white text-center text-2xl font-semi">
                {{ $totalPatients }}
            </h1>
        </div>

        @php
            $totalPatientsRecovered = \App\Models\Cholera::where('status', 'Recovered')->count();
        @endphp
        <div class="bg-blue1 w-2/12 rounded py-3 hover:bg-black1 transition">
            <p class="text-white text-center">
                Total Recovered
            </p>
            <h1 class="text-white text-center text-2xl font-semi">
                {{ $totalPatientsRecovered }}
            </h1>
        </div>

        @php
            $totalPatientsDeceased = \App\Models\Cholera::where('status', 'Recovered')->count();
        @endphp
        <div class="bg-blue1 w-2/12 rounded py-3 hover:bg-black1 transition">
            <p class="text-white text-center">
                Total Deceased
            </p>
            <h1 class="text-white text-center text-2xl font-semi">
                {{ $totalPatientsDeceased }}
            </h1>
        </div>

        @php
            $totalPatientsConfirmed = \App\Models\Cholera::where('status', 'Confirmed')->count();
        @endphp
        <div class="bg-blue1 w-2/12 rounded py-3 hover:bg-black1 transition">
            <p class="text-white text-center">
                Total Confirmed
            </p>
            <h1 class="text-white text-center text-2xl font-semi">
                {{ $totalPatientsConfirmed }}
            </h1>
        </div>

        @php
            $totalPatientsSuspected = \App\Models\Cholera::where('status', 'Confirmed')->count();
        @endphp
        <div class="bg-blue1 w-2/12 rounded py-3 hover:bg-black1 transition">
            <p class="text-white text-center">
                Total Confirmed
            </p>
            <h1 class="text-white text-center text-2xl font-semi">
                {{ $totalPatientsSuspected }}
            </h1>
        </div>


    </div>
    <div class="flex space-x-5 mt-8 px-16">
        <div>

        </div>
        <div>

        </div>

    </div>

</x-layout>
