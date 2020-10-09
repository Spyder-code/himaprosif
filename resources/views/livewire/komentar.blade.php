<div>
   <h4 class="mt-4 mb-5">Comments <span>({{ $commentsTotal }})</span></h4>
   @if ($comments->isEmpty())
      <div>
         <span class="font-weight-bold text-info">Tidak ditemukan komentar</span>
      </div>
   @else
      @foreach ($comments as $comment)
      <div class="mt-4">
         @if ($comment->id !== null)
            <!-- Main Komentar -->
            <img src="{{ asset('images/default.jpg') }}" class="mr-2" alt="comment-img" width="40px">
            <b class="ml-1">{{ $comment->nama }}</b> 
            <small>({{date('d F Y', strtotime($comment->created_at))}})</small>
            <div class="card shadow-sm mt-3">
            <div class="card-body">
               <span>{{ $comment->isi }}</span>
               <hr>
               <a href="#reply-section" class="text-info" style="text-decoration: none;" wire:click="replyComment({{ $comment }})"><i class="fas fa-reply"></i> Balas</a>
               <a href="" class="float-right text-info"><i class="far fa-comment-dots"></i> Tampilkan Balasan</a>
            </div>
            </div>
            <!-- Sub komentar -->
            @foreach ($comments as $subComment)
               @if ($subComment->id === null && $subComment->id_komen === $comment->id)
               <div class="mt-4 ml-5">
                  <img src="{{ asset('images/default.jpg') }}" alt="comment-img" width="40px">
                  <b class="ml-1">{{ $subComment->nama }}</b>
                  <small>({{date('d F Y', strtotime($comment->created_at))}})</small>
                  <div class="card shadow-sm mt-3">
                     <div class="card-body">
                        <span>{{ $subComment->isi }}</span>
                     </div>
                  </div>
               </div>
               @endif
            @endforeach 
         @endif
      
      </div>
      @endforeach
      
   @endif
   {{-- <button class="btn btn-outline-secondary mx-auto mt-4">Tampilkan Lebih...</button> --}}
    
</div>
