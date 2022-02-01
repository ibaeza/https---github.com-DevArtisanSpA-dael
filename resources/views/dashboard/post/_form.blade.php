
            
            @csrf

            <div class="form-group">
                <label for="title"> Titulo: </label>
                <input class="form-control" type="text" name="title" id="title" value="{{old('title',$post->title)}}">
                
                @error('title')
                    <small class="text-danger">{{$message}}</small>    
                @enderror

            </div><br />
            <div class="form-group">
                <label for="url_clean"> Url Limpia: </label>
                <input class="form-control" type="text" name="url_clean" id="url_clean" value="{{old('url_clean',$post->url_clean)}}">
            </div><br />

            <div class="form-group">
                <label for="category_id"> Categoría: </label>

                <select class="form-control" name="category_id" id="category_id">
                    @foreach ($categories as $title=>$id)
                        <option {{$post->category_id == $id ? 'selected="selected"' : ''}} value="{{$id}}">{{$title}}</option>
                    @endforeach
                </select>

            </div><br />

            <div class="form-group">
                <label for="posted"> Posted: </label>
                <select class="form-control" name="posted" id="posted_id">
                    @include('dashboard.partials.option-yes-not',['val' => $post->posted])
                </select>

            </div><br />

            <div class="form-group">
                <label for="content" class="form-label">Contenido</label>
                <textarea class="form-control" id="content" rows="3" name="content">{{old('content',$post->content)}}</textarea>
            </div><br />

            <input type="submit" value="Postear" class="btn btn-primary">