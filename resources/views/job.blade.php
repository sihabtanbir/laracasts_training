
 <x-layout>
    <x-slot:heading>
       Job
    </x-slot:heading>
    <h2 class="text-2xl capitalize font-semibold">{{ $job['title'] }} </h2>
    <p>
      this job pays {{ $job['salary'] }} per year
    </p>
    


 </x-layout>
   
