  <div  wire:ignore.self class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg  border border-2 border-info">
    <div class="modal-content p-3 text-light" style="background-color:#003E52;" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">編輯學員資料</h5>
        <button type="button" wire:click="cancel()" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
        
      </div>
      <div class="modal-body">
                <form>
                  <div class="form-group border  border-info rounded p-2 m-3" >
                        <input type="hidden" wire:model="lead_id">
                        <label for="exampleFormControlInput1">lead</label>
                        <input type="text" class="form-control" wire:model="lead"  id="exampleFormControlInput1" value="lead" >
                        @error('lead') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group border  border-info rounded p-2 m-3" >
                        <label for="exampleFormControlInput2">姓名</label>
                        <input type="text" class="form-control" wire:model="name" id="exampleFormControlInput2" value="name" >
                        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </form>
            </div>
             <div class="modal-footer">
        <button  wire:click.prevent="cancel()" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
        <button wire:click.prevent="update()" class="btn btn-primary">更新</button>
      </div>
           
       </div>
    </div>
</div>


