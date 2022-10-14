
<div class="p-3">

@include('livewire.create1')
@include('livewire.update1')
@include('livewire.updateia')
@include('livewire.updateiap')
@include('livewire.updateiat')










  
  
        <div>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>

 <h4 class="text-center">學員儀器對照表系統</h4>


 <div class="w-25 mt-2 mb-2">
      <input  wire:model="search" type="search" class="form-control" id="kelvin" placeholder="搜尋lead OR name..." />

        </div>
        {{ csrf_field() }}

  <table class="table table-bordered mt-1 text-center">
        <thead>
            <tr>
               
                <th>lead</th>
                <th>姓名</th>
                <th>學員資料</th>
                <th>POST儀器</th>
                <th>OMT儀器</th>
                <th>OMT Table</th>
                <th>Show 對照表</th>
            
            </tr>
        </thead>
        <tbody>
             @forelse ($leads as  $key =>  $value)
            <tr>
              
                <td>{{ $value->lead }}</td>
                <td>{{ $value->name }}</td>
                <td>

                 <button type="button" wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm " data-bs-toggle="modal" data-bs-target="#exampleModal">
                 編輯</button>
                 
               
                <button wire:click="postdel({{ $value->id }})" class="btn btn-danger btn-sm ">刪除</button>
                </td>
                <td>
                    <p>
                        <button class="btn btn-outline-success btn-sm" data-bs-toggle="collapse" href="#collapseExample1{{ $key}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                          操作
                        </button>
                       
                      </p>
                      <div class="collapse" id="collapseExample1{{ $key }}">
                        <div class="card card-body">                   
                      
                    
                            <div> <span class="text-dark shdow-8">{{ $value->lead }}{{ $value->name }}-POST<div>
                             <button type="button" wire:click="editiap({{ $value->id }},0,'IA')" class="btn btn-outline-success " data-bs-toggle="modal" data-bs-target="#updateiap">
                                IA</button>
                             <button type="button" wire:click="editiap({{ $value->id }},1,'Fu1')" class="btn btn-outline-success"  data-bs-toggle="modal" data-bs-target="#updateiap">
                                Fu1</button>
                                 <button type="button" wire:click="editiap({{ $value->id }},2,'Fu2')" class="btn btn-outline-success " data-bs-toggle="modal" data-bs-target="#updateiap">
                                    Fu2</button>
                                  <button type="button" wire:click="editiap({{ $value->id }},3,'Fu3')" class="btn btn-outline-success " data-bs-toggle="modal" data-bs-target="#updateiap">
                                        Fu3</button>
                                    <button type="button" wire:click="editiap({{ $value->id }},4,'Fu4')" class="btn btn-outline-success " data-bs-toggle="modal" data-bs-target="#updateiap">
                                        Fu4</button>
                        
                    </div>
                </td>
                <td>
                    <p>
                        
                            <button class="btn btn-outline-primary btn-sm" data-bs-toggle="collapse" href="#collapseExample2{{ $key}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                              操作
                            </button>
                           
                          </p>
                          <div class="collapse" id="collapseExample2{{ $key }}">
                        <div class="card card-body">
                            <div> <span class="text-dark shdow-8">{{ $value->lead }}{{ $value->name }}-POST<div>
                            <button type="button" wire:click="editia({{ $value->id }},0,'IA')" class="btn btn-outline-warning " data-bs-toggle="modal" data-bs-target="#updateia">
                                IA</button>
                            <button type="button" wire:click="editia({{ $value->id }},1,'Fu1')" class="btn btn-outline-warning"  data-bs-toggle="modal" data-bs-target="#updateia">
                                Fu1</button>
                                <button type="button" wire:click="editia({{ $value->id }},2,'Fu2')" class="btn btn-outline-warning " data-bs-toggle="modal" data-bs-target="#updateia">
                                    Fu2</button>
                                     <button type="button" wire:click="editia({{ $value->id }},3,'Fu3')" class="btn btn-outline-warning " data-bs-toggle="modal" data-bs-target="#updateia">
                                        Fu3</button>
                             <button type="button" wire:click="editia({{ $value->id }},4,'Fu4')" class="btn btn-outline-warning " data-bs-toggle="modal" data-bs-target="#updateia">
                                        Fu4</button>
                    
                    </div>
                               
                           
                   
               
                </td>
                <td>  
                    <p>
                        <button class="btn btn-outline-danger btn-sm" data-bs-toggle="collapse" href="#collapseExample3{{ $key }}" role="button" aria-expanded="false" aria-controls="collapseExample">
                          操作
                        </button>
                       
                      </p>
                      <div class="collapse" id="collapseExample3{{ $key }}">
                        <div class="card card-body">
                            <div> <span class="text-dark shdow-8">{{ $value->lead }}{{ $value->name }}-OmtTable<div>
                            <button type="button" wire:click="editiat({{ $value->id }},0,'IA')" class="btn btn-outline-info " data-bs-toggle="modal" data-bs-target="#updateiat">
                                IA</button>
                            <button type="button" wire:click="editiat({{ $value->id }},1,'Fu1')" class="btn btn-outline-info"  data-bs-toggle="modal" data-bs-target="#updateiat">
                                Fu1</button>
                                 <button type="button" wire:click="editiat({{ $value->id }},2,'Fu2')" class="btn btn-outline-info " data-bs-toggle="modal" data-bs-target="#updateiat">
                                    Fu2</button>
                                   <button type="button" wire:click="editiat({{ $value->id }},3,'Fu3')" class="btn btn-outline-info " data-bs-toggle="modal" data-bs-target="#updateiat">
                                        Fu3</button>
                                    <button type="button" wire:click="editiat({{ $value->id }},4,'Fu4')" class="btn btn-outline-info " data-bs-toggle="modal" data-bs-target="#updateiat"  >
                                        Fu4</button>
                        </div>
                      </div>
                              
                            </div>
                </td>
                <td>  
                  <p>
                      <button class="btn btn-outline-secondary btn-sm" data-bs-toggle="collapse" href="#collapseExample4{{ $key }}" role="button" aria-expanded="false" aria-controls="collapseExample">
                        操作
                      </button>
                     
                    </p>
                    <div class="collapse" id="collapseExample4{{ $key }}">
                      <div class="card card-body">
                          <div> <span class="text-dark shdow-8">{{ $value->lead }}{{ $value->name }}-Show對照表<div>
                          <button type="button" wire:click="show({{ $value->lead  }},0,'IA')" class="btn btn-outline-info " >
                              IA</button>
                          <button type="button" wire:click="show({{ $value->lead  }},1,'Fu1')" class="btn btn-outline-info" >
                              Fu1</button>
                               <button type="button" wire:click="show({{ $value->lead  }},2,'Fu2')" class="btn btn-outline-info " >
                                  Fu2</button>
                                 <button type="button" wire:click="show({{ $value->lead  }},3,'Fu3')" class="btn btn-outline-info " >
                                      Fu3</button>
                                  <button type="button" wire:click="show({{ $value->lead  }},4,'Fu4')" class="btn btn-outline-info "  >
                                      Fu4</button>
                      </div>
                    </div>
                            
                          </div>
              </td>
             
                  @empty
           <h3>沒有任何一筆資料</h3>
            </tr>
           
           @endforelse
        </tbody>
        
   </table>
      {{ $leads->links() }}

     
</div>