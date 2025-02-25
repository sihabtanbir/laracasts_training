

 <x-layout>
    <x-slot:heading>
      <div class="flex justify-between">
         <div>Job</div>
         <div><a class="font-normal font-small">create job</a></div>
      </div>
    </x-slot:heading>
   
    @foreach ($jobs as $job)
    <li>
      <a href="/jobs/{{ $job['id'] }}">
         {{ $job['title'] }}: pays {{ $job['salary'] }} per year
      </a> </li>
@endforeach


   <div>
     {{-- {{$jobs -> links()}} --}}
   </div>


 </x-layout>
   
