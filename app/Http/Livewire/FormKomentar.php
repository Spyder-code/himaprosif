<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Comment;

class FormKomentar extends Component
{
   public $nama;
   public $email;
   public $isiKomentar;
   
   public $primaryId;
   public $foreignId;
   public $beritaId;

   public $foreignKomentar;
   public $foreignNamaKomentar;
   protected $listeners = ['replyOneComment'];


   public function mount($data)
   {
      $this->beritaId = $data->id;
   }

   public function updated($field)
   {
      $this->validateOnly($field, [
         'nama' => 'required|min:4|max:40',
         'email' => 'required|email|max:50',
         'isiKomentar' => 'required|min:5|max:170',
      ]);
   }

   public function cancelReply()
   {
      $this->foreignKomentar = "";
      $this->foreignNamaKomentar = "";
   }

   public function replyOneComment($comment)
   {
      $this->foreignKomentar = $comment['id'];
      $this->foreignNamaKomentar = $comment['nama'];
   }

   public function checkPrimaryId()
   {
      $this->primaryId = rand(0, 10000);
      foreach (Comment::all() as $komen) {
         if($komen->id === $this->primaryId){
            $this->primaryId = rand(0, 10000);
         } 
      }
   }

   public function addComment()
   {
      $this->validate([
         'nama' => 'required|max:40',
         'email' => 'required|email|max:50',
         'isiKomentar' => 'required|max:170|min:5',
      ]);

      if($this->foreignKomentar){
         $komentar = new Comment();
         $komentar->nama = $this->nama;
         $komentar->email = $this->email;
         $komentar->isi = $this->isiKomentar;
         $komentar->id_komen = $this->foreignKomentar;
         $komentar->id_berita = $this->beritaId;
         $komentar->save();
      } else {
         $this->checkPrimaryId();
         $komentar = new Comment();
         $komentar->id = $this->primaryId;
         $komentar->nama = $this->nama;
         $komentar->email = $this->email;
         $komentar->isi = $this->isiKomentar;
         $komentar->id_berita = $this->beritaId;
         $komentar->save();
      }

      $this->nama = "";
      $this->email = "";
      $this->isiKomentar = "";
      $this->foreignKomentar = "";
      $this->foreignNamaKomentar = "";
      $this->emit('commentAdded');
   }

   public function render()
   {
      return view('livewire.form-komentar', ['foreignNamaKomentar' => $this->foreignNamaKomentar]);
   }
}
