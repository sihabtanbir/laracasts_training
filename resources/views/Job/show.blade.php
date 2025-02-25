
 <x-layout>
    <x-slot:heading>
     Job
    </x-slot:heading>
    <h2 class="text-2xl capitalize font-semibold">{{ $job['title'] }} </h2>
    <p>
      this job pays {{ $job['salary'] }} per year
    </p>
    
    <p class="mt-6">
      <a href="/jobs/{{$job->id}}/edit" class="btn bg-green-400 hover:text-white p-2 rounded-sm">Edit job</a>
    </p>

 </x-layout>
   
