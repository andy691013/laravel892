  <div  wire:ignore.self class="modal fade  " id="updateia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg border border-2 border-info">
    <div class="modal-content p-3 text-light" style="background-color:#003E52;" >
      <div class="modal-header">
        <h5 class="modal-title " id="exampleModalLabel">OMT-{{$this->typename}}儀器成績 <div class="alert alert-primary" role="alert">
            {{$this->lead}}{{$this->name}}
          </div></h5>
        <button type="button" wire:click="cancel()" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                          <div wire:loading wire:target="photos">上傳中...</div>
                <form id="{{ $index2 }}">
               
                 
                 <input type="hidden" wire:model="lead_id">
                   <input type="hidden"  wire:model="type"  >
                  
                   <div class="form-group border  border-info rounded p-2 m-3" >
                     <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                          <label class="form-label"><h5>多圖一鍵上傳(自動辨識)</h5></label>
                          <input type="file" class="form-control  bg-success " wire:model="photos"   multiple>
                          <div x-show="isUploading">
                              <progress max="100" x-bind:value="progress"></progress>
                          </div>
                          @error('photos.*') <span class="error">{{ $message }}</span> @enderror
                          @if ($photos)
                          Preview:
                          @foreach($photos as $key => $photo)
                             
                   
                          <img src="{{ $photo->temporaryUrl() }}" class="p-2" style="width: 100px;height:100px;" alt="">
                    
                          @endforeach
                         @endif

                      </div>
                  </div>
               @if(!$sp||!$tp) 
               <div>
                  <button  wire:click.prevent="cancel()" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
                  <button wire:click.prevent="updateia()" class="btn btn-primary">更新</button>
                </div></br>
                @endif
                @if ($sp)
                   <div class="border  border-info rounded p-2 m-3" >
                    <label class="form-label">SP-來回追視 view: </label>
                         <img class="p-2" src="{{ asset('storage') }}/{{$sp}}" style="width: 600px;height:150px;" alt="">
                 </div>
                 @endif
                 @if ($tp)
                 <div class="border  border-info rounded p-2 m-3" >
                  <label class="form-label">TP-疲累追視 view:</label>
                       <img class="p-2" src="{{ asset('storage') }}/{{$tp}}" style="width: 600px;height:150px;" alt="">
               </div>
               @endif
               @if ($sl)
                 <div class="border  border-info rounded p-2 m-3" >
                  <label class="form-label">SL-跳視反應時間圖 view:</label>
                       <img class="p-2" src="{{ asset('storage') }}/{{$sl}}" style="width: 600px;height:150px;" alt="">
               </div>
               @endif
               @if ($sa)
               <div class="border  border-info rounded p-2 m-3" >
                <label class="form-label">SA-跳視反應準確分析圖 view: </label>
                     <img class="p-2" src="{{ asset('storage') }}/{{$sa}}" style="width: 600px;height:150px;" alt="">
             </div>
             @endif
             @if ($gc)
             <div class="border  border-info rounded p-2 m-3" >
              <label class="form-label">Gaze Center-凝視中間圖 view: </label>
                   <img class="p-2" src="{{ asset('storage') }}/{{$gc}}" style="width: 600px;height:150px;" alt="">
           </div>
           @endif
           @if ($gl)
           <div class="border  border-info rounded p-2 m-3" >
            <label class="form-label">Gaze Left-凝視左邊分析圖 view:</label>
             
                 <img class="p-2" src="{{ asset('storage') }}/{{$gl}}" style="width: 600px;height:150px;" alt="">
         </div>
         @endif
         @if ($gr)
         <div class="border  border-info rounded p-2 m-3" >
          <label class="form-label">Gaze Rigth-凝視右邊分析圖 view: </label>
               <img class="p-2" src="{{ asset('storage') }}/{{$gr}}" style="width: 600px;height:150px;" alt="">
       </div>
       @endif  
         </form>
     </div>
     @if($sp||$gc) 
             <div class="modal-footer">
        <button  wire:click.prevent="cancel()" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
        <button wire:click.prevent="updateia()" class="btn btn-primary">更新</button>
      </div>
      @endif
           
       </div>
    </div>
</div>


