

 <x-layout>
    <x-slot:heading>
      <div class="flex justify-between">
         <div>Job</div>
         <div><a class="font-normal text-sm bg-gray-200 p-2 border border-1 rounded box-shadow-sm" href="{{route('job.create')}}">Create job</a></div>
      </div>
    </x-slot:heading>
   
    @foreach ($jobs as $job)
    <li>
      <a href="/job/{{ $job['id'] }}">
         {{ $job['title'] }}: pays {{ $job['salary'] }} per year
      </a> </li>
@endforeach


   <div>
     {{$jobs -> links()}} 
   </div>


 </x-layout>
   
