@extends('layout.app')

@section('content')

    <div class="d-flex flex-column align-items-center justify-content-center">
        <div class="bg-light px-5 w-100 py-3 text-center mb-2">
            <h3 class="font-weight-bold">Create Notices</h3>
        </div>

        <div class="w-50">
            <form action="{{ route('createNotice') }}" method="post">
                @csrf
                <div class="mb-4 mt-2">
                    <label for="title" class="sr-only">Title</label>
                    <input name="title" class="form-control w-100 rounded-lg border border-dark p-4" type="text" placeholder="Notice Title" value="{{ old('title') }}">
                    @error('title')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="form-group">
                        <label class="sr-only" for="body">Body</label>
                        <textarea name="body" id="editor" placeholder="Notice Body"></textarea>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="department" class="sr-only">Department</label>
                    <select name="department" class="custom-select border border-dark">
                        <option value="{{ auth()->user()->department }}">{{ auth()->user()->department }}</option>
                      </select>
                      @error('department')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <button type="submit" style="background-color:rgb(128,33,33)" class="btn text-light font-weight-bold px-4 py-3 rounded w-100">Create</button>
                </div>
            </form>
        </div>
        
    </div>

@endsection

@section('ck-editor')
<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection