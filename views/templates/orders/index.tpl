<!-- Title -->
<div class="row">
    <div class="col-lg-12 col-md-12">
        <h3>Orders management: List</h3>
    </div>
</div>

<!-- Form add -->
<div class="row">
    <form action="" method="get">
        <div class="col-md-3 col-xs-12">
            <div class="form-group">
                <label for="id">ID</label>
                <input name="id" type="text" class="form-control" id="id" placeholder="ID" value="{if isset($smarty.get.id)}{$smarty.get.id|escape}{/if}">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="login-id">LoginID</label>
                <input type="text" name="login_id" class="form-control" id="login-id" placeholder="LoginID" value="{if isset($smarty.get.login_id)}{$smarty.get.login_id|escape}{/if}">
            </div>
        </div>

        <div class="col-md-2 col-xs-12">
            <div style="position: relative; top: 25px;">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </div>
    </form>
</div>

<!-- Table -->
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 25px;">
        <!-- table table-striped table-bordered table-hover table-condensed -->
        <table class="table table-bordered table-hover table-condensed list table-striped">
            <thead>
            <th><input type="checkbox" class="checkbox" name="checkAll[]"></th>
            <th>ID</th>
            <th>LoginID</th>
            <th>Password</th>
            <th>Create date</th>
            <th>Update date</th>
            <th class="text-center">Action</th>
            </thead>
            <tbody class="tbl-content"> 
                
            </tbody>
        </table>
    </div>
</div>

<!-- Link delete all -->
<div class="row">
    <div class="col-lg-12 col-md-12">
        <a href="#" class="btn btn-danger">Delete All</a>
    </div>
</div>