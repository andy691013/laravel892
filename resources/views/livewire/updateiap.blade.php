  <div wire:ignore.self class="modal fade  " id="updateiap" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog  modal-lg border border-2 border-info">
          <div class="modal-content  p-3 text-light" style="background-color:#003E52;" >
              <div class="modal-header">
                  <h5 class="modal-title " id="exampleModalLabel">Post-{{$this->typename}}儀器成績<div class="alert alert-primary" role="alert">
                    {{$this->lead}}{{$this->name}}
                  </div></h5>
                  <button type="button" wire:click="cancel()" class="btn-close bg-light"" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                
                  <form id="{{ $index1 }}">

                      <div class="form-group">
                          <input type="hidden" wire:model="lead_id">
                          <input type="hidden" wire:model="type">
                           <div class="form-group border  border-info rounded p-2 m-3" >
                            <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                                 <label class="form-label"><h5>多圖一鍵上傳(自動裁切與辨識)</h5> </label>
                                 <div class="text-light mb-2">
                                   檔名編號 01 ~ 04.png
                                  </div>
                                 <input type="file" class="form-control  bg-info " wire:model="photos"     multiple >
                                 <div wire:loading wire:target="photos">上傳中...</div>
                                 <div x-show="isUploading">
                                     <progress max="100" x-bind:value="progress"></progress>
                                 </div>
                                 @error('photos.*') <span class="error">{{ $message }}</span> @enderror
                                 @if ($photos)
                                 Preview:
                                 @foreach($photos as $key => $photo)
                                    
                             
                                 <img  src="{{ $photo->temporaryUrl() }}" class="p-2" style="width: 100px;height:100px;" alt="">
                                 @endforeach
                                @endif

                             </div>
                         </div>
                        

                         @if(!$p2||!$p42)  <div class="right">
                            <button wire:click="cancel()" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
                            <button wire:click.prevent="updateiap()" class="btn btn-primary">更新</button>
                            </div></br>
                        @endif
                    
                            @if ($p1)   <h4 class="text-info">(一)未加心智</h4>
                          <div class=" border  border-info rounded p-2 m-3" >
                            <label class="form-label">p1</label>
                                 
                                  view:
                                  <img class="p-2" src="{{ asset('storage') }}/{{$p1}}" style="width: 200px;height:250px;" alt="">
                                

                              </div>
                           @endif 
                           @if ($p2)
                           <div class="border  border-info rounded p-2 m-3" >
                            <label class="form-label">p2</label>                
                                  view:
                                  <img class="p-2" src="{{ asset('storage') }}/{{$p2}}" style="width: 200px;height:250px;" alt="">                          
                            </div>
                          @endif
                          @if ($p3)
                          <div class="border  border-info rounded p-2 m-3" >
                           <label class="form-label">p3</label>                
                                 view:
                                 <img class="p-2" src="{{ asset('storage') }}/{{$p3}}" style="width: 250px;height:180px;" alt="">                          
                           </div>
                         @endif
                         @if ($p4)
                         <div class="border  border-info rounded p-2 m-3" >
                          <label class="form-label">p4</label>                
                                view:
                                <img class="p-2" src="{{ asset('storage') }}/{{$p4}}" style="width: 200px;height:150px;" alt="">
                          </div>
                        @endif

                         @if($p12) <h4 class="text-info">(二)加入心智</h4>
                         <div class="border  border-info rounded p-2 m-3" >
                                  <label class="form-label">p5</label>
                                    view:
                                  <img class="p-2" src="{{ asset('storage') }}/{{$p12}}" style="width: 200px;height:250px;" alt="">
                              </div>
                          @endif
                          @if ($p22)
                          <div class="border  border-info rounded p-2 m-3" >
                           <label class="form-label">p6</label>                
                                 view:
                                 <img class="p-2" src="{{ asset('storage') }}/{{$p22}}" style="width: 200px;height:250px;" alt="">
                           </div>
                         @endif
                         @if ($p32)
                         <div class="border  border-info rounded p-2 m-3" >
                          <label class="form-label">p7</label>                
                                view:
                                <img class="p-2" src="{{ asset('storage') }}/{{$p32}}" style="width: 250px;height:180px;" alt="">
                          </div>
                        @endif
                        @if ($p42)
                        <div class="border  border-info rounded p-2 m-3" >
                         <label class="form-label">p8</label>                
                               view:
                               <img class="p-2" src="{{ asset('storage') }}/{{$p42}}" style="width: 200px;height:150px;"  alt="">
                         </div>
                       @endif
           
                  </form>
              </div>
              @if($p2||$p42)
              <div class="modal-footer">
                  <button wire:click="cancel()" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
                  <button wire:click.prevent="updateiap()" class="btn btn-primary">更新</button>
              </div>
              @endif

          </div>
      </div>
  </div>
  </div>
