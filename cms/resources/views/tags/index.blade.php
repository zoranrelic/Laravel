@extends('layouts.app')


@section('content')
    <div class="d-flex justify-content-left">

    <a href="{{ route('tags.create')}}" class="btn btn-success float-right">Add tag</a>

    </div>
    <div class="card card-default">
        <div class="card-header">Categories</div>
        <div class="card-body">
            @if ($tags->count() > 0)

            <table class="table">
                <thead>
                    <th>Name</th>
                    <th>Post Count</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)

                        <tr>
                            <td>
                                {{ $tag->name }}
                            </td>
                            <td>
                                {{ $tag->posts->count()}}
                            </td>
                            <td>
                                <a href=" {{ route('tags.edit', $tag->id) }}" class="btn btn-info btn-small">Edit</a>
                                <button class=" btn btn-danger btn-small" onclick="handleDelete( {{ $tag->id }})">Delete</button>
                            </td>
                        </tr>
                        
                    @endforeach
                    
                </tbody>
            </table>

             
            
            <!-- Modal -->
            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <form action="" method="POST" id="deleteCategoryForm">
                    @csrf
                    @method('DELETE')
                    

                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                        </div>
                        <div class="modal-body">
                            <p class="text-center text-bold">
                                Are you sure that you want to delete this Category?
                            </p>
                        
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, go back</button>
                        <button type="submit" class="btn btn-danger">Yes, Delete</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>

            @else
                <h3 class="text-center">No tags at this moment</h3>
            @endif
            
        </div>
    </div>
    
@endsection

@section('scripts')

<script>
    function handleDelete(id) {
        
        var form = document.getElementById('deleteCategoryForm')
        form.action = '/tags/' + id
        
        $('#deleteModal').modal('show');
    }
</script>
    
@endsection