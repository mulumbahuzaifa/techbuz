<div>
    <style>
    /* Black background section */
    .black-background {
      background-color: #000;
      height: 6cm; /* Adjust as needed */
    }

    /* Make the page mobile responsive */
    @media (max-width: 768px) {
      .black-background {
        height: auto; /* Adjust for mobile */
      }
    }
  </style>
    <section class="content">
        <!-- Black background section -->
        <div class="black-background"></div>
        <div class=" container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="pr-30">
                                <h3 class="card-title">All Blogs</h3>
                            </div>
                                <div><a href="{{ route('admin.addblog') }}" class="btn btn-success pull-right"> Add New Blog</a></div>
                        </div>
                        <div class="card-body">
                            @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                            @endif
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $blog)
                                        <tr>
                                            <td>{{ $blog->id }}</td>
                                            <td><img src="{{ asset('image/blogs') }}/{{ $blog->image }}" width="60" height="60" alt="{{ $blog->name }}"></td>
                                            <td>{{ $blog->title }}</td>
                                            <td>{{ $blog->created_at }}</td>
                                            <td>
                                                <a href="{{ route('admin.editblog', ['blog_slug'=> $blog->slug]) }}" ><i class="fa fa-edit fa-2x"></i></a>
                                                <a href="#" onclick="confirm('Are you sure, You want to delete this Blog') || event.stopImmediatePropagation()" wire:click.prevent="deleteBlog({{ $blog->id }})" style="margin-left: 20px"><i class="fa fa-times fa-2x text-danger"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                                {{ $blogs->links('pagination::bootstrap-4') }}

                        </div>
                      </div>
                   
                </div>
            </div>
        </div>
    </section>
</div>