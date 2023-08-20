<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class UserController extends Controller
{
    //
    public function index(){

//       creating role
/*
             Role::create(['name' => 'writer']);
*/

//      creating permission
/*
            Permission::create(['name' => 'edit articles']);
*/






//      Assign Role Permission
/*
        $writer = 'writer';

        $role =  Role::query()->where('name',$writer)->first();

        $permission = Permission::query()->where('id',1)->first();

        $role->givePermissionTo($permission);

        $permission->assignRole($role);

*/
// remove role permission
/*
        $role->revokePermissionTo($permission);
        $permission->removeRole($role);
*/

//    giving user a permission
/*
        $userName = 'Roozbeh';
        $user =  User::query()->where('name',$userName)->first();
        $role = Role::where('name', 'writer')->first();
*/


// Assign the role to the user
/*
        $user->assignRole($role->id);
 */


//  getting permissions name
/*
      $permissionNames = $user->getPermissionNames(); // collection of name strings
*/



//  getting user with roles
/*
        User::with('roles')->first();
 */




//        getting user with permissions
/*
       User::with('permissions')->get();
*/





//    getting roles name who are writer
/*
          User::with('roles')->get()->filter(
            fn ($user) => $user->roles->where('name', 'writer')->toArray()
        )->count();

*/


//      giving role a permission
/*
          creating a permission
        Permission::create(['name' => 'update articles']);
        Permission::create(['name' => 'delete articles']);
        $writer = 'writer';

          giving permission to a user
        $user = User::query()->where('name','Roozbeh')->first();
        $user->givePermissionTo('update articles');

          checking if user has permission
        echo $user->hasPermissionTo('update articles');
        $writer = 'writer';

         giving role permission
        $role =  Role::query()->where('name',$writer)->first();
        $role->givePermissionTo('update articles');

        this is the multiple permission given to a role
        $role->syncPermissions(['edit articles', 'delete articles']);
*/

    }
}
