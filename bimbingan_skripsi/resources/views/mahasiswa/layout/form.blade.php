<style>
    .row{
        margin: 10px;
    }
</style>
<div class="row">
    <div class="form-group  {{$errors->has('judul_skripsi')? 'has-error':""}}">
            @if($errors->has('judul_skripsi')) <span class="help-block">{{$errors->first('judul_skripsi')}}</span> @endif
        <label for="judul_skripsi" class="col-md-2 control-label">Judul</label>

        <div class="col-md-8">
            <input id="judul_skripsi" type="text" class="form-control" name="judul_skripsi" value="" autofocus>
        </div>
    </div>

</div>
<div class="row">
    <div class="form-group {{$errors->has('file_skripsi')? 'has-error':""}}">
            @if($errors->has('file_skripsi')) <span class="help-block">{{$errors->first('file_skripsi')}}</span> @endif
        <label for="file_skripsi" class="col-md-2 control-label">file</label>

        <div class="col-md-8">
            <input id="file_skripsi" type="file" class="form-control" name="file_skripsi" value="" autofocus>
        </div>

    </div>
</div>
<div class="row">
    <div class="form-group">
        <div class="col-md-8">
            <button id="upload" type="submit" class="btn btn-success" name="save" value="Upload" autofocus>
            Upload</button>
            </div>
        {{csrf_field()}}
    </div>
</div>
