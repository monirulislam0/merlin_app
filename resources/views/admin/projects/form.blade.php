<div class="form-body">
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label for="first-name-vertical">Title</label>
                <input type="text" id="first-title-vertical"
                       class="form-control @error('title') is-invalid @enderror"
                       name="title"  value="{{ old('title',(isset($project->title)) ? $project->title: '' )}}" placeholder="Enter project title">
                @if(isset($project->id))
                    <input type="hidden" name="id" value="{{ $project->id }}">
                @endif
                @error('title')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="first-author-vertical">Author Name</label>
                <input type="text" id="first-author-vertical"
                       class="form-control @error('author') is-invalid @enderror"
                       name="author"  value="{{ old('author',(isset($project->author)) ? $project->author: '' )}}" placeholder="Enter author">
                @if(isset($project->id))
                    <input type="hidden" name="id" value="{{ $project->id }}">
                @endif
                @error('author')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="origin">Origin</label>
                <input type="text" id="origin"
                       class="form-control @error('origin') is-invalid @enderror"
                       name="origin"  value="{{ old('origin',(isset($project->origin)) ? $project->origin: '' )}}" placeholder="Enter origin">
                @if(isset($project->id))
                    <input type="hidden" name="id" value="{{ $project->id }}">
                @endif
                @error('origin')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="published_date">Published Date</label>
                <input type="text" id="published_date"
                       class="form-control @error('published_date') is-invalid @enderror"
                       name="published_date"  value="{{ old('published_date',(isset($project->published_date)) ? $project->published_date: '' )}}" placeholder="Enter published date">
                @if(isset($project->id))
                    <input type="hidden" name="id" value="{{ $project->id }}">
                @endif
                @error('published_date')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="sorting">Sorting</label>
                <input type="text" id="sorting"
                       class="form-control @error('sorting') is-invalid @enderror"
                       name="sorting"  value="{{ old('sorting',(isset($project->sorting)) ? $project->sorting: '' )}}" placeholder="Enter project sort">
                @if(isset($project->id))
                    <input type="hidden" name="id" value="{{ $project->id }}">
                @endif
                @error('sorting')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <fieldset class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image">
                @error('image')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </fieldset>
            @if(isset($project->image))
                <img src="{{ asset('storage/'.$project->image) }}" width="100px">
            @endif
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="short_desc">Short</label>
                <textarea class="form-control @error('short') is-invalid @enderror" name="short" id="short_desc">
                    {{ old('short',(isset($project->short)) ? $project->short: '' )}}
                </textarea>
                @if(isset($project->id))
                    <input type="hidden" name="id" value="{{ $project->id }}">
                @endif
                @error('short')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control @error('detail') is-invalid @enderror" name="detail" id="description">
                    {{ old('detail',(isset($project->detail)) ? $project->detail: '' )}}
                </textarea>
                @if(isset($project->id))
                    <input type="hidden" name="id" value="{{ $project->id }}">
                @endif
                @error('detail')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <div class="checkbox">
                    <input type="checkbox" class="checkbox-input" id="status"
                           name="status" {{ (isset($project->status) && $project->status) ? 'checked': '' }}>
                    <label for="status">Activation</label>
                </div>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
            <a type="reset" href="{{ route('admin.project.index') }}" class="btn btn-light-secondary mr-1 mb-1">Reset</a>
        </div>
    </div>
</div>
