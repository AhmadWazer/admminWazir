<x-admin-layout>
    <x-slot name="pageName">{{ $pageName }}</x-slot>
        <x-slot name="breadCrumbs">
            <x-admin.breadcrumbs :pageName="$pageName" :breadCrumbs="$breadCrumbs"/>
        </x-slot>
    <div class="dealership-form">
        <form class="myform" method="POST" action="{{!empty($useraccount)? route('admin.useraccount.update', ['id' => $useraccount->id]) : route('admin.useraccount.store') }}">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{@$useraccount->name}}" required>
              </div>
              <div class="form-group col-md-6">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email" value="{{@$useraccount->email}}" required>
              </div>
              <div class="form-group col-md-6">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="********">
                <small>Leave empty to keep current password</small>
              </div>
              <div class="form-group col-md-6">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" placeholder="*********">
              </div>
              <div class="form-group col-md-6">
                <label>Is_Admin</label>
                <input type="text" name="is_admin" class="form-control" placeholder="enter one(1) for admin and zero(0) for user" value="{{@$useraccount->is_admin}}" required>
                <small>0:student, 1:admin, 2:teacher, 3:parent, 4:librarin, 5:accountent</small>
              </div>

              <!-- <div class="form-group col-md-6">
                <label>Status</label>
                <input type="text" name="status" class="form-control" placeholder="active or pending" value="{{@$useraccount->status}}" required>
                <small>if status is pending user will not login</small>
              </div> -->
                <div class="clearfix"></div>
                <div class="form-group col-md-6">
                    <label>Status</label>
                    <select class="form-control" name='status' id="status" required>
                        <option value="{{@$useraccount->status}}">{{@$useraccount->status}}</option>
                        <option value="pending">pending</option>
                        <option value="active">active</option>
                    </select>
                    <small>if status is pending user will not login</small>
                </div>
                <div class="form-group col-md-6">
                  <label for="roles">Roles</label>
                <select class="form-control" name='roles' id="roles" required>
                        <option value="{{@$useraccount->role}}">{{@$useraccount->role}}</option>
                        @foreach($role as $data)
                        <option value="{{$data->name}}">{{$data->name}}</option>
                        @endforeach
                </select>
                </div>
              <div class="col-md-12">
                <div class="cus-btn text-right">
                    <a href="{{ route('admin.dashboard') }}" class="cancle-btn">Back</a>
                    <button type="submit" class="send-btn">Submit</button>
                </div>
              </div>
            </div>

          </form>
      </div>
    <x-slot name="pluginCss"></x-slot>
</x-admin-layout>
