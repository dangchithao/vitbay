<?php /* Smarty version Smarty-3.1.18, created on 2014-09-26 06:25:30
         compiled from ".\views\templates\users\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19695424eaba34ed83-78781909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9f191abbc1418c1523f49044aa9ae51598e8cba' => 
    array (
      0 => '.\\views\\templates\\users\\index.tpl',
      1 => 1411705469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19695424eaba34ed83-78781909',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5424eaba416a55_73804529',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5424eaba416a55_73804529')) {function content_5424eaba416a55_73804529($_smarty_tpl) {?><!-- Title -->
<div class="row">
    <div class="col-lg-10 col-md-10">
        <h3>User management: List</h3>
    </div>
    <div class="col-lg-2 col-md-2 text-right">
        <a href="/users/add.html" class="btn btn-success col-lg-12 btn-lg">Add</a>
    </div>
</div>

<!-- Form add -->
<div class="row">
    <form action="/users.html" method="get">
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
                <?php  $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->key => $_smarty_tpl->tpl_vars['arr']->value) {
$_smarty_tpl->tpl_vars['arr']->_loop = true;
?>
                    
                    <tr>
                        <td><input type="checkbox" class="checkbox" name="check[]"></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['login_id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['login_pass'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['cre_date'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['upd_date'];?>
</td>
                        <td class="col-lg-2 text-center">
                            <input type="button" name="Edit" class="btn btn-primary" value="Edit"/>
                            <input type="button" name="Edit" class="btn btn-danger" value="Delete"/></td>
                    </tr>
                <?php } ?>
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
