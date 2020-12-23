<?php
/* Smarty version 3.1.30, created on 2020-12-23 17:53:19
  from "C:\xampp\htdocs\zadanie51\app\CalcView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5fe375ffa63a30_15594476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac28352352784e9e776788806b1d8fefbdf57166' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zadanie51\\app\\CalcView.html',
      1 => 1608742294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/main.html' => 1,
  ),
),false)) {
function content_5fe375ffa63a30_15594476 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12101158185fe375ffa55d75_28036844', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11500087375fe375ffa635b2_63240223', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../templates/main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_12101158185fe375ffa55d75_28036844 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
MD<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_11500087375fe375ffa635b2_63240223 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h3>Kalkulator Kredytowy</h3>


<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
    <fieldset>
        <label>Kwota: </label>
        <input type="number" placeholder="Kwota" min="1" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
"/><br/>
        <label>Na ile czasu(w latach) </label>
        <input type="number" min="1" placeholder="Ilosc lat" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
"/><br/>
        <label>Oprocentowanie("prosze podać procenty (5%=5)) </label>
        <input type="number" min="1" placeholder="Oprocentowanie" name="z" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->z;?>
"/><br/>
    </fieldset>
    <button type="submit" class="pure-button pure-button-primary">Oblicz</button>
</form>

<div class="messages">

    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
    <h4>Wystąpiły błędy: </h4>
    <ol class="err">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
        <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ol>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
    <h4>Informacje: </h4>
    <ol class="inf">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
        <li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ol>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
    <h4>Wynik</h4>
    <p class="res">Miesięczna rata: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
zł
    </p>
    <?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}
