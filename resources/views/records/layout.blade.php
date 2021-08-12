<div class="form-group">
    <label for="from">From</label>
    <input type="text" value="{{ $record->from}}" class="form-control @error('from') is-invalid @enderror" name="from"/>
    @error('from')
        <strong class="text-danger">{{ $message }}</strong>
    @enderror
</div> 
<div class="form-group">
    <label for="to">To</label>
    <input type="text" value="{{ $record->to}}" class="form-control @error('to') is-invalid @enderror" name="to"/>
    @error('to')
        <strong class="text-danger">{{ $message }}</strong>
    @enderror
</div>
<div class="form-group">
    <label for="initial_kilometers">Inital Kilometers</label>
    <input id="initial_kilometers"type="number" value="{{ $record->initial_kilometers}}" class="form-control @error('initial_kilometers') is-invalid @enderror" name="initial_kilometers"/>
    @error('initial_kilometers')
        <strong class="text-danger">{{ $message }}</strong>
    @enderror
</div>         
<div class="form-group">
    <label for="final_kilometers">Final Kilometers</label>
    <input id="final_kilometers" type="number" value="{{ $record->final_kilometers}}" class="form-control @error('final_kilometers') is-invalid @enderror" name="final_kilometers" />
    @error('final_kilometers')
        <strong class="text-danger">{{ $message }}</strong>
    @enderror
</div>     
<div class="form-group">
    <label for="total_kilometers">Total Kilometers</label>
    <input id="total_kilometers"type="number" value="{{ $record->total_kilometers}}" class="form-control @error('total_kilometers') is-invalid @enderror" name="total_kilometers" readonly/>
    @error('total_kilometers')
        <strong class="text-danger">{{ $message }}</strong>
    @enderror
</div>     