<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Comment;

class Komentar extends Component
{
   public $beritaId;
   public $pesan;
   protected $listeners = ['commentAdded'];

   public function mount($data)
   {
      $this->beritaId = $data->id;
   }

   public function replyComment($comment)
   {
      $this->emit('replyOneComment', $comment);
   }

   public function commentAdded()
   {
      $this->pesan = 'komentar telah ditambahkan';
   }

   public function render()
   {
      return view('livewire.komentar', [
         'comments' => Comment::where('id_berita', $this->beritaId)->get(),
         'commentsTotal' => Comment::where('id_berita', $this->beritaId)->count()
      ]);
   }
}
