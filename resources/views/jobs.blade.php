

 <x-layout>
    <x-slot:heading>
       Jobs list 
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
   
