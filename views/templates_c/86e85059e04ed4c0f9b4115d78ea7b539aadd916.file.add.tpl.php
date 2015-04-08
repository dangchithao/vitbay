<?php /* Smarty version Smarty-3.1.18, created on 2014-09-26 06:25:47
         compiled from ".\views\templates\users\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51795424eacb51bdf9-31994600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86e85059e04ed4c0f9b4115d78ea7b539aadd916' => 
    array (
      0 => '.\\views\\templates\\users\\add.tpl',
      1 => 1411575725,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51795424eacb51bdf9-31994600',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5424eacb571e12_27784284',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5424eacb571e12_27784284')) {function content_5424eacb571e12_27784284($_smarty_tpl) {?><!-- Title -->
<div class="row">
    <div class="col-lg-12 col-md-12">
        <h3>User management: Add</h3>
    </div>
</div>

<!-- Form add -->
<div class="row">
    <div class="col-lg-offset-4 col-md-offset-4 col-lg-4 col-md-4">
        <form role="form" action="" method="post">
            <div class="form-group">
                <label for="login-id">Login ID</label>
                <input type="text" name="login_id" class="form-control" id="login-id" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="login-pass">Password</label>
                <input type="text" name="login_pass" class="form-control" id="login-pass" placeholder="Password">
            </div>
            <div class="form-group c">
                <button type="submit" class="btn btn-primary col-lg-3 col-md-3">Add</button>
            </div>
        </form>
    </div>
</div>
<?php }} ?>
