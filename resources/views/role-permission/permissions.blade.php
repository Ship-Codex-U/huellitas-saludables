<x-app-layout :assets="$assets ?? []" :titleSubHeader="$titleSubHeader" :descriptionSubHeader="$descriptionSubHeader">
<div>
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title mb-0">Roles y Permisos</h4>
               </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th></th>
                                    @foreach ($roles as $role)
                                        <th class="text-center">{{ $role->title }}
                                        <div style="float:right;">
                                        </div>
                                        </th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permissions as $permission)
                                <tr class="{{ !isset($permission->parent_id) ? 'bg-body' : '' }}">
                                    <td>{{ $permission->title }}
                                    <div style="float:right;">
                                    </div>
                                    </td>
                                    @foreach ($roles as $role)
                                        <td class="text-center">
                                            <input class="form-check-input" type="checkbox" id="role-{{$role->id}}-permission-{{$permission->id}}" readonly name="permission[{{$permission->name}}][]" value='{{$role->name}}'
                                            {{ (AuthHelper::checkRolePermission($role,$permission->name)) ? 'checked' : '' }}>
                                        </td>
                                    @endforeach
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="text-center">
                        </div>
                </div>
            </div>
         </div>
      </div>
   </div>
</div>
</x-app-layout>
