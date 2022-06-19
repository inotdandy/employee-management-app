<template>
  <div>
        <div class="d-sm-flex align-items justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Employees</h1>
    </div>
    <div class="row mx-auto justify-content-center">
        <div class="card">
            <!-- @if(Session::has('success'))
              <div class="alert alert-success">
                {{ Session::get('success') }}
              </div>
            @endif
            @if(Session::has('error'))
              <div class="alert alert-danger">
                {{ Session::get('error') }}
              </div>
            @endif -->
            <div class="card-header d-flex justify-content-between align-items-center">
              <form class="form-inline" method="GET" action="">
                <div class="form-group mb-2">
                  <label for="search" class="sr-only">Search</label>
                  <input type="text" class="form-control p-2" id="search" name="search">
                </div>
                <button type="submit" class="btn btn-primary mb-2 ml-2">Search</button>
              </form>
                <router-link class="float-right ml-3" :to="{name:'employee.create'}">
                    Add new 
                </router-link>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Department</th>
                        <th scope="col">Date Hired</th>
                        <th scope="col">Manage</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td>
                              <a href="" class="btn btn-success">Edit/Delete</a>
                            </td>
                        </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
  </div>
</template>

<script>
export default {

}
</script>

<style>

</style>