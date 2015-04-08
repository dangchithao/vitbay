<?php /* Smarty version Smarty-3.1.18, created on 2014-09-26 09:01:03
         compiled from ".\views\templates\orders\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56855424eab7d48195-46557732%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abda826acec2cfa083f03da6a422a728d453c481' => 
    array (
      0 => '.\\views\\templates\\orders\\index.tpl',
      1 => 1411714859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56855424eab7d48195-46557732',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5424eab7d7aaa4_66708070',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5424eab7d7aaa4_66708070')) {function content_5424eab7d7aaa4_66708070($_smarty_tpl) {?><!-- Title -->
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
                <input name="id" type="text" class="form-control" id="id" placeholder="ID" value="<?php if (isset($_GET['id'])) {?><?php echo htmlspecialchars($_GET['id'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="login-id">LoginID</label>
                <input type="text" name="login_id" class="form-control" id="login-id" placeholder="LoginID" value="<?php if (isset($_GET['login_id'])) {?><?php echo htmlspecialchars($_GET['login_id'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
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
</div><?php }} ?>
