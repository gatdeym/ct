<div>
<div class="container mt-4">
  <div class="row justify-content-center">
    <div class="col-lg-8 col-xl-12">
      <div class="card border-0 shadow">
        <div class="card-header bg-dark text-white">
          <h3 class="text-center mb-0"><strong>Categories</strong></h3>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-striped text-center">
            <thead>
              @if (session()->has('message'))
              <div class="alert alert-success text-center">{{ session('message') }}</div>
          @endif
              <tr class="bg-secondary text-white">
                <th>Category</th>
                <th>Remarks</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($categories as $category)
                <tr>
                  <td>{{ $category->category }}</td>
                  <td>{{ $category->remarks }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
          <div class="text-end">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newCategoryModal">New Category</button>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>

 
    <div wire:ignore.self class="modal fade" id="newCategoryModal" tabindex="-1" aria-labelledby="newCategory" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header bg-dark theadclr">
                     <h1 class="modal-title fs-5" id="newCategory">Add New Category</h1>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body bgcolor">
                     <div class="form-group">
                         <label for="exampleFormControlInput1">Category</label>
                         <input type="text" class="form-control" wire:model="category">
                     </div>
                     <div class="form-group">
                         <label for="exampleFormControlInput2">Remark</label>
                         <textarea class="form-control form-control-lg" wire:model="remarks"></textarea>
                     </div>
                 </div>
                 <div class="modal-footer bghdcolor">
                     <button type="button" class="btn addcatebtnclr bg-primary text-white" data-bs-dismiss="modal" wire:click.prevent="store()">Add Category</button>
                 </div>
                 
             </div>
         </div>
     </div>
 </div>