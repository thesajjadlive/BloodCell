<div class="form-group">
    <input type="text" required class="form-control form-control-line @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name" data-msg="Please Write Your Name" />
    @error('name')
    <div class="pl-1 text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <input type="email" required class="form-control form-control-line @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" data-msg="Please Write Your Valid Email" />
    @error('email')
    <div class="pl-1 text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <input type="text" required class="form-control form-control-line @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Phone" data-msg="Please Write Your Phone Number" />
    @error('phone')
    <div class="pl-1 text-danger">{{ $message }}</div>
    @enderror
</div>


<div class="form-group">
    <input type="text" required class="form-control form-control-line @error('blood_group') is-invalid @enderror" id="blood_group" list="bgroup" name="blood_group" placeholder="Blood Group" data-msg="Please Select Your Blood Group" />
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


<div class="form-group">
    <input type="text" required class="form-control form-control-line @error('district') is-invalid @enderror" id="" list="district" name="district" placeholder="District" data-msg="Please Select Your District" />
    @include('admin.volunteer._district_list')
    @error('district')
    <div class="pl-1 text-danger">{{ $message }}</div>
    @enderror
</div>