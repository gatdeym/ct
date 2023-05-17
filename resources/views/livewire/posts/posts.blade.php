@if (session()->has('message'))
    <div class="alert alert-success col-md-3 mx-auto mt-3 text-center">
        {{ session('message') }}
    </div>
@endif

<div class="row justify-content-center py-3">
    <div class="col-md-4 mt-3">
        <div class="form-floating">
            <select class="form-select bg-light" wire:model="postCategory">
                <option value="" disabled>Select a Category</option>
                <option value="all">All</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                @endforeach
            </select>
            <label for="caliber" class="form-label text-dark">Select a Category</label>
        </div>
    </div>

    <div class="col-md-4 mt-3 mb-3">
        <div class="form-floating">
            <input type="text" class="form-control bg-light" placeholder="Search" wire:model="postSearch">
            <label for="search" class="form-label text-dark">Search</label>
        </div>
    </div>
</div>
<div class="container">
  <div class="row justify-content-center">
      @foreach ($posts as $post)
          <div class="col-md-6">
              <div class="card shadow-sm m-2 p-2" style="background-color: #f6cccc;">
                  <div class="card-header bg-secondary">
                      <h5 class="text-light mb-0">{{ $post->category->category }}</h5>
                  </div>
                  <div class="card-body text-center">
                      <h3 class="text-dark mb-0 mt-2" style="font-family: Georgia, 'Times New Roman', Times, serif;">{{ $post->title }}</h3>
                      <hr>
                      <p class="text-muted">{{ $post->content }}</p>
                  </div>
                  <div class="card-footer bg-light text-muted" style="font-size: 0.8rem;">
                      {{ $post->author }} on {{ $post->created_at }}
                  </div>
              </div>
          </div>
      @endforeach
  </div>
  <div class="offset-md-8 mt-4">
      {{ $posts }}
  </div>
</div>


<style>
  .card {
      transition: transform 0.3s;
  }

  .card:hover {
      transform: translateY(-5px);
  }
</style>
