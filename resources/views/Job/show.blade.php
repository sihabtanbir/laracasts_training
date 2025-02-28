
 <x-layout>
    <x-slot:heading>
     Job
    </x-slot:heading>
    <h2 class="text-2xl capitalize font-semibold">{{ $job['title'] }} </h2>
    <p>
      this job pays {{ $job['salary'] }} per year
    </p>
    <div class="flex gap-2">
    <p class="mt-6">
      <a href="/jobs/{{$job->id}}/edit" class="btn bg-green-400 hover:text-white p-2 rounded-sm">Edit job</a>
    </p>
    

    <p class="mt-6">
      <a href="{{route('job.delete', $job->id)}}" class="btn bg-red-400 hover:text-white p-2 rounded-sm">delete job</a>
    </p>

  </div>

 </x-layout>
   
