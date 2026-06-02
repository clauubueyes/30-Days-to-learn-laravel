<x-layout>
    <x-slot:heading>
        Job 
    </x-slot:heading>
<h2>
    Job: {{  $job['title'] }}
</h2>
<p>
    Salario: {{ $job['salary'] }}
</p>
</x-layout>