<div class="form-group {{ $errors->has('Userid') ? 'has-error' : ''}}">
    <label for="Userid" class="control-label">{{ 'Userid' }}</label>
    <input class="form-control" name="Userid" type="number" id="Userid" value="{{ isset($formproduct->Userid) ? $formproduct->Userid : ''}}" >
    {!! $errors->first('Userid', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Kategori') ? 'has-error' : ''}}">
    <label for="Kategori" class="control-label">{{ 'Kategori' }}</label>
    <input class="form-control" name="Kategori" type="text" id="Kategori" value="{{ isset($formproduct->Kategori) ? $formproduct->Kategori : ''}}" >
    {!! $errors->first('Kategori', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Isi') ? 'has-error' : ''}}">
    <label for="Isi" class="control-label">{{ 'Isi' }}</label>
    <input class="form-control" name="Isi" type="text" id="Isi" value="{{ isset($formproduct->Isi) ? $formproduct->Isi : ''}}" >
    {!! $errors->first('Isi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Ukuran') ? 'has-error' : ''}}">
    <label for="Ukuran" class="control-label">{{ 'Ukuran' }}</label>
    <input class="form-control" name="Ukuran" type="text" id="Ukuran" value="{{ isset($formproduct->Ukuran) ? $formproduct->Ukuran : ''}}" >
    {!! $errors->first('Ukuran', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Expired') ? 'has-error' : ''}}">
    <label for="Expired" class="control-label">{{ 'Expired' }}</label>
    <input class="form-control" name="Expired" type="text" id="Expired" value="{{ isset($formproduct->Expired) ? $formproduct->Expired : ''}}" >
    {!! $errors->first('Expired', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Berat') ? 'has-error' : ''}}">
    <label for="Berat" class="control-label">{{ 'Berat' }}</label>
    <input class="form-control" name="Berat" type="text" id="Berat" value="{{ isset($formproduct->Berat) ? $formproduct->Berat : ''}}" >
    {!! $errors->first('Berat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Deskripsi') ? 'has-error' : ''}}">
    <label for="Deskripsi" class="control-label">{{ 'Deskripsi' }}</label>
    <input class="form-control" name="Deskripsi" type="text" id="Deskripsi" value="{{ isset($formproduct->Deskripsi) ? $formproduct->Deskripsi : ''}}" >
    {!! $errors->first('Deskripsi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Nama') ? 'has-error' : ''}}">
    <label for="Nama" class="control-label">{{ 'Nama' }}</label>
    <input class="form-control" name="Nama" type="text" id="Nama" value="{{ isset($formproduct->Nama) ? $formproduct->Nama : ''}}" >
    {!! $errors->first('Nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('File') ? 'has-error' : ''}}">
    <label for="File" class="control-label">{{ 'File' }}</label>
    <input class="form-control" name="File" type="text" id="File" value="{{ isset($formproduct->File) ? $formproduct->File : ''}}" >
    {!! $errors->first('File', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Created_at') ? 'has-error' : ''}}">
    <label for="Created_at" class="control-label">{{ 'Created At' }}</label>
    <input class="form-control" name="Created_at" type="datetime-local" id="Created_at" value="{{ isset($formproduct->Created_at) ? $formproduct->Created_at : ''}}" >
    {!! $errors->first('Created_at', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Created_by') ? 'has-error' : ''}}">
    <label for="Created_by" class="control-label">{{ 'Created By' }}</label>
    <input class="form-control" name="Created_by" type="text" id="Created_by" value="{{ isset($formproduct->Created_by) ? $formproduct->Created_by : ''}}" >
    {!! $errors->first('Created_by', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Stock') ? 'has-error' : ''}}">
    <label for="Stock" class="control-label">{{ 'Stock' }}</label>
    <input class="form-control" name="Stock" type="number" id="Stock" value="{{ isset($formproduct->Stock) ? $formproduct->Stock : ''}}" >
    {!! $errors->first('Stock', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Harga') ? 'has-error' : ''}}">
    <label for="Harga" class="control-label">{{ 'Harga' }}</label>
    <input class="form-control" name="Harga" type="number" id="Harga" value="{{ isset($formproduct->Harga) ? $formproduct->Harga : ''}}" >
    {!! $errors->first('Harga', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
