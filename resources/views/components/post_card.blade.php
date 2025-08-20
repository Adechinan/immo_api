<div>
   <div class="card">
        <div class="card-body">
            <img class="w-100 h-25" src="{{ Storage::url('images/sunset.jpg') }}" alt="" srcset="">
            {{ $post->titre }}
        </div>
        <div class="card-footer ms-auto">
         {{ $post->user()->first()->name }}   
        </div>
   </div>
</div>