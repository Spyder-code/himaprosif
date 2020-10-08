<div>
    <div id="reply-section">
        <h4 class="mt-5">Leave a Reply 
          @if ($foreignNamaKomentar)
          For <span class="text-info">{{ $foreignNamaKomentar }}</span> <i class="fas fa-backspace text-danger" wire:click="cancelReply" style="cursor: pointer"></i>
          @endif
        </h4>
        <h6 class="mb-4 font-weight-light">Your email address will not be published. All fields are required.</h6>
        <form wire:submit.prevent="addComment">
          <div class="form-group row">
            <div class="col-md-12 mb-4 mb-lg-0">
              <label>Nama</label>
              @error('nama')
              <span class="text-danger ml-3 font-weight-bold">{{ $message }}</span>
              @enderror
              <input type="text" class="form-control" wire:model.debounce.600ms="nama" autocomplete="off" required>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-12 mb-4 mb-lg-0">
              <label>Email</label>
              @error('email')
              <span class="text-danger ml-3 font-weight-bold">{{ $message }}</span>
              @enderror
              <input type="email" class="form-control" wire:model.debounce.600ms="email" autocomplete="off" required>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-12 mb-4 mb-lg-0">
               <label>Komentar</label>
               @error('isiKomentar')
               <span class="text-danger ml-3 font-weight-bold">{{ $message }}</span>
               @enderror
               <textarea cols="30" rows="5" class="form-control" wire:model.debounce.600ms="isiKomentar" required></textarea>
            </div>
          </div>
          <button type="submit" class="btn btn-primary float-right mt-2">Post Comment</button>
        </form>
    </div>       
</div>
