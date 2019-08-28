@csrf
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label>Campaign Name <span class="text-danger">*</span></label>
            <input name="name" value="{{ old('name',isset($campaign)?$campaign->name:null) }}" class="form-control form-control-line @error('name') is-invalid @enderror" type="text">
            @error('name')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror
        </div>

    </div>


    <div class="col-sm-12">
        <div class="form-group">
            <label>Campaign Details <span class="text-danger">*</span></label>
            <textarea name="details" id="" cols="84" rows="5"  class="form-control form-control-line @error('details') is-invalid @enderror">{{ old('details',isset($campaign)?$campaign->details:null) }}</textarea>
            @error('details')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label>Venue <span class="text-danger">*</span></label>
            <input name="venue" value="{{ old('venue',isset($campaign)?$campaign->venue:null) }}" class="form-control form-control-line @error('venue') is-invalid @enderror" type="text">
            @error('venue')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label>Campaigning Date <span class="text-danger">*</span></label>
            <div class="cal-icon">
                <input name="date" value="{{ old('date',isset($campaign)?$campaign->date:null) }}" class=" form-control datetimepicker form-control-line @error('date') is-invalid @enderror " type="text">
                @error('date')
                <div class="pl-1 text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>



    <div class="col-sm-6">
        <div class="form-group">
            <label>Organizer <span class="text-info">(Optional)</span></label>
            <input name="organizer" class="form-control" type="text" value="{{ old('organizer',isset($campaign)?$campaign->organizer:null) }}">
        </div>
    </div>


    <div class="col-sm-6">
        <div class="form-group">
            <label>Avatar</label>
            <div class="profile-upload">
                <div class="upload-img">
                    <img alt="" src="assets/img/user.jpg">
                </div>
                <div class="upload-input">
                    <input type="file" class="form-control">
                </div>
            </div>
        </div>
    </div>

</div>
<div class="form-group">
    @php
        if(old("status")){
            $status = old('status');
        }elseif(isset($campaign)){
            $status = $campaign->status;
        }else{
            $status = null;
        }
    @endphp
    <label for="status" class="display-block">Status</label>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="status" id="active" value="Active" @if($status =='Active') checked @endif>
        <label  class="form-check-label" for="active">
            Active
        </label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="status" id="inactive" value="Inactive" @if($status =='Inactive') checked @endif>
        <label class="form-check-label" for="inactive">
            Inactive
        </label>
    </div>
    @error('status')
    <div class="pl-1 text-danger">{{ $message }}</div>
    @enderror
</div>
