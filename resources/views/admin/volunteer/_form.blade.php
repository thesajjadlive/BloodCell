@csrf
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label>Volunteer Name <span class="text-danger">*</span></label>
            <input name="name" value="{{ old('name',isset($volunteer)?$volunteer->name:null) }}" class="form-control form-control-line @error('name') is-invalid @enderror" type="text">
            @error('name')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label>Volunteer Email <span class="text-danger">*</span></label>
            <input name="email" value="{{ old('email',isset($volunteer)?$volunteer->email:null) }}" class="form-control form-control-line @error('email') is-invalid @enderror" type="email">
            @error('email')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror
        </div>

    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label>Phone <span class="text-danger">*</span></label>
            <input name="phone" value="{{ old('phone',isset($volunteer)?$volunteer->phone:null) }}" class="form-control form-control-line @error('phone') is-invalid @enderror" type="text">
            @error('phone')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror
        </div>

    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label>Blood Group <span class="text-danger">*</span></label>
            <input name="blood_group" value="{{ old('blood_group',isset($volunteer)?$volunteer->blood_group:null) }}" list="bgroup" class="form-control form-control-line @error('blood_group') is-invalid @enderror" type="text">
            <datalist id="bgroup">
                <option value="A+"></option>
                <option value="A-"></option>
                <option value="B+"></option>
                <option value="B-"></option>
                <option value="O+"></option>
                <option value="O-"></option>
                <option value="AB+"></option>
                <option value="AB-"></option>
            </datalist>

            @error('blood_group')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror
        </div>

    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label>Street Address <span class="text-danger">*</span></label>
            <input name="street_address" value="{{ old('street_address',isset($volunteer)?$volunteer->street_address:null) }}" class="form-control form-control-line @error('street_address') is-invalid @enderror" type="text">
            @error('street_address')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror
        </div>

    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label>District <span class="text-danger">*</span></label>
            <input name="district" value="{{ old('district',isset($volunteer)?$volunteer->district:null) }}" list="district" class="form-control form-control-line @error('district') is-invalid @enderror" type="text">
            @include('admin.volunteer._district_list')
            @error('district')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror
        </div>

    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label>Existing Image <span class="text-danger"></span></label>
            @if(isset($volunteer) && $volunteer->file != null)
                <img style="height: 100px; width: 100px" src="{{ asset($volunteer->file) }}" alt="">
            @endif
        </div>
    </div>



    <div class="col-sm-6">
        <div class="form-group">

            <label>Upload new Image <span class="text-danger"></span></label>

            <input name="file"  class="form-control form-control-line @error('file') is-invalid @enderror" type="file">
            @error('file')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

</div>


<div class="col-sm-6">
    <div class="form-group">
        @php
            if(old("gender")){
                $gender = old('gender');
            }elseif(isset($volunteer)){
                $gender = $volunteer->gender;
            }else{
                $gender = null;
            }
        @endphp
        <label for="gender" class="display-block">Gender</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="male" value="Male" @if($gender =='Male') checked @endif>
            <label  class="form-check-label" for="male">
                Male
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="female" value="Female" @if($gender =='Female') checked @endif>
            <label class="form-check-label" for="female">
                Female
            </label>
        </div>
        @error('gender')
        <div class="pl-1 text-danger">{{ $message }}</div>
        @enderror
    </div>

</div>

<div class="col-sm-6">
    <div class="form-group">
        @php
            if(old("status")){
                $status = old('status');
            }elseif(isset($volunteer)){
                $status = $volunteer->status;
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
</div>

