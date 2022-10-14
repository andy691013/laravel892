<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#creat1">
 創建學員
</button>


<!-- Modal -->
<div wire:ignore.self class="modal fade" id="creat1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg  border border-2 border-info">
        <div class="modal-content p-3 text-light" style="background-color:#003E52;" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">創建學員</h5>
        <button type="button" wire:click="cancel()" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
           <div class="modal-body">
                <form>
                    <div class="form-group border  border-info rounded p-2 m-3" >
                        <label for="exampleFormControlInput1">lead</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter lead" wire:model="lead">
                        @error('lead') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group border  border-info rounded p-2 m-3" >
                        <label for="exampleFormControlInput2">姓名</label>
                         <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name" wire:model="name">
                        @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"  wire:click.prevent="cancel()" data-bs-dismiss="modal">關閉</button>
                <button type="button" class="btn btn-primary"  wire:click.prevent="store()">創建</button>
               
            </div>
        </div>
    </div>
</div>