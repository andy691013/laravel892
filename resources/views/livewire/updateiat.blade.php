  <div  wire:ignore.self class="modal fade " id="updateiat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg border border-2 border-info">
    <div class="modal-content p-3 text-light"  style="background-color:#003E52;">
      <div class="modal-header">
        <h5 class="modal-title " id="exampleModalLabel">OMT-{{$this->typename}}-Table<div class="alert alert-primary" role="alert">
          {{$this->lead}}{{$this->name}}
        </div></h5>
        <button type="button" wire:click="cancel()" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                <form id="{{$index3}}"  >
             
                 <div class="form-group" >
                 <input type="hidden" wire:model="lead_id">
                 <input type="hidden"  wire:model="type"  >
                 <input type="hidden" wire:model="s3"  >
                   <input type="hidden" wire:model="s6"  >
                    <div class="input-group mb-3">
              
                     <span class="input-group-text" >{{$this->typename}}日期：<span>
               
                   <input type="date"  class="form-control" wire:model="date1">
                   </div>
                   <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">偷跑：</span>
                    <input type="number" class="form-control" wire:model="s1"  >
                    @error('s1') <span class="text-danger">{{ $message }}</span>@enderror  
                  </div>
               
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">太慢：</span>
                    <input type="number" class="form-control" wire:model="s2"  >
                    @error('s2') <span class="text-danger">{{ $message }}</span>@enderror  
                  </div>
                  
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">under 未達：</span>
                    <input type="number" class="form-control" wire:model="s4"  >
                    @error('s4') <span class="text-danger">{{ $message }}</span>@enderror  
                  </div>
                  
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">over 超過：</span>
                    <input type="number" class="form-control" wire:model="s5"  >
                    @error('s5') <span class="text-danger">{{ $message }}</span>@enderror  
                  </div>           
           
               @if($this->type==0)
                <div class="input-group mt-4">
                  <span class="input-group-text">備註事項</span>
                  <textarea class="form-control" aria-label="With textarea" wire:model="s7"></textarea>
                </div>
                @error('s7') <span class="text-danger">{{ $message }}</span>@enderror
               @endif
                           
                 
              
                           
                </form>
              </div>
             <div class="modal-footer">
          <button  wire:click.prevent="cancel()" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
        <button wire:click.prevent="updateiat()" class="btn btn-primary">更新</button>
      </div>
           
       </div>
    </div>
  </div>
</div>




